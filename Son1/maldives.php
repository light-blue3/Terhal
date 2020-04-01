<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE hyml>
<html>
<head>
	<meta charset="utf-8">
<title>Maldives </title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" type="text/css" href="./css/maldives.css">
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
				<h1>عطلة احلامكم في جزر المالديف</h1>
				<p>هي الخيار الأمثل للمعيشة الفاخرة والنعيم على شاطئ البحر</p>
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
		    <img src="./images/bar2.jpg">
		</div>
		<div class="content">
		<div>
		    <h2>باروس جزر المالديف</h2>
			<p> منتجع بوتيك من فئة الخمس نجوم الحاصل على جوائز عديدة،
			يمنح الزائرين من دول مجلس التعاون سببا وجيها للترحيب بالعام الجديد في هذه الجزيرة المثالية في أناقتها ورفاهيتها</p>
		</div>
		</div>
		
		</div>
		
		<div class="box">
		<div class="imgBx">
		    <img src="./images/myl.jpg">
		</div>
		<div class="content">
		<div>
		    <h2>ملايدهو آيلاند المالديف</h2>
			<p>يقع فى منطقة مالى بمدينة المالديف حيث تتميز بقربها من وسائل المواصلات المختلفة مما تتيح زيارة الاماكن السياحية والت
			رفيهية المميزة بالمدينة والتى تتمثل فى زيارة جزيرة ملايدهو</p>
		</div>
		</div>
		
		</div>
		
		<div class="box">
		<div class="imgBx">
		    <img src="./images/hur.jpg">
		</div>
		<div class="content">
		<div>
		    <h2>هورالهي آيلاند ريزورت</h2>
			<p>يحتوي هورالهي على أكبر مطعم زجاجي في العالم وهو مطع
			م "5.8  " حيث يقع تحت الماء، وتشتهر المنطقة برياضة الغطس ورياضة ركوب الأمواج</p>
		</div>
		</div>
		
		</div>
		
		<div class="box">
		<div class="imgBx">
		    <img src="./images/hard.jpg">
		</div>
		<div class="content">
		<div>
		    <h2>هارد روك جزر المالديف</h2>
			<p>الفلل الشاطئية الأنيقة والأجنحة العائلية وصولاً إلى الفلل المستكنة فوق سطح المياه و
			المؤلفة من غرفة نوم واحدة أو غرفتَي نوم. </p>
		</div>

		</div>
		
		</div>
		
	</div>
	<div id="git" class="items">
	    <div class="cards">
		    <div class="imgbox">
		  <div>
			<img src="./icons/sunbathing.png">
			<h2>الأنشطة</h2>
			<a href="actmaldives.php" class="btn btn-default over">اضغط هنا</a>
		</div>
	        </div>
		</div>
		
		<div class="cards">
		    <div class="imgbox">
		  <div>
			<img src="./icons/canoe.png">
			<h2>الاماكن السياحية</h2>
			<a href="actmaldives.php" class="btn btn-default over">اضغط هنا</a>
		  </div>
	        </div>
		</div>
		
		 <div class="cards">
		    <div class="imgbox">
		   <div>
			<img src="./icons/fried.png">
			<h2>المطاعم</h2>
			<a href="actmaldives.php" class="btn btn-default over">اضغط هنا</a>
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