<h2>
    <?php
    echo $_POST['paragrafo'];
    //strlen(stringa) - ritorna la lunghezza di una stringa


    ?>
</h2>

<h3>
    <?php
    echo strlen($_POST['paragrafo']);
    ?>

</h3>

<h4>
    <?php
    echo str_replace('Alessio', '***', ($_POST['paragrafo']));
    ?>

</h4>