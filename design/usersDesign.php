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
    <table border="1">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>img</th>
            <?php if($_SESSION['login']['admin'] ==1): ?>
                <th>delete</th>
                <th>update</th>
            <?php endif; ?>
        </tr>

        <?php foreach($users as $user): ?>
        <tr>
            <td><?= $user['id']; ?></td>
            <td><?= $user['name']; ?></td>
            <td><?= $user['email']; ?></td>
            <td><img width="100px" src="upload/<?= $user['img']; ?>"></td>
            <?php if($_SESSION['login']['admin'] ==1): ?>
                <td><a href="delete.php?id=<?= $user['id']; ?>">delete</a></td>
                <td><a href="update.php?id=<?= $user['id']; ?>">update</a></td>
            <?php endif; ?>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>