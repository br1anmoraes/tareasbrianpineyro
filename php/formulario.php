<?php

class Usuario {
private $ci;
private $nombre;
private $apellido;
private $email;
private $pass;
private $fecha_nacimiento;
private $sexo;

function setCi($ci){
    $this->ci = $ci;
}

function getCi(){
    return $this->ci;
}

function setNombre($nombre){
    $this->nombre = $nombre;
}

function getNombre(){
    return $this->nombre;
}

function setApellido($apellido){
    $this->apellido = $apellido;
}

function getApellido(){
    return $this->apellido;
}

function setEmail($email){
    $this->email = $email;
}

function getEmail(){
    return $this->email;
}

function setPass($pass){
    $this->pass = $pass;
}

function getPass(){
    return $this->pass;
}

function setFecha($fecha_nacimiento){
    $this->fecha_nacimiento = $fecha_nacimiento;
}

function getFecha(){
    return $this->fecha_nacimiento;
}

function setSexo($sexo){
    $this->sexo = $sexo;
}

function getSexo(){
    return $this->sexo;
}

function guardarDatos() {
    $nombreArchivo = $this->nombre .'_' . date('d.m.Y - H') . '.json';
    $data = array(
        'ci' => $this->ci,
        'nombre' => $this->nombre,
        'apellido' => $this->apellido,
        'email' => $this->email,
        'pass' => $this->pass,
        'fecha_nacimiento' => $this->fecha_nacimiento,
        'sexo' => $this->sexo
    );

    $jsonData = json_encode($data);
    
    $file = 'historial/' . $nombreArchivo;

    if (file_put_contents($file, $jsonData)) {
    echo "Los datos se guardaron satisfactoriamente en $nombreArchivo. <br>";
    echo "Los datos ingresados fueron: <br>";
    print_r($jsonData);
    } else {
        "No se han podido guardar los datos en $nombreArchivo.";
    }

}

}

    $usuarios = new Usuario();
    $usuarios->setCi($_POST['ci']);
    $usuarios->setNombre($_POST['nombre']);
    $usuarios->setApellido($_POST['apellido']);
    $usuarios->setEmail($_POST['email']);
    $usuarios->setPass($_POST['pass']);
    $usuarios->setFecha($_POST['fecha_nacimiento']);
    $usuarios->setSexo($_POST['sexo']);

    if ($usuarios->guardarDatos()) {
    }

?>

