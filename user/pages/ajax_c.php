<?php
                        $conn=mysqli_connect("localhost","root","","tharif");
                        if(!$conn)
                        {
                            echo'<script>alert("connection failed");</script>';
                        }
                        if(isset($_GET['send'])){
                            //POST data
                            $tariff = $_GET['tariff_id'];
                            // $purpose = $_POST['tariff_pur'];
                            $billcycle = $_GET['bill_cycle'];
                            $bill = $_GET['bill'];
                            $phase = $_GET['phase'];
                            $load = $_GET['load'];
                            echo "<script type='text/javascript'>document.getElementById('tariff_id').value =".$tariff.";</script>";
                            $value = 0;
                            $duty = 0;
                            $fixed=0;
                            $rent=0;
                            $gst=0;
                            $units=0;
                            $tariff = "1";
                          
                            if($tariff == "1")
                            {
                                if($billcycle == 2)
                                {
                                    $bill /= 2;
                                }
                                $sql = "select * from rev_tharif1 where BILLMIN < '$bill' and BILLMAX >= '$bill' ";
                                $result = mysqli_query($conn,$sql);
                                if($result)
                                {
                                    while ($row = mysqli_fetch_assoc($result)) 
                                    {
                                        $consmin = $row['CONSMIN'];
                                        $consmax = $row['CONSMAX'];
                                        $sql1 = "select * from tharif1 where CONSMIN = '$consmin' and CONSMAX = '$consmax' ";
                                        $result1 = mysqli_query($conn,$sql1);
                                        if($result1)
                                        {
                                            while ($row1 = mysqli_fetch_assoc($result1)) 
                                            {
                                                if($phase == 3){
                                                    $bill -= 17.7;
                                                    $fixed = $row1['TFIX'];
                                                }
                                                else{
                                                    $bill -=7.08;
                                                    $fixed = $row1['SFIX'];
                                                }
                                                $bill -= $fixed;
                                                $bill = ($bill*10)/11;
                                                if($row1['TELES']==1){
                                                    $bill -= $row1['TELEFIX'] ;   
                                                }
                                                $units = $bill/$row1['ERATE'];
                                                if($row1['TELES']==1){
                                                    $units += $row1['CONSMIN'] ;   
                                                }
                                            }   
                                        }
                                    }
                                }
                                if($billcycle == 2)
                                {
                                    $units *= 2;
                                }
                            }
                            ?>
                            <?php 
                             echo"<---------------------div class=\"card card-4\">";
                            echo "<div class=\"card-body\">";
                            echo "<label class=\"label\">Consumed Units(Approx)</label>";
                            echo "<input class=\"input--style-4\" type=\"text\" name=\"res\" value=\"$units\" readonly=\"readonly\">";
                            echo "</div></div>"; 
                        }    
                    ?>