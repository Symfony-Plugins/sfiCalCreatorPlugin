<?php
/**
 * Description of sfiCalTodo tests (sfiCalTodoTest.php)
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

$number_of_tests = 87;



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
$t = new sfiCalTodo();


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

$test->diag("==== Check setProperty(NAME) ToDo =================================");
$test->skip("deleteProperty did not work for unique_id.", $c->deleteProperty( "unique_id" ));
$test->ok($t->setProperty( "related-to", "19960401-080045-4000F192713@host.com"),'setProperty("related-to") successful.');
$test->ok($t->setProperty( 'dtstart'   , '19970415T133000 GMT' ),'setProperty("dtstart") successful.');
$test->ok($t->setProperty( 'dtstamp'   , array("year" => 2010, "month" => 07, "day" => 10, "hour" => 10, "min" => 0, "sec" => 0, "tz" => "+0200")),'setProperty("dtstamp") successful.');
$test->ok($t->setProperty( 'created'   , array("year" => 2010, "month" => 07, "day" => 10, "hour" => 10, "min" => 0, "sec" => 0, "tz" => "+0200")),'setProperty("created") successful.'); // toDo was created on ...
$test->ok($t->setProperty( 'completed' , array("timestamp" => 1334567890)),'setProperty("completed") successful.'); // mark as completed
$test->ok($t->setProperty( 'duration' , array( "day" => 1 )),'setProperty("duration") successful.'); // set the duration
$test->ok($t->setProperty( 'last-modified' , '14 july 2010 16.00.00'),'setProperty("last-modified") successful.'); // set modifie-date
$test->ok($t->setProperty( 'recurrence-id' , array("timestamp" => 1394567890)),'setProperty("recurrence-id") successful.'); // Repeats the todo
$test->ok($t->setProperty( 'sequence' , 2 ),'setProperty("sequence") successful.');
$test->ok($t->setProperty( 'due' , array( 'year' => 2010, 'month' => 8, 'day'=> 11 )  , array( 'VALUE' => 'DATE' )),'setProperty("due") successful.');
$test->ok($t->setProperty( 'summary' , '1996 Income Tax Preparation' ),'setProperty("summary") successful.');
$test->ok($t->setProperty( 'comment' , 'This is a comment.' ),'setProperty("comment") successful.');
$test->ok($t->setProperty( 'description' , 'This is a description.' ),'setProperty("description") successful.');
$test->ok($t->setProperty( 'class' , 'CONFIDENTIAL' ),'setProperty("class") successful.');
$test->ok($t->setProperty( 'categories' , 'FAMILY' ),'setProperty("categories") successful.');
$test->ok($t->setProperty( 'categories' , 'FINANCE' ),'setProperty("categories") successful.');
$test->ok($t->setProperty( "location", "Buckingham Palace" ),'setProperty("location") successful.');
$test->ok($t->setProperty( "resources", "COMPUTER PROJECTOR" ),'setProperty("resources") successful.');
$dir = "ldap://host.com:6666/o=3DDC%20Comp,c=3DUS??(cn=3DJohn%20Doe)";
$test->ok($t->setProperty( "organizer" , "ical@domain.com" , array( "CN" => "John Doe" , "DIR" => $dir , "SENT-BY" => "secretary@domain.com" , "x-Key1" => "x-Value" , "x-Key2" => "y-Value" )),'setProperty("organizer") successful.');
$test->ok($t->setProperty( 'contact', 'vergissberlin@googlemail.com' ),'setProperty("contact") successful.');
$test->ok($t->setProperty( "geo", 11.23456, -23.45678 ),'setProperty("geo") successful.');
$test->ok($t->setProperty( 'priority', 1 ),'setProperty("priority") successful.');
$test->ok($t->setProperty( "percent-complete", 90 ),'setProperty("percent-complete",90) successful.');
$test->ok($t->setProperty( 'status', 'NEEDS-ACTION' ),'setProperty("status") successful.');
$test->ok($t->setProperty( "attach" , "http://www.symfony-project.org/images/symfony_logo.gif" , array( "FMTTYPE" => "image/gif" )),'setProperty("attach") successful.'); // FMTTYPE for *.doc: application/binary
$test->ok($t->setProperty( "attendee" , "attendee1@ical.net" , array( "cutype" => "INDIVIDUAL" , "member" => array( "member1@ical.net" , "member2@ical.net" , "member3@ical.net" ) , "role" => "CHAIR" , "PARTSTAT" => "ACCEPTED" , "RSVP" => "TRUE" , "DELEgated-to" => array( "part1@ical.net" , "part2@ical.net" , "part3@ical.net" ) , "delegateD-FROM" =>array( "cio@ical.net" , "vice.cio@ical.net") , "SENT-BY" => "secretary@ical.net" , "LANGUAGE" => "us-EN" , "CN" => "John Doe" , "DIR" => "http://www.ical.net/info.doc" , "x-agenda" => "status reports" , "x-length" => "15 min" )),'setProperty("attendee") [1] successful.');
$test->ok($t->setProperty( "attendee" , "attendee2@ical.net" , array( "cutype" => "INDIVIDUAL" , "member" => array( "member1@ical.net" , "member2@ical.net" , "member3@ical.net" ) , "role" => "CHAIR" , "PARTSTAT" => "ACCEPTED" , "RSVP" => "TRUE" , "DELEgated-to" => array( "part1@ical.net" , "part2@ical.net" , "part3@ical.net" ) , "delegateD-FROM" =>array( "cio@ical.net" , "vice.cio@ical.net") , "SENT-BY" => "secretary@ical.net" , "LANGUAGE" => "de-DE" , "DE" => "André Lademann" , "DIR" => "http://www.ical.net/info.doc" , "x-agenda" => "status reports" , "x-length" => "15 min" )),'setProperty("attendee") [2] successful.');

$test->ok($c->setComponent( $t ),'Add component to calendar successful.');       // add component to calendar



/*
 * 4rth part: Running the test
 */

$test->diag("==== Check getProperty(NAME) ToDo ================================");

$test->isa_ok($t->getProperty('related-to',1), 'string', 'getProperty("related-to") returns a array.');
$test->is_deeply($t->getProperty('related-to',1), "19960401-080045-4000F192713@host.com", 'getProperty("related-to") returns the correct content.');

$test->isa_ok($t->getProperty('dtstart'), 'array', 'getProperty("dtstart") returns a array.');
$test->is_deeply($t->getProperty('dtstart'), array (  'year' => '1997',  'month' => '04',  'day' => '15',  'hour' => '13',  'min' => '30',  'sec' => '00',  'tz' => 'GMT'), 'getProperty("dtstart") returns the correct content.');

$test->isa_ok($t->getProperty('due'), 'array', 'getProperty("due") returns a array.');
$test->is_deeply($t->getProperty('due'), array(  'year' => 2010,  'month' => 8,  'day' => 11), 'getProperty("due") returns the correct content.');

$test->isa_ok($t->getProperty('created'), 'array', 'getProperty("created") returns a array.');
$test->is_deeply($t->getProperty('created'), array("year" => 2010, "month" => 07, "day" => 10, "hour" => 10, "min" => 0, "sec" => 0, "tz" => "+0200"), 'getProperty("created") returns the correct content. ');

$test->isa_ok($t->getProperty('completed'), 'array', 'getProperty("completed") returns a array.');
$test->is_deeply($t->getProperty('completed'), array (  'year' => '2012',  'month' => '04',  'day' => '16',  'hour' => '11',  'min' => '18',  'sec' => '10',  'tz' => 'Z'), 'getProperty("completed") returns the correct content.');

$test->isa_ok($t->getProperty('duration'), 'array', 'getProperty("duration") returns a array.');
$test->is_deeply($t->getProperty('duration'), array (  'day' => 1), 'getProperty("duration") returns the correct content.');

$test->isa_ok($t->getProperty('last-modified'), 'array', 'getProperty("last-modified") returns a array.');
$test->is_deeply($t->getProperty('last-modified'), array (  'year' => '2010',  'month' => '07',  'day' => '14',  'hour' => '16',  'min' => '00',  'sec' => '00',  'tz' => 'Z'), 'getProperty("last-modified") returns the correct content.');

$test->isa_ok($t->getProperty('recurrence-id'), 'array', 'getProperty("recurrence-id") returns a array.');
$test->is_deeply($t->getProperty('recurrence-id'), array (  'year' => '2014',  'month' => '03',  'day' => '11',  'hour' => '20',  'min' => '58',  'sec' => '10'), 'getProperty("completed") returns the correct content. (FAMILY)');

$test->isa_ok($t->getProperty('sequence'), 'integer', 'getProperty("priority") returns a integer.');
$test->is($t->getProperty('sequence'), 2, 'getProperty("sequence") returns the correct content. (2)');

$test->isa_ok($t->getProperty('summary'), 'string', 'getProperty("summary") returns a string.');
$test->is($t->getProperty('summary'), '1996 Income Tax Preparation', 'getProperty("summary") returns the correct content.');

$test->isa_ok($t->getProperty('summary',1), 'string', 'getProperty("summary") returns a string.');
$test->is($t->getProperty('summary',1), '1996 Income Tax Preparation', 'getProperty("summary") returns the correct content.');

$test->isa_ok($t->getProperty('comment',1), 'string', 'getProperty("comment") returns a string.');
$test->is($t->getProperty('comment',1), 'This is a comment.', 'getProperty("comment") returns the correct content.');

$test->isa_ok($t->getProperty('description',1), 'string', 'getProperty("description") returns a string');
$test->is($t->getProperty('description',1), 'This is a description.', 'getProperty("description") returns the correct content.');

$test->isa_ok($t->getProperty('class'), 'string', 'getProperty("class") returns a string.');
$test->is($t->getProperty('class'), 'CONFIDENTIAL', 'getProperty("class") returns the correct content.');

$test->isa_ok($t->getProperty('categories',1), 'string', 'getProperty("categories") returns a string.');
$test->is($t->getProperty('categories',1), 'FAMILY', 'getProperty("categories") returns the correct content. (FAMILY)');

$test->isa_ok($t->getProperty('categories',2), 'string', 'getProperty("categories") returns a string.');
$test->is($t->getProperty('categories',2), 'FINANCE', 'getProperty("categories") returns the correct content. (FINANCE)');

$test->isa_ok($t->getProperty('location'), 'string', 'getProperty("location") returns a string.');
$test->is($t->getProperty('location'), 'Buckingham Palace', 'getProperty("location") returns the correct content.');

$test->isa_ok($t->getProperty('resources',1), 'string', 'getProperty("resources") returns a string.');
$test->is($t->getProperty('resources',1), 'COMPUTER PROJECTOR', 'getProperty("resources") returns the correct content.');

$test->isa_ok($t->getProperty('organizer', FALSE , TRUE ), 'array', 'getProperty("organizer") returns a string.');
$test->is_deeply($t->getProperty('organizer'), 'ical@domain.com', 'getProperty("organizer") returns the correct content.');

$test->isa_ok($t->getProperty('contact',1), 'string', 'getProperty("contact") returns a string.');
$test->is($t->getProperty('contact',1), 'vergissberlin@googlemail.com', 'getProperty("contact") returns the correct content.');

$test->isa_ok($t->getProperty('geo'), 'array', 'getProperty("geo") returns a string.');
$test->is_deeply($t->getProperty('geo'), array (  'latitude' => 11.23456,  'longitude' => -23.45678), 'getProperty("geo") returns the correct content.');

$test->isa_ok($t->getProperty('priority'), 'integer', 'getProperty("priority") returns a integer.');
$test->is($t->getProperty('priority'),1, 'getProperty("priority") returns the correct content. (1)');

$test->isa_ok($t->getProperty('percent-complete'), 'integer', 'getProperty("percent-complete") returns a integer.');
$test->is($t->getProperty('percent-complete'), 90, 'getProperty("percent-complete") returns the correct content. (90)');

$test->isa_ok($t->getProperty('attach',1), 'string', 'getProperty("attach") returns a string.');
$test->is($t->getProperty('attach',1),'http://www.symfony-project.org/images/symfony_logo.gif','getProperty("attach") returns the correct content. (1)');

$test->isa_ok($t->getProperty('attendee',1), 'string', 'getProperty("attendee") returns a string.');
$test->is($t->getProperty('attendee',1,propOrderNo,true), array ('value' => 'attendee1@ical.net','params' =>array ('ROLE' => 'CHAIR','PARTSTAT' => 'ACCEPTED','RSVP' => 'TRUE','SENT-BY' => 'secretary@ical.net','LANGUAGE' => 'us-EN','CN' => 'John Doe','DIR' => 'http://www.ical.net/info.doc','X-AGENDA' => 'status reports','X-LENGTH' => '15 min','MEMBER' =>array (0 => 'member1@ical.net',1 => 'member2@ical.net',2 => 'member3@ical.net',),'DELEGATED-TO' =>array (0 => 'part1@ical.net',1 => 'part2@ical.net',2 => 'part3@ical.net',),'DELEGATED-FROM' =>array (0 => 'cio@ical.net', 1 => 'vice.cio@ical.net'))), 'getProperty("attendee") returns the correct content.');
$test->is($t->getProperty('attendee',2,propOrderNo,true), array ('value' => 'attendee2@ical.net','params' =>array ('ROLE' => 'CHAIR','PARTSTAT' => 'ACCEPTED','RSVP' => 'TRUE','SENT-BY' => 'secretary@ical.net','LANGUAGE' => 'de-DE','DE' => 'André Lademann','DIR' => 'http://www.ical.net/info.doc','X-AGENDA' => 'status reports','X-LENGTH' => '15 min','MEMBER' =>array (0 => 'member1@ical.net',1 => 'member2@ical.net',2 => 'member3@ical.net',),'DELEGATED-TO' =>array (0 => 'part1@ical.net',1 => 'part2@ical.net',2 => 'part3@ical.net',),'DELEGATED-FROM' =>array (0 => 'cio@ical.net', 1 => 'vice.cio@ical.net'))), 'getProperty("attendee") returns the correct content.');


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
BEGIN:SFICALTODO
DTSTAMP:20100710T080000Z
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
CATEGORIES:FAMILY
CATEGORIES:FINANCE
CLASS:CONFIDENTIAL
COMMENT:This is a comment.
COMPLETED:20120416T111810Z
CONTACT:vergissberlin@googlemail.com
CREATED:20100710T080000Z
DESCRIPTION:This is a description.
DTSTART;TZID=GMT:19970415T133000
DUE;VALUE=DATE:20100811
DURATION:P1D
GEO:11.234560;-23.456780
LAST-MODIFIED:20100714T160000Z
LOCATION:Buckingham Palace
ORGANIZER;CN="John Doe";DIR="ldap://host.com:6666/o=3DDC%20Comp,c=3DUS??(cn
 =3DJohn%20Doe)";SENT-BY="MAILTO:secretary@domain.com";X-KEY1=x-Value;X-KEY
 2=y-Value:MAILTO:ical@domain.com
PERCENT-COMPLETE:90
PRIORITY:1
RELATED-TO:<19960401-080045-4000F192713@host.com>
RECURRENCE-ID:20140311T205810
RESOURCES:COMPUTER PROJECTOR
SEQUENCE:2
STATUS:NEEDS-ACTION
SUMMARY:1996 Income Tax Preparation
END:SFICALTODO
END:VCALENDAR
','createCalendar() returns the correct string');
