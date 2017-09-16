<?php


/*
$errores= '';
$enviado= '';

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $email= $_POST['email'];
    $apellido =$_POST['apellido'];
    $email= $_POST['email'];
    $telefono = $_POST['telefono'];
    #NOMBRE------------
    
    if (!empty($nombre)){
        $nombre = trim($nombre);
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
        
    } else {
        $errores .= 'Por favor ingresa un nombre <br />';
    }
    #APELLIDO----
    
    if (!empty($apellido)){
        $apellido = trim($apellido);
        $apellido = filter_var($apellido, FILTER_SANITIZE_STRING);
        
    } else {
        $errores .= 'Por favor ingresa un apellido <br />';
    }
    #TELEFONO
    if (!empty($telefono)){
        $telefono = trim($telefono);
        $telefono = filter_var($telefono, FILTER_SANITIZE_NUMBER_INT);
        
        if (!filter_var($telefono, FILTER_VALIDATE_INT)) {
            $errores .= 'Por favor ingresa un email valido <br />' ;
        }
        
    } else {
        $errores .= 'Por favor ingresa un telefono <br />';
    }
    #EMAIL
    if (!empty($email)){
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errores .= 'Por favor ingresa un email valido <br />';
            
        } else {
            $errores .= 'Por favor ingresa un correo <br />';
        }
        
        if (!empty($mensaje)) {
            $mensaje = htmlspecialchars($mensaje);
            $mensaje = trim($mensaje);
            $mensaje = stripslashes($mensaje);
        } else {
            $errores .= ' Por favor ingresa el mensaje <br />' ;
        }
        
        if (!$errores) {
            $enviar_a = 'pgonzalorodriguez@gmail.com';
            $asunto = 'Correo enviando desde EstacionAR';
            $mensaje_preparado = "De: $nombre \n ";
            $mensaje_preparado .= "Correo: $email \n";
            $mensaje_preparado .= "Mensaje: " . $mensaje ;
            
            $enviado ='true' ;
        }
    }
}
 * 
 */
