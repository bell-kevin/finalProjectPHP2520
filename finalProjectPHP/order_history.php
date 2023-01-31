<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>E-Store |s Electronic Goods Dealers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <style type="text/css"></style>
</head>

<body style="font-family: Montserrat">
    <?php
    if (!isset($_SESSION['id'])) {
        require 'header_logged_out.php';
    ?>



        <!-- 1 PANEL FOR LOGGED IN USERS-->
        <div class="container" style="margin-top: 80px; margin-bottom: 100px">
            <div class="row row-style-login-page-pannel">
                <div class=" col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Mobile 1</div>
                        <div class="panel-body">
                            <!--put mobile phone pics and its specifications in this box in all pannels. -->
                            <center><img class="img-responsive" src="images\phones\oneplus5t.jpg">
                                <b> One Plus 5T <br></b>Price: $300
                            </center>
                            <button class="btn btn-primary form-control" type="button" value="Submit" data-toggle="modal" data-target="#pz" name="btn">Buy Now!</button>


                        </div>
                    </div>
                </div>

                <div class=" col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Mobile 2</div>
                        <div class="panel-body">
                            <!--put mobile phone pics and its specifications in this box in all pannels. -->
                            <center><img class="img-responsive" src="images\phones\iphonex.jpg">
                                <b> Apple Iphone X <br></b>Price: $400
                            </center>
                            <button class="btn btn-primary form-control" type="button" value="Submit" name="btn" data-toggle="modal" data-target="#pz">Buy Now!</button>


                        </div>
                    </div>
                </div>

                <div class=" col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Mobile 3</div>
                        <div class="panel-body">
                            <!--put mobile phone pics and its specifications in this box in all pannels. -->
                            <center><img class="img-responsive" src="images\phones\samsungs8.jpg">
                                <b> Samsung S8 <br></b>Price: $500
                            </center>
                            <button class="btn btn-primary form-control" type="button" value="Submit" name="btn" data-toggle="modal" data-target="#pz">Buy Now!</button>


                        </div>
                    </div>
                </div>

                <div class=" col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Mobile 4</div>
                        <div class="panel-body">
                            <!--put mobile phone pics and its specifications in this box in all pannels. -->
                            <center><img class="img-responsive" src="images\phones\iphone7s.jpg">
                                <b> Apple Iphone 7S <br></b>Price: $600
                            </center>
                            <button class="btn btn-primary form-control" type="button" value="Submit" name="btn" data-toggle="modal" data-target="#pz">Buy Now!</button>


                        </div>
                    </div>
                </div>

                <div class=" col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Mobile 5</div>
                        <div class="panel-body">
                            <!--put mobile phone pics and its specifications in this box in all pannels. -->
                            <center><img class="img-responsive" src="images\phones\oneplus3t.jpg">
                                <b> One Plus 3T <br></b>Price: $700
                            </center>
                            <button class="btn btn-primary form-control" type="button" value="Submit" name="btn" data-toggle="modal" data-target="#pz">Buy Now!</button>


                        </div>
                    </div>
                </div>

                <div class=" col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Mobile 6</div>
                        <div class="panel-body">
                            <!--put mobile phone pics and its specifications in this box in all pannels. -->
                            <center><img class="img-responsive" src="images\phones\oppoa57.jpg">
                                <b> Oppo A57 <br></b>Price: $800
                            </center>
                            <button class="btn btn-primary form-control" type="button" value="Submit" name="btn" data-toggle="modal" data-target="#pz">Buy Now!</button>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 1 PANNEL ENDS-->

        <div style="background-color: #333; color:white ;">
            <?php require 'foot.php' ?>
        </div>



    <?php } else {
        require 'header_logged_in.php';
    ?>

        <div class="container" style="margin-top: 60px;">
            <b>
                <?php
                echo "Hi " . $_SESSION['name'];
                ?>
            </b>
        </div>

        <!-- 2 PANEL begins-->
        <div class="container" style="margin-top: 50px; margin-bottom: 100px">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "password";
            $dbname = "ecommerce";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            //show only orders of the logged in user

            $user_id = $_SESSION["id"];
            $sql = "SELECT users.name as customer, dateTime, total_price, products.name as product 
                FROM orders 
                INNER JOIN users 
                ON users.id = orders.id 
                INNER JOIN products 
                ON products.product_id = orders.product_id 
                WHERE users.id = '$user_id' 
                ORDER BY dateTime DESC";
            $result = $conn->query($sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row in a nice table
                echo "<table><tr><th style='padding-right: 25px;'>Customer</th><th style='padding-right: 25px;'>Product</th><th style='padding-right: 25px;'>Date</th><th style='padding-right: 25px;'>Total Price</th></tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td style='padding-right: 25px;'>" . $row["customer"] . "</td><td style='padding-right: 25px;'>" . $row["product"] . "</td><td style='padding-right: 25px;'>" . date("d F Y H:i:s", strtotime($row["dateTime"])) . "</td><td style='padding-right: 25px;'>" . "$". $row["total_price"] . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </div>
        <!--2 PANEL ENDS-->

    <?php } ?>

    <?php require 'login_modal.php'; ?>
    <?php require 'add_to_cart.php'; ?>


</body>

</html>