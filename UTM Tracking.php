<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>UTM Tracking</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  $( function() {
    $( "input" ).checkboxradio();
  } );
  </script>
</head>
<body>
<?php
// define variables and set to empty values
$CampaignErr = $radio1Err = $radio2Err = $urlErr = "";
$Campaign = $radio1 = $radio2 = $url = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["url"])) {
    $urlErr = "URL is required";
  } else {
    $url = test_input($_POST["url"]);
	  if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)) {
  $urlErr2 = "Invalid URL"; 
  }
}

  if (empty($_POST["Campaign"])) {
    $CampaignErr = "Campaign is required";
  } else {
    $Campaign = test_input($_POST["Campaign"]);
  }

  if (empty($_POST["radio1"])) {
    $radio1Err = "Source is required";
  } else {
    $radio1 = test_input($_POST["radio1"]);
  }

  if (empty($_POST["radio2"])) {
    $radio2Err = "Medium is required";
  } else {
    $radio2 = test_input($_POST["radio2"]);
  }
}

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO UTMTracking (department, datepicker, notes, url, source, medium, campaign, term, content)
VALUES ('$department', '$datepicker', '$notes', '$url', '$radio1', '$radio2', '$Campaign', '$Term', '$Content')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
</body>
</html>
