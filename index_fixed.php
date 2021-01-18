<div style="display: flex; margin-top: 200px">
        <div style="width: 30%"></div>
        <div style="width: 30%">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="file" id ="file" class="inputfile">
        </div>
        <div style="width: 30%">
        <input type="submit" name="up" value="submit" class="button">
        </div>
        </form>
</div>
<p>List of files</p>
<?php
    $path    = 'Page/files';
    $files = array_diff(scandir($path), array('.', '..'));
    foreach ($files as &$value) {
        echo '<a href="Page/about.php?file='.$value.'">'. $value .'</a>'.'<br>';
    }
?>
<?php
    session_start();
    if (isset($_POST['up']) && isset($_FILES['file'])) {
        if ($_FILES['file']['error'] > 0){
        ?>
        <script>
            location.replace("index_fixed.php");
        </script>
        <?php
        }
        else {
            //echo $_FILES['file']['tmp_name'];
            $_SESSION['file'] = $_FILES['file'];
            ?>
        <script>
            location.replace("Page/upload_fixed.php");
        </script>
        <?php
        }
    }
?>