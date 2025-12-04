
let items = [];
/**
 * Called whenever you click on the add item button.
 */
function addItem() {
	const input = document.getElementById("item_text");
	const item_text = input.value.trim();	//  trim() removes whitespace
	
	// if there is no item_text
	if (item_text === "") 
		return; /* send warning */ 
	else {
	// Save in storage
	const newItem = {
		text: item_text,
		id: Date.now()  // unique timestamp-based id
	};
	items.push(newItem);
	localStorage.setItem("items", JSON.stringify(items));
	
	renderItem(item_text);
	}
}
	
function renderItem(item_text, id) {
	let ul = document.getElementById("the_list");	// Recover the ul element
	let li = document.createElement("li"); 	// Create a new li element
	li.dataset.id = id;    // Store id in DOM
	
	const span1 = document.createElement("span");
	span1.textContent = item_text;	// Set span's text
	li.appendChild(span1);	// Append span1 as a child of <li>

	const trash_span = document.createElement("span");
	trash_span.classList.add('fas', 'fa-trash');

	li.appendChild(trash_span);	// Append trash_span as a child of <li>
	trash_span.addEventListener("click", () => {
	items = items.filter(x => x.id !== id); // Remove based on unique id
	localStorage.setItem("items", JSON.stringify(items)); //Update localStorage

	li.remove();
	});
	
	ul.appendChild(li);	// Append li as a child of <ul>
}

function renderList(){
	items.forEach((item, index) => {
		renderItem(item.text, item.id);
	})
}

/**
 *  load saved items from localStorage AFTER html is loaded
 */
document.addEventListener('DOMContentLoaded', function () {
    let items = JSON.parse(localStorage.getItem("items")) || [];
    // We want show items in our list before adding new ones.
	renderList();  
});
