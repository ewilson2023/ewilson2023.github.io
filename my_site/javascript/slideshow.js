/* 
 * Javacript for the slideshow on the main page
 */

// ------------- WHEN PAGE LOADS
let current_slide = 0;
let slides = document.getElementsByClassName("slideshow_img"); 
let n = slides.length;
showSlide(current_slide);


// ------------- SLIDESHOW FUNCTIONS

/*
7. Add the code for showSlide. It should:
	a. Get all the elements containing your images. They all have the class "slideshow_img". The resulting variable is an array of DOM elements. Let’s call it slides.
	b. Loop on the elements. For each element, you may choose which to set :
		slides[i].style.display = "none"  // hide it
		slides[i].style.display = "block" // show it
*/
// j is the index of the current slide
function showSlide(j) {
	let i = 0;
	while (i < n) {
		if (i == j) slides[i].style.display = "block"; // show it
		else slides[i].style.display = "none";  // hide it
		i++;
	}
}
function previous(){
	current_slide--;
	if (current_slide < 0)
		current_slide = n - 1;
	showSlide(current_slide);
}

function next() {
	current_slide++;
	if (current_slide >= n)
		current_slide = 0;
	showSlide(current_slide);
}

