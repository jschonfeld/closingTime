<?php
//$arr = array ('item1'=>"I love jquery4u",'item2'=>"You love jQuery4u",'item3'=>"We love jQuery4u");
//echo json_encode($arr);


class Store
{
  public $name;
    public $title;
    public $img;
}

$starbucks = new Store();
$starbucks->name = 'starbucks';
$starbucks->title = 'Starbucks';
$starbucks->img = 'logos/fast_food/starbucks.gif';
$starbucks->open = 'open';

$burger_king= new Store();	
$burger_king->name = 'burger king';
$burger_king->title = 'Burger King';
$burger_king->img = 'logos/fast_food/burger_king.gif';
$burger_king->open = 'open';

$chick_fil_a= new Store();	
$chick_fil_a->name = 'chick-fil-a';
$chick_fil_a->title = 'Chick_Fil_A';
$chick_fil_a->img = 'logos/fast_food/chick_fil_a.gif';
$chick_fil_a->open = 'open';


$chipotle= new Store();	
$chipotle->name = 'chipotle';
$chipotle->title = 'Chipotle';
$chipotle->img = 'logos/fast_food/chipotle.png';
$chipotle->open = 'open';

$dominos = new Store();	
$dominos->name = 'dominos';
$dominos->title = 'Dominos';
$dominos->img = 'logos/fast_food/dominos.gif';
$dominos->open = 'open';

$jack_in_the_box= new Store();	
$jack_in_the_box->name = 'jack in the box';
$jack_in_the_box->title = 'Jack In The Box';
$jack_in_the_box->img = 'logos/fast_food/jack_in_the_box.png';
$jack_in_the_box->open = 'closed';

$kfc= new Store();	
$kfc->name = 'kentucky fried chicken';
$kfc->title = 'Kentucky Fried Chicken';
$kfc->img = 'logos/fast_food/kfc.gif';
$kfc->open = 'open';

$pizza_hut = new Store();	
$pizza_hut->name = 'pizza_hut';
$pizza_hut->title = 'Pizza Hut';
$pizza_hut->img = 'logos/fast_food/pizza_hut.gif';
$pizza_hut->open = 'open';

$mcdonalds= new Store();	
$mcdonalds->name = 'mcdonalds';
$mcdonalds->title = 'Mcdonalds';
$mcdonalds->img = 'logos/fast_food/mcdonalds.gif';
$mcdonalds->open = 'open';

$panera_bread= new Store();	
$panera_bread->name = 'panera bread';
$panera_bread->title = 'Panera Bread';
$panera_bread->img = 'logos/fast_food/panera_bread.gif';
$panera_bread->open = 'open';

$dunkin_donuts = new Store();	
$dunkin_donuts->name = 'dunkin_donuts';
$dunkin_donuts->title = 'Dunkin Donuts';
$dunkin_donuts->img = 'logos/fast_food/dunkin_donuts.gif';
$dunkin_donuts->open = 'open';

$sonic= new Store();	
$sonic->name = 'sonic drive in';
$sonic->title = 'Sonic Drive In';
$sonic->img = 'logos/fast_food/sonic.gif';
$sonic->open = 'open';

$subway= new Store();	
$subway->name = 'subway';
$subway->title = 'Subway';
$subway->img = 'logos/fast_food/subway.gif';
$subway->open = 'open';

$stores = array($starbucks, $burger_king, $chick_fil_a, $chipotle, $dominos, $jack_in_the_box, $kfc, $pizza_hut, $mcdonalds, $panera_bread, $sonic, $subway, /*$dunkin_donuts */);

echo json_encode($stores);

?>
