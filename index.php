<!Doctype html>

<head>
    <meta charset="utf-8">
    <title>Send mail</title>
    <link type="text/css" rel="stylesheet" href="style.css" />
    <script src="js/game.js" type="text/javascript"></script>
    <link <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
</head>

<body>

    <?php
        if(!empty($_POST)){
            extract($_POST);    
            $valid = true;
            if(empty($nom)){
                $valid=false;
                $erreurnom="Vous an'avez pas rempli votre nom";
            }
            if(!preg_match("/^[a-z0-9\-_.]+@[a-z0-9\-_.]+\.[a-z]{2,3}$/i",$email)){
                echo "email pas valide";
            }
            if(empty($email)){
                $valid=false;
                $erreuremail="Vous an'avez pas rempli votre email";
            }
            if(empty($message)){
                $valid=false;
                $erreurmessage="Vous an'avez pas rempli votre message";
            }

            if($valid){
                echo "tous les champs sont bons";
            }
        }
    ?>
    
    <section id="section" class="container-fluid">
        <div class="col-lg-4"></div>
        <div class="container text-center col-lg-4 form description">
            <h2>Formulaire de contact</h2>
            <hr class="section1">
            <p>Me contacter :</p>

            <form method="post" action="index.php">
            <table border="0" cellspacing="1" width="400">
                <tr>
                <td width="98" class="description">Nom</td>
                <td width="295">
                    <input type="text" id="nom" value="<?php if(isset($nom)) echo $nom; ?>" size="30">
                    <span class="error-message"><?php if(isset($erreurnom)) echo $erreurnom; ?></span>
                </td>
                </tr>

                <tr>
                <td width="98" class="description">Email</td>
                <td width="295">
                    <input type="text" id="email" value="<?php if(isset($email)) echo $email; ?>" size="30">
                    <span class="error-message"><?php if(isset($erreuremail)) echo $erreuremail; ?></span>
                </td>
                </tr>
                
                <tr>
                <td width="98" class="description">Message</td>
                <td width="295">
                    <textarea rows="3" id="message" value="<?php if(isset($message)) echo $message; ?>" cols="30"></textarea>
                    <span class="error-message"><?php if(isset($erreurmessage)) echo $erreurmessage; ?></span>
                </td>
                </tr>
                </table>
                <br>
                <input type="submit" value="Envoyer">
            </form>

        </div>
        <div class="col-lg-4"></div>
    </section>

</body>

</html>