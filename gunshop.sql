-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 07:51 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gunshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imeBrand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drzava` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `imeBrand`, `drzava`) VALUES
(1, 'Zastava Firearms', 'Russia'),
(2, 'Riley Defense', 'Canada'),
(3, 'Pioneer Arms', 'Germany'),
(4, 'Chioppa', 'North Korea'),
(5, 'Windham Weaponry', 'Great Britain');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guns`
--

CREATE TABLE `guns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nazivGun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idBrend` int(11) NOT NULL,
  `idKat` int(11) NOT NULL,
  `opis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cijena` double NOT NULL,
  `rating` double NOT NULL,
  `slikaGun` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guns`
--

INSERT INTO `guns` (`id`, `nazivGun`, `idBrend`, `idKat`, `opis`, `cijena`, `rating`, `slikaGun`) VALUES
(12, 'AK47 7.62x39, 16\" Barrel', 2, 4, 'Caliber: 7.62x39mm\r\nMagazine Capacity: 30\r\nMagazines Included: 1\r\nDetachable Magazine: Yes\r\nBarrel Length: 16.25\'\'\r\nRate of Twist: No\r\nThreaded Barrel: Yes\r\nOverall Length in Inches: 35.25', 929.99, 5, '1642859858.jpg'),
(13, 'Mauser M48 8MM Bolt Action', 3, 6, 'Type    Bolt-action rifle\r\nSpecifications:\r\nWeight    3.9 kg (8.6 lb)\r\nLength    1105 mm (43.5 in)\r\nBarrel length    597 mm (23.25 in)\r\nCartridge    7.92 x 57 mm IS (8 mm Mauser)', 297.89, 4, '1642850153.jpg'),
(14, 'STG44 Carbine, 16\", 22LR', 5, 4, 'The STG-44 (Sturmgewehr 44) was developed in Nazi Germany during WWII and was the first ‘Storm’ (or assault) rifle to see major deployment. (Sturmgewehr 44, literally \"storm (or assault) rifle (model of 19*44*\")', 426.79, 4, '1642850544.jpg'),
(17, 'M-16 5.56mm, 20\" Barrel', 5, 4, 'Name : Fn15 Mil Collector M16 5.56mm\r\nDesc : Military Collector M16\r\nModel : FN15 M16\r\nModel # : 36320\r\nManufacturer : FNH USA\r\nCaliber : 223 Rem | 5.56 NATO\r\nType : Rifle\r\nBarrel : 20\"\r\nCapacity : 30+1', 1699, 4, '1642860053.jpg'),
(18, 'Glock 17 Gen5 Full Size 9MM 4.49\"', 2, 1, 'Action : DAO\r\nCaliber : 9mm Luger\r\nBarrel Length : 4.49\"\r\nCapacity : 17+1\r\nSafety : Trigger/Firing Pin/Drop\r\nGrips : Black Polymer\r\nSight Configuration : Fixed\r\nWeight : 33.3 oz', 538.89, 3, '1642860351.jpg'),
(19, 'Heritage Rough Rider 22LR, 4.75\" Barrel', 2, 1, 'Type : Revolver\r\nAction : Single\r\nCaliber : 22 Long Rifle\r\nBarrel Length : 4.8\"\r\nCapacity : 6\r\nHammer Style : Spurred\r\nGrips : Cocobolo\r\nSights : Fixed Front, Notched Rear\r\nWeight : 33.4 oz', 134.49, 4, '1642861484.jpg'),
(20, 'Walther UZI Pistol 22LR, 5\", 20 Rnd Mag', 5, 1, 'Blowback operation. Metal receiver, lower Picatinny rail, front sight adjustable for elevation, rear sight adjustable for windage and grip safety. Overall length: 9.5 inches. Barrel length: 5 inches. Barrel twist: 1 in 13-3/4 inches. Grooves: 6. Muzzle thread: M8x.75 mm.', 348.79, 5, '1642861721.jpg'),
(21, 'Beretta BM59 Paratrooper 7.62/308 Win Folding Stock', 3, 6, 'The Beretta BM 59 is an Italian-made rifle based on the M1 Garand rifle, but chambered in 7.62×51mm NATO', 1999.99, 5, '1642862042.jpg'),
(22, 'Gold Prestige Edition AK-47 7.62X39 16\" Zastava M70', 1, 4, 'Chambered in 7.62x39mm with a 16.3 inch barrel. Features include a quad rail handguard, a folding stock, and a 30 round magazine. Real 24 carat gold.', 21599, 5, '1642862348.jpg'),
(23, 'CZ 805 Bren S1 Carbine, .223/5.56, 16\"', 4, 4, 'Name : 805 Bren S1 Carb 5.56 Blk 30+1\r\nDesc : Accessory Rail | Adj Sights\r\nModel : 805 Bren S1 Carbine\r\nModel # : 08520\r\nCaliber : 223 Rem | 5.56 NATO\r\nType : Rifle\r\nAction : Semi-Auto\r\nBarrel : 16.2\"\r\nCapacity : 30+1', 2199.99, 3, '1642862622.jpg'),
(24, 'Nosler M48 Long-Range Carbon, .33', 5, 3, 'Action : Bolt\r\nCaliber : 33 Nosler\r\nBarrel Length : 26\"\r\nCapacity : 3+1\r\nTrigger : Timney\r\nSafety : Two Position\r\nOAL : 48\"\r\nWeight : 7 lbs', 3202.19, 4, '1642863025.PNG'),
(25, 'Inland Model T30 M1 Carbine .30 Carbine 18\"', 1, 3, 'Action : Bolt\r\nCaliber : 30 Carbine\r\nBarrel Length : 18\"\r\nCapacity : 10+1\r\nOAL : 35.75\"\r\nWeight : 6 lbs', 2036.19, 3, '1642863273.PNG'),
(26, 'HK MR556, 5.56mm Package 16.5\" Barrel', 2, 3, 'A direct descendent of the HK416, the MR556A1 is a semi-automatic rifle developed by Heckler & Koch as a premium level commercial/civilian firearm with match rifle capability.', 5525.29, 5, '1642863615.jpg'),
(27, 'Maverick 88 Pump Security/Special Purpose 12 ga 18.5\"', 3, 2, 'Action : Pump\r\nGauge : 12 Gauge\r\nBarrel Length : 18.5\"\r\nCapacity : 5+1\r\nChamber : 3\"\r\nOAL : 39.5\"\r\nWeight : 7 lbs', 238.89, 3, '1642863797.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategorije`
--

CREATE TABLE `kategorije` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imeKat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opisKat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slikaKat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategorije`
--

INSERT INTO `kategorije` (`id`, `imeKat`, `opisKat`, `slikaKat`) VALUES
(1, 'Pistol', 'Pištolj je vrsta vatrenog oružja koje je dizajnirano da se drži u ruci prilikom korištenja. Pištolji se obično dijele na: pištolje s jednim metkom; pištolje s više cijevi revolvere poluautomatske pištolje automatske pištolje. ', 'pistol.jpg'),
(2, 'Pumparica', 'Radnja pumpe ili akcija klizanja je ponavljajuća akcija vatrenog oružja kojom se ručno upravlja pomicanjem kliznog štitnika za ruke na prednjem dijelu pištolja.', 'shotgun.jpg'),
(3, 'Snajperi', 'Snajperska puška je puška dizajnirana da, na većim udaljenostima, bude preciznija od ostalih streljačkih oružja. ', 'sniper.jpg'),
(4, 'Automatic', 'Automatsko oružje je vatreno oružje kojem tlak plina ili druga tehnička rješenja pri ispaljivanju projektila pokreću mehanizam za ponovno punjenje i opaljivanje sljedećeg metka. ', 'automatska.jpg'),
(6, 'Repetirka', 'Puška koja se ponavlja je jednocijevna puška sposobna za višestruko pražnjenje između svakog punjenja municije.', 'repetirka.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_01_16_173001_create_sessions_table', 1),
(7, '2022_01_16_174829_create_guns_table', 1),
(8, '2022_01_16_181056_create_kategorijes_table', 2),
(9, '2022_01_16_182014_create_brands_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('ypqkgseJR69wvWkXTaxkqD1SlBMgjAUTWMGzATiv', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36 OPR/82.0.4227.50', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoienZhcUFWRWdkcUptVldwRXpTTjE5bnd6RHU2OVdQWWFoZnNRdm9OcyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMyOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAva2F0ZWdvcmlqZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRVVVdUaDRodHZzUkFLb09CR3VmVWwudGpwZ3FjeUtPNW9rMFIvZjlja0UubDZOT1cvM25iQyI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkVVVXVGg0aHR2c1JBS29PQkd1ZlVsLnRqcGdxY3lLTzVvazBSL2Y5Y2tFLmw2Tk9XLzNuYkMiO30=', 1643308336);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Lema', 'alemahusic@gmail.com', NULL, '$2y$10$UUWTh4htvsRAKoOBGufUl.tjpgqcyKO5ok0R/f9ckE.l6NOW/3nbC', NULL, NULL, NULL, NULL, NULL, '2022-01-16 17:06:41', '2022-01-16 17:06:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `guns`
--
ALTER TABLE `guns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategorije`
--
ALTER TABLE `kategorije`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guns`
--
ALTER TABLE `guns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `kategorije`
--
ALTER TABLE `kategorije`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
