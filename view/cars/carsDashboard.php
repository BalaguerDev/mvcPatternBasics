<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
    <body>
        <h1>Cars</h1>

        <table class="table">
            <thead>
                <tr>
                    <th class="tg-0pky">ID</th>
                    <th class="tg-0pky">Brand</th>
                    <th class="tg-0lax">Model</th>
                    <th class="tg-0lax">Color</th>
                    <th class="tg-0lax">Price</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($this->data as $index => $cars) {
                    echo "<tr>";
                    echo "<td class='tg-0lax'>" . $cars["id"] . "</td>";
                    echo "<td class='tg-0lax'>" . $cars["brand"] . "</td>";
                    echo "<td class='tg-0lax'>" . $cars["model"] . "</td>";
                    echo "<td class='tg-0lax'>" . $cars["color"] . "</td>";
                    echo "<td class='tg-0lax'>" . $cars["price"] . "</td>";
                    echo "<td colspan='2' class='tg-0lax'>
                    <a class='btn btn-secondary' href='?controller=Cars&action=getCars&id=" . $cars["id"] . "'>Update</a>
                    <a class='btn btn-danger' href='?controller=Cars&action=deleteCars&id=" . $cars["id"] . "'>Delete</a>
                    </td>";
                    echo "</tr>";
                }
                ?>

            </tbody>

        </table>

        <a id="home" class="btn btn-primary" href="?controller=Cars&action=createCars">Create</a>
        <a id="home" class="btn btn-secondary" href="./">Back</a>
        
    </body>
</html>