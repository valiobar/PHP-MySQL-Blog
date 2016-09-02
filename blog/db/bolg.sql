-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2016 at 08:01 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--
DROP DATABASE `blog`;
CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `blog`;

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
  `cover` varchar(300) DEFAULT NULL,
  `album_name` varchar(400) NOT NULL,
  `private` tinyint(1) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `cover`, `album_name`, `private`, `date`, `user_id`) VALUES
(1, 'albumtest_album_aaaa_cover.jpg', 'aaaa', 0, '2016-09-01 21:54:39', 71),
(2, 'images_test_album_test1_cover.', 'test1', 0, '2016-09-01 21:55:23', 72),
(3, '', 'test2', 0, '2016-09-01 22:51:38', 72),
(4, 'images_test_album_secret_cover.jpg', 'secret', 1, '2016-09-01 23:01:11', 72),
(5, 'vb3album1_cover.png', 'album1', 0, '2016-09-01 23:29:38', 17),
(6, 'LOLsega_cover.png', 'sega', 0, '2016-09-02 00:08:05', 73),
(7, '', 'yyyy', 0, '2016-09-02 00:15:14', 73),
(8, '', 'yyyy', 0, '2016-09-02 00:16:59', 73),
(9, '', 'yyyy', 0, '2016-09-02 00:21:50', 73),
(10, '', 'yyyy', 0, '2016-09-02 00:23:17', 73),
(11, 'LOLa_cover.jpg', 'a', 0, '2016-09-02 00:24:31', 73);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_name` varchar(200) NOT NULL,
  `description` varchar(400) DEFAULT NULL,
  `album_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_name`, `description`, `album_id`) VALUES
(1, 'images (2).jpg', '', 11),
(2, '', '', 11),
(3, 'images (3).jpg', '', 11),
(4, 'изтеглен файл.png', '', 11),
(5, 'blogbutton.jpg', '', 11),
(6, 'изтеглен файл.jpg', '', 11),
(7, 'изтеглен файл.jpg', '', 11),
(8, 'About-page-nintex-blog-banner-e1458253326747.png', '', 6),
(9, 'About-page-nintex-blog-banner-e1458253326747.png', '', 6),
(10, 'изтеглен файл (3).jpg', '', 6),
(11, 'images (4).jpg', '', 6),
(12, 'About-page-nintex-blog-banner-e1458253326747.png', '', 6),
(13, 'About-page-nintex-blog-banner-e1458253326747.png', '', 6),
(14, 'About-page-nintex-blog-banner-e1458253326747.png', '', 6),
(15, 'About-page-nintex-blog-banner-e1458253326747.png', '', 6),
(16, 'images.jpg', '', 6),
(17, 'images.jpg', '', 6),
(18, 'images.jpg', '', 6),
(19, 'w-brand.png', '', 6),
(20, 'w-brand.png', '', 6),
(21, 'w-brand.png', '', 6),
(22, 'bkg-blu.jpg', '', 6),
(23, 'bkg-blu.jpg', '', 6),
(24, 'iis.png', '', 6);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `content` text NOT NULL,
  `DATE` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `DATE`, `user_id`) VALUES
(1, 'Work Begins on HTML5.1', '<p>The World Wide Web Consortium (W3C) has begun work on <b>HTML5.1</b>, and this time it is handling the creation of the standard a little differently. The specification has its <b><a href="https://w3c.github.io/html/">own GitHub project</a></b> where anyone can see what is happening and propose changes.</p>\r\n\r\n<p>The organization says the goal for the new specification is "to <b>match reality better</b>, to make the specification as clear as possible to readers, and of course to make it possible for all stakeholders to propose improvements, and understand what makes changes to HTML successful."</p>\r\n\r\n<p>Creating HTML5 took years, but W3C hopes using GitHub will speed up the process this time around. It plans to release a candidate recommendation for HTML5.1 by <b>June</b> and a full recommendation in <b>September</b>.</p>\r\n', '2016-05-22 10:13:37', 2),
(2, 'Windows 10 Preview with Bash Support Now Available', '<p>Microsoft has released a new <b>Windows 10 Insider Preview</b> that includes native support for <b>Bash running on Ubuntu Linux</b>. The company first announced the new feature at last week''s Build development conference, and it was one of the biggest stories of the event. The current process for installing Bash is a little complication, but Microsoft has a blog post that explains how the process works.</p>\r\n\r\n<p>The preview build also includes <b>Cortana</b> upgrades, extensions support, the new <b>Skype</b> Universal Windows Platform app and some interface improvements.</p>', '2016-05-20 11:18:26', 8),
(3, 'Atom Text Editor GetsNew Windows Features', '<p>GitHub has released <b>Atom 1.7</b>, and the updated version of the text editor offers improvements for Windows developers. Specifically, it is now easier to build in Visual Studio, and it now supports the Appveyor CI continuous integration service for Windows.</p>\r\n\r\n<p>Other new features include improved tab switching, tree view and crash recovery. GitHub noted, "Crashes are nobody''s idea of fun, but in case Atom does crash on you, it periodically saves your editor state. After relaunching Atom after a crash, you should find all your work saved and ready to go."</p>\r\n\r\n<p>GitHub has also released a beta preview of Atom 1.8.</p>\r\n', '2016-05-07 11:21:21', 3),
(4, 'SoftUni 3.0 Launched', '<p>The <b>Software University (SoftUni)</b> launched a new training methodology and training program for software engineers in Sofia.</p>\r\n\r\n<p>It is a big step ahead. Now SoftUni offers several professions:</p>\r\n<ul>\r\n  <li>PHP Developer</li>\r\n  <li>JavaScript Developer</li>\r\n  <li>C# Web Developer</li>\r\n  <li>Java Web Developer</li>\r\n</ul>\r\n', '2016-04-07 11:25:40', 2),
(5, 'Git 2.8 Adds Security and Productivity Features', '<p>Version 2.8 of the open-source distributed version-control system Git has been released. The new edition provides a variety of new features, bugfixes and other improvements.</p>\r\n\r\n<p>According to GitHub, the most notable new features include:</p>\r\n\r\n<ul>\r\n<li><strong>Parallel fetches of submodules:</strong> “Using ‘git submodules,’ one Git repository can include other Git repositories as subdirectories. This can be a useful way to include libraries or other external dependencies into your main project. The top-level repository specifies which submodules it wants to include, and which version of each submodule,” wrote Jeff King, a Git team member, in a <a href="https://github.com/blog/2131-git-2-8-has-been-released">blog post</a>. According to him, if users have multiple submodules, fetches can be time-consuming. The latest release allows users to fetch from multiple submodules in parallel.</li>\r\n<li><strong>Don’t guess my identity: </strong>Instead of using one e-mail address for all of a user’s open-source projects, they can now tell Git what user name and e-mail they want to use before they commit.</li>\r\n<li><strong>Convergences with Git for Windows:</strong> The Git team has been working on making Git as easy to work with on Windows as it is on Linux and OS X. The latest release includes Git commands rewritten in C; Windows-specific changes from the Git for Windows project; and the ability to accept both LF and CRLF line endings. “This continuing effort will make it easier to keep the functionality of Git in sync across platforms as new features are added,” King wrote.</li>\r\n<li><strong>Security fixes: </strong>Git 2.8 addresses the vulnerability CVE-2016-2324. There have not been any reported exploits, but the vulnerability could execute arbitrary code when cloning a malicious repository, according to King.</li>\r\n</ul>\r\n\r\n<p>Other features include the ability to turn off Git’s clean and smudge filters; the ability to see where a particular setting came from; the ability to easily diagnose end-of-line problems; the ability to see a remote repository’s default branch; and support for cloning via the rsync protocol has been dropped.</p>\r\n\r\n<p>The full release notes are available <a href="https://github.com/git/git/blob/v2.8.0/Documentation/RelNotes/2.8.0.txt">here</a>.</p>\r\n', '2016-01-17 11:27:50', 5),
(6, 'Rogue Wave Updates Zend Framework', '<p>Rogue Wave is updating its open-source framework for developing Web applications and services. According to the company, this is the first major release in four years. Zend Framework 3 features support for PHP 7, middleware runtime and performance enhancements.</p>\r\n\r\n<p>The newly released support for PHP 7 aims to simplify how developers create, debug, monitor and deploy modern Web and mobile apps in PHP 7. “This is an exciting time to be a PHP developer,” said Zeev Suraski, cofounder of Zend and CTO of Rogue Wave. “With Zend Framework 3, we’re continuing our quest to make creating PHP applications simpler, more accessible and faster.”</p>\r\n\r\n<p>In addition, version 3 of the framework features an architectural structure that allows developers to use components within Zend Framework apps or any other framework in order to reduce dependencies, and to enable reuse within the PHP ecosystem.</p>\r\n\r\n<p>Another key update to the solution is a new middleware runtime. Expressive is designed to focus on simplicity and interoperability, and it enables developers to customize their solutions.</p>\r\n\r\n<p>“I’m extremely proud of the work we’ve done with Expressive,” said Matthew Weier O’Phinney, principal engineer and Zend Framework project lead at Rogue Wave. “Expressive signals the future of PHP applications, composed of layered, single-purpose PSR-7 middleware.”</p>\r\n', '2015-11-22 11:57:40', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password_hash` varchar(100) DEFAULT NULL,
  `full_name` varchar(200) DEFAULT NULL,
  `image` varchar(300) DEFAULT NULL,
  `description` varchar(350) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password_hash`, `full_name`, `image`, `description`) VALUES
(1, 'admin', '$2y$10$QlKthcuYhn.XP/gy5A/OZeQdOzIznqxqOf/qBrSAnGpoW4labIL0W', NULL, NULL, NULL),
(2, 'nakov', '$2y$10$XViubT.zSoBtskZmKl6kdOX8Yq7T7tLrcrLn/5dkAqbgjVACeFUGe', 'Svetlin Nakov', NULL, NULL),
(3, 'maria', '$2y$10$gzlpX/N5apTruTBajMJwM.0h9OgLVgQxk6N0YhGy2iY4BI73SYkKO', 'Maria Ivanova', NULL, NULL),
(4, 'ani', '$2y$10$9T9bN6ctJ4R.fdnLvzsdQOj0sk4mWqwohILMx60/jP1YEXtJguhD2', 'Ani Kirova', NULL, NULL),
(5, 'joe', '$2y$10$aIOC0qiNK1mjZdUUbuj/Teh49VI/g9xanuWCNYEUruwcvOGVaXOGK', 'Joe Green', NULL, NULL),
(6, 'test', '$2y$10$I5y7X1ZilitEZYOztOI5SuA2rBeRJUj/ZhlgmSZK32LPqaqh3Gy3q', '', NULL, NULL),
(7, 'it''s security "test"<br>', '$2y$10$thSx6ceSyCPxdl.BDGLhKe7lQu8d3oopQ/LJYK8ma.Dz6jWbOgj8C', 'it''s security "test"<br>', NULL, NULL),
(8, 'vikash', '$2y$10$Exc5mMcThOlEnXZ2.kAPl.ouBSDl8S0GjD.3vvB6KohMpcgfsLsde', 'Vikash Jain', NULL, NULL),
(9, 'vb', NULL, 'valio bar', NULL, NULL),
(15, 'vb1', '$2y$10$hhD5UH/ZUnELYOJTGLgJGuqXfZc7grqf1ZKU4oljO99m380TLHoz2', 'vb', NULL, NULL),
(16, 'vb2', '$2y$10$SgDW9SIpH1UO31kg6autP.ykcfHVbpB/uWPcjzkcWlKE.f47/qBxa', 'vb', NULL, NULL),
(17, 'vb3', '$2y$10$LRsRIHAcc.qoNKrtfmZEm.ZxrlZu12N03IeViaUEM3sfU7fNDP5OW', 'tt', NULL, NULL),
(18, 'bai hui', '$2y$10$3tlbp8we0M/63LFBS9eUju2m3Aecrq3EdBgoCbff6vOhyPwAjZWka', 'kurti', NULL, NULL),
(20, 'cc', '$2y$10$oIgL4iS2MrE9wqLJQeUiiOWEBrNOP5S2iaet/O4VB.d6x/2kB6wGW', 'erwe', NULL, NULL),
(21, 'tyt', '$2y$10$ee/hMgxi8h2okyriholDYO/juRLBhjzQIunWJA7u7DO9KLXDeWrBu', 'erwe', NULL, NULL),
(22, 'vb1234', '$2y$10$1aiMaB6MLxvZL.2/gQvEoOZiG1x/aU9Bvvxrtgt/WzR7G1fV3K2G6', 'vb1234', NULL, NULL),
(28, 'v', '$2y$10$2ta/S7zMmQ5khs1M4ZLOYeGwpIfjd6G94Wy2DfzDWZ675IkYrOKNe', 'vb1234', NULL, NULL),
(32, 'vo', '$2y$10$jM0Q0o1jYxDlIhd4kwgUt.oDO8S1Yvh4vbDEFIL.pPPUlYIQMls9e', 'e', NULL, NULL),
(33, 'ee', '$2y$10$qO.qdu537TsTQpVQ//KOUedO0OqY5qdYSezsLrFQKnva6M8lo5/F6', '', NULL, NULL),
(35, 'eee', '$2y$10$ZvMGg94zQgtSoDR0g6IdOeHngVe2PfwQj5AakEkyrS72VSBT.3s5q', '', NULL, NULL),
(36, '', '$2y$10$M3jljq4MAqsIgrd/mQkmgetYCjF.2XLz/frm6yT.MiIxFlkxhmCgq', '', NULL, NULL),
(47, 'last_test', '$2y$10$DoE47LKs6JeBziVypnLHx.5zCADoX8Q/RCc8.ejnh2B4NpOxXL5jq', 'test', '/blog/Images/images (3).png', NULL),
(49, 'test333', '$2y$10$HM9IpR0X7YNCpO8HwjMSJ.PMhqy/GkVeUzCl9O32gaMXlOCT0wrGu', '33', '/blog/Images/images (3).png', NULL),
(50, 'test3334', '$2y$10$dUStB1wlOEEozQ9ub.xiwOF6xS8Y7umg.dxU/X7WnT.P6vyYRJCYG', '33', '/blog/Images/blohhh.jpg', NULL),
(51, 'ttttttt', '$2y$10$IMqSaibb9ElqeaI1aLzl/.4tewfiWcFLkl92bm77ZpWUTwWsn1OR.', 't', '/blog/Images/blogbutton.jpg', NULL),
(52, 'tttttttt', '$2y$10$KjCRxRzaBuNVwDQWjcRRfeJ8trwkhsaYYfE1dFyHAyTOsVeGDGQ1S', 't', '/blog/Images/blogbutton.jpg', NULL),
(54, 'ttttttttrr', '$2y$10$NLwAvilsvhI9lNhe3lpFlemh24yGcqR7OQxDG85i/jG2XjPEBL1Ey', 't', 'C:\\xampp\\htdocs\\blog\\ImagesAbout-page-nintex-blog-banner-e1458253326747.png', NULL),
(55, 'vbbv', '$2y$10$.hLd3lDoHlp.vJZ6Wy7S7ORroWju75gtj1Jg/KwR/y5ZKwK6kNADy', 'v', '/blog/Images/\\images (4).jpg', NULL),
(59, 'pppppppp', '$2y$10$JXKpvXw1imChW9rIpdtNE.fmEyvoW8/DSPWpEQk9qHkKZUuL8UFs.', 'p', '/blog/Images/images (3).jpg', NULL),
(63, 'vbbvp', '$2y$10$vQzFABcFBTc/C2Zzjf85T..yopKR9V79XvfIJo.mlolBCawT.Tdi.', 'v', 'C:\\xampp\\htdocs\\blog\\Images\\images (3).jpg', NULL),
(64, 'valio1024', '$2y$10$aC7cGffM9hBgCEGORwkMoeaSzh3IiMb93ARDqVO582nrPlyoF6J4W', '', '', '    '),
(67, 'valio1024-', '$2y$10$bPyH2B9vVTi.vTcr.Yp3Ku7OzVRvWXj4U63iS4R2MznZilznROdee', '', 'valio1024-avatar', '    '),
(68, 'valiobar123', '$2y$10$FR7JdWRITo7e3OahEZ1oJexqGKeHIEkwn7boyUNQV985OliP9A20u', '', 'valiobar123avatarpng', '    '),
(69, 'teestuser', '$2y$10$jNV67B04G8uC9ao4O/D2Z.6uT7mG6uTY9yGlXcR/byH7DHrE9PFAK', '', 'teestuseravatar.jpg', '    '),
(70, 'teestuser1', '$2y$10$ROS1BjlziKdYchg1WJ6B7.R80WgwnYdYLvRgz.GzIy84s0aGISmvq', '', 'teestuser1avatar.png', '    '),
(71, 'albumtest', '$2y$10$5D0L55dO1Eb8ik4JGcSMJelWkjokkt7CaxBflFQR2coqDygjp036.', '', 'albumtest_avatar.jpg', '    fgsffadkhgfasdghfkadsgfadljfhadskjfajldsfhladjkfhdkajfhaldkjfhadslkfjhaldskfjadskfjhladkfjhdskfjhadksjfhadksjfhladkfjhaldkjfhadlkjfh'),
(72, 'images_test', '$2y$10$t5LFZJVnyLnmLS0vpD5cC.BYKdb4F7eozJPmTTVzye8kZL.3u/mMu', 'images test', 'images_test_avatar.jpg', '    lkjshdkajsdhlaskjdhalsdjhasldkjshdlakjsdhasldkjhasdlkjashdkasjdhaskldjhasdjh'),
(73, 'LOL', '$2y$10$q.87kgZ0CzKOFDI3y6IVteJ.V2B2iPB7WBrJ.jGf5aodJVgo/c5ZK', 'er', 'LOL_avatar.jpg', '    ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `album_id` (`album_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_users_posts_idx` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `albums`
--
ALTER TABLE `albums`
  ADD CONSTRAINT `fk_albums_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `fk_images_album` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `fk_users_posts` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
