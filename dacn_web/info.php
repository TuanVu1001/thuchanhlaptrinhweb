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
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/infomation.css">                                            <!-- https://getbootstrap.com/ -->
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
<!----->
<body>
    <div class="tm-welcome-section">
      <?php include("includes/header.php") ?>

      <div class="container text-center tm-welcome-container">
        <div class="tm-welcome">
          <i class="fas fa-gift tm-fa-big tm-fa-mb-big"></i>
          <h1 class="text-uppercase mb-3 tm-site-name">Món quà tuy nhỏ nhưng nó chứa đựng một tấm lòng to</h1>

          <p class="tm-site-description">Trang thông tin cá nhân</p>
        </div>
      </div>

    </div>
<!----------------->

<div class="container-fluid">
	<div class="row justify-content-around">
		<div class="col-8">
			<div class="info">
				<?php include ("includes/page_info.php"); ?>
			</div>
		</div>
	</div>
</div>


<br/>
<?php  include("includes/footer.php");?>
</body>