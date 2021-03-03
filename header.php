<meta name="viewport" content="width=device-width, initial-scale=1">
<header>

  <div class="headerRow">

    <div class="headerColumn">

      <img src="../img/BetterLogo.png" title="Haarlem festival" style="width:8vw; Height:8vw; margin-left:1vw">

    </div>

    
    <div class="headerColumn">
    <a href="index.php" >
      <img src="../img/titlelogo.png" title="Haarlem festival" style="width:25.25vw; Height:8vw">
    </a>
    </div>

    <div class="headerColumn" >      

      <div class="rowLoginCart">

      <?php 

    isset($_SESSION) || session_start();



      if(isset($_SESSION['email']))

      {

        

        ?>

          <div class="columnLoginCart" style=" text-align: center; margin-top:1vw">

              <b>

              <p class="cartlink"> Hi <?php echo ucfirst($_SESSION['userName']); ?>!! <br><br>

              <a class="cartlink" href="logout.php"> Log out </a></b>

          </div>

        <?php 

      }

      else

      {

        ?> 

          <div class="columnLoginCart" style=" text-align: center; margin-top:1vw">

            <b><a class="cartlink" href="indexLogin.php"> Log in </a>

            <br> Or <br> 

            <a class="cartlink" href="signUpCustomer.php"> Sign up  </a></b>

            </div>

        <?php 

      }

    if(isset($_GET['orderAdded']))
    {
        ?><script>
            displayAlert();
        </script>  
        <?php
    } ?>
    
          <div class="columnLoginCart" style=" margin-top:1vw">

              <p> 

              <a class="cart" href="shoppingCart.php" style="text-decoration: none">

                <img class=cartImg src="../img/shopping-cart.png" align="top" title="cart/basket" style="width:5vw; Height:5vw">

              </a>  

                <br><br><br><br>

                  <!-- <b><a class="translink" href="shoppingCart.php"> NL/EN </a></b>  -->

              </p>

          </div>

      </div>

    </div>

  </div>  



  <nav class="navigbar" >

    <ul> 	

          <li><b>   <a class="navilink" href="index.php"> Home  </a>   </b></li> 

          <li><b>   <a class="navilink" href="JazzHomepg.php"> Jazz  </a>   </b></li> 	

          <li><b>   <a class="navilink" href="DanceHomepg.php"> Dance </a>   </b></li> 

          <li><b>   <a class="navilink" href="foodhome.php"> Food  </a>   </b></li> 	

          <li><b>   <a class="navilink" href="historyHomePage.php"> Historic Tour </a>   </b></li> 

          <li><b>   <a class="navilink" href="dashboard.php"> Contact Us </a>   </b></li> 

      </ul>

  </nav> 

  <br>

</header>

