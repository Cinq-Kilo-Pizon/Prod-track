<?php 
session_start();
if($_SESSION["id"]){

error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="style.css">
  <title>hist</title>
</head>

<body style="background: url(Untitled-1.png);">


<br> <br> <br> <br> <br> <br> <br> <br> <br> <br>

 <table style="background:white ;" class="button-54">
            <tr id="items">
                <th>Nom</th>
                <th>Zone</th>
                <th>ID RFID </th>
                <th>Date </th>
                
            </tr> 

            <?php 
                
                include_once "connection.php";
                
                $req = mysqli_query($con , "SELECT * FROM historique");
                if(mysqli_num_rows($req) == 0){
                    ?> 
                    <br>
                    <div style="background: #7E7E7E  ;" class="msg">
                    
                     <?php
                   
                    echo "Il n'y a pas encore de objet ajouter !" ; ?> </div> 
                    <?php
                    
                }else {
                   
                   $req = mysqli_query($con , "SELECT * FROM historique ORDER BY date DESC");
                    while($row=mysqli_fetch_assoc($req)){
                        ?>
                        <tr>
                            <td><?=$row['ref_nom']?></td>
                            <td><?=$row['zone']?></td>
                            <td><?=$row['id_rfid']?></td>
                            <td> <?=$row['date']   ?></td>
                            

                          
                        </tr>
                        <?php
                    }
                    
                }
            ?>

        </table>



<nav class="na">
             <ul class="block">
             
              <a href="home.php" style="color:black;"><li class="home" >  home  <img src="images/home.png">   </li></a>
               <a href="logout.php"><li class="home" style="color:black;" >logout<img src="images/log.png"> </li></a> 
               <li class="home" style="color:black;" ><?php echo $_SESSION["name"]; ?> <img src="images/prof.png"> </li>
             </ul>
           </nav>

</body>
</html>


<style type="text/css">

/* CSS */
.button-54 {
	margin: -50px auto ;
  font-family: "Open Sans", sans-serif;
  font-size: 16px;
  letter-spacing: 2px;
  text-decoration: none;
  text-transform: uppercase;
  color: #000;
  cursor: pointer;
  border: 3px solid;
  padding: 0.25em 0.5em;
  box-shadow: 1px 1px 0px 0px, 2px 2px 0px 0px, 3px 3px 0px 0px, 4px 4px 0px 0px, 5px 5px 0px 0px;
  position: relative;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-5:active {
  box-shadow: 0px 0px 0px 0px;
  top: 5px;
  left: 5px;
}

@media (min-width: 768px) {
  .button-5 {
    padding: 0.25em 0.75em;
  }
}
nav ul li {
    list-style: none ;
  }
  .block {
  padding: 1rem 0 ;
  display: flex;
  justify-content: flex-end;
  align-items: center;
}
.home {

  padding: 1.3em 3em;
  font-size: 12px;
  
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #000;
  background-color: #fff;
  border: none;
  border-radius: 45px;
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
}

.home:hover {
  background-color: #787878;
  box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
  color: #fff;
  transform: translateY(-7px);

}

.home:active {
  transform: translateY(-1px);
}
  .block{
  border:0;
  background: transparent;
  color:white;
  

  position: relative;
  overflow: hidden;
  padding: 20px 50px;
  border-radius: 30px ;
  cursor: pointer;
  font-size: 1.5em ;
  box-shadow: 0px -0px 0px 0px rgba(143,64,248,.5),0px 0px 0px 0px rgba(39,200,255,.5);
  transition:  all .2s ;}
  .na{
     position: fixed;
  top:0;
  right: 0;
  width: 1000px;
  }
  img {
    height: 25px;
   

</style>
<?php 
}
else{ header("location: index.html");}
?>












