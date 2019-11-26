# State
Pola design perilaku yang memungkinkan objek mengubah perilakunya ketika keadaan internal berubah. Tampaknya seperti seolah-olah objek mengubah kelasnya.

![alt text](https://github.com/triabagus/Design-Patern-PHP/blob/master/image/state.png)

# Masalah
Pola State terkait erat dengan konsep Finite-State Machine(Mesin atau robot yang terbatas). Ada waktu dimana suatu program memiliki batasan state. Kelemahan terbesar dari machine state berdasarkan kondisional mengungkapkan state lebih banyak setelah kita menambahakan lebih banyak state dan perilaku terhadap class.

Masalah akan cenderung semakin besar ketika sebuah progaram berkembang, cukup sulit untuk memprediksi semua kemungkinan status dan transisi pada tahap desain.

# Larutan

Pola State menyarankan agar anda membuat kelas baru untuk semua kemungkinan status objek dan mengekstrak semua perilaku state ke dalam kelas ini.

# Analogi Dunia Nyata

Tombol dan sakelar di ponsel cerdas Anda berperilaku berbeda tergantung pada kondisi perangkat saat ini:

- Ketika ponsel tidak terkunci, menekan tombol mengarah ke menjalankan berbagai fungsi.
- Ketika ponsel terkunci, menekan tombol apa saja mengarah ke layar buka kunci.
- Ketika daya baterai telepon hampir habis, menekan tombol apa saja menunjukkan layar pengisian daya.

# Reverensi
- [State Design Pattern](https://refactoring.guru/design-patterns/state)
- [Example Code PHP](https://github.com/ehsangazar/design-patterns-php/blob/master/behavioral-patterns/state.php)
- [Penjelasan Finite-State Machine](https://en.wikipedia.org/wiki/Finite-state_machine)