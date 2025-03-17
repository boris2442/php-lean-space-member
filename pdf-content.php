<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pdf</title>
</head>

<body>
    <h1>listes des utilisateurs</h1>
    <table>
        <thead>
            <th>id</th>
            <th>Nom</th>
            <th>Email</th>
        </thead>
        <tbody>
            <?php
            foreach ($users as $user): ?>
                <tr>
                    <td><?php $user['id']?></td>
                    <td><?php $user['name']?></td>
                    <td><?php $user['email']?></td>
                </tr>
        </tbody>
    <?php endforeach; ?>
    </table>
</body>

</html>