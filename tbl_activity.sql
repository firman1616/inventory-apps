-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 07, 2021 at 03:42 PM
-- Server version: 10.2.37-MariaDB-cll-lve
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `udmp8285_daily`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activity`
--

CREATE TABLE `tbl_activity` (
  `id_aktivitas` int(11) NOT NULL,
  `pic` int(11) DEFAULT NULL,
  `other_pic` varchar(5) DEFAULT NULL,
  `tipe_aktifitas` int(11) DEFAULT NULL,
  `start` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `end` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `deskripsi` text DEFAULT NULL,
  `note` text DEFAULT NULL,
  `prog` int(11) DEFAULT NULL,
  `validation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_activity`
--

INSERT INTO `tbl_activity` (`id_aktivitas`, `pic`, `other_pic`, `tipe_aktifitas`, `start`, `end`, `deskripsi`, `note`, `prog`, `validation`) VALUES
(1, 1, '', 12, '2021-03-25 13:48:43', '2021-03-25 13:48:43', 'Restart Modem ', '', 1, '2021-03-25'),
(2, 2, '', 1, '2021-03-25 13:48:56', '2021-03-25 13:48:56', 'Membuatkan user dan password login  mikrotik Darmo untuk Umi Nadhiro.', '', 1, '2021-03-25'),
(3, 1, '00043', 9, '2021-03-25 13:49:10', '2021-03-25 13:49:10', 'Migrsi ke local to cloud', '', 1, '2021-03-25'),
(4, 2, '', 1, '2021-03-25 13:50:37', '2021-03-25 13:50:37', 'Remote Laptop bu Mai Dwi untuk install accurate dan connect ke printer.', 'By Remote AnyDesk', 1, '2021-03-25'),
(5, 1, '00043', 2, '2021-03-25 13:50:53', '2021-03-25 13:50:53', 'Backup data Laptop eks pak kinki untuk pak eko shiper', '', 1, '2021-03-25'),
(6, 3, '', 5, '2021-03-25 13:51:05', '2021-03-25 13:51:05', 'Membuat FPP Perpanjangan Internet Lawang dan FPP servis printer', '', 1, '2021-03-25'),
(7, 3, '', 10, '2021-03-29 08:28:35', '2021-03-25 14:00:00', 'Back up data dari email awa@utomodeck.com ke email backup@utomodeck.co.id', '', 1, '2021-03-25'),
(8, 1, '00365', 13, '2021-03-29 08:29:27', '2021-03-25 15:15:00', 'Diskusi membahas ISO dengan Ayu QMR', '', 1, '2021-03-25'),
(9, 3, '', 5, '2021-03-26 08:34:18', '2021-03-26 08:34:18', 'Membuat FPP laptop Ilham Sales Project', '', 1, '2021-03-26'),
(10, 1, '', 12, '2021-03-26 08:10:00', '2021-03-26 08:11:22', 'Restart AP Rutin tiap pagi', '', 1, '2021-03-26'),
(11, 1, '', 12, '2021-03-26 08:30:00', '2021-03-26 08:45:18', 'Buat Surat jalan untuk laptop pak eko shipper dan laptop silvia soalr untuk di bawa ke service center acer', 'kelengkapan laptop pak eko shipper\r\n1. Laptop\r\n2. Charger\r\n3. tas\r\nkelengkapan laptop silvia ke service center\r\n1. laptop acer aspire 5\r\n2. charger', 1, '2021-03-26'),
(12, 1, '', 2, '2021-03-26 09:00:00', '1970-01-01 07:00:00', 'Tarik kertas printer yang macet dari printer project', '', 1, '2021-03-26'),
(13, 3, '', 5, '2021-03-26 09:20:00', '1970-01-01 07:00:00', 'Membuat SPP Kabel HDMI To HDMI', 'Untuk shelter Kraton, PIER dan Makassar', 1, '2021-03-26'),
(14, 2, '00382', 2, '2021-03-26 13:00:06', '2021-03-26 13:00:06', 'mandu koneksi internet pc april purchasing', 'Belum dibuatkan user hotspot, dan sudah melakukan request', 1, '2021-03-26'),
(15, 3, '', 12, '2021-03-29 08:33:42', '2021-03-26 11:00:00', 'Merevisi SOP Pembelian Kebutuhan IT dan di kirim ke Ayu QMR', '', 1, '2021-03-26'),
(16, 1, '', 2, '2021-03-29 08:34:17', '2021-03-27 09:00:00', 'Backup dan install anydesk pc pak charles manager ppic', '', 1, '2021-03-27'),
(17, 1, '', 13, '2021-03-29 08:34:56', '2021-03-27 10:00:00', 'survey lokasi untuk alokasi barang IT dari basrah ke rungkut', 'di tempatkan di dapur lama daerah shipper', 1, '2021-03-27'),
(18, 3, '', 12, '2021-03-29 08:32:36', '2021-03-27 10:00:00', 'Menambahkan report checklist pindahan barang IT', '', 1, '2021-03-27'),
(19, 3, '', 13, '2021-03-29 08:30:18', '2021-03-27 11:00:00', 'Update maintenance request ke kristian', '', 1, '2021-03-27'),
(20, 3, '', 10, '2021-04-07 11:59:57', '2021-04-07 11:59:57', 'back up email rudy@utomodeck.co.id', '', 1, '2021-04-07'),
(21, 1, '00272', 2, '2021-03-27 13:00:00', '2021-03-27 13:25:00', 'bongkar muat dan list barang dari Basrah ke rungkut', 'Sudah di serah terimakan ke shipper dengan mas jay', 1, '2021-03-27'),
(22, 1, '', 2, '2021-03-27 13:25:00', '2021-03-27 13:35:00', 'Warna biru printer Yuli rungkut tidak keluar', '', 1, '2021-03-27'),
(23, 1, '', 12, '2021-03-29 08:02:00', '2021-03-29 08:03:00', 'Restart Modem rutin', 'untuk menghindari lemot, sebisa mungkin setiap pagi harus di restart modemnya', 1, '2021-03-29'),
(24, 2, '00382', 2, '2021-03-29 09:00:00', '2021-03-29 10:19:00', 'Prbaiki laptop pak Sandy Project Dept. Habis Update Mati.', 'Setelah update malah mati.', 1, '2021-03-29'),
(25, 2, '', 2, '2021-03-29 10:30:00', '2021-03-29 10:45:00', 'Lapor ke Telkom terkait gangguan internet di Pabrik Rungkut.', 'Indikasi terkena fek Gangguan Massal.', 1, '2021-03-29'),
(26, 3, '', 10, '2021-03-29 08:30:00', '2021-03-29 13:40:00', 'Back up email rudy@utomodeck.com', '', 1, '2021-03-29'),
(27, 1, '', 13, '2021-03-29 09:00:00', '2021-03-29 13:45:00', 'Meeting SAP', '1. Buat TOR\r\n2. Koneksi IMS ke SAP', 1, '2021-03-29'),
(28, 1, '', 6, '2021-04-01 13:51:03', '2021-04-01 13:51:03', 'mendata dan menfollow up provider-provider yang tercoverege di Cabang Palembang', '', 1, '2021-04-01'),
(29, 3, '', 12, '2021-03-30 08:30:00', '2021-03-30 09:13:00', 'update FPP di click up', '', 1, '2021-03-30'),
(30, 2, '', 2, '2021-03-26 08:15:00', '2021-03-26 09:15:00', 'Menghubungkan komputer-komputer PC Engineering Ruko Darmo ke Printer Epson L360 dan Brother MFC-J3520', 'All PC dan laptop Engineering.', 1, '2021-03-30'),
(31, 2, '', 1, '2021-03-26 09:20:00', '2021-03-26 09:45:00', 'Install driver scanner CanoScan untuk laptop bu May Finance.', 'CanoScan Lide120', 1, '2021-03-30'),
(32, 2, '', 1, '2021-03-26 10:50:00', '2021-03-26 14:30:00', 'Remote repair PC Tabita.', 'Excel tidak bisa di buka.', 1, '2021-03-30'),
(33, 2, '', 1, '2021-03-26 12:53:00', '2021-03-26 14:30:00', 'Remote repair laptop Putri.', 'Tidak bisa print pdf.', 1, '2021-03-30'),
(34, 2, '', 2, '2021-03-26 11:05:00', '2021-03-26 11:53:00', 'Memandu by WA komputer Aprilia Purchasing Dept.', 'Login hotspot MikroTik Ruko Darmo.', 1, '2021-03-30'),
(35, 2, '00277', 12, '2021-03-27 09:00:00', '2021-03-27 12:45:00', 'Pindahan sebagian barang IT dari Basrah ke Rungkut.', 'Dibantu 2 orang manpower.', 1, '2021-03-30'),
(36, 2, '', 1, '2021-03-27 08:45:00', '2021-03-27 09:00:00', 'Laptop Bu Nia Accounting Dept.', 'Install ulang Accurate by remote.', 1, '2021-03-30'),
(37, 2, '', 2, '2021-03-29 09:00:00', '2021-03-29 11:30:00', 'Lapor ke Telkom karena internet pabrik Rungkut Down', 'Kendala terjadi akibat gangguan massal (GaMas)', 1, '2021-03-30'),
(38, 2, '', 1, '2021-03-29 13:30:00', '2021-03-29 14:15:00', 'Melanjutkan instal aplikasi pajak di laptop pak Yono Tax Dept. Rungkut.', 'ESPT PPh Pasal 4 Ayat 2 Versi 2.0.1', 1, '2021-03-30'),
(39, 2, '', 2, '2021-03-29 15:30:00', '2021-03-29 15:45:00', 'Remote repair videotron Basrah.', 'Error kemungkinan terjadi akibat listrik down temporer.', 1, '2021-03-30'),
(40, 2, '', 1, '2021-03-30 09:30:00', '2021-03-30 10:03:00', 'Repair laptop Fiza K3 OHSE Dept.', 'Install ulang Accurate.', 1, '2021-03-30'),
(41, 2, '', 1, '2021-03-30 22:45:00', '2021-03-30 14:00:00', 'Perbaikan PC Telmark Ibu Fira Ruko Darmo.', 'Kerusakan di Power Supply Unit / PSU dan parts yang rusak sudah di ganti.', 1, '2021-03-30'),
(42, 2, '', 1, '2021-03-30 13:10:00', '2021-03-30 13:40:00', 'Remote repair laptop pak Adek Rungkut.', 'Aktivasi ulang Ms. Office.', 1, '2021-03-30'),
(43, 2, '', 2, '2021-03-30 14:15:00', '2021-03-30 14:45:00', 'Cek dan perbaiki komputer pak Edu. Kendala tidak bisa print.', 'Install MSE dan restart PC.', 1, '2021-03-30'),
(44, 3, '', 12, '2021-03-30 13:00:00', '2021-03-30 14:00:00', 'follow up ke CBN Palembang', 'internet palembang', 1, '2021-03-30'),
(45, 3, '', 12, '2021-03-30 10:30:00', '2021-03-30 11:00:00', 'Follow up pembelian ke robby', '', 1, '2021-03-30'),
(46, 3, '', 12, '2021-03-31 08:45:00', '2021-03-31 09:00:00', 'serah terima laptop ke nana untuk stok opname rungkut', 'durasi peminjaman 1 hari', 1, '2021-03-31'),
(47, 3, '', 12, '2021-03-31 09:00:00', '2021-03-31 09:45:00', 'konfirm ke ajeng mengenai pembayaran vps accuurate bulan maret', 'sudah dibayarkan', 1, '2021-03-31'),
(48, 3, '', 12, '2021-04-01 09:10:00', '2021-04-10 09:35:00', 'konfirmasi ke satpam apa laptop untuk pak eko shipper lawang sudah di kirim dan info ke pak eko agar ttd di berita acara serah terima', '', 1, '2021-04-01'),
(49, 1, '', 2, '2021-04-01 08:30:00', '2021-04-01 08:49:00', 'Cek emailProject karena meifi tidak bisa akses', '', 1, '2021-04-01'),
(50, 3, '', 12, '2021-04-01 10:00:00', '2021-04-01 15:37:00', 'update addres book', '', 1, '2021-04-01'),
(51, 1, '', 1, '2021-04-01 19:52:32', '2021-04-01 19:52:32', 'Setting printer project eks inka', '', 1, '2021-04-01'),
(52, 3, '', 13, '2021-04-03 09:00:00', '1970-01-01 07:00:00', 'diskusi vendor freelance IT disetiap cabang', '', 1, '2021-04-03'),
(53, 3, '', 12, '2021-04-03 10:00:00', '1970-01-01 07:00:00', 'menghubungi vendor freelance', 'harus ada SOW baruvendor memberikan penawaran', 1, '2021-04-03'),
(54, 1, '', 14, '2021-04-03 09:15:00', '2021-04-03 13:06:00', 'Update report IT daily, dan filtering berdasarkan bulan dan tahun', 'tinggal update library PDF', 1, '2021-04-03'),
(56, 6, '00382', 13, '2021-04-04 16:49:41', '2021-04-04 16:49:41', 'diskusi workspace', '', 1, '2021-04-04'),
(58, 6, '00382', 13, '2021-04-03 08:30:00', '2021-04-03 09:30:00', 'diskusi WorkSpace dan Google Drive', '', 1, '2021-04-04'),
(59, 1, '', 14, '2021-04-05 08:15:00', '2021-04-05 11:07:00', 'Update library domp PDF untuk export report IT Daily', '', 1, '2021-04-05'),
(60, 3, '', 13, '2021-04-05 08:00:00', '2021-04-05 12:00:00', 'menentukan PIC yg bertanggung jawab dengan CCTV di masing-masing cabang', 'cabang bogor dan semarang LIK tidak adda orang', 1, '2021-04-05'),
(61, 3, '', 5, '2021-04-05 13:00:00', '2021-04-05 13:15:00', 'Membuat SPP Laptop untuk sales jakarta yg baru masuk', '', 1, '2021-04-05'),
(62, 1, '00073', 12, '2021-04-05 14:43:00', '2021-04-05 14:46:00', 'Membuat email document.control@utomodeck.co.id', 'request dari meifi atas persetujuan 17', 1, '2021-04-05'),
(63, 1, '', 14, '2021-04-05 16:19:00', '2021-04-05 16:21:00', 'Update query Daily List', '', 1, '2021-04-05'),
(64, 6, '', 13, '2021-04-05 11:00:00', '2021-04-05 12:00:00', 'meeting project CCTV', '', 1, '2021-04-05'),
(65, 6, '00382', 8, '2021-04-05 15:00:00', '2021-04-05 15:00:00', 'trial and Error Daily IT', '', 1, '2021-04-05'),
(67, 6, '00382', 4, '2021-04-05 13:00:00', '2021-04-05 14:00:00', 'pembelian perlengkapan MIni PC', '', 1, '2021-04-05'),
(68, 6, '00382', 11, '2021-04-07 11:58:36', '2021-04-07 11:58:36', 'install Mini PC', '', 1, '2021-04-07'),
(69, 6, '00043', 7, '2021-04-05 09:00:00', '2021-04-05 11:00:00', 'bantu menyelesaikan problem -problem karyawan lain', '', 1, '2021-04-05'),
(70, 3, '', 14, '2021-04-07 11:59:46', '2021-04-07 11:59:46', 'update address book, masukkan address book ke google drive dan share ke PIC address book', '', 1, '2021-04-07'),
(71, 3, '', 12, '2021-04-05 15:45:00', '2021-04-05 16:00:00', 'follow ke robby mengenai FPP HDD banjarmasin dan FPP Laptop', '', 1, '2021-04-06'),
(72, 3, '', 12, '2021-04-06 08:00:00', '2021-04-06 09:15:00', 'Update semua FPP yang ada di click up', 'FPP Laptop harus disertakan ACC bos', 1, '2021-04-06'),
(73, 1, '00099', 13, '2021-04-06 09:39:00', '2021-04-06 09:59:00', 'Diskusi tentang outlook dengan Mega Enginer', '', 1, '2021-04-06'),
(74, 1, '00360', 13, '2021-04-06 10:00:00', '2021-04-06 11:00:00', 'demo aplikasi posko dengan tim Shelter', 'dengan Yulius juga', 1, '2021-04-06'),
(75, 3, '', 12, '2021-04-06 09:30:00', '2021-04-06 13:37:00', 'Follow up layout dan update data ke semua PIC di setiap cabang', '', 1, '2021-04-06'),
(76, 3, '', 12, '2021-04-06 13:15:00', '2021-04-06 13:35:00', 'membuat list serah terima barang IT ke Shipper rungkut', '', 1, '2021-04-06'),
(77, 1, '', 7, '2021-04-06 08:40:00', '2021-04-06 14:44:00', 'Install dan update mini pc ke windows untuk shelter makasar', '', 1, '2021-04-06'),
(78, 2, '', 1, '2021-04-05 08:05:00', '2021-04-05 09:00:00', 'Memperbaiki printer Yenny Kasir.', 'Head cleaning karena tinta hitam tidak keluar saat mencetak.', 1, '2021-04-06'),
(79, 2, '', 2, '2021-04-05 09:00:00', '2021-04-05 09:30:00', 'Memandu by WA utk cek laptop mbak Ayu QMR.', 'Laptop gagal update, mengembalikan ke versi windows sebelumnya.', 1, '2021-04-06'),
(80, 2, '', 2, '2021-04-05 09:35:00', '2021-04-05 10:00:00', 'Memandu by WA mbak Hanifah Telmark Ruko Darmo.', 'Tidak bisa buka link karena timed out pada koneksi.', 1, '2021-04-06'),
(81, 2, '', 1, '2021-04-05 11:30:00', '2021-04-05 12:19:00', 'Remote repair komputer bu Dhea Pasuruan Kraton.', 'Ms. Office minta aktivasi ulang.', 1, '2021-04-06'),
(82, 2, '', 2, '2021-04-05 13:26:00', '2021-04-05 13:35:00', 'Minta alamat dan share lokasi ke pak Jacky.', 'Share loc fasilitas pabrik Utomodeck Makassar.', 1, '2021-04-06'),
(83, 2, '', 1, '2021-04-05 11:30:00', '2021-04-05 13:43:00', 'Memandu by WA utk perbaikan printer mbak Herlina UJASI.', 'Printer Epson L5190 tidak bisa ngeprint kertas macet/paper jam error.', 1, '2021-04-06'),
(84, 2, '', 2, '2021-04-05 09:35:00', '2021-04-05 11:30:00', 'Cek dan perbaiki koneksi dari end user mas Syilmi PPIC Rungkut ke VPS Accurate.', 'Problem pada koneksi telkomnya.', 1, '2021-04-06'),
(85, 2, '', 12, '2021-04-05 14:30:00', '2021-04-05 14:45:00', 'Mengarahkan by WA ke mas Syilmi PPIC Rungkut untuk alur pengadaan barang IT.', 'Rencana buat FPP utk beli Mouse USB.', 1, '2021-04-06'),
(86, 2, '', 1, '2021-04-05 14:25:00', '2021-04-05 15:00:00', 'Remote install aplikasi ke PC Dinda Jurtap Medan.', 'Install Accurate.', 1, '2021-04-06'),
(87, 2, '', 12, '2021-04-05 13:15:00', '2021-04-05 14:00:00', 'Hubungi pak Jefta untuk tanya posisi dan status tablet yang dibawa beliau sementara.', '', 1, '2021-04-06'),
(88, 2, '', 2, '2021-04-06 08:30:00', '2021-04-06 10:05:00', 'Copy file Database Accurate Utomodeck untuk di edit oleh pak Ruddy Viali.', 'File Test sudah di copy dan sudah bisa diakses.', 1, '2021-04-06'),
(89, 2, '', 1, '2021-04-06 10:00:00', '2021-04-06 10:00:00', 'Pandu by WA untuk perbaikan printer Mario Rungkut.', 'Printer tidak bisa mencetak bagian tengah saat mencetak file gambar.', 1, '2021-04-06'),
(90, 2, '00271', 12, '2021-04-06 09:00:00', '2021-04-06 02:00:00', 'Berkoordinasi dengan pak Triono Medan untuk dapatkan data CCTV Pabrik Medan.', 'Data QR Code dan password untuk akses ke device kamera.', 1, '2021-04-06'),
(91, 2, '00258', 12, '2021-04-06 10:35:00', '2021-04-06 10:45:00', 'Tandatangan SPP Pengadaan CCTV untuk kantor Jakarta Smesco.', 'Pengadaan sebanyak 2 unit kamera.', 1, '2021-04-06'),
(92, 2, '', 12, '2021-04-06 11:00:00', '2021-04-06 11:30:00', 'Cek dan Perbaikan koneksi internet di Ruko Darmo.', 'Sempat down beberapa saat sebelum akhirnya normal kembali.', 1, '2021-04-06'),
(93, 2, '00037', 12, '2021-04-06 09:00:00', '2021-04-06 13:50:00', 'Minta lay out Basrah dan Kraton.', 'Untuk pasang CCTV.', 1, '2021-04-06'),
(94, 6, '00258', 12, '2021-04-07 11:41:22', '2021-04-07 11:41:22', 'lanjutkan proyek CCTV', '', 1, '2021-04-07'),
(95, 6, '00382', 13, '2021-04-06 10:00:00', '2021-04-06 12:00:00', 'Meeting Shelter', '', 1, '2021-04-06'),
(96, 6, '00382', 11, '2021-04-06 13:00:00', '2021-04-06 15:00:00', 'setting Mini PC untuk posko di makassar, dan akan dibawa besok ', '', 1, '2021-04-06'),
(97, 6, '00258', 9, '2021-04-07 11:41:10', '2021-04-07 11:41:10', 'urus proses pindahan baran IT di cabang rungkut', '', 1, '2021-04-07'),
(98, 6, '00382', 13, '2021-04-06 16:00:00', '2021-04-06 18:00:00', 'Meeting SAP', '', 1, '2021-04-06'),
(99, 1, '00073', 13, '2021-04-07 08:50:00', '2021-04-07 09:06:00', 'Sharing knowladge tentang google drive dan google workspace', '', 1, '2021-04-07'),
(100, 1, '', 7, '2021-04-07 13:33:28', '2021-04-07 13:33:28', 'Mengatasi masalah library PdfGenerator', 'Linux sangat Case Sensitive', 1, '2021-04-07'),
(101, 3, '', 12, '2021-04-07 08:30:00', '2021-04-07 08:45:00', 'Booking armada buat besok untuk ambil printer di basrah', '', 1, '2021-04-07'),
(102, 3, '', 12, '2021-04-07 09:00:00', '2021-04-07 14:30:00', 'follow up PIC tiap - tiap cabang mengenai cctv, dan melengkapi denah dengan ukuran', '', 1, '2021-04-07'),
(103, 3, '', 12, '2021-04-07 13:30:00', '2021-04-07 13:40:00', 'restart modem rungkut', '', 1, '2021-04-07'),
(104, 1, '', 14, '2021-04-07 15:30:00', '2021-04-07 15:35:00', 'Update Grafik Dashboard IT Daily', '', 1, '2021-04-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_activity`
--
ALTER TABLE `tbl_activity`
  ADD PRIMARY KEY (`id_aktivitas`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_activity`
--
ALTER TABLE `tbl_activity`
  MODIFY `id_aktivitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
