
<?php
 $desc = "";
 $value = "";
 $conn=mysqli_connect("localhost","root","","tharif");
 if(!$conn)
   {
   	 echo'<script>alert("connection failed");</script>';
   }

 if(isset($_GET['send'])){
     //POST data
     $tariff = $_GET['tariff_id'];
     $purpose = $_GET['tariff_pur'];
     $billcycle = $_GET['bill_cycle'];
     $units = $_GET['units'];
     $phase = $_GET['phase'];
     $load = $_GET['load'];
     
    
    echo "<script type='text/javascript'>document.getElementById('tariff_id').value =".$tariff.";</script>";
     
     
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
            $total= $value+$duty+$fixed+$rent+$gst;
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
            $total= $value+$duty+$fixed+$rent+$gst;
        }
    }
    else
    {
        echo "error";
    }

?>
    
           
    
<?php
    echo "
                <div class=\"card-body\">
     <table class='table table-striped' border=1 style='width:100%; text-align: left;'><tr><th>Bill Details</th><th>Amount</th></tr>
     <tr><td>Energy Charge</td><td>$value</td></tr>
     <tr><td>Duty</td><td>$duty</td></tr>
     <tr><td>Fixed Charge</td><td>$fixed</td></tr>
     <tr><td>EMeter Rent</td><td>$rent</td></tr>
     <tr><td>GST</td><td>$gst</td></tr>
     <tr><td>Total Amount</td><td>$total</td></tr>
     </table></div>";
 }
        
?>