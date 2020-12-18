
   <div class="container tm-navbar-container">
        <div class="row">
          <div class="col-xl-12">
            <nav class="navbar navbar-expand-sm">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a href="index.php" class="nav-link tm-nav-link tm-text-white ">Trang chủ</a>
                </li>
                <li class="nav-item">
                  <a href="about.php" class="nav-link tm-nav-link tm-text-white">Về chúng tôi</a>
                </li>
                <li class="nav-item">
                  <a href="contact.php" class="nav-link tm-nav-link tm-text-white">Liên hệ</a>
                </li>
                <li class="nav-item">
                  <a href="product.php?page=all_product" class="nav-link tm-nav-link tm-text-white">Sản phẩm</a>
                </li>
               
                   <?php 

                    if(!isset($_SESSION["khachhang"]))
                    {
                      echo ' <li class="nav-item">
                  <a href="loginkh.php" class="nav-link tm-nav-link tm-text-white">
                   Đăng nhập</a></li>';
                    }
                    else{
                       echo ' <li class="nav-item">
                  <a href="info.php?page=show_info" class="nav-link tm-nav-link tm-text-white">
                 '.$_SESSION["khachhang"]["tenkh"].'</a></li>';
                       echo ' <li class="nav-item">
                  <a href="logout.php" class="nav-link tm-nav-link tm-text-white">
                  Đăng xuất</a></li>';
                    }
                    ?>
               
               
               
              </ul>
            </nav>
          </div>
        </div>
      </div>

     

