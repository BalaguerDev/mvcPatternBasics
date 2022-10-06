<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars Available</title>
</head>

    <body>
        <h1>CAR LIST</h1>
        <br>

        <?php
            if ($this->action == "getCars" && (!isset($this->data) || !$this->data || sizeof($this->data) == 0)) {
                echo "<p>The Car does not exists!</p>";
                
            } else if (isset($error)) {
                echo "<p>$error</p>";
            }
        ?>


        <form class="" action="index.php?controller=Cars&action= <?php echo isset($this->data['id']) ? "updateCars" : "createCars" ?>" method="post">
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
                <label for="Color">Color</label>
                <input required type="text" value=" <?php echo isset($this->data['color']) ? $this->data['color'] : null ?>" class="form-control" id="color" name="color" aria-describedby="color" placeholder="Enter the color">
            </div>

            <div>
                <label for="Price">Price</label>
                <input required type="number" value=" <?php echo isset($this->data['price']) ? $this->data['price'] : null ?>" class="form-control" id="price" name="price" aria-describedby="price" placeholder="Enter the price">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a id="return" class="btn btn-secondary" href="<?php echo "?controller=Cars&action=getAllCars&action=getAllCars"; ?>">Return</a>
        </form>

    </body>
</html>