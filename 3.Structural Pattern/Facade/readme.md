# Facade Pattern
Facade adalah pola desain struktural yang menyediakan antarmuka yang disederhanakan ke perpustakaan, kerangka kerja, atau set kelas kompleks lainnya.

## Maksud
- Menyediakan antarmuka terpadu untuk satu set antarmuka di subsistem. Fasade mendefinisikan antarmuka tingkat tinggi yang membuat subsistem lebih mudah digunakan.
- Bungkus subsistem yang rumit dengan antarmuka yang lebih sederhana. 

![alt text](https://github.com/triabagus/Design-Patern-PHP/blob/master/image/live-example-en.png)

Saat Anda menelepon toko untuk memesan telepon, operator adalah fasad Anda untuk semua layanan dan departemen toko. Operator menyediakan Anda dengan antarmuka suara sederhana ke sistem pemesanan, gateway pembayaran, dan berbagai layanan pengiriman.

## Masalah
Bayangkan Anda harus membuat kode Anda berfungsi dengan serangkaian objek luas yang dimiliki oleh pustaka atau kerangka kerja canggih. Biasanya, Anda perlu menginisialisasi semua objek itu, melacak dependensi, menjalankan metode dalam urutan yang benar, dan sebagainya.

Akibatnya, logika bisnis kelas Anda akan menjadi sangat erat dengan detail implementasi kelas pihak ketiga, sehingga sulit untuk dipahami dan dipelihara.

## Reverensi 
[php example facde design pattern](https://refactoring.guru/design-patterns/facade/php/example#example-0)
[video facade design pattern](https://www.youtube.com/watch?v=DKMT1HStrD0)