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
    
    <section id="section" class="container-fluid">
        <div class="col-lg-4"></div>
        <div class="container text-center col-lg-4 form">
            <h2>Formulaire de contact</h2>
            <hr class="section1">
            <p>Challenge sur l'envoi de mail.<br> Voici le formulaire !!</p>

            <form method="" action="javascript:sendMail()">
            <table border="0" cellspacing="1" width="400">
                <tr>
                <td width="98">Destinataire</td>
                <td width="295">
                    <input type="text" id="edTo" size="30"></td>
                </tr>
                <tr>
                <td width="98">Sujet</td>
                <td width="295">
                    <input type="text" id="edSubject" size="30"></td>
                </tr>
                <tr>
                <td width="98">Message</td>
                <td width="295">
                    <textarea rows="3" id="edBody" cols="30"></textarea></td>
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