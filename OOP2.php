<?php
// auteur: Daniel Kuiper

class Product {
    public $name = "Een bepaalde frisdrank.";
}


$frisdrank1 = new Product();
$frisdrank1->name = "Coca Cola";

$frisdrank2 = new Product();
$frisdrank2->name = "Pepsi";

$frisdrank3 = new Product();
$frisdrank3->name = "7UP";

$frisdrank4 = new Product();
$frisdrank4->name = "Freeway";
var_dump($frisdrank1, $frisdrank2, $frisdrank3, $frisdrank4);

echo $frisdrank1->name."<br>";
echo $frisdrank2->name."<br>";
echo $frisdrank3->name."<br><br>";

$frisdrank4->name = "Fernandes";
echo $frisdrank4->name."<br>";
?>