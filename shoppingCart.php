<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/stylesheet.css">
    <title>Delete records from database using PHP - Coding Birds Online</title>
</head>
<?php include ("header.php"); ?>
<body>
<div style="margin-top: 20px;padding-bottom: 20px;">
    <center>
        <h3>Shopping Cart</h3>
    </center>
</div>
<div class="container">
    <table class="table">
        <thead id="thead" style="background-color: grey">
        <tr>
            <th>Customer</th>
            <th>Ticket ID</th>
            <th>Amount</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include "shoppingCartDB.php";
        $records = $this->ShopDB->getAllOrders();
        if ($records->num_rows>0){
            echo "Got it!";
            $i = 1;
            while ($result = $records->fetch_object()) {
                $customer_id = $result->customer_id;
                $ticket_id = $result->ticket_id;
                $qty = $result->qty;
                $price = $result->price;?>
                <tr>
                    <td><?php echo $customer_id;?></td>
                    <td><?php echo $ticket_id;?></td>
                    <td><?php echo $qty;?></td>
                    <td><?php echo $price;?></td>
                    <td><a href="shoppingCartDelete.php?customer_id=<?php echo $customer_id?>" class="btn btn-danger btn-sm">Delete</a> </td>
                </tr>
                <?php
                $i++;
            }
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>