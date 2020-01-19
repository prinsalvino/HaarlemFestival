<!doctype html>
<html class = "dashboard">
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="css/styleCMS.css">
</head>
<body>   
<?php include "header.php" 
      include "config.php"  
        ?>
<body>
    <section class="page_section">
        <section id="Title">
    
            <div>         
                Dashboard
            </div>


            
        </section>
        
            <nav class="navigation"> 
            <ul style="background-color: white;
">
                <li style="background-color: grey;"><b style="background-color: grey;"><a class="cmsnavilink" href="dashboard.php">Dashboard</a></b></li>
                <li><b><a class="cmsnavilink" href="products.php"style="padding-right: 51px;">Products</a></b></li>
                <li><b><a class="cmsnavilink" href="homepageLogin.php"style="padding-right: 73px;">Logout</a></b></li>
            </ul>
            </nav>

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
                    Sales over past month.<br>
                    Items sold past month.
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







