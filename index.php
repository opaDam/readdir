<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php_Read_Files</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <ul class="list">
        <?php
        $index = 0;
        $array_php_audio = array();
        $fileDir_audio = "./audio/";
        $fileDir_hoes = "./hoes/";
        $files_audio = scandir($fileDir_audio);
        foreach ($files_audio as $file) {
            if (substr($file, -4) == ".mp3") {
                echo "<li>";
                echo "<img src=\"" . $fileDir_hoes . substr($file, 0, -4) . ".jpg\">";
                echo "<a class=\"" . $index . " href=\"" . $fileDir_audio . $file . "\"><h3>" . substr($file, 0, -4) . "</h3></a>";
                echo "</li>";
                $index++;
                $data = substr($file, 0, -4);
                array_push($array_php_audio, $data);
            };
        };
        ?>
        </ul>
        <script>
              let js_data_array = <?php echo json_encode($array_php_audio); ?>;
            //   console.log(js_data_array);
        </script>
        <script defer src="./js/script.js"></script>
        <footer id="footer"><span class="copyright">&copy; copyright </span> OpaD@m 2022 <span> https://opadam.github.io/readdir/index.php</span></footer>
</body>
</html>