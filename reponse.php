<html lang="fr">


<head>
    <link rel="stylesheet" href="style4.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8" />
    <title> blog</title>
    <meta name="description" content="site sur ma premiere journée" />
</head>

<header>
<div class="flexbox2">
        <img class="logo" src="logo site decoration .png" />
       
       
    </div>
    
<!-- <div class= "blockluffy">
    <img class= "imageluffy"src="https://64.media.tumblr.com/06f0d5cf2e7491acc2fbe2e39031c1b1/tumblr_n9cnttf1FZ1ty0fy0o4_500.gif">
   </div> -->
</html>

<?php

$servername = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'melcake';
//On établit la connexion

$dbname = 'melcake';
$conect = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);


$subject = $_POST["sujet"]; 
$name = $_POST["fname"]; 
$lname = $_POST["lname"]; 
$mail = $_POST["mail"]; 
$phone = $_POST["telephone"]; 
$born = $_POST["naissance"]; 
$message = $_POST["message"]; 
echo "name" . $name;
echo $_POST["fname"];
try{ 
  // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo 'Connexion réussie';
  
$melcakeStatement= $conect->prepare("INSERT INTO `User`(`id`, `subject`, `name`, `lastname`, `mail`, `phone`, `born`, `message`) VALUES (null,'$subject','$name','$lname','$mail','$phone','$born','$message');");
$melcakeStatement->execute();
$melcake = $melcakeStatement->fetchAll();

var_dump($melcake);

}


catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}

    if($_POST["fname"] && $_POST["lname"] && $_POST["sujet"] && $_POST["mail"] && $_POST["telephone"] && $_POST["naissance"]){
        echo  "Bonjour " . $_POST["fname"] . " merci pour votre message " . $_POST["message"];
    }
    else{
        echo "Erreur";
        var_dump($_POST);
    
    }
 


echo'
<div class= "formurep" ><br>
   

  <div class="backmot" > Sujet: ' . 
    $_POST["sujet"] .'
  </div><br>

  <div class="backmot" > Prénom: ' . 
    $_POST["fname"] .'
  </div><br>

  <div class="backmot" > Nom: ' . 
    $_POST["lname"] .'
  </div><br>

  <div class="backmot" > Mail: ' . 
    $_POST["mail"] .'!
  </div><br>

  <div class="backmot" > Numero de tel: ' . 
    $_POST["telephone"] .'
  </div><br>

  <div class="backmot" > Date: ' . 
    $_POST["naissance"] .'
  </div>

</div>
';




