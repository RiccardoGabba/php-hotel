<?php
include __DIR__ . "/partials/header.php";
include __DIR__ . "./model/db.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="container">
    <h2>Elenco hotel</h2>
    <div>
        <?php foreach ($hotels as $hotels) { ?>
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"><?php echo $hotels['name'] ?></th>
                        <th scope="col">Cognome</th>
                        <th scope="col">Username</th>
                    </tr>
                </tbody>
            <?php } ?>
    </div>

</body>

<?php
include __DIR__ . "/partials/footer.php";
?>

</html>