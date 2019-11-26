# Command
Pola desain perilaku mengubah permintaan menjadi object yang berdiri sendiri yangberisi semua informasi tentang permintaan. Transformasi ini memungkinkan anda membuat parameter metode dengan berbagai permintaan, menunda atau mengantri eksekusi pemintaan dan mendukung operasi yang tidak dapat dibatalkan.

![alt text](https://github.com/triabagus/Design-Patern-PHP/blob/master/image/command.png)

# Masalah
Anda memiliki object terlihat serupa namun melakukan hal yang berbeda. Solusi sederhana anda membuat sub kelas untuk setiap object yang digunakan , dan sub kelas ini berisi kode yang dijalankan.

Tak lama anda akan menyadari pendekatan ini cacat. Pertama, anda memiliki jumlah besar sub kelas dan tidak apa-apa anda tidak mengambil melanggar kode dalam sub kelas setipa anda memodifikasi.

Dan ini bagian jelek , beberapa operasi menyalin / menempelkan teks pelu dipanggil dari berbagai tempat.
Awalnya, ketika aplikasi kami hanya memiliki bilah alat, tidak apa-apa untuk menempatkan implementasi berbagai operasi ke dalam subkelas tombol. Dengan kata lain, memiliki kode untuk menyalin teks di dalam CopyButtonsubclass baik-baik saja. Tetapi kemudian, ketika Anda menerapkan menu konteks, pintasan, dan hal-hal lain, Anda harus menduplikasi kode operasi di banyak kelas atau membuat menu bergantung pada tombol, yang merupakan pilihan yang bahkan lebih buruk.

# Larutan
Desain perangkat lunak yang baik seringkali didasarkan pada prinsip pemisahan kekhawatiran, yang biasanya menghasilkan aplikasi yang terbagi-bagi. Langkah selanjutnya adalah membuat perintah Anda mengimplementasikan antarmuka yang sama.

# Analogi (Pemesanan direstoran)

![alt text](https://github.com/triabagus/Design-Patern-PHP/blob/master/image/command-comic-1.png)

# Reverensi
- [Command Desain Pattern](https://refactoring.guru/design-patterns/command)
- [Example Code PHP](https://github.com/ehsangazar/design-patterns-php/blob/master/behavioral-patterns/command.php)