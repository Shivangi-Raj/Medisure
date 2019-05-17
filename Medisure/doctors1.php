<html>
<head>
</head>
<body>
<table>
<tr>
<th>d_id</th>
<th>d_name</th>
<th>qualification</th>
<th>specialists</th>
<th>experience</th>
<th>dfee</th>
<th>clinic</th>
<th>ratings</th>
</tr>
<?php 

$host = "localhost"; 
$user = "user12"; 
$pass = "saioni"; 
$db = "postgres"; 

$con = pg_connect("host=$host dbname=$db user=$user password=$pass")
    or die ("Could not connect to server\n"); 
$query = "SELECT * FROM doctors where specialists='dentists'"; 

$rs = pg_query($con, $query) or die("Cannot execute query: $query\n");

while ($ro = pg_fetch_object($rs)) {
    echo $ro->d_id . " ";
    echo $ro->d_name . " ";
    echo $ro->qualification . " ";
	echo $ro->specialists . " ";
	echo $ro->experience . " ";
	echo $ro->dfee . " ";
	echo $ro->clinic . " ";
	echo $ro->ratings . " ";
	
    echo "\n";
}

pg_close($con); 

?>
</table>
</body>
</html>