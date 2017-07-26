<!doctype html>
<html
<head>
    <?php require './head.php' ?>
    <style>
        p {
            font-size: 18px;
        }

        footer {
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">

    <?php print_r($_GET) ?>

    <?php

    require './sidebar.php';
    require './content.php';
    require './footer.php';

    ?>
</div>
</body>
</html>
