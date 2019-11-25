# Chain of Responsibility
Pola design perilaku yang memungkinkan anda menyampaikan disepanjang rantai penangan.Setelah memerima permintaan, setiap penangan memutuskan untuk memproses permintaan atau meneruskan ke penangan berikutnya dalam rantai.

![alt text](https://github.com/triabagus/Design-Patern-PHP/blob/master/image/chain-of-responsibility.png)

# Masalah
Ketika anda membuat aplikasi authentikasi request untuk order system, kemudian kolega menyarankan untuk memberikasn langkah validasi. Kemudian memcahkan kata sandi yang brutal dan anda harus menambahkan filter permintaal gagal berulang berasal dari alamay IP yang sama. Dan kemudian orang lain menyarankan untuk mempercepat system dengan mengembalikan cache dari permintaan berulang dengan data yang sama.

Kode cek, yang sudah berantakan akan tampak bengkak saat anda menmbahkan fitur baru. Mengubah satu cek mempengaruhi yang lain. Yang lebih parah anda akan menduplikasi beberapa kode ke beberapa komponen.

Sistem akan sangat sulit dipahami dan mahal untuk dipelihara. Anda akan berjuang untuk sementara waktu , sampai suatu saat hari anda harus memperbaiki semuanya.

# Solusi
Pola menunjukkan bahwa anda menautkan penangan ini ke rantai, selain memproses pemintaan, penangan meneruskan permintaan lebih lanjut sepanjang rantai.

![alt text](https://github.com/triabagus/Design-Patern-PHP/blob/master/image/solution1-en.png)

# Reverensi 
- [Chain of Responsibility](https://refactoring.guru/design-patterns/chain-of-responsibility)
- [Example Code PHP](https://github.com/ehsangazar/design-patterns-php/blob/master/behavioral-patterns/chain-of-responsibility.php)