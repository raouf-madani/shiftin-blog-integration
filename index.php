<?php get_header(); ?>
	<div class="se-pre-con"><video autoplay loop data-autoplay><source src="images/preloader.webm" type="video/webm" /></video></div>
    <?php include_once('menu.php'); ?>
    <?php
        $pageOK = array('accueil' => 'accueil_p.php',
						'accueil-test' => 'accueil-test_p.php',
						'realisations' => 'work_p.php',
						'realisations/opera-alger-site-web' => 'opera_p.php',
						'realisations/kafaa-to-come-myktc-application-mobile' => 'myktc_p.php',
						'realisations/in-tuition-algerie-site-web' => 'intuition_p.php',
						'realisations/dale-carnegie-marketing-digital' => 'dale-carnegie_p.php',
						'realisations/fomatrap-site-web' => 'fomatrap_p.php',
						'realisations/jeux-africains-jeunesse-jajquest-application-mobile' => 'jaj-quest_p.php',
						'realisations/siphal-site-web-marketing-digital' => 'siphal_p.php',
						'projets' => 'projets_p.php',
						'projets/algeria-web-awards' => 'algeria-web-awards_p.php',
						'projets/centrale-digitale' => 'centrale-digitale_p.php',
						'services' => 'services_p.php',
						'a-propos' => 'lagence_p.php',
						'carriere' => 'carriere_p.php',
						'carriere/developpeur-wordpress' => 'developpeur-wordpress_p.php',
						'carriere/product-manager' => 'product-manager_p.php',
						'carriere/developpeur-react-native' => 'developpeur-react-native_p.php',
						'carriere/chef-de-projet-digital' => 'chef-de-projet-digital_p.php',
						'carriere/developpeur-backend' => 'developpeur-backend_p.php',
						'carriere/candidature-spontanee' => 'candidature-spontanee_p.php',
						'emploi' => 'emploi_p.php',
						'stages' => 'stage_p.php',
						'contact' => 'contact_p.php',
						'carriere/postuler' => 'postuler_p.php',
						'blog' => 'blog_p.php',
						'blog/article-blog' => 'article-blog_p.php',
						'succes' => 'succes_p.php',
						'failed' => 'failed_p.php',
					    'erreur' => 'erreur_p.php'
						);


   		if ( (isset($_GET['page'])) && (isset($pageOK[$_GET['page']])) ) {
    		include_once($pageOK[$_GET['page']]);  }
   		else {
			if (!isset($_GET['page']))
				include_once("accueil_p.php");
			else
   				include_once("erreur_p.php");
		}
	?>


	<noscript id="deferred-styles">
	<!--link href="styles/sass/ie.css" rel="stylesheet" type="text/css" />
	<link href="styles/sass/print.css" rel="stylesheet" type="text/css" /-->
	<link href="styles/sass/screen.css" rel="stylesheet" type="text/css" />
	<link href="styles/sass/styles.css" rel="stylesheet" type="text/css" />
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="css/fullpage.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery.custom-select.css" />
	<link href="styles/sass/mediaqueries.css" rel="stylesheet" type="text/css" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700&display=block" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Space+Mono:400,700&display=block" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merriweather:300i,400,400i,700,700i&display=block" rel="stylesheet">
</noscript>
<script>
	var loadDeferredStyles = function() {
		var addStylesNode = document.getElementById("deferred-styles");
		var replacement = document.createElement("div");
		replacement.innerHTML = addStylesNode.textContent;
		document.body.appendChild(replacement)
		addStylesNode.parentElement.removeChild(addStylesNode);
	};
	var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
		window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
	if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
	else window.addEventListener('load', loadDeferredStyles);
</script>

<script src="js/jquery.min.js"></script>
<script>
$(window).load(function() {
	// Animate loader off screen
	$(".se-pre-con").fadeOut("slow");;
});
</script>
<script type="application/ld+json" >
{
	"@context":"http://schema.org",
	"@type":"Organization",
	"name":"Shift'IN",
	"description": "Nous sommes Shift’IN. Nous transformons vos idées en solutions technologiques sur-mesure pour augmenter la performance de votre entreprise.",
	"url":"https://www.shiftin.co",
	"logo":"https://www.shiftin.co/images/logo_shiftin_black.svg",
	"founder":
	[
		{
			"@type": "Person",
			"name": "Majda Nafissa Rahal"
		},
		{
			"@type": "Person",
			"name": "Chouaib Attoui"
		}
	],
	"foundingDate":"2016",
	"sameAs":
	[
		"https://www.facebook.com/shiftinagency",
		"https://twitter.com/ShiftinAgency",
		"https://www.instagram.com/shiftinagency/",
		"https://www.linkedin.com/company/shiftinagency/",
		"https://www.behance.net/hello689c"
	],
	"address":
	{
		"@type": "PostalAddress",
		"streetAddress": "Villa n° 12, lot Zergoug",
		"addressLocality": "Saïd Hamdine",
		"addressRegion": "Hydra, Alger",
		"postalCode": "16078",
		"addressCountry": "DZA"
	},
	"contactPoint":
	[
		{
			"@type":"ContactPoint",
			"contactType":"customer service",
			"telephone":"+213 21 549 323",
			"areaServed":"Worldwide",
			"availableLanguage":{
                "@type": "Language",
                "name": ["French","English","Arabic"]
        	},
			"email":"hello@shiftin.co"
		}
	]
}
</script>
<script type="application/ld+json">
{
	"@context":"https:\/\/schema.org",
	"@type":"WebSite",
	"@id":"#website",
	"url":"https:\/\/shiftin.co\/",
	"name":"Shift’IN | Agence Digitale, Web et Mobile en Algérie",
	"potentialAction":
	{
		"@type":"SearchAction",
		"target":"https:\/\/shiftin.co\/?s={search_term_string}",
		"query-input":"required name=search_term_string"
	}
}
</script>

<script src="js/jquery.custom-select.js"></script>
<script>
$('.select--default').customSelect({});
$(document).ready(function(){
	$('input[type="file"]').change(function(){
		var filename = $('input[type=file]').val().split('\\').pop();
		$(".label-file").text(filename);
	});
});
</script>

<script src="js/fullpage.min.js"></script>
<script>
$(document).ready(function() {
	$('#fullpage').fullpage({
		//Navigation
		//menu: '#menu',
		//anchors:['firstPage', 'secondPage'],


		//Scrolling
		css3: true,
		scrollingSpeed: 700,
		autoScrolling: true,//
		fitToSection: true,
		fitToSectionDelay: 1000,
		scrollBar: false,
		easing: 'easeInOutCubic',
		easingcss3: 'ease',
		loopBottom: false,
		loopTop: false,
		loopHorizontal: true,
		continuousVertical: false,
		continuousHorizontal: false,
		scrollHorizontally: false,
		interlockedSlides: false,
		dragAndMove: false,//
		offsetSections: false,
		resetSliders: false,
		fadingEffect: false,
		normalScrollElements: '#element1, .element2',
		scrollOverflow: false,
		scrollOverflowReset: false,
		scrollOverflowOptions: null,
		touchSensitivity: 15,
		normalScrollElementTouchThreshold: 5,
		bigSectionsDestination: null,

		//Accessibility
		keyboardScrolling: true,
		animateAnchor: false,//
		recordHistory: false,//

		//Design
		controlArrows: false,//
		verticalCentered: false,//
		parallax: false,
		parallaxOptions: {type: 'reveal', percentage: 62, property: 'translate'},

		//Custom selectors
		sectionSelector: '.section',
		//slideSelector: '.slide',
	});
});
</script>
<script>
$(".menu").click( function () {
	$(".submenu").fadeToggle(200, "linear");
	$(".menu_rubr").fadeOut(200, "linear");
	$(".menu_sear").fadeOut(200, "linear");
	var src = ($(".menu img").attr("src") === "images/menu.png")
			? "images/fermer.svg"
			: "images/menu.png";
	$(".menu img").attr("src", src);
	$(".rubr a img").attr("src", "images/hashtag.svg");
	$(".search a img").attr("src", "images/search.svg");
	if ($(".menu img").attr("src") === "images/fermer.svg")
		$("body").css('overflowY','hidden');
	else
		$("body").css('overflowY','auto');
	return false;
});

$(".rubr a").click( function () {
	$(".menu_rubr").fadeToggle(200, "linear");
	$(".menu_sear").fadeOut(200, "linear");
	var src = ($(".rubr a img").attr("src") == "images/hashtag.svg")
			? "images/fermer2.svg"
			: "images/hashtag.svg";
	$(".rubr a img").attr("src", src);
	$(".search a img").attr("src", "images/search.svg");
	return false;
});

$(".search a").click( function () {
	$(".menu_sear").fadeToggle(200, "linear");
	$(".menu_rubr").fadeOut(200, "linear");
	var src = ($(".search a img").attr("src") === "images/search.svg")
			? "images/fermer2.svg"
			: "images/search.svg";
	$(".search a img").attr("src", src);
	$(".rubr a img").attr("src", "images/hashtag.svg");
	return false;
});
$(".ddd").click( function () {
	$(".menu_rubr").fadeOut(200, "linear");
	$(".menu_sear").fadeOut(200, "linear");
	$(".rubr a img").attr("src", "images/hashtag.svg");
	return false;
});
</script>
<script>
$('.scroll img, .scroll2 img').on('up', function () {
    $(this).animate({marginTop:'5px'}, 300, function(){
        $(this).trigger('down');
    });
});

$('.scroll img, .scroll2 img').on('down', function () {
    $(this).animate({marginTop:'10px'}, 300, function(){
        $(this).trigger('up');
    });
});

$('.scroll img, .scroll2 img').trigger('down');

/*$(document).on('click', '.scroll', function(){
	fullpage_api.moveSectionDown();
	return false;
});*/

</script>

<script>
$(document).ready(function(){
	$('input[type="file"]').change(function(){
		var filename = $('input[type=file]').val().split('\\').pop();
		$(".label-file").text(filename);
	});
});

$(document).ready(function(){
	if ($(".postuler").length > 0) {
		var regexname=/^([a-zA-Z]+[ ]*)$/;
		var regexmail=/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
		var regextel=/^((\+[1-9][0-9]*)?|([0]{1,2}))+([-. ]?[0-9]+){9,}$/;
		$(':input[required]:visible').keyup(function( event ) {
			if (($(this).attr('id') == 'nom') || ($(this).attr('id') == 'prenom')) {
				if (!$(this).val().match(regexname)) {
					error(this);
				}
				else {
					valid(this);
				}
			}
			else if ($(this).attr('id') == 'email') {
				if (!$(this).val().match(regexmail)) {
					error(this);
				}
				else {
					valid(this);
				}
			}
			else if ($(this).attr('id') == 'tel') {
				if (!$(this).val().match(regextel)) {
					error(this);
				}
				else {
					valid(this);
				}
			}
			if (($(".valid").length) != 4) {
				$('#submit').prop('disabled', true);
			}
			else if (($(".valid").length) == 4) {
				$('#submit').prop('disabled', false);
			}
		});
	}
	function valid(a) {
		$(a).css("border-bottom-color","#fff");
		$(a).parent('.groupf').find('label').removeClass('error');
		$(a).parent('.groupf').find('label').addClass('valid');
	}
	function error(a) {
		$(a).css("border-bottom-color","#cf3131");
		$(a).parent('.groupf').find('label').addClass('error');
		$(a).parent('.groupf').find('label').removeClass('valid');
	}
});
</script>

<script src="js/jquery.mousewheel.min.js"></script>

<script>
/////////
const progress = document.querySelector('.progress');
const bar = progress.querySelector('.bar');

window.addEventListener('scroll', () => updateProgressBar() );
window.addEventListener('resize', () => updateProgressBar() );

function updateProgressBar() {
  let scrollSpace = document.getElementById('test').scrollHeight - window.innerHeight;
  let read = window.scrollY / scrollSpace * 100;
  bar.style.height = `${read}%`;
}

updateProgressBar()

const progress2 = document.querySelector('.progress2');
const bar2 = progress2.querySelector('.bar2');

window.addEventListener('scroll', () => updateProgressBar2() );
window.addEventListener('resize', () => updateProgressBar2() );

function updateProgressBar2() {
  let scrollSpace = document.getElementById('test').scrollHeight - window.innerHeight;
  let read = window.scrollY / scrollSpace * 100;
  bar2.style.width = `${read}%`;
}

updateProgressBar2()
</script>

<script src="js/sticky-sidebar.js"></script>
<script src="js/jquery.sticky-sidebar.js"></script>
<script>
$('.reseau').stickySidebar({
    topSpacing: 60,
    bottomSpacing: 60,
	containerSelector: '#test'
});
</script>
<?php get_footer(); ?>
