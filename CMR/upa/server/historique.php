



<table style="background:white ;" class="button-54">
            <tr id="items">
                <th>TB N°</th>
                <th>Dimension(cm)</th>
                <th>Responsable</th>
                <th> Entrée/Sortie</th>
                <th>Zone </th>
                <th> Mouvement</th>
                
                
            </tr> 

            <?php 
                
                include_once "../connection.php";
                $rech=$_GET['rech'];
                
                $req = mysqli_query($con , "SELECT * FROM historique ");
                if(mysqli_num_rows($req) == 0){
                    ?> 
                    <br>
                    <div style="background: #7E7E7E  ;" class="msg">
                    
                     <?php
                   
                    echo "Il n'y a pas encore de objet ajouter !" ; ?> </div> 
                    <?php
                    
                }else {
                   
                   $req = mysqli_query($con , "SELECT * FROM historique  where tb LIKE'%$rech%' or adresse LIKE'%$rech%'  ORDER BY mouvement DESC ");
                    while($row=mysqli_fetch_assoc($req)){
                        ?>
                        <tr>
                            <td><?=$row['tb']?> <?php echo"$rech" ?></td>
                            <td><?=$row['dim']?></td>
                            <td><?=$row['res']?></td>
                            <td><?=$row['e/s']?></td>
                            <td><?=$row['adresse']?></td>
                            <td><?=$row['mouvement']?></td>
                            
                          
                            

                          
                        </tr>
                        <?php
                    }
                    
                }
            ?>

        </table> 
