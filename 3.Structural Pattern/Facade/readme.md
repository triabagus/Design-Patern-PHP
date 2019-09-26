# Facade Pattern
Facade adalah pola desain struktural yang menyediakan antarmuka yang disederhanakan ke perpustakaan, kerangka kerja, atau set kelas kompleks lainnya.
## Maksud
- Menyediakan antarmuka terpadu untuk satu set antarmuka di subsistem. Fasade mendefinisikan antarmuka tingkat tinggi yang membuat subsistem lebih mudah digunakan.
- Bungkus subsistem yang rumit dengan antarmuka yang lebih sederhana. 

## Masalah
Bayangkan Anda harus membuat kode Anda berfungsi dengan serangkaian objek luas yang dimiliki oleh pustaka atau kerangka kerja canggih. Biasanya, Anda perlu menginisialisasi semua objek itu, melacak dependensi, menjalankan metode dalam urutan yang benar, dan sebagainya.

Akibatnya, logika bisnis kelas Anda akan menjadi sangat erat dengan detail implementasi kelas pihak ketiga, sehingga sulit untuk dipahami dan dipelihara.

## Reverensi 
[php example facde design pattern](https://refactoring.guru/design-patterns/facade/php/example#example-0)