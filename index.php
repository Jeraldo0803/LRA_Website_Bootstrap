<?php
$request = $_SERVER['REQUEST_URI'];

switch ($request) {

    case '':
    case '/':
    case '/index.php':
        require __DIR__ . '/views/home.php';
        break;

    case '/views/index':
        require __DIR__ . '/views/index.php';
        break;

    case '/history':
        require __DIR__ . '/views/history.php';
        break;

    case '/facilities':
        require __DIR__ . '/views/facilities.php';
        break;

    case '/faculty':
        require __DIR__ . '/views/faculty.php';
        break;

    case '/alumni':
        require __DIR__ . '/views/alumni.php';
        break;

    case '/admissions':
        require __DIR__ . '/views/admissions.php';
        break;

    case '/about':
        require __DIR__ . '/views/about.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
}

