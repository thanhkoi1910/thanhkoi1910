-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2016 at 05:01 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chitietdonhang`
--

CREATE TABLE `tbl_chitietdonhang` (
  `id_chitietdh` int(11) NOT NULL,
  `id_donhang` int(11) NOT NULL DEFAULT '0',
  `id_sanpham` int(11) NOT NULL DEFAULT '0',
  `soluong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_chitietdonhang`
--

INSERT INTO `tbl_chitietdonhang` (`id_chitietdh`, `id_donhang`, `id_sanpham`, `soluong`, `dongia`) VALUES
(175, 333, 16, 1, 800000),
(176, 334, 1, 2, 1000000),
(177, 335, 21, 1, 1500000),
(178, 336, 31, 1, 800000),
(179, 337, 21, 1, 1500000),
(180, 339, 22, 1, 1200000),
(181, 340, 25, 1, 1400000),
(182, 341, 6, 1, 700000),
(183, 342, 21, 1, 1500000),
(184, 342, 11, 1, 500000),
(185, 342, 4, 1, 1270000),
(186, 343, 4, 2, 2000000),
(187, 344, 5, 1, 1500000),
(188, 345, 1, 1, 1000000),
(189, 346, 11, 1, 500000),
(190, 347, 6, 1, 700000),
(191, 348, 1, 1, 1000000),
(192, 349, 16, 2, 800000),
(193, 349, 18, 1, 1200000),
(194, 349, 34, 1, 1200000),
(195, 349, 31, 1, 800000),
(196, 349, 32, 1, 900000),
(197, 349, 1, 1, 1000000),
(198, 350, 1, 1, 1000000),
(199, 350, 55, 1, 1000000),
(200, 351, 60, 1, 500000),
(201, 351, 32, 1, 900000),
(202, 352, 1, 1, 1000000),
(203, 353, 17, 1, 600000),
(204, 354, 1, 1, 1000000),
(205, 354, 66, 1, 1000000),
(206, 355, 1, 1, 1000000),
(207, 355, 22, 1, 1200000),
(208, 356, 64, 1, 800000),
(209, 357, 64, 1, 800000),
(210, 358, 31, 1, 800000),
(211, 358, 6, 1, 700000),
(212, 358, 1, 1, 1000000),
(213, 359, 6, 3, 700000),
(214, 360, 16, 1, 800000),
(215, 361, 7, 1, 500000),
(216, 362, 4, 1, 1270000),
(217, 363, 11, 1, 500000),
(218, 364, 12, 1, 600000),
(219, 365, 1, 1, 1000000),
(220, 366, 21, 1, 1500000),
(221, 367, 7, 1, 500000),
(222, 368, 11, 1, 500000),
(223, 369, 6, 1, 700000),
(224, 370, 22, 1, 1200000),
(225, 370, 21, 1, 1500000),
(226, 370, 26, 1, 1600000),
(227, 371, 11, 1, 500000),
(228, 372, 6, 1, 700000),
(229, 373, 1, 3, 1000000),
(230, 373, 7, 1, 500000),
(231, 374, 21, 1, 1500000),
(232, 376, 17, 1, 600000),
(233, 378, 12, 1, 600000),
(234, 380, 1, 1, 1000000),
(235, 381, 21, 1, 1500000),
(236, 382, 16, 3, 800000),
(237, 382, 31, 1, 800000),
(238, 383, 16, 2, 800000),
(239, 383, 2, 3, 1200000),
(240, 384, 61, 2, 1000000),
(241, 385, 72, 4, 1500000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donhang`
--

CREATE TABLE `tbl_donhang` (
  `id_donhang` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL DEFAULT '0',
  `tinhtrang` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_donhang`
--

INSERT INTO `tbl_donhang` (`id_donhang`, `id_khachhang`, `tinhtrang`, `date`) VALUES
(333, 9, 1, '2016-10-17'),
(335, 9, 1, '2016-10-15'),
(336, 9, 1, '2016-10-16'),
(337, 9, 1, '2016-10-16'),
(339, 9, 1, '2016-10-16'),
(340, 9, 1, '2016-10-16'),
(341, 9, 1, '2016-10-21'),
(342, 9, 1, '2016-10-21'),
(346, 32, 1, '2016-10-26'),
(347, 9, 1, '2016-10-26'),
(349, 9, 1, '2016-11-09'),
(350, 32, 1, '2016-11-10'),
(351, 9, 1, '2016-11-10'),
(352, 33, 1, '2016-11-14'),
(353, 9, 1, '2016-11-14'),
(354, 9, 1, '2016-11-18'),
(355, 9, 1, '2016-11-23'),
(356, 9, 1, '2016-11-23'),
(357, 9, 1, '2016-11-23'),
(358, 9, 1, '2016-11-23'),
(359, 9, 1, '2016-11-23'),
(360, 34, 1, '2016-11-23'),
(361, 9, 1, '2016-11-23'),
(362, 9, 1, '2016-11-23'),
(363, 9, 1, '2016-11-23'),
(364, 9, 1, '2016-11-23'),
(365, 9, 1, '2016-11-23'),
(366, 9, 1, '2016-11-23'),
(367, 9, 1, '2016-11-23'),
(368, 9, 1, '2016-11-23'),
(369, 9, 1, '2016-11-23'),
(370, 9, 1, '2016-11-23'),
(371, 9, 1, '2016-11-23'),
(372, 9, 1, '2016-11-23'),
(373, 9, 1, '2016-11-24'),
(374, 9, 1, '2016-11-24'),
(375, 9, 1, '2016-11-24'),
(376, 9, 1, '2016-11-24'),
(378, 9, 1, '2016-11-24'),
(381, 9, 0, '2016-11-24'),
(382, 9, 0, '2016-11-24'),
(383, 9, 0, '2016-11-24'),
(385, 33, 0, '2016-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_khachhang`
--

CREATE TABLE `tbl_khachhang` (
  `id_khachhang` int(11) NOT NULL,
  `hoten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` text COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `email` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `tt` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_khachhang`
--

INSERT INTO `tbl_khachhang` (`id_khachhang`, `hoten`, `password`, `diachi`, `sdt`, `email`, `tt`) VALUES
(4, 'Thanh', 'eacd478aedc798622348f9ffd75e23ac', 'Hà Nội', 989782065, 'dphuc270895@gmail.com', 0),
(9, 'Thanh', 'eacd478aedc798622348f9ffd75e23ac', 'Hà Nội', 989782065, 'dphuc270895@gmail.com', 0),
(30, 'Thanh', 'eacd478aedc798622348f9ffd75e23ac', 'Hà Nội', 989782065, 'dphuc270895@gmail.com', 0),
(32, 'Thanh', 'eacd478aedc798622348f9ffd75e23ac', 'Hà Nội', 989782065, 'dphuc270895@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `news_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(300) NOT NULL,
  `content` varchar(20000) NOT NULL,
  `news_img` varchar(200) DEFAULT NULL,
  `date` date NOT NULL,
  `user` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `title`, `description`, `content`, `news_img`, `date`, `user`) VALUES
(1, 'Lối quen nay chưa thấy mẹ về', 'Hồi con bé xíu học lớp mầm non, sáng sáng chiều chiều mẹ đưa con tới lớp rồi đón con về nhà, bao giờ tan học con cũng ngóng ngóng bóng mẹ như một thói quen, tuổi thơ của con đầy hình ảnh mẹ, đến nỗi thi thoảng con lỡ quên mất bóng hình cha...\r\n\r\n', 'Hồi con bé xíu học lớp mầm non, sáng sáng chiều chiều mẹ đưa con tới lớp rồi đón con về nhà, bao giờ tan học con cũng ngóng ngóng bóng mẹ như một thói quen, tuổi thơ của con đầy hình ảnh mẹ, đến nỗi thi thoảng con lỡ quên mất bóng hình cha. Mẹ lúc nào cũng rạng rỡ dang tay ôm lấy con vào lòng, thủ thỉ hôm nay chơi có vui không, học có ngoan không…\r\n\r\nCấp một, con biết đi xe đạp rồi, mẹ không cần đưa đón con nữa, nhưng hàng chiều mẹ vẫn đợi con trước cổng trường để về chung, mẹ lái xe từ từ cạnh con rồi mẹ con mình lại kể chuyện ở lớp, ở trường, ở cơ quan...Những tháng ngày đó nó đẹp lắm, giản dị mà bình yên lắm mẹ\r\n\r\nCấp 2, mẹ bảo mẹ đi làm thêm nghề giúp việc, thế là mẹ bận hơn nhiều, những giờ cơm chiều ăn muộn hơn vì mẹ đi làm về muộn, từ đấy con có thêm thói quen ngồi chờ mẹ về, ngồi đợi tiếng xe nhà mình mẹ ạ. Thực tình con chẳng thích cái nghề này một chút nào, vì con sợ mẹ con vất vả, sợ tay mẹ con xương gầy, xót lắm, thương lắm mẹ ạ\r\n\r\nCấp 3, con phải đi học thêm nhiều hơn, mẹ lại nhận thêm 1 ca nữa, giờ thì mẹ bận hẳn, tối mãi tận hơn 9h mẹ mới về đến nhà, tắm táp, giặt đồ xong mẹ mới ăn uống và đi ngủ sớm, con chẳng còn được đợi mẹ mỗi buổi chiều về, chẳng còn được hóng tiếng xe mẹ về ăn cơm cùng nữa. Thi thoảng, con nhớ da diết cái khoảng thời gian mẹ con mình suốt ngày đi cạnh nhau, con thèm cảm giác về nhà có mẹ dang tay ra ôm đón, muốn lại đạp xe cạnh mẹ mỗi buổi tan trường, thậm chí con ước gì lại được ngồi hóng mẹ về mỗi chiều, nhìn nụ cười ấm áp yêu thương của mẹ,... Những ngày ấy qua mất rồi mẹ ạ, chiều nay con ngồi mãi, mãi vẫn chưa thấy mẹ trên lối quen kia, ngồi mãi, tận khuya mẹ mới về,...\r\n\r\n', 'news1.png', '2016-10-24', 'admin'),
(2, 'Liệu bạn đã đầu tư cho mình đúng cách chưa?', 'Bạn từng nghĩ rằng phải kiếm thật nhiều tiền để mua những bộ cánh thật xinh đẹp, để đặt những chuyến du lịch nước ngoài chẳng cần bận tâm giá cả, hay để đầu tư vào những tiệm spa, làm đẹp,...', '*Bạn từng nghĩ rằng phải kiếm thật nhiều tiền để mua những bộ cánh thật xinh đẹp, để đặt những chuyến du lịch nước ngoài chẳng cần bận tâm giá cả, hay để đầu tư vào những tiệm spa, làm đẹp,... \r\n\r\n*Rồi một ngày bạn chợt hỏi sao lại phải dành hết thời gian vào công việc như vậy, thay vì vừa làm việc vừa tận hưởng, bạn lại quay cuồng vào một mớ bề bộn giữa việc nhà, việc cơ quan. Thay vì vừa kiếm tiền vừa chăm sóc bản thân, làm đẹp, bạn lại chỉ mải làm cho bản thân mình bận rộn, rồi mãi mới tá hóa nhận ra đến lúc phải chăm sóc lại mình rồi.\r\n*Hãy đầu tư lại quỹ thời gian và tiền bạc của mình để có một cuộc sống dễ thở và vui vẻ hơn bạn nhé. Đã 1 ngày 8 tiếng trên cơ quan thì hãy cho phép mình nghỉ ngơi làm đẹp trong quỹ thời gian còn lại, việc nhà cứ để JupViec lo, việc của bạn là tận hưởng và nghỉ ngơi, thư giãn. Chỉ với 33k/h, đúng là một sự đầu tư không thể tuyệt vời hơn!', 'news2.jpg', '2016-10-18', 'thanh'),
(3, 'Những vướng bận không của riêng ai', '“Chị về trước mọi người nhé, nay chồng bận chẳng đón con được, giờ đi đón nó về lại lo cơm nước cho nó kịp đi học thêm đây, bận quá”', '5h chiều, vội vàng thu dọn tập giấy tờ trên bàn, chị xách túi đứng dậy, vừa kéo ghế vừa ái ngại nhìn xung quanh phòng:\r\n“Chị về trước mọi người nhé, nay chồng bận chẳng đón con được, giờ đi đón nó về lại lo cơm nước cho nó kịp đi học thêm đây, bận quá”\r\n\r\n* Chị về rồi, chúng tôi nhìn nhau ca thán đủ kiểu, nào là “Tý về mình cũng phải xắn tay vào dọn nhà đây, sáng ra đã thấy bừa bộn mà chưa kịp dọn” rồi “Đang không biết tối nay nấu gì đây cơ” lại còn “Tối nay bạn rủ đi chơi mà nhà cửa đang chất đống việc đây”,...Hóa ra là chẳng ai được nhàn rỗi cả, việc nhà nỏ chẳng tha ai bao giờ, đúng là \r\nmỏi và mất thời gian quá thôi.\r\n* Vậy nên tốt nhất nên tìm một người giúp việc, để có thể nhàn rỗi thời gian nghỉ ngơi và thư giãn và thoát khỏi cảnh ca thán mỗi buổi chiều.', 'news3.png', '2016-10-06', ''),
(4, 'Chuyển nhà - Chuyển văn phòng trọn gói cùng Kiến vàng!', 'Bạn cần chuyển nhà, chuyển văn phòng, hay đơn giản là thuê vận tải chở hàng hóa mà chưa có đối tác tin cậy hoặc giá cả quá cao?', 'JupViec.vn xin giới thiệu đối tác chuyên nghiệp trong lĩnh vực vận chuyển nhà, hãy đăng ký ngay để được đối tác của chúng tôi – Công ty TNHH Chuyển nhà và Văn phòng trọn gói Kiến Vàng - phục vụ tốt nhất.\r\n\r\n*** CÁC DỊCH VỤ CUNG CẤP\r\n- Chuyển nhà\r\n- Chuyển văn phòng\r\n\r\n*** VÌ SAO NÊN LỰA CHỌN KIẾN VÀNG\r\n- Dịch vụ chuyên nghiệp\r\n- Giá cả hợp lý\r\n- Chất lượng tốt\r\n- 10 năm kinh nghiệm trong lĩnh vực vận chuyển\r\n\r\n*** THÔNG TIN LIÊN HỆ\r\n- Đăng ký dịch vụ chuyển nhà tại đây: http://bit.ly/2csfwUs\r\n', 'news4.jpg', '2016-10-13', 'admin'),
(5, 'GHÉT KHÁNG SINH – MẸ TRỊ HO CHO CON BẰNG CÁC THỰC PHẨM SẴN CÓ (PHẦN 1)', 'Ad có tổng hợp lại, các mẹ tham khảo nhé. Các mẹ lưu ý, tìm cho con bài thuốc phù hợp, vì các bé khác nhau, mỗi bé sẽ hợp 1 bài thuốc, nên các mẹ hãy kiên trì nhé.', 'Làm mẹ mới hiểu, nhìn con ho rút hơi, đỏ mặt tía tai thật xót xa bao nhiêu. Thuốc thang, đặc biệt là kháng sinh nhiều khi không đỡ, cả tháng ròng rã, con mệt, mẹ mệt, khổ vô cùng. Vì vậy, ngày càng nhiều các bà mẹ thông thái, truyền tai nhau các bài thuốc dân dã, dễ uống cho con, dễ làm cho mẹ.\r\n\r\nXby tom\r\n\r\n*** Lê hấp đường phèn (cho các bé thể nhiệt) cho bé trên 1 tuổi: \r\nGọt 1 quả lê vừa tay, bổ thành miếng nhỏ cỡ đầu ngón tay, cho vào bát cùng 1 nhánh gừng bào sợi, 3 tép tỏi nhỏ đập dập, trộn cùng 2 thìa café đường phèn. Đổ mật ong sâm sấp lê, trộn đều, hấp cách thủy 30 phút. Phần lê lấy cho bé rất thơm, phần siro cho bé uống khoảng 5-10ml/ngày.\r\n\r\n*** Rau diếp cá hấp nước gạo (cho các bé thể nhiệt): \r\nGiã nhyễn nắm rau diếp cá, trộn cùng 1 bát cơm nước gạo, hấp cách thủy 20-30 phút, sau đó lọc lấy nước cho bé uống mỗi. Có thể thêm ít đường phèn cho bé dễ uống. Cách này cũng trị viêm họng rất tốt vì diếp cá có tính kháng khuẩn.\r\n\r\n*** Gừng, mật ong (cho các bé thể hàn) các bé trên 1 tuổi:\r\nGiã 1 nhánh gừng, dùng khăn xô vắt lấy nước, pha cùng mật ong và nước ấm theo tỷ lệ 1:4:4 (bố mẹ thử trước tránh bé bị cay quá). Mỗi ngày uống 2-3 thìa cafe', 'news5.png', '2016-10-05', 'pendi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nhomsp`
--

CREATE TABLE `tbl_nhomsp` (
  `nhomsp_id` int(11) NOT NULL,
  `nhomsp_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `mota` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_nhomsp`
--

INSERT INTO `tbl_nhomsp` (`nhomsp_id`, `nhomsp_name`, `mota`) VALUES
(1, 'Sửa chữa', 'thanh1234'),
(2, 'Nâng cấp', 'Nâng cấp các dịch vụ theo nhu cầu của người dùng muốn cải tiến máy móc, thiết bị ........'),
(3, 'Bảo dưỡng', 'Bảo trì bảo dưỡng máy móc');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `nhomsp_id` int(11) NOT NULL,
  `sanpham_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `sanpham_img` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `sanpham_description` text CHARACTER SET utf8 NOT NULL,
  `sanpham_price` int(50) NOT NULL,
  `sp_hot` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`nhomsp_id`, `sanpham_name`, `sanpham_id`, `sanpham_img`, `sanpham_description`, `sanpham_price`, `sp_hot`) VALUES
(2, 'CỬA SỔ', 6, 'cuaso.jpg', 'Cửa sổ là bộ phận được gắn trên tường, cho phép ánh sáng đi qua, và cả không khí và âm thanh nếu nó không đóng. Các cửa sổ thường được làm từ thủy tinh hoặc các vật liệu trong suốt khác, được giữ bằng các khung.\n\n', 700000, 0),
(2, 'LỢP MÁI NHÀ', 7, 'lopnha.png', 'Mái nhà hay nóc nhà là bộ phận bao phủ phần trên cùng của một ngôi nhà. Mái nhà được xây dựng, thiết kể để bảo vệ các đồ dùng và con người trong ngôi nhà khỏi ảnh hưởng của thời tiết.', 500000, 0),
(2, 'VÁCH NHÀ', 8, 'vachngoai.png', 'Vách nhà là bộ bận quan trọng trong nhà', 600000, 0),
(2, 'SƠN NHÀ', 9, 'sonnha.png', 'Sơn nhà là dịch vụ cần thiết đối với mọi ngôi nhà, giúp ngôi nhà trở nên đẹp hơn. Ngoài ra cũng giúp ngồi nhà sạch sẽ', 800000, 1),
(2, 'CỬA RA VÀO', 10, 'cuaravao.png', 'Cửa ra vào là quan trọng trong việc ngăn ngừa sự lây lan của đám cháy. Cửa là một trong những bộ phận gắn liền với ngôi nhà, nó cũng là một trong những nét nhấn, tạo thẩm mỹ cho ngôi nhà', 1000000, 0),
(2, 'CỬA GARA', 11, 'gara.png', 'Cửa được thiết kế theo loại cửa cuồn có kết cấu bền vũng, thường được lắp đặt trong các gara oto, hoặc những nơi cần sự kiên cố cực cao', 500000, 1),
(2, 'PHÒNG TẮM', 12, 'phongtam.png', 'Phòng tắm giặt với các thiết bị như bồn, chậu, kính, gương ...', 600000, 0),
(2, 'SÀN NHÀ', 14, 'sannha.png', 'Sàn nhà có thể được làm bằng gỗ, gạch đá hoa tùy thuộc vào nhu cầu và kinh tế của người dùng', 600000, 1),
(2, 'HỆ THỐNG HVAC', 15, 'HVAC.png', 'HVAC là lĩnh vực được ứng dụng rộng rãi trong đời sống thường ngày của chúng ta như hệ thống điều hòa không khí (máy lạnh), đun nấu nước hằng ngày,..  cũng như tại các ngành công nghiệp năng, công nghiệp vĩ đại như nhà máy điện, máy bay, tàu vũ trụ,..', 700000, 0),
(1, 'TỦ LẠNH', 16, 'tulanh.png', 'Tủ lạnh là một thiết bị làm mát. Thiết bị gia dụng này bao gồm một ngăn cách nhiệt và nhiệt một máy bơm hóa chất phương tiện cơ khí phương tiện để truyền nhiệt từ nó ra môi trường bên ngoài, làm mát bên trong đến một nhiệt độ thấp hơn môi trường xung quanh.', 800000, 0),
(1, 'MÁY GIẶT', 17, 'maygiat.png', 'Máy giặt là một cái máy được thiết kế có lập trình phần mềm để giặt như: cho nước, ngâm, giặt, xả nước (giũ), vắt khô. Một số loại máy hiện đại hơn có thể bao gồm cả tính năng sấy và là quần áo.\n', 600000, 1),
(1, 'MÁY SẤY KHÔ', 18, 'maysay.png', 'Máy sấy là một dụng cụ cơ điện dùng để thổi những luồng hơi nóng hoặc mát vào các đồ vật ẩm ướt với tác dụng đẩy mạnh quá trình bốc hơi phần nước bám trên đồ vật và giúp làm chóng khô các đồ vật', 1200000, 0),
(1, 'MÁY RỬA CHÉN', 19, 'mayruachen.png', 'Thiết bị có tác dụng rửa chén bát đũa và tất cả các vật dụng làm bếp \n', 1300000, 0),
(1, 'LÒ VI SÓNG', 20, 'lovisong.png', 'Lò vi ba (còn được gọi là lò vi sóng) là một thiết bị ứng dụng vi sóng để làm nóng hoặc nấu chín thức ăn\n', 1000000, 0),
(1, 'BẾP GA', 21, 'bepga.png', 'Bếp gas là loại bếp sử dụng khí thiên nhiên, propan, butan, khí hóa lỏng hoặc khí dễ cháy khác làm nguồn nhiên liệu.', 1500000, 1),
(1, 'ĐIỀU HÒA', 22, 'dieuhoa.png', 'Điều hòa không khí hay điều hòa nhiệt độ là duy trì không khí trong phòng ổn định về nhiệt độ, độ ẩm, độ sạch, và thay đổi thành phần không khí và áp suất không khí.', 1200000, 1),
(1, 'BÌNH NÓNG LẠNH', 23, 'nonglanh.png', 'Bình nóng lạnh làm nóng nguồn nước dùng trong các công việc tắm rửa nội chợ', 1300000, 0),
(1, 'HỆ THỐNG HVAC', 24, 'HVAC.png', 'HVAC là lĩnh vực được ứng dụng rộng rãi trong đời sống thường ngày của chúng ta như hệ thống điều hòa không khí (máy lạnh), đun nấu nước hằng ngày,..  cũng như tại các ngành công nghiệp năng, công nghiệp vĩ đại như nhà máy điện, máy bay, tàu vũ trụ,..', 1000000, 0),
(1, 'MÁY LỌC NƯỚC', 25, 'locnuoc.png', 'Lọc bỏ các loại độc tố có trong nước', 1400000, 0),
(1, 'TIVI', 26, 'tivi.png', 'Thiết bị để xem truyền hình', 1600000, 0),
(1, 'MÁY TẬP THỂ DỤC', 27, 'theduc.png', 'Máy gồm các chức năng giúp người dùng có thể đi bộ, tập xà, tập chạy, ....', 2000000, 0),
(3, 'TỦ LẠNH', 28, 'tulanh.png', 'Tủ lạnh là một thiết bị làm mát. Thiết bị gia dụng này bao gồm một ngăn cách nhiệt và nhiệt một máy bơm hóa chất phương tiện cơ khí phương tiện để truyền nhiệt từ nó ra môi trường bên ngoài, làm mát bên trong đến một nhiệt độ thấp hơn môi trường xung quanh.', 1700000, 0),
(3, 'MÁY SẤY', 29, 'maysay.png', 'Máy sấy là một dụng cụ cơ điện dùng để thổi những luồng hơi nóng hoặc mát vào các đồ vật ẩm ướt với tác dụng đẩy mạnh quá trình bốc hơi phần nước bám trên đồ vật và giúp làm chóng khô các đồ vật', 1500000, 0),
(3, 'MÁY GIẶT', 30, 'maygiat.png\n', 'Máy giặt là một cái máy được thiết kế có lập trình phần mềm để giặt như: cho nước, ngâm, giặt, xả nước (giũ), vắt khô. Một số loại máy hiện đại hơn có thể bao gồm cả tính năng sấy và là quần áo.', 1500000, 0),
(3, 'MÁY RỬA CHÉN', 31, 'mayruachen.png\n', 'Thiết bị có tác dụng rửa chén bát đũa và tất cả các vật dụng làm bếp', 800000, 1),
(3, 'LÒ VI SÓNG', 32, 'lovisong.png\n', 'Lò vi ba (còn được gọi là lò vi sóng) là một thiết bị ứng dụng vi sóng để làm nóng hoặc nấu chín thức ăn', 900000, 0),
(3, 'HỆ THỐNG HVAC', 33, 'HVAC.png\n', 'HVAC là lĩnh vực được ứng dụng rộng rãi trong đời sống thường ngày của chúng ta như hệ thống điều hòa không khí (máy lạnh), đun nấu nước hằng ngày,..  cũng như tại các ngành công nghiệp năng, công nghiệp vĩ đại như nhà máy điện, máy bay, tàu vũ trụ,..', 1000000, 0),
(3, 'LÀM VƯỜN', 34, 'lamvuon.png\n', 'Dịch vụ làm vườn bao gồm các công việc nhổ cỏ, chăm sóc cây, cắt tia cây .. theo yêu cầu người dung', 1200000, 1),
(3, 'DỊCH VỤ GIÚP VIỆC', 35, 'giupviec.png\n', 'Dịch vụ giúp việc cung cấp cho khách hàng những tiện ích cho gia đình không có thời gian', 900000, 0),
(3, 'DỊCH VỤ LÀM SẠCH', 36, 'lamsach.png\n', 'Dịch vụ làm sạch cung cấp cho khách hàng các dịch vụ lau dọn nhà cửa theo ngày giờ hoặc trọn gói ....', 700000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `pk_user_id` int(11) NOT NULL,
  `c_username` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `c_password` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `c_fullname` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `c_andress` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `c_phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`pk_user_id`, `c_username`, `c_password`, `c_fullname`, `c_andress`, `c_phone`) VALUES
(23, 'pendi', '827ccb0eea8a706c4c34a16891f84e7b', 'Đỗ Trung Hiếu', 'Gia Lâm, Hà Nội', 972402460),
(24, 'nam', 'e10adc3949ba59abbe56e057f20f883e', 'Lê Quý Nam', 'Hải Dương', 12345678),
(25, 'thanhkoi', '827ccb0eea8a706c4c34a16891f84e7b', 'Phạm Văn Thanh', 'Hà Nội', 989782065),
(26, 'hieu', '827ccb0eea8a706c4c34a16891f84e7b', 'Đỗ Hiếu', 'Hà Nội', 12345678);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_chitietdonhang`
--
ALTER TABLE `tbl_chitietdonhang`
  ADD PRIMARY KEY (`id_chitietdh`);

--
-- Indexes for table `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD PRIMARY KEY (`id_donhang`);

--
-- Indexes for table `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  ADD PRIMARY KEY (`id_khachhang`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tbl_nhomsp`
--
ALTER TABLE `tbl_nhomsp`
  ADD PRIMARY KEY (`nhomsp_id`);

--
-- Indexes for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`sanpham_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`pk_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_chitietdonhang`
--
ALTER TABLE `tbl_chitietdonhang`
  MODIFY `id_chitietdh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;
--
-- AUTO_INCREMENT for table `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  MODIFY `id_donhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=386;
--
-- AUTO_INCREMENT for table `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  MODIFY `id_khachhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_nhomsp`
--
ALTER TABLE `tbl_nhomsp`
  MODIFY `nhomsp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `sanpham_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `pk_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
