# Iterator
Pola desain perilaku yang memungkinkan anda menjelajahi elemen koleksi tanpa memaparkan representasi yang mendasarinya (exp: daftar, pohon, tumpukan , dll).

![alt text](https://github.com/triabagus/Design-Patern-PHP/blob/master/image/iterator.png)
# Masalah
Iterator hanya sebuah wadah untuk sekelompok objek dan banyak digunakan dalam pemprograman, namun iterator banyak jenisnya.

Tetapi tidak peduli bagaimana koleksi disusun, itu harus menyediakan beberapa cara mengakses elemen-elemennya sehingga kode lain dapat menggunakan elemen-elemen ini. Seharusnya ada cara untuk melalui setiap elemen koleksi tanpa mengakses elemen yang sama berulang-ulang.
# Larutan
Selain menerapkan algoritma itu sendiri, objek iterator merangkum semua detail traversal, seperti posisi saat ini dan berapa banyak elemen yang tersisa sampai akhir. Karena itu, beberapa iterator dapat melalui koleksi yang sama pada saat yang sama, secara independen satu sama lain.

Biasanya, iterator menyediakan satu metode utama untuk mengambil elemen koleksi. Klien dapat terus menjalankan metode ini sampai tidak mengembalikan apa pun, yang berarti bahwa iterator telah melintasi semua elemen.

Semua iterator harus mengimplementasikan antarmuka yang sama. Ini membuat kode klien kompatibel dengan semua jenis koleksi atau algoritma traversal apa pun asalkan ada iterator yang tepat. Jika Anda memerlukan cara khusus untuk melintasi koleksi, Anda cukup membuat kelas iterator baru, tanpa harus mengubah koleksi atau klien.

# Reverensi
- [Iterator Design Pattern](https://refactoring.guru/design-patterns/iterator)
- [Example Code PHP](https://github.com/ehsangazar/design-patterns-php/blob/master/behavioral-patterns/iterator.php)