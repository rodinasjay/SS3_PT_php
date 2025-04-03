<?php
    $menu = [
        "Hamburger" => 30.00,
        "Hamburger with Fries" => 50.00,
        "Spaghetti" => 35.00,
        "Chickenjoy" => 45.00,
        "Adobo" => 65.00,
        "Kari-kari" => 55.00
    ];
    
function displayMenu($menu) {
    echo '<table>
            <tr>
                <th>Item</th>
                <th>Price (₱)</th>
            </tr>';
    foreach ($menu as $item => $price) {
        echo "<tr><td>$item</td><td>₱" . number_format($price, 2) . "</td></tr>";
    }
    echo '</table>';
}

function calculateTotal($menu, $item, $quantity, $orderType) {
    $price = $menu[$item];
    $totalAmount = $price * $quantity;
    if ($orderType == "Take out") {
        $tax = $totalAmount * 0.12;
        $totalAmount += $tax;
    }
    return $totalAmount;
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body {
            background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkyGC1JGPw7umLEafha-ExfeyaFvSoLJpYP4z4FtYmrhr-ytEqCdT_2tNvup0NInO60Ko&usqp=CAU);
            font-family: ;
            text-align: center;
        }

        table {
            align: center;
        }

        form {
            background: white;
            padding: 30px;
            border-radius: 10px;
            height: 150px;
            width: 300px;
            margin: auto;
            border-top: 5px solid black;
            border-left: 5px solid black;
            border-bottom: 5px solid blue;
            border-right: 5px solid blue;
        }
        .result-container {
            background: skyblue;
            color: white;
            margin-top: 20px;
        }
        .container {
            background-image: ;
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <h1>Menu</h1>
    <table align="center" border="5" cellpadding="20" width="450">
        <thead>
            <tr>
                <th colspan="2">Order Menu</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="https://images.anovaculinary.com/sous-vide-hamburger/header/sous-vide-hamburger-header-og.jpg"
                        width="100px"></td>
                <td>Hamburger</td>
                <td> ₱30</td>
            </tr>
            <tr>
                <td><img src="https://acapulcospiritrestaurant.com/cdn/shop/products/haburger_fries.png?v=1593655276"
                        width="100px"></td>
                <td>Hamburger with Fries</td>
                <td>₱50</td>
            </tr>
            <tr>
                <td><img src="https://img.taste.com.au/_e6onvZ7/w720-h480-cfill-q80/taste/2024/03/5-ingredient-turbo-charged-spaghetti-recipe-196959-1.jpg"
                        width="100px"></td>
                <td>Spaghetti</td>
                <td>₱35</td>
            </tr>
            <tr>
                <td><img src="https://maeservesyoufood.com/wp-content/uploads/2022/11/jollibee-chicken-joy-2.jpeg"
                        width="100px"></td>
                <td>Chickenjoy</td>
                <td>₱45</td>
            </tr>
            <tr>
                <td><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Adobo_DSCF4391.jpg/1200px-Adobo_DSCF4391.jpg"
                        width="100px"></td>
                <td>Adobo</td>
                <td>₱65</td>
            </tr>
            <tr>
                <td><img src="https://i.pinimg.com/736x/8e/61/3e/8e613efd0a0e951388f3d5bab02e1991.jpg" width="100px">
                </td>
                <td>Kari-kari</td>
                <td>₱55</td>
            </tr>
        </tbody>
    </table>
    <div class="container">
    <form method="post">
            <label for="item">Select Item:</label>
            <select name="item" required>
                <?php foreach ($menu as $item => $price) { ?>
                    <option value="<?php echo $item; ?>"> <?php echo $item . " - ₱" . number_format($price, 2); ?> </option>
                <?php } ?>
                </select>

                <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" min="1" required>
            <br><br>
            
            <label>Order Type:</label>
            <input type="radio" name="order_type" value="Dine in" required> Dine In
            <input type="radio" name="order_type" value="Take out" required> Take Out
            <br><br>
            
            <input type="submit" value="Submit Order">
        </form>
    </div>



    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo '<div class="container result-container">';
        
        $item = $_POST['item'];
        $quantity = intval($_POST['quantity']);
        $orderType = $_POST['order_type'];
        
        $totalAmount = calculateTotal($menu, $item, $quantity, $orderType);
        
        echo "<h2>Order Summary</h2>";
        echo "Item: $item<br>";
        echo "Quantity: $quantity<br>";
        echo "Order Type: $orderType<br>";
        echo "Total Amount: ₱" . number_format($totalAmount, 2);
        
        echo '</div>';
    }
    ?>
</body>

</html>
