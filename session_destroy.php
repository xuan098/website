<?php
session_start();
session_destroy();
header('Location:http://localhost/website/index.php');