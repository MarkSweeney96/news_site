<!--
Author: Mark Sweeney
Date: 2017-31-03
-->

<?php

    require_once 'classes/DB.php';
    require_once 'classes/StoriesTable.php';

    $errors = array();
    $formdata = array();

    $formdata["type"]           = $_POST["type"];
    $formdata["headline"]       = $_POST["headline"];
    $formdata["storyText"]      = $_POST["storyText"];
    $formdata["date"]           = $_POST["date"];
    $formdata["time"]           = $_POST["time"];
    $formdata["author"]         = $_POST["author"];
    $formdata["title"]          = $_POST["title"];


    

    if (empty($errors)) {
        try {
            $conn = DB::getConnection();
            $table = new StoriesTable($conn);
            $id = $table->insert($formdata["type"], $formdata["headline"],$formdata["storyText"],$formdata["date"], $formdata["time"],$formdata["author"],$formdata["title"]);

            header("Location: index.php");
        }
        catch (PDOException $e) {
            $conn = null;
            exit("Connection failed: " . $e->getMessage());
        }
    }
        
        
        
    else {
        require 'form.php';
    }
?>