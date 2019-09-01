-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 01 Sep 2019 pada 13.25
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `isi`, `tanggal`, `id_user`, `id_kategori`) VALUES
(1, 'Langkah Pertama Belajar Web Programming', 'Web programming terdiri dari dua suku kata yaitu web dan programming. Programming dapat diartikan sebagai proses, cara, atau pembuatan suatu program. Sedangkan web dapat diartikan sebagai jaringan komputer yang terdiri dari kumpulan situs internet yang menawarkan teks, grafik, suara dan sumber daya animasi melalui protokol transfer hypertext (HTTP).\r\n\r\nJadi, web programming adalah suatu proses, cara, atau pembuatan suatu program berbasis web. Dalam memahami web programming, mungkin terbesit di dalam benak Anda harus darimana Anda memulai dalam mempelajari web programming. Pada artikel ini, Logique akan menjelaskan mengenai tahapan-tahapan dalam mempelajari web programming secara runut hanya untuk Anda.\r\n\r\nTahapan-tahapan dalam Mempelajari Web Programming\r\n1. HTML & CSS\r\nTahapan awal dalam mempelajari web programming adalah menguasai HTML (Hyper Text Markup Language) terlebih dahulu. HTML merupakan suatu komponen dari pemrograman yang cukup penting untuk dipelajari bagi para web developer. Sebab, secara garis besar HTML berfungsi untuk menampilkan tulisan, link, dan garis yang menjadi komponen utama pada suatu website.\r\n\r\nSelain HTML, penting juga bagi para web developer untuk menguasai CSS (Cascading Styles Sheet). CSS berfungsi sebagai pendukung dari komponen HTML yang telah dikembangkan. Dengan CSS, komponen HTML yang telah dibuat dapat disempurnakan dan terlihat lebih menarik. Jika Anda telah menguasai HTML dan CSS, maka Anda sudah dapat membuat website statis dengan interface yang menarik.\r\n\r\n2. PHP\r\nApabila Anda telah menguasai HTML & CSS, maka tahap selanjutnya yang sebaiknya Anda pelajari adalah PHP. Framework ini cukup banyak digunakan oleh para web developer karena lebih mudah untuk dipelajari, dan tidak berbayar. Pada umumnya, PHP berfungsi untuk membuat situs menjadi lebih dinamis dengan cara menyisipkan logika pemrograman pada sintaks HTML yang telah dibuat. Pada situs dinamis, pengunjung dapat berinteraksi di suatu situs seperti e-commerce, media sosial, forum/komunitas, dan lain sebagainya.\r\n\r\nNamun, sebelum mempelajari PHP sebaiknya Anda mempelajari logika pemrograman terlebih dahulu. Ini akan membuat Anda dapat melakukan pemrograman secara lebih mudah.\r\n\r\n3. Database\r\nDatabase merupakan suatu komponen yang cukup penting dalam sistem informasi. Sebab, database merupakan wadah untuk menyediakan  berbagai informasi kepada para pengguna. Oleh sebab itu, para web developer diharapkan mampu merancang database sedemikian rupa sehingga pembuatan program dapat berjalan dengan lebih cepat dan mudah.\r\n\r\nBaca Juga: Tools Coding Paling Membantu Bagi Programmer Pemula\r\n4. JavaScript\r\nJavascript memiliki fungsi yang hampir serupa dengan PHP. Cara kerjanya pun juga demikian. Namun, keduanya memiliki beberapa fungsi dan sintaks yang berbeda. Javascript merupakan hal yang penting untuk dipelajari sebab antara PHP dan Javascript memiliki kekurangan dan kelebihan masing-masing. Dengan begitu, Anda dapat mengembangkan suatu situs dengan lebih mudah berdasarkan kekurangan dan kelebihan kedua bahasa pemrograman tersebut.\r\n\r\n5. Tambahan\r\nJika Anda telah menguasai bahasa pemrograman yang telah dijelaskan sebelumnya, maka Anda sudah bisa disebut sebagai web developer. Akan tetapi, terdapat suatu library  yang sebaiknya Anda kuasai agar situs dapat dikembangkan dengan lebih menarik lagi. Library tersebut antara lain adalah Jquery, Ajax, React, Angular, Node, dan lain lain. Dengan library ini, Anda dapat menghadirkan animasi dan efek-efek tertentu yang dapat membuat suatu situs terlihat lebih menarik.\r\n\r\nBaca Juga: Programmer Harus Tahu Trik-Trik Coding PHP Ini\r\n6. Framework\r\nFramework memiliki cukup banyak keunggulan. Oleh karena itu, framework merupakan hal yang cukup penting untuk Anda kuasai. Dengan framework, Anda dapat mengembangkan suatu situs dengan lebih mudah, cepat, aman, dan dinamis. Beberapa contoh framework diantaranya adalah Codeigniter, Zend PHP, Kohana, Panada, Yii dan lain sebagainya. Disarankan untuk mempelajari Codeigniter terlebih dahulu jika Anda seorang web developer pemula yang ingin menguasai framework. Codeigniter memiliki dokumentasi yang cukup lengkap dan mudah dipahami sehingga akan memudahkan Anda dalam mempelajari framework ini. Demikian artikel mengenai tahapan dalam mempelajari web programming, semoga dapat membantu Anda.', '2019-08-31 08:45:00', 1, 1),
(2, 'Framework Codeigniter', 'Pengertian Framework Codeigniter\r\nFramework adalah kumpulan intruksi-intruksi yang di kumpulkan dalam class dan function-function dengan fungsi masing-masing untuk memudahkan developer dalam pemanggilannya tanpa harus menuliskan syntax program yang sama berulang-ulang. hal ini memiliki kegunaan untuk menghemat waktu dan mencegah penulisan syntax secara berulang-ulang agar tercipta nya source code yang bersih dan terstruktur.\r\n\r\nCodeigniter adalah sebuah framework php yang bersifat open source dan menggunakan metode MVC (Model, View, Controller). codeigniter bersifat free alias tidak berbayar jika anda menggunakannya. framework codeigniter di buat dengan tujuan sama seperti framework lainnya yaitu untuk memudahkan developer atau programmer dalam membangun sebuah aplikasi berbasis web tanpa harus membuat nya dari awal.\r\n\r\nMVC adalah teknik atau konsep yang memisahkan komponen utama menjadi tiga komponen yaitu model, view dan controller.\r\n\r\nModel\r\nModel merupakan bagian penanganan yang berhubungan dengan pengolahan atau manipulasi database. seperti misalnya mengambil data dari database, menginput dan pengolahan database lainnya. semua intruksi yang berhubung dengan pengolahan database di letakkan di dalam model.\r\nView\r\nView merupakan bagian yang menangani halaman user interface atau halaman yang muncul pada user. tampilan dari user interface di kumpulkan pada view untuk memisahkannya dengan controller dan model sehingga memudahkan web designer dalam melakukan pengembangan tampilan halaman website.\r\n\r\nController\r\nController merupakan kumpulan intruksi aksi yang menghubungkan model dan view, jadi user tidak akan berhubungan dengan model secara langsung, intinya dari view kemudian controller yang mengolah intruksi.\r\ndari penjelasan tentang model view dan controller di atas dapat di simpulkan bahwa controller sebagai penghubung view dan model. misalnya pada aplikasi yang menampilkan data dengan menggunakan metode konsep mvc, controller memanggil intruksi pada model yang mengambil data pada database, kemudian controller yang meneruskannya pada view untuk di tampilkan. jadi jelas sudah dan sangat mudah dalam pengembangan aplikasi dengan cara mvc ini karena web designer atau front-end developer tidak perlu lagi berhubungan dengan controller, dia hanya perlu berhubungan dengan view untuk mendesign tampilann aplikasi, karena back-end developer yang menangani bagian controller dan modelnya. jadi pembagian tugas pun menjadi mudah dan pengembangan aplikasi dapat di lakukan dengan cepat.\r\n\r\nKelebihan CodeIgniter\r\nAdapun beberapa kelebihan dari codeigniter adalah\r\n\r\nsyntax yang terstruktur\r\nkemudahan dalam menggunakannya\r\ncodeigniter menyediakan fasilitas helper dan library yang dapat membantu developer dalam membuat pagination, session, manipulasi url dan lainnya yang akan kita pelajari pada tutorial codeigniter selanjutnya.\r\nkeamanan yang sudah lumayan karena user atau pengakses aplikasi tidak berhubungan langsung dengan database.', '2019-08-30 00:00:00', 1, 1),
(3, 'Framework Laravel', 'Laravel adalah sebuah framework PHP yang dirilis dibawah lisensi MIT, dibangun dengan konsep MVC (model view controller). Laravel adalah pengembangan website berbasis MVP yang ditulis dalam PHP yang dirancang untuk meningkatkan kualitas perangkat lunak dengan mengurangi biaya pengembangan awal dan biaya pemeliharaan, dan untuk meningkatkan pengalaman bekerja dengan aplikasi dengan menyediakan sintaks yang ekspresif, jelas dan menghemat waktu.\r\n\r\nMVC adalah sebuah pendekatan perangkat lunak yang memisahkan aplikasi logika dari presentasi. MVC memisahkan aplikasi berdasarkan komponen- komponen aplikasi, seperti : manipulasi data, controller, dan user interface.\r\n\r\nModel, Model mewakili struktur data. Biasanya model berisi fungsi-fungsi yang membantu seseorang dalam pengelolaan basis data seperti memasukkan data ke basis data, pembaruan data dan lain-lain.\r\nView, View adalah bagian yang mengatur tampilan ke pengguna. Bisa dikatakan berupa halaman web.\r\nController, Controller merupakan bagian yang menjembatani model dan view.\r\nBeberapa fitur yang terdapat di Laravel :\r\n\r\nBundles, yaitu sebuah fitur dengan sistem pengemasan modular dan tersedia beragam di aplikasi.\r\nEloquent ORM, merupakan penerapan PHP lanjutan menyediakan metode internal dari pola “active record” yang menagatasi masalah pada hubungan objek database.\r\nApplication Logic, merupakan bagian dari aplikasi, menggunakan controller atau bagian Route.\r\nReverse Routing, mendefinisikan relasi atau hubungan antara Link dan Route.\r\nRestful controllers, memisahkan logika dalam melayani HTTP GET and POST.\r\nClass Auto Loading, menyediakan loading otomatis untuk class PHP.\r\nView Composer, adalah kode unit logikal yang dapat dieksekusi ketika view sedang loading.\r\nIoC Container, memungkin obyek baru dihasilkan dengan pembalikan controller.\r\nMigration, menyediakan sistem kontrol untuk skema database.\r\nUnit Testing, banyak tes untuk mendeteksi dan mencegah regresi.\r\nAutomatic Pagination, menyederhanakan tugas dari penerapan halaman.', '2019-08-31 22:19:25', 1, 1),
(4, 'Hal-hal yang Harus Dipersiapkan Untuk Menjadi Programmer Android', 'Pelajari Bahasa Pemrograman\r\nMenjadi programmer android sebaiknya kita mempelajari hal-hal yang berkaitan dengan bahasa pemrograman yang sering digunakan didalam membuat aplikasi android antara lain bahasa java namun tidak semua aplikasi android proses pembuatanya menggunakan bahasa java, pada saat ini banyak tools yang disediakan guna mendukung bahasa pemrograman selain java.\r\nNamun jika teman-teman tertarik menggunakan bahasa pemrograman Java sebaiknya teman-teman mempelajari hal-hal yang berkaitan dalam menjadi seorang programmer android dibawah ini:\r\n\r\nBahasa pemrograman tampilan\r\napa itu bahasa pemrograman tampilan?\r\nbahasa yang digunakan dalam membuat tampilan suatu aplikasi atau bisa disebut XML. XML sendiri digunakan untuk membuat user interface berbeda dengan bahasa java yang berorientasikan OOP.\r\nBahasa ini membuat programmer bekerja pada bagian userinterface.\r\n\r\nBahasa pemrograman Logic\r\napa itu bahasa pemrograman logic?\r\nbahasa yang digunakan dalam membuat suatu program atau aplikasi yang pada dasarnya ketika teman-teman ingin membuat aplikasi android dan Menjadi programmer android yang harus teman-teman gunakan yaitu bahasa Java karena Java sendiri sangat erat hubungannya dengan sistem operasi android, karena sejak awal rilisnya java merupakan bahasa utama untuk mengembangkan aplikasi pada sistem operasi ini. Bahasa pemograman yang satu ini sebenarnya tidak terlalu kompleks dan bisa teman-teman pelajari secara otodidak karena materi pembelajarannya sendiri sudah sangat banyak di internet Salah satunya adalah belajar di Udacity.com dan Codepolitan.\r\nJika teman-teman ingin menjadi programmer android teman teman harus mengetahui Pengetahuan dasar bahasa pemrograman java contohnya class, package dan konsep java sendiri.\r\n\r\nKotlin\r\nKotlin merupakan bahasa yang didesain dan dikembangkan oleh JetBrains, perusahaan asal Ceko yang mengembangkan berbagai IDE populer seperti IntelliJ IDEA, PyCharm, RubyMine, PhpStorm, dll. Bahkan Android Studio yang dipakai setiap programmer Android professional merupakan IDE yang dikembangkan di atas IDEA. Pada bulan Mei yang lalu di event Google I/O 2017, tim Android Google secara resmi mengumumkan dukungan penuh untuk bahasa pemrograman Kotlin untuk membuat aplikasi Android.\r\nKotlin dikembangkan untuk mengatasi kekurangan-kekurangan yang dimiliki oleh Java. Selain itu, salah satu fitur paling penting dari Kotlin adalah bahasa ini dapat dipakai bersamaan dengan Java dalam satu aplikasi yang sama.\r\n\r\nSQL (Structured Programming Language)\r\nSQL juga harus teman-teman pahami dalam hal ini, karena aplikasi android yang nantinya dibuat akan menyimpan data-data konfigurasi. Maka dari itu ada baiknya teman-teman memperlajari SQL.\r\nDatabase digunakan untuk menampung dan menunjang data-data yang kita butuhkan dalam membuat aplikasi android sehingga data-data tersebut dapat ditampilkan atau dikelola.\r\nSelain itu kita juga harus menentukan apakah aplikasi yang kita buat akan menyimpan datanya pada perangkat disisi client atau pada server.\r\nWebService\r\ntentunya kita butuh penghubung untuk melakukan aktivitas yang kita inginkan antara aplikasi kita dengan server. Untuk menghubungkan itu kita perlu membuat webservice. Untuk membuatnya kita dapat menggunakan bahasa pemrograman seperti PHP, ASP, JSP, dll.\r\nMasih banyak yang perlu teman-teman pelajari seperti untuk bisa menjadi programmer android\r\n\r\nMemilih Tools\r\nPemilihan tools yang tepat dapat berguna ketika kita menjadi programmer android, gunakanlah tools yang cocok dengan bahasa pemrograman yang teman-teman kuasai. Namun pada umumnya seorang programmer android lebih banyak menggunakan android studio sebagai tools dalam membuat aplikasi, dikarenakan android studio sendiri merupakan IDE pemrograman Android resmi dari Google yang dikembangkan dari IntelliJ.\r\nAtaupun bisa juga menggunakan tools selain android studio untuk membuat aplikasi android, yang tidak hanya mendukung bahasa pemrograman java.', '2019-08-31 22:19:53', 1, 2),
(6, 'Sebagai Android Beginner harus mulai dengan Java atau Kotlin?', '“Jika saya ingin belajar mengembangkan aplikasi Android, apakah saya harus mulai dengan Java atau Kotlin?”\r\nPertanyaan ini cukup banyak muncul di komunitas dan sekarang saya akan mencoba menjelaskannya di sini. Untuk menjawabnya, saya telah melihat berbagai artikel, post, dan pendapat dari beberapa android developer dan mencoba merangkumnya secara keseluruhan. Artikel ini lebih mencerminkan apa yang para developer pikirkan daripada pendapat saya sendiri. Saya tidak cukup berpengalaman untuk memberi tahu apakah Anda harus mulai dengan Java atau Kotlin, tetapi saya dapat mencari jawabannya.\r\nAnda mungkin memperhatikan bahwa Kotlin semakin banyak didorong di komunitas Android baru-baru ini. Pertama kali diperkenalkan pada tahun 2011, Kotlin (dibandingkan dengan Java) merupakan bahasa yang relatif baru. Kotlin dikembangkan oleh tim JetBrains, orang-orang yang juga membuat IntelliJ IDEA (IDE yang menjadi dasar Android Studio). Pada tahun 2016, versi 1.0 dari Kotlin dirilis, dan pada tahun 2017, di Google I / O kotlin diperkenalkan sebagai bahasa resmi kelas utama untuk pengembangan aplikasi native Android, yang berarti bahwa Google bekerja sama dengan JetBrains untuk sepenuhnya mendukung dan meningkatkan bahasa, dan Anda dapat menggunakannya di Android Studio secara langsung. Kotlin tidak dimaksudkan untuk menggantikan Java di Android, tetapi lebih untuk berdampingan dengannya, sehingga apapun yang anda lakukan dengan Kotlin, dapat Anda lakukan dengan Java dan sebaliknya. Google tidak berencana untuk menjatuhkan Java.\r\nNamun, banyak developer melihat Kotlin sebagai masa depan pemrograman Android, karena kotlin dilengkapi dengan banyak perbaikan, seperti null-safety, kode yang lebih singkat dan banyak fitur tambahan dan “syntactic sugar” yang membuat/menulis, membaca, dan memelihara kode lebih mudah dan minim rawan kesalahan. Jika Anda ingin melihat perbandingan penuh antara Kotlin dan Java, klik di sini.\r\nAwalnya, saya tidak yakin dengan kotlin, itulah sebabnya saya menunggu beberapa saat sebelum saya mulai mempelajarinya sendiri. Adopsi Kotlin berkembang pesat, banyak aplikasi besar seperti Pinterest dan Trello menggunakannya, Google tampaknya memprioritaskan di Java sekarang, dan semakin banyak dokumentasi dan source code yang ditulis dengan Kotlin bermunculan di web. Seperti yang dapat Anda lihat pada gambar di bawah ini, di beberapa bagian dari dokumentasi Android, Kotlin sekarang adalah tab default untuk contoh kode, dan menjadikan Java sebagai pilihan alternatif. Menurut survei StackOverflow, Kotlin adalah bahasa kedua yang paling dicintai pada tahun 2018. Jadi saya pikir cukup jelas bahwa kita tidak boleh mengabaikannya.\r\n\r\nJika Anda sudah memiliki pengalaman dengan Java dan Anda dapat membaca dan memahami kode Java yang ditulis oleh orang lain, maka ada baiknya untuk mulai belajar Kotlin dan juga membuat proyek Android Anda dengan Kotlin mulai dari nol. Anda akan memiliki banyak kesenangan dan menyukai kode yang lebih ringkas dan meningkatan produktivitas. Sangat mungkin Kotlin akan menjadi bahasa pemrograman utama untuk Android di masa depan. Semakin banyak aplikasi akan ditulis di Kotlin, yang berarti bahwa banyak pekerjaan Android akan membutuhkan bahasa Kotlin.\r\nKarena dapat dikompilasi ke Java bytecode, Kotlin adalah 100% interoperable dengan Java, yang berarti Anda dapat secara bertahap menambahkan potongan kode Kotlin ke proyek Java Android Anda yang sudah ada, memanggil metode Java dari Kotlin, dan masih menggunakan semua library Java dan Android API . Dan karena bahasa kotlin dikembangkan oleh JetBrains, ia memiliki dukungan kelas satu di IntelliJ IDEA dan Android Studio. Anda dapat menggunakannya tanpa menambahkan plugin apa pun, dan Anda menggunakan autocomplete code, highlighting sintaks, debugging tools dan refactoring, dan fitur lainnya, seperti konverter kode Java-to-Kotlin yang membantu Anda saat memulai pembelajaran.\r\nHampir semua orang setuju bahwa Kotlin adalah bahasa yang lebih baik. Namun kebanyakan orang (bahkan penggemar besar Kotlin) merekomendasikan untuk tetap memulai dengan Java sebagai pemula.\r\nMengapa?\r\nPertama, ada lebih banyak tutorial Java daripada tutorial Kotlin dan hampir setiap solusi untuk masalah Android di halaman seperti StackOverflow dari tahun-tahun terakhir telah ditulis di Java. Sebagian besar dokumentasi ada di Java juga dan jika Anda langsung mulai dengan Kotlin, dapat membuat proses belajar menjadi sangat sulit dan membingungkan. Memahami sintaks adalah satu hal yang penting dalam membangun suatu aplikasi, Anda harus belajar cara menggunakan framework dan library API yang berbeda. Anda harus mempelajari kelas apa yang harus Anda gunakan dan metode apa yang harus Anda panggil di fase yang berbeda dari aplikasi Anda. Dan untuk ini Anda perlu latihan dan banyak contoh atau referensi yang bisa Anda rujuk. Sebagian besar tutorial Kotlin saat ini membandingkan Kotlin ke Java sesekali untuk menunjukkan kelebihannya, yang membuat proses pembelajaran menjadi lebih membingungkan. Jika Anda ingin mempelajari pengembangan aplikasi Android sekarang, Anda tidak dapat sepenuhnya menghindari Java. Hal ini mungkin berubah dalam beberapa tahun ke depan, tetapi sekarang kita belum sampai di sana. Kotlin memecahkan banyak poin-poin di Java dan meningkatkan produktivitas dengan mengurangi kode boiler-plate, tetapi banyak hal yang Kotlin lakukan lebih masuk akal ketika Anda memiliki pengetahuan tentang cara kerja Java.', '2019-09-01 10:11:08', 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Web Programming'),
(2, 'Mobile');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'roihan', 'roihan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `artikel_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
