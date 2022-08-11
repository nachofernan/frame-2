<?php

/**
 * Estos middlewares son globales. 
 * Para un control de usuario más específico se tiene que aplicar a cada ruta de manera independiente.
 */

// Before Router Middleware
$router->before('POST', '/.*', function () {
    header('X-Powered-By: nacho/fernan');
});

$router->before('GET', '/.*', function () {
    header('X-Powered-By: nacho/fernan');
});