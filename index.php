<?php
$t_index = 0;
$m_index= 0;
//if ($_GET) {
//    if (isset($_GET['ind'])) {
//        $fw = fopen("save.txt", 'r');
//        $count_del_ind = 0;
//        $line = [];
//        while ($read_line = fgets($fw)) {
//            if ($count_del_ind != $_GET['ind']) {
//                if ($read_line != null) {
//                    $line[] = $read_line;
//                }
//            }
//            $count_del_ind++;
//        }
//        fclose($fw);
//        $fw = fopen("save.txt", 'w');
//        foreach ($line as $value) {
//            if ($value != null) {
//                fwrite($fw, $value);
//            }
//        }
//        fclose($fw);
//    }
//
//}

?>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/add.js"></script>
    <title>TaskTabl</title>
</head>
<body>
<div class="table">
    <form action="add.php" method="get">
        <input type="text" name="task" required>
        <input type="text" name="deadline" required>
        <button type="submit" id="btn_add">Add</button>
    </form>
</div>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Task</th>
        <th scope="col">Deadline</th>
        <th scope="col">Button Done</th>
        <th scope="col">Button Modify</th>
    </tr>
    </thead>
    <tbody>
    <?
    $r_line = file("save.txt");
    $line = [];
    foreach ($r_line as $value) {
        $line[] = explode('|', $value);
    }
    foreach ($line as $value) {
        ?>
        <tr>
            <td><?= $value[0] ?></td>
            <td><?= $value[1] ?></td>
            <td><a href="delete.php?ind=<?= $t_index++ ?>"> Done</a></td>
            <td><a href="modify.php?inm=<?= $m_index++ ?>"> Modify</a></td>
        </tr>
    <? } ?>

    </tbody>
</table>
</body>
</html>