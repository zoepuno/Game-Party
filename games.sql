-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2022 at 04:46 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `games`
--

-- --------------------------------------------------------

--
-- Table structure for table `alphabet`
--

CREATE TABLE `alphabet` (
  `name` text NOT NULL,
  `url` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alphabet`
--

INSERT INTO `alphabet` (`name`, `url`, `img`) VALUES
('Alphabetize', 'https://www.abcya.com/games/alphabetize\r\n', 'alphabetize.jpg'),
('ABC Connect The Dots', 'https://www.abcya.com/games/connect_the_dots_abc_order', 'CTD.jpg'),
('Word Hunt', 'https://www.helpfulgames.com/subjects/english/word-hunt.html', 'wordhunt.png');

-- --------------------------------------------------------

--
-- Table structure for table `art`
--

CREATE TABLE `art` (
  `name` text NOT NULL,
  `url` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `art`
--

INSERT INTO `art` (`name`, `url`, `img`) VALUES
('Quick Draw', 'https://quickdraw.withgoogle.com/', 'quickdraw.png'),
('Street Art', 'https://www.tate.org.uk/kids/games-quizzes/street-art', 'streetart.png'),
('Type Method', 'https://type.method.ac/#', 'type.png'),
('Famous Artists Quiz', 'Famous Artists Quhttps://play.howstuffworks.com/quiz/only-1-out-60-people-can-identify-the-names-these-50-famous-paintings-can-you\r\niz', '50paintingsquiz.png');

-- --------------------------------------------------------

--
-- Table structure for table `logic`
--

CREATE TABLE `logic` (
  `name` text NOT NULL,
  `url` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logic`
--

INSERT INTO `logic` (`name`, `url`, `img`) VALUES
('Fuzz Bugs', 'https://www.abcya.com/games/fuzz_bugs_patterns', 'fuzzbugs.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `math`
--

CREATE TABLE `math` (
  `name` text NOT NULL,
  `url` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `math`
--

INSERT INTO `math` (`name`, `url`, `img`) VALUES
('Math Agar', 'https://www.mathgames.com/play/mathagar.html', 'mathagar.png'),
('Sudoku Math', 'https://www.funbrain.com/games/sudoku   ', 'sudokumath.jpg         '),
('Launch the Llama', 'https://www.mathgames.com/play/launch-the-llama.html', 'launchthellama.png'),
('Candy Stacker', 'https://www.mathgames.com/play/candy-stacker.html', 'candystacker.jpg\r\n'),
('Cat Wars', 'https://www.mathgames.com/play/cat-wars.html', 'catwars.jpg\r\n'),
('Super Math Buffet', 'https://www.mathgames.com/play/super-math-buffet.html', 'supermathbuffet.jpg'),
('Number Worms', 'https://www.mathgames.com/play/number-worms.html', 'numberworms.jpg'),
('Snow Bowl', 'https://www.mathgames.com/play/snowbowl.html', 'snowbwl.png'),
('Math Man Jr', 'https://www.abcya.com/games/math_man_jr', 'mathmanjr.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
