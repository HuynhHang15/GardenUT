<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/cart.css">
    <link rel="stylesheet" href="./assets/fonts/themify-icons/themify-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <title>Garden UT</title>
</head>
<body>
    <div id="main">
        <!-- Header -->
        <div id="header">
            <div id="top" class="top-header row">
                <div class="top-header-left">

                    
                    <a href="https://ut.edu.vn/">
                        <i class="ti-email"></i>
                        <span>Email:ut.edu.vn</span>
                    </a>
                    <a href="">
                        <i class="ti-mobile"></i>
                        <span>0123456789</span>
                    </a>
                </div>
                <div class="top-header-right">
                    <?php
                        session_start();
                        if (!isset($_SESSION['username'])){
                            echo '<a class="login-btn" href="#">
                                    <i class="ti-user"></i>
                                    <span>Login</span>
                                </a>';
                        }
                        else {
                            $user = $_SESSION['username'];
                            echo '<a class="logout-btn" href="logout.php">
                                    <span style="color: #fff;margin-right: 20px;">Hi, ' .$user .' </span>
                                    <span>Logout</span>
                                </a>';
                        }
                    ?>
                    <a href="cart.php">
                        <i class="ti-shopping-cart"></i>
                        <span>Cart [ <span class="cart-quantity"> 0 </span> ]</span>
                    </a>
                </div>
            </div>

            <div class="bottom-header">
                <a class="header-logo" href="index.php"><img src="./assets/image/logo/logo.png" alt="">
                    <span>Garden UT</span></a>
                <div class="header-content">    
                    <ul class="nav">
                        <li><a class="menu-btn" href="index.php">Home</a></li>
                        <li><a class="menu-btn" href="#about">About</a></li>
                        <li>
                            <a class="menu-btn" href="shop.php">Shop
                                <i class="ti-angle-down"></i>
                            </a>
                            <ul  class="subnav">
                                <li><a href="#new-arrival">Sản phẩm mới</a></li>
                                <li><a href="">Cây cảnh văn phòng</a></li>
                                <li><a href="">Cây cảnh trong nhà</a></li>
                                <li><a href="">Xương rồng</a></li>
                                <li><a href="">Sen đá</a></li>
                                <li>
                                    <a href="">Hoa
                                        <i class="ti-angle-right"></i>
                                    </a>
                                    
                                    <ul class="subnav-2">
                                        <li><a href="">Sinh nhật</a></li>
                                        <li><a href="">Đám cưới</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-btn" href="#contact">Contact</a></li>
                        <a class="search-btn menu-btn" href=""><i class="ti-search"></i></a>
                    </ul>
                </div>
                <div class="menu-btn">
                    <i id="btn-menu"class="ti-menu"></i>
                </div>
            </div>

        </div>
        <!-- end-header -->
        <!-- Slider -->
        <div id="short-slider">
            <div class="short-silder-bg">
            </div>
        </div>
        <!-- end-slider -->
        <!-- content -->
        <div id="content">
            <div class="content-section">
                <div class="products">
                    <div class="products-nav">
                        <h3>CÁC SẢN PHẨM</h3>
                        <h3>SỐ LƯỢNG</h3>
                        <h3>GIÁ BÁN</h3>
                        <h3>TỔNG TIỀN</h3>
                        <hr>
                    </div>
                    <div class="products-list">
                        <!-- <hr>
                        <div class="item">
                            <div class="item-info">
                                <img src="./assets/image/shop-items/6.png" alt="">
                                <div class="name"><h4>Recuerdos Plant</h4></div>
                            </div>
                            <div class="item quantity">
                                <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) && qty>1 ) effect.value--;return false;"><i class="ti-minus" aria-hidden="true"></i></span>
                                <input type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="quantity" value="1">
                                <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="ti-plus" aria-hidden="true"></i></span>
                            </div>
                            <div class="item-price">
                                <p>$9.99</p>
                            </div>
                            <div class="item-total">
                                <p>$9.99</p>
                            </div>
                            <div class="item-trash">
                                <i class="ti-trash"></i>
                            </div>
                        </div>
                        <hr>
                        <div class="item">
                            <div class="item-info">
                                <img src="./assets/image/shop-items/6.png" alt="">
                                <div class="name"><h4>Recuerdos Plant</h4></div>
                            </div>
                            <div class="item quantity">
                                <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) && qty>1 ) effect.value--;return false;"><i class="ti-minus" aria-hidden="true"></i></span>
                                <input type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="quantity" value="1">
                                <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="ti-plus" aria-hidden="true"></i></span>
                            </div>
                            <div class="item-price">
                                <p>$9.99</p>
                            </div>
                            <div class="item-total">
                                <p>$9.99</p>
                            </div>
                            <div class="item-trash">
                                <i class="ti-trash"></i>
                            </div>
                        </div>
                        <hr> -->
                    </div>
                
                </div>

                <div class="products-row">

                    <!-- Voucher -->
                    <div class="voucher">
                        <h4>GIẢM GIÁ</h4>
                        <p>Coupons can be applied in the cart prior to checkout. Add an eligible item from the booth of the seller that created the coupon code to your cart. Click the green "Apply code" button to add the coupon to your order. The order total will update to indicate the savings specific to the coupon code entered.</p>
                        <form action="#" method="post">
                            <input type="text" name="voucher-code" placeholder="Nhập mã giảm giá">
                            <button type="submit">ÁP DỤNG</button>
                        </form>
                    </div>
                
                    <!-- Cart Totals -->
                    <div class="pay">
                        <h4>THANH TOÁN</h4>
                        <form action="order.php" method="post">
                        <div class="pay-address">
                            <h5>Địa Chỉ</h5>
                                <div class="diachi">
                                    <input type="text" name="tinh" id="" placeholder="Tỉnh / Thành phố">
                                    <input type="text" name="huyen" id="" placeholder="Quận / Huyện">
                                    <input type="text" name="xa" id="" placeholder="Phường / Xã">
                                    <input type="text" name="sonha" id="" placeholder="Số nhà">
                                    <input type="hidden" name="totalProducts" id="">
                                    <div class="arrProducts"></div>
                                </div>
                        </div>

                        <div class="pay-detail">
                            <!-- <div class="pay-price">
                                <h5>Tổng Tiền Hàng</h5>
                                <h5>$9.99</h5>
                            </div>
                            <div class="pay-ship">
                                <h5>Phí vận chuyển</h5>
                                <h5>$2</h5>
                            </div>
                            <div class="pay-total">
                                <h5>Tổng Thanh Toán</h5>
                                <h5>$11.99</h5>
                            </div> -->
                        </div>
                        <a href=""><button class="btn-order">TIẾN HÀNH THANH TOÁN</button></a>
                        </form>
                    </div>
                </div>
    
            </div>
        </div>


            
        <!-- end-content -->
        <!-- footer -->
        <div id="footer">
            <div class="footer-bg"></div>
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="./assets/image/logo/logo.png" alt="">
                    <p>Lorem ipsum dolor sit samet, consectetur adipiscing elit. India situs atione mantor</p>
                    <div class="footer-social">
                        <div class="social-icon">
                            <a href="" class=""><i class="ti-facebook"></i></a>
                        </div>
                        <div class="social-icon">
                            <a href="" class=""><i class="ti-twitter-alt"></i></a>
                        </div>
                        <div class="social-icon">
                            <a href="" class=""><i class="ti-google"></i></a>
                        </div>
                        <div class="social-icon">
                            <a href="" class=""><i class="ti-instagram"></i></a>
                        </div>            
                    </div>
                </div>
                <div class="footer-contact">
                    <p><span>Địa chỉ:</span> 2 Võ Oanh, Phường 25, Bình Thạnh, Thành phố Hồ Chí Minh</p>
                    <p><span>Số liên lạc:</span> +1 234 122 122</p>
                    <p><span>Email:</span> https://ut.edu.vn/</p>
                    <p><span>Giờ mở cửa:</span> Thứ 2 - Chủ nhật: 8AM-9PM</p>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/js/cart.js"></script>
</body>
</html>