/* let blogs = JSON.parse('JSON\blog_posts.json') */

// shared array
let blog_posts = [];

/**
 *  saves the list in storage
 */
/* function saveItems() {
    localStorage.setItem("items", JSON.stringify(items));
}/**
 *  Render one 
 */
function renderItem(my_post) {
    let blog_column = document.getElementById("blog_column");	// Recover the ul element
    let card_blog = document.createElement('div');   // Create a new blog element
    card_blog.classList.add("card");

    // Store id, used to detele individual posts late
    card_blog.dataset.id = my_post.id;   

    /*---- TITLE HEADER WRAPPER ------*/
    const titleGrid = document.createElement('div');
    titleGrid.classList.add('title_grid');

    // left side: title h2
    const h2 = document.createElement('h2');
    h2.textContent = my_post.title; // get title from json data
    titleGrid.appendChild(h2);  // append the h2 to the title_grid

    // right side: date and trash
    const RHS_span = document.createElement('span');

    const h5 = document.createElement('h5');
    h5.textContent = post.date;     // get date from json data
    RHS_span.appendChild(h5);       // append the h5 to the RHS_span

    /*-------TRASH ------*/
    const trash_span = document.createElement("span");
    trash_span.textContent = '🗑️';

    // append what we have so far
    rightSpan.appendChild(trash_span);
    titleGrid.appendChild(rightSpan);
    card_blog.appendChild(titleGrid);

    /*---- PARAGRAPHS ------*/
    post.paragraphs.forEach(text => {
        const p = document.createElement('p');  //create <p> for each paragraph
        p.textContent = text;
        card_blog.appendChild(p);   // append the <p> to the card
    });


    trash_span.addEventListener("click", () => {
        blog_posts = blog_posts.filter(x => x.id !== id); // Remove based on unique id
       // saveItems(); //Update localStorage

        card_blog.remove();
    });

    // finally, Append card as a child of blog_column
    blog_column.appendChild(card_blog);	
/**
 * Render all posts
 */
function renderAll() {
    blog_posts.forEach((item, index) => {
        renderItem(item.text, item.id);
    })

}

/**
 *  load saved items from 
 */
document.addEventListener('DOMContentLoaded', function () {
    blog_posts = JSON.parse('JSON/blog_posts.json')/*  || [] */;
    blog_posts.forEach(function (entry) {
        console.log(entry);
    });
   /*  renderAll(); */
});

 */
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
        blog_posts.push(newItem);
        saveItems();

        renderItem(item_text);
    }
}

