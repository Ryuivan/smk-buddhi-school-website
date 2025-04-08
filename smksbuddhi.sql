-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2023 at 11:59 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smksbuddhi`
--

-- --------------------------------------------------------

--
-- Table structure for table `carousels`
--

CREATE TABLE `carousels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carousels`
--

INSERT INTO `carousels` (`id`, `name`, `gambar`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Asadha', 'carousels/osslvSgMQcy1BMEkTLj8fr3UZ28sGBwXzpBvlNpN.jpg', 1, '2023-12-11 07:49:41', '2023-12-11 21:57:13'),
(2, 'Barongsai', 'carousels/MwWZuIm1fcXex8qixAhHmSA1JqmaBrLlLvIm6F1n.png', 1, '2023-12-11 07:50:02', '2023-12-11 21:57:02'),
(3, 'Mading', 'carousels/vFIashvxLIc7Jndox8kSIGgk2XCNBc7dyYLPZb2Z.jpg', 1, '2023-12-11 07:50:22', '2023-12-11 21:56:53');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Lomba Siswa', 'lomba-siswa', '2023-12-11 09:27:45', '2023-12-11 22:36:58'),
(2, 'Publikasi Sekolah', 'publikasi-sekolah', '2023-12-11 09:28:02', '2023-12-11 09:28:02');

-- --------------------------------------------------------

--
-- Table structure for table `ekstrakurikulers`
--

CREATE TABLE `ekstrakurikulers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ekstrakurikulers`
--

INSERT INTO `ekstrakurikulers` (`id`, `name`, `gambar`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Paskibra', 'ekstrakurikulers/vT1eyzy7SImy6rU5YzzL2ufyGhKophiI7IHSkORh.png', 1, '2023-12-11 07:58:53', '2023-12-11 07:59:18'),
(2, 'Fotografi', 'ekstrakurikulers/BcMeZtS0OFpgHnHVx83OXKcnLvrsZQde3hSW4zZy.png', 1, '2023-12-11 07:59:35', '2023-12-11 07:59:35'),
(3, 'Musik', 'ekstrakurikulers/C1SRJ2ROhBDIkw6jZTqE8gFOdTqxzhfhcJJh4pYu.png', 1, '2023-12-11 07:59:56', '2023-12-11 07:59:56'),
(4, 'Basket', 'ekstrakurikulers/ywo7BWQStMwRezK38pbYRCZRMtM9biwB04DKbenL.png', 1, '2023-12-11 08:00:16', '2023-12-11 08:00:16'),
(5, 'Silat', 'ekstrakurikulers/5K1M1zM7otYXZsQSjpYNE64xPZ8nCOoifpbZJxGO.png', 1, '2023-12-11 08:00:33', '2023-12-11 08:00:33'),
(6, 'Badminton', 'ekstrakurikulers/rLTHnYOZXrNXaWJYCPPLDiyzJ2649g4UThJ1BEkA.png', 1, '2023-12-11 08:00:58', '2023-12-11 08:00:58'),
(7, 'Futsal', 'ekstrakurikulers/sOvdGpOq4vk3JRcfM4V2HwzAAFJVzRYQHXBl4YTC.png', 1, '2023-12-11 08:01:25', '2023-12-11 08:01:25'),
(8, 'Barongsai', 'ekstrakurikulers/lozWE0RJuTbY9x9pFua9pPs1qpB9YcHFnYhuAkLh.png', 1, '2023-12-11 08:01:53', '2023-12-11 22:00:16'),
(9, 'Dance', 'ekstrakurikulers/gizA7RmPU1JnlgYfQoWg3C62RWU2cyO1ACpBTALA.png', 1, '2023-12-11 08:02:14', '2023-12-11 08:02:14'),
(10, 'Pramuka', 'ekstrakurikulers/oYyDzMKvdAGhLeDV147yhfcqlGflqDxRbELfpDFp.png', 1, '2023-12-11 08:02:33', '2023-12-11 08:02:33');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `name`, `gambar`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Ruangan Alat Musik', 'fasilitas/FFhJMzZJQ2ASRaRcjfnCrLy1bWgjQcrwqX0fJ4Wn.png', 1, '2023-12-11 07:51:21', '2023-12-11 07:51:21'),
(3, 'Ruang Marketing', 'fasilitas/VnRWomtsWYo1gXk2fjdnDnoQrIRp9M581YChumm0.png', 1, '2023-12-11 07:54:57', '2023-12-11 07:54:57'),
(4, 'Perpustakaan', 'fasilitas/ANTyth4cwtSCucV9WZ6qa66WHE1iChA6NZq9HFfA.png', 1, '2023-12-11 07:55:11', '2023-12-11 07:56:27'),
(5, 'Mading Sekolah', 'fasilitas/bVq51zP7yBrnwQRkrMOwscQKuGnn7WtD29QU7drN.png', 1, '2023-12-11 07:55:34', '2023-12-11 07:55:34'),
(6, 'Ruang Kelas', 'fasilitas/W4xLPp54OsZGQqh1vGSTshRaeyEUXBHK9MlFRbCL.png', 1, '2023-12-11 07:56:00', '2023-12-11 07:56:00'),
(7, 'Pojok Prestasi', 'fasilitas/Ahdd55EhtYb9Ox8vqjxdsWTitMH8yZ5N8ZViyjkl.png', 1, '2023-12-11 07:57:54', '2023-12-11 22:00:41');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `name`, `gambar`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Balap Karung', 'gallery/BIGwW5b4s3RR0QiyovrrZwHZixdBdPJ4Y8nyHxqo.jpg', 1, '2023-12-11 09:54:18', '2023-12-11 09:54:18'),
(2, 'Bantuan Sosial', 'gallery/XbDaj3n7YZdXsBrxDgdEpXN5m3ihX1pGLUYRTT4D.jpg', 1, '2023-12-11 09:58:23', '2023-12-11 09:58:23'),
(3, 'Basket', 'gallery/1iQKTIJpyNhpdawQ3K2D0yxkQVD7haNpZGecU5Ch.png', 1, '2023-12-11 09:58:37', '2023-12-11 10:45:06'),
(4, 'Jalan Pagi', 'gallery/d7wvIQBRHOZh38QHpiBRdA4FKNyMkYm7vHFdiHhQ.png', 1, '2023-12-11 09:58:53', '2023-12-11 10:45:29'),
(5, 'Meditasi', 'gallery/meeqsQ2nm2u8IcSF5x0243yaWeAY9yjblPYsgRW2.jpg', 1, '2023-12-11 09:59:08', '2023-12-11 09:59:08'),
(6, 'MPLS', 'gallery/a6Yy3AdTQeSwrdIZ8gnMeeC1cA7qeEs0WfevBMoU.jpg', 1, '2023-12-11 09:59:23', '2023-12-11 09:59:23'),
(7, 'MPLS (2)', 'gallery/g8MO23eaHA5wtZKWrfUHz8TOKyicXaLRUM0hAzjy.jpg', 1, '2023-12-11 09:59:50', '2023-12-11 09:59:50'),
(8, 'Pentas Seni', 'gallery/OstF2UGdHKpTk2nUmF9DtLTaXzyUfjKDVcPCNgc9.jpg', 1, '2023-12-11 10:00:11', '2023-12-11 10:00:11'),
(9, 'Perpisahan', 'gallery/9OaaTA8hTXmU9uU7t96dRC61NtO5RSB5J4prLRur.jpg', 1, '2023-12-11 10:00:26', '2023-12-11 10:00:26'),
(10, 'Pramuka', 'gallery/XIgJ6rzEv8pyNyCEAmjdq0WJ8jRiQ2FOYtfAsRkG.jpg', 1, '2023-12-11 10:00:40', '2023-12-11 10:00:40'),
(11, 'Pramuka (2)', 'gallery/0cmft2Mghcblpca0X3xgIOIkqcZ44Ra5J1MM5JAg.jpg', 1, '2023-12-11 10:00:57', '2023-12-11 10:00:57'),
(12, 'Talk Show', 'gallery/x5jO1oJraOBUjzb5t6Qg4y09xb30IVMFQDkbpJg7.jpg', 1, '2023-12-11 10:01:12', '2023-12-11 10:01:12'),
(13, 'Tarik Tambang', 'gallery/qtlELcGBvgQMsFTHEq4CbgUFBynbuQnCn6m77Z0F.jpg', 1, '2023-12-11 10:01:29', '2023-12-11 22:01:36');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_11_20_154446_create_posts_table', 1),
(7, '2023_11_20_155034_create_categories_table', 1),
(8, '2023_11_30_042245_create_teachers_table', 1),
(9, '2023_11_30_042536_create_subjects_table', 1),
(10, '2023_12_09_152639_create_ekstrakurikulers_table', 1),
(11, '2023_12_09_155248_create_fasilitas_table', 1),
(12, '2023_12_09_181016_create_sessions_table', 1),
(14, '2023_12_10_154638_create_carousels_table', 1),
(15, '2014_10_12_000000_create_users_table', 2),
(16, '2023_12_11_145918_create_galleries_table', 3),
(17, '2023_12_10_142943_create_prestasis_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('vnesia02@gmail.com', '$2y$12$STKKN70UwAZ/wtrr/ih3hODJc8/gJ1Zk0VYjkGSD8JlvmhSIhLb5K', '2023-12-11 12:58:01');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `excerpt` text NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `category_id`, `title`, `slug`, `excerpt`, `body`, `image`, `created_at`, `updated_at`) VALUES
(4, 1, 2, 'Pelajar SMK Buddhi Dharma Mengikuti Pabbaja di SMK Buddhi Dharma', 'pelajar-smk-buddhi-dharma-mengikuti-pabbaja-di-smk-buddhi-dharma', 'Sebuah acara Pabbaja baru-baru ini digelar di SMK Buddhi Dharma selama periode 12 hari berturut-turut. Acara yang diikuti oleh pelajar dari berbagai tingkat di sekolah ini berhasil menciptakan atmosfe...', '<div>Sebuah acara Pabbaja baru-baru ini digelar di SMK Buddhi Dharma selama periode 12 hari berturut-turut. Acara yang diikuti oleh pelajar dari berbagai tingkat di sekolah ini berhasil menciptakan atmosfer yang penuh semangat dan kedamaian. Pabbaja Buddhis, sebuah kegiatan spiritual dalam tradisi Buddhis, telah menjadi momen yang sangat dinanti-nantikan oleh para pelajar SMK Buddhi Dharma. Acara ini memberikan peluang kepada para pelajar untuk mendalami ajaran Buddhis, mempraktikkan meditasi, serta memperdalam pemahaman tentang nilai-nilai kehidupan. Pabbaja di SMK Buddhi Dharma tahun ini dihadiri oleh lebih dari 300 peserta, yang terdiri dari siswa-siswi dari berbagai kelas. Berlangsung selama 12 hari, acara ini mencakup serangkaian kegiatan seperti ceramah dharma, meditasi bersama, pembacaan sutra, dan kegiatan kebersamaan lain.</div>', 'posts/s27awYj1sJinrUNP6JRetGgR6N25r8ZBhYxE22oz.png', '2023-12-11 11:28:11', '2023-12-11 11:31:49'),
(5, 1, 2, 'Semarak Kemerdekaan di SMK Buddhi Dharma: Perayaan 17 Agustus Meriahkan Seluruh Komunitas Sekolah', 'semarak-kemerdekaan-di-smk-buddhi-dharma-perayaan-17-agustus-meriahkan-seluruh-komunitas-sekolah', 'Suasana kemerdekaan terasa begitu kuat di SMK Buddhi Dharma ketika seluruh siswa dan staf bersatu dalam perayaan Hari Kemerdekaan Indonesia. Dalam rangka memperingati 78 tahun kemerdekaan negara terci...', '<div>Suasana kemerdekaan terasa begitu kuat di SMK Buddhi Dharma ketika seluruh siswa dan staf bersatu dalam perayaan Hari Kemerdekaan Indonesia. Dalam rangka memperingati 78 tahun kemerdekaan negara tercinta, SMK Buddhi Dharma menggelar acara perayaan 17 Agustus yang meriah dan penuh semangat.</div>', 'posts/yRKg8hR5XoZLA70Bfv5oFZoT0wUAlG1rOKRJChur.jpg', '2023-12-11 11:37:47', '2023-12-11 11:37:47'),
(6, 1, 2, 'Penuh Khusyuk, Pelajar SMK Buddhi Dharma Memperingati Bulan Suci Asadha', 'penuh-khusyuk-pelajar-smk-buddhi-dharma-memperingati-bulan-suci-asadha', 'Suasana khusyuk dan damai menyelimuti SMK Buddhi Dharma saat pelajar memperingati Bulan Suci Asadha. Dalam rangka memahami nilai-nilai kebijaksanaan dan meningkatkan spiritualitas, sekolah ini menggel...', '<div>Suasana khusyuk dan damai menyelimuti SMK Buddhi Dharma saat pelajar memperingati Bulan Suci Asadha. Dalam rangka memahami nilai-nilai kebijaksanaan dan meningkatkan spiritualitas, sekolah ini menggelar serangkaian kegiatan yang meriah selama bulan penuh berkah ini.<br><br></div><div>Acara dimulai dengan pelaksanaan upacara persembahan bunga di depan tempat ibadah sekolah, di mana para siswa dan guru bersama-sama menunjukkan rasa syukur dan penghormatan dalam menyambut bulan suci ini. Kegiatan ini menjadi ajang untuk merenung dan menyatukan hati dalam kebersamaan.</div>', 'posts/oWLvEclfh2x13QViaiLr0qtV67yogfTfE7phMmpu.jpg', '2023-12-11 11:41:16', '2023-12-11 11:45:58'),
(7, 1, 2, 'Pembekalan PKL Multimedia di SMK Buddhi Dharma: Memasuki Dunia Kerja dengan Keahlian Terapan', 'pembekalan-pkl-multimedia-di-smk-buddhi-dharma-memasuki-dunia-kerja-dengan-keahlian-terapan', 'Sebagai bagian dari upaya mendukung siswa dalam memasuki dunia kerja, SMK Buddhi Dharma telah melaksanakan pembekalan Praktik Kerja Lapangan (PKL) khusus bidang Multimedia. Program ini bertujuan untuk...', '<div>Sebagai bagian dari upaya mendukung siswa dalam memasuki dunia kerja, SMK Buddhi Dharma telah melaksanakan pembekalan Praktik Kerja Lapangan (PKL) khusus bidang Multimedia. Program ini bertujuan untuk memberikan siswa keahlian terapan dan pengalaman nyata di dunia industri multimedia sebelum mereka melangkah ke tahap karir.<br><br></div><div>Dalam acara pembekalan PKL Multimedia, para siswa diberikan pemahaman mendalam tentang aspek-aspek kunci dalam industri multimedia, termasuk desain grafis, produksi video, pengembangan web, dan manajemen proyek multimedia. Para ahli industri, termasuk alumni yang telah sukses dalam bidang ini, diundang untuk memberikan wawasan dan kiat-kait berharga kepada para siswa.</div>', 'posts/hRonQDlzgOo2ASJLS9uRbYqkejvsUzClgaTItA6V.png', '2023-12-11 11:44:13', '2023-12-11 11:45:43'),
(8, 1, 2, 'Mengarungi Dunia Akuntansi: Pembekalan PKL Akuntansi di SMK Buddhi Dharma', 'mengarungi-dunia-akuntansi-pembekalan-pkl-akuntansi-di-smk-buddhi-dharma', 'Memahami pentingnya persiapan yang matang sebelum memasuki dunia kerja, SMK Buddhi Dharma telah melaksanakan pembekalan Praktik Kerja Lapangan (PKL) khusus bidang Akuntansi. Program ini dirancang untu...', '<div>Memahami pentingnya persiapan yang matang sebelum memasuki dunia kerja, SMK Buddhi Dharma telah melaksanakan pembekalan Praktik Kerja Lapangan (PKL) khusus bidang Akuntansi. Program ini dirancang untuk memberikan siswa pemahaman mendalam tentang praktik akuntansi dan memberikan pengalaman langsung dalam menghadapi situasi dunia kerja.<br><br></div><div>Dalam kegiatan pembekalan PKL Akuntansi, para siswa diberikan materi tentang dasar-dasar akuntansi, prosedur pelaporan keuangan, dan aplikasi perangkat lunak akuntansi modern. Sesi pelatihan juga melibatkan praktik perhitungan akuntansi, analisis laporan keuangan, dan simulasi situasi nyata yang sering dihadapi dalam dunia bisnis.</div>', 'posts/2aLS4oByB6EnC57a8iAss695bHN48BhE8oyLwJKu.png', '2023-12-11 11:48:42', '2023-12-11 11:48:42'),
(9, 1, 2, 'Meriahnya Bazaar di SMK Buddhi Dharma: Merangkul Kreativitas dan Kebersamaan', 'meriahnya-bazaar-di-smk-buddhi-dharma-merangkul-kreativitas-dan-kebersamaan', 'Suasana ceria dan semarak menghiasi SMK Buddhi Dharma dalam acara bazaar yang baru saja digelar. Acara yang melibatkan siswa, guru, dan orang tua ini tidak hanya menjadi wadah untuk berbelanja, tetapi...', '<div>Suasana ceria dan semarak menghiasi SMK Buddhi Dharma dalam acara bazaar yang baru saja digelar. Acara yang melibatkan siswa, guru, dan orang tua ini tidak hanya menjadi wadah untuk berbelanja, tetapi juga ajang untuk merayakan kreativitas, kebersamaan, dan semangat gotong royong.<br><br></div><div>Bazaar di SMK Buddhi Dharma menampilkan beragam stan yang menawarkan aneka produk dan jasa, mulai dari makanan lezat hingga karya seni yang unik. Para siswa dari berbagai jurusan turut berpartisipasi dengan membuka stan-stand kreatif mereka, menunjukkan keahlian dan minat masing-masing.</div>', 'posts/iXLYeXVPO54zZt5OtJtDIrl1wa8NGvMeeWZYwpda.png', '2023-12-11 11:50:54', '2023-12-11 12:00:30'),
(10, 1, 2, 'Memupuk Budaya Literasi: Program Pembiasaan Membaca di SMK Buddhi Dharma', 'memupuk-budaya-literasi-program-pembiasaan-membaca-di-smk-buddhi-dharma', 'Mengakui pentingnya literasi sebagai kunci pengembangan intelektual dan kreativitas siswa, SMK Buddhi Dharma dengan bangga mengadakan Program Pembiasaan Membaca. Program ini bertujuan untuk membudayak...', '<div>Mengakui pentingnya literasi sebagai kunci pengembangan intelektual dan kreativitas siswa, SMK Buddhi Dharma dengan bangga mengadakan Program Pembiasaan Membaca. Program ini bertujuan untuk membudayakan kegemaran membaca di kalangan siswa, menciptakan lingkungan belajar yang stimulatif, dan meningkatkan pemahaman serta pengetahuan mereka.</div><div><br>Kegiatan program ini melibatkan berbagai inisiatif untuk memperkaya kegiatan literasi di lingkungan sekolah. Perpustakaan sekolah diperbarui dengan koleksi buku-buku yang menarik dan relevan dengan minat siswa. Siswa diundang untuk secara aktif berpartisipasi dalam kegiatan membaca, baik di dalam maupun di luar jam pelajaran.</div>', 'posts/j3VYZLFBrNo0JHUnTcZzZSHGRutiBDiNpxKxsGb5.png', '2023-12-11 11:53:05', '2023-12-11 11:53:05'),
(11, 1, 2, 'Memperkuat Tradisi Kebajikan: Hari Kathina di SMK Buddhi Dharma', 'memperkuat-tradisi-kebajikan-hari-kathina-di-smk-buddhi-dharma', 'Suasana penuh sukacita dan kebersamaan menyelimuti SMK Buddhi Dharma dalam perayaan Hari Kathina. Acara yang diadakan sebagai bagian dari tradisi keagamaan Buddhis ini berhasil mengumpulkan seluruh ko...', '<div>Suasana penuh sukacita dan kebersamaan menyelimuti SMK Buddhi Dharma dalam perayaan Hari Kathina. Acara yang diadakan sebagai bagian dari tradisi keagamaan Buddhis ini berhasil mengumpulkan seluruh komunitas sekolah dalam semangat berbagi dan kebaikan.</div><div><br>Hari Kathina, yang berarti \"pemberian kain\", merupakan momen bersejarah dalam tradisi Buddhis. Para siswa, guru, dan staf SMK Buddhi Dharma berkumpul untuk merayakan hari ini dengan mengenakan pakaian seragam dan membawa bingkisan dana hasil kerja sama komunitas sekolah.</div>', 'posts/D3nxrTcMpTqskDmgLBp9TdNXSz4BefpN4NZm6n5o.png', '2023-12-11 11:56:50', '2023-12-11 11:57:09'),
(12, 1, 2, 'Bersama Lawan Perundungan: Sosialisasi Anti-Perundungan di SMK Buddhi Dharma', 'bersama-lawan-perundungan-sosialisasi-anti-perundungan-di-smk-buddhi-dharma', 'Dalam upaya untuk menciptakan lingkungan belajar yang aman, hangat, dan inklusif, SMK Buddhi Dharma dengan tekad kuat meluncurkan Program Sosialisasi Anti-Perundungan. Program ini bertujuan untuk meni...', '<div>Dalam upaya untuk menciptakan lingkungan belajar yang aman, hangat, dan inklusif, SMK Buddhi Dharma dengan tekad kuat meluncurkan Program Sosialisasi Anti-Perundungan. Program ini bertujuan untuk meningkatkan kesadaran, mencegah, dan memberikan dukungan terhadap masalah perundungan di kalangan siswa.<br><br></div><div>Sosialisasi ini mencakup serangkaian kegiatan yang melibatkan seluruh komunitas sekolah, termasuk siswa, guru, staf, dan orang tua. Program dimulai dengan sesi pemahaman tentang apa itu perundungan, bentuk-bentuknya, dan dampak yang dapat ditimbulkan pada korban. Para siswa diberikan pemahaman mendalam tentang pentingnya menjaga keamanan psikologis dan emosional teman-teman mereka.</div>', 'posts/WPVayYoOTDlVYfOY7URvzMFhxTcfe9Fo7OPwbOP7.png', '2023-12-11 11:58:41', '2023-12-11 12:00:14'),
(13, 1, 2, 'Pembiasaan Doa Pagi: Membangun Koneksi Spiritual di SMK Buddhi Dharma', 'pembiasaan-doa-pagi-membangun-koneksi-spiritual-di-smk-buddhi-dharma', 'Dalam semangat memperkaya dimensi spiritual dan membangun nilai-nilai kebersamaan, SMK Buddhi Dharma merangkul tradisi Pembiasaan Doa Pagi. Kegiatan ini diintegrasikan sebagai bagian dari harian sekol...', '<div>Dalam semangat memperkaya dimensi spiritual dan membangun nilai-nilai kebersamaan, SMK Buddhi Dharma merangkul tradisi Pembiasaan Doa Pagi. Kegiatan ini diintegrasikan sebagai bagian dari harian sekolah, bertujuan untuk menciptakan atmosfer positif dan memberikan kesempatan bagi siswa untuk merenung dan bersatu dalam doa.<br><br></div><div>Setiap hari, sebelum memulai kegiatan pembelajaran, seluruh siswa dan staf SMK Buddhi Dharma berkumpul di tempat yang telah ditetapkan untuk pelaksanaan Doa Pagi. Acara dimulai dengan pengumuman penting dan informasi terkini dari pihak sekolah, menciptakan keterbukaan dan keterhubungan di antara anggota komunitas sekolah.</div>', 'posts/Cb5X6HBfdPjXG7uGJsMqSZqP4q6iMLJ7UoUXUIj8.png', '2023-12-11 12:00:03', '2023-12-11 12:00:03'),
(14, 1, 2, 'Anjali Sebagai Pintu Kedamaian: Pembiasaan Tradisi Spiritual di SMK Buddhi Dharma', 'anjali-sebagai-pintu-kedamaian-pembiasaan-tradisi-spiritual-di-smk-buddhi-dharma', 'Meresapi nilai-nilai kebijaksanaan Buddhis, SMK Buddhi Dharma memperkenalkan kegiatan pembiasaan Anjali sebagai bagian integral dari rutinitas spiritual di sekolah. Anjali, tindakan melipat tangan seb...', '<div>Meresapi nilai-nilai kebijaksanaan Buddhis, SMK Buddhi Dharma memperkenalkan kegiatan pembiasaan Anjali sebagai bagian integral dari rutinitas spiritual di sekolah. Anjali, tindakan melipat tangan sebagai ungkapan penghormatan dan kedamaian, menjadi momen istimewa yang meresapi kebersamaan dan kekhusyukan di antara komunitas sekolah.</div><div><br>Setiap hari, sebelum memulai kegiatan pembelajaran, siswa dan staf SMK Buddhi Dharma berkumpul di tempat yang telah ditetapkan untuk melaksanakan Anjali. Acara ini dimulai dengan panduan dari guru spiritual atau sesepuh Buddhis yang memberikan pemahaman mendalam tentang makna dan tujuan dari Anjali.</div>', 'posts/8emEmrk6qzL4jvNDxVtDjy6RSRQSP0vZtqA5NBDu.png', '2023-12-11 12:02:09', '2023-12-11 21:55:52'),
(15, 1, 1, 'Siswi SMK Buddhi Dharma Raih Prestasi Gemilang Sebagai Juara 3 Monolog FLS2N Tingkat Kota', 'siswi-smk-buddhi-dharma-raih-prestasi-gemilang-sebagai-juara-3-monolog-fls2n-tingkat-kota', 'Prestasi gemilang kembali diraih oleh siswi SMK Buddhi Dharma, ia yang berhasil meraih predikat Juara 3 dalam kompetisi monolog FLS2N (Festival Lomba Seni Siswa Nasional) Tingkat Kota. Kompetisi ini m...', '<div>Prestasi gemilang kembali diraih oleh siswi SMK Buddhi Dharma, ia yang berhasil meraih predikat Juara 3 dalam kompetisi monolog FLS2N (Festival Lomba Seni Siswa Nasional) Tingkat Kota. Kompetisi ini merupakan wadah bagi siswa-siswi untuk menunjukkan bakat seni peran dan ekspresi diri mereka. Monolog yang dibawakannya tidak hanya menghibur, tetapi juga mengandung pesan moral dan refleksi kehidupan sehari-hari.</div>', 'posts/eOIzierKhJAWnDcK5FwunN4caNalksyNKtRf3nPQ.png', '2023-12-11 22:35:00', '2023-12-11 22:42:39'),
(16, 1, 1, 'Kejayaan Seni! Siswi SMK Buddhi Dharma Sabet Juara 1 Tari Kreasi FLS2N Tingkat Kota', 'kejayaan-seni-siswi-smk-buddhi-dharma-sabet-juara-1-tari-kreasi-fls2n-tingkat-kota', 'SMK Buddhi Dharma sekali lagi membuktikan keunggulan seni dengan prestasi luar biasa dari siswi-siswi berbakat. Siswi-sisi tersebut berhasil meraih Juara 1 dalam kompetisi Tari Kreasi FLS2N (Festival...', '<div>SMK Buddhi Dharma sekali lagi membuktikan keunggulan seni dengan prestasi luar biasa dari siswi-siswi berbakat. Siswi-sisi tersebut berhasil meraih Juara 1 dalam kompetisi Tari Kreasi FLS2N (Festival Lomba Seni Siswa Nasional) Tingkat Kota, menambah daftar prestasi gemilang sekolah ini di dunia seni.</div><div><br>Dalam penampilan yang memukau di panggung kompetisi, siswi tersebut berhasil memenangkan hati juri dan penonton dengan tarian kreatifnya yang sarat makna dan keindahan. Tarian tersebut tidak hanya mencerminkan keahlian dalam bergerak, melainkan juga mampu menyampaikan pesan emosional yang mendalam.</div>', 'posts/cPJTDCNi40KMCoSKPeJNCy1sppMumZu5zqADNYbu.png', '2023-12-11 22:42:09', '2023-12-11 22:42:09');

-- --------------------------------------------------------

--
-- Table structure for table `prestasis`
--

CREATE TABLE `prestasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prestasis`
--

INSERT INTO `prestasis` (`id`, `name`, `gambar`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Juara1 1 Fotografi', 'prestasi/1iJX4y8viQ5nQV1AWVrIiU2r7RNENTCpbSpGFrnl.jpg', 1, '2023-12-15 07:18:07', '2023-12-15 07:18:25'),
(2, 'Juara Harapan I Lomba Tari Tradisional', 'prestasi/DTvWSVmSRB6QMbx39z6yydPGwJN7KFw1uz8ZfRbD.jpg', 1, '2023-12-15 07:19:23', '2023-12-15 07:19:23'),
(3, 'Juara 1 Futsal SMA Kristen Kalam Kudus II', 'prestasi/wywv4M9C6vIEMKjvb0QBo1XVKSlCPFmsglKNonY6.jpg', 1, '2023-12-15 07:21:53', '2023-12-15 07:21:53'),
(4, 'Juara Favorit Tari Tradisional', 'prestasi/Ha2kKXsWnTFV0tVo3orNtooToIcqDS7WloEgm73Y.jpg', 1, '2023-12-15 07:22:54', '2023-12-15 07:22:54'),
(5, 'Juara 3 Fuma FST', 'prestasi/Dxg8onxZlTkfk1iDqLsgiEBtEx2PWsGjHMkt0Hq9.jpg', 1, '2023-12-15 07:23:18', '2023-12-15 07:23:18'),
(6, 'Juara 3 Futsal SMA Kristen Kalam Kudus II', 'prestasi/iOSSzXG4gWwSZd2GnrW1dwxJ7u0i14ZxHi7SmYsv.jpg', 1, '2023-12-15 07:25:22', '2023-12-15 07:25:22'),
(7, 'Juara 2 Lomba Musik Akustik', 'prestasi/d1fr36BBAfE2dqRhYiBcOOzwYPo1P2w9Xu86H0Vc.jpg', 1, '2023-12-15 07:27:14', '2023-12-15 07:27:14'),
(8, 'Juara 2 Basket Putri', 'prestasi/1XJnb1gRWtqy75cXso7pDh7EAj0Fc1cMEoSi19Dy.jpg', 1, '2023-12-15 07:27:42', '2023-12-15 07:27:42'),
(9, 'Juara 1 Lomba Tari Kota Tangerang', 'prestasi/BRIas31ceRI35oFKPcczswhFJTt2XoHLW7dC8E3z.jpg', 1, '2023-12-15 07:29:15', '2023-12-15 07:29:15'),
(10, 'Juara 1 Photo Terbaik', 'prestasi/mxm5S2x0IdSSDHpKUjkRIsXi5bBJfnNAbYlTVYg9.jpg', 1, '2023-12-15 07:30:04', '2023-12-15 07:30:04'),
(11, 'Juara 1 Judo Kelas 63 kg Putri', 'prestasi/GhLOheBzRSMKlLjRzmsGxtMuSAdfgDNCbPboKObB.jpg', 1, '2023-12-15 07:31:05', '2023-12-15 07:31:05'),
(12, 'Juara 1 Judo Kelas 52kg Putri', 'prestasi/UxGC150JBbLyuQh9VR8iAriF8ULVALPG41Dzmmn6.jpg', 1, '2023-12-15 07:31:36', '2023-12-15 07:31:36'),
(13, 'Juara 1 e-Sport MLBB', 'prestasi/XqUKVFv39Cc9YFSy94FqO0MAURF5N9fYMtHXpnwg.jpg', 1, '2023-12-15 07:32:20', '2023-12-15 07:32:20');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Jh7TahaCTRkAc4fGXISINU5WZ1G6M2H1ew2ecU88', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaHZqUWVVdTJGSTFQV2FsUG5iaXhJRVp2aGxuTmljdnRtMTFha09HQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1702651934),
('qiRjAosYPuOpTkr6FNWJmdeS89NdmyoMU2ERR9Rg', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36 Edg/120.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNXhqZm9vT0VLUFQ4MEF2b1NzUVNwamZCeXN1REYxMTMzcFNwdHIxRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjY6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9wdWJsaWthc2k/c2VhcmNoPU1lbXVwdWslMjBCdWRheWElMjBMaXRlcmFzaSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1702652262),
('XKrvCgWCSJ5ft2mqCn7KR4sV0F1gGkT76zUXatDe', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiclFJSzlQTllsUVVERnFuVEZ0VGtZM2tDV09jeHI4d2pUU1VOYzQ2dCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjIxOiJodHRwOi8vbG9jYWxob3N0OjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1702658764),
('yubArzDa4YUaUjQSLrBFMFXZNhwLZvn4Q8EWpzOh', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiOUs3ampOMFpPMURvRmhpQW0yQWtUZ294ZmtpakJjS3lISUdRZTZndCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9kYXNoYm9hcmQiO31zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1702658730);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `gambar`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Drs. Setia Budi', 'teachers/2bF3Pce3HMLFyh5xMDms2UskTqDa2GZMMb7QGgGc.jpg', 1, '2023-12-11 07:33:40', '2023-12-11 07:33:40'),
(2, 'Udi Priyanto, M.Pd.B', 'teachers/0oOZWMCCX560u2xiGZnhGvF0yRcVDOVavN46PPNY.jpg', 1, '2023-12-11 07:34:03', '2023-12-11 07:34:03'),
(3, 'Afrida Yati, S.Pt., M.Pd', 'teachers/dtK3B2iLXLwokFfkHB11Gz2nOojgUE6BFCSx2Bv9.jpg', 1, '2023-12-11 07:34:34', '2023-12-11 07:34:34'),
(4, 'Ibnu Joko Sulistyo, S.Pd', 'teachers/taZxcOqssZM2Moz99nhvuQUAZtexvM7eNvKVpKU8.jpg', 1, '2023-12-11 07:35:05', '2023-12-11 07:35:05'),
(5, 'Tan Sudemi, M.Kom', 'teachers/1KA7KbvsjBKKLNQtGGtkDe7LoQeYttp72twan1bl.jpg', 1, '2023-12-11 07:36:29', '2023-12-11 07:36:29'),
(6, 'Sri Rahayu Widiningsih, S.Psi', 'teachers/NmajmXhlnlAX7b17DW2YgotMLB3Ognq3HOTCvoLF.jpg', 1, '2023-12-11 07:36:43', '2023-12-11 07:36:43'),
(7, 'Dudi Setiawan, SE', 'teachers/B2y7U0k8bCdWLqU2EVSx8NZ6kJlbCv1QiVnV9L7G.jpg', 1, '2023-12-11 07:36:58', '2023-12-11 07:38:06'),
(8, 'Desmon Ismail, S.Pd', 'teachers/LDwE3ERQGMXkUnilZlCWfo6R78BFfHSU8AIaY9hk.jpg', 1, '2023-12-11 07:38:22', '2023-12-11 07:38:22'),
(9, 'Uswatun Hasanah, M.Pd', 'teachers/6FFqPymBBg6QpceLmrUELyVjlLhhTyKXuE21XQld.jpg', 1, '2023-12-11 07:39:52', '2023-12-11 07:39:52'),
(10, 'Novi Yanti, S.Kom', 'teachers/to3KZ4A5I0nrDxpu9pgEld0x23qwR6vy79h9NZXi.jpg', 1, '2023-12-11 07:40:05', '2023-12-11 07:40:05'),
(11, 'Djoeng Foeng', 'teachers/AcFJJMnHaFtU1wc6osnLbRPRD5f1hPd3idBKpbaP.jpg', 1, '2023-12-11 07:40:16', '2023-12-11 07:40:16'),
(12, 'Mekawati, S.Pd', NULL, 1, '2023-12-11 07:40:25', '2023-12-11 07:40:25'),
(13, 'Hendra, S.Ag., M.Pd.B.', 'teachers/AvQsyeDRyxiqPB1BJqe1LkbpxtV05SgCVw0cOz2b.jpg', 1, '2023-12-11 07:40:36', '2023-12-11 21:59:47'),
(14, 'Asep Syaiful Bahri, S.Pd.', 'teachers/hDRKUAAReUYBOK8LwKTWCD7Wr3qOXa1aQSlo5aXE.jpg', 1, '2023-12-11 07:40:55', '2023-12-11 21:59:28'),
(15, 'Eka Ayunaeni, S.Pd.', 'teachers/xv69zZEWf6KWXX7xaDRpHnj8OIWUY8oGhYUCGX43.jpg', 1, '2023-12-11 07:42:03', '2023-12-11 21:59:14'),
(16, 'Achsanul Amal, S.E.', 'teachers/Vb1egbuomO3dz7uPss6qS5vz1F1G0anxELApVNVs.jpg', 1, '2023-12-11 07:42:24', '2023-12-11 21:49:09'),
(17, 'Joko Susilo, S.Pd.', 'teachers/nTxBbnK7r95Wv07old3fwzmHPwqwQpvuNI9VjwZI.jpg', 1, '2023-12-11 07:42:42', '2023-12-11 21:58:50'),
(18, 'Faisal, M.Si.', 'teachers/Q3Zq36O2dmGuzmU31xiW3PMEwu7LDJJc3MgCuln7.jpg', 1, '2023-12-11 07:43:03', '2023-12-11 21:58:35'),
(19, 'Ayu Kusuma Dewi, S.Pd.', 'teachers/gT4ILiJ7V2zZj4y5zLlW7i5sY8T2LSNrUL1Tgm7b.jpg', 1, '2023-12-11 07:43:14', '2023-12-11 21:58:19'),
(20, 'Saidullah, S.Kom.', 'teachers/QD3XbB9mNpZui9eWKYFwDXK2L1zCi0BnjZeiKHxP.jpg', 1, '2023-12-11 07:43:44', '2023-12-11 21:57:54'),
(21, 'Islah Kodin, M.Pd.', 'teachers/HX0hbXLekO2uEJnWSV0BozknCwyFc4NjDhVMGngP.jpg', 1, '2023-12-11 07:44:15', '2023-12-11 21:48:50'),
(22, 'Anggi Kosasih, S.Kom.', NULL, 1, '2023-12-11 07:44:22', '2023-12-11 21:48:35'),
(23, 'Maria Widya, M.Pd.', 'teachers/e8YGMg4JxYtaN1p23kFn80C5FWRx2Hmc39fTni2l.jpg', 1, '2023-12-11 07:44:32', '2023-12-11 21:48:23'),
(24, 'Ria Ventasari', NULL, 1, '2023-12-11 07:44:38', '2023-12-11 07:44:38'),
(25, 'Rangga Fauzi, S.Kom.', NULL, 1, '2023-12-11 07:44:49', '2023-12-11 21:47:53'),
(26, 'Wiwin Faujiah, S.Pd.', NULL, 1, '2023-12-11 07:44:56', '2023-12-11 21:48:06'),
(27, 'Ike Sukma Indah, S.E.', NULL, 1, '2023-12-11 07:45:02', '2023-12-11 21:47:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `is_admin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', 1, NULL, '$2y$12$8XnPuo5IdFSbIx61IZpEXeMNwlaJUfHkIp.qQU3ALA.taD.OkB1SG', NULL, '2023-12-11 07:32:00', '2023-12-15 09:36:04'),
(3, 'ppp', 'ppp@gmail.com', 1, NULL, '$2y$12$3RELqrzPfsBk31oo3hNABOKRqvYRR4rubXCHJT2gsXGgDKAmWT1rO', NULL, '2023-12-15 09:19:47', '2023-12-15 09:19:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carousels`
--
ALTER TABLE `carousels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `carousels_name_unique` (`name`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `ekstrakurikulers`
--
ALTER TABLE `ekstrakurikulers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ekstrakurikulers_name_unique` (`name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fasilitas_name_unique` (`name`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `galleries_name_unique` (`name`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `prestasis`
--
ALTER TABLE `prestasis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `prestasis_name_unique` (`name`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teachers_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carousels`
--
ALTER TABLE `carousels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ekstrakurikulers`
--
ALTER TABLE `ekstrakurikulers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `prestasis`
--
ALTER TABLE `prestasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
