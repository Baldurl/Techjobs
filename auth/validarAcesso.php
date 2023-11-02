<?php

session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: ../auth/index.php?auth=erro2');
}
