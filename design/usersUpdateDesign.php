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
    <form action="update.php" method="post" enctype="multipart/form-data">
        <input type="text" value="<?= $user['name']; ?>" name="name">
        <input type="text" value="<?= $user['email']; ?>" name="email">
        <input type="hidden" value="<?= $user['id']; ?>" name="id">
        <img src="upload/<?= $user['img']; ?>" width="100px">
        <input type="file" name="img">
        <input type="submit" value="update">
    </form>
</body>
</html>