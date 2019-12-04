<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Kriptografi</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Red Ui Kit Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- radio-buttons -->
<link rel="stylesheet" href="css/sky-forms.css">
<!-- //radio-buttons -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,900,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

</head>
	
<body>
	<!-- ui-kit -->
		<div class="ui-kit">
			<div class="container">
				<h1><i class="glyphicon glyphicon-ice-lolly" aria-hidden="true"></i>metode<span>VIGENERE</span></h1>
                                
					<div class="col-md-6 ui-kit-grid-left">
						<div class="men-icon">
							<div class="menu-nav1">
								<span class="menu_1_left"><i class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></i></span>	
									<script>
										$( "span.menu_1_left" ).click(function() {
										  $( "ul.menu_1_left_nav" ).slideToggle( "slow", function() {
											// Animation complete.
										  });
										});
									</script>
							</div>
							<p>MENU</p>
							<div class="clearfix"> </div>
								<ul class="menu_1_left_nav">
                                    <li><a href="index.php"><i class="glyphicon glyphicon-ice-lolly-tasted" aria-hidden="true"></i>Home</a></li>	
									<li><a href="vig.php"><i class="glyphicon glyphicon-ice-lolly-tasted" aria-hidden="true"></i>Vigenere</a></li>	
									<li><a href="mono.php"><i class="glyphicon glyphicon-ice-lolly-tasted" aria-hidden="true"></i>Monoalphabetic</a></li>
									<li><a href="affine.php"><i class="glyphicon glyphicon-ice-lolly-tasted" aria-hidden="true"></i>Affine</a></li>
								</ul>
						</div>
                    </div>	
					<div class="col-md-6 ui-kit-grid-right">
                    <div class="men-icon">
						<div class="menu3">
							<div class="menu3_1">
								<div class="menu-nav3">
									<span class="menu_1_left2"><i class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></i></span>	
										<script>
											$( "span.menu_1_left2" ).click(function() {
											  $( "ul.menu_1_left_nav2" ).slideToggle( "slow", function() {
												// Animation complete.
											  });
											});
										</script>
								</div>
								<p>Team Members</p>
								<div class="clearfix"> </div>
							</div>
							
								<ul class="menu_1_left_nav2">
									<li><a>Endah Ardhia Utami</a></li>
									<li class="act"><a>Ikriya Hanum</a></li>	
									<li><a>Risti Ummulkhair</a></li>	
								</ul>
                        </div>
                    </div>    
                    </div>    
                                                         
            <div class="ui-kit-grids">
                    <div class="clearfix"> </div>
                <div class="timothy-and-icons">
						<div class="bird-text-grid-left">
							<img src="images/3.png" alt=" "/>
						</div>
						<div class="bird-text-grid-right">
							<h2>vigenere<a>Sandi Vigenere adalah metode menyandikan teks alfabet dengan menggunakan deretan sandi Caesar berdasarkan huruf-huruf pada kata kunci. Sandi Vigenere merupakan bentuk sederhana dari sandi substitusi polialfabetik.</a></h2>
                        </div>
                    <div class="clearfix"> </div>
                </div>
            </div>     
                
                    <div class="col-md-6 ui-kit-grid-left">
                        <div class="login-form">
							<form action="enkripsi_act.php" method="post" data-ajax="false">
                            
                            <label for="basic">Plain Text :</label>
                                <input type="text" value="" required="" name="plain" id="textarea-a">
                                
                            <label for="basic">Kunci :</label>    
                                <input type="text" value="" required="" name="kunci" id="textarea-a">
                                <label></label>
                                <input type="submit" value="Enkripsi Plain Text" data-theme="a">
                              
							</form>
                            <b>Hasil :</b>
                            <div class="yes-no">
                                
								<div class="yes-no-grid-left">
									<p>Cipher Text</p>
								</div>
								<div class="yes-no-grid-right">
									<p>Kunci</p>
								</div>
								<div class="clearfix"> </div>
							</div>
                            
						</div>
                    </div>

					<div class="col-md-6 ui-kit-grid-right">
                        <div class="login-form">
							<form action="dekripsi_act.php" method="post" data-ajax="false">
                            
                            <label for="basic">Cipher Text :</label>
                                <input type="text" value="" required="" name="hasil_ciper" id="textarea-a">
                                
                            <label for="basic">Kunci :</label>    
                                <input type="text" value="" required="" name="kunci" id="textarea-a">
                                <label></label>
                                <input type="submit" value="Dekripsi Cipher Text" data-theme="a">
                              
							</form>
                            <b>Hasil :</b>
                            <div class="yes-no">
                            
								<div class="yes-no-grid-left">
									<p>Plain Text</p>
								</div>
								<div class="yes-no-grid-right">
									<p>Kunci</p>
								</div>
								<div class="clearfix"> </div>
							</div>
                            
						</div>
                    </div>    
                
                </div>    
        
				<div class="footer-bottom">
						<p>Copyright © 2015 Red Ui Kit. All rights reserved | Template by <a href="http://w3layouts.com">W3layouts</a></p>					
                </div>
                
			</div>
		</div>
	<!-- //ui-kit -->
</body>

</html>
