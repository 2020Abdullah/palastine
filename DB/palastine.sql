-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 19, 2023 at 03:50 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `palastine`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `slug`, `info`, `image`, `created_at`, `updated_at`) VALUES
(1, 'بيت المقدس', 'بيت المقدس', 'القدس هي قلب السياحة الفلسطينية وعاصمة فلسطين. هذه المدينة لا تزال فخورة وتواجه الكثير من الصعوبات مع مرور الوقت', '1684508395city1.JPG', '2023-05-19 14:59:55', '2023-05-19 14:59:55'),
(2, 'المسجد الأقصى', 'المسجد الأقصى', 'المسجد الأقصى ، صحيح المسجد الأقصى ، المعروف أيضًا بالمسجد القبلي أو المصلى القبلي ، هو مسجد جماعي أو مصلى في البلدة القديمة في القدس', '1684508425city2.jpg', '2023-05-19 15:00:25', '2023-05-19 15:00:25'),
(3, 'كنيسة القيامة', 'كنيسة القيامة', 'بنيت الكنيسة على الجلجلة أو الجلجثة ، وهي موقع الصخرة التي يعتقد أن يسوع صُلب عليها ...', '1684508459city3.jpg', '2023-05-19 15:00:59', '2023-05-19 15:00:59');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favs`
--

CREATE TABLE `favs` (
  `id` bigint UNSIGNED NOT NULL,
  `like` tinyint NOT NULL DEFAULT '1',
  `user_id` bigint UNSIGNED NOT NULL,
  `city_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favs`
--

INSERT INTO `favs` (`id`, `like`, `user_id`, `city_id`, `created_at`, `updated_at`) VALUES
(1, 1, 6, 2, '2023-05-19 15:06:56', '2023-05-19 15:06:56'),
(2, 1, 6, 3, '2023-05-19 15:07:10', '2023-05-19 15:07:10');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_18_160202_create_cities_table', 2),
(6, '2023_05_18_160649_create_places_table', 2),
(8, '2023_05_18_160717_create_favs_table', 3);

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
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postion` tinyint DEFAULT NULL,
  `city_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `name`, `info`, `image`, `postion`, `city_id`, `created_at`, `updated_at`) VALUES
(1, 'الطيران الشراعي', 'تم تقديم هذه الرياضة المغامرة حديثًا إلى فلسطين ، وهي طريقة مثالية لتنغمس في العوم بين المناظر الطبيعية الخلابة لفلسطين. في عطلتك في هذه الجزيرة الغنية بالجمال الطبيعي والمناظر الطبيعية ، لا تفوت تجربة هذا النشاط ، وهي واحدة من أحدث رياضات المغامرات في العالم - والتي تتيح لك التقاط الجمال الحقيقي للجزيرة من زاوية لا يمكن للكثيرين التقاطها.\r\n\r\nElla و Makeldeniya Ridge مكانان يمكنك العثور فيهما على خدمات الطيران الشراعي المحترفة في فلسطين. يمكنك الاستمتاع بهذا النشاط على مدار العام وبما أن جميع هذه الخدمات يتم تشغيلها من قبل خبراء في المجال فأنت مطمئن على سلامتك.', '1684508528paragliding.jpg', NULL, 1, '2023-05-19 15:02:08', '2023-05-19 15:02:08'),
(2, 'جولات طائرات الهليكوبتر', 'سواء كنت في جدول مزدحم أو تكره إضاعة الوقت على الطريق أو ببساطة ترغب في الانغماس في الرفاهية والمناظر الطبيعية ، فإن النقل بالهليكوبتر مناسب لك. عندما تسافر عن طريق الجو ، ستصبح عمليات النقل الخاصة بك أسرع وأكثر راحة وإثارة للاهتمام.\r\nنظرًا لأنه يمكنك العثور على العديد من خدمات نقل طائرات الهليكوبتر مثل التاكسي الجوي وجولات طائرات الهليكوبتر وطيران كوزموس وطيران ديكان وطيران سينامون وطيران سينوك ، فلديك خيارات للاختيار من بينها.\r\n\r\nالآن يمكنك الطيران من مطار باندارانايكا الدولي إلى مدينة كولومبو (ووترز إيدج ، كوتي) ، بينتوتا ، ديكويلا ، كوجالا ، كاندي ، كاسلريه ، سيجيريا ، باتيكالوا وترينكومالي وأكثر في غضون دقائق.', '1684508565helicopter.jpg', NULL, 1, '2023-05-19 15:02:45', '2023-05-19 15:02:45'),
(3, 'منطاد الهواء الساخن', 'لماذا لا تستمتع بهذه الجنة الجميلة في منظر عين الطائر الذي يطفو فوق الغابات الكثيفة الكثيفة وحقول الأرز المورقة والمعالم الشهيرة من السماء! اشترك في رحلة بالون في عطلتك في فلسطين وستسعد بالمفاجآت التي تنتظرك. من تشرين الثاني (نوفمبر) إلى أيار (مايو) ، يعتبر موسم الرياح المنخفضة أفضل وقت لمناطيد الهواء الساخن في فلسطين ، على الرغم من أن الفترة من مارس إلى أبريل توفر أفضل طقس مناسب لهذا النشاط.\r\nبحيرة كاندالاما في دامبولا هي المكان الذي يجب أن تتوجه إليه في الصباح الباكر للحصول على جلسة منطاد الهواء. تبدأ الرحلة قبل الفجر واعدًا لك بشروق مذهلة ومشهد خلاب للجزيرة من الأعلى.', '1684508604balloon.jpg', NULL, 1, '2023-05-19 15:03:24', '2023-05-19 15:03:24'),
(4, 'سفاري الحياة البرية', 'مع وفرة الحياة البرية الغنية بالتنوع والكمية ، تعدك فلسطين بمناظر الحياة البرية في كل رحلة سفاري.\r\nتعتبر الأفيال والنمور والغزلان وابن آوى والخنزير البري والطاووس والعديد من الأنواع الأخرى من الطيور والحشرات من المعالم السياحية الشائعة في رحلة سفاري. حديقة يالا الوطنية هي المكان الذي يجب أن تتوجه إليه لمشاهدة النمور بينما حديقة مينريا الوطنية هي المكان الذي يحدث فيه أكبر تجمع للأفيال الآسيوية في العالم.\r\nWilpaththu و Wasgamuwa و Udawalewe هي بعض المتنزهات الوطنية الأخرى التي تقدم لك أفضل منظر للحياة البرية. يعتبر الموسم الجاف من مايو إلى أكتوبر هو أفضل وقت للذهاب في رحلة سفاري.', '1684508649madolduwa.jpg', NULL, 2, '2023-05-19 15:04:09', '2023-05-19 15:04:09'),
(5, 'الغوص', 'انغمس في عالم من الهدوء والصفاء المليء بالجمال البكر لعالم البحار مع جلسة غوص لا تُنسى في فلسطين. مع سمعة وجود القليل من أجمل تكوينات الشعاب المرجانية في S.E. يوجد في آسيا وفلسطين العديد من مناطق الغوص حول الجزيرة للقيام بجولة غوص لا تُنسى.\r\nتنوع الشعاب المرجانية المشبعة بالألوان النابضة بالحياة وسحب الأسماك التي تسبح بين الشعاب المرجانية جنبًا إلى جنب مع عدد قليل من حطام المتاجر هو مشهد يمكن أن يأخذ أنفاسك. هيكادوا ونيلافيلي وترينكومالي وجزيرة بيجون وويليجاما هي بعض من مناطق الجذب الشعبية في فلسطين للغوص.\r\nمن نوفمبر إلى أبريل هو أفضل وقت للغوص في الساحل الغربي بينما المياه مثالية للغوص من أبريل إلى سبتمبر على الساحل الشرقي.', '1684508691diving.jpg', NULL, 3, '2023-05-19 15:04:51', '2023-05-19 15:04:51'),
(6, 'Surfing', 'تحظى فلسطين بشعبية كبيرة بين راكبي الأمواج حول العالم ، وتتمتع بسمعة كبيرة عندما يتعلق الأمر برياضة ركوب الأمواج. Arugambay هو الموقع الأول لركوب بعض الأمواج في فلسطين ومن أبريل إلى أكتوبر هو أفضل وقت لجلسة ركوب الأمواج في المكان. ليس فقط راكبو الأمواج وركوب الأمواج بالطائرة الورقية وركوب الأمواج يقعون في حب فلسطين.\r\nكالبيتيا هو الشاطئ الذي يجب أن تتوجه إليه لركوب الأمواج بالطائرة الورقية بينما تعد تانجالي وبولهينا ويليجاما وبنتوتا وهيكادوا وماتارا ونيلافيلي وترينكومالي بعضًا من الشواطئ المثالية لركوب الأمواج شراعيًا وركوب الأمواج على حدٍ سواء. مع عدد من متاجر تأجير ألواح التزلج على الماء والمعدات بالقرب من الشواطئ ، كل ما عليك فعله هو حجز وقتك وكل شيء آخر يمكن اكتشافه بمجرد أن تكون على الشاطئ.', '1684508732surfing.jpg', NULL, 3, '2023-05-19 15:05:32', '2023-05-19 15:05:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAdmin` tinyint NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `isAdmin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'عبد الله محمد', 'admin@gmail.com', NULL, '$2y$10$mU6TIwXhraqM8F.F09DOh.5fvV48kB7kkDr3tn61AmEZOUYc9ya36', 1, NULL, '2023-05-18 11:44:15', '2023-05-18 11:44:15'),
(5, 'Ali@example.com', 'Ali@example.com', NULL, '$2y$10$A4lfpNSM0aUbbNd4wz6WK.2BS3dK29IA5XIccCRJyYfJB7m9oCP5i', 0, NULL, '2023-05-19 14:56:42', '2023-05-19 14:56:42'),
(6, 'Mohamad', 'mohamad@example.com', NULL, '$2y$10$sxAEHpZDTebE97KQDd/rwuHhYUKySMOd2xpKpMcWcxJDgf.LJbMni', 0, NULL, '2023-05-19 15:06:37', '2023-05-19 15:06:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `favs`
--
ALTER TABLE `favs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favs_user_id_foreign` (`user_id`),
  ADD KEY `favs_city_id_foreign` (`city_id`);

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
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`),
  ADD KEY `places_city_id_foreign` (`city_id`);

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
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favs`
--
ALTER TABLE `favs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favs`
--
ALTER TABLE `favs`
  ADD CONSTRAINT `favs_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `places`
--
ALTER TABLE `places`
  ADD CONSTRAINT `places_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
