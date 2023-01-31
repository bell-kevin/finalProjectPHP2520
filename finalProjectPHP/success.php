<?php
$con = mysqli_connect("localhost", "root", "password", "ecommerce") or die(mysqli_error($con));
session_start();
if (isset($_SESSION['id'])) {
    $me = $_SESSION['id'];
    $query1 = "delete from users_products where user_id = '$me' ";
    $res = mysqli_query($con, $query1)  or die(mysqli_error($con));
    $user_id = $_SESSION['id'];
    $product_id = $_POST['prodno'];
    $dateTime = date("Y-m-d H:i:s");
    if ($product_id == 1) {
        $total_price = 300;
    } else if ($product_id == 2) {
        $total_price = 400;
    } else if ($product_id == 3) {
        $total_price = 500;
    } else if ($product_id == 4) {
        $total_price = 600;
    } else if ($product_id == 5) {
        $total_price = 700;
    } else if ($product_id == 6) {
        $total_price = 800;
    }
    $tax = 0;
    $quantity = 1;
    $sub_total = 0;

    $sql = "INSERT INTO orders (id, product_id, dateTime, total_price, tax, quantity, sub_total) 
    VALUES ('$user_id', '$product_id', '$dateTime', '$total_price', '$tax', '$quantity', '$sub_total');";

    if (mysqli_query($con, $sql)) {
        $last_id = mysqli_insert_id($con);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
?>


    <!--header-->

    <!DOCTYPE html>
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

        <style type="text/css">


        </style>
    </head>

    <body>
        <!--NAVBAR WITH LOGIN -->
        <div class="container-fluid" id="content">
            <div class="navbar navbar-default navbar-fixed-top" style="background-color: #eee;">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">E-Store</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="settings.php"><span class="glyphicon glyphicon-setting"></span> Settings </a></li>
                            <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 80px;">
            <div class="jumbotron" style="border: 5px solid blue;">
                <div style="margin: 50px;">
                    <center>
                        <p>Thank you for ordering from E-store. Your order will be delivered<br>to you shortly. <br><br><br>Order some more electronic items <a href="index.php"> here</a>.</p>
                    </center>
                </div>
            </div>
        </div>


    </body>

    </html>
<?php
}
?>