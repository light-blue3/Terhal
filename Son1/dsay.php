<html lang ="en" dir="ltr">
<head>
<meta charset="utf-8">
<link rel="stylesheet"href="sayStyle.css">
<link href="./css/footerStyle.css" rel="stylesheet">
<title >الاراء</title>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Mada&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"charset="utf-8"></script>
</head>
<body>
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
						<i class="fa fa-heart-o"></i>
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
<div class="testimonial-section"> 

<div class="inner-width"> 

<h1>الآراء والإقتراحات </h1>

 <div class="testimonial-pics"> 

<img src="./images/e.jpg" alt="tes-l"class="acttive"> 

<img src="./images/s.jpg" alt="tes-2">

 <img src="./images/v.jpg" alt="tes-3"> 

<img src="./images/w.jpg" alt="tes-4"> 

</div>
<div class="testimonial-contents">
<div class="testimonial active"id="tes-l">
<p>The sightseeing and activities were better than we even thought! I still can’t believe we did so much in such a short time, but we did not feel stressed. We really loved the tour and would do it all over again in a minute! Thanks.</p>
<span class="description">Mohammed Adel</span>
</div>
</div>

<div class="testimonial"id="tes-2">
<p>شكرا لكم استمتعنا بالرحلة ، الخدمات راقية وذات جودة عالية.</p>
<span class="description">عبدالعزيز التميمي</span>
</div>

<div class="testimonial"id="tes-3">
<p>اختياركم موفق للأماكن ولم نجد صعوبة في التنقل ولمسنا حرصكم على اختيار الانشطة الناسبة لمختلف الأعمار. </p>
<span class="description">سارة ابراهيم</span>
</div>

<div class="testimonial"id="tes-4">
<p>اختياركم للفنادق كان ذا جودة عالية من حيث اطلالتها والخدمات التي تقدمها وجودة الطعام والاسعار المناسبة ، سيكون لننا تعامل آخر بإذن الله .</p>
<span class="description">نور ممدوح</span>
</div>
</div>
</div>
</div>



<script type="text/javascript"> 
$('.testimonial-pics img').click(function(){
$(".testimonial-pics img").removeClass("active");
$(this).addClass("active"); 

$(".testimonial").removeClass("active"); 
$("#"+$(this).attr("alt")).addClass("active");
});
</script>






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