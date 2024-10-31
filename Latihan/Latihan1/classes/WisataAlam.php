<?php
namespace Classes;

use Classes\Traits\Tiketable;

class WisataAlam extends Wisata {
    use Tiketable;

    public function getDescription() {
        return "{$this->name} adalah wisata alam yang terletak di {$this->location}";
    }

}   
?>