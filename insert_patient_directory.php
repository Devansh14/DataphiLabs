<?php 
$first_name = $_POST['first_name'];            
$last_name = $_POST['last_name'];            
$age = $_POST['age'];            
$dob = $_POST['dob'];             
$gender = $_POST['gender'];             
$phone_no = $_POST['phone_no'];             
$description = $_POST['description'];             

 //Connect to mysql server  
$link = mysqli_connect('localhost', 'root', '');  
 //Check link to the mysql server
if(!$link){                 
    die('Failed to connect to server: ' . mysql_error());             
}                        
//Select database            
$db = mysqli_select_db($link,'patient_details');     
if(!$db){            
    die("Unable to select database");     
}                         
//Create Insert query      
$query = "INSERT INTO Patient_Details (first_name, last_name, age, dob, gender,phone_no, description) VALUES ('$first_name','$last_name', $age, '$dob', '$gender', $phone_no, '$description')";     
//Execute query           
$results = mysqli_query($link,$query);   
//Check if query executes successfully    
if($results == FALSE)  
    echo mysqli_error($link) . '<br>';  
else                 
    echo 'Data inserted successfully! '; 

header('location:patient_directory.php');      
exit(); 
?> 