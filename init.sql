-- Create the database if it does not exist
CREATE DATABASE IF NOT EXISTS students;

-- Switch to the database
USE students;

-- Create `r_certificates` table
CREATE TABLE IF NOT EXISTS `r_certificates` (
  `CID1` varchar(20) NOT NULL,
  `ExamCID1` varchar(255) NOT NULL,
  `CID2` varchar(20) NOT NULL,
  `ExamCID2` varchar(255) NOT NULL,
  `CID3` varchar(20) NOT NULL,
  `ExamCID3` varchar(255) NOT NULL,
  `CID4` varchar(20) NOT NULL,
  `ExamCID4` varchar(255) NOT NULL,
  `CID5` varchar(20) NOT NULL,
  `ExamCID5` varchar(255) NOT NULL,
  `CID6` varchar(20) NOT NULL,
  `ExamCID6` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
);

-- Create `r_users` table
CREATE TABLE IF NOT EXISTS `r_users` (
  `username` varchar(255) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
);

-- Insert sample data into `r_users` table
INSERT INTO `r_users` (`username`, `DOB`, `pass`, `email`)
VALUES ('user1', '1990-01-01', 'password1', 'user1@example.com'),
       ('user2', '1995-02-02', 'password2', 'user2@example.com');

