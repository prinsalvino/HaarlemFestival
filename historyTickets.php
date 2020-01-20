<!doctype html>
    <html>
    <header>
        <link rel="stylesheet" href="css/stylesheet.css">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/historystyle.css">
    </header>
    <?php include ("header.php"); ?>
    <body>
    <section class="tickets">
        <p>This is where the buttons would spawn.</p>
        <section class="select">
            <input type="text" name="user">
            <input type="text" name="ticket id">
            <input type="text" name="amount">
            <input type="text" name="price">
            <button onclick="addToCart()">Add to cart</button>
            <?php
                include ("historyDB.php");
                public function addToCart()
                {
                    $user = $_POST['user'];
                    $ticket = $_POST['ticket id'];
                    $amount = $_POST['amount'];
                    $price = $_POST['price'];
                    $this->historyDB->addToCart($user, $ticket, $amount, $price);
                }
            ?>
        </section>
    </section>
</body>
<?php
include ("footer.php");
?>
</html>