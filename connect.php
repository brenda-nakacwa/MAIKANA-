<?php
$host="localhost";
$username="root";
$password="";
$dbname="MAIKANAINVESTMENTSLTD"
 
$conn= new mysqli($host,$username,$password,$dbname);

if($conn==TRUE){
    echo "db connected successfully"
}esle{
    echo "db connection failed"
}
?>