<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <?php if(isset($_SESSION['errors'])): ?>
        <ul>
            <?php foreach($_SESSION['errors'] as $error): ?>
                <li style="color:red"><?= $error; ?></li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
    </div>
    <form action="register.php" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="password" placeholder="password">
        <input type="file" name="img">
        <input type="submit">
    </form>
</body>
</html>