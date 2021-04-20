/*
SQLyog Community v13.1.2 (64 bit)
MySQL - 10.4.17-MariaDB : Database - db_ims
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_ims` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_ims`;

/*Table structure for table `tbl_employee` */

DROP TABLE IF EXISTS `tbl_employee`;

CREATE TABLE `tbl_employee` (
  `nik` varchar(11) NOT NULL,
  `nama_karyawan` varchar(50) DEFAULT NULL,
  `dept` int(11) DEFAULT NULL,
  PRIMARY KEY (`nik`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_employee` */

insert  into `tbl_employee`(`nik`,`nama_karyawan`,`dept`) values 
('00001','DARMAWAN UTOMO',42),
('00002','ANTHONY UTOMO',42),
('00005','JOHANNES IE',26),
('00007','YULIANA INDAH',10),
('00008','RUDDY VIALI PANGAU',28),
('00010','RONALD PINANGKAAN',26),
('00011','NENIK',33),
('00012','GRACE NOVITA',36),
('00013','AGUNG SETYA HERMAWAN',26),
('00014','SYILMI NADJIB',25),
('00015','IFFA SUGESTI',5),
('00016','MAI DWI NURJAYANTI',6),
('00017','HERI SETYAWATI',1),
('00020','ANDREAS ARIANTO TEDJASUKMANA MSi',1),
('00021','FRANSISCUS DARMASETIAWAN',5),
('00022','TABITA NATALIA WIJONO',5),
('00023','AJENG AYU HAPSARI',24),
('00026','YENY MEGA APRILITA',5),
('00027','YULIATI KRESNAWATININGSIH',7),
('00028','CYNTHIA DEWI WONODJOJO',6),
('00029','JM STEPHANIE HALIM',24),
('00030','NATANAEL MARCELINO',6),
('00032','RISMA LESTARI',33),
('00035','ROSELLA NANDA WIDIANINGSIH',27),
('00036','BAGUS PRIYO UTOMO',14),
('00037','ZULHAN CHANI',21),
('00038','MUKHAMMAD RIZQI ALFIAN',27),
('00039','ABDUL KARIM',27),
('00040','TRISTIAWAN PUTRA NURHABIBI',27),
('00043','KRISTIAN PRASETYO LOBO',2),
('00044','ARLIA HARINAWATI',25),
('00045','MOH HAFIDZ WAHIDIL R',25),
('00046','DINA SULISTYOWATI',33),
('00047','UMI NADHIRO',8),
('00050','JUMADI',15),
('00051','TEDY JULIZAR',15),
('00052','ADE SUPRIYADI',15),
('00053','SUKRON',15),
('00054','RUDI HARMONO',15),
('00055','DENY ARIWARDANA',15),
('00056','WIDYA ADI CANDRA',15),
('00057','M GHOZALI',21),
('00058','HERI SUSENO',21),
('00059','ANDIK NURIADI',21),
('00060','CINTYA DINDA PERMATASARI GUNAWAN',18),
('00062','RAMI',21),
('00063','BUDI UTOMO',27),
('00064','BAGUS SUSILO',27),
('00066','YENI SOFIANA',5),
('00069','TOMY TRI YULIANTO',25),
('00071','UDIYONO',15),
('00073','MEIFI LEONY PRASTIWI',26),
('00074','FETY IZZA LUTHFIYAH',20),
('00075','MARCELINA KUSUMA PUTRI',17),
('00077','ILHAM PANCA NUGRAHA',27),
('00078','ZIVACK AR RAZAK VELAYATIE',27),
('00079','SALMAN BISYRI',14),
('00080','MISRI FIDIYANTO',15),
('00085','PUTRI AYU INDAHSARI',36),
('00086','MUHAMMAD UMAR FAROUQ',11),
('00087','NATHANIA LISTYANI',7),
('00088','MUHAMMAD KOMARUS ZAMAN SE',7),
('00089','CITRA AGUSTINE PUTRI RUMPAIDUS',18),
('00091','PHILLIPS DAVID BEMBUAIN',18),
('00092','DANANG WISNU BUDIARTO',12),
('00097','ENDANG SETIANI',27),
('00098','AHMAD ZAKI ABDUL HAMID AL HABA',44),
('00099','MEGA AFRIANDINI',11),
('00101','SARA AFIDA PERTIWI',13),
('00102','NARITA KURNIASARI',12),
('00103','WIENAR OCTANIA',19),
('00104','YULIUS LALO AWANG',21),
('00105','FEBRIANI',11),
('00106','ADITYA BAGUS SETIAWAN',44),
('00107','PRASMA WIGESTIKA',12),
('00108','LINA KURNIA PUTRI',12),
('00109','LESTARI AYU SETYOWATI MPsi',12),
('00110','IZHARUDDIN AZHAR ALIF KHANS E MM',34),
('00111','IRFAN REZA WAHYUDI',44),
('00113','ABDI JAYANATA',19),
('00118','VINCENTIUS RAYLANDYANTO SAKSONO',44),
('00120','ATIKAH GHASSANI',5),
('00121','HARI RINI SAKTRIANI',6),
('00122','TANIA MUTIA RANI',12),
('00123','DILA LESTARI',12),
('00124','RANI RIZQI MAWARDI',12),
('00125','MOHAMMAD ANWAR',21),
('00126','MUHAMAD HASAN',21),
('00127','ANTONIUS MARIO SATRIA HERMAWAN',44),
('00129','ELLYZABETH PRICILLINA',33),
('00130','SHEILA AYU ANDINI',33),
('00132','GURITNO KUNTOROYAKTI',33),
('00134','MUCHTAR SUGIANTO',15),
('00135','KEVIN MUZAMMIL',12),
('00137','RUDI WAHONO',14),
('00138','SUYATNAN',44),
('00139','YANNY KRISTIYOWATI',4),
('00140','MOH JAMZURI',14),
('00141','MUNIP',14),
('00142','SUYONO',26),
('00143','FAUZIATUL IKRIMA',23),
('00144','IDA BAGUS ANDIKA HARVIDYANTO',27),
('00145','SAMSUL ARIFIN (Kraksaan)',44),
('00146','DIAH MUSTIKA SARI',32),
('00147','MOCH ARIF KURNIAWAN',30),
('00148','ERI RUSDIONO',27),
('00150','IKKE NISFUL LAILA',25),
('00151','MUCHAMMAD MUSTAIN',30),
('00152','TARIMUN',21),
('00153','MOCHAMAD SAFII',21),
('00154','KANTODIHARJO',21),
('00155','IMRON ROSADI',23),
('00156','SAMSUL ARIFIN (forklift)',14),
('00157','SUWARJI',4),
('00158','SEGER',4),
('00159','MUSTAKIM',14),
('00160','SEKARNYOTO',4),
('00161','MIFTACHUL ANWAR',4),
('00162','DIDIK SETIAWAN',4),
('00164','MANSUR',26),
('00165','LUTFI',26),
('00166','SAMSUL HADI',14),
('00167','ZAINAL ARIFIN',44),
('00168','ARIFIN',31),
('00169','MUHAMMAD ROHMAN ALAIKA',27),
('00170','MOHAMAD SAENI',14),
('00171','HARIYANTO',44),
('00172','MUKHAMAAD SAIFUL',27),
('00173','LUTDIYONO',23),
('00174','MUHAMAD DAWUD',26),
('00175','A BASORI',14),
('00176','MUHAMMAD LUKMAN',44),
('00177','MUHAMMAD MUSAFAK',26),
('00178','ALWI',23),
('00179','SAMSUL ARIFIN (Kramat)',4),
('00180','SAEFUDIEN AINUL YAQIN',14),
('00181','SYAIFUDIN',23),
('00182','ARIF MULYONO',26),
('00183','NURIL ASWAD',26),
('00184','M HIDAYATULLAH',14),
('00185','ACHMAD EKO YULI PERMADI',26),
('00186','MUHAMMAD YOSI CHANDRA',23),
('00187','M MUSTOFA',31),
('00191','NUR WAHYU',26),
('00192','MUKHAMAD IMRON',14),
('00193','SOLEH',4),
('00194','M SUKARTONO',4),
('00195','M SYARONI',26),
('00196','MOCHAMAD AZQI',26),
('00197','ALEX SUBANDRIO',4),
('00198','ABDUL GHOFUR',23),
('00200','ABDULLAH (KB)',21),
('00201','SOLIKHIN',4),
('00202','MASHUDI',4),
('00203','EDI SUDARMAWAN',4),
('00204','M RIDUWAN',4),
('00205','SAMSUL ARIFIN (Muat)',14),
('00206','AGUS EKO SUGIYANTO',23),
('00207','SITI MAISAROH',32),
('00208','M ILHAM HABIBI',14),
('00209','FEBRI ARIS MAULANA',26),
('00210','MUHAMMAD SHOLIHIN',14),
('00211','AINUL YAKIN',23),
('00212','ANA MASRUROH',17),
('00214','AGUS SHOLEHADI',26),
('00215','M JAYADI',27),
('00217','ELSA SIRLY ELOK WAHYU PANGESTI',17),
('00218','MOH NUR AMINULLOH',26),
('00219','ARIS SISWANTO',4),
('00220','MOHAMAD ARIS',14),
('00221','AKHMAD RIDUWAN',4),
('00222','NOVAN WIBISONO',23),
('00223','UBAEDILLAH',4),
('00224','MOHAMMAD RIZKY',23),
('00225','ALIYADI',4),
('00226','RACHMAD DANI',27),
('00227','SUNARI',4),
('00232','FIKRI AHMAD RAIHAN',11),
('00234','DADANG SETIAWAN',25),
('00235','M ISHAQ',44),
('00236','YAZID BASTOMI',23),
('00237','VICTOR JEREMIA TOBING',33),
('00238','MOCH SOLEH',33),
('00239','SUMINTO',33),
('00240','ABDUL HALIM',33),
('00257','Siauw Yu Li',33),
('00258','Novita Seviyani Febri',2),
('00259','Edu Wahyana',22),
('00261','Taufa Rismanto',27),
('00262','Toni Eko Farianto',44),
('00263','Rahadi Wiyono',39),
('00264','Sutarti',39),
('00265','Made Dhanang Dewata',39),
('00268','Natalius Watratan',4),
('00269','Panan',37),
('00270','Lily Yuli Astiti',25),
('00271','Triono Hadi',35),
('00272','Drs EC Kurniawan Budi S',14),
('00273','Berdik Ariyanto',31),
('00274','Hartono',14),
('00276','Mangun Kusumo Subandriyo',30),
('00277','Septian Novan Saputra',14),
('00278','Hariono',14),
('00279','Ardy Catur Prasetyo',14),
('00281','Dominikus Bora',21),
('00282','Kariono',21),
('00283','Suhartono',4),
('00284','Agus Riyadi',4),
('00285','Abdul Shomat Alatas',4),
('00286','Zainul',14),
('00288','Basuki Rachmad',14),
('00289','Munir',14),
('00290','Achmad Fachrizal',14),
('00291','Agus Santoso',23),
('00292','Fatkhurrozi',14),
('00293','Agus Pirmadi',14),
('00294','Daud Waluyo Surip',4),
('00295','Legian Silfanes',4),
('00296','Wahyudi Ariyanto',14),
('00297','Abdul Wahid',14),
('00299','Mustofa',4),
('00301','Moh Khoirur Rohimin',4),
('00302','Samsiyah',21),
('00303','Surya Arya Santo',30),
('00304','Muhammat Ardian Safii',27),
('00305','Mochamad Irwan',44),
('00306','Jery Prayogo',27),
('00307','ARIS SUPRIANTO',44),
('00308','FX R BAMBANG GUTAMA',33),
('00310','SITI ISTIARSIH SE',33),
('00311','HARSO WALUYO',33),
('00312','MUSTAFID',33),
('00313','FEBBY DAMAIRIA',35),
('00314','TRI WAHYONO',35),
('00315','YUSUF ARI JATMIKO',35),
('00316','AJENG CAHYANING PERTIWI',35),
('00317','ENY SURONO',14),
('00318','TEGUH TRI BANANDA',14),
('00322','ALISA QURRATA A\'YUN',44),
('00323','ROBBY PRADANA PUTRA',24),
('00326','NUR SURONO',27),
('00330','FATIN KUNIA LAILI',24),
('00336','TRI MUCHAMAD RAMADANI',14),
('00337','ARDYAN WAHYU PRADICTA UTAMA',34),
('00339','GRIFFITHE FADLY',15),
('00342','IIS SUSANTI',33),
('00345','RINA SUSILAWATI',27),
('00346','YUDHI APRIANTO',34),
('00348','VIKO VALDIANO',19),
('00349','EMMY WOELANSARI',26),
('00357','RETTY EKSA KHARDIAS',40),
('00359','MUHAMMAD INDRA ROHMADDILLAH',27),
('00360','SUJATMIKO DONOHADI',38),
('00361','TIARA WARDANI',44),
('00362','NIKEN SUSANTI GUSTINA',16),
('00363','M ASHAR KOLIQ',4),
('00364','ADEK MIFTAKHUL HUDA',25),
('00365','AYU NUR ANISA RAHMAWATI',8),
('00371','ANANTO SANDDY SUBAGIO',26),
('00372','NURVA\'IN',29),
('00374','ALFIAN HERLANDA AFIESTA',27),
('00375','BERNARDUS LEGOWO WIDHI',17),
('00376','JEFTA TIMOTIUS',2),
('00378','MOHAMAD BAGIR ASSEGAFF',5),
('00382','MOCH. FIRMAN FIRDAUS',2),
('00383','MUHAMMAD AGUNG BIMANTARA',27),
('00385','IRFAN HARYO',5),
('00386','KUSMALI',43),
('00387','RIRIN DESI ARIS WATI',25),
('00388','AHMAD EFENDI',44),
('00389','ABDULLOH',30),
('00390','ALIVARA LINTANG MAHARANI',6),
('00391','ERVINA KIELAND',7),
('00392','NOVA BIMA PRAYOGA',37),
('00395','SUTAJI',23),
('00397','MUHAMMAD MALIK FATHURRAHMAN',44),
('00398','RIZA ACHMAD ROYYA',44),
('00399','YUDHI EFENDI, S.H., M.H.',34),
('00400','YEHEZKIEL ARDO EKA PUTRA',44),
('00401','SETIAWATI HAMBALI',7),
('00402','M. AGUNG DIRMAWAN',12),
('00403','BAHRUL AFANDI',27),
('00404','AFRIZAL FEBRI SYAHFITROH',25),
('00405','QORI ERFAN SAHRIL',12),
('00407','ILHAM MUQORROBIN',27),
('00408','HERLINA IKA YUNITA',7),
('00409','DITA ELVIRA RESTIANA',24),
('00410','ADINDA AISYAH PRATIWI',12),
('00411','MOH IRJIK',30),
('00412','PUTRA MAHENDRA',33),
('00413','YANUAR KOMARUDI',27),
('00414','RIZAL DIMAS',32),
('00415','SIFERA DINDA',33),
('00417','MUHAMMAD ARIE PRATAMA',27),
('00418','RAHMA MAULIDIA ARZANTI',44),
('00420','MUHAMMAD DEKY AL ROSYIQ UMAR',27),
('00421','DISTA DIRGANTORO',45),
('00422','DWI ATIKA',33),
('00423','MUHAMMAD RAYMOND PUTRA SAMEDI',33),
('00424','BARNES RISKY PRENAMIA',26);

/*Table structure for table `tbl_item` */

DROP TABLE IF EXISTS `tbl_item`;

CREATE TABLE `tbl_item` (
  `id_item` int(11) NOT NULL,
  `nama_item` varchar(255) DEFAULT NULL,
  `tipe_sn` varchar(4) DEFAULT NULL,
  `serial_number` varchar(30) DEFAULT NULL,
  `tipe_kategori` varchar(5) DEFAULT NULL,
  `dept_item` int(11) DEFAULT NULL,
  `kategori_item` int(11) DEFAULT NULL,
  `sub_kategori_item` int(11) DEFAULT NULL,
  `tipe_brand` int(11) DEFAULT NULL,
  `count` varchar(20) DEFAULT NULL,
  `warna` varchar(10) DEFAULT NULL,
  `tahun_pembelian` varchar(5) DEFAULT NULL,
  `validation` date DEFAULT NULL,
  PRIMARY KEY (`id_item`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_item` */

insert  into `tbl_item`(`id_item`,`nama_item`,`tipe_sn`,`serial_number`,`tipe_kategori`,`dept_item`,`kategori_item`,`sub_kategori_item`,`tipe_brand`,`count`,`warna`,`tahun_pembelian`,`validation`) values 
(0,'ashvdasf','sn','123454u','INV',11,6,29,9,'1','Red','2021','2021-04-20');

/*Table structure for table `tbl_master_brand` */

DROP TABLE IF EXISTS `tbl_master_brand`;

CREATE TABLE `tbl_master_brand` (
  `id_master_brand` int(11) NOT NULL AUTO_INCREMENT,
  `code_brand` varchar(3) DEFAULT NULL,
  `nama_brand` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_master_brand`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_master_brand` */

insert  into `tbl_master_brand`(`id_master_brand`,`code_brand`,`nama_brand`) values 
(1,'APL','APPLE'),
(2,'SUS','ASUS'),
(3,'AXO','AXIOO'),
(4,'ACR','ACER'),
(5,'CAN','CANON'),
(6,'EPS','EPSON'),
(7,'MKT','MIKROTIK'),
(8,'VAI','VAIO'),
(9,'LGT','LOGITECH'),
(10,'LNV','LENOVO'),
(11,'SNY','SONY'),
(12,'VGN','VGEN'),
(13,'SND','SANDISK'),
(14,'DEL','DELL'),
(15,'HP','HP'),
(16,'TSB','TOSHIBA'),
(17,'SMS','SAMSUNG'),
(18,'XOM','XIAOMI'),
(19,'HWI','HUAWEI'),
(20,'TPL','TP LINK'),
(21,'DLI','D LINK'),
(22,'UNF','UNIFI'),
(23,'BRT','BROTHER'),
(24,'KNG','KINGSTON'),
(25,'VSP','VISIPRO'),
(26,'WD','WESTERN DIGITAL (WD)'),
(27,'SGT','SEAGATE'),
(28,'MXT','MAXTOR'),
(29,'CRS','CORSAIR'),
(30,'SPC','SPC'),
(31,'SBD','SIMBADDA'),
(32,'ELG','ENLIGHT'),
(33,'BIF','BIO FINGER'),
(34,'LG','LG'),
(35,'AOC','AOC'),
(36,'PNC','PANASONIC'),
(37,'NEO','NEOPOST'),
(38,'VTR','VOTRE'),
(39,'GGB','GIGABYTE'),
(40,'ASR','ASROCK'),
(41,'ECS','ECS'),
(42,'BIO','BIOSTAR'),
(43,'ITL','INTEL'),
(44,'AMD','AMD'),
(45,'NVD','NVIDIA'),
(46,'MSI','MSI'),
(47,'ZBR','ZEBRA'),
(48,'COM','COMMSCOPE'),
(49,'BEL','BELDEN'),
(50,'KON','KONIC'),
(51,'CEL','CELLKIT'),
(52,'STR','STURDY'),
(53,'PRO','PROLINK'),
(54,'ABC','ABC'),
(55,'AAK','ABC ALKALINE'),
(56,'EVR','EVEREADY'),
(57,'TE','TEAM ELITE'),
(58,'APP','APOTOP'),
(59,'ZKK','ZIKKO'),
(60,'KAS','KASSEN'),
(61,'DC','DEEP COOL'),
(62,'ETW','ETWO'),
(63,'STE','STEALTH'),
(64,'HIK','HIKVISION'),
(65,'YUM','YUME'),
(66,'UTI','UTICON'),
(67,'MIK','MIKOTEK'),
(68,'POY','POLYTRON'),
(69,'MKT','MAKITA');

/*Table structure for table `tbl_master_dept` */

DROP TABLE IF EXISTS `tbl_master_dept`;

CREATE TABLE `tbl_master_dept` (
  `id_master_dept` int(11) NOT NULL AUTO_INCREMENT,
  `dept_code` varchar(2) DEFAULT NULL,
  `nama_dept` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_master_dept`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_master_dept` */

insert  into `tbl_master_dept`(`id_master_dept`,`dept_code`,`nama_dept`) values 
(1,'GA','General Affair'),
(2,'IT','Information Technology'),
(3,'MN','Maintenance'),
(4,'TP','Transportasi'),
(5,'AP','Account Payable'),
(6,'AR','Account Receivable'),
(7,'AC','Accounting'),
(8,'BI','Business Improvement'),
(9,'CA','Comunication Affair'),
(10,'DI','Data Integration & Analysis'),
(11,'EG','Engineering'),
(12,'EP','Engineering Project'),
(13,'ES','Engineering Standar & RnD'),
(14,'FT','Factory'),
(15,'FO','Fleet Operation'),
(16,'HC','Human Capital'),
(17,'HR','Human Resources'),
(18,'LG','Legal'),
(19,'MB','Marketing & Branding'),
(20,'OH','O&HSE'),
(21,'OB','Office & Building Maintenance'),
(22,'PC','Permit, Certificates and Docum'),
(23,'PT','PPIC & Transport'),
(24,'PM','Procurement'),
(25,'PP','Production Planning Control'),
(26,'PJ','Project'),
(27,'PS','Proyek Pasang'),
(28,'QA','Quality Assurance'),
(29,'QC','Quality Control'),
(30,'QP','Quality Control Plant'),
(31,'QJ','Quality Control Project'),
(32,'RO','Roll On Site'),
(33,'SL','Sales'),
(35,'SR','Sales Retail'),
(36,'SF','Sales Retail Factory Outlet'),
(37,'SK','Sekretaris'),
(38,'ST','SITE'),
(39,'SH','Strategic Human Capital'),
(40,'TX','Tax'),
(41,'TS','Testing'),
(42,'BD','Board of Director'),
(43,'EL','Elektrikal'),
(44,'ES','Engineering Solar'),
(45,'MH','Mekanik - Hidrolik'),
(46,'SM','Sub-Con Management');

/*Table structure for table `tbl_master_kategori` */

DROP TABLE IF EXISTS `tbl_master_kategori`;

CREATE TABLE `tbl_master_kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(30) DEFAULT NULL,
  `kode_kategori` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_master_kategori` */

insert  into `tbl_master_kategori`(`id_kategori`,`nama_kategori`,`kode_kategori`) values 
(1,'Inventory','INV');

/*Table structure for table `tbl_master_lokasi` */

DROP TABLE IF EXISTS `tbl_master_lokasi`;

CREATE TABLE `tbl_master_lokasi` (
  `id_lokasi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lokasi` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_lokasi`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_master_lokasi` */

insert  into `tbl_master_lokasi`(`id_lokasi`,`nama_lokasi`) values 
(1,'Surabaya - Rungkut - Kantor'),
(2,'Surabaya - Rungkut - Pabrik'),
(3,'Surabaya - Rungkut - Gudang'),
(4,'Surabaya - Basrah - Kantor'),
(5,'Surabaya - Darmo - Kantor'),
(6,'Surabaya - Tunjungan - Kantor'),
(7,'Lawang - PUSLATKER - Kantor'),
(8,'Lawang - PUSLATKER - Pabrik'),
(9,'Lawang - PUSLATKER - Gudang'),
(10,'Solo - Kyai Mojo - Kantor'),
(11,'Solo - Kyai Mojo - Pabrik'),
(12,'Solo - Kyai Mojo - Gudang'),
(13,'Semarang - Wolter Monginsidi - Pabrik'),
(14,'Semarang - Wolter Monginsidi - Gudang'),
(15,'Semarang - Industri - Pabrik'),
(16,'Semarang - Industri - Gudang'),
(17,'Semarang - Majapahit - Kantor'),
(18,'Banjarmasin - Banjar Gawi - Kantor'),
(19,'Banjarmasin - Banjar Gawi - Pabrik'),
(20,'Cikarang - Jababeka - Kantor');

/*Table structure for table `tbl_master_sub_tipe` */

DROP TABLE IF EXISTS `tbl_master_sub_tipe`;

CREATE TABLE `tbl_master_sub_tipe` (
  `id_master_sub` int(11) NOT NULL,
  `sub_code` varchar(5) DEFAULT NULL,
  `nama_sub` varchar(50) DEFAULT NULL,
  `fk_tipe` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_master_sub`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_master_sub_tipe` */

insert  into `tbl_master_sub_tipe`(`id_master_sub`,`sub_code`,`nama_sub`,`fk_tipe`) values 
(2,'0002','LCD Monitor',1),
(3,'0003','Keyboard',1),
(4,'0004','Mouse',1),
(5,'0005','Wireless Keyboard & Mouse',1),
(8,'0006','Laptop',1),
(9,'0007','Laptop Charger',1),
(10,'0008','Laptop Bag',1),
(11,'0001','HDD',2),
(12,'0002','SSD',2),
(13,'0003','NAS',2),
(14,'0004','Flashdrive',2),
(15,'0005','Memory Card',2),
(16,'0006','Enclosure HDD',2),
(17,'0001','PC Desktop',3),
(18,'0002','Laptop',3),
(19,'0001','USB Cooler pad / Cooling Pad',4),
(20,'0002','USB Hub',4),
(21,'0003','Converter VGA to HDMI',4),
(22,'0004','Cleaning Kit',4),
(23,'0001','Handphone',5),
(24,'0002','Android Tablet',5),
(25,'0003','Telephone',5),
(26,'0004','Android Smartphone',5),
(27,'0001','Printer Laser',6),
(28,'0002','Printer Inkjet',6),
(29,'0003','Laser cartridge',6),
(30,'0004','Inkjet cartridge',6),
(31,'0005','Printer Dotmatrix',6),
(32,'0006','Electronic Typing Machine',6),
(33,'0007','Franking Machine',6),
(34,'0001','Router',7),
(35,'0002','Switch',7),
(36,'0003','Hub',7),
(37,'0004','Modem',7),
(38,'0005','Wifi',7),
(39,'0006','Mifi',7),
(40,'0007','USB Wifi Adapter',7),
(41,'0001','Projector',8),
(42,'0002','Wifi Projector',8),
(43,'0003','LCD TV',8),
(44,'0004','LCD Smart TV',8),
(45,'0005','LCD Screen',8),
(46,'0006','Android Box',8),
(47,'0007','Laser Pointer',8),
(48,'0008','Active Speaker',8),
(49,'0009','Headphone',8),
(50,'0010','Bluetooth Speaker',8),
(51,'0011','Bluetooth Headset',8),
(52,'0001','Blower',9),
(53,'0002','Brush',9),
(54,'0003','Screwdriver',9),
(55,'0004','Tang',9),
(56,'0005','Solder',9),
(57,'0001','RJ45 Cable',10),
(58,'0002','Power roll',10),
(59,'0003','HDMI',10),
(60,'0004','VGA',10),
(61,'0005','Wire Duct',10),
(62,'0006','Cable Zipper',10),
(63,'0007','cable Ties',10),
(64,'0008','Heat Shrink',10),
(65,'0001','CCTV Closed-circuit television',11),
(66,'0002','Gate Lock',11),
(67,'0003','power consumption monitor',11),
(68,'0004','Arduino',11),
(69,'0005','Raspberry pi',11),
(70,'0001','Tronton Crane',14),
(71,'0002','Tronton',14),
(72,'0003','ELF',14),
(73,'0004','Canter',14),
(74,'0005','Colt',14),
(75,'0006','Pick Up',14),
(76,'0007','Trailler Head',14),
(77,'0012','Web Cam',8),
(78,'0013','Handy Talki',8),
(79,'0008','Trailer Ekor',14),
(80,'0001','Mobil Official Kantor',12),
(81,'0001','SILO',15),
(82,'0001','CPU Desktop',1);

/*Table structure for table `tbl_master_tipe` */

DROP TABLE IF EXISTS `tbl_master_tipe`;

CREATE TABLE `tbl_master_tipe` (
  `id_master_tipe` int(11) NOT NULL,
  `code_master_tipe` varchar(3) DEFAULT NULL,
  `nama_master_tipe` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_master_tipe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_master_tipe` */

insert  into `tbl_master_tipe`(`id_master_tipe`,`code_master_tipe`,`nama_master_tipe`) values 
(1,'PC','Personal Computer'),
(2,'STR','Storage'),
(3,'RM','RAM'),
(4,'PCA','PC Accessoris'),
(5,'GDT','Gadget'),
(6,'PRT','Printer'),
(7,'NET','Networking'),
(8,'MM','Multimedia'),
(9,'TLS','Tools'),
(10,'CBL','Cables'),
(11,'IOT','Internet of Thinks');

/*Table structure for table `tbl_mutasi` */

DROP TABLE IF EXISTS `tbl_mutasi`;

CREATE TABLE `tbl_mutasi` (
  `id_mutasi` int(11) NOT NULL AUTO_INCREMENT,
  `fk_item` int(11) DEFAULT NULL,
  `fk_lokasi` int(11) DEFAULT NULL,
  `jumlah` varchar(255) DEFAULT NULL,
  `pic` int(11) DEFAULT NULL,
  `tgl_mutasi` datetime DEFAULT NULL,
  PRIMARY KEY (`id_mutasi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_mutasi` */

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(11) DEFAULT NULL,
  `dept_user` int(11) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`id_user`,`nama_user`,`dept_user`,`username`,`password`,`keterangan`,`level`) values 
(1,'00382',2,'admin','e79c7323f62151abde47e29987b38859','akusayangkamu',1),
(2,'00345',26,'rina','3aea9516d222934e35dd30f142fda18c','rina',2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
