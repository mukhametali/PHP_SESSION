<?php

    $connect = mysqli_connect('localhost','root', '', 'register');
    if(!$connect){
        die('Ошибка подклбчения к базе данных');
    }