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
    <title>Bill Calculator</title>

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
    <script>
        function populate(s1,s2) {
            var s1 = document.getElementById(s1);
            var s2 = document.getElementById(s2);
            s2.innerHTML = "";
            if(s1.value == "1") {
                var optionArray = ["|","1|Domestic"];
                document. getElementById('load_input'). style. display = 'none';
            }
            if(s1.value == "2"){
                var optionArray = ["|","1|Colonies"];
                document. getElementById('load_input'). style. display = 'none';
            }
            if(s1.value == "3"){
                var optionArray = ["|","1|Manufacturing Units","2|KWA Pumphouse","others|Othes"];
            }
            if(s1.value == "4"){
                var optionArray = ["|","1|IT Enabled Services","others|Others"];
            }
            if(s1.value == "5"){
                var optionArray = ["|","1|Pumping / Dewatering","others|Others"];
            }
            if(s1.value == "6"){
                var optionArray = ["|","1|Livestock Farm","others|Others"];
            }
            if(s1.value == "7"){
                var optionArray = ["|","1|Educational Institutions","2|Libraries and Reading Rooms","others|Others"];
            }
            if(s1.value == "8"){
                var optionArray = ["|","1|KWA offices","others|Others"];
            }
            if(s1.value == "9"){
                var optionArray = ["|","1|Railways","others|Others"];
            }
            if(s1.value == "10"){
                var optionArray = ["|","1|Orphanages","2|Libraries and Reading Rooms","others|Others"];
            }
            if(s1.value == "11"){
                var optionArray = ["|","1|Gymnasium","2|Sports and Arts Club","3|Swimming Club","4|Offices of Political Parties","others|Others"];
            }
            if(s1.value == "12"){
                var optionArray = ["|","1|Construction","others|Others"];
            }
            if(s1.value == "13"){
                var optionArray = ["|","1|Private Hospitals","others|Others"];
            }
            if(s1.value == "14"){
                var optionArray = ["|","1|Commercial","others|Others"];
            }
            if(s1.value == "15"){
                var optionArray = ["|","1|Shops","others|Others"];
            }
            if(s1.value == "16"){
                var optionArray = ["|","1|Cinema Theatres","2|Circus","3|Swimming Club","4|Gymnasium","5|Sports and Arts Club"];
            }
            if(s1.value == "17"){
                var optionArray = ["|","1|Display Lighting and Hoardings"];
                document. getElementById('load_input'). style. display = 'none';
            }
            for (var option in optionArray) {
                var pair = optionArray[option].split("|");
                var newOption = document.createElement("option");
                newOption.value = pair[0];
                newOption.innerHTML = pair[1];
                s2.options.add(newOption);
            }
        }
    </script>
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
    <div class="page-wrapper  p-t-130 p-b-100 font-poppins " id="bgImg">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Bill Calculator</h2>
                    <form method="POST">
                        <div class="input-group">
                            <label class="label">Tariff</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="tariff_id" id="tariff_id" onchange="populate(this.id,'tariff_pur')">
                                    <option disabled="disabled" selected="selected" >Choose option</option>
                                    <option value="1">LT-I</option>
                                    <option value="2">LT-II</option>
                                    <option value="3">LT-IV (A)</option>
                                    <option value="4">LT-IV (B)</option>
                                    <option value="5">LT-V (A)</option>
                                    <option value="6">LT-V (B)</option>
                                    <option value="7">LT-VI (A)</option>
                                    <option value="8">LT-VI (B)</option>
                                    <option value="9">LT-VI (C)</option>
                                    <option value="10">LT-VI (D)</option>
                                    <option value="11">LT-VI (E)</option>
                                    <option value="12">LT-VI (F)</option>
                                    <option value="13">LT-VI (G)</option>
                                    <option value="14">LT-VII (A)</option>
                                    <option value="15">LT-VII (B)</option>
                                    <option value="16">LT-VII (C)</option>
                                    <option value="17">LT-IX </option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label" >Purpose</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="tariff_pur" id="tariff_pur">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Billinng Cycle</label>
                            <div class="p-t-10">
                            <label class="radio-container m-r-45"> 2 Months
                                <input type="radio" checked="checked" name="bill_cycle" value="2">
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio-container"> 1 Month
                                <input type="radio" name="bill_cycle" value="1">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Consumed Units</label>
                            <input class="input--style-4" type="number" name="units">
                        </div>
                        <div class="input-group">
                            <label class="label">Phase</label>
                            <div class="p-t-10">
                                <label class="radio-container m-r-45" >Single Phase
                                    <input type="radio" checked="checked" name="phase" value="1">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Three Phase
                                    <input type="radio" name="phase" value="3">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="input-group" id="load_input">
                            <label class="label">Connected Load (Watts)</label>
                            <input class="input--style-4" type="number" name="load">
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" name="submit" type="submit">Calculate</button>
                        </div>
                    </form>
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
<?php
 $desc = "";
 $value = "";
 $conn=mysqli_connect("localhost","root","","tharif");
 if(!$conn)
   {
   	 echo'<script>alert("connection failed");</script>';
   }
 if(isset($_POST['submit'])){
     //POST data
     $tariff = $_POST['tariff_id'];
     $purpose = $_POST['tariff_pur'];
     $billcycle = $_POST['bill_cycle'];
     $units = $_POST['units'];
     $phase = $_POST['phase'];
     $load = $_POST['load'];
     $value = 0;
     $duty = 0;
     $fixed=0;
     $rent=0;
     $gst=0;
     $total=0;
     
    if($tariff == "1")
    {
        if($billcycle == 2)
        {
            $units/=2;
            $sql = "select * from tharif1 where CONSMIN < '$units' and CONSMAX >= '$units' ";
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                while ($row = mysqli_fetch_assoc($result)) 
                {
                    if($row['BPL']==1)
                    {
                        $value = $units * $row['ERATE'];
                    }
                    elseif($row['TELES']==1)
                    {
                        $value = ((($units - $row['CONSMIN']) * $row['ERATE'] ) + $row['TELEFIX'])*2;
                        $duty = ($value/10);
                        if($phase == 3){
                            $fixed = $row['TFIX']*2;
                            $rent =30;
                            $gst = 5.4;
                        }
                        else{
                            $fixed = $row['SFIX']*2;
                            $rent =12;
                            $gst = 2.16;
                        }
                        $total= $value+$duty+$fixed+$rent+$gst;
                    }
                    elseif($row['NONTELES']==1)
                    {
                        $value = $units*$row['ERATE']*2;
                        $duty = ($value/10);
                        if($phase == 3){
                            $fixed = $row['TFIX']*2;
                            $rent =30;
                            $gst = 5.4;
                        }
                        else{
                            $fixed = $row['SFIX']*2;
                            $rent =12;
                            $gst = 2.16;
                        }
                        $total= $value+$duty+$fixed+$rent+$gst;
                    }
                }
            }
        }
        else
        {
            $sql = "select * from tharif1 where CONSMIN < '$units' and CONSMAX >= '$units' ";
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                while ($row = mysqli_fetch_assoc($result)) 
                {
                    if($row['BPL']==1)
                    {
                        $value = $units * $row['ERATE'];
                    }
                    elseif($row['TELES']==1)
                    {
                        $value = ((($units - $row['CONSMIN']) * $row['ERATE'] ) + $row['TELEFIX']);
                        $duty = ($value/10);
                        if($phase == 3){
                            $fixed = $row['TFIX'];
                            $rent =15;
                            $gst = 2.7;
                        }
                        else{
                            $fixed = $row['SFIX'];
                            $rent =6;
                            $gst = 1.08;
                        }
                        $total= $value+$duty+$fixed+$rent+$gst;
                    }
                    elseif($row['NONTELES']==1)
                    {
                        $value = $units*$row['ERATE'];
                        $duty = ($value/10);
                        if($phase == 3){
                            $fixed = $row['TFIX'];
                            $rent =15;
                            $gst = 2.7;
                        }
                        else{
                            $fixed = $row['SFIX'];
                            $rent =6;
                            $gst = 1.08;
                        }
                        $total= $value+$duty+$fixed+$rent+$gst;
                    }
                }
            }
        }
    }
    elseif($tariff == "2")
    {
        $sql = "select * from tharif2";
		$result = mysqli_query($conn,$sql);
		if($result)
		{
			while ($row = mysqli_fetch_assoc($result)) 
			{
                if($phase == 3){
                    $value = $row['TFIX'];
                }
                else{
                    $value = $row['SFIX'];
                }
            }
        }
    }
    elseif($tariff == "3")
    {
        $load /= 1000;
        $sql = "select * from tharif4 where (LOADMIN <= '$load' and LOADMAX >= '$load') and SELTABLE = 1 ";
		$result = mysqli_query($conn,$sql);
		if($result)
		{
			while ($row = mysqli_fetch_assoc($result)) 
			{
                $fixed =(($load*$row['FIXED'])+$row['ADDFIXED']);
                $value = ($units *$row['ERATE']);
                $duty = ($value/10);
                if($billcycle == 2){
                    $fixed *=2;
                    if($phase == 3){
                        $rent =30;
                        $gst = 5.4;
                    }
                    else{
                        $rent =12;
                        $gst = 2.16;
                    }
                }
                else{
                    if($phase == 3){
                        $rent =15;
                        $gst = 2.7;
                    }
                    else{
                        $rent =6;
                        $gst = 1.08;
                    }
                }
                $total= $value+$duty+$fixed+$rent+$gst;
            }
        }
    }
    elseif($tariff == "4")
    {
        $load /= 1000;
        $sql = "select * from tharif4 where (LOADMIN <= '$load' and LOADMAX >= '$load') and SELTABLE = 2 ";
		$result = mysqli_query($conn,$sql);
		if($result)
		{
			while ($row = mysqli_fetch_assoc($result)) 
			{
                $fixed =(($load*$row['FIXED'])+$row['ADDFIXED']);
                $value = ($units *$row['ERATE']);
                $duty = ($value/10);
                if($billcycle == 2){
                    $fixed *=2;
                    if($phase == 3){
                        $rent =30;
                        $gst = 5.4;
                    }
                    else{
                        $rent =12;
                        $gst = 2.16;
                    }
                }
                else{
                    if($phase == 3){
                        $rent =15;
                        $gst = 2.7;
                    }
                    else{
                        $rent =6;
                        $gst = 1.08;
                    }
                }
                $total= $value+$duty+$fixed+$rent+$gst;
            }
        }
    }
    elseif($tariff == "5")
    {
        $load /= 1000;
        $sql = "select * from tharif5 where ID = '1' ";
		$result = mysqli_query($conn,$sql);
		if($result)
		{
			while ($row = mysqli_fetch_assoc($result)) 
			{
                $fixed =$load*$row['FIXED'];
                $value = ($units *$row['ERATE']);
                $duty = ($value/10);
                if($billcycle == 2){
                    $fixed *=2;
                    if($phase == 3){
                        $rent =30;
                        $gst = 5.4;
                    }
                    else{
                        $rent =12;
                        $gst = 2.16;
                    }
                }
                else{
                    if($phase == 3){
                        $rent =15;
                        $gst = 2.7;
                    }
                    else{
                        $rent =6;
                        $gst = 1.08;
                    }
                }
                $total= $value+$duty+$fixed+$rent+$gst;
            }
        }
    }
    elseif($tariff == "6")
    {
        $load /= 1000;
        $sql = "select * from tharif5 where ID = '2' ";
        $result = mysqli_query($conn,$sql);
        if($result)
        {
            while ($row = mysqli_fetch_assoc($result)) 
            {
                $fixed =$load*$row['FIXED'];
                $value = ($units *$row['ERATE']);
                $duty = ($value/10);
                if($billcycle == 2){
                    $fixed *=2;
                    if($phase == 3){
                        $rent =30;
                        $gst = 5.4;
                    }
                    else{
                        $rent =12;
                        $gst = 2.16;
                    }
                }
                else{
                    if($phase == 3){
                        $rent =15;
                        $gst = 2.7;
                    }
                    else{
                        $rent =6;
                        $gst = 1.08;
                    }
                }
                $total= $value+$duty+$fixed+$rent+$gst;
            }
        }
    }
    elseif($tariff == "7")
    {
        $load /= 1000;
        $sql = "select * from tharif6 where (CONSMIN < '$units' and CONSMAX >= '$units') and SELTABLE = '1' ";
		$result = mysqli_query($conn,$sql);
		if($result)
		{
			while ($row = mysqli_fetch_assoc($result)) 
			{
                $fixed =$load*$row['FIXED'];
                $value = ($units *$row['ERATE']);
                $duty = ($value/10);
                if($billcycle == 2){
                    $fixed *=2;
                    if($phase == 3){
                        $rent =30;
                        $gst = 5.4;
                    }
                    else{
                        $rent =12;
                        $gst = 2.16;
                    }
                }
                else{
                    if($phase == 3){
                        $rent =15;
                        $gst = 2.7;
                    }
                    else{
                        $rent =6;
                        $gst = 1.08;
                    }
                }
                $total= $value+$duty+$fixed+$rent+$gst;
            }
        }
    }
    elseif($tariff == "8")
    {
        $load /= 1000;
        $sql = "select * from tharif6 where (CONSMIN < '$units' and CONSMAX >= '$units') and SELTABLE = 2 ";
		$result = mysqli_query($conn,$sql);
		if($result)
		{
			while ($row = mysqli_fetch_assoc($result)) 
			{
                $fixed =$load*$row['FIXED'];
                $value = ($units *$row['ERATE']);
                $duty = ($value/10);
                if($billcycle == 2){
                    $fixed *=2;
                    if($phase == 3){
                        $rent =30;
                        $gst = 5.4;
                    }
                    else{
                        $rent =12;
                        $gst = 2.16;
                    }
                }
                else{
                    if($phase == 3){
                        $rent =15;
                        $gst = 2.7;
                    }
                    else{
                        $rent =6;
                        $gst = 1.08;
                    }
                }
                $total= $value+$duty+$fixed+$rent+$gst;
            }
        }
    }
    elseif($tariff == "9")
    {
        $load /= 1000;
        $sql = "select * from tharif6 where (CONSMIN < '$units' and CONSMAX >= '$units') and SELTABLE = 3 ";
		$result = mysqli_query($conn,$sql);
		if($result)
		{
			while ($row = mysqli_fetch_assoc($result)) 
			{
                $fixed =$load*$row['FIXED'];
                $value = ($units *$row['ERATE']);
                $duty = ($value/10);
                if($billcycle == 2){
                    $fixed *=2;
                    if($phase == 3){
                        $rent =30;
                        $gst = 5.4;
                    }
                    else{
                        $rent =12;
                        $gst = 2.16;
                    }
                }
                else{
                    if($phase == 3){
                        $rent =15;
                        $gst = 2.7;
                    }
                    else{
                        $rent =6;
                        $gst = 1.08;
                    }
                }
                $total= $value+$duty+$fixed+$rent+$gst;
            }
        }
    }
    elseif($tariff == "10")
    {
        $sql = "select * from tharif6 where SELTABLE = 4 ";
		$result = mysqli_query($conn,$sql);
		if($result)
		{
			while ($row = mysqli_fetch_assoc($result)) 
			{
                $fixed = $row['FIXED'];
                $value = ($units *$row['ERATE']);
                $duty = ($value/10);
                if($billcycle == 2){
                    $fixed *=2;
                    if($phase == 3){
                        $rent =30;
                        $gst = 5.4;
                    }
                    else{
                        $rent =12;
                        $gst = 2.16;
                    }
                }
                else{
                    if($phase == 3){
                        $rent =15;
                        $gst = 2.7;
                    }
                    else{
                        $rent =6;
                        $gst = 1.08;
                    }
                }
                $total= $value+$duty+$fixed+$rent+$gst;
            }
        }
    }
    elseif($tariff == "11")
    {
        if($billcycle == 2)
        {
            $units/=2;
            $sql = "select * from tharif6 where (CONSMIN <= '$units' and CONSMAX >= '$units') and SELTABLE = 5 ";
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                while ($row = mysqli_fetch_assoc($result)) 
                {
                    $value = $units*$row['ERATE']*2;
                    $duty = ($value/10);
                    if($phase == 3){
                        $fixed = $row['TFIX']*2;
                        $rent =30;
                        $gst = 5.4;
                    }
                    else{
                        $fixed = $row['SFIX']*2;
                        $rent =12;
                        $gst = 2.16;
                    }
                    $total= $value+$duty+$fixed+$rent+$gst;   
                }
            }
        }
        else
        {
            $sql = "select * from tharif6 where (CONSMIN <= '$units' and CONSMAX >= '$units') and SELTABLE = 5 ";
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                while ($row = mysqli_fetch_assoc($result)) 
                {
                    $value = $units*$row['ERATE'];
                    $duty = ($value/10);
                    if($phase == 3){
                        $fixed = $row['TFIX'];
                        $rent =15;
                        $gst = 2.7;
                    }
                    else{
                        $fixed = $row['SFIX'];
                        $rent =6;
                        $gst = 1.08;
                    }
                    $total= $value+$duty+$fixed+$rent+$gst;  
                }
            }
        }        
    }
    elseif($tariff == "12")
    {
        $load /= 1000;
        if($billcycle == 2)
        {
            $units/=2;
            $sql = "select * from tharif6 where (CONSMIN <= '$units' and CONSMAX >= '$units') and SELTABLE = 6 ";
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                while ($row = mysqli_fetch_assoc($result)) 
                {
                    $value = $units*$row['ERATE']*2;
                    $duty = ($value/10);
                    if($phase == 3){
                        $fixed = $row['TFIX']*$load*2;
                        $rent =30;
                        $gst = 5.4;
                    }
                    else{
                        $fixed = $row['SFIX']*$load*2;
                        $rent =12;
                        $gst = 2.16;
                    }
                    $total= $value+$duty+$fixed+$rent+$gst;   
                }
            }
        }
        else
        {
            $sql = "select * from tharif6 where (CONSMIN <= '$units' and CONSMAX >= '$units') and SELTABLE = 6 ";
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                while ($row = mysqli_fetch_assoc($result)) 
                {
                    $value = $units*$row['ERATE'];
                    $duty = ($value/10);
                    if($phase == 3){
                        $fixed = $row['TFIX']*$load;
                        $rent =15;
                        $gst = 2.7;
                    }
                    else{
                        $fixed = $row['SFIX']*$load;
                        $rent =6;
                        $gst = 1.08;
                    }
                    $total= $value+$duty+$fixed+$rent+$gst;  
                }
            }
        }
    }
    elseif($tariff == "13")
    {
        $load /= 1000;
        if($billcycle == 2)
        {
            $units/=2;
            $sql = "select * from tharif6 where (CONSMIN <= '$units' and CONSMAX >= '$units') and SELTABLE = 7 ";
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                while ($row = mysqli_fetch_assoc($result)) 
                {
                    $value = $units*$row['ERATE']*2;
                    $duty = ($value/10);
                    if($phase == 3){
                        $fixed = $row['TFIX']*$load*2;
                        $rent =30;
                        $gst = 5.4;
                    }
                    else{
                        $fixed = $row['SFIX']*$load*2;
                        $rent =12;
                        $gst = 2.16;
                    }
                    $total= $value+$duty+$fixed+$rent+$gst;   
                }
            }
        }
        else
        {
            $sql = "select * from tharif6 where (CONSMIN <= '$units' and CONSMAX >= '$units') and SELTABLE = 7 ";
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                while ($row = mysqli_fetch_assoc($result)) 
                {
                    $value = $units*$row['ERATE'];
                    $duty = ($value/10);
                    if($phase == 3){
                        $fixed = $row['TFIX'];
                        $rent =15;
                        $gst = 2.7;
                    }
                    else{
                        $fixed = $row['SFIX'];
                        $rent =6;
                        $gst = 1.08;
                    }
                    $total= $value+$duty+$fixed+$rent+$gst;  
                }
            }
        }
    }
    elseif($tariff == "14")
    {
		$load /= 1000;
        if($billcycle == 2)
        {
            $units/=2;
            $sql = "select * from tharif7 where (CONSMIN <= '$units' and CONSMAX >= '$units') and SELTABLE = 1 ";
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                while ($row = mysqli_fetch_assoc($result)) 
                {
                    $value = $units*$row['ERATE']*2;
                    $duty = ($value/10);
                    if($phase == 3){
                        $fixed = $row['TFIX']*$load*2;
                        $rent =30;
                        $gst = 5.4;
                    }
                    else{
                        $fixed = $row['SFIX']*$load*2;
                        $rent =12;
                        $gst = 2.16;
                    }
                    $total= $value+$duty+$fixed+$rent+$gst;   
                }
            }
        }
        else
        {
            $sql = "select * from tharif7 where (CONSMIN <= '$units' and CONSMAX >= '$units') and SELTABLE = 1 ";
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                while ($row = mysqli_fetch_assoc($result)) 
                {
                    $value = $units*$row['ERATE'];
                    $duty = ($value/10);
                    if($phase == 3){
                        $fixed = $row['TFIX'];
                        $rent =15;
                        $gst = 2.7;
                    }
                    else{
                        $fixed = $row['SFIX'];
                        $rent =6;
                        $gst = 1.08;
                    }
                    $total= $value+$duty+$fixed+$rent+$gst;  
                }
            }
        }
    }
    elseif($tariff == "15")
    {
        $load /= 1000;
        if($billcycle == 2)
        {
            $units/=2;
            $sql = "select * from tharif7 where (CONSMIN <= '$units' and CONSMAX >= '$units') and SELTABLE = 2 ";
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                while ($row = mysqli_fetch_assoc($result)) 
                {
                    $value = $units*$row['ERATE']*2;
                    $duty = ($value/10);
                    $fixed = $row['FIXED']*2;
                    if($phase == 3){
                        $rent =30;
                        $gst = 5.4;
                    }
                    else{
                        $rent =12;
                        $gst = 2.16;
                    }
                    $total= $value+$duty+$fixed+$rent+$gst;   
                }
            }
        }
        else
        {
            $sql = "select * from tharif7 where (CONSMIN <= '$units' and CONSMAX >= '$units') and SELTABLE = 2 ";
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                while ($row = mysqli_fetch_assoc($result)) 
                {
                    $value = $units*$row['ERATE'];
                    $duty = ($value/10);
                    $fixed = $row['FIXED'];
                    if($phase == 3){
                        $rent =15;
                        $gst = 2.7;
                    }
                    else{
                        $rent =6;
                        $gst = 1.08;
                    }
                    $total= $value+$duty+$fixed+$rent+$gst;  
                }
            }
        }
    }
    elseif($tariff == "16")
    {
        $load /= 1000;
        if($billcycle == 2)
        {
            $units/=2;
            $sql = "select * from tharif7 where (CONSMIN <= '$units' and CONSMAX >= '$units') and SELTABLE = 3 ";
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                while ($row = mysqli_fetch_assoc($result)) 
                {
                    $value = $units*$row['ERATE']*2;
                    $duty = ($value/10);
                    $fixed = $row['FIXED']*2;
                    if($phase == 3){
                        $rent =30;
                        $gst = 5.4;
                    }
                    else{
                        $rent =12;
                        $gst = 2.16;
                    }
                    $total= $value+$duty+$fixed+$rent+$gst;   
                }
            }
        }
        else
        {
            $sql = "select * from tharif7 where (CONSMIN <= '$units' and CONSMAX >= '$units') and SELTABLE = 3 ";
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                while ($row = mysqli_fetch_assoc($result)) 
                {
                    $value = $units*$row['ERATE'];
                    $duty = ($value/10);
                    $fixed = $row['FIXED'];
                    if($phase == 3){
                        $rent =15;
                        $gst = 2.7;
                    }
                    else{
                        $rent =6;
                        $gst = 1.08;
                    }
                    $total= $value+$duty+$fixed+$rent+$gst;  
                }
            }
        }
    }
    elseif($tariff == "17")
    {
        $sql = "select * from tharif9 ";
		$result = mysqli_query($conn,$sql);
		if($result)
		{
			while ($row = mysqli_fetch_assoc($result)) 
			{
                $value = ($units *$row['ERATE'])+$row['FIXED'];
            }
        }
    }
    else
    {
        echo "error";
    }

?>
    
            <div class="card card-4">
                <div class="card-body">
    
<?php
     echo "<table class='table table-striped' border=1 style='width:100%;'><tr><th>Bill Details</th><th>Amount</th></tr>
     <tr><th>Energy Charge</th><td>$value</td></tr>
     <tr><th>Duty</th><td>$duty</td></tr>
     <tr><th>Fixed Charge</th><td>$fixed</td></tr>
     <tr><th>EMeter Rent</th><td>$rent</td></tr>
     <tr><th>GST</th><td>$gst</td></tr>
     <tr><th>Total Amount</th><td>$total</td></tr>
     </table>";
 }
        
?>
            </div>
        </div>
    </div>
</div>
<!-- end document-->