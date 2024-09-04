<?php
include $_SERVER['DOCUMENT_ROOT'] . "\backend\lang.php";
$request = $_SERVER['REQUEST_URI'];

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
            <div class="fw-bolder" style="padding: 0 0.5rem;">
                <img style="width:15px; height:15px;" src="./../assets/icon/phone-504.svg" alt="">
                282425536
            </div>
            <div class="fw-bolder">

                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="languageDropdown"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="ml-2" style="width:25px; height:25px;" src="./../assets/icon/language-icon.svg"
                            alt="">
                        <?php echo $lang["nav_language"]; ?>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                        <li><a class="dropdown-item" href="?lang=en">English</a></li>
                        <li><a class="dropdown-item" href="?lang=zh_CN">简体中文</a></li>
                        <li><a class="dropdown-item" href="?lang=zh_TW">繁體中文</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container py-1">
            <a class="navbar-brand" href="/views/home.php">
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
                            href="/views/facilities.php"><?php echo $lang["nav_facilities"]; ?></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-black fw-bolder"
                            href="/views/admissions.php"><?php echo $lang["nav_admissions"]; ?></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-black fw-bolder"
                            href="/views/faculty.php"><?php echo $lang["nav_faculty"]; ?></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-black fw-bolder"
                            href="/views/alumni.php"><?php echo $lang["nav_alumni"]; ?></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-black fw-bolder"
                            href="/views/history.php"><?php echo $lang["nav_history"]; ?></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-black fw-bolder"
                            href="/views/about.php"><?php echo $lang["nav_about"]; ?></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link btn custom-btn text-white" href="#"><?php echo $lang["nav_applynow"]; ?></a>
                    </li>
                </ul>
            </div>

        </div>

    </nav>

</header>