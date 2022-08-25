<?php

class GlutenFree{

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
	new GlutenFree("Hamburger di pollo", "4,99", "pane gluten free, bistecca di pollo, formaggio cheddar, insalata, salse, patatine fritte", "1", "0"),
	new GlutenFree("Uova sode", "3,99", "due uova sode, pepe nero, sale", "1", "0"),
	new GlutenFree("Salmone arrosto", "9,99", "trancio di salmone arrosto, spicchi d'aglio, pepe nero, prezzemolo", "1", "0"),
	new GlutenFree("Macedonia", "5,99", "kiwi, banana, fragola, cereali, frutta secca", "1", "1"),
	new GlutenFree("Insalata di ceci", "6,99", "ceci, avocado, mozzarella", "1", "1"),
	new GlutenFree("Pancakes", "3,99", "due pancakes, sciroppo d’acero, mirtilli", "1", "1")
];
