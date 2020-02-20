<?php
$http = new Swoole\HTTP\Server("0.0.0.0", 8080);

$http->on("start", function ($server) {
    echo "Swoole http server is started at http://0.0.0.0:8080\n";
});

$http->on("request", function ($request, $response) {
    $response->header("Content-Type", "text/plain");
    $response->end("Hello World\n");
});

$http->start();




