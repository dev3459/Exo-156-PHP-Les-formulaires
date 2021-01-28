<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande avec formulaire</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div id="container">
<?php
    if(isset($_POST['submit']) && $_POST['firstName']){
        $prenom = $_POST['firstName'];
        if($prenom === "james"){
            echo "Je suis Bond, James Bond";
        }else{
            echo "Bonjour $prenom";
        }
    }
?>
    </div>
</body>
</html>