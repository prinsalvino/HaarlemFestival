<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        $records = $this->ShopDB->getOrdersTickets();
        foreach ($records as $result){
                $customer_id = $result['customer_id'];
                $ticket_id = $result['ticket_id'];
                $qty = $result['qty'];
                $price = $result['price'];?>
                <tr>
                    <th><?php echo $customer_id;?></th>
                    <th><?php echo $ticket_id;?></th>
                    <th><?php echo $qty;?></th>
                    <th><?php echo $price;?></th>
                    <th><a href="shoppingCartDelete.php?customer_id=<?php echo $customer_id?>" class="btn btn-danger btn-sm">Delete</a> </th>
                </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>