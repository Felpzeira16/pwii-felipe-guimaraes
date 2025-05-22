<html>
    <body>
        <?php 
        $preco = $_GET["produto"];
        $aumento = ($preco * 16) / 100;
        $preco2 = $preco + $aumento;
        $parcelas = $preco2 / 10;
        echo "O preço total é $";
        echo $preco2; 
        echo", já as parcelas são $";
        echo $parcelas;
        ?>
    </body>
</html>