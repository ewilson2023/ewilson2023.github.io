
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