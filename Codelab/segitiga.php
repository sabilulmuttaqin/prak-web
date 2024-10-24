<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segitiga</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            background-image: url('img/bg2.jpeg');
            
        }
        .container {
            display: flex;
            justify-content: center; 
            align-items: center ;
            gap: 40px;
            height: 100vh;
        }
        .item {
            align-items: center; 
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.5);
        }
        pre {
            font-size: 30px;
            line-height: 1;
            margin: 0;
            color: #2c3e50;
        }
        p {
            font-size: 16px;
            color: #34495e;
            margin-top: 15px;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">

    <div class="item">
        <?php
        function segitigaSamaSisi($tinggi) {
            echo "<pre>";
            for($a = 1; $a <= $tinggi; $a++) {
                for($b = 1; $b <= $tinggi - $a; $b++) {
                    echo " ";
                }
                for($c = 1; $c <= $a * 2 - 1; $c++) {
                    echo "*";
                }
                echo "\n";
            }
            echo "</pre>";
        }

        segitigaSamaSisi(5);
        ?>
    </div>

    <div class="item">
        <?php
        function segitigaSamaSisiTerbalik($tinggi) {
            echo "<pre>";
            for($a = $tinggi; $a >= 1; $a--) {
                for($b = 1; $b <= $tinggi - $a; $b++) {
                    echo " ";
                }
                for($c = 1; $c <= $a * 2 - 1; $c++) {
                    echo "*";
                }
                echo "\n";
            }
            echo "</pre>";
        }

        segitigaSamaSisiTerbalik(5);
        ?>
    </div>
</div>
</body>
</html>
