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