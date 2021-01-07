<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Form</title>
</head>
<body>
    <h1>Form Validations</h1>
    
    <?= form_open(); ?>
    <table>
        <tr>
            <td>Username</td>
            <td>
                <input type="text" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
                <span><?= display_error($validation, 'username'); ?></span>
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>
                <input type="text" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                <span><?= display_error($validation, 'email'); ?></span>
            </td>
        </tr>
        <tr>
            <td>Contact No</td>
            <td>
                <input type="text" name="contact" placeholder="Contact No" value="<?= set_value('contact'); ?>">
                <span><?= display_error($validation, 'contact'); ?></span>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Submit" value="<?= set_value(''); ?>"></td>
        </tr>
    </table>
    <?= form_close(); ?>
</body>
</html>