<!Doctype html>
<head>
    <meta charset="utf-8">
    <title>Send mail</title>
    <link type="text/css" rel="stylesheet" href="style.css" />
    <link <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
</head>

<body>

    <?php
        if(!empty($_POST)) {
            extract($_POST);
            $valid = true;
            if(empty($nom)){
                $valid=false;
                $erreurnom="Vous n'avez pas rempli votre nom";
            }
            if(!preg_match("/^[a-z0-9\-_.]+@[a-z0-9\-_.]+\.[a-z]{2,3}$/i",$email)){
                $valid = false;
                $erreuremail="Votre email n'est pas valide";
            }
            if(empty($email)){
                $valid=false;
                $erreuremail="Vous n'avez pas rempli votre email";
            }
            if(empty($message)){
                $valid=false;
                $erreurmessage="Vous n'avez pas rempli votre message";
            }/*
            if(empty($_SESSION['captcha'] != $mot)) {
                $valid=false;
                $erreurmessage="Vous êtes un robot";
            }
            else {
                $valid=true;
                $erreurmessage="Vous n'êtes pas un robot";
            }*/

            if($valid){
                $to = "floryan.lollivier@gmail.com";
                $sujet = $nom." a contacté le site";
                $header = "From : $nom <$email>";
                $message = stripslashes($message);
                $nom = stripslashes($nom);
                if(mail($to,$sujet,$message,$header)){
                    $erreur = "Votre message m'est bien parvenue";
                    unset($nom);
                    unset($email);
                    unset($message);
                }
                else{
                    $erreur = "Une erreur est survenue et votre mail n'est pas parti";
                }
            }
        }
    ?>
    <?php require('captcha.php'); ?>

    <div id="contenu" class="container-fluid">
    <div class="col-lg-4"></div>
        <div class="container text-center col-lg-4 form description">
            <h1>Formulaire de contact</h1>
            <h2>Me contacter :</h2>
            <hr/>
            <?php
                if(isset($erreur)){ echo "<p>$erreur</p>"; }
            ?>
            <form method="post" action="index.php">
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" value="<?php if(isset($nom)) echo $nom; ?>"/>
            <span class="error-message"><?php if(isset($erreurnom)) echo $erreurnom; ?></span>
            <br/>

            <label for="email">Email :</label>
            <input type="text" name="email" id="email" value="<?php if(isset($email)) echo $email; ?>"/>
            <span class="error-message"><?php if(isset($erreuremail)) echo $erreuremail; ?></span>
            <br/>

            <label for="message">Votre message :</label>
            <textarea name="message" id="message"><?php if(isset($message)) echo $message; ?></textarea><br/>
            <span class="error-message"><?php if(isset($erreurmessage)) echo $erreurmessage; ?></span>
            <br/>

            <label for="captcha">Recopiez le mot : "<?php echo captcha(); ?>" </label>
            <input type="text" name="captcha" id="captcha" />
            <br/>

            <input type="submit" value="Envoyer">
        </div>
    <div class="col-lg-4"></div>
    </div>
</body>

</html>