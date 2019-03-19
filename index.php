<?php 
$conn = mysqli_connect('mysql_k', 'root', '123', 'app_check24');

$sql = sprintf('INSERT INTO user (login, password, created_at, active)
VALUES ("%s","%s","%s",%s)', 'kevinaraujo', '123', date('Y-m-d'), 1);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>