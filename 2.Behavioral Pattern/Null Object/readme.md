# Null Object
adalah kelas kolaborator konkret yang bertindak sebagai kolaborator untuk klien yang membutuhkannya. Perilaku nol tidak dirancang untuk dicampur menjadi objek yang perlu dilakukan beberapa perilaku. Ini dirancang untuk kelas yang mendelegasikan kepada kolaborator semua perilaku yang mungkin atau mungkin tidak melakukan perilaku apa pun.

Tujuannya untuk merangkum ketiadaan objek dengan memberikan alternatif yang dapat diganti yang menawarkan standar yang sesuai melakukan suatu perilaku.

Gunakan pola Null Object saat:
1. Suatu objek membutuhkan kolabulator. Pola Null Object tidak memperkenalkan kolaborasi ini menggunakan kolaborasi yang sudah ada.
2. Beberapa contoh kolabulator tidak boleh melakukan apapun.
3. Anda ingin abstrak penanganan null dari klien.

# Masalah 
Mengingat bahwa referensi objek dapat berupa nol dan bahwa hasil pemeriksaan nol adalah tidak melakukan apa-apa atau menggunakan beberapa nilai default, bagaimana tidak adanya objek - keberadaan referenso nol - diperlakukan secara transparan.

# Solusi
Terkadang kelas yang membutuhkan kolaborator tidak perlu kolaborator untuk melakukan apa pun. Namun, kelas ingin memperlakukan kolaborator yang tidak melakukan hal yang sama seperti memperlakukan yang sebenarnya menyediakan perilaku.

# Reverensi
- [Null Object Design Pattern](https://sourcemaking.com/design_patterns/null_object)
- [Example PHP Code](https://github.com/ehsangazar/design-patterns-php/blob/master/structural-patterns/null_object.php)