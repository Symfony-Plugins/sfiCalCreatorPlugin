<?php

/**
 * Description of sfiCalTimezone tests (sfiCalTimezoneTest.php)
 * @version     0.0.1
 * @since       0.0.1
 * @access      public
 * @copyright   André Lademann <vergissberlin@googlemail.com>,  24.07.2010, 18:50:54
 * @author      André Lademann <vergissberlin@googlemail.com>
 * Encoding     UTF-8
 */

/*
 * 1st Settings
*/

$number_of_tests = 22;



/*
 * 2nd Initialization of the test
*/
include dirname(__FILE__).'/../../../../test/bootstrap/unit.php';
require_once(dirname(__FILE__).'/../../lib/sfiCalCreatorPlugin.class.php');

// For testing in the main testing directory "/test/unit/" include this:
// include dirname(__FILE__).'/../bootstrap/unit.php';
// require_once(dirname(__FILE__).'/../../plugins/sfiCalCreatorPlugin/lib/sfiCalCreatorPlugin.class.php');
$test = new lime_test($number_of_tests , new lime_output_color());





/*
 * 3trd part: Initialization of the test component
*/
$c = new sfiCalCalendar();
$tz = new sfiCalTimezone();


$test->diag("==== Check setProperty(NAME) Calendar =============================");
$test->ok($c->setConfig( 'unique_id', 'testdomain.com' ),'Config with site domain successful.');             // config with site domain
$test->ok($c->setProperty( 'X-WR-CALNAME', 'Sample calendar' ),'Config X-WER-CAL successful.');        // set some X-properties, name, content.. .
$test->ok($c->setProperty( 'X-WR-CALDESC', 'Description of the calendar' ),'Config X-WER-CAL successful.');
$test->ok($c->setProperty( 'X-WR-TIMEZONE', 'Europe/Berlin' ),'Config X-WER-TIMEZONE successful.');
$test->ok($c->setProperty( 'tzid', 'US-Eastern'),'Config X-WER-CAL successful.');
$test->ok($c->setProperty( 'last-modified', 1987, 1, 1 ),'Config last-modified successful.');


/**
 * the following are optional, but MUST NOT occur more than once:
 *      class / completed / created / description / dtstamp / dtstart / geo / last-mod / location / organizer / percent / priority / recurid / seq / status / summary /uid / url /
 *
 * either "due" or "duration" may appear in a "todoprop", but "due" and "duration" MUST NOT occur in the same "todoprop"
 *      due / duration /
 * the following are optional,and MAY occur more than once:
 *      attach / attendee / categories / comment / contact / exdate / exrule / rstatus /related / resources / rdate / rrule / x-prop
 * )
 */

$test->diag("==== Check setProperty(NAME) Timezone =================================");
$test->ok($tz->setProperty( 'dtstamp'   , array("year" => 2010, "month" => 07, "day" => 10, "hour" => 10, "min" => 0, "sec" => 0, "tz" => "+0200")),'setProperty("dtstamp") successful.');
$test->ok($tz->setProperty( "tzid", "US-Eastern" ),'setProperty("tzid") successful.');
$test->ok($tz->setProperty( "tzurl", "http://zones.stds_r_us.net/tz/US-Eastern" ),'setProperty("tzurl") successful.');
$test->ok($tz->setProperty( 'last-modified', 2010, 1, 1 ),'setProperty("last-modified") successful.');
$test->ok($tz->setProperty( 'comment' , 'This is a comment.' ),'setProperty("comment") successful.');

$test->ok($c->setComponent( $tz ),'Add component to calendar successful.');       // add component to calendar



/*
 * 4rth part: Running the test
 */

$test->diag("==== Check getProperty(NAME) Timezone ================================");

$test->isa_ok($tz->getProperty('tzid'), 'string', 'getProperty("tzid") returns a string.');
$test->is($tz->getProperty('tzid'), 'US-Eastern', 'getProperty("tzid") returns the correct content.');

$test->isa_ok($tz->getProperty('tzurl'), 'string', 'getProperty("tzurl") returns a string.');
$test->is($tz->getProperty('tzurl'), 'http://zones.stds_r_us.net/tz/US-Eastern', 'getProperty("tzurl") returns the correct content.');

$test->isa_ok($tz->getProperty('last-modified'), 'array', 'getProperty("last-modified") returns a array.');
$test->is_deeply($tz->getProperty('last-modified'), array (  'year' => 2010,  'month' => 1,  'day' => 1,  'hour' => 0,  'min' => 0,  'sec' => 0,  'tz' => 'Z'), 'getProperty("last-modified") returns the correct content.');

$test->isa_ok($tz->getProperty('comment',1), 'string', 'getProperty("comment") returns a string.');
$test->is($tz->getProperty('comment',1), 'This is a comment.', 'getProperty("comment") returns the correct content.');


$test->diag("==== Check the output ============================================");

$result = $c->createCalendar();
$test->isa_ok($result, 'string', 'createCalendar () returns a string.');

// Remove element(s) for testing
$result_array = explode("\n", $result);
unset($result_array[9]);    // delete unique_id for testing cause it is auto created and randomized
$result = $comma_separated = implode("\n", $result_array);

$test->is($result, 'BEGIN:VCALENDAR
PRODID:-//testdomain.com//NONSGML iCalcreator 2.6//
VERSION:2.0
X-WR-CALNAME:Sample calendar
X-WR-CALDESC:Description of the calendar
X-WR-TIMEZONE:Europe/Berlin
TZID:US-Eastern
LAST-MODIFIED:1987
BEGIN:VTIMEZONE
LAST-MODIFIED:20100101T000000Z
TZURL:http://zones.stds_r_us.net/tz/US-Eastern
COMMENT:This is a comment.
END:VTIMEZONE
END:VCALENDAR
','createCalendar() returns the correct string');
