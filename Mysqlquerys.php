<?php
require 'app.php';
$servername = "localhost";
$username = "root";
$password = "waybeo@123";
$db_name = "students_detials";
$table_name = "students_list";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// Check if the database already exists
$result = mysqli_query($conn, "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$db_name'");

if (mysqli_num_rows($result) > 0) {
  echo "Database already exists";
} else {
  // Create the database
  $sql = "CREATE DATABASE $db_name";
  if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
  } else {
    echo "Error creating database: " . mysqli_error($conn);
  }
}

// Check if the table already exists
$result = mysqli_query($conn, "SHOW TABLES LIKE '$table_name'");
if (mysqli_num_rows($result) > 0) {
  echo "Table already exists";
} else {
  // Create the table
  $sql = "CREATE TABLE $table_name (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    student_age INT NOT NULL,
    student_class INT NOT NULL,
    student_class_teacher VARCHAR(20) NOT NULL,
    student_department VARCHAR(10) NOT NULL
  )";
  if (mysqli_query($conn, $sql)) {
    echo "Table created successfully";
  } else {
    echo "Error creating table: " . mysqli_error($conn);
  }
}

// Prepare data to be inserted
$data = array(
  array($student_age_data , $stude_class_data, $student_teacher_data, $student_department_data)
);

$sql = "INSERT IGNORE INTO $table_name (student_age, student_class, student_class_teacher, student_department) VALUES";
foreach ($data as $row) {
  $sql .= "('{$row[0]}', '{$row[1]}', '{$row[2]}', '{$row[3]}'),";
}
$sql = rtrim($sql, ",");
// Execute the SQL statement



mysqli_close($conn);
?>