<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <p>Merci <strong><?php echo $_GET['firstName']; ?> <?php echo $_GET['lastName']; ?></strong> pour votre commande.</p>

        <p>Conformément à votre commande, nous vous enverrons:</p>
        <ul>
            <?php foreach($_GET['orders'] as $order) : ?>
                <li><strong><?php echo $order; ?></strong></li>
            <?php endforeach ?>
        </ul>

        <p>Nous n'oublierons pas votre cadeau : un <strong><?php echo $_GET['gift']; ?></strong>.</p>

        <p>A bientôt sur notre site.</p>
    </body>
</html>