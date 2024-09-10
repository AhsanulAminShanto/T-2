-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2024 at 05:10 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dmedic`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_t`
--

CREATE TABLE `appointment_t` (
  `appointment_id` int(11) NOT NULL,
  `dd` int(2) NOT NULL,
  `mm` int(2) NOT NULL,
  `yyyy` int(4) NOT NULL,
  `atime` time NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment_t`
--

INSERT INTO `appointment_t` (`appointment_id`, `dd`, `mm`, `yyyy`, `atime`, `patient_id`, `doctor_id`) VALUES
(1, 15, 7, 2023, '10:00:00', 1, 1),
(2, 16, 7, 2023, '11:00:00', 2, 2),
(3, 17, 7, 2023, '09:30:00', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `campaign_t`
--

CREATE TABLE `campaign_t` (
  `campaign_id` int(11) NOT NULL,
  `campaign_name` varchar(100) NOT NULL,
  `timeSlot` varchar(50) NOT NULL,
  `organization` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `hospital_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `campaign_t`
--

INSERT INTO `campaign_t` (`campaign_id`, `campaign_name`, `timeSlot`, `organization`, `country`, `hospital_id`) VALUES
(1, 'Health Awareness', '09:00-11:00', 'Health Org', 'USA', 1),
(2, 'Diabetes Checkup', '14:00-16:00', 'Wellness Inc.', 'UK', 2),
(3, 'Heart Health', '10:00-12:00', 'Heart Foundation', 'Canada', 3);

-- --------------------------------------------------------

--
-- Table structure for table `dailylog_t`
--

CREATE TABLE `dailylog_t` (
  `dailylog_id` int(11) NOT NULL,
  `dd` date NOT NULL,
  `mm` date NOT NULL,
  `yyyy` date NOT NULL,
  `bloodGlucoseLevel` decimal(5,2) NOT NULL,
  `insulin_dosage` decimal(5,2) NOT NULL,
  `medication_intake` varchar(255) NOT NULL,
  `physical_activity` text NOT NULL,
  `dietary_intake` text NOT NULL,
  `weight` decimal(5,2) NOT NULL,
  `symptomps` text NOT NULL,
  `BMI` decimal(5,2) NOT NULL,
  `blood_pressure` varchar(20) NOT NULL,
  `heart_rate` int(11) NOT NULL,
  `sleep_duration` decimal(4,2) NOT NULL,
  `water_intake` decimal(4,2) NOT NULL,
  `disease_id` int(11) NOT NULL,
  `risk_assessment_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `diagnostician_contact_t`
--

CREATE TABLE `diagnostician_contact_t` (
  `contact_number` int(11) NOT NULL,
  `diagnostician_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `diagnostician_mail_t`
--

CREATE TABLE `diagnostician_mail_t` (
  `email_address` int(11) NOT NULL,
  `diagnostician_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `diagnostician_t`
--

CREATE TABLE `diagnostician_t` (
  `diagnostician_id` int(11) NOT NULL,
  `diagnostician_name` varchar(100) NOT NULL,
  `specialty` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `license_number` varchar(50) NOT NULL,
  `qualifications` text NOT NULL,
  `years_of_experience` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dd` int(2) NOT NULL,
  `mm` int(2) NOT NULL,
  `yyyy` int(4) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `diagnostic_center_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `diagnostic_center_contact_t`
--

CREATE TABLE `diagnostic_center_contact_t` (
  `diagnostic_center_id` int(11) NOT NULL,
  `contact_information` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `diagnostic_center_t`
--

CREATE TABLE `diagnostic_center_t` (
  `diagnostic_center_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `houseNo` varchar(50) NOT NULL,
  `roadNo` varchar(50) NOT NULL,
  `areaName` varchar(100) NOT NULL,
  `diagnostic_center_type` varchar(50) NOT NULL,
  `operating_hours` varchar(50) NOT NULL,
  `number_of_diagnosticians` int(11) NOT NULL,
  `license_number` varchar(50) NOT NULL,
  `test_id` int(11) NOT NULL,
  `diagnostician_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `diagnostic_center_test_t`
--

CREATE TABLE `diagnostic_center_test_t` (
  `diagnostic_center_id` int(11) NOT NULL,
  `available_tests` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `disease_t`
--

CREATE TABLE `disease_t` (
  `disease_id` int(11) NOT NULL,
  `disease_name` varchar(100) NOT NULL,
  `disease_description` text NOT NULL,
  `disease_type` varchar(50) NOT NULL,
  `symptoms` text NOT NULL,
  `causes` text NOT NULL,
  `treatment_option` text NOT NULL,
  `prevention` text NOT NULL,
  `severity` varchar(50) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `contagious` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `disease_t`
--

INSERT INTO `disease_t` (`disease_id`, `disease_name`, `disease_description`, `disease_type`, `symptoms`, `causes`, `treatment_option`, `prevention`, `severity`, `duration`, `contagious`) VALUES
(1, 'Flu', 'Influenza virus infection', 'Viral', 'Fever, Cough, Sore throat', 'Influenza virus', 'Rest, Fluids, Medication', 'Vaccination', 'Moderate', '1-2 weeks', 'Yes'),
(2, 'Diabetes', 'Chronic condition with high blood sugar', 'Chronic', 'Increased thirst, Frequent urination', 'Genetics, Lifestyle', 'Insulin, Diet control', 'Healthy diet, Exercise', 'Severe', 'Lifetime', 'No'),
(3, 'Hypertension', 'High blood pressure', 'Chronic', 'Headache, Dizziness', 'Genetics, Diet', 'Medication, Lifestyle changes', 'Healthy diet, Regular exercise', 'Moderate', 'Lifetime', 'No'),
(4, 'Asthma', 'Chronic respiratory condition', 'Chronic', 'Wheezing, Shortness of breath', 'Genetics, Environment', 'Inhalers, Medication', 'Avoid triggers, Medication', 'Moderate', 'Variable', 'No'),
(5, 'COVID-19', 'Respiratory illness caused by SARS-CoV-2', 'Viral', 'Fever, Cough, Loss of taste', 'SARS-CoV-2', 'Rest, Fluids, Medication', 'Vaccination, Hygiene', 'Severe', '2-6 weeks', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `doctorregistrations`
--

CREATE TABLE `doctorregistrations` (
  `doctor_id` int(4) UNSIGNED ZEROFILL NOT NULL,
  `title` varchar(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `district` varchar(50) NOT NULL,
  `national_id` varchar(50) NOT NULL,
  `registration_number` varchar(50) NOT NULL,
  `doctor_type` varchar(50) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `approved` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctorregistrations`
--

INSERT INTO `doctorregistrations` (`doctor_id`, `title`, `first_name`, `last_name`, `dob`, `gender`, `district`, `national_id`, `registration_number`, `doctor_type`, `mobile_number`, `email`, `password`, `approved`) VALUES
(3030, 'Prof.', 'ODH', 'SAGOR', '1997-05-27', 'male', 'Noakhali', '2001001', '2001001', 'Metabolism', '0123930129', 'obidulhuq@gmail.com', '$2y$10$s0jjHjYtS/6JevW50HCRR.WU36wDdr6B/x27/1OjDZtGz/uMI5rva', 1),
(3031, 'Dr', 'rakib', 'khan', '2002-01-23', 'male', 'Dhaka', '524785268268', '5498852', 'Endocrinology', '0168845754', 'dw@gmail.com', '$2y$10$K5cUVQpFK/dxT5up8z2CoeySj/4z7Tz0gPfGuucfAjIj5zQuKtni.', 1),
(3032, 'Prof', 'md', 'rifat', '1999-12-07', 'male', 'Chattogram', '15685356565', '458976', 'Endocrinology &amp; Metabolism', '01763663998', 'rifat@gmail.com', '$2y$10$QDBHbTD6/UtERZ8f71QGvOqkhgI/PmJGs4jybcjqUHlouy0UxJse2', 1),
(3033, 'Prof. Dr.', 'MD', 'Akash', '1996-01-03', 'male', 'Gopalganj', '4575315687565', '984569', 'cardiac imaging specialists', '0168974567', 'akash@gmailcom', '$2y$10$HwvoW7XyOCNE/BgR8xyZ9eRGzCXscn/f6l0dgpCgFQMjFKbcXgyiS', 1),
(3034, 'Dr', 'rohan', 'rahman', '1999-12-15', 'male', 'Cox\'s Bazar', '1578664896', '145796', 'fetal cardiologists', '0194676682', 'rohan@gmail.com', '$2y$10$/ZS2AG9I/F/TdxpssG4nmOimnJ0p8xChvsh98BqHVhyBWpT601txG', 1),
(3035, 'Prof', 'Mithila', 'khan', '2001-03-24', 'female', 'Chattogram', '2015664632', '126489', 'cardiac imaging specialists', '01648796645', 'mithila@gmail.com', '$2y$10$f94iCScIwtRuX5nTCgQD4.tjN/6wBBz1gC4xHqyCDJiN8sbQqGUxG', 1),
(3036, 'Prof. Dr.', 'sadia', 'khanam', '2000-12-05', 'female', 'Barguna', '1567898546', '1265489', 'heart surgeons', '0126547993', 'sadia@gmail.com', '$2y$10$s1zmYAP8acg76Tyj3BMi3.1c3Ad6xDX3RPHbhvWrzTCyOP4jsHVQa', 1),
(3037, 'Dr', 'Rabbi', 'Sharkar', '1996-07-19', 'male', 'Feni', '15497864', '12548963', 'heart transplant specialists', '0164798521', 'rabbi@gmailcom', '$2y$10$.T3gXO47CLSClrl/XMGmuOrrcqcNjwfgWlVPAomZBsAMu679IGE/6', 1),
(3038, 'Prof. Dr.', 'md', 'roman', '1998-09-12', 'male', 'Barisal', '126589978899', '124578', 'electrophysiologists', '01645789', 'roma@gmailcom', '$2y$10$fnzTKj5BbVaZrIfyJBXn5.VQukOJdQ.4V8drTb49d/S4MbMtkRTCW', 1),
(3039, 'Prof', 'md', 'rhaman', '1995-07-08', 'male', 'Bagerhat', '124578986532', '234598', 'cardiac geneticists', '0132456987', 'rhaman@gmail.com', '$2y$10$.2X3I0g/3qotRi7yu6dhzebsb68Kg77oN70gRgpgGpO8qX6QZTa8S', 1),
(3040, 'Prof. Dr.', 'Md', 'Pagla', '2004-12-04', 'male', 'Satkhira', '12654789655478', '1264789', 'fetal cardiologists', '0165478932', 'pagla@gmail.com', '$2y$10$ya1xEBpRCnwds.wyaInFqugdi5fY7FPPyMvUeojT9nCgpX0ZkqGuK', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctorschedules`
--

CREATE TABLE `doctorschedules` (
  `doctorSchedulesId` int(3) UNSIGNED ZEROFILL NOT NULL,
  `doctor_id` int(4) UNSIGNED ZEROFILL DEFAULT NULL,
  `days_of_week` varchar(255) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `consulting_time` int(11) DEFAULT NULL,
  `fees` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctorschedules`
--

INSERT INTO `doctorschedules` (`doctorSchedulesId`, `doctor_id`, `days_of_week`, `from_date`, `to_date`, `start_time`, `end_time`, `consulting_time`, `fees`) VALUES
(501, 3030, 'sun,mon', '2024-07-16', '2024-07-23', '13:43:00', '17:43:00', 10, 1900.00),
(502, 3030, 'sun,mon,tue', '2024-07-16', '2024-07-23', '13:43:00', '17:43:00', 10, 1900.00);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_contact_t`
--

CREATE TABLE `doctor_contact_t` (
  `contact_number` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor_contact_t`
--

INSERT INTO `doctor_contact_t` (`contact_number`, `doctor_id`) VALUES
(2147483647, 1),
(2147483647, 2),
(2147483647, 3),
(2147483647, 4),
(2147483647, 5);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_fee_t`
--

CREATE TABLE `doctor_fee_t` (
  `doctor_id` int(11) NOT NULL,
  `consultation_fee` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor_fee_t`
--

INSERT INTO `doctor_fee_t` (`doctor_id`, `consultation_fee`) VALUES
(3, 100.00),
(4, 120.00),
(1, 150.00),
(5, 180.00),
(2, 200.00);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_mail_t`
--

CREATE TABLE `doctor_mail_t` (
  `email_address` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor_mail_t`
--

INSERT INTO `doctor_mail_t` (`email_address`, `doctor_id`) VALUES
(0, 1),
(0, 2),
(0, 3),
(0, 4),
(0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_t`
--

CREATE TABLE `doctor_t` (
  `doctor_id` int(11) NOT NULL,
  `doctor_name` varchar(100) NOT NULL,
  `specialty` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `license_number` varchar(50) NOT NULL,
  `qualifications` text NOT NULL,
  `years_of_experience` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `date_of_birth` date NOT NULL,
  `nationality` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor_t`
--

INSERT INTO `doctor_t` (`doctor_id`, `doctor_name`, `specialty`, `department`, `license_number`, `qualifications`, `years_of_experience`, `gender`, `date_of_birth`, `nationality`) VALUES
(1, 'Dr. Alice Green', 'Cardiology', 'Cardiology', 'L12345', 'MBBS, MD', 10, 'Female', '1980-01-01', 'USA'),
(2, 'Dr. Bob White', 'Neurology', 'Neurology', 'L12346', 'MBBS, MD', 15, 'Male', '1975-02-02', 'USA'),
(3, 'Dr. Carol Black', 'Pediatrics', 'Pediatrics', 'L12347', 'MBBS, MD', 12, 'Female', '1982-03-03', 'UK'),
(4, 'Dr. David Brown', 'Dermatology', 'Dermatology', 'L12348', 'MBBS, MD', 8, 'Male', '1985-04-04', 'UK'),
(5, 'Dr. Emma Jones', 'Orthopedics', 'Orthopedics', 'L12349', 'MBBS, MD', 20, 'Female', '1970-05-05', 'Canada');

-- --------------------------------------------------------

--
-- Table structure for table `drug_dosage_t`
--

CREATE TABLE `drug_dosage_t` (
  `drug_id` int(11) NOT NULL,
  `dosage_form` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drug_route_t`
--

CREATE TABLE `drug_route_t` (
  `drug_id` int(11) NOT NULL,
  `route_of_administration` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drug_strength_t`
--

CREATE TABLE `drug_strength_t` (
  `drug_id` int(11) NOT NULL,
  `strength` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drug_t`
--

CREATE TABLE `drug_t` (
  `drug_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `generic_name` varchar(100) NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `indications` int(11) NOT NULL,
  `side_effects` int(11) NOT NULL,
  `interactions` int(11) NOT NULL,
  `storage_instructions` text NOT NULL,
  `d_dd` date NOT NULL,
  `d_mm` date NOT NULL,
  `d_yyyy` date NOT NULL,
  `manufacturer` varchar(100) NOT NULL,
  `dd` date NOT NULL,
  `mm` date NOT NULL,
  `yyyy` date NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `prescription_requirement` tinyint(1) NOT NULL,
  `licence_num` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drug_t`
--

INSERT INTO `drug_t` (`drug_id`, `name`, `generic_name`, `brand_name`, `description`, `indications`, `side_effects`, `interactions`, `storage_instructions`, `d_dd`, `d_mm`, `d_yyyy`, `manufacturer`, `dd`, `mm`, `yyyy`, `price`, `prescription_requirement`, `licence_num`) VALUES
(1, 'Paracetamol', 'Acetaminophen', 'Tylenol', 'Pain reliever and fever reducer', 0, 0, 0, 'Store at room temperature', '0000-00-00', '0000-00-00', '0000-00-00', 'Pharma Inc.', '0000-00-00', '0000-00-00', '0000-00-00', 5.00, 0, 'LN12345'),
(2, 'Ibuprofen', 'Ibuprofen', 'Advil', 'Anti-inflammatory and pain reliever', 0, 0, 0, 'Store at room temperature', '0000-00-00', '0000-00-00', '0000-00-00', 'Health Corp.', '0000-00-00', '0000-00-00', '0000-00-00', 10.00, 0, 'LN12346'),
(3, 'Amoxicillin', 'Amoxicillin', 'Amoxil', 'Antibiotic', 0, 0, 0, 'Store in a refrigerator', '0000-00-00', '0000-00-00', '0000-00-00', 'MediPharma', '0000-00-00', '0000-00-00', '0000-00-00', 15.00, 0, 'LN12347'),
(4, 'Loratadine', 'Loratadine', 'Claritin', 'Antihistamine', 0, 0, 0, 'Store at room temperature', '0000-00-00', '0000-00-00', '0000-00-00', 'Allergy Co.', '0000-00-00', '0000-00-00', '0000-00-00', 8.00, 0, 'LN12348'),
(5, 'Omeprazole', 'Omeprazole', 'Prilosec', 'Proton pump inhibitor', 0, 0, 0, 'Store at room temperature', '0000-00-00', '0000-00-00', '0000-00-00', 'Gastro Ltd.', '0000-00-00', '0000-00-00', '0000-00-00', 12.00, 0, 'LN12349');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_contact_t`
--

CREATE TABLE `hospital_contact_t` (
  `hospital_id` int(11) NOT NULL,
  `contact_number` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospital_contact_t`
--

INSERT INTO `hospital_contact_t` (`hospital_id`, `contact_number`) VALUES
(1, '1234567890'),
(2, '1234567891'),
(3, '1234567892'),
(4, '1234567893'),
(5, '1234567894');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_mail`
--

CREATE TABLE `hospital_mail` (
  `hospital_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospital_mail`
--

INSERT INTO `hospital_mail` (`hospital_id`, `email`) VALUES
(5, 'contact@carehospital.com'),
(1, 'contact@generalhospital.com'),
(4, 'hello@wellnesscenter.com'),
(2, 'info@cityclinic.com'),
(3, 'support@healthplus.com');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_t`
--

CREATE TABLE `hospital_t` (
  `hospital_id` int(11) NOT NULL,
  `hospital_name` varchar(100) NOT NULL,
  `houseNo` varchar(200) NOT NULL,
  `rdNo` varchar(20) NOT NULL,
  `AreaName` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `dd` varchar(100) NOT NULL,
  `mm` varchar(100) NOT NULL,
  `yyyy` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospital_t`
--

INSERT INTO `hospital_t` (`hospital_id`, `hospital_name`, `houseNo`, `rdNo`, `AreaName`, `website`, `dd`, `mm`, `yyyy`, `type`) VALUES
(1, 'General Hospital', '101', '12A', 'City Center', 'www.generalhospital.com', '01', '01', '2000', 'Public'),
(2, 'City Clinic', '102', '13B', 'Downtown', 'www.cityclinic.com', '15', '02', '2005', 'Private'),
(3, 'Health Plus', '103', '14C', 'Suburb', 'www.healthplus.com', '20', '03', '2010', 'Public'),
(4, 'Wellness Center', '104', '15D', 'Midtown', 'www.wellnesscenter.com', '25', '04', '2015', 'Private'),
(5, 'Care Hospital', '105', '16E', 'Uptown', 'www.carehospital.com', '30', '05', '2020', 'Public');

-- --------------------------------------------------------

--
-- Table structure for table `medical_history_t`
--

CREATE TABLE `medical_history_t` (
  `medicalhistory_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `disease_id` int(11) NOT NULL,
  `risk_assessment_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `blood_glucose_level` varchar(50) NOT NULL,
  `medication_intake` varchar(50) NOT NULL,
  `physical_activity` varchar(50) NOT NULL,
  `dietary_intake` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `symptoms` text NOT NULL,
  `bmi` varchar(50) NOT NULL,
  `blood_pressure` varchar(50) NOT NULL,
  `heart_rate` varchar(50) NOT NULL,
  `sleep_duration` varchar(50) NOT NULL,
  `water_intake` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medical_history_t`
--

INSERT INTO `medical_history_t` (`medicalhistory_id`, `patient_id`, `doctor_id`, `disease_id`, `risk_assessment_id`, `start_date`, `end_date`, `blood_glucose_level`, `medication_intake`, `physical_activity`, `dietary_intake`, `weight`, `symptoms`, `bmi`, `blood_pressure`, `heart_rate`, `sleep_duration`, `water_intake`) VALUES
(1, 1, 1, 1, 1, '2023-01-01', '2023-06-01', '120 mg/dL', 'Metformin', '30 min walk', 'Balanced diet', '70 kg', 'Fatigue', '22.5', '120/80 mmHg', '72 bpm', '8 hours', '2 liters'),
(2, 2, 2, 2, 2, '2023-02-01', '2023-07-01', '110 mg/dL', 'Insulin', 'Jogging', 'Low-carb diet', '68 kg', 'Thirst', '21.5', '118/78 mmHg', '75 bpm', '7 hours', '2.5 liters'),
(3, 3, 3, 3, 3, '2023-03-01', '2023-08-01', '130 mg/dL', 'Glipizide', 'Cycling', 'High-protein diet', '75 kg', 'Blurred vision', '23.5', '122/80 mmHg', '70 bpm', '7.5 hours', '2 liters');

-- --------------------------------------------------------

--
-- Table structure for table `medication_administration_t`
--

CREATE TABLE `medication_administration_t` (
  `medicationAdministration_id` int(11) NOT NULL,
  `doseAmount` varchar(50) NOT NULL,
  `doseFrequency` varchar(50) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `drug_id` int(11) NOT NULL,
  `prescription_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medication_administration_t`
--

INSERT INTO `medication_administration_t` (`medicationAdministration_id`, `doseAmount`, `doseFrequency`, `duration`, `drug_id`, `prescription_id`) VALUES
(1, '500 mg', 'Twice a day', '30 days', 1, 1),
(2, '10 units', 'Once a day', '60 days', 2, 2),
(3, '5 mg', 'Once a day', '90 days', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `patientregistrations`
--

CREATE TABLE `patientregistrations` (
  `patient_id` int(6) UNSIGNED ZEROFILL NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `house_number` varchar(20) NOT NULL,
  `road_number` varchar(20) NOT NULL,
  `area_name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patientregistrations`
--

INSERT INTO `patientregistrations` (`patient_id`, `first_name`, `last_name`, `house_number`, `road_number`, `area_name`, `dob`, `gender`, `email`, `contact_number`, `password`) VALUES
(202200, 'ODH', 'SAGOR', '293', '12', 'Bashundhara R/A', '2002-05-07', 'male', 'odhsagor@gmail.com', '01230303911', '$2y$10$ClEknm1xEuYZuWwabwP8/Obd4ap/2r9sIa9yKjcHNq7yaJfAFijHm'),
(202202, 'SA', 'as', 'SA', 'as', 'as', '2024-07-17', 'male', 'AsA', 'asS', '$2y$10$puqxZ7kknYjxWTK4L7Bq1OgOp8wicT1zkR/79sXOYiQPfmSAZpGwa'),
(202203, 'a', 'a', 'a', 'a', 'a', '2024-07-17', 'male', 'a@gmail.com', '1', '$2y$10$kkP.QG8gCFAzVbsVBiRec.wLH0PiOEutMGnuNIDZHcYYsZUSIWfDi'),
(202204, 'b', 'b', 'b', 'b', 'b', '2024-07-16', 'male', 'b@gamil.com', 'b', '$2y$10$DKyWriJj7W6HxGUaKosCFuoG8rrCwAEdPw6./jTVKsttmDpsKOt..');

-- --------------------------------------------------------

--
-- Table structure for table `patient_contact_t`
--

CREATE TABLE `patient_contact_t` (
  `contact_No` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_mail_t`
--

CREATE TABLE `patient_mail_t` (
  `patient_id` int(11) NOT NULL,
  `patient_mail` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_t`
--

CREATE TABLE `patient_t` (
  `patient_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `houseNo` varchar(50) NOT NULL,
  `roadNo` varchar(50) NOT NULL,
  `areaName` varchar(100) NOT NULL,
  `dd` int(2) NOT NULL,
  `mm` int(2) NOT NULL,
  `yyyy` int(4) NOT NULL,
  `sex` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_t`
--

INSERT INTO `patient_t` (`patient_id`, `fname`, `lname`, `houseNo`, `roadNo`, `areaName`, `dd`, `mm`, `yyyy`, `sex`) VALUES
(1, 'John', 'Doe', '12', '34B', 'Greenwood', 14, 5, 1990, 'Male'),
(2, 'Jane', 'Smith', '56', '78C', 'Downtown', 30, 11, 1985, 'Female'),
(3, 'Michael', 'Johnson', '90', '12A', 'West End', 22, 1, 2000, 'Male'),
(4, 'Emily', 'Davis', '34', '56D', 'East Side', 19, 8, 1995, 'Female'),
(5, 'Chris', 'Brown', '78', '90E', 'North Point', 5, 7, 1988, 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_contact_t`
--

CREATE TABLE `pharmacy_contact_t` (
  `contactNo` int(11) NOT NULL,
  `pharmacy_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pharmacy_contact_t`
--

INSERT INTO `pharmacy_contact_t` (`contactNo`, `pharmacy_id`) VALUES
(1234567890, 1),
(2147483647, 2),
(2147483647, 3);

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_t`
--

CREATE TABLE `pharmacy_t` (
  `pharmacy_id` int(11) NOT NULL,
  `houseNo` varchar(50) NOT NULL,
  `roadNo` varchar(50) NOT NULL,
  `areaName` varchar(100) NOT NULL,
  `establishment_year` int(4) NOT NULL,
  `license_number` varchar(50) NOT NULL,
  `drug_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pharmacy_t`
--

INSERT INTO `pharmacy_t` (`pharmacy_id`, `houseNo`, `roadNo`, `areaName`, `establishment_year`, `license_number`, `drug_id`) VALUES
(1, '12A', '34B', 'Downtown', 1995, 'LIC12345', 1),
(2, '56C', '78D', 'Uptown', 2000, 'LIC67890', 2),
(3, '90E', '12F', 'Midtown', 2010, 'LIC54321', 3);

-- --------------------------------------------------------

--
-- Table structure for table `prescription_t`
--

CREATE TABLE `prescription_t` (
  `prescription_id` int(11) NOT NULL,
  `idd` int(2) NOT NULL,
  `imm` int(2) NOT NULL,
  `iyyyy` int(4) NOT NULL,
  `edd` int(2) NOT NULL,
  `emm` int(2) NOT NULL,
  `eyyyy` int(4) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prescription_t`
--

INSERT INTO `prescription_t` (`prescription_id`, `idd`, `imm`, `iyyyy`, `edd`, `emm`, `eyyyy`, `doctor_id`, `patient_id`) VALUES
(1, 1, 7, 2023, 1, 8, 2023, 1, 1),
(2, 2, 7, 2023, 2, 8, 2023, 2, 2),
(3, 3, 7, 2023, 3, 8, 2023, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `review_t`
--

CREATE TABLE `review_t` (
  `review_id` int(11) NOT NULL,
  `dd` int(2) NOT NULL,
  `mm` int(2) NOT NULL,
  `yyyy` int(4) NOT NULL,
  `rtime` varchar(10) NOT NULL,
  `feedback` text NOT NULL,
  `patient_id` int(11) NOT NULL,
  `hospital_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review_t`
--

INSERT INTO `review_t` (`review_id`, `dd`, `mm`, `yyyy`, `rtime`, `feedback`, `patient_id`, `hospital_id`) VALUES
(1, 1, 6, 2023, '10:00 AM', 'Excellent service', 1, 1),
(2, 2, 6, 2023, '11:00 AM', 'Very good care', 2, 2),
(3, 3, 6, 2023, '09:00 AM', 'Satisfactory experience', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `risk_assessment_t`
--

CREATE TABLE `risk_assessment_t` (
  `risk_assessment_id` int(11) NOT NULL,
  `disease_id` int(11) NOT NULL,
  `date_assessed` date NOT NULL,
  `dd` int(2) NOT NULL,
  `mm` int(2) NOT NULL,
  `yyyy` int(4) NOT NULL,
  `risk_details` text NOT NULL,
  `organs_at_risk` text NOT NULL,
  `dailylog_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedule_t`
--

CREATE TABLE `schedule_t` (
  `schedule_id` int(11) NOT NULL,
  `dd` int(2) NOT NULL,
  `mm` int(2) NOT NULL,
  `yyyy` int(4) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `room_number` varchar(50) NOT NULL,
  `doctor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule_t`
--

INSERT INTO `schedule_t` (`schedule_id`, `dd`, `mm`, `yyyy`, `start_time`, `end_time`, `room_number`, `doctor_id`) VALUES
(1, 10, 7, 2023, '09:00:00', '17:00:00', '101', 1),
(2, 11, 7, 2023, '09:00:00', '17:00:00', '102', 2),
(3, 12, 7, 2023, '09:00:00', '17:00:00', '103', 3);

-- --------------------------------------------------------

--
-- Table structure for table `test_t`
--

CREATE TABLE `test_t` (
  `test_id` int(11) NOT NULL,
  `test_type` varchar(100) NOT NULL,
  `dd` int(2) NOT NULL,
  `mm` int(2) NOT NULL,
  `yyyy` int(4) NOT NULL,
  `cost` decimal(10,2) NOT NULL,
  `test_name` date NOT NULL,
  `test_time_required` varchar(50) NOT NULL,
  `prescription_id` int(11) NOT NULL,
  `diagnostic_center_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_t`
--
ALTER TABLE `appointment_t`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `patient_id_apk` (`patient_id`),
  ADD KEY `doctor_id_apk` (`doctor_id`);

--
-- Indexes for table `campaign_t`
--
ALTER TABLE `campaign_t`
  ADD PRIMARY KEY (`campaign_id`),
  ADD KEY `hospital_id_cfk` (`hospital_id`);

--
-- Indexes for table `dailylog_t`
--
ALTER TABLE `dailylog_t`
  ADD PRIMARY KEY (`dailylog_id`),
  ADD KEY `patient_id_dfk` (`patient_id`),
  ADD KEY `disease_id_dfk` (`disease_id`),
  ADD KEY `risk_assessment_id_dfk` (`risk_assessment_id`);

--
-- Indexes for table `diagnostician_contact_t`
--
ALTER TABLE `diagnostician_contact_t`
  ADD PRIMARY KEY (`contact_number`,`diagnostician_id`),
  ADD KEY `diagnostician_id_ffk` (`diagnostician_id`);

--
-- Indexes for table `diagnostician_mail_t`
--
ALTER TABLE `diagnostician_mail_t`
  ADD PRIMARY KEY (`email_address`,`diagnostician_id`),
  ADD KEY `diagnostician_id_fffk` (`diagnostician_id`);

--
-- Indexes for table `diagnostician_t`
--
ALTER TABLE `diagnostician_t`
  ADD PRIMARY KEY (`diagnostician_id`),
  ADD KEY `diagnostic_center_id_fk` (`diagnostic_center_id`);

--
-- Indexes for table `diagnostic_center_contact_t`
--
ALTER TABLE `diagnostic_center_contact_t`
  ADD PRIMARY KEY (`contact_information`,`diagnostic_center_id`),
  ADD KEY `diagnostic_center_id_fkk` (`diagnostic_center_id`);

--
-- Indexes for table `diagnostic_center_t`
--
ALTER TABLE `diagnostic_center_t`
  ADD PRIMARY KEY (`diagnostic_center_id`),
  ADD KEY `test_id_dcfk` (`test_id`),
  ADD KEY `diagnostician_id_dcfk` (`diagnostician_id`);

--
-- Indexes for table `diagnostic_center_test_t`
--
ALTER TABLE `diagnostic_center_test_t`
  ADD PRIMARY KEY (`available_tests`,`diagnostic_center_id`),
  ADD KEY `diagnostic_center_id_ffkk` (`diagnostic_center_id`);

--
-- Indexes for table `disease_t`
--
ALTER TABLE `disease_t`
  ADD PRIMARY KEY (`disease_id`);

--
-- Indexes for table `doctorregistrations`
--
ALTER TABLE `doctorregistrations`
  ADD PRIMARY KEY (`doctor_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `doctorschedules`
--
ALTER TABLE `doctorschedules`
  ADD PRIMARY KEY (`doctorSchedulesId`),
  ADD KEY `fk_doctor_id` (`doctor_id`);

--
-- Indexes for table `doctor_contact_t`
--
ALTER TABLE `doctor_contact_t`
  ADD PRIMARY KEY (`contact_number`,`doctor_id`),
  ADD KEY `doctor_id_fk` (`doctor_id`);

--
-- Indexes for table `doctor_fee_t`
--
ALTER TABLE `doctor_fee_t`
  ADD PRIMARY KEY (`consultation_fee`,`doctor_id`),
  ADD KEY `doctor_id_fffk` (`doctor_id`);

--
-- Indexes for table `doctor_mail_t`
--
ALTER TABLE `doctor_mail_t`
  ADD PRIMARY KEY (`email_address`,`doctor_id`),
  ADD KEY `doctor_id_ffk` (`doctor_id`);

--
-- Indexes for table `doctor_t`
--
ALTER TABLE `doctor_t`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `drug_dosage_t`
--
ALTER TABLE `drug_dosage_t`
  ADD PRIMARY KEY (`dosage_form`,`drug_id`),
  ADD KEY `drug_id_fk` (`drug_id`);

--
-- Indexes for table `drug_route_t`
--
ALTER TABLE `drug_route_t`
  ADD PRIMARY KEY (`route_of_administration`,`drug_id`),
  ADD KEY `drug_id_fffk` (`drug_id`);

--
-- Indexes for table `drug_strength_t`
--
ALTER TABLE `drug_strength_t`
  ADD PRIMARY KEY (`strength`,`drug_id`),
  ADD KEY `drug_id_ffk` (`drug_id`);

--
-- Indexes for table `drug_t`
--
ALTER TABLE `drug_t`
  ADD PRIMARY KEY (`drug_id`);

--
-- Indexes for table `hospital_contact_t`
--
ALTER TABLE `hospital_contact_t`
  ADD PRIMARY KEY (`contact_number`,`hospital_id`),
  ADD KEY `hospital_id_fk` (`hospital_id`);

--
-- Indexes for table `hospital_mail`
--
ALTER TABLE `hospital_mail`
  ADD PRIMARY KEY (`email`,`hospital_id`),
  ADD KEY `hospital_id_ffk` (`hospital_id`);

--
-- Indexes for table `hospital_t`
--
ALTER TABLE `hospital_t`
  ADD PRIMARY KEY (`hospital_id`);

--
-- Indexes for table `medical_history_t`
--
ALTER TABLE `medical_history_t`
  ADD PRIMARY KEY (`medicalhistory_id`),
  ADD KEY `patient_id_mfk` (`patient_id`),
  ADD KEY `doctor_id_mfk` (`doctor_id`);

--
-- Indexes for table `medication_administration_t`
--
ALTER TABLE `medication_administration_t`
  ADD PRIMARY KEY (`medicationAdministration_id`),
  ADD KEY `drug_id_adfk` (`drug_id`),
  ADD KEY `prescription_id_adfk` (`prescription_id`);

--
-- Indexes for table `patientregistrations`
--
ALTER TABLE `patientregistrations`
  ADD PRIMARY KEY (`patient_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `patient_contact_t`
--
ALTER TABLE `patient_contact_t`
  ADD PRIMARY KEY (`contact_No`,`patient_id`),
  ADD KEY `patient_id_ffk` (`patient_id`);

--
-- Indexes for table `patient_mail_t`
--
ALTER TABLE `patient_mail_t`
  ADD PRIMARY KEY (`patient_id`,`patient_mail`);

--
-- Indexes for table `patient_t`
--
ALTER TABLE `patient_t`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `pharmacy_contact_t`
--
ALTER TABLE `pharmacy_contact_t`
  ADD PRIMARY KEY (`contactNo`,`pharmacy_id`),
  ADD KEY `pharmacy_id_pcfk` (`pharmacy_id`);

--
-- Indexes for table `pharmacy_t`
--
ALTER TABLE `pharmacy_t`
  ADD PRIMARY KEY (`pharmacy_id`),
  ADD KEY `drug_id_pfk` (`drug_id`);

--
-- Indexes for table `prescription_t`
--
ALTER TABLE `prescription_t`
  ADD PRIMARY KEY (`prescription_id`),
  ADD KEY `doctor_id_pfk` (`doctor_id`),
  ADD KEY `patient_id_pfk` (`patient_id`);

--
-- Indexes for table `review_t`
--
ALTER TABLE `review_t`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `patient_id_rfk` (`patient_id`),
  ADD KEY `hospital_id_rfk` (`hospital_id`);

--
-- Indexes for table `risk_assessment_t`
--
ALTER TABLE `risk_assessment_t`
  ADD PRIMARY KEY (`risk_assessment_id`),
  ADD KEY `dailylog_id_rafk` (`dailylog_id`);

--
-- Indexes for table `schedule_t`
--
ALTER TABLE `schedule_t`
  ADD PRIMARY KEY (`schedule_id`),
  ADD KEY `doctor_id_sfk` (`doctor_id`);

--
-- Indexes for table `test_t`
--
ALTER TABLE `test_t`
  ADD PRIMARY KEY (`test_id`),
  ADD KEY `prescription_id_tfk` (`prescription_id`),
  ADD KEY `diagnostic_center_id_tfk` (`diagnostic_center_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctorregistrations`
--
ALTER TABLE `doctorregistrations`
  MODIFY `doctor_id` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3041;

--
-- AUTO_INCREMENT for table `doctorschedules`
--
ALTER TABLE `doctorschedules`
  MODIFY `doctorSchedulesId` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=503;

--
-- AUTO_INCREMENT for table `patientregistrations`
--
ALTER TABLE `patientregistrations`
  MODIFY `patient_id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202205;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment_t`
--
ALTER TABLE `appointment_t`
  ADD CONSTRAINT `doctor_id_apk` FOREIGN KEY (`doctor_id`) REFERENCES `doctor_t` (`doctor_id`),
  ADD CONSTRAINT `patient_id_apk` FOREIGN KEY (`patient_id`) REFERENCES `patient_t` (`patient_id`);

--
-- Constraints for table `campaign_t`
--
ALTER TABLE `campaign_t`
  ADD CONSTRAINT `hospital_id_cfk` FOREIGN KEY (`hospital_id`) REFERENCES `hospital_t` (`hospital_id`);

--
-- Constraints for table `dailylog_t`
--
ALTER TABLE `dailylog_t`
  ADD CONSTRAINT `disease_id_dfk` FOREIGN KEY (`disease_id`) REFERENCES `disease_t` (`disease_id`),
  ADD CONSTRAINT `patient_id_dfk` FOREIGN KEY (`patient_id`) REFERENCES `patient_t` (`patient_id`),
  ADD CONSTRAINT `risk_assessment_id_dfk` FOREIGN KEY (`risk_assessment_id`) REFERENCES `risk_assessment_t` (`risk_assessment_id`);

--
-- Constraints for table `diagnostician_contact_t`
--
ALTER TABLE `diagnostician_contact_t`
  ADD CONSTRAINT `diagnostician_id_ffk` FOREIGN KEY (`diagnostician_id`) REFERENCES `diagnostician_t` (`diagnostician_id`);

--
-- Constraints for table `diagnostician_mail_t`
--
ALTER TABLE `diagnostician_mail_t`
  ADD CONSTRAINT `diagnostician_id_fffk` FOREIGN KEY (`diagnostician_id`) REFERENCES `diagnostician_t` (`diagnostician_id`);

--
-- Constraints for table `diagnostician_t`
--
ALTER TABLE `diagnostician_t`
  ADD CONSTRAINT `diagnostic_center_id_fk` FOREIGN KEY (`diagnostic_center_id`) REFERENCES `diagnostic_center_t` (`diagnostic_center_id`);

--
-- Constraints for table `diagnostic_center_contact_t`
--
ALTER TABLE `diagnostic_center_contact_t`
  ADD CONSTRAINT `diagnostic_center_id_fkk` FOREIGN KEY (`diagnostic_center_id`) REFERENCES `diagnostic_center_t` (`diagnostic_center_id`);

--
-- Constraints for table `diagnostic_center_t`
--
ALTER TABLE `diagnostic_center_t`
  ADD CONSTRAINT `diagnostician_id_dcfk` FOREIGN KEY (`diagnostician_id`) REFERENCES `diagnostician_t` (`diagnostician_id`),
  ADD CONSTRAINT `test_id_dcfk` FOREIGN KEY (`test_id`) REFERENCES `test_t` (`test_id`);

--
-- Constraints for table `diagnostic_center_test_t`
--
ALTER TABLE `diagnostic_center_test_t`
  ADD CONSTRAINT `diagnostic_center_id_ffkk` FOREIGN KEY (`diagnostic_center_id`) REFERENCES `diagnostic_center_t` (`diagnostic_center_id`);

--
-- Constraints for table `doctorschedules`
--
ALTER TABLE `doctorschedules`
  ADD CONSTRAINT `fk_doctor_id` FOREIGN KEY (`doctor_id`) REFERENCES `doctorregistrations` (`doctor_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doctor_contact_t`
--
ALTER TABLE `doctor_contact_t`
  ADD CONSTRAINT `doctor_id_fk` FOREIGN KEY (`doctor_id`) REFERENCES `doctor_t` (`doctor_id`);

--
-- Constraints for table `doctor_fee_t`
--
ALTER TABLE `doctor_fee_t`
  ADD CONSTRAINT `doctor_id_fffk` FOREIGN KEY (`doctor_id`) REFERENCES `doctor_t` (`doctor_id`);

--
-- Constraints for table `doctor_mail_t`
--
ALTER TABLE `doctor_mail_t`
  ADD CONSTRAINT `doctor_id_ffk` FOREIGN KEY (`doctor_id`) REFERENCES `doctor_t` (`doctor_id`);

--
-- Constraints for table `drug_dosage_t`
--
ALTER TABLE `drug_dosage_t`
  ADD CONSTRAINT `drug_id_fk` FOREIGN KEY (`drug_id`) REFERENCES `drug_t` (`drug_id`);

--
-- Constraints for table `drug_route_t`
--
ALTER TABLE `drug_route_t`
  ADD CONSTRAINT `drug_id_fffk` FOREIGN KEY (`drug_id`) REFERENCES `drug_t` (`drug_id`);

--
-- Constraints for table `drug_strength_t`
--
ALTER TABLE `drug_strength_t`
  ADD CONSTRAINT `drug_id_ffk` FOREIGN KEY (`drug_id`) REFERENCES `drug_t` (`drug_id`);

--
-- Constraints for table `hospital_contact_t`
--
ALTER TABLE `hospital_contact_t`
  ADD CONSTRAINT `hospital_id_fk` FOREIGN KEY (`hospital_id`) REFERENCES `hospital_t` (`hospital_id`);

--
-- Constraints for table `hospital_mail`
--
ALTER TABLE `hospital_mail`
  ADD CONSTRAINT `hospital_id_ffk` FOREIGN KEY (`hospital_id`) REFERENCES `hospital_t` (`hospital_id`);

--
-- Constraints for table `medical_history_t`
--
ALTER TABLE `medical_history_t`
  ADD CONSTRAINT `doctor_id_mfk` FOREIGN KEY (`doctor_id`) REFERENCES `doctor_t` (`doctor_id`),
  ADD CONSTRAINT `patient_id_mfk` FOREIGN KEY (`patient_id`) REFERENCES `patient_t` (`patient_id`);

--
-- Constraints for table `medication_administration_t`
--
ALTER TABLE `medication_administration_t`
  ADD CONSTRAINT `drug_id_adfk` FOREIGN KEY (`drug_id`) REFERENCES `drug_t` (`drug_id`),
  ADD CONSTRAINT `prescription_id_adfk` FOREIGN KEY (`prescription_id`) REFERENCES `prescription_t` (`prescription_id`);

--
-- Constraints for table `patient_contact_t`
--
ALTER TABLE `patient_contact_t`
  ADD CONSTRAINT `patient_id_ffk` FOREIGN KEY (`patient_id`) REFERENCES `patient_t` (`patient_id`);

--
-- Constraints for table `patient_mail_t`
--
ALTER TABLE `patient_mail_t`
  ADD CONSTRAINT `patient_id_fk` FOREIGN KEY (`patient_id`) REFERENCES `patient_t` (`patient_id`);

--
-- Constraints for table `pharmacy_contact_t`
--
ALTER TABLE `pharmacy_contact_t`
  ADD CONSTRAINT `pharmacy_id_pcfk` FOREIGN KEY (`pharmacy_id`) REFERENCES `pharmacy_t` (`pharmacy_id`);

--
-- Constraints for table `pharmacy_t`
--
ALTER TABLE `pharmacy_t`
  ADD CONSTRAINT `drug_id_pfk` FOREIGN KEY (`drug_id`) REFERENCES `drug_t` (`drug_id`);

--
-- Constraints for table `prescription_t`
--
ALTER TABLE `prescription_t`
  ADD CONSTRAINT `doctor_id_pfk` FOREIGN KEY (`doctor_id`) REFERENCES `doctor_t` (`doctor_id`),
  ADD CONSTRAINT `patient_id_pfk` FOREIGN KEY (`patient_id`) REFERENCES `patient_t` (`patient_id`);

--
-- Constraints for table `review_t`
--
ALTER TABLE `review_t`
  ADD CONSTRAINT `hospital_id_rfk` FOREIGN KEY (`hospital_id`) REFERENCES `hospital_t` (`hospital_id`),
  ADD CONSTRAINT `patient_id_rfk` FOREIGN KEY (`patient_id`) REFERENCES `patient_t` (`patient_id`);

--
-- Constraints for table `risk_assessment_t`
--
ALTER TABLE `risk_assessment_t`
  ADD CONSTRAINT `dailylog_id_rafk` FOREIGN KEY (`dailylog_id`) REFERENCES `dailylog_t` (`dailylog_id`);

--
-- Constraints for table `schedule_t`
--
ALTER TABLE `schedule_t`
  ADD CONSTRAINT `doctor_id_sfk` FOREIGN KEY (`doctor_id`) REFERENCES `doctor_t` (`doctor_id`);

--
-- Constraints for table `test_t`
--
ALTER TABLE `test_t`
  ADD CONSTRAINT `diagnostic_center_id_tfk` FOREIGN KEY (`diagnostic_center_id`) REFERENCES `diagnostic_center_t` (`diagnostic_center_id`),
  ADD CONSTRAINT `prescription_id_tfk` FOREIGN KEY (`prescription_id`) REFERENCES `prescription_t` (`prescription_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
