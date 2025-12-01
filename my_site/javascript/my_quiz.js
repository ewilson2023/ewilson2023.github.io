let MAX = 4;

/**
 * Limit the number of options checked
 */
document.addEventListener('DOMContentLoaded', function () {
	const max = MAX;
	const checkboxes = document.querySelectorAll('input[name="emotions[]"]');
	
	// for every checkbox...
	checkboxes.forEach(	function (checkbox) {
			// if its status is changed...
			checkbox.addEventListener('change', 
				function () {
					// checked= NodeList of current checked boxes
					const checked = document.querySelectorAll('input[name="emotions[]"]:checked');
						
					// if too many are checked, keep the one just clicked unchecked
					if (checked.length > max) {
						this.checked = false;
					}
				}
			);
		});
});

/**
 * Randomize options checked
 */
function random_choices(){
	// checkboxes = all possible options
	const checkboxes = document.querySelectorAll('input[name="emotions[]"]');
	// select no more than this
	const max = Math.min(MAX, 2 + Math.floor(Math.random() * 2.8 ));

	// reset checkboxes
	const checked = document.querySelectorAll('input[name="emotions[]"]:checked');
	checked.forEach(checkbox => {
		checkbox.checked = false;
	});


	let randomBoxs = [max];
	// select random boxes
	for (let i = 0; i < max; i++) {
		// adapted from - https://stackoverflow.com/questions/4550505
		randomBoxs.push(checkboxes[Math.floor(Math.random() * checkboxes.length)]);

	}
	randomBoxs.forEach(checkbox => {
		checkbox.checked = true;
	});

}
