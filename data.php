<h2>
    <?php
    $paragrafo = $_POST['paragrafo'];

    echo $paragrafo;
    //strlen(stringa) - ritorna la lunghezza di una stringa




    ?>
</h2>

<h3>
    <?php
    echo strlen($paragrafo);
    ?>

</h3>

<h4>
    <?php
    echo str_replace('Alessio', '***', $paragrafo);
    ?>

</h4>