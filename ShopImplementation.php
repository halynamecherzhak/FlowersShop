<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/16/2018
 * Time: 9:30 PM
 */

require_once ("Models/shop.php");
require_once ("Models/flowers.php");
require_once ("Models/flowerpot.php");

$shopList = array(
    new Shop("FirstShop", array(
                                    new Flowers("rose",  "red", "15", 10, 10),
                                    new FlowerPot("orhidea", "green","50UAH", 20)
                                )
            ),
    new Shop("SecondShop", array(
                                    new Flowers("tulip",  "yellow", "15", 10, 10),
                                    new FlowerPot("astromerija", "pink","50", 20)
                                       )
    )
);

foreach($shopList as $value) {
    echo $value->GetName().PHP_EOL;
    foreach ($value->Flowers() as $flower)
    {
        echo $flower->getName().PHP_EOL;
        echo $flower->totalPrice().PHP_EOL;
        echo $flower->describe().PHP_EOL;
    }
}
?>