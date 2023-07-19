<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superg lobal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 mt-3">
                <h4>login page</h4>


                <form action="index.php" method="post">
                    <div>
                        <label for="" class="form-label">phone</label>
                        <input class="form-control" type="text" name="phone">
                    </div>
                    <div class="mt-3">

                        <button class="btn btn-warning" type="reset">Reset</button>
                        <button class="btn btn-primary" type="submit">save</button>
                    </div>

                </form>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>





    <?php
    $alert = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $oldPhone = '123';
        $phone = $_REQUEST['phone'];
        if ($phone == $oldPhone) {
            header('Location: welcome.php');
            exit();
        } else {
            $alert = 'phone mele nai';
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        var alertMessage = '<?php echo addslashes($alert); ?>';
        if (alertMessage !== '') {
            Swal.fire({
                title: 'Error!',
                text: alertMessage,
                icon: 'error',
                confirmButtonText: 'Cool'
            });
        }
    </script>

</body>

</html>