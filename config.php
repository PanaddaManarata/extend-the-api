<?php

$servername = "localhost";
$username = "admin";
$password =  "wCNM43HKSTou"; 


$title = $_GET["title"];
$content = $_POST["content"];
echo($title);
echo($content);


if($_GET){

}


// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo " Connected successfully ";

$sql = "INSERT INTO dataIPA.notes (title, content)
VALUES ('$title', '$content')";

//sanitize 

$title_cleanup = filter_var($title, FILTER_SANITIZE_STRING); 
$content_cleanup =filter_var($content, FILTER_SANITIZE_STRING); 

//validate

if(empty($title_cleanup)){
    echo " fill in title ";
    exit; 
}
else if (!filter_var($title_cleanup, FILTER_VALIDATE_REGEXP)) {
    echo " fill in valid title ";
    exit; 
} else {
    echo " title is validated ";
   
}

if(empty($content_cleanup)){
    echo " fill in content ";
    exit; 
}

else if(!filter_var($content_cleanup, FILTER_VALIDATE_REGEXP)){
    echo " fill in valid content ";
    exit; 
}
else {
    echo " content is valid ";
}



//do
if ($conn->query($sql)) {
    echo " New record created successfully ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}




?>