<?php 
session_start();
if($_SESSION["id"] and $_SESSION["type"]=='usine'){


?>
<?php
  
  include_once "connection.php";
  $id= $_GET['id'];
   if (isset($_POST['but'])) {
    
   
  $req = mysqli_query($con , "DELETE FROM attend WHERE id = $id  ");
  header("Location:attend.php") ;}
  if(isset($_POST['sup'])){
    header("Location:attend.php");
  }
  
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css">
  <title></title>
</head>
<body background="Untitled-1.png">
  
  <form action="" method="POST">

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <pre></pre>
    <div class=" block">
    <button name="but" class="home" style="background-color: #00b712;
background-image: linear-gradient(315deg, #00b712 0%, #5aff15 74%); left:43%"> CONFIRMER </button>
<br><br><br><br>


<button name="sup"  class="home" style="background-color: #feae96;
background-image: linear-gradient(315deg, #feae96 0%, #fe0944 74%); left:44%"> REFUSER </button></div>

    
  </form>

</body>
</html>
<?php 
}
else{ header("location:../index.html");}


?> 
<style >
.home {
  

  padding: 1.3em 3em;
  font-size: 12px;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 1000;
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
  background-color: #7E95FB;
  box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
  color: #fff;
  transform: translateY(-7px);

}

.home:active {
  transform: translateY(-1px);
}
.block{

  position: absolute;
  top: 50%;
  width: 95%;
  text-align: center;
  font-size: 15px;
}
</style>