-- phpMyAdmin SQL Dump
-- version 5.0.4deb2~bpo10+1+bionic1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 13, 2021 at 11:16 AM
-- Server version: 5.7.33-0ubuntu0.18.04.1
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
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
(1, 0, 0, '', 'Agriculture And Food', 'Agriculture And Food', 'Agriculture And Food', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:42:49'),
(2, 0, 1, '', 'Agriculture Bags', 'Agriculture Bags', 'Agriculture Bags', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(3, 0, 1, '', 'Agriculture Choppers, Shredders & Cutters', 'Agriculture Choppers, Shredders & Cutters', 'Agriculture Choppers, Shredders & Cutters', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(4, 0, 1, '', 'Agriculture Farm Tractors', 'Agriculture Farm Tractors', 'Agriculture Farm Tractors', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(5, 0, 1, '', 'Agriculture Grinders, Multures', 'Agriculture Grinders, Multures', 'Agriculture Grinders, Multures', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(6, 0, 1, '', 'Agriculture Harvesters', 'Agriculture Harvesters', 'Agriculture Harvesters', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(7, 0, 1, '', 'Agriculture Nets', 'Agriculture Nets', 'Agriculture Nets', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(8, 0, 1, '', 'Agriculture Pumps', 'Agriculture Pumps', 'Agriculture Pumps', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(9, 0, 1, '', 'Agriculture Sheller', 'Agriculture Sheller', 'Agriculture Sheller', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(10, 0, 1, '', 'Agriculture Sprayers', 'Agriculture Sprayers', 'Agriculture Sprayers', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(11, 0, 1, '', 'Agriculture Threshers', 'Agriculture Threshers', 'Agriculture Threshers', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(12, 0, 1, '', 'Animal Related Equipment', 'Animal Related Equipment', 'Animal Related Equipment', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(13, 0, 1, '', 'Axe', 'Axe', 'Axe', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(14, 0, 1, '', 'Bakery Equipments & Machineries', 'Bakery Equipments & Machineries', 'Bakery Equipments & Machineries', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(15, 0, 1, '', 'Bean Bags', 'Bean Bags', 'Bean Bags', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(16, 0, 1, '', 'Beverages Machinery', 'Beverages Machinery', 'Beverages Machinery', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(17, 0, 1, '', 'Breweries & Distillery Machinery', 'Breweries & Distillery Machinery', 'Breweries & Distillery Machinery', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(18, 0, 1, '', 'Chaff Cutters', 'Chaff Cutters', 'Chaff Cutters', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(19, 0, 1, '', 'Cigarette Making Machine/Tobacco Processing Machine', 'Cigarette Making Machine/Tobacco Processing Machine', 'Cigarette Making Machine/Tobacco Processing Machine', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(20, 0, 1, '', 'Coconut Scrapper', 'Coconut Scrapper', 'Coconut Scrapper', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(21, 0, 1, '', 'Dairy & Poultry Equipment', 'Dairy & Poultry Equipment', 'Dairy & Poultry Equipment', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(22, 0, 1, '', 'Dutch Hoe', 'Dutch Hoe', 'Dutch Hoe', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(23, 0, 1, '', 'Farm Machinery & Equipments', 'Farm Machinery & Equipments', 'Farm Machinery & Equipments', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(24, 0, 1, '', 'Farm Tractor Tyres', 'Farm Tractor Tyres', 'Farm Tractor Tyres', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(25, 0, 1, '', 'Farmer Tools', 'Farmer Tools', 'Farmer Tools', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(26, 0, 1, '', 'Fishing Nets, Fishing Rods, Fishing Tackles, Baits', 'Fishing Nets, Fishing Rods, Fishing Tackles, Baits', 'Fishing Nets, Fishing Rods, Fishing Tackles, Baits', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(27, 0, 1, '', 'Flour Mills', 'Flour Mills', 'Flour Mills', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(28, 0, 1, '', 'Food Equipments', 'Food Equipments', 'Food Equipments', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(29, 0, 1, '', 'Food Processing Machinery', 'Food Processing Machinery', 'Food Processing Machinery', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(30, 0, 1, '', 'Fork Jembe', 'Fork Jembe', 'Fork Jembe', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(31, 0, 1, '', 'Garden Hose', 'Garden Hose', 'Garden Hose', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(32, 0, 1, '', 'Garden Tools', 'Garden Tools', 'Garden Tools', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(33, 0, 1, '', 'Grass Cutters', 'Grass Cutters', 'Grass Cutters', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(34, 0, 1, '', 'Greenhouse', 'Greenhouse', 'Greenhouse', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(35, 0, 1, '', 'Hammer Mills', 'Hammer Mills', 'Hammer Mills', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(36, 0, 1, '', 'Hand Trowel', 'Hand Trowel', 'Hand Trowel', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(37, 0, 1, '', 'Hoe', 'Hoe', 'Hoe', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(38, 0, 1, '', 'Ice Cream Machine', 'Ice Cream Machine', 'Ice Cream Machine', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(39, 0, 1, '', 'Irrigation Machinery, Equipments & Spare Parts', 'Irrigation Machinery, Equipments & Spare Parts', 'Irrigation Machinery, Equipments & Spare Parts', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(40, 0, 1, '', 'Knapsack Sprayer', 'Knapsack Sprayer', 'Knapsack Sprayer', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(41, 0, 1, '', 'Lawn Mower', 'Lawn Mower', 'Lawn Mower', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(42, 0, 1, '', 'Loppers', 'Loppers', 'Loppers', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(43, 0, 1, '', 'Maize Sheller', 'Maize Sheller', 'Maize Sheller', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(44, 0, 1, '', 'Mattock', 'Mattock', 'Mattock', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(45, 0, 1, '', 'Pruners', 'Pruners', 'Pruners', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(46, 0, 1, '', 'Pruning Saw', 'Pruning Saw', 'Pruning Saw', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(47, 0, 1, '', 'Rake', 'Rake', 'Rake', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(48, 0, 1, '', 'Rice Mills, Rice Mill Spare Parts', 'Rice Mills, Rice Mill Spare Parts', 'Rice Mills, Rice Mill Spare Parts', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(49, 0, 1, '', 'Saw Mills', 'Saw Mills', 'Saw Mills', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(50, 0, 1, '', 'Shears', 'Shears', 'Shears', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(51, 0, 1, '', 'Shovel', 'Shovel', 'Shovel', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(52, 0, 1, '', 'Soda Maker', 'Soda Maker', 'Soda Maker', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(53, 0, 1, '', 'Soil Testing & Surveying Instruments', 'Soil Testing & Surveying Instruments', 'Soil Testing & Surveying Instruments', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(54, 0, 1, '', 'Sugar Processing Plants', 'Sugar Processing Plants', 'Sugar Processing Plants', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(55, 0, 1, '', 'Sugarcane Crusher', 'Sugarcane Crusher', 'Sugarcane Crusher', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(56, 0, 1, '', 'Tea & Coffee Processing Machinery', 'Tea & Coffee Processing Machinery', 'Tea & Coffee Processing Machinery', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(57, 0, 1, '', 'Watering Can', 'Watering Can', 'Watering Can', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(58, 0, 1, '', 'Wheelbarrow', 'Wheelbarrow', 'Wheelbarrow', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(59, 0, 1, '', 'Wine Coolers', 'Wine Coolers', 'Wine Coolers', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(60, 0, 1, '', 'Find Agri & Food Processing Machinery & Equipment by Country', 'Find Agri & Food Processing Machinery & Equipment by Country', 'Find Agri & Food Processing Machinery & Equipment by Country', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(61, 0, 0, '', 'Alcoholic Beverages, Tobacco & Related Products', 'Alcoholic Beverages, Tobacco & Related Products', 'Alcoholic Beverages, Tobacco & Related Products', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(62, 0, 61, '', 'Alcoholic Concentrates', 'Alcoholic Concentrates', 'Alcoholic Concentrates', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(63, 0, 61, '', 'Bar Accessories', 'Bar Accessories', 'Bar Accessories', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(64, 0, 61, '', 'Beedies & Beedi Leaves', 'Beedies & Beedi Leaves', 'Beedies & Beedi Leaves', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(65, 0, 61, '', 'Beer', 'Beer', 'Beer', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(66, 0, 61, '', 'Beer Mugs', 'Beer Mugs', 'Beer Mugs', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(67, 0, 61, '', 'Cigarette Lighters', 'Cigarette Lighters', 'Cigarette Lighters', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(68, 0, 61, '', 'Cigarette filters', 'Cigarette filters', 'Cigarette filters', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(69, 0, 61, '', 'Cigarettes', 'Cigarettes', 'Cigarettes', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(70, 0, 61, '', 'Cigars & Cigar Accessories', 'Cigars & Cigar Accessories', 'Cigars & Cigar Accessories', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(71, 0, 61, '', 'Cocktail Glasses', 'Cocktail Glasses', 'Cocktail Glasses', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(72, 0, 61, '', 'Food Grade Alcohol', 'Food Grade Alcohol', 'Food Grade Alcohol', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(73, 0, 61, '', 'Industrial Alcohol', 'Industrial Alcohol', 'Industrial Alcohol', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(74, 0, 61, '', 'Raw Tobacco, Leaves & Related Products', 'Raw Tobacco, Leaves & Related Products', 'Raw Tobacco, Leaves & Related Products', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(75, 0, 61, '', 'Smoking Water Pipes', 'Smoking Water Pipes', 'Smoking Water Pipes', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(76, 0, 61, '', 'Strong Alcoholic Beverages like Whisky, Gin, Vodka, Rum etc', 'Strong Alcoholic Beverages like Whisky, Gin, Vodka, Rum etc', 'Strong Alcoholic Beverages like Whisky, Gin, Vodka, Rum etc', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(77, 0, 61, '', 'Wine & Liquor Bottles, Buckets, Baskets & Other Accessories', 'Wine & Liquor Bottles, Buckets, Baskets & Other Accessories', 'Wine & Liquor Bottles, Buckets, Baskets & Other Accessories', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(78, 0, 61, '', 'Wine Bottle Holder', 'Wine Bottle Holder', 'Wine Bottle Holder', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(79, 0, 61, '', 'Wines & Champagne', 'Wines & Champagne', 'Wines & Champagne', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(80, 0, 61, '', 'Find Alcoholic Beverages, Tobacco & Related Products by Country', 'Find Alcoholic Beverages, Tobacco & Related Products by Country', 'Find Alcoholic Beverages, Tobacco & Related Products by Country', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(81, 0, 0, '', 'Bar Accessories and Related Products', 'Bar Accessories and Related Products', 'Bar Accessories and Related Products', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(82, 0, 81, '', 'Bar Bucket', 'Bar Bucket', 'Bar Bucket', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(83, 0, 81, '', 'Bar Butler', 'Bar Butler', 'Bar Butler', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(84, 0, 81, '', 'Bar Coaster', 'Bar Coaster', 'Bar Coaster', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(85, 0, 81, '', 'Bar Counter', 'Bar Counter', 'Bar Counter', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(86, 0, 81, '', 'Bar Equipments', 'Bar Equipments', 'Bar Equipments', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(87, 0, 81, '', 'Bar Furniture', 'Bar Furniture', 'Bar Furniture', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(88, 0, 81, '', 'Bar Glass Holder', 'Bar Glass Holder', 'Bar Glass Holder', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(89, 0, 81, '', 'Bar Glasses & Mugs', 'Bar Glasses & Mugs', 'Bar Glasses & Mugs', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(90, 0, 81, '', 'Bar Knives', 'Bar Knives', 'Bar Knives', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(91, 0, 81, '', 'Bar Mops', 'Bar Mops', 'Bar Mops', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(92, 0, 81, '', 'Bar Spoon', 'Bar Spoon', 'Bar Spoon', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(93, 0, 81, '', 'Bar Stand', 'Bar Stand', 'Bar Stand', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(94, 0, 81, '', 'Bar Table', 'Bar Table', 'Bar Table', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(95, 0, 81, '', 'Bar Utensils', 'Bar Utensils', 'Bar Utensils', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(96, 0, 81, '', 'Beer Bucket', 'Beer Bucket', 'Beer Bucket', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(97, 0, 81, '', 'Beer Dispenser', 'Beer Dispenser', 'Beer Dispenser', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(98, 0, 81, '', 'Beer Glasses', 'Beer Glasses', 'Beer Glasses', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(99, 0, 81, '', 'Beer Mugs', 'Beer Mugs', 'Beer Mugs', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(100, 0, 81, '', 'Beer Tower', 'Beer Tower', 'Beer Tower', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(101, 0, 81, '', 'Bottle & Beer Chiller', 'Bottle & Beer Chiller', 'Bottle & Beer Chiller', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(102, 0, 81, '', 'Bottle & Beer Coolers', 'Bottle & Beer Coolers', 'Bottle & Beer Coolers', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(103, 0, 81, '', 'Ceramic Beer Mugs', 'Ceramic Beer Mugs', 'Ceramic Beer Mugs', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(104, 0, 81, '', 'Champagne Bucket', 'Champagne Bucket', 'Champagne Bucket', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(105, 0, 81, '', 'Champagne Glasses', 'Champagne Glasses', 'Champagne Glasses', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(106, 0, 81, '', 'Cocktail Glass', 'Cocktail Glass', 'Cocktail Glass', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(107, 0, 81, '', 'Cocktail Mixers & Shakers', 'Cocktail Mixers & Shakers', 'Cocktail Mixers & Shakers', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(108, 0, 81, '', 'Cocktail Sets', 'Cocktail Sets', 'Cocktail Sets', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(109, 0, 81, '', 'Cocktail Station', 'Cocktail Station', 'Cocktail Station', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(110, 0, 81, '', 'Cocktail Stick & Stirrer', 'Cocktail Stick & Stirrer', 'Cocktail Stick & Stirrer', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(111, 0, 81, '', 'Cooler Box', 'Cooler Box', 'Cooler Box', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(112, 0, 81, '', 'Copper Beer Mugs', 'Copper Beer Mugs', 'Copper Beer Mugs', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(113, 0, 81, '', 'Copper Ice Bucket', 'Copper Ice Bucket', 'Copper Ice Bucket', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(114, 0, 81, '', 'Drink Stirrers', 'Drink Stirrers', 'Drink Stirrers', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(115, 0, 81, '', 'Glass Beer Mugs', 'Glass Beer Mugs', 'Glass Beer Mugs', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(116, 0, 81, '', 'Glass Goblet', 'Glass Goblet', 'Glass Goblet', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(117, 0, 81, '', 'Glass Ice Bucket', 'Glass Ice Bucket', 'Glass Ice Bucket', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(118, 0, 81, '', 'Hip Flask', 'Hip Flask', 'Hip Flask', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(119, 0, 81, '', 'Ice Bucket', 'Ice Bucket', 'Ice Bucket', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(120, 0, 81, '', 'Ice Crusher', 'Ice Crusher', 'Ice Crusher', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(121, 0, 81, '', 'Ice Holder and Tongs', 'Ice Holder and Tongs', 'Ice Holder and Tongs', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(122, 0, 81, '', 'Ice Scoop', 'Ice Scoop', 'Ice Scoop', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(123, 0, 81, '', 'Liqueur Glasses', 'Liqueur Glasses', 'Liqueur Glasses', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(124, 0, 81, '', 'Plastic Ice Bucket', 'Plastic Ice Bucket', 'Plastic Ice Bucket', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(125, 0, 81, '', 'Shot Glasses', 'Shot Glasses', 'Shot Glasses', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(126, 0, 81, '', 'Stainless Steel Ice Bucket', 'Stainless Steel Ice Bucket', 'Stainless Steel Ice Bucket', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(127, 0, 81, '', 'Steel Ice Bucket', 'Steel Ice Bucket', 'Steel Ice Bucket', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(128, 0, 81, '', 'Whiskey Glasses', 'Whiskey Glasses', 'Whiskey Glasses', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(129, 0, 81, '', 'Wine & Beer Chillers And Coolers', 'Wine & Beer Chillers And Coolers', 'Wine & Beer Chillers And Coolers', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(130, 0, 81, '', 'Wine & Beer Opener', 'Wine & Beer Opener', 'Wine & Beer Opener', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(131, 0, 81, '', 'Wine Bar Set', 'Wine Bar Set', 'Wine Bar Set', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(132, 0, 81, '', 'Wine Bottle Cover', 'Wine Bottle Cover', 'Wine Bottle Cover', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(133, 0, 81, '', 'Wine Bottle Holder', 'Wine Bottle Holder', 'Wine Bottle Holder', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(134, 0, 81, '', 'Wine Bottle Racks', 'Wine Bottle Racks', 'Wine Bottle Racks', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(135, 0, 81, '', 'Wine Bucket', 'Wine Bucket', 'Wine Bucket', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(136, 0, 81, '', 'Wine Cabinet', 'Wine Cabinet', 'Wine Cabinet', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(137, 0, 81, '', 'Wine Chiller', 'Wine Chiller', 'Wine Chiller', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(138, 0, 81, '', 'Wine Coolers', 'Wine Coolers', 'Wine Coolers', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(139, 0, 81, '', 'Wine Dispenser', 'Wine Dispenser', 'Wine Dispenser', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(140, 0, 81, '', 'Wine Filter', 'Wine Filter', 'Wine Filter', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(141, 0, 81, '', 'Wine Glass Rack', 'Wine Glass Rack', 'Wine Glass Rack', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(142, 0, 81, '', 'Wine Glasses', 'Wine Glasses', 'Wine Glasses', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(143, 0, 81, '', 'Wine Pourers', 'Wine Pourers', 'Wine Pourers', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(144, 0, 81, '', 'Wine Stand', 'Wine Stand', 'Wine Stand', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(145, 0, 81, '', 'Wine Tray', 'Wine Tray', 'Wine Tray', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(146, 0, 81, '', 'Find Bar Accessories and Related Products by Country', 'Find Bar Accessories and Related Products by Country', 'Find Bar Accessories and Related Products by Country', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(147, 0, 0, '', 'Test', 'Test', '<p>Test</p>\r\n', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(148, 0, 147, '', 'Test Sub Cate', 'TEst', '<p>asd</p>\r\n', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12'),
(149, 2, 147, '', 'Test Sub Cate', 'asd', '<p>asd</p>\r\n', 'Cate.png', 'active', 'Active', '2020-12-22', '2020-12-24 10:43:12');

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
  `uid` int(11) NOT NULL,
  `order_amount` text NOT NULL,
  `order_detail` text NOT NULL,
  `order_status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `date_created` text NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `uid`, `order_amount`, `order_detail`, `order_status`, `date_created`, `date_modified`) VALUES
(1, 'pay_GJomMf4TqeFZfb', 2, '50', '{\"fname\":\"asd\",\"lname\":\"dsa\",\"email\":\"aszd@asd.asd\",\"address\":\"asd\",\"address2\":\"asd\",\"country\":\"ads\",\"city\":\"asd\",\"postcode\":\"ad\",\"product\":\"1\",\"paymentmethod\":\"razorpay\",\"planname\":\"Basic Plan\",\"planprice\":\"50\"}', 'active', 'January,01 2021', '2020-12-31 22:51:17');

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
(1, 0, 2, '', '  Sekar Coir', '  Sekar Coir', 'ProDuct3.png', '<p>Supplier From Salem, Tamil Nadu, India</p>\n', '<p>Coco coir bags.Export</p>\n\n<p><a href=\"https://www.go4worldbusiness.com/suppliers/agriculture-bags.html\">Supplier Of Agriculture Bags</a><br />\n<a href=\"https://www.go4worldbusiness.com/suppliers/importing-exporting.html\">Service Provider Of Importing/Exporting</a></p>\n', 'active', 'Active', '2020-12-22', '2020-12-22 11:44:13'),
(2, 0, 2, '', '\nGarden Grow Bags\n', '\nGarden Grow Bags\n', 'ProDuct3.png', '<p>HDPE, LDPE bags LOng Life,\n\nSupplier Of Agriculture Bags</p>\n', '<p>HDPE, LDPE bags LOng Life,\n\nSupplier Of Agriculture Bags</p>\n', 'active', 'Active', '2020-12-22', '2020-12-22 11:44:13'),
(3, 0, 2, '', '\nShrink Wrap Reusable Pallet Cover Hood Bag\n', '\nShrink Wrap Reusable Pallet Cover Hood Bag\n', 'ProDuct3.png', 'Supplier From Shouguang, Shandong, China', '<p>Pallet Shrink Wrap bags are the quick and easy way to shrink wrap a pallet before transport. Outfit your skid with 4 or 5 mil, clear shrink bags designed to keep shipments safe and visible.can be used to bundle multiple unit packs such as bottles, cans, tins, drums, cartons, sacks etc, while our heat shrinkable bags provide excellent protection from dust, water and other contaminants. Load your pallet and then cover it from the top down with a pallet shrink bag (install the bag upside down), so the bag completely covers the load. Make a vertical pleat or two to neatly reduce any extra material. At the bottom (at the pallet), take the excess bag and cuff it around the base of the pallet. Pallet Shrink Bag Features and Benefits: * Plastic</p>\n', 'active', 'Active', '2020-12-22', '2020-12-22 11:44:13'),
(4, 0, 2, '', ' \nCoco Peat\n', ' \nCoco Peat\n', 'ProDuct3.png', '<p>Supplier From Chilaw, Sri Lanka</p>\n', '<p>Coco coir bags.Export</p>\n\n<p><a href=\"https://www.go4worldbusiness.com/suppliers/agriculture-bags.html\">Supplier Of Agriculture Bags</a><br />\n<a href=\"https://www.go4worldbusiness.com/suppliers/importing-exporting.html\">Service Provider Of Importing/Exporting</a></p>\n', 'active', 'Active', '2020-12-22', '2020-12-22 11:44:13'),
(5, 0, 2, '', '\nGarden Grow Bags\n', '\nGarden Grow Bags\n', 'ProDuct3.png', '<p>HDPE, LDPE bags LOng Life,\n\nSupplier Of Agriculture Bags</p>\n', '<p>HDPE, LDPE bags LOng Life,\n\nSupplier Of Agriculture Bags</p>\n', 'active', 'Active', '2020-12-22', '2020-12-22 11:44:13'),
(6, 0, 2, '', '\nShrink Wrap Reusable Pallet Cover Hood Bag\n', '\nShrink Wrap Reusable Pallet Cover Hood Bag\n', 'ProDuct3.png', 'Supplier From Shouguang, Shandong, China', '<p>Pallet Shrink Wrap bags are the quick and easy way to shrink wrap a pallet before transport. Outfit your skid with 4 or 5 mil, clear shrink bags designed to keep shipments safe and visible.can be used to bundle multiple unit packs such as bottles, cans, tins, drums, cartons, sacks etc, while our heat shrinkable bags provide excellent protection from dust, water and other contaminants. Load your pallet and then cover it from the top down with a pallet shrink bag (install the bag upside down), so the bag completely covers the load. Make a vertical pleat or two to neatly reduce any extra material. At the bottom (at the pallet), take the excess bag and cuff it around the base of the pallet. Pallet Shrink Bag Features and Benefits: * Plastic</p>\n', 'active', 'Active', '2020-12-22', '2020-12-22 11:44:13'),
(7, 0, 3, '', '  Sekar Coir', '  Sekar Coir', 'ProDuct3.png', '<p>Supplier From Salem, Tamil Nadu, India</p>\n', '<p>Coco coir bags.Export</p>\n\n<p><a href=\"https://www.go4worldbusiness.com/suppliers/agriculture-bags.html\">Supplier Of Agriculture Bags</a><br />\n<a href=\"https://www.go4worldbusiness.com/suppliers/importing-exporting.html\">Service Provider Of Importing/Exporting</a></p>\n', 'active', 'Active', '2020-12-22', '2020-12-22 11:44:13'),
(8, 0, 3, '', '\nGarden Grow Bags\n', '\nGarden Grow Bags\n', 'ProDuct3.png', '<p>HDPE, LDPE bags LOng Life,\n\nSupplier Of Agriculture Bags</p>\n', '<p>HDPE, LDPE bags LOng Life,\n\nSupplier Of Agriculture Bags</p>\n', 'active', 'Active', '2020-12-22', '2020-12-22 11:44:13'),
(9, 0, 3, '', '\nShrink Wrap Reusable Pallet Cover Hood Bag\n', '\nShrink Wrap Reusable Pallet Cover Hood Bag\n', 'ProDuct3.png', 'Supplier From Shouguang, Shandong, China', '<p>Pallet Shrink Wrap bags are the quick and easy way to shrink wrap a pallet before transport. Outfit your skid with 4 or 5 mil, clear shrink bags designed to keep shipments safe and visible.can be used to bundle multiple unit packs such as bottles, cans, tins, drums, cartons, sacks etc, while our heat shrinkable bags provide excellent protection from dust, water and other contaminants. Load your pallet and then cover it from the top down with a pallet shrink bag (install the bag upside down), so the bag completely covers the load. Make a vertical pleat or two to neatly reduce any extra material. At the bottom (at the pallet), take the excess bag and cuff it around the base of the pallet. Pallet Shrink Bag Features and Benefits: * Plastic</p>\n', 'active', 'Active', '2020-12-22', '2020-12-22 11:44:13'),
(10, 0, 3, '', ' \nCoco Peat\n', ' \nCoco Peat\n', 'ProDuct3.png', '<p>Supplier From Chilaw, Sri Lanka</p>\n', '<p>Coco coir bags.Export</p>\n\n<p><a href=\"https://www.go4worldbusiness.com/suppliers/agriculture-bags.html\">Supplier Of Agriculture Bags</a><br />\n<a href=\"https://www.go4worldbusiness.com/suppliers/importing-exporting.html\">Service Provider Of Importing/Exporting</a></p>\n', 'active', 'Active', '2020-12-22', '2020-12-22 11:44:13'),
(11, 0, 3, '', '\nGarden Grow Bags\n', '\nGarden Grow Bags\n', 'ProDuct3.png', '<p>HDPE, LDPE bags LOng Life,\n\nSupplier Of Agriculture Bags</p>\n', '<p>HDPE, LDPE bags LOng Life,\n\nSupplier Of Agriculture Bags</p>\n', 'active', 'Active', '2020-12-22', '2020-12-22 11:44:13'),
(12, 0, 3, '', '\nShrink Wrap Reusable Pallet Cover Hood Bag\n', '\nShrink Wrap Reusable Pallet Cover Hood Bag\n', 'ProDuct3.png', 'Supplier From Shouguang, Shandong, China', '<p>Pallet Shrink Wrap bags are the quick and easy way to shrink wrap a pallet before transport. Outfit your skid with 4 or 5 mil, clear shrink bags designed to keep shipments safe and visible.can be used to bundle multiple unit packs such as bottles, cans, tins, drums, cartons, sacks etc, while our heat shrinkable bags provide excellent protection from dust, water and other contaminants. Load your pallet and then cover it from the top down with a pallet shrink bag (install the bag upside down), so the bag completely covers the load. Make a vertical pleat or two to neatly reduce any extra material. At the bottom (at the pallet), take the excess bag and cuff it around the base of the pallet. Pallet Shrink Bag Features and Benefits: * Plastic</p>\n', 'active', 'Active', '2020-12-22', '2020-12-22 11:44:13'),
(13, 0, 4, '', '  Sekar Coir', '  Sekar Coir', 'ProDuct3.png', '<p>Supplier From Salem, Tamil Nadu, India</p>\n', '<p>Coco coir bags.Export</p>\n\n<p><a href=\"https://www.go4worldbusiness.com/suppliers/agriculture-bags.html\">Supplier Of Agriculture Bags</a><br />\n<a href=\"https://www.go4worldbusiness.com/suppliers/importing-exporting.html\">Service Provider Of Importing/Exporting</a></p>\n', 'active', 'Active', '2020-12-22', '2020-12-22 11:44:13'),
(14, 0, 4, '', '\nGarden Grow Bags\n', '\nGarden Grow Bags\n', 'ProDuct3.png', '<p>HDPE, LDPE bags LOng Life,\n\nSupplier Of Agriculture Bags</p>\n', '<p>HDPE, LDPE bags LOng Life,\n\nSupplier Of Agriculture Bags</p>\n', 'active', 'Active', '2020-12-22', '2020-12-22 11:44:13'),
(15, 0, 4, '', '\nShrink Wrap Reusable Pallet Cover Hood Bag\n', '\nShrink Wrap Reusable Pallet Cover Hood Bag\n', 'ProDuct3.png', 'Supplier From Shouguang, Shandong, China', '<p>Pallet Shrink Wrap bags are the quick and easy way to shrink wrap a pallet before transport. Outfit your skid with 4 or 5 mil, clear shrink bags designed to keep shipments safe and visible.can be used to bundle multiple unit packs such as bottles, cans, tins, drums, cartons, sacks etc, while our heat shrinkable bags provide excellent protection from dust, water and other contaminants. Load your pallet and then cover it from the top down with a pallet shrink bag (install the bag upside down), so the bag completely covers the load. Make a vertical pleat or two to neatly reduce any extra material. At the bottom (at the pallet), take the excess bag and cuff it around the base of the pallet. Pallet Shrink Bag Features and Benefits: * Plastic</p>\n', 'active', 'Active', '2020-12-22', '2020-12-22 11:44:13'),
(16, 0, 4, '', ' \nCoco Peat\n', ' \nCoco Peat\n', 'ProDuct3.png', '<p>Supplier From Chilaw, Sri Lanka</p>\n', '<p>Coco coir bags.Export</p>\n\n<p><a href=\"https://www.go4worldbusiness.com/suppliers/agriculture-bags.html\">Supplier Of Agriculture Bags</a><br />\n<a href=\"https://www.go4worldbusiness.com/suppliers/importing-exporting.html\">Service Provider Of Importing/Exporting</a></p>\n', 'active', 'Active', '2020-12-22', '2020-12-22 11:44:13'),
(17, 0, 4, '', '\nGarden Grow Bags\n', '\nGarden Grow Bags\n', 'ProDuct3.png', '<p>HDPE, LDPE bags LOng Life,\n\nSupplier Of Agriculture Bags</p>\n', '<p>HDPE, LDPE bags LOng Life,\n\nSupplier Of Agriculture Bags</p>\n', 'active', 'Active', '2020-12-22', '2020-12-22 11:44:13'),
(18, 0, 4, '', '\nShrink Wrap Reusable Pallet Cover Hood Bag\n', '\nShrink Wrap Reusable Pallet Cover Hood Bag\n', 'ProDuct3.png', 'Supplier From Shouguang, Shandong, China', '<p>Pallet Shrink Wrap bags are the quick and easy way to shrink wrap a pallet before transport. Outfit your skid with 4 or 5 mil, clear shrink bags designed to keep shipments safe and visible.can be used to bundle multiple unit packs such as bottles, cans, tins, drums, cartons, sacks etc, while our heat shrinkable bags provide excellent protection from dust, water and other contaminants. Load your pallet and then cover it from the top down with a pallet shrink bag (install the bag upside down), so the bag completely covers the load. Make a vertical pleat or two to neatly reduce any extra material. At the bottom (at the pallet), take the excess bag and cuff it around the base of the pallet. Pallet Shrink Bag Features and Benefits: * Plastic</p>\n', 'active', 'Active', '2020-12-22', '2020-12-22 11:44:13'),
(19, 0, 5, '', '  Sekar Coir', '  Sekar Coir', 'ProDuct3.png', '<p>Supplier From Salem, Tamil Nadu, India</p>\n', '<p>Coco coir bags.Export</p>\n\n<p><a href=\"https://www.go4worldbusiness.com/suppliers/agriculture-bags.html\">Supplier Of Agriculture Bags</a><br />\n<a href=\"https://www.go4worldbusiness.com/suppliers/importing-exporting.html\">Service Provider Of Importing/Exporting</a></p>\n', 'active', 'Active', '2020-12-22', '2020-12-22 11:44:13'),
(20, 0, 5, '', '\nGarden Grow Bags\n', '\nGarden Grow Bags\n', 'ProDuct3.png', '<p>HDPE, LDPE bags LOng Life,\n\nSupplier Of Agriculture Bags</p>\n', '<p>HDPE, LDPE bags LOng Life,\n\nSupplier Of Agriculture Bags</p>\n', 'active', 'Active', '2020-12-22', '2020-12-22 11:44:13'),
(21, 0, 5, '', '\nShrink Wrap Reusable Pallet Cover Hood Bag\n', '\nShrink Wrap Reusable Pallet Cover Hood Bag\n', 'ProDuct3.png', 'Supplier From Shouguang, Shandong, China', '<p>Pallet Shrink Wrap bags are the quick and easy way to shrink wrap a pallet before transport. Outfit your skid with 4 or 5 mil, clear shrink bags designed to keep shipments safe and visible.can be used to bundle multiple unit packs such as bottles, cans, tins, drums, cartons, sacks etc, while our heat shrinkable bags provide excellent protection from dust, water and other contaminants. Load your pallet and then cover it from the top down with a pallet shrink bag (install the bag upside down), so the bag completely covers the load. Make a vertical pleat or two to neatly reduce any extra material. At the bottom (at the pallet), take the excess bag and cuff it around the base of the pallet. Pallet Shrink Bag Features and Benefits: * Plastic</p>\n', 'active', 'Active', '2020-12-22', '2020-12-22 11:44:13'),
(22, 0, 5, '', ' \nCoco Peat\n', ' \nCoco Peat\n', 'ProDuct3.png', '<p>Supplier From Chilaw, Sri Lanka</p>\n', '<p>Coco coir bags.Export</p>\n\n<p><a href=\"https://www.go4worldbusiness.com/suppliers/agriculture-bags.html\">Supplier Of Agriculture Bags</a><br />\n<a href=\"https://www.go4worldbusiness.com/suppliers/importing-exporting.html\">Service Provider Of Importing/Exporting</a></p>\n', 'active', 'Active', '2020-12-22', '2020-12-22 11:44:13'),
(23, 0, 5, '', '\nGarden Grow Bags\n', '\nGarden Grow Bags\n', 'ProDuct3.png', '<p>HDPE, LDPE bags LOng Life,\n\nSupplier Of Agriculture Bags</p>\n', '<p>HDPE, LDPE bags LOng Life,\n\nSupplier Of Agriculture Bags</p>\n', 'active', 'Active', '2020-12-22', '2020-12-22 11:44:13'),
(24, 0, 5, '', '\nShrink Wrap Reusable Pallet Cover Hood Bag\n', '\nShrink Wrap Reusable Pallet Cover Hood Bag\n', 'ProDuct3.png', 'Supplier From Shouguang, Shandong, China', '<p>Pallet Shrink Wrap bags are the quick and easy way to shrink wrap a pallet before transport. Outfit your skid with 4 or 5 mil, clear shrink bags designed to keep shipments safe and visible.can be used to bundle multiple unit packs such as bottles, cans, tins, drums, cartons, sacks etc, while our heat shrinkable bags provide excellent protection from dust, water and other contaminants. Load your pallet and then cover it from the top down with a pallet shrink bag (install the bag upside down), so the bag completely covers the load. Make a vertical pleat or two to neatly reduce any extra material. At the bottom (at the pallet), take the excess bag and cuff it around the base of the pallet. Pallet Shrink Bag Features and Benefits: * Plastic</p>\n', 'active', 'Active', '2020-12-22', '2020-12-22 11:44:13'),
(25, 0, 6, '', '  Sekar Coir', '  Sekar Coir', 'ProDuct3.png', '<p>Supplier From Salem, Tamil Nadu, India</p>\n', '<p>Coco coir bags.Export</p>\n\n<p><a href=\"https://www.go4worldbusiness.com/suppliers/agriculture-bags.html\">Supplier Of Agriculture Bags</a><br />\n<a href=\"https://www.go4worldbusiness.com/suppliers/importing-exporting.html\">Service Provider Of Importing/Exporting</a></p>\n', 'active', 'Active', '2020-12-22', '2020-12-22 11:44:13'),
(26, 0, 6, '', '\nGarden Grow Bags\n', '\nGarden Grow Bags\n', 'ProDuct3.png', '<p>HDPE, LDPE bags LOng Life,\n\nSupplier Of Agriculture Bags</p>\n', '<p>HDPE, LDPE bags LOng Life,\n\nSupplier Of Agriculture Bags</p>\n', 'active', 'Active', '2020-12-22', '2020-12-22 11:44:13'),
(27, 0, 6, '', '\nShrink Wrap Reusable Pallet Cover Hood Bag\n', '\nShrink Wrap Reusable Pallet Cover Hood Bag\n', 'ProDuct3.png', 'Supplier From Shouguang, Shandong, China', '<p>Pallet Shrink Wrap bags are the quick and easy way to shrink wrap a pallet before transport. Outfit your skid with 4 or 5 mil, clear shrink bags designed to keep shipments safe and visible.can be used to bundle multiple unit packs such as bottles, cans, tins, drums, cartons, sacks etc, while our heat shrinkable bags provide excellent protection from dust, water and other contaminants. Load your pallet and then cover it from the top down with a pallet shrink bag (install the bag upside down), so the bag completely covers the load. Make a vertical pleat or two to neatly reduce any extra material. At the bottom (at the pallet), take the excess bag and cuff it around the base of the pallet. Pallet Shrink Bag Features and Benefits: * Plastic</p>\n', 'active', 'Active', '2020-12-22', '2020-12-22 11:44:13'),
(28, 0, 6, '', ' \nCoco Peat\n', ' \nCoco Peat\n', 'ProDuct3.png', '<p>Supplier From Chilaw, Sri Lanka</p>\n', '<p>Coco coir bags.Export</p>\n\n<p><a href=\"https://www.go4worldbusiness.com/suppliers/agriculture-bags.html\">Supplier Of Agriculture Bags</a><br />\n<a href=\"https://www.go4worldbusiness.com/suppliers/importing-exporting.html\">Service Provider Of Importing/Exporting</a></p>\n', 'active', 'Active', '2020-12-22', '2020-12-22 11:44:13'),
(29, 0, 6, '', '\nGarden Grow Bags\n', '\nGarden Grow Bags\n', 'ProDuct3.png', '<p>HDPE, LDPE bags LOng Life,\n\nSupplier Of Agriculture Bags</p>\n', '<p>HDPE, LDPE bags LOng Life,\n\nSupplier Of Agriculture Bags</p>\n', 'active', 'Active', '2020-12-22', '2020-12-22 11:44:13'),
(30, 0, 6, '', '\nShrink Wrap Reusable Pallet Cover Hood Bag\n', '\nShrink Wrap Reusable Pallet Cover Hood Bag\n', 'ProDuct3.png', 'Supplier From Shouguang, Shandong, China', '<p>Pallet Shrink Wrap bags are the quick and easy way to shrink wrap a pallet before transport. Outfit your skid with 4 or 5 mil, clear shrink bags designed to keep shipments safe and visible.can be used to bundle multiple unit packs such as bottles, cans, tins, drums, cartons, sacks etc, while our heat shrinkable bags provide excellent protection from dust, water and other contaminants. Load your pallet and then cover it from the top down with a pallet shrink bag (install the bag upside down), so the bag completely covers the load. Make a vertical pleat or two to neatly reduce any extra material. At the bottom (at the pallet), take the excess bag and cuff it around the base of the pallet. Pallet Shrink Bag Features and Benefits: * Plastic</p>\n', 'active', 'Active', '2020-12-22', '2020-12-22 11:44:13'),
(31, 0, 7, '', '  Sekar Coir', '  Sekar Coir', 'ProDuct3.png', '<p>Supplier From Salem, Tamil Nadu, India</p>\n', '<p>Coco coir bags.Export</p>\n\n<p><a href=\"https://www.go4worldbusiness.com/suppliers/agriculture-bags.html\">Supplier Of Agriculture Bags</a><br />\n<a href=\"https://www.go4worldbusiness.com/suppliers/importing-exporting.html\">Service Provider Of Importing/Exporting</a></p>\n', 'active', 'Active', '2020-12-22', '2020-12-22 11:44:13'),
(32, 0, 7, '', '\nGarden Grow Bags\n', '\nGarden Grow Bags\n', 'ProDuct3.png', '<p>HDPE, LDPE bags LOng Life,\n\nSupplier Of Agriculture Bags</p>\n', '<p>HDPE, LDPE bags LOng Life,\n\nSupplier Of Agriculture Bags</p>\n', 'active', 'Active', '2020-12-22', '2020-12-22 11:44:13'),
(33, 0, 7, '', '\nShrink Wrap Reusable Pallet Cover Hood Bag\n', '\nShrink Wrap Reusable Pallet Cover Hood Bag\n', 'ProDuct3.png', 'Supplier From Shouguang, Shandong, China', '<p>Pallet Shrink Wrap bags are the quick and easy way to shrink wrap a pallet before transport. Outfit your skid with 4 or 5 mil, clear shrink bags designed to keep shipments safe and visible.can be used to bundle multiple unit packs such as bottles, cans, tins, drums, cartons, sacks etc, while our heat shrinkable bags provide excellent protection from dust, water and other contaminants. Load your pallet and then cover it from the top down with a pallet shrink bag (install the bag upside down), so the bag completely covers the load. Make a vertical pleat or two to neatly reduce any extra material. At the bottom (at the pallet), take the excess bag and cuff it around the base of the pallet. Pallet Shrink Bag Features and Benefits: * Plastic</p>\n', 'active', 'Active', '2020-12-22', '2020-12-22 11:44:13'),
(34, 0, 7, '', ' \nCoco Peat\n', ' \nCoco Peat\n', 'ProDuct3.png', '<p>Supplier From Chilaw, Sri Lanka</p>\n', '<p>Coco coir bags.Export</p>\n\n<p><a href=\"https://www.go4worldbusiness.com/suppliers/agriculture-bags.html\">Supplier Of Agriculture Bags</a><br />\n<a href=\"https://www.go4worldbusiness.com/suppliers/importing-exporting.html\">Service Provider Of Importing/Exporting</a></p>\n', 'active', 'Active', '2020-12-22', '2020-12-22 11:44:13'),
(35, 0, 7, '', '\nGarden Grow Bags\n', '\nGarden Grow Bags\n', 'ProDuct3.png', '<p>HDPE, LDPE bags LOng Life,\n\nSupplier Of Agriculture Bags</p>\n', '<p>HDPE, LDPE bags LOng Life,\n\nSupplier Of Agriculture Bags</p>\n', 'active', 'Active', '2020-12-22', '2020-12-22 11:44:13'),
(36, 0, 7, '', '\nShrink Wrap Reusable Pallet Cover Hood Bag\n', '\nShrink Wrap Reusable Pallet Cover Hood Bag\n', 'ProDuct3.png', 'Supplier From Shouguang, Shandong, China', '<p>Pallet Shrink Wrap bags are the quick and easy way to shrink wrap a pallet before transport. Outfit your skid with 4 or 5 mil, clear shrink bags designed to keep shipments safe and visible.can be used to bundle multiple unit packs such as bottles, cans, tins, drums, cartons, sacks etc, while our heat shrinkable bags provide excellent protection from dust, water and other contaminants. Load your pallet and then cover it from the top down with a pallet shrink bag (install the bag upside down), so the bag completely covers the load. Make a vertical pleat or two to neatly reduce any extra material. At the bottom (at the pallet), take the excess bag and cuff it around the base of the pallet. Pallet Shrink Bag Features and Benefits: * Plastic</p>\n', 'active', 'Active', '2020-12-22', '2020-12-22 11:44:13'),
(37, 0, 148, '', 'BP-F102 BASIN MOUNTED SENSOR FAUCET', 'asd', 'amazon.png', '<p>asd</p>\r\n', '<p>asd</p>\r\n', 'active', 'Active', '2020-12-22', '2020-12-22 12:43:26'),
(39, 2, 6, 'asd', 'TEst', 'AZxA', '', '<p>asd</p>\r\n', '<p>asd</p>\r\n', 'active', 'Active', '2021-01-01', '2021-01-01 09:40:03');

-- --------------------------------------------------------

--
-- Table structure for table `requirement`
--

CREATE TABLE `requirement` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `vid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `description` text NOT NULL,
  `date_created` date NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requirement`
--

INSERT INTO `requirement` (`id`, `pid`, `vid`, `uid`, `description`, `date_created`, `date_modified`) VALUES
(40, 38, 2, 1, '{\"user_name\":\"asd\",\"user_email\":\"asds@asd.asd\",\"requirement\":\"asd\"}', '2021-01-01', '2021-01-01 09:41:03'),
(41, 37, 0, 1, '{\"user_name\":\"asd\",\"user_email\":\"asd@asd.asd\",\"requirement\":\"asd\"}', '2021-01-01', '2021-01-01 09:41:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_token` text NOT NULL,
  `oauth_provider` int(11) NOT NULL,
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

INSERT INTO `users` (`id`, `user_token`, `oauth_provider`, `user_name`, `user_email`, `user_password`, `user_phone`, `user_image`, `user_description`, `user_type`, `user_status`, `user_verified`, `user_login`, `user_logout`, `date_created`, `date_modified`) VALUES
(1, '9337402c-7ee2-8403-9619-fee51ad34043', 0, 'CUstomer', 'user@gmail.com', '202cb962ac59075b964b07152d234b70', 0, '', '', 'user', 'active', 'verified', NULL, NULL, '0000-00-00', '2020-12-22 04:25:37'),
(2, '9337402c-7ee2-8403-9619-fee51ad34043', 0, 'vendor', 'vendor@gmail.com', '202cb962ac59075b964b07152d234b70', 0, '', '', 'vendor', 'active', 'verified', NULL, NULL, '0000-00-00', '2020-12-19 05:35:30'),
(3, '9337402c-7ee2-8403-9619-fee51ad34043', 0, 'admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 0, '', '', 'admin', 'active', 'verified', NULL, NULL, '0000-00-00', '2020-12-19 05:35:30');

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
-- Indexes for table `requirement`
--
ALTER TABLE `requirement`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `requirement`
--
ALTER TABLE `requirement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
