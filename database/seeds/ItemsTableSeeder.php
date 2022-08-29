<?php

use Illuminate\Database\Seeder;

use App\Item;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
        //inizio pizze--------------
            [
                'name' => 'Pizza Margherita',
                'price' => 6.4,
                'description' => 'impasto della pizza, salsa di pomodoro, mozzarella di bufala campana DOP, olio extravergine di oliva',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 1,
                'course_id' => 5
            ],
            [
                'name' => 'Pizza Marinara',
                'price' => 7.5,
                'description' => 'impasto della pizza, salsa di pomodoro, olio extravergine di oliva, aglio, origano, prezzemolo, colatura di alici di Cetara (estratto di alici salate, sale',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 1,
                'course_id' => 5
            ],
            [
                'name' => 'Pizza Napoli',
                'price' => 8,
                'description' => 'impasto della pizza, salsa di pomodoro, mozzarella di bufala campana DOP, filetti di acciughe (acciughe, sale, salamoia), olio extravergine di oliva, basilico',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 1,
                'course_id' => 5
            ],
            [
                'name' => 'Pizza Funghi',
                'price' => 7,
                'description' => 'impasto della pizza, salsa di pomodoro, mozzarella di bufala campana DOP, funghi champignon',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 1,
                'course_id' => 5
            ],
            [
                'name' => 'Pizza Capricciosa',
                'price' => 7.5,
                'description' => 'impasto della pizza, salsa di pomodoro, fiordilatte, olive taggiasche (olio extravergine di oliva, sale, acido lattico), funghi champignon, carciofo grigliato (in olio di semi di girasole, aceto, sale, aglio, peperoncino, prezzemolo), uovo BIO, prosciutto crudo di Parma DOP (suino, sale)',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 1,
                'course_id' => 5
            ],
            [
                'name' => 'Pizza Provola e speck',
                'price' => 7.9,
                'description' => 'impasto della pizza, fiordilatte, provola affumicata (latte, fermenti lattici, caglio, sale, aroma fumo liquido), speck artigianale dell’Alto Adige IGP (carne di suino, sale, spezie, destrosio, fruttosio, conservante E250, antiossidante E301, affumicato con legno di faggio)',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 1,
                'course_id' => 5
            ],
            [
                'name' => 'Pizza Bresaola',
                'price' => 7.4,
                'description' => 'impasto della pizza, fiordilatte, Bresaola punta d’anca (carne bovina, sale, destrosio, aromi naturali, conservanti E250 E252), rughetta, Parmigiano Reggiano (latte, sale, caglio), olio extravergine di oliva',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 1,
                'course_id' => 5
            ],
            [
                'name' => 'Pizza 4 formaggi + 1',
                'price' => 8.5,
                'description' => 'impasto della pizza, fiordilatte, fontina Valdostana (latte crudo vaccino, caglio, sale), Taleggio (latte, sale, caglio), Gorgonzola (latte, fermenti lattici, sale, caglio, penicillium), Parmigiano Reggiano (latte, sale, caglio)',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 1,
                'course_id' => 5
            ],
            [
                'name' => 'Pizza L\'ortolana',
                'price' => 8.5,
                'description' => 'impasto della pizza, fiordilatte, melanzane, zucchine, radicchio, patate, pomodorini pachino, olio extravergine di oliva, rosmarino, sale',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 1,
                'course_id' => 5
            ],
            [
                'name' => 'Pizza Bufala e pachino',
                'price' => 8.5,
                'description' => 'impasto della pizza, mozzarella di bufala campana DOP, pomodorini pachino, basilico, olio extravergine di oliva',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 1,
                'course_id' => 5
            ],
            [
                'name' => 'Pizza Diavola',
                'price' => 8.5,
                'description' => 'impasto della pizza, salsa di pomodoro, mozzarella di bufala campana DOP, Ventricina piccante (carne di suino, sale, aromi naturali, destrosio, spezie, antiossidante E301, conservanti E252 E250)',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 1,
                'course_id' => 5
            ],
            [
                'name' => 'La teresina',
                'price' => 9.5,
                'description' => 'impasto della pizza, mozzarella di bufala campana DOP, fiordilatte, mortadella di Bologna, Parmigiano Reggiano (latte, sale, caglio), glassa di aceto balsamico di Modena IGP (mosto d’uva concentrato, aceto di vino, colorante caramello-solfito-ammoniacale, addensanti: gomma di guar e gomma xantana. Antiossidante: metabisolfito di potassio solfito)',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 1,
                'course_id' => 5
            ],
            [
                'name' => 'La carbonara al contrario',
                'price' => 10,
                'description' => 'impasto della pizza, fiordilatte, uova, guanciale (guanciale di suino, sale, spezie, aromi naturali, conservante E252 E250), pepe di Sichuan, pecorino romano (latte di pecora termizzato, caglio, sale, fermenti lattici)',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 1,
                'course_id' => 5
            ],
        //fine pizze -------------------


        //inizio hamburgers--------------
            [
                'name' => 'Hamburger classic',
                'price' => 12,
                'description' => '300 g di polpa di manzo tritata, la mollica di 2 panini, latte, un cucchiaio di prezzemolo tritato, farina, burro, olio, sale',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 2,
                'course_id' => 3
            ],
            [
                'name' => 'Hamburger di pollo',
                'price' => 14,
                'description' => '200 g di petto di pollo, 50 g di polpa di coscia di pollo, 2 lime, olio extravergine di oliva, pepe verde, erba cipollina fresca, 1 spicchio di aglio, 1 cucchiaio di amido di mais, sale, panna acida',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 2,
                'course_id' => 3
            ],
            [
                'name' => 'Hamburger di salmone',
                'price' => 15,
                'description' => '200 g di salmone fresco, 100 g di mollica di pane, latte, 70 g di burro a temperatura ambiente, pangrattato, la scorza di 1 limone non trattato, burro chiarificato, sale, pepe bianco',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 2,
                'course_id' => 3
            ],
            [
                'name' => 'Hamburger di tonno, caprino e maionese nera',
                'price' => 12,
                'description' => '2 panini tondi e leggeri, 200 g di tonno, 2 uova, olio, limone, caprino, fagiolini verdi, 8 pomodorini tondi, radicchio rosso, condimento balsamico, sale, paprika',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 2,
                'course_id' => 3
            ],
            [
                'name' => 'Hamburger con cipolla caramellata, crema di avocado e friggitelli',
                'price' => 7,
                'description' => '200 g macinato di vitello, 1/4 cipolla di Tropea, 1/2 avocado, 1/4 lime, 3/4 peperone friggitelli, 1 Pomodorini, 0.50 fette pancetta, 0.50 cucchiaini formaggio fresco spalmabile, senape, 0.25 cucchiaino concentrato di pomodoro, insalatina fresca, olio extravergine di oliva, sale',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 2,
                'course_id' => 3
            ],
            [
                'name' => 'Hamburger alla calabrese, mozzarella di bufala e radicchio',
                'price' => 13,
                'description' => '200 g macinato di vitello, 1/2 cipolla di Tropea, 3 fette spianata calabra piccante, 4 Pomodorini, 1/4 rapa rossa, 1/8 bicchiere aceto di mele, 1 cucchiaino zucchero, 1/8 bicchiere vino bianco, 1/8 bicchiere acqua, 1 cucchiain0 formaggio fresco spalmabile, insalatina, olio extravergine di oliva, sale',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 2,
                'course_id' => 3
            ],
            [
                'name' => 'Hamburger con ravioli di bufala affumicata e basilico',
                'price' => 14,
                'description' => '150 g carne macinata carne di vitello, 12.50 g mozzarella di bufala affumicata, 2 ravioli ripieni di mozzarella di bufala, 12.50 g burro, 0.25 l brdo vegetale, fogliolina basilico, cacao, olio extravergine di oliva, sale e pepe',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 2,
                'course_id' => 3
            ],
        //fine hamburgers--------------


        //inizio cibo francese--------------
            [
                'name' => 'Baguette',
                'price' => 3.5,
                'description' => 'Pane tipico francesce, ricetta originale con acqua,sale,olio,lievito e farina',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 3,
                'course_id' => 4
            ],
            [
                'name' => 'Croissant Salato',
                'price' => 6.5,
                'description' => 'Tipico croissant di pasta sfoglia con formaggio francese e prosciutto cotto con aggiunta di insalata',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 3,
                'course_id' => 6
            ],
            [
                'name' => 'Escargot à la Bourguignonne',
                'price' => 13,
                'description' => 'Piatto d\'eccellenza per la Francia è composto da Lumache fresche e condite con una crema di burro e prezzemolo',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 3,
                'course_id' => 2
            ],
            [
                'name' => 'French Fries',
                'price' => 5.5,
                'description' => 'Patatine fritte con l\'aggiunta di Mayonese e prezzemolo',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 3,
                'course_id' => 4
            ],
            [
                'name' => 'Gateaux alla francese',
                'price' => 7.5,
                'description' => 'Patate schiacciate, prosciutto cotto e formaggio francese',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 3,
                'course_id' => 3
            ],
            [
                'name' => 'Quiche lorraine',
                'price' => 9.5,
                'description' => 'Torta salata a base di pasta sfoglia farcita con uova, panna , pancetta, formaggio e zucchine',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 3,
                'course_id' => 2
            ],
            [
                'name' => 'Cosciotto d\'agnello',
                'price' => 15,
                'description' => 'Cosciotto d\'agnello, riduzione di vino e spezie',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 3,
                'course_id' => 3
            ],
            [
                'name' => 'Filet Mignon',
                'price' => 15,
                'description' => 'Parte più tenera della tagliata, quasi burrosa',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 3,
                'course_id' => 3
            ],
        //fine cibo francese--------------


        //inizio cibo cinese--------------
            [
                'name' => 'Zuppa di noodles',
                'price' => 8,
                'description' => 'Noodles all\'uovo 80g, Carote 1, Zucchine 1, Funghi shiitake 1, Porri 1, Broccoli siciliani 250 g, Cavoli cinesi 45 g, Manzo (pezza) 70 g, Zenzero fresco, Aglio 1 spicchio, Soia (salsa) 1 cucchiai, Cipollotti 1, Olio di semi di sesamo 1 cucchiaio, Olio di girasole 1 cucchiai, Peperoncino rosso 1, Brodo vegetale 200 ml',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 4,
                'course_id' => 2
            ],
            [
                'name' => 'Anatra alla pechinese',
                'price' => 9,
                'description' => 'Anatra(mezza), Malto di grano 10 g, Olio di semi di sesamo 5 g, Hoisin 10 g, Zucchero 10 g, Soia (salsa) 2.5 g, Cipollotti 2',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 4,
                'course_id' => 3
            ],
            [
                'name' => 'Ravioli al vapore cinesi',
                'price' => 3,
                'description' => 'Farina tipo 0 50 g, Farina di riso 30 g, Acqua 80 ml, Maiale (lonza macinata) 80 g, Gamberi 40 g, Cavoli cinesi 40 g, Zenzero fresco, Carote 1, Porri ½, Salsa di soia 2 cucchiai, Erba cipollina 1 ciuffo, Sake 1 cucchiaio',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 4,
                'course_id' => 3
            ],
            [
                'name' => 'Riso alla cantonese',
                'price' => 9,
                'description' => 'Riso basmati 70 g, Prosciutto cotto 30 g, Uova 2, Piselli 40 g, Salsa soia 1 cucchiaio, Olio di semi di sesamo 2 cucchiai, Olio di semi 1 cucchiaio, Sale',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 4,
                'course_id' => 2
            ],
            [
                'name' => 'Manzo al mandarancio',
                'price' => 10,
                'description' => '150 g carne di manzo, 1 cipollotto, zenzero fresco, peperoncino rosso piccante, 5 mandaranci piccoli, 2 cucchiai di succo di mandarancio, 4 cucchiai di olio di semi, 1 cucchiaio di pepe di sichuan, 2 cucchiai di vino bianco secco, 2 cucchiai di salsa di soia, zucchero di canna, sale',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 4,
                'course_id' => 3
            ],
            [
                'name' => 'Maiale arrostito(char siu)',
                'price' => 10,
                'description' => '150 g di polpa dii maiale presa da spalla o coscia , salsa hoisin, salsa di soia, 1 cucchiao di zucchero di canna, 1 cucchiaio di vino rosso, 1 cucchiaio di olio vegetale, sale, miele',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 4,
                'course_id' => 3
            ],
        //fine cibo cinese--------------


        ];


        //Ciclo Array items

        foreach ($items as $item) {
            $new_item = new Item();
            $new_item->name = $item['name'];
            $new_item->price = $item['price'];
            $new_item->description = $item['description'];
            $new_item->visible = $item['visible'];
            $new_item->vegetarian = $item['vegetarian'];


            $new_item->user_id = $item['user_id'];
            $new_item->course_id = $item['course_id'];

            $new_item->save();

        }
    }
}
