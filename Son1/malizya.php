<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE hyml>
<html>
<head>
	<meta charset="utf-8">
<title>Malizya </title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" type="text/css" href="./css/malizya.css">
<link href="https://fonts.googleapis.com/css?family=Amiri&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Vidaloka&display=swap" rel="stylesheet">
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

     <div class="at">
	  <div class="info">
				<h1>ماليزيا حيث الطبيعة الخضراء والجمال</h1>
				<p>اختبر تجربة لا مثيل لها في عطلتك المُقبلة</p>
				<a href="#git" class="btn">أشياء يمكنك القيام بها</a>
				</div>
	 </div>
  </div>
  
     <a class="goto"  href="#"> <i class="fas fa-arrow-up"></i></a>
	 
	 <div class="ti">
	   <h1>الفنادق </h1>
	   </div>
	 
	<div class="container">
	   
	    <div class="box">
		<div class="imgBx">
		    <img src="./images/eq.jpg">
		</div>
		<div class="content">
		<div>
		    <h2>ايج كوالالمبور</h2>
			<p> يتواجد الفندق في كوالالمبور سيتي سنتر النابضة بالحياة على بعد خمس دقائق من محطة 
			القطار الكهربائي رجا شولان، وتوفر تراس على سطح، مسبح م
			ياه مالحة وإنترنت لاسلكي مجاني في الأماكن العامة</p>
		</div>
		</div>
		
		</div>
		
		<div class="box">
		<div class="imgBx">
		    <img src="./images/mnb.jpg">
		</div>
		<div class="content">
		<div>
		    <h2>مندرين اورينتال كوالا</h2>
			<p>يتميز ماندارين أورينتال كوالالمبور بأجنحة أنيقة وشقق مخدومة تطل على أفق الم 
			دينة ومتنزه كوالالمبور سيتي سنتر. ويوفر الفندق مسبح خارجي مع كابانات بجانب المسبح وأسرّة نهارية.</p>
		</div>
		</div>
		
		</div>
		
		<div class="box">
		<div class="imgBx">
		    <img src="./images/kn.jpg">
		</div>
		<div class="content">
		<div>
		    <h2>فندق كونكورد كوالالمبور</h2>
			<p>قع فندق كونكورد كوالالمبور في قلب كولالمبور، ويوفر غرفاً واسعة مع خدمة الواي فاي المجاني
			ة في جميع أنحائه، ويضم 6 خيارات لتناول الطعام ومسبحًا خارجيًا</p>
		</div>
		</div>
		
		</div>
		
		<div class="box">
		<div class="imgBx">
		    <img src="./images/har.jpg">
		</div>
		<div class="content">
		<div>
		    <h2>فندق بولمان كوالالمبور </h2>
			<p>قع فندق ومساكن بولمان كوالالمبور سيتي سنتر قبالة مركز بافيليون كوالالمبور للتسوق مباشرةً، ويقدم أماكن إقامة ع
			صرية مع خدمة الواي فاي مجاناً في جميع أنحائه. ويضم بارين و4 مطاعم </p>
		</div>

		</div>
		
		</div>
		
	</div>
	<div id="git" class="items">
	    <div class="cards">
		    <div class="imgbox">
		  <div>
			<img src="./icons/sun.png">
			<h2>الأنشطة</h2>
			<a href="actmalizya.php" class="btn btn-default over"> اضغط هنا</a>
		</div>
	        </div>
		</div>
		
		<div class="cards">
		    <div class="imgbox">
		  <div>
			<img src="./icons/tower.png">
			<h2>الاماكن السياحية</h2>
			<a href="actmalizya.php" class="btn btn-default over">اضغط هنا</a>
		  </div>
	        </div>
		</div>
		
		 <div class="cards">
		    <div class="imgbox">
		   <div>
			<img src="./icons/cooking.png">
			<h2>المطاعم</h2>
			<a href="actmalizya.php" class="btn btn-default over">اضغط هنا</a>
		   </div>
	        </div>
		</div>
	
	</div>
	 
	 <div id="sub-div"></div>
        <div class="footer">
            <h1 id="call">للتواصل</h1>
            <a href="mailto:support@yourcompany.com"><h4>&#9826 support@yourcompany.com </h4></a>
                <a><h4> &#9743 0536136276 </h4></a>
                <ul class="social-buttons">
                    <li><a href="#"><i class="fab fa-facebook" ></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter" ></i></a></li> 
                    <li><a href="#"><i class="fab fa-instagram" ></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube" ></i></a></li>
                </ul>
                <p><font size="5" color="#30336b">&#169; جميع الحقوق محفوظة لشركة ترحال للسياحة والسفر 2019-2020</font></p>
        </div>
	 
</body>
</html>