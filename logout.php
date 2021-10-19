<?php
include('config/config.php');
if (isset($_SESSION["user_data"]) && !empty($_SESSION["user_data"])) {
    unset ($_SESSION["user_data"]);
    header("Location: index.php");
}
?>