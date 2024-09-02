<?php
session_start();

if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = "en";
} else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
    if ($_GET['lang'] == "en") {
        $_SESSION['lang'] = "en";
    } else if ($_GET['lang'] == "zh_CN") {
        $_SESSION['lang'] = "zh_CN";
    } else if ($_GET['lang'] == "zh_TW") {
        $_SESSION['lang'] = "zh_TW";
    }

    require_once $_SERVER['DOCUMENT_ROOT'] . "/lang/" . $_SESSION['lang'] . ".php";
}