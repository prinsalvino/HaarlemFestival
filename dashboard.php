<?php session_start(); ?>
<!doctype html>
<html class = "dashboard">
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="css/styleCMS.css">
</head>
<body>   
<?php include "header.php" 
      include "DB.php"        
        ?>
<body>
    <section class="page_section">
        <section id="Title">
    
        <div style="width: 1388px;">              
                Dashboard
            </div>            
        </section>
        

         
  
  <div class="sidenav">
        <a href="dashboard.php">Dashboard</a>
        <button class="dropdown-btn" style="width: 170px;">Products</button>
        <div class="dropdown-container">
            <a href="#" style="background-color: slategrey;">Add New</a>
            <a href="editEvents.php" style="background-color: slategrey;">Edit Existing</a>    
        </div>
        <a href="homepageLogin.php">Logout</a>     
    </div>

    <script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "contents") {
    dropdownContent.style.display = "none";
    } else {
    dropdownContent.style.display = "contents";
    }
    });
    }
    </script>


            <div class="Sales_box" id="sales">
                <div id="title">Sales</div>
                <div id="amountsales">
                    Stuff goes here.<br>
                    For example, a bill-to address
                </div>
            </div>
            
            <div class="Statistics_box" id="stats">
                <div id="title">Statistics</div>
                <div id="statsis">
                    View over past month.<br>    
                    INSERT VIEWS                
                </div>
                <div id="statsis">
                    Sales over past month.<br>   
                    INSERT SALES                 
                </div>
                <div id="statsis">
                    Items sold past month. 
                    INSERT ORDERS               
                </div>
                
                    
            </div>

            <div class="message_box" id="messages">
                <div id="title">Messages</div>
                <div id="mails">
                    Stuff goes here.<br>
                    For example, a bill-to address
                </div>
            </div>

        

        
    
    
    </section>
    


</body>
</html>


 
 
<?php include "footer.php" ?>







