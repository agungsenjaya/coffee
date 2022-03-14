-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 14 Mar 2022 pada 23.48
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffee`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2021_10_15_061606_create_products_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `judul`, `img`, `content`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'caturra sukajaya', 'product/1634401084600x400.png', '<p>Desa Sukajaya merupakan bagian dari wilayah Kecamatan Lembang, Kabupaten Bandung Barat yang terletak pada posisi koordinat antara 107° 37’30”BT – 107° 39’30”BT dan 6°45’48” LS – 6° 45,49”LS. Luas wilayah sekitar 3.519 hektar berada pada ketinggian ± 1600 meter di atas permukaan laut dengan wilayahnya dikelilingi oleh pegunungan dan perbukitan. Beriklim pegunungan sejuk dengan curah hujan rata-rata mencapai 862 Mm/th dan rata rata suhu udara 18 – 25oC.​</p><p>Desa Sukajaya adalah daerah penghasil kopi terutama jenis Arabika Caturra. Kopi jenis ini mempunyai cita rasa yang menakjubkan. Hal tersebut karena tanaman kopi ini ditanam di ketinggian 1600 meter di atas permukaan laut, sehingga menyebabkan kopi arabika ini mempunyai cita rasa yang tinggi dan berkualitas tinggi pula. Rasa dari kopi tersebut terasa lembut, manis dan juga kuat.</p><p>Musim panen kopi di Desa Sukajaya biasanya pada bulan ke-7 dalam satu tahun. Cara pengolahan kopi di desa Sukajaya masih dilakukan secara manual dan dipetik satu per satu dengan menggunakan tangan yang dipilih dengan cara seksama. Pengolahan kopi di Desa Sukajaya sendiri dimulai sejak tahun 2010. Salah satu petani mandiri yang masih eksis adalah Abah Yoseph berupaya menjaga kestabilan lingkungan di Desa Sukajaya dengan menggunakan pupuk organik hasil fermentasi kotoran sapi yang dicampur dengan potongan batang pohon pisang sehingga memiliki kandungan fosfor yang tinggi dan mikroba pengurai yang baik, yang dimana pupuk tersebut digunakan untuk mewrawat sekitar 20 ribuan pohon kopi dilahan seluas 30 hektar.<br>&nbsp;</p>', 'caturra-sukajaya', '2021-10-16 09:18:04', '2021-11-04 03:52:56'),
(2, 'kamojang', 'product/1634401943600x400.png', '<p>Kabupaten Garut terletak di Provinsi Jawa Barat bagian Tenggara dengan luas wilayah administratif sebesar 306.519 Ha (3.065,19 km²). Sebagian besar wilayah kabupaten ini adalah pegunungan. Bentang alam Kabupaten Garut Bagian Utara terdiri dari atas dua aransemen bentang alam, yaitu: (1) dataran dan cekungan antar gunung berbentuk tapal kuda membuka ke arah utara, (2) rangkaian-rangkaian gunung api aktif yang mengelilingi dataran dan cekungan antar gunung, seperti komplek Gunung Guntur – Gunung Haruman – Gunung Kamojang di sebelah barat, Gunung Papandayan – Gunung Cikuray di sebelah selatan tenggara, dan ​Gunung Cikuray – Gunung Talagabodas – Gunung Galunggung di sebelah timur. variasi temperatur bulanan berkisar antara 24 °C – 27 °. Gunung Kamojang, dikenal luas dengan nama Kawah Kamojang adalah sumber panas bumi, dalam sejarahnya, dikenal sebagai gunung berapi yang bernama Gunung Guntur, tetapi kawah ini dikelompokkan dalam gunung berapi aktif karena aktivitas panas bumi.​</p><p>Kopi Arabica Kamojang mulai di kelola tahun 2012 oleh kelompok petani kopi Wanoja yang ada di lingkungan Desa Laksana Kecamatan Ibun, Garut, Jawa Barat. Kata Wanoja berasal dari bahasa sunda yang memiliki arti perempuan, karena pada awal nya kelompok kopi wanoja beranggotakan hanya perempuan saja. Kopi arabika Kamojang Garut Jawa Barat ini pun mempunyai kualitas tinggi. Hal tersebut karena tanaman kopi ini ditanam 1500 meter di atas permukaan laut. Sehingga menyebabkan kopi Arabika ini mempunyai cita rasa yang tinggi dan berkualitas tinggi pula. Buah kopi siap untuk di panen pada bulan April – Mei sampai September – Oktober. Untuk menghasilkan kualitas kopi yang bagus, buah kopi yang di petik adalah buah kopi berwarna merah yang benar-benar sudah matang. Panen di lakukan secara manual dan dipetik satu per satu dengan menggunakan tangan, salah satu pemilik lahan perkebunan yaitu Moh. Ramdhan Reza telah mengelola perkebunan kopi seluas 75 hektar.​</p><p>​Para petani memanen kopi pada pagi dan siang hari. Kemudian pada malam hari mereka melakukan proses pemisahan ceri dan biji kopi lalu mencucinya. Untuk proses full wash kopi dilakukan dengan “menseleksi” ceri kopi terlebih dahulu dengan merendamnya di dalam air. Ceri yang mengapung akan dibuang, sementara yang tenggelam akan tetep dibiarkan untuk proses lanjutan. Selanjutnya kulit luar dan daging ceri kopi akan di buang dengan menggunakan mesin khusus yang disebut depulper (pengupas).</p><p>​Biji kopi yang sudah terlepas dari kulitnya kemudian di bersihkan lagi dengan memasukkan ke dalam tempat khusus berisi air, agar sisa-sisa kulit yang masih melekat bisa lepas seluruhnya akibat proses fermentasi. Untuk perawatan tanaman kopi tidak menggunakan pestisida.</p>', 'kamojang', '2021-10-16 09:32:23', '2021-11-04 03:55:52'),
(5, 'malabar', 'product/1634450468600x400.png', '<p>Gunung Malabar dengan ketinggian hingga 1800 mdpl dan suhu udara yang sejuk cenderung dingin membuat Kawasan Gunung Malabar di Jawa Barat menjadi daerah yang &nbsp;banyak sekali dikelola sebagai area perkebunan seperti the dan kopi. Kopi Arabika Malabar adalah salah satu potensi perkebunan yang terkenal dari daerah ini. &nbsp;Kopi Malabar Jawa Barat ini sudah dikenal sejak lama bahkan sejak zaman penjajahan Belanda. Pada tahun 1725, Indonesia menjadi negara terbesar pengekspor kopi di dunia dan sebagian besar adalah dari kopi Malabar ini. ​</p><p>​Hingga kini kopi Malabar masih menjadi salah satu favorit bagi penikmat kopi Nusantara. Kopi Malabar juga dikenal dengan sebutan “kopi Java Preanger” &nbsp;yang telah tersohor hingga ke mancanegara. Kopi Arabika Malabar ini sangat unik, karakteristik rasanya begitu kental; rasa coklat dominan pada kopi ini dengan after taste &nbsp;rempah, bahkan rasa jeruk juga terasa pada kopi ini, tergantung karakteristik buahnya. Yang pasti, kopi Malabar tak pernah mengecewakan para penikmatnya.​</p><p>Pada tahun 2007 Telompok Tani yang diketuai oleh Bapak Tatang sepakat hanya menanam satu komoditas yaitu tanaman kopi. Bapak Tatang sendiri mempunyai lahan kopi seluas 2 hektar. Panen tanaman kopi di daerah Malabar yaitu pada Mei hingga September, karena pada bulan-bulan itulah tanaman kopi di Malabar berbuah. Saat sudah berwarna merah keseluruhan, artinya tanaman kopi sudah siap dipanen. Pemilihannya tidak asal-asalan, hanya biji kopi terbaiklah yang akan diproduksi sehingga rasanya luar biasa nikmatnya. Jadi petani kopi di sana harus mengetahui sifat tanaman kopi juga, terutama karena di sana juga banyak tumbuh tanaman lain di sekitarnya, yang pastinya bisa mempengaruhi rasa kopi. ​</p><p>Karena dipetik langsung dari kebunnya, kopi Arabika Malabar Jawa Barat terjaga kualitasnya. Salah satu rahasia yang membuat kopi Malabar nikmat adalah karena proses pengolahannya yang bagus. Setelah dipetik, buah kopi yang matang diolah ke tahap selanjutnya. Saat pengolahan ini, berat akan menyusut hingga 50 persen saat menjadi green beans. Di sini, kalian bisa tahu apa yang membuat penyusutan sangat drastis. Tapi, itulah kenapa rasanya menjadi sungguh nikmat. Pengolahan kopi Malabar memerlukan waktu lama. Namun, hasilnya terbukti memuaskan​<br>&nbsp;</p>', 'malabar', '2021-10-16 23:01:08', '2021-11-04 03:57:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sunda Coffee Beans', 'info@sundacoffeebeans.jp', NULL, '$2y$10$OzCFAVWSSOM/MXJeA9uebehwZYoB.GdmlwdTLYUFIKXdNMFnwvkfG', NULL, NULL, '2021-10-17 00:22:52');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
