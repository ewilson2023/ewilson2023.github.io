

// ------------- YOUR AGE IN DAYS
function compute_days(){
	// get_dob() defined in 2-calculator_utils.js; returns date from input
    const dob = new Date(get_dob());
	const today = new Date();
	const ageInMSecs = today - dob;
	
	// get days by converting miliseconds to seconds -> minutes -> days
    const days = Math.floor(ageInMSecs / 1000 / 60 / 60 / 24);
	
 	if (days < 0){
		write_answer_days("You were not born on " + dob + ".");
	} else if (days == 0) {
		write_answer_days("Happy birthday!");
	} else if (days == 1) {
		write_answer_days("You were born 1 day ago.");
	} else {
		write_answer_days("You were born " + days + " days ago.");
	}
}

// -------------CIRCLE
function compute_circle(){
	// get_screen_dims() defined in 2-calculator_utils.js; returns screen dimensions
    const screen = get_screen_dims();
	const w = screen.width;
	const h = screen.height;
	const pi = 3.14159;
    
	// A = πr²
	const area = w / 2 * pi;

    write_answer_circle("Your screen is "
		+ w + " x " + h + ". <br>" 
		+ "The largest circle that could within it has an area of "
		+ area.toFixed(2) + "px<sup>2</sup>.");
}


// ------------- PALINDROME
function check_palindrome(){
    const text_input = String(get_palindrome());
  /*debug*/ console.log(text_input);
	let n = text_input.length;
	  /*debug*/ console.log("n = " + n);
	let text = [];
	  /*debug*/ console.log("let text = new Array(text_input.length)");
	  /*debug*/ console.log("\t"+text);
	let isPalindrome = true;

	  /*debug*/ console.log("\ntext_input loop:");
	// ignore all characters but letters and numbers
	for (let i = 0; i < n; i++) {
		let c = text_input.toUpperCase().charCodeAt(i);
		// if char is alphanumeric (code 47-58 or 64-91)
		if ((c > 47 && c < 58) || (c > 64 && c < 91)) {
			text.push(text_input.charAt(i).toUpperCase());
			  /*debug*/ console.log("\ttext.push("+text_input.charAt(i)+")");
		} else { //debug
			  /*debug*/ console.log("\tskipping '"+ text_input.charAt(i)+"'");
		}
	}
	n = text.length;
	  /*debug*/ console.log("loop over.");
	  /*debug*/ console.log("n = " + n);
	  /*debug*/ console.log("text = " + text);
	
	  /*debug*/ console.log("palindrome check for text[i]:");
	for (let i = 0; i < n; i++) {
		if (text[i] == text[n-1-i]) {
			  /*debug*/ console.log("\t"+text[i]+"=="+text[n-1-i]+": TRUE");
			i++;
		} else {
			  /*debug*/ console.log("\t"+text[i]+"=="+text[n-1-i]+": FALSE");
			isPalindrome = false;
			break;
		}
	}
	
	if (isPalindrome == true) {
		  /*debug*/ console.log("!!!RESULT: \""+text_input+"\" is a palindrome");
		write_answer_palindrome("\""+text_input+"\" is a palindrome.");
	} else {
		  /*debug*/ console.log("!!!RESULT: \""+text_input+"\" is not a palindrome");
		write_answer_palindrome("\""+text_input+"\" is not a palindrome.");
	}
}


// ------------- FIBONACCI
function create_fibo(){    
    // Add code here to get the wanted length. 
    // Hint: check my other codes in javascript_utils.js
    let n = get_fibo();
	
	console.log("typeof n: "+typeof n);
	// error handling
	if (n < 0 || n == null) {
		write_answer_fibo("No!");
	}	
	if (!(n > 47 && n < 58)) {
		write_answer_fibo("Something has gone horribly wrong!");
	}
	const fib = calculate_fibo(n);
	switch (n) {
		case "1": n = "1st"; break;
		case "2": n = "2nd"; break;
		case "3": n = "3rd"; break;
		default: n += "th";
	}
	write_answer_fibo("The " + n + " fibonacci number is " + fib + ".");
}
// helper function, recursive
function calculate_fibo(n){
	if (n == 0) {
		return 0;
	} else if (n == 1) {
		return 1;
	} else {
		return calculate_fibo(n-1) + calculate_fibo(n-2);
	}
}




