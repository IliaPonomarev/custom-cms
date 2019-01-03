<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="wrapper">
    <header>
        <a href="/admin/add.php">add new page</a>
        <a href="/admin/logout.php">logout</a>
    </header>
    <main>
        <?php include 'elems/info.php' ;?>
        <?= $content ?>
    </main>
    <footer>
        footer
    </footer>
</div>
</body>
</html>