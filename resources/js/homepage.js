const buttonMobile = document.querySelector('.mobile-btn');
const navigation = document.querySelector('nav');

buttonMobile.addEventListener('click', function (event) {
	this.classList.toggle('active');
	navigation.classList.toggle('active');
});

document.querySelectorAll("a[href*='get-started']").forEach(function (anchor) {
	anchor.classList.add('button-primary');
	anchor.addEventListener('click', (event) => {
		alert('Membuka popup');
	});
});

document.querySelectorAll('li.has-child').forEach(function (anchor) {
	anchor.querySelector('.caret').addEventListener('click', (event) => {
		anchor.classList.toggle('active');
	});
});

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
	showSlides((slideIndex += n));
}

function showSlides(n) {
	try {
		var i;
		var slides = document.getElementsByClassName('slide');
		if (n > slides.length) {
			slideIndex = 1;
		}
		if (n < 1) {
			slideIndex = slides.length;
		}
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = 'none';
		}
		slides[slideIndex - 1].style.display = 'block';
	} catch (e) {}
}
