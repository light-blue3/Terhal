<!DOCTYPE hyml>
<html  lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Dubai Activities</title>
	
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
                <a href="login.php">
				 <div class="icon">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                     
                    <div class="header-item" data-text="login"><h3>التسجيل</h3></div>
                    </a>
            </li> 
				<li> <a href="Home.php">
					<div class="icon">
						<i class="fa fa-home"></i>
					</div>
					<div class="header-item"><h3>الرئيسية</h3></div>
				</a>
				<div class="sub-content">
					<div class="sub-drop">
						<ul>
							<li>
								<a href="dCountries.php">
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
				<a href="dhowAreWe.php">
					<div class="icon">
						<i class="fa fa-question-circle"></i>
					</div>
					<div class="header-item"><h3>من نحن</h3></div>
				</a>
			</li>
			<li>
				<a href="dsay.php">
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
		</ul>
	</nav>
	</div>
	
	 <a class="goto"  href="#"> <i class="fas fa-arrow-up"></i></a>
	 
	 <div class="carousel">
	<h1 id="2">الأماكن السياحية</h1>

	    <div class="carousel-item">
		<img src="./images/brj1.jpg">
		<h3>برج خليفة</h3>
	    </div>
		<div class="carousel-item">
		<img src="./images/mol2.jpg">
		<h3>دبي مول</h3>
	    </div>
		<div class="carousel-item">
		<img src="./images/mol.jpg">
		<h3>نافورة دبي</h3>
	    </div>
		<div class="carousel-item">
		<img src="./images/jmira.jpg">
		<h3>نخلة جميرا</h3>
	    </div>
		<div class="carousel-item">
		<img src="./images/khor.jpg">
		<h3>خور دبي</h3>
	    </div>
	</div>
	
    <div class="carousel">
	<h1 id="3">المطاعم</h1>

        <div class="carousel-item">
		<img src="./images/Tomo.jpg">
		<h3>مطعم تومو</h3>
	    </div>
	    <div class="carousel-item">
		<img src="./images/la.jpg">
		<h3>مطعم لا كانتين دو فوبور</h3>
	    </div>
		<div class="carousel-item">
		<img src="./images/tong.jpg">
		<h3>مطعم تونغ تاي</h3>
	    </div>
		<div class="carousel-item">
		<img src="./images/coya.jpg">
		<h3>مطعم كويا</h3>
	    </div>
		<div class="carousel-item">
		<img src="./images/tap.jpg">
		<h3>مطعم بلاك تاب</h3>
	    </div>
	</div>
	
	<div class="carousel">
	  <h1 id="1">الأنشطة</h1>

        <div class="carousel-item">
		<img src="./images/lag.jpg">
		<h3>منتزه لاجونا المائي</h3>
	    </div>
	    <div class="carousel-item">
		<img src="./images/jaz.jpg">
		<h3>مهرجان دبي للجاز</h3>
	    </div>
		<div class="carousel-item">
		<img src="./images/land.jpg">
		<h3>ليجولاند دبي</h3>
	    </div>
		<div class="carousel-item">
		<img src="./images/ak.jpg">
		<h3>حديقة الألعاب المائية</h3>
	    </div>
		<div class="carousel-item">
		<img src="./images/db.jpg">
		<h3>مهرجان دبي للتسوّق</h3>
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