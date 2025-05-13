
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Login || To Do List & Notes       
    </title>
    <!-- Bootstrap 5 CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
	<link rel="stylesheet" href="assets/font-awesome/css/all.min.css">
</head>
<body>

    <?php
        require 'config/function.php';
        $direct = 'dashboard';
        if ( !$_COOKIE['remember'] || !$_SESSION['logged']) {
            if (!isset($_GET['page'])) {
                $direct = 'login';
            }
        } 

        $page = isset($_GET['page']) ? $_GET['page'] : "$direct";
        $file = "page/$page.php";
        if (file_exists($file)) {
            include $file;
        } else {
            header('Location: ?page=not_found');
            exit;
        }
    ?>