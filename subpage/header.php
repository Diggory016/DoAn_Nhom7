<div class="back-to-top"><i class="fa fa-chevron-up"></i></div>
<header>
    <div id="top-header">
        <div class="container">
            <ul class="header-links pull-left">
                <li><a href="#"><i class="fa fa-phone"></i>0962048054</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> trover204@gmail.com</a></li>
                <li><a href="#"><i class="fa fa-map-marker"></i> FIT - TDC </a></li>
            </ul>
            <ul class="header-links pull-right">
                <li><a href="user"><i class="fa fa-dollar"></i> Kiểm tra đơn hàng</a></li>
                <?php
                   
                    $name = isset($_SESSION['user'])?$_SESSION['user']['user_id']:'';
                    if($name != '') 
                        echo "<li><a><i class='fa fa-user-o'></i>Xin chào, $name</a></li>
                              <li><a href='index.php?mode=exit'><i class='fa fa-sign-out'></i>Đăng xuất</a></li>";
                    else 
                     echo "<li><a href='subpage/login.php'><i class='fa fa-user-o'></i>Đăng nhập/Đăng ký</a></li>";
                ?>
               
            </ul>
        </div>
    </div>
    <div id="header">

        <div class="container">

            <div class="row">
                <!-- LOGO -->
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="index.php" class="logo">
                            <img src="./img/logo.png" alt="logo" title="Group7">
                        </a>
                    </div>
                </div>


                <!-- SEARCH -->
                <div class="col-md-6">
                    <div class="header-search">
                        <form action='store.php' method='get'>
                            <select class="input-select" name='cat-id'>
                               <option value='all'>Tất cả</option>
                                <?php
                                    $cats_clt = new Category();
                                    $cats_clt->setPageSize(20);
                                    $arr_cats = $cats_clt->getAll();
                                    foreach ($arr_cats as $value) {
                                        echo "<option value='{$value['cat_id']}'>{$value['cat_name']}</option>";
                                    }
                                ?>
        
                                    
                            </select>
                            <input class="input" name='key' placeholder="Nhập">
                            <input type='hidden' name='mode' value='product'>
                            <input type='hidden' name='ac' value='search'>
                            <button class="search-btn" name='basic-search' value='Search'>Search</button>
                        </form>                    
                    </div>
                </div>

                <!-- ACCOUNT -->
                <div class="col-md-3 clearfix">
                    <div class="header-ctn">                            
                        <!-- Cart -->
                        <?php
                            if(isset($_SESSION['shopping-cart'])){
                                $count = 0;
                                $total = 0;
                                $str = '';
                                foreach ($_SESSION['shopping-cart'] as $key => $value) {                                    
                                    $count += $value['quantity'];
                                    $total += $value['quantity']*$value['price'];
                                }
                            }
                        ?>
                        <div  id='shopping-cart'>
                            <a href="cart.php">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Giỏ hàng</span>
                                <div class="qty cart"><?php echo isset($_SESSION['shopping-cart'])?$count:0; ?></div>
                            </a>
                        </div>
                        <!-- Menu Toogle -->
                        <div class="menu-toggle">
                            <a href="#">
                                <i class="fa fa-bars"></i>
                                <span>Menu</span>
                            </a>
                        </div>
                    </div>                 
                </div>
            </div>
        </div>       
    </div>
</header>