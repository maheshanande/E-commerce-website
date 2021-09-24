<?php

session_start();
session_destroy();

header('location:payment.php');

?>