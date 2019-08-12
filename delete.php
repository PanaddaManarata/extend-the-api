<?php

require 'confige.php'; 

$sql = "DELETE FROM notes WHERE x "
//delete what? 

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
