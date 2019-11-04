-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2019 at 07:27 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xmajor`
--

-- --------------------------------------------------------

--
-- Table structure for table `academics_percentage`
--

CREATE TABLE `academics_percentage` (
  `id` int(11) NOT NULL,
  `operating_system_per` int(11) NOT NULL,
  `algorithm_per` int(11) NOT NULL,
  `programming_concept_per` int(11) NOT NULL,
  `software_eng_per` int(11) NOT NULL,
  `computer_net_per` int(11) NOT NULL,
  `electronics_per` int(11) NOT NULL,
  `computer_arch_per` int(11) NOT NULL,
  `mathematics_per` int(11) NOT NULL,
  `communication_per` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academics_percentage`
--

INSERT INTO `academics_percentage` (`id`, `operating_system_per`, `algorithm_per`, `programming_concept_per`, `software_eng_per`, `computer_net_per`, `electronics_per`, `computer_arch_per`, `mathematics_per`, `communication_per`, `user_id`) VALUES
(1, 69, 63, 78, 87, 94, 94, 87, 84, 61, 3);

-- --------------------------------------------------------

--
-- Table structure for table `academics_performance`
--

CREATE TABLE `academics_performance` (
  `id` int(11) NOT NULL,
  `operating_system` int(11) NOT NULL DEFAULT '0',
  `linux_administration` int(11) NOT NULL DEFAULT '0',
  `java` int(11) NOT NULL DEFAULT '0',
  `cpp` int(11) NOT NULL DEFAULT '0',
  `c` int(11) NOT NULL DEFAULT '0',
  `python` int(11) NOT NULL DEFAULT '0',
  `web_programming` int(11) NOT NULL DEFAULT '0',
  `network` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `communication_skills`
--

CREATE TABLE `communication_skills` (
  `id` int(11) NOT NULL,
  `public_speaking` varchar(255) NOT NULL,
  `reading_and_writing_skill` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `communication_skills`
--

INSERT INTO `communication_skills` (`id`, `public_speaking`, `reading_and_writing_skill`, `user_id`) VALUES
(1, 'Good', 'Excellent', 3);

-- --------------------------------------------------------

--
-- Table structure for table `interested_skills`
--

CREATE TABLE `interested_skills` (
  `id` int(11) NOT NULL,
  `interest_career_area` varchar(255) NOT NULL,
  `job_higherStudies` varchar(255) NOT NULL,
  `company_interest` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interested_skills`
--

INSERT INTO `interested_skills` (`id`, `interest_career_area`, `job_higherStudies`, `company_interest`, `user_id`) VALUES
(1, 'System Developer', 'Highr Studies', 'Web Service', 3);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `suggested_job_role_map` int(11) NOT NULL,
  `suggested_job_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `suggested_job_role_map`, `suggested_job_role`) VALUES
(1, 0, 'Applications Developer'),
(2, 1, 'Business Intelligence Analyst'),
(3, 2, 'Business Systems Analyst'),
(4, 3, 'CRM Business Analyst'),
(5, 4, 'CRM Technical Developer'),
(6, 5, 'Data Architect'),
(7, 6, 'Database Administrator'),
(8, 7, 'Database Developer'),
(9, 8, 'Database Manager'),
(10, 9, 'Design & UX'),
(11, 10, 'E-Commerce Analyst'),
(12, 11, 'Information Security Analyst'),
(13, 12, 'Information Technology Auditor'),
(14, 13, 'Information Technology Manager'),
(15, 14, 'Mobile Applications Developer'),
(16, 15, 'Network Engineer'),
(17, 16, 'Network Security Administrator'),
(18, 17, 'Network Security Engineer'),
(19, 18, 'Portal Administrator'),
(20, 19, 'Programmer Analyst'),
(21, 20, 'Project Manager'),
(22, 21, 'Quality Assurance Associate'),
(23, 22, 'Software Developer'),
(24, 23, 'Software Engineer'),
(25, 24, 'Software Quality Assurance (QA) Testing'),
(26, 25, 'Software Systems Engineer'),
(27, 26, 'Solutions Architect'),
(28, 27, 'Systems Analyst'),
(29, 28, 'Systems Security Administrator'),
(30, 29, 'Technical Engineer'),
(31, 30, 'Technical ServicesHelp DeskTech Support'),
(32, 31, 'Technical Support'),
(33, 32, 'UX Designer'),
(34, 33, 'Web Developer');

-- --------------------------------------------------------

--
-- Table structure for table `jobs_profile`
--

CREATE TABLE `jobs_profile` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `job_role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs_profile`
--

INSERT INTO `jobs_profile` (`id`, `user_id`, `job_role_id`) VALUES
(1, 3, 8);

-- --------------------------------------------------------

--
-- Table structure for table `knowledge_skills`
--

CREATE TABLE `knowledge_skills` (
  `id` int(11) NOT NULL,
  `extra_course` int(11) NOT NULL,
  `certifications` int(11) NOT NULL,
  `workshops` int(11) NOT NULL,
  `intersted_subject` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `knowledge_skills`
--

INSERT INTO `knowledge_skills` (`id`, `extra_course`, `certifications`, `workshops`, `intersted_subject`, `user_id`) VALUES
(1, 6, 4, 3, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `problem_solving_skills`
--

CREATE TABLE `problem_solving_skills` (
  `id` int(11) NOT NULL,
  `logical_quo_rates` int(11) NOT NULL,
  `hackathons_rates` int(11) NOT NULL,
  `code_skill_rates` int(11) NOT NULL,
  `talent_test_rates` int(11) NOT NULL,
  `memory_capability_rates` varchar(255) NOT NULL,
  `olympiads_rates` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problem_solving_skills`
--

INSERT INTO `problem_solving_skills` (`id`, `logical_quo_rates`, `hackathons_rates`, `code_skill_rates`, `talent_test_rates`, `memory_capability_rates`, `olympiads_rates`, `user_id`) VALUES
(1, 4, 0, 4, 0, '8', '8', 3);

-- --------------------------------------------------------

--
-- Table structure for table `self_management_skills`
--

CREATE TABLE `self_management_skills` (
  `id` int(11) NOT NULL,
  `longer_work_OnSystem` varchar(255) NOT NULL,
  `self_learning_capabilities` varchar(255) NOT NULL,
  `books_interest` varchar(255) NOT NULL,
  `relationship_status` varchar(255) NOT NULL,
  `salary_status` varchar(255) NOT NULL,
  `introvert_status` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `self_management_skills`
--

INSERT INTO `self_management_skills` (`id`, `longer_work_OnSystem`, `self_learning_capabilities`, `books_interest`, `relationship_status`, `salary_status`, `introvert_status`, `user_id`) VALUES
(1, '5', 'yes', 'Prayer Bokks', 'singke', 'Salaried', 'no', 3);

-- --------------------------------------------------------

--
-- Table structure for table `teamwork_skills`
--

CREATE TABLE `teamwork_skills` (
  `id` int(11) NOT NULL,
  `senior_older_input` varchar(255) NOT NULL,
  `interested_in_games` varchar(255) NOT NULL,
  `behaviour_input` varchar(255) NOT NULL,
  `management_tech_input` varchar(255) NOT NULL,
  `hard_smart_worker` varchar(255) NOT NULL,
  `worked_as_team` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teamwork_skills`
--

INSERT INTO `teamwork_skills` (`id`, `senior_older_input`, `interested_in_games`, `behaviour_input`, `management_tech_input`, `hard_smart_worker`, `worked_as_team`, `user_id`) VALUES
(1, 'Hardworker', 'no', 'Stubborn', 'Management', 'Hard Worker', 'Yes', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `username`, `mobile`) VALUES
(3, 'ethan83@gmail.com', '$2y$10$8B9ARKwYHHB07o6Jm07Kf.jIcGfuoU6YDPvo7tiwhUO77Ar6I/0aW', 'ethansimon', '645465446');

-- --------------------------------------------------------

--
-- Table structure for table `users_detail`
--

CREATE TABLE `users_detail` (
  `userdetail_id` int(11) NOT NULL,
  `user_fullname` varchar(255) NOT NULL,
  `user_fathername` varchar(255) NOT NULL,
  `user_mothername` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_college` varchar(255) NOT NULL,
  `user_address_lineone` varchar(255) NOT NULL,
  `user_address_linetwo` varchar(255) NOT NULL,
  `user_address_city` varchar(255) NOT NULL,
  `user_address_state` varchar(255) NOT NULL,
  `user_address_zipcode` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_detail`
--

INSERT INTO `users_detail` (`userdetail_id`, `user_fullname`, `user_fathername`, `user_mothername`, `user_email`, `user_college`, `user_address_lineone`, `user_address_linetwo`, `user_address_city`, `user_address_state`, `user_address_zipcode`, `user_id`) VALUES
(1, 'Ethan Simons', 'Simons Jon', 'Johana Sim', 'ethan83@gmail.com', 'Lakeshore Institute Of Technology', '8611 Lakeshore Rd', 'Olsawa', 'Lakseshore', 'Kerala', '66566', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academics_percentage`
--
ALTER TABLE `academics_percentage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_acadper` (`user_id`);

--
-- Indexes for table `academics_performance`
--
ALTER TABLE `academics_performance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user` (`user_id`);

--
-- Indexes for table `communication_skills`
--
ALTER TABLE `communication_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comm` (`user_id`);

--
-- Indexes for table `interested_skills`
--
ALTER TABLE `interested_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_interest` (`user_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `jobs_profile`
--
ALTER TABLE `jobs_profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_users` (`user_id`),
  ADD KEY `fk_job_role` (`job_role_id`);

--
-- Indexes for table `knowledge_skills`
--
ALTER TABLE `knowledge_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_knowledge` (`user_id`);

--
-- Indexes for table `problem_solving_skills`
--
ALTER TABLE `problem_solving_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_probsolve` (`user_id`);

--
-- Indexes for table `self_management_skills`
--
ALTER TABLE `self_management_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_selfmanage` (`user_id`);

--
-- Indexes for table `teamwork_skills`
--
ALTER TABLE `teamwork_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_teamwork` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_detail`
--
ALTER TABLE `users_detail`
  ADD PRIMARY KEY (`userdetail_id`),
  ADD KEY `fk_userDetail` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academics_percentage`
--
ALTER TABLE `academics_percentage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `academics_performance`
--
ALTER TABLE `academics_performance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `communication_skills`
--
ALTER TABLE `communication_skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `interested_skills`
--
ALTER TABLE `interested_skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `jobs_profile`
--
ALTER TABLE `jobs_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `knowledge_skills`
--
ALTER TABLE `knowledge_skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `problem_solving_skills`
--
ALTER TABLE `problem_solving_skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `self_management_skills`
--
ALTER TABLE `self_management_skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teamwork_skills`
--
ALTER TABLE `teamwork_skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users_detail`
--
ALTER TABLE `users_detail`
  MODIFY `userdetail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `academics_percentage`
--
ALTER TABLE `academics_percentage`
  ADD CONSTRAINT `fk_acadper` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `academics_performance`
--
ALTER TABLE `academics_performance`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `communication_skills`
--
ALTER TABLE `communication_skills`
  ADD CONSTRAINT `fk_comm` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `interested_skills`
--
ALTER TABLE `interested_skills`
  ADD CONSTRAINT `fk_interest` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `jobs_profile`
--
ALTER TABLE `jobs_profile`
  ADD CONSTRAINT `fk_job_role` FOREIGN KEY (`job_role_id`) REFERENCES `jobs` (`job_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `knowledge_skills`
--
ALTER TABLE `knowledge_skills`
  ADD CONSTRAINT `fk_knowledge` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `problem_solving_skills`
--
ALTER TABLE `problem_solving_skills`
  ADD CONSTRAINT `fk_probsolve` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `self_management_skills`
--
ALTER TABLE `self_management_skills`
  ADD CONSTRAINT `fk_selfmanage` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `teamwork_skills`
--
ALTER TABLE `teamwork_skills`
  ADD CONSTRAINT `fk_teamwork` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `users_detail`
--
ALTER TABLE `users_detail`
  ADD CONSTRAINT `fk_userDetail` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
