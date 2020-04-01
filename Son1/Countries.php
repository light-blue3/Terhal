<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<html>
<head>
<title>Countries</title>
<meta charset="utf-8" />

<link rel="stylesheet" type="text/css" href="./css/Countries.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" >
</head>

<body style="background-color:#e6e6ff;">
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
				<li> <a href="C:\Users\USER\Desktop\Travel2\index.php">
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
		 <div class="at">
		 <h1>Explore a new world</h1>
                <p><b>
                   We all love to travel. We love to explore,<br>
                  discover new places, make new friends and <br>
                  get acquainted with cultures different <br>
                  from our own .It’s a really fun .<b></p>
		 </div>
		 
		 <a class="goto"  href="#"> <i class="fas fa-arrow-up"></i></a>
		 
	<div class="sfr">
	   <div class="du">
	    <img src="./images/sf1.jpg">
		    <div class="caption">
			   <div class="about">
			        <h2>" تعرٌف على اماكن جديدة "</h2>
                	    <p>كثير من الناس يحلمون بالسفر إلى مختلف دول العالم ولكن يصيبهم التردد ظناً منهم أن السياحة باهظة التكاليف أو لعدم إدراكهم أن برامج السياحة والسفر يمكن أن تتكيف مع متطلباتهم وميزانياتهم. إن شركات السياحة والسفر في هذه الأيام تقدم برامج سياحة وسفر تناسب جميع الأذواق والميزانيات، لا يشترط أن تكون غنياً كي تستكشف العالم      </p>
	             </div>
	        </div>
	    </div>
	</div>
		 
            <div class="fog">
                <div class="box">
                <img src="./images/dubai.jpg" >

				 </div>
				 
				<div class="box">
                  <img src="./images/maldives.jpg" >
				  

				 </div>
				 
				<div class="box">
                  <img src="./images/london.jpg" >
				  
				 </div>
				
				<div class="box">
                  <img src="./images/malizya.jpg" >
				 
				 </div>
      
			</div>

</div>

      <div class="over">
	  <a href="dubai.php"><span>Dubai</span></a>
	  <a href="maldives.php"><span>Maldives</span></a>
	  <a href="london.php"><span>London</span></a>
	  <a href="malizya.php"><span>Malizya</span></a>
      </div>
<hr>

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