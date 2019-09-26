# Template Method Pattern
Template Method adalah pola desain perilaku yang mendefinisikan kerangka suatu algoritma dalam superclass tetapi memungkinkan subclass menimpa langkah-langkah spesifik dari algoritma tanpa mengubah strukturnya.
## Maksud
- Tentukan kerangka suatu algoritma dalam suatu operasi, menunda beberapa langkah untuk subkelas klien. Metode Templat memungkinkan subkelas mendefinisikan ulang langkah-langkah tertentu dari suatu algoritma tanpa mengubah struktur algoritma.
- Kelas dasar menyatakan algoritma 'placeholder', dan kelas turunan mengimplementasikan placeholder.

## Masalah
Dua komponen berbeda memiliki kesamaan yang signifikan, tetapi tidak menunjukkan penggunaan kembali antarmuka umum atau implementasi. Jika perubahan umum untuk kedua komponen menjadi perlu, upaya duplikat harus dikeluarkan.

# Reverensi
[Video template method pattern](https://www.youtube.com/watch?v=kg0yMIkWUTc&list=PL-CtdCApEFH_yiziXrQeogYOJzCmD8XLM&index=11)
[Artikel template method pattern](https://sourcemaking.com/design_patterns/template_method)
[Artikel template method pattern](https://refactoring.guru/design-patterns/template-method)