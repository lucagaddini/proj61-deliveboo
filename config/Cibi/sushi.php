<?php

class Sushi{

    public $name;
    public $price;
    public $ingredients;
    public $visible;
    public $vegetarian;

    public function __construct($_name, $_price, $_ingredients, $_visible, $_vegetarian) {
        $this->title = $_name;
        $this->image = $_price;
        $this->type = $_ingredients;
        $this->type = $_visible;
        $this->type = $_vegetarian;
    }
}

return [
    new Sushi("Sushcotumato", 5.50, "Impasto dell'arancino con all'interno zucchine e topping di crema di peperoni gialli - 6pz. ", "1", "0"),
    new Sushi("Tostushi", 7.50, "Riso in forma quadrata, verdure e gamberi con topping di gambero fritto - 1pz. ", "1", "1"),
    new Sushi("Sashimi", 9.50, "Fette di tonno fresco di altissima qualità - 4pz.", "1", "1"),
    new Sushi("Piatto shushi misto", 15.50, "Hosomaki, sashimi e nigiri - 12pz.  ", "1", "1"),
    new Sushi("Hosomaki", 5.50, "Involtino di riso con ingredienti tipici della cultura giapponese : salmone, tonno , alghe , radici ecc..  - 5pz.", "1", "1"),
    new Sushi("Nigiri", 6.50, "Base di riso con copertura di pesce crudo e freschissimo - 3pz.", "1", "1"),

];

