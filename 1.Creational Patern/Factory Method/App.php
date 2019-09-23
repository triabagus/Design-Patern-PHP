<?php
// Make object employee with title manager atau staff

// Begini bisa namun kalau title kan terbatas alangkah baiknya kalau kita menggunakan Factory Method untuk membuat object employee nya.
// Dan Gak harus Manual seperti ini
$manager1 = new Employee("Tria","Manager",1000000);
$manager2 = new Employee("Bagus","Manager",1000000);

$staff1   = new Employee("Joko","Staff",500000);
$staff2   = new Employee("Heri","Staff",500000);

// Make object with EmployeeFactory
$manager1 = EmployeeFactory::createManager("Tria");
$manager1 = EmployeeFactory::createManager("Bagus");

$staff1   = EmployeeFactory::createStaff("Joko");
$staff2   = EmployeeFactory::createStaff("Heri");


// Make Object Animal
// Begini sih gak masalah, namun saat class itu dirubah atau deprecated
$tiger  = new Tiger(); // berarti kita harus merubah semua , bayangkan kalau class nya banyak di tempat-tempat lainnya.
$cat    = new Cat();
$dog    = new Dog();

// Make Object AnimalFactory
$tiger  = AnimalFactory::create("tiger");
$cat    = AnimalFactory::create("cat");
$dog    = AnimalFactory::create("dog");

// Untungnya kalau class tiger nya tidak digunakan lagi (deprecated) dan digantikan class lainnya, kita tidak perlu repot-repot untuk menganti semua class tiger tadi.Cukup kita mengantinya di AnimalFactory.
