<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
//$conn = new mysqli($servername, $username);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->query("USE myDB;");

// Draw data from database
$sql = "SELECT fName, lName, bio from people;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo '<div class="body-box" style="max-height:15vw">';
    echo '<h1 class="header">MEET THE TEAM</h1>';
    echo '<div class="flex-container">';
    while($row = $result->fetch_assoc()) {
        echo '<div class="content-box">';
        echo '<p style="font-size:1.7vw">' . $row['fName'] . ' ' . $row['lName'] . '</p>';
        echo '<a href="team_' . $row['fName'] . '.html"><img src="images/' . $row['fName'] . '_cr.jpg" class="icon"></a>';
        echo '<p style="font-size:1.7vw">' . $row['bio'] . '</p>';
        echo '</div>';
    }
    echo '</div>';
    echo '</div>';
}

?>