<html>
    <body>
        <?php 
        echo "O Volume é: ";
        $altura = $_GET["altura"];
        $largura = $_GET["largura"];
        $comprimento = $_GET["comprimento"];
        $volume = $comprimento * $altura * $largura;
        echo $volume ;
        echo "cm";
        ?>
    </body>
</html>