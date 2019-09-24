# Singleton
Singleton pattern berguna saat kita perlu memastikan bahwa kita hanya memiliki satu instance dari class untuk seluruh siklus hidup aplikasi. Hal ini biasanya terjadi ketika kita memiliki objek global seperti konfigurasi misalnya.

Kami menggunakan pola singleton untuk membatasi jumlah instance yang dapat dibuat dari kelas konsumsi sumber daya menjadi hanya satu.

Kelas yang memakan sumber daya adalah kelas yang mungkin memperlambat situs web kami atau membutuhkan biaya. Sebagai contoh:
1. Beberapa penyedia layanan eksternal (API) membebankan biaya per penggunaan.
2. Beberapa kelas yang mendeteksi perangkat seluler mungkin memperlambat situs web kami.
3. Membuat koneksi dengan database memakan waktu dan memperlambat aplikasi kami.

![alt text](https://github.com/triabagus/Design-Patern-PHP/blob/master/1.Creational%20Patern/Singleton/the-singleton-pattern-explained.png)

# Reverensi
1. [the-singleton-design-pattern-in-php](https://phpenthusiast.com/blog/the-singleton-design-pattern-in-php)
2. [singleton-patern-php](https://www.youtube.com/watch?v=jS9lOKqKTc4)
3. [github-singleton-php](https://github.com/domnikl/DesignPatternsPHP/blob/master/Creational/Singleton/Singleton.php)
4. [documentasi-singleton-patern-php](https://designpatternsphp.readthedocs.io/en/latest/Creational/Singleton/README.html)