<h2>
    <?php
    $paragrafo = $_POST['paragrafo'];
    $censura = $_POST['censura'];

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
    echo str_replace($censura, '***', $paragrafo);
    echo $pargrafo;

    ?>
</h4>
<div>
    <?php
    echo strlen($paragrafo);

    ?>

</div>