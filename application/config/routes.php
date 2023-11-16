<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Controller_usuario';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'Controller_usuario/login';
$route['salir'] = 'Controller_usuario/salir';

//inicio
$route['adminInicio'] = 'Controller_usuario/adminInicio';
//fin

//adminInicio
$route['adminUsuario'] = 'Controller_usuario/adminUsuario';
$route['nuevoUsuario'] = 'Controller_usuario/nuevoUsuario';
$route['verificar_usuarios'] = 'Controller_usuario/verificar_usuarios';
$route['validar_ci'] = 'Controller_usuario/validar_ci';
$route['guardarNuevoUsuario'] = 'Controller_usuario/guardarNuevoUsuario';
$route['cambiar_estado_usuario'] = 'Controller_usuario/cambiar_estado_usuario';

$route['eliminar_usuario'] = 'Controller_usuario/eliminar_usuario';
$route['editarUsuario/(:any)'] = 'Controller_usuario/editarUsuario/$1';

//adminInicio

//privilegios
$route['privilegios'] = 'Controller_usuario/privilegios';
//privilegios

//graficos
$route['graficos'] = 'Controller_usuario/graficos';
//graficos
