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

<script language="JavaScript" src="js/caesar.js"></script>
<script language="JavaScript" src="js/keymaker.js"></script>
<script language="JavaScript" src="js/util.js"></script>
<script language="JavaScript">

function start_update()
{
   if (! document.getElementById)
   {
      alert('Sorry, you need a newer browser.');
      return;
   }

   if ((! document.Caesar_Loaded) || (! document.Util_Loaded) ||
       (! document.Keymaker_Loaded) ||
       (! document.getElementById('caesar')))
   {
      window.setTimeout('start_update()', 100);
      return;
   }
   Keymaker_Start();
   upd();
}


function upd()
{
   var e, keyunchanged = 1, textunchanged = 1;

   if (! IsUnchanged(document.encoder.key))
   {
      keyunchanged = 0;
      e = document.getElementById('alphabet');
      e.innerHTML = HTMLEscape(MakeKeyedAlphabet(document.encoder.key.value));
   }
	
   if (! IsUnchanged(document.encoder.text))
   {
      textunchanged = 0;
      ResizeTextArea(document.encoder.text);
   }
   
   if (keyunchanged *
       textunchanged *
       IsUnchanged(document.encoder.N) *
       IsUnchanged(document.encoder.encdec))
   {
      window.setTimeout('upd()', 100);
      return;
   }
       
   e = document.getElementById('caesar');
   
   if (document.encoder.text.value == '')
   {
      e.innerHTML = '"Ketikan yang ingin di enkripsi / deskripsi, maka akan muncul hasilnya disini"';
   }
   else
   {
      e.innerHTML = SwapSpaces(HTMLEscape(Caesar(document.encoder.encdec.value * 1,
         document.encoder.text.value, document.encoder.N.value * 1,
	 document.encoder.key.value)));
   }

   window.setTimeout('upd()', 100);
}

function insert_alphabet()
{
   document.encoder.text.value = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
   upd();
}
	
function ZapSpaces()
{
   var i, s = "", t;
   
   t = document.encoder.text.value;
   for (i = 0; i < t.length; i ++)
   {
      if (t.charAt(i) != ' ')
      {
         s += t.charAt(i);
      }
   }
   document.encoder.text.value = s;
   upd();
}

window.setTimeout('start_update()', 100);

// --></script>

</head>
	
<body>
	<!-- ui-kit -->
		<div class="ui-kit">
			<div class="container">
				<h1><i class="glyphicon glyphicon-ice-lolly" aria-hidden="true"></i>metode<span>monoalphabetic</span></h1>
                                
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
							<img src="images/3.png" alt=" " />
						</div>
						<div class="bird-text-grid-right">
							<h2>monoalphabetic<a>Kode ini juga termasuk pengembangan dari caesar cipher, yaitu menggunakan pergeseran tertentu. Namun yang berbeda pada kode ini yaitu pergeserannya menggunakan kata kunci yang telah ditentukan.</a></h2>
                        </div>
                    <div class="clearfix"> </div>
                </div>
            </div>     
                
            <div class="ui-kit-grids">
                 
                <div class="timothy-and-icons">
                <div class="card">
							<div class="body">
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane fade in active" id="home">
										<b>Text</b><br><br>
												<div class="row clearfix">
													<div class="col-sm-12" id="atbash">
<form name="encoder" method=post action="#" onsubmit="return false;">
<p>Pilih mode : <select name="encdec">
   <option value="1">Enkripsi
   <option value="-1">Dekripsi
</select></p><br>
<div style="display:none">
<P>  
<select name="N">
</select>
</p>
</div>
<p>
<div class="form-group">
<div class="form-line" >
<input class="form-control no-resize" type="text" name="key" size="40" value="" placeholder="Masukan kata kunci...">
</div>
</div></p>
<p>Alphabet : </p>
<br>
<p style="font-family: 'consolas' ; font-size: 30px"> ABCDEFGHIJKLMNOPQRSTUVWXYZ</p>
<p style="font-family: 'consolas' ; font-size: 33px"><code><span id='alphabet'></span></code></p>
<br>
<p><div class="form-group">
                                        <div class="form-line">
                                            <textarea name="text" rows="4" class="form-control no-resize" placeholder="Masukan Text..."></textarea>
                                        </div>
                                    </div></p>
</form>
<table border="0" cellpadding="0" cellspacing="0" class="r_box" align="center" style="margin-top: 8px; margin-bottom: 8px;"><tr><td class="r_box"><span id='caesar'></span>
</td></tr></table>
													</div>
												</div>
									</div>
								</div>
							</div>
						</div>	
                    <div class="clearfix"> </div>
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
