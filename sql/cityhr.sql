-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2021 at 08:34 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cityhr`
--

-- --------------------------------------------------------

--
-- Table structure for table `business_units`
--

CREATE TABLE `business_units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Profile` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HideShow` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RegId` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `UpdId` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_units`
--

INSERT INTO `business_units` (`id`, `Name`, `Description`, `Profile`, `Token`, `Status`, `HideShow`, `RegId`, `UpdId`, `created_at`, `updated_at`) VALUES
(1, 'AYA ( Banking Group )', NULL, 'f30b301d9d61c762847f453f75344333.jpg', '313408534b9736713f7f33026445ddfc', '1', '1', '1', NULL, '2021-04-02 04:05:26', '2021-04-02 04:05:26'),
(2, 'Hotel Max ( Hotel & Resorts )', 'U Yae Khae Str 343 Mayangone Yangon,Myanmar', '4e65016bb914df6fb251633e6c82a3f5.png', '58be4ff546cb912f63366ed1561a302b', '1', '1', '1', NULL, '2021-04-02 04:34:05', '2021-04-02 04:34:05'),
(3, 'Max Myanmar ( Construction  )', 'No. 123, Alanpya Pagoda Road,\r\nDagon Township Yangon, Myanmar.\r\n(95-1) 8255819 – 21, 8255823 – 32, 8255834\r\ninfo@maxmyanmargroup.com', '24da08acb104a6d74931dbe8fc4e9a45.png', 'b0a412d304de9c4168a7bfd49458acae', '1', '1', '1', NULL, '2021-04-02 04:47:21', '2021-04-02 04:47:21'),
(4, 'Max Energy ( Max Myanmar Group )', 'No. 123, Alanpya Pagoda Road, Dagon Township, Yangon, Myanmar.', '22ae6270e98b8bd7bb64e24e9cfdb5ed.jpg', '7becb28ebbb9dd2e25f8d4e2e06a4679', '1', '1', '1', NULL, '2021-04-02 04:49:51', '2021-04-02 04:49:51'),
(5, 'Cement ( Max Myanmar )', 'Max Myanmar Manufacturing Co., Ltd. is one of the private cement manufacturers in Myanmar', 'e9579773fd4d17a6461b09cc402f9829.jpg', '969f475929209b47147fc7a8c610dde3', '1', '1', '1', NULL, '2021-04-02 04:54:41', '2021-04-02 04:54:41');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `JobReqId` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DepartmentID` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Position` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NrcNumber` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `JobType` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ExpectedSalary` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DateOfplace` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MaritalStatus` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Region` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Experience` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Reason` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Religion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `License` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Gender` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CvFormUpload` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HideShow` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RegId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `UpdId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `JobReqId`, `DepartmentID`, `Name`, `Position`, `NrcNumber`, `JobType`, `ExpectedSalary`, `DateOfplace`, `MaritalStatus`, `Region`, `Experience`, `Reason`, `Religion`, `License`, `Gender`, `CvFormUpload`, `Description`, `Token`, `HideShow`, `Status`, `RegId`, `UpdId`, `created_at`, `updated_at`) VALUES
(1, '8', '3', 'Han Lyn Htun', 'Facebook Boosting ', '23/SANCH(N)9348', 'Fullstack', '$2500', 'YANGON', 'Single', 'Myanmar', '3+Year', 'REASON TO JOIN', 'Buddhism', 'Yes', 'Male', '50a75573281f7913480af0f6191d1ee4.xlsx', '<p>This is my textarea to be replaced with CKEditor 4.</p>', '5435779e046d90805f1382aa7111f1fe', '1', '1', '15', NULL, '2021-03-25 08:17:08', '2021-03-25 08:17:08'),
(2, '8', '3', 'Chan Myae Aung', 'Senior Facebook DM', '23/PaKhaKa(N)9482', 'Work From Home', '$3600', 'YANGON', 'Divorced', 'Myanmar', '2+Year', 'REASON TO JOIN', 'Buddhism', 'Yes', 'Male', 'a8bacaf363bd3dccadeeedce862ea098.xlsx', '<p>This is my textarea to be replaced with CKEditor 4.</p>', 'e3cada98da3ecd8b3e08626fcbaceade', '1', '1', '15', NULL, '2021-03-25 08:19:18', '2021-03-25 08:19:18'),
(3, '6', '4', 'Ma Phoo Phoo', 'Junior LCCI ( LV 3 )', '12/MAYAKAN)0923', 'Full Time', '$500', 'YANGON', 'Single', 'Myanmar', '1+Year', 'REASON TO JOIN', 'Buddhism', 'Yes', 'Female', '3786f83b6160619c763cdd4523f0f0c3.docx', '<p>This is my textarea to be replaced with CKEditor 4.</p>', 'cfc410b3c76766f6d3f938d306125830', '1', '1', '15', NULL, '2021-03-25 08:36:33', '2021-03-25 08:36:33'),
(4, '9', '3', 'U Ba Nyo', 'Adsense Senior', '8/MAYAKA(N)48373', 'Full Time', '$500', 'YANGON', 'Single', 'Myanmar', '3+Year', 'REASON TO JOIN', 'Buddhism', 'Yes', 'Male', '3c8488a100878296379b6515a28ba46d.pdf', '<p>This is my textarea to be replaced with CKEditor 4.</p>', '05cb7246a0846d728a18519398388ba6', '1', '1', '15', NULL, '2021-04-05 07:06:29', '2021-04-05 07:06:29');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `RegId` int(11) DEFAULT NULL,
  `UpdId` int(11) DEFAULT NULL,
  `Name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FaxNumber` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Website` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TradingName` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `RegNo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `City` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `State` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Postal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CompanyAddress` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PersonName` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Position` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PersonAddress` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Vision` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mission` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Profile` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `HideShow` int(11) NOT NULL,
  `Status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `RegId`, `UpdId`, `Name`, `Phone`, `FaxNumber`, `Website`, `TradingName`, `Email`, `RegNo`, `City`, `State`, `Postal`, `CompanyAddress`, `PersonName`, `Position`, `PersonAddress`, `Vision`, `Mission`, `Note`, `Profile`, `Token`, `HideShow`, `Status`, `created_at`, `updated_at`) VALUES
(1, 14, NULL, 'MBT ( Internet Service Provider )', '094204582308', '4928908', 'http://www.mbt.com.mm/', 'Best ISP In Myanmar', 'admin@mbt.com.mm', 'KJFD8F09F', 'Yangon', 'Yangon', '11181', 'U Yae Khae Str 343 Mayangone Yangon,Myanmar', 'Ko Myo Min Aung', 'CEO', 'U Yae Khae Str 343 Mayangone Yangon,Myanmar', 'Vision To be growth In ( IT Field In Myanmar )', 'Mission To be growth In ( IT Field In Myanmar )', 'A paragraph is a ,', 'ab07c02654207832f0db351bb7c35e37.jpeg', '6010b2b30530c584377c5f7b2bd23ea7', 1, 1, '2021-03-18 08:24:36', '2021-03-18 08:24:36'),
(2, 1, NULL, 'Mingalar Taung Nwaunt', '09948434934', '348K43K', 'https://mbt.com.mm', 'Best ISP In Myanmar', 'city@hr.com.mm', 'KFDS233L23', 'Yangon', 'Yangon', '11181', 'U Yae Khae Str 343 Mayangone Yangon,Myanmar', 'U Kaung Lu', 'CEO', 'U Yae Khae Str 343 Mayangone Yangon,Myanmar', 'Vision To be growth In ( IT Field In Myanmar )', 'Mission To be growth In ( IT Field In Myanmar )', 'A paragraph is a ,', '6fd71b8290b5e98b8e70656c4be53763.jpg', '1f669566574be3d0b2b9ce3878580b7e', 1, 1, '2021-03-21 03:39:30', '2021-03-21 03:39:30');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `RegId` int(11) DEFAULT NULL,
  `UpdId` int(11) DEFAULT NULL,
  `BuID` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `StationID` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Initial` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Profile` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` int(11) NOT NULL,
  `Token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `HideShow` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `RegId`, `UpdId`, `BuID`, `StationID`, `Name`, `Phone`, `Email`, `Note`, `Initial`, `Profile`, `Status`, `Token`, `HideShow`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '1', '1', 'IT ( Support )', NULL, NULL, 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea.', 'Min ga la par', NULL, 1, '903bccbd19923d1912f7326b6bc1afd8', 1, '2021-03-16 09:16:02', '2021-04-02 05:54:03'),
(2, 1, 14, '1', '1', 'HR ( DEPARTMENT )', NULL, NULL, 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.\r\n                                        Though not required by the syntax of any language,', 'Something .....', NULL, 1, '626642e18a48e3d772242d4b19c2acb9', 1, '2021-03-16 09:24:43', '2021-03-18 10:59:13'),
(3, 14, 14, '1', '1', 'Marketing ( Digital )', NULL, NULL, 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.\r\n                                        Though not required by the syntax of any language,', 'Marketing ............', NULL, 1, '635f290907cba59f967af9986151fa51', 1, '2021-03-18 11:00:30', '2021-03-23 10:37:57'),
(4, 14, 1, '1', '1', 'Accountant', NULL, NULL, 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.\r\n                                        Though not required by the syntax of any language,', 'Acc Department', NULL, 1, '2660b489a57f9f917c438d8b8bb950a6', 1, '2021-03-23 09:24:16', '2021-04-02 05:54:23'),
(5, 14, 1, '1', '1', 'Security', NULL, NULL, 'A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.', 'A paragraph consists', NULL, 1, 'ae993ba186dd6aa7c36159e8bcd7e2bc', 1, '2021-03-23 10:33:22', '2021-04-02 05:55:04');

-- --------------------------------------------------------

--
-- Table structure for table `employees_info`
--

CREATE TABLE `employees_info` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Profile` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `No` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `UserId` int(255) DEFAULT NULL,
  `Name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NameMM` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CardId` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `JobField` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PositionLevel` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Designation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `JobStatus` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `WageType` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Grade` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `JoinDate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `WorkShift` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `WorkSchedule` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ResontoJoin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PhoneNumber` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Section` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Department` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BusinessUnit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Station` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OfficeEmail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ReportTo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NotificationEmail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OfficePhone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DateOfBirth` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BirthOfPlace` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Gender` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MaritalStatus` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BloodGroup` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DateMarriage` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nationality` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Religion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Race` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personalEmail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NrcNumber` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NrcNumberMM` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PassportNumber` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PassportExpiration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DrivingLicenseExpiration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HaveDrivingLicense` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DrivingLicenseNumber` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `StrongPoint` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `WeakPoint` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HaveFatalAccident` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FatalAccidentDescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HaveMajorSurgery` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MajorSurgeryDescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HaveHospitalization` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HospitalizationDescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CurrentAddress` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CurrentAddressMM` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PermanentAddress` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PermanentAddressMM` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DiscType` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DiscTestDate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Information` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RegId` int(11) DEFAULT NULL,
  `UpdId` int(11) DEFAULT NULL,
  `Token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `HideShow` int(11) NOT NULL,
  `Status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees_info`
--

INSERT INTO `employees_info` (`id`, `Profile`, `No`, `UserId`, `Name`, `NameMM`, `Type`, `CardId`, `JobField`, `PositionLevel`, `Designation`, `JobStatus`, `WageType`, `Grade`, `JoinDate`, `WorkShift`, `WorkSchedule`, `ResontoJoin`, `PhoneNumber`, `Section`, `Department`, `BusinessUnit`, `Station`, `OfficeEmail`, `ReportTo`, `NotificationEmail`, `OfficePhone`, `DateOfBirth`, `BirthOfPlace`, `Gender`, `MaritalStatus`, `BloodGroup`, `DateMarriage`, `Nationality`, `Religion`, `Race`, `personalEmail`, `NrcNumber`, `NrcNumberMM`, `PassportNumber`, `PassportExpiration`, `DrivingLicenseExpiration`, `HaveDrivingLicense`, `DrivingLicenseNumber`, `StrongPoint`, `WeakPoint`, `HaveFatalAccident`, `FatalAccidentDescription`, `HaveMajorSurgery`, `MajorSurgeryDescription`, `HaveHospitalization`, `HospitalizationDescription`, `CurrentAddress`, `CurrentAddressMM`, `PermanentAddress`, `PermanentAddressMM`, `DiscType`, `DiscTestDate`, `Information`, `RegId`, `UpdId`, `Token`, `HideShow`, `Status`, `created_at`, `updated_at`) VALUES
(1, '64a0d168a1ded82802fffed587f8dac6.jpg', '001', NULL, 'San win aung', 'mm ( san win )', 'Contract', 'EMP001', 'Administration', 'Department Head', 'Senior Accountant', 'Permanent', 'Dayly Salary Structure', '1', NULL, NULL, 'No', NULL, '0997463833', 'Software Section', NULL, 'Corporate Supporting', 'Yangon Head Oﬃce', 'aungmyohtike@infosoft.com', NULL, 'No', '0138748748', NULL, NULL, 'Male', 'Married', 'A+B', NULL, 'Myanmar', 'Buddhism', 'Bamar', 'city@gmail.com', '8/PaKhaKa(N)112233', '၈/ပကန/(နိုင်)၁၁၂၂၃၃', '1/2/2021', NULL, NULL, 'No', NULL, NULL, NULL, 'No', NULL, 'No', 'No', NULL, NULL, 'Yangon', 'ရန်ကုန်', 'Myanmar', 'မြန်မာနိုင်ငံ', NULL, NULL, 'This is my textarea to be replaced with CKEditor 4.', 17, 17, '40c4fb2b39a9ab2ef99e4ff3396e2cc7', 1, 1, '2021-04-07 09:02:03', '2021-04-09 03:28:09'),
(2, '094c2d55e0a2ad4de60c4bcf0d8b01d5.jpg', 'H853', NULL, 'Chandeler', NULL, 'Contract', 'EMP-H853', 'Education & Training', 'Senior Staff', 'Senior Accountant', 'Permanent', 'Dayly Salary Structure', '4', '2021-04-09', NULL, 'No', NULL, '09450458393', 'Software Section', NULL, 'Corporate Supporting', 'Yangon Head Oﬃce', 'aungmyohtike@infosoft.com', NULL, 'No', '09450154812', '2021-04-09', NULL, 'Female', 'Married', 'A', NULL, 'Myanmar', 'Buddhism', 'Bamar', 'city@gmail.com', '8/PaKhaKa(N)112233', '၈/ပကန/(နိုင်)၁၁၂၂၃၃', '1/2/2021', NULL, '2021-04-16', 'No', NULL, NULL, NULL, 'No', NULL, 'No', 'No', NULL, NULL, 'Yangon', 'ရန်ကုန်', 'Myanmar', 'မြန်မာနိုင်ငံ', NULL, '2021-04-09', 'This is my textarea to be replaced with CKEditor 4.', 17, 17, 'afde0099efab2ea109c1642f6c87c103', 1, 1, '2021-04-09 03:10:39', '2021-04-09 03:11:27');

-- --------------------------------------------------------

--
-- Table structure for table `employee_bank_accounts`
--

CREATE TABLE `employee_bank_accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `EmployeeID` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BankName` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BranchName` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BranchCode` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AccountTitle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AccountNumber` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AccountType` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PayAccountPhoneNo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RegId` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `UpdId` int(11) DEFAULT NULL,
  `Token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `HideShow` int(11) NOT NULL,
  `Status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_contracts`
--

CREATE TABLE `employee_contracts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ContractID` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EmployeeName` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EmployeeID` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ContractType` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ContractTitle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EmployeeDesignation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ContractStartDate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ContractEndDate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EmployeeType` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EmployeeCategory` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ApprovedDate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Department` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EmployeeGrade` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Branch` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CreatedBy` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CreatedDate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ApprovedPerson` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AdditionalNote` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ContractDescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RegId` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `UpdId` int(11) DEFAULT NULL,
  `Token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `HideShow` int(11) NOT NULL,
  `Status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_languages`
--

CREATE TABLE `employee_languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Language` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EmployeeID` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SpeakingLevel` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ReadingLevel` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `WritingLevel` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RegId` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `UpdId` int(11) DEFAULT NULL,
  `Token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `HideShow` int(11) NOT NULL,
  `Status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_languages`
--

INSERT INTO `employee_languages` (`id`, `Language`, `EmployeeID`, `SpeakingLevel`, `ReadingLevel`, `WritingLevel`, `RegId`, `UpdId`, `Token`, `HideShow`, `Status`, `created_at`, `updated_at`) VALUES
(1, 'Myanmar', '1', '1', '5', '5', '17', NULL, '60f971831746cfc78655fe5ff6c5672a', 1, 1, '2021-04-09 01:38:10', '2021-04-09 01:38:10'),
(2, 'English', '1', '4', '3', '2', '17', NULL, '1e69e161bd37dbb813fda3cadd6a46ce', 1, 1, '2021-04-09 01:38:29', '2021-04-09 01:38:29');

-- --------------------------------------------------------

--
-- Table structure for table `employee_ssb`
--

CREATE TABLE `employee_ssb` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `EmployeeID` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SSBNo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EmployerNo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SSBFile` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HideShow` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_ssb`
--

INSERT INTO `employee_ssb` (`id`, `EmployeeID`, `SSBNo`, `EmployerNo`, `SSBFile`, `Token`, `HideShow`, `Status`, `created_at`, `updated_at`) VALUES
(1, '2', 'KD89', '8D8FJK', 'e49a9ed83936b3ed007271c863f437dc.pdf', '243ccba85390bd62c275fcf0f594db59', '1', '1', '2021-04-09 07:35:27', '2021-04-09 07:35:27');

-- --------------------------------------------------------

--
-- Table structure for table `employee_trainings`
--

CREATE TABLE `employee_trainings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `EmployeeID` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `JobField` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TrainingTitle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OrganizationName` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Location` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TrainingStartDate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TrainingEndDate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RegId` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `UpdId` int(11) DEFAULT NULL,
  `Token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `HideShow` int(11) NOT NULL,
  `Status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_trainings`
--

INSERT INTO `employee_trainings` (`id`, `EmployeeID`, `JobField`, `TrainingTitle`, `OrganizationName`, `Location`, `TrainingStartDate`, `TrainingEndDate`, `RegId`, `UpdId`, `Token`, `HideShow`, `Status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Administration', 'Myanmar', 'Aung Myo', 'Myanmar', '2021-04-09', '2021-04-21', '17', NULL, '9f368940e105284fbcbccf379218a3ff', 1, 1, '2021-04-09 01:35:00', '2021-04-09 01:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `emplyoee_socials`
--

CREATE TABLE `emplyoee_socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `EmployeeID` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Twitter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Facebook` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LinkedIn` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Skype` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HideShow` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emplyoee_socials`
--

INSERT INTO `emplyoee_socials` (`id`, `EmployeeID`, `Twitter`, `Facebook`, `LinkedIn`, `Skype`, `Token`, `HideShow`, `Status`, `created_at`, `updated_at`) VALUES
(2, '1', 'https://www.twitter.com/yellhtutcom', 'https://www.facebook.com/yellhtutcom', 'https://www.twitter.com/yellhtutcom', NULL, 'c69b36ac217c2c3fcf1d65da80db6e60', '1', '1', '2021-04-08 08:44:22', '2021-04-08 08:44:22'),
(3, '2', NULL, NULL, NULL, NULL, 'a0ae14729bef539c605dea06e3e12dde', '1', '1', '2021-04-09 03:29:27', '2021-04-09 03:29:27');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

CREATE TABLE `holidays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `StationID` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `StartDate` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `EndDate` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `NewsDescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RegId` int(11) DEFAULT NULL,
  `UpdId` int(11) DEFAULT NULL,
  `Token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `HideShow` int(11) NOT NULL,
  `Status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `holidays`
--

INSERT INTO `holidays` (`id`, `Title`, `StationID`, `StartDate`, `EndDate`, `NewsDescription`, `Note`, `RegId`, `UpdId`, `Token`, `HideShow`, `Status`, `created_at`, `updated_at`) VALUES
(1, 'Thingyan Holiday ..', '[\"2\",\"3\"]', '2021-03-18 12:00', '2021-03-23 12:00', '<p>This is my textarea to be replaced with CKEditor 4.</p>', NULL, NULL, 1, 'f172fb035bb3b4ed5b5a3ea3e7b511ac', 1, 1, '2021-03-18 02:16:25', '2021-04-02 05:57:26'),
(2, 'Vacation ( Bangkok )', '[\"3\"]', '2021-03-21 00:00', '2021-03-22 00:00', '<p>This is my textarea to be replaced with CKEditor 4.</p>', NULL, NULL, 14, 'f8e1e60cde62db0ba2b86c0287795b8c', 1, 1, '2021-03-21 04:13:52', '2021-03-21 09:40:26');

-- --------------------------------------------------------

--
-- Table structure for table `job_requesting`
--

CREATE TABLE `job_requesting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ApprovalId` int(11) DEFAULT NULL,
  `Title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Position` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Location` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RangeFrom` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RangeTo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DepartmentID` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DueDate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EmployeeType` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Experience` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NumberOfEmplyoee` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Gender` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Age` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DrivingLicense` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HideShow` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RegId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `UpdId` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_requesting`
--

INSERT INTO `job_requesting` (`id`, `ApprovalId`, `Title`, `Position`, `Location`, `RangeFrom`, `RangeTo`, `DepartmentID`, `DueDate`, `EmployeeType`, `Experience`, `NumberOfEmplyoee`, `qualification`, `Gender`, `Age`, `DrivingLicense`, `Description`, `HideShow`, `Token`, `Status`, `RegId`, `UpdId`, `created_at`, `updated_at`) VALUES
(4, 1, 'NodeJS Senior Developer', 'Senior Fullstack Developer ( 5 Yr Experience )', 'Mingala Done Town Ship', '$800', '$1000', '2', '2021-03-09', 'Full Time', NULL, '5', '[\"Basic Education\",\"Bachelor Degree\",\"Master Degree\"]', '[\"Male\",\"Female\"]', NULL, 'Need', '<p>This is my textarea to be replaced with CKEditor 4.</p>', '1', 'e58faf4d45b4fe67fb2c5e9d2ffe2df7', 'Pending', '15', NULL, '2021-03-23 11:13:15', '2021-03-23 11:13:15'),
(5, 1, 'Genaral Worker', 'Room Services', 'Mingala Done Town Ship', '$80', '$300', '5', '2021-03-24', 'Part Time', NULL, '3', '[\"Basic Education\",\"Certificate\"]', '[\"Male\",\"Female\"]', NULL, 'NoNeed', '<p>This is my textarea to be replaced with CKEditor 4.</p>', '1', '80a98726736f243b00b5dca44ed3ed17', 'Pending', '14', NULL, '2021-03-23 22:47:07', '2021-03-23 22:47:07'),
(6, 1, 'LCCI Accountant Lv 3', 'Senior Accountant ( 3 Yr Experience )', 'Mingala Done Town Ship', '$1800', '$3500', '4', '2021-03-24', 'Fullstack', NULL, '2', '[\"Diploma\",\"Bachelor Degree\",\"Master Degree\"]', '[\"Male\",\"Female\"]', NULL, 'NoNeed', '<p>This is my textarea to be replaced with CKEditor 4.</p>', '1', '5491429f4056bb85979b9b172f6c97d9', 'Done', '14', NULL, '2021-03-24 00:55:39', '2021-03-25 08:36:33'),
(7, 1, 'Security With( BD )', 'Guard', 'Mingala Done Town Ship', '$800', '$2000', '5', '2021-03-25', 'Part Time', NULL, '6', '[\"Basic Education\",\"Certificate\",\"Under Graduate\"]', '[\"Male\"]', NULL, 'Need', '<p>This is my textarea to be replaced with CKEditor 4.</p>', '1', 'd3cb81ee541ed418e47c1c0a6b8b0376', 'Done', '14', '1', '2021-03-25 02:28:01', '2021-04-02 10:19:30'),
(8, 21, 'Facebook Page Boosting', 'Senior DM', 'Mingala Done Town Ship', '$1800', '$3000', '3', '2021-03-25', 'Fullstack', NULL, '3', '[\"Diploma\",\"Bachelor Degree\",\"Master Degree\"]', '[\"Male\"]', NULL, NULL, '<p>This is my textarea to be replaced with CKEditor 4.</p>', '1', 'f3beae6fd92a5c2aae55f71c782011bd', 'Done', '17', '17', '2021-03-25 08:13:17', '2021-04-06 22:56:38'),
(9, 15, 'Housekeeper', '( 5 Yr Experience )', 'Mingala Done Town Ship', '$300', '$350', '3', '2021-04-02', 'Full Time', NULL, '2', '[\"Basic Education\",\"Certificate\"]', '[\"Female\"]', NULL, NULL, '<p>This is my textarea to be replaced with CKEditor 4.</p>', '1', '52f4f2d63b510fc0708b35c357c414aa', 'Done', '17', '17', '2021-04-02 10:28:52', '2021-04-06 08:02:39');

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

CREATE TABLE `meeting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `CompanyId` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `StationId` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DepartmentId` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Participant` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `StartTimestemp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EndTimestemp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Location` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Types` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Reached` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RegId` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `UpdId` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meeting`
--

INSERT INTO `meeting` (`id`, `Title`, `CompanyId`, `StationId`, `DepartmentId`, `Participant`, `StartTimestemp`, `EndTimestemp`, `Location`, `Notes`, `Types`, `Reached`, `RegId`, `UpdId`, `created_at`, `updated_at`) VALUES
(1, 'Company Event', NULL, NULL, '[\"3\",\"2\"]', 'U Aung Thein ( CEO )', '2021-03-22 12:00', '2021-03-24 12:00', 'Have you ever used your terminal to uninstall your programs in your ubuntu machine? It is not that hard! Terminal is real power and you need to learn it.', '<p>Have you ever used your terminal to uninstall your programs in your ubuntu machine? Practice, practice and practice and one day</p>', 'regular', '5', NULL, NULL, '2021-03-22 07:20:52', '2021-03-22 07:20:52'),
(2, 'Custom Event', NULL, NULL, NULL, 'U Aung Thein ( CEO )', NULL, NULL, 'Have you ever used your terminal to uninstall your programs in your ubuntu machine? It is not that hard! Terminal is real power and you need to learn it.', '<p>Have you ever used your terminal to uninstall your programs in your ubuntu machine? Practice, practice and practice and one day</p>', 'custom', '3', NULL, NULL, '2021-03-22 07:21:30', '2021-03-22 07:21:30'),
(4, 'Company Event', NULL, NULL, '', 'U Aung Thein ( CEO )', '2021-03-10 12:00', '2021-03-17 12:00', 'Have you ever used your terminal to uninstall your programs in your ubuntu machine? It is not that hard! Terminal is real power and you need to learn it.', '<p>Have you ever used your terminal to uninstall your programs in your ubuntu machine? Practice, practice and practice and one day</p>', 'custom', '2', NULL, NULL, '2021-03-23 05:08:46', '2021-03-23 05:08:46'),
(5, 'Company Event', NULL, NULL, '[\"2\",\"1\"]', 'U Aung Thein ( CEO )', '2021-03-02 12:00', '2021-03-24 12:00', 'Have you ever used your terminal to uninstall your programs in your ubuntu machine? It is not that hard! Terminal is real power and you need to learn it.', '<p>Have you ever used your terminal to uninstall your programs in your ubuntu machine? Practice, practice and practice and one day</p>', 'regular', '1', NULL, NULL, '2021-03-23 05:09:18', '2021-03-23 05:09:18'),
(6, 'Company Event', NULL, NULL, '[\"5\",\"2\"]', 'U Aung Thein ( CEO )', '2021-03-26 15:00', '2021-03-27 12:00', 'Have you ever used your terminal to uninstall your programs in your ubuntu machine? It is not that hard! Terminal is real power and you need to learn it.', 'Have you ever used your terminal to uninstall your programs in your ubuntu machine? Practice, practice and practice and one day', 'regular', '2', NULL, NULL, '2021-03-25 22:06:07', '2021-03-25 22:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2021_03_04_121618_create_companies_table', 2),
(6, '2021_03_02_170015_create_stations_table', 3),
(9, '2021_03_05_110349_create_departments_table', 4),
(11, '2021_03_10_133346_create_office_order_table', 5),
(12, '2021_03_14_084923_create_roles_table', 6),
(13, '2021_03_16_101524_create_meetings_table', 7),
(14, '2021_03_17_165148_create_notifications_table', 8),
(15, '2021_03_17_031610_create_holidays_table', 9),
(16, '2021_03_19_154948_create_jobs_table', 10),
(17, '2021_03_24_052625_create_candidates_table', 11),
(18, '2021_03_31_140623_create_organization_news_table', 12),
(19, '2021_04_01_153609_create_business_units_table', 13),
(22, '2021_04_07_053149_create_emplyoee_socials_table', 15),
(23, '2021_04_02_121901_create_employees_table', 16),
(24, '2021_04_05_090104_create_employee_qualifications_table', 16),
(25, '2021_04_05_114715_create_employee_work_experiences_table', 16),
(27, '2021_04_08_153355_create_ssb_table', 17),
(28, '2021_04_08_072747_create_employee_trainings_table', 18),
(29, '2021_04_08_135755_create_employee_languages_table', 18),
(32, '2021_04_06_155139_create_employee_contracts_table', 19),
(33, '2021_04_09_112936_create_employee_bank_accounts_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Model` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MId` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UId` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SeenUnseen` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Reject` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Approved` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Meet` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `Model`, `MId`, `Type`, `UId`, `SeenUnseen`, `Description`, `Reject`, `Approved`, `Meet`, `Status`, `Token`, `created_at`, `updated_at`) VALUES
(1, NULL, '1', 'regular', '17', 'Unseen', NULL, NULL, NULL, NULL, '1', '35f15f36049e70278d632aa9d3c4e346', '2021-03-22 07:20:52', '2021-03-22 07:20:52'),
(2, NULL, '1', 'regular', '18', 'Unseen', NULL, NULL, NULL, NULL, '1', '5c744d33f2090d65aea1467e39286f33', '2021-03-22 07:20:52', '2021-03-22 07:20:52'),
(3, NULL, '1', 'regular', '19', 'Unseen', NULL, NULL, NULL, NULL, '1', 'e6ae57a933f4536d07cd2901323446f8', '2021-03-22 07:20:52', '2021-03-22 07:20:52'),
(4, NULL, '1', 'regular', '20', 'Unseen', NULL, NULL, NULL, NULL, '1', 'f53f95e4c337624e6036478a0d39a2d1', '2021-03-22 07:20:52', '2021-03-22 07:20:52'),
(5, NULL, '1', 'regular', '15', 'Unseen', NULL, NULL, NULL, NULL, '1', '308347ed7433c399fdf6a2e55a062146', '2021-03-22 07:20:52', '2021-03-22 07:20:52'),
(6, NULL, '2', 'custom', '19', 'Unseen', NULL, NULL, NULL, NULL, '1', '050a1785752862aee205bfb6cfeab2b2', '2021-03-22 07:21:30', '2021-03-22 07:21:30'),
(7, NULL, '2', 'custom', '17', 'Unseen', NULL, NULL, NULL, NULL, '1', '5ac6025b785e75b26efa8e1fbb022a20', '2021-03-22 07:21:30', '2021-03-22 07:21:30'),
(8, NULL, '2', 'custom', '15', 'Unseen', NULL, NULL, NULL, NULL, '1', 'f2156fb2550e7bb6a752802802aeaceb', '2021-03-22 07:21:30', '2021-03-22 07:21:30'),
(9, NULL, '3', 'custom', '19', 'Unseen', NULL, NULL, NULL, NULL, '1', '087ee24f492bdca037c8923ba3a1ccd6', '2021-03-23 05:06:39', '2021-03-23 05:06:39'),
(10, NULL, '3', 'custom', '17', 'Unseen', NULL, NULL, NULL, NULL, '1', 'af08be39724a3dda3027cb42c9c61ec8', '2021-03-23 05:06:39', '2021-03-23 05:06:39'),
(11, NULL, '4', 'custom', '19', 'Unseen', NULL, NULL, NULL, NULL, '1', '937a1d45b0e2926ed349e2d71304d450', '2021-03-23 05:08:46', '2021-03-23 05:08:46'),
(12, NULL, '4', 'custom', '17', 'Unseen', NULL, NULL, NULL, NULL, '1', 'bd7d11a03d54242329e9e4500e6793d4', '2021-03-23 05:08:46', '2021-03-23 05:08:46'),
(13, NULL, '5', 'regular', '15', 'Unseen', NULL, NULL, NULL, NULL, '1', '9567dd4dec71e6c6eb5c60fd6280778d', '2021-03-23 05:09:18', '2021-03-23 05:09:18'),
(14, NULL, '6', 'regular', '15', 'Unseen', NULL, NULL, NULL, NULL, '1', 'c128002fd1ca12e96437101cf66835b5', '2021-03-25 22:06:07', '2021-03-25 22:06:07'),
(15, NULL, '6', 'regular', '21', 'Unseen', NULL, NULL, NULL, NULL, '1', '62a5213cb005c10ef1418f698d23c617', '2021-03-25 22:06:07', '2021-03-25 22:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `office_order`
--

CREATE TABLE `office_order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `u_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RegId` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `UpdId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `HideShow` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `office_order`
--

INSERT INTO `office_order` (`id`, `u_id`, `Title`, `Description`, `RegId`, `UpdId`, `Token`, `Status`, `HideShow`, `created_at`, `updated_at`) VALUES
(1, '17', 'Focus on your work', 'When you are coding don\'t use social media ..........', '1', NULL, '513f0594dcb1578426a0334c4b9b6cf8', '1', '1', '2021-04-02 07:11:29', '2021-04-02 07:11:29'),
(2, '19', 'Focus on your work', 'When you are coding don\'t use social media ..........', '1', NULL, '3d482f715413690a9bcc35cb46b5480f', '1', '1', '2021-04-02 07:11:29', '2021-04-02 07:11:29');

-- --------------------------------------------------------

--
-- Table structure for table `organization_news`
--

CREATE TABLE `organization_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BranchId` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RegId` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `UpdId` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HideShow` int(11) DEFAULT NULL,
  `Token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `organization_news`
--

INSERT INTO `organization_news` (`id`, `Title`, `Description`, `BranchId`, `RegId`, `UpdId`, `HideShow`, `Token`, `Status`, `created_at`, `updated_at`) VALUES
(1, '🎉🍾 Our company has 45%  benefited 🍾🎉', 'This is my textarea to be replaced with CKEditor 4.', '3', '1', NULL, 1, 'c5eb72802e6e848b1dc1c03b42e88c83', '1', '2021-04-01 08:08:33', '2021-04-01 08:08:33'),
(2, 'Promotion', '<p>This is my textarea to be replaced with CKEditor 4.</p>', '2', '1', NULL, 1, '18d65b869772c01c0f210162b0207d1a', '1', '2021-04-01 08:09:31', '2021-04-01 08:09:31'),
(3, 'Promotion', '<p>This is my textarea to be replaced with CKEditor 4.</p>', '3', '1', NULL, 1, 'bb500017662cd671722d8f0a8112c109', '1', '2021-04-01 08:09:31', '2021-04-01 08:09:31'),
(4, '🎉🍾 Our company has 45%  benefited 🍾🎉', 'This is my textarea to be replaced with CKEditor 4.', '2', '1', NULL, 1, 'f16d5905a4f0a74b1434c6ee97a64d34', '1', '2021-04-02 07:17:18', '2021-04-02 07:17:18'),
(5, '🎉🍾 Our company has 45%  benefited 🍾🎉', 'This is my textarea to be replaced with CKEditor 4.', '3', '1', NULL, 1, '371a55b4ea1004f4e6d6473ad6f449c9', '1', '2021-04-02 07:17:18', '2021-04-02 07:17:18');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qualifications`
--

CREATE TABLE `qualifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `EmployeeID` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Degree` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Subject` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Institute` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Grade` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GraduationYear` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AttachedFile` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FromYear` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ToYear` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Highest` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HideShow` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RegId` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `UpdId` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qualifications`
--

INSERT INTO `qualifications` (`id`, `EmployeeID`, `Degree`, `Subject`, `Institute`, `Grade`, `GraduationYear`, `AttachedFile`, `FromYear`, `ToYear`, `Highest`, `Token`, `HideShow`, `Status`, `RegId`, `UpdId`, `created_at`, `updated_at`) VALUES
(1, '007', 'MaHar', 'Myanmar', 'IT', '5', '1990', '4b9ac9ff54c9501c878caed3bad7f1e4.pdf', NULL, '2021-04-14', NULL, 'b41d3aef94a91898ffebcc05c5a4d77c', '1', '1', '17', NULL, '2021-04-07 08:44:47', '2021-04-07 08:44:47'),
(2, '242', 'Diploma In UK', 'Social Science', 'Stanford IT', '1', '2006', NULL, '2006-04-25', '2021-04-15', NULL, '93a176af5d53af1ff0d4ea7f94dcb408', '1', '1', '17', '17', '2021-04-07 08:47:17', '2021-04-09 04:23:55'),
(3, '007', 'Diploma In USA', 'Computer Science', 'IT', '.8.', '1990', '96bb667fb1341e70692076a86b25a083.pdf', '2021-04-14', '2021-04-14', NULL, '091336eb6f40b16667b76a20798b825a', '1', '1', '17', NULL, '2021-04-09 04:19:10', '2021-04-09 04:19:10');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Permission` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `Name`, `Permission`, `Token`, `Status`, `created_at`, `updated_at`) VALUES
(1, 'CEO( ADMIN )', '[\"role\",\"account\",\"company\",\"branch\",\"department\",\"meeting\",\"job\",\"office\",\"holiday\"]', '8a5011adfc849d76c80d7141f355871c', 1, '2021-03-14 10:22:11', '2021-03-18 02:12:01'),
(2, 'Manager ( HR )', '[\"account\",\"meeting\",\"job\",\"candidate\",\"office\",\"holiday\"]', 'c36140d7d4733ff12da41ef972c44401', 1, '2021-03-15 02:14:43', '2021-03-23 23:18:53'),
(3, 'Super Visor ( HEAD )', '[\"account\",\"department\",\"meeting\",\"job\",\"candidate\",\"organization_news\",\"office\",\"holiday\"]', '25096d7fd86f796e664e2bec050a80cc', 1, '2021-03-18 07:34:40', '2021-04-02 10:26:17'),
(4, 'Staff', '[\"office\",\"holiday\"]', '960ec76d71a6f5bfea03c9d81521ce59', 1, '2021-03-18 07:35:49', '2021-04-08 00:55:53'),
(5, 'Finance', '[\"account\",\"department\",\"meeting\",\"job\",\"candidate\",\"office\",\"holiday\"]', 'a9a7d9494cd2dd2143a88730b454027f', 1, '2021-03-25 21:17:48', '2021-03-25 21:17:48');

-- --------------------------------------------------------

--
-- Table structure for table `stations`
--

CREATE TABLE `stations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `BuID` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `StationType` int(11) DEFAULT NULL,
  `StationName` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ParentStation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CurrencyUse` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CurrencySymbol` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PhoneNumber` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `FaxNumber` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `EmailAddress` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `WebSite` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AdditionalNote` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` int(11) NOT NULL,
  `RegId` int(11) DEFAULT NULL,
  `UpdId` int(11) DEFAULT NULL,
  `HideShow` int(11) NOT NULL,
  `Token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stations`
--

INSERT INTO `stations` (`id`, `BuID`, `StationType`, `StationName`, `ParentStation`, `CurrencyUse`, `CurrencySymbol`, `Address`, `PhoneNumber`, `FaxNumber`, `EmailAddress`, `WebSite`, `AdditionalNote`, `images`, `Status`, `RegId`, `UpdId`, `HideShow`, `Token`, `created_at`, `updated_at`) VALUES
(1, '1', NULL, 'Hlaing Branch ( 860 )', NULL, 'Dollar', '$', NULL, '09945534535', '4928908', 'admin@mbt.com.mm', 'http://www.mbt.com.mm', NULL, 'b415fc694863f5ae02876df57a6b2fc7.jpeg', 1, 14, 14, 1, 'cf7ac94883ed6bfa6b17f2575f520664', '2021-03-18 10:26:59', '2021-03-18 10:56:43'),
(2, '1', NULL, '8 Mile ( E504 Branch )', NULL, 'Dollar', '$', NULL, '0942094823', '238908', '8mile@mbt.com.mm', 'http://www.mbt.com.mm', NULL, 'f7c00d6f31ae2b1038406eb880d64b9d.jpg', 1, 14, 1, 1, '64e0a7192753597b0f8c90ec5d4389fa', '2021-03-18 10:55:50', '2021-04-02 05:27:33'),
(3, '1', NULL, 'Min Galar Taung Nwaunt', NULL, 'Dollar', 'mm', NULL, '099534833', '4928908', 'admin@mbt.com.mm', 'http://www.mbt.com.mm/', NULL, '6e321ffe2b498260941235104c941f62.jpg', 1, 14, 1, 1, '3494b0f6ec61092e112945234281ff26', '2021-03-21 03:43:38', '2021-04-02 05:33:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `reg_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upd_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name_id`, `department_id`, `name`, `phone`, `email`, `password`, `parent_id`, `reg_id`, `upd_id`, `profile`, `role`, `status`, `token`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '1CKDFHR9FT', NULL, 'City HR Admin', '09950845893', 'admin@cityhr.com', '$2y$10$p62BeFvhpwfUprrkzmzoBOajgfPkZZD55dh9hkQFJGja7fhRIosFu', NULL, NULL, NULL, NULL, 'admin', 1, '6947fcdf1b360771efcabb4e4e99988a', NULL, NULL, '2021-03-01 10:39:03', '2021-03-01 10:39:03'),
(14, '2G3DP', NULL, 'Steven Htut', '0942012938', 'htut4@gamil.com', '$2y$10$Xe1w2fToClcRK0lW.DrMRebX6mxPhLrf9cM2tfX5dQEQdUMsgz5de', NULL, '1', NULL, NULL, 'client', 1, '4037bab7560bcacbd754d533817a0817', NULL, NULL, '2021-03-15 03:49:34', '2021-03-15 03:49:34'),
(15, '15W3DD', '2', 'Ko Win Maung', '0997434348', 'kwm2@gmail.com', '$2y$10$xfoqHWLU5buXenWQh5f5a.ED2LiTCaeLj3Jppfbc0SLAZK7MQmZxq', NULL, '1', NULL, NULL, '2', 1, '2ea7a19f62abd234e74aea8a3c63d65c', NULL, NULL, '2021-03-15 04:30:35', '2021-03-15 04:30:35'),
(17, '16I3DD', '3', 'San Win Aung', '0995034534', 'swa4@gmail.com', '$2y$10$WrwHCpySJMrSOjR6.WnAmeEyAAqGNj/kXJgU6Wp5Q4Kq4BXhr.Gxy', NULL, '14', NULL, NULL, '3', 1, '50d08984096faf77f24b21e6af8bc4d2', NULL, NULL, '2021-03-18 11:04:52', '2021-03-18 11:04:52'),
(18, '18N3DO', '3', 'Jon Jone', '0998474834', 'jone4@gmail.com', '$2y$10$bGkjBy22i9MYjVW9T7Pz8OTml0SMNsmHCqaeNsGF5bSPLPl0UY8M2', NULL, '1', NULL, NULL, '4', 1, 'b3d70fd39e5233b32c66ad0a24cb6ccd', NULL, NULL, '2021-03-19 06:02:34', '2021-03-19 06:02:34'),
(19, '19E3DF', '3', 'Michel Chandeler', '0984534587', 'chan4@gmail.com', '$2y$10$VpgT9rDUZbkgwz.19QlUMuFCoayLXzfZjp6PZA28djQ98dZVS4Dfi', NULL, '1', NULL, NULL, '4', 1, 'b9bcfd1c22c333f759196cb7185ab473', NULL, NULL, '2021-03-19 06:04:11', '2021-03-19 06:04:11'),
(20, '20M3DG', '3', 'Justin Win Maung', '0945053459', 'justin4@gmail.com', '$2y$10$TueY11dmTvBv2e7Vr.NWb.h.uMongLQi9xiSSbyQjJ4K1B1jBmmp2', NULL, '1', NULL, NULL, '4', 1, '17d664d735350de174b698c542be538b', NULL, NULL, '2021-03-19 06:05:07', '2021-03-19 06:05:07'),
(21, '21W3DB', '2', 'Daw Ei Khaing', '0942034424', 'ei4@gmail.com', '$2y$10$mPRkHDG/JLjuOvFVUxmJtOH22dipE08BWKaK5Qsg4lUMgBcdJWGzm', NULL, '15', NULL, NULL, '4', 1, '800267a5a7f7dd7478c758c19bf0d750', NULL, NULL, '2021-03-25 08:22:33', '2021-03-25 08:22:33');

-- --------------------------------------------------------

--
-- Table structure for table `work_experiences`
--

CREATE TABLE `work_experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `EmployeeID` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OrganizationName` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `JobDesignation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `JobField` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `JobStartDate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `JobEndDate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `StartingSalary` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EndingSalary` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TypeOfBusiness` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OtherBenefit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ReasonForLeaving` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Period` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `JobDescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HideShow` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RegId` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `UpdId` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business_units`
--
ALTER TABLE `business_units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees_info`
--
ALTER TABLE `employees_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_bank_accounts`
--
ALTER TABLE `employee_bank_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_contracts`
--
ALTER TABLE `employee_contracts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_languages`
--
ALTER TABLE `employee_languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_ssb`
--
ALTER TABLE `employee_ssb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_trainings`
--
ALTER TABLE `employee_trainings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emplyoee_socials`
--
ALTER TABLE `emplyoee_socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holidays`
--
ALTER TABLE `holidays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_requesting`
--
ALTER TABLE `job_requesting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `office_order`
--
ALTER TABLE `office_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organization_news`
--
ALTER TABLE `organization_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `qualifications`
--
ALTER TABLE `qualifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stations`
--
ALTER TABLE `stations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `work_experiences`
--
ALTER TABLE `work_experiences`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business_units`
--
ALTER TABLE `business_units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employees_info`
--
ALTER TABLE `employees_info`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee_bank_accounts`
--
ALTER TABLE `employee_bank_accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_contracts`
--
ALTER TABLE `employee_contracts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_languages`
--
ALTER TABLE `employee_languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee_ssb`
--
ALTER TABLE `employee_ssb`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee_trainings`
--
ALTER TABLE `employee_trainings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `emplyoee_socials`
--
ALTER TABLE `emplyoee_socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `holidays`
--
ALTER TABLE `holidays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job_requesting`
--
ALTER TABLE `job_requesting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `meeting`
--
ALTER TABLE `meeting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `office_order`
--
ALTER TABLE `office_order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `organization_news`
--
ALTER TABLE `organization_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `qualifications`
--
ALTER TABLE `qualifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stations`
--
ALTER TABLE `stations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `work_experiences`
--
ALTER TABLE `work_experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
