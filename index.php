<?php

declare(strict_types=1);


$filename = __DIR__ . preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
if (php_sapi_name() === 'cli-server' && is_file($filename)) {
    return false;
}
// -----------------------------------

require 'vendor/autoload.php';

date_default_timezone_set("America/Recife");
ini_set('display_errors', 1);
error_reporting(E_ALL);

$url = $_SERVER['REQUEST_URI'];
$caminho = parse_url($url, PHP_URL_PATH);
$caminho = trim($caminho, '/');
$partes = explode('/', $caminho);

$nomeController = !empty($partes[0]) ? $partes[0] : 'home';
$nomeMetodo = !empty($partes[1]) ? $partes[1] : 'index';

$classeController = "App\\Controllers\\" . ucfirst($nomeController) . "Controller";
$params = array_slice($partes, 2);

if (class_exists($classeController) && method_exists($classeController, $nomeMetodo)) {
    $pagina = new $classeController();
    call_user_func_array([$pagina, $nomeMetodo], $params);
} else {
    // Página 404 simples
    http_response_code(404);
    echo "<div style='text-align:center; padding:50px; font-family:sans-serif'>";
    echo "<h1>404</h1><p>Página não encontrada: /$caminho</p>";
    echo "</div>";
}