-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22 Mei 2017 pada 18.08
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rumahsakit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ttl` date NOT NULL,
  `jenkel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tlp` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `spesialis_id` int(10) unsigned NOT NULL,
  `jadwal_id` int(10) unsigned NOT NULL,
  `pengguna_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id`, `nama`, `ttl`, `jenkel`, `tlp`, `alamat`, `spesialis_id`, `jadwal_id`, `pengguna_id`, `created_at`, `updated_at`) VALUES
(2, 'dwy', '2017-05-10', 'Wanita', '345', 'samarinda', 1, 2, 4, '2017-05-19 05:40:07', '2017-05-19 05:40:07'),
(3, 'hanif', '2017-05-04', 'Pria', '098765432123', 'samarinda', 1, 1, 6, '2017-05-19 16:34:46', '2017-05-19 16:34:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE IF NOT EXISTS `informasi` (
`id` int(10) unsigned NOT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` longtext COLLATE utf8_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_info_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `title`, `gambar`, `jenis_info_id`, `created_at`, `updated_at`) VALUES
(3, 'coba', 'Untuk memberi ruang pada teks disebelah gambar, tentu ukuran lebar gambar (width) harus dikecilkan. Seberapa kecil tergantung tema yang digunakan. Kode tersebut sudah diuji cobakan pada WordPress, Blogspot dan Mywapblog dan berfungsi dengan baik, dan insya allah semua elemen yang digunakan sesuai dengan standar HTML5 Pemasangan gambar dengan kode tersebut bisa juga dipasang pada excerpt post sehingga pembaca tidak hanya akan membaca sedikit ringkasan dari sebuah postingan namun bisa melihat gambar ilustrasinya juga. Apa itu excerpt?  Excerpt post adalah sebuah kutipan atau ringkasan dari sebuah tulisan artikel atau postingan yang dibuat sendiri dan muncul di halaman utama dengan disertai link yang menuju ke isi post secara keseluruhan. Excerpt sifatnya opsional (boleh digunakan boleh tidak) dan bebas, dalam arti setelah kita membuat satu tulisan kita bebas untuk membuat sebuah ulasan singkat mengenai inti dari tulisan tersebut. Dan jika tidak digunakan, paragraf pertama tulisan tersebut yang otomatis akan menggantikan. Cara membuat excerpt  WordPress sudah mendukung fitur excerpt ini begitu juga dengan my opera blog, cuma di my opera istilahnya sedikit berbeda yaitu “post intro”. Untuk membuat excerpt buatlah sebuah postingan terlebih dahulu di post editor setelah itu lihat dibawahnya ada menu excerpt dengan teks area kosong, isi dengan kalimat anda sendiri yang menggambarkan isi postingan tadi.', '$R8LJ2TQ.jpg', 1, '2017-05-19 09:40:23', '2017-05-19 13:55:26'),
(4, 'coba', '	Untuk memberi ruang pada teks disebelah gambar, tentu ukuran lebar gambar (width) harus dikecilkan. Seberapa kecil tergantung tema yang digunakan. Kode tersebut sudah diuji cobakan pada WordPress, Blogspot dan Mywapblog dan berfungsi dengan baik, dan insya allah semua elemen yang digunakan sesuai dengan standar HTML5 Pemasangan gambar dengan kode tersebut bisa juga dipasang pada excerpt post sehingga pembaca tidak hanya akan membaca sedikit ringkasan dari sebuah postingan namun bisa melihat gambar ilustrasinya juga. Apa itu excerpt? Excerpt post adalah sebuah kutipan atau ringkasan dari sebuah tulisan artikel atau postingan yang dibuat sendiri dan muncul di halaman utama dengan disertai link yang menuju ke isi post secara keseluruhan. Excerpt sifatnya opsional (boleh digunakan boleh tidak) dan bebas, dalam arti setelah kita membuat satu tulisan kita bebas untuk membuat sebuah ulasan singkat mengenai inti dari tulisan tersebut. Dan jika tidak digunakan, paragraf pertama tulisan tersebut yang otomatis akan menggantikan. Cara membuat excerpt WordPress sudah mendukung fitur excerpt ini begitu juga dengan my opera blog, cuma di my opera istilahnya sedikit berbeda yaitu “post intro”. Untuk membuat excerpt buatlah sebuah postingan terlebih dahulu di post editor setelah itu lihat dibawahnya ada menu excerpt dengan teks area kosong, isi dengan kalimat anda sendiri yang menggambarkan isi postingan tadi.', '$RIO3VUV.jpg', 1, '2017-05-19 10:03:55', '2017-05-19 13:56:10'),
(5, 'Tes Upload', '	Untuk memberi ruang pada teks disebelah gambar, tentu ukuran lebar gambar (width) harus dikecilkan. Seberapa kecil tergantung tema yang digunakan. Kode tersebut sudah diuji cobakan pada WordPress, Blogspot dan Mywapblog dan berfungsi dengan baik, dan insya allah semua elemen yang digunakan sesuai dengan standar HTML5 Pemasangan gambar dengan kode tersebut bisa juga dipasang pada excerpt post sehingga pembaca tidak hanya akan membaca sedikit ringkasan dari sebuah postingan namun bisa melihat gambar ilustrasinya juga. Apa itu excerpt? Excerpt post adalah sebuah kutipan atau ringkasan dari sebuah tulisan artikel atau postingan yang dibuat sendiri dan muncul di halaman utama dengan disertai link yang menuju ke isi post secara keseluruhan. Excerpt sifatnya opsional (boleh digunakan boleh tidak) dan bebas, dalam arti setelah kita membuat satu tulisan kita bebas untuk membuat sebuah ulasan singkat mengenai inti dari tulisan tersebut. Dan jika tidak digunakan, paragraf pertama tulisan tersebut yang otomatis akan menggantikan. Cara membuat excerpt WordPress sudah mendukung fitur excerpt ini begitu juga dengan my opera blog, cuma di my opera istilahnya sedikit berbeda yaitu “post intro”. Untuk membuat excerpt buatlah sebuah postingan terlebih dahulu di post editor setelah itu lihat dibawahnya ada menu excerpt dengan teks area kosong, isi dengan kalimat anda sendiri yang menggambarkan isi postingan tadi.', '$RIO3VUV.jpg', 1, '2017-05-19 10:23:45', '2017-05-19 13:56:28'),
(6, 'gwdga', '	Untuk memberi ruang pada teks disebelah gambar, tentu ukuran lebar gambar (width) harus dikecilkan. Seberapa kecil tergantung tema yang digunakan. Kode tersebut sudah diuji cobakan pada WordPress, Blogspot dan Mywapblog dan berfungsi dengan baik, dan insya allah semua elemen yang digunakan sesuai dengan standar HTML5 Pemasangan gambar dengan kode tersebut bisa juga dipasang pada excerpt post sehingga pembaca tidak hanya akan membaca sedikit ringkasan dari sebuah postingan namun bisa melihat gambar ilustrasinya juga. Apa itu excerpt? Excerpt post adalah sebuah kutipan atau ringkasan dari sebuah tulisan artikel atau postingan yang dibuat sendiri dan muncul di halaman utama dengan disertai link yang menuju ke isi post secara keseluruhan. Excerpt sifatnya opsional (boleh digunakan boleh tidak) dan bebas, dalam arti setelah kita membuat satu tulisan kita bebas untuk membuat sebuah ulasan singkat mengenai inti dari tulisan tersebut. Dan jika tidak digunakan, paragraf pertama tulisan tersebut yang otomatis akan menggantikan. Cara membuat excerpt WordPress sudah mendukung fitur excerpt ini begitu juga dengan my opera blog, cuma di my opera istilahnya sedikit berbeda yaitu “post intro”. Untuk membuat excerpt buatlah sebuah postingan terlebih dahulu di post editor setelah itu lihat dibawahnya ada menu excerpt dengan teks area kosong, isi dengan kalimat anda sendiri yang menggambarkan isi postingan tadi.', '$RIO3VUV.jpg', 2, '2017-05-19 10:41:03', '2017-05-19 13:56:44'),
(7, 'apaaasdas', 'Untuk memberi ruang pada teks disebelah gambar, tentu ukuran lebar gambar (width) harus dikecilkan. Seberapa kecil tergantung tema yang digunakan. Kode tersebut sudah diuji cobakan pada WordPress, Blogspot dan Mywapblog dan berfungsi dengan baik, dan insya allah semua elemen yang digunakan sesuai dengan standar HTML5 Pemasangan gambar dengan kode tersebut bisa juga dipasang pada excerpt post sehingga pembaca tidak hanya akan membaca sedikit ringkasan dari sebuah postingan namun bisa melihat gambar ilustrasinya juga.f7hUntuk memberi ruang pada teks disebelah gambar, tentu ukuran lebar gambar (width) harus dikecilkan. Seberapa kecil tergantung tema yang digunakan. Kode tersebut sudah diuji cobakan pada WordPress, Blogspot dan Mywapblog dan berfungsi dengan baik, dan insya allah semua elemen yang digunakan sesuai dengan standar HTML5 Pemasangan gambar dengan kode tersebut bisa juga dipasang pada excerpt post sehingga pembaca tidak hanya akan membaca sedikit ringkasan dari sebuah postingan namun bisa melihat gambar ilustrasinya juga.Untuk memberi ruang pada teks disebelah gambar, tentu ukuran lebar gambar (width) harus dikecilkan. Seberapa kecil tergantung tema yang digunakan. Kode tersebut sudah diuji cobakan pada WordPress, Blogspot dan Mywapblog dan berfungsi dengan baik, dan insya allah semua elemen yang digunakan sesuai dengan standar HTML5 Pemasangan gambar dengan kode tersebut bisa juga dipasang pada excerpt post sehingga pembaca tidak hanya akan membaca sedikit ringkasan dari sebuah postingan namun bisa melihat gambar ilustrasinya juga.Untuk memberi ruang pada teks disebelah gambar, tentu ukuran lebar gambar (width) harus dikecilkan. Seberapa kecil tergantung tema yang digunakan. Kode tersebut sudah diuji cobakan pada WordPress, Blogspot dan Mywapblog dan berfungsi dengan baik, dan insya allah semua elemen yang digunakan sesuai dengan standar HTML5 Pemasangan gambar dengan kode tersebut bisa juga dipasang pada excerpt post sehingga pembaca tidak hanya akan membaca sedikit ringkasan dari sebuah postingan namun bisa melihat gambar ilustrasinya juga.Untuk memberi ruang pada teks disebelah gambar, tentu ukuran lebar gambar (width) harus dikecilkan. Seberapa kecil tergantung tema yang digunakan. Kode tersebut sudah diuji cobakan pada WordPress, Blogspot dan Mywapblog dan berfungsi dengan baik, dan insya allah semua elemen yang digunakan sesuai dengan standar HTML5 Pemasangan gambar dengan kode tersebut bisa juga dipasang pada excerpt post sehingga pembaca tidak hanya akan membaca sedikit ringkasan dari sebuah postingan namun bisa melihat gambar ilustrasinya juga.Untuk memberi ruang pada teks disebelah gambar, tentu ukuran lebar gambar (width) harus dikecilkan. Seberapa kecil tergantung tema yang digunakan. Kode tersebut sudah diuji cobakan pada WordPress, Blogspot dan Mywapblog dan berfungsi dengan baik, dan insya allah semua elemen yang digunakan sesuai dengan standar HTML5 Pemasangan gambar dengan kode tersebut bisa juga dipasang pada excerpt post sehingga pembaca tidak hanya akan membaca sedikit ringkasan dari sebuah postingan namun bisa melihat gambar ilustrasinya juga.Untuk memberi ruang pada teks disebelah gambar, tentu ukuran lebar gambar (width) harus dikecilkan. Seberapa kecil tergantung tema yang digunakan. Kode tersebut sudah diuji cobakan pada WordPress, Blogspot dan Mywapblog dan berfungsi dengan baik, dan insya allah semua elemen yang digunakan sesuai dengan standar HTML5 Pemasangan gambar dengan kode tersebut bisa juga dipasang pada excerpt post sehingga pembaca tidak hanya akan membaca sedikit ringkasan dari sebuah postingan namun bisa melihat gambar ilustrasinya juga.', '$R1SRPXF.jpg', 2, '2017-05-19 10:51:26', '2017-05-19 11:11:09'),
(8, 'apa', 'Cara membuat posisi gambar di samping teks 18/07/2012 by Nourly	72 Komentar Untuk membuat sebuah tulisan menjadi menarik, memberi tambahan gambar adalah salah satu caranya disamping memperkuat nilai SEOnya dari segi traffic, karena tulisan yang berisi gambar tidak hanya akan ditemukan melalui penelusuran web tapi juga melalui penelusuran gambar. Agar tak terkesan monoton dalam pemasangan gambar (begitu-begitu aja) kita bisa memodifikasinya dengan merubah letak gambar yang berbeda-beda disetiap tulisan. seperti gaya tulisan di majalah-majalah dan situs-situs berita misalnya. Oleh sebab itu Topik kali ini kita akan membahas cara membuat posisi gambar ilustrasi berada disamping awal teks/tulisan/postingan, caranya lumayan cukup sederhana, hanya tinggal menambahkan beberapa kode HTML (tag, atribut) ke dalam gambar dan teks tersebut, dan bisa di lakukan dengan beberapa cara. Meski begitu namanya manusia tempatnya lupa dan salah, maka saya dokumentasikan disini. Cara membuat gambar ilustrasi berada di sisi kiri atau kanan awal teks  iklan lucuIni adalah contoh gambar PERTAMA yang posisinya berada di samping kiri teks dengan menggunakan tag <p> dan atribut dasar style=”float:left;” pada gambar. Margin, padding, width dan alinea teks diatur secara default. Lihat format selengkapnya dibawah ini : <p ><img src=”URL gambar” style=”float:left;” />tulis teks disini</p> iklan lucuIni adalah contoh gambar KEDUA yang posisinya berada di samping kanan teks masih menggunakan tag <p> , atribut dasar style=”float:right;” pada gambar dan tambahan atribut perataan teks (text-align:justify). Margin, padding, dan width diatur secara default. Lihat format selengkapnya berikut ini : <p style=”text-align:justify;”><img src=”URL gambar” style=”float:right;” />tulis teks disini</p> Membuat posisi gambar disamping teks dengan beberapa modifikasi  Modifikasi yang dimaksud adalah penambahan warna background dan garis, pengaturan ulang jarak antara teks dengan gambar dsb Dan ini adalah contoh gambar KETIGA yang posisinya berada di samping kiri teks menggunakan tag <div>, atribut dasar style=”float:left;” pada gambar dan beberapa tambahan modifikasi sebagaimana telah dijelaskan. Lihat format selengkapnya berikut ini :   <div style=”text-align:justify;width:75%; background-color:#ff9999; border:1px solid #000099; padding:8px;”><img src=”URL gambar” style=”float:left; margin:0 8px 4px 0;” />tulis teks disini</div> Keterangan : Nilai atribut Style=”float:left” dipakai untuk menentukan posisi gambar disebelah kiri, ganti kata “left” dengan kata “right” untuk menentukan letak gambar disebelah kanan, untuk meletakan gambar di tengah-tengah teks saya juga belum bisa :mrgreen: Nilai atribut style="text-align:justify;" dipakai untuk merapihkan posisi kanan dan kiri teks agar sejajar rata, tidak digunakan juga tidak apa2 Margin 0=atas gambar, 8=kanannya, 4= bawahnya, 0=kirinya di pakai untuk memisahkan jarak antara teks dengan gambar agar tidak menempel / terlalu dekat Atribut width:75% dipakai untuk merubah ukuran lebar teks dan gambar. memperkecil atau memperbesar bila tidak dipakai maka ukuran lebar kembali ke pengaturan default seperti contoh gambar 1 dan 2 Untuk memberi ruang pada teks disebelah gambar, tentu ukuran lebar gambar (width) harus dikecilkan. Seberapa kecil tergantung tema yang digunakan. Kode tersebut sudah diuji cobakan pada WordPress, Blogspot dan Mywapblog dan berfungsi dengan baik, dan insya allah semua elemen yang digunakan sesuai dengan standar HTML5 Pemasangan gambar dengan kode tersebut bisa juga dipasang pada excerpt post sehingga pembaca tidak hanya akan membaca sedikit ringkasan dari sebuah postingan namun bisa melihat gambar ilustrasinya juga. Apa itu excerpt?  Excerpt post adalah sebuah kutipan atau ringkasan dari sebuah tulisan artikel atau postingan yang dibuat sendiri dan muncul di halaman utama dengan disertai link yang menuju ke isi post secara keseluruhan. Excerpt sifatnya opsional (boleh digunakan boleh tidak) dan bebas, dalam arti setelah kita membuat satu tulisan kita bebas untuk membuat sebuah ulasan singkat mengenai inti dari tulisan tersebut. Dan jika tidak digunakan, paragraf pertama tulisan tersebut yang otomatis akan menggantikan. Cara membuat excerpt', '$R81C43A.jpg', 2, '2017-05-19 11:16:39', '2017-05-19 11:16:39'),
(9, 'apa aja boleh', 'Untuk memberi ruang pada teks disebelah gambar, tentu ukuran lebar gambar (width) harus dikecilkan. Seberapa kecil tergantung tema yang digunakan. Kode tersebut sudah diuji cobakan pada WordPress, Blogspot dan Mywapblog dan berfungsi dengan baik, dan insya allah semua elemen yang digunakan sesuai dengan standar HTML5 Pemasangan gambar dengan kode tersebut bisa juga dipasang pada excerpt post sehingga pembaca tidak hanya akan membaca sedikit ringkasan dari sebuah postingan namun bisa melihat gambar ilustrasinya juga. Apa itu excerpt?  Excerpt post adalah sebuah kutipan atau ringkasan dari sebuah tulisan artikel atau postingan yang dibuat sendiri dan muncul di halaman utama dengan disertai link yang menuju ke isi post secara keseluruhan. Excerpt sifatnya opsional (boleh digunakan boleh tidak) dan bebas, dalam arti setelah kita membuat satu tulisan kita bebas untuk membuat sebuah ulasan singkat mengenai inti dari tulisan tersebut. Dan jika tidak digunakan, paragraf pertama tulisan tersebut yang otomatis akan menggantikan. Cara membuat excerpt  WordPress sudah mendukung fitur excerpt ini begitu juga dengan my opera blog, cuma di my opera istilahnya sedikit berbeda yaitu “post intro”. Untuk membuat excerpt buatlah sebuah postingan terlebih dahulu di post editor setelah itu lihat dibawahnya ada menu excerpt dengan teks area kosong, isi dengan kalimat anda sendiri yang menggambarkan isi postingan tadi.', '$R8JWNSU.jpg', 3, '2017-05-19 14:54:51', '2017-05-19 14:54:51'),
(10, 'fg', 'jhafajfasjgasjdjhafajfasjgasjdjhafajfjhafajfasjgasjdjhafajfasjgasjdjhafajfasjgasjdjhafajfasjgasjdjhafajfasjgasjdjhafajfasjgasjdjhafajfasjgasjdjhafajfasjgasjdjhafajfasjgasjdjhafajfasjgasjdjhafajfasjgasjdjhafajfasjgasjdjhafajfasjgasjdasjhafajfasjgasjdjgasjdjhafajfasjgasjdjhafajfasjgasjdjhafajfasjgasjdjhafajfasjgasjdjhafajfasjgasjdjhafajfasjgasjdjhafajfasjgasjdjhafajfasjgasjd', '$R81C43A.jpg', 2, '2017-05-19 16:48:06', '2017-05-19 16:48:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, '07.00 - 12.00', '2017-05-18 11:16:53', '2017-05-18 11:16:53'),
(2, '12.00 - 20.00', '2017-05-18 11:17:18', '2017-05-18 11:17:18'),
(3, '20.00 - 07.00', '2017-05-18 11:17:41', '2017-05-18 11:17:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_info`
--

CREATE TABLE IF NOT EXISTS `jenis_info` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `jenis_info`
--

INSERT INTO `jenis_info` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Layanan', NULL, NULL),
(2, 'Fasilitas', NULL, NULL),
(3, 'Umum', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan`
--

CREATE TABLE IF NOT EXISTS `layanan` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `layanan`
--

INSERT INTO `layanan` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Rawat Inap', NULL, NULL),
(2, 'Rawat Jalan', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_05_16_062747_tabel_pengguna', 1),
('2017_05_16_062840_tabel_layanan', 1),
('2017_05_16_062949_tabel_spesialis', 1),
('2017_05_16_063156_tabel_jenisinfo', 1),
('2017_05_16_063412_tabel_jadwal', 1),
('2017_05_16_063413_tabel_dokter', 1),
('2017_05_16_091348_tabel_informasi', 1),
('2017_05_18_131228_buat_table_pasien', 1),
('2017_05_18_131229_tabel_pasien_dokter', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ttl` date NOT NULL,
  `jenkel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tlp` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pekerjaan` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id`, `nama`, `ttl`, `jenkel`, `tlp`, `alamat`, `pekerjaan`, `created_at`, `updated_at`) VALUES
(2, 'edwin', '2015-12-01', 'Pria', '0817365463', 'mana aja', 'baper', NULL, NULL),
(3, 'ivan', '2017-05-24', 'Pria', '987687635472', 'samarinda', 'asfaf', '2017-05-19 16:36:09', '2017-05-19 16:36:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien_dokter`
--

CREATE TABLE IF NOT EXISTS `pasien_dokter` (
`id` int(10) unsigned NOT NULL,
  `pasien_id` int(10) unsigned NOT NULL,
  `dokter_id` int(10) unsigned NOT NULL,
  `layanan_id` int(10) unsigned NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `pasien_dokter`
--

INSERT INTO `pasien_dokter` (`id`, `pasien_id`, `dokter_id`, `layanan_id`, `tanggal`, `keterangan`, `created_at`, `updated_at`) VALUES
(4, 3, 2, 2, '2017-05-10', 'apa', '2017-05-19 16:46:31', '2017-05-19 16:46:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
`id` int(10) unsigned NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'romy', 'romy', 0, 'LmDaZc4GyHaxOc8rwEilYltgVKoNrIg2TReWk9quBFJZuCfGsZPnuNALjIsW', NULL, '2017-05-21 10:29:58'),
(3, 'r', '1', 1, 'NAkyfQ4nporFO8uve1zFcDu5M1cYaS5nyrcjvJKRWtnlgU80IqiOW6cfaZzO', '2017-05-19 01:59:08', '2017-05-19 16:41:26'),
(4, 'dwy', '12345', 1, 'Jl4zOWzbf63mf1kisf4pvCBgm0C1N5E2u5pfgQIf24nW4lWyQLU8kBipzfhc', '2017-05-19 05:40:07', '2017-05-21 10:32:03'),
(5, '', '', 1, NULL, '2017-05-19 16:34:02', '2017-05-19 16:34:02'),
(6, 'apa', '12345678', 1, NULL, '2017-05-19 16:34:46', '2017-05-19 16:34:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spesialis`
--

CREATE TABLE IF NOT EXISTS `spesialis` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `spesialis`
--

INSERT INTO `spesialis` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Spesialis Gigi', '2017-05-18 19:28:21', '2017-05-18 19:28:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
 ADD PRIMARY KEY (`id`), ADD KEY `dokter_spesialis_id_foreign` (`spesialis_id`), ADD KEY `dokter_jadwal_id_foreign` (`jadwal_id`), ADD KEY `dokter_pengguna_id_foreign` (`pengguna_id`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
 ADD PRIMARY KEY (`id`), ADD KEY `informasi_jenis_info_id_foreign` (`jenis_info_id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_info`
--
ALTER TABLE `jenis_info`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien_dokter`
--
ALTER TABLE `pasien_dokter`
 ADD PRIMARY KEY (`id`), ADD KEY `pasien_dokter_pasien_id_foreign` (`pasien_id`), ADD KEY `pasien_dokter_dokter_id_foreign` (`dokter_id`), ADD KEY `pasien_dokter_layanan_id_foreign` (`layanan_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spesialis`
--
ALTER TABLE `spesialis`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jenis_info`
--
ALTER TABLE `jenis_info`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pasien_dokter`
--
ALTER TABLE `pasien_dokter`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `spesialis`
--
ALTER TABLE `spesialis`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dokter`
--
ALTER TABLE `dokter`
ADD CONSTRAINT `dokter_jadwal_id_foreign` FOREIGN KEY (`jadwal_id`) REFERENCES `jadwal` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `dokter_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `dokter_spesialis_id_foreign` FOREIGN KEY (`spesialis_id`) REFERENCES `spesialis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `informasi`
--
ALTER TABLE `informasi`
ADD CONSTRAINT `informasi_jenis_info_id_foreign` FOREIGN KEY (`jenis_info_id`) REFERENCES `jenis_info` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pasien_dokter`
--
ALTER TABLE `pasien_dokter`
ADD CONSTRAINT `pasien_dokter_dokter_id_foreign` FOREIGN KEY (`dokter_id`) REFERENCES `dokter` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `pasien_dokter_layanan_id_foreign` FOREIGN KEY (`layanan_id`) REFERENCES `layanan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `pasien_dokter_pasien_id_foreign` FOREIGN KEY (`pasien_id`) REFERENCES `pasien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
