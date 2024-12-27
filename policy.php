<?php
	if(!isset($_SESSION)) session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php 
	include "config/config.php";
	include ROOT."/include/function.php";
	spl_autoload_register("loadClass");
 ?>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Chính sách</title>
		<link rel="icon" href="./img/logo.png" type="image/icon type">
 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>
 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">
 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>
    </head>
	<body onload="SetDefault();">
		<?php 
		include_once 'subpage/header.php'; 
		include_once 'subpage/navigation.html';
		?>
		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Chính sách</h3>
						<ul class="breadcrumb-tree">
							<li><a href="index.php">Home</a></li>
							<li class="active">Chính sách</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
					<ul>							
							<li>
								<p><h1>Điều khoản dịch vụ</h1></p>
								<p>Chào mừng đến với [Tên trang web]! Khi truy cập hoặc sử dụng trang web của chúng tôi, bạn đồng ý bị ràng buộc bởi các Điều khoản dịch vụ này ("Điều khoản"). Vui lòng đọc kỹ các điều khoản này.</p>
							</li>
							<li>
								<hr>
								<p><h3>1. Điều kiện chung</h3></p>
								<p>1.1. Trang web này do [Tên công ty của bạn] điều hành. Trong toàn bộ trang web, các thuật ngữ "chúng tôi", "của chúng tôi" và "của chúng tôi" đề cập đến [Tên công ty của bạn].</p>
                                <p>1.2. Khi truy cập trang web của chúng tôi và/hoặc mua thứ gì đó từ chúng tôi, bạn tham gia vào "Dịch vụ" của chúng tôi và đồng ý bị ràng buộc bởi các Điều khoản này, bao gồm bất kỳ điều khoản, điều kiện và chính sách bổ sung nào được tham chiếu tại đây hoặc có sẵn qua siêu liên kết.</p>
								<p>1.3. Bạn phải ít nhất là đủ tuổi thành niên theo quy định của khu vực pháp lý của mình để sử dụng trang web này hoặc có sự cho phép của cha mẹ hoặc người giám hộ.</p>
                            </li>
							<li>
								<hr>
                            	<p><h3>2. Sản phẩm và dịch vụ</h3></p>
								<p>2.1. Chúng tôi có quyền từ chối cung cấp dịch vụ cho bất kỳ ai vì bất kỳ lý do gì vào bất kỳ lúc nào.</p>
                                <p>2.2. Tất cả các mô tả về sản phẩm, giá cả và tình trạng còn hàng đều có thể thay đổi mà không cần thông báo theo quyết định riêng của chúng tôi.</p>
								<p>2.3. Chúng tôi không đảm bảo rằng chất lượng của bất kỳ sản phẩm, dịch vụ hoặc tài liệu nào khác đã mua sẽ đáp ứng được mong đợi của bạn.</p>
							</li>
							<li>
								<hr>
								<p><h3>3. Đơn hàng và Thanh toán</h3></p>
								<p>3.1. Bạn đồng ý cung cấp thông tin mua hàng và tài khoản hiện tại, đầy đủ và chính xác cho tất cả các giao dịch mua hàng được thực hiện tại cửa hàng của chúng tôi.</p>
                                <p>3.2. Chúng tôi có quyền hủy hoặc từ chối đơn hàng vì bất kỳ lý do nào, bao gồm nhưng không giới hạn ở nghi ngờ gian lận hoặc giao dịch trái phép hoặc bất hợp pháp.</p>
								<p>3.3. Tất cả các khoản thanh toán đều được xử lý an toàn. Chúng tôi không lưu trữ thông tin thanh toán trên máy chủ của mình.</p>
							</li>
							<li>
								<hr>
                            	<p><h3>4. Trả lại và Hoàn tiền</h3></p>
								<p>4.1. Chính sách trả lại của chúng tôi được nêu trong [Chính sách Trả lại và Hoàn tiền] của chúng tôi, được đưa vào các Điều khoản này.</p>
                                <p>4.2. Các mặt hàng phải đáp ứng các điều kiện được nêu trong [Chính sách Trả lại và Hoàn tiền] để đủ điều kiện được hoàn lại tiền hoặc đổi hàng.</p>    
							</li>
							<li>
								<hr>
                            	<p><h3>5. Bản quyền Website</h3></p>
								<p>5.1. Tất cả nội dung trên trang web này, bao gồm nhưng không giới hạn ở văn bản, đồ họa, logo, hình ảnh và phần mềm, là tài sản của [Tên công ty của bạn] và được bảo vệ bởi luật bản quyền và luật nhãn hiệu.</p>
								<p>5.2. Nghiêm cấm sử dụng trái phép bất kỳ nội dung nào trên trang web này.</p>
							</li>
							<li>
								<hr>
                            	<p><h3>6. Hành vi của người dùng</h3></p>
								<p>6.1. Bạn đồng ý không sử dụng trang web của chúng tôi cho bất kỳ mục đích bất hợp pháp nào hoặc vi phạm bất kỳ quy định quốc tế, liên bang, tỉnh hoặc tiểu bang nào.</p>
								<p>6.2. Bạn không được truyền bất kỳ sâu, vi-rút hoặc bất kỳ mã nào có tính chất phá hoại.</p>
								<p>6.3. Bất kỳ vi phạm nào đối với các Điều khoản này đều có thể dẫn đến việc chấm dứt ngay lập tức quyền truy cập của bạn vào Dịch vụ của chúng tôi.</p>
							</li>			
							<li>
								<hr>
                            	<p><h3>7. Liên kết của bên thứ ba</h3></p>
								<p>7.1. Trang web của chúng tôi có thể chứa các liên kết đến các trang web của bên thứ ba. Các liên kết này được cung cấp để thuận tiện cho bạn và chúng tôi không chịu trách nhiệm về nội dung hoặc tính chính xác của bất kỳ trang web của bên thứ ba nào.</p>
								<p>7.2. Bạn sử dụng các trang web của bên thứ ba là do bạn tự chịu rủi ro</p>
							</li>			
							<li>
								<hr>
                            	<p><h3>8. Giới hạn trách nhiệm pháp lý</h3></p>
								<p>8.1. Chúng tôi không đảm bảo rằng việc bạn sử dụng dịch vụ của chúng tôi sẽ không bị gián đoạn, kịp thời, an toàn hoặc không có lỗi.</p>
								<p>8.2. Trong phạm vi tối đa được pháp luật cho phép, chúng tôi không chịu trách nhiệm đối với bất kỳ thương tích, mất mát, khiếu nại hoặc bất kỳ thiệt hại trực tiếp, gián tiếp, ngẫu nhiên, trừng phạt hoặc hậu quả nào phát sinh từ việc bạn sử dụng Dịch vụ.	</p>
							</li>											
						</ul>
					</div>
				</div>	
			</div>
		</div>
		<!-- FOOTER -->
		<?php include'subpage/footer.html';?>
		
		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
