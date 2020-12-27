-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 06:29 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seee`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutusimages`
--

CREATE TABLE `aboutusimages` (
  `id` int(11) NOT NULL,
  `imageName` text NOT NULL,
  `imageCaption` text DEFAULT NULL,
  `imageType` varchar(20) NOT NULL DEFAULT 'aboutus',
  `imageSize` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutusimages`
--

INSERT INTO `aboutusimages` (`id`, `imageName`, `imageCaption`, `imageType`, `imageSize`) VALUES
(19, 'aboutus5fe1e94658d465.42835300.jpg', 'EEE Department', 'aboutus', 1.19),
(20, 'aboutus5fe1e99da4d157.29701303.JPG', 'EEE', 'aboutus', 1.66),
(21, 'aboutus5fe1e9b3a2b486.45339349.jpg', 'EEE', 'aboutus', 0.11),
(22, 'aboutus5fe1e9c52a2277.81816158.JPG', 'EEE', 'aboutus', 1.47),
(23, 'aboutus5fe1e9cfb8e803.74664859.JPG', 'EEE', 'aboutus', 1.54),
(26, 'aboutus5fe1ea02d6f3d0.15482780.JPG', 'EEE', 'aboutus', 1.95),
(27, 'aboutus5fe1ea17e48ab7.83700686.JPG', 'EEE', 'aboutus', 1.26),
(28, 'aboutus5fe1ea2a05e550.57679063.jpg', 'EEE', 'aboutus', 0.08);

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `Announcements` text NOT NULL,
  `AboutUs` text NOT NULL,
  `Waves` text NOT NULL,
  `Ripples` text NOT NULL,
  `FreshersDay` text NOT NULL,
  `TeachersDay` text NOT NULL,
  `Inauguration` text NOT NULL,
  `Hobbeee` text NOT NULL,
  `StudyMaterials` text NOT NULL,
  `PlacementGuides` text NOT NULL,
  `Magazines` text NOT NULL,
  `Articles` text NOT NULL,
  `Facts` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`Announcements`, `AboutUs`, `Waves`, `Ripples`, `FreshersDay`, `TeachersDay`, `Inauguration`, `Hobbeee`, `StudyMaterials`, `PlacementGuides`, `Magazines`, `Articles`, `Facts`) VALUES
('<marquee>\n<h4><span class=\"badge badge-primary\">New</span> We are Live now !  <span class=\"badge badge-primary\"></span> </h4>\n</marquee>', '<p>\nThe <b>Society of Electrical and Electronics Engineers</b> is a society formed jointly by the Electrical and Electronic Engineers of <b>College of Engineering, Guindy, Anna University</b>. \nThe Society endeavours for the enhancement of the souls of fraternity, thereby promoting the sense of common brotherhood amongst all student engineers. \nIts initiative HOBBEEE CLUB is a classical example of its ideals of fraternity where the senior students impart the practical knowledge and contemporary skills they had learnt to their fellow novices with colossal interests transcending all sorts of barriers. \n</p>\n<p>\nThe signature annual fixtures of the SEEE comprises of the intra college symposium ‘RIPPLES’ and the inter-college symposium ‘WAVES’. \nEvery year they have been hypnotising a humongous number of students across the country to take part in our symposiums. \nIMPULSE, the official newsletter of SEEE welcomes healthy competition among the department students to showcase their amalgamated skills of technical knowledge and articulates to write articles on the trendy affairs of Electrical and Electronics Engineering. \nThe Society also organizes guest lectures to imbibe values and create awareness about the fashionable and ongoing themes that are manifold.\n</p>', '<p>Being the signature and pride of the Department of Electrical and Electronics Engineering of CEG, WAVES is conducted each year by the students of the department. It is the inter college symposium which brings together brilliant minds from all over the state and a variety of disciplines during the period of the even semester. A range of about 5 certified workshops are hosted in collaboration with prominent organisations in the fields of electrical, electronics, mechanical and robotics. The Robotic events enhance and provoke the most intuitive to explore further out of the box. The participants are pulled beyond the academic circles by diverse non technical and management events. Apart from these, online events from technical and non technical areas play a significant part in the journey. Following the footsteps of 38 former success stories the venture of WAVES commences yet again.</p>\n', ' <p>Ripples is an intra college symposium conducted exclusively for the students of the College of Engineering Guindy where students from almost every department gather to play a part. The symposium encompasses technical as well as non-technical events, workshops and online events. Guest lectures are also delivered by eminent speakers on contemporary technologies. Ripples brings about the learning of students into a pragmatic experience and thereby promising all the participants with a fun-filled gratifying experience. They are exposed to various interdisciplinary technical and non-technical confronts which help them to enrich their calibre. Ripples also assists the students in attaining a cutting edge in technological advancements and guarantees to invoke the scientific temper in the students and provides a holistic experience on electrical and electronic technology.</p>', '<p>As the name says, it is the day when the department freshers are warmly welcomed and partied by their seniors. This embraces multifarious events which unwrap the knack of the students in singing, music, dancing, mimic etc. The senior students transform the fresher\'s hesitancy into a fruitful communication among them as an upshot of each event. The senior students transform the fresher\'s hesitancy into a fruitful communication among them as an upshot of each event. An enduring bond is bound between the freshers and their fellow seniors.\n</p>', '<p>The department students enjoy fulfilment in honouring their professors by celebrating Teachers\' Day annually. The HOD, professors, faculty members, teaching fellows and other non-teaching staffs are invited to the party. The professors’ bondings with each other are made apparent at the stage by a number of fun events which spellbound the eyes of the students. Each and every professor is content by their student\'s splendour setting for the event. </p>', '<p>The SEEE Inauguration is a tradition upheld by the Department of Electrical and Electronics Engineering to celebrate the new beginnings. It is an occasion to honour the success of the predecessors and to nurture the infinite opportunities that are brought by the future. The ceremony intensifies the ambition and hope of the students when the office bearers assume their respective positions and undertake the responsibilities on an official capacity for the academic year ahead. The astounding guest lectures that follow engulf the students in a bubble of wonder and joy. The day signifies the promise to and by each individual to cherish what holds us together as a society.</p>', '<p>HOBBEEE Club is a colloquium leaded and administered by the senior students of the Department of Electrical and Electronics Engineering to enrich the knowledge of freshers. \nThe prime motto of this club is to imbibe technical knowledge either in the current subjects or in other concomitant technologies. \n</p>\n<p>\nSessions will be handled by professors or senior students covering the subjects or topics chosen after the consultation with the students. \nThe sessions are organized at least once in a fortnight as per the convenience of the fellow students. Students are also trained to use microcontrollers like Arduino, Raspberry Pi, primary sensors and other modules which help them in doing various mini-projects and attend many technical events. Students are also taught many simulation platforms like Matlab, Proteus, PSpice, Scilab and so on which are not a part of their curriculum but are essential to be learnt. \n<br>This makes the students get through their placements easily, being proficient in many technical skills other than academics. Students are also trained to prepare for competitive exams like GATE, IES etc. \nCareer guidance is also provided to the students exposing them to their curriculum opportunities to build their aspirations and support them to make informed decisions about their subject choices and pathways. Apart from this, students also come to know about the experience of their seniors and learn from them the better methodologies to study concepts. \nInformation regarding internships and inplant training is also delivered to students through this platform.</p>\n', '<p>\nThe <b>Department of Electrical and Electronics Engineering</b> takes immense pride in providing almost all the books required for pursuing the Bachelor of Engineering course. \nThe compilation is quite comprehensive and exhaustive having about 130+ books under 30+ subjects of Electrical and Electronics Engineering. \nThe books are arranged subject-wise to simplify the task of the seekers. Each subject has at least two or three books of its flavour for the students to get a diversified knowledge on the subject.\n<br>\nBoth foreign and local author books have been uploaded adhering to the needs of the students. \nBooks from subjects like management, computer fundamentals, communication systems, general aptitude, mathematics, mechanics environmental science and so on are even uploaded. \n<br>\nAll these books are absolutely free and one doesn’t need to pay for accessing these books. And you are ready to go! Keep checking our website periodically as we will keep updating our booklist now and then according to your changing needs. </p>\n<a href=\"https://drive.google.com/file/d/1p2hguzcEY_2eHBa6PbU7AeM9ZnW5nv6T/view\" class=\"buy-btn\" target=\"_blank\">Click Here to View</a>', '<p>\n<b>An extensive list of the placement guides from the year 2011 to 2018 has been furnished in our website to know about the companies visiting CEG and recruiting the students of the Department of Electrical and Electronics Engineering. </b>\n<br>Companies of all disciplines like core, IT, management, banking and analytics are clearly categorised in each of the placement guides. Each placement guide includes the companies visiting the college in an academic year, their selection process, job type, the number of students selected to each company, package and so on.  The alumni also have shared their experiences gained in attending the placements and interviews. They have even listed out the questions which were asked during their personal interviews for your reference. \n<br>The placement stuff will be updated periodically and hence check our website regularly. Be confident and build yourselves to excel in your placements!\n</p>\n<a href=\"https://drive.google.com/file/d/1WaFCwHdvD-IUQTfXewRpzmG-o8mdwHpE/view\" class=\"buy-btn\" target=\"_blank\">Click Here to View</a>\n', 'At the beginning of every academic year, a crew of 5-6 proficient and experienced students join hands to start working on a piece of art, the IMPULSE magazine. They go around searching for the most talented and creative minds, capturing them, motivating them, and training them. These inspired young minds then sit and do all possible research on topics related to Electrical and Electronics Engineering, pen down their ideas and facts to integrate them into an elegant article. \n<br>\nThese articles are then clubbed and processed into a magazine making it so rich and artistic in its look and language. Our Impulse magazine is not just a collection of pages; it is where our artisans, with commitment, effectuate their craftsmanship to carve the most exquisite articles. Endless hard work and desire is what gives an artisan his final masterpiece. It is that final masterpiece which makes the artisan rejoice at his artwork and fortunately, we have never failed to rejoice at our magazine too.', 'At the beginning of every academic year, a crew of 5-6 proficient and experienced students join hands to start working on a piece of art, the IMPULSE magazine. They go around searching for the most talented and creative minds, capturing them, motivating them, and training them. These inspired young minds then sit and do all possible research on topics related to Electrical and Electronics Engineering, pen down their ideas and facts to integrate them into an elegant article. These articles are then clubbed and processed into a magazine making it so rich and artistic in its look and language. Our Impulse magazine is not just a collection of pages; it is where our artisans, with commitment, effectuate their craftsmanship to carve the most exquisite articles. Endless hard work and desire is what gives an artisan his final masterpiece. It is that final masterpiece which makes the artisan rejoice at his artwork and fortunately, we have never failed to rejoice at our magazine too.\n<br>You can read our articles <a href=\"https://impulseseee.wordpress.com/\" target=\"_blank\">Here</a></p>', 'Do you know? One single lightning bolt can light up 100 powerful lamps for an entire day, or make lots and lots of toast, in fact a couple of thousand pieces of toast. We love learning new things about the world of electricity. SEEE Facts presents mind-blowing facts that kindles the spark of electricity.<br>You can read our articles <a href=\"https://www.instagram.com/waves_ceg/\" target=\"_Blank\">here</a>');

-- --------------------------------------------------------

--
-- Table structure for table `hobbeeeimages`
--

CREATE TABLE `hobbeeeimages` (
  `id` int(11) NOT NULL,
  `imageName` text NOT NULL,
  `imageCaption` text DEFAULT NULL,
  `imageType` varchar(20) NOT NULL DEFAULT 'hobbeee',
  `imageSize` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hobbeeeimages`
--

INSERT INTO `hobbeeeimages` (`id`, `imageName`, `imageCaption`, `imageType`, `imageSize`) VALUES
(5, 'hobbeee5fdf0ebd7c9406.80116588.jpg', 'lecture', 'hobbeee', 0.07),
(6, 'hobbeee5fdf0edab34642.11275089.jpg', 'maze', 'hobbeee', 0.06),
(7, 'hobbeee5fdf0eeecd3da6.29017136.jpg', 'students', 'hobbeee', 0.09);

-- --------------------------------------------------------

--
-- Table structure for table `impulsedata`
--

CREATE TABLE `impulsedata` (
  `id` int(11) NOT NULL,
  `imageName` text NOT NULL,
  `imageType` varchar(20) NOT NULL,
  `imageCaption` text DEFAULT NULL,
  `imageLink` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `impulsedata`
--

INSERT INTO `impulsedata` (`id`, `imageName`, `imageType`, `imageCaption`, `imageLink`) VALUES
(2, 'magazines5fdf058ced3d19.21286509.jpg', 'magazines', 'Waves - 20 Article', 'https://issuu.com/impulse.seee/docs/pdfjoiner?fbclid=IwAR0j6I9XKEfRGedM4M3Xt-GPq1JzDj3rVlcdxe92gylxNHKNE8uwu-dfVmw'),
(3, 'magazines5fdf05c3368636.44457066.jpg', 'magazines', 'Ripples-20', 'https://issuu.com/impulse.seee/docs/page_1_front_cmyk-converted?fbclid=IwAR2hAaej5lHuSQyik1Dyxbx_IUksnxBUyBpiIMgt4C3AtMjB9ZPN0ZG_jDg'),
(6, 'articles5fdf06fee96135.72936766.jpg', 'articles', 'Voltaic Enclave', 'https://impulseseee.wordpress.com/2018/01/13/the-voltaic-enclave-of-technish/'),
(8, 'articles5fdf0750a53761.79455250.jpg', 'articles', 'Wireless Control', 'https://impulseseee.wordpress.com/2019/10/04/wireless-control-upto-16-devices-without-any-mcu-or-coding/'),
(10, 'facts5fdf0909b942f9.00028737.jpg', 'facts', '', ''),
(11, 'articles5fdf092a7ad141.25059057.png', 'articles', 'Fourier Series', 'https://impulseseee.wordpress.com/2018/08/24/1250/'),
(12, 'facts5fdf09a79e68e1.47187848.jpg', 'facts', '', ''),
(17, 'facts5fdfaf8ac3f973.67910585.jpg', 'facts', '', ''),
(18, 'magazines5fe2032b9f3db4.72062976.jpg', 'magazines', 'Impulse -2020 Article', 'https://issuu.com/impulse.seee/docs/impulse_2020'),
(19, 'facts5fe20701212ab3.79667216.jpg', 'facts', '', ''),
(20, 'facts5fe20710135e96.30945177.jpg', 'facts', '', ''),
(21, 'facts5fe20719328135.40347845.jpg', 'facts', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `portfolioimages`
--

CREATE TABLE `portfolioimages` (
  `id` int(11) NOT NULL,
  `imageName` text NOT NULL,
  `imageCaption` text NOT NULL,
  `imageSize` double NOT NULL,
  `imageType` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolioimages`
--

INSERT INTO `portfolioimages` (`id`, `imageName`, `imageCaption`, `imageSize`, `imageType`) VALUES
(12, '5fdec7da35bee2.50958250.JPG', 'rangoli', 1.42, 'inaug'),
(19, 'inaug5fe1a24b4ccc80.64191299.JPG', '', 1, 'inaug'),
(20, 'inaug5fe1a265dafad0.80497007.JPG', '', 0.81, 'inaug'),
(21, 'inaug5fe1a277dba352.20776210.JPG', '', 0.79, 'inaug'),
(22, 'inaug5fe1a29ad96215.37061228.JPG', '', 0.8, 'inaug'),
(23, 'inaug5fe1a2b1a12c03.35581411.JPG', '', 0.73, 'inaug'),
(24, 'inaug5fe1a2c5c38535.59047621.JPG', '', 0.8, 'inaug'),
(25, 'inaug5fe1a2df62c8b2.42005343.JPG', '', 0.82, 'inaug'),
(26, 'inaug5fe1a363c41814.00548574.JPG', '', 0.91, 'inaug'),
(27, 'waves5fe1a48a572da4.23371545.JPG', 'Waves', 1.49, 'waves'),
(32, 'waves5fe1a53f150433.71057966.JPG', 'Waves', 0.76, 'waves'),
(33, 'waves5fe1a55f700843.31979794.JPG', 'Waves', 1.53, 'waves'),
(34, 'waves5fe1a581510ca6.25665793.JPG', 'Waves', 1.53, 'waves'),
(35, 'waves5fe1a5adc3a2f3.31781017.JPG', 'Waves', 1.24, 'waves'),
(37, 'waves5fe1a60b768dd6.50092295.JPG', 'Waves', 1.94, 'waves'),
(38, 'waves5fe1a6285321a8.65687713.jpg', 'Waves', 0.07, 'waves'),
(39, 'waves5fe1a6457fc414.45983482.jpg', 'Waves', 0.07, 'waves'),
(40, 'waves5fe1a65fcd2683.03216876.jpg', 'Waves', 0.11, 'waves'),
(41, 'waves5fe1a677787719.80570389.jpg', 'Waves', 0.07, 'waves'),
(45, 'waves5fe1a6ebb158b0.71610258.jpg', 'Waves', 0.13, 'waves'),
(47, 'waves5fe1a7530adce2.89495699.jpg', 'Waves', 0.06, 'waves'),
(49, 'waves5fe1a78371ce30.35994979.JPG', 'Waves', 1.14, 'waves'),
(50, 'waves5fe1a79b412912.09486832.JPG', 'Waves', 1.5, 'waves'),
(51, 'waves5fe1a7e5124434.01199613.JPG', 'Waves', 1.31, 'waves'),
(52, 'waves5fe1a80a41e163.93994601.JPG', 'Waves', 1.79, 'waves'),
(53, 'freshers5fe1e5be39b3d1.83178678.JPG', 'Fresher\'s Day', 1.33, 'freshers'),
(54, 'freshers5fe1e5dbe5ee43.28444629.JPG', 'Fresher\'s Day', 1.43, 'freshers'),
(56, 'freshers5fe1e5fb28a1f5.37731397.JPG', 'Fresher\'s Day', 1.71, 'freshers'),
(57, 'freshers5fe1e60c7c33b4.63491935.JPG', 'Fresher\'s Day', 1.67, 'freshers'),
(58, 'freshers5fe1e627d34793.60666429.JPG', 'Fresher\'s Day', 1.22, 'freshers'),
(59, 'freshers5fe1e63b7e8098.76853515.JPG', 'Fresher\'s Day', 1.83, 'freshers'),
(60, 'freshers5fe1e64fab51b6.24776304.JPG', 'Fresher\'s Day', 1.46, 'freshers'),
(62, 'freshers5fe1e67454fa95.13270334.JPG', 'Fresher\'s Day', 1.37, 'freshers'),
(63, 'teachers5fe1e6e9638c64.11113327.JPG', 'Teachers\' Day', 1.07, 'teachers'),
(64, 'teachers5fe1e7003e6c98.64776191.JPG', 'Teachers\' Day', 1.37, 'teachers'),
(65, 'teachers5fe1e70ca64845.03255458.JPG', 'Teachers\' Day', 1.17, 'teachers'),
(66, 'teachers5fe1e71bf38a12.06202287.JPG', 'Teachers\' Day', 1.5, 'teachers'),
(67, 'teachers5fe1e734aef4e7.43343416.JPG', 'Teachers\' Day', 1.18, 'teachers'),
(68, 'teachers5fe1e74477d909.09267633.JPG', 'Teachers\' Day', 1.24, 'teachers'),
(69, 'teachers5fe1e7543325c0.48010275.JPG', 'Teachers\' Day', 1.38, 'teachers'),
(70, 'teachers5fe1e764f0fb34.82490652.JPG', 'Teachers\' Day', 1.33, 'teachers'),
(71, 'teachers5fe1e7753c4731.89136431.JPG', 'Teachers\' Day', 1.44, 'teachers'),
(72, 'teachers5fe1e78745dfb9.41729193.JPG', 'Teachers\' Day', 1.18, 'teachers'),
(73, 'teachers5fe1e796a7e499.98494414.JPG', 'Teachers\' Day', 1.21, 'teachers'),
(74, 'teachers5fe1e7a1bd35f2.78362707.JPG', 'Teachers\' Day', 1.02, 'teachers'),
(75, 'teachers5fe1e7ae9891b3.77435979.JPG', 'Teachers\' Day', 1.36, 'teachers'),
(76, 'ripples5fe1e879d90343.94525183.JPG', 'Ripples', 1.06, 'ripples'),
(77, 'ripples5fe1e88b669495.40148808.JPG', 'Ripples', 1.83, 'ripples'),
(78, 'ripples5fe1e89c8ba589.74887467.JPG', 'Ripples', 1.78, 'ripples'),
(79, 'ripples5fe1e8a8dd1627.31418393.JPG', 'Ripples', 1.26, 'ripples'),
(80, 'ripples5fe1e8ba5824b3.29722069.JPG', 'Ripples', 0.82, 'ripples'),
(83, 'ripples5fe1e8f712e390.94205235.JPG', 'Ripples', 0.96, 'ripples'),
(84, 'ripples5fe1e90c4854c0.13002690.JPG', 'Ripples', 1.2, 'ripples');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutusimages`
--
ALTER TABLE `aboutusimages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `imageName` (`imageName`) USING HASH;

--
-- Indexes for table `hobbeeeimages`
--
ALTER TABLE `hobbeeeimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `impulsedata`
--
ALTER TABLE `impulsedata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolioimages`
--
ALTER TABLE `portfolioimages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutusimages`
--
ALTER TABLE `aboutusimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `hobbeeeimages`
--
ALTER TABLE `hobbeeeimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `impulsedata`
--
ALTER TABLE `impulsedata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `portfolioimages`
--
ALTER TABLE `portfolioimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
