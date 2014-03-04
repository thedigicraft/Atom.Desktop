-- --------------------------------------------------------
-- Atom Desktop v1.0.0
-- --------------------------------------------------------
-- Developed by: Alan Quandt
-- Group: The Digital Craft
-- Organization: Rtistics: Creative.Development
-- WWW: TheDigitalCraft.com
-- --------------------------------------------------------

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `atomdesktop`
--

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `ref` mediumint(9) NOT NULL,
  `label` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ref` (`ref`),
  KEY `type` (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `ref`, `label`, `value`, `type`) VALUES
('widget-state', 6, 'Default Widget State', '3', 'widget'),
('widget-type-1', 0, 'List Color', 'FF6559', 'widget'),
('widget-type-2', 0, 'Settings Color', 'E8B53A', 'widget'),
('widget-type-3', 0, 'Sound Bank Color', '8CFF43', 'widget'),
('widget-type-4', 0, 'Document Color', '8744E8', 'widget'),
('widget-type-5', 0, 'Tool Color', '46E2FF', 'widget');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `type` mediumint(9) NOT NULL DEFAULT '1',
  `avatar` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `first` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `last` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `type`, `avatar`, `url`, `first`, `last`, `email`, `password`, `status`) VALUES
(1, 1, 'justin_60x60.jpg', 'livespeakradio.com', 'Justin', 'Gilson', 'justin@email.com', 'e38ad214943daad1d64c102faec29de4afe9da3d', 1),
(2, 1, 'alan_60x60.jpg', 'thedigitalcraft.com', 'Alan', 'Quandt', 'alan@email.com', 'e38ad214943daad1d64c102faec29de4afe9da3d', 1),
(3, 1, 'john_60x60.jpg', 'sligowebsolutions.com', 'John', 'Rainey', 'sligowebsolutions@email.com', 'e38ad214943daad1d64c102faec29de4afe9da3d', 1);

-- --------------------------------------------------------

--
-- Table structure for table `widgets`
--

CREATE TABLE IF NOT EXISTS `widgets` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `workspace` mediumint(9) NOT NULL DEFAULT '1',
  `type` mediumint(9) NOT NULL,
  `x` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `y` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `z` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `name` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `w` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `h` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `state` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'open',
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `type` (`type`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Dumping data for table `widgets`
--

INSERT INTO `widgets` (`id`, `workspace`, `type`, `x`, `y`, `z`, `name`, `w`, `h`, `state`, `status`) VALUES
(7, 1, 2, '1111', '279', '0', 'user', '497', '278', 'open', 1),
(8, 1, 5, '169', '27', '0', 'clock', '294', '123', 'open', 1),
(13, 1, 5, '1113', '28', '0', 'update', '508', '219', 'open', 1),
(14, 1, 5, '503', '27', '0', 'console', '512', '279', 'open', 1);

-- --------------------------------------------------------

--
-- Table structure for table `workspaces`
--

CREATE TABLE IF NOT EXISTS `workspaces` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `user` mediumint(9) NOT NULL DEFAULT '1',
  `name` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `user` (`user`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `workspaces`
--

INSERT INTO `workspaces` (`id`, `user`, `name`, `status`) VALUES
(1, 0, 'Default', 1),
(2, 2, 'Debug', 1),
(3, 2, 'News', 1);