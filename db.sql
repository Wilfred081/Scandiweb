-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 03, 2023 at 10:59 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `db_scandiweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `sn` int(25) NOT NULL AUTO_INCREMENT,
  `sku` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` varchar(255) NOT NULL,
  `type` varchar(25) NOT NULL,
  `details` varchar(255) NOT NULL,
  PRIMARY KEY (`sn`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

