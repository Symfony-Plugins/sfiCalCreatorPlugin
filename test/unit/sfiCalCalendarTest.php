<?php

/**
 * Description of sfiCalCalendar tests (sfiCalCreatorTest.php)
 * @version     0.0.1
 * @since       0.0.1
 * @access      public
 * @copyright   NULLzuEINS - André Lademann <andre@nullzueins.com>,  24.07.2010, 18:50:54
 * @author      NULLzuEINS - André Lademann <andre@nullzueins.com>
 * Encoding     UTF-8
 */



/**
 * @todo testautomization
 *
 * Compare with own Array and Testdata
 *
 *
 * while( $xprop = $v->getProperty( false, FALSE, true )) {
    $test->diag(print_r($xprop));
    foreach ($xprop as $key as $value) {

            $test->isa_ok($v->getConfig('X-PROP',$value), 'string', 'getConfig("'.$value.'") returns a string.');
    }
}

 * 
 * 
 * 
 * Could it be a way to automate the testing-algorythm?
    $properties = array(
        array( "value" => "unique_id"  , "params" => "testdomain.com", "message" => "Config with site domain successful."),
        array( "value" => "last-modified"  , "params" => "testdomain.com", "message" => "Config last-modified successful."),
    );
 */






/*
 * 1st Settings
*/

$number_of_tests = 24;
$ical_file_path = "web/sfiCalCreatorPlugin/ical";
$ical_file      = "testcalendar.ics";

/*
 * 2nd Initialization of the test
*/
include dirname(__FILE__).'/../../../../test/bootstrap/unit.php';
require_once(dirname(__FILE__).'/../../lib/sfiCalCreatorPlugin.class.php');

// For testing in the main testing directory "/test/unit/" include this:
// include dirname(__FILE__).'/../bootstrap/unit.php';
// require_once(dirname(__FILE__).'/../../plugins/sfiCalCreatorPlugin/lib/sfiCalCreatorPlugin.class.php');

$test = new lime_test($$number_of_tests ,new lime_output_color());


/*
 * 3rd part: Initialization of the test component
*/
$v = new sfiCalCalendar();                          // initiate new CALENDAR

$test->diag("==== Check setProperty(NAME) Calendar =============================");
$test->ok($v->setConfig( 'unique_id', 'testdomain.com' ),'setProperty("unique_id") successful.');             // config with site domain
$test->ok($v->setConfig( "filename", $ical_file ),'setProperty("filename") successful.');
$test->ok($v->setConfig( "directory", $ical_file_path ),'setProperty("directory") successful.');
$test->ok($v->setProperty( 'X-WR-CALNAME', 'Sample calendar' ),'setProperty("X-WR-CALNAME") successful.');          // set some X-properties, name, content.. .
$test->ok($v->setProperty( 'X-WR-CALDESC', 'Description of the calendar' ),'setProperty("X-WR-CALDESC") successful.');
$test->ok($v->setProperty( 'X-WR-TIMEZONE', 'Europe/Berlin' ),'setProperty("X-WR-TIMEZONE") successful.');
$test->ok($v->setProperty( 'tzid', 'US-Eastern'),'setProperty("tzid") successful.');
$test->ok($v->setProperty( 'last-modified', 2010, 1, 1 ),'setProperty("last-modified") successful.');
$test->ok($v->setProperty( "version", "2.0" ),'setProperty("version") successful.');
/**
 * @todo Follow action does not return TRUE. Bug?
 */
$test->skip($v->setProperty( "calscale", "GREGORIAN" ),'setProperty("calscale") successful.'); // Default GREGORIAN




/*
 * 4th part: Running the test
*/
$test->diag("==== Check setProperty(NAME) ToDo =================================");



$test->isa_ok($v->getConfig('unique_id'), 'string', 'getConfig("unique_id") returns a string.');
$test->is($v->getConfig('unique_id'),'testdomain.com','getConfig("unique_id") returns the correct string');

$test->isa_ok($v->getConfig('filename'), 'string', 'getConfig("filename") returns a string.');
$test->is($v->getConfig('filename'),$ical_file,'getConfig("filename") returns the correct string');

$test->isa_ok($v->getConfig('directory'), 'string', 'getConfig("directory") returns a string.');
$test->is($v->getConfig('directory'),$ical_file_path,'getConfig("directory") returns the correct string');


$test->isa_ok($v->getProperty('tzid'), 'array', 'getConfig("tzid") returns a integer.');
$test->is($v->getProperty('tzid'),array (0 => 'TZID',1 => 'US-Eastern'),'getConfig("tzid") returns the correct string');


$test->isa_ok($v->getProperty('last-modified'), 'array', 'getConfig("last-modified") returns a array.');
$test->is_deeply($v->getProperty('last-modified'), array (  0 => 'LAST-MODIFIED',  1 => 2010),'getConfig("last-modified") returns the correct string');
$result = $v->createCalendar();

$test->isa_ok($result, 'string', 'createCalendar () returns a string');
$test->is($result, 'BEGIN:VCALENDAR
CALSCALE:GREGORIAN
PRODID:-//testdomain.com//NONSGML iCalcreator 2.6//
VERSION:2.0
X-WR-CALNAME:Sample calendar
X-WR-CALDESC:Description of the calendar
X-WR-TIMEZONE:Europe/Berlin
TZID:US-Eastern
LAST-MODIFIED:2010
END:VCALENDAR
','createCalendar() returns the correct string');


$test->diag("---- Save the file ------------------------------------------------");
$test->ok($v->saveCalendar($ical_file_path, $ical_file),"Object sayes that the file was saved correctly.");
if(is_readable($ical_file_path."/".$ical_file)) {
    $test->pass("File was saved correctly an is readable.");
    $test->ok(unlink($ical_file_path."/".$ical_file),"Testfile deleted.");
}
else
    $test->fail("File was not saved correctly.");
//$test->error("File was'tn saved correctly.");


