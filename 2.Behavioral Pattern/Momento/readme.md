# Momento
Pola desain perilaku yang memungkinkan anda menyimpan dan mengembalikan keadaan objek sebelumnya tanpa mengungkapkan detail implementasi. Jadi kita bisa mengambil objek tanpa harus semua kita public.

![alt text](https://github.com/triabagus/Design-Patern-PHP/blob/master/image/memento.png)

# Masalah
Bayangkan kita menjalankan operasi, aplikasi akan menyimpan snapshot dari keadaan objek yang nantinya dapat digunakan untuk mengembalikan objek ke keadaan sebelumnya. Bagaimana tepatnya kita menghasilkan satu objek, anda harus memeriksa semua bidang dalam objek dengan mengungkap semua detail implementasi. Dan akan berpengaruh terhadap hubungan public dan private class. Di masa mendatang anda menambahkan refactory menambah atau menghapus beberapa bidang. 

Nah bagaimana cara membuat salinan negara pribadi objek ?

Sampai dititik mana anda akan mengekspos semua detail internal kelas, membuatnya terlalu rapuh, atau membatasi akses ke negara mereka, sehingga tidak mungkin untuk menghasilkan foto. Apakah ada cara lain untuk mengimplementasikan "undo"?

# Larutan
Semua masalah yang baru saja kita alami disebabkan oleh enkapsulasi yang rusak. Beberapa objek mencoba melakukan lebih dari yang seharusnya. Untuk mengumpulkan data yang diperlukan untuk melakukan beberapa tindakan, mereka menginvasi ruang pribadi objek lain alih-alih membiarkan objek ini melakukan tindakan yang sebenarnya.

# Reverensi
- [Memento Design Pattern](https://refactoring.guru/design-patterns/memento)
- [Example Code PHP](https://github.com/ehsangazar/design-patterns-php/blob/master/behavioral-patterns/momento.php)