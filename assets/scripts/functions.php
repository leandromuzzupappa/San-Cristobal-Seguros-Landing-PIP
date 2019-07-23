<?php
require_once '../../db/connect.php';

// Handle Login
if ( isset($_POST['formCodigoProductor']) ) {

    $data = $_POST;
    $isCodigoProductorValid = false;
    $thisLog = '';

    if ( !empty($data['codigoProductor']) ) {
        $getCodigoProductor = trim($data['codigoProductor']);
        $thisLog .= '- Codigo Productor ingresado es: '.$getCodigoProductor.'<br><br>';

        // Handle db codigo productor
        $query = mysqli_query($db, 'select * from codigosProductor');

        $thisLog .= '-Lista de Codigos de Productor recibidos: <br>';
        while ( $codigo = mysqli_fetch_assoc($query) ) {
            $thisLog .= ' --'.$codigo['codigoProductor'].'<br>';
            

            if ( in_array($getCodigoProductor, $codigo, true ) ) {
                $isCodigoProductorValid = true;
            }
        }
        
        $thisLog .= '<br>-Validacion del codigo de productor: <br>';
        if ( $isCodigoProductorValid === true ) {
            $thisLog .= '--El codigo es correcto';
            $_SESSION['codigoProductor'] = $getCodigoProductor;
            header("Location: ../../inicio.php");
        } else {
            $thisLog .= '--El codigo productor ingresado no es valido';
            $codigoProductorInvalido = 'El código de productor es invalido';
            $_SESSION['errores'] = $codigoProductorInvalido;
            header("Location: ../../index.php");
        }

    } else {
        $thisLog .= 'El código de productor está vacío';
        $codigoProductorVacio = 'El código de productor está vacío';
        $_SESSION['errores'] = $codigoProductorVacio;
        header("Location: ../../index.php");
    }
}

// Handle Formulario de registro
if ( isset($_POST['formRegistroUsuarios']) ) {
    $data = $_POST;
    $hasErrors = [];
    $thisLog = '';

    if ( !empty($data['nombre']) ) {
        $nombre = trim($data['nombre']);
    }
    if ( !empty($data['apellido']) ) {
        $apellido = trim($data['apellido']);
    }
    if ( !empty($data['tipoDocumento']) ) {
        $tipoDocumento = trim($data['tipoDocumento']);
    }
    if ( !empty($data['numeroDocumento']) ) {
        $numeroDocumento = trim($data['numeroDocumento']);
    }
    if ( !empty($data['tel']) ) {
        $tel = trim($data['tel']);
    }
    if ( !empty($data['email']) ) {
        $email = trim($data['email']);
    }
    if ( !empty($data['direccion']) ) {
        $direccion = trim($data['direccion']);
    }
    if ( !empty($data['pais']) ) {
        $pais = trim($data['pais']);
    }
    if ( !empty($data['provincia']) ) {
        $provincia = trim($data['provincia']);
    }
    if ( !empty($data['ciudad']) ) {
        $ciudad = trim($data['ciudad']);
    }
    if ( !empty($data['pasaporte']) ) {
        $pasaporte = trim($data['pasaporte']);
    }
    if ( !empty($data['fichaMedica']) ) {
        $fichaMedica = trim($data['fichaMedica']);
    }

    // Get codigo productor from login page, validate with db and
    // save it into a variable
    function validateProductorCode ($db) {
        $codigoProductorSession = $_SESSION['codigoProductor'];
        $sql = "SELECT * FROM codigosProductor WHERE codigoProductor = $codigoProductorSession";
        $query = mysqli_query($db, $sql);

        $resultado = mysqli_fetch_assoc($query);
        if ( $codigoProductorSession == $resultado['codigoProductor'] ) {
            $codigoProductorSessionValidado = $resultado['id'];
            $_SESSION['codigoProductorValidado'] = $codigoProductorSessionValidado;
        }
    }
    validateProductorCode ($db);

    // Saves everything in session
    $_SESSION['nombre'] = $nombre;
    $_SESSION['apellido'] = $apellido;
    $_SESSION['tipoDocumento'] = $tipoDocumento;
    $_SESSION['numeroDocumento'] = $numeroDocumento;
    $_SESSION['tel'] = $tel;
    $_SESSION['email'] = $email;
    $_SESSION['direccion'] = $direccion;
    $_SESSION['pais'] = $pais;
    $_SESSION['provincia'] = $provincia;
    $_SESSION['ciudad'] = $ciudad;
    $_SESSION['pasaporte'] = $pasaporte;
    $_SESSION['fichaMedica'] = $fichaMedica;
}

var_dump($_SESSION);

echo '<hr>';
var_dump($_POST);