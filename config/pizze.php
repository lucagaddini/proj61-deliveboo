<?php

class Pizza{

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
	new Pizza("Margherita", 6.4, "impasto della pizza, salsa di pomodoro, mozzarella di bufala campana DOP, olio extravergine di oliva", 1, 1),
	new Pizza("Marinara", 7.5, ": impasto della pizza, salsa di pomodoro, olio extravergine di oliva, aglio, origano, prezzemolo, colatura di alici di Cetara (estratto di alici salate, sale)", 1, 1),
	new Pizza("Napoli", 8, "impasto della pizza, salsa di pomodoro, mozzarella di bufala campana DOP, filetti di acciughe (acciughe, sale, salamoia), olio extravergine di oliva, basilico", 1, 1),
	new Pizza("Funghi", 7, "impasto della pizza, salsa di pomodoro, mozzarella di bufala campana DOP, funghi champignon", 1, 1),
	new Pizza("Capricciosa", 7.5, "impasto della pizza, salsa di pomodoro, fiordilatte, olive taggiasche (olio extravergine di oliva, sale, acido lattico), funghi champignon, carciofo grigliato (in olio di semi di girasole, aceto, sale, aglio, peperoncino, prezzemolo, antiossidante E300, correttore di acidità E330), uovo BIO, prosciutto crudo di Parma DOP (suino, sale)", 1, 1),
	new Pizza("Provola e speck", 7.9, "impasto della pizza, fiordilatte, provola affumicata (latte, fermenti lattici, caglio, sale, aroma fumo liquido), speck artigianale dell’Alto Adige IGP (carne di suino, sale, spezie, destrosio, fruttosio, conservante E250, antiossidante E301, affumicato con legno di faggio)", 1, 0),
	new Pizza("Bresaola", 7.4, "impasto della pizza, fiordilatte, Bresaola punta d’anca (carne bovina, sale, destrosio, aromi naturali, conservanti E250 E252), rughetta, Parmigiano Reggiano (latte, sale, caglio), olio extravergine di oliva", 1, 0),
	new Pizza("4 formaggi + 1: ", 8.5, "impasto della pizza, fiordilatte, fontina Valdostana (latte crudo vaccino, caglio, sale), Taleggio (latte, sale, caglio), Gorgonzola (latte, fermenti lattici, sale, caglio, penicillium), Parmigiano Reggiano (latte, sale, caglio)", 1, 1),
	new Pizza("L'ortolana", 8.5, "impasto della pizza, fiordilatte, melanzane, zucchine, radicchio, patate, pomodorini pachino, olio extravergine di oliva, rosmarino, sale", 1, 1),
	new Pizza("Bufala e pachino", 8.5, "impasto della pizza, mozzarella di bufala campana DOP, pomodorini pachino, basilico, olio extravergine di oliva", 1, 1),
	new Pizza("Diavola", 8, "impasto della pizza, salsa di pomodoro, mozzarella di bufala campana DOP, Ventricina piccante (carne di suino, sale, aromi naturali, destrosio, spezie, antiossidante E301, conservanti E252 E250)", 1, 0),
	new Pizza("La teresina", 9.5, "impasto della pizza, mozzarella di bufala campana DOP, fiordilatte, mortadella di Bologna, Parmigiano Reggiano (latte, sale, caglio), glassa di aceto balsamico di Modena IGP (mosto d’uva concentrato, aceto di vino, colorante caramello-solfito-ammoniacale, addensanti: gomma di guar e gomma xantana. Antiossidante: metabisolfito di potassio solfito)", 1, 0),
	new Pizza("La carbonara al contrario", 10, "impasto della pizza, fiordilatte, uova, guanciale (guanciale di suino, sale, spezie, aromi naturali, conservante E252 E250), pepe di Sichuan, pecorino romano (latte di pecora termizzato, caglio, sale, fermenti lattici)", 1, 0),
];

