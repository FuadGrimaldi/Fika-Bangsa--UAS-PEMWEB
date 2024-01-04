-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2024 pada 02.44
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stream-app`
--

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2023_08_02_131918_create_movies_table', 1),
(4, '2023_08_02_153400_create_packages_table', 1),
(5, '2023_08_02_153812_create_transactions_table', 1),
(6, '2023_08_02_154338_create_user_premiums_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `movies`
--

CREATE TABLE `movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trailer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `casts` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `large_thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `release_date` date NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_about` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `movies`
--

INSERT INTO `movies` (`id`, `title`, `trailer`, `movie`, `casts`, `categories`, `small_thumbnail`, `large_thumbnail`, `release_date`, `about`, `short_about`, `duration`, `featured`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Petualangan Bersama Asep', 'https://youtu.be/Ke1Y3P9D0Bc', 'https://ggwp', 'Asep Ginanjar, Abel Avriyana S, Soni Sonjaya, Fuad Grimaldi', 'Action', 'y6SfEH1G26petualangan bersama asep_small thumbnel.png', 'aX8uMXAqJWpba_large thumbneil.png', '2023-11-08', 'Asep, seorang petualang biasa, tanpa sengaja mendapatkan kekuatan super saat terperangkap dalam percobaan ilmiah. Dengan kecepatan luar biasa dan kemampuan mengendalikan elemen alam, dia menjadi \"Asepman\" - seorang superhero yang melindungi kota dari bahaya.  Dibalik identitasnya yang baru, Asepman tetap menjaga kehidupan pribadinya. Dia belajar menjaga keseimbangan antara kehidupan superhero dan kehidupan sehari-hari. Setiap tindakannya memperlihatkan bahwa pahlawan sejati adalah mereka yang siap bertindak demi kebaikan orang lain, meskipun dari luar dia terlihat biasa saja.', 'Setelah Asep berkelana dia menemukan jati diri bersamaan dengan super powernya, dan dia menjadi asepman the superhero.', '2h 5m', 1, NULL, '2023-08-14 05:02:18', '2024-01-03 09:56:33'),
(4, '4 Remaja Pembunuh Berantai', 'https://youtube/kocak', 'https://4remajapembunuh', 'Asep Ginanjar, Abel Avriyana S, Soni Sonjaya, Fuad Grimaldi', 'Horror', 'b5AMlnyeMj4remaja_small.png', 'zF2WHtcJkp4remaja_large.png', '2024-01-08', 'Empat remaja berteman sejak kecil, tumbuh di lingkungan sulit. Saat terlibat dalam kejahatan, mereka menggunakan bakat alami mereka untuk menjadi pembunuh yang pintar. Namun, konflik moral muncul saat mereka terperangkap dalam dunia kejahatan yang semakin rumit. Mereka harus memilih antara loyalitas pada satu sama lain dan tekanan dari kehidupan kriminal, memunculkan dilema moral tentang arah hidup mereka.', '4 Remaja yang berteman dari kecil menjadi pembunuh yang pintar', '1h 56m', 1, NULL, '2024-01-03 03:43:11', '2024-01-03 04:01:43'),
(5, 'The Big 4', 'https://youtu.be/big4', 'https://thebig4', 'Asep Ginanjar, Abel Avriyana S, Afra Afrizal, Fuad Grimaldi', 'Action', 'oFUCqPZAO2thebig4_small.png', 'jy69OmcU5lthebig4_large.png', '2024-01-08', 'Empat perusahaan naga dipimpin oleh empat manusia kuat yang mendominasi dunia. Mereka mengontrol berbagai industri kunci dan memiliki pengaruh besar dalam ekonomi dan politik global. Persaingan di antara mereka seringkali memicu konflik untuk dominasi dan pengaruh lebih lanjut di berbagai sektor. Keberadaan mereka menimbulkan pertanyaan tentang sejauh mana kekuasaan individu atau perusahaan seharusnya dalam mengatur dunia.', '4 perusahaan naga di pimpin oleh 4 manusia kuat yang menguasai dunia', '1h 40m', 1, NULL, '2024-01-03 03:48:44', '2024-01-03 09:57:06'),
(6, 'Nightmare', 'https://youtu.be/nightmare', 'https://nightmare', 'Asep Ginanjar, Abel Avriyana S', 'Horror', '6EFLVD2LvS8.png', 'T2emFYNB1xnightmare_large.png', '2024-01-08', 'Sejak saat itu, mimpi buruk menghantui, membawa ketakutan akan kehilangan orang tersayang. Dalam alam bawah sadar, tragedi tak terhindarkan terulang, menyebabkan kegelapan emosional dan rasa bersalah yang mengganggu. Mimpi buruk itu meninggalkan jejak trauma yang sulit diatasi, mengganggu keseharian dengan kengerian yang sulit dijelaskan.', 'Mimpi Buruk datang!!', '1h 55m', 0, NULL, '2024-01-03 05:20:28', '2024-01-03 05:20:28'),
(7, 'Hantu Berambut Merah', 'https://youtu.be/rambutmerah', 'https://hanturambutmerah', 'Asep Ginanjar, Abel Avriyana S, Afra Afrizal, Fuad Grimaldi', 'Horror', 'RGkjOlgHrB3.png', 'QpvEtQBipUrambutmerah_large.png', '2023-11-08', 'Hantu berambut merah itu menakutkan dan mengganggu. Rambut merahnya mengambang di udara seperti api liar, memancarkan aura misterius dan menakutkan. Matanya dipenuhi dengan kegelapan, menciptakan rasa takut yang tak terlukiskan. Penampakannya sendiri menyiratkan kehadiran yang menghantui dan menimbulkan ketegangan yang mencekam bagi siapa pun yang melihatnya.', 'Hantu rambut merah mengerikan', '1h 40m', 0, NULL, '2024-01-03 05:27:05', '2024-01-03 05:27:05'),
(8, 'Arus', 'https://youtube/arus', 'https://arus', 'Fuad Grimaldi, Asep Ginanjar, Abel Avriyana S', 'Action', 'y5fZqMAArt6.png', 'QvE4uY3wlXarus_large.png', '2023-11-08', 'Abdul, seorang pejuang laut yang gigih, menegakkan kehormatan Kerajaan Sunda di lautan luas. Dengan kapalnya sebagai senjata utama, ia memperjuangkan keadilan dan keamanan bagi kerajaan dan rakyatnya. Di balik keberaniannya, Abdul selalu menghadirkan cinta dan kesetiaan kepada wanita terkasihnya, menjadikannya pendorong utama dalam perjuangannya.', 'Abdul Seorang pejuang laut, dia berjuang demi kerjaan laun sunda dan wanita terkasihnya', '2h 10m', 0, NULL, '2024-01-03 05:37:38', '2024-01-03 05:37:38'),
(9, 'Hutan Rimba', 'https://youtu.be/hutanrimba', 'https://hutanrimba', 'Fadil teguh, Asep Ginanjar', 'Survival', 'ALxgowLWnz5.png', '9NLxcl3FXfhutanrimba_large.png', '2024-01-08', 'Badai tak terduga melanda saat saya sedang mendaki gunung. Tanpa persiapan, saya terjebak dalam kabut tebal yang menyelimuti area luas, kehilangan arah di tengah puncak yang tak berujung. Berusaha bertahan hidup, saya mencari tempat berlindung dari hantaman angin dan hujan deras, sambil berupaya menemukan sumber air dan makanan. Dalam kegelapan malam yang menakutkan, saya membuat api unggun kecil untuk mengusir dingin dan kegelapan, sambil tetap berpikir jernih untuk menemukan jalan keluar.', 'Saya suka mendaki, hari itu semua aman terkendali sampai badai datang', '1h 40m', 0, NULL, '2024-01-03 05:45:32', '2024-01-03 05:45:32'),
(10, 'Doctor Strange', 'https://youtube/doctorstrange', 'https://doctorstrange', 'Benedict Cumberbatch', 'Action', 'yYTV3BOhNOdoctor.jpeg', 'VXOynuKbVAdoctor_large.jpg', '2016-05-11', 'Hidup Stephen Strange (Benedict Cumberbatch), seorang dokter bedah pintar yang sombong, mendadak berubah drastis. Sebuah kecelakaan membuat kemampuan tangannya menjadi sangat terbatas. Bertekad untuk menyembuhkan kondisinya, ia pun berpetualang mencari obat untuk memulihkan lengannya.', 'marvel', '1h 56m', 0, NULL, '2024-01-03 06:01:20', '2024-01-03 06:01:20'),
(11, 'Jujutsu Kaisen 0', 'https://youtu.be/jujutsu', 'https://jjk', 'Yuta Okkotsu', 'Anime', 'zlFoXjHhmbjujutsukaisen_small.jpeg', 'HM7S4sFPzCjujutsukaisen_large.jpg', '2021-12-15', 'Murid SMA bernama Yuta Okkotsu sering kali menjadi korban bullying, namun suatu hari, para pengganggunya terluka parah oleh Roh Terkutuk yang melekat padanya. Para atasan di Masyarakat Jujutsu berharap untuk membunuh anak tersebut, karena kutukan yang melekat padanya adalah roh berbahaya. Namun, seorang guru di Sekolah Menengah Teknis Jujutsu Tokyo, Satoru Gojo, merekrut Yuta untuk bergabung dengan sekolah tersebut pada November 2016, sehingga menyelamatkannya. Yuta menjelaskan bahwa Roh Terkutuk tersebut adalah Rika, seorang teman masa kecil yang ia janjikan untuk menikah saat mereka dewasa.', 'Jujutsu Kaisen 0', '1h 46m', 0, NULL, '2024-01-03 06:15:39', '2024-01-03 06:15:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `max_days` int(11) NOT NULL,
  `max_users` int(11) NOT NULL,
  `is_download` tinyint(1) NOT NULL,
  `is_4k` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `packages`
--

INSERT INTO `packages` (`id`, `name`, `price`, `max_days`, `max_users`, `is_download`, `is_4k`, `created_at`, `updated_at`) VALUES
(1, 'standard', 50000.00, 30, 2, 1, 1, '2023-08-03 07:23:59', '2024-01-03 09:59:08'),
(2, 'premium', 100000.00, 30, 7, 1, 1, '2023-08-03 07:23:59', '2023-08-03 07:23:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `amount` double(8,2) NOT NULL,
  `transaction_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transactions`
--

INSERT INTO `transactions` (`id`, `package_id`, `user_id`, `amount`, `transaction_code`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 120000.00, '13323rv32523', 'success', '2023-08-18 12:33:36', '2023-08-18 12:33:36'),
(2, 1, 1, 70000.00, '17564b5wb54', 'success', '2023-08-18 12:33:36', '2023-08-18 12:33:36'),
(11, 1, 10, 20000.00, 'GBIRQEDELJ', 'pending', '2024-01-01 07:13:00', '2024-01-01 07:13:00'),
(12, 2, 10, 100000.00, '5DPQGRYAER', 'success', '2024-01-01 07:43:03', '2024-01-01 07:43:54'),
(14, 1, 10, 20000.00, 'B6PQLW5IDK', 'success', '2024-01-01 07:46:44', '2024-01-01 07:47:08'),
(15, 1, 10, 20000.00, 'REWETBPIFA', 'success', '2024-01-01 08:07:55', '2024-01-01 08:08:29'),
(16, 2, 10, 100000.00, 'PX2EKCMTIC', 'success', '2024-01-01 08:14:10', '2024-01-01 08:14:58'),
(17, 1, 10, 20000.00, 'VMZXSCEZTM', 'success', '2024-01-01 08:16:59', '2024-01-01 08:18:08'),
(18, 1, 12, 20000.00, 'RUE02PP3KS', 'success', '2024-01-01 20:51:02', '2024-01-01 20:52:16'),
(19, 2, 12, 100000.00, 'AUZKE9ZELS', 'success', '2024-01-01 20:58:33', '2024-01-01 20:59:06'),
(20, 2, 12, 100000.00, '7AK0EC5S5M', 'pending', '2024-01-03 09:59:21', '2024-01-03 09:59:21'),
(21, 1, 12, 50000.00, '2UXDZDQINU', 'pending', '2024-01-03 10:00:25', '2024-01-03 10:00:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('admin','member') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone_number`, `avatar`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'fuadgrimaldi145@gmail.com', '$2y$10$O7miLNH9iSCb93ne2pvKHehRoWf1Lfebzzfqg1eKtEdim0HifcL2W', '087823119321', '', 'admin', '2023-08-03 07:23:59', '2023-08-03 07:23:59'),
(10, 'Kelompok FIKA', 'passwordnyaAFUD12@gmail.com', '$2y$10$MvR2jWrfr4hv0fFsi10hVeU9InInIRRia42aGKbXmYYRncDX7yn.2', '08243243243', NULL, 'member', '2023-12-28 02:06:02', '2023-12-28 02:06:02'),
(12, 'Asep Putra Poseidon', 'asep12@gmail.com', '$2y$10$mZ3c7SLZtXT8WKC0U56ko.lddiPMIQ6Y31W1FCZMs6v4yZwZi4tD.', '089213123122', NULL, 'member', '2024-01-01 20:50:20', '2024-01-03 06:56:01'),
(13, 'Regista Siti Jahara', 'rerere@gmail.com', '$2y$10$0AD.a9h3aZpQhaEKsClQlOr.tJ63zTF.M8rSb7Em7.igsMQWzOFCO', '08234323423', NULL, 'member', '2024-01-03 01:11:41', '2024-01-03 01:11:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_premiums`
--

CREATE TABLE `user_premiums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `end_of_subscription` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `user_premiums`
--

INSERT INTO `user_premiums` (`id`, `package_id`, `user_id`, `end_of_subscription`, `created_at`, `updated_at`) VALUES
(3, 1, 10, '2024-03-31', '2024-01-01 08:08:29', '2024-01-01 08:18:08');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_package_id_foreign` (`package_id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `user_premiums`
--
ALTER TABLE `user_premiums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_premiums_package_id_foreign` (`package_id`),
  ADD KEY `user_premiums_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `movies`
--
ALTER TABLE `movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user_premiums`
--
ALTER TABLE `user_premiums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`),
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `user_premiums`
--
ALTER TABLE `user_premiums`
  ADD CONSTRAINT `user_premiums_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`),
  ADD CONSTRAINT `user_premiums_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
