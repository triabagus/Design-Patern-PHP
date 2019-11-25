# Strategy
Pola desain perilaku yang memungkinkan anda menentukan sekelompok algoritma, menempatkan masing-masing ke dalam kelas yang terpisah dan membuat objek mereka dapat dipertukarkan.

![alt text](https://github.com/triabagus/Design-Patern-PHP/blob/master/image/strategy.png)

# Masalah
Disaat dimana kalian membuat aplikasi dengan algoritma setiap kelas nya yaitu menambahkan opsi penggguna. Namun seiringan dengan berjalan waktu seseorang menmbahkan opsi lagi seterusnya sampai dimana class utama menjadi dua kali lipat, dan sangat sulit untuk dipelihara. Setiap perubahan pada salah satu algoritma atau perbaikan BUG sederhana mempengaruhi seluruh kelas, hal ini juga bisa meningkatkan kemungkinan membuat kesalahan kode yang sudah berfungsi.

Selain itu kinerja tim tidak akan efisien, karena rekan anda akan mengeluh menghabiskan terlalu banyak waktu penyelesaian konfik gabungan. Menerapkan fitur baru mengharuskan anda untuk mengubah kelas besar sama , yang bertentangan dengan kode yang dihasilkan oleh orang lain.

# Larutan
Pola Strategi menyarankan agar Anda mengambil kelas yang melakukan sesuatu yang spesifik dalam banyak cara yang berbeda dan mengekstrak semua algoritma ini ke dalam kelas terpisah yang disebut strategi .

# Reverensi
- [Strategy Desain Pattern](https://refactoring.guru/design-patterns/strategy)
- [Example Code PHP](https://github.com/ehsangazar/design-patterns-php/blob/master/behavioral-patterns/strategy.php)