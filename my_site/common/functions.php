<?php
/**
 * Verifies the password input.
 * @return 0 if no input
 * @return -1 if incorrect
 */
function verify_pword($input, $correct_hash){
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
function redirect($page){
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

/**
 * COnvenience function to check if user is logged in
 * @return bool state of $_SESSION['is_logged_in']
 */
function logged_in(){
    return isset($_SESSION['is_logged_in']) 
    && $_SESSION['is_logged_in'] === true 
    && !isset($_POST['logout']);
}
/**
 * Convenience function to print variables while debugging
 * @param mixed $var any variable
 */
function debug_echo($var){
    $value = $var; $name = getVariableName($var);
  /*   echo gettype($var) . '<br>'; */
    if (gettype($value) == "boolean"){
        $value = $value ? "true" : "false";
        $name = "[var_bool]";
    }
    echo "<br><span><b>\$$name <span style=\"color:grey\">("
    .gettype($value).
    ") => </span> <span style=\"color: FireBrick\">$value </b></span></span>";
}

/**
 * Function that returns the variable name
 * from https://www.geeksforgeeks.org/php/how-to-get-a-variable-name-as-a-string-in-php/
 */
function getVariableName($var){
    foreach ($GLOBALS as $varName => $value) {
        if ($value === $var) {
            return $varName;
        }}
    return;
}


?>
