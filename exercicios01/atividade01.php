<html>
    <body>
        <?php 
        echo "O Consumo médio é: ";
        $distancia = $_GET["Km"];
        $Litros = $_GET["litros"];
        $consumo = $distancia / $Litros;
        echo $consumo ;
        ?>
    </body>
</html>