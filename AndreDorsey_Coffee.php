<!DOCTYPE html>
<!-- Processes the form described in AndreDorsey_Coffee.html-->

<html lang="en">
<head>
<title>Php for Radford Coffee Shack</title>
    <meta charset="utf-8" />
    <style ="text/css">
        td, th, table {border: thin solid black;}
    </style>

</head>

<body>
    <?php
    //Get form data values

        $Sumatran = $_POST["Sumatran"];
        $French = $_POST["French"];
        $Caramel = $_POST["Caramel"];
        $Decaffe = $_POST["Decaffe"];
        $name = $_POST["name"];
        $street = $_POST["street"];
        $city = $_POST["city"];
        $payment = $_POST["payment"];

    //if blank set to 0
        
        if ($Sumatran == "") $Sumatran = 0;
        if ($French == "") $French = 0;
        if ($Caramel == "") $Caramel = 0;
        if ($Decaffe == "") $Decaffe = 0;

    // Compute the item costs and total cost

        $Sumatran_cost = 10.0 * $Sumatran;
        $French_cost = 11.5 * $French;
        $Caramel_cost = 10.0 * $Caramel;
        $Decaffe_cost = 9.5 * $Decaffe;

        $total_price = $Sumatran_cost + $French_cost + $Caramel_cost + $Decaffe_cost;
        $total_items = $Sumatran + $French + $Caramel + $Decaffe;

    //Return the results for the table
    ?>

    //The order form
    
    <h4> Customer: </h4>
    <?php
    print("$name <br /> $street <br /> $city <br />");
    ?>
    <p /><p />

    <table>
        <caption>Order Information </caption>
        <tr>
            <th> Product </th>
            <th> Unit Price </th>
            <th> Quantity </th>
            <th> Item Cost </th>
        </tr>

        <tr>
            <td> Sumatran Coffee </td>
            <td> $10.00 </td>
            <td> <?php print ("$Sumatran"); ?> </td>
            <td><?php printf ("$ %4.2f", $Sumatran_cost);?>
            </td>
        </tr>

        <tr>
            <td> French Morning Roast </td>
            <td> $11.50 </td>
            <td> <?php print ("$French"); ?> </td>
            <td><?php printf ("$ %4.2f", $French_cost);?>
            </td>
        </tr>

        <tr>
            <td> Caramel Nut Roast </td>
            <td> $12.00 </td>
            <td> <?php print ("$Caramel"); ?> </td>
            <td><?php printf ("$ %4.2f", $Caramel_cost);?>
            </td>
        </tr>

        <tr>
            <td> Decaffeinated Roast </td>
            <td> $9.50 </td>
            <td> <?php print ("$Decaffe"); ?> </td>
            <td><?php printf ("$ %4.2f", $Decaffe_cost);?>
            </td>
        </tr>

    </table>
    <p /><p />
    <?php 
        print "You ordered $total_items pounds of coffee<br />";
        printf ("Your total bill is: $ 5.2f <br />", $total_price);
        print "Your chosen method of payment is: $payment <br />";
    ?>

</body>
</html>