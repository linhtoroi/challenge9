<?php
    session_start();
    echo $_SESSION['file']['name'];
    echo '<br>';
    $type = $_SESSION['file']['type'];
    echo "Upload successfully";
    move_uploaded_file($_SESSION['file']['tmp_name'], 'Page/files/' . $_SESSION['file']['name']);
?>