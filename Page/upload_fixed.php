<?php
    session_start();
    echo $_SESSION['file']['name'];
    echo '<br>';
    echo $type;
    $pattern = "/\./i";
    $numberOfDots = preg_match_all($pattern, $_SESSION['file']['name']);
    $pattern2 = "/\.(txt|doc|pdf|docx|xlsx|xls)/i";
    $extension = preg_match_all($pattern2, $_SESSION['file']['name']);
    if ($numberOfDots == 1 && $extension == 1){
        echo "Upload successfully";
        move_uploaded_file($_SESSION['file']['tmp_name'], 'Page/files/' . $_SESSION['file']['name']);
    }
    else{
        echo "Can't upload this file";
    }
?>