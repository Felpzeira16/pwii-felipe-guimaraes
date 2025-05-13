<html>
    <body>
        <?php 
        echo "A área do trapézio é: ";
        $altura = $_GET["h"];
        $base = $_GET["B"];
        $area = $base * $altura / 2;
        echo $area ;
        echo "cm²";
        ?>
    </body>
</html>