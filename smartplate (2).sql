-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2020 at 06:42 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartplate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_password`) VALUES
(1, 'admin2', 'admin1'),
(2, 'adminMohamed', 'admin2'),
(3, 'mohamed_nagdy', 'mohamednagdy');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'All'),
(2, 'Challenges'),
(3, 'Sports'),
(4, 'Healthy Food');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `post_ID` int(10) NOT NULL,
  `comment` text NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_image` varchar(200) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `content_recipe`
--

CREATE TABLE `content_recipe` (
  `recipe_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `meal_id` int(11) NOT NULL,
  `recipe` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `content_recipe`
--

INSERT INTO `content_recipe` (`recipe_id`, `user_id`, `meal_id`, `recipe`, `date`) VALUES
(65, 24, 17, 'tomato', '2020-08-04'),
(66, 24, 17, 'french%20fries', '2020-08-04'),
(67, 24, 17, 'green%20apple', '2020-08-04'),
(68, 24, 17, 'cucumber', '2020-08-04'),
(69, 24, 18, 'tomato', '2020-08-04'),
(70, 24, 18, 'french%20fries', '2020-08-04'),
(71, 24, 18, 'green%20apple', '2020-08-04'),
(72, 24, 18, 'cucumber', '2020-08-04'),
(73, 24, 19, 'tomato', '2020-08-04'),
(74, 24, 19, 'french%20fries', '2020-08-04'),
(75, 24, 19, 'green%20apple', '2020-08-04'),
(76, 24, 19, 'cucumber', '2020-08-04'),
(77, 24, 20, 'tomato', '2020-08-04'),
(78, 24, 20, 'french%20fries', '2020-08-04'),
(79, 24, 20, 'green%20apple', '2020-08-04'),
(80, 24, 20, 'cucumber', '2020-08-04'),
(81, 24, 21, 'tomato', '2020-08-04'),
(82, 24, 21, 'french%20fries', '2020-08-04'),
(83, 24, 21, 'green%20apple', '2020-08-04'),
(84, 24, 21, 'cucumber', '2020-08-04');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doctor_id` int(10) NOT NULL,
  `doctor_name` varchar(50) NOT NULL,
  `doctor_email` varchar(50) NOT NULL,
  `doctor_password` varchar(100) NOT NULL,
  `doctor_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doctor_id`, `doctor_name`, `doctor_email`, `doctor_password`, `doctor_image`) VALUES
(1, 'ahmed_ali', 'ahmed@ahmed.ahmed', 'ahmed', 'uploadedImages/trainer-2.jpg'),
(2, 'sage', 'sage@mohamed.mohamed', 'sage', 'uploadedImages/trainer-3.jpg'),
(3, 'soraka', 'soraka@ahmed.ahmed', 'soraka', 'uploadedImages/soraka.jpg'),
(4, 'abdullah', 'abdullah@yahoo.com', 'abdullah', 'uploadedImages/abdullah.jpg'),
(6, 'mina akram', 'mina@akram.com', 'akram', 'uploadedImages/mina.jpg'),
(7, 'ody', 'ody@yahoo.net', 'odyy', 'uploadedImages/trainer-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `like_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(10) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `post_content` text CHARACTER SET utf8 NOT NULL,
  `user_id` int(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_image` varchar(200) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `post_image` varchar(200) NOT NULL,
  `post_date` datetime NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `post_privacy` varchar(20) NOT NULL DEFAULT 'public'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_content`, `user_id`, `user_name`, `user_image`, `user_type`, `post_image`, `post_date`, `category_name`, `post_privacy`) VALUES
(6, 'benefits of exercise', 'Help you control your weight. Along with diet, exercise plays an important role in controlling your weight and preventing obesity. To maintain your weight, the calories you eat and drink must equal the energy you burn. To lose weight, you must use more calories than you eat and drink.\r\n\r\nReduce your risk of heart diseases. Exercise strengthens your heart and improves your circulation. The increased blood flow raises the oxygen levels in your body. This helps lower your risk of heart diseases such as high cholesterol, coronary artery disease, and heart attack. Regular exercise can also lower your blood pressure and triglyceride levels.\r\n\r\nHelp your body manage blood sugar and insulin levels. Exercise can lower your blood sugar level and help your insulin work better. This can cut down your risk for metabolic syndrome and type 2 diabetes. And if you already have one of those diseases, exercise can help you to manage it.\r\n\r\nHelp you quit smoking. Exercise may make it easier to quit smoking by reducing your cravings and withdrawal symptoms. It can also help limit the weight you might gain when you stop smoking.\r\n\r\nImprove your mental health and mood. During exercise, your body releases chemicals that can improve your mood and make you feel more relaxed. This can help you deal with stress and reduce your risk of depression.\r\n\r\nHelp keep your thinking, learning, and judgment skills sharp as you age. Exercise stimulates your body to release proteins and other chemicals that improve the structure and function of your brain.', 11, 'rakan', 'uploadedImages/ui-5.jpg', 'U', 'uploadedImages/sprt.jpg', '2020-01-22 03:37:18', 'Sports', 'public'),
(7, 'Protein', 'Protein gives you the energy to get up and go—and keep going—while also supporting mood and cognitive function. Too much protein can be harmful to people with kidney disease, but the latest research suggests that many of us need more high-quality protein, especially as we age. That doesn’t mean you have to eat more animal products—a variety of plant-based sources of protein each day can ensure your body gets all the essential protein it needs', 10, 'ahmed ', 'uploadedImages/ui-1.jpg', 'U', 'uploadedImages/olololo.jpg', '2020-01-23 02:19:16', 'Healthy Food', 'public'),
(9, 'new post Healthy eating', 'Healthy eating doesn’t have to be overly complicated. If you feel overwhelmed by all the conflicting nutrition and diet advice out there, you’re not alone. It seems that for every expert who tells you a certain food is good for you, you’ll find another saying exactly the opposite. The truth is that while some specific foods or nutrients have been shown to have a beneficial effect on mood, it’s your overall dietary pattern that is most important. The cornerstone of a healthy diet should be to replace processed food with real food whenever possible. Eating food that is as close as possible to the way nature made it can make a huge difference to the way you think, look, and feel.', 3, 'abdullah', 'uploadedImages/abdullah.jpg', 'D', 'uploadedImages/waaaaaaah.jpg', '2020-01-23 02:19:58', 'Healthy Food', 'public'),
(14, 'crossfit', 'With a continuously running clock do one pull-up the first minute, two pull-ups the second minute, three pull-ups the third minute... continuing as long as you are able.\r\n\r\nUse as many sets each minute as needed.\r\n\r\nPost number of minutes completed to comments.', 3, 'mina akram', 'uploadedImages/mina.jpg', 'D', 'uploadedImages/disa.jpg', '2020-01-24 03:30:45', 'Challenges', 'public'),
(15, 'fiber', 'Fiber. Eating foods high in dietary fiber (grains, fruit, vegetables, nuts, and beans) can help you stay regular and lower your risk for heart disease, stroke, and diabetes. It can also improve your skin and even help you to lose weight', 3, 'soraka', 'uploadedImages/soraka.jpg', 'D', 'uploadedImages/fib.jpg', '2020-01-24 03:31:14', 'Healthy Food', 'public'),
(17, 'The fundamentals of healthy eating\r\n', 'While some extreme diets may suggest otherwise, we all need a balance of protein, fat, carbohydrates, fiber, vitamins, and minerals in our diets to sustain a healthy body. You don’t need to eliminate certain categories of food from your diet, but rather select the healthiest options from each category.\r\n\r\nProtein gives you the energy to get up and go—and keep going—while also supporting mood and cognitive function. Too much protein can be harmful to people with kidney disease, but the latest research suggests that many of us need more high-quality protein, especially as we age. That doesn’t mean you have to eat more animal products—a variety of plant-based sources of protein each day can ensure your body gets all the essential protein it needs', 10, 'ahmed ', 'uploadedImages/ui-1.jpg', 'U', 'uploadedImages/aaasasasas.jpg', '2020-01-26 09:33:33', 'Healthy Food', 'public'),
(18, 'fat', 'Fat. Not all fat is the same. While bad fats can wreck your diet and increase your risk of certain diseases, good fats protect your brain and heart. In fact, healthy fats—such as omega-3s—are vital to your physical and emotional health. Including more healthy fat in your diet can help improve your mood, boost your well-being, and even trim your waistline', 10, 'ahmed ', 'uploadedImages/ui-1.jpg', 'U', 'uploadedImages/fat.jpg', '2020-01-26 09:33:37', 'Healthy Food', 'public'),
(22, 'frist time pushups!', 'STEP 1: HIGH PLANK\r\n\r\nThe first step toward a full-blown pushup is learning to support yourself on your hands. The high plank teaches you to stabilize your upper body with your shoulders while supporting your lower half with your core muscles.  \r\n\r\nCoaching Cues\r\n\r\nKeep your hands directly underneath your shoulders.\r\nMaintain a straight line from your head to your toes. No sagging hips or poking your head forward.\r\nBreathe normally. Inhale through your nose and exhale through your mouth.', 10, 'ahmed ', 'uploadedImages/ui-1.jpg', 'U', 'uploadedImages/p6uyM1.jpg', '2020-02-06 02:42:15', 'Sports', 'public'),
(23, 'lose weight fast ', '. Cut Back on Sugars and Starches\r\nThe most important part is to cut back on sugars and starches (carbs).\r\n\r\nWhen you do that, your hunger levels go down and you end up eating much fewer calories (1Trusted Source).\r\n\r\nNow instead of burning carbs for energy, your body starts feeding off of stored fat.\r\n\r\nAnother benefit of cutting carbs is that it lowers insulin levels, causing your kidneys to shed excess sodium and water out of your body. This reduces bloat and unnecessary water weight (2, 3Trusted Source).\r\n\r\nIt is not uncommon to lose up to 10 pounds (sometimes more) in the first week of eating this way, both body fat and water weight.\r\n\r\nThis is a graph from a study comparing low-carb and low-fat diets in overweight or obese women (4Trusted Source).\r\n\r\nThe low-carb group is eating until fullness, while the low-fat group is calorie-restricted and hungry.\r\n\r\nCut the carbs and you will start to eat fewer calories automatically and without hunger (5).\r\n\r\nPut simply, cutting carbs puts fat loss on autopilot.', 10, 'ahmed ', 'uploadedImages/ui-1.jpg', 'U', 'uploadedImages/XLses01-Most-Impressive-Weight-Transformations-on-Instagram-Courtesy-Courtesy-@Jack_gets_fit-ft.jpg', '2020-02-06 02:43:11', 'Challenges', 'public'),
(24, 'Whats a good healthy diet?', 'Eat more of these foods: fruits and vegetables, whole grains, fish and seafood, vegetable oils, beans, nuts, and seeds. Eat less of these foods: whole milk and other full-fat dairy foods, red meat, processed meats, highly refined and processed grains and sugars, and sugary drinks', 10, 'ahmed ', 'uploadedImages/ui-1.jpg', 'U', 'uploadedImages/XFl42cccc.jpg', '2020-02-06 02:43:59', 'Healthy Food', 'public'),
(25, 'my transformation ', ' here I AM \r\nfit again people ', 10, 'nana', 'uploadedImages/ui-8.jpg', 'U', 'uploadedImages/hea_028.jpg', '2020-02-12 10:37:41', 'Challenges', 'public'),
(35, 'bow bow !!', 'look at that \r\ndo u believe it \r\n.\r\n.\r\n.\r\n#challenges', 24, 'Abdo', 'uploadedImages/ui-9.jpg', 'U', 'uploadedImages/trns_017.jpg', '2020-07-29 12:21:21', 'Challenges', 'public'),
(37, 'tips', 'It\'s a good idea to prepare before (and refuel after) every workout with high-protein snacks like nuts, yogurt, deli meat, hummus and cottage cheese. Of course, maintaining a balanced diet will help you meet your fitness goals, but it\'s also realistic to enjoy an indulgence here and there!', 1, 'ahmed_ali', 'uploadedImages/trainer-2.jpg', 'D', 'uploadedImages/Xiqogui_002.jpg', '2020-08-01 10:46:12', 'Challenges', 'public'),
(39, 'notes', 'when you try to eat it\'s nothing to do with quantity its all about quality .', 2, 'sage', 'uploadedImages/trainer-3.jpg', 'D', 'uploadedImages/3VNuGtrainer-3.jpg', '2020-08-01 10:52:25', 'Challenges', 'public'),
(40, 'hi im new ', 'here\'s my challenge I just need  to keep going !!.', 25, 'darkness', 'uploadedImages/aOEhy33333333.jpg', 'U', 'uploadedImages/qMNoUui_005.jpg', '2020-08-01 11:00:28', 'Challenges', 'public'),
(41, 'JUST KEEP UP', 'I\'m here to tell you never give up your dream ', 22, 'toka', 'uploadedImages/ui-7.jpg', 'U', 'uploadedImages/GAedGui_020.jpg', '2020-08-01 11:24:40', 'Sports', 'public');

-- --------------------------------------------------------

--
-- Table structure for table `raspberry_pi_data`
--

CREATE TABLE `raspberry_pi_data` (
  `meal_id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `quarter_1_weight` double NOT NULL,
  `quarter_2_weight` double NOT NULL,
  `quarter_3_weight` double NOT NULL,
  `quarter_4_weight` double NOT NULL,
  `Energy` double NOT NULL,
  `Protein` double NOT NULL,
  `Fat` double NOT NULL,
  `Carbs` double NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `raspberry_pi_data`
--

INSERT INTO `raspberry_pi_data` (`meal_id`, `user_id`, `quarter_1_weight`, `quarter_2_weight`, `quarter_3_weight`, `quarter_4_weight`, `Energy`, `Protein`, `Fat`, `Carbs`, `date`) VALUES
(17, 24, 100, 150, 80, 144, 311, 5.678, 7.9954, 55.9452, '2020-08-03 22:00:00'),
(18, 24, 130, 800, 753, 620, 1753.14, 27.2072, 42.2927, 321.7263, '2020-08-03 22:00:00'),
(19, 24, 420, 720, 365, 333, 1417.25, 24.3145, 37.8278, 250.6144, '2020-08-03 22:00:00'),
(20, 24, 555, 321, 662, 810, 1086.86, 20.5732, 19.2767, 218.0023, '2020-08-03 22:00:00'),
(21, 24, 540.2, 145.99, 742.41, 142, 768.1188, 12.35953, 9.93208, 162.189585, '2020-08-03 22:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `raspi_images`
--

CREATE TABLE `raspi_images` (
  `image_id` int(11) NOT NULL,
  `meal_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `raspi_images`
--

INSERT INTO `raspi_images` (`image_id`, `meal_id`, `user_id`, `image`, `date`) VALUES
(65, 17, 24, 'raspberryImage/m8roLimage0.jpg', '2020-08-04'),
(66, 17, 24, 'raspberryImage/O70o7image1.jpg', '2020-08-04'),
(67, 17, 24, 'raspberryImage/3dGMFimage2.jpg', '2020-08-04'),
(68, 17, 24, 'raspberryImage/LYJAqimage3.jpg', '2020-08-04'),
(69, 18, 24, 'raspberryImage/kNvvPimage0.jpg', '2020-08-04'),
(70, 18, 24, 'raspberryImage/96txqimage1.jpg', '2020-08-04'),
(71, 18, 24, 'raspberryImage/HBZ0iimage2.jpg', '2020-08-04'),
(72, 18, 24, 'raspberryImage/Apgqlimage3.jpg', '2020-08-04'),
(73, 19, 24, 'raspberryImage/2Gyj5image0.jpg', '2020-08-04'),
(74, 19, 24, 'raspberryImage/NS9D2image1.jpg', '2020-08-04'),
(75, 19, 24, 'raspberryImage/mb9FJimage2.jpg', '2020-08-04'),
(76, 19, 24, 'raspberryImage/Y2WNiimage3.jpg', '2020-08-04'),
(77, 20, 24, 'raspberryImage/DoCCOimage0.jpg', '2020-08-04'),
(78, 20, 24, 'raspberryImage/xvLbIimage1.jpg', '2020-08-04'),
(79, 20, 24, 'raspberryImage/fW9XOimage2.jpg', '2020-08-04'),
(80, 20, 24, 'raspberryImage/QGG6Jimage3.jpg', '2020-08-04'),
(81, 21, 24, 'raspberryImage/C5pf8image0.jpg', '2020-08-04'),
(82, 21, 24, 'raspberryImage/rQma3image1.jpg', '2020-08-04'),
(83, 21, 24, 'raspberryImage/V2ZhXimage2.jpg', '2020-08-04'),
(84, 21, 24, 'raspberryImage/HDzYcimage3.jpg', '2020-08-04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_image` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_gender` varchar(10) NOT NULL,
  `user_age` int(10) NOT NULL,
  `user_doctor_id` int(10) NOT NULL,
  `user_height` int(10) NOT NULL,
  `user_weight` int(50) NOT NULL,
  `doctor_notes` text NOT NULL,
  `calories` text NOT NULL,
  `body_mass_index` varchar(100) NOT NULL,
  `basal_metabolic_rate` varchar(100) NOT NULL,
  `body_fat_persentage` varchar(100) NOT NULL,
  `lean_body_mass` varchar(100) NOT NULL,
  `protien_in_grams` varchar(100) NOT NULL,
  `carbs_in_grams` varchar(100) NOT NULL,
  `fat_in_grams` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_image`, `email`, `user_gender`, `user_age`, `user_doctor_id`, `user_height`, `user_weight`, `doctor_notes`, `calories`, `body_mass_index`, `basal_metabolic_rate`, `body_fat_persentage`, `lean_body_mass`, `protien_in_grams`, `carbs_in_grams`, `fat_in_grams`) VALUES
(10, 'ahmed ', 'ahmed', 'uploadedImages/ui-1.jpg', 'ahmed@ahmed.com', 'M', 21, 1, 170, 90, 'note', '1400', '29', '1500', '20', '50', '40', '111', '51'),
(11, 'mohamedNagdy', 'mohamed', 'uploadedImages/ui-2.jpg', 'mohamedN@m.com', 'M', 25, 3, 155, 55, 'note1', '1300', '26', '1400', '22', '40', '30', '100', '20'),
(12, 'ali', 'dasad', 'uploadedImages/ui-3.jpg', 'ali@ali.cim', 'M', 23, 6, 150, 60, 'note2', '1200', '23', '1110', '23', '51', '44', '120', '10'),
(19, 'faten', 'faten', 'uploadedImages/ui-4.jpg', 'faten@faten.faten', 'F', 22, 4, 180, 100, 'you must end this  please', '1640', '21', '1400', '12', '66', '90', '133', '20'),
(20, 'rakan', 'mohamed', 'uploadedImages/ui-5.jpg', 'mohamedAli@m.m', 'M', 24, 6, 170, 90, 'note4', '1600', '25', '3112.419', '10.672733564014', '60', '90', '424.5180875', '16'),
(21, 'soad', 'mohamed', 'uploadedImages/ui-6.jpg', 'ahmedMohamed@m.m', 'M', 22, 1, 170, 80, 'doctor notes', '2000', '22', '1851.058', '11.136678200692', '70', '55', '172.421925', '41.263366666667'),
(22, 'toka', 'toka', 'uploadedImages/ui-7.jpg', 'toka@toka.toka', 'F', 22, 1, 170, 70, 'note', '1300', '24.221453287197', '1526.283', '28.725743944637', '55', '60', '142.3959875', '34.077672222222'),
(23, 'nana', 'nana', 'uploadedImages/ui-8.jpg', 'nana@nana.nana', 'F', 20, 4, 165, 70, 'note', '1500', '25.711662075298', '1519.453', '30.053994490358', '48.962203856749', '63.650865013774', '141.2861125', '33.812061111111'),
(24, 'Abdo', 'abdo', 'uploadedImages/ui-9.jpg', 'abdo@abdo.com', 'M', 22, 5, 170, 70, 'note', '1067.088', '24.221453287197', '1717.088', '17.925743944637', '57.451979238754', '74.687573010381', '173.4018', '41.497866666667'),
(25, 'darkness', 'darkness', 'uploadedImages/aOEhy33333333.jpg', 'darkness@gmail.com', 'M', 30, 2, 170, 66, '', '1618.084', '22.837370242215', '1618.084', '18.104844290657', '54.050802768166', '70.266043598616', '130', '07');

-- --------------------------------------------------------

--
-- Table structure for table `user_daily_state`
--

CREATE TABLE `user_daily_state` (
  `user_id` int(11) NOT NULL,
  `daily_meal` text NOT NULL,
  `daily_calories` int(10) NOT NULL,
  `daily_weight` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_daily_state`
--

INSERT INTO `user_daily_state` (`user_id`, `daily_meal`, `daily_calories`, `daily_weight`) VALUES
(10, 'batata', 10000, 170),
(11, 'meaaaaaaaaaaaaaaaaaaaaaaaal', 1000, 200),
(19, 'your daily meals are what haha', 11550, 120),
(20, '', 0, 0),
(21, 'daily meal', 0, 0),
(22, 'the daily meal', 21, 33),
(23, '', 0, 0),
(24, '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `content_recipe`
--
ALTER TABLE `content_recipe`
  ADD PRIMARY KEY (`recipe_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`like_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `raspberry_pi_data`
--
ALTER TABLE `raspberry_pi_data`
  ADD PRIMARY KEY (`meal_id`);

--
-- Indexes for table `raspi_images`
--
ALTER TABLE `raspi_images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `content_recipe`
--
ALTER TABLE `content_recipe`
  MODIFY `recipe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doctor_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `raspberry_pi_data`
--
ALTER TABLE `raspberry_pi_data`
  MODIFY `meal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `raspi_images`
--
ALTER TABLE `raspi_images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
