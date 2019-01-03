<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP local</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h3>Products</h3>
        <ul>
            <?php foreach ($products as $product => $price) : ?>
                <li>
                    <?= ucwords($product) . ' $' . $price; ?>
                </li>
            <?php endforeach; ?>
        </ul>
        <p>
            <?php echo !$products ? 'No products found' : ''; ?>
        </p>
    </div>
    <div>
        <h3>Tasks</h3>
        <ul>
            <li>
                <strong>task: </strong><?= $tasks['title']; ?>
            </li>
            <li>
                <strong>due date: </strong><?= $tasks['date']; ?>
            </li>
            <li>
                <strong>status: </strong><?= $tasks['completed'] ? 'Done &#9989' : 'Incomplete &#215'; ?>
            </li>
            <li>
                <strong>urgent: </strong><?= $tasks['important'] ? 'Yup' : 'Nah'; ?>
            </li>
        </ul>
        <p><?php echo($response)?></p>
    </div>
</body>
</html>