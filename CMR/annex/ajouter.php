<?php 
session_start();
if($_SESSION["id"] and $_SESSION["type"]=='annex' ){


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background: url(Untitled-1.png);">
    <?php
       
       if(isset($_POST['button'])){
            
           extract($_POST);
           
           if($tb!==''&& $dim!==''&& $RFID!==''){
                
                include_once "connection.php";






                $req = mysqli_query($con,"INSERT INTO etat  VALUES(null,'$tb', '$pn','$np','$etat','$dim','$mmod','$fch','$adresse','$commentaires',current_timestamp(),'$rrs','$RFID')");
                if($req){header("location: etat1.php");
                }else {$message = "Module non ajouté";
                }

           }else {
               
               $message = "Veuillez remplir tous les champs !";
           }
       }
    
    ?>
    <div class="form">
        <a href="etat.php" class="back_btn"><img src="images/back.png"> Retour</a>
        <h2>Ajouter un Module</h2>
        <p class="erreur_message">
            <?php 
           
            if(isset($message)){
                echo $message;
            }
            ?>

        </p>
        <form action="" method="POST">
            <label>TB N°</label>
            <input type="text" name="tb">

            <label>P/N</label>
            <input type="text" name="pn">


            <label>N°Plan</label>
            <input type="text" name="np">

            <label>Etat</label>
            <input type="text" name="etat">

            <label>Dimension(cm)</label>
            <input type="text" name="dim" placeholder="longueur / largeur">

            <label>Mod</label>
            <input type="text" name="mmod">

            <label>Fch</label>
            <input type="text" name="fch">

            <label>adresse</label>
            <input type="text" name="adresse">

            <label>commentaires</label>
            <input type="text" name="commentaires">

           

            <label>RRS propreity</label>
            <input type="text" name="rrs">

             <label>RFID </label>
            <input type="text" name="RFID">

            <input type="submit" value="Ajouter" name="button">
        </form>
    </div>
</body>
</html>
<?php 
}
else{ header("location:../index.html");}

?>
<style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;

}
body {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    position: relative;
}
.Btn_add {
    width: fit-content;
    margin-bottom:20px;
    background-color: #00C9FF;
    padding: 5px 20px;
    color: #fff;
    display: flex;
    align-items: center;
    text-align: 0;
    border-radius: 6px;
    text-decoration: 0;
}
.Btn_add img {
    margin-right: 5px;
    height: 20px;
}
/*tableau*/
table {
    border-collapse:collapse;
    color: #404040;
}
th {
    font-size: 16px;
    border-bottom: 3px solid #ffcb61;
    padding: 5px 20px;
    font-weight: 500;
}
td {
    font-weight: 400;
    padding: 5px 30px;
    font-size: 14px;
    text-align: center;

}
img {
    height: 25px;
   
}
tr:nth-child(2n){
    background-color: #f6f8f8;
}
tr:nth-child(2n) td {
    border-bottom: 1px solid #e0e0e0;
    border-top:  1px solid #e0e0e0;
}
/*Form CSS*/
.form {
    background-color: #f6f8f8;
    padding: 25px;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
    border-radius: 6px;
}
.form form {
    display: flex;
    width: 350px;
    flex-direction: column;
}
.back_btn {
    color: #2bc48a;
    text-decoration: 0;
    display: flex;
    align-items: center;
}
.back_btn img {
    height: 16px;
    margin-right:5px ;
}
h2 {
    margin: 10px 0;
    font-weight: 500;
    text-transform: uppercase;
}
.erreur_message {
    color: red;
    font-size: 12px;
}
label {
    margin-top: 5px;
    text-transform: uppercase;
}
input{
    padding: 5px;
    border: 1px solid #999;
    outline: 0;
    margin-top: 2px;
}
input:focus{
    border: 1px solid #ffcb61;
}
input[type="submit"]{
    margin-top: 25px;
    background-color: #2bc48a;
    border: 1px solid #2bc48a;
    cursor: pointer;
    color: #fff;
    text-transform: uppercase;
}
.reech {
    width: fit-content;
    margin-bottom:20px;
    background-color: #25d04a;
    padding: 5px 20px;
    color: #fff;
    display: flex;
    align-items: center;
    text-align: 0;
    border-radius: 6px;
    text-decoration: 0;
}

 
</style>