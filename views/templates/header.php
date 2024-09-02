<?php
include $_SERVER['DOCUMENT_ROOT'] . "\backend\lang_config.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LRA Index Page</title>
    <link rel="stylesheet" href="../../scss/main.css">
    <link href="https://fonts.googleapis.com/css?family=Source Sans Pro" rel="stylesheet">

</head>

<header>

    <div class="bg-secondary d-flex justify-content-center align-items-center">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="fw-bolder" style="padding: 0 0.5rem;">282425536</div>
            <div class="fw-bolder">
                <div class="dropdown">
                    <form name="languageSelect" action="" method="get">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="languageDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            English
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                            <li><a class="dropdown-item" href="#">English</a></li>
                            <li><a class="dropdown-item" href="#">简体中文</a></li>
                            <li><a class="dropdown-item" href="#">繁體中文</a></li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container py-1">
            <a class="navbar-brand" href="/">
                <img src="../../assets/img/lrabrand.png" alt="LRA Brand Logo" style="width: 300px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mx-auto ps-5 w-100 d-flex justify-content-around">

                    <li class="nav-item">
                        <a class="nav-link text-black fw-bolder"
                            href="/facilities"><?php echo $lang["nav_facilities"]; ?></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-black fw-bolder" href="/admissions">Admissions</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-black fw-bolder" href="/faculty">Faculty</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-black fw-bolder" href="/alumni">Alumni</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-black fw-bolder" href="/history">History</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-black fw-bolder" href="/about">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link btn custom-btn text-white" href="#">Apply Now</a>
                    </li>
                </ul>
            </div>

        </div>

    </nav>

</header>