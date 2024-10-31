<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <link rel="stylesheet" href="/Latihan/Latihan2/style.css">
</head>
<body>
    <div class="container">
        <h2>Latihan 2</h2>

        <?php
        function cetakBilangan($n) {
            for ($i = 1; $i <= $n; $i++) {
                if ($i % 4 == 0 && $i % 6 == 0) {
                    echo "<div class='output pemrogramanwebsite'>Pemrograman Website 2024</div>";
                } elseif ($i % 5 == 0) {
                    echo "<div class='output special2024'>2024</div>";
                } elseif ($i % 4 == 0) {
                    echo "<div class='output pemrograman'>Pemrograman</div>";
                } elseif ($i % 6 == 0) {
                    echo "<div class='output website'>Website</div>";
                } else {
                    echo "<div class='output default'>$i</div>";
                }
            }
        }
        cetakBilangan(10);
        ?>
  
    </div>
</body>
</html>
