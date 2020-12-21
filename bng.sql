-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 21, 2020 at 06:39 PM
-- Server version: 5.7.32-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bng`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `category_meta` text NOT NULL,
  `category_name` text NOT NULL,
  `category_slug` text,
  `category_description` text,
  `category_image` text,
  `category_status` enum('active','inactive') NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `date_created` date NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `parent_id`, `category_meta`, `category_name`, `category_slug`, `category_description`, `category_image`, `category_status`, `status`, `date_created`, `date_modified`) VALUES
(1, 0, 0, '', 'cat', 'cat slug', '<p>Cat desc</p>\r\n', 'Cate.png', 'active', 'Active', '2020-12-16', '2020-12-21 07:52:52'),
(2, 0, 0, 'Meta', 'Cat2', 'Catslug', 'Description', 'image.jpeg', 'active', 'Active', '2020-12-16', '2020-12-19 05:41:09'),
(3, 0, 0, 'Meta', 'Cat3', 'Catslug', 'Description', 'image.jpeg', 'active', 'Active', '2020-12-16', '2020-12-19 05:41:09'),
(4, 0, 0, 'Meta', 'Cat4', 'Catslug', 'Description', 'image.jpeg', 'active', 'Active', '2020-12-16', '2020-12-19 05:41:09'),
(5, 0, 0, 'Meta', 'Cat5', 'Catslug', 'Description', 'image.jpeg', 'active', 'Active', '2020-12-16', '2020-12-19 05:41:09'),
(6, 0, 0, 'Meta', 'Cat6', 'Catslug', 'Description', 'image.jpeg', 'active', 'Active', '2020-12-16', '2020-12-19 05:41:09'),
(7, 0, 0, 'Meta', 'Cat7', 'Catslug', 'Description', 'image.jpeg', 'active', 'Active', '2020-12-16', '2020-12-19 05:41:09'),
(8, 0, 0, 'Meta', 'Cat8', 'Catslug', 'Description', 'image.jpeg', 'active', 'Active', '2020-12-16', '2020-12-19 05:41:09'),
(9, 0, 1, 'Meta', 'SubCat', 'SubCatslug', '<p>Description</p>\r\n', 'image.jpeg', 'active', 'Active', '2020-12-16', '2020-12-21 09:37:49'),
(10, 0, 1, 'Meta', 'SubCat2', 'SubCatslug', 'Description', 'image.jpeg', 'active', 'Active', '2020-12-16', '2020-12-19 05:41:09'),
(11, 0, 1, 'Meta', 'SubCat3', 'SubCatslug', 'Description', 'image.jpeg', 'active', 'Active', '2020-12-16', '2020-12-19 05:41:09'),
(12, 0, 1, 'Meta', 'SubCat4 cat 1', 'SubCatslug', 'Description', 'image.jpeg', 'inactive', 'Active', '2020-12-16', '2020-12-19 08:01:27'),
(13, 0, 2, 'Meta', 'SubCat', 'SubCatslug', 'Description', 'image.jpeg', 'active', 'Active', '2020-12-16', '2020-12-19 05:41:09'),
(14, 0, 2, 'Meta', 'SubCat2', 'SubCatslug', 'Description', 'image.jpeg', 'active', 'Active', '2020-12-16', '2020-12-19 05:41:09'),
(15, 0, 2, 'Meta', 'SubCat3', 'SubCatslug', 'Description', 'image.jpeg', 'active', 'Active', '2020-12-16', '2020-12-19 05:41:09'),
(16, 0, 2, 'Meta', 'SubCat4', 'SubCatslug', 'Description', 'image.jpeg', 'active', 'Active', '2020-12-16', '2020-12-19 05:41:09'),
(17, 0, 3, 'Meta', 'SubCat', 'SubCatslug', 'Description', 'image.jpeg', 'active', 'Active', '2020-12-16', '2020-12-19 05:41:09'),
(18, 0, 3, 'Meta', 'SubCat2', 'SubCatslug', 'Description', 'image.jpeg', 'active', 'Active', '2020-12-16', '2020-12-19 05:41:09'),
(19, 0, 3, 'Meta', 'SubCat3', 'SubCatslug', 'Description', 'image.jpeg', 'active', 'Active', '2020-12-16', '2020-12-19 05:41:09'),
(20, 0, 3, 'Meta', 'SubCat4', 'SubCatslug', 'Description', 'image.jpeg', 'active', 'Active', '2020-12-16', '2020-12-19 05:41:09'),
(21, 0, 4, 'Meta', 'SubCat', 'SubCatslug', 'Description', 'image.jpeg', 'active', 'Active', '2020-12-16', '2020-12-19 05:41:09'),
(22, 0, 4, 'Meta', 'SubCat2', 'SubCatslug', 'Description', 'image.jpeg', 'active', 'Active', '2020-12-16', '2020-12-19 05:41:09'),
(23, 0, 4, 'Meta', 'SubCat3', 'SubCatslug', 'Description', 'image.jpeg', 'active', 'Active', '2020-12-16', '2020-12-19 05:41:09'),
(24, 0, 4, 'Meta', 'SubCat4', 'SubCatslug', 'Description', 'image.jpeg', 'active', 'Active', '2020-12-16', '2020-12-19 05:41:09'),
(25, 0, 5, 'Meta', 'SubCat', 'SubCatslug', 'Description', 'image.jpeg', 'active', 'Active', '2020-12-16', '2020-12-19 05:41:09'),
(26, 0, 5, 'Meta', 'SubCat2', 'SubCatslug', 'Description', 'image.jpeg', 'active', 'Active', '2020-12-16', '2020-12-19 05:41:09'),
(27, 0, 5, 'Meta', 'SubCat3', 'SubCatslug', 'Description', 'image.jpeg', 'active', 'Active', '2020-12-16', '2020-12-19 05:41:09'),
(28, 0, 5, 'Meta', 'SubCat4', 'SubCatslug', 'Description', 'image.jpeg', 'active', 'Active', '2020-12-16', '2020-12-19 05:41:09'),
(29, 0, 6, 'Meta', 'SubCat', 'SubCatslug', 'Description', 'image.jpeg', 'active', 'Active', '2020-12-16', '2020-12-19 05:41:09'),
(30, 0, 6, 'Meta', 'SubCat2', 'SubCatslug', 'Description', 'image.jpeg', 'active', 'Active', '2020-12-16', '2020-12-19 05:41:09'),
(31, 0, 6, 'Meta', 'SubCat3', 'SubCatslug', 'Description', 'image.jpeg', 'active', 'Active', '2020-12-16', '2020-12-19 05:41:09'),
(32, 0, 6, 'Meta', 'SubCat4', 'SubCatslug', 'Description', 'image.jpeg', 'active', 'Active', '2020-12-16', '2020-12-19 05:41:09'),
(33, 0, 7, 'Meta', 'SubCat', 'SubCatslug', 'Description', 'image.jpeg', 'active', 'Active', '2020-12-16', '2020-12-19 05:41:09'),
(34, 0, 7, 'Meta', 'SubCat2', 'SubCatslug', 'Description', 'image.jpeg', 'active', 'Active', '2020-12-16', '2020-12-19 05:41:09'),
(35, 0, 7, 'Meta', 'SubCat3', 'SubCatslug', 'Description', 'image.jpeg', 'active', 'Active', '2020-12-16', '2020-12-19 05:41:09'),
(36, 0, 7, 'Meta', 'SubCat4', 'SubCatslug', 'Description', 'image.jpeg', 'active', 'Active', '2020-12-16', '2020-12-19 05:41:09'),
(37, 0, 8, 'Meta', 'SubCat', 'SubCatslug', 'Description', 'image.jpeg', 'active', 'Active', '2020-12-16', '2020-12-19 05:41:09'),
(38, 0, 8, 'Meta', 'SubCat2', 'SubCatslug', 'Description', 'image.jpeg', 'active', 'Active', '2020-12-16', '2020-12-19 05:41:09'),
(39, 0, 8, 'Meta', 'SubCat3', 'SubCatslug', 'Description', 'image.jpeg', 'active', 'Active', '2020-12-16', '2020-12-19 05:41:09'),
(41, 2, 0, '', 'Vend Cat', 'cat slug', '<p>asdasd</p>\r\n', 'Cate2.png', 'active', 'Active', '2020-12-21', '2020-12-21 11:03:08'),
(42, 2, 41, 'asd', 'Vend sub Cat', 'sub', '<p>asd</p>\r\n', NULL, 'active', 'Active', '2020-12-21', '2020-12-21 11:14:38'),
(43, 0, 0, 'asd', 'Vend Cat', 'asd', '<p>asd</p>\r\n', NULL, 'active', 'Active', '2020-12-21', '2020-12-21 11:42:38'),
(44, 0, 0, '', 'category786', 'Cateory Slug', '<p>asdasd</p>\r\n', 'Cate3.png', 'active', 'Active', '2020-12-21', '2020-12-21 12:04:12'),
(45, 0, 44, '', 'Sub categoryt', 'asdasda', '<p>asdasd</p>\r\n', NULL, 'active', 'Active', '2020-12-21', '2020-12-21 12:04:53');

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `id` int(11) NOT NULL,
  `coupon_name` text NOT NULL,
  `coupon_type` enum('0','1') NOT NULL DEFAULT '0',
  `coupon_value` text NOT NULL,
  `coupon_expire` date NOT NULL,
  `cart_minimum` int(11) DEFAULT NULL,
  `cart_maximum` int(11) DEFAULT NULL,
  `coupon_description` text NOT NULL,
  `coupon_status` enum('0','1') NOT NULL DEFAULT '0',
  `coupon_delete` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`id`, `coupon_name`, `coupon_type`, `coupon_value`, `coupon_expire`, `cart_minimum`, `cart_maximum`, `coupon_description`, `coupon_status`, `coupon_delete`) VALUES
(3, 'OCT10OFF', '1', '10', '2020-10-30', NULL, NULL, '', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `sid` int(11) NOT NULL,
  `trainer_id` int(11) NOT NULL DEFAULT '0',
  `check_size` int(11) NOT NULL,
  `order_amount` text NOT NULL,
  `order_detail` text NOT NULL,
  `order_status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `date_created` text NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `sid`, `trainer_id`, `check_size`, `order_amount`, `order_detail`, `order_status`, `date_created`, `date_modified`) VALUES
(1, 'pay_FwBvXcSNqAdfUx', 1, 2, 1, '399', '{\"fname\":\"test\",\"number\":\"test\",\"email\":\"test@sada.asd\",\"classlocation\":\"\",\"hnumber\":\"test\",\"hnumber2\":\"test\",\"city\":\"test\",\"state\":\"test\",\"pcode\":\"test\",\"check\":\"1\",\"product\":{\"id\":\"1\",\"category_id\":\"1\",\"product_name\":\"Nano Program \",\"single_detail\":\"<ul>                                                     <li class=\\\"lectures-feature\\\">                                                         <i class=\\\"fa fa-files-o\\\"><\\/i>                                                         <span class=\\\"label\\\">Lectures<\\/span>                                                         <span class=\\\"value\\\">9<\\/span>                                                     <\\/li>                                                                                                         <li class=\\\"quizzes-feature\\\">                                                         <i class=\\\"fa fa-puzzle-piece\\\"><\\/i>                                                         <span class=\\\"label\\\">Quizzes<\\/span>                                                         <span class=\\\"value\\\">0<\\/span>                                                     <\\/li>                                                                                                         <li class=\\\"duration-feature\\\">                                                         <i class=\\\"fa fa-clock-o\\\"><\\/i>                                                         <span class=\\\"label\\\">Duration<\\/span>                                                         <span class=\\\"value\\\">10 week <\\/span>                                                     <\\/li>                                                                                                        <li class=\\\"students-feature\\\">                                                         <i class=\\\"fa fa-users\\\"><\\/i>                                                         <span class=\\\"label\\\">Students<\\/span>                                                         <span class=\\\"value\\\">21<\\/span>                                                     <\\/li>                                                                                                         <li class=\\\"<?=base_url()?>resource\\/assessments-feature\\\">                                                         <i class=\\\"fa fa-check-square-o\\\"><\\/i>                                                         <span class=\\\"label\\\">Assessments<\\/span>                                                         <span class=\\\"value\\\">Yes<\\/span>                                                     <\\/li>                                                 <\\/ul>\",\"group_detail\":\"<ul>                                                     <li class=\\\"lectures-feature\\\">                                                         <i class=\\\"fa fa-files-o\\\"><\\/i>                                                         <span class=\\\"label\\\">Lectures<\\/span>                                                         <span class=\\\"value\\\">3<\\/span>                                                     <\\/li>                                                                                                         <li class=\\\"quizzes-feature\\\">                                                         <i class=\\\"fa fa-puzzle-piece\\\"><\\/i>                                                         <span class=\\\"label\\\">Quizzes<\\/span>                                                         <span class=\\\"value\\\">0<\\/span>                                                     <\\/li>                                                                                                         <li class=\\\"duration-feature\\\">                                                         <i class=\\\"fa fa-clock-o\\\"><\\/i>                                                         <span class=\\\"label\\\">Duration<\\/span>                                                         <span class=\\\"value\\\">10 week <\\/span>                                                     <\\/li>                                                                                                        <li class=\\\"students-feature\\\">                                                         <i class=\\\"fa fa-users\\\"><\\/i>                                                         <span class=\\\"label\\\">Students<\\/span>                                                         <span class=\\\"value\\\">21<\\/span>                                                     <\\/li>                                                                                                         <li class=\\\"<?=base_url()?>resource\\/assessments-feature\\\">                                                         <i class=\\\"fa fa-check-square-o\\\"><\\/i>                                                         <span class=\\\"label\\\">Assessments<\\/span>                                                         <span class=\\\"value\\\">Yes<\\/span>                                                     <\\/li>                                                 <\\/ul>\",\"classroom_detail\":\"<ul>                                                     <li class=\\\"lectures-feature\\\">                                                         <i class=\\\"fa fa-files-o\\\"><\\/i>                                                         <span class=\\\"label\\\">Lectures<\\/span>                                                         <span class=\\\"value\\\">3<\\/span>                                                     <\\/li>                                                                                                         <li class=\\\"quizzes-feature\\\">                                                         <i class=\\\"fa fa-puzzle-piece\\\"><\\/i>                                                         <span class=\\\"label\\\">Quizzes<\\/span>                                                         <span class=\\\"value\\\">0<\\/span>                                                     <\\/li>                                                                                                         <li class=\\\"duration-feature\\\">                                                         <i class=\\\"fa fa-clock-o\\\"><\\/i>                                                         <span class=\\\"label\\\">Duration<\\/span>                                                         <span class=\\\"value\\\">10 week <\\/span>                                                     <\\/li>                                                                                                        <li class=\\\"students-feature\\\">                                                         <i class=\\\"fa fa-users\\\"><\\/i>                                                         <span class=\\\"label\\\">Students<\\/span>                                                         <span class=\\\"value\\\">21<\\/span>                                                     <\\/li>                                                                                                         <li class=\\\"<?=base_url()?>resource\\/assessments-feature\\\">                                                         <i class=\\\"fa fa-check-square-o\\\"><\\/i>                                                         <span class=\\\"label\\\">Assessments<\\/span>                                                         <span class=\\\"value\\\">Yes<\\/span>                                                     <\\/li>                                                 <\\/ul>\",\"single_price\":\"399\",\"group_price\":\"299\",\"classroom_price\":\"199\\r\\n\",\"product_slug\":\"C++ Slug\",\"product_image\":\"slug.png\",\"product_overview\":\"<h4>Course Details<\\/h4>                                                     <p>A program covering all 4 modules i.e. Listening, Reading, Writing, and Speaking. This program enables participants to gain quick IELTS structural understanding along with useful strategies & tips to score a higher Band. <\\/p>                                                     <p>Suitable for people who have past exposure of attempting IELTS or for people who want to fast track their preparation.<\\/p>                                                                                                     <h3>What you\\u2019ll learn and get your hands on?<\\/h3>                                                     <ul class=\\\"review-list\\\">                                                         <li>Appropriate lexical resource (vocabulary) to enhance your Writing along with accurate idioms and phrases to augment your Speaking ability; study material that is handed over to you in soft copy post-enrollment, has common topics vocabulary, ornamental words, idioms, phrases, and so on.<\\/li>                                                         <li>Exceptional strategies to solve each section of the Listening module to achieve a superior band.<\\/li>                                                         <li>Band 9 answer structure for the Speaking module and strategies to prolong task response<\\/li>                                                         <li>Section-wise strategies & tips to score a greater band in the Reading module.<\\/li>                                                         <li>5 practice tests for each module + 2 full-length mock tests (only for computer delivered test) .<\\/li>                                                         <li>3 assignments for each of Task 1 & Task 2 Writing correction and 3 Speaking assessment role play<\\/li>                                                         <li>Band 9 answer structure for Writing Task 1 & Task 2<\\/li>                                                                                                          <\\/ul>                                                     <h3>Requirements<\\/h3>                                                     <ul class=\\\"review-list\\\">                                                         <li>Phasellus enim magna, varius et commodo ut, ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel, sagittis vel justo<\\/li>                                                         <li>Ultricies vitae velit. Ut nulla tellus, eleifend euismod pellentesque vel.<\\/li>                                                         <li>Phasellus enim magna, varius et commodo ut.<\\/li>                                                         <li>Varius et commodo ut, ultricies vitae velit. Ut nulla tellus.<\\/li>                                                         <li>Phasellus enim magna, varius et commodo ut.<\\/li>                                                     <\\/ul>       \",\"product_curriculum\":\"\",\"product_faq\":\"<div id=\\\"accordion3\\\" class=\\\"accordion-box\\\">                                                 <div class=\\\"card accordion block\\\">                                                     <div class=\\\"card-header\\\" id=\\\"headingSeven\\\">                                                         <h5 class=\\\"mb-0\\\">                                                             <button class=\\\"btn btn-link acc-btn\\\" data-toggle=\\\"collapse\\\" data-target=\\\"#collapseSeven\\\" aria-expanded=\\\"true\\\" aria-controls=\\\"collapseSeven\\\">How is training structured? How does it progress from day 1?<\\/button>                                                         <\\/h5>                                                     <\\/div>                                                      <div id=\\\"collapseSeven\\\" class=\\\"collapse show\\\" aria-labelledby=\\\"headingSeven\\\" data-parent=\\\"#accordion3\\\">                                                         <div class=\\\"card-body acc-content current\\\">                                                             <div class=\\\"content\\\">                                                                 <p>First 2-3 sessions are dedicated to IELTS structural understanding, followed by conceptual learning of strategies & tips for each module, then practice, and finally evaluation.\\u00a0The trainer also helps you add newer vocabulary, idioms, and phrases to your arsenal which optimizes your writing and speaking ability.<\\/p>                                                             <\\/div>                                                         <\\/div>                                                     <\\/div>                                                 <\\/div>                                             <\\/div>                                                 <div id=\\\"accordion3\\\" class=\\\"accordion-box\\\">                                                 <div class=\\\"card accordion block\\\">                                                     <div class=\\\"card-header\\\" id=\\\"headingSeven\\\">                                                         <h5 class=\\\"mb-0\\\">                                                             <button class=\\\"btn btn-link acc-btn\\\" data-toggle=\\\"collapse\\\" data-target=\\\"#collapseSeven\\\" aria-expanded=\\\"true\\\" aria-controls=\\\"collapseSeven\\\">How is training structured? How does it progress from day 1?<\\/button>                                                         <\\/h5>                                                     <\\/div>                                                      <div id=\\\"collapseSeven\\\" class=\\\"collapse show\\\" aria-labelledby=\\\"headingSeven\\\" data-parent=\\\"#accordion3\\\">                                                         <div class=\\\"card-body acc-content current\\\">                                                             <div class=\\\"content\\\">                                                                 <p>First 2-3 sessions are dedicated to IELTS structural understanding, followed by conceptual learning of strategies & tips for each module, then practice, and finally evaluation.\\u00a0The trainer also helps you add newer vocabulary, idioms, and phrases to your arsenal which optimizes your writing and speaking ability.<\\/p>                                                             <\\/div>                                                         <\\/div>                                                     <\\/div>                                                 <\\/div>                                             <\\/div>                                                                                            <div id=\\\"accordion3\\\" class=\\\"accordion-box\\\">                                                 <div class=\\\"card accordion block\\\">                                                     <div class=\\\"card-header\\\" id=\\\"headingSeven\\\">                                                         <h5 class=\\\"mb-0\\\">                                                             <button class=\\\"btn btn-link acc-btn\\\" data-toggle=\\\"collapse\\\" data-target=\\\"#collapseSeven\\\" aria-expanded=\\\"true\\\" aria-controls=\\\"collapseSeven\\\">How is training structured? How does it progress from day 1?<\\/button>                                                         <\\/h5>                                                     <\\/div>                                                      <div id=\\\"collapseSeven\\\" class=\\\"collapse show\\\" aria-labelledby=\\\"headingSeven\\\" data-parent=\\\"#accordion3\\\">                                                         <div class=\\\"card-body acc-content current\\\">                                                             <div class=\\\"content\\\">                                                                 <p>First 2-3 sessions are dedicated to IELTS structural understanding, followed by conceptual learning of strategies & tips for each module, then practice, and finally evaluation.\\u00a0The trainer also helps you add newer vocabulary, idioms, and phrases to your arsenal which optimizes your writing and speaking ability.<\\/p>                                                             <\\/div>                                                         <\\/div>                                                     <\\/div>                                                 <\\/div>                                             <\\/div>  \",\"product_extra\":\"\",\"product_status\":\"active\",\"product_created\":\"2020-10-07\",\"product_modified\":\"2020-10-28 12:51:31\"},\"checkout\":{\"sdate\":\"2020-11-03\",\"slot\":\" 12:00:00\",\"check\":\"1\",\"pid\":\"1\"},\"order_amount\":\"399\"}', 'active', 'November,02 2020', '2020-11-02 00:23:52'),
(2, 'pay_G5gxDb4VlRZ6YI', 1, 2, 1, '399', '{\"fname\":\"test\",\"number\":\"test\",\"email\":\"test@sada.asd\",\"classlocation\":\"\",\"hnumber\":\"test\",\"hnumber2\":\"test\",\"city\":\"test\",\"state\":\"test\",\"pcode\":\"test\",\"check\":\"1\",\"product\":{\"id\":\"2\",\"category_id\":\"1\",\"product_meta1\":\"2 month\",\"product_meta2\":\"2 hours\",\"product_name\":\"php\",\"single_detail\":\"<ul>                                                     <li class=\\\"lectures-feature\\\">                                                         <i class=\\\"fa fa-files-o\\\"><\\/i>                                                         <span class=\\\"label\\\">Lectures<\\/span>                                                         <span class=\\\"value\\\">3<\\/span>                                                     <\\/li>                                                                                                         <li class=\\\"quizzes-feature\\\">                                                         <i class=\\\"fa fa-puzzle-piece\\\"><\\/i>                                                         <span class=\\\"label\\\">Quizzes<\\/span>                                                         <span class=\\\"value\\\">0<\\/span>                                                     <\\/li>                                                                                                         <li class=\\\"duration-feature\\\">                                                         <i class=\\\"fa fa-clock-o\\\"><\\/i>                                                         <span class=\\\"label\\\">Duration<\\/span>                                                         <span class=\\\"value\\\">10 week <\\/span>                                                     <\\/li>                                                                                                        <li class=\\\"students-feature\\\">                                                         <i class=\\\"fa fa-users\\\"><\\/i>                                                         <span class=\\\"label\\\">Students<\\/span>                                                         <span class=\\\"value\\\">21<\\/span>                                                     <\\/li>                                                                                                         <li class=\\\"<?=base_url()?>resource\\/assessments-feature\\\">                                                         <i class=\\\"fa fa-check-square-o\\\"><\\/i>                                                         <span class=\\\"label\\\">Assessments<\\/span>                                                         <span class=\\\"value\\\">Yes<\\/span>                                                     <\\/li>                                                 <\\/ul>\",\"group_detail\":\"<ul>                                                     <li class=\\\"lectures-feature\\\">                                                         <i class=\\\"fa fa-files-o\\\"><\\/i>                                                         <span class=\\\"label\\\">Lectures<\\/span>                                                         <span class=\\\"value\\\">3<\\/span>                                                     <\\/li>                                                                                                         <li class=\\\"quizzes-feature\\\">                                                         <i class=\\\"fa fa-puzzle-piece\\\"><\\/i>                                                         <span class=\\\"label\\\">Quizzes<\\/span>                                                         <span class=\\\"value\\\">0<\\/span>                                                     <\\/li>                                                                                                         <li class=\\\"duration-feature\\\">                                                         <i class=\\\"fa fa-clock-o\\\"><\\/i>                                                         <span class=\\\"label\\\">Duration<\\/span>                                                         <span class=\\\"value\\\">10 week <\\/span>                                                     <\\/li>                                                                                                        <li class=\\\"students-feature\\\">                                                         <i class=\\\"fa fa-users\\\"><\\/i>                                                         <span class=\\\"label\\\">Students<\\/span>                                                         <span class=\\\"value\\\">21<\\/span>                                                     <\\/li>                                                                                                         <li class=\\\"<?=base_url()?>resource\\/assessments-feature\\\">                                                         <i class=\\\"fa fa-check-square-o\\\"><\\/i>                                                         <span class=\\\"label\\\">Assessments<\\/span>                                                         <span class=\\\"value\\\">Yes<\\/span>                                                     <\\/li>                                                 <\\/ul>\",\"classroom_detail\":\"<ul>                                                     <li class=\\\"lectures-feature\\\">                                                         <i class=\\\"fa fa-files-o\\\"><\\/i>                                                         <span class=\\\"label\\\">Lectures<\\/span>                                                         <span class=\\\"value\\\">3<\\/span>                                                     <\\/li>                                                                                                         <li class=\\\"quizzes-feature\\\">                                                         <i class=\\\"fa fa-puzzle-piece\\\"><\\/i>                                                         <span class=\\\"label\\\">Quizzes<\\/span>                                                         <span class=\\\"value\\\">0<\\/span>                                                     <\\/li>                                                                                                         <li class=\\\"duration-feature\\\">                                                         <i class=\\\"fa fa-clock-o\\\"><\\/i>                                                         <span class=\\\"label\\\">Duration<\\/span>                                                         <span class=\\\"value\\\">10 week <\\/span>                                                     <\\/li>                                                                                                        <li class=\\\"students-feature\\\">                                                         <i class=\\\"fa fa-users\\\"><\\/i>                                                         <span class=\\\"label\\\">Students<\\/span>                                                         <span class=\\\"value\\\">21<\\/span>                                                     <\\/li>                                                                                                         <li class=\\\"<?=base_url()?>resource\\/assessments-feature\\\">                                                         <i class=\\\"fa fa-check-square-o\\\"><\\/i>                                                         <span class=\\\"label\\\">Assessments<\\/span>                                                         <span class=\\\"value\\\">Yes<\\/span>                                                     <\\/li>                                                 <\\/ul>\",\"single_price\":\"399\",\"group_price\":\"299\",\"classroom_price\":\"199\\r\\n\",\"product_slug\":\"php Slug\",\"product_image\":\"slug.png\",\"product_overview\":\"\",\"product_curriculum\":\"\",\"product_faq\":\"\",\"product_extra\":\"\",\"product_status\":\"active\",\"product_created\":\"2020-10-07\",\"product_modified\":\"2020-11-23 16:30:33\"},\"checkout\":{\"sdate\":\"2020-12-01\",\"slot\":\" 04:00:00\",\"check\":\"1\",\"pid\":\"2\"},\"order_amount\":\"399\"}', 'active', 'November,26 2020', '2020-11-26 06:06:06');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_meta` text NOT NULL,
  `product_name` text NOT NULL,
  `product_slug` text NOT NULL,
  `product_image` text NOT NULL,
  `product_information` text NOT NULL,
  `product_description` text NOT NULL,
  `product_status` enum('active','inactive') NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `date_created` date NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `category_id`, `product_meta`, `product_name`, `product_slug`, `product_image`, `product_information`, `product_description`, `product_status`, `status`, `date_created`, `date_modified`) VALUES
(1, 0, 9, 'Prodyct _meta', 'Product Name1 ', 'Product Slug', 'ProDuct1.png', '<p>Product image</p>\r\n', '<p>Product Description</p>\r\n', 'active', 'Active', '2020-12-16', '2020-12-21 09:30:19'),
(2, 0, 9, 'Prodyct _meta', 'Product Name2', 'Product Slug', 'Product Image', 'Product image', 'Product Description', 'active', 'Active', '2020-12-16', '2020-12-19 09:46:29'),
(3, 0, 9, 'Prodyct _meta', 'Product Name3', 'Product Slug', 'Product Image', '<p>Product image</p>\r\n', '<p>Product Description</p>\r\n', 'active', 'Active', '2020-12-16', '2020-12-21 08:44:14'),
(5, 0, 10, 'Prodyct _meta', 'Product Name', 'Product Slug', 'Product Image', 'Product image', 'Product Description', 'active', 'Active', '2020-12-16', '2020-12-19 09:46:29'),
(6, 0, 10, 'Prodyct _meta', 'Product Name2', 'Product Slug', 'Product Image', 'Product image', 'Product Description', 'active', 'Active', '2020-12-16', '2020-12-19 09:46:29'),
(7, 0, 10, 'Prodyct _meta', 'Product Name3', 'Product Slug', 'Product Image', 'Product image', 'Product Description', 'active', 'Active', '2020-12-16', '2020-12-19 10:39:31'),
(8, 2, 42, 'a', 'VVEnd Product Name1 ', 'VE', '', '<p>asd</p>\r\n', '<p>asd</p>\r\n', 'active', 'Active', '2020-12-21', '2020-12-21 11:17:22'),
(9, 0, 45, 'asdasdas', 'asdjbhavsjhdvhja', 'ajsd bnjan', 'ProDuct2.png', '<p>saddadfas</p>\r\n', '<p>asdasda</p>\r\n', 'active', 'Active', '2020-12-21', '2020-12-21 12:05:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_token` text NOT NULL,
  `user_name` text NOT NULL,
  `user_email` text NOT NULL,
  `user_password` text NOT NULL,
  `user_phone` int(15) NOT NULL,
  `user_image` text NOT NULL,
  `user_description` text NOT NULL,
  `user_type` enum('user','vendor','team','admin') NOT NULL,
  `user_status` enum('active','inactive') NOT NULL DEFAULT 'inactive',
  `user_verified` enum('verified','unverified') NOT NULL,
  `user_login` datetime DEFAULT NULL,
  `user_logout` datetime DEFAULT NULL,
  `date_created` date NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_token`, `user_name`, `user_email`, `user_password`, `user_phone`, `user_image`, `user_description`, `user_type`, `user_status`, `user_verified`, `user_login`, `user_logout`, `date_created`, `date_modified`) VALUES
(1, '9337402c-7ee2-8403-9619-fee51ad34043', 'CUstomer', 'customer@gmail.com', '202cb962ac59075b964b07152d234b70', 0, '', '', 'user', 'active', 'verified', NULL, NULL, '0000-00-00', '2020-12-19 05:35:30'),
(2, '9337402c-7ee2-8403-9619-fee51ad34043', 'vendor', 'vendor@gmail.com', '202cb962ac59075b964b07152d234b70', 0, '', '', 'vendor', 'active', 'verified', NULL, NULL, '0000-00-00', '2020-12-19 05:35:30'),
(3, '9337402c-7ee2-8403-9619-fee51ad34043', 'admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 0, '', '', 'admin', 'active', 'verified', NULL, NULL, '0000-00-00', '2020-12-19 05:35:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
