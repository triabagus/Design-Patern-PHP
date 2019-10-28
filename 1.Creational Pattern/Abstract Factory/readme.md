# Abstract Factory
Hampir mirip dengan Factory Method hanya beda sedikit. Abstract Factory adalah pola desain kreatif yang memungkinkan anda menghasilkan keluarga object terkait tanpa menentukan kelas kongkretnya.

## Permasalahan 
Bayangkan kalau anda sedang simulator tentang Game. Dimana game tersebut ada Arena , Level , atau bisa ditambahkan dengan Enemy atau musuh dengan level sendiri sendiri. Dan kita tidak mau kan kalau ada game yang salah akan algoritma level dan arena nya salah. Masak kita mau milih level easy tapi arenanya Hard. 

Selain itu kita tidak mau mengubah kode yang ada saat penambahan seperti tapi kita mau nambah Enemy ke program Game kita. Hal ini akan sering kita kita gunakan untuk penambahan object dan anda tidak perlu mengubah kode tersebut dengan lama.

## Solusi 
Hal pertama yang kita lakukan adalah dengan membuat Game factory tersebut agar kita jadikan interface.

## Penerapan 
- Gunakan Abstract Factory saat kode anda perlu untuk bekerja dengan berbagai keluarga yang terkait, TAPI anda tidak ingin itu bergantung pada kelas konkret dari produk tersebut mungkin tidak diketahui sebelumnya atau anda hanya ingin memungkinkan perpanjangan masa depan.

## Reverensi
- [Refactoring Guru | Abstract Factory](https://refactoring.guru/design-patterns/abstract-factory) 