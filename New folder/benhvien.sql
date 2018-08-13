-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 22, 2013 at 09:07 PM
-- Server version: 5.0.45-community-nt
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `benhvien`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblbacsi`
--

CREATE TABLE IF NOT EXISTS `tblbacsi` (
  `maBacsi` char(5) collate utf8_unicode_ci NOT NULL default '',
  `tenBacsi` varchar(30) character set utf8 NOT NULL,
  `maKhoa` char(4) collate utf8_unicode_ci NOT NULL,
  `ngaySinh` datetime NOT NULL,
  `gioiTinh` char(3) character set utf8 default 'Nam',
  `diaChi` varchar(100) character set utf8 NOT NULL,
  `CMND` char(9) collate utf8_unicode_ci NOT NULL,
  `trinhDo` char(2) collate utf8_unicode_ci default NULL,
  `Email` varchar(30) collate utf8_unicode_ci default NULL,
  `soDT` char(11) collate utf8_unicode_ci NOT NULL,
  `matKhau` varchar(30) collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`maBacsi`),
  KEY `maKhoa` (`maKhoa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblbacsi`
--

INSERT INTO `tblbacsi` (`maBacsi`, `tenBacsi`, `maKhoa`, `ngaySinh`, `gioiTinh`, `diaChi`, `CMND`, `trinhDo`, `Email`, `soDT`, `matKhau`) VALUES
('BS001', 'Đoàn Thung', 'KH03', '0000-00-00 00:00:00', 'Nam', 'Đại Minh', '205513136', 'DH', 'doanthung@gmail.com', '16577736166', '123456'),
('BS002', 'Phan Nguyên', 'KH04', '0000-00-00 00:00:00', 'Nam', 'Đại Minh', '205513137', 'CH', 'nguyen@gmail.com', '16577736167', '123456'),
('BS003', 'Đình Thảo', 'KH01', '0000-00-00 00:00:00', 'Nam', 'Đại Minh', '205513135', 'CH', 'dinhthao@gmail.com', '16577736168', '123456'),
('BS004', 'Nguyễn Anh', 'KH02', '0000-00-00 00:00:00', 'Nam', 'Đại Thắng', '205513138', 'CH', 'nguyenanh@gmail.com', '16577736169', '123456'),
('BS005', 'Phan Hồng Bảo', 'KH07', '0000-00-00 00:00:00', 'Nam', 'Đại Cường', '205513139', 'CD', 'hongbao@gmail.com', '16577676167', '123456'),
('BS006', 'Phan Nguyên Thảo', 'KH05', '0000-00-00 00:00:00', 'Nữ', 'Đại Minh', '205513147', 'CH', 'nguyenthao@gmail.com', '16597736167', '123456'),
('BS007', 'Hồ Kim Minh', 'KH06', '0000-00-00 00:00:00', 'Nữ', 'Đại Phong', '205513140', 'DH', 'kimminh@gmail.com', '16545636167', '123456'),
('BS008', 'Phan Anh Quốc', 'KH04', '0000-00-00 00:00:00', 'Nam', 'Đại Hồng', '205513141', 'CH', 'phânnhquoc@gmail.com', '16577736145', '123456'),
('BS009', 'Phan Bảo Anh', 'KH01', '0000-00-00 00:00:00', 'Nam', 'Đại Hồng', '205513142', 'CH', 'phanbaoanh@gmail.com', '16577736154', '123456'),
('BS010', 'Trần Ngọc Khoa', 'KH07', '0000-00-00 00:00:00', 'Nam', 'Đại Minh', '205513143', 'CH', 'ngockhoamn@gmail.com', '16577736123', '123456'),
('BS011', '33333', 'KH02', '2013-05-04 00:00:00', 'Nam', '1111111111', '111111111', 'ch', '2132', '123456789', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblbenhan`
--

CREATE TABLE IF NOT EXISTS `tblbenhan` (
  `maBenhan` char(5) collate utf8_unicode_ci NOT NULL default '',
  `maBenhnhan` char(5) collate utf8_unicode_ci default NULL,
  `chuanDoan` varchar(30) character set utf8 NOT NULL,
  `ngayNhapvien` date NOT NULL,
  `ngayXuatvien` date default NULL,
  `dienBienbenh` varchar(30) character set utf8 default NULL,
  `tinhTrang` char(2) collate utf8_unicode_ci default 'TN',
  PRIMARY KEY  (`maBenhan`),
  KEY `maBenhnhan` (`maBenhnhan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblbenhan`
--

INSERT INTO `tblbenhan` (`maBenhan`, `maBenhnhan`, `chuanDoan`, `ngayNhapvien`, `ngayXuatvien`, `dienBienbenh`, `tinhTrang`) VALUES
('BA001', 'BN006', 'viêm da', '0000-00-00', '0000-00-00', 'bình thường', 'TN'),
('BA002', 'BN002', 'viêm da', '0000-00-00', '0000-00-00', 'bình thường', 'NV'),
('BA003', 'BN003', 'tiểu đường', '0000-00-00', '0000-00-00', 'bình thường', 'XV'),
('BA004', 'BN001', 'tiểu đường', '0000-00-00', '0000-00-00', 'bình thường', 'TN'),
('BA005', 'BN002', 'Sốt', '0000-00-00', '0000-00-00', 'bình thường', 'NV'),
('BA006', 'BN003', 'Cảm', '0000-00-00', '0000-00-00', 'bình thường', 'XV'),
('BA007', 'BN001', 'Sốt', '0000-00-00', '0000-00-00', 'bình thường', 'TN'),
('BA008', 'BN002', 'Bỏng', '0000-00-00', '0000-00-00', 'bình thường', 'NV'),
('BA009', 'BN003', 'Bỏng', '0000-00-00', '0000-00-00', 'bình thường', 'XV'),
('BA010', 'BN001', 'cảm', '0000-00-00', '0000-00-00', 'bình thường', 'TN');

-- --------------------------------------------------------

--
-- Table structure for table `tblbenhanbacsi`
--

CREATE TABLE IF NOT EXISTS `tblbenhanbacsi` (
  `logID` char(5) collate utf8_unicode_ci default NULL,
  `maBenhan` char(5) collate utf8_unicode_ci default NULL,
  `maBacsi` char(5) collate utf8_unicode_ci default NULL,
  KEY `maBenhan` (`maBenhan`),
  KEY `maBacsi` (`maBacsi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblbenhanbacsi`
--

INSERT INTO `tblbenhanbacsi` (`logID`, `maBenhan`, `maBacsi`) VALUES
('ID001', 'BA010', 'BS002'),
('ID002', 'BA010', 'BS010');

-- --------------------------------------------------------

--
-- Table structure for table `tblbenhnhan`
--

CREATE TABLE IF NOT EXISTS `tblbenhnhan` (
  `maBenhnhan` char(5) collate utf8_unicode_ci NOT NULL default '',
  `tenBenhnhan` varchar(30) character set utf8 NOT NULL,
  `gioiTinh` char(3) collate utf8_unicode_ci default 'nam',
  `diaChi` varchar(100) character set utf8 NOT NULL,
  `maDK` char(5) collate utf8_unicode_ci default NULL,
  `ngaySinh` date NOT NULL,
  `CMND` char(9) collate utf8_unicode_ci NOT NULL,
  `danToc` varchar(30) character set utf8 default NULL,
  `ngheNghiep` varchar(30) character set utf8 default NULL,
  `BHYT` char(15) collate utf8_unicode_ci default NULL,
  `maKhoa` char(4) collate utf8_unicode_ci default NULL,
  `matKhau` varchar(20) character set utf8 NOT NULL,
  PRIMARY KEY  (`maBenhnhan`),
  KEY `maDK` (`maDK`),
  KEY `maKhoa` (`maKhoa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblbenhnhan`
--

INSERT INTO `tblbenhnhan` (`maBenhnhan`, `tenBenhnhan`, `gioiTinh`, `diaChi`, `maDK`, `ngaySinh`, `CMND`, `danToc`, `ngheNghiep`, `BHYT`, `maKhoa`, `matKhau`) VALUES
('BN001', 'Nguyễn Văn Bình', 'Nam', 'Đại Cường', NULL, '0000-00-00', '205513139', 'Kinh', 'Nông', '111111111111', 'KH01', '1234'),
('BN002', 'nguyen van cần', 'Nam', 'Đại An', NULL, '0000-00-00', '205513140', 'Kinh', 'Nông', '123456789098767', 'KH06', '1234'),
('BN003', 'Phan Thị Hồng Nhàn', 'Nam', 'Đại Nghia', NULL, '0000-00-00', '205513150', 'Kinh', 'Nông', '123456789767', 'KH02', '1234'),
('BN004', 'Trần Thị Bích', 'Nam', 'Đại minh', NULL, '0000-00-00', '205513151', 'Kinh', 'Nông', '123456789098767', 'KH03', '1234'),
('BN005', 'Phạm Hồng Nam', 'Nam', 'Đại Phong', NULL, '0000-00-00', '205513152', 'Kinh', 'Nông', '123456789098767', 'KH04', '1234'),
('BN006', 'Nguyễn Thị Bé', 'Nam', 'Đại Phong', NULL, '0000-00-00', '205513153', 'Kinh', 'Nông', '123456789098767', 'KH05', '1234'),
('BN007', 'Nguyễn Văn Bi', 'Nam', 'Đại Phong', NULL, '0000-00-00', '205513154', 'Kinh', 'Nông', '22222222', 'KH06', '1234'),
('BN008', 'nguyet', 'Nữ', 'donh gia', 'DK008', '2012-02-02', '222222222', NULL, NULL, '22222222', NULL, ''),
('BN009', 'ffff', 'Nam', 'gggg', 'DK009', '0002-02-02', '123456782', NULL, NULL, '23456', NULL, ''),
('BN010', '1', 'Nam', 'đong gia', 'DK010', '0001-01-01', '', NULL, NULL, '8888888887', NULL, ''),
('BN011', '2', 'Nữ', 'ap trung', 'DK011', '0002-02-02', '555555555', NULL, NULL, '23456789087654', NULL, ''),
('BN012', '3', 'Nam', '3245676', 'DK012', '0000-00-00', '6666667', NULL, NULL, '54657658', NULL, ''),
('BN013', '123', 'Nam', '1342', 'DK013', '0000-00-00', '2341', NULL, NULL, '1324', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbldatlichkham`
--

CREATE TABLE IF NOT EXISTS `tbldatlichkham` (
  `maLich` char(5) collate utf8_unicode_ci NOT NULL default '',
  `maBenhnhan` char(5) collate utf8_unicode_ci default NULL,
  `khoa` varchar(20) character set utf8 NOT NULL,
  `maBacsi` char(5) collate utf8_unicode_ci default NULL,
  `ngayDK` datetime NOT NULL,
  `gioDK` varchar(20) character set utf8 NOT NULL,
  `soTaikhoan` char(12) collate utf8_unicode_ci NOT NULL,
  `tinhTrang` char(1) collate utf8_unicode_ci default '0',
  PRIMARY KEY  (`maLich`),
  KEY `maBenhnhan` (`maBenhnhan`),
  KEY `maBacsi` (`maBacsi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbldatlichkham`
--

INSERT INTO `tbldatlichkham` (`maLich`, `maBenhnhan`, `khoa`, `maBacsi`, `ngayDK`, `gioDK`, `soTaikhoan`, `tinhTrang`) VALUES
('DL001', 'BN010', 'KH01', 'BS001', '2002-02-02 00:00:00', 'Sáng', '234567890', '1'),
('DL002', 'BN011', 'KH04', 'BS003', '2002-02-02 00:00:00', 'Chiều', '2345678909', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tblkhoa`
--

CREATE TABLE IF NOT EXISTS `tblkhoa` (
  `maKhoa` char(4) collate utf8_unicode_ci NOT NULL default '',
  `tenKhoa` varchar(20) character set utf8 NOT NULL,
  `lePhiKHam` decimal(6,0) NOT NULL,
  `donGiaNgayDem` decimal(6,0) NOT NULL,
  PRIMARY KEY  (`maKhoa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblkhoa`
--

INSERT INTO `tblkhoa` (`maKhoa`, `tenKhoa`, `lePhiKHam`, `donGiaNgayDem`) VALUES
('KH01', 'khoa nhi', '20000', '30000'),
('KH02', 'khoa tai mui hong ', '20000', '30000'),
('KH03', 'khoa nội', '20000', '30000'),
('KH04', 'khoa ngọai', '2000', '40000'),
('KH05', 'khoa sản', '20000', '30000'),
('KH06', 'khoa ung bướu', '20000', '30000'),
('KH07', 'khoa hồi sức', '20000', '30000');

-- --------------------------------------------------------

--
-- Table structure for table `tblnguoitiepbenh`
--

CREATE TABLE IF NOT EXISTS `tblnguoitiepbenh` (
  `maNV` char(5) collate utf8_unicode_ci NOT NULL,
  `tenNV` varchar(30) character set utf8 NOT NULL,
  `matKhau` varchar(30) collate utf8_unicode_ci default NULL,
  `ngaySinh` datetime NOT NULL,
  `gioiTinh` char(3) character set utf8 default NULL,
  `diaChi` varchar(100) character set utf8 NOT NULL,
  `CMND` char(9) collate utf8_unicode_ci NOT NULL,
  `Email` varchar(30) collate utf8_unicode_ci default NULL,
  `soDT` char(11) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`maNV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblnguoitiepbenh`
--

INSERT INTO `tblnguoitiepbenh` (`maNV`, `tenNV`, `matKhau`, `ngaySinh`, `gioiTinh`, `diaChi`, `CMND`, `Email`, `soDT`) VALUES
('NV001', 'Nguyen Minh Vuong', '12345', '2013-04-10 00:00:00', 'Nam', 'Dai Thang- Quang nam', '205513137', 'minhvuong@gmail.com', '01657773616'),
('NV002', 'Pham Thi Hong', '12345', '2013-04-12 00:00:00', 'Nu', 'Dai Thanh-Quang Nam', '205513139', 'hong@yahoo.com', '0165444892');

-- --------------------------------------------------------

--
-- Table structure for table `tblphieuxetnghiem`
--

CREATE TABLE IF NOT EXISTS `tblphieuxetnghiem` (
  `maPhieu` char(4) collate utf8_unicode_ci NOT NULL default '',
  `maXetnghiem` char(5) collate utf8_unicode_ci default NULL,
  `maBenhan` char(5) collate utf8_unicode_ci default NULL,
  `maBacsi` char(5) collate utf8_unicode_ci default NULL,
  `ngayXetnghiem` datetime NOT NULL,
  `lanThu` int(11) default '0',
  `ketQua` varchar(50) character set utf8 NOT NULL,
  PRIMARY KEY  (`maPhieu`),
  KEY `maXetnghiem` (`maXetnghiem`),
  KEY `maBenhan` (`maBenhan`),
  KEY `maBacsi` (`maBacsi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblphieuxetnghiem`
--

INSERT INTO `tblphieuxetnghiem` (`maPhieu`, `maXetnghiem`, `maBenhan`, `maBacsi`, `ngayXetnghiem`, `lanThu`, `ketQua`) VALUES
('1', 'XN002', 'BA002', 'BS002', '0000-00-00 00:00:00', 2, 'bình thường'),
('2', 'XN001', 'BA002', 'BS002', '0000-00-00 00:00:00', 1, 'bình thường'),
('3', 'XN002', 'BA002', 'BS002', '0000-00-00 00:00:00', 2, 'bình thường'),
('4', 'XN001', 'BA002', 'BS002', '0000-00-00 00:00:00', 1, 'bình thường'),
('5', 'XN003', 'BA001', 'BS002', '0000-00-00 00:00:00', 1, 'bình thường'),
('6', 'XN001', 'BA010', 'BS002', '0000-00-00 00:00:00', 1, 'bình thường'),
('P007', 'XN001', 'BA010', 'BS002', '2013-05-01 00:00:00', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tblthongtindk`
--

CREATE TABLE IF NOT EXISTS `tblthongtindk` (
  `maDK` char(5) collate utf8_unicode_ci NOT NULL default '',
  `tenBenhnhan` varchar(30) character set utf8 NOT NULL,
  `ngaySinh` datetime NOT NULL,
  `gioiTinh` char(3) character set utf8 default 'Nam',
  `CMND` char(9) collate utf8_unicode_ci NOT NULL,
  `BHYT` char(15) collate utf8_unicode_ci default NULL,
  `diaChi` varchar(100) character set utf8 NOT NULL,
  `soDT` char(11) collate utf8_unicode_ci NOT NULL,
  `Email` varchar(30) collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`maDK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblthongtindk`
--

INSERT INTO `tblthongtindk` (`maDK`, `tenBenhnhan`, `ngaySinh`, `gioiTinh`, `CMND`, `BHYT`, `diaChi`, `soDT`, `Email`) VALUES
('DK001', 'nguoi lon', '0001-01-01 00:00:00', 'Nam', '99887767', '234567', '234567', '345678', '23456789'),
('DK002', 'nhi', '0002-02-02 00:00:00', 'Nữ', '', '44444444', '11111111', '111111111', '11111111'),
('DK003', 'nhi2', '0001-01-01 00:00:00', 'Nam', '', '666666666', '2345678', '5432', '2345678'),
('DK004', '11111', '0001-01-01 00:00:00', 'Nam', '333333333', '22222222222', '1111111111', '11111111111', '111111111'),
('DK005', '1', '0001-01-01 00:00:00', 'Nam', '', '123', '111', '11111', '11'),
('DK006', '2', '0000-00-00 00:00:00', 'Nam', '2', '2', '2', '2', '2'),
('DK007', '1', '0000-00-00 00:00:00', 'Nữ', '1', '1', '1', '1', '1'),
('DK008', 'nguyet', '2012-02-02 00:00:00', 'Nữ', '222222222', '22222222', 'donh gia', '2222222222', 'nnnnnnnnnnn'),
('DK009', 'ffff', '0002-02-02 00:00:00', 'Nam', '123456782', '23456', 'gggg', 'gggg', 'sdfghjk'),
('DK010', '1', '0001-01-01 00:00:00', 'Nam', '', '8888888887', 'đong gia', '8765432', '3456789'),
('DK011', '2', '0002-02-02 00:00:00', 'Nữ', '555555555', '23456789087654', 'ap trung', '567876543', '3456786543'),
('DK012', '3', '0000-00-00 00:00:00', 'Nam', '6666667', '54657658', '3245676', '54365', '657467'),
('DK013', '123', '0000-00-00 00:00:00', 'Nam', '2341', '1324', '1342', '134', '1432');

-- --------------------------------------------------------

--
-- Table structure for table `tblxetnghiem`
--

CREATE TABLE IF NOT EXISTS `tblxetnghiem` (
  `maXetnghiem` char(5) collate utf8_unicode_ci NOT NULL default '',
  `LoaiXetNghiem` varchar(20) character set utf8 NOT NULL,
  `tenXetNghiem` varchar(20) character set utf8 NOT NULL,
  `DonGia` decimal(6,0) NOT NULL,
  PRIMARY KEY  (`maXetnghiem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblxetnghiem`
--

INSERT INTO `tblxetnghiem` (`maXetnghiem`, `LoaiXetNghiem`, `tenXetNghiem`, `DonGia`) VALUES
('XN001', 'xquang', 'chup x-quang', '20000'),
('XN002', 'xetnghien', 'xet nghem mau', '30000'),
('XN003', 'xetnghien', 'xet nghem nc tieu', '50000');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblbacsi`
--
ALTER TABLE `tblbacsi`
  ADD CONSTRAINT `tblbacsi_ibfk_1` FOREIGN KEY (`maKhoa`) REFERENCES `tblkhoa` (`maKhoa`);

--
-- Constraints for table `tblbenhan`
--
ALTER TABLE `tblbenhan`
  ADD CONSTRAINT `tblbenhan_ibfk_1` FOREIGN KEY (`maBenhnhan`) REFERENCES `tblbenhnhan` (`maBenhnhan`);

--
-- Constraints for table `tblbenhanbacsi`
--
ALTER TABLE `tblbenhanbacsi`
  ADD CONSTRAINT `tblbenhanbacsi_ibfk_1` FOREIGN KEY (`maBenhan`) REFERENCES `tblbenhan` (`maBenhan`),
  ADD CONSTRAINT `tblbenhanbacsi_ibfk_2` FOREIGN KEY (`maBacsi`) REFERENCES `tblbacsi` (`maBacsi`);

--
-- Constraints for table `tblbenhnhan`
--
ALTER TABLE `tblbenhnhan`
  ADD CONSTRAINT `tblbenhnhan_ibfk_1` FOREIGN KEY (`maDK`) REFERENCES `tblthongtindk` (`maDK`),
  ADD CONSTRAINT `tblbenhnhan_ibfk_2` FOREIGN KEY (`maKhoa`) REFERENCES `tblkhoa` (`maKhoa`);

--
-- Constraints for table `tbldatlichkham`
--
ALTER TABLE `tbldatlichkham`
  ADD CONSTRAINT `tbldatlichkham_ibfk_1` FOREIGN KEY (`maBenhnhan`) REFERENCES `tblbenhnhan` (`maBenhnhan`),
  ADD CONSTRAINT `tbldatlichkham_ibfk_2` FOREIGN KEY (`maBacsi`) REFERENCES `tblbacsi` (`maBacsi`);

--
-- Constraints for table `tblphieuxetnghiem`
--
ALTER TABLE `tblphieuxetnghiem`
  ADD CONSTRAINT `tblphieuxetnghiem_ibfk_1` FOREIGN KEY (`maXetnghiem`) REFERENCES `tblxetnghiem` (`maXetnghiem`),
  ADD CONSTRAINT `tblphieuxetnghiem_ibfk_2` FOREIGN KEY (`maBenhan`) REFERENCES `tblbenhan` (`maBenhan`),
  ADD CONSTRAINT `tblphieuxetnghiem_ibfk_3` FOREIGN KEY (`maBacsi`) REFERENCES `tblbacsi` (`maBacsi`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
