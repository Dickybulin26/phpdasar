# **REPOSITORY UNTUK BELAJAR PHP DASAR di WPU BERSAMA PAK SANDHIKA GALIH**

# :clipboard: **DATABASE phpdasar.sql**

```bash

    -- phpMyAdmin SQL Dump
    -- version 5.2.1
    -- https://www.phpmyadmin.net/
    --
    -- Host: 127.0.0.1
    -- Generation Time: May 19, 2024 at 05:04 PM
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
    -- Database: `phpdasar`
    --
    
    -- --------------------------------------------------------
    
    --
    -- Table structure for table `mahasiswa`
    --
    
    CREATE TABLE `mahasiswa` (
      `id` int(11) NOT NULL,
      `nama` varchar(100) DEFAULT NULL,
      `nim` varchar(10) DEFAULT NULL,
      `email` varchar(100) DEFAULT NULL,
      `jurusan` varchar(100) DEFAULT NULL,
      `gambar` varchar(100) DEFAULT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
    
    --
    -- Dumping data for table `mahasiswa`
    --
    
    INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `email`, `jurusan`, `gambar`) VALUES
    (1, 'Dicky Asqaelani', '099423421', 'dicky@gmail.com', 'TKJ', '6649a473e3013.jpg'),
    (2, 'Ahmad', '124234098', 'ahmad@gmail.com', 'TKJ', 'gambar2.jpg'),
    (3, 'Rizal', '124234653', 'rizal@gmail.com', 'DKV', 'gambar3.png'),
    (4, 'Jamaludin', '092311842', 'jamaludin@gmail.com', 'TKR', 'gambar4.jpg'),
    (5, 'Asep', '051682769', 'asep@gmail.com', 'TKJ', 'gambar5.jpg'),
    (6, 'Ilham', '957829486', 'ilham@gmail.com', 'RPL', 'gambar6.png'),
    (7, 'Sumbul', '749275097', 'sumbul@gmail.com', 'TPL', 'gambar7.png'),
    (8, 'Salim', '453423543', 'salim@gmail.com', 'TKJ', 'gambar8.jpg'),
    (9, 'Rahmat', '932482343', 'rahmat@gmail.com', 'TP', 'gambar9.jpg'),
    (10, 'Ali', '234132453', 'ali@gmail.com', 'TKR', 'gambar10.jpg'),
    (11, 'aldi', '193738579', 'aldi@gmail.com', 'DKV', 'gambar4.jpg'),
    (12, 'samsul', '8395719875', 'samsul@gmail.com', 'TB', 'gambar8.jpg'),
    (15, 'bambang', '857365910', 'bambang@gmail.com', 'DKV', 'gambar10.jpg'),
    (16, 'Robby', '9275284675', 'robby@gmail.com', 'TB', '66499e1cb6bac.png'),
    (17, 'Syarif', '928573875', 'syarif@gmail.com', 'TB', '664a0839c0603.jpg');
    
    -- --------------------------------------------------------
    
    --
    -- Table structure for table `user`
    --
    
    CREATE TABLE `user` (
      `id` int(11) NOT NULL,
      `username` varchar(50) NOT NULL,
      `password` varchar(255) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
    
    --
    -- Dumping data for table `user`
    --
    
    INSERT INTO `user` (`id`, `username`, `password`) VALUES
    (1, '20admin', '$2y$10$lhmybf.XNtHmAB20qwfSYupPOFiVgi6MYzqwiVwSweZ2FO1kJd39a'),
    (3, 'dicky', '$2y$10$UhBfGmP5pULGFbZdD1BgUeOTJDrwDgKavRScc6qa8QqFYPPNoc4l2');
    
    --
    -- Indexes for dumped tables
    --
    
    --
    -- Indexes for table `mahasiswa`
    --
    ALTER TABLE `mahasiswa`
      ADD PRIMARY KEY (`id`);
    
    --
    -- Indexes for table `user`
    --
    ALTER TABLE `user`
      ADD PRIMARY KEY (`id`);
    
    --
    -- AUTO_INCREMENT for dumped tables
    --
    
    --
    -- AUTO_INCREMENT for table `mahasiswa`
    --
    ALTER TABLE `mahasiswa`
      MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
    
    --
    -- AUTO_INCREMENT for table `user`
    --
    ALTER TABLE `user`
      MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
    COMMIT;
    
    /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
    /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
    /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

```

