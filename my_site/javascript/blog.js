// shared array
// let blog_posts = [];


/**
 *  Render one blog post
 */
function renderItem(post) {
    let blog_column = document.getElementById("blog_column");	// Recover the ul element
    let card_blog = document.createElement('div');   // Create a new blog element
    card_blog.classList.add("card");

    // Store id, used to detele individual posts late
    card_blog.dataset.id = post.id;   

    /*---- TITLE HEADER WRAPPER ------*/
    const titleGrid = document.createElement('div');
    titleGrid.classList.add('title_grid');

    // left side: title h2
    const h2 = document.createElement('h2');
    h2.textContent = post.title; // get title from json data
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

    console.log('blog post created');

    // finally, Append card as a child of blog_column
    blog_column.appendChild(card_blog);	
}
/**
 * Render all posts
 */
function renderAll() {
    console.log('blog posts recieved');

    blog_posts.forEach(post => {
        renderItem(post);
    });

}

/**
 *  load saved items from blog_posts js variable the json file
 * was loaded into inside blog.php
 */
document.addEventListener('DOMContentLoaded', function () {
    console.log('blog.js activated');
    renderAll();
});



