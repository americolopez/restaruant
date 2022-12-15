
<?php
   include_once 'includes/upload.php'; 
    ?>
<html>
    <head>
    <meta charset="utf-8">
        <link rel="stylesheet" href="Style.css">
        <title> Request Receipt </title>
        
    </head>
    <body id="bodyTicket">
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
        <div id="wrapperTicket" >
            <section id="ticketSection">
                <h1 id="h1ticket"> Receipt</h1><br>
                    <form method ="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        <p> For your receipt please enter your Name and Phone Number:</p><br>
                        <p>Name</p>
                        <input type="text" size="20" name="name" placeholder="First and last name" maxlength="20"><br>
                        <br>
                        <p>Phone Number</p>
                        <input type="text" maxlegnth="12" size="15" name="phone" placeholder="Phone number"><br>
                        <br>
                        <input id="btn"type="submit" name="sub" >
                     </form>
    
                    <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $name = $_REQUEST['name'];
                        $number = $_REQUEST['phone'];
                        if (empty($name && $number)) 
                        {
                        echo "Both fields must be compeleted  ";
                         }
                         $data= "Admin"
                         // created a template
                        $sql = "SELECT * FROM customer WHERE name_ = ? AND Phone = ?;";
                        //created a prepared statement 
                        $stmt = mysqli_stmt_init($conn);
                        //prepare the prepared statement 
                        if (mysqli_stmt_prepare($stmt, $sql)){
                            echo "SQL statement failed";
                        } else{
                            // bind parameters to the placeholder
                            mysqli_stmt_bind_param($stmt, "ss", $name, $number);

                        }
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        if($resultCheck > 0 ){
                        while($row = mysqli_fetch_assoc($result)) {      
                        ?>
                            <br>
                            <?php echo "Name: ",$row['name_']; ?><br>
                            <br>
                            <?php echo "Addess: ",$row['Address_']; ?><br>
                            <br>
                            <?php echo "Phone Number: ",$row['Phone']; ?><br>
                            <br>
                            <?php echo "Order: ",$row['Orders']; ?><br>
                            <br>
                            <?php echo "Request: ",$row['Request']; ?><br>
                            
            </section>
                        <?php
                        }
                        }
                        }
                        ?>               

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
        



        