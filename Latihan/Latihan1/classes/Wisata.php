<?php
namespace Classes;

require_once 'Classes/Traits/Ticketable.php';

abstract class Wisata {
    var $name;
    var $location;
    var $ticketPrice;

    public function __construct($name, $location, $ticketPrice) {
        $this->name = $name;
        $this->location = $location;
        $this->ticketPrice = $ticketPrice;
    }

    abstract public function getDescription();

    public function getName() {
        return $this->name;
    }

    public function getLocation() {
        return $this->location;
    }

    public function getTicketPrice() {
        return $this->ticketPrice;
    }
}
?>