-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 07, 2013 at 01:06 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `entry_id` int(10) NOT NULL AUTO_INCREMENT,
  `summary` text,
  `entry` text,
  `title` varchar(255) NOT NULL,
  `url_title` varchar(200) NOT NULL,
  `creation_date` datetime NOT NULL,
  `edited_date` datetime DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`entry_id`),
  UNIQUE KEY `url_title` (`url_title`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`entry_id`, `summary`, `entry`, `title`, `url_title`, `creation_date`, `edited_date`, `author`) VALUES
(1, 'My children, latest born to Cadmus old, Why sit ye here as suppliants, in your hands Branches of olive filleted with\r\nwool? What means this reek of incense everywhere, And everywhere laments and litanies? ', '<p>OEDIPUS My children, latest born to Cadmus old, Why sit ye here as suppliants, in your hands Branches of olive filleted with wool? What means this reek of incense everywhere, And everywhere laments and litanies? Children, it were not meet that I should learn From others, and am hither come, myself, I Oedipus, your world-renowned king. Ho! aged sire, whose venerable locks Proclaim thee spokesman of this company, Explain your mood and purport. Is it dread Of ill that moves you or a boon ye crave? My zeal in your behalf ye cannot doubt; Ruthless indeed were I and obdurate If such petitioners as you I spurned.</p><p>PRIEST Yea, Oedipus, my sovereign lord and king, Thou seest how both extremes of age besiege Thy palace altars--fledglings hardly winged, And greybeards bowed with years, priests, as am I Of Zeus, and these the flower of our youth. Meanwhile, the common folk, with wreathed boughs Crowd our two market-places, or before Both shrines of Pallas congregate, or where Ismenus gives his oracles by fire. For, as thou seest thyself, our ship of State, Sore buffeted, can no more lift her head, Foundered beneath a weltering surge of blood. A blight is on our harvest in the ear, A blight upon the grazing flocks and herds, A blight on wives in travail; and withal Armed with his blazing torch the God of Plague Hath swooped upon our city emptying The house of Cadmus, and the murky realm Of Pluto is full fed with groans and tears.</p><p>Therefore, O King, here at thy hearth we sit, I and these children; not as deeming thee A new divinity, but the first of men; First in the common accidents of life, And first in visitations of the Gods. Art thou not he who coming to the town Of Cadmus freed us from the tax we paid To the fell songstress? Nor hadst thou received Prompting from us or been by others schooled; No, by a god inspired (so all men deem, And testify) didst thou renew our life. And now, O Oedipus, our peerless king, All we thy votaries beseech thee, find Some succor, whether by a voice from heaven Whispered, or haply known by human wit. Tried counselors, methinks, are aptest found To furnish for the future pregnant rede. Upraise, O chief of men, upraise our State! Look to thy laurels! for thy zeal of yore Our country''s savior thou art justly hailed: O never may we thus record thy reign:-- "He raised us up only to cast us down." Uplift us, build our city on a rock. Thy happy star ascendant brought us luck, O let it not decline! If thou wouldst rule This land, as now thou reignest, better sure To rule a peopled than a desert realm. Nor battlements nor galleys aught avail, If men to man and guards to guard them tail.</p>', 'I love my mother', 'this_is_the_greates_thing_ever', '2012-11-08 22:59:16', NULL, 'Some Other Dude'),
(2, 'I MEAN to inquire if, in the civil order, there can be any sure and legitimate rule of administration, men being taken as they are and laws as they might be. In this inquiry I shall endeavour always to unite what right sanctions with what is prescribed by interest, in order that justice and utility may in no case be divided.', '<p>I enter upon my task without proving the importance of the subject. I shall be asked if I am a prince or a legislator, to write on politics. I answer that I am neither, and that is why I do so. If I were a prince or a legislator, I should not waste time in saying what wants doing; I should do it, or hold my peace.</p><p>As I was born a citizen of a free State, and a member of the Sovereign, I feel that, however feeble the influence my voice can have on public affairs, the right of voting on them makes it my duty to study them: and I am happy, when I reflect upon governments, to find my inquiries always furnish me with new reasons for loving that of my own country.</p><h2>1. SUBJECT OF THE FIRST BOOK</h2><p>MAN is born free; and everywhere he is in chains. One thinks himself the master of others, and still remains a greater slave than they. How did this change come about? I do not know. What can make it legitimate? That question I think I can answer.</p><p>If I took into account only force, and the effects derived from it, I should say: "As long as a people is compelled to obey, and obeys, it does well; as soon as it can shake off the yoke, and shakes it off, it does still better; for, regaining its liberty by the same right as took it away, either it is justified in resuming it, or there was no justification for those who took it away." But the social order is a sacred right which is the basis of all other rights. Nevertheless, this right does not come from nature, and must therefore be founded on conventions. Before coming to that, I have to prove what I have just asserted.</p>', 'This is the worst thing ever', 'the_worst_thing_ever', '2012-11-08 22:59:16', NULL, 'Some Other Dude');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `body` text NOT NULL,
  `author` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `entry_id`, `body`, `author`) VALUES
(21, 1, 'Good morning Spacebookers....:)', 'Dan Smith');

-- --------------------------------------------------------

--
-- Table structure for table `date`
--

CREATE TABLE IF NOT EXISTS `date` (
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `entries`
--

CREATE TABLE IF NOT EXISTS `entries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) DEFAULT NULL,
  `body` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `entries`
--

INSERT INTO `entries` (`id`, `title`, `body`) VALUES
(1, 'First Entry', 'Blogging!!!!!!!!!!'),
(2, 'Second Entry', 'Blogging again!!!!!!!!!!');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
