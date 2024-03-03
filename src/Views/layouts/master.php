<?php
// if (session_id() === '') {
//     session_start();
// }

// require_once('src/Databases/Database.php');
// if (!$conn) {
//     include('src/Views/layouts/error.php');
//     exit();
// }
// print_r($users);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php
        echo ($user['id']);
        foreach ($users as $key => $user) {
        ?>
            <li>
                <?php echo 'key: ' . $key . ' - User id: ' . $user['id'] . ' - user name:' . $user['name']; ?>
            </li>
            <?php
            ?>
        <?php
        }
        ?>
    </ul>
</body>

</html>