<!doctype html>
<html>
    <header>
    <!--Add the header-->
    <?php include "header.php";?>
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/historystyle.css">
    </header>
    <body>
    <div class="container" style="width: 65%">
        <h2>Shopping Cart</h2>
        <?php
            echo "The page is working";
            $query = "SELECT * FROM tickets WHERE event == "History"";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="col-md-3">

                        <form method="post" action="historyTickets.php?action=add&id=<?php echo $row["id"]; ?>">

                            <div class="ticket">
                                <!--This here is to display some stuff about the ticket-->
                                <h3 class="ticketinfo"><?php echo $row["special"]; ?></h3>
                                <h3 class="ticketprice"><?php echo $row["price"]; ?></h3>
                                <h3 class="ticketdate"><?php echo $row["date"]; ?></h3>
                                <!--This here is to input the quantity. I'll be changing it to + and - later -->
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="infoHidden" value="<?php echo $row["special"]; ?>">
                                <input type="hidden" name="priceHidden" value="<?php echo $row["price"]; ?>">
                                <input type="hidden" name="dateHidden" value="<?php echo $row["date"]; ?>">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart">
                            </div>
                        </form>
                    </div>
                    <?php
                }
            }
        ?>
    </body>
</html>
