<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motorcycles</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
    <body>
        <h1>Motorcycles</h1>

        <table class="table">
            <thead>
                <tr>
                    <th class="tg-0pky">ID</th>
                    <th class="tg-0pky">Brand</th>
                    <th class="tg-0lax">Model</th>
                    <th class="tg-0lax">Type</th>
                    <th class="tg-0pky">cc/th>
                    <th class="tg-0lax">Price</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($this->data as $index => $motos) {
                    echo "<tr>";
                    echo "<td class='tg-0lax'>" . $motos["id"] . "</td>";
                    echo "<td class='tg-0lax'>" . $motos["brand"] . "</td>";
                    echo "<td class='tg-0lax'>" . $motos["model"] . "</td>";
                    echo "<td class='tg-0lax'>" . $motos["type"] . "</td>";
                    echo "<td class='tg-0lax'>" . $motos["cc"] . "</td>";
                    echo "<td class='tg-0lax'>" . $motos["price"] . "</td>";
                    echo "<td colspan='2' class='tg-0lax'>
                    <a class='btn btn-secondary' href='?controller=Motos&action=getMotos&id=" . $motos["id"] . "'>Update</a>
                    <a class='btn btn-danger' href='?controller=Motos&action=deleteMotos&id=" . $motos["id"] . "'>Delete</a>
                    </td>";
                    echo "</tr>";
                }
                ?>

            </tbody>

        </table>

        <a id="home" class="btn btn-primary" href="?controller=Motos&action=createMotos">Create</a>
        <a id="home" class="btn btn-secondary" href="./">Back</a>
        
    </body>
</html>