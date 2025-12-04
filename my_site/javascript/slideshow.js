/**
 * Javacript for the slideshow on the main page
 */

/**
 * WHEN PAGE LOADS
 */
document.addEventListener('DOMContentLoaded', function () {
	let current_slide = 0;
	let slides = document.getElementsByClassName("slideshow_img"); 
	let n = slides.length;
	showSlide(current_slide);
});


// ------------- SLIDESHOW FUNCTIONS

/** 
 * 	a. Get all the elements containing your images. They all have 
 * 	the class "slideshow_img". The resulting variable is an array 
 *  of DOM elements called 'slides'.
 * 	b. Loop on the elements.
*/
function showSlide(j) {
	// j is the index of the current slide
	let i = 0;
	while (i < n) {
		if (i == j) slides[i].style.display = "block"; // show it
		else slides[i].style.display = "none";  // hide it
		i++;
	}
};

/**
 * Go to previous slide
 */
document.addEventListener('DOMContentLoaded', function previous(){
	current_slide--;
	if (current_slide < 0)
		current_slide = n - 1;
	showSlide(current_slide);
});

/**
 * Go to next slide
 */
document.addEventListener('DOMContentLoaded', function next() {
	current_slide++;
	if (current_slide >= n)
		current_slide = 0;
	showSlide(current_slide);
});

