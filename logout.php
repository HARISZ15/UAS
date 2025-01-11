<?php
session_start();
session_destroy();  // Hancurkan semua data sesi
header("Location: login.php");  // Arahkan ke halaman login setelah logout
exit();
?>
