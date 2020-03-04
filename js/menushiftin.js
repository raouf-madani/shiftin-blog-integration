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