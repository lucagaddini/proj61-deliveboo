<?php

class Cinese{

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
	new Cinese("Zuppa di noodles", 8, "Noodles all'uovo 80g, Carote 1, Zucchine 1, Funghi shiitake 1, Porri 1, Broccoli siciliani 250 g, Cavoli cinesi 45 g, Manzo (pezza) 70 g, Zenzero fresco, Aglio 1 spicchio, Soia (salsa) 1 cucchiai, Cipollotti 1, Olio di semi di sesamo 1 cucchiaio, Olio di girasole 1 cucchiai, Peperoncino rosso 1, Brodo vegetale 200 ml", 1, 0),

	new Cinese("Anatra alla pechinese", 6.5, "Anatra(mezza), Malto di grano 10 g, Olio di semi di sesamo 5 g, Hoisin 10 g, Zucchero 10 g, Soia (salsa) 2.5 g, Cipollotti 2", 1, 0),

	new Cinese("Pollo alle mandorle", 6.5, "Pollo (petto) 100 g, Mandorle pelate 20 g, Cipolle ½, Farina di riso 1 cucchiai, Soia (salsa) 20 ml, Acqua calda 2 cucchiai, Olio di semi 2 cucchiai, Zenzero fresco, Sale", 1, 0),

	new Cinese("Ravioli al vapore cinesi", 2, "Farina tipo 0 50 g, Farina di riso 30 g, Acqua 80 ml, Maiale (lonza macinata) 80 g, Gamberi 40 g, Cavoli cinesi 40 g, Zenzero fresco, Carote 1, Porri ½, Salsa di soia 2 cucchiai, Erba cipollina 1 ciuffo, Sake 1 cucchiaio", 1, 0),

	new Cinese("Riso alla cantonese", 9, "Riso basmati 70 g, Prosciutto cotto 30 g, Uova 2, Piselli 40 g, Salsa soia 1 cucchiaio, Olio di semi di sesamo 2 cucchiai, Olio di semi 1 cucchiaio, Sale", 1, 0),

	new Cinese("Manzo al mandarancio", 16, "150 g carne di manzo, 1 cipollotto, zenzero fresco, peperoncino rosso piccante, 5 mandaranci piccoli, 2 cucchiai di succo di mandarancio, 4 cucchiai di olio di semi, 1 cucchiaio di pepe di sichuan, 2 cucchiai di vino bianco secco, 2 cucchiai di salsa di soia, zucchero di canna, sale", 1, 0),

    new Cinese("Maiale arrostito(char siu)", 7, "150 g di polpa dii maiale presa da spalla o coscia , salsa hoisin, salsa di soia, 1 cucchiao di zucchero di canna, 1 cucchiaio di vino rosso, 1 cucchiaio di olio vegetale, sale, miele", 1, 0),
];
