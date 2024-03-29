<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/shop.css">
    <link rel="stylesheet" href="./assets/fonts/themify-icons/themify-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.css">
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
                    <!-- <?php
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
                    ?> -->
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
        <div class="container content">
            <div class="row">
                <div class="col-md-3">
                    <div class="shop-sidebar">
                        <div class="shop-widget catagory">
                            <div class="widget-head">Danh Mục</div>
                            <div class="widget-content">
                                <!-- <div class="custom-control">
                                    <input value="0" class="widget-boxs" type="checkbox">
                                    <label for="all-item">Tất cả</label>
                                </div> -->
                                <div class="custom-control">
                                    <input value="1" class="widget-boxs" type="checkbox">
                                    <label for="vanphong">Cây cảnh văn phòng</label>
                                </div>
                                <div class="custom-control">
                                    <input value="2" class="widget-boxs" type="checkbox">
                                    <label for="home">Cây cảnh trong nhà</label>
                                </div>
                                <div class="custom-control">
                                    <input value="3" class="widget-boxs" type="checkbox">
                                    <label for="xuongrong">Xương rồng</label>
                                </div>
                                <div class="custom-control">
                                    <input value="4" class="widget-boxs" type="checkbox">
                                    <label for="senda">Sen đá</label>
                                </div>
                                <div class="custom-control">
                                    <input value="5" class="widget-boxs" type="checkbox">
                                    <label for="wedflower">Hoa đám cưới</label>
                                </div>
                                <div class="custom-control">
                                    <input value="6" class="widget-boxs" type="checkbox">
                                    <label for="wedflower">Hoa sinh nhật</label>
                                </div>
                            </div>
                        </div>
    
                        <div class="shop-widget sort">
                            <div class="widget-head">Sắp xếp</div>
                            <div class="widget-content">
                                <div class="custom-control">
                                    <input type="radio" name="sort-btn" id="asce">
                                    <label for="asce">Giá Tăng dần</label>
                                </div>
                                <div class="custom-control">
                                    <input type="radio" name="sort-btn" id="dsce">
                                    <label for="dsce">Giá Giảm dần</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                   
                <div class="col-md-9 ">
                    <div class="row shop-list-item">
                        <div id="item1" class="col-md-3 shop-item">
                            <div class="shop-item-img">
                                <img src="./assets/image/arrivals/9.jpg" alt="">
                            </div>
                            <div class="add-to-cart-btn">Thêm vào giỏ</div>
                            <div class="shop-item-info">
                                <div class="shop-item-name">Cactus Flower</div>
                                <div class="shop-item-cost">100.000</div>
                            </div>
                        </div>
                        <div id="item1" class="col-md-3 shop-item">
                            <div class="shop-item-img">
                                <img src="./assets/image/arrivals/9.jpg" alt="">
                            </div>
                            <div class="add-to-cart-btn">Thêm vào giỏ</div>
                            <div class="shop-item-info">
                                <div class="shop-item-name">Cactus Flower</div>
                                <div class="shop-item-cost">100.000</div>
                            </div>
                        </div>
                        <div id="item1" class="col-md-3 shop-item">
                            <div class="shop-item-img">
                                <img src="./assets/image/arrivals/9.jpg" alt="">
                            </div>
                            <div class="add-to-cart-btn">Thêm vào giỏ</div>
                            <div class="shop-item-info">
                                <div class="shop-item-name">Cactus Flower</div>
                                <div class="shop-item-cost">100.000</div>
                            </div>
                        </div>
                        <!-- 
                        <div id="item1" class="col-md-3 shop-item">
                            <div class="shop-item-img">
                                <img src="./assets/image/arrivals/9.jpg" alt="">
                            </div>
                            <div class="add-to-cart-btn">Thêm vào giỏ</div>
                            <div class="shop-item-info">
                                <div class="shop-item-name">Cactus Flower</div>
                                <div class="shop-item-cost">100.000</div>
                            </div>
                        </div>
                        <div id="item1" class="col-md-3 shop-item">
                            <div class="shop-item-img">
                                <img src="./assets/image/arrivals/9.jpg" alt="">
                            </div>
                            <div class="add-to-cart-btn">Thêm vào giỏ</div>
                            <div class="shop-item-info">
                                <div class="shop-item-name">Cactus Flower</div>
                                <div class="shop-item-cost">100.000</div>
                            </div>
                        </div>
                        <div id="item1" class="col-md-3 shop-item">
                            <div class="shop-item-img">
                                <img src="./assets/image/arrivals/9.jpg" alt="">
                            </div>
                            <div class="add-to-cart-btn">Thêm vào giỏ</div>
                            <div class="shop-item-info">
                                <div class="shop-item-name">Cactus Flower</div>
                                <div class="shop-item-cost">100.000</div>
                            </div>
                        </div>  
                        <div id="item1" class="col-md-3 shop-item">
                            <div class="shop-item-img">
                                <img src="./assets/image/arrivals/9.jpg" alt="">
                            </div>
                            <div class="add-to-cart-btn">Thêm vào giỏ</div>
                            <div class="shop-item-info">
                                <div class="shop-item-name">Cactus Flower</div>
                                <div class="shop-item-cost">100.000</div>
                            </div>
                        </div>  
                        <div id="item1" class="col-md-3 shop-item">
                            <div class="shop-item-img">
                                <img src="./assets/image/arrivals/9.jpg" alt="">
                            </div>
                            <div class="add-to-cart-btn">Thêm vào giỏ</div>
                            <div class="shop-item-info">
                                <div class="shop-item-name">Cactus Flower</div>
                                <div class="shop-item-cost">100.000</div>
                            </div>
                        </div>
                        <div id="item1" class="col-md-3 shop-item">
                            <div class="shop-item-img">
                                <img src="./assets/image/arrivals/9.jpg" alt="">
                            </div>
                            <div class="add-to-cart-btn">Thêm vào giỏ</div>
                            <div class="shop-item-info">
                                <div class="shop-item-name">Cactus Flower</div>
                                <div class="shop-item-cost">100.000</div>
                            </div>
                        </div> -->
                    </div>
                    <div class="page-btn-list">
                
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

    
     <!-- modal detail items -->

    <div class="modal-detail">
        <div class="modal_container">
            <div class="close"><i class="ti-close"></i></div>
            <div class="product">
                <div class="product__images">
                    <div class="modal-slider"><img src="./assets/image/arrivals/10.jpg" alt=""></div>
                    <div class="images">
                        <img class="active" src="./assets/image/arrivals/11.jpg" alt="">
                        <img src="./assets/image/arrivals/12.jpg" alt="">
                        <img src="./assets/image/arrivals/9.jpg" alt="">
                    </div>
                </div>
                <div class="infos">
                    <h2>RECUERDOS PLANT</h2>
                    <h2 class="price">$9.99</h2>
                    <div class="p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem molestiae quidem possimus assumenda blanditiis facilis! Pariatur voluptatibus voluptas neque esse rerum distinctio est ab nostrum, omnis sed commodi? Explicabo, veritatis.</div>
                    <div class="quantity">
                        <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) && qty>1 ) effect.value--;return false;"><i class="ti-minus" aria-hidden="true"></i></span>
                        <input type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="quantity" value="1">
                        <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="ti-plus" aria-hidden="true"></i></span>
                    </div>
                    <div class="button">
                        <button class="cart">Thêm Vào Giỏ</button>
                        <button class="buy">Mua Ngay</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function(){
            $(".modal-detail .showModal .images img").click(function(){
                $(this).addClass('active').siblings().removeClass('active');
                let image  = $(this).attr('src');
                $(".modal-detail .showModal .modal-slider img").attr('src', image);
            });
        });
    </script>

    <script src="./assets/bootstrap/js/bootstrap.js"></script>
    <script src="./assets/js/shop.js"></script>
</body>
</html>