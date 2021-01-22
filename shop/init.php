<?php

require_once 'config.php';

//если разработка - показываем все ошибки php
if ('development' === $config['env']) {
    error_reporting(E_ALL);
}

$errors = [];

$mysqli = mysqli_connect("localhost", $config['db_user'], $config['db_password'], $config['db_name']);

    if (mysqli_connect_error()) {
        if ('production' === $config['env']) {
            $errors[] = 'На сайте возникла критическая ошибка, пожалуйста обратитесь к администратору сайта';
        } else {
            $errors[] = 'Ошибка подключения (' . mysqli_connect_errno() . ') '. mysqli_connect_error();
        }
    } else {
        mysqli_query($mysqli, "SET NAMES UTF8");
    }
