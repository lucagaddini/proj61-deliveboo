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
	new Indian("Piatto Riso Basmati", "7,99€", "Riso Basmati, Piselli, Anacardo, Carote, Cumino", "1", "1"),
	new Indian("Pollo al Curry", "9,99€", "Pollo, , Anacardo, Carote, Cumino", "1", "1"),
	new Indian("Piatto Riso Basmati", "7,99€", "Riso Basmati, Piselli, Anacardo, Carote, Cumino", "1", "1"),
	new Indian("Piatto Riso Basmati", "7,99€", "Riso Basmati, Piselli, Anacardo, Carote, Cumino", "1", "1"),
	new Indian("Piatto Riso Basmati", "7,99€", "Riso Basmati, Piselli, Anacardo, Carote, Cumino", "1", "1"),
	new Indian("Piatto Riso Basmati", "7,99€", "Riso Basmati, Piselli, Anacardo, Carote, Cumino", "1", "1"),
	new Indian("Piatto Riso Basmati", "7,99€", "Riso Basmati, Piselli, Anacardo, Carote, Cumino", "1", "1"),
	new Indian("Piatto Riso Basmati", "7,99€", "Riso Basmati, Piselli, Anacardo, Carote, Cumino", "1", "1"),
	new Indian("Piatto Riso Basmati", "7,99€", "Riso Basmati, Piselli, Anacardo, Carote, Cumino", "1", "1"),
	new Indian("Piatto Riso Basmati", "7,99€", "Riso Basmati, Piselli, Anacardo, Carote, Cumino", "1", "1"),
];
