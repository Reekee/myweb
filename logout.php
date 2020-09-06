<?php
    session_start();
    session_destroy();

    include("config/autoload.php");

    LinkTo("login.php");
    