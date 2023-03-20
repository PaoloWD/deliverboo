<?php

namespace Database\Seeders;

use App\Models\Dish;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DishesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Definisco i dati dei piatti
        $dishes = [
            // Piatti del primo ristorante
            [
                'name' => 'Pizza Margherita',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/c/c8/Pizza_Margherita_stu_spivack.jpg',
                'description' => 'Pizza classica Napoletana con pomodoro, mozzarella e basilico',
                'ingredients' => 'farina, pomodoro, mozzarella, basilico',
                'type' => 'Pizza',
                'price' => 8.50,
                'visibility' => true,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Carbonara',
                'image' => 'https://blog.giallozafferano.it/graficareincucina/wp-content/uploads/2017/10/Carbonara-evidenza.png',
                'description' => 'Pasta classica Romana con pancetta, uova, pecorino e pepe nero',
                'ingredients' => 'pasta, pancetta, uova, pecorino, pepe nero',
                'type' => 'Primo',
                'price' => 12.00,
                'visibility' => true,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Insalata mista',
                'image' => 'https://www.calendariodelciboitaliano.it/wp-content/uploads/2017/07/insalatamistaheader1.jpg',
                'description' => 'Ciotola grande di insalata mista tutti i gusti più uno',
                'ingredients' => 'lattuga, pomodoro, cetriolo, olive nere',
                'type' => 'Contorno',
                'price' => 6.00,
                'visibility' => true,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Tiramisù',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/5/58/Tiramisu_-_Raffaele_Diomede.jpg',
                'description' => 'Dolce al cucchiaio con savoiardi, mascarpone e caffè',
                'ingredients' => 'savoiardi, mascarpone, caffè',
                'type' => 'Dolce',
                'price' => 5.50,
                'visibility' => true,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Vino Rosso',
                'image' => 'https://shop.tastefromabruzzo.com/wp-content/uploads/2021/01/Alarius-Montepulciano-Cioti.jpg',
                'description' => 'Bottiglia di Alarius Montepulciano d\'Abruzzo, denominazione di origine controllata',
                'ingredients' => 'Montepulciano d\'Abruzzo',
                'type' => 'Bevanda',
                'price' => 18.00,
                'visibility' => true,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Tagliatelle al ragù',
                'image' => 'https://i.pinimg.com/564x/3e/44/35/3e4435aac4fb65311d4454227d0360d4.jpg',
                'description' => 'Le tagliatelle fatte in casa con il ragù di carne',
                'ingredients' => 'Tagliatelle fatte in casa, carne macinata, pomodoro, carota, sedano, cipolla',
                'type' => 'Primo',
                'price' => 12.00,
                'visibility' => true,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Bruschetta al pomodoro',
                'image' => 'https://i.pinimg.com/564x/bb/42/80/bb4280de62c397b550f61dfaefb50b58.jpg',
                'description' => 'Le bruschette cotte su fuoco a legna con pomodoro, aglio e basilico',
                'ingredients' => 'Pane, pomodoro, aglio, basilico',
                'type' => 'Antipasto',
                'price' => 4.50,
                'visibility' => true,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Vino Bianco',
                'image' => 'https://i.pinimg.com/564x/f8/c0/a1/f8c0a1c2d3458a71c2d22bc89901743c.jpg',
                'description' => 'Pinot Grigio delle Venezzi 2010',
                'type' => 'Bevanda',
                'ingredients' => 'Moscato bianco',
                'price' => 16.00,
                'visibility' => true,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Risotto ai funghi porcini',
                'image' => 'https://i.pinimg.com/564x/39/0f/1e/390f1ea66d83518e5569c64357688edb.jpg',
                'description' => 'Il risotto con i funghi porcini freschi',
                'ingredients' => 'Riso, funghi porcini, brodo vegetale, cipolla, vino bianco, parmigiano',
                'type' => 'Primo',
                'price' => 14.00,
                'visibility' => true,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Fritto misto di mare',
                'image' => 'https://i.pinimg.com/564x/a5/1c/cd/a51ccd4a71a38778a6f3d5ff3d54a9f6.jpg',
                'description' => 'Il fritto misto di mare con calamari, gamberi e scampi',
                'ingredients' => 'Calamari, gamberi, scampi',
                'type' => 'Secondo',
                'price' => 9.50,
                'visibility' => true,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Zuppa di pesce',
                'image' => 'https://i.pinimg.com/564x/0f/86/38/0f86380725360dd6c28e630cc082c6f7.jpg',
                'description' => 'Zuppa di pesce accompagnata con crostini di pane casereccio',
                'ingredients' => 'Gamberi, seppie, prezzemolo',
                'type' => 'Primo',
                'price' => 11.00,
                'visibility' => false,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Tagliata di carne',
                'image' => 'https://i.pinimg.com/564x/65/22/2e/65222e4c247b634055ae88532e879d71.jpg',
                'description' => 'Secondo piatto che si ottiene con una rapida cottura al sangue di un taglio di carne ben preciso',
                'ingredients' => 'entrecôte, costata di manzo, con o senza osso, fiorentina',
                'type' => 'Secondo',
                'price' => 20.90,
                'visibility' => true,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Hamburger Panino',
                'image' => 'https://i.pinimg.com/564x/e2/b1/7c/e2b17cd05269aefaa4224c0a119ed5e6.jpg',
                'description' => 'Hamburger con doppio strato di carne',
                'ingredients' => 'Carne, cipolle caramellate, ketchup, cheddar, pomodoro, lattuga, pane al sesamo',
                'type' => 'Panino',
                'price' => 25.50,
                'visibility' => true,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Spaghetti cacio e pepe',
                'image' => 'https://i.pinimg.com/564x/6b/6d/00/6b6d00588e6b305b543d8dafe42a0a06.jpg',
                'description' => 'Cremosissima pasta cacio e pepe',
                'ingredients' => 'Pasta, pepe, pecorino romano',
                'type' => 'Primo',
                'price' => 5.00,
                'visibility' => true,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Parmigiana',
                'image' => 'https://i.pinimg.com/564x/d7/b2/c8/d7b2c8639165adaefe509e75ebe13615.jpg',
                'description' => 'Primo vegetariano con melanzane e mozzarella ',
                'ingredients' => 'Melanzane, mozzarella, pomodoro, parmigiano ',
                'type' => 'Antipasto',
                'price' => 7.90,
                'visibility' => true,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Involtini di zucchine e salmone',
                'image' => 'https://i.pinimg.com/564x/45/00/a9/4500a95598ce655bd767563c0f877a38.jpg',
                'description' => 'Antipasto con zucchine grigliate e salmone',
                'ingredients' => 'Zucchine, salmone, Philadelphia',
                'type' => 'Secondo',
                'price' => 10.90,
                'visibility' => false,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Cheesecake',
                'image' => 'https://i.pinimg.com/564x/6f/e1/c5/6fe1c5185ac0cb278416a3c6ad36fb3c.jpg',
                'description' => 'Dolce a cucchiaio con frutti di bosco',
                'ingredients' => 'Philadelphia, panna, frutti di bosco, vaniglia',
                'type' => 'Dolce',
                'price' => 7.60,
                'visibility' => true,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Torta di Mele',
                'image' => 'https://i.pinimg.com/564x/b8/95/b8/b895b893646ef8e5b8d22db7361e2846.jpg',
                'description' => 'Classica torta di mele della nonna fatta in casa',
                'ingredients' => 'Mele, zucchero, burro, cannella',
                'type' => 'Dolce',
                'price' => 3.90,
                'visibility' => true,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Patatine fritte',
                'image' => 'https://www.nonsprecare.it/wp-content/uploads/2022/04/ricetta-patatine-fritte.jpg',
                'description' => 'Patate tagliate a fette di forma allungata e fritte in olio bollente',
                'ingredients' => 'Patate',
                'type' => 'Contorno',
                'price' => 3.50,
                'visibility' => true,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Sfogliata della casa',
                'image' => 'https://i.pinimg.com/564x/1c/cd/1d/1ccd1de6bfbdeeca85e0f1bd54abf284.jpg',
                'description' => 'Sfogliata con speck e mozzarella ',
                'ingredients' => 'sfoglia, speck, mortadella, rucola',
                'type' => 'Contorno',
                'price' => 4.90,
                'visibility' => true,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Pizza con prosciutto crudo',
                'image' => 'https://i.pinimg.com/564x/6c/bb/0e/6cbb0e1ba8045da51f7dd7c649c17e0e.jpg',
                'description' => 'Pizza con prosciutto crudo',
                'ingredients' => 'farina, pomodoro, mozzarella, basilico, prosciutto crudo',
                'type' => 'Pizza',
                'price' => 7.50,
                'visibility' => true,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Caprese',
                'image' => 'https://i.pinimg.com/564x/8e/e9/4e/8ee94e8275db673d40ed1ed01a897316.jpg',
                'description' => 'Piatto unico di insalata fresca, tipico della cucina napoletana',
                'ingredients' => 'pomodoro, mozzarella, basilico',
                'type' => 'Antipasto',
                'price' => 6,
                'visibility' => true,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Mexican cheeseburgers',
                'image' => 'https://i.pinimg.com/564x/32/07/66/32076664aca03b56a25b64c29b360698.jpg',
                'description' => 'Il classico Panino Mexican cheeseburgers con carne di fassone e formaggio',
                'ingredients' => 'lattuga, carne di fassone, crema al guaiamole, pomodoro, formaggio',
                'type' => 'Panino',
                'price' => 10.50,
                'visibility' => true,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Pizza Rucola & Speck',
                'image' => 'https://i.pinimg.com/564x/41/a6/84/41a684b0da336a9c348eb4c72dee78cc.jpg',
                'description' => 'Pizza con pomodorini secchi, rucola, speck',
                'ingredients' => 'pomodoro, mozzarella, basilico, pomodori secchi, rucola',
                'type' => 'Pizza',
                'price' => 8,
                'visibility' => true,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Coca-Cola',
                'image' => 'https://i.pinimg.com/564x/19/74/9f/19749ff3f3b941efc53616f84230a56d.jpg',
                'description' => 'Coca Cola in bottiglia',
                'ingredients' => 'Acqua, anidride carbonica, zucchero, colorante caramello (E 150D), aromi naturali, caffeina e acido fosforico (E 338)',
                'type' => 'Bevanda',
                'price' => 3,
                'visibility' => true,
                'restaurant_id' => 1
            ],
            [
                'name' => 'Acqua naturale',
                'image' => 'https://i.pinimg.com/564x/2b/15/56/2b1556cef5dfa17f11930aae144c1e61.jpg',
                'description' => 'Acqua San Pellegrino',
                'ingredients' => 'Freschissima acqua delle sorgenti Monte San Pellegrino',
                'type' => 'Bevanda',
                'price' => 2,
                'visibility' => true,
                'restaurant_id' => 1
            ],
            // Piatti del secondo ristorante
            [
                'name' => 'Pizza margherita',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/c/c8/Pizza_Margherita_stu_spivack.jpg',
                'description' => 'La classica Pizza margherita tipica Napoletana con pomodoro, mozzarella e basilico',
                'ingredients' => 'Farina, pomodoro, mozzarella, basilico',
                'type' => 'Pizza',
                'price' => 8.00,
                'visibility' => true,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Spaghetti alla carbonara',
                'image' => 'https://blog.giallozafferano.it/graficareincucina/wp-content/uploads/2017/10/Carbonara-evidenza.png',
                'description' => 'I classici spaghetti alla carbonara tipica Romana con uova, guanciale e pecorino',
                'ingredients' => 'Spaghetti, uova, guanciale, pecorino',
                'type' => 'Primo',
                'price' => 10.50,
                'visibility' => true,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Tagliatelle al ragù',
                'image' => 'https://i.pinimg.com/564x/3e/44/35/3e4435aac4fb65311d4454227d0360d4.jpg',
                'description' => 'Le tagliatelle fatte in casa con il ragù di carne',
                'ingredients' => 'Tagliatelle fatte in casa, carne macinata, pomodoro, carota, sedano, cipolla',
                'type' => 'Primo',
                'price' => 12.00,
                'visibility' => true,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Bruschetta al pomodoro',
                'image' => 'https://i.pinimg.com/564x/bb/42/80/bb4280de62c397b550f61dfaefb50b58.jpg',
                'description' => 'Le bruschette cotte su fuoco a legna con pomodoro, aglio e basilico',
                'ingredients' => 'Pane, pomodoro, aglio, basilico',
                'type' => 'Antipasto',
                'price' => 4.50,
                'visibility' => true,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Vino Bianco',
                'image' => 'https://i.pinimg.com/564x/f8/c0/a1/f8c0a1c2d3458a71c2d22bc89901743c.jpg',
                'description' => 'Pinot Grigio delle Venezzi 2010',
                'type' => 'Bevanda',
                'ingredients' => 'Moscato bianco',
                'price' => 16.00,
                'visibility' => true,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Insalata mista',
                'image' => 'https://www.calendariodelciboitaliano.it/wp-content/uploads/2017/07/insalatamistaheader1.jpg',
                'description' => 'Ciotola grande di insalata mista tutti i gusti più uno',
                'ingredients' => 'lattuga, pomodoro, cetriolo, olive nere',
                'type' => 'Contorno',
                'price' => 6.00,
                'visibility' => true,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Tiramisù',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/5/58/Tiramisu_-_Raffaele_Diomede.jpg',
                'description' => 'Dolce al cucchiaio con savoiardi, mascarpone e caffè',
                'ingredients' => 'savoiardi, mascarpone, caffè',
                'type' => 'Dolce',
                'price' => 5.50,
                'visibility' => true,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Vino Rosso',
                'image' => 'https://shop.tastefromabruzzo.com/wp-content/uploads/2021/01/Alarius-Montepulciano-Cioti.jpg',
                'description' => 'Bottiglia di Alarius Montepulciano d\'Abruzzo, denominazione di origine controllata',
                'ingredients' => 'Montepulciano d\'Abruzzo',
                'type' => 'Bevanda',
                'price' => 18.00,
                'visibility' => true,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Risotto ai funghi porcini',
                'image' => 'https://i.pinimg.com/564x/39/0f/1e/390f1ea66d83518e5569c64357688edb.jpg',
                'description' => 'Il risotto con i funghi porcini freschi',
                'ingredients' => 'Riso, funghi porcini, brodo vegetale, cipolla, vino bianco, parmigiano',
                'type' => 'Primo',
                'price' => 14.00,
                'visibility' => true,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Fritto misto di mare',
                'image' => 'https://i.pinimg.com/564x/a5/1c/cd/a51ccd4a71a38778a6f3d5ff3d54a9f6.jpg',
                'description' => 'Il fritto misto di mare con calamari, gamberi e scampi',
                'ingredients' => 'Calamari, gamberi, scampi',
                'type' => 'Secondo',
                'price' => 9.50,
                'visibility' => true,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Zuppa di pesce',
                'image' => 'https://i.pinimg.com/564x/0f/86/38/0f86380725360dd6c28e630cc082c6f7.jpg',
                'description' => 'Zuppa di pesce accompagnata con crostini di pane casereccio',
                'ingredients' => 'Gamberi, seppie, prezzemolo',
                'type' => 'Primo',
                'price' => 11.00,
                'visibility' => false,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Tagliata di carne',
                'image' => 'https://i.pinimg.com/564x/65/22/2e/65222e4c247b634055ae88532e879d71.jpg',
                'description' => 'Secondo piatto che si ottiene con una rapida cottura al sangue di un taglio di carne ben preciso',
                'ingredients' => 'entrecôte, costata di manzo, con o senza osso, fiorentina',
                'type' => 'Secondo',
                'price' => 20.90,
                'visibility' => true,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Hamburger Panino',
                'image' => 'https://i.pinimg.com/564x/e2/b1/7c/e2b17cd05269aefaa4224c0a119ed5e6.jpg',
                'description' => 'Hamburger con doppio strato di carne',
                'ingredients' => 'Carne, cipolle caramellate, ketchup, cheddar, pomodoro, lattuga, pane al sesamo',
                'type' => 'Panino',
                'price' => 25.50,
                'visibility' => true,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Spaghetti cacio e pepe',
                'image' => 'https://i.pinimg.com/564x/6b/6d/00/6b6d00588e6b305b543d8dafe42a0a06.jpg',
                'description' => 'Cremosissima pasta cacio e pepe',
                'ingredients' => 'Pasta, pepe, pecorino romano',
                'type' => 'Primo',
                'price' => 5.00,
                'visibility' => true,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Parmigiana',
                'image' => 'https://i.pinimg.com/564x/d7/b2/c8/d7b2c8639165adaefe509e75ebe13615.jpg',
                'description' => 'Primo vegetariano con melanzane e mozzarella ',
                'ingredients' => 'Melanzane, mozzarella, pomodoro, parmigiano ',
                'type' => 'Antipasto',
                'price' => 7.90,
                'visibility' => true,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Involtini di zucchine e salmone ',
                'image' => 'https://i.pinimg.com/564x/45/00/a9/4500a95598ce655bd767563c0f877a38.jpg',
                'description' => 'Antipasto con zucchine grigliate e salmone',
                'ingredients' => 'Zucchine, salmone, Philadelphia',
                'type' => 'Secondo',
                'price' => 10.90,
                'visibility' => false,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Cheesecake',
                'image' => 'https://i.pinimg.com/564x/6f/e1/c5/6fe1c5185ac0cb278416a3c6ad36fb3c.jpg',
                'description' => 'Dolce a cucchiaio con frutti di bosco',
                'ingredients' => 'Philadelphia, panna, frutti di bosco, vaniglia',
                'type' => 'Dolce',
                'price' => 7.60,
                'visibility' => true,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Torta di Mele',
                'image' => 'https://i.pinimg.com/564x/b8/95/b8/b895b893646ef8e5b8d22db7361e2846.jpg',
                'description' => 'Classica torta di mele della nonna fatta in casa',
                'ingredients' => 'Mele, zucchero, burro, cannella',
                'type' => 'Dolce',
                'price' => 3.90,
                'visibility' => true,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Patatine fritte',
                'image' => 'https://www.nonsprecare.it/wp-content/uploads/2022/04/ricetta-patatine-fritte.jpg',
                'description' => 'Patate tagliate a fette di forma allungata e fritte in olio bollente',
                'ingredients' => 'Patate',
                'type' => 'Contorno',
                'price' => 3.50,
                'visibility' => true,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Sfogliata della casa',
                'image' => 'https://i.pinimg.com/564x/1c/cd/1d/1ccd1de6bfbdeeca85e0f1bd54abf284.jpg',
                'description' => 'Sfogliata con speck e mozzarella ',
                'ingredients' => 'sfoglia, speck, mortadella, rucola',
                'type' => 'Contorno',
                'price' => 4.90,
                'visibility' => true,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Pizza con prosciutto crudo',
                'image' => 'https://i.pinimg.com/564x/6c/bb/0e/6cbb0e1ba8045da51f7dd7c649c17e0e.jpg',
                'description' => 'Pizza con prosciutto crudo',
                'ingredients' => 'farina, pomodoro, mozzarella, basilico, prosciutto crudo',
                'type' => 'Pizza',
                'price' => 7.50,
                'visibility' => true,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Caprese',
                'image' => 'https://i.pinimg.com/564x/8e/e9/4e/8ee94e8275db673d40ed1ed01a897316.jpg',
                'description' => 'Piatto unico di insalata fresca, tipico della cucina napoletana',
                'ingredients' => 'pomodoro, mozzarella, basilico',
                'type' => 'Antipasto',
                'price' => 6,
                'visibility' => true,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Mexican cheeseburgers',
                'image' => 'https://i.pinimg.com/564x/32/07/66/32076664aca03b56a25b64c29b360698.jpg',
                'description' => 'Il classico Panino Mexican cheeseburgers con carne di fassone e formaggio',
                'ingredients' => 'lattuga, carne di fassone, crema al guaiamole, pomodoro, formaggio',
                'type' => 'Panino',
                'price' => 10.50,
                'visibility' => true,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Pizza Rucola & Speck',
                'image' => 'https://i.pinimg.com/564x/41/a6/84/41a684b0da336a9c348eb4c72dee78cc.jpg',
                'description' => 'Pizza con pomodorini secchi, rucola, speck',
                'ingredients' => 'pomodoro, mozzarella, basilico, pomodori secchi, rucola',
                'type' => 'Pizza',
                'price' => 8,
                'visibility' => true,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Coca-Cola',
                'image' => 'https://i.pinimg.com/564x/19/74/9f/19749ff3f3b941efc53616f84230a56d.jpg',
                'description' => 'Coca Cola in bottiglia',
                'ingredients' => 'Acqua, anidride carbonica, zucchero, colorante caramello (E 150D), aromi naturali, caffeina e acido fosforico (E 338)',
                'type' => 'Bevanda',
                'price' => 3,
                'visibility' => true,
                'restaurant_id' => 2
            ],
            [
                'name' => 'Acqua naturale',
                'image' => 'https://i.pinimg.com/564x/2b/15/56/2b1556cef5dfa17f11930aae144c1e61.jpg',
                'description' => 'Acqua San Pellegrino',
                'ingredients' => 'Freschissima acqua delle sorgenti Monte San Pellegrino',
                'type' => 'Bevanda',
                'price' => 2,
                'visibility' => true,
                'restaurant_id' => 2
            ],
            // Piatti del terzo ristorante
            [
                'name' => 'Risotto ai funghi porcini',
                'image' => 'https://i.pinimg.com/564x/39/0f/1e/390f1ea66d83518e5569c64357688edb.jpg',
                'description' => 'Il risotto con i funghi porcini freschi',
                'ingredients' => 'Riso, funghi porcini, brodo vegetale, cipolla, vino bianco, parmigiano',
                'type' => 'Primo',
                'price' => 14.00,
                'visibility' => true,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Fritto misto di mare',
                'image' => 'https://i.pinimg.com/564x/a5/1c/cd/a51ccd4a71a38778a6f3d5ff3d54a9f6.jpg',
                'description' => 'Il fritto misto di mare con calamari, gamberi e scampi',
                'ingredients' => 'Calamari, gamberi, scampi',
                'type' => 'Secondo',
                'price' => 9.50,
                'visibility' => true,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Zuppa di pesce',
                'image' => 'https://i.pinimg.com/564x/0f/86/38/0f86380725360dd6c28e630cc082c6f7.jpg',
                'description' => 'Zuppa di pesce accompagnata con crostini di pane casereccio',
                'ingredients' => 'Gamberi, seppie, prezzemolo',
                'type' => 'Primo',
                'price' => 11.00,
                'visibility' => false,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Tagliata di carne',
                'image' => 'https://i.pinimg.com/564x/65/22/2e/65222e4c247b634055ae88532e879d71.jpg',
                'description' => 'Secondo piatto che si ottiene con una rapida cottura al sangue di un taglio di carne ben preciso',
                'ingredients' => 'entrecôte, costata di manzo, con o senza osso, fiorentina',
                'type' => 'Secondo',
                'price' => 20.90,
                'visibility' => true,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Hamburger Panino',
                'image' => 'https://i.pinimg.com/564x/e2/b1/7c/e2b17cd05269aefaa4224c0a119ed5e6.jpg',
                'description' => 'Hamburger con doppio strato di carne',
                'ingredients' => 'Carne, cipolle caramellate, ketchup, cheddar, pomodoro, lattuga, pane al sesamo',
                'type' => 'Panino',
                'price' => 25.50,
                'visibility' => true,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Pizza margherita',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/c/c8/Pizza_Margherita_stu_spivack.jpg',
                'description' => 'La classica Pizza margherita tipica Napoletana con pomodoro, mozzarella e basilico',
                'ingredients' => 'Farina, pomodoro, mozzarella, basilico',
                'type' => 'Pizza',
                'price' => 8.00,
                'visibility' => true,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Spaghetti alla carbonara',
                'image' => 'https://blog.giallozafferano.it/graficareincucina/wp-content/uploads/2017/10/Carbonara-evidenza.png',
                'description' => 'I classici spaghetti alla carbonara tipica Romana con uova, guanciale e pecorino',
                'ingredients' => 'Spaghetti, uova, guanciale, pecorino',
                'type' => 'Primo',
                'price' => 10.50,
                'visibility' => true,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Tagliatelle al ragù',
                'image' => 'https://i.pinimg.com/564x/3e/44/35/3e4435aac4fb65311d4454227d0360d4.jpg',
                'description' => 'Le tagliatelle fatte in casa con il ragù di carne',
                'ingredients' => 'Tagliatelle fatte in casa, carne macinata, pomodoro, carota, sedano, cipolla',
                'type' => 'Primo',
                'price' => 12.00,
                'visibility' => true,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Bruschetta al pomodoro',
                'image' => 'https://i.pinimg.com/564x/bb/42/80/bb4280de62c397b550f61dfaefb50b58.jpg',
                'description' => 'Le bruschette cotte su fuoco a legna con pomodoro, aglio e basilico',
                'ingredients' => 'Pane, pomodoro, aglio, basilico',
                'type' => 'Antipasto',
                'price' => 4.50,
                'visibility' => true,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Vino Bianco',
                'image' => 'https://i.pinimg.com/564x/f8/c0/a1/f8c0a1c2d3458a71c2d22bc89901743c.jpg',
                'description' => 'Pinot Grigio delle Venezzi 2010',
                'type' => 'Bevanda',
                'ingredients' => 'Moscato bianco',
                'price' => 16.00,
                'visibility' => true,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Insalata mista',
                'image' => 'https://www.calendariodelciboitaliano.it/wp-content/uploads/2017/07/insalatamistaheader1.jpg',
                'description' => 'Ciotola grande di insalata mista tutti i gusti più uno',
                'ingredients' => 'lattuga, pomodoro, cetriolo, olive nere',
                'type' => 'Contorno',
                'price' => 6.00,
                'visibility' => true,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Tiramisù',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/5/58/Tiramisu_-_Raffaele_Diomede.jpg',
                'description' => 'Dolce al cucchiaio con savoiardi, mascarpone e caffè',
                'ingredients' => 'savoiardi, mascarpone, caffè',
                'type' => 'Dolce',
                'price' => 5.50,
                'visibility' => true,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Vino Rosso',
                'image' => 'https://shop.tastefromabruzzo.com/wp-content/uploads/2021/01/Alarius-Montepulciano-Cioti.jpg',
                'description' => 'Bottiglia di Alarius Montepulciano d\'Abruzzo, denominazione di origine controllata',
                'ingredients' => 'Montepulciano d\'Abruzzo',
                'type' => 'Bevanda',
                'price' => 18.00,
                'visibility' => true,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Spaghetti cacio e pepe',
                'image' => 'https://i.pinimg.com/564x/6b/6d/00/6b6d00588e6b305b543d8dafe42a0a06.jpg',
                'description' => 'Cremosissima pasta cacio e pepe',
                'ingredients' => 'Pasta, pepe, pecorino romano',
                'type' => 'Primo',
                'price' => 5.00,
                'visibility' => true,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Parmigiana',
                'image' => 'https://i.pinimg.com/564x/d7/b2/c8/d7b2c8639165adaefe509e75ebe13615.jpg',
                'description' => 'Primo vegetariano con melanzane e mozzarella ',
                'ingredients' => 'Melanzane, mozzarella, pomodoro, parmigiano ',
                'type' => 'Antipasto',
                'price' => 7.90,
                'visibility' => true,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Involtini di zucchine e salmone ',
                'image' => 'https://i.pinimg.com/564x/45/00/a9/4500a95598ce655bd767563c0f877a38.jpg',
                'description' => 'Antipasto con zucchine grigliate e salmone',
                'ingredients' => 'Zucchine, salmone, Philadelphia',
                'type' => 'Secondo',
                'price' => 10.90,
                'visibility' => false,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Cheesecake',
                'image' => 'https://i.pinimg.com/564x/6f/e1/c5/6fe1c5185ac0cb278416a3c6ad36fb3c.jpg',
                'description' => 'Dolce a cucchiaio con frutti di bosco',
                'ingredients' => 'Philadelphia, panna, frutti di bosco, vaniglia',
                'type' => 'Dolce',
                'price' => 7.60,
                'visibility' => true,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Torta di Mele',
                'image' => 'https://i.pinimg.com/564x/b8/95/b8/b895b893646ef8e5b8d22db7361e2846.jpg',
                'description' => 'Classica torta di mele della nonna fatta in casa',
                'ingredients' => 'Mele, zucchero, burro, cannella',
                'type' => 'Dolce',
                'price' => 3.90,
                'visibility' => true,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Patatine fritte',
                'image' => 'https://www.nonsprecare.it/wp-content/uploads/2022/04/ricetta-patatine-fritte.jpg',
                'description' => 'Patate tagliate a fette di forma allungata e fritte in olio bollente',
                'ingredients' => 'Patate',
                'type' => 'Contorno',
                'price' => 3.50,
                'visibility' => true,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Sfogliata della casa',
                'image' => 'https://i.pinimg.com/564x/1c/cd/1d/1ccd1de6bfbdeeca85e0f1bd54abf284.jpg',
                'description' => 'Sfogliata con speck e mozzarella ',
                'ingredients' => 'sfoglia, speck, mortadella, rucola',
                'type' => 'Contorno',
                'price' => 4.90,
                'visibility' => true,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Pizza con prosciutto crudo',
                'image' => 'https://i.pinimg.com/564x/6c/bb/0e/6cbb0e1ba8045da51f7dd7c649c17e0e.jpg',
                'description' => 'Pizza con prosciutto crudo',
                'ingredients' => 'farina, pomodoro, mozzarella, basilico, prosciutto crudo',
                'type' => 'Pizza',
                'price' => 7.50,
                'visibility' => true,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Caprese',
                'image' => 'https://i.pinimg.com/564x/8e/e9/4e/8ee94e8275db673d40ed1ed01a897316.jpg',
                'description' => 'Piatto unico di insalata fresca, tipico della cucina napoletana',
                'ingredients' => 'pomodoro, mozzarella, basilico',
                'type' => 'Antipasto',
                'price' => 6,
                'visibility' => true,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Mexican cheeseburgers',
                'image' => 'https://i.pinimg.com/564x/32/07/66/32076664aca03b56a25b64c29b360698.jpg',
                'description' => 'Il classico Panino Mexican cheeseburgers con carne di fassone e formaggio',
                'ingredients' => 'lattuga, carne di fassone, crema al guaiamole, pomodoro, formaggio',
                'type' => 'Panino',
                'price' => 10.50,
                'visibility' => true,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Pizza Rucola & Speck',
                'image' => 'https://i.pinimg.com/564x/41/a6/84/41a684b0da336a9c348eb4c72dee78cc.jpg',
                'description' => 'Pizza con pomodorini secchi, rucola, speck',
                'ingredients' => 'pomodoro, mozzarella, basilico, pomodori secchi, rucola',
                'type' => 'Pizza',
                'price' => 8,
                'visibility' => true,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Coca-Cola',
                'image' => 'https://i.pinimg.com/564x/19/74/9f/19749ff3f3b941efc53616f84230a56d.jpg',
                'description' => 'Coca Cola in bottiglia',
                'ingredients' => 'Acqua, anidride carbonica, zucchero, colorante caramello (E 150D), aromi naturali, caffeina e acido fosforico (E 338)',
                'type' => 'Bevanda',
                'price' => 3,
                'visibility' => true,
                'restaurant_id' => 3
            ],
            [
                'name' => 'Acqua naturale',
                'image' => 'https://i.pinimg.com/564x/2b/15/56/2b1556cef5dfa17f11930aae144c1e61.jpg',
                'description' => 'Acqua San Pellegrino',
                'ingredients' => 'Freschissima acqua delle sorgenti Monte San Pellegrino',
                'type' => 'Bevanda',
                'price' => 2,
                'visibility' => true,
                'restaurant_id' => 3
            ],
            // Piatti del quarto ristorante
            [
                'name' => 'Spaghetti cacio e pepe',
                'image' => 'https://i.pinimg.com/564x/6b/6d/00/6b6d00588e6b305b543d8dafe42a0a06.jpg',
                'description' => 'Cremosissima pasta cacio e pepe',
                'ingredients' => 'Pasta, pepe, pecorino romano',
                'type' => 'Primo',
                'price' => 5.00,
                'visibility' => true,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Risotto ai funghi porcini',
                'image' => 'https://i.pinimg.com/564x/7f/0e/8d/7f0e8d4509254e0aa93148d1f1d1a260.jpg',
                'description' => 'Il risotto con i funghi porcini freschi',
                'ingredients' => 'Riso, funghi porcini, brodo vegetale, cipolla, vino bianco, parmigiano',
                'type' => 'Primo',
                'price' => 16.70,
                'visibility' => true,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Parmigiana',
                'image' => 'https://i.pinimg.com/564x/d7/b2/c8/d7b2c8639165adaefe509e75ebe13615.jpg',
                'description' => 'Primo vegetariano con melanzane e mozzarella ',
                'ingredients' => 'Melanzane, mozzarella, pomodoro, parmigiano ',
                'type' => 'Antipasto',
                'price' => 7.90,
                'visibility' => true,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Involtini di zucchine e salmone',
                'image' => 'https://i.pinimg.com/564x/45/00/a9/4500a95598ce655bd767563c0f877a38.jpg',
                'description' => 'Antipasto con zucchine grigliate e salmone',
                'ingredients' => 'Zucchine, salmone, Philadelphia',
                'type' => 'Secondo',
                'price' => 10.90,
                'visibility' => false,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Cheesecake',
                'image' => 'https://i.pinimg.com/564x/6f/e1/c5/6fe1c5185ac0cb278416a3c6ad36fb3c.jpg',
                'description' => 'Dolce a cucchiaio con frutti di bosco',
                'ingredients' => 'Philadelphia, panna, frutti di bosco, vaniglia',
                'type' => 'Dolce',
                'price' => 7.60,
                'visibility' => true,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Fritto misto di mare',
                'image' => 'https://i.pinimg.com/564x/a5/1c/cd/a51ccd4a71a38778a6f3d5ff3d54a9f6.jpg',
                'description' => 'Il fritto misto di mare con calamari, gamberi e scampi',
                'ingredients' => 'Calamari, gamberi, scampi',
                'type' => 'Secondo',
                'price' => 9.50,
                'visibility' => true,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Zuppa di pesce',
                'image' => 'https://i.pinimg.com/564x/0f/86/38/0f86380725360dd6c28e630cc082c6f7.jpg',
                'description' => 'Zuppa di pesce accompagnata con crostini di pane casereccio',
                'ingredients' => 'Gamberi, seppie, prezzemolo',
                'type' => 'Primo',
                'price' => 11.00,
                'visibility' => false,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Tagliata di carne',
                'image' => 'https://i.pinimg.com/564x/65/22/2e/65222e4c247b634055ae88532e879d71.jpg',
                'description' => 'Secondo piatto che si ottiene con una rapida cottura al sangue di un taglio di carne ben preciso',
                'ingredients' => 'entrecôte, costata di manzo, con o senza osso, fiorentina',
                'type' => 'Secondo',
                'price' => 20.90,
                'visibility' => true,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Hamburger Panino',
                'image' => 'https://i.pinimg.com/564x/e2/b1/7c/e2b17cd05269aefaa4224c0a119ed5e6.jpg',
                'description' => 'Hamburger con doppio strato di carne',
                'ingredients' => 'Carne, cipolle caramellate, ketchup, cheddar, pomodoro, lattuga, pane al sesamo',
                'type' => 'Panino',
                'price' => 25.50,
                'visibility' => true,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Pizza margherita',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/c/c8/Pizza_Margherita_stu_spivack.jpg',
                'description' => 'La classica Pizza margherita tipica Napoletana con pomodoro, mozzarella e basilico',
                'ingredients' => 'Farina, pomodoro, mozzarella, basilico',
                'type' => 'Pizza',
                'price' => 8.00,
                'visibility' => true,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Spaghetti alla carbonara',
                'image' => 'https://blog.giallozafferano.it/graficareincucina/wp-content/uploads/2017/10/Carbonara-evidenza.png',
                'description' => 'I classici spaghetti alla carbonara tipica Romana con uova, guanciale e pecorino',
                'ingredients' => 'Spaghetti, uova, guanciale, pecorino',
                'type' => 'Primo',
                'price' => 10.50,
                'visibility' => true,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Tagliatelle al ragù',
                'image' => 'https://i.pinimg.com/564x/3e/44/35/3e4435aac4fb65311d4454227d0360d4.jpg',
                'description' => 'Le tagliatelle fatte in casa con il ragù di carne',
                'ingredients' => 'Tagliatelle fatte in casa, carne macinata, pomodoro, carota, sedano, cipolla',
                'type' => 'Primo',
                'price' => 12.00,
                'visibility' => true,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Bruschetta al pomodoro',
                'image' => 'https://i.pinimg.com/564x/bb/42/80/bb4280de62c397b550f61dfaefb50b58.jpg',
                'description' => 'Le bruschette cotte su fuoco a legna con pomodoro, aglio e basilico',
                'ingredients' => 'Pane, pomodoro, aglio, basilico',
                'type' => 'Antipasto',
                'price' => 4.50,
                'visibility' => true,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Vino Bianco',
                'image' => 'https://i.pinimg.com/564x/f8/c0/a1/f8c0a1c2d3458a71c2d22bc89901743c.jpg',
                'description' => 'Pinot Grigio delle Venezzi 2010',
                'type' => 'Bevanda',
                'ingredients' => 'Moscato bianco',
                'price' => 16.00,
                'visibility' => true,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Insalata mista',
                'image' => 'https://www.calendariodelciboitaliano.it/wp-content/uploads/2017/07/insalatamistaheader1.jpg',
                'description' => 'Ciotola grande di insalata mista tutti i gusti più uno',
                'ingredients' => 'lattuga, pomodoro, cetriolo, olive nere',
                'type' => 'Contorno',
                'price' => 6.00,
                'visibility' => true,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Tiramisù',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/5/58/Tiramisu_-_Raffaele_Diomede.jpg',
                'description' => 'Dolce al cucchiaio con savoiardi, mascarpone e caffè',
                'ingredients' => 'savoiardi, mascarpone, caffè',
                'type' => 'Dolce',
                'price' => 5.50,
                'visibility' => true,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Vino Rosso',
                'image' => 'https://shop.tastefromabruzzo.com/wp-content/uploads/2021/01/Alarius-Montepulciano-Cioti.jpg',
                'description' => 'Bottiglia di Alarius Montepulciano d\'Abruzzo, denominazione di origine controllata',
                'ingredients' => 'Montepulciano d\'Abruzzo',
                'type' => 'Bevanda',
                'price' => 18.00,
                'visibility' => true,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Torta di Mele',
                'image' => 'https://i.pinimg.com/564x/b8/95/b8/b895b893646ef8e5b8d22db7361e2846.jpg',
                'description' => 'Classica torta di mele della nonna fatta in casa',
                'ingredients' => 'Mele, zucchero, burro, cannella',
                'type' => 'Dolce',
                'price' => 3.90,
                'visibility' => true,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Patatine fritte',
                'image' => 'https://www.nonsprecare.it/wp-content/uploads/2022/04/ricetta-patatine-fritte.jpg',
                'description' => 'Patate tagliate a fette di forma allungata e fritte in olio bollente',
                'ingredients' => 'Patate',
                'type' => 'Contorno',
                'price' => 3.50,
                'visibility' => true,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Sfogliata della casa',
                'image' => 'https://i.pinimg.com/564x/1c/cd/1d/1ccd1de6bfbdeeca85e0f1bd54abf284.jpg',
                'description' => 'Sfogliata con speck e mozzarella ',
                'ingredients' => 'sfoglia, speck, mortadella, rucola',
                'type' => 'Contorno',
                'price' => 4.90,
                'visibility' => true,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Pizza con prosciutto crudo',
                'image' => 'https://i.pinimg.com/564x/6c/bb/0e/6cbb0e1ba8045da51f7dd7c649c17e0e.jpg',
                'description' => 'Pizza con prosciutto crudo',
                'ingredients' => 'farina, pomodoro, mozzarella, basilico, prosciutto crudo',
                'type' => 'Pizza',
                'price' => 7.50,
                'visibility' => true,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Caprese',
                'image' => 'https://i.pinimg.com/564x/8e/e9/4e/8ee94e8275db673d40ed1ed01a897316.jpg',
                'description' => 'Piatto unico di insalata fresca, tipico della cucina napoletana',
                'ingredients' => 'pomodoro, mozzarella, basilico',
                'type' => 'Antipasto',
                'price' => 6,
                'visibility' => true,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Mexican cheeseburgers',
                'image' => 'https://i.pinimg.com/564x/32/07/66/32076664aca03b56a25b64c29b360698.jpg',
                'description' => 'Il classico Panino Mexican cheeseburgers con carne di fassone e formaggio',
                'ingredients' => 'lattuga, carne di fassone, crema al guaiamole, pomodoro, formaggio',
                'type' => 'Panino',
                'price' => 10.50,
                'visibility' => true,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Pizza Rucola & Speck',
                'image' => 'https://i.pinimg.com/564x/41/a6/84/41a684b0da336a9c348eb4c72dee78cc.jpg',
                'description' => 'Pizza con pomodorini secchi, rucola, speck',
                'ingredients' => 'pomodoro, mozzarella, basilico, pomodori secchi, rucola',
                'type' => 'Pizza',
                'price' => 8,
                'visibility' => true,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Coca-Cola',
                'image' => 'https://i.pinimg.com/564x/19/74/9f/19749ff3f3b941efc53616f84230a56d.jpg',
                'description' => 'Coca Cola in bottiglia',
                'ingredients' => 'Acqua, anidride carbonica, zucchero, colorante caramello (E 150D), aromi naturali, caffeina e acido fosforico (E 338)',
                'type' => 'Bevanda',
                'price' => 3,
                'visibility' => true,
                'restaurant_id' => 4
            ],
            [
                'name' => 'Acqua naturale',
                'image' => 'https://i.pinimg.com/564x/2b/15/56/2b1556cef5dfa17f11930aae144c1e61.jpg',
                'description' => 'Acqua San Pellegrino',
                'ingredients' => 'Freschissima acqua delle sorgenti Monte San Pellegrino',
                'type' => 'Bevanda',
                'price' => 2,
                'visibility' => true,
                'restaurant_id' => 4
            ],
            // Piatti del quinto ristorante
            [
                'name' => 'Risotto ai funghi porcini',
                'image' => 'https://i.pinimg.com/564x/3d/0f/89/3d0f8949530d3a0f19e8389af8727236.jpg',
                'description' => 'Il risotto con i funghi porcini freschi',
                'ingredients' => 'Riso, funghi porcini, brodo vegetale, cipolla, vino bianco, parmigiano',
                'type' => 'Primo',
                'price' => 12.40,
                'visibility' => true,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Bruschetta al pomodoro',
                'image' => 'https://i.pinimg.com/564x/10/7f/13/107f130050a0d8ecc2eb741e25dc861f.jpg',
                'description' => 'Le bruschette cotte su fuoco a legna con pomodoro, aglio e basilico',
                'ingredients' => 'Pane, pomodoro, aglio, basilico',
                'type' => 'Contorno',
                'price' => 4.90,
                'visibility' => true,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Fritto misto di mare',
                'image' => 'https://i.pinimg.com/564x/49/66/80/49668042eef05fa5187f12eeedf4c91d.jpg',
                'description' => 'Il fritto misto di mare con calamari, gamberi e scampi',
                'ingredients' => 'Calamari, gamberi, scampi',
                'type' => 'Secondo',
                'price' => 8.80,
                'visibility' => true,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Involtini di zucchine e salmone ',
                'image' => 'https://i.pinimg.com/564x/45/00/a9/4500a95598ce655bd767563c0f877a38.jpg',
                'description' => 'Antipasto con zucchine grigliate e salmone',
                'ingredients' => 'Zucchine, salmone, Philadelphia',
                'type' => 'Secondo',
                'price' => 10.90,
                'visibility' => false,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Torta di Mele',
                'image' => 'https://i.pinimg.com/564x/b8/95/b8/b895b893646ef8e5b8d22db7361e2846.jpg',
                'description' => 'Classica torta di mele della nonna fatta in casa',
                'ingredients' => 'Mele, zucchero, burro, cannella',
                'type' => 'Dolce',
                'price' => 3.90,
                'visibility' => true,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Spaghetti cacio e pepe',
                'image' => 'https://i.pinimg.com/564x/6b/6d/00/6b6d00588e6b305b543d8dafe42a0a06.jpg',
                'description' => 'Cremosissima pasta cacio e pepe',
                'ingredients' => 'Pasta, pepe, pecorino romano',
                'type' => 'Primo',
                'price' => 5.00,
                'visibility' => true,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Parmigiana',
                'image' => 'https://i.pinimg.com/564x/d7/b2/c8/d7b2c8639165adaefe509e75ebe13615.jpg',
                'description' => 'Primo vegetariano con melanzane e mozzarella ',
                'ingredients' => 'Melanzane, mozzarella, pomodoro, parmigiano ',
                'type' => 'Antipasto',
                'price' => 7.90,
                'visibility' => true,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Cheesecake',
                'image' => 'https://i.pinimg.com/564x/6f/e1/c5/6fe1c5185ac0cb278416a3c6ad36fb3c.jpg',
                'description' => 'Dolce a cucchiaio con frutti di bosco',
                'ingredients' => 'Philadelphia, panna, frutti di bosco, vaniglia',
                'type' => 'Dolce',
                'price' => 7.60,
                'visibility' => true,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Zuppa di pesce',
                'image' => 'https://i.pinimg.com/564x/0f/86/38/0f86380725360dd6c28e630cc082c6f7.jpg',
                'description' => 'Zuppa di pesce accompagnata con crostini di pane casereccio',
                'ingredients' => 'Gamberi, seppie, prezzemolo',
                'type' => 'Primo',
                'price' => 11.00,
                'visibility' => false,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Tagliata di carne',
                'image' => 'https://i.pinimg.com/564x/65/22/2e/65222e4c247b634055ae88532e879d71.jpg',
                'description' => 'Secondo piatto che si ottiene con una rapida cottura al sangue di un taglio di carne ben preciso',
                'ingredients' => 'entrecôte, costata di manzo, con o senza osso, fiorentina',
                'type' => 'Secondo',
                'price' => 20.90,
                'visibility' => true,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Hamburger Panino',
                'image' => 'https://i.pinimg.com/564x/e2/b1/7c/e2b17cd05269aefaa4224c0a119ed5e6.jpg',
                'description' => 'Hamburger con doppio strato di carne',
                'ingredients' => 'Carne, cipolle caramellate, ketchup, cheddar, pomodoro, lattuga, pane al sesamo',
                'type' => 'Panino',
                'price' => 25.50,
                'visibility' => true,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Pizza margherita',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/c/c8/Pizza_Margherita_stu_spivack.jpg',
                'description' => 'La classica Pizza margherita tipica Napoletana con pomodoro, mozzarella e basilico',
                'ingredients' => 'Farina, pomodoro, mozzarella, basilico',
                'type' => 'Pizza',
                'price' => 8.00,
                'visibility' => true,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Spaghetti alla carbonara',
                'image' => 'https://blog.giallozafferano.it/graficareincucina/wp-content/uploads/2017/10/Carbonara-evidenza.png',
                'description' => 'I classici spaghetti alla carbonara tipica Romana con uova, guanciale e pecorino',
                'ingredients' => 'Spaghetti, uova, guanciale, pecorino',
                'type' => 'Primo',
                'price' => 10.50,
                'visibility' => true,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Tagliatelle al ragù',
                'image' => 'https://i.pinimg.com/564x/3e/44/35/3e4435aac4fb65311d4454227d0360d4.jpg',
                'description' => 'Le tagliatelle fatte in casa con il ragù di carne',
                'ingredients' => 'Tagliatelle fatte in casa, carne macinata, pomodoro, carota, sedano, cipolla',
                'type' => 'Primo',
                'price' => 12.00,
                'visibility' => true,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Vino Bianco',
                'image' => 'https://i.pinimg.com/564x/f8/c0/a1/f8c0a1c2d3458a71c2d22bc89901743c.jpg',
                'description' => 'Pinot Grigio delle Venezzi 2010',
                'type' => 'Bevanda',
                'ingredients' => 'Moscato bianco',
                'price' => 16.00,
                'visibility' => true,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Insalata mista',
                'image' => 'https://www.calendariodelciboitaliano.it/wp-content/uploads/2017/07/insalatamistaheader1.jpg',
                'description' => 'Ciotola grande di insalata mista tutti i gusti più uno',
                'ingredients' => 'lattuga, pomodoro, cetriolo, olive nere',
                'type' => 'Contorno',
                'price' => 6.00,
                'visibility' => true,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Tiramisù',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/5/58/Tiramisu_-_Raffaele_Diomede.jpg',
                'description' => 'Dolce al cucchiaio con savoiardi, mascarpone e caffè',
                'ingredients' => 'savoiardi, mascarpone, caffè',
                'type' => 'Dolce',
                'price' => 5.50,
                'visibility' => true,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Vino Rosso',
                'image' => 'https://shop.tastefromabruzzo.com/wp-content/uploads/2021/01/Alarius-Montepulciano-Cioti.jpg',
                'description' => 'Bottiglia di Alarius Montepulciano d\'Abruzzo, denominazione di origine controllata',
                'ingredients' => 'Montepulciano d\'Abruzzo',
                'type' => 'Bevanda',
                'price' => 18.00,
                'visibility' => true,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Patatine fritte',
                'image' => 'https://www.nonsprecare.it/wp-content/uploads/2022/04/ricetta-patatine-fritte.jpg',
                'description' => 'Patate tagliate a fette di forma allungata e fritte in olio bollente',
                'ingredients' => 'Patate',
                'type' => 'Contorno',
                'price' => 3.50,
                'visibility' => true,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Sfogliata della casa',
                'image' => 'https://i.pinimg.com/564x/1c/cd/1d/1ccd1de6bfbdeeca85e0f1bd54abf284.jpg',
                'description' => 'Sfogliata con speck e mozzarella ',
                'ingredients' => 'sfoglia, speck, mortadella, rucola',
                'type' => 'Contorno',
                'price' => 4.90,
                'visibility' => true,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Pizza con prosciutto crudo',
                'image' => 'https://i.pinimg.com/564x/6c/bb/0e/6cbb0e1ba8045da51f7dd7c649c17e0e.jpg',
                'description' => 'Pizza con prosciutto crudo',
                'ingredients' => 'farina, pomodoro, mozzarella, basilico, prosciutto crudo',
                'type' => 'Pizza',
                'price' => 7.50,
                'visibility' => true,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Caprese',
                'image' => 'https://i.pinimg.com/564x/8e/e9/4e/8ee94e8275db673d40ed1ed01a897316.jpg',
                'description' => 'Piatto unico di insalata fresca, tipico della cucina napoletana',
                'ingredients' => 'pomodoro, mozzarella, basilico',
                'type' => 'Antipasto',
                'price' => 6,
                'visibility' => true,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Mexican cheeseburgers',
                'image' => 'https://i.pinimg.com/564x/32/07/66/32076664aca03b56a25b64c29b360698.jpg',
                'description' => 'Il classico Panino Mexican cheeseburgers con carne di fassone e formaggio',
                'ingredients' => 'lattuga, carne di fassone, crema al guaiamole, pomodoro, formaggio',
                'type' => 'Panino',
                'price' => 10.50,
                'visibility' => true,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Pizza Rucola & Speck',
                'image' => 'https://i.pinimg.com/564x/41/a6/84/41a684b0da336a9c348eb4c72dee78cc.jpg',
                'description' => 'Pizza con pomodorini secchi, rucola, speck',
                'ingredients' => 'pomodoro, mozzarella, basilico, pomodori secchi, rucola',
                'type' => 'Pizza',
                'price' => 8,
                'visibility' => true,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Coca-Cola',
                'image' => 'https://i.pinimg.com/564x/19/74/9f/19749ff3f3b941efc53616f84230a56d.jpg',
                'description' => 'Coca Cola in bottiglia',
                'ingredients' => 'Acqua, anidride carbonica, zucchero, colorante caramello (E 150D), aromi naturali, caffeina e acido fosforico (E 338)',
                'type' => 'Bevanda',
                'price' => 3,
                'visibility' => true,
                'restaurant_id' => 5
            ],
            [
                'name' => 'Acqua naturale',
                'image' => 'https://i.pinimg.com/564x/2b/15/56/2b1556cef5dfa17f11930aae144c1e61.jpg',
                'description' => 'Acqua San Pellegrino',
                'ingredients' => 'Freschissima acqua delle sorgenti Monte San Pellegrino',
                'type' => 'Bevanda',
                'price' => 2,
                'visibility' => true,
                'restaurant_id' => 5
            ],
            // Piatti del sesto ristorante
            [
                'name' => 'Pizza Margherita',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/c/c8/Pizza_Margherita_stu_spivack.jpg',
                'description' => 'Pizza classica Napoletana con pomodoro, mozzarella e basilico',
                'ingredients' => 'farina, pomodoro, mozzarella, basilico',
                'type' => 'Pizza',
                'price' => 8.50,
                'visibility' => true,
                'restaurant_id' => 6
            ],
            [
                'name' => 'Carbonara',
                'image' => 'https://blog.giallozafferano.it/graficareincucina/wp-content/uploads/2017/10/Carbonara-evidenza.png',
                'description' => 'Pasta classica Romana con pancetta, uova, pecorino e pepe nero',
                'ingredients' => 'pasta, pancetta, uova, pecorino, pepe nero',
                'type' => 'Primo',
                'price' => 12.00,
                'visibility' => true,
                'restaurant_id' => 6
            ],
            [
                'name' => 'Insalata mista',
                'image' => 'https://www.calendariodelciboitaliano.it/wp-content/uploads/2017/07/insalatamistaheader1.jpg',
                'description' => 'Ciotola grande di insalata mista tutti i gusti più uno',
                'ingredients' => 'lattuga, pomodoro, cetriolo, olive nere',
                'type' => 'Contorno',
                'price' => 6.00,
                'visibility' => true,
                'restaurant_id' => 6
            ],
            [
                'name' => 'Tiramisù',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/5/58/Tiramisu_-_Raffaele_Diomede.jpg',
                'description' => 'Dolce al cucchiaio con savoiardi, mascarpone e caffè',
                'ingredients' => 'savoiardi, mascarpone, caffè',
                'type' => 'Dolce',
                'price' => 5.50,
                'visibility' => true,
                'restaurant_id' => 6
            ],
            [
                'name' => 'Vino Rosso',
                'image' => 'https://shop.tastefromabruzzo.com/wp-content/uploads/2021/01/Alarius-Montepulciano-Cioti.jpg',
                'description' => 'Bottiglia di Alarius Montepulciano d\'Abruzzo, denominazione di origine controllata',
                'ingredients' => 'Montepulciano d\'Abruzzo',
                'type' => 'Bevanda',
                'price' => 18.00,
                'visibility' => true,
                'restaurant_id' => 6
            ],
            [
                'name' => 'Tagliatelle al ragù',
                'image' => 'https://i.pinimg.com/564x/3e/44/35/3e4435aac4fb65311d4454227d0360d4.jpg',
                'description' => 'Le tagliatelle fatte in casa con il ragù di carne',
                'ingredients' => 'Tagliatelle fatte in casa, carne macinata, pomodoro, carota, sedano, cipolla',
                'type' => 'Primo',
                'price' => 12.00,
                'visibility' => true,
                'restaurant_id' => 6
            ],
            [
                'name' => 'Bruschetta al pomodoro',
                'image' => 'https://i.pinimg.com/564x/bb/42/80/bb4280de62c397b550f61dfaefb50b58.jpg',
                'description' => 'Le bruschette cotte su fuoco a legna con pomodoro, aglio e basilico',
                'ingredients' => 'Pane, pomodoro, aglio, basilico',
                'type' => 'Antipasto',
                'price' => 4.50,
                'visibility' => true,
                'restaurant_id' => 6
            ],
            [
                'name' => 'Vino Bianco',
                'image' => 'https://i.pinimg.com/564x/f8/c0/a1/f8c0a1c2d3458a71c2d22bc89901743c.jpg',
                'description' => 'Pinot Grigio delle Venezzi 2010',
                'type' => 'Bevanda',
                'ingredients' => 'Moscato bianco',
                'price' => 16.00,
                'visibility' => true,
                'restaurant_id' => 6
            ],
            [
                'name' => 'Risotto ai funghi porcini',
                'image' => 'https://i.pinimg.com/564x/39/0f/1e/390f1ea66d83518e5569c64357688edb.jpg',
                'description' => 'Il risotto con i funghi porcini freschi',
                'ingredients' => 'Riso, funghi porcini, brodo vegetale, cipolla, vino bianco, parmigiano',
                'type' => 'Primo',
                'price' => 14.00,
                'visibility' => true,
                'restaurant_id' => 6
            ],
            [
                'name' => 'Fritto misto di mare',
                'image' => 'https://i.pinimg.com/564x/a5/1c/cd/a51ccd4a71a38778a6f3d5ff3d54a9f6.jpg',
                'description' => 'Il fritto misto di mare con calamari, gamberi e scampi',
                'ingredients' => 'Calamari, gamberi, scampi',
                'type' => 'Secondo',
                'price' => 9.50,
                'visibility' => true,
                'restaurant_id' => 6
            ],
            [
                'name' => 'Zuppa di pesce',
                'image' => 'https://i.pinimg.com/564x/0f/86/38/0f86380725360dd6c28e630cc082c6f7.jpg',
                'description' => 'Zuppa di pesce accompagnata con crostini di pane casereccio',
                'ingredients' => 'Gamberi, seppie, prezzemolo',
                'type' => 'Primo',
                'price' => 11.00,
                'visibility' => false,
                'restaurant_id' => 6
            ],
            [
                'name' => 'Tagliata di carne',
                'image' => 'https://i.pinimg.com/564x/65/22/2e/65222e4c247b634055ae88532e879d71.jpg',
                'description' => 'Secondo piatto che si ottiene con una rapida cottura al sangue di un taglio di carne ben preciso',
                'ingredients' => 'entrecôte, costata di manzo, con o senza osso, fiorentina',
                'type' => 'Secondo',
                'price' => 20.90,
                'visibility' => true,
                'restaurant_id' => 6
            ],
            [
                'name' => 'Hamburger Panino',
                'image' => 'https://i.pinimg.com/564x/e2/b1/7c/e2b17cd05269aefaa4224c0a119ed5e6.jpg',
                'description' => 'Hamburger con doppio strato di carne',
                'ingredients' => 'Carne, cipolle caramellate, ketchup, cheddar, pomodoro, lattuga, pane al sesamo',
                'type' => 'Panino',
                'price' => 25.50,
                'visibility' => true,
                'restaurant_id' => 6
            ],
            [
                'name' => 'Spaghetti cacio e pepe',
                'image' => 'https://i.pinimg.com/564x/6b/6d/00/6b6d00588e6b305b543d8dafe42a0a06.jpg',
                'description' => 'Cremosissima pasta cacio e pepe',
                'ingredients' => 'Pasta, pepe, pecorino romano',
                'type' => 'Primo',
                'price' => 5.00,
                'visibility' => true,
                'restaurant_id' => 6
            ],
            [
                'name' => 'Parmigiana',
                'image' => 'https://i.pinimg.com/564x/d7/b2/c8/d7b2c8639165adaefe509e75ebe13615.jpg',
                'description' => 'Primo vegetariano con melanzane e mozzarella ',
                'ingredients' => 'Melanzane, mozzarella, pomodoro, parmigiano ',
                'type' => 'Antipasto',
                'price' => 7.90,
                'visibility' => true,
                'restaurant_id' => 6
            ],
            [
                'name' => 'Involtini di zucchine e salmone ',
                'image' => 'https://i.pinimg.com/564x/45/00/a9/4500a95598ce655bd767563c0f877a38.jpg',
                'description' => 'Antipasto con zucchine grigliate e salmone',
                'ingredients' => 'Zucchine, salmone, Philadelphia',
                'type' => 'Secondo',
                'price' => 10.90,
                'visibility' => false,
                'restaurant_id' => 6
            ],
            [
                'name' => 'Cheesecake',
                'image' => 'https://i.pinimg.com/564x/6f/e1/c5/6fe1c5185ac0cb278416a3c6ad36fb3c.jpg',
                'description' => 'Dolce a cucchiaio con frutti di bosco',
                'ingredients' => 'Philadelphia, panna, frutti di bosco, vaniglia',
                'type' => 'Dolce',
                'price' => 7.60,
                'visibility' => true,
                'restaurant_id' => 6
            ],
            [
                'name' => 'Torta di Mele',
                'image' => 'https://i.pinimg.com/564x/b8/95/b8/b895b893646ef8e5b8d22db7361e2846.jpg',
                'description' => 'Classica torta di mele della nonna fatta in casa',
                'ingredients' => 'Mele, zucchero, burro, cannella',
                'type' => 'Dolce',
                'price' => 3.90,
                'visibility' => true,
                'restaurant_id' => 6
            ],
            [
                'name' => 'Patatine fritte',
                'image' => 'https://www.nonsprecare.it/wp-content/uploads/2022/04/ricetta-patatine-fritte.jpg',
                'description' => 'Patate tagliate a fette di forma allungata e fritte in olio bollente',
                'ingredients' => 'Patate',
                'type' => 'Contorno',
                'price' => 3.50,
                'visibility' => true,
                'restaurant_id' => 6
            ],
            [
                'name' => 'Sfogliata della casa',
                'image' => 'https://i.pinimg.com/564x/1c/cd/1d/1ccd1de6bfbdeeca85e0f1bd54abf284.jpg',
                'description' => 'Sfogliata con speck e mozzarella ',
                'ingredients' => 'sfoglia, speck, mortadella, rucola',
                'type' => 'Contorno',
                'price' => 4.90,
                'visibility' => true,
                'restaurant_id' => 6
            ],
            [
                'name' => 'Pizza con prosciutto crudo',
                'image' => 'https://i.pinimg.com/564x/6c/bb/0e/6cbb0e1ba8045da51f7dd7c649c17e0e.jpg',
                'description' => 'Pizza con prosciutto crudo',
                'ingredients' => 'farina, pomodoro, mozzarella, basilico, prosciutto crudo',
                'type' => 'Pizza',
                'price' => 7.50,
                'visibility' => true,
                'restaurant_id' => 6
            ],
            [
                'name' => 'Caprese',
                'image' => 'https://i.pinimg.com/564x/8e/e9/4e/8ee94e8275db673d40ed1ed01a897316.jpg',
                'description' => 'Piatto unico di insalata fresca, tipico della cucina napoletana',
                'ingredients' => 'pomodoro, mozzarella, basilico',
                'type' => 'Antipasto',
                'price' => 6,
                'visibility' => true,
                'restaurant_id' => 6
            ],
            [
                'name' => 'Mexican cheeseburgers',
                'image' => 'https://i.pinimg.com/564x/32/07/66/32076664aca03b56a25b64c29b360698.jpg',
                'description' => 'Il classico Panino Mexican cheeseburgers con carne di fassone e formaggio',
                'ingredients' => 'lattuga, carne di fassone, crema al guaiamole, pomodoro, formaggio',
                'type' => 'Panino',
                'price' => 10.50,
                'visibility' => true,
                'restaurant_id' => 6
            ],
            [
                'name' => 'Pizza Rucola & Speck',
                'image' => 'https://i.pinimg.com/564x/41/a6/84/41a684b0da336a9c348eb4c72dee78cc.jpg',
                'description' => 'Pizza con pomodorini secchi, rucola, speck',
                'ingredients' => 'pomodoro, mozzarella, basilico, pomodori secchi, rucola',
                'type' => 'Pizza',
                'price' => 8,
                'visibility' => true,
                'restaurant_id' => 6
            ],
            [
                'name' => 'Coca-Cola',
                'image' => 'https://i.pinimg.com/564x/19/74/9f/19749ff3f3b941efc53616f84230a56d.jpg',
                'description' => 'Coca Cola in bottiglia',
                'ingredients' => 'Acqua, anidride carbonica, zucchero, colorante caramello (E 150D), aromi naturali, caffeina e acido fosforico (E 338)',
                'type' => 'Bevanda',
                'price' => 3,
                'visibility' => true,
                'restaurant_id' => 6
            ],
            [
                'name' => 'Acqua naturale',
                'image' => 'https://i.pinimg.com/564x/2b/15/56/2b1556cef5dfa17f11930aae144c1e61.jpg',
                'description' => 'Acqua San Pellegrino',
                'ingredients' => 'Freschissima acqua delle sorgenti Monte San Pellegrino',
                'type' => 'Bevanda',
                'price' => 2,
                'visibility' => true,
                'restaurant_id' => 6
            ],
            // Piatti del settimo ristorante
            [
                'name' => 'Pizza margherita',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/c/c8/Pizza_Margherita_stu_spivack.jpg',
                'description' => 'La classica Pizza margherita tipica Napoletana con pomodoro, mozzarella e basilico',
                'ingredients' => 'Farina, pomodoro, mozzarella, basilico',
                'type' => 'Pizza',
                'price' => 8.00,
                'visibility' => true,
                'restaurant_id' => 7
            ],
            [
                'name' => 'Spaghetti alla carbonara',
                'image' => 'https://blog.giallozafferano.it/graficareincucina/wp-content/uploads/2017/10/Carbonara-evidenza.png',
                'description' => 'I classici spaghetti alla carbonara tipica Romana con uova, guanciale e pecorino',
                'ingredients' => 'Spaghetti, uova, guanciale, pecorino',
                'type' => 'Primo',
                'price' => 10.50,
                'visibility' => true,
                'restaurant_id' => 7
            ],
            [
                'name' => 'Tagliatelle al ragù',
                'image' => 'https://i.pinimg.com/564x/3e/44/35/3e4435aac4fb65311d4454227d0360d4.jpg',
                'description' => 'Le tagliatelle fatte in casa con il ragù di carne',
                'ingredients' => 'Tagliatelle fatte in casa, carne macinata, pomodoro, carota, sedano, cipolla',
                'type' => 'Primo',
                'price' => 12.00,
                'visibility' => true,
                'restaurant_id' => 7
            ],
            [
                'name' => 'Bruschetta al pomodoro',
                'image' => 'https://i.pinimg.com/564x/bb/42/80/bb4280de62c397b550f61dfaefb50b58.jpg',
                'description' => 'Le bruschette cotte su fuoco a legna con pomodoro, aglio e basilico',
                'ingredients' => 'Pane, pomodoro, aglio, basilico',
                'type' => 'Antipasto',
                'price' => 4.50,
                'visibility' => true,
                'restaurant_id' => 7
            ],
            [
                'name' => 'Vino Bianco',
                'image' => 'https://i.pinimg.com/564x/f8/c0/a1/f8c0a1c2d3458a71c2d22bc89901743c.jpg',
                'description' => 'Pinot Grigio delle Venezzi 2010',
                'type' => 'Bevanda',
                'ingredients' => 'Moscato bianco',
                'price' => 16.00,
                'visibility' => true,
                'restaurant_id' => 7
            ],
            [
                'name' => 'Insalata mista',
                'image' => 'https://www.calendariodelciboitaliano.it/wp-content/uploads/2017/07/insalatamistaheader1.jpg',
                'description' => 'Ciotola grande di insalata mista tutti i gusti più uno',
                'ingredients' => 'lattuga, pomodoro, cetriolo, olive nere',
                'type' => 'Contorno',
                'price' => 6.00,
                'visibility' => true,
                'restaurant_id' => 7
            ],
            [
                'name' => 'Tiramisù',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/5/58/Tiramisu_-_Raffaele_Diomede.jpg',
                'description' => 'Dolce al cucchiaio con savoiardi, mascarpone e caffè',
                'ingredients' => 'savoiardi, mascarpone, caffè',
                'type' => 'Dolce',
                'price' => 5.50,
                'visibility' => true,
                'restaurant_id' => 7
            ],
            [
                'name' => 'Vino Rosso',
                'image' => 'https://shop.tastefromabruzzo.com/wp-content/uploads/2021/01/Alarius-Montepulciano-Cioti.jpg',
                'description' => 'Bottiglia di Alarius Montepulciano d\'Abruzzo, denominazione di origine controllata',
                'ingredients' => 'Montepulciano d\'Abruzzo',
                'type' => 'Bevanda',
                'price' => 18.00,
                'visibility' => true,
                'restaurant_id' => 7
            ],
            [
                'name' => 'Risotto ai funghi porcini',
                'image' => 'https://i.pinimg.com/564x/39/0f/1e/390f1ea66d83518e5569c64357688edb.jpg',
                'description' => 'Il risotto con i funghi porcini freschi',
                'ingredients' => 'Riso, funghi porcini, brodo vegetale, cipolla, vino bianco, parmigiano',
                'type' => 'Primo',
                'price' => 14.00,
                'visibility' => true,
                'restaurant_id' => 7
            ],
            [
                'name' => 'Fritto misto di mare',
                'image' => 'https://i.pinimg.com/564x/a5/1c/cd/a51ccd4a71a38778a6f3d5ff3d54a9f6.jpg',
                'description' => 'Il fritto misto di mare con calamari, gamberi e scampi',
                'ingredients' => 'Calamari, gamberi, scampi',
                'type' => 'Secondo',
                'price' => 9.50,
                'visibility' => true,
                'restaurant_id' => 7
            ],
            [
                'name' => 'Zuppa di pesce',
                'image' => 'https://i.pinimg.com/564x/0f/86/38/0f86380725360dd6c28e630cc082c6f7.jpg',
                'description' => 'Zuppa di pesce accompagnata con crostini di pane casereccio',
                'ingredients' => 'Gamberi, seppie, prezzemolo',
                'type' => 'Primo',
                'price' => 11.00,
                'visibility' => false,
                'restaurant_id' => 7
            ],
            [
                'name' => 'Tagliata di carne',
                'image' => 'https://i.pinimg.com/564x/65/22/2e/65222e4c247b634055ae88532e879d71.jpg',
                'description' => 'Secondo piatto che si ottiene con una rapida cottura al sangue di un taglio di carne ben preciso',
                'ingredients' => 'entrecôte, costata di manzo, con o senza osso, fiorentina',
                'type' => 'Secondo',
                'price' => 20.90,
                'visibility' => true,
                'restaurant_id' => 7
            ],
            [
                'name' => 'Hamburger Panino',
                'image' => 'https://i.pinimg.com/564x/e2/b1/7c/e2b17cd05269aefaa4224c0a119ed5e6.jpg',
                'description' => 'Hamburger con doppio strato di carne',
                'ingredients' => 'Carne, cipolle caramellate, ketchup, cheddar, pomodoro, lattuga, pane al sesamo',
                'type' => 'Panino',
                'price' => 25.50,
                'visibility' => true,
                'restaurant_id' => 7
            ],
            [
                'name' => 'Spaghetti cacio e pepe',
                'image' => 'https://i.pinimg.com/564x/6b/6d/00/6b6d00588e6b305b543d8dafe42a0a06.jpg',
                'description' => 'Cremosissima pasta cacio e pepe',
                'ingredients' => 'Pasta, pepe, pecorino romano',
                'type' => 'Primo',
                'price' => 5.00,
                'visibility' => true,
                'restaurant_id' => 7
            ],
            [
                'name' => 'Parmigiana',
                'image' => 'https://i.pinimg.com/564x/d7/b2/c8/d7b2c8639165adaefe509e75ebe13615.jpg',
                'description' => 'Primo vegetariano con melanzane e mozzarella ',
                'ingredients' => 'Melanzane, mozzarella, pomodoro, parmigiano ',
                'type' => 'Antipasto',
                'price' => 7.90,
                'visibility' => true,
                'restaurant_id' => 7
            ],
            [
                'name' => 'Involtini di zucchine e salmone',
                'image' => 'https://i.pinimg.com/564x/45/00/a9/4500a95598ce655bd767563c0f877a38.jpg',
                'description' => 'Antipasto con zucchine grigliate e salmone',
                'ingredients' => 'Zucchine, salmone, Philadelphia',
                'type' => 'Secondo',
                'price' => 10.90,
                'visibility' => false,
                'restaurant_id' => 7
            ],
            [
                'name' => 'Cheesecake',
                'image' => 'https://i.pinimg.com/564x/6f/e1/c5/6fe1c5185ac0cb278416a3c6ad36fb3c.jpg',
                'description' => 'Dolce a cucchiaio con frutti di bosco',
                'ingredients' => 'Philadelphia, panna, frutti di bosco, vaniglia',
                'type' => 'Dolce',
                'price' => 7.60,
                'visibility' => true,
                'restaurant_id' => 7
            ],
            [
                'name' => 'Torta di Mele',
                'image' => 'https://i.pinimg.com/564x/b8/95/b8/b895b893646ef8e5b8d22db7361e2846.jpg',
                'description' => 'Classica torta di mele della nonna fatta in casa',
                'ingredients' => 'Mele, zucchero, burro, cannella',
                'type' => 'Dolce',
                'price' => 3.90,
                'visibility' => true,
                'restaurant_id' => 7
            ],
            [
                'name' => 'Patatine fritte',
                'image' => 'https://www.nonsprecare.it/wp-content/uploads/2022/04/ricetta-patatine-fritte.jpg',
                'description' => 'Patate tagliate a fette di forma allungata e fritte in olio bollente',
                'ingredients' => 'Patate',
                'type' => 'Contorno',
                'price' => 3.50,
                'visibility' => true,
                'restaurant_id' => 7
            ],
            [
                'name' => 'Sfogliata della casa',
                'image' => 'https://i.pinimg.com/564x/1c/cd/1d/1ccd1de6bfbdeeca85e0f1bd54abf284.jpg',
                'description' => 'Sfogliata con speck e mozzarella ',
                'ingredients' => 'sfoglia, speck, mortadella, rucola',
                'type' => 'Contorno',
                'price' => 4.90,
                'visibility' => true,
                'restaurant_id' => 7
            ],
            [
                'name' => 'Pizza con prosciutto crudo',
                'image' => 'https://i.pinimg.com/564x/6c/bb/0e/6cbb0e1ba8045da51f7dd7c649c17e0e.jpg',
                'description' => 'Pizza con prosciutto crudo',
                'ingredients' => 'farina, pomodoro, mozzarella, basilico, prosciutto crudo',
                'type' => 'Pizza',
                'price' => 7.50,
                'visibility' => true,
                'restaurant_id' => 7
            ],
            [
                'name' => 'Caprese',
                'image' => 'https://i.pinimg.com/564x/8e/e9/4e/8ee94e8275db673d40ed1ed01a897316.jpg',
                'description' => 'Piatto unico di insalata fresca, tipico della cucina napoletana',
                'ingredients' => 'pomodoro, mozzarella, basilico',
                'type' => 'Antipasto',
                'price' => 6,
                'visibility' => true,
                'restaurant_id' => 7
            ],
            [
                'name' => 'Mexican cheeseburgers',
                'image' => 'https://i.pinimg.com/564x/32/07/66/32076664aca03b56a25b64c29b360698.jpg',
                'description' => 'Il classico Panino Mexican cheeseburgers con carne di fassone e formaggio',
                'ingredients' => 'lattuga, carne di fassone, crema al guaiamole, pomodoro, formaggio',
                'type' => 'Panino',
                'price' => 10.50,
                'visibility' => true,
                'restaurant_id' => 7
            ],
            [
                'name' => 'Pizza Rucola & Speck',
                'image' => 'https://i.pinimg.com/564x/41/a6/84/41a684b0da336a9c348eb4c72dee78cc.jpg',
                'description' => 'Pizza con pomodorini secchi, rucola, speck',
                'ingredients' => 'pomodoro, mozzarella, basilico, pomodori secchi, rucola',
                'type' => 'Pizza',
                'price' => 8,
                'visibility' => true,
                'restaurant_id' => 7
            ],
            [
                'name' => 'Coca-Cola',
                'image' => 'https://i.pinimg.com/564x/19/74/9f/19749ff3f3b941efc53616f84230a56d.jpg',
                'description' => 'Coca Cola in bottiglia',
                'ingredients' => 'Acqua, anidride carbonica, zucchero, colorante caramello (E 150D), aromi naturali, caffeina e acido fosforico (E 338)',
                'type' => 'Bevanda',
                'price' => 3,
                'visibility' => true,
                'restaurant_id' => 7
            ],
            [
                'name' => 'Acqua naturale',
                'image' => 'https://i.pinimg.com/564x/2b/15/56/2b1556cef5dfa17f11930aae144c1e61.jpg',
                'description' => 'Acqua San Pellegrino',
                'ingredients' => 'Freschissima acqua delle sorgenti Monte San Pellegrino',
                'type' => 'Bevanda',
                'price' => 2,
                'visibility' => true,
                'restaurant_id' => 7
            ],
            // Piatti dell'ottavo ristorante
            [
                'name' => 'Pizza margherita',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/c/c8/Pizza_Margherita_stu_spivack.jpg',
                'description' => 'La classica Pizza margherita tipica Napoletana con pomodoro, mozzarella e basilico',
                'ingredients' => 'Farina, pomodoro, mozzarella, basilico',
                'type' => 'Pizza',
                'price' => 8.00,
                'visibility' => true,
                'restaurant_id' => 8
            ],
            [
                'name' => 'Spaghetti alla carbonara',
                'image' => 'https://blog.giallozafferano.it/graficareincucina/wp-content/uploads/2017/10/Carbonara-evidenza.png',
                'description' => 'I classici spaghetti alla carbonara tipica Romana con uova, guanciale e pecorino',
                'ingredients' => 'Spaghetti, uova, guanciale, pecorino',
                'type' => 'Primo',
                'price' => 10.50,
                'visibility' => true,
                'restaurant_id' => 8
            ],
            [
                'name' => 'Tagliatelle al ragù',
                'image' => 'https://i.pinimg.com/564x/3e/44/35/3e4435aac4fb65311d4454227d0360d4.jpg',
                'description' => 'Le tagliatelle fatte in casa con il ragù di carne',
                'ingredients' => 'Tagliatelle fatte in casa, carne macinata, pomodoro, carota, sedano, cipolla',
                'type' => 'Primo',
                'price' => 12.00,
                'visibility' => true,
                'restaurant_id' => 8
            ],
            [
                'name' => 'Bruschetta al pomodoro',
                'image' => 'https://i.pinimg.com/564x/bb/42/80/bb4280de62c397b550f61dfaefb50b58.jpg',
                'description' => 'Le bruschette cotte su fuoco a legna con pomodoro, aglio e basilico',
                'ingredients' => 'Pane, pomodoro, aglio, basilico',
                'type' => 'Antipasto',
                'price' => 4.50,
                'visibility' => true,
                'restaurant_id' => 8
            ],
            [
                'name' => 'Vino Bianco',
                'image' => 'https://i.pinimg.com/564x/f8/c0/a1/f8c0a1c2d3458a71c2d22bc89901743c.jpg',
                'description' => 'Pinot Grigio delle Venezzi 2010',
                'type' => 'Bevanda',
                'ingredients' => 'Moscato bianco',
                'price' => 16.00,
                'visibility' => true,
                'restaurant_id' => 8
            ],
            [
                'name' => 'Insalata mista',
                'image' => 'https://www.calendariodelciboitaliano.it/wp-content/uploads/2017/07/insalatamistaheader1.jpg',
                'description' => 'Ciotola grande di insalata mista tutti i gusti più uno',
                'ingredients' => 'lattuga, pomodoro, cetriolo, olive nere',
                'type' => 'Contorno',
                'price' => 6.00,
                'visibility' => true,
                'restaurant_id' => 8
            ],
            [
                'name' => 'Tiramisù',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/5/58/Tiramisu_-_Raffaele_Diomede.jpg',
                'description' => 'Dolce al cucchiaio con savoiardi, mascarpone e caffè',
                'ingredients' => 'savoiardi, mascarpone, caffè',
                'type' => 'Dolce',
                'price' => 5.50,
                'visibility' => true,
                'restaurant_id' => 8
            ],
            [
                'name' => 'Vino Rosso',
                'image' => 'https://shop.tastefromabruzzo.com/wp-content/uploads/2021/01/Alarius-Montepulciano-Cioti.jpg',
                'description' => 'Bottiglia di Alarius Montepulciano d\'Abruzzo, denominazione di origine controllata',
                'ingredients' => 'Montepulciano d\'Abruzzo',
                'type' => 'Bevanda',
                'price' => 18.00,
                'visibility' => true,
                'restaurant_id' => 8
            ],
            [
                'name' => 'Risotto ai funghi porcini',
                'image' => 'https://i.pinimg.com/564x/39/0f/1e/390f1ea66d83518e5569c64357688edb.jpg',
                'description' => 'Il risotto con i funghi porcini freschi',
                'ingredients' => 'Riso, funghi porcini, brodo vegetale, cipolla, vino bianco, parmigiano',
                'type' => 'Primo',
                'price' => 14.00,
                'visibility' => true,
                'restaurant_id' => 8
            ],
            [
                'name' => 'Fritto misto di mare',
                'image' => 'https://i.pinimg.com/564x/a5/1c/cd/a51ccd4a71a38778a6f3d5ff3d54a9f6.jpg',
                'description' => 'Il fritto misto di mare con calamari, gamberi e scampi',
                'ingredients' => 'Calamari, gamberi, scampi',
                'type' => 'Secondo',
                'price' => 9.50,
                'visibility' => true,
                'restaurant_id' => 8
            ],
            [
                'name' => 'Zuppa di pesce',
                'image' => 'https://i.pinimg.com/564x/0f/86/38/0f86380725360dd6c28e630cc082c6f7.jpg',
                'description' => 'Zuppa di pesce accompagnata con crostini di pane casereccio',
                'ingredients' => 'Gamberi, seppie, prezzemolo',
                'type' => 'Primo',
                'price' => 11.00,
                'visibility' => false,
                'restaurant_id' => 8
            ],
            [
                'name' => 'Tagliata di carne',
                'image' => 'https://i.pinimg.com/564x/65/22/2e/65222e4c247b634055ae88532e879d71.jpg',
                'description' => 'Secondo piatto che si ottiene con una rapida cottura al sangue di un taglio di carne ben preciso',
                'ingredients' => 'entrecôte, costata di manzo, con o senza osso, fiorentina',
                'type' => 'Secondo',
                'price' => 20.90,
                'visibility' => true,
                'restaurant_id' => 8
            ],
            [
                'name' => 'Hamburger Panino',
                'image' => 'https://i.pinimg.com/564x/e2/b1/7c/e2b17cd05269aefaa4224c0a119ed5e6.jpg',
                'description' => 'Hamburger con doppio strato di carne',
                'ingredients' => 'Carne, cipolle caramellate, ketchup, cheddar, pomodoro, lattuga, pane al sesamo',
                'type' => 'Panino',
                'price' => 25.50,
                'visibility' => true,
                'restaurant_id' => 8
            ],
            [
                'name' => 'Spaghetti cacio e pepe',
                'image' => 'https://i.pinimg.com/564x/6b/6d/00/6b6d00588e6b305b543d8dafe42a0a06.jpg',
                'description' => 'Cremosissima pasta cacio e pepe',
                'ingredients' => 'Pasta, pepe, pecorino romano',
                'type' => 'Primo',
                'price' => 5.00,
                'visibility' => true,
                'restaurant_id' => 8
            ],
            [
                'name' => 'Parmigiana',
                'image' => 'https://i.pinimg.com/564x/d7/b2/c8/d7b2c8639165adaefe509e75ebe13615.jpg',
                'description' => 'Primo vegetariano con melanzane e mozzarella ',
                'ingredients' => 'Melanzane, mozzarella, pomodoro, parmigiano ',
                'type' => 'Antipasto',
                'price' => 7.90,
                'visibility' => true,
                'restaurant_id' => 8
            ],
            [
                'name' => 'Involtini di zucchine e salmone',
                'image' => 'https://i.pinimg.com/564x/45/00/a9/4500a95598ce655bd767563c0f877a38.jpg',
                'description' => 'Antipasto con zucchine grigliate e salmone',
                'ingredients' => 'Zucchine, salmone, Philadelphia',
                'type' => 'Secondo',
                'price' => 10.90,
                'visibility' => false,
                'restaurant_id' => 8
            ],
            [
                'name' => 'Cheesecake',
                'image' => 'https://i.pinimg.com/564x/6f/e1/c5/6fe1c5185ac0cb278416a3c6ad36fb3c.jpg',
                'description' => 'Dolce a cucchiaio con frutti di bosco',
                'ingredients' => 'Philadelphia, panna, frutti di bosco, vaniglia',
                'type' => 'Dolce',
                'price' => 7.60,
                'visibility' => true,
                'restaurant_id' => 8
            ],
            [
                'name' => 'Torta di Mele',
                'image' => 'https://i.pinimg.com/564x/b8/95/b8/b895b893646ef8e5b8d22db7361e2846.jpg',
                'description' => 'Classica torta di mele della nonna fatta in casa',
                'ingredients' => 'Mele, zucchero, burro, cannella',
                'type' => 'Dolce',
                'price' => 3.90,
                'visibility' => true,
                'restaurant_id' => 8
            ],
            [
                'name' => 'Patatine fritte',
                'image' => 'https://www.nonsprecare.it/wp-content/uploads/2022/04/ricetta-patatine-fritte.jpg',
                'description' => 'Patate tagliate a fette di forma allungata e fritte in olio bollente',
                'ingredients' => 'Patate',
                'type' => 'Contorno',
                'price' => 3.50,
                'visibility' => true,
                'restaurant_id' => 8
            ],
            [
                'name' => 'Sfogliata della casa',
                'image' => 'https://i.pinimg.com/564x/1c/cd/1d/1ccd1de6bfbdeeca85e0f1bd54abf284.jpg',
                'description' => 'Sfogliata con speck e mozzarella ',
                'ingredients' => 'sfoglia, speck, mortadella, rucola',
                'type' => 'Contorno',
                'price' => 4.90,
                'visibility' => true,
                'restaurant_id' => 8
            ],
            [
                'name' => 'Pizza con prosciutto crudo',
                'image' => 'https://i.pinimg.com/564x/6c/bb/0e/6cbb0e1ba8045da51f7dd7c649c17e0e.jpg',
                'description' => 'Pizza con prosciutto crudo',
                'ingredients' => 'farina, pomodoro, mozzarella, basilico, prosciutto crudo',
                'type' => 'Pizza',
                'price' => 7.50,
                'visibility' => true,
                'restaurant_id' => 8
            ],
            [
                'name' => 'Caprese',
                'image' => 'https://i.pinimg.com/564x/8e/e9/4e/8ee94e8275db673d40ed1ed01a897316.jpg',
                'description' => 'Piatto unico di insalata fresca, tipico della cucina napoletana',
                'ingredients' => 'pomodoro, mozzarella, basilico',
                'type' => 'Antipasto',
                'price' => 6,
                'visibility' => true,
                'restaurant_id' => 8
            ],
            [
                'name' => 'Mexican cheeseburgers',
                'image' => 'https://i.pinimg.com/564x/32/07/66/32076664aca03b56a25b64c29b360698.jpg',
                'description' => 'Il classico Panino Mexican cheeseburgers con carne di fassone e formaggio',
                'ingredients' => 'lattuga, carne di fassone, crema al guaiamole, pomodoro, formaggio',
                'type' => 'Panino',
                'price' => 10.50,
                'visibility' => true,
                'restaurant_id' => 8
            ],
            [
                'name' => 'Pizza Rucola & Speck',
                'image' => 'https://i.pinimg.com/564x/41/a6/84/41a684b0da336a9c348eb4c72dee78cc.jpg',
                'description' => 'Pizza con pomodorini secchi, rucola, speck',
                'ingredients' => 'pomodoro, mozzarella, basilico, pomodori secchi, rucola',
                'type' => 'Pizza',
                'price' => 8,
                'visibility' => true,
                'restaurant_id' => 8
            ],
            [
                'name' => 'Coca-Cola',
                'image' => 'https://i.pinimg.com/564x/19/74/9f/19749ff3f3b941efc53616f84230a56d.jpg',
                'description' => 'Coca Cola in bottiglia',
                'ingredients' => 'Acqua, anidride carbonica, zucchero, colorante caramello (E 150D), aromi naturali, caffeina e acido fosforico (E 338)',
                'type' => 'Bevanda',
                'price' => 3,
                'visibility' => true,
                'restaurant_id' => 8
            ],
            [
                'name' => 'Acqua naturale',
                'image' => 'https://i.pinimg.com/564x/2b/15/56/2b1556cef5dfa17f11930aae144c1e61.jpg',
                'description' => 'Acqua San Pellegrino',
                'ingredients' => 'Freschissima acqua delle sorgenti Monte San Pellegrino',
                'type' => 'Bevanda',
                'price' => 2,
                'visibility' => true,
                'restaurant_id' => 8
            ],
            // Piatti del nono ristorante
            [
                'name' => 'Pizza margherita',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/c/c8/Pizza_Margherita_stu_spivack.jpg',
                'description' => 'La classica Pizza margherita tipica Napoletana con pomodoro, mozzarella e basilico',
                'ingredients' => 'Farina, pomodoro, mozzarella, basilico',
                'type' => 'Pizza',
                'price' => 8.00,
                'visibility' => true,
                'restaurant_id' => 9
            ],
            [
                'name' => 'Spaghetti alla carbonara',
                'image' => 'https://blog.giallozafferano.it/graficareincucina/wp-content/uploads/2017/10/Carbonara-evidenza.png',
                'description' => 'I classici spaghetti alla carbonara tipica Romana con uova, guanciale e pecorino',
                'ingredients' => 'Spaghetti, uova, guanciale, pecorino',
                'type' => 'Primo',
                'price' => 10.50,
                'visibility' => true,
                'restaurant_id' => 9
            ],
            [
                'name' => 'Tagliatelle al ragù',
                'image' => 'https://i.pinimg.com/564x/3e/44/35/3e4435aac4fb65311d4454227d0360d4.jpg',
                'description' => 'Le tagliatelle fatte in casa con il ragù di carne',
                'ingredients' => 'Tagliatelle fatte in casa, carne macinata, pomodoro, carota, sedano, cipolla',
                'type' => 'Primo',
                'price' => 12.00,
                'visibility' => true,
                'restaurant_id' => 9
            ],
            [
                'name' => 'Bruschetta al pomodoro',
                'image' => 'https://i.pinimg.com/564x/bb/42/80/bb4280de62c397b550f61dfaefb50b58.jpg',
                'description' => 'Le bruschette cotte su fuoco a legna con pomodoro, aglio e basilico',
                'ingredients' => 'Pane, pomodoro, aglio, basilico',
                'type' => 'Antipasto',
                'price' => 4.50,
                'visibility' => true,
                'restaurant_id' => 9
            ],
            [
                'name' => 'Vino Bianco',
                'image' => 'https://i.pinimg.com/564x/f8/c0/a1/f8c0a1c2d3458a71c2d22bc89901743c.jpg',
                'description' => 'Pinot Grigio delle Venezzi 2010',
                'type' => 'Bevanda',
                'ingredients' => 'Moscato bianco',
                'price' => 16.00,
                'visibility' => true,
                'restaurant_id' => 9
            ],
            [
                'name' => 'Insalata mista',
                'image' => 'https://www.calendariodelciboitaliano.it/wp-content/uploads/2017/07/insalatamistaheader1.jpg',
                'description' => 'Ciotola grande di insalata mista tutti i gusti più uno',
                'ingredients' => 'lattuga, pomodoro, cetriolo, olive nere',
                'type' => 'Contorno',
                'price' => 6.00,
                'visibility' => true,
                'restaurant_id' => 9
            ],
            [
                'name' => 'Tiramisù',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/5/58/Tiramisu_-_Raffaele_Diomede.jpg',
                'description' => 'Dolce al cucchiaio con savoiardi, mascarpone e caffè',
                'ingredients' => 'savoiardi, mascarpone, caffè',
                'type' => 'Dolce',
                'price' => 5.50,
                'visibility' => true,
                'restaurant_id' => 9
            ],
            [
                'name' => 'Vino Rosso',
                'image' => 'https://shop.tastefromabruzzo.com/wp-content/uploads/2021/01/Alarius-Montepulciano-Cioti.jpg',
                'description' => 'Bottiglia di Alarius Montepulciano d\'Abruzzo, denominazione di origine controllata',
                'ingredients' => 'Montepulciano d\'Abruzzo',
                'type' => 'Bevanda',
                'price' => 18.00,
                'visibility' => true,
                'restaurant_id' => 9
            ],
            [
                'name' => 'Risotto ai funghi porcini',
                'image' => 'https://i.pinimg.com/564x/39/0f/1e/390f1ea66d83518e5569c64357688edb.jpg',
                'description' => 'Il risotto con i funghi porcini freschi',
                'ingredients' => 'Riso, funghi porcini, brodo vegetale, cipolla, vino bianco, parmigiano',
                'type' => 'Primo',
                'price' => 14.00,
                'visibility' => true,
                'restaurant_id' => 9
            ],
            [
                'name' => 'Fritto misto di mare',
                'image' => 'https://i.pinimg.com/564x/a5/1c/cd/a51ccd4a71a38778a6f3d5ff3d54a9f6.jpg',
                'description' => 'Il fritto misto di mare con calamari, gamberi e scampi',
                'ingredients' => 'Calamari, gamberi, scampi',
                'type' => 'Secondo',
                'price' => 9.50,
                'visibility' => true,
                'restaurant_id' => 9
            ],
            [
                'name' => 'Zuppa di pesce',
                'image' => 'https://i.pinimg.com/564x/0f/86/38/0f86380725360dd6c28e630cc082c6f7.jpg',
                'description' => 'Zuppa di pesce accompagnata con crostini di pane casereccio',
                'ingredients' => 'Gamberi, seppie, prezzemolo',
                'type' => 'Primo',
                'price' => 11.00,
                'visibility' => false,
                'restaurant_id' => 9
            ],
            [
                'name' => 'Tagliata di carne',
                'image' => 'https://i.pinimg.com/564x/65/22/2e/65222e4c247b634055ae88532e879d71.jpg',
                'description' => 'Secondo piatto che si ottiene con una rapida cottura al sangue di un taglio di carne ben preciso',
                'ingredients' => 'entrecôte, costata di manzo, con o senza osso, fiorentina',
                'type' => 'Secondo',
                'price' => 20.90,
                'visibility' => true,
                'restaurant_id' => 9
            ],
            [
                'name' => 'Hamburger Panino',
                'image' => 'https://i.pinimg.com/564x/e2/b1/7c/e2b17cd05269aefaa4224c0a119ed5e6.jpg',
                'description' => 'Hamburger con doppio strato di carne',
                'ingredients' => 'Carne, cipolle caramellate, ketchup, cheddar, pomodoro, lattuga, pane al sesamo',
                'type' => 'Panino',
                'price' => 25.50,
                'visibility' => true,
                'restaurant_id' => 9
            ],
            [
                'name' => 'Spaghetti cacio e pepe',
                'image' => 'https://i.pinimg.com/564x/6b/6d/00/6b6d00588e6b305b543d8dafe42a0a06.jpg',
                'description' => 'Cremosissima pasta cacio e pepe',
                'ingredients' => 'Pasta, pepe, pecorino romano',
                'type' => 'Primo',
                'price' => 5.00,
                'visibility' => true,
                'restaurant_id' => 9
            ],
            [
                'name' => 'Parmigiana',
                'image' => 'https://i.pinimg.com/564x/d7/b2/c8/d7b2c8639165adaefe509e75ebe13615.jpg',
                'description' => 'Primo vegetariano con melanzane e mozzarella ',
                'ingredients' => 'Melanzane, mozzarella, pomodoro, parmigiano ',
                'type' => 'Antipasto',
                'price' => 7.90,
                'visibility' => true,
                'restaurant_id' => 9
            ],
            [
                'name' => 'Involtini di zucchine e salmone',
                'image' => 'https://i.pinimg.com/564x/45/00/a9/4500a95598ce655bd767563c0f877a38.jpg',
                'description' => 'Antipasto con zucchine grigliate e salmone',
                'ingredients' => 'Zucchine, salmone, Philadelphia',
                'type' => 'Secondo',
                'price' => 10.90,
                'visibility' => false,
                'restaurant_id' => 9
            ],
            [
                'name' => 'Cheesecake',
                'image' => 'https://i.pinimg.com/564x/6f/e1/c5/6fe1c5185ac0cb278416a3c6ad36fb3c.jpg',
                'description' => 'Dolce a cucchiaio con frutti di bosco',
                'ingredients' => 'Philadelphia, panna, frutti di bosco, vaniglia',
                'type' => 'Dolce',
                'price' => 7.60,
                'visibility' => true,
                'restaurant_id' => 9
            ],
            [
                'name' => 'Torta di Mele',
                'image' => 'https://i.pinimg.com/564x/b8/95/b8/b895b893646ef8e5b8d22db7361e2846.jpg',
                'description' => 'Classica torta di mele della nonna fatta in casa',
                'ingredients' => 'Mele, zucchero, burro, cannella',
                'type' => 'Dolce',
                'price' => 3.90,
                'visibility' => true,
                'restaurant_id' => 9
            ],
            [
                'name' => 'Patatine fritte',
                'image' => 'https://www.nonsprecare.it/wp-content/uploads/2022/04/ricetta-patatine-fritte.jpg',
                'description' => 'Patate tagliate a fette di forma allungata e fritte in olio bollente',
                'ingredients' => 'Patate',
                'type' => 'Contorno',
                'price' => 3.50,
                'visibility' => true,
                'restaurant_id' => 9
            ],
            [
                'name' => 'Sfogliata della casa',
                'image' => 'https://i.pinimg.com/564x/1c/cd/1d/1ccd1de6bfbdeeca85e0f1bd54abf284.jpg',
                'description' => 'Sfogliata con speck e mozzarella ',
                'ingredients' => 'sfoglia, speck, mortadella, rucola',
                'type' => 'Contorno',
                'price' => 4.90,
                'visibility' => true,
                'restaurant_id' => 9
            ],
            [
                'name' => 'Pizza con prosciutto crudo',
                'image' => 'https://i.pinimg.com/564x/6c/bb/0e/6cbb0e1ba8045da51f7dd7c649c17e0e.jpg',
                'description' => 'Pizza con prosciutto crudo',
                'ingredients' => 'farina, pomodoro, mozzarella, basilico, prosciutto crudo',
                'type' => 'Pizza',
                'price' => 7.50,
                'visibility' => true,
                'restaurant_id' => 9
            ],
            [
                'name' => 'Caprese',
                'image' => 'https://i.pinimg.com/564x/8e/e9/4e/8ee94e8275db673d40ed1ed01a897316.jpg',
                'description' => 'Piatto unico di insalata fresca, tipico della cucina napoletana',
                'ingredients' => 'pomodoro, mozzarella, basilico',
                'type' => 'Antipasto',
                'price' => 6,
                'visibility' => true,
                'restaurant_id' => 9
            ],
            [
                'name' => 'Mexican cheeseburgers',
                'image' => 'https://i.pinimg.com/564x/32/07/66/32076664aca03b56a25b64c29b360698.jpg',
                'description' => 'Il classico Panino Mexican cheeseburgers con carne di fassone e formaggio',
                'ingredients' => 'lattuga, carne di fassone, crema al guaiamole, pomodoro, formaggio',
                'type' => 'Panino',
                'price' => 10.50,
                'visibility' => true,
                'restaurant_id' => 9
            ],
            [
                'name' => 'Pizza Rucola & Speck',
                'image' => 'https://i.pinimg.com/564x/41/a6/84/41a684b0da336a9c348eb4c72dee78cc.jpg',
                'description' => 'Pizza con pomodorini secchi, rucola, speck',
                'ingredients' => 'pomodoro, mozzarella, basilico, pomodori secchi, rucola',
                'type' => 'Pizza',
                'price' => 8,
                'visibility' => true,
                'restaurant_id' => 9
            ],
            [
                'name' => 'Coca-Cola',
                'image' => 'https://i.pinimg.com/564x/19/74/9f/19749ff3f3b941efc53616f84230a56d.jpg',
                'description' => 'Coca Cola in bottiglia',
                'ingredients' => 'Acqua, anidride carbonica, zucchero, colorante caramello (E 150D), aromi naturali, caffeina e acido fosforico (E 338)',
                'type' => 'Bevanda',
                'price' => 3,
                'visibility' => true,
                'restaurant_id' => 9
            ],
            [
                'name' => 'Acqua naturale',
                'image' => 'https://i.pinimg.com/564x/2b/15/56/2b1556cef5dfa17f11930aae144c1e61.jpg',
                'description' => 'Acqua San Pellegrino',
                'ingredients' => 'Freschissima acqua delle sorgenti Monte San Pellegrino',
                'type' => 'Bevanda',
                'price' => 2,
                'visibility' => true,
                'restaurant_id' => 9
            ],
            // Piatti del decimo ristorante
            [
                'name' => 'Pizza margherita',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/c/c8/Pizza_Margherita_stu_spivack.jpg',
                'description' => 'La classica Pizza margherita tipica Napoletana con pomodoro, mozzarella e basilico',
                'ingredients' => 'Farina, pomodoro, mozzarella, basilico',
                'type' => 'Pizza',
                'price' => 8.00,
                'visibility' => true,
                'restaurant_id' => 10
            ],
            [
                'name' => 'Spaghetti alla carbonara',
                'image' => 'https://blog.giallozafferano.it/graficareincucina/wp-content/uploads/2017/10/Carbonara-evidenza.png',
                'description' => 'I classici spaghetti alla carbonara tipica Romana con uova, guanciale e pecorino',
                'ingredients' => 'Spaghetti, uova, guanciale, pecorino',
                'type' => 'Primo',
                'price' => 10.50,
                'visibility' => true,
                'restaurant_id' => 10
            ],
            [
                'name' => 'Tagliatelle al ragù',
                'image' => 'https://i.pinimg.com/564x/3e/44/35/3e4435aac4fb65311d4454227d0360d4.jpg',
                'description' => 'Le tagliatelle fatte in casa con il ragù di carne',
                'ingredients' => 'Tagliatelle fatte in casa, carne macinata, pomodoro, carota, sedano, cipolla',
                'type' => 'Primo',
                'price' => 12.00,
                'visibility' => true,
                'restaurant_id' => 10
            ],
            [
                'name' => 'Bruschetta al pomodoro',
                'image' => 'https://i.pinimg.com/564x/bb/42/80/bb4280de62c397b550f61dfaefb50b58.jpg',
                'description' => 'Le bruschette cotte su fuoco a legna con pomodoro, aglio e basilico',
                'ingredients' => 'Pane, pomodoro, aglio, basilico',
                'type' => 'Antipasto',
                'price' => 4.50,
                'visibility' => true,
                'restaurant_id' => 10
            ],
            [
                'name' => 'Vino Bianco',
                'image' => 'https://i.pinimg.com/564x/f8/c0/a1/f8c0a1c2d3458a71c2d22bc89901743c.jpg',
                'description' => 'Pinot Grigio delle Venezzi 2010',
                'type' => 'Bevanda',
                'ingredients' => 'Moscato bianco',
                'price' => 16.00,
                'visibility' => true,
                'restaurant_id' => 10
            ],
            [
                'name' => 'Insalata mista',
                'image' => 'https://www.calendariodelciboitaliano.it/wp-content/uploads/2017/07/insalatamistaheader1.jpg',
                'description' => 'Ciotola grande di insalata mista tutti i gusti più uno',
                'ingredients' => 'lattuga, pomodoro, cetriolo, olive nere',
                'type' => 'Contorno',
                'price' => 6.00,
                'visibility' => true,
                'restaurant_id' => 10
            ],
            [
                'name' => 'Tiramisù',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/5/58/Tiramisu_-_Raffaele_Diomede.jpg',
                'description' => 'Dolce al cucchiaio con savoiardi, mascarpone e caffè',
                'ingredients' => 'savoiardi, mascarpone, caffè',
                'type' => 'Dolce',
                'price' => 5.50,
                'visibility' => true,
                'restaurant_id' => 10
            ],
            [
                'name' => 'Vino Rosso',
                'image' => 'https://shop.tastefromabruzzo.com/wp-content/uploads/2021/01/Alarius-Montepulciano-Cioti.jpg',
                'description' => 'Bottiglia di Alarius Montepulciano d\'Abruzzo, denominazione di origine controllata',
                'ingredients' => 'Montepulciano d\'Abruzzo',
                'type' => 'Bevanda',
                'price' => 18.00,
                'visibility' => true,
                'restaurant_id' => 10
            ],
            [
                'name' => 'Risotto ai funghi porcini',
                'image' => 'https://i.pinimg.com/564x/39/0f/1e/390f1ea66d83518e5569c64357688edb.jpg',
                'description' => 'Il risotto con i funghi porcini freschi',
                'ingredients' => 'Riso, funghi porcini, brodo vegetale, cipolla, vino bianco, parmigiano',
                'type' => 'Primo',
                'price' => 14.00,
                'visibility' => true,
                'restaurant_id' => 10
            ],
            [
                'name' => 'Fritto misto di mare',
                'image' => 'https://i.pinimg.com/564x/a5/1c/cd/a51ccd4a71a38778a6f3d5ff3d54a9f6.jpg',
                'description' => 'Il fritto misto di mare con calamari, gamberi e scampi',
                'ingredients' => 'Calamari, gamberi, scampi',
                'type' => 'Secondo',
                'price' => 9.50,
                'visibility' => true,
                'restaurant_id' => 10
            ],
            [
                'name' => 'Zuppa di pesce',
                'image' => 'https://i.pinimg.com/564x/0f/86/38/0f86380725360dd6c28e630cc082c6f7.jpg',
                'description' => 'Zuppa di pesce accompagnata con crostini di pane casereccio',
                'ingredients' => 'Gamberi, seppie, prezzemolo',
                'type' => 'Primo',
                'price' => 11.00,
                'visibility' => false,
                'restaurant_id' => 10
            ],
            [
                'name' => 'Tagliata di carne',
                'image' => 'https://i.pinimg.com/564x/65/22/2e/65222e4c247b634055ae88532e879d71.jpg',
                'description' => 'Secondo piatto che si ottiene con una rapida cottura al sangue di un taglio di carne ben preciso',
                'ingredients' => 'entrecôte, costata di manzo, con o senza osso, fiorentina',
                'type' => 'Secondo',
                'price' => 20.90,
                'visibility' => true,
                'restaurant_id' => 10
            ],
            [
                'name' => 'Hamburger Panino',
                'image' => 'https://i.pinimg.com/564x/e2/b1/7c/e2b17cd05269aefaa4224c0a119ed5e6.jpg',
                'description' => 'Hamburger con doppio strato di carne',
                'ingredients' => 'Carne, cipolle caramellate, ketchup, cheddar, pomodoro, lattuga, pane al sesamo',
                'type' => 'Panino',
                'price' => 25.50,
                'visibility' => true,
                'restaurant_id' => 10
            ],
            [
                'name' => 'Spaghetti cacio e pepe',
                'image' => 'https://i.pinimg.com/564x/6b/6d/00/6b6d00588e6b305b543d8dafe42a0a06.jpg',
                'description' => 'Cremosissima pasta cacio e pepe',
                'ingredients' => 'Pasta, pepe, pecorino romano',
                'type' => 'Primo',
                'price' => 5.00,
                'visibility' => true,
                'restaurant_id' => 10
            ],
            [
                'name' => 'Parmigiana',
                'image' => 'https://i.pinimg.com/564x/d7/b2/c8/d7b2c8639165adaefe509e75ebe13615.jpg',
                'description' => 'Primo vegetariano con melanzane e mozzarella ',
                'ingredients' => 'Melanzane, mozzarella, pomodoro, parmigiano ',
                'type' => 'Antipasto',
                'price' => 7.90,
                'visibility' => true,
                'restaurant_id' => 10
            ],
            [
                'name' => 'Involtini di zucchine e salmone',
                'image' => 'https://i.pinimg.com/564x/45/00/a9/4500a95598ce655bd767563c0f877a38.jpg',
                'description' => 'Antipasto con zucchine grigliate e salmone',
                'ingredients' => 'Zucchine, salmone, Philadelphia',
                'type' => 'Secondo',
                'price' => 10.90,
                'visibility' => false,
                'restaurant_id' => 10
            ],
            [
                'name' => 'Cheesecake',
                'image' => 'https://i.pinimg.com/564x/6f/e1/c5/6fe1c5185ac0cb278416a3c6ad36fb3c.jpg',
                'description' => 'Dolce a cucchiaio con frutti di bosco',
                'ingredients' => 'Philadelphia, panna, frutti di bosco, vaniglia',
                'type' => 'Dolce',
                'price' => 7.60,
                'visibility' => true,
                'restaurant_id' => 10
            ],
            [
                'name' => 'Torta di Mele',
                'image' => 'https://i.pinimg.com/564x/b8/95/b8/b895b893646ef8e5b8d22db7361e2846.jpg',
                'description' => 'Classica torta di mele della nonna fatta in casa',
                'ingredients' => 'Mele, zucchero, burro, cannella',
                'type' => 'Dolce',
                'price' => 3.90,
                'visibility' => true,
                'restaurant_id' => 10
            ],
            [
                'name' => 'Patatine fritte',
                'image' => 'https://www.nonsprecare.it/wp-content/uploads/2022/04/ricetta-patatine-fritte.jpg',
                'description' => 'Patate tagliate a fette di forma allungata e fritte in olio bollente',
                'ingredients' => 'Patate',
                'type' => 'Contorno',
                'price' => 3.50,
                'visibility' => true,
                'restaurant_id' => 10
            ],
            [
                'name' => 'Sfogliata della casa',
                'image' => 'https://i.pinimg.com/564x/1c/cd/1d/1ccd1de6bfbdeeca85e0f1bd54abf284.jpg',
                'description' => 'Sfogliata con speck e mozzarella ',
                'ingredients' => 'sfoglia, speck, mortadella, rucola',
                'type' => 'Contorno',
                'price' => 4.90,
                'visibility' => true,
                'restaurant_id' => 10
            ],
            [
                'name' => 'Pizza con prosciutto crudo',
                'image' => 'https://i.pinimg.com/564x/6c/bb/0e/6cbb0e1ba8045da51f7dd7c649c17e0e.jpg',
                'description' => 'Pizza con prosciutto crudo',
                'ingredients' => 'farina, pomodoro, mozzarella, basilico, prosciutto crudo',
                'type' => 'Pizza',
                'price' => 7.50,
                'visibility' => true,
                'restaurant_id' => 10
            ],
            [
                'name' => 'Caprese',
                'image' => 'https://i.pinimg.com/564x/8e/e9/4e/8ee94e8275db673d40ed1ed01a897316.jpg',
                'description' => 'Piatto unico di insalata fresca, tipico della cucina napoletana',
                'ingredients' => 'pomodoro, mozzarella, basilico',
                'type' => 'Antipasto',
                'price' => 6,
                'visibility' => true,
                'restaurant_id' => 10
            ],
            [
                'name' => 'Mexican cheeseburgers',
                'image' => 'https://i.pinimg.com/564x/32/07/66/32076664aca03b56a25b64c29b360698.jpg',
                'description' => 'Il classico Panino Mexican cheeseburgers con carne di fassone e formaggio',
                'ingredients' => 'lattuga, carne di fassone, crema al guaiamole, pomodoro, formaggio',
                'type' => 'Panino',
                'price' => 10.50,
                'visibility' => true,
                'restaurant_id' => 10
            ],
            [
                'name' => 'Pizza Rucola & Speck',
                'image' => 'https://i.pinimg.com/564x/41/a6/84/41a684b0da336a9c348eb4c72dee78cc.jpg',
                'description' => 'Pizza con pomodorini secchi, rucola, speck',
                'ingredients' => 'pomodoro, mozzarella, basilico, pomodori secchi, rucola',
                'type' => 'Pizza',
                'price' => 8,
                'visibility' => true,
                'restaurant_id' => 10
            ],
            [
                'name' => 'Coca-Cola',
                'image' => 'https://i.pinimg.com/564x/19/74/9f/19749ff3f3b941efc53616f84230a56d.jpg',
                'description' => 'Coca Cola in bottiglia',
                'ingredients' => 'Acqua, anidride carbonica, zucchero, colorante caramello (E 150D), aromi naturali, caffeina e acido fosforico (E 338)',
                'type' => 'Bevanda',
                'price' => 3,
                'visibility' => true,
                'restaurant_id' => 10
            ],
            [
                'name' => 'Acqua naturale',
                'image' => 'https://i.pinimg.com/564x/2b/15/56/2b1556cef5dfa17f11930aae144c1e61.jpg',
                'description' => 'Acqua San Pellegrino',
                'ingredients' => 'Freschissima acqua delle sorgenti Monte San Pellegrino',
                'type' => 'Bevanda',
                'price' => 2,
                'visibility' => true,
                'restaurant_id' => 10
            ],
        ];

        // Ciclo sui piatti e li inserisco nella tabella "dishes"
        foreach ($dishes as $dish) {
            Dish::create($dish);
        }
    }
}