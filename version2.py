import socket 
import time
import mysql.connector
bufferSize=1024
ServerPort=2222
ServerIP='10.4.2.157'
RPIServer=socket.socket(socket.AF_INET,socket.SOCK_DGRAM)
RPIServer.bind((ServerIP,ServerPort))
while True:
    connection = mysql.connector.connect(
    host="localhost",
    user="root",
    password="",
    database="cmr rfid")
    cursor = connection.cursor()

    print('server listening')
    cmd,adress=RPIServer.recvfrom(bufferSize)
    cmd=cmd.decode('utf-8')
    
    print('clien adress',adress[0])
    data='its me PC'
    data=data.encode('utf-8')
    RPIServer.sendto(data,adress)
    var=(cmd,)  
    cursor.execute("select RFID from attend")
    rows=cursor.fetchall()
    print(cmd)
    
    try:

        if (var in rows)==False:
            cursor.execute("select tb,dim from etat where RFID='"+cmd+"'") 
            row_1= cursor.fetchall()
            cursor.execute("INSERT INTO `attend` (`id`, `tb`, `dim`, `RFID`) VALUES (NULL, '"+row_1[0][0]+"', '"+row_1[0][1]+"', '"+cmd+"')")
            connection.commit()
    except:
       print("Tabel not in the fleet")
    
    time.sleep(2)
    cursor.close()
    connection.close()
