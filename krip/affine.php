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

<script language="JavaScript" src="bootstrap/js/affine.js"></script>
	<script language="JavaScript" src="bootstrap/js/util.js"></script>
	<script language="JavaScript">
function start_update()
{
   if (! document.getElementById)
   {
      alert('Sorry, you need a newer browser.');
      return;
   }

   if ((! document.Affine_Loaded) || (! document.Util_Loaded) ||
       (! document.getElementById('affine')))
   {
      window.setTimeout('start_update()', 100);
      return;
   }
   upd();
}


function upd()
{
   if (IsUnchanged(document.encoder.a) * IsUnchanged(document.encoder.b) *
       IsUnchanged(document.encoder.encdec) *
       IsUnchanged(document.encoder.text))
   {
      window.setTimeout('upd()', 100);
      return;
   }
   
   var e = document.getElementById('affine');

   if (document.encoder.text.value == '')
   {
      e.innerHTML = 'Isi, dan lihat hasilnya disini!';
   }
   else if (! IsCoprime(document.encoder.a.value * 1, 26)) {
      e.innerHTML = 'The value for "a" is not coprime to 26.  Pick another.';
   }
   else
   {
      e.innerHTML = SwapSpaces(HTMLEscape(Affine(document.encoder.encdec.value * 1,
	 document.encoder.text.value,
         document.encoder.a.value * 1, document.encoder.b.value * 1)));
   }
   
   window.setTimeout('upd()', 100);
}

function a_plus()
{
   var a = document.encoder.a.value;
   if (a < 1)
   {
      a = 1;
   }
   else
   {
      a ++;
      while (! IsCoprime(a, 26))
      {
         a ++;
      }
   }
   document.encoder.a.value = a;
}

function a_minus()
{
   var a = document.encoder.a.value;
   if (a < 2)
   {
      a = 1;
   }
   else
   {
      a --;
      while (! IsCoprime(a, 26))
      {
         a --;
      }
   }
   document.encoder.a.value = a;
}

window.setTimeout('start_update()', 100);

	</script>

</head>
	
<body>
	<!-- ui-kit -->
		<div class="ui-kit">
			<div class="container">
				<h1><i class="glyphicon glyphicon-ice-lolly" aria-hidden="true"></i>metode<span>affine</span></h1>
                                
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
							<h2>affine<a>Algoritma ini memakai sistem subtitusi, setiap unit plaintext diganti dengan satu unit ciphertext.
								Cara kerja Affine Cipher yaitu mengalikan masing-masing nilai plaintext dengan sebuah nilai dan menambahkan dengan sebuah pergeseran. 
								Algoritma ini dapat dipresentasikan dengan fungsi seperti Persamaan C= m.P+b(mod n).</a></h2>
                        </div>
                    <div class="clearfix"> </div>
                </div>
            </div>     
                
            <div class="ui-kit-grids">
                 
                <div class="timothy-and-icons">
                <section class="content">
				<div class="box box-solid">
				
					<div class="box-header with-border">
					  <i class="fa fa-arrow-circle-right"></i>
						<h3 class="box-title">Program Affine Cipher</h3>
					</div>
					
					<div class="box-body">
						<form name="encoder" method=post action="#" onsubmit="return false;">
							<p>
								<select name="encdec">
								<option value="1">Enkripsi
								<option value="-1">Dekripsi
								</select>
							</p>
							<p>
								<b>a:  </b><input name="a" type="text" size="3" value="1"> -
								<input type="button" name="plus" value="+" onclick="a_plus()">
								<input type="button" name="minus" value="-" onclick="a_minus()">
							</p>
							<p>
							<b>b:  </b><select name="b">
							<option value=0>0</option>
							<option value=1>1</option>
							<option value=2>2</option>
							<option value=3>3</option>
							<option value=4>4</option>
							<option value=5>5</option>
							<option value=6>6</option>
							<option value=7>7</option>
							<option value=8>8</option>
							<option value=9>9</option>
							<option value=10>10</option>
							<option value=11>11</option>
							<option value=12>12</option>
							<option value=13>13</option>
							<option value=14>14</option>
							<option value=15>15</option>
							<option value=16>16</option>
							<option value=17>17</option>
							<option value=18>18</option>
							<option value=19>19</option>
							<option value=20>20</option>
							<option value=21>21</option>
							<option value=22>22</option>
							<option value=23>23</option>
							<option value=24>24</option>
							<option value=25>25</option>
							</select>
							</p>
							<p>
							<textarea name="text" rows="5" cols="80" placeholder="Masukan Text..."></textarea>
							</p>
						</form>
							<p>Hasil :</p>
							<table border=0 cellpadding=0 cellspacing=0 class="r_box" align="center" style="margin-top: 8px; margin-bottom: 8px;"><tr><td class="r_box"><span id='affine'></span>
							</td></tr></table>
					</div>
					
				  </div>
			</section>
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
