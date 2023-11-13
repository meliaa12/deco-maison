<!DOCTYPE html>
<html lang="FR">
    <head>
    <link rel="stylesheet" href="style4.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8" />
    <title> blog</title>


    </head>

    <header>
    <div class="flexbox2">
        <img class="logo" src="logo site decoration .png" />
       
    </div>

    </div>
    
    
    
<div class="fond">
<form action="reponse.php"method="post" class="formulaire" target="_blank" >
       
       <br>
       <label for="Sujet"> Sujet:</label>
       <input class="size" type="text" id="sujet" name="sujet" value="test" > <br>
       <label for="fname"> Prénom:</label>
       <input class="size" type="text" id="fname" name="fname" placeholder="prénom" value="test" > <br>
       <label for="lname"> Nom de famille:</label>
       <input class="size" type="text" id="lname" name="lname" placeholder="nom" value="test"> <br>
       <label for="email"> Adresse mail:</label>
       <input class="size" type="email" id="mail" name="mail" value="test@test"> <br>
       <label for="tel"> Numero de télephone:</label>
       <input class="size" type="tel" id="Numero" name="telephone" value="0606060606" > <br>
       <label for="Date"> Date de naissance:</label>
       <input class="size" type="date" id="naissance" name="naissance" value="test" ><br>
       <label for="message"> Message:</label>
       <textarea class="size" type="text" id="message" name="message" value="test"></textarea> <br>

       
       <div>
           <button type="submit">Envoyer</button>
         </div>
</div>
    
//<?php



// $servername = 'localhost';
// $username = 'root';
// $password = 'root';
// $dbname = 'melcake';
// //On établit la connexion

// $dbname = 'melcake';
// $conect = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// $name = $_POST["fname"]; 
// echo "name" . $name;
// echo $_POST["fname"];
// try{ 
//   // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo 'Connexion réussie';
  
// $melcakeStatement= $conect->prepare("INSERT INTO `User`(`id`, `subject`, `name`, `lastname`, `mail`, `phone`, `born`, `message`) VALUES (null,'[melix-2]','$name','[value-4]','[value-5]',0606060606,'2003-09-12','[value-8]');");
// $melcakeStatement->execute();
// $melcake = $melcakeStatement->fetchAll();

// var_dump($melcake);

//}


// catch(PDOException $e){
// echo "Erreur : " . $e->getMessage();
// }

// ?>



<!-- <?php
echo'
<div class= "fond" >
  <div class="" > Sujet ' . 
    $_POST["sujet"] .'!
  </div>
  <div class="" > Prénom:' . 
    $_POST["fname"] .'!
  </div>
  <div class="" > Nom:' . 
    $_POST["lname"] .'!
  </div>
  <div class="" > Mail:' . 
    $_POST["mail"] .'!
  </div>
  <div class="" > Numero de tel:' . 
    $_POST["telephone"] .'!
  </div>
  <div class="" > Date:' . 
    $_POST["naissance"] .'!
  </div>

</div>
';


?> -->


    </form>
</html>