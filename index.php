<?php 
// Ceci est la page ou je fais tout le design.

//Set sessie voor flood optie
session_start();
//include('connect_text.php');
$dbhost = 'localhost';
$dbname = 'chefviola_be';
$dbuser = 'chefviola_be';
$dbpasswd = 'AHFCeYPm';
 mysql_connect($dbhost,$dbuser,$dbpasswd);
 mysql_select_db($dbname);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chef Viola</title>
<link rel="stylesheet" type="text/css" href="screen.css" />
</head>

<body>
	<div id="container">
    	<div id="header">
        	<div id="logo"><img src="images/logo.png" alt="logo Cuisine du futur" title="logo Cuisine du futur" /></div>
            
            <div id="slideshow">
			<script type="text/javascript">
            
            /***********************************************
            * -Conveyor belt slideshow script © Dynamic Drive DHTML code library (www.dynamicdrive.com)
            * This notice MUST stay intact for legal use
            * Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
            ***********************************************/
            
            
            //Specify the slider's width (in pixels)
            var sliderwidth="703px"
            //Specify the slider's height
            var sliderheight="100px"
            //Specify the slider's slide speed (larger is faster 1-10)
            var slidespeed=3
            //configure background color:
            slidebgcolor="#000000"
            
            //Specify the slider's images
            var leftrightslide=new Array()
            var finalslide=''
            leftrightslide[0]='<img src="fotos/slideshow/klein/DSC02994.jpg">'
            leftrightslide[1]='<img src="fotos/slideshow/klein/DSC03700.jpg">'
            leftrightslide[2]='<img src="fotos/slideshow/klein/DSC04044.jpg">'
            leftrightslide[3]='<img src="fotos/slideshow/klein/DSC04743.jpg">'
            leftrightslide[4]='<img src="fotos/slideshow/klein/DSC04778.jpg">'
			leftrightslide[5]='<img src="fotos/slideshow/klein/DSC05252.jpg">'
			leftrightslide[6]='<img src="fotos/slideshow/klein/DSC05317.jpg">'
            
            //Specify gap between each image (use HTML):
            var imagegap=" "
            
            //Specify pixels gap between each slideshow rotation (use integer):
            var slideshowgap= 5
            
            
            ////NO NEED TO EDIT BELOW THIS LINE////////////
            
            var copyspeed=slidespeed
            leftrightslide='<nobr>'+leftrightslide.join(imagegap)+'</nobr>'
            var iedom=document.all||document.getElementById
            if (iedom)
            document.write('<span id="temp" style="visibility:hidden;position:absolute;top:-100px;left:-9000px">'+leftrightslide+'</span>')
            var actualwidth=''
            var cross_slide, ns_slide
            
            function fillup(){
            if (iedom){
            cross_slide=document.getElementById? document.getElementById("test2") : document.all.test2
            cross_slide2=document.getElementById? document.getElementById("test3") : document.all.test3
            cross_slide.innerHTML=cross_slide2.innerHTML=leftrightslide
            actualwidth=document.all? cross_slide.offsetWidth : document.getElementById("temp").offsetWidth
            cross_slide2.style.left=actualwidth+slideshowgap+"px"
            }
            else if (document.layers){
            ns_slide=document.ns_slidemenu.document.ns_slidemenu2
            ns_slide2=document.ns_slidemenu.document.ns_slidemenu3
            ns_slide.document.write(leftrightslide)
            ns_slide.document.close()
            actualwidth=ns_slide.document.width
            ns_slide2.left=actualwidth+slideshowgap
            ns_slide2.document.write(leftrightslide)
            ns_slide2.document.close()
            }
            lefttime=setInterval("slideleft()",30)
            }
            window.onload=fillup
            
            function slideleft(){
            if (iedom){
            if (parseInt(cross_slide.style.left)>(actualwidth*(-1)+8))
            cross_slide.style.left=parseInt(cross_slide.style.left)-copyspeed+"px"
            else
            cross_slide.style.left=parseInt(cross_slide2.style.left)+actualwidth+slideshowgap+"px"
            
            if (parseInt(cross_slide2.style.left)>(actualwidth*(-1)+8))
            cross_slide2.style.left=parseInt(cross_slide2.style.left)-copyspeed+"px"
            else
            cross_slide2.style.left=parseInt(cross_slide.style.left)+actualwidth+slideshowgap+"px"
            
            }
            else if (document.layers){
            if (ns_slide.left>(actualwidth*(-1)+8))
            ns_slide.left-=copyspeed
            else
            ns_slide.left=ns_slide2.left+actualwidth+slideshowgap
            
            if (ns_slide2.left>(actualwidth*(-1)+8))
            ns_slide2.left-=copyspeed
            else
            ns_slide2.left=ns_slide.left+actualwidth+slideshowgap
            }
            }
            
            
            if (iedom||document.layers){
            with (document){
            document.write('<table border="0" cellspacing="0" cellpadding="0"><td>')
            if (iedom){
            write('<div style="position:relative;width:'+sliderwidth+';height:'+sliderheight+';overflow:hidden">')
            write('<div style="position:absolute;width:'+sliderwidth+';height:'+sliderheight+';background-color:'+slidebgcolor+'" onMouseover="copyspeed=slidespeed" onMouseout="copyspeed=slidespeed">')
            write('<div id="test2" style="position:absolute;left:0px;top:0px"></div>')
            write('<div id="test3" style="position:absolute;left:-1000px;top:0px"></div>')
            write('</div></div>')
            }
            else if (document.layers){
            write('<ilayer width='+sliderwidth+' height='+sliderheight+' name="ns_slidemenu" bgColor='+slidebgcolor+'>')
            write('<layer name="ns_slidemenu2" left=0 top=0 onMouseover="copyspeed=0" onMouseout="copyspeed=slidespeed"></layer>')
            write('<layer name="ns_slidemenu3" left=0 top=0 onMouseover="copyspeed=0" onMouseout="copyspeed=slidespeed"></layer>')
            write('</ilayer>')
            }
            document.write('</td></table>')
            }
            }
            </script>
	        </div>
        </div>
        
        <div id="menu">
        	<?php
				$lang = $_GET["lang"];
				if($lang == 'nl') 
				{
					$query = "SELECT * FROM chefviola_menu";
					$result = mysql_query($query) or die (mysql_error());
					while($row = mysql_fetch_array($result))
					{
						 $link = $row['menu_nl'];
						 $link = str_replace('echo "', "", $link);
						 $link = str_replace('";', "", $link);
						 echo $link;
					}
				}
				elseif($lang == 'fr')
				{
					$query = "SELECT * FROM chefviola_menu";
					$result = mysql_query($query) or die (mysql_error());
					while($row = mysql_fetch_array($result))
					{
						 $link = $row['menu_fr'];
						 $link = str_replace('echo "', "", $link);
						 $link = str_replace('";', "", $link);
						 echo $link;

					}
				} 
			?>
        </div>
        <div id="lang">
        	<?php 
				$lang = $_GET["lang"];
				if($lang == 'nl'){
					echo "<a href=" . str_replace('nl','fr',$_SERVER['REQUEST_URI']) . ">FR</a>";
				}
				elseif($lang =='fr'){
					echo "<a href=" . str_replace('fr','nl',$_SERVER['REQUEST_URI']) . ">NL</a>";
				}
			?>
        </div>
        <div id="content">
        	<div id="gauche">
				<object width="464" height="348" type="application/x-shockwave-flash" data="http://iloapp.chefviola.be/gallery/swf/embedFlashGallery.swf?albumId=0&galleryLocation=albumphotos&domainName=chefviola.be" name ="embedFlashGallery"><param name="movie" value="http://iloapp.chefviola.be/gallery/swf/embedFlashGallery.swf?albumId=0&galleryLocation=albumphotos&domainName=chefviola.be"/><param name="quality" value="high" /><param name="quality" value="high" /><param name="bgcolor" value="#000000" /><param name="allowScriptAccess" value="always" /><param name="allowFullScreen" value="true"/><a href="http://albumphotos.chefviola.be/#0">http://albumphotos.chefviola.be/#0</a></object>
            </div>
            <div id="droite">
            	<p>Klik op de pijl om de foto-gallerij te starten.</p>
                <p>Om de foto's op volledig scherm te zien, klikt u op het vierkant links-onderaan.</p>
                <p>U kan door de foto's navigeren aan de hand van de pijltjes of de gallerij automatisch laten verspringen.</p>
            </div>
        </div>
        <div id="domicile">
       		<?php 
				$lang = $_GET["lang"];
				if($lang == 'nl'){
					echo "<a href=\"accueil.php?lang=nl&p=domicile\" class=\"domicile\">Giuseppe Viola bij u thuis!</a>";
				}
				elseif($lang =='fr'){
					echo "<a href=\"accueil.php?lang=fr&p=domicile\" class=\"domicile\">Giuseppe Viola chez vous!</a>";
				}
			?>
        </div>
    </div>
</body>
</html>