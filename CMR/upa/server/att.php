<table style="background:white ;" class="button-54">
            <tr id="items">
                <th>TB N°</th>
                <th>Dimension(cm)</th>
                <th>Entreé</th>
                <th>Sortie</th>
                <th>annuler</th>


               
                
                
                
            </tr> 

            <?php 
                
                include_once "connection.php";
                
                $req = mysqli_query($con , "SELECT * FROM attend");
                if(mysqli_num_rows($req) == 0){
                    ?> 
                    <br>
                    
                    <?php
                    
                }else {
                   
                   $req = mysqli_query($con , "SELECT * FROM attend  ");
                    while($row=mysqli_fetch_assoc($req)){
                        ?>
                        <tr>
                            <td><?=$row['tb']?></td>
                            <td><?=$row['dim']?></td>
                            <td><a href="entrer1.php?RFID=<?=$row['RFID']?>"><img src="images/entrer.png"></a></td>
                            <td><a href="sortie.php?RFID=<?=$row['RFID']?>"><img src="images/sortie.png"></a></td>
                            <td><a href="refuser.php?id=<?=$row['id']?>"><img src="images/ref.png"></a></td>
                            
                            
                          
                            

                          
                        </tr>
                        <?php
                    }
                    
                }
            ?>

        </table>
