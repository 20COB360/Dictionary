-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2023 at 02:56 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dictionary`
--

-- --------------------------------------------------------

--
-- Table structure for table `words`
--

CREATE TABLE `words` (
  `S.no` int(200) NOT NULL,
  `word` text NOT NULL,
  `meaning` text NOT NULL,
  `pos` text NOT NULL,
  `example` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `words`
--

INSERT INTO `words` (`S.no`, `word`, `meaning`, `pos`, `example`) VALUES
(1, 'aviation', 'the activity of flying aircraft, or of designing, producing, and keeping them in good condition', 'noun', 'the British Civil Aviation Authority'),
(2, 'banana', 'a long, curved fruit with a yellow skin and soft, sweet, white flesh inside', 'noun', 'a bunch of bananas'),
(3, 'cat', 'a small animal with fur, four legs, a tail, and claws, usually kept as a pet or for catching mice', 'noun', 'I usually feed the neighbour\'s cat while she\'s away.'),
(4, 'pear', 'a sweet fruit, usually with a green skin and a lot of juice, that has a round base and is slightly pointed towards the stem', 'noun', 'These pears are still too firm to eat.\r\n'),
(5, 'saucer', 'a small, curved plate that you put a cup on', 'noun', 'I could hear the cups and saucers rattling.\r\n'),
(6, 'algorithm', 'a set of mathematical instructions or rules that, especially if given to a computer, will help to calculate an answer to a problem', 'noun', 'Music apps use algorithms to predict the probability that fans of one particular band will like another.'),
(7, 'data', 'information, especially facts or numbers, collected to be examined and considered and used to help decision-making, or information in an electronic form that can be stored and used by a computer', 'noun', 'Now the data is/are being transferred from magnetic tape to hard disk.'),
(8, 'information', 'facts about a situation, person, event, etc.', 'noun', 'Do you have any information about/on train times?'),
(9, 'fact', 'something that is known to have happened or to exist, especially something for which proof exists, or about which there is information', 'noun', 'It\'s sometimes hard to separate fact from fiction.'),
(10, 'know', 'to have information in your mind', 'verb', 'I don\'t know anything about this.'),
(11, 'mind', 'the part of a person that makes it possible for him or her to think, feel emotions, and understand things', 'noun', 'Of course I\'m telling the truth - you have such a suspicious mind!'),
(12, 'emotion', 'a strong feeling such as love or anger, or strong feelings in general', 'noun', 'He showed no emotion as he walked into the witness box.'),
(13, 'overcome', 'to defeat or succeed in controlling or dealing with something', 'verb', 'Juventus overcame Ajax in a thrilling game.'),
(14, 'defeat', 'to win against someone in a fight, war, or competition', 'verb', 'Napoleon was defeated by the Duke of Wellington at the battle of Waterloo.'),
(15, 'win', 'to achieve first position and/or get a prize in a competition, election, fight, etc.', 'verb', 'Which year was it that Italy won the World Cup?'),
(16, 'prize', 'something valuable, such as an amount of money, that is given to someone who succeeds in a competition or game or that is given to someone as a reward for doing very good work', 'noun', 'First prize is a fortnight in Barbados and second prize is a weekend in Rome.'),
(17, 'money', 'coins or notes (= special pieces of paper) that are used to buy things, or an amount of these that a person has', 'noun', 'How much money do you earn?'),
(18, 'person', 'a man, woman, or child', 'noun', 'He\'s nice enough as a person, but he\'s not the right man for this job.'),
(20, 'swim', 'to move through water by moving the body or parts of the body', 'verb', 'We want clean rivers and lakes, where you can swim without risk to your health.'),
(22, 'water', 'a clear liquid, without colour or taste, that falls from the sky as rain and is necessary for animal and plant life', 'noun', 'The human body is about 50 percent water'),
(24, 'life', 'the period between birth and death, or the experience or state of being alive', 'noun', 'Unfortunately, accidents are part of life.'),
(25, 'death', 'the end of life', 'noun', 'Do you believe in life after death?'),
(26, 'vampire', '(in stories) a dead person who comes back to life and sucks blood from other people at night', 'noun', 'The most famous vampire is Count Dracula of Transylvania.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `words`
--
ALTER TABLE `words`
  ADD PRIMARY KEY (`S.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `words`
--
ALTER TABLE `words`
  MODIFY `S.no` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
