<html>
<!-- flag.php -->
<?php
    @$file = $_GET["file"];
    if(!isset($file))
    {
        header("Location: ./index.php?file=welcome.txt");
    }
    if (preg_match('/http|data|ftp|input|index|%00/i', $file) || strstr($file,"/") !== FALSE || strstr($file,"..") !== FALSE || strlen($file)>=70)
    {
        echo "<p> Wrong Answer! </p>";
    }
    else
    {
        include($file);
    }
?>
</html>

