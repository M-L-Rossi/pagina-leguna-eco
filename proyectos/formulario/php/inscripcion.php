<?php


require_once('conexion.php');

//Este programa guarda en variables php los datos recopilados en el programa y luego inserta estos valores en la tabla especificada de nuestra base de datos
 //leer todo el programa y sus comentarios. Luego realizar las acciones solicitadas

 //declarar las variables que vamos a utilizar es recomendable utilizar los mismos nombres que utilizamos en la creacion del formulario
 //para declarar una variable coloco el simbolo $ delante del nombre y colocar el metodo post o get y el nombre de la variable del formulario
 $nombre=$_POST['nombre']; //en esta linea lo que hacemos es guardar en la variable nombre de php el contenido del campo nombre de mi formulario utilizando el metodo GET
 $edad=$_POST['edad'];
 $email=$_POST['email'];

 echo "Datos recibidos <br>";
 echo "Hola ".$nombre; //utilizo esta sentencia para verificar si recibi bien los datos

 //En el archivo que contiene nuestro formulario en html en la etiqueta form, en el atributo action colocar el nombre de este archivo con su extension
 //por ejemplo: <form action="recibir.php">
 //Realizar la prueba con echo con todos nuestros datos

//iniciamos la conexion con la Base de Datoe
$conn=new conexion();

//Hacemos la consulta de SQL para actualizar tabla estudiantes
$queryINSERT="INSERT INTO `gente` (`nombre`, `edad`, `email`) VALUES ('$nombre', '$edad', '$email');";

//primer parametro la conexion, el segundo la consulta
$insert= mysqli_query($conn->conectardb(),$queryINSERT);

 ?>
