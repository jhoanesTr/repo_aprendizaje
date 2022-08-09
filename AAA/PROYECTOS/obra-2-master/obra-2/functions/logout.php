<?php
session_start();
session_unset();
session_destroy();
header("location:/obra-2/index.php")
?>