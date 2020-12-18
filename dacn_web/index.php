<?php 
session_start();
 include("includes/connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Insertion HTML5 Template</title>
<!--

Template 2101 Insertion

http://www.tooplate.com/view/2101-insertion

-->
  <!-- load CSS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">        <!-- Google web font "Open Sans" -->
  <link rel="stylesheet" href="css/bootstrap.min.css">                                            <!-- https://getbootstrap.com/ -->
  <link rel="stylesheet" href="css/fontawesome-all.min.css">                                      <!-- Font awesome -->
  <link rel="stylesheet" href="css/tooplate-style.css">                                           <!-- Templatemo style -->

  <script>
    var renderPage = true;

    if (navigator.userAgent.indexOf('MSIE') !== -1
      || navigator.appVersion.indexOf('Trident/') > 0) {
      /* Microsoft Internet Explorer detected in. */
      alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
      renderPage = false;
    }
  </script>

</head>

<body>

  <!-- Loader -->
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>

  <div class="tm-main">

    <div class="tm-welcome-section">
      <?php include("includes/header.php") ?>

      <div class="container text-center tm-welcome-container">
        <div class="tm-welcome">
          <i class="fas tm-fa-big fa-music tm-fa-mb-big"></i>
          <h1 class="text-uppercase mb-3 tm-site-name">Trang chủ</h1>
          <p class="tm-site-description">Thế giới quà tặng</p>
        </div>
      </div>

    </div>

    <div class="container">
     

      <div class="row tm-albums-container grid">
        <div class="col-sm-6 col-12 col-md-6 col-lg-3 col-xl-3 tm-album-col">
          <figure class="effect-sadie">
            <img src="img/3.jpg" alt="Image" class="img-fluid">
            <figcaption>
              <h2>First Album</h2>
              <p>Rollover text and description text goes here over mouse over...</p>
            </figcaption>
          </figure>
        </div>
        <div class="col-sm-6 col-12 col-md-6 col-lg-3 col-xl-3 tm-album-col">
          <figure class="effect-sadie">
            <img src="img/5.jpg" alt="Image" class="img-fluid">
            <figcaption>
              <h2>Album Two</h2>
              <p>Maecenas iaculis et turpis et iaculis. Aenean at volutpat diam.</p>
            </figcaption>
          </figure>
        </div>
        <div class="col-sm-6 col-12 col-md-6 col-lg-3 col-xl-3 tm-album-col">
          <figure class="effect-sadie">
            <img src="img/6.jpg" alt="Image" class="img-fluid">
            <figcaption>
              <h2>Third Album</h2>
              <p>Vivamus eget elit purus. Nullam consectetur porttitor elementum.</p>
            </figcaption>
          </figure>
        </div>
        <div class="col-sm-6 col-12 col-md-6 col-lg-3 col-xl-3 tm-album-col">
          <figure class="effect-sadie">
            <img src="img/9.jpg" alt="Image" class="img-fluid">
            <figcaption>
              <h2>Album Four</h2>
              <p>Praesent nec feugiat dolor, elementum mollis purus. Etiam faucibus.</p>
            </figcaption>
          </figure>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="tm-tag-line">
          <h2 class="tm-tag-line-title"> Món quà tuy đơn giản mà rất ý nghĩa.</h2>
          </div>
        </div>
      </div>

      <div class="row mb-5">
        <div class="col-xl-12">
          <form action="index.php" method="POST">
       <select name="maloai" style="width: 20%;padding-left:0.5rem;padding: 10px; " >
        <option value="tatca">---------Tất cả ---------</option>
          <?php 
          $sql = "select * from loai";
          $query = mysqli_query($con,$sql);
          while ($data = mysqli_fetch_array($query))
          {  ?>
            <option value="<?php echo $data['maloai'] ?>"style="width: 20%;padding-left:0.5rem;padding: 10px"><?php echo $data["tenloai"]; ?></option>
          <?php } ?>
       </select>
      &emsp;
       <button name="btnTim" style="border:0;outline:none;cursor: pointer;border-radius: 10px;padding: 10px 20px;background-color: #C48BE5;color:red">Tìm theo loại</button>

 </form>
 <br/>
          <div class="row">
            <?php 
              $sql="select * from sanpham";
              $query=mysqli_query($con, $sql);
              if(isset($_POST["btnTim"]))
              {
                $maloai = $_POST["maloai"];
                $sql = "select * from sanpham where maloai = '$maloai'";
                $query = mysqli_query($con,$sql);
              }
              while($data = mysqli_fetch_array($query))
              {
              
             echo '<div class="col-lg-4 col-sm-12" style="margin-top:3rem;" >
              
              <img src="img/'.$data["hinh"].'" alt="Image" class="mr-3" width="230" height="250">
              <br/>
             
                
                  <h5 class="tm-text-blue" style="color:black;font-weight:bold;">'.$data["tensp"].'</h5>
                  <div >
                  <span style="color:black;font-weight:bold;">'.$data["gia"].'VNĐ</span>&emsp;&emsp;&emsp;&emsp;&emsp;
                  <a href="detail_product.php?page=detail_pro&id='.$data["masp"].'" style="color:deepgreen;font-weight:bold;"><span>Xem chi tiết </span></a>
                  </div>
                  <br/>
                  <div style="width:100%">
                  <a href="#" style="color:black;width:100%"><button style="width:100%;border:none;outline:none;padding:5px 10px;border-radius:5px;"><b>Mua</b></button></a>
                </div>
                </div>
                ';
              }

            ?>
           

           

            

            
          </div> <!-- media-boxes -->
        </div>
      </div>

      <div class="row tm-mb-big tm-subscribe-row">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 tm-bg-gray tm-subscribe-form">
          <h3 class="tm-text-pink tm-mb-30">Subscribe our updates!</h3>
          <p class="tm-mb-30">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi semper, ligula et pretium porttitor, leo orci accumsan ligula.</p>
          <form action="index.php" method="POST">
            <div class="form-group mb-0">
              <input type="text" class="form-control tm-subscribe-input" placeholder="Your Email">
              <input type="submit" value="Submit" class="tm-bg-pink tm-text-white d-block ml-auto tm-subscribe-btn">
            </div>
          </form>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 img-fluid pl-0 tm-subscribe-img"></div>
      </div>

      <div class="row tm-mb-medium">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mb-4">
          <h4 class="mb-4 tm-font-300">Latest Albums</h4>
          <a href="#" class="tm-text-blue-dark d-block mb-2">Sed fringilla consectetur</a>
          <a href="#" class="tm-text-blue-dark d-block mb-2">Mauris porta nisl quis</a>
          <a href="#" class="tm-text-blue-dark d-block mb-2">Quisque maximus quam nec</a>
          <a href="#" class="tm-text-blue-dark d-block">Class aptent taciti sociosqu ad</a>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mb-4">
          <h4 class="mb-4 tm-font-300">Our Pages</h4>
          <a href="#" class="tm-text-blue-dark d-block mb-2">Nam dapibus imperdiet</a>
          <a href="#" class="tm-text-blue-dark d-block mb-2">Primis in faucibus orci</a>
          <a href="#" class="tm-text-blue-dark d-block mb-2">Sed interdum blandit dictum</a>
          <a href="#" class="tm-text-blue-dark d-block">Donec non blandit nisl</a>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
          <h4 class="mb-4 tm-font-300">Quick Links</h4>
          <a href="#" class="tm-text-blue-dark d-block mb-2">Nullam scelerisque mauris</a>
          <a href="#" class="tm-text-blue-dark d-block mb-2">Vivamus tristique enim non orci</a>
          <a href="#" class="tm-text-blue-dark d-block mb-2">Luctus et ultrices posuere</a>
          <a href="#" class="tm-text-blue-dark d-block">Cubilia Curae</a>
        </div>
      </div>
     <?php include ('includes/footer.php') ?> 
    </div> <!-- .container -->

  </div> <!-- .main -->

  <!-- load JS -->
  <script src="js/jquery-3.2.1.slim.min.js"></script> <!-- https://jquery.com/ -->
  <script>

    /* DOM is ready
    ------------------------------------------------*/
    $(function () {

      if (renderPage) {
        $('body').addClass('loaded');
      }

      $('.tm-current-year').text(new Date().getFullYear());  // Update year in copyright
    });

  </script>
</body>
</html>