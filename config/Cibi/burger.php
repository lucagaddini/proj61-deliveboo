<?php

class Burger{

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
	new Burger("Hamburger classic", 6.5, "450 g di polpa di manzo tritata, la mollica di 2 panini, latte, un cucchiaio di prezzemolo tritato, farina, burro, olio, sale", 1, 0),
	new Burger("Hamburger di pollo", 14, "500 g di petto di pollo, 300 g di polpa di coscia di pollo, 2 lime, olio extravergine di oliva, pepe verde, erba cipollina fresca, 1 spicchio di aglio, 1 cucchiaio di amido di mais, sale, panna acida", 1, 0),
	new Burger("Hamburger di salmone", 7, "400 g di salmone fresco, 100 g di mollica di pane, latte, 70 g di burro a temperatura ambiente, pangrattato, la scorza di 1 limone non trattato, burro chiarificato, sale, pepe bianco", 1, 0),
	new Burger("Hamburger di tonno, caprino e maionese nera", 8.5, "4 panini tondi e leggeri, 400 g di tonno, 2 uova, olio, limone, caprino, fagiolini verdi, 8 pomidoro tondi, radicchio rosso, condimento balsamico, sale, paprika", 1, 0),
	new Burger("Hamburger con cipolla caramellata, crema di avocado e friggitelli", 7.5, "200 g macinato di vitello, 0.25 cipolla di Tropea, 0.25 avocado, 0.25 lime, 0.75 peperoni friggitelli, 0.75 Pomodorini, 0.50 fette pancetta, 0.50 cucchiaini formaggio fresco spalmabile, senape, 0.25 cucchiaino concentrato di pomodoro, insalatina fresca, olio extravergine di oliva, sale", 1, 0),
	new Burger("Hamburger alla calabrese, mozzarella di bufala e radicchio", 9, "200 g macinato di vitello, 0.25 cipolla di Trpea, 3 fette spianata calabra piccante, 4 Pomodorini, 0.25 rapa rossa, 1/8 bicchiere aceto di mele, 0.25 cucchiaino zucchero, 1/8 bicchiere vino bianco, 1/8 bicchiere acqua, 1 cucchiaini formaggio fresco spalmabile, insalatina, olio extravergine di oliva, sale", 1, 0),
	new Burger("Hamburger con ravioli di bufala affumicata e basilico", 9.5, "150 g carne macinata carne di vitello, 12.50 g mozzarella di bufala affumicata, 2 ravioli ripieni di mozzarella di bufala, 12.50 g burro, 0.25 l brdo vegetale, fogliolina basilico, cacao, olio extravergine di oliva, sale e pepe", 1, 0),
];
