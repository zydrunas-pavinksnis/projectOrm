<?php

    include_once "bootstrap.php";
    
    // Helper functions
    function redirect_to_root(){
        header("Location: " . parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));
    }

    // Add new product
    if(isset($_GET['name'])){
        $project = new Project();
        $project->setName($_GET['name']);
        $entityManager->persist($project);
        $entityManager->flush();
        redirect_to_root();
    }

    print("<pre>Add new project: " . "</pre>");
?>

<form action="" method="GET">
  <label for="name">Project name: </label><br>
  <input type="text" name="name" value="Dalykas"><br>
  <input type="submit" value="Submit">
</form> 
<hr>