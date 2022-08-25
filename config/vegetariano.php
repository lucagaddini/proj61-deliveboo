<?php

class Vegetariano{

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
	new Vegetariano("Patatine dolci fritte", "3,99", "patatine fritte dolci, salsa", "1", "1"),
	new Vegetariano("Piatto di gnocchi", "7,99", "gnocchi, spinaci, castagne, semolino", "1", "1"),
	new Vegetariano("Cornetti salati", "4,99", "cornetti salati con misto di verdura e salsa", "1", "1"),
	new Vegetariano("Pizza al peperoncino e pomodoro", "6,99", "impasto della pizza, salsa di pomodoro, mozzarella, pomodoro, peperoncino rosso", "1", "1"),
	new Vegetariano("Insalata mista", "4,99", "rucola, radicchio, finocchio, carote, porro, olio d'oliva", "1", "1"),
	new Vegetariano("Hamburger vegetariano", "4,99", "panino con bistecca di soia, cipolla rossa, insalata, salsa, pomodoro", "1", "1"),
	new Vegetariano("Noodles con verdure", "8,99", "noodles, cavolo capuccio, carote, peperoni, cipollini, zucchine", "1", "1"),
	new Vegetariano("Piadina croccante con verdure", "6,99", "piadina croccante, pomodoro, mais, peperoni verdi dolci", "1", "1"),
	new Vegetariano("Tacos con verdura", "7,99", "tacos, patafine fritte, pomodoro, cipolle rosse, insalata", "1", "1")
];
