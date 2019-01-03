<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="../assets/style/style.css?v=1">
</head>
<body>
<div class="wrapper">
    <header>
        <?php
        include 'dir/header.php';
        ?>

    </header>
    <main>
        <?=
        $content
        ?>
    </main>
    <footer>
        footer
    </footer>
</div>
</body>
</html>