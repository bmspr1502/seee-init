-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2020 at 08:37 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `imageSize` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutusimages`
--

INSERT INTO `aboutusimages` (`id`, `imageName`, `imageCaption`, `imageSize`) VALUES
(9, '5fdd028c5cf6a1.73722505.JPG', '1st Pic', 0.47),
(10, '5fdd0298d69e49.90407442.jpg', '3rd Pic', 1.47),
(11, '5fdd02aab306a4.84650967.JPG', '5th Pic', 1.66);

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
  `PlacementGuides` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`Announcements`, `AboutUs`, `Waves`, `Ripples`, `FreshersDay`, `TeachersDay`, `Inauguration`, `Hobbeee`, `StudyMaterials`, `PlacementGuides`) VALUES
('<marquee>\n<h4><span class=\"badge badge-success\">New</span> Announcement. <span class=\"badge badge-primary\">New</span> Website launch.</h4>\n</marquee>', '<p>\nThe <b>Society of Electrical and Electronics Engineers</b> is a society formed jointly by the Electrical and Electronic Engineers of <b>College of Engineering, Guindy, Anna University</b>. \nThe Society endeavours for the enhancement of the souls of fraternity, thereby promoting the sense of common brotherhood amongst all student engineers. \nIts initiative HOBBEEE CLUB is a classical example of its ideals of fraternity where the senior students impart the practical knowledge and contemporary skills they had learnt to their fellow novices with colossal interests transcending all sorts of barriers. \n</p>\n<p>\nThe signature annual fixtures of the SEEE comprises of the intra college symposium ‘RIPPLES’ and the inter-college symposium ‘WAVES’. \nEvery year they have been hypnotising a humongous number of students across the country to take part in our symposiums. \nIMPULSE, the official newsletter of SEEE welcomes healthy competition among the department students to showcase their amalgamated skills of technical knowledge and articulates to write articles on the trendy affairs of Electrical and Electronics Engineering. \nThe Society also organizes guest lectures to imbibe values and create awareness about the fashionable and ongoing themes that are manifold.\n</p>', '<p>Being the signature and pride of the Department of Electrical and Electronics Engineering of CEG, WAVES is conducted year after year by the students of the department. It is the inter college symposium which brings together brilliant minds from all over the state and a variety of disciplines during the period of the even semester. \nThe occasion begins with the informative and ceremonious Inauguration. With over 1500 entries from numerous colleges it runs a course of about three prosperous days. Students are immersed in an array of technical events and workshops in order to acquire the knowledge regarding the eminent domains that are of the hour. \nA range of about 5 certified workshops are hosted in collaboration with prominent organisations in the fields of electrical, electronics, mechanical and robotics. The Robotic events enhance and provoke the most intuitive to explore further out of the box. The participants are pulled beyond the academic circles by diverse non technical and management events. Apart from these, online events from technical and non technical areas play a significant part in the journey. It is the ideal exposure required to obtain dynamic understanding of different principles. \nFurthermore, participants are motivated through cash prizes, vouchers and certificates. Organising and conducting the several aspects of WAVES nourishes the technical and management bases of the students of CEG. Following the footsteps of 38 former success stories the venture of WAVES commences yet again.</p>\n', ' <p>Ripples is an intra college symposium conducted exclusively for the students of the College of Engineering Guindy where students from almost every department gather to play a part. The symposium encompasses technical as well as non-technical events, workshops and online events. Guest lectures are also delivered by eminent speakers on contemporary technologies. Ripples brings about the learning of students into a pragmatic experience and thereby promising all the participants with a fun-filled gratifying experience. They are exposed to various interdisciplinary technical and non-technical confronts which help them to enrich their calibre. Triumphant students are incentivized with certificates and cash wallets. Ripples also assists the students in attaining a cutting edge in technological advancements and guarantees to invoke the scientific temper in the students and provides a holistic experience on electrical and electronic technology.</p>', '<p>As the name says, it is the day when the department freshers are warmly welcomed and partied by their seniors. This embraces multifarious events which unwrap the knack of the students in singing, music, dancing, mimic etc. The senior students transform the fresher\'s hesitancy into a fruitful communication among them as an upshot of each event. Later the freshers are pleased by the mouth-watering munchies and delightful desserts. The celebration concludes by the act of delivering souvenir to each fresher by the seniors as a token of love. The catchy moments are photographed and the enduring bond is bound between the freshers and their fellow seniors.</p>', '<p>The department students enjoy fulfilment in honouring their professors by celebrating Teachers\' Day annually. The HOD, professors, faculty members, teaching fellows and other non-teaching staffs are invited to the party. The eye-catching decorations done by the students adorn the party hall. The events where every professor participates proactively evoke the hidden child in them. All the professors\' nostalgic college memories are kindled by various questions asked by their dear students. The students seated as onlookers lend their ears keenly to their professors’ experiences and childhood reminiscences. The professors’ bondings with each other are made apparent at the stage by a number of fun events which spellbound the eyes of the students. Each and every professor is contented by their student\'s splendour setting for the event. Every smiling face is captured in cameras to cherish those moments in future.</p>', '<p>The SEEE Inauguration is a tradition upheld by the Department of Electrical and Electronics Engineering to celebrate the new beginnings. It is an occasion to honour the success of the predecessors and to nurture the infinite opportunities that are brought by the future. The ceremony intensifies the ambition and hope of the students when the office bearers assume their respective positions and undertake the responsibilities on an official capacity for the academic year ahead. The astounding guest lectures that follow engulf the students in a bubble of wonder and joy. The new comers are recieved into the family through interactive session to embark on a fruitful journey together. The day signifies the promise to and by each individual to cherish what holds us together as a society.</p>', '<p>HOBBEEE Club is a colloquium leaded and administered by the senior students of the Department of Electrical and Electronics Engineering to enrich the knowledge of freshers. \nThe prime motto of this club is to imbibe technical knowledge either in the current subjects or in other concomitant technologies. \n</p>\n<p>\nSessions will be handled by professors or senior students covering the subjects or topics chosen after the consultation with the students. \nThe sessions are organized at least once in a fortnight as per the convenience of the fellow students. \n<br>Students are also trained to use microcontrollers like Arduino, Raspberry Pi, primary sensors and other modules which help them in doing various mini-projects and attend many technical events. \nStudents are also taught many simulation platforms like Matlab, Proteus, PSpice, Scilab and so on which are not a part of their curriculum but are essential to be learnt. \n<br>This makes the students get through their placements easily, being proficient in many technical skills other than academics. Students are also trained to prepare for competitive exams like GATE, IES etc. \nCareer guidance is also provided to the students exposing them to their curriculum opportunities to build their aspirations and support them to make informed decisions about their subject choices and pathways. \n<br>Apart from this, students also come to know about the experience of their seniors and learn from them the better methodologies to study concepts. \nInformation regarding internships and inplant training is also delivered to students through this platform.</p>\n', '<p>\nThe <b>Department of Electrical and Electronics Engineering</b> takes immense pride in providing almost all the books required for pursuing the Bachelor of Engineering course. \nThe compilation is quite comprehensive and exhaustive having about 130+ books under 30+ subjects of Electrical and Electronics Engineering. \nThe books are arranged subject-wise to simplify the task of the seekers. Each subject has at least two or three books of its flavour for the students to get a diversified knowledge on the subject.\n<br>\nBoth foreign and local author books have been uploaded adhering to the needs of the students. \nBooks from subjects like management, computer fundamentals, communication systems, general aptitude, mathematics, mechanics environmental science and so on are even uploaded. \n<br>\nAll these books are absolutely free and one doesn’t need to pay for accessing these books. \nThe books will be downloaded in a zip format by tapping on the download button beside the book name. \nThe book will be available in PDF format after extracting it from the zip file. \n<br>\nAnd you are ready to go! Keep checking our website periodically as we will keep updating our booklist now and then according to your changing needs. \nVisitors can even donate the softcopies of their books for the larger public good by mailing them us. \n<br>\nKindly revert to <a href=\"mailto:cegseee@gmail.com\">cegseee@gmail.com</a> for any queries in downloading the books and for your priceless contribution to extend our service to greater heights.\n</p>\n<a href=\"https://drive.google.com/file/d/1p2hguzcEY_2eHBa6PbU7AeM9ZnW5nv6T/view\" class=\"buy-btn\" target=\"_blank\">Click Here to View the Materials</a>', '<p>\n<b>An extensive list of the placement guides from the year 2011 to 2018 has been furnished in our website to know about the companies visiting CEG and recruiting the students of the Department of Electrical and Electronics Engineering. </b>\n<br>Companies of all disciplines like core, IT, management, banking and analytics are clearly categorised in each of the placement guides. \n<br>Each placement guide includes the companies visiting the college in an academic year, their selection process, job type, the number of students selected to each company, package and so on. \n<br>The alumni also have shared their experiences gained in attending the placements and interviews. They have even listed out the questions which were asked during their personal interviews for your reference. \n<br>They also breakdown the myths revolving the placements and provide crystal clear guidelines for the students who are grooming themselves for getting placed in their dream jobs. \n<br>The placement stuff will be updated periodically and hence check our website regularly. Be confident and build yourselves to excel in your placements!\n</p>\n<a href=\"https://drive.google.com/file/d/1WaFCwHdvD-IUQTfXewRpzmG-o8mdwHpE/view\" class=\"buy-btn\" target=\"_blank\">Click Here to View</a>\n');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutusimages`
--
ALTER TABLE `aboutusimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
