
/*
help you make sure that we always use relative path 
(to be sure we will not try to compare a relative path
with an absolute path).
*/
function splitAtRoot(path){
	const url = new URL(path, location.origin);
	const pathFromRoot = url.pathname;
 //   document.write("<br>----> path from root: " + pathFromRoot + "</b>");
	return pathFromRoot;
}

const current_path = location.pathname;

/*   r is the response from the request to the nav.php file
	.text() reads the file's content.
	 .then(r => ...) means: do this when you have received r.
	 .then(html => … ) means: do this when the html content (from nav.php) is ready*/
function setNav(current_path) {
	current_path = splitAtRoot(current_path);
	
	// fetch creates a request to fetch your html file.
	fetch("nav.php")
		// read nav.php
		.then(r => r.text())
		// find the element associated to ID “main-nav” and change its innerHTML to the value of the variable html.
		.then(html => {
			const nav = document.getElementById("main-nav");
			nav.innerHTML = html;

			// moved this to "when the html content (from nav.php) is ready" section
			for (let child of nav.children) {
				if (child instanceof HTMLAnchorElement) {
					// Clean the link’s path using splitAtRoot
					const link_path = splitAtRoot(child.href);
					
					// Compare it to the current page
					if (link_path === current_path) {
						child.classList.add("current_page");
					}
				}
			}
		});
}

setNav(current_path);