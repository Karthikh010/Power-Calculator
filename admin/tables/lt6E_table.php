<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>LT-VI(E)</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <style>
        body{
            background: url('images/bg.jpg');
            background-size: cover;
        }
        #bgImg{
            background: rgba(0,0,0,.5);
        }
    </style>
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins" id="bgImg">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">LT - VI General (E)</h2>
                    <form name='select-form' method="POST" >
                        <div class="input-group">
                            <label class="label">Select Consumption Range : </label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="consmax" required>
                                    <option disabled="disabled" selected="selected" value="" >Choose option</option>
                                <?php
                                 $conn=mysqli_connect("localhost","root","","tharif");
                                 if(!$conn)
                                   {
                                     echo'<script>alert("connection failed");</script>';
                                   }
                                  $sql = "select CONSMIN, CONSMAX from tharif6 where SELTABLE = '5' ";
                                  $result = mysqli_query($conn,$sql);
                                  if($result)
                                  {
                                    while ($row = mysqli_fetch_assoc($result)) 
                                    {
                                        $c = $row['CONSMAX'];
                                ?>
                                    <option value="<?php echo $c?>"><?php echo $row['CONSMIN']." - ".$row['CONSMAX'] ?></option>
                                <?php
                                        }
                                    }  
                                ?> 
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="select">Select</button>
                        </div>
                                </form>
                        <?php
                            if(isset($_POST['select']))
                            {
                                $consmax = $_POST['consmax'];
                                $sql1 = "select CONSMIN, CONSMAX, SFIX, TFIX, ERATE from tharif6 where CONSMAX='$consmax' and SELTABLE = '5' ";
                                $result1 = mysqli_query($conn,$sql1);
                                if($result1)
                                {
                                    $row1 = mysqli_fetch_assoc($result1);
                        ?>
                        <form name='select-form2' method="POST">
                            <input Type="text" name="cons" value="<?php echo $consmax; ?>" hidden>
                        <div class="input-group">
                            <label class="label">Minimum Consumption</label>
                            <input class="input--style-4" type="number" name="minc" value="<?php echo $row1['CONSMIN']; ?>" >
                        </div>
                        <div class="input-group">
                            <label class="label">Maximum Consumption</label>
                            <input class="input--style-4" type="number" name="maxc" value="<?php echo $row1['CONSMAX']; ?>">
                        </div>
                        <div class="input-group">
                            <label class="label">Single Phase Fixed Charge</label>
                            <input class="input--style-4" type="number" name="sfix" value="<?php echo $row1['SFIX']; ?>">
                        </div>
                        <div class="input-group">
                            <label class="label">Three Phase Fixed Charge</label>
                            <input class="input--style-4" type="number" name="tfix" value="<?php echo $row1['TFIX']; ?>">
                        </div>
                        <div class="input-group">
                            <label class="label">Energy Charge</label>
                            <input class="input--style-4" type="number" name="erate" value="<?php echo $row1['ERATE']; ?>">
                        </div>
                        <?php
                                }
                            }
                        ?>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="update">Update</button>
                        </div>
                        </form>

                        <?php
                            if(isset($_POST['update']))
                            {
                                $minc = $_POST['minc'];
                                $maxc = $_POST['maxc'];
                                $sfix = $_POST['sfix'];
                                $tfix = $_POST['tfix'];
                                $erate = $_POST['erate'];
                                $consmax = $_POST['cons'];
                                $sql2="update tharif6 set CONSMIN='$minc', CONSMAX='$maxc', SFIX='$sfix', TFIX='$tfix', ERATE='$erate' where CONSMAX='$consmax' and SELTABLE = '5' ";
                               if(mysqli_query($conn,$sql2)){
                                    echo'<script>alert("Updated Successfully");</script>';
                                }
                                else{
                                    echo '<script>alert("Error Occured");</script>';
                                }
                            }
                        ?>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>