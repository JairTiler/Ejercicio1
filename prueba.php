<?php
$biblioteca = array();
function agregarLibro($titulo, $autor){
    global $biblioteca;
    $libro = array ("titulo"=>$titulo, "Autor" =>$autor);
    array_push($biblioteca, $libro);
    
}


function  eliminarLibroporTitulo($titulo){
    global $biblioteca;
foreach ($biblioteca as $indice => $libro){
    if ($libro["titulo"]==$titulo){

        unset($biblioteca[$indice]);
    }
}

}

//function mostrarBiblioteca(){
  //  global $biblioteca,$autor;
    //foreach ($biblioteca as $indice => $libro){
      //  echo "Libro".($indice +1).":".$libro["titulo"]."-Autor: " . $libro["autor"].
        //"<br>";

    //}
//}

agregarLibro("El principito", "Antoine de Saint-Exupéry");
agregarLibro("Cien Años de Soledad", "Gabriel Garcia Máruqez");
agregarLibro("El señor de los Anillos", "J.R.R. Tolkien");

//echo "Libros en la biblioteca:<br>";
//mostrarBiblioteca();

//eliminarLibroporTitulo("Cien Años de Soledad");

//echo "<br> Libros en la biblioteca despues de eliminar un libro: <br>";
//mostrarBiblioteca();


?>