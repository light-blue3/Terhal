<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE hyml>
<html  lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Malizya Activities</title>
	
	<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">

    <link href="./css/actdubai.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amiri&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" >
</head>
<body >
	<div id="warp">
		<nav class="header">
			<img src="./icons/logo.png" id="logo" />
			<ul>
			<li>
                <a>
				 <div class="icon">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                     
                    <div class="header-item" data-text="about"><h3><p>مرحبا <?php echo $_SESSION['username']; ?>!</p></h3></div>
                    </a>
            </li> 
				<li> <a href="index.php">
					<div class="icon">
						<i class="fa fa-home"></i>
					</div>
					<div class="header-item"><h3>الرئيسية</h3></div>
				</a>
				<div class="sub-content">
					<div class="sub-drop">
						<ul>
							<li>
								<a href="Countries.php">
									<div class="icon">
										<i class="fa fa-globe" ></i>
									</div>
									<div class="header-item"><h3>الدول</h3></div>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</li>
			<li>
				<a href="howAreWe.php">
					<div class="icon">
						<i class="fa fa-question-circle"></i>
					</div>
					<div class="header-item"><h3>من نحن</h3></div>
				</a>
			</li> 
			<li>
				<a href="say.php">
					<div class="icon">
						<i class="fa fa-heart"></i>
					</div>
					<div class="header-item"><h3>أراء</h3></div>
				</a>
			</li> 
			<li>
				<a href="#call">
					<div class="icon">
						<i class="fa fa-phone-square" ></i>
					</div>
					<div class="header-item" ><h3>اتصل بنا</h3></div>
				</a>
			</li>
			 <li>
                <a href="logout.php">
                    <div class="icon">
                        <i class="fa fa-key" aria-hidden="true"></i>
                    </div>
                    <div class="header-item" data-text="call"><h3>تسجيل خروج</h3></div>
                </a>
            </li>
		</ul>
	</nav>
	</div>
	
	 <a class="goto"  href="#"> <i class="fas fa-arrow-up"></i></a>
	 
	 <div class="carousel">
	<h1 id="2">الأماكن السياحية</h1>

	    <div class="carousel-item">
		<img src="./images/lan.png">
		<h3>جزيرة لنكاوي</h3>
	    </div>
		<div class="carousel-item">
		<img src="./images/cl.jpg">
		<h3>حديقة طيور كوالالمبور</h3>
	    </div>
		<div class="carousel-item">
		<img src="./images/ko.jpg">
		<h3>جزيرة كينابالو</h3>
	    </div>
		<div class="carousel-item">
		<img src="./images/kp.jpg">
		<h3>الكاميرون</h3>
	    </div>
		<div class="carousel-item">
		<img src="./images/str.jpg">
		<h3>مزارع الفراولة</h3>
	    </div>
	</div>
	
	<div class="carousel">
	<h1 id="3">المطاعم</h1>

        <div class="carousel-item">
		<img src="./images/lam.jpg">
		<h3>مطعم رومانزا</h3>
	    </div>
	    <div class="carousel-item">
		<img src="./images/ol.jpg">
		<h3>المطعم الدوار </h3>
	    </div>
		<div class="carousel-item">
		<img src="./images/jop.jpg">
		<h3>مطعم جوغويا</h3>
	    </div>
		<div class="carousel-item">
		<img src="./images/jn.jpg">
		<h3>مطعم طاجين</h3>
	    </div>
		<div class="carousel-item">
		<img src="./images/gm.jpg">
		<h3>مطعم القمر اللبناني</h3>
	    </div>
	</div>
	
	<div class="carousel">
	  <h1 id="1">الأنشطة</h1>

        <div class="carousel-item">
		<img src="./images/tl.jpg">
		<h3>تلفريك جنتنج هايلاند</h3>
	    </div>
	    <div class="carousel-item">
		<img src="./images/in.jpg">
		<h3>عالم تحت الماء لنكاوي</h3>
	    </div>
		<div class="carousel-item">
		<img src="./images/shl.jpg">
		<h3>زيارة شلالات الآبار السبعة</h3>
	    </div>
		<div class="carousel-item">
		<img src="./images/sn.jpg">
		<h3>مدينة صن واي لاجون</h3>
	    </div>
		<div class="carousel-item">
		<img src="./images/tay.jpg">
		<h3>مدينة برجايا سكوير</h3>
	    </div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	 <script type="text/javascript">
	 $(document).ready(function(){
     $('.carousel').carousel();
      });
	 </script>
	 
	  <div id="sub-div"></div>
        <div class="footer">
            <h1 id="call">للتواصل</h1>
            <a href="mailto:support@yourcompany.com"><h4>&#9826 support@yourcompany.com </h4></a>
                <a><h4> &#9743 0536136276 </h4></a>
                <ul class="social-buttons">
                    <li><a href="https://m.facebook.com/bat.bot.16"><i class="fab fa-facebook" ></i></a></li>
                    <li><a href="https://twitter.com/terhal_77"><i class="fab fa-twitter" ></i></a></li> 
                    <li><a href="https://instagram.com/vampirdes35?igshid=1xymp835j1bf2"><i class="fab fa-instagram" ></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCu2qxIbGeqMYhoZVZx59CkQ"><i class="fab fa-youtube" ></i></a></li>
                </ul>
                <p><font size="5" color="#30336b">&#169; جميع الحقوق محفوظة لشركة ترحال للسياحة والسفر 2019-2020</font></p>
        </div>
	 
</body>
</html>