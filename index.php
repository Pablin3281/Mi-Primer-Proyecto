<?php
// 1 genera un html de hola mundo//

//echo "<h1>Hola Mundo</h1>" ;

// 2 genera un html con una lista en un arreglo//
//$lista = array('Lechuga','Tomate','Papa','Batata','Zanahoria');

//con ciclo foreach//
/*echo "<ul>";
        foreach($lista as $item) {
            echo "<li>".$item."</li>";
        }
echo "</ul>";
*/

//con ciclo for//

/*echo "<ul>";
        for ($i=0;$i<count($lista);$i++){
            echo "<li>".$lista[$i]."</li>";
        }
echo "</ul";*/

// 3 genera un html con un formulario//

echo '<form method = "GET" action = "index.php"> 
<input type="text" name="nombre" placeholder="nombre"/>
<input type="text" name="apellido" placeholder="apellido"/>
<input type="text" name="edad" placeholder="edad"/>
<input type="submit">
</form>';

if (    isset($_GET['nombre']) 
        && isset($_GET['apellido']) 
        && isset($_GET['edad']) 
        && !empty($_GET['nombre'])
        && !empty($_GET['apellido'])
        && !empty($_GET['edad'])
    )
    {
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $edad = $_GET['edad'];
        $nombre = $_GET['nombre'];
        echo "<h3>".$nombre."</h3>";
        echo "<h3>".$apellido."</h3>";
        echo "<h3>".$edad."</h3>";
    }
    else{
        echo "<h3>complete los campos!!</h3>";
    }
?>