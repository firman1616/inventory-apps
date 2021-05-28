/*
 Navicat Premium Data Transfer

 Source Server         : XAMPP 74
 Source Server Type    : MySQL
 Source Server Version : 100418
 Source Host           : localhost:3306
 Source Schema         : db_ims

 Target Server Type    : MySQL
 Target Server Version : 100418
 File Encoding         : 65001

 Date: 25/05/2021 11:02:00
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_employee
-- ----------------------------
DROP TABLE IF EXISTS `tbl_employee`;
CREATE TABLE `tbl_employee`  (
  `nik` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_karyawan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `dept` int NULL DEFAULT NULL,
  PRIMARY KEY (`nik`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_employee
-- ----------------------------
INSERT INTO `tbl_employee` VALUES ('00001', 'DARMAWAN UTOMO', 42);
INSERT INTO `tbl_employee` VALUES ('00002', 'ANTHONY UTOMO', 42);
INSERT INTO `tbl_employee` VALUES ('00005', 'JOHANNES IE', 26);
INSERT INTO `tbl_employee` VALUES ('00007', 'YULIANA INDAH', 10);
INSERT INTO `tbl_employee` VALUES ('00008', 'RUDDY VIALI PANGAU', 28);
INSERT INTO `tbl_employee` VALUES ('00010', 'RONALD PINANGKAAN', 26);
INSERT INTO `tbl_employee` VALUES ('00011', 'NENIK', 33);
INSERT INTO `tbl_employee` VALUES ('00012', 'GRACE NOVITA', 36);
INSERT INTO `tbl_employee` VALUES ('00013', 'AGUNG SETYA HERMAWAN', 26);
INSERT INTO `tbl_employee` VALUES ('00014', 'SYILMI NADJIB', 25);
INSERT INTO `tbl_employee` VALUES ('00015', 'IFFA SUGESTI', 5);
INSERT INTO `tbl_employee` VALUES ('00016', 'MAI DWI NURJAYANTI', 6);
INSERT INTO `tbl_employee` VALUES ('00017', 'HERI SETYAWATI', 1);
INSERT INTO `tbl_employee` VALUES ('00020', 'ANDREAS ARIANTO TEDJASUKMANA MSi', 1);
INSERT INTO `tbl_employee` VALUES ('00021', 'FRANSISCUS DARMASETIAWAN', 5);
INSERT INTO `tbl_employee` VALUES ('00022', 'TABITA NATALIA WIJONO', 5);
INSERT INTO `tbl_employee` VALUES ('00023', 'AJENG AYU HAPSARI', 24);
INSERT INTO `tbl_employee` VALUES ('00026', 'YENY MEGA APRILITA', 5);
INSERT INTO `tbl_employee` VALUES ('00027', 'YULIATI KRESNAWATININGSIH', 7);
INSERT INTO `tbl_employee` VALUES ('00028', 'CYNTHIA DEWI WONODJOJO', 6);
INSERT INTO `tbl_employee` VALUES ('00029', 'JM STEPHANIE HALIM', 24);
INSERT INTO `tbl_employee` VALUES ('00030', 'NATANAEL MARCELINO', 6);
INSERT INTO `tbl_employee` VALUES ('00032', 'RISMA LESTARI', 33);
INSERT INTO `tbl_employee` VALUES ('00035', 'ROSELLA NANDA WIDIANINGSIH', 27);
INSERT INTO `tbl_employee` VALUES ('00036', 'BAGUS PRIYO UTOMO', 14);
INSERT INTO `tbl_employee` VALUES ('00037', 'ZULHAN CHANI', 21);
INSERT INTO `tbl_employee` VALUES ('00038', 'MUKHAMMAD RIZQI ALFIAN', 27);
INSERT INTO `tbl_employee` VALUES ('00039', 'ABDUL KARIM', 27);
INSERT INTO `tbl_employee` VALUES ('00040', 'TRISTIAWAN PUTRA NURHABIBI', 27);
INSERT INTO `tbl_employee` VALUES ('00043', 'KRISTIAN PRASETYO LOBO', 2);
INSERT INTO `tbl_employee` VALUES ('00044', 'ARLIA HARINAWATI', 25);
INSERT INTO `tbl_employee` VALUES ('00045', 'MOH HAFIDZ WAHIDIL R', 25);
INSERT INTO `tbl_employee` VALUES ('00046', 'DINA SULISTYOWATI', 33);
INSERT INTO `tbl_employee` VALUES ('00047', 'UMI NADHIRO', 8);
INSERT INTO `tbl_employee` VALUES ('00050', 'JUMADI', 15);
INSERT INTO `tbl_employee` VALUES ('00051', 'TEDY JULIZAR', 15);
INSERT INTO `tbl_employee` VALUES ('00052', 'ADE SUPRIYADI', 15);
INSERT INTO `tbl_employee` VALUES ('00053', 'SUKRON', 15);
INSERT INTO `tbl_employee` VALUES ('00054', 'RUDI HARMONO', 15);
INSERT INTO `tbl_employee` VALUES ('00055', 'DENY ARIWARDANA', 15);
INSERT INTO `tbl_employee` VALUES ('00056', 'WIDYA ADI CANDRA', 15);
INSERT INTO `tbl_employee` VALUES ('00057', 'M GHOZALI', 21);
INSERT INTO `tbl_employee` VALUES ('00058', 'HERI SUSENO', 21);
INSERT INTO `tbl_employee` VALUES ('00059', 'ANDIK NURIADI', 21);
INSERT INTO `tbl_employee` VALUES ('00060', 'CINTYA DINDA PERMATASARI GUNAWAN', 18);
INSERT INTO `tbl_employee` VALUES ('00062', 'RAMI', 21);
INSERT INTO `tbl_employee` VALUES ('00063', 'BUDI UTOMO', 27);
INSERT INTO `tbl_employee` VALUES ('00064', 'BAGUS SUSILO', 27);
INSERT INTO `tbl_employee` VALUES ('00066', 'YENI SOFIANA', 5);
INSERT INTO `tbl_employee` VALUES ('00069', 'TOMY TRI YULIANTO', 25);
INSERT INTO `tbl_employee` VALUES ('00071', 'UDIYONO', 15);
INSERT INTO `tbl_employee` VALUES ('00073', 'MEIFI LEONY PRASTIWI', 26);
INSERT INTO `tbl_employee` VALUES ('00074', 'FETY IZZA LUTHFIYAH', 20);
INSERT INTO `tbl_employee` VALUES ('00075', 'MARCELINA KUSUMA PUTRI', 17);
INSERT INTO `tbl_employee` VALUES ('00077', 'ILHAM PANCA NUGRAHA', 27);
INSERT INTO `tbl_employee` VALUES ('00078', 'ZIVACK AR RAZAK VELAYATIE', 27);
INSERT INTO `tbl_employee` VALUES ('00079', 'SALMAN BISYRI', 14);
INSERT INTO `tbl_employee` VALUES ('00080', 'MISRI FIDIYANTO', 15);
INSERT INTO `tbl_employee` VALUES ('00085', 'PUTRI AYU INDAHSARI', 36);
INSERT INTO `tbl_employee` VALUES ('00086', 'MUHAMMAD UMAR FAROUQ', 11);
INSERT INTO `tbl_employee` VALUES ('00087', 'NATHANIA LISTYANI', 7);
INSERT INTO `tbl_employee` VALUES ('00088', 'MUHAMMAD KOMARUS ZAMAN SE', 7);
INSERT INTO `tbl_employee` VALUES ('00089', 'CITRA AGUSTINE PUTRI RUMPAIDUS', 18);
INSERT INTO `tbl_employee` VALUES ('00091', 'PHILLIPS DAVID BEMBUAIN', 18);
INSERT INTO `tbl_employee` VALUES ('00092', 'DANANG WISNU BUDIARTO', 12);
INSERT INTO `tbl_employee` VALUES ('00097', 'ENDANG SETIANI', 27);
INSERT INTO `tbl_employee` VALUES ('00098', 'AHMAD ZAKI ABDUL HAMID AL HABA', 44);
INSERT INTO `tbl_employee` VALUES ('00099', 'MEGA AFRIANDINI', 11);
INSERT INTO `tbl_employee` VALUES ('00101', 'SARA AFIDA PERTIWI', 13);
INSERT INTO `tbl_employee` VALUES ('00102', 'NARITA KURNIASARI', 12);
INSERT INTO `tbl_employee` VALUES ('00103', 'WIENAR OCTANIA', 19);
INSERT INTO `tbl_employee` VALUES ('00104', 'YULIUS LALO AWANG', 21);
INSERT INTO `tbl_employee` VALUES ('00105', 'FEBRIANI', 11);
INSERT INTO `tbl_employee` VALUES ('00106', 'ADITYA BAGUS SETIAWAN', 44);
INSERT INTO `tbl_employee` VALUES ('00107', 'PRASMA WIGESTIKA', 12);
INSERT INTO `tbl_employee` VALUES ('00108', 'LINA KURNIA PUTRI', 12);
INSERT INTO `tbl_employee` VALUES ('00109', 'LESTARI AYU SETYOWATI MPsi', 12);
INSERT INTO `tbl_employee` VALUES ('00110', 'IZHARUDDIN AZHAR ALIF KHANS E MM', 34);
INSERT INTO `tbl_employee` VALUES ('00111', 'IRFAN REZA WAHYUDI', 44);
INSERT INTO `tbl_employee` VALUES ('00113', 'ABDI JAYANATA', 19);
INSERT INTO `tbl_employee` VALUES ('00118', 'VINCENTIUS RAYLANDYANTO SAKSONO', 44);
INSERT INTO `tbl_employee` VALUES ('00120', 'ATIKAH GHASSANI', 5);
INSERT INTO `tbl_employee` VALUES ('00121', 'HARI RINI SAKTRIANI', 6);
INSERT INTO `tbl_employee` VALUES ('00122', 'TANIA MUTIA RANI', 12);
INSERT INTO `tbl_employee` VALUES ('00123', 'DILA LESTARI', 12);
INSERT INTO `tbl_employee` VALUES ('00124', 'RANI RIZQI MAWARDI', 12);
INSERT INTO `tbl_employee` VALUES ('00125', 'MOHAMMAD ANWAR', 21);
INSERT INTO `tbl_employee` VALUES ('00126', 'MUHAMAD HASAN', 21);
INSERT INTO `tbl_employee` VALUES ('00127', 'ANTONIUS MARIO SATRIA HERMAWAN', 44);
INSERT INTO `tbl_employee` VALUES ('00129', 'ELLYZABETH PRICILLINA', 33);
INSERT INTO `tbl_employee` VALUES ('00130', 'SHEILA AYU ANDINI', 33);
INSERT INTO `tbl_employee` VALUES ('00132', 'GURITNO KUNTOROYAKTI', 33);
INSERT INTO `tbl_employee` VALUES ('00134', 'MUCHTAR SUGIANTO', 15);
INSERT INTO `tbl_employee` VALUES ('00135', 'KEVIN MUZAMMIL', 12);
INSERT INTO `tbl_employee` VALUES ('00137', 'RUDI WAHONO', 14);
INSERT INTO `tbl_employee` VALUES ('00138', 'SUYATNAN', 44);
INSERT INTO `tbl_employee` VALUES ('00139', 'YANNY KRISTIYOWATI', 4);
INSERT INTO `tbl_employee` VALUES ('00140', 'MOH JAMZURI', 14);
INSERT INTO `tbl_employee` VALUES ('00141', 'MUNIP', 14);
INSERT INTO `tbl_employee` VALUES ('00142', 'SUYONO', 26);
INSERT INTO `tbl_employee` VALUES ('00143', 'FAUZIATUL IKRIMA', 23);
INSERT INTO `tbl_employee` VALUES ('00144', 'IDA BAGUS ANDIKA HARVIDYANTO', 27);
INSERT INTO `tbl_employee` VALUES ('00145', 'SAMSUL ARIFIN (Kraksaan)', 44);
INSERT INTO `tbl_employee` VALUES ('00146', 'DIAH MUSTIKA SARI', 32);
INSERT INTO `tbl_employee` VALUES ('00147', 'MOCH ARIF KURNIAWAN', 30);
INSERT INTO `tbl_employee` VALUES ('00148', 'ERI RUSDIONO', 27);
INSERT INTO `tbl_employee` VALUES ('00150', 'IKKE NISFUL LAILA', 25);
INSERT INTO `tbl_employee` VALUES ('00151', 'MUCHAMMAD MUSTAIN', 30);
INSERT INTO `tbl_employee` VALUES ('00152', 'TARIMUN', 21);
INSERT INTO `tbl_employee` VALUES ('00153', 'MOCHAMAD SAFII', 21);
INSERT INTO `tbl_employee` VALUES ('00154', 'KANTODIHARJO', 21);
INSERT INTO `tbl_employee` VALUES ('00155', 'IMRON ROSADI', 23);
INSERT INTO `tbl_employee` VALUES ('00156', 'SAMSUL ARIFIN (forklift)', 14);
INSERT INTO `tbl_employee` VALUES ('00157', 'SUWARJI', 4);
INSERT INTO `tbl_employee` VALUES ('00158', 'SEGER', 4);
INSERT INTO `tbl_employee` VALUES ('00159', 'MUSTAKIM', 14);
INSERT INTO `tbl_employee` VALUES ('00160', 'SEKARNYOTO', 4);
INSERT INTO `tbl_employee` VALUES ('00161', 'MIFTACHUL ANWAR', 4);
INSERT INTO `tbl_employee` VALUES ('00162', 'DIDIK SETIAWAN', 4);
INSERT INTO `tbl_employee` VALUES ('00164', 'MANSUR', 26);
INSERT INTO `tbl_employee` VALUES ('00165', 'LUTFI', 26);
INSERT INTO `tbl_employee` VALUES ('00166', 'SAMSUL HADI', 14);
INSERT INTO `tbl_employee` VALUES ('00167', 'ZAINAL ARIFIN', 44);
INSERT INTO `tbl_employee` VALUES ('00168', 'ARIFIN', 31);
INSERT INTO `tbl_employee` VALUES ('00169', 'MUHAMMAD ROHMAN ALAIKA', 27);
INSERT INTO `tbl_employee` VALUES ('00170', 'MOHAMAD SAENI', 14);
INSERT INTO `tbl_employee` VALUES ('00171', 'HARIYANTO', 44);
INSERT INTO `tbl_employee` VALUES ('00172', 'MUKHAMAAD SAIFUL', 27);
INSERT INTO `tbl_employee` VALUES ('00173', 'LUTDIYONO', 23);
INSERT INTO `tbl_employee` VALUES ('00174', 'MUHAMAD DAWUD', 26);
INSERT INTO `tbl_employee` VALUES ('00175', 'A BASORI', 14);
INSERT INTO `tbl_employee` VALUES ('00176', 'MUHAMMAD LUKMAN', 44);
INSERT INTO `tbl_employee` VALUES ('00177', 'MUHAMMAD MUSAFAK', 26);
INSERT INTO `tbl_employee` VALUES ('00178', 'ALWI', 23);
INSERT INTO `tbl_employee` VALUES ('00179', 'SAMSUL ARIFIN (Kramat)', 4);
INSERT INTO `tbl_employee` VALUES ('00180', 'SAEFUDIEN AINUL YAQIN', 14);
INSERT INTO `tbl_employee` VALUES ('00181', 'SYAIFUDIN', 23);
INSERT INTO `tbl_employee` VALUES ('00182', 'ARIF MULYONO', 26);
INSERT INTO `tbl_employee` VALUES ('00183', 'NURIL ASWAD', 26);
INSERT INTO `tbl_employee` VALUES ('00184', 'M HIDAYATULLAH', 14);
INSERT INTO `tbl_employee` VALUES ('00185', 'ACHMAD EKO YULI PERMADI', 26);
INSERT INTO `tbl_employee` VALUES ('00186', 'MUHAMMAD YOSI CHANDRA', 23);
INSERT INTO `tbl_employee` VALUES ('00187', 'M MUSTOFA', 31);
INSERT INTO `tbl_employee` VALUES ('00191', 'NUR WAHYU', 26);
INSERT INTO `tbl_employee` VALUES ('00192', 'MUKHAMAD IMRON', 14);
INSERT INTO `tbl_employee` VALUES ('00193', 'SOLEH', 4);
INSERT INTO `tbl_employee` VALUES ('00194', 'M SUKARTONO', 4);
INSERT INTO `tbl_employee` VALUES ('00195', 'M SYARONI', 26);
INSERT INTO `tbl_employee` VALUES ('00196', 'MOCHAMAD AZQI', 26);
INSERT INTO `tbl_employee` VALUES ('00197', 'ALEX SUBANDRIO', 4);
INSERT INTO `tbl_employee` VALUES ('00198', 'ABDUL GHOFUR', 23);
INSERT INTO `tbl_employee` VALUES ('00200', 'ABDULLAH (KB)', 21);
INSERT INTO `tbl_employee` VALUES ('00201', 'SOLIKHIN', 4);
INSERT INTO `tbl_employee` VALUES ('00202', 'MASHUDI', 4);
INSERT INTO `tbl_employee` VALUES ('00203', 'EDI SUDARMAWAN', 4);
INSERT INTO `tbl_employee` VALUES ('00204', 'M RIDUWAN', 4);
INSERT INTO `tbl_employee` VALUES ('00205', 'SAMSUL ARIFIN (Muat)', 14);
INSERT INTO `tbl_employee` VALUES ('00206', 'AGUS EKO SUGIYANTO', 23);
INSERT INTO `tbl_employee` VALUES ('00207', 'SITI MAISAROH', 32);
INSERT INTO `tbl_employee` VALUES ('00208', 'M ILHAM HABIBI', 14);
INSERT INTO `tbl_employee` VALUES ('00209', 'FEBRI ARIS MAULANA', 26);
INSERT INTO `tbl_employee` VALUES ('00210', 'MUHAMMAD SHOLIHIN', 14);
INSERT INTO `tbl_employee` VALUES ('00211', 'AINUL YAKIN', 23);
INSERT INTO `tbl_employee` VALUES ('00212', 'ANA MASRUROH', 17);
INSERT INTO `tbl_employee` VALUES ('00214', 'AGUS SHOLEHADI', 26);
INSERT INTO `tbl_employee` VALUES ('00215', 'M JAYADI', 27);
INSERT INTO `tbl_employee` VALUES ('00217', 'ELSA SIRLY ELOK WAHYU PANGESTI', 17);
INSERT INTO `tbl_employee` VALUES ('00218', 'MOH NUR AMINULLOH', 26);
INSERT INTO `tbl_employee` VALUES ('00219', 'ARIS SISWANTO', 4);
INSERT INTO `tbl_employee` VALUES ('00220', 'MOHAMAD ARIS', 14);
INSERT INTO `tbl_employee` VALUES ('00221', 'AKHMAD RIDUWAN', 4);
INSERT INTO `tbl_employee` VALUES ('00222', 'NOVAN WIBISONO', 23);
INSERT INTO `tbl_employee` VALUES ('00223', 'UBAEDILLAH', 4);
INSERT INTO `tbl_employee` VALUES ('00224', 'MOHAMMAD RIZKY', 23);
INSERT INTO `tbl_employee` VALUES ('00225', 'ALIYADI', 4);
INSERT INTO `tbl_employee` VALUES ('00226', 'RACHMAD DANI', 27);
INSERT INTO `tbl_employee` VALUES ('00227', 'SUNARI', 4);
INSERT INTO `tbl_employee` VALUES ('00232', 'FIKRI AHMAD RAIHAN', 11);
INSERT INTO `tbl_employee` VALUES ('00234', 'DADANG SETIAWAN', 25);
INSERT INTO `tbl_employee` VALUES ('00235', 'M ISHAQ', 44);
INSERT INTO `tbl_employee` VALUES ('00236', 'YAZID BASTOMI', 23);
INSERT INTO `tbl_employee` VALUES ('00237', 'VICTOR JEREMIA TOBING', 33);
INSERT INTO `tbl_employee` VALUES ('00238', 'MOCH SOLEH', 33);
INSERT INTO `tbl_employee` VALUES ('00239', 'SUMINTO', 33);
INSERT INTO `tbl_employee` VALUES ('00240', 'ABDUL HALIM', 33);
INSERT INTO `tbl_employee` VALUES ('00257', 'Siauw Yu Li', 33);
INSERT INTO `tbl_employee` VALUES ('00258', 'Novita Seviyani Febri', 2);
INSERT INTO `tbl_employee` VALUES ('00259', 'Edu Wahyana', 22);
INSERT INTO `tbl_employee` VALUES ('00261', 'Taufa Rismanto', 27);
INSERT INTO `tbl_employee` VALUES ('00262', 'Toni Eko Farianto', 44);
INSERT INTO `tbl_employee` VALUES ('00263', 'Rahadi Wiyono', 39);
INSERT INTO `tbl_employee` VALUES ('00264', 'Sutarti', 39);
INSERT INTO `tbl_employee` VALUES ('00265', 'Made Dhanang Dewata', 39);
INSERT INTO `tbl_employee` VALUES ('00268', 'Natalius Watratan', 4);
INSERT INTO `tbl_employee` VALUES ('00269', 'Panan', 37);
INSERT INTO `tbl_employee` VALUES ('00270', 'Lily Yuli Astiti', 25);
INSERT INTO `tbl_employee` VALUES ('00271', 'Triono Hadi', 35);
INSERT INTO `tbl_employee` VALUES ('00272', 'Drs EC Kurniawan Budi S', 14);
INSERT INTO `tbl_employee` VALUES ('00273', 'Berdik Ariyanto', 31);
INSERT INTO `tbl_employee` VALUES ('00274', 'Hartono', 14);
INSERT INTO `tbl_employee` VALUES ('00276', 'Mangun Kusumo Subandriyo', 30);
INSERT INTO `tbl_employee` VALUES ('00277', 'Septian Novan Saputra', 14);
INSERT INTO `tbl_employee` VALUES ('00278', 'Hariono', 14);
INSERT INTO `tbl_employee` VALUES ('00279', 'Ardy Catur Prasetyo', 14);
INSERT INTO `tbl_employee` VALUES ('00281', 'Dominikus Bora', 21);
INSERT INTO `tbl_employee` VALUES ('00282', 'Kariono', 21);
INSERT INTO `tbl_employee` VALUES ('00283', 'Suhartono', 4);
INSERT INTO `tbl_employee` VALUES ('00284', 'Agus Riyadi', 4);
INSERT INTO `tbl_employee` VALUES ('00285', 'Abdul Shomat Alatas', 4);
INSERT INTO `tbl_employee` VALUES ('00286', 'Zainul', 14);
INSERT INTO `tbl_employee` VALUES ('00288', 'Basuki Rachmad', 14);
INSERT INTO `tbl_employee` VALUES ('00289', 'Munir', 14);
INSERT INTO `tbl_employee` VALUES ('00290', 'Achmad Fachrizal', 14);
INSERT INTO `tbl_employee` VALUES ('00291', 'Agus Santoso', 23);
INSERT INTO `tbl_employee` VALUES ('00292', 'Fatkhurrozi', 14);
INSERT INTO `tbl_employee` VALUES ('00293', 'Agus Pirmadi', 14);
INSERT INTO `tbl_employee` VALUES ('00294', 'Daud Waluyo Surip', 4);
INSERT INTO `tbl_employee` VALUES ('00295', 'Legian Silfanes', 4);
INSERT INTO `tbl_employee` VALUES ('00296', 'Wahyudi Ariyanto', 14);
INSERT INTO `tbl_employee` VALUES ('00297', 'Abdul Wahid', 14);
INSERT INTO `tbl_employee` VALUES ('00299', 'Mustofa', 4);
INSERT INTO `tbl_employee` VALUES ('00301', 'Moh Khoirur Rohimin', 4);
INSERT INTO `tbl_employee` VALUES ('00302', 'Samsiyah', 21);
INSERT INTO `tbl_employee` VALUES ('00303', 'Surya Arya Santo', 30);
INSERT INTO `tbl_employee` VALUES ('00304', 'Muhammat Ardian Safii', 27);
INSERT INTO `tbl_employee` VALUES ('00305', 'Mochamad Irwan', 44);
INSERT INTO `tbl_employee` VALUES ('00306', 'Jery Prayogo', 27);
INSERT INTO `tbl_employee` VALUES ('00307', 'ARIS SUPRIANTO', 44);
INSERT INTO `tbl_employee` VALUES ('00308', 'FX R BAMBANG GUTAMA', 33);
INSERT INTO `tbl_employee` VALUES ('00310', 'SITI ISTIARSIH SE', 33);
INSERT INTO `tbl_employee` VALUES ('00311', 'HARSO WALUYO', 33);
INSERT INTO `tbl_employee` VALUES ('00312', 'MUSTAFID', 33);
INSERT INTO `tbl_employee` VALUES ('00313', 'FEBBY DAMAIRIA', 35);
INSERT INTO `tbl_employee` VALUES ('00314', 'TRI WAHYONO', 35);
INSERT INTO `tbl_employee` VALUES ('00315', 'YUSUF ARI JATMIKO', 35);
INSERT INTO `tbl_employee` VALUES ('00316', 'AJENG CAHYANING PERTIWI', 35);
INSERT INTO `tbl_employee` VALUES ('00317', 'ENY SURONO', 14);
INSERT INTO `tbl_employee` VALUES ('00318', 'TEGUH TRI BANANDA', 14);
INSERT INTO `tbl_employee` VALUES ('00322', 'ALISA QURRATA A\'YUN', 44);
INSERT INTO `tbl_employee` VALUES ('00323', 'ROBBY PRADANA PUTRA', 24);
INSERT INTO `tbl_employee` VALUES ('00326', 'NUR SURONO', 27);
INSERT INTO `tbl_employee` VALUES ('00330', 'FATIN KUNIA LAILI', 24);
INSERT INTO `tbl_employee` VALUES ('00336', 'TRI MUCHAMAD RAMADANI', 14);
INSERT INTO `tbl_employee` VALUES ('00337', 'ARDYAN WAHYU PRADICTA UTAMA', 34);
INSERT INTO `tbl_employee` VALUES ('00339', 'GRIFFITHE FADLY', 15);
INSERT INTO `tbl_employee` VALUES ('00342', 'IIS SUSANTI', 33);
INSERT INTO `tbl_employee` VALUES ('00345', 'RINA SUSILAWATI', 27);
INSERT INTO `tbl_employee` VALUES ('00346', 'YUDHI APRIANTO', 34);
INSERT INTO `tbl_employee` VALUES ('00348', 'VIKO VALDIANO', 19);
INSERT INTO `tbl_employee` VALUES ('00349', 'EMMY WOELANSARI', 26);
INSERT INTO `tbl_employee` VALUES ('00357', 'RETTY EKSA KHARDIAS', 40);
INSERT INTO `tbl_employee` VALUES ('00359', 'MUHAMMAD INDRA ROHMADDILLAH', 27);
INSERT INTO `tbl_employee` VALUES ('00360', 'SUJATMIKO DONOHADI', 38);
INSERT INTO `tbl_employee` VALUES ('00361', 'TIARA WARDANI', 44);
INSERT INTO `tbl_employee` VALUES ('00362', 'NIKEN SUSANTI GUSTINA', 16);
INSERT INTO `tbl_employee` VALUES ('00363', 'M ASHAR KOLIQ', 4);
INSERT INTO `tbl_employee` VALUES ('00364', 'ADEK MIFTAKHUL HUDA', 25);
INSERT INTO `tbl_employee` VALUES ('00365', 'AYU NUR ANISA RAHMAWATI', 8);
INSERT INTO `tbl_employee` VALUES ('00371', 'ANANTO SANDDY SUBAGIO', 26);
INSERT INTO `tbl_employee` VALUES ('00372', 'NURVA\'IN', 29);
INSERT INTO `tbl_employee` VALUES ('00374', 'ALFIAN HERLANDA AFIESTA', 27);
INSERT INTO `tbl_employee` VALUES ('00375', 'BERNARDUS LEGOWO WIDHI', 17);
INSERT INTO `tbl_employee` VALUES ('00376', 'JEFTA TIMOTIUS', 2);
INSERT INTO `tbl_employee` VALUES ('00378', 'MOHAMAD BAGIR ASSEGAFF', 5);
INSERT INTO `tbl_employee` VALUES ('00382', 'MOCH. FIRMAN FIRDAUS', 2);
INSERT INTO `tbl_employee` VALUES ('00383', 'MUHAMMAD AGUNG BIMANTARA', 27);
INSERT INTO `tbl_employee` VALUES ('00385', 'IRFAN HARYO', 5);
INSERT INTO `tbl_employee` VALUES ('00386', 'KUSMALI', 43);
INSERT INTO `tbl_employee` VALUES ('00387', 'RIRIN DESI ARIS WATI', 25);
INSERT INTO `tbl_employee` VALUES ('00388', 'AHMAD EFENDI', 44);
INSERT INTO `tbl_employee` VALUES ('00389', 'ABDULLOH', 30);
INSERT INTO `tbl_employee` VALUES ('00390', 'ALIVARA LINTANG MAHARANI', 6);
INSERT INTO `tbl_employee` VALUES ('00391', 'ERVINA KIELAND', 7);
INSERT INTO `tbl_employee` VALUES ('00392', 'NOVA BIMA PRAYOGA', 37);
INSERT INTO `tbl_employee` VALUES ('00395', 'SUTAJI', 23);
INSERT INTO `tbl_employee` VALUES ('00397', 'MUHAMMAD MALIK FATHURRAHMAN', 44);
INSERT INTO `tbl_employee` VALUES ('00398', 'RIZA ACHMAD ROYYA', 44);
INSERT INTO `tbl_employee` VALUES ('00399', 'YUDHI EFENDI, S.H., M.H.', 34);
INSERT INTO `tbl_employee` VALUES ('00400', 'YEHEZKIEL ARDO EKA PUTRA', 44);
INSERT INTO `tbl_employee` VALUES ('00401', 'SETIAWATI HAMBALI', 7);
INSERT INTO `tbl_employee` VALUES ('00402', 'M. AGUNG DIRMAWAN', 12);
INSERT INTO `tbl_employee` VALUES ('00403', 'BAHRUL AFANDI', 27);
INSERT INTO `tbl_employee` VALUES ('00404', 'AFRIZAL FEBRI SYAHFITROH', 25);
INSERT INTO `tbl_employee` VALUES ('00405', 'QORI ERFAN SAHRIL', 12);
INSERT INTO `tbl_employee` VALUES ('00407', 'ILHAM MUQORROBIN', 27);
INSERT INTO `tbl_employee` VALUES ('00408', 'HERLINA IKA YUNITA', 7);
INSERT INTO `tbl_employee` VALUES ('00409', 'DITA ELVIRA RESTIANA', 24);
INSERT INTO `tbl_employee` VALUES ('00410', 'ADINDA AISYAH PRATIWI', 12);
INSERT INTO `tbl_employee` VALUES ('00411', 'MOH IRJIK', 30);
INSERT INTO `tbl_employee` VALUES ('00412', 'PUTRA MAHENDRA', 33);
INSERT INTO `tbl_employee` VALUES ('00413', 'YANUAR KOMARUDI', 27);
INSERT INTO `tbl_employee` VALUES ('00414', 'RIZAL DIMAS', 32);
INSERT INTO `tbl_employee` VALUES ('00415', 'SIFERA DINDA', 33);
INSERT INTO `tbl_employee` VALUES ('00417', 'MUHAMMAD ARIE PRATAMA', 27);
INSERT INTO `tbl_employee` VALUES ('00418', 'RAHMA MAULIDIA ARZANTI', 44);
INSERT INTO `tbl_employee` VALUES ('00420', 'MUHAMMAD DEKY AL ROSYIQ UMAR', 27);
INSERT INTO `tbl_employee` VALUES ('00421', 'DISTA DIRGANTORO', 45);
INSERT INTO `tbl_employee` VALUES ('00422', 'DWI ATIKA', 33);
INSERT INTO `tbl_employee` VALUES ('00423', 'MUHAMMAD RAYMOND PUTRA SAMEDI', 33);
INSERT INTO `tbl_employee` VALUES ('00424', 'BARNES RISKY PRENAMIA', 26);

-- ----------------------------
-- Table structure for tbl_item
-- ----------------------------
DROP TABLE IF EXISTS `tbl_item`;
CREATE TABLE `tbl_item`  (
  `id_item` int NOT NULL AUTO_INCREMENT,
  `kode_jadi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_item` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tipe_sn` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `serial_number` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tipe_kategori` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `dept_item` int NULL DEFAULT NULL,
  `kategori_item` int NULL DEFAULT NULL,
  `sub_kategori_item` int NULL DEFAULT NULL,
  `tipe_brand` int NULL DEFAULT NULL,
  `count` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `warna` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tahun_pembelian` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `validation` date NULL DEFAULT NULL,
  PRIMARY KEY (`id_item`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_item
-- ----------------------------
INSERT INTO `tbl_item` VALUES (1, 'INV/GA/PC/0002/DEL/00001', 'tes', 'sn', '123435y', 'INV', 1, 1, 2, 14, '1', 'Black', '', '', '2021-05-05');
INSERT INTO `tbl_item` VALUES (2, 'INV/IT/PCA/0001/SNY/00001', 'wqdefsgadsf', 'sn', '', 'INV', 2, 4, 19, 11, '1', 'blue', '2021', '', '2021-05-06');
INSERT INTO `tbl_item` VALUES (3, 'INV/IT/STR/0003/CAN/00002', 'qdasfsdg', 'sn', '13224566', 'INV', 2, 2, 13, 5, '2', 'blue', '', '', '2021-05-07');
INSERT INTO `tbl_item` VALUES (5, 'INV/GA/TRC/0002/HNO/00002', 'Hino Turbo Bost NOS', 'sn', 'L 4357 RT', 'INV', 1, 14, 90, 73, '2', 'blue', '2015', 'tes', '2021-05-11');
INSERT INTO `tbl_item` VALUES (6, 'INV/GA/MBL/0001/HNO/00003', 'Wuling Convero', 'sn', 'L 6543 IU', 'INV', 1, 13, 86, 73, '3', 'Putih', '2019', '', '2021-05-11');

-- ----------------------------
-- Table structure for tbl_master_brand
-- ----------------------------
DROP TABLE IF EXISTS `tbl_master_brand`;
CREATE TABLE `tbl_master_brand`  (
  `id_master_brand` int NOT NULL AUTO_INCREMENT,
  `code_brand` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_brand` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fk_dept` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_master_brand`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 74 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_master_brand
-- ----------------------------
INSERT INTO `tbl_master_brand` VALUES (1, 'APL', 'APPLE', 2);
INSERT INTO `tbl_master_brand` VALUES (2, 'SUS', 'ASUS', 2);
INSERT INTO `tbl_master_brand` VALUES (3, 'AXO', 'AXIOO', 2);
INSERT INTO `tbl_master_brand` VALUES (4, 'ACR', 'ACER', 2);
INSERT INTO `tbl_master_brand` VALUES (5, 'CAN', 'CANON', 2);
INSERT INTO `tbl_master_brand` VALUES (6, 'EPS', 'EPSON', 2);
INSERT INTO `tbl_master_brand` VALUES (7, 'MKT', 'MIKROTIK', 2);
INSERT INTO `tbl_master_brand` VALUES (8, 'VAI', 'VAIO', 2);
INSERT INTO `tbl_master_brand` VALUES (9, 'LGT', 'LOGITECH', 2);
INSERT INTO `tbl_master_brand` VALUES (10, 'LNV', 'LENOVO', 2);
INSERT INTO `tbl_master_brand` VALUES (11, 'SNY', 'SONY', 2);
INSERT INTO `tbl_master_brand` VALUES (12, 'VGN', 'VGEN', 2);
INSERT INTO `tbl_master_brand` VALUES (13, 'SND', 'SANDISK', 2);
INSERT INTO `tbl_master_brand` VALUES (14, 'DEL', 'DELL', 2);
INSERT INTO `tbl_master_brand` VALUES (15, 'HP', 'HP', 2);
INSERT INTO `tbl_master_brand` VALUES (16, 'TSB', 'TOSHIBA', 2);
INSERT INTO `tbl_master_brand` VALUES (17, 'SMS', 'SAMSUNG', 2);
INSERT INTO `tbl_master_brand` VALUES (18, 'XOM', 'XIAOMI', 2);
INSERT INTO `tbl_master_brand` VALUES (19, 'HWI', 'HUAWEI', 2);
INSERT INTO `tbl_master_brand` VALUES (20, 'TPL', 'TP LINK', 2);
INSERT INTO `tbl_master_brand` VALUES (21, 'DLI', 'D LINK', 2);
INSERT INTO `tbl_master_brand` VALUES (22, 'UNF', 'UNIFI', 2);
INSERT INTO `tbl_master_brand` VALUES (23, 'BRT', 'BROTHER', 2);
INSERT INTO `tbl_master_brand` VALUES (24, 'KNG', 'KINGSTON', 2);
INSERT INTO `tbl_master_brand` VALUES (25, 'VSP', 'VISIPRO', 2);
INSERT INTO `tbl_master_brand` VALUES (26, 'WD', 'WESTERN DIGITAL (WD)', 2);
INSERT INTO `tbl_master_brand` VALUES (27, 'SGT', 'SEAGATE', 2);
INSERT INTO `tbl_master_brand` VALUES (28, 'MXT', 'MAXTOR', 2);
INSERT INTO `tbl_master_brand` VALUES (29, 'CRS', 'CORSAIR', 2);
INSERT INTO `tbl_master_brand` VALUES (30, 'SPC', 'SPC', 2);
INSERT INTO `tbl_master_brand` VALUES (31, 'SBD', 'SIMBADDA', 2);
INSERT INTO `tbl_master_brand` VALUES (32, 'ELG', 'ENLIGHT', 2);
INSERT INTO `tbl_master_brand` VALUES (33, 'BIF', 'BIO FINGER', 2);
INSERT INTO `tbl_master_brand` VALUES (34, 'LG', 'LG', 2);
INSERT INTO `tbl_master_brand` VALUES (35, 'AOC', 'AOC', 2);
INSERT INTO `tbl_master_brand` VALUES (36, 'PNC', 'PANASONIC', 2);
INSERT INTO `tbl_master_brand` VALUES (37, 'NEO', 'NEOPOST', 2);
INSERT INTO `tbl_master_brand` VALUES (38, 'VTR', 'VOTRE', 2);
INSERT INTO `tbl_master_brand` VALUES (39, 'GGB', 'GIGABYTE', 2);
INSERT INTO `tbl_master_brand` VALUES (40, 'ASR', 'ASROCK', 2);
INSERT INTO `tbl_master_brand` VALUES (41, 'ECS', 'ECS', 2);
INSERT INTO `tbl_master_brand` VALUES (42, 'BIO', 'BIOSTAR', 2);
INSERT INTO `tbl_master_brand` VALUES (43, 'ITL', 'INTEL', 2);
INSERT INTO `tbl_master_brand` VALUES (44, 'AMD', 'AMD', 2);
INSERT INTO `tbl_master_brand` VALUES (45, 'NVD', 'NVIDIA', 2);
INSERT INTO `tbl_master_brand` VALUES (46, 'MSI', 'MSI', 2);
INSERT INTO `tbl_master_brand` VALUES (47, 'ZBR', 'ZEBRA', 2);
INSERT INTO `tbl_master_brand` VALUES (48, 'COM', 'COMMSCOPE', 2);
INSERT INTO `tbl_master_brand` VALUES (49, 'BEL', 'BELDEN', 2);
INSERT INTO `tbl_master_brand` VALUES (50, 'KON', 'KONIC', 2);
INSERT INTO `tbl_master_brand` VALUES (51, 'CEL', 'CELLKIT', 2);
INSERT INTO `tbl_master_brand` VALUES (52, 'STR', 'STURDY', 2);
INSERT INTO `tbl_master_brand` VALUES (53, 'PRO', 'PROLINK', 2);
INSERT INTO `tbl_master_brand` VALUES (54, 'ABC', 'ABC', 2);
INSERT INTO `tbl_master_brand` VALUES (55, 'AAK', 'ABC ALKALINE', 2);
INSERT INTO `tbl_master_brand` VALUES (56, 'EVR', 'EVEREADY', 2);
INSERT INTO `tbl_master_brand` VALUES (57, 'TE', 'TEAM ELITE', 2);
INSERT INTO `tbl_master_brand` VALUES (58, 'APP', 'APOTOP', 2);
INSERT INTO `tbl_master_brand` VALUES (59, 'ZKK', 'ZIKKO', 2);
INSERT INTO `tbl_master_brand` VALUES (60, 'KAS', 'KASSEN', 2);
INSERT INTO `tbl_master_brand` VALUES (61, 'DC', 'DEEP COOL', 2);
INSERT INTO `tbl_master_brand` VALUES (62, 'ETW', 'ETWO', 2);
INSERT INTO `tbl_master_brand` VALUES (63, 'STE', 'STEALTH', 2);
INSERT INTO `tbl_master_brand` VALUES (64, 'HIK', 'HIKVISION', 2);
INSERT INTO `tbl_master_brand` VALUES (65, 'YUM', 'YUME', 2);
INSERT INTO `tbl_master_brand` VALUES (66, 'UTI', 'UTICON', 2);
INSERT INTO `tbl_master_brand` VALUES (67, 'MIK', 'MIKOTEK', 2);
INSERT INTO `tbl_master_brand` VALUES (68, 'POY', 'POLYTRON', 2);
INSERT INTO `tbl_master_brand` VALUES (69, 'MKT', 'MAKITA', 2);
INSERT INTO `tbl_master_brand` VALUES (73, 'HNO', 'Hino', 1);

-- ----------------------------
-- Table structure for tbl_master_dept
-- ----------------------------
DROP TABLE IF EXISTS `tbl_master_dept`;
CREATE TABLE `tbl_master_dept`  (
  `id_master_dept` int NOT NULL AUTO_INCREMENT,
  `dept_code` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_dept` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_master_dept`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 47 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_master_dept
-- ----------------------------
INSERT INTO `tbl_master_dept` VALUES (1, 'GA', 'General Affair');
INSERT INTO `tbl_master_dept` VALUES (2, 'IT', 'Information Technology');
INSERT INTO `tbl_master_dept` VALUES (3, 'MN', 'Maintenance');
INSERT INTO `tbl_master_dept` VALUES (4, 'TP', 'Transportasi');
INSERT INTO `tbl_master_dept` VALUES (5, 'AP', 'Account Payable');
INSERT INTO `tbl_master_dept` VALUES (6, 'AR', 'Account Receivable');
INSERT INTO `tbl_master_dept` VALUES (7, 'AC', 'Accounting');
INSERT INTO `tbl_master_dept` VALUES (8, 'BI', 'Business Improvement');
INSERT INTO `tbl_master_dept` VALUES (9, 'CA', 'Comunication Affair');
INSERT INTO `tbl_master_dept` VALUES (10, 'DI', 'Data Integration & Analysis');
INSERT INTO `tbl_master_dept` VALUES (11, 'EG', 'Engineering');
INSERT INTO `tbl_master_dept` VALUES (12, 'EP', 'Engineering Project');
INSERT INTO `tbl_master_dept` VALUES (13, 'ES', 'Engineering Standar & RnD');
INSERT INTO `tbl_master_dept` VALUES (14, 'FT', 'Factory');
INSERT INTO `tbl_master_dept` VALUES (15, 'FO', 'Fleet Operation');
INSERT INTO `tbl_master_dept` VALUES (16, 'HC', 'Human Capital');
INSERT INTO `tbl_master_dept` VALUES (17, 'HR', 'Human Resources');
INSERT INTO `tbl_master_dept` VALUES (18, 'LG', 'Legal');
INSERT INTO `tbl_master_dept` VALUES (19, 'MB', 'Marketing & Branding');
INSERT INTO `tbl_master_dept` VALUES (20, 'OH', 'O&HSE');
INSERT INTO `tbl_master_dept` VALUES (21, 'OB', 'Office & Building Maintenance');
INSERT INTO `tbl_master_dept` VALUES (22, 'PC', 'Permit, Certificates and Docum');
INSERT INTO `tbl_master_dept` VALUES (23, 'PT', 'PPIC & Transport');
INSERT INTO `tbl_master_dept` VALUES (24, 'PM', 'Procurement');
INSERT INTO `tbl_master_dept` VALUES (25, 'PP', 'Production Planning Control');
INSERT INTO `tbl_master_dept` VALUES (26, 'PJ', 'Project');
INSERT INTO `tbl_master_dept` VALUES (27, 'PS', 'Proyek Pasang');
INSERT INTO `tbl_master_dept` VALUES (28, 'QA', 'Quality Assurance');
INSERT INTO `tbl_master_dept` VALUES (29, 'QC', 'Quality Control');
INSERT INTO `tbl_master_dept` VALUES (30, 'QP', 'Quality Control Plant');
INSERT INTO `tbl_master_dept` VALUES (31, 'QJ', 'Quality Control Project');
INSERT INTO `tbl_master_dept` VALUES (32, 'RO', 'Roll On Site');
INSERT INTO `tbl_master_dept` VALUES (33, 'SL', 'Sales');
INSERT INTO `tbl_master_dept` VALUES (35, 'SR', 'Sales Retail');
INSERT INTO `tbl_master_dept` VALUES (36, 'SF', 'Sales Retail Factory Outlet');
INSERT INTO `tbl_master_dept` VALUES (37, 'SK', 'Sekretaris');
INSERT INTO `tbl_master_dept` VALUES (38, 'ST', 'SITE');
INSERT INTO `tbl_master_dept` VALUES (39, 'SH', 'Strategic Human Capital');
INSERT INTO `tbl_master_dept` VALUES (40, 'TX', 'Tax');
INSERT INTO `tbl_master_dept` VALUES (41, 'TS', 'Testing');
INSERT INTO `tbl_master_dept` VALUES (42, 'BD', 'Board of Director');
INSERT INTO `tbl_master_dept` VALUES (43, 'EL', 'Elektrikal');
INSERT INTO `tbl_master_dept` VALUES (44, 'ES', 'Engineering Solar');
INSERT INTO `tbl_master_dept` VALUES (45, 'MH', 'Mekanik - Hidrolik');
INSERT INTO `tbl_master_dept` VALUES (46, 'SM', 'Sub-Con Management');

-- ----------------------------
-- Table structure for tbl_master_kategori
-- ----------------------------
DROP TABLE IF EXISTS `tbl_master_kategori`;
CREATE TABLE `tbl_master_kategori`  (
  `id_kategori` int NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_kategori` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_kategori`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_master_kategori
-- ----------------------------
INSERT INTO `tbl_master_kategori` VALUES (1, 'Inventory', 'INV');

-- ----------------------------
-- Table structure for tbl_master_lokasi
-- ----------------------------
DROP TABLE IF EXISTS `tbl_master_lokasi`;
CREATE TABLE `tbl_master_lokasi`  (
  `id_lokasi` int NOT NULL AUTO_INCREMENT,
  `nama_lokasi` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_lokasi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_master_lokasi
-- ----------------------------
INSERT INTO `tbl_master_lokasi` VALUES (1, 'Surabaya - Rungkut - Kantor');
INSERT INTO `tbl_master_lokasi` VALUES (2, 'Surabaya - Rungkut - Pabrik');
INSERT INTO `tbl_master_lokasi` VALUES (3, 'Surabaya - Rungkut - Gudang');
INSERT INTO `tbl_master_lokasi` VALUES (4, 'Surabaya - Basrah - Kantor');
INSERT INTO `tbl_master_lokasi` VALUES (5, 'Surabaya - Darmo - Kantor');
INSERT INTO `tbl_master_lokasi` VALUES (6, 'Surabaya - Tunjungan - Kantor');
INSERT INTO `tbl_master_lokasi` VALUES (7, 'Lawang - PUSLATKER - Kantor');
INSERT INTO `tbl_master_lokasi` VALUES (8, 'Lawang - PUSLATKER - Pabrik');
INSERT INTO `tbl_master_lokasi` VALUES (9, 'Lawang - PUSLATKER - Gudang');
INSERT INTO `tbl_master_lokasi` VALUES (10, 'Solo - Kyai Mojo - Kantor');
INSERT INTO `tbl_master_lokasi` VALUES (11, 'Solo - Kyai Mojo - Pabrik');
INSERT INTO `tbl_master_lokasi` VALUES (12, 'Solo - Kyai Mojo - Gudang');
INSERT INTO `tbl_master_lokasi` VALUES (13, 'Semarang - Wolter Monginsidi - Pabrik');
INSERT INTO `tbl_master_lokasi` VALUES (14, 'Semarang - Wolter Monginsidi - Gudang');
INSERT INTO `tbl_master_lokasi` VALUES (15, 'Semarang - Industri - Pabrik');
INSERT INTO `tbl_master_lokasi` VALUES (16, 'Semarang - Industri - Gudang');
INSERT INTO `tbl_master_lokasi` VALUES (17, 'Semarang - Majapahit - Kantor');
INSERT INTO `tbl_master_lokasi` VALUES (18, 'Banjarmasin - Banjar Gawi - Kantor');
INSERT INTO `tbl_master_lokasi` VALUES (19, 'Banjarmasin - Banjar Gawi - Pabrik');
INSERT INTO `tbl_master_lokasi` VALUES (20, 'Cikarang - Jababeka - Kantor');

-- ----------------------------
-- Table structure for tbl_master_sub_tipe
-- ----------------------------
DROP TABLE IF EXISTS `tbl_master_sub_tipe`;
CREATE TABLE `tbl_master_sub_tipe`  (
  `id_master_sub` int NOT NULL AUTO_INCREMENT,
  `sub_code` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_sub` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fk_tipe` int NULL DEFAULT NULL,
  `fk_dept` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_master_sub`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 91 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_master_sub_tipe
-- ----------------------------
INSERT INTO `tbl_master_sub_tipe` VALUES (1, '0002', 'LCD Monitor', 1, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (3, '0003', 'Keyboard', 1, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (4, '0004', 'Mouse', 1, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (5, '0005', 'Wireless Keyboard & Mouse', 1, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (8, '0006', 'Laptop', 1, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (9, '0007', 'Laptop Charger', 1, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (10, '0008', 'Laptop Bag', 1, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (11, '0001', 'HDD', 2, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (12, '0002', 'SSD', 2, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (13, '0003', 'NAS', 2, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (14, '0004', 'Flashdrive', 2, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (15, '0005', 'Memory Card', 2, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (16, '0006', 'Enclosure HDD', 2, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (17, '0001', 'PC Desktop', 3, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (18, '0002', 'Laptop', 3, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (19, '0001', 'USB Cooler pad / Cooling Pad', 4, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (20, '0002', 'USB Hub', 4, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (21, '0003', 'Converter VGA to HDMI', 4, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (22, '0004', 'Cleaning Kit', 4, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (23, '0001', 'Handphone', 5, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (24, '0002', 'Android Tablet', 5, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (25, '0003', 'Telephone', 5, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (26, '0004', 'Android Smartphone', 5, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (27, '0001', 'Printer Laser', 6, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (28, '0002', 'Printer Inkjet', 6, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (29, '0003', 'Laser cartridge', 6, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (30, '0004', 'Inkjet cartridge', 6, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (31, '0005', 'Printer Dotmatrix', 6, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (32, '0006', 'Electronic Typing Machine', 6, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (33, '0007', 'Franking Machine', 6, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (34, '0001', 'Router', 7, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (35, '0002', 'Switch', 7, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (36, '0003', 'Hub', 7, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (37, '0004', 'Modem', 7, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (38, '0005', 'Wifi', 7, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (39, '0006', 'Mifi', 7, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (40, '0007', 'USB Wifi Adapter', 7, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (41, '0001', 'Projector', 8, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (42, '0002', 'Wifi Projector', 8, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (43, '0003', 'LCD TV', 8, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (44, '0004', 'LCD Smart TV', 8, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (45, '0005', 'LCD Screen', 8, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (46, '0006', 'Android Box', 8, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (47, '0007', 'Laser Pointer', 8, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (48, '0008', 'Active Speaker', 8, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (49, '0009', 'Headphone', 8, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (50, '0010', 'Bluetooth Speaker', 8, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (51, '0011', 'Bluetooth Headset', 8, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (52, '0001', 'Blower', 9, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (53, '0002', 'Brush', 9, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (54, '0003', 'Screwdriver', 9, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (55, '0004', 'Tang', 9, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (56, '0005', 'Solder', 9, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (57, '0001', 'RJ45 Cable', 10, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (58, '0002', 'Power roll', 10, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (59, '0003', 'HDMI', 10, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (60, '0004', 'VGA', 10, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (61, '0005', 'Wire Duct', 10, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (62, '0006', 'Cable Zipper', 10, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (63, '0007', 'cable Ties', 10, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (64, '0008', 'Heat Shrink', 10, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (65, '0001', 'CCTV Closed-circuit television', 11, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (66, '0002', 'Gate Lock', 11, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (67, '0003', 'power consumption monitor', 11, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (68, '0004', 'Arduino', 11, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (69, '0005', 'Raspberry pi', 11, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (70, '0001', 'Tronton Crane', 14, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (71, '0002', 'Tronton', 14, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (72, '0003', 'ELF', 14, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (73, '0004', 'Canter', 14, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (74, '0005', 'Colt', 14, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (75, '0006', 'Pick Up', 14, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (76, '0007', 'Trailler Head', 14, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (77, '0012', 'Web Cam', 8, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (78, '0013', 'Handy Talki', 8, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (82, '0001', 'CPU Desktop', 1, 2);
INSERT INTO `tbl_master_sub_tipe` VALUES (86, '0001', 'Wuling', 13, 1);
INSERT INTO `tbl_master_sub_tipe` VALUES (87, '0002', 'Fortuner', 13, 1);
INSERT INTO `tbl_master_sub_tipe` VALUES (88, '0003', 'Panther', 13, 1);
INSERT INTO `tbl_master_sub_tipe` VALUES (89, '0001', 'Hino', 14, 1);
INSERT INTO `tbl_master_sub_tipe` VALUES (90, '0002', 'Tronton', 14, 1);

-- ----------------------------
-- Table structure for tbl_master_tipe
-- ----------------------------
DROP TABLE IF EXISTS `tbl_master_tipe`;
CREATE TABLE `tbl_master_tipe`  (
  `id_master_tipe` int NOT NULL AUTO_INCREMENT,
  `code_master_tipe` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_master_tipe` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fk_dept` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_master_tipe`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_master_tipe
-- ----------------------------
INSERT INTO `tbl_master_tipe` VALUES (1, 'PC', 'Personal Computer', 2);
INSERT INTO `tbl_master_tipe` VALUES (2, 'STR', 'Storage', 2);
INSERT INTO `tbl_master_tipe` VALUES (3, 'RM', 'RAM', 2);
INSERT INTO `tbl_master_tipe` VALUES (4, 'PCA', 'PC Accessoris', 2);
INSERT INTO `tbl_master_tipe` VALUES (5, 'GDT', 'Gadget', 2);
INSERT INTO `tbl_master_tipe` VALUES (6, 'PRT', 'Printer', 2);
INSERT INTO `tbl_master_tipe` VALUES (7, 'NET', 'Networking', 2);
INSERT INTO `tbl_master_tipe` VALUES (8, 'MM', 'Multimedia', 2);
INSERT INTO `tbl_master_tipe` VALUES (9, 'TLS', 'Tools', 2);
INSERT INTO `tbl_master_tipe` VALUES (10, 'CBL', 'Cables', 2);
INSERT INTO `tbl_master_tipe` VALUES (11, 'IOT', 'Internet of Thinks', 2);
INSERT INTO `tbl_master_tipe` VALUES (12, 'SRT', 'Sertifikat', 2);
INSERT INTO `tbl_master_tipe` VALUES (13, 'MBL', 'Mobil', 1);
INSERT INTO `tbl_master_tipe` VALUES (14, 'TRC', 'Truck', 1);

-- ----------------------------
-- Table structure for tbl_mutasi
-- ----------------------------
DROP TABLE IF EXISTS `tbl_mutasi`;
CREATE TABLE `tbl_mutasi`  (
  `id_mutasi` int NOT NULL AUTO_INCREMENT,
  `fk_item` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_item` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fk_lokasi` int NULL DEFAULT NULL,
  `other_location` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `pic` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tgl_mutasi` date NULL DEFAULT NULL,
  `fk_dept` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_mutasi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_mutasi
-- ----------------------------
INSERT INTO `tbl_mutasi` VALUES (1, 'INV/IT/STR/0003/CAN/00002', 'qdasfsdg', 6, '', 'tes', '00008', '2021-05-07', 2);
INSERT INTO `tbl_mutasi` VALUES (4, 'INV/GA/MBL/0001/HNO/00003', 'Wuling Convero', 11, '', 'no note', '00382', '2021-05-11', 1);

-- ----------------------------
-- Table structure for tbl_user
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user`  (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `dept_user` int NULL DEFAULT NULL,
  `username` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `level` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES (1, 'MOCH. FIRMAN FIRDAUS', 2, 'admin', 'e79c7323f62151abde47e29987b38859', 'akusayangkamu', 1);
INSERT INTO `tbl_user` VALUES (2, 'RINA SUSILAWATI', 1, 'rina', '3aea9516d222934e35dd30f142fda18c', 'rina', 2);

SET FOREIGN_KEY_CHECKS = 1;
