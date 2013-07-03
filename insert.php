<?php
//Configure and Connect to the Databse
 $con = mysql_connect("localhost","root","");
 if (!$con) {
 die('Could not connect: ' . mysql_error()); 
 }
 
 mysql_select_db("insertajax", $con);
 //Pull data from home.php front-end page
 
 	$id=$_POST['id'];
	$name=$_POST['name'];
	$email=$_POST['email'];
 //Insert Data into mysql

$query=mysql_query("INSERT INTO myTable(ID,Name,Email) VALUES('$id','$name','$email')");
if($query){
echo "Registro $name inserido com sucesso!";
}
else{ echo "Ocorreu um erro ao inserir!"; }
?>