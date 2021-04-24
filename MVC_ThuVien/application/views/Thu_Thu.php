<!DOCTYPE html>
<html>
<title>ADMIN </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="./css.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
<body class="w3-content" style="max-width:1200px;">


<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px;padding-top: 1px;background-color: white!important;font-family:Times New Roman" id="mySidebar">
		 <div class="w3-container w3-display-container w3-padding-16"style="padding-left:0px;">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide" style=" margin-top: 0px";><a href="http://due.udn.vn/"><img src="./img/LOGO5.jpg"style ="width: 220px;height: 70px;padding-left: 0px"></a><b></b></h3>
  </div>
  <div class="input-group">
  
</div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold;padding-bottom: 30px;">
  	 <div class="input-group">
  <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
    aria-describedby="search-addon" />
  <button type="button" class="btn btn-outline-primary"><i class="fa fa-search"></i></button>
  
</div>

    <a href="Thu_thu_controller" class="w3-bar-item w3-button"style="color: white;margin-bottom: 10px;background-color: #2162f3f5!important;margin-top: 60px;"><span class="fa fa-home"></span>  Trang chủ</a>
    <!-- <a href="#" class="w3-bar-item w3-button">Dresses</	a> -->
    
    	<div class="danhmuc"style="background-color: #2162f3f5!important;">
    <a onclick="myAccFunc()" href="javascript:void(0)"style="color:white;margin-bottom: 10px;" class="w3-button w3-block w3-white w3-left-align" id="myBtn">  <!-- <span class="fa fa-list"> -->  Quản lý danh mục <i class="fa fa-caret-down"></i>
     
    </a>
    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium"style="background-color: white;">
      <a href="./sach.html" class="w3-bar-item w3-buttn w3-light-grey"><i class="fa fa-caret-right w3-margin-right"></i>Sách</a>
      <a href="#" class="w3-bar-item w3-button">Giáo trình</a>
      <a href="#" class="w3-bar-item w3-button">Tạp chí</a>
      <a href="#" class="w3-bar-item w3-button">Truyện, kịch</a>
    </div>
    </div>
    <a href="./thongbao.html" class="w3-bar-item w3-button"style="color:white;background-color:#2162f3f5!important;margin-bottom: 10px;"> <!-- <span class="fa fa-bell">  --> Quản lý độc giả</a>
    <a href="#" class="w3-bar-item w3-button"style="color:white ;background-color: #2162f3f5!important"> <!-- <img src="./img/icon.png"style="height: 20px;width: 20px"> --> Danh sách chờ mượn </a>

  </div>
  <div style=" width: 220px;
    height: 120px;">
  <a href="./Firt_controller" class="w3-bar-item w3-button w3-padding"style="color: #2162f3f5!important;font-size: 18px">Thêm sách</a> 

   <a href="./kho_sach.html" class="w3-bar-item w3-button w3-padding"style="color: #2162f3f5!important;font-size: 18px;padding-top: 0px;">Thêm độc giả  </a>
   </div>

</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
	<div class="abc"style="width: 100%;margin-bottom: 20px;">
	
  <div class="w3-bar-item w3-padding-24 w3-wide"style="font-size: 7px;color: #00bcd4!important;line-height: -3px;background-color: white;;"><a href="http://due.udn.vn/"></a><img src="./img/LOGO3.png"style="height: 30px;padding-top: 0px"></div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
  </div>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Top header -->
  <header class="w3-container w3-xlarge"style="color: black;background-color: #2162f3f5!important;margin-bottom:30px;margin-top: 20px;height: 50px;">
  

    <p class="w3-left"style="background-color: #2162f3f5!important;color: white;margin-top: 10px ">TRANG QUẢN TRỊ  <!-- <img src="..\webbb\img\THUVIENONLINE.png"> --></p>
    <!-- <p class="w3-right">
      <i class="fa fa-shopping-cart w3-margin-right"style="background-color: #00000003!important;"></i>
      <a class="fa fa-search">logi</a>

    </p> -->
   
   
 <a href="#"style = "float: right;padding-top: 0px;font-size: 16px;margin-top: 10px;color: white;text-decoration: none"><span class="sign-in-alt"></span>Login </a>

   
  </header>

  <!-- Image header -->
  <div class="w3-display-container w3-container">
    <img src="http://due.udn.vn/Portals/0/Banner Truong/tvts_2021.jpg" alt="Jeans" style="width:100%;height: 500px">
    <div class="w3-display-topleft w3-text-white" style="padding:24px 48px;">
   
    </div>
  </div>

  <div class="w3-container w3-text-grey" id="jeans">
    <p>8 items</p>
  </div>

  <!-- Product grid -->
  <div class="w3-row w3-grayscale">
    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="./img/sach.png" style="width:100%">
        <p style="margin-bottom: 0px;">Giáo trình vi mô</p>
    <!--     <button name="button"style="background-color: #21f3d6!important;margin-bottom: 10px" type="button">Mượn</button> -->

      </div>
      <div class="w3-container">
        <img src="./img/sach.png" style="width:100%">
        <p>Giáo trình vi mô<br></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="./img/sach.png" style="width:100%">
          <span class="w3-tag w3-display-topleft">Nffdf</span>
          <div class="w3-display-middle w3-display-hover">
            <br><button class="w3-button w3-black">Mượn <i class="fa fa-shopping-cart"></i></button>
          </div>

        </div>
        <p>Giáo trình vi mô <br></p>
      </div>
      <div class="w3-container">
        <img src="./img/sach.png" style="width:100%">
        <p>Giáo trình vi mô<br></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="./img/sach.png" style="width:100%">
        <p>Giáo trình vi mô<br></p>
      </div>
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="./img/sach.png" style="width:100%">
          <span class="w3-tag w3-display-topleft">Sale</span>
          <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <p>Giáo trình vi mô<br></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="./img/sach.png" style="width:100%">
         <!-- <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button>
          </div> -->
        <p>Giáo trình vi mô<br></p>
      </div>
      <div class="w3-container">
        <img src="./img/sach.png" style="width:100%">
        <p>Giáo trình vi mô<br></p>
      </div>
    </div>
  </div>

  <!-- Subscribe section -->
<!--   <div class="w3-container w3-black w3-padding-32">
    <h1>Subscribe</h1>
    <p>To get special offers and VIP treatment:</p>
    <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail" style="width:100%"></p>
    <button type="button" class="w3-button w3-red w3-margin-bottom">Subscribe</button>
  </div>
   -->
  <!-- Footer -->
  <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer"style ="width: 100%;padding-right: 90px;padding-top: 50px">
    <div class="w3-row-padding">
      <!-- <div class="w3-col s4">
        <h4>Contact</h4>
        <p>Questions? Go ahead.</p>
        <form action="/action_page.php" target="_blank">
          <p><input class="w3-input w3-border" type="text" placeholder="Name" name="Name" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Email" name="Email" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Subject" name="Subject" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Message" name="Message" required></p>
          <button type="submit" class="w3-button w3-block w3-black">Send</button>
        </form>
      </div> -->

      <div class="w3-col s4">
        <h4>About</h4>
        <p><a href="#">Về chúng tôi</a></p>
        <p><a href="#">E-learning</a></p>
        <p><a href="#">Hỗ trợ</a></p>
        <p><a href="#">Tư vấn tuyển sinh</a></p>
        <p><a href="#">Điều hành tác nghiệp</a></p>
      <!--   <p><a href="#">Payment</a></p>
        <p><a href="#">Gift card</a></p>
        <p><a href="#">Return</a></p>
        <p><a href="#">Help</a></p> -->
      </div>

      <div class="w3-col s4 w3-justify"style = "margin-left: 200px">
        <h4>Đội ngũ kĩ thuật</h4>
        <p><i class="fa fa-fw fa-map-marker"></i> Team44K212.06</p>
        <p><i class="fa fa-fw fa-phone"></i> 0333707059</p>
        <p style = "margin-bottom: 0px"><i class="fa fa-fw fa-envelope"></i> doducanh2904@mail.com</p>
        <p><a style="text-decoration: none" href="https://www.facebook.com/profile.php?id=100043023576264"style = "height: 36px;width: 200px;margin-top: 12px;"><img src="./img/iconfb.png"style = "height: 17px;width: 14px;"> facebook</a></p>
        <!-- <h4>Kênh truyền thông</h4>
        <p><i class="fa fa-fw fa-cc-amex"></i> Amex</p>
        <p><i class="fa fa-fw fa-credit-card"></i> Credit Card</p>
        <br>5=-
        <i class="fa fa-facebook-official w3-hover-opacity w3-large"></i>
        <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
        <i class="fa fa-snapchat w3-hover-opacity w3-large"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity w3-large"></i>
        <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
        <i class="fa fa-linkedin w3-hover-opacity w3-large"></i> -->
      </div>
    </div>
  </footer>

  <div class="w3-black w3-center w3-padding-24"style="background-color: #2162f3f5!important;">Bản quyền thuộc <a href="http://due.udn.vn/" title="W3.CSS" target="_blank" class="w3-hover-opacity">due.udn.vn</a></div>

  <!-- End page content -->
</div>

<!-- Newsletter Modal -->
<div id="newsletter" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
      <h2 class="w3-wide">NEWSLETTER</h2>
      <p>Join our mailing list to receive updates on new arrivals and special offers.</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
      <button type="button" class="w3-button w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('newsletter').style.display='none'">Subscribe</button>
    </div>
  </div>
</div>

<script>
// Accordion 
function myAccFunc() {
  var x = document.getElementById("demoAcc");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
// document.getElementById("myBtn").click();


// Open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
