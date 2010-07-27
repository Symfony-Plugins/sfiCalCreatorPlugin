<?php
/**
 * Description of sfiCalAlarm tests (sfiCalAlarmTest.php)
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

$number_of_tests = 35;



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
$a = new sfiCalAlarm();


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

$test->diag("==== Check setProperty(NAME) Alarm =================================");
$test->skip("deleteProperty did not work for unique_id.", $c->deleteProperty( "unique_id" ));
$test->ok($a->setProperty( 'dtstamp'   , array("year" => 2010, "month" => 07, "day" => 10, "hour" => 10, "min" => 0, "sec" => 0, "tz" => "+0200")),'setProperty("dtstamp") successful.');
$test->ok($a->setProperty( 'duration' , array( "day" => 1 )),'setProperty("duration") successful.'); // set the duration
$test->ok($a->setProperty( "repeat", 2 ),'setProperty("repeat") successful.');
$test->ok($a->setProperty( 'summary' , '1996 Income Tax Preparation' ),'setProperty("summary") successful.');
$test->ok($a->setProperty( 'description' , 'This is a description.' ),'setProperty("description") successful.');
$test->ok($a->setProperty( "attach" , "http://www.symfony-project.org/images/symfony_logo.gif" , array( "FMTTYPE" => "image/gif" )),'setProperty("attach") successful.'); // FMTTYPE for *.doc: application/binary
$test->ok($a->setProperty( "attendee" , "attendee1@ical.net" , array( "cutype" => "INDIVIDUAL" , "member" => array( "member1@ical.net" , "member2@ical.net" , "member3@ical.net" ) , "role" => "CHAIR" , "PARTSTAT" => "ACCEPTED" , "RSVP" => "TRUE" , "DELEgated-to" => array( "part1@ical.net" , "part2@ical.net" , "part3@ical.net" ) , "delegateD-FROM" =>array( "cio@ical.net" , "vice.cio@ical.net") , "SENT-BY" => "secretary@ical.net" , "LANGUAGE" => "us-EN" , "CN" => "John Doe" , "DIR" => "http://www.ical.net/info.doc" , "x-agenda" => "status reports" , "x-length" => "15 min" )),'setProperty("attendee") [1] successful.');
$test->ok($a->setProperty( "attendee" , "attendee2@ical.net" , array( "cutype" => "INDIVIDUAL" , "member" => array( "member1@ical.net" , "member2@ical.net" , "member3@ical.net" ) , "role" => "CHAIR" , "PARTSTAT" => "ACCEPTED" , "RSVP" => "TRUE" , "DELEgated-to" => array( "part1@ical.net" , "part2@ical.net" , "part3@ical.net" ) , "delegateD-FROM" =>array( "cio@ical.net" , "vice.cio@ical.net") , "SENT-BY" => "secretary@ical.net" , "LANGUAGE" => "de-DE" , "DE" => "André Lademann" , "DIR" => "http://www.ical.net/info.doc" , "x-agenda" => "status reports" , "x-length" => "15 min" )),'setProperty("attendee") [2] successful.');



/* AUDIO ALRAM */
$test->ok($a->setProperty( "action", "EMAIL" ),'setProperty("action") successful.'); // "AUDIO" / "DISPLAY" / "EMAIL" / "PROCEDURE"
$test->ok($a->setProperty( "trigger" , array ("hour"=>1,"min"=>2,"sec"=>3 )),'setProperty("action") successful.'); // duration, 1 hour 2 min 3 sec, before start

$test->ok($c->setComponent( $a ),'Add component to calendar successful.');       // add component to calendar



/*
 * 4rth part: Running the test
 */

$test->diag("==== Check getProperty(NAME) Alarm ================================");

$test->isa_ok($a->getProperty('duration'), 'array', 'getProperty("duration") returns a array.');
$test->is_deeply($a->getProperty('duration'), array (  'day' => 1), 'getProperty("duration") returns the correct content.');

$test->isa_ok($a->getProperty('repeat'), 'integer', 'getProperty("repeat") returns a integer.');
$test->is_deeply($a->getProperty('repeat'), 2, 'getProperty("repeat") returns the correct content.');

$test->isa_ok($a->getProperty('summary'), 'string', 'getProperty("summary") returns a string.');
$test->is($a->getProperty('summary'), '1996 Income Tax Preparation', 'getProperty("summary") returns the correct content.');

$test->isa_ok($a->getProperty('summary',1), 'string', 'getProperty("summary") returns a string.');
$test->is($a->getProperty('summary',1), '1996 Income Tax Preparation', 'getProperty("summary") returns the correct content.');

$test->isa_ok($a->getProperty('description',1), 'string', 'getProperty("description") returns a string');
$test->is($a->getProperty('description',1), 'This is a description.', 'getProperty("description") returns the correct content.');

$test->isa_ok($a->getProperty('attach',1), 'string', 'getProperty("attach") returns a string.');
$test->is($a->getProperty('attach',1),'http://www.symfony-project.org/images/symfony_logo.gif','getProperty("attach") returns the correct content. (1)');

$test->isa_ok($a->getProperty('attendee',1), 'string', 'getProperty("attendee")1 returns a string.');
$test->is($a->getProperty('attendee',1,propOrderNo,true), array ('value' => 'attendee1@ical.net','params' =>array ('ROLE' => 'CHAIR','PARTSTAT' => 'ACCEPTED','RSVP' => 'TRUE','SENT-BY' => 'secretary@ical.net','LANGUAGE' => 'us-EN','CN' => 'John Doe','DIR' => 'http://www.ical.net/info.doc','X-AGENDA' => 'status reports','X-LENGTH' => '15 min','MEMBER' =>array (0 => 'member1@ical.net',1 => 'member2@ical.net',2 => 'member3@ical.net',),'DELEGATED-TO' =>array (0 => 'part1@ical.net',1 => 'part2@ical.net',2 => 'part3@ical.net',),'DELEGATED-FROM' =>array (0 => 'cio@ical.net', 1 => 'vice.cio@ical.net'))), 'getProperty("attendee") returns the correct content.');

$test->isa_ok($a->getProperty('attendee',2), 'string', 'getProperty("attendee")2 returns a string.');
$test->is($a->getProperty('attendee',2,propOrderNo,true), array ('value' => 'attendee2@ical.net','params' =>array ('ROLE' => 'CHAIR','PARTSTAT' => 'ACCEPTED','RSVP' => 'TRUE','SENT-BY' => 'secretary@ical.net','LANGUAGE' => 'de-DE','DE' => 'André Lademann','DIR' => 'http://www.ical.net/info.doc','X-AGENDA' => 'status reports','X-LENGTH' => '15 min','MEMBER' =>array (0 => 'member1@ical.net',1 => 'member2@ical.net',2 => 'member3@ical.net',),'DELEGATED-TO' =>array (0 => 'part1@ical.net',1 => 'part2@ical.net',2 => 'part3@ical.net',),'DELEGATED-FROM' =>array (0 => 'cio@ical.net', 1 => 'vice.cio@ical.net'))), 'getProperty("attendee") returns the correct content.');



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
BEGIN:SFICALALARM
ATTACH;FMTTYPE=image/gif:http://www.symfony-project.org/images/symfony_logo
 .gif
ATTENDEE;ROLE="CHAIR";PARTSTAT="ACCEPTED";RSVP="TRUE";SENT-BY="MAILTO:secre
 tary@ical.net";DIR="http://www.ical.net/info.doc";X-AGENDA=status reports;
 X-LENGTH=15 min;MEMBER="MAILTO:member1@ical.net","MAILTO:member2@ical.net"
 ,"MAILTO:member3@ical.net";DELEGATED-TO="MAILTO:part1@ical.net","MAILTO:pa
 rt2@ical.net","MAILTO:part3@ical.net";DELEGATED-FROM="MAILTO:cio@ical.net"
 ,"MAILTO:vice.cio@ical.net";LANGUAGE=us-EN;CN="John Doe":MAILTO:attendee1@
 ical.net
ATTENDEE;ROLE="CHAIR";PARTSTAT="ACCEPTED";RSVP="TRUE";SENT-BY="MAILTO:secre
 tary@ical.net";DE=André Lademann;DIR="http://www.ical.net/info.doc";X-AGE
 NDA=status reports;X-LENGTH=15 min;MEMBER="MAILTO:member1@ical.net","MAILT
 O:member2@ical.net","MAILTO:member3@ical.net";DELEGATED-TO="MAILTO:part1@i
 cal.net","MAILTO:part2@ical.net","MAILTO:part3@ical.net";DELEGATED-FROM="M
 AILTO:cio@ical.net","MAILTO:vice.cio@ical.net";LANGUAGE=de-DE:MAILTO:atten
 dee2@ical.net
DESCRIPTION:This is a description.
DURATION:P1D
REPEAT:2
SUMMARY:1996 Income Tax Preparation
TRIGGER:-PT1H2M3S
END:SFICALALARM
END:VCALENDAR
','createCalendar() returns the correct string');
