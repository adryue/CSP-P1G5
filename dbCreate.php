<?php
$servername = "localhost";
$username = "root";
$password = "123456";

// Create connection
$conn = new mysqli($servername, $username, $password);
//$conn = new mysqli($servername, $username);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Create database
$sql = "CREATE DATABASE myDB;";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
$conn->query("USE myDB;");
// Add people table
$sql = "CREATE TABLE people (
    ID int primary key auto_increment,
    fName varchar(20),
    lName varchar(20),
    bio varchar(300)
);";
if ($conn->query($sql) === TRUE) {
	echo "people table created successfully";
} else {
	echo "Error creating people table" . $conn->error;
}
$conn->query("TRUNCATE TABLE people");
// Add people
$sql = "INSERT INTO people (fName, lName, bio)
VALUES  ('Adrian', 'Yuen', 'I\'m Adrian. Some of my hobbies include playing the piano and coding. I learned programming from my dad in elementary school and middle school. My favorite language is C++.'),
        ('Kallie', 'Kuang', 'Hi, I\'m Kallie. I\'ve learned several programming languages over the years, including Java, C++, Python, HTML/CSS/JS, and C# for Unity. Outside of coding, I enjoy art and writing.'),
        ('Daniel', 'Chen', 'Hi I\'m Daniel, and I\'m the sexiest Asian coder in the whole of my friend group (which only consists of me) my hobbies include procrastinating on APang homework and watching as my brain rots as I try to figure out how coding works.'),
        ('David', 'Zhi', 'I\'m David. I like watching sports and TV shows. Things I don\'t like doing are not watching sports and tv shows.'),
        ('Jeffrey', 'Wu', 'Hi I\'m Jeffrey. I like playing and watching watching basketball. My favorite team is the Warriors. In my offtime I enjoy crying over my homework or the state of my fantasy football team.'),
        ('Pranav', 'Santhakumar', 'Santhakumar, Pranav: Hard-worker, adaptable & good at communicating. Coding skills: Learning python.');";
if ($conn->query($sql) === TRUE) {
    echo "inserted values successfully";
} else {
    echo "error adding people" . $conn->error;
}

?>