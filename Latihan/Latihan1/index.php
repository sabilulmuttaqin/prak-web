<?php
require 'Classes/Wisata.php';
require 'Classes/WisataAlam.php';

use Classes\WisataAlam;

// Wisata Alam
$bromo = new WisataAlam("Gunung Bromo", "Malang", 100000);
$tumpakSewu = new WisataAlam("Tumpak Sewu", "Lumajang", 50000);
$semeru = new WisataAlam("Gunung Semeru", "Malang", 150000 );
$prigi = new WisataAlam("Pantai Prigi", "Trenggalek", 20000);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
<?php include './component/header.php' ?>


<div class="container">
    <div class="card">
        <img src="/Latihan/Latihan1/assets/img/bromo.jpg" alt="Gunung Bromo"> 
        <h2><?php echo $bromo->getName(); ?></h2>
        <p><strong>Lokasi:</strong> <?php echo $bromo->getLocation(); ?></p>
        <p><?php echo $bromo -> getDescription()?></p>
        <p class="price"><strong>Harga tiket: Rp. <?php echo number_format($bromo->getTicketPrice(),0,',','.'); ?></strong></p>
        <p class="discount">Harga tiket dengan diskon 15%: Rp. <?php echo number_format($bromo->calculateDiscount($bromo->getTicketPrice(), 15), 0, ',', '.'); ?></p>
    </div>

    <div class="card">
        <img src="/Latihan/Latihan1/assets/img/semeru.jpg" alt="Gunung Semeru"> 
        <h2><?php echo $semeru->getName(); ?></h2>
        <p><strong>Lokasi:</strong> <?php echo $semeru->getLocation(); ?></p>
        <p><?php echo $semeru -> getDescription()?></p>
        <p class="price"><strong>Harga tiket: Rp. <?php echo number_format($semeru->getTicketPrice(), 0, ',', '.'); ?></strong></p>
        <p class="discount">Harga tiket dengan diskon 10%: Rp. <?php echo number_format($semeru->calculateDiscount($semeru->getTicketPrice(), 0), 0, ',', '.'); ?></p>
    </div>

    <div class="card">
        <img src="/Latihan/Latihan1/assets/img/tumpak.png" alt="Air Terjun Tumpak Sewu"> 
        <h2><?php echo $tumpakSewu->getName(); ?></h2>
        <p><strong>Lokasi:</strong> <?php echo $tumpakSewu->getLocation(); ?></p>
        <p><?php echo $tumpakSewu -> getDescription()?></p>
        <p class="price"><strong>Harga tiket: Rp. <?php echo number_format($tumpakSewu->getTicketPrice(), 0, ',', '.'); ?></strong></p>
        <p class="discount">Harga tiket dengan diskon 10%: Rp. <?php echo number_format($tumpakSewu->calculateDiscount($tumpakSewu->getTicketPrice(), 10), 0, ',', '.'); ?></p>
    </div>
    <div class="card">
        <img src="/Latihan/Latihan1/assets/img/prigi.jpg" alt="Pantai Prigi"> 
        <h2><?php echo $prigi->getName(); ?></h2>
        <p><strong>Lokasi:</strong> <?php echo $prigi->getLocation(); ?></p>
        <p><?php echo $prigi -> getDescription()?></p>
        <p class="price"><strong>Harga tiket: Rp. <?php echo number_format($prigi->getTicketPrice(), 0, ',', '.'); ?></strong></p>
        <p class="discount">Harga tiket dengan diskon 10%: Rp. <?php echo number_format($prigi->calculateDiscount($tumpakSewu->getTicketPrice(), 10), 0, ',', '.'); ?></p>
    </div>
 
    

</div>
<?php include './component/footer.php' ?>


</body>
</html>