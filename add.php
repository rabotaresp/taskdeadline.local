<?php
if($_GET){
    if (isset($_GET['deadline']) && isset($_GET['task'])) {
        $g_task = $_GET['task'];
        $g_deadline = $_GET['deadline'];
        $fw = fopen("save.txt", 'a');
        if (!$fw) {
            echo "error! file not found";
            exit();
        }
        if (!fwrite($fw, $g_task . '|' . $g_deadline . PHP_EOL)) {
        };
        fclose($fw);
    }
}
header('location: index.php');