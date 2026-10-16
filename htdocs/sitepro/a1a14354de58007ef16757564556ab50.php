<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript">
	window._spDefer = {
		queue: [],
		ready: false,
		add: function(fn) {
			if (this.ready) { fn(); }
			else { this.queue.push(fn); }
		},
		done: function() {
			this.ready = true;
			var fns = this.queue;
			this.queue = [];
			for (var i = 0; i < fns.length; i++) { fns[i](); }
		}
	};
	</script>
			<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "News"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? (generateCanonicalUrl($sitemapUrls)."\n") : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "News"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "News"); ?>" />
			
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "News"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "News"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="__wb_curr_url__" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="Site.pro Website builder" />
			<link href="css/common-bundle.css?ts=20261016091627" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a1a14354de58007ef16757564556ab50-bundle.css?ts=20261016091627" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
	<ga-code/>
	<script type="text/javascript">
	window.useTrailingSlashes = true;
	window.disableRightClick = false;
	window.currLang = 'en';
</script>
		
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<![endif]-->

		<script type="text/javascript">
		window._spDefer.add(function() {
<?php $wb_form_send_success = popSessionOrGlobalVar("wb_form_send_success"); ?>
<?php if (($wb_form_send_state = popSessionOrGlobalVar("wb_form_send_state"))) { ?>
	<?php if (($wb_form_popup_mode = popSessionOrGlobalVar("wb_form_popup_mode")) && (isset($wbPopupMode) && $wbPopupMode)) { ?>
		if (window !== window.parent && window.parent.postMessage) {
			var data = {
				event: "wb_contact_form_sent",
				data: {
					state: "<?php echo str_replace('"', '\"', $wb_form_send_state); ?>",
					type: "<?php echo $wb_form_send_success ? "success" : "danger"; ?>"
				}
			};
			window.parent.postMessage(data, "<?php echo str_replace('"', '\"', popSessionOrGlobalVar("wb_target_origin")); ?>");
		}
	<?php $wb_form_send_success = false; $wb_form_send_state = null; $wb_form_popup_mode = false; ?>
	<?php } else { ?>
		wb_show_alert("<?php echo str_replace(array('"', "\r", "\n"), array('\"', "", "<br/>"), $wb_form_send_state); ?>", "<?php echo $wb_form_send_success ? "success" : "danger"; ?>");
	<?php } ?>
<?php } ?>
});    </script>
</head>


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><?php wbspadtopFunc(\SiteModule::getInjectAdsData()); ?><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a1a14354de58007ef16757564556ab50" class="wb_element wb-sticky wb-layout-element" data-plugin="LayoutElement" data-h-align="center" data-v-align="top"><div class="wb_content wb-layout-vertical"><div id="a188dd9c8506028b8058ac44fb44afb2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a18b5caabf7f006b07568d7a9d61a260" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd9c8506031fad56b60a1c0e285a" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h5 class="wb-stl-subtitle" style="text-align: center;">TAHMID GAMER WEB</h5>
</div></div></div><div id="a18b5cabde420043a22b962e77aead5b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div></div></div></div></div><div id="wb_main_a1a14354de58007ef16757564556ab50" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1a143541d1700ba27eb902441cb2a19" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1a143541d17106094791983c68274ec" class="wb_element wb-sticky wb-layout-element" data-plugin="LayoutElement" data-h-align="right" data-v-align="bottom"><div class="wb_content wb-layout-horizontal"><div id="a1a143541d171130c0ed70a7dc8ec15d" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a onclick="window.scrollTo({top: 0, behavior: 'smooth'});" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" height="64" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#0095ff"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div></div></div><div id="a1a143541d1713b0b8d6a1a5cfe5b4c6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1a143541d170119730a44143dc12cee" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1a143541d17029bec2393a833894ec0" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-heading1" style="text-align: center;">I AM A GAMERR!</h1>
</div><div id="a1a143541d17146d782c2eb5543b4da7" class="wb_element" data-plugin="Button"><a class="wb_button" href="https://www.youtube.com/channel/UCm-VQnv8i89VPRVH_8q0qoA" title="YT Channel Tahmid Gaming"><span>SUBSCRIBE!</span></a></div></div></div></div></div></div></div><div id="a1a143541d171508a43daf5b0fefddc3" class="wb_element wb-layout-element" data-plugin="LayoutElement"><a name="home" class="wb_anchor"></a><div class="wb_content wb-layout-vertical"><div id="a1a143541d17034ae25ea915b78a26a2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div></div></div><div id="a1a143541d17200b1743ff29863b2cce" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1a143541d1704e8f4c45b6aa66291b6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1a143541d1705f5e41286f744da40f6" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1a143541d170671514b4cf7b7b44569" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h5 class="wb-stl-subtitle">News.....</h5>
</div><div id="a1a1435682240056cd56cd834d729954" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1a143541d17166af75474ed698b589c" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h5 class="wb-stl-subtitle"><font color="#ffffff">A New SMP in Minecraft! TAHMID SMP. Watch Trailer on @TahmidGaming-official</font></h5>
</div></div></div></div></div></div></div></div></div><div id="a1a143541d1802f89d409ea28c755444" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1a143541d1707f6f75fb1fd703596f7" class="wb_element wb-layout-element" data-plugin="LayoutElement"><a name="About+us" class="wb_anchor"></a><div class="wb_content wb-layout-vertical"><div id="a1a143541d1708db8b76744cb475aa4b" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;"><font color="#000000">Favourites</font></h2>
</div><div id="a1a143541d1717ba3d1c4ead12fa50ec" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1a143541d170942e99ff3095be5cfae" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1a143541d170a7de972bc16fd16bfcc" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/d9ccda85399cafee26956efd15ad23fe_166x182_fit.jpg?ts=1792131388"></div></div></div><div id="a1a143541d17182c40f661833f36f85c" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: left;"><font color="#000000"><span style="font-size: 16px; font-weight: 400; line-height: 20.27px;">Minecraft #1st</span></font></h3>
</div></div></div><div id="a1a143541d17192be41574594b8b99ec" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1a143541d170b0fcead2972f59bb69c" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/dbbd377efd1468c4b1d2d75152ecfed7_166x154_fit.png?ts=1792131388"></div></div></div><div id="a1a143541d171a5dd12a34c9294c348e" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: left;"><font color="#000000"><span style="font-size: 16px; font-weight: 400; line-height: 20.27px;">Roblox #2nd</span></font></h3>
</div></div></div><div id="a1a143541d17216a33d86e73622c8f3f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1a143541d170c7410ba396d1dfc510b" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><img loading="lazy" alt="" src="gallery_gen/f7ea50148db4971fbc8cc364ce8aab96_166x166_fit.png?ts=1792131388"></div></div></div><div id="a1a143541d171ba819ce04ce04452ac1" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h3 class="wb-stl-heading3" style="text-align: left;"><font color="#000000"><span style="font-size: 16px; font-weight: 400; line-height: 20.27px;">EA  FC MOBILE</span></font></h3>
</div></div></div></div></div></div></div></div></div><div id="a1a143541d1803aa900ef1e521288be8" class="wb_element wb-layout-element" data-plugin="LayoutElement"><a name="design" class="wb_anchor"></a><div class="wb_content wb-layout-vertical"><div id="a1a143541d170ddeddd5cb476514026f" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a1a143541d170ec2810c7d9d7b0cd3ad" class="wb_element wb-prevent-layout-click wb_gallery" data-plugin="Gallery"><script type="text/javascript">
			window._spDefer.add(function() {
				$(function() {
					(function(GalleryLib) {
						var el = document.getElementById("a1a143541d170ec2810c7d9d7b0cd3ad");
						var lib = new GalleryLib({"id":"a1a143541d170ec2810c7d9d7b0cd3ad","height":"auto","type":"thumbs","trackResize":true,"interval":10,"speed":400,"images":[{"thumb":"gallery_gen\/e419201e6f75c993e87cd9a805e8e041_490x735.43828264758_fill.png","src":"gallery_gen\/7df306834f4e42757852e888e07bec60_fit.png?ts=1792131388","width":559,"height":839,"title":"","link":null,"description":"","address":""},{"thumb":"gallery_gen\/70720f0c83f0251d40913324fb06cc43_600x600_fill.jpg","src":"gallery_gen\/87c636847ba653bb2d042565e89a74a6_fit.jpg?ts=1792131388","width":1024,"height":1024,"title":"","link":null,"description":"","address":""}],"border":{"border":"5px none #00008c"},"padding":0,"thumbWidth":290,"thumbHeight":300,"thumbAlign":"center","thumbPadding":10,"thumbAnim":"","thumbShadow":"","imageCover":false,"disablePopup":false,"controlsArrow":"chevron","controlsArrowSize":14,"controlsArrowStyle":{"active":{"color":"#FFFFFF","shadow":{"angle":135,"blur":1,"color":"#000000","css":{"text-shadow":"0px 0px 1px #000000"},"distance":0,"forText":true,"size":0}},"hover":{"color":"#DDDDDD","shadow":{"angle":135,"blur":1,"color":"#222222","css":{"text-shadow":"0px 0px 1px #222222"},"distance":0,"forText":true,"size":0}},"normal":{"color":"#FFFFFF","shadow":{"angle":135,"blur":1,"color":"#000000","css":{"text-shadow":"0px 0px 1px #000000"},"distance":0,"forText":true,"size":0}}},"slideOpacity":100,"showPictureCaption":"always","captionIncludeDescription":false,"captionPosition":"center bottom","mapTypeId":"roadmap","markerIconTypeId":"thumbs","zoom":2,"mapCenter":{"latLng":{"lat":48.458363666994,"lng":4.5703249052167},"text":"48.4583636669942, 4.570324905216694"},"key":"AIzaSyBnzlmalQ8q-BUqPCwcL3GECWWMRlt971o","theme":"default","color":"#eeeeee","showSatellite":true,"showZoom":true,"showStreetView":true,"showFullscreen":true,"allowDragging":true,"showRoads":true,"showLandmarks":true,"showLabels":true,"locale":"en_US","pauseOnHover":false});
						lib.appendTo(el);
					})(window.wbmodGalleryLib);
				});
			});
		</script></div><div id="a1a143541d171cfa72235588a312e65e" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;"><font color="#ffffff">SUBSCRIBE TO ME AND BECOME A PRO</font></h2>
</div><div id="a1a143541d1800c11e1c74450f589b7e" class="wb_element" data-plugin="Button"><a class="wb_button" href="https://www.youtube.com/channel/UCm-VQnv8i89VPRVH_8q0qoA" title="Official YT Channel TH gaming"><span>SUBSCRIBE HERE!</span></a></div></div></div></div></div><div id="a1a143541d18041de218f89331d90073" class="wb_element wb-layout-element" data-plugin="LayoutElement"><a name="contact" class="wb_anchor"></a><div class="wb_content wb-layout-vertical"><div id="a1a143541d170f02d103958c541c69df" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;"><span style="color:rgba(255,255,255,1);">Contacts</span></h2>
</div><div id="a1a143541d171d535c072a3c81b911b8" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a1a143541d171edb7a6f231eb4416f05" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: center;"><span style="color:rgba(255,255,255,1);"><strong>Email:</strong></span></p>

<p class="wb-stl-normal" style="text-align: center;"><font color="#ffffff">mishquatujunnun2015@gmail.com</font></p>

<p class="wb-stl-normal" style="text-align: center;"> </p>

<p class="wb-stl-normal" style="text-align: center;"><font color="#ffffff"><strong>Discord:</strong></font></p>

<p class="wb-stl-normal" style="text-align: center;"><font color="#ffffff">@tahmidgamin026</font></p>
</div></div></div></div></div></div></div><div id="wb_footer_a1a14354de58007ef16757564556ab50" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd9c850724eb7a80914baa8b5796" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd9c85072560c5f6f94dfdcd5c12" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd9c850726d02b713b354fe200f6" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-footer">© 2026 <a href="http://tahmidgamerweb.gamer.gd">tahmidgamerweb.gamer.gd</a></p></div><div id="a188dd9c8507272a1575b9a15b0e58f8" class="wb_element wb-prevent-layout-click" data-plugin="LinkExchangeBadge"><div class="wb-stl-footer">I <i class="icon-wb-logo icon-wb-logo-izyro"></i><a href="https://site.pro/" target="_blank" title="Site.pro Website builder">Site.pro</a></div></div></div></div><div id="a188dd9c850728b865c062d044d7f2cb" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"></div></div></div></div><div id="wb_footer_c" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script>window._spDefer.add(function() {
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#footer, #footer .wb_cont_inner");
					footer.css({height: ""});
				}
			});
			});</script></div></div></div></div><script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
	<script src="js/common-bundle.js?ts=20261016091627" type="text/javascript" defer></script>
	<script src="js/a1a14354de58007ef16757564556ab50-bundle.js?ts=20261016091627" type="text/javascript" defer></script>{{hr_out}}
<div class="wb_pswp" tabindex="-1" role="dialog" aria-hidden="true">
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        window._spDefer.done();
    });
</script>
</body>
</html>
