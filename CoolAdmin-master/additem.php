<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item</title>
    <link rel="stylesheet" href="../link/css/bootstrap.min.css">
    <?php include('../csslink.php') ?>
</head>

<body>
    <div class="container mt-3">
        <form action="" method="post">
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="txttitle">
                    </div>
                    <div class="mb-3">
                        <label for="duration" class="form-label">Duration</label>
                        <input type="text" class="form-control" id="duration" name="txtduration">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="txtprice">
                    </div>
                    <div class="mb-2">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="txtdesricption"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success" name="btnSubmit">Submit</button>
                </div>
            </div>
        </form>
        <?php
        require('../class.php');
        $obj = new MyQuery;

        if (isset($_POST['btnSubmit'])) {
            $title = $_POST['txttitle'];
            $dura = $_POST['txtduration'];
            $price = $_POST['txtprice'];
            $des = $_POST['txtdesricption'];

            if (empty($title) && empty($dura) && empty($price) && empty($des)) {
                echo "Pleace enter value";
            } else {

                $sql = "insert into tbspecialoffer values(null, '$title', '$dura', '$des', '$price')";
                $query = $obj->link()->query($sql);

                if ($query) {
                    echo "Successfully.";
                    echo header('location: ./dashboard.php');
                } else {
                    echo "Already exists.";
                }
            }
        }
        ?>
    </div>
</body>
</html>
<?php include('../jslink.php') ?>