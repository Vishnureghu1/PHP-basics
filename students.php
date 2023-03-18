<?php
   $servername = "localhost";
   $username = "root";
   $password = "waybeo@123";
   $dbname = "students_detials";

   $student_name = readline('Enter a name: ');

   $class = (int)readline('Enter an class: ');
   
    if (!preg_match("/^[a-zA-Z-']*$/",$student_name || empty($student_name))) {
      $nameErr = "Please enter valid data!";
      echo $nameErr;
      return false;
    } 
    if (!filter_var($class, FILTER_VALIDATE_INT)!== false) {
      $classErr = 'Please enter valid Class!';
      echo $classErr;
      return false;
    }
   $students_count = 7;
   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
   // Check connection
   if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }
   
   // sql to create table
   $conn = new mysqli($servername, $username, $password, $dbname);
   // Check connection
   if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }

    $sql =  "SELECT count('*') AS NUMBER FROM students WHERE student_class = $class";
    $result = $conn->query($sql);
  
    $res = mysqli_fetch_array($result); 
  if ($res['NUMBER'] <= $students_count) {
     $sql = "INSERT INTO students (student_name, student_class)
     VALUES ('$student_name', $class)";
     
     if ($conn->query($sql) == TRUE) {
       echo "New record created successfully";
     } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
     }
  } else {
    echo 'Seets are full!';
  }
 


   $conn->close();

?>