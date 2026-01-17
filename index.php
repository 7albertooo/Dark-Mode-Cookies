<?php

$theme = $_COOKIE['theme'] ?? 'light';

?>

<!DOCTYPE html>
<html lang="en" data-theme="<?= $theme ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/output.css">
    <title>Dark Mode Cookies</title>
</head>
<body class="min-h-screen flex flex-col justify-center items-center bg-white dark:bg-gray-800">

        <h2 class="text-4xl font-bold text-gray-800 dark:text-white mb-4">Dark Mode Cookies</h2>

        <div class="flex space-x-4">

            <a href="theme.php?theme=dark" class="text-gray-800 dark:text-white hover:text-gray-600 dark:hover:text-gray-300 bg-gray-200 dark:bg-gray-700 p-4 rounded-full">Dark Mode</a>

            <a href="theme.php?theme=light" class="ml-4 text-gray-800 dark:text-white hover:text-gray-600 dark:hover:text-gray-300 bg-gray-200 dark:bg-gray-700 p-4 rounded-full">Light Mode</a>
        </div>
    
</body>
</html>