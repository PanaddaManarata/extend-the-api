<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>

</head>
<body>
<?php require 'config.php'?>

<div class="container">
<h1>notes app</h1>

<div id="formcontrole">
        <div class="ctrlbtn">create</div>
        <div class="ctrlbtn">delete</div>
        <div class="ctrlbtn">update</div>
        <div class="ctrlbtn">list</div>
        <div class="ctrlbtn">search</div>
    </div>

    
    <form methode="post" >
   
    <div class="inputform">
    <input type="text" name="title" id="title">
    <textarea name="content" id="" cols="30" rows="10"></textarea>
    <input type="button" value="create note">
    </div>
    </form>



    </div>

    
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>