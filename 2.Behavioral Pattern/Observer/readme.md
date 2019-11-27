# Observer (Pengamat)
Pola desain perilaku yang memungkinkan anda menentukan mekanisme berlanganan untuk memberi tahu beberapa objek tentang peristiwa apapun yang terjadi pada objek yang mereka amati.

![alt text](https://github.com/triabagus/Design-Patern-PHP/blob/master/image/observer.png)

# Masalah
Bayangkan anda memiliki objek Customer dan Store. Dan anda memiliki produk baru (iphone 11) yang tersedia di toko. Ada 2 jenis customer yang ingin tahu produk baru ini:
1. Pelanggan dapat mengunjungi toko setiap hari dan memeriksa ketersediaan produk. Tetapi sementara produk masih dalam perjalanan, sebagian besar perjalanan ini tidak ada gunanya.
2. Di sisi lain, toko dapat mengirim banyak email (yang mungkin dianggap spam) ke semua pelanggan setiap kali produk baru tersedia. Ini akan menyelamatkan beberapa pelanggan dari perjalanan tanpa akhir ke toko. Pada saat yang sama, itu akan membuat marah pelanggan lain yang tidak tertarik dengan produk baru.

Sepertinya kita punya konflik. Baik pelanggan membuang-buang waktu memeriksa ketersediaan produk atau toko membuang-buang sumber daya memberitahukan pelanggan yang salah.

![alt text](https://github.com/triabagus/Design-Patern-PHP/blob/master/image/observer-comic-1.png)
# Larutan
Objek yang memiliki keadaan menarik sering disebut subjek , tetapi karena ia juga akan memberi tahu objek lain tentang perubahan ke kondisinya, kami akan menyebutnya penerbit . Semua objek lain yang ingin melacak perubahan pada status penerbit disebut pelanggan .

# Analogi Dunia Nyata
![alt text](https://github.com/triabagus/Design-Patern-PHP/blob/master/image/observer-comic-2.png)

Jika Anda berlangganan koran atau majalah, Anda tidak perlu lagi pergi ke toko untuk memeriksa apakah edisi berikutnya tersedia. Alih-alih, penerbit mengirim masalah baru langsung ke kotak surat Anda tepat setelah publikasi atau bahkan sebelumnya.

Penerbit memiliki daftar pelanggan dan tahu majalah mana yang mereka minati. Pelanggan dapat meninggalkan daftar kapan saja ketika mereka ingin menghentikan penerbit yang mengirimkan masalah majalah baru kepada mereka.
# Referensi
- [Observer Design Pattern](https://refactoring.guru/design-patterns/observer)
- [Example Code PHP](https://github.com/ehsangazar/design-patterns-php/blob/master/behavioral-patterns/observer.php)