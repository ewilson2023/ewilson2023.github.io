/**
 * Supposed to limit the number of options checked
 */
document.addEventListener('DOMContentLoaded', function () {
	const max = 4;
	const checkboxes = document.querySelectorAll('input[name="emotions[]"]');
	
	// for every checkbox...
	checkboxes.forEach(
		function (checkbox) {
			// if its status is changed...
			checkbox.addEventListener('change', 
				function () {
					// tally the currently checked boxes
					const checked = document.querySelectorAll('input[name="emotions[]"]:checked');
						
					// if too many are checked, keep the one just clicked unchecked
					if (checked.length > max) {
						this.checked = false;
					}
				}
			);
		}
	);
});