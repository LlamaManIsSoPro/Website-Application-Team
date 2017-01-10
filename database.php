<?php
$cn = new mysqli('localhost', 'root', '');
if ($cn->connect_error) {
	echo "Connect Failed : " . $cn->connect_error;
}

$sql = 'USE user_login';

echo '<br />';
if ($cn->query($sql) === TRUE) {
    echo "Connected to database";
} else {
    echo "Error connecting to database" . $cn->error;
}

echo 'connected succesfully';

$sql = "
	CREATE TABLE members (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password CHAR(128) NOT NULL
) ENGINE = InnoDB;
";

echo '<br />';
if ($cn->query($sql) === TRUE) {
    echo "Table created successfully1";
} else {
    echo "Error creating table: " . $cn->error;
}


$sql = "
	CREATE TABLE login_attempts (
    user_id INT(11) NOT NULL,
    time VARCHAR(30) NOT NULL
) ENGINE = InnoDB;
";

echo '<br />';
if ($cn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $cn->error;
}

/*$sql = 'create database user_login';

if ($cn ->query($sql) === true) {
	echo 'database has been created';
}
else {
	echo 'error creating datbase';
}*/
$cn -> close()
?>