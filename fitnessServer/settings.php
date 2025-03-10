<?php

// Basic settings
// You must set these for the server to work

$databaseServer = "localhost";
$databaseUsername = "testUser";
$databasePassword = "testPassword";
$databaseName = "test";

// The URL of to the server.php script.
$fullServerURL = "http://localhost/jcr13/fitnessServer/server.php";



// The URL of the ticket server's server.php script.
// This is used to validate client requests.
$ticketServerURL = "http://localhost/jcr13/ticketServer/server.php";




// The URL of the main, public-face website
$mainSiteURL = "http://localhost/jcr13/";



// End Basic settings



// Customization settings

// Adjust these to change the way the server  works.

// formula for adjusting score after a life/offspring lifespan is
// new_score = old_score + ( ( lifespan - old_score ) ^ R ) / K

$formulaR = 1.0;
$formulaK = 10.0;


// how recently do players have to have played to count in leaderboards
// and rankings?
$leaderboardHours = 24;


// maximum number of historical offspring (and selves) to report to the
// player when they ask for details
$maxOffspringToShowPlayer = 20;

// maximum number of historical offspring (and selves) to keep on file
// per player
$maxOffspringHistoryToKeep = 25;



// secret shared with trusted game servers that allows them to post
// game stats

// MUST be changed from this default to prevent false game stats reporting.

// should not contain spaces

$sharedGameServerSecret = "secret_phrase";




// Prefix to use in table names (in case more than one application is using
// the same database).  Multiple tables are created (example: "log", "reviews",
//  and so on).
//
// If $tableNamePrefix is "test_" then the tables will be named
// "test_log" and "test_reviews" and son on.
//
// Thus, more than one server installation can use the same database
// (or the server can share a database with another application that uses
//  similar table names).
$tableNamePrefix = "fitnessServer_";



$enableLog = 1;


// should web-based admin require yubikey two-factor authentication?
$enableYubikey = 1;

// 12-character Yubikey IDs, one list for each access password
// each list is a set of ids separated by :
// (there can be more than one Yubikey ID associated with each password)
$yubikeyIDs = array( "ccccccbjlfbi:ccccccbjnhjc:ccccccbjnhjn", "ccccccbjlfbi" );

// used for verifying response that comes back from yubico
// Note that these are working values, but because they are in a public
// repository, they are not secret and should be replaced with your own
// values (go here:  https://upgrade.yubico.com/getapikey/ )
$yubicoClientID = "9943";
$yubicoSecretKey = "rcGgz0rca1gqqsa/GDMwXFAHjWw=";


// For hashing admin passwords so that they don't appear in the clear
// in this file.
// You can change this to your own string so that password hashes in
// this file differ from hashes of the same passwords used elsewhere.
$passwordHashingPepper = "262f43f043031282c645d0eb352df723a3ddc88f";

// passwords are given as hashes below, computed by:
// hmac_sha1( $passwordHashingPepper,
//            hmac_sha1( $passwordHashingPepper, $password ) )
// Where $passwordHashingPepper is used as the hmac key.
// Client-side hashing sends the password to the server as:
//   hmac_sha1( $passwordHashingPepper, $password )
// The extra hash performed by the server prevents the hashes in
// this file from being used to login directly without knowing the actual
// password.

// For convenience, after setting a $passwordHashingPepper and chosing a
// password, hashes can be generated by invoking passwordHashUtility.php
// in your browser.

// default passwords that have been included as hashes below are:
// "secret" and "secret2"

// hashes of passwords for for web-based admin access
$accessPasswords = array( "8e409075ab35b161f6d2d57775e5efbee8d7b674",
                          "20e1883a3d63607b60677dca87b41e04316ffc63" );




// number of users shown per page in the browse view
$usersPerPage = 20;



// header and footers for various pages
$header = "include( \"../noBotsHeader.php\" );";
$footer = "include( \"../noCounterFooter.php\" );";





?>