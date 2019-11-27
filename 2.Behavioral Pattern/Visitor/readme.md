# Visitor
Pola design perilaku yang memungkinkan anda memisahkan algoritma dari objek dimana mereka beroperasi.

![alt text](https://github.com/triabagus/Design-Patern-PHP/blob/master/image/visitor.png)

# Masalah

Ketika anda atau tim mengembangkan aplikasi yang memiliki informasi terstruktur dan sebagai satu grafik raksasa.

Pada titik tertentu anda mendapat tugas ekspor grafik, pada awalnya mudah dengan konsep langsung tertuju ke kelas. Sayangnya hal ini tertolak karena akan mengakibatkan BUG potensial, selain itu akan mempertanyakan kode nya kita kirim masuk akal ke sebuah kelas (akan terlihat asing).

Ada alasan lain yaitu sangat memungkinkan bahwa setelah fitur diterapkan. Akan ada perubahan aneh dari devisi dengan format berbeda.Ini akan memaksa anda untuk mengubah kelas yang berharga dan rapuh lagi akhirnya.
# Larutan

Pola Visitor menyarankan agar Anda menempatkan perilaku baru ke dalam kelas terpisah yang disebut visitor , alih-alih mencoba mengintegrasikannya ke dalam kelas yang ada. Objek asli yang harus melakukan perilaku sekarang diteruskan ke salah satu metode pengunjung sebagai argumen, memberikan metode akses ke semua data yang diperlukan yang terkandung dalam objek.

# Analogi Dunia Nyata

![alt text](https://github.com/triabagus/Design-Patern-PHP/blob/master/image/visitor-comic-1.png)

Bayangkan seorang agen asuransi berpengalaman yang ingin mendapatkan pelanggan baru. Dia dapat mengunjungi setiap bangunan di lingkungan, mencoba menjual asuransi kepada semua orang yang ditemuinya. Bergantung pada jenis organisasi yang menempati gedung, ia dapat menawarkan polis asuransi khusus:

Jika itu adalah bangunan tempat tinggal, ia menjual asuransi kesehatan.
Jika itu bank, ia menjual asuransi pencurian.
Jika itu kedai kopi, ia menjual asuransi kebakaran dan banjir.
# Reverensi

- [Visitor Design Pattern](https://refactoring.guru/design-patterns/visitor)
- [Example Code PHP](https://github.com/ehsangazar/design-patterns-php/blob/master/behavioral-patterns/visitor.php)