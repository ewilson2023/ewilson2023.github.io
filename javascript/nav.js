
/*
help you make sure that we always use relative path 
(to be sure we will not try to compare a relative path
with an absolute path).
*/
function splitAtRoot(path){
    const url = new URL(path, location.origin);
    const pathFromRoot = url.pathname;
    document.write("<br>----> path from root: " + pathFromRoot);
    return pathFromRoot;
}

const current_path = location.pathname;
function setNav(current_path) {
	current_path = splitAtRoot(current_path);
	// fetch creates a request to fetch your html file.
	fetch("nav.html")
	 /* r is the response from the request to the nav.html file
	 .text() reads the file's content.
	 .then(r => ...) means: do this when you have received r.
	 .then(html => … ) means: do this when the html content (from nav.html) is ready*/
	 .then(r => r.text())
	 // find the element associated to ID “main-nav” and change its innerHTML to the value of the variable html.
	 .then(html =>  document.getElementById("main-nav").innerHTML = html);
	 
	////////// <lab 6 step 6e>
    const nav = document.getElementById("main-nav");
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
	////////// </lab 6 step 6e>
}

setNav(current_path);