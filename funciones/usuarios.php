<?php
function buscarUsuarioEmail(string $email) {
    $usuario = [];
    $datos = [ 'team' => 'grupo1', 'commission' => 'tarde', 'search' => $email];
    $usuario = peticionCurl('http://apiusers.juancarlosdh.dhalumnos.com/api/users', 'GET', $datos);
    //var_dump($usuario); exit;
    $usuario = (count($usuario['data']) > 0)
        ? json_decode($usuario['data'][0]['json_data'], true)
        : [];
    return $usuario;
}
function subirAvatar($archivo, $nombre) {
    if (!file_exists('dataBase/avatarIMG')) {
        mkdir('dataBase/avatarIMG');
    }
    $ext = pathinfo($archivo['name'], PATHINFO_EXTENSION);
    $nombreArchivo = $nombre . '.' . $ext;
    //la muevo a mi carpeta avatars
    move_uploaded_file($archivo['tmp_name'], 'dataBase/avatarIMG/' . $nombreArchivo);
    return $nombreArchivo;
}
function guardarUsuario(array $usuario) {

    if (!file_exists('dataBase')) {
        mkdir('dataBase');
    }
    //me traigo el archivo entero
    $archivo = file_get_contents('dataBase/usuarios.json');

    $usuarios = json_decode($archivo, true);

    $usuarios[] = $usuario;

    $usuariosJson = json_encode($usuarios);

    file_put_contents('dataBase/usuarios.json', $usuariosJson);

}
