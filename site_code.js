//form code
function openForm() {
	document.getElementById("myForm").style.display = "block";
	}

function closeForm() {
	document.getElementById("myForm").style.display = "none";
	}

	
//slide show js
	var slideIndex = 1;
	showSlides(slideIndex);

function plusSlides(n) {
			showSlides(slideIndex += n);
		}

function currentSlide(n) {
			showSlides(slideIndex = n);
		}

function showSlides(n) {
	var i;
	var slides = document.getElementsByClassName("mySlides");
	var dots = document.getElementsByClassName("picGal");
	var captionText = document.getElementById("caption");
	if (n > slides.length) {slideIndex = 1}
	if (n < 1) {slideIndex = slides.length}
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}
	for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	}
	slides[slideIndex-1].style.display = "block";
	dots[slideIndex-1].className += " active";
	captionText.innerHTML = dots[slideIndex-1].alt;
}
		
//email checker

function ValidateEmail(inputText)
{
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(inputText.value.match(mailformat))
		{
			document.myForm.email.focus();
			return true;
		}
	else
		{
			alert("You have entered an invalid email address!");
			document.myForm.email.focus();
			return false;
		}
}