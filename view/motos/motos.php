<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motos Available</title>
</head>

    <body>
        <h1>MOTOS LIST</h1>
        <br>

        <?php
            if ($this->action == "getMotos" && (!isset($this->data) || !$this->data || sizeof($this->data) == 0)) {
                echo "<p>The Moto does not exists!</p>";
                
            } else if (isset($error)) {
                echo "<p>$error</p>";
            }
        ?>


        <form class="" action="index.php?controller=Motos&action= <?php echo isset($this->data['id']) ? "updateMotos" : "createMotos" ?>" method="post">
            <input type="hidden" name="id" value=" <?php echo isset($this->data['id']) ? $this->data['id'] : null ?>">

            <div>
                <label for="Brand">Brand</label>
                <input required type="text" value=" <?php echo isset($this->data['brand']) ? $this->data['brand'] : null ?>" class="form-control" id="brand" name="brand" aria-describedby="brand" placeholder="Enter the brand">
            </div>

            <div>
                <label for="Model">Model</label>
                <input required type="text" value=" <?php echo isset($this->data['model']) ? $this->data['model'] : null ?>" class="form-control" id="model" name="model" aria-describedby="model" placeholder="Enter the model">
            </div>

            <div>
                <label for="Type">Type</label>
                <input required type="text" value=" <?php echo isset($this->data['type']) ? $this->data['type'] : null ?>" class="form-control" id="type" name="color" aria-describedby="color" placeholder="Enter the color">
            </div>

            <div>
                <label for="cc">CC</label>
                <input required type="number" value=" <?php echo isset($this->data['cc']) ? $this->data['cc'] : null ?>" class="form-control" id="cc" name="cc" aria-describedby="cc" placeholder="Enter the cc">
            </div>

            <div>
                <label for="Price">Price</label>
                <input required type="number" value=" <?php echo isset($this->data['price']) ? $this->data['price'] : null ?>" class="form-control" id="price" name="price" aria-describedby="price" placeholder="Enter the price">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a id="return" class="btn btn-secondary" href="<?php echo "?controller=Motos&action=getAllMotos&action=getAllMotos"; ?>">Return</a>
        </form>

    </body>
</html>