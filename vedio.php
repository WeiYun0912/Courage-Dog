<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/villain.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="shortcut icon" href="img/Favicon.ico">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<meta charset="utf-8">
	<title>Courage the Cowardly Dog</title>
</head>
<body>
	<div class="bgImg">
		<header>
			<div class="container">
				<div class="BigTitle">
					<a href="index.php"><img src="img/couragelogo.gif"></a>
				</div>
			</div>
		</header>
		<div class="container">
			<div class="slider">
				<div class="slide current">
				</div>
				<div class="slide">
				</div>
				<div class="slide">
				</div>
				<div class="slide">
				</div>
				<div class="slide">
				</div>
				<div class="slide">
				</div>
			</div>
			<div class="buttons">
				<button id="prev"><i class="fas fa-arrow-left"></i></button>
				<button id="next"><i class="fas fa-arrow-right"></i></button>
			</div>
		</div>
		
		<div class="container">
			<hr class="white-line">
		</div>

		<div class="container">
			<div class="videosize">
				<h1 class="white-text">餡餅王</h1>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/fCxaeawF27g" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

				<hr class="white-line">
				<h1 class="white-text">雪人的反擊</h1>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/WQvSvhxj5Eg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				
				<hr class="white-line">
				<h1 class="white-text">經典月亮大頭</h1>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/EsCOWDzm1xU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				
				<hr class="white-line">
				<h1 class="white-text">發... 神經</h1>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/KDNKt0gkMCM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

			</div>
		</div>

	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script type="text/javascript">
		const slides = document.querySelectorAll(".slide");
		const next = document.querySelector("#next");
		const prev = document.querySelector("#prev");
		const auto = false;
		const intervalTime = 5000;
		let slideInterval;

		const nextSlide = () => {
	//Get current class
	const current = document.querySelector(".current");
	//Remove current class
	current.classList.remove("current");
	//Check for next slide
	if(current.nextElementSibling){
		//Add current to next sibling
		current.nextElementSibling.classList.add("current");
	}else{
		//Add current to start
		slides[0].classList.add("current");
	}

	setTimeout(() => current.classList.remove("current"));
}

const prevSlide = () => {
	//Get current class
	const current = document.querySelector(".current");
	//Remove current class
	current.classList.remove("current");
	//Check for next slide
	if(current.previousElementSibling){
		//Add current to next sibling
		current.previousElementSibling.classList.add("current");
	}else{
		//Add current to lasttt
		slides[slides.length-1].classList.add("current");
	}

	setTimeout(() => current.classList.remove("current"));
}

next.addEventListener('click',e => {
	nextSlide();
	if(auto){
		clearInterval(slideInterval);
		slideInterval = setInterval(nextSlide,intervalTime);
	}
});

prev.addEventListener('click',e => {
	prevSlide();
});

//Auto slide

if(auto){
	//Run next slide at interval time
	
}
</script>
</body>
</html>