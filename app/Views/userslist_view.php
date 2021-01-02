<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php print_r($users); ?>
    <?php if(!empty($users)): ?>
    <table border="1">
        <tr>
            <th>SERIAL</th>
            <th>NAME</th>
            <th>Email</th>
            <th>Contact Number</th>
        </tr>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user->sl ?></td>
            <td><?= $user->name ?></td>
            <td><?= $user->email ?></td>
            <td><?= $user->phone ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php else: ?>
    <h1>No Users Found!</h1>
    <?php endif; ?>
</body>
</html>