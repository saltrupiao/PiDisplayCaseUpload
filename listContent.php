/*
<?php
        $vidPath = '/Applications/mampstack-7.0.32-2/apache2/htdocs/PHP/pidisplay/';
        $files = scandir($vidPath);
        $totalFiles = count($files);
        $fileList = array();
        for ($i = 0; $i <= $totalFiles; $i++):
            $fileList[$i] = $files[$i];
            echo "<ul>";
            echo "<li>$fileList[$i]</li>";
            echo '<br>';
        endfor;
    ?>
*/

<?php
                    $vidPath = '/var/www/html/videos/';
                    $files = scandir($vidPath);
                    $totalFiles = count($files);
                    $fileList = array();
                    for ($i = 0; $i <= $totalFiles; $i++):
                        $fileList[$i] = $files[$i];
                        echo "<ul>";
                        echo "<li>$fileList[$i]</li>";
                        echo '<br>';
                    endfor;
?>
