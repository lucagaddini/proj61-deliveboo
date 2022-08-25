<?php

class Messicano{

	public $name;
	public $price;
	public $ingredients;
    public $visible;
    public $vegetarian;

	public function __construct($_name, $price, $_description, $_visible, $_vegetarian) {
		$this->name = $_name;
		$this->price = $price;
		$this->description = $_description;
		$this->visible = $_visible;
		$this->vegetaria = $_vegetarian;
	}
}

return [
	new Messicano("Chilaquils", 6.4, "composto da pezzi di tortilla di mais fritti conditi con una salsa verde piccante ed accompagnati da cipolle crude, pezzi di pollo, carne macinata, uova, formaggio, panna acida e fagioli", 1, 0),
	new Messicano("Pozole", 5.9, "stufato a base di mais cotto servito con carne, cavolo affettato, peperoncino, cipolla, aglio e altri aromi e spezie", 1, 0),
	new Messicano("Nopales", 5, "foglie di cactus consumate crude o cotte alla griglia", 1, 0),
	new Messicano("Chapulines", 6.4, "cavallette tostate alla piastra e condite con aglio, succo di lime e sale", 1, 0),
	new Messicano("Enchiladas", 7, "leggere sfoglie ripiene di diversi ingredienti, dalla carne alle verdure, e ricoperte da salsa piccante", 1, 0),
];
