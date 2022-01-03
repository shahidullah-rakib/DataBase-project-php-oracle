<?php
session_start();
session_destroy();
setcookie("username", "", time() - 3600);
setcookie("pwd", "", time() - 3600);
setcookie("type", "", time() - 3600);
header('Location: ../');