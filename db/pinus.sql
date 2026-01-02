/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 8.0.30 : Database - pinus
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pinus` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `pinus`;

/*Table structure for table `agenda` */

DROP TABLE IF EXISTS `agenda`;

CREATE TABLE `agenda` (
  `id_agenda` int NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `id_kategori_agenda` int NOT NULL,
  `bahasa` enum('ID','EN') NOT NULL,
  `slug_agenda` varchar(255) NOT NULL,
  `judul_agenda` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `status_agenda` varchar(20) NOT NULL,
  `jenis_agenda` varchar(20) NOT NULL,
  `keywords` text,
  `gambar` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `hits` int NOT NULL DEFAULT '0',
  `urutan` int DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `tempat` text,
  `google_map` text,
  `tanggal_post` datetime NOT NULL,
  `tanggal_publish` datetime NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_agenda`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `agenda` */

insert  into `agenda`(`id_agenda`,`id_user`,`id_kategori_agenda`,`bahasa`,`slug_agenda`,`judul_agenda`,`isi`,`status_agenda`,`jenis_agenda`,`keywords`,`gambar`,`icon`,`hits`,`urutan`,`tanggal_mulai`,`tanggal_selesai`,`jam_mulai`,`jam_selesai`,`tempat`,`google_map`,`tanggal_post`,`tanggal_publish`,`tanggal`) values 
(1,4,6,'ID','latihan-agenda','Latihan Agenda','<p>Latihan</p>','Publish','Agenda','adad',NULL,'daad',0,NULL,'2020-09-12','2020-09-12','08:00:00','17:00:00','AWS Indonesia','<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7930.3386078467065!2d106.82893243028725!3d-6.372131203377098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed5d166b756d%3A0x41d8cdc14c819774!2sDepok%20Town%20Square!5e0!3m2!1sen!2sid!4v1579565022446!5m2!1sen!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>','2020-09-12 23:46:53','2020-09-12 23:42:16','2020-09-13 07:09:38'),
(2,14,4,'ID','dawa','dawa','<p>dawsdw</p>','Publish','Agenda',NULL,NULL,NULL,0,NULL,'2025-12-27','2025-12-27','08:00:00','17:00:00','PINUS','<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7930.3386078467065!2d106.82893243028725!3d-6.372131203377098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed5d166b756d%3A0x41d8cdc14c819774!2sDepok%20Town%20Square!5e0!3m2!1sen!2sid!4v1579565022446!5m2!1sen!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>','2025-12-27 13:29:58','2025-12-27 13:29:41','2025-12-27 20:30:16');

/*Table structure for table `berita` */

DROP TABLE IF EXISTS `berita`;

CREATE TABLE `berita` (
  `id_berita` int NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `id_kategori` int DEFAULT '0',
  `bahasa` enum('ID','EN') NOT NULL,
  `updater` varchar(32) DEFAULT '-',
  `slug_berita` varchar(255) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `status_berita` varchar(20) NOT NULL,
  `jenis_berita` varchar(20) DEFAULT 'Berita',
  `keywords` text,
  `gambar` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `hits` int DEFAULT NULL,
  `urutan` int DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_publish` datetime NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

/*Data for the table `berita` */

insert  into `berita`(`id_berita`,`id_user`,`id_kategori`,`bahasa`,`updater`,`slug_berita`,`judul_berita`,`isi`,`status_berita`,`jenis_berita`,`keywords`,`gambar`,`icon`,`hits`,`urutan`,`tanggal_mulai`,`tanggal_selesai`,`tanggal_post`,`tanggal_publish`,`tanggal`) values 
(31,14,8,'ID','-','deooo','deooo','<p>dasdwasdw</p>','Publish','Berita',NULL,'i-1766846516.jpg',NULL,NULL,NULL,NULL,NULL,'2025-12-27 14:41:56','0000-00-00 00:00:00','2025-12-27 21:41:56');

/*Table structure for table `download` */

DROP TABLE IF EXISTS `download`;

CREATE TABLE `download` (
  `id_download` int NOT NULL AUTO_INCREMENT,
  `id_kategori_download` int NOT NULL,
  `id_user` int NOT NULL,
  `bahasa` enum('ID','EN') NOT NULL,
  `judul_download` varchar(200) DEFAULT NULL,
  `jenis_download` varchar(20) NOT NULL,
  `isi` text,
  `file` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `hits` int NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_download`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `download` */

insert  into `download`(`id_download`,`id_kategori_download`,`id_user`,`bahasa`,`judul_download`,`jenis_download`,`isi`,`file`,`website`,`hits`,`tanggal`) values 
(7,0,14,'ID','sQWSWAD','Download','<p>WAD</p>','cv-achmad-yusuf-amir-1767025843.pdf',NULL,0,'2025-12-29 23:30:43');

/*Table structure for table `galeri` */

DROP TABLE IF EXISTS `galeri`;

CREATE TABLE `galeri` (
  `id_galeri` int NOT NULL AUTO_INCREMENT,
  `id_kategori_galeri` int NOT NULL,
  `id_user` int NOT NULL,
  `bahasa` enum('ID','EN') NOT NULL,
  `judul_galeri` varchar(200) DEFAULT NULL,
  `jenis_galeri` varchar(20) NOT NULL,
  `isi` text,
  `gambar` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `hits` int DEFAULT NULL,
  `popup_status` enum('Publish','Draft','','') NOT NULL,
  `urutan` int DEFAULT NULL,
  `status_text` enum('Ya','Tidak','','') NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_galeri`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `galeri` */

insert  into `galeri`(`id_galeri`,`id_kategori_galeri`,`id_user`,`bahasa`,`judul_galeri`,`jenis_galeri`,`isi`,`gambar`,`website`,`hits`,`popup_status`,`urutan`,`status_text`,`tanggal`) values 
(15,4,15,'ID','Jemari Edu','Homepage',NULL,'banner-3-1-1600727828-1741675500.png','https://blog.jemari-edu.web.id/info',1,'Publish',NULL,'Ya','2025-03-11 13:45:01'),
(18,7,16,'ID','produk 1','Galeri','dwadadadadadwadwaasdwasdwawdsadw','dwasdw-1766252867.jpg',NULL,NULL,'Publish',NULL,'Ya','2025-12-21 01:02:11'),
(19,7,16,'ID','dwa','Galeri','dawdadwa','images-1766254294.jpg',NULL,NULL,'Publish',NULL,'Ya','2025-12-21 01:11:48'),
(20,6,14,'ID','dasdw','Galeri','dwasdw','i-1766302247.jpg',NULL,NULL,'Publish',2,'Ya','2025-12-21 14:30:47');

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id_kategori` int NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `bahasa` enum('ID','EN') NOT NULL,
  `slug_kategori` varchar(255) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `urutan` int DEFAULT NULL,
  `hits` int DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_kategori`),
  UNIQUE KEY `nama_kategori` (`nama_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `kategori` */

insert  into `kategori`(`id_kategori`,`id_user`,`bahasa`,`slug_kategori`,`nama_kategori`,`urutan`,`hits`,`tanggal`) values 
(6,4,'ID','berita','Berita',3,0,'2020-09-13 04:36:42'),
(8,4,'ID','updates','Updates',2,NULL,'2020-09-13 04:36:35'),
(9,14,'ID','gggg','gggg',NULL,NULL,'2025-12-27 22:04:33');

/*Table structure for table `kategori_agenda` */

DROP TABLE IF EXISTS `kategori_agenda`;

CREATE TABLE `kategori_agenda` (
  `id_kategori_agenda` int NOT NULL AUTO_INCREMENT,
  `bahasa` enum('ID','EN') NOT NULL,
  `slug_kategori_agenda` varchar(255) NOT NULL,
  `nama_kategori_agenda` varchar(255) NOT NULL,
  `keterangan` text,
  `urutan` int DEFAULT NULL,
  PRIMARY KEY (`id_kategori_agenda`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `kategori_agenda` */

insert  into `kategori_agenda`(`id_kategori_agenda`,`bahasa`,`slug_kategori_agenda`,`nama_kategori_agenda`,`keterangan`,`urutan`) values 
(4,'ID','kegiatan-eksternal','Kegiatan Eksternal',NULL,2),
(6,'ID','kegiatan-internal','Kegiatan Internal',NULL,1);

/*Table structure for table `kategori_download` */

DROP TABLE IF EXISTS `kategori_download`;

CREATE TABLE `kategori_download` (
  `id_kategori_download` int NOT NULL AUTO_INCREMENT,
  `bahasa` enum('ID','EN') NOT NULL,
  `slug_kategori_download` varchar(255) NOT NULL,
  `nama_kategori_download` varchar(255) NOT NULL,
  `keterangan` text,
  `urutan` int DEFAULT NULL,
  PRIMARY KEY (`id_kategori_download`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `kategori_download` */

insert  into `kategori_download`(`id_kategori_download`,`bahasa`,`slug_kategori_download`,`nama_kategori_download`,`keterangan`,`urutan`) values 
(1,'ID','dokumen','Dokumen','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',1),
(4,'ID','download-pricelist','Download Pricelist','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',0),
(5,'ID','studi-kasus','Studi Kasus','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',2),
(6,'ID','webinar','Webinar','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',3);

/*Table structure for table `kategori_staff` */

DROP TABLE IF EXISTS `kategori_staff`;

CREATE TABLE `kategori_staff` (
  `id_kategori_staff` int NOT NULL AUTO_INCREMENT,
  `bahasa` enum('ID','EN') NOT NULL,
  `slug_kategori_staff` varchar(255) NOT NULL,
  `nama_kategori_staff` varchar(255) NOT NULL,
  `keterangan` text,
  `urutan` int DEFAULT NULL,
  PRIMARY KEY (`id_kategori_staff`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `kategori_staff` */

insert  into `kategori_staff`(`id_kategori_staff`,`bahasa`,`slug_kategori_staff`,`nama_kategori_staff`,`keterangan`,`urutan`) values 
(4,'ID','senyum-programmer','Senyum Programmer','Yeay...selain tim tutor kita juga ada tim programmer yang bekerja full time maupun part time',2),
(6,'ID','happy-tutor','Happy Tutor','Jemari Edu didampingi oleh tutor-tutor dan instruktur yang berpengalaman di bidangnya.',1);

/*Table structure for table `konfigurasi` */

DROP TABLE IF EXISTS `konfigurasi`;

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int NOT NULL AUTO_INCREMENT,
  `bahasa` enum('ID','EN') NOT NULL,
  `namaweb` varchar(200) NOT NULL,
  `nama_singkat` varchar(200) DEFAULT NULL,
  `tagline` varchar(200) DEFAULT NULL,
  `tagline2` varchar(255) DEFAULT NULL,
  `tentang` text,
  `deskripsi` text,
  `website` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_cadangan` varchar(255) DEFAULT NULL,
  `alamat` text,
  `telepon` varchar(50) DEFAULT NULL,
  `hp` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `keywords` varchar(400) DEFAULT NULL,
  `metatext` text,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `google_plus` varchar(255) DEFAULT NULL,
  `nama_facebook` varchar(255) NOT NULL,
  `nama_twitter` varchar(255) NOT NULL,
  `nama_instagram` varchar(255) NOT NULL,
  `nama_google_plus` varchar(255) NOT NULL,
  `singkatan` varchar(255) NOT NULL,
  `google_map` text,
  `judul_1` varchar(200) DEFAULT NULL,
  `pesan_1` varchar(200) DEFAULT NULL,
  `judul_2` varchar(200) DEFAULT NULL,
  `pesan_2` varchar(200) DEFAULT NULL,
  `judul_3` varchar(200) DEFAULT NULL,
  `pesan_3` varchar(200) DEFAULT NULL,
  `judul_4` varchar(200) DEFAULT NULL,
  `pesan_4` varchar(200) DEFAULT NULL,
  `judul_5` varchar(200) DEFAULT NULL,
  `pesan_5` varchar(200) NOT NULL,
  `judul_6` varchar(200) DEFAULT NULL,
  `pesan_6` varchar(200) NOT NULL,
  `isi_1` varchar(500) DEFAULT NULL,
  `isi_2` varchar(500) DEFAULT NULL,
  `isi_3` varchar(500) DEFAULT NULL,
  `isi_4` varchar(500) DEFAULT NULL,
  `isi_5` varchar(500) DEFAULT NULL,
  `isi_6` varchar(500) DEFAULT NULL,
  `link_1` varchar(255) DEFAULT NULL,
  `link_2` varchar(255) DEFAULT NULL,
  `link_3` varchar(255) DEFAULT NULL,
  `link_4` varchar(255) DEFAULT NULL,
  `link_5` varchar(255) DEFAULT NULL,
  `link_6` varchar(255) DEFAULT NULL,
  `javawebmedia` text,
  `gambar` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `rekening` text,
  `prolog_topik` text,
  `prolog_program` text,
  `prolog_sekretariat` text,
  `prolog_aksi` text,
  `prolog_kolaborasi` text,
  `prolog_sebaran` text,
  `gambar_berita` varchar(255) DEFAULT NULL,
  `prolog_agenda` text,
  `prolog_wawasan` text,
  `protocol` varchar(255) DEFAULT NULL,
  `smtp_host` varchar(255) DEFAULT NULL,
  `smtp_port` varchar(255) DEFAULT NULL,
  `smtp_timeout` varchar(255) DEFAULT NULL,
  `smtp_user` varchar(255) DEFAULT NULL,
  `smtp_pass` varchar(255) DEFAULT NULL,
  `judul_pembayaran` varchar(255) DEFAULT NULL,
  `isi_pembayaran` text,
  `gambar_pembayaran` varchar(255) DEFAULT NULL,
  `link_bawah_peta` varchar(255) DEFAULT NULL,
  `text_bawah_peta` varchar(255) DEFAULT NULL,
  `cara_pesan` enum('Keranjang Belanja','Formulir Pemesanan') DEFAULT NULL,
  `id_user` int DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_konfigurasi`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `konfigurasi` */

insert  into `konfigurasi`(`id_konfigurasi`,`bahasa`,`namaweb`,`nama_singkat`,`tagline`,`tagline2`,`tentang`,`deskripsi`,`website`,`email`,`email_cadangan`,`alamat`,`telepon`,`hp`,`fax`,`logo`,`icon`,`keywords`,`metatext`,`facebook`,`twitter`,`instagram`,`google_plus`,`nama_facebook`,`nama_twitter`,`nama_instagram`,`nama_google_plus`,`singkatan`,`google_map`,`judul_1`,`pesan_1`,`judul_2`,`pesan_2`,`judul_3`,`pesan_3`,`judul_4`,`pesan_4`,`judul_5`,`pesan_5`,`judul_6`,`pesan_6`,`isi_1`,`isi_2`,`isi_3`,`isi_4`,`isi_5`,`isi_6`,`link_1`,`link_2`,`link_3`,`link_4`,`link_5`,`link_6`,`javawebmedia`,`gambar`,`video`,`rekening`,`prolog_topik`,`prolog_program`,`prolog_sekretariat`,`prolog_aksi`,`prolog_kolaborasi`,`prolog_sebaran`,`gambar_berita`,`prolog_agenda`,`prolog_wawasan`,`protocol`,`smtp_host`,`smtp_port`,`smtp_timeout`,`smtp_user`,`smtp_pass`,`judul_pembayaran`,`isi_pembayaran`,`gambar_pembayaran`,`link_bawah_peta`,`text_bawah_peta`,`cara_pesan`,`id_user`,`tanggal`) values 
(1,'ID','PINUS','PINUS','Pusat Kursus Private &  Kelas Web, Mobile Apps, Desain Grafis dan Statistik','Pusat Kursus Private &  Kelas Web, Mobile Apps, Desain Grafis dan Statistik','<div style=\"display:contents\"><strong><a class=\"GI370e\" href=\"https://www.google.com/search?client=firefox-b-d&amp;q=PT+Pinus+Merah+Abadi&amp;mstk=AUtExfAZ8zdeTWqM68nqnHZrZ56eSBwx6dP3_3RKiwyitGLw5OhV9Gq7xae6uG3hvm95tb1JcHhF708JPf43eZRcHehku88JVXqwh7pr7FzXulQCjtfvQGeY4I_Rqmf74Yeuh7Br3DmsKllMFnqlfZlrYASDy-Tpc9oqwpGy9EaMEvE69WG6xonVQCQ-EHwqrDxT5YE5avkSmyYCp_kGtJVB3ignYDCvbaEo7qYLQGxqBSjnHi8n-ffzog_WDm1CN1h31cD8jm2CTwNBSo4Hxa3lmSXbCcp8Rkm3gnAKuQQ-p5-uug&amp;csui=3&amp;ved=2ahUKEwiFjri-8cyRAxUM2DgGHeA5KlcQgK4QegYIAQgAEAM\">PT Pinus Merah Abadi</a></strong></div>\r\n\r\n<p><strong>(PMA)</strong> adalah perusahaan distribusi besar di Indonesia yang menangani penjualan produk (terutama makanan ringan dari <a class=\"GI370e\" href=\"https://www.google.com/search?client=firefox-b-d&amp;q=NABATI&amp;mstk=AUtExfAZ8zdeTWqM68nqnHZrZ56eSBwx6dP3_3RKiwyitGLw5OhV9Gq7xae6uG3hvm95tb1JcHhF708JPf43eZRcHehku88JVXqwh7pr7FzXulQCjtfvQGeY4I_Rqmf74Yeuh7Br3DmsKllMFnqlfZlrYASDy-Tpc9oqwpGy9EaMEvE69WG6xonVQCQ-EHwqrDxT5YE5avkSmyYCp_kGtJVB3ignYDCvbaEo7qYLQGxqBSjnHi8n-ffzog_WDm1CN1h31cD8jm2CTwNBSo4Hxa3lmSXbCcp8Rkm3gnAKuQQ-p5-uug&amp;csui=3&amp;ved=2ahUKEwiFjri-8cyRAxUM2DgGHeA5KlcQgK4QegYIAQgAEAU\">NABATI</a>) melalui jaringan ritel tradisional dan modern, memiliki ratusan depo, dan fokus pada pengembangan SDM serta sistem distribusi yang efisien untuk melayani ratusan ribu outlet di seluruh negeri. Sementara itu, <em><a class=\"GI370e\" href=\"https://www.google.com/search?client=firefox-b-d&amp;q=pinus+merah+%28red+pine%29&amp;mstk=AUtExfAZ8zdeTWqM68nqnHZrZ56eSBwx6dP3_3RKiwyitGLw5OhV9Gq7xae6uG3hvm95tb1JcHhF708JPf43eZRcHehku88JVXqwh7pr7FzXulQCjtfvQGeY4I_Rqmf74Yeuh7Br3DmsKllMFnqlfZlrYASDy-Tpc9oqwpGy9EaMEvE69WG6xonVQCQ-EHwqrDxT5YE5avkSmyYCp_kGtJVB3ignYDCvbaEo7qYLQGxqBSjnHi8n-ffzog_WDm1CN1h31cD8jm2CTwNBSo4Hxa3lmSXbCcp8Rkm3gnAKuQQ-p5-uug&amp;csui=3&amp;ved=2ahUKEwiFjri-8cyRAxUM2DgGHeA5KlcQgK4QegYIAQgAEAY\">pinus merah (red pine)</a></em> secara botani adalah jenis pohon konifer (seperti <em>Pinus resinosa</em>) yang kayunya kuat, berwarna kemerahan, dan sering digunakan untuk konstruksi atau bahan pulp, sert</p>\r\n\r\n<p>Jemari Edu adalah lembaga kursus yang bergerak di bidang pendidikan khususnya kursus website, digital marketing, desain grafis dan statistik. Sampai saat ini Jemari Edu sudah memiliki lulusan lebih dari 1200 orang dari berbagai status dan profesi mulai dari pelajar sekolah, mahasiswa, guru, dosen, staff profesional, freelancer, dll. Lulusan tidak hanya dari Indonesia tapi juga dari beberapa negara tetangga seperti New Zealand, Timor Leste dan Malaysia.</p>\r\n\r\n<p>Jemari Edu membuka cabang pertamanya pada tahun 2014. Hingga tahun 2020 ini, Jemari Edu telah memiliki 2 cabang yang berlokasi di kota Depok.</p>\r\n\r\n<p>Selain bergerak di bidang pendidikan Jemari Edu juga memiliki layanan di bidang perencanaan strategis sistem informasi, pengembangan aplikasi berbasis web dan berbasis mobile (Android dan IOS/Apple).</p>\r\n\r\n<p>&nbsp;</p>','Grow And Strengthen Leadership On Good IT Team Performance for Now And The Feature.','https://.com','contact@jemari-edu.web.id','contact@jemari-edu.web.id','Mall Depok Town Square\r\nLt 2 Blok SS1 No. 5-7\r\nJl. Margonda Raya Kota Depok','085715100485','+6281210697841','081210697841','floating-pink-water-lilies-h111vlhifklj5qlw.jpg','i.jpg','educamedia, Jemari Edu, laravel, online course, kursus online',NULL,'https://www.facebook.com/javawebmedia','http://twitter.com/javawebmedia','https://instagram.com/javawebmedia','https://www.youtube.com/channel/UCmm6mFZXYQ3ZylUMa0Tmc2Q','Educamedia','Educamedia','Educamedia','','JWM','<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7930.3386078467065!2d106.82893243028725!3d-6.372131203377098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed5d166b756d%3A0x41d8cdc14c819774!2sDepok%20Town%20Square!5e0!3m2!1sen!2sid!4v1579565022446!5m2!1sen!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>','Tempat belajar nyaman','fa fa-home','Materi Kursus Selalu Update','fa fa-laptop','Jadwal Flexibel','fa fa-thumbs-up','Menjaga Amanah','fa-check-square-o','Tempat belajar nyaman','fa-home','Online service','fa-laptop','Kami menyediakan tempat belajar yang nyaman dan menyenangkan serasa di rumah sendiri','Materi kursus kamu selalu uptodate, Anda bisa mengunduh apa yang dipelajari','Bagi Anda siswa yang ingin belajar, kami menerapkan jadwal flexibel','Kami senantiasa menjaga amanah yang diberikan kepada donatur agar sampai di tangan yang berhak.','Kami menyediakan tempat belajar yang nyaman dan menyenangkan','Website kamu selalu uptodate, Anda bisa mengunduh apa yang dipelajari','','','','','','','<p>Berawal dari keinginan ibunda Hj.Masah Muhari diakhir hidupnya untuk mewakaan sebagian hartanya dijalan Allah, gayungpun bersambut pada bulan Mei 2011 saat kami akan melaksanakan ibadah umrah, Seorang rekan kami sesama Jamaah bernama ustadzah Hj. Zainur Fahmid memberikan informasi Tentang Anggota yang hendak mewakaan sebidang tanahnya di wilayah Beji Timur. Kami pun memanjatkan doa di kota suci dengan penuh rasa harap pertolongan Allah untuk menunjukan jalan terbaik-Nya, maka sepulang umroh kami mengadakan pertemuan di kediaman Ibu Dra Hj Ratna Mardjanah untuk membicarakan visi misi kami dalam wakaf tersebut dan sepakat untuk mendirikan Istana Yatim Riyadhul Jannah ini.</p>\r\n<p>Nama Riyadhul Jannah Sendiri diambil dari nama pengelola wakaf (H. Ahmad Riyadh Muchtar, Lc) dan pemberi wakaf (Dra Hj Ratna Mardjanah). Istana Yatim Riyadhul Jannah hadir untuk melayani dan memfasilitasi segala kebutuhan anak yatim, terutama pendidikan agama, akhlak dan kehidupan yang layak untuk bekal masa depan mereka yang cerah agar bisa memberi manfaat bagi umat. Harapan kami semoga dengan membangunkan istana untuk anak yatim, maka Allah akan berikan istana-Nya di surga kelak dan kita termasuk manusia yang bisa memberika manfaat bagi sesama sebagaimana sabda Rasulullah SAW yang artinya:&nbsp;</p>\r\n<p>&ldquo;Sebaik-baik manusia adalah yang paling bermanfaat bagi manusia lainnya&rdquo;&nbsp;</p>\r\n<p>erimakasih atas segala bentuk bantuan yang dipercayakan kepada kami baik secara materi, tenaga dan kiran serta doa para muhsinin dan muhsinat Istana Yatim Riyadhul Jannah selama ini, mulai dari rencana pendirian hingga berkembang seperti saat ini. Semoga segala amal menjadi shadaqah jariyah disisi-Nya.&nbsp;</p>\r\n<p>&nbsp;</p>','i.jpg','fsH_KhUWfho','<table id=\"dataTables-example\" class=\"table table-bordered\" width=\"100%\">\r\n<thead>\r\n<tr>\r\n<th tabindex=\"0\" colspan=\"1\" rowspan=\"1\" width=\"19%\">Nama Bank</th>\r\n<th tabindex=\"0\" colspan=\"1\" rowspan=\"1\" width=\"21%\">Nomor Rekening</th>\r\n<th tabindex=\"0\" colspan=\"1\" rowspan=\"1\" width=\"7%\">Atas nama</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td>BCA KCP Margo City</td>\r\n<td>4212548204</td>\r\n<td>Andoyo</td>\r\n</tr>\r\n<tr>\r\n<td>Bank Mandiri KCP Universitas Indonesia</td>\r\n<td>1570001807768</td>\r\n<td>Eflita Meiyetriani</td>\r\n</tr>\r\n<tr>\r\n<td>Bank BNI Syariah Kantor Cabang Jakarta Selatan</td>\r\n<td>0105301001</td>\r\n<td>Eflita Meiyetriani</td>\r\n</tr>\r\n</tbody>\r\n</table>','<p>Dalam mewujudkan pembangunan berkelanjutan, pemerintah kabupaten anggota LTKL telah mengidentifikasi dan memilih topik yang sesuai dengan kondisi di daerahnya. Ada 5 topik prioritas yang dipilih dengan penerapan yang disesuaikan kembali di masing-masing kabupaten.</p>',NULL,'<p>Setelah Lingkar Temu Kabupaten Lestari (LTKL) diinisiasi, kesekretariatan dibentuk untuk membantu para pemerintah kabupaten anggota bekerja dan berkolaborasi. Walaupun tidak memiliki mandat implementasi, Sekretariat LTKL menjadi vital dalam melancarkan koordinasi, pengumpulan basis data, hingga pelaporan perkembangan. Sekretariat LTKL juga diperkuat dengan kehadiran personil yang telah berpengalaman di bidang management pengetahuan, program pembangunan berkelanjutan hingga kebijakan.</p>','','<p>Lingkar Temu Kabupaten Lestari (LTKL) mengedepankan kolaborasi dalam mewududkan pembangunan berkelanjutan. Ada 10 kabupaten yang tersebar di 6 provinsi di Indonesia telah menjadi anggota LTKL.</p>\r\n<p>Hingga kini, berbagai pihak telah ikut berkolaborasi, mulai dari pemerintah kabupaten, sekeretariat LTKL, mitra pembangunan hingga pihak swasta.</p>','','balairung-budiutomo-01.jpg','<p>Acara yang ditampilkan merupakan kumpulan acara LTKL, mitra, maupun pemerintah kabupaten anggota LTKL, mulai dari acara seminar hingga festival.</p>','<p>LTKL bukan satu-satunya yang bergerak dalam mewujudkan pembangunan berkelanjutan, serta upaya penanggulangan perubahan iklim. Ikuti terus perkembangan usaha LTKL serta rekan-rekan lain menuju bumi dan Indonesia yang lestari.</p>','smtp','ssl://mail.jemari-edu.web.id','465','12','info@jemari-edu.web.id','jemariedu','Metode Pembayaran Produk','<p>Anda dapat melakukan pembayaran dengan beberapa cara, yaitu:</p>\r\n<ol>\r\n<li><strong>Pembayaran Tunai</strong>, dapat Anda serahkan secara langsung ke salah satu staff Jemari Edu</li>\r\n<li><strong>Pembayar Via Transfer Rekening</strong></li>\r\n</ol>\r\n<p>Lakukan transfer biaya atas layanan dan produk&nbsp;<strong>Jemari Edu</strong>&nbsp;ke salah satu rekening di bawah ini.</p>\r\n<h3>Konfirmasi Pembayaran</h3>\r\n<p>Anda dapat melakukan konfirmasi pembayaran melalui:</p>\r\n<ul>\r\n<li><strong>Melalui Email</strong>, silakan kirim bukti pembayaran ke:&nbsp;<strong><a href=\"mailto:contact@jemari-edu.web.id?subject=Konfirmasi%20Pembayaran\">contact@jemari-edu.web.id</a></strong></li>\r\n<li><strong>Melalui Whatsapp</strong>, kirimkan bukti pembayaran Anda ke&nbsp;<strong>+6281210697841</strong></li>\r\n<li><strong>Melalui Formulir Konfirmasi Pembayaran</strong>, Anda dapat mengunggah bukti pembayaran Anda melalui form&nbsp;<strong><a title=\"Konfirmasi Pembayaran\" href=\"https://javawebmedia.com/konfirmasi\">&nbsp;Konfirmasi Pembayaran</a></strong></li>\r\n</ul>','payment.jpg',NULL,NULL,'Formulir Pemesanan',14,'2025-12-21 14:55:48');

/*Table structure for table `mitra` */

DROP TABLE IF EXISTS `mitra`;

CREATE TABLE `mitra` (
  `id_mitra` int NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `bahasa` enum('ID','EN') NOT NULL,
  `nama_mitra` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `isi` text NOT NULL,
  `status_mitra` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_mitra`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `mitra` */

insert  into `mitra`(`id_mitra`,`id_user`,`bahasa`,`nama_mitra`,`isi`,`status_mitra`,`gambar`) values 
(1,14,'ID','latihan-agenda','<p>Latihan</p>','Publish','images-1766895794.jpg'),
(2,14,'ID','dawa','<p>dawsdw</p>','Publish',NULL),
(4,14,'ID','sxdwadawd','<p>dwasdwasdw</p>','Publish','images-1766891938.jpg');

/*Table structure for table `staff` */

DROP TABLE IF EXISTS `staff`;

CREATE TABLE `staff` (
  `id_staff` int NOT NULL AUTO_INCREMENT,
  `id_user` int DEFAULT NULL,
  `id_kategori_staff` int NOT NULL,
  `slug_staff` varchar(255) NOT NULL,
  `nama_staff` varchar(255) NOT NULL,
  `jabatan` varchar(200) DEFAULT NULL,
  `pendidikan` varchar(255) DEFAULT NULL,
  `expertise` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telepon` varchar(255) DEFAULT NULL,
  `isi` text,
  `gambar` varchar(200) DEFAULT NULL,
  `status_staff` varchar(20) NOT NULL,
  `keywords` varchar(200) DEFAULT NULL,
  `urutan` int DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_staff`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `staff` */

insert  into `staff`(`id_staff`,`id_user`,`id_kategori_staff`,`slug_staff`,`nama_staff`,`jabatan`,`pendidikan`,`expertise`,`email`,`telepon`,`isi`,`gambar`,`status_staff`,`keywords`,`urutan`,`tanggal`) values 
(1,15,4,'bina-rika-program-director','Bina Rika','Program Director',NULL,NULL,NULL,NULL,NULL,'board-and-team-01-1599999423a.png','Tidak',NULL,1,'2025-03-11 14:25:51'),
(2,15,4,'karyani-knowledge-and-learning-officer','Karyani','Knowledge and Learning Officer',NULL,NULL,NULL,NULL,NULL,'board-and-team-05-15a99999506.png','Tidak',NULL,2,'2025-03-11 14:25:29'),
(3,15,4,'programmer-communication-and-project-officer','Programmer','Communication and Project Officer',NULL,NULL,NULL,NULL,NULL,'manajemen-1741677911.png','Ya',NULL,3,'2025-03-11 14:25:11'),
(4,15,6,'nofal-anam-ketua-dewan-pembina','Nofal Anam','Ketua Dewan Pembina','S1',NULL,NULL,NULL,NULL,'nofal-anam-1741668647.jpg','Ya',NULL,0,'2025-03-11 11:50:47'),
(5,15,6,'firyanul-rizky-ketua-dewan-pengawas','Firyanul Rizky','Ketua Dewan Pengawas','S1',NULL,NULL,'0895606181117',NULL,'firyanul-rizky-1741668812.jpg','Ya',NULL,2,'2025-03-11 11:53:32'),
(6,15,6,'audini-nifira-ketua-dewan-pengurus','Audini Nifira','Ketua Dewan Pengurus','S1',NULL,NULL,NULL,NULL,'audini-nifira-1741668961.jpg','Ya',NULL,3,'2025-03-11 11:56:01'),
(7,15,6,'gungwik-dewi-lestari-sekretaris-dewan-pengurus','Gungwik Dewi Lestari','Sekretaris Dewan Pengurus','S1',NULL,NULL,NULL,NULL,'gungwik-1741669362.jpg','Ya',NULL,4,'2025-03-11 12:03:00'),
(8,15,6,'dani-widya-bendahara-dewan-pengurus','Dani Widya','Bendahara Dewan Pengurus',NULL,NULL,NULL,NULL,NULL,'board-and-team-02-160000a0191.png','Tidak',NULL,5,'2025-03-11 11:58:47');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `akses_level` varchar(20) NOT NULL,
  `kode_rahasia` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id_user`,`nama`,`email`,`username`,`password`,`akses_level`,`kode_rahasia`,`gambar`,`tanggal`) values 
(14,'Eflita Meiyetriani','eflita@gmail.com','deo','de','Admin',NULL,'course-8-1599013102.jpg','2025-12-21 14:30:08'),
(15,'Rizky User','rizki@tcontinent.com','rizky','829b36babd21be519fa5f9353daf5dbdb796993e','User',NULL,'robusta-1741667887.png','2025-03-11 11:38:07');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
