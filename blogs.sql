-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2025 at 04:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news17`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image`, `content`, `created_at`) VALUES
(5, 'शांति की कमान: ऑपरेशन सिंधु से लेकर प्रणस्थ पर नक्सल‑नियंत्रण तक', 'images/dixit.jpg', '\r\n<h2>? अमेरिका का इज़राइल–ईरान युद्ध में सरकना</h2>\r\n<h3>? घटनाक्रम</h3>\r\n<p>22 जून की सुबह, अमेरिकी बी–2 स्टील्थ बमवर्षकों और टॉमहॉक मिसाइलों की सहायता से <strong>फ़ॉर्डो</strong>, <strong>नतांज़</strong>, और <strong>इसफ़हान</strong> स्थित ईरान के परमाणु स्थलों पर बमबारी की गई।</p>\r\n\r\n<h3>⚙️ तकनीकी विश्लेषण</h3>\r\n<ul>\r\n  <li>बंकर-बस्टर बमों का उपयोग कर गहरे स्थलों को निशाना बनाया गया।</li>\r\n  <li>IAEA ने \"स्थानीय रेडिएशन\" की पुष्टि की लेकिन बड़ा रिसाव नहीं हुआ।</li>\r\n</ul>\r\n\r\n<h3>? वैश्विक प्रतिक्रिया</h3>\r\n<p>ईरान ने अमेरिका को चेतावनी दी और यूएन में मामला पहुंचाया। अमेरिका का यह कदम इज़राइल के समर्थन में सबसे बड़ा माना जा रहा है।</p>\r\n\r\n<hr>\r\n\r\n<h2>?? ‘ऑपरेशन सिंधु’: भारत का नागरिक सुरक्षा मिशन</h2>\r\n<p>भारत ने इज़राइल और ईरान दोनों से अपने नागरिकों को निकालने के लिए <strong>ऑपरेशन सिंधु</strong> शुरू किया।</p>\r\n<ul>\r\n  <li>827 भारतीय सुरक्षित निकाले गए</li>\r\n  <li>तेल अवीव में कंट्रोल रूम सक्रिय</li>\r\n  <li>एयर इंडिया की सहायता से विशेष उड़ानें</li>\r\n</ul>\r\n\r\n<hr>\r\n\r\n<h2>?️ गुजरात पंचायत चुनाव</h2>\r\n<p>22 जून को गुजरात में ग्राम पंचायत चुनाव संपन्न हुए।</p>\r\n<ul>\r\n  <li>8,326 पंचायतों में मतदान</li>\r\n  <li>81 लाख मतदाता</li>\r\n  <li>OBC आरक्षण पहली बार लागू</li>\r\n</ul>\r\n<p>ग्राम स्तर पर लोकतंत्र की मजबूती के लिए यह चुनाव महत्वपूर्ण हैं।</p>\r\n\r\n<hr>\r\n\r\n<h2>? अमित शाह का छत्तीसगढ़ दौरा</h2>\r\n<p>गृह मंत्री अमित शाह ने नक्सल प्रभावित क्षेत्रों का दौरा किया:</p>\r\n<ul>\r\n  <li>‘National Forensic Science University’ का शिलान्यास</li>\r\n  <li>जवानों से मुलाकात, ग्रामीणों को संबोधन</li>\r\n  <li>सुरक्षा समीक्षा बैठक</li>\r\n</ul>\r\n\r\n<hr>\r\n\r\n<h2>✨ निष्कर्ष</h2>\r\n<ol>\r\n  <li>भारत ने वैश्विक मंच पर अपनी जिम्मेदार छवि प्रस्तुत की।</li>\r\n  <li>गुजरात में लोकतंत्र मजबूत हुआ।</li>\r\n  <li>छत्तीसगढ़ में नक्सल पर कड़ा संदेश भेजा गया।</li>\r\n</ol>\r\n\r\n<p><em>यह घटनाएँ न सिर्फ समाचार हैं, बल्कि भारत की सोच, कूटनीति और सुरक्षा नीतियों का परिचायक हैं।</em></p>\r\n', '2025-06-22 05:25:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
