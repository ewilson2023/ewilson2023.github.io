<?php
/**
 * Verifies the password input.
 * @return 0 if no input
 * @return -1 if incorrect
 */
function verify_pword($input, $correct_hash)
{
    if ($input == '')
        return 0; // return 0 if no input

    $input = strtoupper($input); // make case insensitive for my own convenience
    $input = hash("sha256", $input); // protect password

    if ($input != $correct_hash)
        return -1; // return -1 if incorrect
}

/**
 * redirects to the specified page
 * @param mixed $page the specified page
 */
function redirect($page)
{
    // identify server host
    if ($_SERVER['SERVER_NAME'] === 'localhost') {
        $BASE_URL = $_SERVER['HTTP_HOST'] . '/my_site/';
    } elseif ($_SERVER['SERVER_NAME'] === 'osiris.ubishops.ca') {
        $BASE_URL = $_SERVER['HTTP_HOST'] . '/home/ewilson/';
    } else {
        $BASE_URL = $_SERVER['HTTP_HOST'];
    }
    // redirect
    header('Location: http://' . $BASE_URL . $page);

    exit();
}

?>