<?php
$servername = "localhost";
$username = "admin";
$password =  "xwGiEQe9uXH0";

$title = filter_var($_GET['title'], FILTER_SANITIZE_STRING); 
$content = filter_var($_GET['content'], FILTER_SANITIZE_STRING);

//add notes

if (isset($_GET['title'])){
    if(isset($_GET['content'])){
        $sql = "INSERT INTO dataIPA.notes (title, content)
        VALUES ('$title', '$content')";
    
        if ($conn->query($sqladd)) {
        echo " New record created successfully ";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
  
}
}

// give list 
if(isset($_GET['list'])){

    $sql = "SELECT * FROM dataIPA.notes"; 
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $jsonresult = json_encode($row);
            print_r($jsonresult);
        } 
    } else {
        echo "no results";
    }
    }

// delete notes 

$delete = $_GET['delete']; 

if(isset($_GET['delete'])){

    $sql = "DELETE FROM dataIPA.notes WHERE title='$delete'";
    if ($conn->query($sql)) {
        echo " deleted ";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    }

//update 

$update = $_GET['update']; 
$newtext = $_GET['newtext'];

if(isset($_GET['update'])){

    $sql = "UPDATE dataIPA.notes SET content='$newtext' WHERE title='$update'";
    if ($conn->query($sql)) {
        echo " updated ";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
}
}

// get 

$select = $_GET['select']; 

if(isset($_GET['select'])){

    $sql = "SELECT *  FROM dataIPA.notes WHERE  title='$select'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $jsonresult = json_encode($row);
        print_r($jsonresult);
    } 
} else {
    echo "no results";
}
}


// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo " Connected successfully ";


//do

mysqli_close($conn);

?>



