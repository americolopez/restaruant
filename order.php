<?php

?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel=" stylesheet" href="Style.css">
        <title> Order Service</title>

    </head>
 
    <body>
        
        <nav>
            <ul>
                <div id="wrapper_index">
                <li><a href="index.php">Home page</a></li>
                    <li><a href="order.php">Make your Order</a></li>
                    <li><a href="menu.php"> Food Menu</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="Request.php">Find your receipt</a></li>
                    <li class="menuTitle">La Corita</li>
                </div>
            </ul>
        </nav>
        
        <div id="wrapper_index">
            <div id="intro">
                <h1 id="h1Order"> Thank you for choosing La Corita</h1>
                    <section id="orderSection">
                        <h2 id="h2Order"> Let's make your Order </h2>
                            <div id="pOrder">
                                <p> Our options for the week:<br>
                                <br>
                                 Monday: spice chicken with rice and beans  <br>
                                <br>
                                Tuesday: gorditas either chicken or beef(3) <br>
                                <br>
                                Wednesday: whatever you want with a side of black beans and rice <br>
                                <br>
                                Thursday: Lorem ipsum dolor sit amet consectetur adipisicing <br>
                                <br>
                                Friday: Lorem ipsum dolor sit amet consectetur adipisicing <br>
                                <br>
                                Saturday: Lorem ipsum dolor sit amet consectetur adipisicing <br>
                                <br>
                                Sunday: Lorem ipsum dolor sit amet consectetur adipisicing <br>
                                <br>
                                look at our food menu for our other options
                                </p>
                            </div>
                     
                        <h2 id="h2Cust">Customer Information </h2>
                            <form id="orderB" action="includes/orderUpload.php" method="POST">
                                Please enter your first name and last name:<br>
                                <input type="text" name="name_" placeholder="First and last name" maxlength="20" required><br>
                                <br>
                                Please enter your address:<br>
                                <input type="text" size="50" name="Address_" placeholder="Address" maxlength="50"required><br>
                                <br>
                                Please enter your Phone number:<br>
                                <input type="number" name="Phone" placeholder="Phone Number" maxlength="12" required><br>
                                <br>
                                Please enter your order <br>
                                <input type="text" size= "50" name="Orders" placeholder="Enter your order here"><br>
                                <br>
                                please enter any speical request <br>
                                <input type="text" size= "50" name="Request" placeholder="Enter your request"><br>
                                <br>
                                
                                <button type="submit" name="submit"> send your order</button>
                            </form>
                    </section>        
            </div>
        </div>

        <footer id="footer">
            <div id="Hours">
                <h3 class="h3-Hours"> Hours </h3>
                    <p id="p-Hours">
                        Monday - Saturday: 9:00am-5:00pm<br>
                        Sunday 9:00am-1:00pm
                    </p>
            </div>
        </footer>    

    </body>
    
    

</html>