<!DOCTYPE html>
<html>

<head>
    <title>Shopping Cart</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css" />



</head>

<body>

<br>
    
    <div class="container text-center" style="margin-top: 100px;">

        <div class="col-md-5 col-sm-12">
            <a href="index.php"><img class="img-responsive" src="css/logo.png" style="posistion:absolute"></a>

        </div>

        <div class="col-md-7 col-sm-12 text-left">
            <ul>
                <li class="row list-inline columnCaptions">
                    <span>QTY</span>
                    <span>ITEM</span>
                    <span>Price</span>
                </li>
                <li class="row">
                    <span class="quantity">1</span>
                    <span class="itemName">Birthday Cake</span>
                    <span class="popbtn"><a class="arrow"></a></span>
                    <span class="price">$49.95</span>
                </li>
                <li class="row">
                    <span class="quantity">50</span>
                    <span class="itemName">Party Cups</span>
                    <span class="popbtn"><a class="arrow"></a></span>
                    <span class="price">$5.00</span>
                </li>
                <li class="row">
                    <span class="quantity">20</span>
                    <span class="itemName">Beer kegs</span>
                    <span class="popbtn"><a class="arrow"></a></span>
                    <span class="price">$919.99</span>
                </li>
                <li class="row">
                    <span class="quantity">18</span>
                    <span class="itemName">Pound of beef</span>
                    <span class="popbtn"><a class="arrow"></a></span>
                    <span class="price">$269.45</span>
                </li>
                <li class="row">
                    <span class="quantity">1</span>
                    <span class="itemName">Bullet-proof vest</span>
                    <span class="popbtn" data-parent="#asd" data-toggle="collapse" data-target="#demo"><a class="arrow"></a></span>
                    <span class="price">$450.00</span>
                </li>
                <li class="row totals">
                    <span class="itemName">Total:</span>
                    <span class="price">$1694.43</span>
                   
                </li>
            </ul>
        </div>

    </div>
    <!-- -->

    <table id="cart" class="table table-hover table-condensed">
       
            <tr>
                <td><a href="index.php" class="btn btn-primary"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                <td><a href="checkout.php" class="btn btn-primary btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
            </tr>
    </table>


    <!-- The popover content -->

    <div id="popover" style="display: none">
        <a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
        <a href="#"><span class="glyphicon glyphicon-remove"></span></a>
    </div>

    <!-- JavaScript includes -->

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/customjs.js"></script>

</body>

</html>
