<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge</title>
</head>

<body>
    <h1>Sort through the categories</h1>
    <ul>
        <?php foreach ($business['categories'] as $category): ?>
            <li>
                <?= $category; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>