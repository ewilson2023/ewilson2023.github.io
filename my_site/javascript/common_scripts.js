
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


/*-------------------------------- 
--------- TEXTAREA --------------
from: https://css-tricks.com/auto-growing-inputs-textareas/ */

// Dealing with Input width
let el = document.querySelector(".input-wrap .input");
let widthMachine = document.querySelector(".input-wrap .width-machine");
el.addEventListener("keyup", () => {
    widthMachine.innerHTML = el.value;
});

// Dealing with Textarea Height
function calcHeight(value) {
    let numberOfLineBreaks = (value.match(/\n/g) || []).length;
    // min-height + lines x line-height + padding + border
    let newHeight = 20 + numberOfLineBreaks * 20 + 12 + 2;
    return newHeight;
}

let textarea = document.querySelector(".resize-ta");
textarea.addEventListener("keyup", () => {
    textarea.style.height = calcHeight(textarea.value) + "px";
});

