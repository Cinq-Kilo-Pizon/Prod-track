<?php 
session_start();
if($_SESSION["id"]and $_SESSION["type"]=='annex'){

error_reporting(0);

 
                
?>
<!DOCTYPE html>
<html>
<head>
	 
  <title>HOME</title>
</head>
<body style="background: url(Untitled-4.png);">

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
           
         <?php  include_once "connection.php";
                
                $req = mysqli_query($con , "SELECT * FROM attend");
                if(mysqli_num_rows($req) == 0){  
                  ?>  
                   <a href="attend.php">        
            <button class="button-46" >
            ATTEND
           </button>
           </a> 

                <?php }

                  else{ ?>
                    <a href="attend.php">        
            <button class="att" >
            ATTEND <img src="alert.png" style="width: 110px;height: 73px;">
           </button>
           </a> 

                    <?php 

                  } ?>

           

          <a href="hist.php">        
            <button class="button-46">
	          HISTORIQUE
           </button>
           </a> 


           <a href="etat1.php">        
            <button class="button-46">
	          Etat
           </button>
           </a>
           <a href="adresse.php">        
            <button class="button-46">
            ADRESSE
           </button>
           </a>



 <nav class="na">
             <ul class="block">
             
              <a href="home.php" style="color:red;"><li class="home"  >  home  <img src="images/home.png">   </li></a>
               <a href="../logout.php"><li class="home" style="color:black;" >logout<img src="images/log.png"> </li></a> 
               <li class="home" style="color:black;" ><?php echo $_SESSION["name"]; ?> <img src="images/mo.JPG"  style="border-radius: 50%; height: 50px; width: 50px ;"> </li>
             </ul>
           </nav>


</body>
</html>
<style type="text/css">
	
	.module{
	border:1;
	background: transparent;
	color:white;
	left: 20%;

	position: relative;
	overflow: hidden;
	padding: 20px 50px;
	border-radius: 30px ;
	cursor: pointer;
	font-size: 1.5em ;
	box-shadow: 0px -0px 0px 0px rgba(143,64,248,.5),0px 0px 0px 0px rgba(39,200,255,.5);
	transition:  all .2s ;

}
.module::after{
	content: "";
	width: 400px;
	height: 400px;
	
background: rgb(2,39,98);
background: linear-gradient(90deg, rgba(2,39,98,1) 0%, rgba(46,96,180,1) 37%, rgba(169,224,252,1) 100%);
    position: absolute;
    top: -50px;
    left: -100px;
    z-index: -1;
    transition: all .2s ;
}

.module:hover::after{
	transform: rotate(150deg);

}
.module{
	transition: translate(0,-6px);
	box-shadow: 10px -10px 25px 0px rgba(143,64,248,.5),-10px 10px 25px 0px rgba(39,200,255,.5);
}

.ROUTEUR{
	border:1;
	background: transparent;
	color:white;
	left: 55% ;
	position: relative;
	overflow: hidden;
	padding: 20px 50px;
	border-radius: 30px ;
	cursor: pointer;
	font-size: 1.5em ;
	box-shadow: 0px -0px 0px 0px rgba(143,64,248,.5),0px 0px 0px 0px rgba(39,200,255,.5);
	transition:  all .2s ;

}
.ROUTEUR::after{
	content: "";
	width: 400px;
	height: 400px;
	background: rgb(2,39,98);
background: linear-gradient(90deg, rgba(2,39,98,1) 0%, rgba(46,96,180,1) 37%, rgba(169,224,252,1) 100%);
    position: absolute;
    top: -50px;
    left: -100px;
    z-index: -1;
    transition: all .2s ;
}

.ROUTEUR:hover::after{
	transform: rotate(150deg);

}
.ROUTEUR{
	transition: translate(0,-6px);
	box-shadow: 10px -10px 25px 0px rgba(143,64,248,.5),-10px 10px 25px 0px rgba(39,200,255,.5);}
	/* _______________________________________*/






/* CSS */
.button-49,
.button-49:after {
  width: 150px;
  height: 76px;
  line-height: 78px;
  font-size: 20px;
  font-family: 'Bebas Neue', sans-serif;
  background: linear-gradient(45deg, transparent 5%, #FF013C 5%);
  border: 0;
  color: #fff;
  letter-spacing: 3px;
  box-shadow: 6px 0px 0px #00E6F6;
  outline: transparent;
  position: relative;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-49:after {
  --slice-0: inset(50% 50% 50% 50%);
  --slice-1: inset(80% -6px 0 0);
  --slice-2: inset(50% -6px 30% 0);
  --slice-3: inset(10% -6px 85% 0);
  --slice-4: inset(40% -6px 43% 0);
  --slice-5: inset(80% -6px 5% 0);
  
  content: 'ALTERNATE TEXT';
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(45deg, transparent 3%, #00E6F6 3%, #00E6F6 5%, #FF013C 5%);
  text-shadow: -3px -3px 0px #F8F005, 3px 3px 0px #00E6F6;
  clip-path: var(--slice-0);
}


/* CSS */
.button-46 {
  align-items: center;
  background-color: rgba(240, 240, 240, 0.26);
  border: 1px solid #DFDFDF;
  border-radius: 16px;
  box-sizing: border-box;
  color: #000000;
  cursor: pointer;
  display: flex;
  font-family: Inter, sans-serif;
  font-size: 18px;
  justify-content: center;
  line-height: 28px;
  max-width: 100%;
  padding: 14px 22px;
  text-decoration: none;
  transition: all .2s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: 100%;
}

.button-46:active,
.button-46:hover {
  outline: 0;
}

.button-46:hover {
  background-color: #818181 ;
  border-color: rgba(0, 0, 0, 0.19);
}

@media (min-width: 768px) {
  .button-46 {
    font-size: 20px;
    min-width: 200px;
    padding: 14px 16px;
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
  background-color:#787878;
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
   
}

.att {
  align-items: center;
  background-color: rgba(240, 240, 240, 0.26);
  border: 1px solid #DFDFDF;
  border-radius: 16px;
  box-sizing: border-box;
  color: #000000;
  cursor: pointer;
  display: flex;
  font-family: Inter, sans-serif;
  font-size: 18px;
  justify-content: center;
  line-height: 28px;
  max-width: 100%;
  padding: 14px 22px;
  text-decoration: none;
  transition: all .2s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: 100%;
}

.att:active,
.att:hover {
  outline: 0;
}

.att:hover {
  background-color: <?php echo "red"; ?>;
  border-color: rgba(0, 0, 0, 0.19);
}
</style>

<?php 
}
else{ header("location: ../index.html");}
?>
