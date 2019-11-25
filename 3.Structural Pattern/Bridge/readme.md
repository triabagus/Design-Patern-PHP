# Bridge
pola design struktural yang memungkinkan anda membagikan kelas besar atau serangkaian kelas yang terkait erat menjadi dua hierarki yang terpisah - abstraksi dan implementasi - yang dapat dikembangkan secara independen satu sama lain.


![alt text](https://github.com/triabagus/Design-Patern-PHP/blob/master/image/bridge.png)

# Masalah
Ketika kita mempunyai class GEOMETRI dengan sepasang subclass SQUARE dan CIRCLE, kemudian anda ingin memperluas dengan menambahkan hierarki class color RED dan BLUE.Namun anda sudah mempunyai dua subclass , otomatis anda harus membuat empat kombinasi class ; BLUECIRCLE dan REDSQURE. Belum lagi kalau kita menmbahkan subclass TRIGGER. Ini akan memburuk seiring jauh langkah pembuatan class maka kita juga akan memperburuk pembuatan hirearki class beruturut - turut.  

![alt text](https://github.com/triabagus/Design-Patern-PHP/blob/master/image/problem1.png)

# Solusi
Anda ekstraksi salah satu dimensi ke dalam hirearki kelas yang terpisah, sehingga kelas asli akan mereferensikan object hirearki baru. Alih memiliki semua status dan perilaku dalam satu kelas.

![alt text](https://github.com/triabagus/Design-Patern-PHP/blob/master/image/solution-en.png)

# Reverensi
- [Bridge desain pattern](https://refactoring.guru/design-patterns/bridge)
- [Example Demo PHP](https://github.com/ehsangazar/design-patterns-php/blob/master/structural-patterns/bridge.php)