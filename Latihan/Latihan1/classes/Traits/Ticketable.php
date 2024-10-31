<?php
namespace Classes\Traits;

trait Tiketable {
    public function calculateDiscount($price, $percentage) {
        if (!is_numeric($price) || !is_numeric($percentage)) {
            throw new \Exception('Harga tiket atau diskon bukan angka.');
        }
    
        return $price - ($price * ($percentage / 100));
    }
}
?>
