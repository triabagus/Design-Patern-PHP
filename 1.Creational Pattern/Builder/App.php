<?php
// Make object 
$customer1 = new Customer("1","Tria","Bagus","tria@gmail.com","62352532253");
// Error object LAMA karena kurang address, 
// bisa diakali dengan menambahkan default value address =""

// Make object with address
$customer2 = new Customer("2","Adi","Irawan","adi@gmail.com","62126712721","Jl.Dipenogoro");
// Make object with age
$customer3 = new Customer("3","Agus","Sulityo","agus@gmail.com","62121212121","Jl.Mawar",20);

$customer4 = new Customer("4","Agus","Sulityo","agus@gmail.com","62121212121","",20);
$customer5 = new Customer("5","Agus","","agus@gmail.com","62121212121","",20);

/* Illustrasi
    $customer1 = new Customer(id:"1",firtsName:"Tria",lastName:"Bagus",email:"tria@gmail.com",phone:"62352532253");

    $customer2 = new Customer(id:"2",firtsName:"Adi",lastName:"Irawan",email:"adi@gmail.com",phone:"62126712721",address:"Jl.Dipenogoro");

    $customer3 = new Customer(id:"3",firtsName:"Agus",lastName:"Sulityo",email:"agus@gmail.com",phone:"62121212121",address:"Jl.Mawar",age=20);
*/

// Hal ini kurang efektif karena nantinya, kalau semisal custumer4 gak usah (address) atau paling parah gak usah (lastName). Yang terjadi apa? yah mau tidak mau kita harus ngasih (empty string).Hal ini lebih baik dihindari apalagi kita nanti juga akan set add parameter-parameter baru berulang-ulang.

// Make object with builder
// Jadi kita bisa set data yang kita perlukan tidak harus semua untuk di set.
// Tidak perlu default value kosong
// Bisa pilih set nya
$customer1 = (CustomerBuilder())
                ->setFirtName("Agus")
                ->setPhone("62457847584")
                ->setAge(40)
                ->build();
$customer2 = (CustomerBuilder())
                ->setFirtName("Agus")
                ->setLastName("Kurniawan")
                ->setPhone("4565343")
                ->build();
$customer3 = (CustomerBuilder())
                ->setFirtName("Agus")
                ->setAddress("Jl.Anggrek")
                ->setPhone("4565343")
                ->build();