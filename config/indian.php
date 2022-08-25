<?php

class Indian{

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
	new Indian("Piatto riso basmati", "7,99", "riso basmati, piselli, anacardo, carote, cumino", "1", "1"),
	new Indian("Pollo al curry", "9,99", "pollo, curry in polvere, cipolle, aglio, zenzero, brodo di pollo", "1", "0"),
	new Indian("Piatto dosa", "5,99", "due croccanti dose, quattro ciotole di brodo con verdure miste diverse", "1", "1"),
	new Indian("Piatto gol gappe", "3,99", "sei gol gappe riempiti con il curry di ceci neri, due ciotole con acque aromatizzate dolce e piccante", "1", "1"),
	new Indian("Dolce gulab jamun", "4,99", "cinque gulab jamun", "1", "1"),
	new Indian("Dolce jalebi", "5,99", "otto jalebi", "1", "1"),
	new Indian("Dolce laddu", "1,99", "due laddu", "1", "1"),
	new Indian("Piatto di naan", "8,99", "due nann, ciotola di brodo di pollo e con verdure miste", "1", "0"),
	new Indian("Piatto di samosa", "6,99", "quattro samose, ripieni di patate, piselli, coriandolo, cipolla e un pizzico di spezie", "1", "1"),
	new Indian("Tandoori Chicken", "8,99", "pollo arrosto, yogurt e un pizzico si spezie", "1", "0"),
];
