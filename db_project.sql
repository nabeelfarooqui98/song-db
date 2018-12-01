-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2018 at 05:29 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `album_id` int(11) NOT NULL,
  `album_name` varchar(50) DEFAULT NULL,
  `releaseDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`album_id`, `album_name`, `releaseDate`) VALUES
(1, 'Dangerous Woman', '2016-05-20'),
(2, 'Kamikaze', '2018-08-31');

-- --------------------------------------------------------

--
-- Table structure for table `albumartist`
--

CREATE TABLE `albumartist` (
  `artist_id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `albumartist`
--

INSERT INTO `albumartist` (`artist_id`, `album_id`) VALUES
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `artist_id` int(11) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `dateOfBirth` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`artist_id`, `fname`, `lname`, `dateOfBirth`) VALUES
(1, 'Ariana', 'Grande', '1993-06-26'),
(2, 'Eminem', NULL, '1972-10-17'),
(3, 'Bruno', 'Mars', '1985-10-08');

-- --------------------------------------------------------

--
-- Table structure for table `artistgenre`
--

CREATE TABLE `artistgenre` (
  `artist_id` int(11) NOT NULL,
  `genre_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artistinstrument`
--

CREATE TABLE `artistinstrument` (
  `artist_id` int(11) NOT NULL,
  `instrument_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artistlanguage`
--

CREATE TABLE `artistlanguage` (
  `artist_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artistoccupation`
--

CREATE TABLE `artistoccupation` (
  `artist_id` int(11) NOT NULL,
  `occupation` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `band`
--

CREATE TABLE `band` (
  `band_id` int(11) NOT NULL,
  `band_name` varchar(500) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `years_active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genre_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genre_name`) VALUES
('Hip Hop'),
('Pop');

-- --------------------------------------------------------

--
-- Table structure for table `instrument`
--

CREATE TABLE `instrument` (
  `instrument_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `language_id` int(11) NOT NULL,
  `languageName` varchar(4000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`language_id`, `languageName`) VALUES
(1, 'English'),
(2, 'Urdu');

-- --------------------------------------------------------

--
-- Table structure for table `occupation`
--

CREATE TABLE `occupation` (
  `occupation` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE `song` (
  `song_id` int(11) NOT NULL,
  `songName` varchar(50) DEFAULT NULL,
  `releaseDate` date DEFAULT NULL,
  `length` time DEFAULT NULL,
  `album_id` int(50) DEFAULT NULL,
  `musicLink` varchar(200) DEFAULT NULL,
  `lyricsLink` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`song_id`, `songName`, `releaseDate`, `length`, `album_id`, `musicLink`, `lyricsLink`) VALUES
(1, 'Focus', '2015-10-30', '00:03:44', 1, 'https://www.youtube.com/watch?v=lf_wVfwpfp8', 'https://genius.com/Ariana-grande-focus-lyrics'),
(2, 'Dangerous Woman', '2016-03-11', '00:03:55', 1, 'https://www.youtube.com/watch?v=9WbCfHutDSE', 'https://genius.com/Ariana-grande-dangerous-woman-lyrics'),
(3, 'Venom', '2018-09-21', '00:04:29', 2, 'https://www.youtube.com/watch?v=8CdcCD5V-d8', 'https://genius.com/Eminem-venom-music-from-the-motion-picture-lyrics');

-- --------------------------------------------------------

--
-- Table structure for table `songartist`
--

CREATE TABLE `songartist` (
  `song_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `songartist`
--

INSERT INTO `songartist` (`song_id`, `artist_id`) VALUES
(1, 1),
(2, 1),
(3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `songband`
--

CREATE TABLE `songband` (
  `song_id` int(11) NOT NULL,
  `band_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `songgenre`
--

CREATE TABLE `songgenre` (
  `song_id` int(11) NOT NULL,
  `genre_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `songgenre`
--

INSERT INTO `songgenre` (`song_id`, `genre_name`) VALUES
(1, 'Pop');

-- --------------------------------------------------------

--
-- Table structure for table `songlanguage`
--

CREATE TABLE `songlanguage` (
  `song_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `songlanguage`
--

INSERT INTO `songlanguage` (`song_id`, `language_id`) VALUES
(1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `albumartist`
--
ALTER TABLE `albumartist`
  ADD PRIMARY KEY (`artist_id`,`album_id`),
  ADD KEY `fk1` (`album_id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`artist_id`);

--
-- Indexes for table `artistgenre`
--
ALTER TABLE `artistgenre`
  ADD PRIMARY KEY (`artist_id`,`genre_name`),
  ADD KEY `genre_name` (`genre_name`);

--
-- Indexes for table `artistinstrument`
--
ALTER TABLE `artistinstrument`
  ADD PRIMARY KEY (`artist_id`,`instrument_name`),
  ADD KEY `instrument_name` (`instrument_name`);

--
-- Indexes for table `artistlanguage`
--
ALTER TABLE `artistlanguage`
  ADD PRIMARY KEY (`artist_id`,`language_id`);

--
-- Indexes for table `artistoccupation`
--
ALTER TABLE `artistoccupation`
  ADD PRIMARY KEY (`artist_id`,`occupation`),
  ADD KEY `occupation` (`occupation`);

--
-- Indexes for table `band`
--
ALTER TABLE `band`
  ADD PRIMARY KEY (`band_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_name`);

--
-- Indexes for table `instrument`
--
ALTER TABLE `instrument`
  ADD PRIMARY KEY (`instrument_name`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`language_id`);

--
-- Indexes for table `occupation`
--
ALTER TABLE `occupation`
  ADD PRIMARY KEY (`occupation`);

--
-- Indexes for table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`song_id`),
  ADD KEY `album_id` (`album_id`);

--
-- Indexes for table `songartist`
--
ALTER TABLE `songartist`
  ADD PRIMARY KEY (`song_id`,`artist_id`),
  ADD KEY `artist_id` (`artist_id`);

--
-- Indexes for table `songband`
--
ALTER TABLE `songband`
  ADD PRIMARY KEY (`song_id`,`band_id`);

--
-- Indexes for table `songgenre`
--
ALTER TABLE `songgenre`
  ADD PRIMARY KEY (`song_id`,`genre_name`),
  ADD KEY `fk2_genre` (`genre_name`);

--
-- Indexes for table `songlanguage`
--
ALTER TABLE `songlanguage`
  ADD PRIMARY KEY (`song_id`,`language_id`),
  ADD KEY `language_id` (`language_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `artist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `band`
--
ALTER TABLE `band`
  MODIFY `band_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `language_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `song`
--
ALTER TABLE `song`
  MODIFY `song_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `albumartist`
--
ALTER TABLE `albumartist`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`album_id`) REFERENCES `album` (`album_id`),
  ADD CONSTRAINT `fk2` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`artist_id`);

--
-- Constraints for table `artistgenre`
--
ALTER TABLE `artistgenre`
  ADD CONSTRAINT `artistgenre_ibfk_1` FOREIGN KEY (`genre_name`) REFERENCES `genre` (`genre_name`),
  ADD CONSTRAINT `artistgenre_ibfk_2` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`artist_id`);

--
-- Constraints for table `artistinstrument`
--
ALTER TABLE `artistinstrument`
  ADD CONSTRAINT `artistinstrument_ibfk_1` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`artist_id`),
  ADD CONSTRAINT `artistinstrument_ibfk_2` FOREIGN KEY (`instrument_name`) REFERENCES `instrument` (`instrument_name`);

--
-- Constraints for table `artistoccupation`
--
ALTER TABLE `artistoccupation`
  ADD CONSTRAINT `artistoccupation_ibfk_1` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`artist_id`),
  ADD CONSTRAINT `artistoccupation_ibfk_2` FOREIGN KEY (`occupation`) REFERENCES `occupation` (`occupation`);

--
-- Constraints for table `song`
--
ALTER TABLE `song`
  ADD CONSTRAINT `song_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `album` (`album_id`);

--
-- Constraints for table `songartist`
--
ALTER TABLE `songartist`
  ADD CONSTRAINT `songartist_ibfk_1` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`artist_id`),
  ADD CONSTRAINT `songartist_ibfk_2` FOREIGN KEY (`song_id`) REFERENCES `song` (`song_id`);

--
-- Constraints for table `songgenre`
--
ALTER TABLE `songgenre`
  ADD CONSTRAINT `fk2_genre` FOREIGN KEY (`genre_name`) REFERENCES `genre` (`genre_name`),
  ADD CONSTRAINT `songgenre_ibfk_1` FOREIGN KEY (`song_id`) REFERENCES `song` (`song_id`);

--
-- Constraints for table `songlanguage`
--
ALTER TABLE `songlanguage`
  ADD CONSTRAINT `songlanguage_ibfk_1` FOREIGN KEY (`language_id`) REFERENCES `language` (`language_id`),
  ADD CONSTRAINT `songlanguage_ibfk_2` FOREIGN KEY (`song_id`) REFERENCES `song` (`song_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
