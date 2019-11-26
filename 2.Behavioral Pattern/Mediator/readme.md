# Mediator
Penengah. Pola design perilaku yang memungkinkan anda mengurangi ketergantungan kacau diantara objek. Pola membatasi komunikasi langsung antara objek dan memaksa mereka untuk ber KOLABORASI hanya melalui objek mediator.

![alt text](https://github.com/triabagus/Design-Patern-PHP/blob/master/image/mediator.png)

# Masalah
Hubungan antara element antarmuka pengguna dapat menjadi kalau ketika aplikasi berkembang.
Element dapat memiliki banyak hubungan dengan element lain , karenanya perubahan pada beberapa elemen dapat mempengaruhi elemen lainnya.

# Larutan
Pola Mediator menunjukkan bahwa Anda harus menghentikan semua komunikasi langsung antara komponen yang ingin Anda independen satu sama lain. Sebaliknya, komponen-komponen ini harus berkolaborasi secara tidak langsung, dengan memanggil objek mediator khusus yang mengalihkan panggilan ke komponen yang sesuai. Akibatnya, komponen hanya bergantung pada kelas mediator tunggal alih-alih digabungkan ke lusinan rekan mereka.

# Reverensi 
- [Mediator Design Pattern](https://refactoring.guru/design-patterns/mediator)
- [Example Code PHP](https://github.com/ehsangazar/design-patterns-php/blob/master/behavioral-patterns/mediator.php)