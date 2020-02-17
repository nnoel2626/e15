<?php

session_start();

#To check content of SESSION
//var_dump($_SESSION);

# To make no results get display in index-view.php at reflesh
$results = null;
 
# Check session exit and session has content results
if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];

    # extract function Checks each key to see whether it has a valid variable name.
    # It also checks for collisions with existing variables in the symbol table.
    extract($results);

    # Set session to Null
    $_SESSION['results'] = null;
}

require 'index-view.php';
