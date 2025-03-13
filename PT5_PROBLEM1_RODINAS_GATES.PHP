<html>
    <head>
        <title></title>
        <style>   
                body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
            animation: bgColorChange 10s infinite alternate;
            transition: background 1s ease-in-out;
        }
   
                @keyframes bgColorChange {
            0% { background:rgb(235, 7, 15); }
            25% { background:rgb(25, 23, 117); }
            50% { background:rgb(8, 153, 163); }
            75% { background:rgb(12, 112, 17); }
            100% { background:rgb(8, 49, 68); }
        }


        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            margin: auto;
            border-top: 5px solid lightblue;
            border-left: 5px solid lightblue;
            border-bottom: 5px solid blue;
            border-right: 5px solid blue;
        }

        input {
            width: 80%;
            padding: 8px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background: #007bff;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button:hover {
            background: #0056b3;
            border-top: 5px solid lightblue;
            border-left: 5px solid lightblue;
            border-bottom: 5px solid blue;
            border-right: 5px solid blue;
        }

        .result {
            margin-top: 20px;
            font-size: 18px;
            color: #333;
        }
        </style>
    </head>
    <body>
    <div class="container">
    <h2>Sum of Reciprocals</h2>
    <form method="POST">
        <input type="number" name="n" min="1" placeholder="Enter N" required>
        <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = intval($_POST["n"]);
        $sum = 0.0;
        
        for ($i = 1; $i <= $n; $i++) {
            $sum += 1 / $i;
        }
        
        echo "<div class='result'>Sum is: " . number_format($sum, 10) . "</div>";
    }
    ?>
</div>
    </body>
</html>

