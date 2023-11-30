<?php
include __DIR__ . "/partials/header.php";
include __DIR__ . "./model/db.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Hotels</title>
</head>

<body class="container bg-secondary">
    <h4>Elenco:</h4>
    <div class="bg-body">
        <?php foreach ($hotels as $hotels) { ?>
            <table class="table ">
                <theader class="p-2">
                    <tr>
                        <th>Nome</th>
                        <th>Descrizione</th>                                           
                        <th>Valutazione</th>                           
                        <th>Distanza dal centro</th>
                    </tr>
                </theader>
                <tbody>
                    <tr  class="text-align-center ">
                        <td> <?php echo $hotels['name'] ?></td>
                        <td><?php echo $hotels['description'] ?></td>
                        <td><?php echo $hotels['vote'] ?></td>
                        <td><?php echo $hotels['distance_to_center']?> Km</td>
                    </tr>
                <?php } ?>
    </div>

</body>



</html>
