<label class="proregmar">COLOR 1</label><br>
                            <div class="proregmar">current color:<div style="width: 50px; height:50px; border-radius:50%; background-color:<?= $row2["color"] ?>;"></div></div>
                            <input type="color" name="procolor" class="procol proregmar"><br>
                            <input type="submit" name="pcolor1" value="ADD" class="proregmar"><br>
                            
                            <?php
                                if(isset($_POST["pcolor1"])){
                                    $pid=$row2["id"];
                                    $color=strtoupper($_POST["procolor"]);
                                    $sqlcol="UPDATE `porducts` SET `color`='$color' WHERE `id`='$pid'";
                                    mysqli_query($con,$sqlcol);
                                    
                                }
                            ?>
                            <label class="proregmar">COLOR 2</label><br>
                            <div class="proregmar">current color:<div style="width: 50px; height:50px; border-radius:50%; background-color:<?= $row2["color2"] ?>;"></div></div>
                            <input type="color" name="procolor2" class="procol proregmar"><br>
                            <input type="submit" name="pcolor2" value="ADD" class="proregmar"><br>
                            
                            <?php
                                if(isset($_POST["pcolor2"])){
                                    $pid=$row2["id"];
                                    $color2=strtoupper($_POST["procolor2"]);
                                    $sqlcol2="UPDATE `porducts` SET `color2`='$color2' WHERE `id`='$pid'";
                                    mysqli_query($con,$sqlcol2);
                                    
                                }
                            ?>
                            <label class="proregmar">COLOR 3</label><br>
                            <div class="proregmar">current color:<div style="width: 50px; height:50px; border-radius:50%; background-color:<?= $row2["color3"] ?>;"></div></div>
                            <input type="color" name="procolor3" class="procol proregmar"><br>
                            <input type="submit" name="pcolor3" value="ADD" class="proregmar"><br>
                            
                            <?php
                                if(isset($_POST["pcolor3"])){
                                    $pid=$row2["id"];
                                    $color3=strtoupper($_POST["procolor3"]);
                                    $sqlcol3="UPDATE `porducts` SET `color3`='$color3' WHERE `id`='$pid'";
                                    mysqli_query($con,$sqlcol3);
                                    
                                }
                            ?>
                            <label class="proregmar">COLOR 4</label><br>
                            <div class="proregmar">current color:<div style="width: 50px; height:50px; border-radius:50%; background-color:<?= $row2["color4"] ?>;"></div></div>
                            <input type="color" name="procolor4" class="procol proregmar"><br>
                            <input type="submit" name="pcolor4" value="ADD" class="proregmar"><br>
                            
                            <?php
                                if(isset($_POST["pcolor4"])){
                                    $pid=$row2["id"];
                                    $color4=strtoupper($_POST["procolor4"]);
                                    $sqlcol4="UPDATE `porducts` SET `color4`='$color4' WHERE `id`='$pid'";
                                    mysqli_query($con,$sqlcol4);
                                    
                                }
                            ?>
                            <label class="proregmar">COLOR 5</label><br>
                            <div class="proregmar">current color:<div style="width: 50px; height:50px; border-radius:50%; background-color:<?= $row2["color5"] ?>;"></div></div>
                            <input type="color" name="procolor5" class="procol proregmar"><br>
                            <input type="submit" name="pcolor5" value="ADD" class="proregmar"><br><hr>
                            
                            <?php
                                if(isset($_POST["pcolor5"])){
                                    $pid=$row2["id"];
                                    $color5=strtoupper($_POST["procolor5"]);
                                    $sqlcol5="UPDATE `porducts` SET `color5`='$color5' WHERE `id`='$pid'";
                                    mysqli_query($con,$sqlcol5);
                                    
                                }
                            ?>