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
                'image_path' => 'pizza-0.jpg',
                'name' => 'Pizza Margherita',
                'price' => 6.4,
                'description' => 'impasto della pizza, salsa di pomodoro, mozzarella di bufala campana DOP, olio extravergine di oliva',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 1,
                'course_id' => 5
            ],
            [
                'image_path' => 'pizza-1.jpg',
                'name' => 'Pizza Marinara',
                'price' => 7.5,
                'description' => 'impasto della pizza, salsa di pomodoro, olio extravergine di oliva, aglio, origano, prezzemolo, colatura di alici di Cetara (estratto di alici salate, sale',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 1,
                'course_id' => 5
            ],
            [
                'image_path' => 'pizza-2.jpg',
                'name' => 'Pizza Napoli',
                'price' => 8,
                'description' => 'impasto della pizza, salsa di pomodoro, mozzarella di bufala campana DOP, filetti di acciughe (acciughe, sale, salamoia), olio extravergine di oliva, basilico',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 1,
                'course_id' => 5
            ],
            [
                'image_path' => 'pizza-3.jpg',
                'name' => 'Pizza Funghi',
                'price' => 7,
                'description' => 'impasto della pizza, salsa di pomodoro, mozzarella di bufala campana DOP, funghi champignon',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 1,
                'course_id' => 5
            ],
            [
                'image_path' => 'pizza-4.jpg',
                'name' => 'Pizza Capricciosa',
                'price' => 7.5,
                'description' => 'impasto della pizza, salsa di pomodoro, fiordilatte, olive taggiasche (olio extravergine di oliva, sale, acido lattico), funghi champignon, carciofo grigliato (in olio di semi di girasole, aceto, sale, aglio, peperoncino, prezzemolo), uovo BIO, prosciutto crudo di Parma DOP (suino, sale)',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 1,
                'course_id' => 5
            ],
            [
                'image_path' => 'pizza-5.jpg',
                'name' => 'Pizza Provola e speck',
                'price' => 7.9,
                'description' => 'impasto della pizza, fiordilatte, provola affumicata (latte, fermenti lattici, caglio, sale, aroma fumo liquido), speck artigianale dell’Alto Adige IGP (carne di suino, sale, spezie, destrosio, fruttosio, conservante E250, antiossidante E301, affumicato con legno di faggio)',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 1,
                'course_id' => 5
            ],
            [
                'image_path' => 'pizza-6.jpg',
                'name' => 'Pizza Bresaola',
                'price' => 7.4,
                'description' => 'impasto della pizza, fiordilatte, Bresaola punta d’anca (carne bovina, sale, destrosio, aromi naturali, conservanti E250 E252), rughetta, Parmigiano Reggiano (latte, sale, caglio), olio extravergine di oliva',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 1,
                'course_id' => 5
            ],
            [
                'image_path' => 'pizza-7.jpg',
                'name' => 'Pizza 4 formaggi + 1',
                'price' => 8.5,
                'description' => 'impasto della pizza, fiordilatte, fontina Valdostana (latte crudo vaccino, caglio, sale), Taleggio (latte, sale, caglio), Gorgonzola (latte, fermenti lattici, sale, caglio, penicillium), Parmigiano Reggiano (latte, sale, caglio)',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 1,
                'course_id' => 5
            ],
            [
                'image_path' => 'pizza-8.jpg',
                'name' => 'Pizza L\'ortolana',
                'price' => 8.5,
                'description' => 'impasto della pizza, fiordilatte, melanzane, zucchine, radicchio, patate, pomodorini pachino, olio extravergine di oliva, rosmarino, sale',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 1,
                'course_id' => 5
            ],
            [
                'image_path' => 'pizza-9.jpg',
                'name' => 'Pizza Bufala e pachino',
                'price' => 8.5,
                'description' => 'impasto della pizza, mozzarella di bufala campana DOP, pomodorini pachino, basilico, olio extravergine di oliva',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 1,
                'course_id' => 5
            ],
            [
                'image_path' => 'pizza-10.jpg',
                'name' => 'Pizza Diavola',
                'price' => 8.5,
                'description' => 'impasto della pizza, salsa di pomodoro, mozzarella di bufala campana DOP, Ventricina piccante (carne di suino, sale, aromi naturali, destrosio, spezie, antiossidante E301, conservanti E252 E250)',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 1,
                'course_id' => 5
            ],
            [
                'image_path' => 'pizza-11.jpg',
                'name' => 'La teresina',
                'price' => 9.5,
                'description' => 'impasto della pizza, mozzarella di bufala campana DOP, fiordilatte, mortadella di Bologna, Parmigiano Reggiano (latte, sale, caglio), glassa di aceto balsamico di Modena IGP (mosto d’uva concentrato, aceto di vino, colorante caramello-solfito-ammoniacale, addensanti: gomma di guar e gomma xantana. Antiossidante: metabisolfito di potassio solfito)',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 1,
                'course_id' => 5
            ],
            [
                'image_path' => 'pizza-12.jpg',
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
                'image_path' => 'burghers-0.jpg',
                'name' => 'Hamburger classic',
                'price' => 12,
                'description' => '300 g di polpa di manzo tritata, la mollica di 2 panini, latte, un cucchiaio di prezzemolo tritato, farina, burro, olio, sale',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 2,
                'course_id' => 3
            ],
            [
                'image_path' => 'burghers-1.jpg',
                'name' => 'Hamburger di pollo',
                'price' => 14,
                'description' => '200 g di petto di pollo, 50 g di polpa di coscia di pollo, 2 lime, olio extravergine di oliva, pepe verde, erba cipollina fresca, 1 spicchio di aglio, 1 cucchiaio di amido di mais, sale, panna acida',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 2,
                'course_id' => 3
            ],
            [
                'image_path' => 'burghers-2.jpg',
                'name' => 'Hamburger di salmone',
                'price' => 15,
                'description' => '200 g di salmone fresco, 100 g di mollica di pane, latte, 70 g di burro a temperatura ambiente, pangrattato, la scorza di 1 limone non trattato, burro chiarificato, sale, pepe bianco',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 2,
                'course_id' => 3
            ],
            [
                'image_path' => 'burghers-3.jpg',
                'name' => 'Hamburger di tonno, caprino e maionese nera',
                'price' => 12,
                'description' => '2 panini tondi e leggeri, 200 g di tonno, 2 uova, olio, limone, caprino, fagiolini verdi, 8 pomodorini tondi, radicchio rosso, condimento balsamico, sale, paprika',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 2,
                'course_id' => 3
            ],
            [
                'image_path' => 'burghers-4.jpg',
                'name' => 'Hamburger con cipolla caramellata, crema di avocado e friggitelli',
                'price' => 7,
                'description' => '200 g macinato di vitello, 1/4 cipolla di Tropea, 1/2 avocado, 1/4 lime, 3/4 peperone friggitelli, 1 Pomodorini, 0.50 fette pancetta, 0.50 cucchiaini formaggio fresco spalmabile, senape, 0.25 cucchiaino concentrato di pomodoro, insalatina fresca, olio extravergine di oliva, sale',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 2,
                'course_id' => 3
            ],
            [
                'image_path' => 'burghers-5.jpg',
                'name' => 'Hamburger alla calabrese, mozzarella di bufala e radicchio',
                'price' => 13,
                'description' => '200 g macinato di vitello, 1/2 cipolla di Tropea, 3 fette spianata calabra piccante, 4 Pomodorini, 1/4 rapa rossa, 1/8 bicchiere aceto di mele, 1 cucchiaino zucchero, 1/8 bicchiere vino bianco, 1/8 bicchiere acqua, 1 cucchiain0 formaggio fresco spalmabile, insalatina, olio extravergine di oliva, sale',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 2,
                'course_id' => 3
            ],
            [
                'image_path' => 'burghers-6.jpg',
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
                'image_path' => 'francese-0.jpg',
                'name' => 'Gratin dauphinois',
                'price' => 14,
                'description' => 'Latte intero 150 ml, Panna fresca liquida 70 ml, Uova medie 2, Groviera 70 g, Burro, Aglio 1 spicchio, Sale fino, Pepe nero, Noce moscata, Patate 5',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 3,
                'course_id' => 3
            ],
            [
                'image_path' => 'francese-1.jpg',
                'name' => 'Baguette',
                'price' => 3.5,
                'description' => 'Pane tipico francesce, ricetta originale con acqua,sale,olio,lievito e farina',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 3,
                'course_id' => 4
            ],
            [
                'image_path' => 'francese-2.jpg',
                'name' => 'Croissant Salato',
                'price' => 6.5,
                'description' => 'Tipico croissant di pasta sfoglia con formaggio francese e prosciutto cotto con aggiunta di insalata',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 3,
                'course_id' => 6
            ],
            [
                'image_path' => 'francese-3.jpg',
                'name' => 'Escargot à la Bourguignonne',
                'price' => 13,
                'description' => 'Piatto d\'eccellenza per la Francia è composto da Lumache fresche e condite con una crema di burro e prezzemolo',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 3,
                'course_id' => 2
            ],
            [
                'image_path' => 'francese-4.jpg',
                'name' => 'French Fries',
                'price' => 5.5,
                'description' => 'Patatine fritte con l\'aggiunta di Mayonese e prezzemolo',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 3,
                'course_id' => 4
            ],
            [
                'image_path' => 'francese-5.jpg',
                'name' => 'Gateaux alla francese',
                'price' => 7.5,
                'description' => 'Patate schiacciate, prosciutto cotto e formaggio francese',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 3,
                'course_id' => 3
            ],
            [
                'image_path' => 'francese-6.jpg',
                'name' => 'Quiche lorraine',
                'price' => 9.5,
                'description' => 'Torta salata a base di pasta sfoglia farcita con uova, panna , pancetta, formaggio e zucchine',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 3,
                'course_id' => 2
            ],
            [
                'image_path' => 'francese-7.jpg',
                'name' => 'Cosciotto d\'agnello',
                'price' => 15,
                'description' => 'Cosciotto d\'agnello, riduzione di vino e spezie',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 3,
                'course_id' => 3
            ],
            [
                'image_path' => 'francese-8.jpg',
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
                'image_path' => 'cinese-0.jpg',
                'name' => 'Spaghetti di soia',
                'price' => 8,
                'description' => 'Spaghetti di soia 70 g, Zucchine 50 g, Carote 30 g, Peperoni rossi 10 g, Cipolle bianche 10 g, Acqua 250 g, Salsa di soia chiara 2 cucchiaini, Salsa di soia scura 2 cucchiaini, Olio di semi di arachide (o di girasole) 1 cucchiaino, Olio di sesamo 1 cucchiaino, Sale fino, Pepe bianco',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 4,
                'course_id' => 2
            ],
            [
                'image_path' => 'cinese-1.jpg',
                'name' => 'Zuppa di noodles',
                'price' => 8,
                'description' => 'Noodles all\'uovo 80g, Carote 1, Zucchine 1, Funghi shiitake 1, Porri 1, Broccoli siciliani 250 g, Cavoli cinesi 45 g, Manzo (pezza) 70 g, Zenzero fresco, Aglio 1 spicchio, Soia (salsa) 1 cucchiai, Cipollotti 1, Olio di semi di sesamo 1 cucchiaio, Olio di girasole 1 cucchiai, Peperoncino rosso 1, Brodo vegetale 200 ml',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 4,
                'course_id' => 2
            ],
            [
                'image_path' => 'cinese-2.jpg',
                'name' => 'Anatra alla pechinese',
                'price' => 9,
                'description' => 'Anatra(mezza), Malto di grano 10 g, Olio di semi di sesamo 5 g, Hoisin 10 g, Zucchero 10 g, Soia (salsa) 2.5 g, Cipollotti 2',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 4,
                'course_id' => 3
            ],
            [
                'image_path' => 'cinese-3.jpg',
                'name' => 'Ravioli al vapore cinesi',
                'price' => 3,
                'description' => 'Farina tipo 0 50 g, Farina di riso 30 g, Acqua 80 ml, Maiale (lonza macinata) 80 g, Gamberi 40 g, Cavoli cinesi 40 g, Zenzero fresco, Carote 1, Porri ½, Salsa di soia 2 cucchiai, Erba cipollina 1 ciuffo, Sake 1 cucchiaio',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 4,
                'course_id' => 3
            ],
            [
                'image_path' => 'cinese-4.jpg',
                'name' => 'Riso alla cantonese',
                'price' => 9,
                'description' => 'Riso basmati 70 g, Prosciutto cotto 30 g, Uova 2, Piselli 40 g, Salsa soia 1 cucchiaio, Olio di semi di sesamo 2 cucchiai, Olio di semi 1 cucchiaio, Sale',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 4,
                'course_id' => 2
            ],
            [
                'image_path' => 'cinese-5.jpg',
                'name' => 'Manzo al mandarancio',
                'price' => 10,
                'description' => '150 g carne di manzo, 1 cipollotto, zenzero fresco, peperoncino rosso piccante, 5 mandaranci piccoli, 2 cucchiai di succo di mandarancio, 4 cucchiai di olio di semi, 1 cucchiaio di pepe di sichuan, 2 cucchiai di vino bianco secco, 2 cucchiai di salsa di soia, zucchero di canna, sale',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 4,
                'course_id' => 3
            ],
            [
                'image_path' => 'cinese-6.jpg',
                'name' => 'Maiale arrostito(char siu)',
                'price' => 10,
                'description' => '150 g di polpa dii maiale presa da spalla o coscia , salsa hoisin, salsa di soia, 1 cucchiao di zucchero di canna, 1 cucchiaio di vino rosso, 1 cucchiaio di olio vegetale, sale, miele',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 4,
                'course_id' => 3
            ],
        //fine cibo cinese--------------


        //inizio cibo indiano--------------
            [
                'image_path' => 'indiano-0.jpg',
                'name' => 'Piatto riso basmati',
                'price' => 7.99,
                'description' => 'riso basmati, piselli, anacardo, carote, cumino',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 5,
                'course_id' => 2
            ],
            [
                'image_path' => 'indiano-1.jpg',
                'name' => 'Pollo al curry',
                'price' => 9.99,
                'description' => 'pollo, curry in polvere, cipolle, aglio, zenzero, brodo di pollo',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 5,
                'course_id' => 2
            ],
            [
                'image_path' => 'indiano-2.jpg',
                'name' => 'Piatto dosa',
                'price' => 5.99,
                'description' => 'due croccanti dose, quattro ciotole di brodo con verdure miste diverse',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 5,
                'course_id' => 2
            ],
            [
                'image_path' => 'indiano-3.jpg',
                'name' => 'Piatto gol gappe',
                'price' => 3.99,
                'description' => 'sei gol gappe riempiti con il curry di ceci neri, due ciotole con acque aromatizzate dolce e piccante',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 5,
                'course_id' => 3
            ],
            [
                'image_path' => 'indiano-4.jpg',
                'name' => 'Dolce gulab jamun',
                'price' => 3.99,
                'description' => 'cinque gulab jamun',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 5,
                'course_id' => 6
            ],
            [
                'image_path' => 'indiano-5.jpg',
                'name' => 'Dolce jalebi',
                'price' => 5.99,
                'description' => 'otto jalebi',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 5,
                'course_id' => 6
            ],
            [
                'image_path' => 'indiano-6.jpg',
                'name' => 'Dolce laddu',
                'price' => 1.99,
                'description' => 'due laddu',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 5,
                'course_id' => 6
            ],
            [
                'image_path' => 'indiano-7.jpg',
                'name' => 'Piatto di naan',
                'price' => 8.99,
                'description' => 'due nann, ciotola di brodo di pollo e con verdure miste',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 5,
                'course_id' => 2
            ],
            [
                'image_path' => 'indiano-8.jpg',
                'name' => 'Piatto di samosa',
                'price' => 6.99,
                'description' => 'quattro samose, ripieni di patate, piselli, coriandolo, cipolla e un pizzico di spezie',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 5,
                'course_id' => 3
            ],
            [
                'image_path' => 'indiano-9.jpg',
                'name' => 'Tandoori Chicken',
                'price' => 6.99,
                'description' => 'pollo arrosto, yogurt e un pizzico si spezie',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 5,
                'course_id' => 3
            ],
        //fine cibo indiano--------------


        //inizio cibo no glutine--------------
            [
                'image_path' => 'no-glutine-0.jpg',
                'name' => 'Hamburger di pollo',
                'price' => 4.99,
                'description' => 'pane gluten free, bistecca di pollo, formaggio cheddar, insalata, salse, patatine fritte',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 6,
                'course_id' => 3
            ],
            [
                'image_path' => 'no-glutine-1.jpg',
                'name' => 'Uova sode',
                'price' => 3.99,
                'description' => 'due uova sode, pepe nero, sale',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 6,
                'course_id' => 1
            ],
            [
                'image_path' => 'no-glutine-2.jpg',
                'name' => 'Salmone arrosto',
                'price' => 9.99,
                'description' => 'trancio di salmone arrosto, spicchi d\'aglio, pepe nero, prezzemolo',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 6,
                'course_id' => 3
            ],
            [
                'image_path' => 'no-glutine-3.jpg',
                'name' => 'Macedonia',
                'price' => 5.99,
                'description' => 'kiwi, banana, fragola, cereali, frutta secca',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 6,
                'course_id' => 3
            ],
            [
                'image_path' => 'no-glutine-4.jpg',
                'name' => 'Insalata di ceci',
                'price' => 6.99,
                'description' => 'ceci, avocado, mozzarella',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 6,
                'course_id' => 3
            ],
            [
                'image_path' => 'no-glutine-5.jpg',
                'name' => 'Pancakes',
                'price' => 3.99,
                'description' => 'due pancakes, sciroppo d’acero, mirtilli',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 6,
                'course_id' => 3
            ],
        //fine cibo no glutine--------------


        //inizio cibo messicano--------------
            [
                'image_path' => 'messicano-0.jpg',
                'name' => 'Chilaquils',
                'price' => 6.4,
                'description' => 'composto da pezzi di tortilla di mais fritti conditi con una salsa verde piccante ed accompagnati da cipolle crude, pezzi di pollo, carne macinata, uova, formaggio, panna acida e fagioli',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 7,
                'course_id' => 1
            ],
            [
                'image_path' => 'messicano-1.jpg',
                'name' => 'Pozole',
                'price' => 5.9,
                'description' => 'stufato a base di mais cotto servito con carne, cavolo affettato, peperoncino, cipolla, aglio e altri aromi e spezie',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 7,
                'course_id' => 3
            ],
            [
                'image_path' => 'messicano-2.jpg',
                'name' => 'Nopales',
                'price' => 5,
                'description' => 'foglie di cactus consumate crude o cotte alla griglia',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 7,
                'course_id' => 4
            ],
            [
                'image_path' => 'messicano-3.jpg',
                'name' => 'Chapulines',
                'price' => 6.4,
                'description' => 'cavallette tostate alla piastra e condite con aglio, succo di lime e sale',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 7,
                'course_id' => 3
            ],
            [
                'image_path' => 'messicano-4.jpg',
                'name' => 'Enchiladas',
                'price' => 7,
                'description' => 'leggere sfoglie ripiene di diversi ingredienti, dalla carne alle verdure, e ricoperte da salsa piccante',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 7,
                'course_id' => 2
            ],
        //fine cibo messicano--------------


        //inizio cibo sushi--------------
            [
                'image_path' => 'sushi-0.jpg',
                'name' => 'Sushcotumato',
                'price' => 5.5,
                'description' => 'Impasto dell\'arancino con all\'interno zucchine e topping di crema di peperoni gialli - 6pz',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 8,
                'course_id' => 2
            ],
            [
                'image_path' => 'sushi-1.jpg',
                'name' => 'Tostushi',
                'price' => 7.5,
                'description' => 'Riso in forma quadrata, verdure e gamberi con topping di gambero fritto - 1pz',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 8,
                'course_id' => 3
            ],
            [
                'image_path' => 'sushi-2.jpg',
                'name' => 'Sashimi',
                'price' => 9.5,
                'description' => 'Fette di tonno fresco di altissima qualità - 4pz.',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 8,
                'course_id' => 3
            ],
            [
                'image_path' => 'sushi-3.jpg',
                'name' => 'Piatto shushi misto',
                'price' => 15.5,
                'description' => 'Hosomaki, sashimi e nigiri - 12pz.',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 8,
                'course_id' => 2
            ],
            [
                'image_path' => 'sushi-4.jpg',
                'name' => 'Hosomaki',
                'price' => 5.5,
                'description' => 'Involtino di riso con ingredienti tipici della cultura giapponese : salmone, tonno , alghe , radici ecc..  - 5pz.',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 8,
                'course_id' => 2
            ],
            [
                'image_path' => 'sushi-5.jpg',
                'name' => 'Nigiri',
                'price' => 6.5,
                'description' => 'Base di riso con copertura di pesce crudo e freschissimo - 3pz.',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 8,
                'course_id' => 3
            ],
            [
                'image_path' => 'sushi-6.jpg',
                'name' => 'Suzuki temaki',
                'price' => 3.5,
                'description' => 'Riso nishiki, branzino, avocado',
                'visible' => 1,
                'vegetarian' => 0,
                'user_id' => 8,
                'course_id' => 3
            ],
            [
                'image_path' => 'sushi-7.jpg',
                'name' => 'Temaki capesante',
                'price' => 3.5,
                'description' => 'Capesante e avocado',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 8,
                'course_id' => 3
            ],
            [
                'image_path' => 'sushi-8.jpg',
                'name' => 'Tempura ebi',
                'price' => 4,
                'description' => 'Gamberi, teriaki',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 8,
                'course_id' => 3
            ],
            [
                'image_path' => 'sushi-9.jpg',
                'name' => 'Spicy sakè',
                'price' => 4,
                'description' => 'Salmone tritato, salsa piccante, riso',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 8,
                'course_id' => 3
            ],
            [
                'image_path' => 'sushi-10.jpg',
                'name' => 'Gunkan special',
                'price' => 6,
                'description' => 'Avocado, alga nori, risp, uova di salmone',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 8,
                'course_id' => 3
            ],
        //fine cibo sushi--------------


        //inizio cibo vegetariano--------------
            [
                'image_path' => 'vegetariano-0.jpg',
                'name' => 'Patatine dolci fritte',
                'price' => 3.99,
                'description' => 'patatine fritte dolci, salsa',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 9,
                'course_id' => 1
            ],
            [
                'image_path' => 'vegetariano-1.jpg',
                'name' => 'Piatto di gnocchi',
                'price' => 7.99,
                'description' => 'gnocchi, spinaci, castagne, semolino',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 9,
                'course_id' => 1
            ],
            [
                'image_path' => 'vegetariano-2.jpg',
                'name' => 'Cornetti salati',
                'price' => 4.99,
                'description' => 'cornetti salati con misto di verdura e salsa',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 9,
                'course_id' => 2
            ],
            [
                'image_path' => 'vegetariano-3.jpg',
                'name' => 'Pizza al peperoncino e pomodoro',
                'price' => 6.99,
                'description' => 'impasto della pizza, salsa di pomodoro, mozzarella, pomodoro, peperoncino rosso',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 9,
                'course_id' => 3
            ],
            [
                'image_path' => 'vegetariano-4.jpg',
                'name' => 'Insalata mista',
                'price' => 5.99,
                'description' => 'rucola, radicchio, finocchio, carote, porro, olio d\'oliva',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 9,
                'course_id' => 2
            ],
            [
                'image_path' => 'vegetariano-5.jpg',
                'name' => 'Hamburger vegetariano',
                'price' => 6.99,
                'description' => 'panino con bistecca di soia, cipolla rossa, insalata, salsa, pomodoro',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 9,
                'course_id' => 3
            ],
            [
                'image_path' => 'vegetariano-6.jpg',
                'name' => 'Noodles con verdure',
                'price' => 6.99,
                'description' => 'noodles, cavolo capuccio, carote, peperoni, cipollini, zucchine',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 9,
                'course_id' => 2
            ],
            [
                'image_path' => 'vegetariano-7.jpg',
                'name' => 'Piadina croccante con verdure',
                'price' => 6.99,
                'description' => 'piadina croccante, pomodoro, mais, peperoni verdi dolci',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 9,
                'course_id' => 2
            ],
            [
                'image_path' => 'vegetariano-8.jpg',
                'name' => 'Tacos con verdura',
                'price' => 7.99,
                'description' => 'tacos, patafine fritte, pomodoro, cipolle rosse, insalata',
                'visible' => 1,
                'vegetarian' => 1,
                'user_id' => 9,
                'course_id' => 3
            ],
        //fine cibo vegetariano--------------



        ];


        //Ciclo Array items

        foreach ($items as $item) {
            $new_item = new Item();
            $new_item->image_path = $item['image_path'];
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
