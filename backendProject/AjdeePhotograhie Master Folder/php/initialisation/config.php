<?php

    ini_set('display_errors', true); // TRUE FOR TESTING ONLY
    error_reporting(E_ALL);
    date_default_timezone_set("Australia/Perth"); 

    // under are the definitions for the database access details
    define( "DB_DSN", "mysql:host=localhost;dbname=photographywebsitedb" );
    define( "DB_USERNAME", "username" );
    define( "DB_PASSWORD", "password" );

    /*
        under are the definitions for path of the class files and the HTML template files
        just in case i use this for full-fledged CMS

    */

    define( "CLASS_PATH" , "classes" );
    define( "TEMPLATE_PATH", "templates" );

    /*

        under are the definitions for the CMS username and password. 
        change this if needed be and find a way on how to use the Pa$$word password.

    */

    define( "ADMIN_USERNAME", "username");
    define( "ADMIN_PASSWORD", "password" );


    // database connection with a error handler
    $dbconnection = new mysqli(DB_USERNAME,DB_DSN,DB_PASSWORD);

    if($dbconnection -> connect_errno){

        echo "<h1>ERROR" . $dbconnection->errno . "</h2>";
        echo $error = $dbconnection->connect_errno;
        exit();
    }

    function handleException($exception){
        echo "Sorry, a problem occured. please try again later.";
        error_log( $exception->getMessage() );
    }

    set_exception_handler( 'handleException' );

?>