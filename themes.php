<?php
session_start();

if (!isset($_SESSION["theme"])) {
    $_SESSION["theme"] = "main";

    if ($theme == "main" || $theme == "dark") {
        $_SESSION["theme"] = $theme;
    }
}
?>