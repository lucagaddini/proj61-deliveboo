<?php

class French{

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
    new French("Baguette", 3.50, "Pane tipico francesce, ricetta originale con acqua,sale,olio,lievito e farina", "1", "1"),
    new French("Croissant Salato", 6.50, "Tipico croissant di pasta sfoglia con formaggio francese e prosciutto cotto con aggiunta di insalata", "1", "0"),
    new French("Escargot à la Bourguignonne", 13, "Piatto d'eccellenza per la Francia è composto da Lumache fresche e condite con una crema di burro e prezzemolo", "1", "0"),
    new French("French Fries", 5.50, "Patatine fritte con l'aggiunta di Mayonese e prezzemolo", "1", "1"),
    new French("Gateaux alla francese", 7.50, "Patate schiacciate, prosciutto cotto e formaggio francese", "1", "0"),
    new French("Quiche lorraine", 9.50, "Torta salata a base di pasta sfoglia farcita con uova, panna , pancetta, formaggio e zucchine", "1", "0"),
    new French("Cosciotto d'agnello", 15, "Cosciotto d'agnello,riduzione di vino e spezie", "1", "0"),
    new French("Filet Mignon", 15, "Parte più tenera della tagliata, quasi burrosa", "1", "0"),
];
