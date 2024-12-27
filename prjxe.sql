-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2024 at 12:53 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pj`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(5) NOT NULL,
  `ad_user` varchar(30) NOT NULL,
  `ad_pwd` varchar(30) NOT NULL,
  `ad_name` varchar(30) NOT NULL,
  `ad_email` varchar(50) NOT NULL,
  `ad_phone` varchar(15) NOT NULL,
  `ad_pow` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_user`, `ad_pwd`, `ad_name`, `ad_email`, `ad_phone`,`ad_pow`) VALUES
					(1, 'admin1', 'admin', 'Hoang Phuc', '23211tt4698@mail.tdc.edu.vn', '0962048054',1),
					(2, 'admin2', 'admin', 'Thai Tu', '23211tt3473@mail.tdc.edu.vn', '0954854855',0),
					(3, 'admin3', 'admin', 'Thanh Phi', '23211tt6436@mail.tdc.edu.vn', '0962096554',1),
					(4, 'admin4', 'admin', 'Van Duy', '23211tt4588@mail.tdc.edu.vn', '0923638532',0),
					(5, 'admin5', 'admin', 'Gia Quy', '23211tt5858@mail.tdc.edu.vn', '0962437344',1),
					(6, 'admin6', 'admin', 'Ngoc Duc', '23211tt4135@mail.tdc.edu.vn', '0954480457',0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(5) NOT NULL,
  `cat_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Honda'),
(2, 'Yamaha'),
(3, 'Vinfast');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(8) NOT NULL,
  `comment_content` varchar(500) NOT NULL,
  `comment_date` datetime NOT NULL,
  `comment_rate` smallint(2) NOT NULL DEFAULT 0,
  `product_id` int(5) NOT NULL,
  `user_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(5) NOT NULL,
  `order_date` date NOT NULL,
  `consignee_name` varchar(30) NOT NULL,
  `consignee_phone` varchar(15) NOT NULL,
  `consignee_address` varchar(50) NOT NULL,
  `order_status` tinyint(1) NOT NULL,
  `user_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `order_id` int(5) NOT NULL,
  `product_id` int(5) NOT NULL,
  `quantity` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(5) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_img` varchar(50) NOT NULL,
  `product_date` date NOT NULL DEFAULT '2024-11-18',
  `product_quantity` int(5) NOT NULL DEFAULT 0,
  `product_description` varchar(500) NOT NULL,
  `product_detail` varchar(1000) NOT NULL,
  `cat_id` int(5) NOT NULL,
  `provider_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_img`, `product_date`, `product_quantity`, `product_description`, `product_detail`, `cat_id`, `provider_id`) VALUES
(1
, 'Exciter 155 VVA phiên bản cao cấp'
, 50600000
, 'Exciter.png'
, '2024-11-08'
, 55
, 'Yamaha Exciter là mẫu xe côn tay được ưa chuộng nhất tại thị trường Việt Nam. Bên cạnh phiên bản Exciter 150 rất được yêu thích, Yamaha Motor Việt Nam phát triển dòng Exciter 155 VVA với nhiều chi tiết mới dựa trên các công nghệ đang được áp dụng trên siêu xe thể thao YZF-R1. Vừa mạnh mẽ như xe phân khối lớn, Exciter vừa đảm bảo tính ổn định và linh hoạt khi vận hành hàng ngày của một chiếc xe thể thao phân khối nhỏ.'
, 'Exciter sở hữu thiết kế mang đậm dấu ấn R-Series thể thao, khẳng định vị thế ông hoàng xe côn tay Việt Nam. Đèn chiếu gần và chiếu xa tách rời 2 vị trí khác nhau, cho phép thiết kế đèn xe nhỏ gọn hơn, tăng tính khí động học cho xe. Đồng thời khi xe vào cua, vùng chiếu sáng sẽ đi theo góc lái, cải thiện khả năng quan sát của người lái. Thiết kế giống hai yên riêng biệt, đường cong hướng lên của yên xe hỗ trợ người lái, góp phần tăng thêm cảm giác “solo” (một mình) khi chạy xe dù có hay không chở thêm người ngồi sau. Đèn hậu thiết kế vuốt gọn tương tự YZF-R1'
, 2
, 2
),
(2
, 'Freego S ABS phiên bản đặc biệt màu mới'
, 34265500
, 'FreeGo.png'
, '2024-11-08'
, 43
, 'Xe máy Freego Yamaha là mẫu xe tay ga thể thao đời mới có mức giá rất hợp lý, được trang bị toàn diện các tính năng như: khóa thông minh Smart Key, phanh ABS, cốp xe rộng 25 lít, tích hợp cộng sạc điện thoại tiện lợi...'
, 'Nổi bật bởi dấu ấn đường phố, kế thừa nét thiết kế thể thao mạnh mẽ - đậm chất DNA thể thao của Yamaha, Freego là sự kết hợp hài hoà giữa tính thực tế, sự thoải mái trong quá trình sử dụng và kiểu dáng hiện đại, năng động, đầy nam tính với sàn để chân rộng rãi.
Đèn pha và đèn hậu đều dùng công nghê LED hiện đại giúp chiếu sáng tối ưu trong môi trường đô thị Yên xe dài 720 mm đem lại cảm giác thoải mái cho cả người lái và người ngồi sau. Bánh xe kích cỡ lớn mang đến trải nghiệm lái an toàn, đồng thời làm nổi bật thiết kế xe và tăng cảm giác chắn chắn, đáng tin cậy. Lốp không săm giúp hạn chế các trường hợp nổ lốp gây ra do vật nhọn.'
, 2
, 2
),
(3
, 'Grande phiên bản đặc biệt màu mới 2024'
, 50859000
, 'Grande.png'
, '2024-11-08'
, 22
, 'Với thiết kế thời trang, thanh lịch và thiết kế cốp xe siêu rộng 27 lít, Yamaha Grande còn là mẫu xe tay ga tiết kiệm xăng số 1 Việt Nam với mức tiêu thụ chỉ 1,66 lít/100km, theo số liệu thống kê và phân tích được Cục Đăng kiểm Việt Nam công bố, xác nhận bởi Báo Giao thông.'
, 'Yamaha Grande với thiết kế thanh lịch nhưng vẫn toát lên sự hiện đại với đường cong uyển chuyển mang đến vẻ đẹp vượt thời gian. Sự kết hợp độc đáo của cụm đèn chính mang dáng dấp một viên kim cương cùng dải đèn LED tạo nên sự thu hút và toả sáng trên mọi cung đường Yên xe được vuốt gọn, vừa đề cao tính thẩm mỹ lại giúp người ngồi lái thoải mái hơn. Góc yên sau điều chỉnh cho cao hơn, kết hợp cùng tay nắm sau xe cho tư thế người ngồi sau thoải mái và vững vàng.'
, 2
, 2
),
(4
, 'Janus phiên bản tiêu chuẩn màu mới'
, 28669000
, 'janus.png'
, '2024-11-08'
, 32
, 'Xe máy Janus Yamaha có thiết kế trẻ trung cùng khả năng vận hành mượt mà với mức giá rất phải chăng cùng mức tiêu thụ chỉ 1,87 lít/100km, động cơ Blue Core, hệ thống Stop & Start.'
, 'Thiết kế phần đầu xe được lấy cảm hứng từ hình ảnh cô nàng Gen Z trong chiếc áo choàng thời thượng, Janus là sự kết hợp hoàn hảo giữu tính thời trang và nét trẻ trung năng động. Dải đèn LED định vị được tinh chỉnh cùng điểm nhấn là logo Yamaha 3D làm bật lên chữ “I” (Tôi) trong đặc trưng thiết kế “I (Tôi) & U (Bạn)” của Janus, đồng thời gợi lên liên tưởng đến hình ảnh chiếc dây chuyền lấp lánh trên cổ của cô gái trẻ. Thiết kế phần đầu xe được lấy cảm hứng từ hình ảnh của cô nàng Gen Z trong chiếc áo choàng thời thượng. Cụm đèn trước gây ấn tượng nhờ thiết kế viền kim loại sáng bóng, bao quanh dải đèn chính. Kết hợp cùng hai dải đèn xi nhan tạo nên phong cách cá tính, thu hút mọi ánh nhìn. Màn hình hiển thị LCD mang thiết kế tối giản cùng phông chữ hiện đại, giúp người dùng theo dõi các thông số trong mọi điều kiện ánh sáng.'
, 2
, 2
),
(5
, 'Jupiter FI màu mới'
, 30240000
, 'Jupiter.png'
, '2024-11-08'
, 64
, 'Xe Jupiter FI được đánh giá và công nhận là mẫu xe số tiết kiệm xăng nằm trong top đầu Việt Nam với mức tiêu thụ chỉ 1,643 lít/100km.'
, 'Jupiter FI với thiết kế tinh tế nhưng vẫn mang đậm chất cá tính. Đầu xe thiết kế tinh tế, tỉ mỉ với hai cụm đèn xi nhan kiểu dáng "sao băng" được trang bị kính mờ vô cùng sang trọng và cá tính. Đèn hậu được thiết kế nhiều tầng kết hợp cùng đèn xi nhan trang bị lớp kính mờ tạo vẻ đẹp sang trọng, mạnh mẽ, thể thao, và vẫn đảm bảo hiệu ứng ánh sáng cao cấp.'
, 2
, 2
),
(6
, 'Latte phiên bản giới hạn màu mới'
, 38782000
, 'Latte.png'
, '2024-11-08'
, 12
, 'Yamaha Latte nổi bật với thiết kế sang trọng cùng động cơ Blue Core 125cc cho khả năng tiết kiệm nhiên liệu tối ưu với mức tiêu thụ chỉ 1,8 lít/100km - nằm trong Top đầu xe tay ga tiết kiệm xăng nhất Việt Nam. Đặc biệt, xe được trang bị hàng loạt tính năng tuyệt vời như SmartKey, cốp xe có thể tích lên đến 37l, nắp bình xăng tiện lợi...'
, 'Latte là mẫu xe tay ga với thiết kế sang trọng, chuẩn mực của sự sành điệu. ĐÈN CHỚP PHÍA TRƯỚC. CỤM ĐÈN HALOGEN. THANH BAGA KIỂU DÁNG MỚI'
, 2
, 2
),
(7
, 'NVX 155 VVA ABS'
, 55300000
, 'NVX.png'
, '2024-11-08'
, 32
, 'Thiết kế khỏe khoắn, mang đậm nét thể thao với hiệu suất vận hành mạnh mẽ. Phiên bản mới nhất NVX 155 VVA thế hệ II được trang bị hàng loạt các tính năng hiện đại như: ứng dụng Y-Connect - ứng dụng kết nối xe và điện thoại, động cơ BlueCore 155cc VVA, phanh ABS, khóa thông minh SmartKey, hệ thống ngắt động cơ tạm thời Stop & Start System (SSS), cốp xe rộng lên tới 25 lít,...'
, 'Yamaha NVX là mẫu xe tay ga có thiết kế khỏe khoắn, mang đậm nét thể thao với hiệu suất vận hành mạnh mẽ. Đèn pha tăng kích cỡ với khả năng chiếu sáng tối ưu, kết hợp cùng đèn định vị tạo hiệu ứng ba chiều, mang lại điểm nhấn góc cạnh và thể thao cho xe. Đem lại sự thoải mái tối đa cho cả người lái và người ngồi sau. Tạo hiệu ứng thị giác 3 chiều hiện đại'
, 2
, 2
),
(8
, 'PG-1 phiên bản màu mới'
, 30437000
, 'PG-1.png'
, '2024-11-08'
, 25
, 'Yamaha PG-1 là sự kết hợp từ sự vận hành dễ dàng của một chiếc xe đô thị cùng khả năng off-road của một mẫu xe việt dã. Chiếc xe này vừa mang lại sự tiện lợi khi di chuyển trong nội đô, vừa có hiệu suất đủ tốt để đáp ứng những hành trình xa, mang lại cảm hứng lái xe khác biệt.'
, 'Sự đặc biệt của PG-1 được thể hiện qua thiết kế tối giản, cổ điển và mang tính tiện dụng cao. Phong cách này làm nổi bật cá tính của PG-1 như là một người đồng hành mạnh mẽ, đáng tin cậy, sẵn sàng chinh phục mọi cung đường phiêu lưu. Đầu đèn trước có kích thước lớn và được gắn gần khung sườn mang lại vẻ ngoài liền lạc.
Đuôi đèn sau có thiết kế gọn gàng nhưng vẫn đảm bảo độ sáng trong mọi điều kiện.
Chắn bùn sau ngắn và mỏng tạo cảm giác linh hoạt và nhẹ nhàng.
Phần tay dắt yên sau có thiết kế đơn giản, dễ cầm nắm trong nhiều tình huống di chuyển xe. Chiều cao yên xe chỉ 795mm, phù hợp với chiều cao của đa số người Việt. Khi cộng thêm hành trình của hệ thống treo sau và độ phẳng của lốp, giao động chiều cao chỉ xoay quanh 20mm, dễ dàng đặt chân xuống đất và kiểm soát xe.'
, 2
, 2
),
(9
, 'Sirius FI phiên bản vành đúc'
, 21993000
, 'Sirius.png'
, '2024-11-08'
, 66
, 'Nhờ trang bị hệ thống phun xăng điện tử FI, xe Sirius FI có mức tiêu thụ nhiên liệu cực kì tiết kiệm chỉ 1,65 lít/100km.'
, 'Thiết kế của Sirius FI cân bằng giữa hai yếu tố: thể thao và tiện ích. Thay đổi lớn nhất chính là hai đèn định vị được gom lại đặt kề với cụm đèn pha, không chỉ làm cho phần đầu xe trở nên thanh thoát mà còn làm diện mạo xe thêm thu hút, giúp nhận ra nét độc đáo của xe ngay khi nhìn lướt qua.'
, 2
, 2
),
(10
, 'Air Blade 160/125'
, 58390000
, 'AB.png'
, '2024-11-08'
, 53
, 'Air Blade sở hữu vẻ ngoài ấn tượng lấy cảm hứng từ "tia sét", thiết kế tổng thể phản chiếu sự cứng cáp trong bề mặt hiện đại xen lẫn những đường nét gọn gàng, sắc nét.'
, 'Cùng với thiết kế sắc nét & phối màu mang đậm tinh thần thể thao, phiên bản Thể Thao sở hữu tông màu xám thể thao khỏe khoắn, điểm xuyết các miếng ốp màu đỏ trên thân xe tạo điểm nhấn ấn tượng. Yên xe xám đen cùng dải chỉ đỏ nổi bật làm sắc nét hơn sự mạnh mẽ và nam tính.
Tem số 125 & 160 mới nổi bật, tạo cảm giác hiện đại và năng động cho người lái. Air Blade được trang bị hệ thống động cơ eSP+ 4 van, giúp tăng công suất, vận hành êm ái, tiết kiệm nhiên liệu và thân thiện môi trường. Hộc đựng đồ dung tích lớn 23,2 lít cho phép chứa tới 2 mũ bảo hiểm nửa đầu cùng nhiều vật dụng cá nhân khác mà vẫn giữ nguyên thiết kế thon gọn. Đèn soi hộc đồ giúp khách hàng dễ dàng tìm kiếm các vật dùng trong điều kiện thiếu ánh sáng. Vách ngăn thông minh có thể chia nhỏ cốp thành 2 khoang riêng biệt tăng tính tiện lợi.'
, 1
, 1
),
(11
, 'Blade GR'
, 21943637
, 'Blade.png'
, '2024-11-08'
, 53
, 'Phiên bản Thể thao (vành đúc phanh đĩa) sở hữu tem xe "SPORT" thiết kế mới với màu sắc trẻ trung, nổi bật, tạo cảm giác hiện đại và năng động cho người lái.'
, 'Mặt đồng hồ hiện đại sở hữu đường nét tinh tế, các thông số được hiển thị đầy đủ, giúp người điều khiển quan sát thuận tiện. Kế thừa các tính năng ưu việt của động cơ Honda như độ bền cao, vận hành ổn định, Honda Blade sở hữu bộ động cơ 110cc tiết kiệm nhiên liệu vượt trội và bảo vệ môi trường, đáp ứng tiêu chuẩn khí thải Euro 3 nghiêm ngặt. Thiết kế mang tính khí động học, trọng lượng xe nhẹ và vị trí ngồi lái hợp lý còn mang đến sự thoải mái tuyệt vời cho người điều khiển xe. Ổ khóa được thiết kế hiện đại bao gồm khóa điện, khóa cổ và khóa từ - tăng tính an toàn, dễ sử dụng và chống rỉ sét hiệu quả.'
, 1
, 1
),
(12
, 'FuTure 125 Fi'
, 32193818
, 'Fu125.png'
, '2024-11-08'
, 96
, 'Khả năng tiết kiệm nhiên liệu vượt trội được kế thừa từ điểm mạnh của động cơ danh tiếng 125cc của Honda và mức tiêu thụ nhiên liệu chỉ 1,47l/100km luôn là một trong những lý do lớn nhất khiến khách hàng lựa chọn Future 125 FI.'
, 'Kiểu dáng tổng thể của xe lịch lãm kết hợp với những chi tiết thiết kế tỉ mỉ và sắc nét, từ logo, mặt đồng hồ, hệ thống đèn, các chi tiết mạ cờ-rôm cao cấp, màu sơn… Tất cả giúp làm tăng thêm vẻ sang trọng và nổi bật cho chủ sở hữu. Động cơ 125cc danh tiếng của Honda được áp dụng trên Future 125 FI vốn luôn nhận được sự yêu mến lớn từ khách hàng Việt Nam, nay vẫn duy trì chất lượng cao, đi kèm với thiết kế lọc gió, giúp tăng công suất tối đa, mô-men xoắn cực đại và khả năng tăng tốc mạnh mẽ. Đảm bảo cho người sử dụng có tầm nhìn tốt nhất, hạn chế các trường hợp quên bật đèn chiếu sáng phía trước khi đi trong điều kiện ánh sáng không đảm bảo. Bên cạnh đó, khả năng nhận diện của xe khi di chuyển trên đường phố cũng được tăng lên, từ đó giúp các phương tiện khác dễ dàng quan sát và phòng tránh va chạm. Kiểu dáng tổng thể của xe lịch lãm kết hợp với những chi tiết thiết kế tỉ mỉ và sắc nét, từ logo, mặt đồng hồ, hệ thống đèn, các chi tiết mạ cờ-rôm cao cấp, màu sơn… Tất cả giúp làm tăng thêm vẻ sang trọng và nổi bật cho chủ sở hữu. Động cơ 125cc danh tiếng của Honda được áp dụng trên Future 125 FI vốn luôn nhận được sự yêu mến lớn từ khách hàng Việt Nam, nay vẫn duy trì chất lượng cao, đi kèm với thiết kế lọc gió, giúp tăng công suất tối đa, mô-men xoắn cực đại và khả năng tăng tốc mạnh mẽ.'
, 1
, 1
),
(13
, 'Wave RSX-104'
, 25566545
, 'RSX.png'
, '2024-11-08'
, 76
, 'Hệ thống phun xăng điện tử PGM-FI được trang bị trên tất cả phiên bản, cung cấp lượng nhiên liệu phù hợp với điều kiện vận hành & giúp tiết kiệm nhiên liệu (mức tiêu thụ nhiên liệu chỉ 1,56l/100km)'
, 'Mặt nạ trước được thiết kế mới với biểu tượng hình chữ V sắc nét, kết hợp với đèn xi nhan hoàn toàn mới, giúp đem lại hình ảnh thon gọn nhưng đầy mạnh mẽ và thể thao. Wave RSX FI được trang bị động cơ 110cc, phun xăng điện tử, 4 kỳ, xi-lanh đơn, đáp ứng tiêu chuẩn khí thải Euro 3, tối ưu hóa khả năng tăng tốc, không những tiết kiệm nhiên liệu mà còn đảm bảo sự bền bỉ, vận hành mạnh mẽ và ổn định. Wave RSX FI được trang bị ổ khóa tích hợp bao gồm khóa điện, khóa từ, khóa cổ và khóa yên rất dễ sử dụng, an tâm hơn và chống rỉ sét'
, 1
, 1
),
(14
, 'SH 350i'
, 152690000
, 'SH350.png'
, '2024-11-08'
, 22
, 'SH350i là mẫu xe gây ấn tượng với dáng vẻ "bề thế" và hiện đại. Logo SH được mạ crôm tối màu tạo điểm nhấn sang trọng.

Mặt nạ phía trước được thiết kế mới mang dấu ấn của mẫu xe phân khối lớn và được tô điểm với họa tiết chấm tròn tạo điểm nhấn thể thao của chiếc xe. Công nghệ LED hiện đại được áp dụng cho toàn bộ hệ thống đèn mang lại hình ảnh cao cấp.

Đèn chiếu sáng phía trước hoàn toàn mới và hai đèn xi nhan được thiết kế tinh tế và sắc nét hơn, làm nổi bật phong cách thể thao, hiện đại.'
, 'Phiên bản thể thao bổ sung thêm sắc xanh thời thượng hoàn toàn mới từ những mẫu xe phân khối lớn của Honda, mang lại hình ảnh nổi bật và đầy lôi cuốn. SH350i được trang bị động cơ thế hệ mới eSP+ được phát triển theo tiêu chuẩn khí thải Euro 4*, dung tích 330cc, sử dụng động cơ xăng 4 kỳ, 1 xy lanh, làm mát bằng chất lỏng, phun xăng điện tử PGC-FI. Động cơ được áp dụng hàng loạt công nghệ tiên tiến và cao cấp giúp nâng cao công suất, giảm thiểu ma sát và giảm thiểu rung lắc. Nhờ đó giúp cải thiện hiệu quả nhiên liệu, đạt công suất động cơ vượt trội và thân thiện hơn với môi trường, mang lại trải nghiệm lái đẳng cấp hơn.
*theo kết quả kiểm chứng của Honda R&D. SH350i được trang bị hệ thống chống bó cứng phanh (ABS) trên cả bánh trước và bánh sau, giúp xe đạt trạng thái cân bằng ổn định bằng cách phân bổ lực phanh hợp lý tránh khóa cứng bánh xe, đặc biệt hữu ích trong điều kiện phanh gấp ở tốc độ cao hay trên đoạn đường trơn trượt. SH350i được trang bị cốp đựng đồ dưới yên xe với dung tích lớn, có thể chứa được một mũ bảo hiểm cả đầu. Đèn soi hộc đồ giúp khách hàng dễ dàng tìm kiếm các vật dụng trong điều kiện thiếu ánh sáng. Bình xăng dung tích lớn, lên tới 9.3 lít.'
, 1
, 1
),
(15
, 'Super Cub 5000'
, 87273818
, 'SuperCup.png'
, '2024-11-08'
, 34
, 'Động cơ dung tích 125cc, SOHC, trang bị PGM-FI, đạt công suất tối đa 6,87kW và mô men xoắn cực đại 10,15Nm mang lại khả năng vận hành mạnh mẽ và tiết kiệm nhiên liệu tối ưu'
, 'Thiết kế hình chữ S kế thừa kiểu dáng huyền thoại của xe Super Cub thập niên 50, mang đến sự hài hòa và mềm mại. Lớp sơn nhũ ánh kim kết hợp với các chi tiết mạ crôm tinh tế gợi lên nét đẹp cổ điển, pha lẫn sự sang trọng, cao cấp, đặc trưng của dòng xe Super Cub. Động cơ dung tích 125cc, SOHC, trang bị PGM-FI, đạt công suất tối đa 6,87kW và mô men xoắn cực đại 10,15Nm mang lại khả năng vận hành mạnh mẽ và tiết kiệm nhiên liệu tối ưu. Chìa khóa thông minh được trang bị 3 chức năng: Cảnh báo chống trộm, xác định vị trí xe thông minh và khởi động hệ thống điện'
, 1
, 1
),
(16
, 'Vario 160'
, 56490000
, 'Vario.png'
, '2024-11-08'
, 30
, 'Hệ thống chống bó cứng phanh ABS cho bánh trước
Giúp ổn định sự cân bằng của xe, đặc biệt trong trường hợp phanh gấp khi đang đi ở tốc độ cao hoặc trên đường trơn ướt, mang lại cảm giác an tâm hơn khi vận hành xe.'
,'VARIO 160 sở hữu thiết kế thể thao, mới lạ, phù hợp với các khách hàng trẻ tuổi và năng động. Diện mạo xe bề thế mạnh mẽ mang tới hình ảnh trẻ trung độc đáo, nổi bật dưới mọi góc nhìn. VARIO 160 sở hữu khối động cơ eSP+ 4 van - thế hệ động cơ mới nhất hiện đang được áp dụng trên các mẫu xe ga cao cấp của Honda Việt Nam. Đây là bước đột phá trong công nghệ động cơ của Honda, giúp tăng công suất, vận hành êm ái, tiết kiệm nhiên liệu và thân thiện môi trường. Dung tích động cơ 160cc mang lại khả năng vận hành mạnh mẽ và vượt trội cho người lái trong di chuyển hàng ngày. Khung dập hàn laser thế hệ mới eSAF được tạo ra bởi các tấm kim loại dập, sử dụng công nghệ hàn laser giúp giảm trọng lượng, tăng độ dẻo dai, mang lại trải nghiệm lái thoải mái.'
, 1
, 1
),
(17
, 'Vision 2024'
, 36612000
, 'Vision.png'
, '2024-11-08'
, 76
, 'Thân xe nhỏ gọn kế thừa từ nét thiết kế của dòng xe SH, đường nét rõ ràng, liền mạch, càng nổi bật hơn là tông màu Đen và Xám Đen độc đáo trên phiên bản Thể thao, chắc chắn sẽ là sự lựa chọn tuyệt vời cho chủ sở hữu có cá tính mạnh.
Ngoài ra, các điểm phối màu mới tinh tế được thể hiện trên nhiều chi tiết thiết kế giúp đem lại hình ảnh thời trang cho mẫu xe mới.'
, 'Thiết kế phía trước là sự kết hợp giữa đường nét thiết kế ba chiều sắc sảo, kết hợp với đèn trang trí LED và hệ thống đèn trước với thấu kính màu xám khói mạnh mẽ, tất cả tổng hòa nên một thiết kế trẻ trung, hiện đại, năng động, không kém phần sang trọng. eSP - Động cơ thông minh với thiết kế nhỏ gọn, 110cc, 4 kỳ, xy-lanh đơn, làm mát bằng không khí và tích hợp những công nghệ tiên tiến: hệ thống phun xăng điện tử (PGM-FI),động cơ tích hợp bộ đề ACG, hệ thống ngắt động cơ tạm thời (Idling stop), giảm thiểu ma sát và khả năng đốt cháy hoàn hảo. Có khả năng tự động ngắt động cơ khi dừng xe trên 3 giây và khởi động lại động cơ chỉ bằng thao tác vặn tay ga, giúp giảm tiếng ồn, tiết kiệm nhiên liệu và bảo vệ môi trường. Hộc đựng đồ phía trước có nắp đậy, kích thước rộng rãi và có khả năng chứa nhiều vật dụng cá nhân và tích hợp cổng sạc USB loại C tiện dụng.'
, 1
, 1
),
(18
, 'Wave 110'
, 18742909
, 'Wave110.png'
, '2024-11-08'
, 34
, 'Wave Alpha được trang bị động cơ 110cc bền bỉ, hiệu suất vượt trội mà vẫn đảm bảo khả năng tiết kiệm nhiên liệu một cách tối ưu, từ đó đem lại cảm giác lái thú vị và tiết kiệm chi phí vận hành.'
, 'Ấn tượng với màu đen nhám trẻ trung, độc đáo, mang lại cho bạn hình ảnh năng động. Wave Alpha được trang bị động cơ 110cc bền bỉ, hiệu suất vượt trội mà vẫn đảm bảo khả năng tiết kiệm nhiên liệu một cách tối ưu, từ đó đem lại cảm giác lái thú vị và tiết kiệm chi phí vận hành. Chế độ đèn luôn sáng đảm bảo cho người sử dụng có tầm nhìn tốt nhất. Bên cạnh đó, khả năng nhận diện của xe khi di chuyển trên đường phố cũng được tăng lên, kể cả trong điều kiện ánh sáng ban ngày, giúp người lái an tâm di chuyển.'
, 1
, 1
),
(19
, 'Winner X 2024'
, 50560000
, 'Winx.png'
, '2024-11-08'
, 34
, 'Mâm xe thiết kế thể thao
Với trọng lượng mâm trước nhẹ hơn 282 gam, và mâm sau nhẹ hơn 170 gam, WINNER X 2024 mang lại cảm giác lái nhẹ & linh hoạt hơn, dễ dàng trong điều khiển & chuyển hướng lái. Bên cạnh đó mâm xe thiết kế mới tạo nét thể thao & năng động hơn, hướng tới hình ảnh đậm chất thể thao.'
, 'WINNER X 2024 tiếp tục duy trì khối động cơ 150cc, 4 van, 06 cấp số, DOHC cho phép tối ưu góc mở xu-pap (16 ° cho xu - pap nạp, và 14 ° 30 cho xu - pap xả) giúp mang lại cảm giác lái mạnh mẽ, tăng tốc vượt trội trên toàn bộ dải tua máy. Hướng tới hình ảnh đậm chất thể thao, phiên bản WINNER X 2024 chính thức trang bị bộ ly hợp hỗ trợ và chống trượt hai chiều, giúp chuyển số dễ dàng, tránh tình trạng khóa bánh sau do phanh động cơ gây ra khi về số đột ngột. Công nghệ này đang được áp dụng trên hầu hết các mẫu xe phân khối lớn, hứa hẹn mang tới cảm giác lái thú vị trên mọi hành trình. Tiếp nối thế hệ trước, WINNER X 2024 tiếp tục trang bị hệ thống khóa thông minh trên cả 3 phiên bản. Trang bị hiện đại này giúp xác định vị trí xe và mở khóa thông minh từ xa tiện lợi mang lại tiện ích cao cấp cho người sử dụng. Đặc biệt, ổ khóa thông minh được gắn đèn LED xanh mỗi khi hoạt động mang lại hình ảnh cao cấp và thời trang hơn.'
, 1
, 1
),
(20
, 'Evo 200 SD'
, 18000000
, 'evo200.png'
, '2024-11-08'
, 12
, 'Xe Điện Evo200'
, 'PHÓNG KHOÁNG ĐẦY TINH TẾ
Thiết kế hiện đại đầy khác biệt. Tổng thể cân đối, tao nhã và thời trangvới phong cách thiết kế thanh thoát, tinh tế từng chi tiết.

Kích thước tầm trung phù hợp người Việt tạo cho cảm giác lái thoải mái, êm ái trên nhiều loại địa hình.

QUÃNG ĐƯỜNG DI CHUYỂN ĐẦY ẤN TƯỢNG
Khẳng định ưu thế với quãng đường di chuyển đạt tới 203 km/lần sạc. Tốc độ tối đa 70 km/h, vận hành mãnh mẽ và tăng tốc từ 0-50 km/hchỉ trong 14 giây.'
, 3
, 3
),
(21
, 'Evo 200 Lite'
, 18000000
, 'evo200lite.png'
, '2024-11-08'
, 7
, 'Xe Điện Evo 200 Lite'
, 'THỜI THƯỢNG THU HÚT MỌI ÁNH NHÌN
Thiết kế trẻ trung, hiện đại và đầy khác biệt. Tổng thể cân đối, thời thượngthu hút mọi ánh nhìn.

Kích thước tầm trung phù hợp với người Việt tạo cảm giác lái thoải mái, êm ái trên nhiều loại địa hình.

QUÃNG ĐƯỜNG DI CHUYỂN ĐẦY ẤN TƯỢNG
Khẳng định ưu thế với quãng đường di chuyển đạt tới 205 km/lần sạc. Tốc độ tối đa 49 km/h, vận hành mãnh mẽ và tăng tốc từ 0-45 km/h chỉ trong 14 giây.'
, 3
, 3
),
(22
, 'Theon-S Max'
, 63000000
, 'theon-s.png'
, '2024-11-08'
, 5
, 'Xe Theon-s'
, 'CÔNG NGHỆ PAAK
Công nghệ PAAK (Phone As A Key) cho khả năng điều khiển xe dễ dàng bằng một chạm qua ứng dụng điện thoại không cần chìa khóa.

KẾT NỐI HMI TÍCH HỢP ESIM
Tự động chuẩn đoán và cảnh báo lỗi. Tự động cập nhật phần mềm trên xe thông qua ứng dụng trên điện thoại. Định vị xe (GPS) toàn cầu. Quản lý mọi hành trình.

KHÓA THÔNG MINH
Trang bị cảm biến tự động để khởi động và tắt máy trong phạm vi một mét. Đa tính năng trên một chìa khóa: mở và khóa cổ xe, cốp xe và khởi động tính năng chống trộm.

'
, 3
, 3
);


-- --------------------------------------------------------

--
-- Table structure for table `provider`
--

CREATE TABLE `provider` (
  `provider_id` int(5) NOT NULL,
  `provider_name` varchar(50) NOT NULL,
  `provider_email` varchar(50) NOT NULL,
  `provider_phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `provider`
--

INSERT INTO `provider` (`provider_id`, `provider_name`, `provider_email`, `provider_phone`) VALUES
(1, 'Honda', 'honda@gmail.com', '0938922310'),
(2, 'Yamaha', 'yamaha@gmail.com', '0938922311'),
(3, 'Vinfast', 'Vinfast@gmail.com', '0909561847');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(30) NOT NULL,
  `user_name` varchar(30) DEFAULT NULL,
  `user_pwd` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `FK_COMMENT_PRODUCT` (`product_id`),
  ADD KEY `FK_COMMENT_USER` (`user_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `FK_ORDER_USER` (`user_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_id`,`product_id`),
  ADD KEY `FK_ORDERDETAIL_PRODUCT` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `FK_PRODUCT_CAT` (`cat_id`),
  ADD KEY `FK_PRODUCT_PROVIDER` (`provider_id`);

--
-- Indexes for table `provider`
--
ALTER TABLE `provider`
  ADD PRIMARY KEY (`provider_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `provider`
--
ALTER TABLE `provider`
  MODIFY `provider_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_COMMENT_PRODUCT` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_COMMENT_USER` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `FK_ORDER_USER` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `FK_ORDERDETAIL_ORDER` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ORDERDETAIL_PRODUCT` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_PRODUCT_CAT` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PRODUCT_PROVIDER` FOREIGN KEY (`provider_id`) REFERENCES `provider` (`provider_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
