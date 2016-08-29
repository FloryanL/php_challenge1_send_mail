<?php
    function motListe()
    {
        $liste = array('LaGrVadrouille', 'captcha', 'robot','TontonFlingueur');
        return $liste[array_rand($liste)];
    }

    function captcha()
    {
        $mot = motListe();
        $_SESSION['captcha'] = $mot;
        return $mot;
    }
    /*
    function motHasard($n)
    {
        $lettres = array_merge(range('a','z'),range('A','Z'),range('0','9'));
        $nl = count($lettres)-1;
        $mot = '';
        for($i = 0; $i < $n; ++$i)
            $mot .= $lettres[mt_rand(0,$nl)];
        return $mot;
    }*/
?>