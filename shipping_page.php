<!--Nahallah Champagne, Feburary 14, 2024
IT 202-004, Project 01, nac88@njit.edu-->

<?php
    //Slide 62
    if ( !isset($first_name)) { $first_name = " "; }
    if ( !isset($last_name)) { $last_name = " "; }
    if ( !isset($address)) { $address = " "; }
    if ( !isset($city)) { $city = ""; }
    if ( !isset($state)) { $state = ""; }
    if ( !isset($zip_code)) { $zip_code = ""; }
    if ( !isset($phone_num)) { $phone_num = ""; }
    if ( !isset($total_price)) { $total_price = "";}
    if ( !isset($dimension)) { $dimension = "";}
?>

<html>
    <head>
        <title>Shipping and Handling</title>
        <!--reference the css page for styling-->
        <link rel="stylesheet" href="home_page.css" />
    </head>

    <body>
        <!--Header Code-->
        <?php include 'header.php'; ?>

        <h1>Contact Information</h1>

        <?php
            if ( !empty($error_message)) { 
                echo "<ph>";
                echo $error_message;
                echo "</p>";
            }
        ?>

    <!--Slide 63 -->

    <form action = "shipping_results_page.php" method="post">
        <label>First Name: </label>
        <input type = "text" name = 'first_name' value=" <?php echo htmlspecialchars 
        ($first_name); ?>" required/>

        <label>Last Name: </label>
        <input type = "text" name = 'last_name' value=" <?php echo htmlspecialchars 
        ($last_name); ?>" required/>
        <br>
        <label>Address: </label>
        <input type = "text" name = 'address' value=" <?php echo htmlspecialchars 
        ($address); ?>" required placeholder="123 Main St"/>
        
        <label>City: </label>
        <input type = "text" name = 'city' value=" <?php echo htmlspecialchars 
        ($city); ?>" required/>
        
        <label>State: </label>
        <input type = "text" name = 'state' value=" <?php echo htmlspecialchars 
        ($state); ?>" required/>

        <label>Zip Code: </label>
        <input type = "text" name = 'zip_code' value=" <?php echo htmlspecialchars 
        ($zip_code); ?>" required placeholder="x00000"/>
        <br>
        <label>Phone Number: </label>
        <input type = "text" name = 'phone_num' value=" <?php echo htmlspecialchars 
        ($phone_num); ?>" required 
        placeholder="999-999-9999" pattern="\d{3}{\-}\d{3}{\-}\d{4}"/>
        <br><br>
        
        <!----------Package Dimemsions---------------->
        <div class= 'packageDimension' > 
            <br>
            <label>Total Amount: </label>
            <input type = "text" name = 'total_price' value=" <?php echo htmlspecialchars 
            ($total_price); ?>" />
            <br>
            <label>Package Dimemsions: </label>
            <input type = "text" name = 'dimension' value=" <?php echo htmlspecialchars 
            ($dimension); ?>" /><br>
        </div>

        <input type="submit" value= "Submit" />  <!--change the submit value to calculate-->
    </form>
        
    <?php include 'footer.php'; ?>

    </body>
</html>