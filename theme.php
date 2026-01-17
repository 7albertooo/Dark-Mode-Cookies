<?php

if (isset($_GET['theme'])) {

    setcookie(
        'theme',
        $_GET['theme'],
        time() + 60 * 60 * 24 * 365,
        '/'
    );

}

header('Location: index.php');
exit();


?>