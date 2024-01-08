-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2023 at 11:52 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_csirt`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita_csirt`
--

CREATE TABLE `berita_csirt` (
  `id_brt` int(128) NOT NULL,
  `judul` varchar(256) NOT NULL,
  `ringkasan` varchar(1500) NOT NULL,
  `image` varchar(256) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita_csirt`
--

INSERT INTO `berita_csirt` (`id_brt`, `judul`, `ringkasan`, `image`, `tanggal`) VALUES
(1, 'Awas Cyber Crime melalui Pinjaman Online', 'Subdit Cyber Crime Direktorat Reserse Kriminal Khusus Polda Metro Jaya menangkap seorang pelaku penyebar berita tidak benar atau hoaks di sosial media tentang asuransi. Perbuatan pelaku merugikan bisnis dan mencemarkan nama baik perusahaan asuransi nasional anak usaha bank pelat merah.', 'cyse1.jpg', '2022-11-22 08:15:48'),
(2, 'Ahli Cyber Security atau Elite Hacker? Ini Kata Pakar ', 'Saat ini publik Indonesia dihebohkan oleh Hacker Bjorka yang melalui akun Twitter @bjorkanism, memamerkan beberapa aksinya dalam membobol data pemerintah, termasuk rangkaian surat rahasia yang ditujukan untuk Presiden Jokowi. Ahmad Faizun, Komisaris Maplecode, sebuah perusahaan yang bergerak di bidang IT, mengingatkan pentingnya benteng nasional berupa Internet Mandiri untuk Indonesia.', 'cyse2.jpg', '2022-11-14 08:16:33'),
(3, 'Bertemu Dubes Ukraina, Menkominfo Bahas Kerja Sama Cyber Security ', 'Kementerian Komunikasi dan Informatika ( Kominfo ) menjajaki kerjasama pengembangan Sumber Daya Manusia (SDM) Bidang Digital dengan Ukraina. ”Tadi pagi kami kembali berdiskusi terkait potensi kerja sama antara Indonesia dan Ukraina khususnya di bidang talent baik untuk ICT infrastructure downstream maupun cyber security ,\" tutur Menkominfo Johnny G. Plate di Kantor Kementerian Kominfo, Jakarta Pusat, Selasa (18/10)', 'cyse32.jpg', '2022-11-15 08:24:09'),
(5, 'Tips: Membuat Strong Password (Kata Sandi Yang Aman)', 'Beberapa tips membuat password yang kuat\r\nKata sandi (password) yang kuat hendaknya mudah Anda ingat tetapi sulit ditebak orang lain. Mari kita lihat beberapa hal penting untuk dipertimbangkan saat membuat password.\r\n\r\nJangan pernah menggunakan informasi pribadi Anda seperti nama, ulang tahun, username, atau alamat email. Informasi-informasi ini umumnya dapat diakses publik, sehingga orang lain lebih mudah menebak password Anda.\r\nGunakan password yang panjang. Setidaknya panjang password minimal 6 digit, meskipun dapat lebih panjang untuk keamanan ekstra.\r\nJangan memakai password yang sama untuk semua akun Anda. Jika seseorang menemukan kata sandi pada satu akun Anda, maka akun-akun Anda lainnya akan terancam.\r\nGunakan kombinasi angka, simbol, huruf kapital dan kecil.\r\nHindari menggunakan kata-kata yang dapat ditemukan di dalam kamus. Misalnya, berenang1 merupakan password yang lemah.\r\nPassword acak adalah password yang terkuat. Jika Anda mengalami kesulitan membuat password acak ini, maka Anda dapat menggunakan aplikasi password generator', 'berita33.jpg', '2022-12-01 09:12:35'),
(6, 'Kerentanan Zero-day Windows 11 : Membuat Siapapun Menjadi Admin', 'Pengguna Windows harus waspada. Microsoft telah mengkonfirmasi kerentanan kritis telah ditemukan di semua versi Windows yang menghadirkan ancaman langsung, dan tindakan harus dilakukan secepatnya.\r\n\r\nDilacak sebagai CVE-2021-34484, kerentanan “zero-day” memungkinkan peretas untuk menembus semua versi Windows (termasuk Windows 10, Windows 11 dan Windows Server 2022) dan mengambil kendali komputer Anda. Dan bagian terburuknya adalah cacatnya telah diketahui selama beberapa waktu.\r\n\r\nAlasan untuk ini adalah Microsoft secara keliru mengira telah menambal kerentanan (yang pertama kali ditemukan pada bulan Agustus) ketika diungkapkan kepada publik pada bulan Oktober.\r\n\r\nTetapi perbaikan itu sendiri ditemukan tidak sempurna, sesuatu yang diakui perusahaan, dan ini menarik lebih banyak perhatian pada kerentanan. Microsoft kemudian berjanji untuk “mengambil tindakan yang tepat untuk menjaga pelanggan tetap terlindungi” tetapi dua minggu kemudian, perbaikan baru masih belum tiba.\r\n\r\nTapi di sinilah semua pengguna Windows dapat mengambil kendali. Spesialis keamanan pihak ketiga 0patch telah mengalahkan Microsoft dengan ‘micropatch’ yang sekarang telah tersedia untuk semua pengguna Windows (tautan unduhan).\r\n\r\nAnda harus mendaftar untuk akun 0patch dan menginstal download agent nya sebelum perbaikan dapat diterapkan, tetapi dengan 0patch yang cepat menjadi tujuan utama untuk hot fix yang mengalahkan Microsoft, ini bukan masalah.', 'berita23.jpg', '2022-12-01 09:08:20'),
(7, 'Kerentanan Zero-Day Pada Apache Java Logging Library LOG4J', 'Pada tanggal 9 Desember 2021, periset keamanan menemukan adanya kerentanan zeroday yang diberi nama CVE-2021-44228 pada pustaka Apache Java Logging Library atau yang umum dikenal dengan log4j\r\nAdapun versi dari Log4j yang terdampak oleh kerentanan ini adalah sistem elektronik yang menggunakan Apache Log4j antara versi 2.0 sampai dengan 2.14.1. Berdasarkan CVSS Score 3.0, nilai kerentanan ini memiliki nilai 10.0 atau dikategorikan sebagai KRITIKAL. Eksploitasi dari kerentanan ini memungkinkan penyerang dapat mengambil alih penuh server yang terdampak.\r\nSeluruh pengguna yang menggunakan versi yang terdampak direkomendasikan untuk melakukan pemutakhiran ke versi terbaru atau melakukan langkah mitigasi sebagaimana direkomendasikan pada dokumen ini. Pada tanggal 9 Desember 2021, periset keamanan menemukan adanya kerentanan zero-day yang diberi nama CVE-2021-44228 pada pustaka Apache Java Logging Library atau yang umum dikenal dengan log4j. Proof of Concept (PoC) exploit dari kerentanan tersebut juga telah tersedia secara bebas. Eksploitasi dari kerentanan ini memungkinkan penyerang dapat mengambil alih penuh server yang terdampak. Berdasarkan CVSS Score 3.0, nilai kerentanan ini memiliki nilai : 10.0 atau dikategorikan sebagai KRITIKAL. Adapun versi dari Log4j yang terdampak oleh kerentanan ini adalah sistem elektronik yang menggunakan Apache Log4j antara versi 2.0 sampai dengan 2.14.1. ', 'berita16.jpg', '2022-12-01 07:57:33'),
(8, 'Sebagian Besar Karyawan Khawatir Peretasan Robot', 'Studi Kaspersky baru-baru ini tentang konsekuensi otomatisasi dan pertumbuhan penggunaan robot menunjukkan peningkatan robotisasi di perusahaan, namun sekaligus menyoroti meningkatnya jumlah risiko keamanan siber yang ditimbulkan.\r\n \r\nSaat ini, 79 persen karyawan percaya bahwa robot harus lebih banyak digunakan di berbagai industri, namun, 69 persen dari mereka juga takut akan peretasan teknologi tersebut. Robotika digunakan untuk mengatur sistem kontrol industri, proses produksi, dan teknologi informasi lainnya.\r\n \r\nIni menggantikan kerja manual, meningkatkan efisiensi, kecepatan, kualitas dan kinerja. Dengan pemikiran ini, Kaspersky melakukan penelitian untuk mempelajari pandangan karyawan perusahaan manufaktur dan organisasi besar lainnya di seluruh dunia tentang konsekuensi otomatisasi dan peningkatan penggunaan robot.\r\n\r\nTujuannya adalah untuk mengumpulkan pemikiran karyawan tentang keamanan robot dan sistem otomatis di perusahaan mereka. Survei dilakukan di 15 negara: Amerika Serikat, Prancis, Italia, Jerman, Spanyol, Korea Selatan, Jepang, Singapura, Argentina, Brasil, Mesir, Afrika Selatan, Arab Saudi, UEA, Turki.\r\n \r\nKaryawan melaporkan peningkatan tingkat robotisasi di perusahaan mereka selama dua tahun terakhir. 41 persen karyawan mengatakan bahwa organisasi mereka telah menggunakan robot, dan 29 persen organisasi berencana untuk menggunakannya dalam waktu dekat.\r\n \r\nSalah satu temuan dalam penelitian tersebut adalah responden percaya bahwa robot dapat membantu ind', 'robot.jpg', '2022-11-01 07:57:33'),
(9, 'Waspada Phishing Piala Dunia 2022', 'Piala Dunia FIFA Qatar 2022 adalah acara olahraga paling ditunggu di tahun 2022 bagi para penggemar sepak bola dan akan dimulai pada tanggal 20 November. Selain menarik ratusan juta penggemar di seluruh dunia, acara ini juga turut menarik perhatian para penjahat dunia maya yang ingin memperoleh uang dengan cepat.\r\n \r\nPeneliti Kaspersky telah menemukan halaman palsu yang menawarkan segalanya mulai dari tiket atau merchandise acara, hingga layanan streaming pertandingan, ditambah dengat banyak hadiah dan penipuan NFT yang mengeksploitasi Piala Dunia.\r\n \r\nSeperti halnya semua acara olahraga global besar, tiket palsu adalah umpan yang paling banyak digunakan untuk memikat para korban dan Piala Dunia tidak terkecuali. Selain itu, Qatar 2022 hanya menawarkan tiket digital, yang semakin meningkatkan risiko untuk berhadapan dengan bahaya online.\r\n\r\nKaspersky menemukan banyak halaman phishing yang menawarkan untuk pembelian tiket pertandingan FIFA. Tanpa perlu dikatakan, pengguna akan kehilangan data pribadi, detail perbankan, dan uang. Selain itu, penipu online juga dapat menggunakan data yang dicuri untuk tujuan lain atau menjualnya di Dark Web.\r\n \r\nTidak ada acara publik besar tanpa para penipu yang menggunakan skema hadiah palsu. Pakar Kaspersky juga menemukan halaman phishing yang menawarkan untuk memenangkan dua tiket ke Piala Dunia. Ini cukup populer di mana biasanya setiap pengguna menjadi pemenang yang \'beruntung\'; dengan yang terpilih hanya perlu membayar ongkos kirim.\r\n \r\nC', 'piala.jpg', '2022-11-01 09:08:20'),
(10, 'Prinsip Zero Trust Demi Keamanan Siber Lebih Baik', 'Meskipun banyak teknologi baru telah berhasil menghadirkan solusi keamanan siber yang lebih baik dan komprehensif, tidak ada yang namanya keamanan mutlak.\r\n \r\nPeretas semakin cerdas dan inovatif, dan hasilnya adalah serangan siber yang semakin canggih terhadap individu dan perusahaan. Sementara, kita sekarang hidup di dunia kerja hybrid di mana ancaman keamanan siber tidak lagi terbatas di lingkungan kantor.\r\n \r\nMenurut Dell, saat karyawan bekerja dari mana saja (work from anywhere), pergerakan data sensitif di edge, di berbagai platform cloud dan lingkungan remote terus berubah – artinya, potensi titik masuk percobaan serangan siber ke sistem TI (surface attack) sebuah organisasi juga meningkat secara eksponensial.\r\n\r\nKetika data sensitif disimpan di endpoint atau sejumlah perangkat yang digunakan seorang karyawan, data tersebut harus dikelola, dilindungi, dan diambil dari berbagai aplikasi tradisional dan modern dari sejumlah pusat data, berbagai lokasi edge, dan cloud.\r\n \r\n\"Perusahaan harus menyadari bahwa keamanan siber dimulai di edge, dan mempertimbangkan tiga tips berikut untuk meningkatkan ketahanan siber,\" ungkap Paul Carter, vice president, Client Solutions Group, Asia Pasifik & Jepang (APJ), Dell Technologies.\r\n \r\n1. Mengadopsi pola pikir dan arsitektur Zero Trust \r\n‘Zero Trust’ bukan istilah baru, tapi masih banyak yang bingung dan salah paham. Sederhananya, Zero Trust didasarkan pada gagasan bahwa tidak ada pengguna atau tugas yang bisa dipercaya secara tersirat,', 'zero1.jpeg', '2022-11-01 09:12:35');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_data` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('2e841f28491f4b7c492930fb6c09b8a1', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 1554634874, 'a:7:{s:9:\"user_data\";s:0:\"\";s:9:\"site_lang\";s:7:\"english\";s:7:\"user_id\";s:1:\"1\";s:8:\"username\";s:4:\"iiky\";s:6:\"status\";s:1:\"1\";s:5:\"roles\";a:1:{i:0;a:4:{s:7:\"role_id\";s:1:\"1\";s:4:\"role\";s:5:\"admin\";s:4:\"full\";s:13:\"Administrator\";s:7:\"default\";s:1:\"0\";}}s:12:\"user_profile\";a:13:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:16:\"Tintapuccino CMS\";s:6:\"gender\";s:1:\"m\";s:13:\"tanggal_lahir\";s:10:\"0000-00-00\";s:6:\"alamat\";s:0:\"\";s:4:\"kota\";s:0:\"\";s:12:\"tentang_saya\";s:0:\"\";s:4:\"foto\";s:12:\"no_image.jpg\";s:3:\"dob\";s:10:\"0000-00-00\";s:7:\"country\";s:0:\"\";s:8:\"timezone\";s:0:\"\";s:7:\"website\";s:0:\"\";s:8:\"modified\";s:19:\"2018-07-17 22:15:44\";}}');

-- --------------------------------------------------------

--
-- Table structure for table `dokpen_csirt`
--

CREATE TABLE `dokpen_csirt` (
  `id_dokpen` int(11) NOT NULL,
  `judul` varchar(268) NOT NULL,
  `isi` varchar(258) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokpen_csirt`
--

INSERT INTO `dokpen_csirt` (`id_dokpen`, `judul`, `isi`) VALUES
(4, '1. RFC 2350', 'KISI-KISI_MATEMATIKA_XI1.pdf'),
(5, '2. Surat Keputusan Direksi No:KD.058/KP.14/020800/2022', 'KISI-KISI_MATEMATIKA_XI2.pdf'),
(6, '3. Pedoman Pengelolaan Keamanan Informasi (QMS-SUP03-017)', 'KISI-KISI_MATEMATIKA_XI3.pdf'),
(7, '4. Surat Pernyataan Narahubung', '');

-- --------------------------------------------------------

--
-- Table structure for table `indok_csirt`
--

CREATE TABLE `indok_csirt` (
  `id_indok` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `indok_csirt`
--

INSERT INTO `indok_csirt` (`id_indok`, `judul`, `isi`, `id_user`, `no`) VALUES
(4, '. Tanggal Update Terakhir ', 'Dokumen merupakan dokumen versi 1.0 yang diterbitkan\r\npada tanggal 8 Agustus 2022.', 1, 1),
(7, '. Daftar Distribusi untuk Pemberitahuan', 'Tidak ada daftar distribusi untuk pemberitahuan mengenai pembaharuan dokumen.', 0, 2),
(8, '. Lokasi dimana Dokumen ini bisa didapat', 'Dokumen ini tersedia pada link berikut : Dokumen RFC 2350', 0, 3),
(9, '. Keaslian Dokumen', 'Dokumen ini telah ditandatangani dengan PGP milik INTI-CSIRT. Untuk lebih jelas dapat dilihat pada bagian Kunci Publik dan Informasi /Data Enkripsi Lain.', 0, 4),
(10, '. Identifikasi Dokumen', 'Dokumen memiliki atribut, yaitu :\r\nJudul : RFC 2350 INTI-CSIRT;\r\nVersi  : 1.1;\r\nTanggal Publikasi : 8 Agustus 2022\r\nKedaluwarsa : Dokumen ini valid hingga dokumen terbaru dipublikasikan.\r\n', 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `kontak_csirt`
--

CREATE TABLE `kontak_csirt` (
  `id_kontak` int(11) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL,
  `jabatan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontak_csirt`
--

INSERT INTO `kontak_csirt` (`id_kontak`, `icon`, `nama`, `status`, `jabatan`) VALUES
(1, 'fas fa-fw fa-solid fa-user', 'Setyo Utoro ', 'Koordinator / Narahubung', 'Manager'),
(2, 'fas fa-fw fa-solid fa-user', 'Dhoni Gumilar Daradjat', 'Anggota', 'Manager'),
(3, 'fas fa-fw fa-solid fa-user', 'Mahathir Muhammad', 'Anggota', 'Senior Officer'),
(4, 'fas fa-fw fa-solid fa-user', 'M. Fakhrul Arifin', 'Anggota', 'Officer'),
(5, 'fas fa-fw fa-solid fa-user', 'Robiyansyah', 'Anggota', 'Officer'),
(6, 'fas fa-fw fa-solid fa-user', 'Doyo Gogo Prayogo', 'Anggota', 'Officer');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `login` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(22, '127.0.0.1', 'risa5gmail.com', '2022-12-23 02:27:44'),
(23, '127.0.0.1', 'risa5gmail.com', '2022-12-23 02:27:57');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `id_menu_parent` int(11) NOT NULL,
  `nama_menu` varchar(70) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `kategori` enum('Controller','Link') NOT NULL,
  `href` varchar(100) NOT NULL,
  `status` enum('Y','N') NOT NULL,
  `sort` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `id_menu_parent`, `nama_menu`, `icon`, `kategori`, `href`, `status`, `sort`) VALUES
(1, 0, 'Pengaturan Pengguna', 'fal fa-circle', 'Controller', '', 'Y', '3'),
(2, 0, 'User', '', 'Controller', 'Usersmanagement', 'Y', '4'),
(3, 0, 'Hak Akses', '', 'Controller', 'Roles', 'Y', '3'),
(6, 0, 'Menu', 'fas fa-fw fa-solid fa-circle', 'Controller', 'Menu', 'Y', '2'),
(7, 0, 'Pengaturan', 'fal fa-cogs', 'Controller', '', 'Y', '2'),
(8, 0, 'Modul', '', 'Controller', 'Permission', 'Y', '3'),
(9, 0, 'Dashboard', 'fal fa-home', 'Controller', 'Dashboard', 'Y', '1'),
(25, 0, 'Informasi Dokumen', 'fas fa-fw fa-solid fa-circle', 'Controller', 'Indok', 'Y', '8'),
(26, 0, 'Informasi Kontak', 'fas fa-fw fa-solid fa-circle', 'Controller', 'Info', 'Y', '7'),
(27, 0, 'Dokumen Legal Pendukung', 'fas fa-fw fa-solid fa-circle', 'Controller', 'Dokpen', 'Y', '6'),
(28, 0, 'Berita', 'fas fa-fw fa-solid fa-circle', 'Controller', 'Berita', 'Y', '9'),
(29, 0, 'User Profil', 'fas fa-fw fa-solid fa-circle', 'Controller', 'Profil', 'Y', '5');

-- --------------------------------------------------------

--
-- Table structure for table `overrides`
--

CREATE TABLE `overrides` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `permission_id` smallint(5) UNSIGNED NOT NULL,
  `allow` tinyint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `permission_id` smallint(5) UNSIGNED NOT NULL,
  `permission` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(160) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sort` tinyint(3) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`permission_id`, `permission`, `description`, `parent`, `sort`) VALUES
(2, 'Menu', 'Menu Management', NULL, NULL),
(3, 'Permission', 'Permission Management', NULL, NULL),
(4, 'Roles', 'Role Management', NULL, NULL),
(5, 'Usersmanagement', 'User Management', NULL, NULL),
(6, 'Dashboard', 'Dashboard', NULL, NULL),
(21, 'Indok', 'Informasi Dokumen', NULL, NULL),
(22, 'Info', 'Informasi Kontak', NULL, NULL),
(23, 'Dokpen', 'Dokumen Legal Pendukung', NULL, NULL),
(24, 'Berita', 'Berita', NULL, NULL),
(25, 'Profil', 'User Profil', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` tinyint(3) UNSIGNED NOT NULL,
  `role` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `full` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `default` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role`, `full`, `default`) VALUES
(1, 'Admin', 'Administrator', 1),
(2, 'User', 'User', 0);

-- --------------------------------------------------------

--
-- Table structure for table `role_permissions`
--

CREATE TABLE `role_permissions` (
  `role_id` tinyint(3) UNSIGNED NOT NULL,
  `permission_id` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `role_permissions`
--

INSERT INTO `role_permissions` (`role_id`, `permission_id`) VALUES
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT 1,
  `banned` tinyint(1) NOT NULL DEFAULT 0,
  `ban_reason` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `new_password_key` char(32) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `new_email_key` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `approved` tinyint(1) DEFAULT NULL COMMENT 'For acct approval.',
  `meta` varchar(2000) COLLATE utf8_unicode_ci DEFAULT '',
  `last_ip` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `approved`, `meta`, `last_ip`, `last_login`, `created`, `modified`, `role_id`) VALUES
(1, 'iiky', '$2a$08$UgW69S6DojhLcVHg0KwmJer9ZzIRzBLUCpsEJEJCofwmvAkTvNrZi', 'admin@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, 1, '', '::1', '2022-12-01 01:53:54', '2018-02-24 15:26:07', '2022-12-01 00:53:54', 0),
(16, 'minaa', '$2a$10$NvOi.EjGoZZZUozBiO5iJu48Cs7NrHruwjBG6IQgPwRp7C/1Zbhfm', 'nabila5@gmail.com', 1, 0, NULL, NULL, NULL, NULL, 'c851ea80e46b481cd898209e2febc498', 1, 'a:1:{s:4:\"name\";s:7:\"nabilah\";}', '::1', '2022-12-05 03:24:04', '2022-10-24 15:44:42', '2022-12-05 03:27:17', 0),
(17, 'solojane', '$2a$10$E8e1e5ezZSJdplMQb96TtOUec0yTqG2y2QV7C4XrO/i0a.ilcr4/K', 'risa5@gmail.com', 1, 0, NULL, NULL, NULL, NULL, '6f9cfb07251c660b6e5f9f0175a78f61', 1, 'a:1:{s:4:\"name\";s:4:\"risa\";}', '127.0.0.1', '2022-12-23 03:35:12', '2022-11-29 04:30:43', '2022-12-23 02:35:12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_autologin`
--

CREATE TABLE `user_autologin` (
  `key_id` char(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_agent` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `user_autologin`
--

INSERT INTO `user_autologin` (`key_id`, `user_id`, `user_agent`, `last_ip`, `last_login`) VALUES
('bbecaa5ab748280b48db65737ee04f49', 7, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', '172.16.10.1', '2022-03-13 16:25:53');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `nipeg` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `gender` char(1) COLLATE utf8_unicode_ci DEFAULT '',
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `kota` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tentang_saya` text COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no_image.jpg',
  `dob` date NOT NULL,
  `country` char(2) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT '',
  `timezone` varchar(50) COLLATE utf8_unicode_ci DEFAULT '',
  `website` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT '',
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `nipeg`, `name`, `gender`, `tanggal_lahir`, `alamat`, `kota`, `tentang_saya`, `foto`, `dob`, `country`, `timezone`, `website`, `modified`) VALUES
(1, NULL, 'Administrator', 'P', '1999-08-25', 'Perumahan Taman Bunga Cilame', '', '', '63856c38f257a.jpg', '0000-00-00', '', '', '', '2022-11-29 02:19:37'),
(16, NULL, 'nabilah', 'W', '2005-04-03', 'korea', 'seoul', 'im so cute', '63856a463378f.jpg', '0000-00-00', '', '', '', '2022-11-29 02:11:18'),
(17, NULL, 'risaaa', 'w', '2012-11-06', 'korea', 'bandung', 'hi', '638439e96df47.jpg', '0000-00-00', '', '', '', '2022-11-30 01:18:08');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`user_id`, `role_id`) VALUES
(1, 1),
(16, 1),
(17, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita_csirt`
--
ALTER TABLE `berita_csirt`
  ADD PRIMARY KEY (`id_brt`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`) USING BTREE;

--
-- Indexes for table `dokpen_csirt`
--
ALTER TABLE `dokpen_csirt`
  ADD PRIMARY KEY (`id_dokpen`);

--
-- Indexes for table `indok_csirt`
--
ALTER TABLE `indok_csirt`
  ADD PRIMARY KEY (`id_indok`);

--
-- Indexes for table `kontak_csirt`
--
ALTER TABLE `kontak_csirt`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`) USING BTREE;

--
-- Indexes for table `overrides`
--
ALTER TABLE `overrides`
  ADD PRIMARY KEY (`user_id`,`permission_id`) USING BTREE,
  ADD KEY `user_id1_idx` (`user_id`) USING BTREE,
  ADD KEY `permissions_id1_idx` (`permission_id`) USING BTREE;

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`permission_id`) USING BTREE,
  ADD UNIQUE KEY `permission_UNIQUE` (`permission`) USING BTREE;

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`) USING BTREE,
  ADD UNIQUE KEY `role_UNIQUE` (`role`) USING BTREE;

--
-- Indexes for table `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD PRIMARY KEY (`role_id`,`permission_id`) USING BTREE,
  ADD KEY `role_id2_idx` (`role_id`) USING BTREE,
  ADD KEY `permission_id2_idx` (`permission_id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `username_UNIQUE` (`username`) USING BTREE,
  ADD UNIQUE KEY `email_UNIQUE` (`email`) USING BTREE;

--
-- Indexes for table `user_autologin`
--
ALTER TABLE `user_autologin`
  ADD PRIMARY KEY (`key_id`,`user_id`) USING BTREE;

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`) USING BTREE,
  ADD KEY `user_id2_idx` (`user_id`) USING BTREE,
  ADD KEY `role_id1_idx` (`role_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita_csirt`
--
ALTER TABLE `berita_csirt`
  MODIFY `id_brt` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dokpen_csirt`
--
ALTER TABLE `dokpen_csirt`
  MODIFY `id_dokpen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `indok_csirt`
--
ALTER TABLE `indok_csirt`
  MODIFY `id_indok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kontak_csirt`
--
ALTER TABLE `kontak_csirt`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `permission_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `overrides`
--
ALTER TABLE `overrides`
  ADD CONSTRAINT `permission_id1` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`permission_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_id1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD CONSTRAINT `permission_id2` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`permission_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `role_id2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `role_id1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_id2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
