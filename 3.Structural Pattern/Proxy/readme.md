# Proxy Design Pattern
Pola design struktural yang memungkinkan anda memberikan pengganti atau pengganti untuk objek lain. Proxy mengontrol akses ke object asli , memungkinkan anda untuk melakukan sesuatu baik sebelum atau setelah permintaan sampai ke object asli.

# Masalah 
Kita memiliki object besar yang menghabiskan banyak sumber saya sistem.

![alt text](https://github.com/triabagus/Design-Patern-PHP/blob/master/image/problem.png)
# Solusi
Dengan pola proxy kita membuat antarmuka baru yang sama dengan layanan asli, kemudian kita memperbarui aplikasi melewati object proxy ke semua klien objek asli.

![alt text](https://github.com/triabagus/Design-Patern-PHP/blob/master/image/solution.png)

# Reverensi
- [Proxy design pattern Video](https://www.youtube.com/watch?v=JBWYU2l413A)
- [https://sourcemaking.com/design_patterns/proxy](https://sourcemaking.com/design_patterns/proxy)
- [https://refactoring.guru/design-patterns/proxy](https://refactoring.guru/design-patterns/proxy)