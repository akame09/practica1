
<?php


    include_once "num.php";
    
    ?>
    <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
    
        <input type="number" name="num" placeholder="Ingrese Numero"><br>
    
        <input type="submit" name="submit" value="guardar">
    </form>
    
    <?php
    if (isset($_POST["submit"])) {
        $numin = $_POST["num"];
    
        $numin = new numin();
        $resultado = $numin->insertar($numin);
    
        if ($resultado != 0) {
            header("location: index.php");
        } else {
            echo "Error: No se ingreso el numero";
        }
    }   


