-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2021 at 05:42 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT '0',
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `text`) VALUES
(1, 1, 0, 'Action and reaction'),
(2, 1, 1, 'Action word'),
(3, 1, 0, 'Action in action'),
(4, 1, 0, 'Explain a proverb'),
(5, 2, 1, 'She'),
(6, 2, 0, 'Have'),
(7, 2, 0, 'And'),
(8, 2, 0, 'Less'),
(9, 3, 0, 'Past tense'),
(10, 3, 0, 'Future tense'),
(11, 3, 1, 'Present tense'),
(12, 3, 0, 'Eating tense'),
(13, 4, 0, 'Verb'),
(14, 4, 0, 'Pronoun'),
(15, 4, 1, 'Noun'),
(16, 4, 0, 'Adverb'),
(17, 5, 0, 'Adjective'),
(18, 5, 1, 'Exclamation'),
(19, 5, 0, 'Appreciation'),
(20, 5, 0, 'Antonyms'),
(21, 6, 1, 'Question'),
(22, 6, 0, 'Explanation'),
(23, 6, 0, 'Acknowledgement'),
(24, 7, 1, 'used instead of a noun'),
(25, 7, 0, 'used for clarity'),
(26, 7, 0, 'used instead of a preposition'),
(27, 8, 0, 'modify a noun'),
(28, 8, 1, 'modify verb'),
(29, 8, 0, 'count verb'),
(30, 8, 0, 'count noun'),
(31, 9, 0, 'noun'),
(32, 9, 1, 'question'),
(33, 9, 0, 'proverb'),
(34, 9, 0, 'preposition'),
(35, 10, 0, 'opposite in manner'),
(36, 10, 1, 'opposite in meaning'),
(37, 10, 0, 'opposite in side'),
(38, 11, 0, 'qp'),
(39, 11, 1, 'oo'),
(40, 11, 0, 'aa'),
(41, 11, 0, 'ac'),
(42, 12, 1, 'Electronic machine'),
(43, 12, 0, 'book'),
(44, 12, 0, 'sport system'),
(45, 12, 0, 'counting');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_number` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_number`, `text`) VALUES
(1, 'Which of the following best define a Verb?'),
(2, 'Which of the following is a pronoun?'),
(3, 'I am eating is a typical.....'),
(4, 'The word \'teacher\' is a ..... '),
(5, '\'Wow! I like it\' is an ........'),
(6, 'How old are is a ......'),
(7, 'What do you understand by the word pronoun?'),
(8, 'What is adverb?'),
(9, 'how much?'),
(10, 'what do you understand by antonyms?'),
(11, 'I am reading a b..k.'),
(12, 'What do you understand by Computer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
