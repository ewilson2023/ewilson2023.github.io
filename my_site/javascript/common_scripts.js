/**
 * For header-nav dropdown
 */
document.addEventListener('DOMContentLoaded', function () {
    var nav_selector = document.getElementById('discoverme');
    if (!nav_selector) return;  // safety check

    nav_selector.onchange = function () {
        window.open(
            this.options[this.selectedIndex].value,
            "_self"
        );
    };
});

/**
 * 
 * 
 */
function validate_newpost() {
    const item_text = document.getElementBy("title").value;
    const body_text = document.getElementById("body_text").value;

    // if there is no item_text
    if (typeof item_text === "undefined" || typeof body_text === "undefined")
        document.getElementById("error").innerText = 
            "Please fill out all forms";
        
    return;
} 


