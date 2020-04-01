<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>من نحن؟</title>
    <link href="./css/headerStyle.css" rel="stylesheet">
    <link href="./css/bodyHowAreWe.css" rel="stylesheet">
    <link href="./css/footerStyle.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Amiri|Lemonada|Mirza|Scheherazade&display=swap" rel="stylesheet">

</head>
<body >
    <nav class="header">
        <img src="./images/logo.png" id="logo" />
        <ul>
		<li>
                <a>
				 <div class="icon">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                     
                    <div class="header-item" data-text="about"><h3><p>مرحبا <?php echo $_SESSION['username']; ?>!</p></h3></div>
                    </a>
            </li> 
            <li>
                <a href="index.php">
                    <div class="icon">
                        <i class="fa fa-home" aria-hidden="true"></i>
                    </div>
                    <div class="header-item" data-text="Home"><h3>الرئيسية</h3></div>
                </a>
                <div class="sub-content">
                    <div class="sub-drop">
                        <ul>
                            <li>
                                <a href="countries.php">
                                    <div class="icon">
                                        <i class="fa fa-globe" aria-hidden="true"></i>
                                    </div>
                                    <div class="header-item" data-text="countries"><h3>الدول</h3></div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <a href="howAreWe.php">
                    <div class="icon">
                        <i class="fa fa-question-circle-o" aria-hidden="true"></i>
                    </div>
                    <div class="header-item" data-text="about"><h3>من نحن</h3></div>
                    </a>
            </li> 
            <li>
				<a href="say.php">
					<div class="icon">
						<i class="fa fa-heart-o"></i>
					</div>
					<div class="header-item"><h3>أراء</h3></div>
				</a>
			</li> 
            <li>
                <a href="#call">
                    <div class="icon">
                        <i class="fa fa-phone-square" aria-hidden="true"></i>
                    </div>
                    <div class="header-item" data-text="call"><h3>اتصل بنا</h3></div>
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
    <section>
    <div class ="box">
        <img src ="./images/loginew.jpg">
        <h1>من نحن؟</h1>
        <p> تعتبر شركة ترحال للسياحة والسفر إحدى الشركات الرائدة في مجال ادارة السفر المعتمدة من قبل اتحاد النقل الجوي الدولي في المملكة العربية السعودية 
        نسهل لكم خدمات حجز الفنادق ونتميز بأفضل الباكجات السياحية بأسعار مميزة </p>
        
        <ul>
        <li><a href="#"><i class="fa fa-facebook-square"aria-hidden="true"></i></a></li>
        </a></li> <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
        </ul>
    </div>
    </section>
    <div id="sub-div"></div>
        <div class="footer">
            <br>
            <h1 id="call">للتواصل</h1>
            <a href="mailto:support@yourcompany.com"><h4>&#9826 support@yourcompany.com </h4></a>
                <a><h4> &#9743 0536136276 </h4></a>
                <ul class="social-buttons">
                    <li><a href="https://m.facebook.com/bat.bot.16"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="https://twitter.com/terhal_77"><i class="fa fa-twitter" aria-hidden="true"></i></a></li> 
                    <li><a href="https://instagram.com/vampirdes35?igshid=1xymp835j1bf2"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCu2qxIbGeqMYhoZVZx59CkQ"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                </ul>
                <p><font size="5" color="#30336b">&#169; جميع الحقوق محفوظة لشركة ترحال للسياحة والسفر 2019-2020</font></p>
        </div>
</body>
</html>