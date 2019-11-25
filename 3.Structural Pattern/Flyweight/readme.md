#Flyweight
Pola design strutural yang memungkinkan anda memasukkan lebih banyak object ke dalam jumlah RAM yang tersedia dengan berbagi bagian keadaan umum diantara beberapa object alih - alih menyimpan data disetiap object.

![alt text](https://github.com/triabagus/Design-Patern-PHP/blob/master/image/flyweight.png)

#Masalah
Sebuah program game kita buat kemudian macet ditengah diakibatkan RAM yang tidak mencukupi.Masalah yang sebenarnya dikarenakan sistem partikel yang kita buat diwakili oleh objek terpisah yang berisi banyak data.Pada titik tertentu, saat aplikasi di titik klimaks partikel baru dibuat tidak sesuai dengan jumlah RAM yang tersisa , sehingga program macet.

#Reverensi

- [Flyweight Design Pattern](https://refactoring.guru/design-patterns/flyweight)
