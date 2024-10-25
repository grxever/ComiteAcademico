<?php
session_start();

session_destroy();
session_unset();
session_abort();

header('Location: http://localhost/5a-T4-php/index.php');
die();
