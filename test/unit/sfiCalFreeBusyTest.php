<?php
/**
 * Description of sfiCalFreeBusy tests (sfiCalFreeBusyTest.php)
 * @version     0.0.1
 * @since       0.0.1
 * @access      public
 * @copyright   André Lademann <vergissberlin@googlemail.com>,  24.07.2010, 18:50:54
 * @author      André Lademann <vergissberlin@googlemail.com>
 * Encoding     UTF-8
 */



/*
 * 1st. Settings
*/
$numer_of_tests = 26;



/*
 * 1st. Initialization of the test
*/
include dirname(__FILE__).'/../../../../test/bootstrap/unit.php';
require_once(dirname(__FILE__).'/../../lib/sfiCalCreatorPlugin.class.php');

// For testing in the main testing directory "/test/unit/" include this:
// include dirname(__FILE__).'/../bootstrap/unit.php';
// require_once(dirname(__FILE__).'/../../plugins/sfiCalCreatorPlugin/lib/sfiCalCreatorPlugin.class.php');
$test = new lime_test($numer_of_tests , new lime_output_color());




/*
 * 2nd. part: Initialization of the test component
*/

$c = new sfiCalCalendar();     // initiate new CALENDAR
$test->diag("==== Check setProperty(NAME) Calendar =============================");
$test->ok($c->setConfig( 'unique_id', 'testdomain.com' ),'Config with site domain successful.');             // config with site domain
$test->ok($c->setProperty( 'X-WR-CALNAME', 'Sample calendar' ),'Config X-WER-CAL successful.');        // set some X-properties, name, content.. .
$test->ok($c->setProperty( 'X-WR-CALDESC', 'Description of the calendar' ),'Config X-WER-CAL successful.');
$test->ok($c->setProperty( 'X-WR-TIMEZONE', 'Europe/Berlin' ),'Config X-WER-TIMEZONE successful.');
$test->ok($c->setProperty( 'tzid', 'US-Eastern'),'Config X-WER-CAL successful.');
$test->ok($c->setProperty( 'last-modified', 2010, 1, 1 ),'Config last-modified successful.');




/**
 * the following are optional, but MUST NOT occur more than once:
 *      contact / dtstart / dtend / duration / dtstamp / organizer / uid / url /
 *
 * the following are optional,and MAY occur more than once:
 *      attendee / comment / freebusy / rstatus / x-prop
 */


$fb = new sfiCalFreeBusy();         // initiate a new JOURNAL
$test->diag("==== Check setProperty(NAME) Journal ================================");
$test->ok($fb->setProperty( 'dtstart'   , '19970415T133000 GMT' ),'setProperty("dtstart") successful.');
$test->ok($fb->setProperty( 'dtstamp'   , array("year" => 2010, "month" => 07, "day" => 10, "hour" => 10, "min" => 0, "sec" => 0, "tz" => "+0200")),'setProperty("dtstamp") successful.');
$test->ok($fb->setProperty( 'comment' , 'This is a comment.' ),'setProperty("comment") successful.');
$dir = "ldap://host.com:6666/o=3DDC%20Comp,c=3DUS??(cn=3DJohn%20Doe)";
$test->ok($fb->setProperty( "organizer" , "ical@domain.com" , array( "CN" => "John Doe" , "DIR" => $dir , "SENT-BY" => "secretary@domain.com" , "x-Key1" => "x-Value" , "x-Key2" => "y-Value" )),'setProperty("organizer") successful.');
$test->ok($fb->setProperty( 'contact', 'vergissberlin@googlemail.com' ),'setProperty("contact") successful.');
$test->ok($fb->setProperty( "attendee" , "attendee1@ical.net" , array( "cutype" => "INDIVIDUAL" , "member" => array( "member1@ical.net" , "member2@ical.net" , "member3@ical.net" ) , "role" => "CHAIR" , "PARTSTAT" => "ACCEPTED" , "RSVP" => "TRUE" , "DELEgated-to" => array( "part1@ical.net" , "part2@ical.net" , "part3@ical.net" ) , "delegateD-FROM" =>array( "cio@ical.net" , "vice.cio@ical.net") , "SENT-BY" => "secretary@ical.net" , "LANGUAGE" => "us-EN" , "CN" => "John Doe" , "DIR" => "http://www.ical.net/info.doc" , "x-agenda" => "status reports" , "x-length" => "15 min" )),'setProperty("attendee") [1] successful.');
$test->ok($fb->setProperty( "attendee" , "attendee2@ical.net" , array( "cutype" => "INDIVIDUAL" , "member" => array( "member1@ical.net" , "member2@ical.net" , "member3@ical.net" ) , "role" => "CHAIR" , "PARTSTAT" => "ACCEPTED" , "RSVP" => "TRUE" , "DELEgated-to" => array( "part1@ical.net" , "part2@ical.net" , "part3@ical.net" ) , "delegateD-FROM" =>array( "cio@ical.net" , "vice.cio@ical.net") , "SENT-BY" => "secretary@ical.net" , "LANGUAGE" => "de-DE" , "DE" => "André Lademann" , "DIR" => "http://www.ical.net/info.doc" , "x-agenda" => "status reports" , "x-length" => "15 min" )),'setProperty("attendee") [2] successful.');
$c->addComponent($fb);                        // add component to calendar



/*
 * 3ird. part: Running the test
 */
$test->diag("==== Check getProperty(NAME) Journal ================================");


$test->isa_ok($fb->getProperty('dtstart'), 'array', 'getProperty("dtstart") returns a array.');
$test->is_deeply($fb->getProperty('dtstart'), array (  'year' => '1997',  'month' => '04',  'day' => '15',  'hour' => '13',  'min' => '30',  'sec' => '00',  'tz' => 'GMT'), 'getProperty("dtstart") returns the correct content.');

$test->isa_ok($fb->getProperty('comment',1), 'string', 'getProperty("comment") returns a string.');
$test->is($fb->getProperty('comment',1), 'This is a comment.', 'getProperty("comment") returns the correct content.');

$test->isa_ok($fb->getProperty('organizer', FALSE , TRUE ), 'array', 'getProperty("organizer") returns a string.');
$test->is_deeply($fb->getProperty('organizer'), 'ical@domain.com', 'getProperty("organizer") returns the correct content.');

$test->isa_ok($fb->getProperty('contact',1), 'string', 'getProperty("contact") returns a string.');
$test->is($fb->getProperty('contact',1), 'vergissberlin@googlemail.com', 'getProperty("contact") returns the correct content.');

$test->isa_ok($fb->getProperty('attendee',1), 'string', 'getProperty("attendee") returns a string.');
$test->is($fb->getProperty('attendee',1,propOrderNo,true), array ('value' => 'attendee1@ical.net','params' =>array ('ROLE' => 'CHAIR','PARTSTAT' => 'ACCEPTED','RSVP' => 'TRUE','SENT-BY' => 'secretary@ical.net','LANGUAGE' => 'us-EN','CN' => 'John Doe','DIR' => 'http://www.ical.net/info.doc','X-AGENDA' => 'status reports','X-LENGTH' => '15 min','MEMBER' =>array (0 => 'member1@ical.net',1 => 'member2@ical.net',2 => 'member3@ical.net',),'DELEGATED-TO' =>array (0 => 'part1@ical.net',1 => 'part2@ical.net',2 => 'part3@ical.net',),'DELEGATED-FROM' =>array (0 => 'cio@ical.net', 1 => 'vice.cio@ical.net'))), 'getProperty("attendee") returns the correct content.');
$test->is($fb->getProperty('attendee',2,propOrderNo,true), array ('value' => 'attendee2@ical.net','params' =>array ('ROLE' => 'CHAIR','PARTSTAT' => 'ACCEPTED','RSVP' => 'TRUE','SENT-BY' => 'secretary@ical.net','LANGUAGE' => 'de-DE','DE' => 'André Lademann','DIR' => 'http://www.ical.net/info.doc','X-AGENDA' => 'status reports','X-LENGTH' => '15 min','MEMBER' =>array (0 => 'member1@ical.net',1 => 'member2@ical.net',2 => 'member3@ical.net',),'DELEGATED-TO' =>array (0 => 'part1@ical.net',1 => 'part2@ical.net',2 => 'part3@ical.net',),'DELEGATED-FROM' =>array (0 => 'cio@ical.net', 1 => 'vice.cio@ical.net'))), 'getProperty("attendee") returns the correct content.');







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
LAST-MODIFIED:2010
BEGIN:SFICALFREEBUSY
DTSTAMP:20100710T080000Z
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
COMMENT:This is a comment.
CONTACT:vergissberlin@googlemail.com
DTSTART;TZID=GMT:19970415T133000
ORGANIZER;CN="John Doe";DIR="ldap://host.com:6666/o=3DDC%20Comp,c=3DUS??(cn
 =3DJohn%20Doe)";SENT-BY="MAILTO:secretary@domain.com";X-KEY1=x-Value;X-KEY
 2=y-Value:MAILTO:ical@domain.com
END:SFICALFREEBUSY
END:VCALENDAR
','createCalendar() returns the correct string');