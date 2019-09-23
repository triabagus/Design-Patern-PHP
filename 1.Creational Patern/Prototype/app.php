<?php

// Make Object store
$store1 = new Store("Toko A", "Jakarta", "Indonesia", "Gadget");
$store2 = new Store("Toko B", "Jakarta", "Indonesia", "Gadget");
$store3 = new Store("Toko C", "Bandung", "Indonesia", "Gadget");
$store4 = new Store("Toko D", "Jakarta", "Indonesia", "Fashion");
/**
 * Seperti biasa kalau kita buat object kayak gini namun kalau dilihat isi dari object tersebut 
 * ada beberapa value yang sama, ada gak yah caranya agar kita tidak menggulang value object yang
 * sama. 
 */

// Kalau manual sih bisa seperti ini script nya. Namun problemnya yah kita capek karena manual gitu.
$store1 = new Store("Toko A", "Jakarta", "Indonesia", "Gadget");
$store2 = new Store("Toko B", $store1->getcity(), $store1->getCountry(), $store1->getCategory());
$store3 = new Store("Toko C", "Bandung", $store1->getCountry(), $store1->getCategory());
$store4 = new Store("Toko D", $store3->getCity(), $store3->getCity(), "Fashion");
// Dengan begini kita bisa ambil attribute object dengan clone object. Adapun cara kita buat method clone in store.php

/**
 * Adapun hasil dari kita membuat method clone seperti ini. 
 * Jadi kita tidak perlu menggulang terlalu banyak.
 * */ 
$store1 = new Store("Toko A", "Jakarta", "Indonesia", "Gadget");
$store2 = $store1->clone();
$store2->setName("Toko B");

$store3 = $store1->clone();
$store3->setName("Toko C");
$store3->getcity("Bandung");

$store4 = $store3->clone();
$store4->getName("Toko D");
$store4->getCategory("Fashion");