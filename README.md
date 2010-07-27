<style type="text/css">
h1 {
BACKGROUND-COLOR: silver;
BORDER          : thin solid black;
FONT-SIZE       : x-large;
FONT-WEIGHT     : bold;
DISPLAY         : block;
}
h2 {
FONT-FAMILY     : "Lucida Grande","Lucida Sans Unicode", "Bitstream Vera Sans", Lucida, Arial, Geneva, Helvetica, sans-serif;
FONT-SIZE       : large;
}
h3 {
FONT-FAMILY     : "Lucida Grande","Lucida Sans Unicode", "Bitstream Vera Sans", Lucida, Arial, Geneva, Helvetica, sans-serif;
FONT-SIZE       : medium;
}
h4 {
FONT-FAMILY     : "Lucida Grande","Lucida Sans Unicode", "Bitstream Vera Sans", Lucida, Arial, Geneva, Helvetica, sans-serif;
FONT-SIZE       : small;
FONT-WEIGHT     : bold;
}
h5 {
FONT-FAMILY     : "Lucida Grande","Lucida Sans Unicode", "Bitstream Vera Sans", Lucida, Arial, Geneva, Helvetica, sans-serif;
FONT-SIZE       : small;
FONT-WEIGHT     : normal;
TEXT-DECORATION : underline;
}
p {
FONT-FAMILY     : "Lucida Grande","Lucida Sans Unicode", "Bitstream Vera Sans", Lucida, Arial, Geneva, Helvetica, sans-serif;
FONT-SIZE       : small;
}
.bb {
BORDER-BOTTOM   : gray dotted thin;
}
.blb {
BORDER-LEFT     : gray dotted thin;
BORDER-BOTTOM   : gray dotted thin;
TEXT-ALIGN      : center;
}
.bl {
BORDER-LEFT     : gray dotted thin;
}
.center {
TEXT-ALIGN      : center;
}
.comment {
background-color: transparent;
FONT-FAMILY     : monospace;
FONT-SIZE       : medium;
FONT-STYLE      : italic;
FONT-WEIGHT     : 300;
LETTER-SPACING  : 0.1em;
WHITE-SPACE     : pre;
}
.quotes {
background-color: transparent;
FONT-FAMILY     : arial;
FONT-SIZE       : small;
FONT-STYLE      : italic;
FONT-WEIGHT     : 300;
LETTER-SPACING  : 0.1em;
WHITE-SPACE     : pre;
}
.format {
BORDER          : gray dotted thin;
FONT-FAMILY     : Courier, "Courier New";
FONT-SIZE       : small;
FONT-WEIGHT     : 500;
LINE-HEIGHT     : 1.5em;
WHITE-SPACE     : pre;
}
.example {
background-color: #DCDCDC;
FONT-FAMILY     : Courier, "Courier New";
FONT-SIZE       : small;
FONT-WEIGHT     : 500;
LINE-HEIGHT     : 1.2em;
WHITE-SPACE     : pre;
}
.header {
BACKGROUND-COLOR: silver;
BORDER          : thin solid black;
FONT-SIZE       : xx-large;
}
.label {
FONT-FAMILY     : arial;
FONT-SIZE       : small;
FONT-WEIGHT     : bold;
LETTER-SPACING  : 0.1em;
}
.ref {
background-color: transparent;
FONT-FAMILY     : monospace, arial;
FONT-SIZE       : x-small;
FONT-STYLE      : italic;
FONT-WEIGHT     : 500;
VERTICAL-ALIGN  : top;
LETTER-SPACING  : 0.1em;
}
</style>
<a name="top"></a>
<p class="header"><h1>Detailed Documentation</h1></p>
Based on iCalcreator class v2.6<br />
copyright (c) 2007-2008 Kjell-Inge Gustafsson, kigkonsult<br /><a href="http://www.kigkonsult.se/iCalcreator/index.php" title="www.kigkonsult.se/iCalcreator" target="_blank">www.kigkonsult.se/iCalcreator</a><br />
ical@kigkonsult.se<br /><h2>Description:</h2>
iCalcreator is a PHP implementation of RFC2445/RFC2446 to manage iCal/xCal formatted files.
<br /><a name="INTRO"></a><h1>1. INTRO</h1><p>
iCalcreator is a PHP class managing iCal formatted files for non-calendar
systems like CMS, project management systems and other applications able
to process calendar information like agendas, tasks, reports, totos,
journaling data and for communication with calendar systems and applications.
</p><p>
iCalcreator features create, parse, edit and select calendar and calendar components.
</p><p>
iCalcreator is built of a single class file with a simple interface and are calendar
component property oriented. Development environment is PHP version 5.x but coding is done
to meet 4.x backward compability.
</p><h2>Ical</h2><p>
A short iCal description is found at <a href="http://en.wikipedia.org/wiki/ICalendar#Core_object" title="iCalendar From Wikipedia, the free encyclopedia">Wikipedia</a>. If You are not familiar with iCal, read this first&#33;<br />
Knowledge of calendar protocol rfc2445/rfc2446  is to recommend;<br /><a href="http://www.kigkonsult.se/downloads/dl.php?f=rfc2445" title="RFC2445">rfc2445</a>
- Internet Calendaring and Scheduling Core Object Specification (iCalendar)<br /><a href="http://www.kigkonsult.se/downloads/dl.php?f=rfc2446" title="RFC2446">rfc2446</a>
- iCalendar Transport-Independent Interoperability Protocol (iTIP) Scheduling Events, BusyTime, To-dos and Journal Entries.
</p><p>
Get RFC2445 - Internet Calendaring and Scheduling Core Object Specification (iCalendar) in <a href="http://www.kigkonsult.se/downloads/dl.php?f=rfc2445" title="RFC2445 in text format"><b>text</b></a>
and <a href="http://www.kigkonsult.se/iCalcreator/iCalDictionary/index.html" target="_blank"><b>HTML</b></a> format,
RFC2446 - iCalendar Transport-Independent Interoperability Protocol (iTIP) Scheduling Events, BusyTime, To-dos and Journal Entries in <a href="http://www.kigkonsult.se/downloads/dl.php?f=rfc2446" title="RFC2446 in text format"><b>text</b></a> format.
</p><p>
All iCalcreator functions calls are made as simple as possible BUT (, &#33;&#33;&#33;,) read these rfc's properly&#33;
xCal (iCal xml) output format is supported but still experimental.
</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><h2>In this manual</h2>
This style is used for text.
<p class="format">This style is used for formats.</p><p class="example">This style is used for PHP coding examples.
<span class="comment"> // this style is used for coding comments.</span></p><p class="comment">This style is used for content details.</p><p class="quotes">This style is used for RFC2445 quotes.</p><p><h2>Compatibility</h2>
The following properties may be required when importing iCal files  into some calendaring software (MS etc.):
<dl><dt>on calendar level
<dd><a href="#METHOD">METHOD</a> property (value PUBLISH etc.)
<dd><a href="#X-PROPERTY">X-WR-CALNAME</a> x-property
<dd><a href="#X-PROPERTY">X-WR-CALDESC</a> x-property
<dd><a href="#X-PROPERTY">X-WR-TIMEZONE</a> x-property
<dt>on component level
<dd><a href="#DTSTAMP">DTSTAMP</a> property (auto created)
<dd><a href="#UID">UID</a> property (auto created)
</dl>
Recommendation is also to set <a href="#Unique_id">unique_id</a> just after creating a new sfiCalCalendar object, to ensure accurate setting of all components <a href="#UID">UID</a> property, even before <a href="#parse_merge">parse</a>.
<p class="label">Example</p><p class="example">$sfiCalCalendar = new sfiCalCalendar();
$sfiCalCalendar->setConfig(   &quot;unique_id&quot;,     &quot;domain.com&quot; );
$sfiCalCalendar->setProperty( &quot;x-wr-calname&quot;,  &quot;Calendar Sample&quot; );
$sfiCalCalendar->setProperty( &quot;X-WR-CALDESC&quot;,  &quot;Calendar Description&quot; );
$sfiCalCalendar->setProperty( &quot;X-WR-TIMEZONE&quot;, &quot;Europe/Stockholm&quot; );
.. .
</p><h2>Addendum</h2><p>
Download iCalcreator <a title="download iCalcreator coding samples" href="http://www.kigkonsult.se/downloads/index.php" target="_blank">coding samples</a>.
<br />
Examples how to employ iCalcreator in software development:<br /><a title="Create iCal event file on-demand from form" href="http://www.kigkonsult.se/eventCreator/index.php" target="_blank">The iCal file event editor</a> and
<a title="tinycal" href="http://www.kigkonsult.se/tinycal/index.php" target="_blank">tinycal</a>, calendar-in-a-box.
</p><p>
There are free iCal/xCal icons in the images directory, to use as buttons on a webpage.
</p>
The command coding examples are only examples, recommendation is to use a
coding standard, the following, incomplete, list is a good start;
<a href="http://www.dagbladet.no/development/phpcodingstandard/" target="_blank">http://www.dagbladet.no/development/phpcodingstandard/</a><a href="http://ez.no/ezpublish/documentation/development/standards/php" target="_blank">http://ez.no/ezpublish/documentation/development/standards/php</a><a href="http://framework.zend.com/manual/en/coding-standard.html" target="_blank">http://framework.zend.com/manual/en/coding-standard.html</a><a href="http://gforge.org/docman/view.php/1/2/coding-standards.html" target="_blank">http://gforge.org/docman/view.php/1/2/coding-standards.html</a><a href="http://pear.php.net/manual/en/standards.php" target="_blank">http://pear.php.net/manual/en/standards.php</a><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a name="INDEX"></a><h2>1.1 INDEX</h2><a href="#INTRO">1. INTRO</a><br /><a href="#INDEX">1.1 INDEX</a><br /><a href="#INSTALL">1.2 INSTALL</a><br /><br /><a href="#Calendar_Component_list">2. Calendar Component list</a><br /><a href="#sfiCalCalendar">2.1 sfiCalCalendar</a><br /><a href="#sfiCalEvent">2.2 sfiCalEvent</a><br /><a href="#sfiCalTodo">2.3 sfiCalTodo</a><br /><a href="#sfiCalJournal">2.4 sfiCalJournal</a><br /><a href="#sfiCalFreebusy">2.5 sfiCalFreebusy</a><br /><a href="#sfiCalAlarm">2.6  sfiCalAlarm</a><br /><a href="#sfiCalTimezone">2.7  sfiCalTimezone</a><br /><a href="#CalProps">2.8  Component Properties</a><br /><br /><a href="#Function_list">3. Function list</a><br /><a href="#Calendar_object_functions">3.1 Calendar object functions</a><br /><a href="#Calendar_object_constructors">3.1.1 Calendar object constructors</a><br /><a href="#sfiCalEvent">3.1.1.1 sfiCalEvent</a><br /><a href="#sfiCalTodo">3.1.1.2 sfiCalTodo</a><br /><a href="#sfiCalJournal">3.1.1.3 sfiCalJournal</a><br /><a href="#sfiCalFreebusy">3.1.1.4 sfiCalFreebusy</a><br /><a href="#sfiCalAlarm">3.1.1.5 sfiCalAlarm</a><br /><a href="#sfiCalTimezone">3.1.1.6 sfiCalTimezone</a><br /><br /><a href="#Calendar_property_functions">3.1.2 Calendar property functions</a><br /><a href="#deleteProperty">3.1.2.1 deleteProperty</a><br /><a href="#getProperty">3.1.2.2 getProperty</a><br /><a href="#setProperty">3.1.2.3 setProperty</a><br /><a href="#CALSCALE">3.1.2.4 CALSCALE</a><br /><a href="#METHOD">3.1.2.5 METHOD</a><br /><a href="#VERSION">3.1.2.6 VERSION</a><br /><a href="#X-PROPERTY">3.1.2.7 X-PROPERTY</a><br /><br /><a href="#Calendar_component_functions">3.1.3 Calendar component functions</a><br /><a href="#deleteComponent">3.1.3.1 deleteComponent</a><br /><a href="#getComponent">3.1.3.2 getComponent</a><br /><a href="#selectComponents">3.1.3.3 selectComponents</a><br /><a href="#setComponent">3.1.3.4 setComponent</a><br /><br /><a href="#Calendar_inputoutput_functions">3.1.4 Calendar input/output functions</a><br /><a href="#parse_merge">3.1.4.1 parse and merge</a><br /><a href="#createCalendar">3.1.4.2 createCalendar</a><br /><a href="#returnCalendar">3.1.4.3 returnCalendar</a><br /><a href="#saveCalendar">3.1.4.4 saveCalendar</a><br /><a href="#sort">3.1.4.5 sort</a><br /><a href="#useCachedCalendar">3.1.4.6 useCachedCalendar</a><br /><br /><a href="#Calendar_configuration_functions">3.1.5 Calendar configuration functions</a><br /><a href="#allowEmpty">3.1.5.1 Allow empty components</h4><br /><a href="#Compsinfo">3.1.5.2 Component information</h4><br /><a href="#Delimiter">3.1.5.3 Delimiter</a><br /><a href="#Directory">3.1.5.4 Directory</a><br /><a href="#Fileinfo">3.1.5.5 Fileinfo</a><br /><a href="#Filename">3.1.5.6 Filename</a><br /><a href="#Filesize">3.1.5.7 Filesize</a><br /><a href="#Format">3.1.5.8 Format</a><br /><a href="#Language">3.1.5.9 Language</a><br /><a href="#NewlineChar">3.1.5.10 NewlineChar</a><br /><a href="#Unique_id">3.1.5.11 Unique_id</a><br /><a href="#URL">3.1.5.12 URL</a><br /><br /><a href="#Calendar_component_object_property_function_list">3.2 Calendar component/object property function list</a><br /><a href="#deleteProperty_PROP">3.2.1 deleteProperty</a><br /><a href="#getProperty_PROP">3.2.2 getProperty</a><br /><a href="#parse">3.2.3 parse</a><br /><a href="#setProperty_PROP">3.2.4 setProperty</a><br /><a href="#ACTION">3.2.5 ACTION</a><br /><a href="#ATTACH">3.2.6 ATTACH</a><br /><a href="#ATTENDEE">3.2.7 ATTENDEE</a><br /><a href="#CATEGORIES">3.2.8 CATEGORIES</a><br /><a href="#CLASS">3.2.9 CLASS</a><br /><a href="#COMMENT">3.2.10 COMMENT</a><br /><a href="#COMPLETED">3.2.11 COMPLETED</a><br /><a href="#CONTACT">3.2.12 CONTACT</a><br /><a href="#CREATED">3.2.13 CREATED</a><br /><a href="#DESCRIPTION">3.2.14 DESCRIPTION</a><br /><a href="#DTEND">3.2.15 DTEND</a><br /><a href="#DTSTAMP">3.2.16 DTSTAMP</a><br /><a href="#DTSTART">3.2.17 DTSTART</a><br /><a href="#DUE">3.2.18 DUE</a><br /><a href="#DURATION">3.2.19 DURATION</a><br /><a href="#EXDATE">3.2.20 EXDATE</a><br /><a href="#EXRULE">3.2.21 EXRULE</a><br /><a href="#FREEBUSY_PROP">3.2.22 FREEBUSY</a><br /><a href="#GEO">3.2.23 GEO</a><br /><a href="#LAST-MODIFIED">3.2.24 LAST-MODIFIED</a><br /><a href="#LOCATION">3.2.25 LOCATION</a><br /><a href="#ORGANIZER">3.2.26 ORGANIZER</a><br /><a href="#PERCENT-COMPLETE">3.2.27 PERCENT-COMPLETE</a><br /><a href="#PRIORITY">3.2.28 PRIORITY</a><br /><a href="#RDATE">3.2.29 RDATE</a><br /><a href="#RECURRENCE-ID">3.2.30 RECURRENCE-ID</a><br /><a href="#RELATED-TO">3.2.31 RELATED-TO</a><br /><a href="#REPEAT">3.2.32 REPEAT</a><br /><a href="#REQUEST-STATUS">3.2.33 REQUEST-STATUS</a><br /><a href="#RESOURCES">3.2.34 RESOURCES</a><br /><a href="#RRULE">3.2.35 RRULE</a><br /><a href="#SEQUENCE">3.2.36 SEQUENCE</a><br /><a href="#STATUS">3.2.37 STATUS</a><br /><a href="#SUMMARY">3.2.38 SUMMARY</a><br /><a href="#TRANSP">3.2.39 TRANSP</a><br /><a href="#TRIGGER">3.2.40 TRIGGER</a><br /><a href="#TZID">3.2.41 TZID</a><br /><a href="#TZNAME">3.2.42 TZNAME</a><br /><a href="#TZOFFSETFROM">3.2.43 TZOFFSETFROM</a><br /><a href="#TZOFFSETTO">3.2.44 TZOFFSETTO</a><br /><a href="#TZURL">3.2.45 TZURL</a><br /><a href="#UID">3.2.46 UID</a><br /><a href="#URL">3.2.47 URL</a><br /><a href="#X-PROPERTY_PROP">3.2.48 X-PROPERTY</a><br /><br /><a href="#Calendar_component_configuration_functions">3.3 Calendar Component configuration functions</a><br /><a href="#Language_PROP">3.3.1 Language</a><br /><br /><a href="#Calendar_component_object_misc_functions">3.4 Calendar component object misc. functions</a><br /><a href="#deleteComponent_PROP">3.4.1 deleteComponent</a><br /><a href="#getComponent_PROP">3.4.2 getComponent</a><br /><a href="#setComponent_PROP">3.4.3 setComponent</a><br /><br /><a href="#Copyright_and_Licence">4. COPYRIGHT AND LICENSE</a><br /><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a name="INSTALL"></a><h2>1.2 INSTALL</h2>
Unpack to any folder<br />
- add this folder to your include-path<br />
- or unpack to your application-(include)-folder<br />
Add
<p class="format">require_once [folder/]iCalcreator.class.php;</p>
to your php-script.
<br /><br />
If using php version 5.x, the default timezone need to be set/altered, now &quot;Europe/Stockholm&quot;,
line 47 in the class file.
<br /><br />
When creating a new calendar object, review <a href="#Calendar_configuration_functions">config</a> settings.
<br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a name="Calendar_Component_list"></a><h1>2. Calendar Component list</h1>
Quote from <a href="http://www.kigkonsult.se/iCalcreator/iCalDictionary/index.html" title="RFC2445 in HTML format">rfc2445</a>&#33;
(Described in iCal output format, content corresponds to xCal format.)<br /><a name="sfiCalCalendar"></a><h2>2.1 sfiCalCalendar</h2><p class="center">icalobject = 1*(&quot;BEGIN&quot; &quot;:&quot; &quot;sfiCalCalendar&quot; CRLF</p><p class="center">icalbody</p><p class="center">&quot;END&quot; &quot;:&quot; &quot;sfiCalCalendar&quot; CRLF)</p><br />
icalbody = calprops component
<br />
calprops = 2*(
<br /><p class="center">&quot;prodid&quot; and &quot;version&quot; are both REQUIRED, but MUST NOT occur more than once
<p class="center">prodid / <a href="#VERSION">version</a> /</p><p class="center">&quot;calscale&quot;and &quot;method&quot;are optional, but MUST NOT occur more than once</p><p class="center"><a href="#CALSCALE">calscale</a> / <a href="#METHOD">method</a> /</p><p class="center"><a href="#X-PROPERTY">x-prop</a></p>
)
<br /><p class="center">component  = 1*(<a href="#sfiCalEvent">eventc</a> / <a href="#sfiCalTodo">todoc</a> / <a href="#sfiCalJournal">journalc</a> / <a href="#sfiCalFreebusy">freebusyc</a> / <a href="#sfiCalTimezone">timezonec</a> / iana-comp* / x-comp*)</p><p class="center">iana-comp  = &quot;BEGIN&quot; &quot;:&quot; iana-token CRLF</p><p class="center">1*contentline</p><p class="center">&quot;END&quot; &quot;:&quot; iana-token CRLF</p><p class="center">x-comp     = &quot;BEGIN&quot; &quot;:&quot; x-name CRLF</p><p class="center">1*contentline</p><p class="center">&quot;END&quot; &quot;:&quot; x-name CRLF</p>
*) <span class="comment">not supported by iCalcreator</span></p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_Component_list">[up]</a><a name="sfiCalEvent"></a><h2>2.2 sfiCalEvent</h2><p class="center">&quot;BEGIN&quot; &quot;:&quot; &quot;sfiCalEvent&quot; CRLF</p><p class="center">eventprop *alarmc</p><p class="center">&quot;END&quot; &quot;:&quot; &quot;sfiCalEvent&quot; CRLF</p>
eventprop = *(
<p class="center">the following are optional,but MUST NOT occur more than once</p><p class="center"><a href="#CLASS">class</a> / <a href="#CREATED">created</a> / <a href="#DESCRIPTION">description</a> / <a href="#DTSTART">dtstart</a> /</p><p class="center"><a href="#GEO">geo</a> / <a href="#LAST-MODIFIED">last-mod</a> / <a href="#LOCATION">location</a> / <a href="#ORGANIZER">organizer</a> / <a href="#PRIORITY">priority</a> / </p><p class="center"><a href="#DTSTAMP">dtstamp</a> / <a href="#SEQUENCE">seq</a> / <a href="#STATUS">status</a> / <a href="#SUMMARY">summary</a> / </p><p class="center"><a href="#TRANSP">transp</a> / <a href="#UID">uid</a> / <a href="#URL">url</a> / <a href="#RECURRENCE-ID">recurid</a> /</p><p class="center">either &quot;<a href="#DTEND">dtend</a>&quot; or &quot;<a href="#DURATION">duration</a>&quot; may appear in a &quot;eventprop&quot;, </p><p class="center">but &quot;<a href="#DTEND">dtend</a>&quot; and &quot;<a href="#DURATION">duration</a>&quot; MUST NOT occur in the same &quot;eventprop&quot;</p><p class="center"><a href="#DTEND">dtend</a> / <a href="#DURATION">duration</a> /</p><p class="center">the following are optional, and MAY occur more than once</p><p class="center"><a href="#ATTACH">attach</a> / <a href="#ATTENDEE">attendee</a> / <a href="#CATEGORIES">categories</a> / <a href="#COMMENT">comment</a> / </p><p class="center"><a href="#CONTACT">contact</a> / <a href="#EXDATE">exdate</a> / <a href="#EXRULE">exrule</a> / <a href="#REQUEST-STATUS">rstatus</a> / </p><p class="center"><a href="#RELATED-TO">related</a> / <a href="#RESOURCES">resources</a> / <a href="#RDATE">rdate</a> / <a href="#RRULE">rrule</a> / <a href="#X-PROPERTY_PROP">x-prop</a></p>
)
<br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_Component_list">[up]</a><a name="sfiCalTodo"></a><h2>2.3 sfiCalTodo</h2><p class="center">&quot;BEGIN&quot; &quot;:&quot; &quot;sfiCalTodo&quot; CRLF</p><p class="center">todoprop *alarmc</p><p class="center">&quot;END&quot; &quot;:&quot; &quot;sfiCalTodo&quot; CRLF</p>
todoprop   = *(
<p class="center">the following are optional, but MUST NOT occur more than once</p><p class="center"><a href="#CLASS">class</a> / <a href="#COMPLETED">completed</a> / <a href="#CREATED">created</a> / <a href="#DESCRIPTION">description</a> / <a href="#DTSTAMP">dtstamp</a> / <a href="#DTSTART">dtstart</a> / </p><p class="center"><a href="#GEO">geo</a> / <a href="#LAST-MODIFIED">last-mod</a> / <a href="#LOCATION">location</a> / <a href="#ORGANIZER">organizer</a> / <a href="#PERCENT-COMPLETE">percent</a> / <a href="#PRIORITY">priority</a> / </p><p class="center"><a href="#RECURRENCE-ID">recurid</a> / <a href="#SEQUENCE">seq</a> / <a href="#STATUS">status</a> / <a href="#SUMMARY">summary</a> /<a href="#UID">uid</a> / <a href="#URL">url</a> /</p><p class="center">either &quot;<a href="#DUE">due</a>&quot; or &quot;<a href="#DURATION">duration</a>&quot; may appear in a &quot;todoprop&quot;,</p><p class="center"> but &quot;<a href="#DUE">due</a>&quot; and &quot;<a href="#DURATION">duration</a>&quot; MUST NOT occur in the same &quot;todoprop&quot;</p><p class="center"><a href="#DUE">due</a> / <a href="#DURATION">duration</a> /</p><p class="center">the following are optional,and MAY occur more than once</p><p class="center"><a href="#ATTACH">attach</a> / <a href="#ATTENDEE">attendee</a> / <a href="#CATEGORIES">categories</a> / <a href="#COMMENT">comment</a> / </p><p class="center"><a href="#CONTACT">contact</a> / <a href="#EXDATE">exdate</a> / <a href="#EXRULE">exrule</a> / <a href="#REQUEST-STATUS">rstatus</a> / </p><p class="center"><a href="#RELATED-TO">related</a> / <a href="#RESOURCES">resources</a> / <a href="#RDATE">rdate</a> / <a href="#RRULE">rrule</a> / <a href="#X-PROPERTY_PROP">x-prop</a></p>
)
<br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_Component_list">[up]</a><a name="sfiCalJournal"></a><h2>2.4 sfiCalJournal</h2><p class="center">journalc   = &quot;BEGIN&quot; &quot;:&quot; &quot;sfiCalJournal&quot; CRLF</p><p class="center">jourprop</p><p class="center">&quot;END&quot; &quot;:&quot; &quot;sfiCalJournal&quot; CRLF</p>
jourprop   = *(
<p class="center">the following are optional, but MUST NOT occur more than once</p><p class="center"><a href="#CLASS">class</a> / <a href="#CREATED">created</a> / <a href="#DESCRIPTION">description</a> / <a href="#DTSTART">dtstart</a> / </p><p class="center"><a href="#DTSTAMP">dtstamp</a> / <a href="#LAST-MODIFIED">last-mod</a> / <a href="#ORGANIZER">organizer</a> / <a href="#RECURRENCE-ID">recurid</a> / </p><p class="center"><a href="#SEQUENCE">seq</a> / <a href="#STATUS">status</a> / <a href="#SUMMARY">summary</a> /<a href="#UID">uid</a> / <a href="#URL">url</a> /</p><p class="center">the following are optional,and MAY occur more than once</p><p class="center"><a href="#ATTACH">attach</a> / <a href="#ATTENDEE">attendee</a> / <a href="#CATEGORIES">categories</a> / <a href="#COMMENT">comment</a> /</p><p class="center"><a href="#CONTACT">contact</a> / <a href="#EXDATE">exdate</a> / <a href="#EXRULE">exrule</a> / <a href="#RELATED-TO">related</a> / </p><p class="center"><a href="#RDATE">rdate</a> / <a href="#RRULE">rrule</a> / <a href="#REQUEST-STATUS">rstatus</a> / <a href="#X-PROPERTY_PROP">x-prop</a></p>
)
<br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_Component_list">[up]</a><a name="sfiCalFreebusy"></a><h2>2.5 sfiCalFreebusy</h2><p class="center">&quot;BEGIN&quot; &quot;:&quot; &quot;sfiCalFreebusy&quot; CRLF</p><p class="center">fbprop</p><p class="center">&quot;END&quot; &quot;:&quot; &quot;sfiCalFreebusy&quot; CRLF</p>
fbprop     = *(
<p class="center">the following are optional, but MUST NOT occur more than once</p><p class="center"><a href="#CONTACT">contact</a> / <a href="#DTSTART">dtstart</a> / <a href="#DTEND">dtend</a> / <a href="#DURATION">duration</a> / </p><p class="center"><a href="#DTSTAMP">dtstamp</a> / <a href="#ORGANIZER">organizer</a> / <a href="#UID">uid</a> / <a href="#URL">url</a> / </p><p class="center">the following are optional,and MAY occur more than once</p><p class="center"><a href="#ATTENDEE">attendee</a> / <a href="#COMMENT">comment</a> / <a href="#FREEBUSY_PROP">freebusy</a> / <a href="#REQUEST-STATUS">rstatus</a> / <a href="#X-PROPERTY_PROP">x-prop</a></p>
)
<br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_Component_list">[up]</a><a name="sfiCalAlarm"></a><h2>2.6 sfiCalAlarm</h2><p class="center">&quot;BEGIN&quot; &quot;:&quot; &quot;sfiCalAlarm&quot; CRLF</p><p class="center">(audioprop / dispprop / emailprop / procprop)</p><p class="center">&quot;END&quot; &quot;:&quot; &quot;sfiCalAlarm&quot; CRLF</p> audioprop  = 2*(
<p class="center">&quot;<a href="#ACTION">action</a>&quot; and &quot;<a href="#TRIGGER">trigger</a>&quot; are both REQUIRED, but MUST NOT occur more than once</p><p class="center"><a href="#ACTION">action</a> / <a href="#TRIGGER">trigger</a> /</p><p class="center">&quot;<a href="#DURATION">duration</a>&quot; and &quot;<a href="#REPEAT">repeat</a>&quot; are both optional,and MUST NOT occur more than once each,</p><p class="center">but if one occurs, so MUST the other</p><p class="center"><a href="#DURATION">duration</a> / <a href="#REPEAT">repeat</a> /</p><p class="center">the following is optional, but MUST NOT occur more than once</p><p class="center"><a href="#ATTACH">attach</a> / </p><p class="center">the following is optional, and MAY occur more than once</p><p class="center"><a href="#X-PROPERTY_PROP">x-prop</a></p>
)
<br />
dispprop   = 3*(
<p class="center">the following are all REQUIRED, but MUST NOT occur more than once</p><p class="center"><a href="#ACTION">action</a> / <a href="#DESCRIPTION">description</a> / <a href="#TRIGGER">trigger</a> /</p><p class="center">&quot;<a href="#DURATION">duration</a>&quot; and &quot;<a href="#REPEAT">repeat</a>&quot; are both optional,and MUST NOT occur more than once each,</p><p class="center">but if one occurs, so MUST the other</p><p class="center"><a href="#DURATION">duration</a> / <a href="#REPEAT">repeat</a> /</p><p class="center">the following is optional, and MAY occur more than once</p><p class="center"><a href="#X-PROPERTY_PROP">x-prop</a></p>
)
<br />
emailprop  = 5*(
<p class="center">the following are all REQUIRED, but MUST NOT occur more than once</p><p class="center"><a href="#ACTION">action</a> / <a href="#DESCRIPTION">description</a> / <a href="#TRIGGER">trigger</a> / <a href="#SUMMARY">summary</a></p><p class="center">the following is REQUIRED, and MAY occur more than once</p><p class="center"><a href="#ATTENDEE">attendee</a> / </p><p class="center">&quot;<a href="#DURATION">duration</a>&quot; and &quot;<a href="#REPEAT">repeat</a>&quot; are both optional, and MUST NOT occur more than once each,</p><p class="center">but if one occurs, so MUST the other</p><p class="center"><a href="#DURATION">duration</a> / <a href="#REPEAT">repeat</a> /</p><p class="center">the following are optional, and MAY occur more than once</p><p class="center"><a href="#ATTACH">attach</a> / <a href="#X-PROPERTY_PROP">x-prop</a></p>
)
<br />
procprop   = 3*(
<p class="center">the following are all REQUIRED, but MUST NOT occur more than once</p><p class="center"><a href="#ACTION">action</a> / <a href="#ATTACH">attach</a> / <a href="#TRIGGER">trigger</a> /</p><p class="center">&quot;<a href="#DURATION">duration</a>&quot; and &quot;<a href="#REPEAT">repeat</a>&quot; are both optional, and MUST NOT occur more than once each,</p><p class="center">but if one occurs, so MUST the other</p><p class="center"><a href="#DURATION">duration</a> /
<a href="#REPEAT">repeat</a> /</p><p class="center">&quot;<a href="#DESCRIPTION">description</a>&quot; is optional, and MUST NOT occur more than once</p><p class="center"><a href="#DESCRIPTION">description</a> / </p><p class="center">the following is optional, and MAY occur more than once</p><p class="center"><a href="#X-PROPERTY_PROP">x-prop</a></p>
)
<br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_Component_list">[up]</a><a name="sfiCalTimezone"></a><h2>2.7 sfiCalTimezone</h2><p class="center">&quot;BEGIN&quot; &quot;:&quot; &quot;sfiCalTimezone&quot; CRLF</p>
2*(
<p class="center">&quot;<a href="#TZID">tzid</a>&quot; is required, but MUST NOT occur more than once</p><p class="center"><a href="#TZID">tzid</a> / </p><p class="center">&quot;<a href="#LAST-MODIFIED">last-mod</a>&quot; and &quot;<a href="#TZURL">tzurl</a>&quot; are optional, but MUST NOT occur more than once</p><p class="center"><a href="#LAST-MODIFIED">last-mod</a> / <a href="#TZURL">tzurl</a> /</p><p class="center">one of &quot;standardc&quot; or &quot;daylightc&quot; MUST occur and each MAY occur more than once.</p><p class="center">standardc / daylightc /</p><p class="center">the following is optional, and MAY occur more than once</p><p class="center"><a href="#X-PROPERTY_PROP">x-prop</a></p>
)
<p class="center">&quot;END&quot; &quot;:&quot; &quot;sfiCalTimezone&quot; CRLF</p><p class="center">standardc  = &quot;BEGIN&quot; &quot;:&quot; &quot;STANDARD&quot; CRLF</p><p class="center">tzprop</p><p class="center">&quot;END&quot; &quot;:&quot; &quot;STANDARD&quot; CRLF</p><p class="center">daylightc  = &quot;BEGIN&quot; &quot;:&quot; &quot;DAYLIGHT&quot; CRLF</p><p class="center">tzprop</p><p class="center">&quot;END&quot; &quot;:&quot; &quot;DAYLIGHT&quot; CRLF</p><br />
tzprop     = 3*(
<p class="center">the following are each REQUIRED, but MUST NOT occur more than once</p><p class="center"><a href="#DTSTART">dtstart</a> / <a href="#TZOFFSETTO">tzoffsetto</a> / <a href="#TZOFFSETFROM">tzoffsetfrom</a> /</p><p class="center">the following are optional, and MAY occur more than once</p><p class="center"><a href="#COMMENT">comment</a> /<a href="#RDATE">rdate</a> / <a href="#RRULE">rrule</a> / <a href="#TZNAME">tzname</a> / <a href="#X-PROPERTY_PROP">x-prop</a></p>
)
<br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_Component_list">[up]</a><a name="CalProps"></a><h2>2.8  Component Properties</h2>
A comprehensive table showing relation between calendar components and properties.
<a href="#sfiCalTimezone">sfiCalTimezone</a> properties are not included.
<br /><br />
{|
| 0-1
|  colspan="8" | OPTIONAL property, MUST NOT occur more than once.
|-
| 0-m
|  colspan="8" | OPTIONAL property, MAY occur more than once.
|-
| 0&nbsp;or&nbsp;1=1
|  colspan="8" | A pair of OPTIONAL properties, MUST NOT occur more than once each.<br />If one occurs, so MUST the other
|-
| 0*1
|  colspan="8" | A pair of OPTIONAL properties, MUST NOT occur more than once each.<br />If one occurs, so MUST NOT the other
|-
| 1-m
|  colspan="8" | REQUIRED property, MAY occur more than once.
|-
| 1
|  colspan="8" | REQUIRED property, MUST NOT occur more than once.
|-
|  colspan="9" | &nbsp;
|-
| &nbsp;
|  class="bl ref" | sfiCalEvent
|  class="bl ref" | sfiCalTodo
|  class="bl ref" | sfiCalJournal
|  class="bl ref" | sfiCalFreebusy
|  class="bl ref" | sfiCalAlarm
| &nbsp;
| &nbsp;
| &nbsp;
|-
|  class="bb" | &nbsp;
|  class="bl bb" | &nbsp;
|  class="bl bb" | &nbsp;
|  class="bl bb" | &nbsp;
|  class="bl bb" | &nbsp;
|  class="bl bb ref" | audio
|  class="bl bb ref" | display
|  class="bl bb ref" | email
|  class="bl bb ref" | procedure
|-
|  class="bb ref" | action
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | 1
|  class="blb" | 1
|  class="blb" | 1
|  class="blb" | 1
|-
|  class="bb ref" | attach
|  class="blb" | 0-m
|  class="blb" | 0-m
|  class="blb" | 0-m
|  class="blb" |
|  class="blb" | 0-1
|  class="blb" | &nbsp;
|  class="blb" | 0-m
|  class="blb" | 1
|-
|  class="bb ref" | attendee
|  class="blb" | 0-m
|  class="blb" | 0-m
|  class="blb" | 0-m
|  class="blb" | 0-m
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | 1-m
|  class="blb" | &nbsp;
|-
|  class="bb ref" | categories
|  class="blb" | 0-m
|  class="blb" | 0-m
|  class="blb" | 0-m
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|-
|  class="bb ref" | class
|  class="blb" | 0-1
|  class="blb" | 0-1
|  class="blb" | 0-1
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|-
|  class="bb ref" | comment
|  class="blb" | 0-m
|  class="blb" | 0-m
|  class="blb" | 0-m
|  class="blb" | 0-m
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|-
|  class="bb ref" | compleated
|  class="blb" | &nbsp;
|  class="blb" | 0-1
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|-
|  class="bb ref" | contact
|  class="blb" | 0-m
|  class="blb" | 0-m
|  class="blb" | 0-m
|  class="blb" | 0-1
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|-
|  class="bb ref" | created
|  class="blb" | 0-1
|  class="blb" | 0-1
|  class="blb" | 0-1
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|-
|  class="bb ref" | description
|  class="blb" | 0-1
|  class="blb" | 0-1
|  class="blb" | 0-m
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | 1
|  class="blb" | 1
|  class="blb" | 0-1
|-
|  class="bb ref" | dtend
|  class="blb" | 0*1
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | 0-1
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|-
|  class="bb ref" | dtstamp
|  class="blb" | 0-1
|  class="blb" | 0-1
|  class="blb" | 0-1
|  class="blb" | 0-1
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|-
|  class="bb ref" | dtstart
|  class="blb" | 0-1
|  class="blb" | 0-1
|  class="blb" | 0-1
|  class="blb" | 0-1
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|-
|  class="bb ref" | due
|  class="blb" | &nbsp;
|  class="blb" | 0*1
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|-
|  class="bb ref" | duration
|  class="blb" | 0*1
|  class="blb" | 0*1
|  class="blb" | &nbsp;
|  class="blb" | 0-1
|  class="blb" | 0&nbsp;or&nbsp;1=1
|  class="blb" | 0&nbsp;or&nbsp;1=1
|  class="blb" | 0&nbsp;or&nbsp;1=1
|  class="blb" | 0&nbsp;or&nbsp;1=1
|-
|  class="bb ref" | exdate
|  class="blb" | 0-m
|  class="blb" | 0-m
|  class="blb" | 0-m
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|-
|  class="bb ref" | exrule
|  class="blb" | 0-m
|  class="blb" | 0-m
|  class="blb" | 0-m
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|-
|  class="bb ref" | freebusy
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | 0-m
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|-
|  class="bb ref" | geo
|  class="blb" | 0-1
|  class="blb" | 0-1
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|-
|  class="bb ref" | last-mod
|  class="blb" | 0-1
|  class="blb" | 0-1
|  class="blb" | 0-1
|  class="blb" |
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|-
|  class="bb ref" | location
|  class="blb" | 0-1
|  class="blb" | 0-1
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|-
|  class="bb ref" | organizer
|  class="blb" | 0-1
|  class="blb" | 0-1
|  class="blb" | 0-1
|  class="blb" | 0-1
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|-
|  class="bb ref" | percent
|  class="blb" | &nbsp;
|  class="blb" | 0-1
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|-
|  class="bb ref" | priority
|  class="blb" | 0-1
|  class="blb" | 0-1
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|-
|  class="bb ref" | rdate
|  class="blb" | 0-m
|  class="blb" | 0-m
|  class="blb" | 0-m
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|-
|  class="bb ref" | recurid
|  class="blb" | 0-1
|  class="blb" | 0-1
|  class="blb" | 0-1
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|-
|  class="bb ref" | related
|  class="blb" | 0-m
|  class="blb" | 0-m
|  class="blb" | 0-m
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|-
|  class="bb ref" | repeat
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | 0&nbsp;or&nbsp;1=1
|  class="blb" | 0&nbsp;or&nbsp;1=1
|  class="blb" | 0&nbsp;or&nbsp;1=1
|  class="blb" | 0&nbsp;or&nbsp;1=1
|-
|  class="bb ref" | resources
|  class="blb" | 0-m
|  class="blb" | 0-m
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|-
|  class="bb ref" | rrule
|  class="blb" | 0-m
|  class="blb" | 0-m
|  class="blb" | 0-m
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|-
|  class="bb ref" | rstatus
|  class="blb" | 0-m
|  class="blb" | 0-m
|  class="blb" | 0-m
|  class="blb" | 0-m
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|-
|  class="bb ref" | sequence
|  class="blb" | 0-1
|  class="blb" | 0-1
|  class="blb" | 0-1
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|-
|  class="bb ref" | status
|  class="blb" | 0-1
|  class="blb" | 0-1
|  class="blb" | 0-1
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|-
|  class="bb ref" | summary
|  class="blb" | 0-1
|  class="blb" | 0-1
|  class="blb" | 0-1
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | 1
|  class="blb" | &nbsp;
|-
|  class="bb ref" | transp
|  class="blb" | 0-1
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|-
|  class="bb ref" | trigger
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | 1
|  class="blb" | 1
|  class="blb" | 1
|  class="blb" | 1
|-
|  class="bb ref" | uid
|  class="blb" | 0-1
|  class="blb" | 0-1
|  class="blb" | 0-1
|  class="blb" | 0-1
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|-
|  class="bb ref" | url
|  class="blb" | 0-1
|  class="blb" | 0-1
|  class="blb" | 0-1
|  class="blb" | 0-1
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|  class="blb" | &nbsp;
|-
|  class="bb ref" | x-prop
|  class="blb" | 0-m
|  class="blb" | 0-m
|  class="blb" | 0-m
|  class="blb" | 0-m
|  class="blb" | 0-m
|  class="blb" | 0-m
|  class="blb" | 0-m
|  class="blb" | 0-m
|}<p>
If not set, DTSTART and UID are created automatic by iCalcreator for sfiCalEvent, sfiCalTodo, sfiCalJournal and vfeebusy components
when using calendar functions saveCalendar or returnCalendar or when fetching DTSTART/UID property value with
component function getProperty.
</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_Component_list">[up]</a><a name="Function_list"></a><h1>3. Function list</h1><a name="Calendar_object_functions"></a><h2>3.1 Calendar object functions</h2><a name="Calendar_object_constructors"></a><h3>3.1.1 Calendar object constructors</h3>
Initiate new CALENDAR.
<p class="label">Format</p><p class="format">sfiCalCalendar()</p><p class="label">Example</p><p class="example">$calendar = new sfiCalCalendar();// <span class="ref">initiate new CALENDAR</p></span><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Function_list">[up]</a><a name="sfiCalEvent"></a><h4>3.1.1.1 sfiCalEvent</h4>
Initiate calendar component EVENT.
<p class="label">Format</p><p class="format">sfiCalEvent()</p><p class="label">Example</p><p class="example">$sfiCalEvent = new sfiCalEvent(); // <span class="ref">initiate EVENT</span></p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Function_list">[up]</a><a name="sfiCalTodo"></a><h4>3.1.1.2 sfiCalTodo</h4>
Initiate calendar component TODO.
<p class="label">Format</p><p class="format">sfiCalTodo()</p><p class="label">Example</p><p class="example">$sfiCalTodo = new sfiCalTodo(); // <span class="ref">initiate TODO</span></p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Function_list">[up]</a><a name="sfiCalJournal"></a><h4>3.1.1.3 sfiCalJournal</h4>
Initiate calendar component JOURNAL.
<p class="label">Format</p><p class="format">sfiCalJournal()</p><p class="label">Example</p><p class="example">$sfiCalJournal = new sfiCalJournal(); // <span class="ref">initiate JOURNAL</span></p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Function_list">[up]</a><a name="sfiCalFreebusy"></a><h4>3.1.1.4 sfiCalFreebusy</h4>
Initiate calendar component FREEBUSY.
<p class="label">Format</p><p class="format">sfiCalFreebusy()</p><p class="label">Example</p><p class="example">$sfiCalFreebusy = new sfiCalFreebusy(); // <span class="ref">initiate FREEBUSY</span></p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Function_list">[up]</a><a name="sfiCalAlarm"></a><h4>3.1.1.5 sfiCalAlarm</h4>
Initiate calendar component ALARM.
<p class="label">Format</p><p class="format">sfiCalAlarm()</p><p class="label">Example</p><p class="example">$sfiCalAlarm = new sfiCalAlarm(); // <span class="ref">initiate ALARM</span></p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Function_list">[up]</a><a name="sfiCalTimezone"></a><h4>3.1.1.6 sfiCalTimezone</h4>
Initiate calendar component TIMEZONE.
<p class="label">Format</p><p class="format">sfiCalTimezone()</p><p class="label">Example</p><p class="example">$sfiCalTimezone = new sfiCalTimezone(); // <span class="ref">initiate TIMEZONE</span></p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Function_list">[up]</a><a name="Calendar_property_functions"></a><h3>3.1.2 Calendar property functions</h3><a name="deleteProperty"></a><h4>3.1.2.1 deleteProperty</h4>
General calendar deleteProperty function, simplifying removal of calendar properties.<br />
FALSE is returned if no property exists or when end-of-properties at consecutive function calls.
<p class="label">Format</p><p class="format">deleteProperty( [ string PropName [, int order=1 ] )</p><p class="comment">Propname - case independent, strict rfc2445 component property names,
unknown/missing Propname will be regarded as <a href="#X-PROPERTY">X-property</a>.
order    - if missing 1st/next occurence,
used with multiply (property) occurences
</p><p class="label">Example 1</p><p class="example">$sfiCalCalendar = new sfiCalCalendar();
$sfiCalCalendar->setConfig( &quot;unique_id&quot;, &quot;domain.com&quot; );
$sfiCalCalendar->setConfig( &quot;filename&quot;, &quot;file.ics&quot; );
$sfiCalCalendar->parse();
if( &#33;$sfiCalCalendar->deleteProperty( &quot;method&quot; ))
&nbsp;&nbsp;echo "METHOD property not found";
.. .
</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_property_functions">[up]</a><a name="getProperty"></a><h4>3.1.2.2 getProperty</h4>
General calendar getProperty function, simplifying fetch of calendar properties.<br />
FALSE is returned if no property exists or when end-of-properties at consecutive function calls.
<p class="label">Format</p><p class="format">getProperty( [ string PropName [, int order=1 [, bool complete=FALSE ]]] )</p><p class="comment">Propname - case independent, strict rfc2445 component property names,
unknown/missing Propname will be regarded as <a href="#X-PROPERTY">X-property</a>.
order    - if missing 1st/next occurence,
used with multiply (property) occurences
complete - FALSE (default) : output only property value
- TRUE            : output = array(&quot;value&quot;=&gt; &lt;value&gt;
,&quot;params&quot; =&gt; &lt;parameter array&gt;)
</p><p class="label">Example 1</p><p class="example">$sfiCalCalendar = new sfiCalCalendar();
$sfiCalCalendar->setConfig( &quot;unique_id&quot;, &quot;domain.com&quot; );
$sfiCalCalendar->setConfig( &quot;filename&quot;, &quot;file.ics&quot; );
$sfiCalCalendar->parse();
$calscale = $sfiCalCalendar->getProperty( &quot;calscale&quot; );
.. .
</p><p class="label">Example 2</p><p class="example">$sfiCalCalendar = new sfiCalCalendar();
$sfiCalCalendar->setConfig( &quot;unique_id&quot;, &quot;domain.com&quot; );
$sfiCalCalendar->setConfig( &quot;filename&quot;, &quot;file.ics&quot; );
$sfiCalCalendar->parse();
while( $xprop = $sfiCalCalendar->getProperty( )) { // <span class="ref">get x-properties in order.. .</span>
.. .
</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_property_functions">[up]</a><a name="setProperty"></a><h4>3.1.2.3 setProperty</h4>
General calendar setProperty function,simplifying insert of calendar properties.<br />
A successful update returns TRUE.
<p class="label">Format</p><p class="format">setProperty( string PropName, mixed Proparg_1 *[, mixed Proparg_n] )</p>
Propname case independent, strict rfc2445 calendar property names, unknown Propname will be regarded as <a href="#X-PROPERTY">X-property</a>.
<p class="label">Example</p><p class="example">$sfiCalCalendar = new sfiCalCalendar(); // <span class="ref">initiate new CALENDAR</span>
$sfiCalCalendar->setConfig( &quot;unique_id&quot;, &quot;domain.com&quot; );
$sfiCalCalendar->setProperty( &quot;calscale&quot;, &quot;GREGORIAN&quot; );
</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_property_functions">[up]</a><a name="CALSCALE"></a><h4>3.1.2.4 CALSCALE</h4>
This property defines the calendar scale used for the calendar information specified in the iCalendar object.
<br /><br />
The default value is &quot;GREGORIAN&quot;, implied when missing.
<h5>Delete CALSCALE</h5>
Remove CALSCALE from component.
<h5>Get Calscale</h5>
Fetch property value.
<p class="label">Format</p><p class="format">getProperty( &quot;calscale&quot; )</p><p class="label">Example</p><p class="example">$sfiCalCalendar = new sfiCalCalendar();
$sfiCalCalendar->setConfig( &quot;unique_id&quot;, &quot;domain.com&quot; );
$sfiCalCalendar->setConfig( &quot;filename&quot;, &quot;file.ics&quot; );
$sfiCalCalendar->parse();
$calscale = $sfiCalCalendar->getProperty( &quot;calscale&quot; );
.. .
</p><h5>Set CALSCALE</h5>
Insert property value.
<p class="label">Format</p><p class="format">setProperty( &quot;calscale&quot;, string value )</p><p class="label">Example</p><p class="example">$sfiCalCalendar = new sfiCalCalendar(); // <span class="ref">initiate new CALENDAR</span>
$sfiCalCalendar->setConfig( &quot;unique_id&quot;, &quot;domain.com&quot; );
$sfiCalCalendar->setProperty( &quot;calscale&quot;, &quot;GREGORIAN&quot; );
.. .
</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_property_functions">[up]</a><a name="METHOD"></a><h4>3.1.2.5 METHOD</h4>
This property defines the iCalendar object method associated with the calendar object.
<br /><br />
METHOD property (value PUBLISH etc.) may be required when importing iCal files
into some calendaring software (MS etc.), as well as <a href="#X-PROPERTY">x-properties</a>
"X-WR-CALNAME", "X-WR-CALDESC" and "X-WR-TIMEZONE"
and (auto created) <a href="#DTSTAMP">DTSTAMP</a> and <a href="#UID">UID</a> properties.
<h5>Delete METHOD</h5>
Remove METHOD from component.
<h5>Get METHOD</h5>
Fetch property value.
<p class="label">Format</p><p class="format">getProperty( &quot;method&quot; );</p><p class="label">Example</p><p class="example">$sfiCalCalendar = new sfiCalCalendar();
$sfiCalCalendar->setConfig( &quot;unique_id&quot;, &quot;domain.com&quot; );
$sfiCalCalendar->setConfig( &quot;filename&quot;, &quot;file.ics&quot; );
$sfiCalCalendar->parse();
$method = $sfiCalCalendar->getProperty( &quot;method&quot; )
.. .
</p><h5>Set METHOD</h5>
Insert property value.
<p class="label">Format</p><p class="format">setProperty( &quot;method&quot;, string value )</p><p class="label">Example</p><p class="example">$sfiCalCalendar = new sfiCalCalendar(); // <span class="ref">initiate new CALENDAR</span>
$sfiCalCalendar->setConfig( &quot;unique_id&quot;, &quot;domain.com&quot; );
$sfiCalCalendar->setProperty( &quot;method&quot;, &quot;PUBLISH&quot; )
</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_property_functions">[up]</a><a name="VERSION"></a><h4>3.1.2.6 VERSION</h4>
This property specifies the identifier corresponding to the highest version number or the minimum and maximum range of the iCalendar specification that is required in order to interpret the iCalendar object.<br /><h5>Get Version</h5>
Fetch property value.
<p class="label">Format</p><p class="format">getProperty( &quot;version&quot; )</p><p class="label">Example</p><p class="example">$sfiCalCalendar = new sfiCalCalendar();
$sfiCalCalendar->setConfig( &quot;unique_id&quot;, &quot;domain.com&quot; );
$sfiCalCalendar->setConfig( &quot;filename&quot;, &quot;file.ics&quot; );
$sfiCalCalendar->parse();
$version = $sfiCalCalendar->getProperty( &quot;version&quot; )
.. .
</p><h5>Set Version</h5>
Insert property value.
Only version 2.0 valid, version is <b>AUTO</b> generated at calendar creation.
<p class="label">Format</p><p class="format">setProperty( &quot;version&quot;, string version )</p><p class="label">Example</p><p class="example">$sfiCalCalendar = new sfiCalCalendar(); // <span class="ref">initiate new CALENDAR</span>
$sfiCalCalendar->setConfig( &quot;unique_id&quot;, &quot;domain.com&quot; );
$sfiCalCalendar->setProperty( &quot;version&quot;, &quot;2.0&quot; )
</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_property_functions">[up]</a><a name="X-PROPERTY"></a><h4>3.1.2.7 X-PROPERTY</h4>
A calendar property with TEXT value and a name with an &quot;X-&quot; prefix. In a calendar,
an x-prop, with an unique name, can occur only once but the number of x-props are unlimited.
<br /><br />
X-properties "X-WR-CALNAME", "X-WR-CALDESC" and "X-WR-TIMEZONE"  may be required when importing iCal files
into some calendaring software (MS etc.), as well as <a href="#METHOD">METHOD</a> property (value PUBLISH etc.)
and (auto created) <a href="#DTSTAMP">DTSTAMP</a> and <a href="#UID">UID</a> properties.
<h5>Delete X-PROPERTY</h5>
Remove X-PROPERTY from calendar.
<p class="label">Format</p><p class="format">deleteProperty( &quot;&lt;X-PROPERTY&gt;&quot; )</p><p class="label">Example 1</p><p class="example">$sfiCalCalendar->deleteProperty( &quot;&lt;X-PROPERTY&gt;&quot; );</p><p class="label">Example 2</p>
Deleting all x-properties.
<p class="example">while( $sfiCalCalendar->deleteProperty())
continue;</p><h5>Get X-PROPERTY</h5>
Fetch property value.
<p class="label">Format</p><p class="format">getProperty()<br />
getProperty( &quot;&lt;X-PROPERTY&gt;&quot; )</p><p class="comment">output = array( propertyName<span class="ref">1</span>, propertyData<span class="ref">2</span> )</p><p class="format">getProperty( FALSE, propOrderNo/FALSE, TRUE )</p><p class="comment">output = array( propertyName<span class="ref">1</span>
, array( &quot;value&quot;  =&gt; propertyData<span class="ref">2</span> )
, &quot;params&quot; =&gt; params<span class="ref">&nbsp;3</span>))
</p><p class="label">Example 1</p><p class="example">$sfiCalCalendar = new sfiCalCalendar();
$sfiCalCalendar->setConfig( &quot;unique_id&quot;, &quot;domain.com&quot; );
$sfiCalCalendar->setConfig( &quot;filename&quot;, &quot;file.ics&quot; );
$sfiCalCalendar->parse();
while( $xprop = $sfiCalCalendar->getProperty( )) { //<span class="comment">read all x-props in a loop</span>
.. .
</p><p class="comment">$xprop = array( propertyName<span class="ref">1</span>, propertyData<span class="ref">2</span> )</p><p class="label">Example 2</p><p class="example">$sfiCalCalendar = new sfiCalCalendar();
$sfiCalCalendar->setConfig( &quot;unique_id&quot;, &quot;domain.com&quot; );
$sfiCalCalendar->setConfig( &quot;filename&quot;, &quot;file.ics&quot; );
$sfiCalCalendar->parse();
if( $xprop = $sfiCalCalendar->getProperty( &quot;X-WR-TIMEZONE&quot; )) {
//<span class="comment">if exists, read X-WR-TIMEZONE x-prop</span>
.. .
</p><p class="comment">$xprop = array( &quot;X-WR-TIMEZONE&quot;, propertyData<span class="ref">2</span> )</p><p class="label">Example 3</p><p class="example">$sfiCalCalendar = new sfiCalCalendar();
$sfiCalCalendar->setConfig( &quot;unique_id&quot;, &quot;domain.com&quot; );
$sfiCalCalendar->setConfig( &quot;filename&quot;, &quot;file.ics&quot; );
$sfiCalCalendar->parse();
while( $xprop = $sfiCalCalendar->getProperty( FALSE, FALSE, TRUE )) {
.. .
</p><p class="comment">$xprop = array( propertyName<span class="ref">1</span>
, array( &quot;value &quot; =&gt; propertyData<span class="ref">2</span> )
, &quot;params &quot;=&gt; params<span class="ref">&nbsp;3</span> )
</p><h5>Set X-PROPERTY</h5>
Insert property name and value. If an x-prop with the same name already exists, it will be replaced.
PropertyName are always stored upperCase, ex. x-wr-calname =&gt; X-WR-CALNAME.
<p class="label">Format</p><p class="format">setProperty( propertyName, propertyData [, params ] )</p><p class="comment">propertyName<span class="ref">1</span> = Any property name with a &quot;X-&quot; prefix
propertyData<span class="ref">2</span> = Value type TEXT
params<span class="ref">3</span>       = array( [&quot;LANGUAGE&quot; =&gt; &quot;&lt;lang&gt;&quot;] [, xparam] )
xparam        = *[ xparamkey =&gt; xparamvalue ]
propOrderNo   = int ordernumber, 1=1st, 2=2nd etc</p></p><p class="label">Example</p><p class="example">$sfiCalCalendar = new sfiCalCalendar();&nbsp;// initiate new CALENDAR
$sfiCalCalendar->setConfig( &quot;unique_id&quot;, &quot;domain.com&quot; );
// <span class="ref">set some X-properties.. .</span>
$sfiCalCalendar->setProperty( &quot;x-wr-calname&quot;, &quot;Calendar Sample&quot; )
$sfiCalCalendar->setProperty( &quot;X-WR-CALDESC&quot;, &quot;Calendar Description&quot; );
$sfiCalCalendar->setProperty( &quot;X-WR-TIMEZONE&quot;, &quot;Europe/Stockholm&quot; );
</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_property_functions">[up]</a><a name="Calendar_component_functions"></a><h3>3.1.3 Calendar component functions</h3><a name="deleteComponent"></a><h4>3.1.3.1 deleteComponent</h4>
Remove component from calendar.<br />
FALSE is returned if no property exists or when end-of-properties at consecutive function calls.
<p class="label">format 1</p>
Remove component with order number (1st=1, 2nd=2.. .).
<p class="format">deleteComponent( int orderNumber )</p><p class="label">format 2</p>
Remove component with component type (e.g. &quot;sfiCalEvent&quot;) and order 1 alt. suborder number.
<p class="format">deleteComponent( string componentType [, int componentSuborderNumber])</p><p class="label">format 3</p>
Remove component with <a href="#UID">UID</a>. N.B <a href="#UID">UID</a> is NOT set for
<a href="#sfiCalAlarm">ALARM</a> / <a href="#sfiCalTimezone">TIMEZONE</a> components.
<p class="format">deleteComponent( string <a href="#UID">UID</a> )</p><p class="label">Example 1</p><p class="example">$sfiCalCalendar = new sfiCalCalendar();
$sfiCalCalendar->setConfig( &quot;unique_id&quot;, &quot;domain.com&quot; );
$sfiCalCalendar->setConfig( &quot;filename&quot;, &quot;file.ics&quot; );
$sfiCalCalendar->parse();
$sfiCalCalendar->deleteComponent( 1 );
$sfiCalCalendar->deleteComponent( &quot;sfiCalTodo&quot;, 2 );
$sfiCalCalendar->deleteComponent( &quot;20070803T194810CEST-0123U3PXiX@domain.com&quot;);
.. .
</p><p class="label">Example 2</p>
Deleting all components, using format 2 without order number.
<p class="example">$sfiCalCalendar = new sfiCalCalendar();
$sfiCalCalendar->setConfig( &quot;unique_id&quot;, &quot;domain.com&quot; );
$sfiCalCalendar->setConfig( &quot;filename&quot;, &quot;file.ics&quot; );
$sfiCalCalendar->parse();
.. .
while( $sfiCalCalendar->deleteComponent( &quot;sfiCalEvent&quot;))
continue;
.. .
$sfiCalTodo = $sfiCalCalendar->getComponent( 'sfiCalTodo' );
while( $sfiCalTodo->deleteComponent( &quot;sfiCalAlarm&quot;))
continue;
.. .
</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_component_functions">[up]</a><a name="getComponent"></a><h4>3.1.3.2 getComponent</h4>
Get component from calendar.<br />
FALSE is returned if no property exists or when end-of-properties at consecutive function calls.
<p class="label">format 1</p>
Get next component, until end-of-components.
<p class="format">getComponent()</p><p class="label">format 2</p>
Get component with order number (1st=1, 2nd=2.. .).
<p class="format">getComponent( int orderNumber )</p><p class="label">format 3</p>
Get (next) component with component type (until end-of-components) alt.
get component with component type and suborder number (1st=1, 2nd=2.. .).
<p class="format">getComponent( string componentType [, int componentSuborderNumber])</p><p class="label">format 4</p>
Get component with <a href="#UID">UID</a> as key. N.B <a href="#UID">UID</a> is NOT set for
<a href="#sfiCalAlarm">ALARM</a> / <a href="#sfiCalTimezone">TIMEZONE</a> components.
<p class="format">getComponent( string <a href="#UID">UID</a> )</p><p class="label">Example 1</p><p class="example">$sfiCalCalendar = new sfiCalCalendar();
$sfiCalCalendar->setConfig( &quot;unique_id&quot;, &quot;domain.com&quot; );
$sfiCalCalendar->setConfig( &quot;filename&quot;, &quot;file.ics&quot; );
$sfiCalCalendar->parse();
while( $comp = $sfiCalCalendar->getComponent()) {
.. .
}
.. .
</p><p class="label">Example 2</p><p class="example">$sfiCalCalendar = new sfiCalCalendar();
$sfiCalCalendar->setConfig( &quot;unique_id&quot;, &quot;domain.com&quot; );
$sfiCalCalendar->setConfig( &quot;filename&quot;, &quot;file.ics&quot; );
$sfiCalCalendar->parse();
if( $comp = $sfiCalCalendar->getComponent( 1 )) {
.. .
}
.. .
</p><p class="label">Example 3</p><p class="example">$sfiCalCalendar = new sfiCalCalendar();
$sfiCalCalendar->setConfig( &quot;unique_id&quot;, &quot;domain.com&quot; );
$sfiCalCalendar->setConfig( &quot;filename&quot;, &quot;file.ics&quot; );
$sfiCalCalendar->parse();
if( $comp = $sfiCalCalendar->getComponent( &quot;sfiCalTodo&quot;, 2 ) {
.. .
}
.. .
</p><p class="label">Example 4</p><p class="example">$sfiCalCalendar = new sfiCalCalendar();
$sfiCalCalendar->setConfig( &quot;unique_id&quot;, &quot;domain.com&quot; );
$sfiCalCalendar->setConfig( &quot;filename&quot;, &quot;file.ics&quot; );
$sfiCalCalendar->parse();
$uid = &quot;20070803T194810CEST-0123U3PXiX@domain.com&quot;;
if($comp = $sfiCalCalendar->getComponent( $uid ){
.. .
}
.. .
</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_component_functions">[up]</a><a name="selectComponents"></a><h4>3.1.3.3 selectComponents</h4>
Select components from calendar on date basis (notice <a href="#date_restriction">date restriction</a>), based on the initial <a href="#DTSTART">DTSTART</a> property along with the <a href="#RRULE">RRULE</a>, <a href="#RDATE">RDATE</a>, <a href="#EXDATE">EXDATE</a> and <a href="#EXRULE">EXRULE</a> properties contained within the iCalendar object.<br />
FALSE is returned if no component exists.
<p class="label">Format</p><p class="format">selectComponents([int startYear, int startMonth, int startDay
[, int endYear,   int endMonth,   int endDay
[, mixed cType [, bool flat [, bool any [, bool split]]]]]])
</p>
Returns an array with components (events.. .).
For all recurrence instances of a calendar component, an x-property,
&quot;x-current-dtstart&quot; and opt. also &quot;x-current-dtend&quot; alt. &quot;x-current-due&quot;,
has been created with a TEXT content, &quot;Y-m-d&nbsp;[H:i:s][timezone/UTC&nbsp;offset]&quot;
showing the current start and opt. also end alt. due date.
<p class="comment">startYear  : start year of date period (4*digit), default current year
startMonth : start month of date period (1-2*digit), def. current month
startDay   : start day of date period (1-2*digit), def. current day
endYear    : end year of date period (4*digit), def. startYear
endMonth   : end month of date period (-2*digit), def. startMonth
endDay     : end day of date period (1-2*digit), def. StartDay
cType      : calendar component type(-s),
default (FALSE) all else string/array type(-s)
(sfiCalEvent, sfiCalTodo, sfiCalJournal, sfiCalFreebusy)
flat       : FALSE (default) =&gt; output : array[Year][Month][Day][]
TRUE =&gt; output : array[] (ignores split)
any        : TRUE (default) - select component that occurs within period
FALSE - only components that starts (DTSTART) within period
split      : TRUE - (default) one component copy for every day it occurs
within the period (implies flat=FALSE)
FALSE - one occurance of component in output array,
start date/recurrence date
</p><p class="label">Example</p><p class="example">$sfiCalCalendar = new sfiCalCalendar();
$sfiCalCalendar->setConfig( &quot;unique_id&quot;, &quot;domain.com&quot; );
$sfiCalCalendar->setConfig( &quot;directory&quot;, &quot;import&quot; );
$sfiCalCalendar->setConfig( &quot;filename&quot;,  &quot;file.ics&quot; );
$sfiCalCalendar->parse();
$sfiCalCalendar->sort();
$events_arr = $sfiCalCalendar->selectComponents( 2007,11,1,2007,11,30,'sfiCalEvent');
// <span class="comment">select all events occuring 1-30 nov. 2007</span>
foreach( $events_arr as $year =&gt; $year_arr ) {
foreach( $year_arr as $month =&gt; $month_arr ) {
foreach( $month_arr as $day =&gt; $day_arr ) {
foreach( $day_arr as $event ) {
$currddate   = $event->getProperty( 'x-current-dtstart' );
<span class="comment">//  if member of a recurrence set,returns
// array('x-current-dtstart'
//      , &lt;(string) date(&quot;Y-m-d&nbsp;[H:i:s][timezone/UTC&nbsp;offset]&quot;)&gt;)</span>
$startdate   = $event->getProperty( 'dtstart' );
$summary     = $event->getProperty( 'summary' );
$description = $event->getProperty( 'description' );
.. .
</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_component_functions">[up]</a><a name="setComponent"></a><h4>3.1.3.4 setComponent</h4>
Add calendar component to calendar or replace/update component in calendar.
A successful update return TRUE;
<p class="label">format 1</p>
Insert last in component chain.
<p class="format">setComponent( component )
addComponent( component ) // <span class="ref">alias</span></p><p class="comment">addComponent, may be removed i future versions.</p><p class="label">format 2</p>
Replace component with order number (1st=1, 2nd=2.. .).
If orderNumber is not found, component is inserted last in chain.
<p class="format">setComponent( component, int orderNumber )</p><p class="label">format 3</p>
Replace component with component type and 1st alt. component order number.
If orderNumber is not found, component is inserted last in chain.
<p class="format">setComponent( component, string componentType [,int component suborder no])</p><p class="label">format 4</p>
Replace component with <a href="#UID">UID</a>.
N.B <a href="#UID">UID</a> is NOT set for <a href="#sfiCalAlarm">ALARM</a> / <a href="#sfiCalTimezone">TIMEZONE</a> components.
If <a href="#UID">UID</a> is not found, component is inserted last in chain.
<p class="format">setComponent( component, string <a href="#UID">UID</a> )</p><p class="label">Example</p><p class="example">$sfiCalCalendar = new sfiCalCalendar();&nbsp;//<span class="comment">initiate new CALENDAR</span>
$sfiCalCalendar->setConfig( &quot;unique_id&quot;, &quot;domain.com&quot; );
.. .
$sfiCalEvent = new sfiCalEvent();&nbsp;//<span class="comment">initiate EVENT</span>
$sfiCalEvent->setProperty( &quot;dtstart&quot;&nbsp;//<span class="comment">add an <a href="#sfiCalEvent">EVENT</a>  property</span>
, 2006, 12, 24, 19, 30, 00 );
$sfiCalEvent->setProperty(.. .
.. .
$sfiCalCalendar->setComponent( $sfiCalEvent ); //<span class="comment">add <a href="#sfiCalEvent">EVENT</a> to calendar</span>
.. .
</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_component_functions">[up]</a><a name="Calendar_inputoutput_functions"></a><h3>3.1.4 Calendar input/output functions</h3><a name="parse_merge"></a><h4>3.1.4.1 parse and merge</h4>
Parse iCal file(-s) into a single sfiCalCalendar object (components, properties and parameters),
including multiple sfiCalCalendars (within a single ICS file) parse, e.g. Oracle Calendar exports.
<br /><br />
As long as php.ini directive &quot;allow_url_fopen&quot; is enabled, remote files, URLs; protocol &quot;http&quot; (&quot;webcal&quot;), are supported. A remote file, URL, <b>must</b> be prefixed by &quot;http://&quot; (&quot;webcal://&quot;) and suffixed by a valid filename.&#33; Recommendation is to download (cache) remote file before parsing, due to execution time and control.
<br /><br />
If missing, component property <a href="#UID">UID</a> is created when parsing. For that reason <a href="#Unique_id">UNIQUE_ID</a> might need to be set before parsing, se examples below.
<br /><br />
Notice <a href="#date_restriction">date restriction</a>&#33;
<br /><br />
If parse error  occurs (like file access error, invalid calendar file or calendar file without components), FALSE is returned.
<br /><br />
The php.ini directive &quot;auto_detect_line_endings&quot; (default OFF) will examine the data read by fgets() and file() to see if it is using Unix, MS-Dos or Macintosh line-ending conventions. This enables PHP to interoperate with Macintosh systems, but defaults to Off, as there is a very small performance penalty when detecting the EOL conventions for the first line, and also because people using carriage-returns as item separators under Unix systems would experience non-backwards-compatible behaviour.
(This configuration option was introduced in PHP 4.3.0) (From php manual)
<p class="label">Format</p><p class="format">parse( [ string filename ] )</p><p class="comment">Parameter for <span class="format">filename</span> (including path/directory(&#33;)), may be removed
in future versions. Recommendation is to use <span class="format">setConfig</span>, se example below.</p><p class="label">parse example 1</p><p class="example">$sfiCalCalendar = new sfiCalCalendar();
$sfiCalCalendar->setConfig( &quot;unique_id&quot;,&nbsp;&quot;domain.com&quot; );
$sfiCalCalendar->setConfig( &quot;filename&quot;, &quot;file.ics&quot; );
$sfiCalCalendar->parse();
.. .
</p><p class="label">parse example 2</p><p class="example">$sfiCalCalendar = new sfiCalCalendar();
$sfiCalCalendar->setConfig( &quot;unique_id&quot;,&nbsp;&quot;domain.com&quot; );
$sfiCalCalendar->setConfig(&quot;url&quot;, &quot;http://www.ical.net/calendars/calendar.ics&quot;);
$sfiCalCalendar->parse();
.. .
</p><p class="label">merge example</p><p class="example">$sfiCalCalendar = new sfiCalCalendar();
$sfiCalCalendar->setConfig( &quot;unique_id&quot;,&nbsp;&quot;domain.com&quot; );
$sfiCalCalendar->setConfig( &quot;directory&quot;,&nbsp;&quot;import&quot; );
$sfiCalCalendar->setConfig( &quot;filename&quot;,&nbsp;&nbsp;&quot;file1.ics&quot; );
$sfiCalCalendar->parse();
$sfiCalCalendar->setConfig( &quot;filename&quot;,&nbsp;&nbsp;&quot;file2.ics&quot; );
$sfiCalCalendar->parse();
$sfiCalCalendar->sort();
$sfiCalCalendar->setConfig( &quot;directory&quot;,&nbsp;&quot;export&quot; );
$sfiCalCalendar->setConfig( &quot;filename&quot;,&nbsp;&nbsp;&quot;icalmerge.ics&quot; );
$sfiCalCalendar->saveCalendar();
.. .
</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_inputoutput_functions">[up]</a><a name="createCalendar"></a><h4>3.1.4.2 createCalendar</h4>
Generate and return calendar in a string, testing.. .?
<p class="label">Format</p><p class="format">createCalendar()</p><p class="label">Example</p><p class="example">.. .
$str = $calendar->createCalendar();
echo $str;
</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_inputoutput_functions">[up]</a><a name="returnCalendar"></a><h4>3.1.4.3 returnCalendar</h4>
Redirect calendar content to user browser. Filenamn, addressed to browser, is auto generated if missing/not set;<br /><span class="format">$filename = date( &quot;YmdHis&quot; ).&quot;.ics&quot; </span><br /><p class="label">Format</p><p class="format">returnCalendar()</p><p class="label">Example 1</p><p class="example">$sfiCalCalendar = new sfiCalCalendar();
$sfiCalCalendar->setConfig( &quot;unique_id&quot;,&nbsp;&quot;domain.com&quot; );
.. .
$sfiCalEvent = new sfiCalEvent();
$sfiCalEvent->setProperty( &quot;dtstart&quot;, array( &quot;year&quot;  =&gt; 2007
, &quot;month&quot; =&gt; 4
, &quot;day&quot;   =&gt; 1
, &quot;hour&quot;  =&gt; 19 ));
$sfiCalEvent->setProperty( &quot;duration&quot;, 0, 0, 3 ));
$sfiCalEvent->setProperty( &quot;LOCATION&quot;, &quot;Central Placa&quot; );
$sfiCalEvent->setProperty( &quot;summary&quot;, &quot;PHP summit&quot; );
.. .
$sfiCalCalendar->setComponent( $sfiCalEvent );
.. .
$sfiCalCalendar->returnCalendar();
</p><p class="label">Example 2</p><p class="example">$sfiCalCalendar = new sfiCalCalendar();
$sfiCalCalendar->setConfig( &quot;unique_id&quot;,&nbsp;&quot;domain.com&quot; );
$sfiCalCalendar->setConfig( &quot;directory&quot;, &quot;depot&quot; );
$sfiCalCalendar->setConfig( &quot;filename&quot;, &quot;calendar.ics&quot; );
$sfiCalCalendar->parse();
$sfiCalCalendar->returnCalendar();
</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_inputoutput_functions">[up]</a><a name="saveCalendar"></a><h4>3.1.4.4 saveCalendar</h4>
Save ical calendar in a file, uses present directory if directory not set, filenamn is auto generated if missing/not set;<br /><span class="format">$filename = date( &quot;YmdHis&quot; ).&quot;.ics&quot; </span><br />
Directory/filename <b>must</b> be writeable, delimiter default PHP constant DIRECTORY_SEPARATOR.
<br /><br />
As long as php.ini directive &quot;allow_url_fopen&quot; is enabled, remote files, URLs; protocol &quot;http&quot; (&quot;webcal&quot;), are supported. Recommendation is to save to a local file and upload later, due to execution time and control.
<br /><br />
If file error occurs, FALSE is returned.
<p class="label">Format</p><p class="format">saveCalendar ( string directory/FALSE
[, string filename/FALSE
[, string delimiter/FALSE ]] )
</p><p class="comment">Parameters for <span class="format">directory/filename/delimeter</span>, kept for backward compatibility,
may be removed i future versions. Recommendation is to use <span class="format">setConfig</span>, se
example below.</span></p><p class="label">Example</p><p class="example">.. .
$calendar->setConfig( &quot;directory&quot;, &quot;depot&quot; );
$calendar->setConfig( &quot;filename&quot;, &quot;calendar.ics&quot; );
$result = $calendar->saveCalendar();
if( &#33;$result )
&nbsp;&nbsp;echo &quot;error when saving.. .&quot;
</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_inputoutput_functions">[up]</a><a name="sort"></a><h4>3.1.4.5 sort</h4>
Sort created/parsed calendar components in ascending order.<br />
Keys:<br />
1 - X-CURRENT-DTSTART - X-CURRENT-DTEND/X-CURRENT-DUE<br />
1 - <a href="#DTSTART">DTSTART</a> - <a href="#DTEND">DTEND</a> alt. <a href="#DURATION">DURATION</a> (<a href="#sfiCalEvent">sfiCalEvent</a> and <a href="#sfiCalFreebusy">sfiCalFreebusy</a> components)<br />
1 - <a href="#DTSTART">DTSTART</a> - <a href="#DUE">DUE</a> alt. <a href="#DURATION">DURATION</a> (<a href="#sfiCalTodo">sfiCalTodo</a> components)<br />
1 - <a href="#DTSTART">DTSTART</a> (<a href="#sfiCalJournal">sfiCalJournal</a> components)<br />
2 - <a href="#CREATED">CREATED</a> / <a href="#DTSTAMP">DTSTAMP</a><br />
3 - <a href="#UID">UID</a><br />
Any <a href="#sfiCalTimezone">sfiCalTimezone</a> component is always sorted first in chain.
<p class="label">Format</p><p class="format">sort()</p><p class="label">Example</p><p class="example">$sfiCalCalendar = new sfiCalCalendar();
$sfiCalCalendar->setConfig( &quot;unique_id&quot;, &quot;domain.com&quot; );
$sfiCalCalendar->setConfig( &quot;directory&quot;, &quot;depot&quot; );
$sfiCalCalendar->setConfig( &quot;filename&quot;, &quot;calendar.ics&quot; );
$sfiCalCalendar->parse();
$sfiCalCalendar->sort();
$sfiCalCalendar->returnCalendar();
</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_inputoutput_functions">[up]</a><a name="useCachedCalendar"></a><h4>3.1.4.6 useCachedCalendar</h4>
If recent version of local (nonempty and saved) calendar file exists, an HTTP redirect header is sent otherwise FALSE is returned.
<p class="label">Format</p><p class="format">useCachedCalendar( [ int timeout ] )
useCachedCalendar( string directory/FALSE
, string filename/FALSE
, string delimiter/FALSE
[, int timeout ] )
</p><p class="comment">timeout  : default 3600 sec
Second format with parameters for <span class="format">directory/filename/delimeter</span>, kept for
backward compatibility, may be removed i future versions. Recommendation
is to use <span class="format">setConfig</span>, se example below.</span></p><p class="label">Example</p><p class="example">.. .
$calendar->setConfig( &quot;directory&quot;, &quot;depot&quot; );
$calendar->setConfig( &quot;filename&quot;, &quot;calendar.ics&quot; );
$calendar->useCachedCalendar();
</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_inputoutput_functions">[up]</a><a name="Calendar_configuration_functions"></a><h3>3.1.5 Calendar configuration functions</h3>
All configuration controls (allowEmpty, cOmPsInFo etc.) case independent.<br />
A successful &quot;setConfig&quot; returns TRUE.
<a name="allowEmpty"></a><h4>3.1.5.1 Allow empty components</h4>
Allow or reject empty calendar properties, default allow (TRUE).
<h5>Set allowEmpty</h5><p class="label">Format</p><p class="format">setConfig( &quot;allowEmpty&quot;, bool &lt;directive&gt; )</p><p class="label">Example</p><p class="example">$calendar->setConfig( &quot;allowEmpty&quot;, TRUE );</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_configuration_functions">[up]</a><a name="Compsinfo"></a><h4>3.1.5.2 Component information</h4>
Get information about calendar components. Returns array with basic information
about all components (in array format) within calendar.
<p class="label">Format</p><p class="format">getConfig( &quot;compsinfo&quot; )</p><p class="comment">Output   = array ( *compinfo )
compinfo = array ( &quot;ordno&quot; =&gt; int ordno,
// <span class="ref">order number (1st=1, 2nd=2..)</span>
, &quot;type&quot;  =&gt; string type
// <span class="ref">component type (sfiCalEvent, sfiCalTodo.. .</span>
, &quot;uid&quot;   =&gt; string uid
// <span class="ref">component <a href="#UID">UID</a> (not for <a href="#sfiCalAlarm">ALARM</a> / <a href="#sfiCalTimezone">TIMEZONE</a>)</span>
, &quot;props&quot; =&gt; array( *[ propertyName =&gt; Property count ])
// <span class="ref">for every set property</span>
, &quot;sub&quot;   =&gt; array( *compinfo ))
// <span class="ref">if subcomponents exists, an array for each subcomponent</span></p><p class="label">Example</p><p class="example">$sfiCalCalendar = new sfiCalCalendar();
$sfiCalCalendar->setConfig( &quot;unique_id&quot;, &quot;domain.com&quot; );
$sfiCalCalendar->setConfig( &quot;directory&quot;, &quot;depot&quot; );
$sfiCalCalendar->setConfig( &quot;filename&quot;,  &quot;calendar.ics&quot; );
$sfiCalCalendar->parse();
$compsinfo = $sfiCalCalendar->getConfig( &quot;compsinfo&quot; );
foreach( $compsinfo as compinfo) {
&nbsp;echo &quot; order number : &quot;.$compinfo[&quot;ordno&quot;];
&nbsp;echo &quot; type : &quot;.$compinfo[&quot;type&quot;];
&nbsp;echo &quot; UID : &quot;.$compinfo[&quot;uid&quot;];
&nbsp;foreach( $compinfo[&quot;props&quot;] as $propertyName =&gt; $propertyCount )
&nbsp;&nbsp;echo &quot;  $propertyName = $propertyCount&quot;;
&nbsp;if( is_array( $compinfo[&quot;sub&quot;] )) {
&nbsp;&nbsp;foreach( $compinfo[&quot;sub&quot;] as $subcompinfo ) {
&nbsp;&nbsp;&nbsp;echo &quot; order number : &quot;.$subcompinfo[&quot;ordno&quot;];
&nbsp;&nbsp;&nbsp;/* .. dito if subcomponents exists .. . */
&nbsp;&nbsp;}
&nbsp;}
}
</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_configuration_functions">[up]</a><a name="Delimiter"></a><h4>3.1.5.3 Delimiter</h4>
Directory/filename delimiter.
<h5>Get delimiter</h5><p class="label">Format</p><p class="format">getConfig( &quot;delimiter&quot; )</p><p class="label">Example</p><p class="example">$del = $calendar->getConfig( &quot;delimiter&quot; );</p><h5>Set delimiter</h5>
Default PHP constant DIRECTORY_SEPARATOR. If used, <b>must</b> be set BEFORE filename&#33;
<p class="label">Format</p><p class="format">setConfig( &quot;delimiter&quot;, string &lt;delimiter&gt; )</p><p class="label">Example</p><p class="example">$calendar->setConfig( &quot;delimiter&quot;, &quot;/&quot; );</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_configuration_functions">[up]</a><a name="Directory"></a><h4>3.1.5.4 Directory</h4>
Local directory to store/read iCal files, default &quot;.&quot;.
<h5>Get directory</h5><p class="label">Format</p><p class="format">getConfig( &quot;directory&quot; )</p><p class="label">Example</p><p class="example">$folder = $calendar->getConfig( &quot;directory&quot; );</p><h5>Set directory</h5>
Directory <b>must</b> be set BEFORE filename and <b>must</b> exist and be writeable otherwise FALSE is returned.
When setting Directory any previously set URL is removed.
<p class="label">Format</p><p class="format">setConfig( &quot;directory&quot;, string &lt;directory&gt; )</p><p class="label">Example</p><p class="example">$calendar->setConfig( &quot;directory&quot;, &quot;depot&quot; );</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_configuration_functions">[up]</a><a name="Fileinfo"></a><h4>3.1.5.5 Fileinfo</h4>
Information about directory, filename and filesize. Notice <a href="#Filesize">filesize</a>.
<h5>Get fileinfo</h5><p class="label">Format</p><p class="format">getConfig( &quot;fileinfo&quot; )</p><p class="label">Example</p><p class="example">$fileinfo = $calendar->getConfig( &quot;fileinfo&quot; );</p><p class="comment">output = array( &lt;directory&gt;, &lt;filename&gt;, &lt;filesize&gt; )</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_configuration_functions">[up]</a><a name="Filename"></a><h4>3.1.5.6 Filename</h4>
iCal local file name, default created, if not set;<br /><p class="format">$filename = date( &quot;YmdHis&quot; ).&quot;.ics&quot;;</p><p class="format">$filename = date( &quot;YmdHis&quot; ).&quot;.xml&quot;; <span class="comment"> // if <a href="#Format">format</a> set to &quot;xcal&quot;</span></p><h5>Get filename</h5><p class="label">Format</p><p class="format">getConfig( &quot;filename&quot; )</p><p class="label">Example</p><p class="example">$filename = $calendar->getConfig( &quot;filename&quot; );</p><h5>Set filename</h5>
Local filename <b>must</b> be set AFTER setting directory (and ev. delimiter)&#33;
Filename (and opt. directory) <b>must</b> be readable/writeable otherwise FALSE is returned.
<p class="label">Format</p><p class="format">setConfig( &quot;filename&quot;, string &lt;filename&gt; )</p><p class="label">Example</p><p class="example">$calendar->setConfig( &quot;filename&quot;, &quot;calendar.ics&quot; );</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_configuration_functions">[up]</a><a name="Filesize"></a><h4>3.1.5.7 Filesize</h4><h5>Get filesize</h5>
Returns the size of the file in bytes, to be called<br />
- after &quot;saveCalendar()&quot;<br />
or<br />
- after a &quot;setConfig( &quot;directory&quot; / &quot;filename&quot; )&quot; and before/after &quot;parse()&quot;.<br />
Getting the filesize for a remote file (URL) will always return zero.
<p class="label">Format</p><p class="format">getConfig( &quot;filesize&quot; )</p><p class="label">Example</p><p class="example">$filesize = $calendar->getConfig( &quot;filesize&quot; );</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_configuration_functions">[up]</a><a name="Format"></a><h4>3.1.5.8 Format</h4>
Format for calendar output, &quot;iCal&quot;/&quot;xCal&quot;.
<h5>Get format</h5>
If format was set to &quot;xcal&quot; , &quot;xcal&quot; is returned.
<p class="label">Format</p><p class="format">getConfig( &quot;format&quot; )</p><p class="label">Example</p><p class="example">$format = $calendar->getConfig( &quot;format&quot; );</p><h5>Set format</h5>
&quot;iCal&quot; is preset, default (rfc2445), &quot;xCal&quot; force xml formatted output-
<p class="label">Format</p><p class="format">setConfig( &quot;format&quot;, string &lt;format&gt; )</p><p class="label">Example</p><p class="example">$calendar->setConfig( &quot;format&quot;, &quot;xcal&quot; );</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_configuration_functions">[up]</a><a name="Language"></a><h4>3.1.5.9 Language</h4>
Language for calendar and component properties as defined in [RFC 1766].<br /><h5>Get language</h5>
Language for calendar (only if language is set at calendar level).
<p class="label">Format</p><p class="format">getConfig( &quot;language&quot; )</p><p class="label">Example</p><p class="example">$lang = $calendar->getConfig( &quot;language&quot; );</p><h5>Set language</h5>
Set language for whole calendar, will be used everywhere its apropriate. Language set at calendar level can be overridden by &quot;setConfig( &quot;language&quot;, ..&quot; at component level or in specific component property parameter.
<p class="label">Format</p><p class="format">setConfig( &quot;language&quot;, string &lt;lang&gt; )</p><p class="label">Example</p><p class="example">$calendar->setConfig( &quot;lang&quot;, &quot;en&quot; );</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_configuration_functions">[up]</a><a name="NewlineChar"></a><h4>3.1.5.10 NewlineChar</h4>
Character(s) used for carriage return + line feed (CR+LF), default &quot;n&quot;.
<h5>Get Newlinechar</h5>
Get character(s) used for carriage return + line feed (CR+LF).
<p class="label">Format</p><p class="format">getConfig( &quot;newlinechar&quot; )
getConfig( &quot;nl&quot; ) // <span class="ref">alias</span></p><p class="label">Example</p><p class="example">$nl = $calendar->getConfig( &quot;nl&quot; );</p><h5>Set Newlinechar</h5>
Set character(s) used for carriage return + line feed (CR+LF).
<p class="label">Format</p><p class="format">setConfig( &quot;newlinechar&quot;, string &lt;char&gt; )
setConfig( &quot;nl&quot;, string &lt;char&gt; ) // <span class="ref">alias</span></p><p class="label">Example</p><p class="example">$calendar->setConfig( &quot;nl&quot;, &quot;n&quot; );</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_configuration_functions">[up]</a><a name="Unique_id"></a><h4>3.1.5.11 Unique_id</h4>
Unique_id is used when creating property PRODID (default auto created) at calendar level
and <a href="#UID">UID</a> at component level.
<p class="quotes">
RFC2445:
*  The identifier is RECOMMENDED to be the identical syntax to the
* [RFC 822] addr-spec. A good method to assure uniqueness is to put the
* domain name or a domain literal IP address of the host on which.. .<p>
Default <b>AUTO</b> generated, PHP: gethostbyname( $_SERVER[&quot;SERVER_NAME&quot;] )
when running in a web server environment or &quot;localhost&quot; when doing command line execution.
Can to be used to set other domain name than server name.
<h5>Get unique id</h5><p class="label">Format</p><p class="format">getConfig( &quot;unique_id&quot; )</p><p class="label">Example</p><p class="example">$id = $calendar->getConfig( &quot;unique_id&quot; );</p><h5>Set unique id</h5>
Recommendation is <b>allways</b> to set unique_id just after creating a new sfiCalCalendar object,
to ensure accurate setting of all components <a href="#UID">UID</a> property, also before parse.
<p class="label">Format</p><p class="format">setConfig( &quot;unique_id&quot;, string &lt;unique-Id&gt; )</p><p class="label">Example</p><p class="example">$sfiCalCalendar = new sfiCalCalendar(); // <span class="ref">initiate new CALENDAR</span>
$sfiCalCalendar->setConfig( &quot;unique_id&quot;, &quot;domain.com&quot; );
.. .
</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_configuration_functions">[up]</a><a name="URL"></a><h4>3.1.5.12 URL</h4>
Managing remote files, used with writing; &quot;saveCalendar()&quot;, or reading; &quot;parse()&quot;, only protocol &quot;http&quot; (&quot;webcal&quot;) supported. If URL is set, setConfig directory (+filename) is ignored when using parse or saveCalendar functions.
<h5>Get URL</h5>
The URL filename part can be retrieved by &quot;getConfig( 'filename' )&quot;.
<p class="label">Format</p><p class="format">getConfig( &quot;url&quot; )</p><p class="label">Example</p><p class="example">$url = $calendar->getConfig( &quot;URL&quot; );</p><h5>Set URL</h5>
A remote file, URL, <b>must</b> be prefixed by &quot;http://&quot; (&quot;webcal://&quot;) and suffixed by a valid filename.
When setting URL any previously set Directory is removed. When storing a remote iCal file localy, only directory need to be set,
filename remains unchanged.
<p class="label">Format</p><p class="format">setConfig( &quot;URL&quot;, string &lt;url&gt; )</p><p class="label">Example</p><p class="example">$sfiCalCalendar = new sfiCalCalendar();
$sfiCalCalendar->setConfig( &quot;unique_id&quot;, &quot;domain.com&quot; );
$sfiCalCalendar->setConfig( &quot;url&quot;, &quot;http://www.iCal.net/depot/calendar.ics&quot; );
$sfiCalCalendar->parse();
$sfiCalCalendar->sort();
.. .
.. .
$sfiCalCalendar->setConfig( &quot;directory&quot;, &quot;depot&quot; );
$sfiCalCalendar->saveCalendar(); // <span class="ref">local save i &quot;depot&quot; folder, same filename</span></p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_configuration_functions">[up]</a><a name="Calendar_component_object_property_function_list"></a><h2>3.2 Calendar component object property function list</h2><p>
All calendar component property functions for get/set data.<br />
For property format in detail, see
RFC2445 - Internet Calendaring and Scheduling Core Object Specification (iCalendar) in <a href="http://www.kigkonsult.se/downloads/dl.php?f=rfc2445" title="RFC2445 in text format"><b>text</b></a>
and <a href="http://www.kigkonsult.se/iCalcreator/iCalDictionary/index.html" title="RFC2445 in HTML format" target="_blank"><b>HTML</b></a> format.
</p><a name="DATE_WITH_UTC_TIME"></a><span class="label">Notice:</span> for properties and DATE-TIME with <b>UTC</b> time.
<p class="quotes">RFC2445:
The date with UTC time, or absolute time, is identified by a LATIN CAPITAL
LETTER Z suffix character (US-ASCII decimal 90), the UTC designator,
appended to the time value. For example, the following represents January
19, 1998, at 0700 UTC:</p><p class="quotes">DTSTART:19980119T070000Z</p><p class="quotes">The <a href="#TZID">TZID</a> property parameter MUST <b>NOT</b> be applied to DATE-TIME properties
whose time values are specified in UTC.</p></p><p><a name="date_restriction"></a><span class="label">Notice:</span> date limitation.<br />
Due to limitation in PHP date commands, e.g. <span class="format">mktime</span>, <span class="format">strtotime</span>, a date (e.g. while setting <a href="#DTSTART">DTSTART</a> property) before &quot;January 1 1970 00:00:00 GMT&quot; can force a PHP date command to generate an error or set date to &quot;January 1 1970&quot;.
</p><a name="deleteProperty_PROP"></a><h3>3.2.1 deleteProperty</h3>
General calendar delete property function,simplifying removal of calendar properties.<br />
FALSE is returned if no property exists or when end-of-properties at consecutive function calls.
<p class="label">Format</p><p class="format">deleteProperty( [ string PropName [, int order=1 ] )</p><p class="comment">Propname - case independent, strict rfc2445 component property names,
unknown/missing Propname will be regarded as <a href="#X-PROPERTY_PROP">X-property</a>.
order    - if missing 1st/next occurence,
used with multiply (property) occurences</p><p class="label">Example</p><p class="example">$sfiCalCalendar = new sfiCalCalendar();
$sfiCalCalendar->setConfig( &quot;unique_id&quot;, &quot;domain.com&quot; );
$sfiCalCalendar->setConfig( &quot;filename&quot;, &quot;file.ics&quot; );
$sfiCalCalendar->parse();
$e = $sfiCalCalendar->getComponent( &quot;sfiCalEvent&quot; );
while( $e->deleteProperty( &quot;comment&quot; ))
&nbsp;&nbsp;continue;  // <span class="ref">remove all COMMENT properties</span>
.. .
</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_component_object_property_function_list">[up]</a><a name="getProperty_PROP"></a><h3>3.2.2 getProperty</h3>
General get property function, simplifying fetch of calendar properties.<br />
FALSE is returned if no property exists or when end-of-properties at consecutive function calls.
<p class="label">Format</p><p class="format">getProperty( string PropName [, int order=1 [, bool complete=FALSE ]] )</p><p class="comment">Propname - case independent, strict rfc2445 component property names,
unknown/missing Propname will be regarded as <a href="#X-PROPERTY_PROP">X-property</a>.
order    - if missing/FALSE 1st/next occurence,
otherwise with multiply occurences (1st=1, 2nd=2.. .)
complete - FALSE (default) : output only property value
TRUE            : output = array(&quot;value&quot; =&gt; &lt;value&gt;
,&quot;params&quot;=&gt; &lt;parameter array&gt;)
</p><p class="label">Example</p><p class="example">$sfiCalCalendar = new sfiCalCalendar();
$sfiCalCalendar->setConfig( &quot;unique_id&quot;, &quot;domain.com&quot; );
$sfiCalCalendar->setConfig( &quot;filename&quot;, &quot;file.ics&quot; );
$sfiCalCalendar->parse();
while( $sfiCalEvent = $sfiCalCalendar->getComponent( &quot;sfiCalEvent&quot; )) {
&nbsp;$dtstart = $sfiCalEvent->getProperty( &quot;dtstart&quot; ); // <span class="ref">one occurence</span>
&nbsp;$description = $sfiCalEvent->getProperty( &quot;description&quot; ); // <span class="ref">one occurence</span>
&nbsp;while( $comment = $sfiCalEvent->getProperty( &quot;comment&quot; )) {
// <span class="ref">MAY occur more than once</span>
&nbsp;.. .
&nbsp;}
.. .
</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_component_object_property_function_list">[up]</a><a name="parse"></a><h3>3.2.3 parse</h3>
Parse strict rfc2445 property text and/or ALARMs.
<br /><br />
Any rfc2445 strict formatted property text, in string or array format.<br />
Complete <a href="#sfiCalAlarm">ALARM</a>s, all properties included, in array format and
first array row as &quot;BEGIN:sfiCalAlarm&quot;, last as &quot;END:sfiCalAlarm&quot;.
<br /><br />
FALSE is returned if read-file problems occur.
<p class="label">Format</p><p class="format">parse( mixed propertyText )</p><p class="comment">
propertyText = string/array, strict rcf2445 formatted property/properties,
property name <b>must</b> begin (first) line</p><p class="label">example</p><p class="example">.. .
$e = new sfiCalEvent();
$e->parse( 'DTSTAMP:19970324T1200Z' );
$e->parse( 'SEQUENCE:0' );
$e->parse( 'ORGANIZER:MAILTO:jdoe@host1.com' );
$e->parse( array(
'ATTENDEE;RSVP=TRUE:MAILTO:jsmith@host1.com',
'ATTENDEE;RSVP=TRUE:MAILTO:jsmith@host2.com',
'ATTENDEE;RSVP=TRUE:MAILTO:jsmith@host3.com',
'ATTENDEE;RSVP=TRUE:MAILTO:jsmith@host4.com' ));
$e->parse( 'DTSTART:19970324T123000Z' );
$e->parse( 'DTEND:19970324T210000Z' );
$e->parse( 'CATEGORIES:MEETING,PROJECT' );
$e->parse( 'CLASS:PUBLIC' );
$e->parse( 'SUMMARY:Calendaring Interoperability Planning Meeting' );
$e->parse( 'STATUS:DRAFT' );
$e->parse( array(
'DESCRIPTION:Project xyz Review Meeting Minutesn'
,' Agendan1. Review of project version 1.0 requirements.n2.'
,'Definition'
,' of project processes.n3. Review of project schedule.n'
,'Participants: John Smith, Jane Doe, Jim Dandyn-It was'
,' decided that the requirements need to be signed off by'
,' product marketing.n-Project processes were accepted.n '
,'-Project schedule needs to account for scheduled holidays'
,' and employee vacation time. Check with HR for specific'
,' dates.n-New schedule will be distributed by Friday.n-'
,' Next weeks meeting is cancelled. No meeting until 3/23.' ));
$e->parse( 'LOCATION:LDB Lobby' );
$e->parse(
'ATTACH;FMTTYPE=application/postscript:ftp://xyz.com/pub/conf/bkgrnd.ps' );
$e->parse( array(
'BEGIN:sfiCalAlarm',
'ACTION:AUDIO',
'TRIGGER;VALUE=DATE-TIME:19970224T070000Z',
'ATTACH;FMTTYPE=audio/basic:http://host.com/pub/audio-files/ssbanner.aud',
'REPEAT:4',
'DURATION:PT1H',
'X-alarm:non-standard ALARM property',
'END:sfiCalAlarm' ));
$e->parse(
'X-xomment:non-standard property will be displayed, with comma escaped');
$calendar->setComponent( $e );
.. .
</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_component_object_property_function_list">[up]</a><a name="setProperty_PROP"></a><h3>3.2.4 setProperty</h3>
General set property function, simplifying insert of component properties. For properties where
multiple ocurrenies are allowed, last parameter is an index, implementing replaceProperty functionality.<br />
A successful update returns TRUE.
<p class="label">Format</p><p class="format">setProperty( string PropName, mixed Proparg_1 *[, mixed Proparg_n] )</p><p class="comment">Propname case independent, strict rfc2445 component property names,
unknown Propname will be regarded as <a href="#X-PROPERTY_PROP">X-property</a>.</p><p class="label">Example</p><p class="example">$sfiCalEvent = new sfiCalEvent();
$sfiCalEvent->setProperty( &quot;dtstart&quot;
, array(&quot;year&quot;=&gt;2007,&quot;month&quot;=&gt;4,&quot;day&quot;=&gt;1,&quot;hour&quot;=&gt;19));
$sfiCalEvent->setProperty( &quot;duration&quot;, 0, 0, 3 ));
$sfiCalEvent->setProperty( &quot;LOCATION&quot;, &quot;Central Placa&quot; );
$sfiCalEvent->setProperty( &quot;summary&quot;, &quot;PHP summit&quot; );
.. .
</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_component_object_property_function_list">[up]</a><a name="ACTION"></a><h3>3.2.5 ACTION</h3>
This property defines the action to be invoked when an <a href="#sfiCalAlarm">sfiCalAlarm</a> is triggered,<br /> &quot;AUDIO&quot; / &quot;DISPLAY&quot; / &quot;EMAIL&quot; / &quot;PROCEDURE&quot;. This property is REQUIRED and MUST NOT occur more than once.
<h5>Delete ACTION</h5>
Remove ACTION from component.
<p class="label">Format</p><p class="format">deleteProperty( &quot;Action&quot; )</p><p class="label">Example</p><p class="example">$sfiCalAlarm->deleteProperty( &quot;Action&quot; );</p><h5>Get ACTION</h5>
Fetch property value.
<p class="label">Format 1</p><p class="format">getProperty( &quot;Action&quot; )</p><p class="comment">output = actionValue <span class="ref">1</span></p><p class="label">Format 2</p><p class="format">getProperty( &quot;Action&quot;, FALSE , TRUE )</p><p class="comment">output = array( &quot;value&quot;  =&gt; actionValue<span class="ref">1</span>
, &quot;params&quot; =&gt; xparam<span class="ref">2</span> )</p><p class="label">Example</p><p class="example">$action = $sfiCalAlarm->getProperty( &quot;action&quot; );</p><h5>Set ACTION</h5>
Insert property value.
<p class="label">Format</p><p class="format">setProperty( &quot;Action&quot;, actionValue [, xparam ] )</p><p class="comment">actionValue<span class="ref">1</span> = one of &quot;AUDIO&quot; / &quot;DISPLAY&quot; / &quot;EMAIL&quot; / &quot;PROCEDURE&quot;
xparam<span class="ref">2</span>      = array( *[ xparamkey =&gt; xparamvalue ] )</p><p class="label">Example</p><p class="example">$sfiCalAlarm->setProperty( &quot;action&quot;, &quot;DISPLAY&quot; );</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_component_object_property_function_list">[up]</a><a name="ATTACH"></a><h3>3.2.6 ATTACH</h3>
The property provides the capability to associate a document object with a calendar component. The property is
is REQUIRED and MUST NOT occur more than once in an &quot;ALARM&quot; (&quot;ACTION&quot; &quot;procedure&quot;),
OPTIONAL and MUST NOT occur more than once in an &quot;ALARM&quot; (&quot;ACTION&quot; &quot;audio&quot;) and
OPTIONAL and MAY occur more than once in <a href="#sfiCalEvent">sfiCalEvent</a>, <a href="#sfiCalTodo">sfiCalTodo</a>, <a href="#sfiCalJournal">sfiCalJournal</a> and <a href="#sfiCalAlarm">sfiCalAlarm</a> (&quot;ACTION&quot; &quot;email&quot;) components.
<br /><br />
The default value type for ATTACH is URI. The value type can also be set to BINARY to indicate inline binary encoded content information (params <span class="ref">2</span>).
<h5>Delete ATTACH</h5>
Remove ATTACH from component.
<p class="label">Format</p><p class="format">deleteProperty( &quot;ATTACH&quot; )</p><p class="label">Example 1</p><p class="example">$sfiCalAlarm->deleteProperty( &quot;ATTACH&quot; );</p><p class="label">Example 2</p>
Delete ATTACH property no 2.
<p class="format">$sfiCalAlarm->deleteProperty( &quot;ATTACH&quot;, 2 );</p><p class="label">Example 3</p>
Deleting all ATTACH properties.
<p class="example">while( $sfiCalAlarm->deleteProperty( &quot;ATTACH&quot; ))
continue;</p><h5>Get ATTACH</h5>
Fetch property value.
<p class="label">Format 1</p><p class="format">getProperty( &quot;Attach&quot; )</p><p class="comment">output = attachValue<span class="ref">1</span></p><p class="label">Format 2</p><p class="format">getProperty( &quot;ATTACH&quot;, propOrderNo/FALSE , TRUE )</p><p class="comment">output = array( &quot;value&quot;  =&gt; attachValue<span class="ref">1</span>
, &quot;params&quot; =&gt; params<span class="ref">2</span> )</p><p class="label">Format 3</p><p class="format">getProperty( &quot;Attach&quot;, propOrderNo )</p><p class="comment">Get propOrderNo ATTACH</p><p class="label">Example</p><p class="example">$attach = $sfiCalAlarm->getProperty( &quot;attach&quot; );</p><h5>Set ATTACH</h5>
Insert property value.
<p class="label">Format</p><p class="format">setProperty( &quot;attach&quot;, attachValue<span class="ref">1</span> [, params [, propOrderNo ]] )</p><p class="comment">attachValue<span class="ref">1</span> = URI / inline binary encoded content information.
params<span class="ref">2</span>      = array( [ &quot;ENCODING&quot; =&gt; &quot;BASE64&quot;, &quot;VALUE&quot; =&gt; &quot;BINARY&quot; ]
[, &quot;FMTTYPE&quot; =&gt; contentType ]
[,&nbsp;xparam ] )
contentType  = The parameter value MUST be the TEXT for either an IANA
registered content type or a non-standard content type.
xparam       = *[ xparamkey =&gt; xparamvalue ]
propOrderNo  = int ordernumber, 1=1st, 2=2nd etc</p><p class="label">Example</p><p class="example">$sfiCalEvent->setProperty( &quot;attach&quot;
, &quot;ftp://domain.com/pub/docs/agenda.doc&quot;
, array( &quot;FMTTYPE&quot; =&gt; &quot;application/binary&quot; ));
</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_component_object_property_function_list">[up]</a><a name="ATTENDEE"></a><h3>3.2.7 ATTENDEE</h3>
The property defines an "Attendee" within a calendar component and is OPTIONAL and MUST NOT occur more than once
in a sfiCalAlarm (&quot;ACTION&quot; &quot;email&quot;), OPTIONAL and MAY occur more than once in <a href="#sfiCalEvent">sfiCalEvent</a>, <a href="#sfiCalTodo">sfiCalTodo</a>, <a href="#sfiCalJournal">sfiCalJournal</a> and <a href="#sfiCalFreebusy">sfiCalFreebusy</a> components.
<br /><br />
This value type for ATTENDEE is URI, a calendar user address.
<h5>Delete ATTENDEE</h5>
Remove ATTENDEE from component.
<p class="label">Format</p><p class="format">deleteProperty( &quot;ATTENDEE&quot; )</p><p class="label">Example 1</p><p class="example">$sfiCalAlarm->deleteProperty( &quot;ATTENDEE&quot; );</p><p class="label">Example 2</p>
Delete ATTENDEE property no 2.
<p class="example">$sfiCalAlarm->deleteProperty( &quot;ATTENDEE&quot;, 2 );</p><p class="label">Example 3</p>
Deleting all ATTENDEE properties.
<p class="example">while( $sfiCalAlarm->deleteProperty( &quot;ATTENDEE&quot; ))
continue;</p><h5>Get ATTENDEE</h5>
Fetch property value.
<p class="label">Format 1</p><p class="format">getProperty( &quot;Attendee&quot; )</p><p class="comment">output = attendeeValue <span class="ref">1</span></p><p class="label">Format 2</p><p class="format">getProperty( &quot;ATTENDEE&quot;, propOrderNo/FALSE , TRUE )</p><p class="comment">output = array( &quot;value&quot;  =&gt; attendeeValue<span class="ref">1</span>
, &quot;params&quot; =&gt; array( params<span class="ref">2</span> ))</p><p class="label">Format 3</p><p class="format">getProperty( &quot;ATTENDEE&quot;, propOrderNo )</p><p class="comment">Get propOrderNo ATTENDEE</p><p class="label">Example</p><p class="example">$attendee = $sfiCalAlarm->getProperty( &quot;attendee&quot; );</p><h5>Set ATTENDEE</h5>
Insert property value. If exist, default parameter values are removed after input (params<span class="ref">2</span>).
<p class="label">Format</p><p class="format">setProperty( &quot;attendee&quot;, attendeeValue [, params [, propOrderNo ]] )</p><p class="comment">attendeeValue<span class="ref">1</span> = a calendar user address, a URI as defined by [RFC 1738]
or any other IANA registered form for a URI.
params<span class="ref">2</span>        = array( [CUTYPE] [,MEMBER] [,ROLE] [,PARTSTAT] [,RVSP]
[,DELEGATED-TO] [,DELEGATED-FROM] [,SENT-BY]
[,CN] [,DIR] [,LANGUAGE] [,xparams] )
CUTYPE        = "CUTYPE" =&gt; &quot;INDIVIDUAL&quot;
(An individual, <b>Default</b>)
/ &quot;GROUP&quot;
(A group of individuals)
/ &quot;RESOURCE&quot;
(A physical resource)
/ &quot;ROOM&quot;
(A room resource)
/ &quot;UNKNOWN&quot;
(Otherwise not known)
/ x-name
(Experimental type)
/ iana-token
(Other IANA registered type)
MEMBER        = "MEMBER" =&gt; array( *[ &quot;single member
of the group or list membership&quot;])
ROLE          = "ROLE"   =&gt; &quot;CHAIR&quot;
(Indicates chair of the calendar entity)
/ &quot;REQ-PARTICIPANT&quot;
(required participation, <b>Default</b>)
/ &quot;OPT-PARTICIPANT&quot;
(optional participation)
/ &quot;NON-PARTICIPANT&quot;
(information purposes only)
/ x-name
(Experimental role)
/ iana-token
(Other IANA role)
PARTSTAT       = &quot;PARTSTAT&quot; =&gt; &quot;NEEDS-ACTION&quot;
(Event needs action, <b>Default</b>)
/ &quot;ACCEPTED&quot;
(Event accepted)
/ &quot;DECLINED&quot;
(Event declined)
/ &quot;TENTATIVE&quot;
(Event tentatively accepted)
/ &quot;DELEGATED&quot;
(Event delegated)
/ &quot;NEEDS-ACTION&quot;
(To-do needs action, <b>Default</b>)
/ &quot;ACCEPTED&quot;
(To-do accepted)
/ &quot;DECLINED&quot;
(To-do declined)
/ &quot;TENTATIVE&quot;
(To-do tentatively accepted)
/ &quot;DELEGATED&quot;
(To-do delegated)
/ &quot;COMPLETED&quot;
(To-do completed.
<a href="#COMPLETED">COMPLETED</a> property
has date/time completed)
/ &quot;IN-PROCESS&quot;
(To-do in process of being completed)
/ &quot;NEEDS-ACTION&quot;
(Journal needs action, <b>Default</b>)
/ &quot;ACCEPTED&quot;
(Journal accepted)
/ &quot;DECLINED&quot;
(Journal declined)
/ x-name
(Experimental status)
/ iana-token
(Other IANA registered status)
RSVP           = &quot;RSVP&quot; =&gt; &quot;TRUE&quot; / &quot;FALSE&quot;, <b>Default</b> (reply expectation)
DELEGATED-TO   = &quot;DELEGATED-TO&quot; =&gt; array(*[&quot;single calendar user to
whom the calendar user
specified by the property
has delegated participation&quot;])
DELEGATED-FROM = &quot;DELEGATED-FROM&quot; =&gt; array( *[ &quot;single calendar user that
have delegated their
participation to the
calendar user specified
by the property&quot; ] )
SENT-BY        = &quot;SENT-BY&quot; =&gt; single calendar user that is
acting on behalf
of the calendar user
specified by the property&quot;
LANGUAGE       = &quot;LANGUAGE&quot; =&gt; language for text values in CN parameter&quot;
CN             = &quot;CN&quot; =&gt; &quot;common name to be associated with the calendar
user specified by the property&quot;
DIR            = &quot;DIR&quot; =&gt; &quot;reference to a directory entry associated with
the calendar user specified by the property&quot;
xparam         = *[ xparamkey =&gt; xparamvalue ]
propOrderNo    = int ordernumber, 1=1st, 2=2nd etc</p>
See rules in detail in RFC2445 - Internet Calendaring and Scheduling Core Object Specification (iCalendar) in <a href="http://www.kigkonsult.se/downloads/dl.php?f=rfc2445" title="RFC2445 in text format"><b>text</b></a> and <a href="http://www.kigkonsult.se/iCalcreator/iCalDictionary/index.html" title="RFC2445 in HTML format" target="_blank"><b>HTML</b></a> format.
<p class="label">Example</p><p class="example">$sfiCalEvent->setProperty( &quot;attendee&quot;
, &quot;attendee1@ical.net&quot;
$sfiCalEvent->setProperty( &quot;attendee&quot;
, &quot;attendee2@ical.net&quot;
, array( &quot;cutype&quot;   =&gt; &quot;INDIVIDUAL&quot;
, &quot;member&quot;   =&gt; array( &quot;member1@ical.net&quot;
, &quot;member2@ical.net&quot;
, &quot;member3@ical.net&quot; )
, &quot;role&quot;     =&gt; &quot;CHAIR&quot;
, &quot;PARTSTAT&quot; =&gt; &quot;ACCEPTED&quot;
, &quot;RSVP&quot;     =&gt; &quot;TRUE&quot;
, &quot;DELEgated-to&quot; =&gt; array( &quot;part1@ical.net&quot;
, &quot;part2@ical.net&quot;
, &quot;part3@ical.net&quot; )
, &quot;delegateD-FROM&quot; =&gt;array( &quot;cio@ical.net&quot;
, &quot;vice.cio@ical.net&quot;)
, &quot;SENT-BY&quot;  =&gt; &quot;secretary@ical.net&quot;
, &quot;LANGUAGE&quot; =&gt; &quot;us-EN&quot;
, &quot;CN&quot;       =&gt; &quot;John Doe&quot;
, &quot;DIR&quot;      =&gt; &quot;http://www.ical.net/info.doc&quot;
, &quot;x-agenda&quot; =&gt; &quot;status reports&quot; <span class="comment">// xparam</span>
, &quot;x-length&quot; =&gt; &quot;15 min&quot;  ));    <span class="comment">// xparam</span></p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_component_object_property_function_list">[up]</a><a name="CATEGORIES"></a><h3>3.2.8 CATEGORIES</h3>
This property defines the categories for a calendar component and is OPTIONAL and MAY occur more than once in <a href="#sfiCalEvent">sfiCalEvent</a>, <a href="#sfiCalTodo">sfiCalTodo</a> and <a href="#sfiCalJournal">sfiCalJournal</a> components.<br /><br />
The value type for CATEGORIES is TEXT.
<h5>Delete CATEGORIES</h5>
Remove CATEGORIES from component.
<p class="label">Format</p><p class="format">deleteProperty( &quot;CATEGORIES&quot; )</p><p class="label">Example 1</p><p class="example">$sfiCalEvent->deleteProperty( &quot;CATEGORIES&quot; );</p><p class="label">Example 2</p>
Delete CATEGORIES property no 2.
<p class="example">$sfiCalEvent->deleteProperty( &quot;CATEGORIES&quot;, 2 );</p><p class="label">Example 3</p>
Deleting all CATEGORIES properties.
<p class="example">while( $sfiCalEvent->deleteProperty( &quot;CATEGORIES&quot; ))
continue;</p><h5>Get CATEGORIES</h5>
Fetch property value.
<p class="label">Format 1</p><p class="format">getProperty( &quot;CATEGORIES&quot; )</p><p class="comment">output = categoryValue<span class="ref">1</span></p><p class="label">Format 2</p><p class="format">getProperty( &quot;CATEGORIES&quot;, propOrderNo/FALSE , TRUE )</p><p class="comment">output = array( &quot;value&quot;  =&gt; categories<span class="ref">1</span>
, &quot;params&quot; =&gt; params<span class="ref">2</span> )</p><p class="label">Format 3</p><p class="format">getProperty( &quot;CATEGORIES&quot;, propOrderNo )</p><p class="comment">Get propOrderNo CATEGORIES</p><p class="label">Example</p><p class="example">$categories = $sfiCalAlarm->getProperty( &quot;categories&quot; );</p><h5>Set CATEGORIES</h5>
Insert property value.
<p class="label">Format</p><p class="format">setProperty( &quot;categories&quot;, mixed categories [, params [, propOrderNo ]] )</p><p class="comment">categories<span class="ref">1</span>   = string categoryValue / array( *categoryValue )
categoryValue<span class="ref"></span>= textual categories or subtypes of the calendar component,
can be specified as a list of categories
separated by the COMMA character
params<span class="ref">2</span>       = array( [&quot;LANGUAGE&quot; =&gt; &quot;&lt;lang&gt;&quot;][, xparam] )
xparam<span class="ref"></span>       = *[ xparamkey =&gt; xparamvalue ]
propOrderNo<span class="ref"></span>  = int ordernumber, 1=1st, 2=2nd etc</p><p class="label">Example</p><p class="example">$sfiCalEvent->setProperty( &quot;categories&quot;, &quot;project_x&quot; );</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_component_object_property_function_list">[up]</a><a name="CLASS"></a><h3>3.2.9 CLASS</h3>
This property defines the access classification for a calendar component and is OPTIONAL
and MUST NOT occur more than once in <a href="#sfiCalEvent">sfiCalEvent</a>, <a href="#sfiCalTodo">sfiCalTodo</a> and <a href="#sfiCalJournal">sfiCalJournal</a> components.
<h5>Delete CLASS</h5>
Remove CLASS from component.
<p class="label">Format</p><p class="format">deleteProperty( &quot;CLASS&quot; )</p><p class="label">Example</p><p class="example">$sfiCalJournal->deleteProperty( &quot;CLASS&quot; );</p><h5>Get CLASS</h5>
Fetch property value.
<p class="label">Format 1</p><p class="format">getProperty( &quot;CLASS&quot; )</p><p class="comment">output = classValue<span class="ref">1</span></p><p class="label">Format 2</p><p class="format">getProperty( &quot;CLASS&quot;, FALSE , TRUE )</p><p class="comment">output = array &quot;value&quot;   =&gt; classValue<span class="ref">1</span>
, &quot;params&quot; =&gt; xparam<span class="ref">2</span> )</p><p class="label">Example</p><p class="example">$class = $sfiCalAlarm->getProperty( &quot;class&quot; );</p><h5>Set CLASS</h5>
Insert property value.
<p class="label">Format</p><p class="format">setProperty( &quot;class&quot;, string classvalue [, xparam ] )</p><p class="comment">classvalue<span class="ref">1</span> = &quot;PUBLIC&quot;
/ &quot;PRIVATE&quot;
/ &quot;CONFIDENTIAL&quot;
/ iana-token
/ x-name
xparam<span class="ref">2</span>     = array( *[ xparamkey =&gt; xparamvalue ] )</p><p class="label">Example</p><p class="example">$sfiCalEvent->setProperty( &quot;class&quot;, &quot;CONFIDENTIAL&quot; );</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_component_object_property_function_list">[up]</a><a name="COMMENT"></a><h3>3.2.10 COMMENT</h3>
This property specifies non-processing information intended to provide a comment to the calendar user
and is OPTIONAL and MAY occur more than once in <a href="#sfiCalEvent">sfiCalEvent</a>, <a href="#sfiCalTodo">sfiCalTodo</a>, <a href="#sfiCalJournal">sfiCalJournal</a>, <a href="#sfiCalFreebusy">sfiCalFreebusy</a>, <a href="#sfiCalTimezone">STANDARD</a> and <a href="#sfiCalTimezone">DAYLIGHT</a> components.<br /><br />
The value type for COMMENT is TEXT.
<h5>Delete COMMENT</h5>
Remove COMMENT from component.
<p class="label">Format</p><p class="format">deleteProperty( &quot;COMMENT&quot; )</p><p class="label">Example 1</p><p class="example">$sfiCalEvent->deleteProperty( &quot;COMMENT&quot; );</p><p class="label">Example 2</p>
Delete COMMENT property no 2.
<p class="example">$sfiCalEvent->deleteProperty( &quot;COMMENT&quot;, 2 );</p><p class="label">Example 3</p>
Deleting all COMMENT properties.
<p class="example">while( $sfiCalEvent->deleteProperty( &quot;COMMENT&quot; ))
continue;</p><h5>Get COMMENT</h5>
Fetch property value.
<p class="label">Format 1</p><p class="format">getProperty( &quot;COMMENT&quot; )</p><p class="comment">output = commentValue<span class="ref">1</span></p><p class="label">Format 2</p><p class="format">getProperty( &quot;COMMENT&quot;, propOrderNo/FALSE , TRUE )</p><p class="comment">output = array( &quot;value&quot;  =&gt; commentValue<span class="ref">1</span>
, &quot;params&quot; =&gt; params<span class="ref">2</span> )</p><p class="label">Format 3</p><p class="format">getProperty( &quot;COMMENT&quot;, propOrderNo )</p><p class="comment">Get propOrderNo COMMENT</p><p class="label">Example</p><p class="example">$comment = $sfiCalEvent->getProperty( &quot;comment&quot; );</p><h5>Set COMMENT</h5>
Insert property value.
<p class="label">Format</p><p class="format">setProperty( &quot;comment&quot;, commentValue [, params [, propOrderNo ]] )</p><p class="comment">commentValue<span class="ref">1</span> = Value type Text
params<span class="ref">2</span>       = array( [&quot;LANGUAGE&quot; =&gt; &quot;&lt;lang&gt;&quot;]
[, &quot;ALTREP&quot; =&gt; &quot;&lt;an alternate text
representation, URI&gt;&quot;]
[, xparam] )
xparam        = *[ xparamkey =&gt; xparamvalue ]
propOrderNo   = int ordernumber, 1=1st, 2=2nd etc</p><p class="label">Example</p><p class="example">$sfiCalEvent->setProperty( &quot;comment&quot;, &quot;this is a comment&quot; );</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_component_object_property_function_list">[up]</a><a name="COMPLETED"></a><h3>3.2.11 COMPLETED</h3>
This property defines the date and time that a <a href="#sfiCalTodo">sfiCalTodo</a> was actually completed and is OPTIONAL and MUST NOT occur more than once.<br /><br />
The value type for COMPLETED is <a href="#DATE_WITH_UTC_TIME">UTC</a> DATE-TIME.
<h5>Delete COMPLETED</h5>
Remove COMPLETED from component.
<p class="label">Format</p><p class="format">deleteProperty( &quot;COMPLETED&quot; )</p><p class="label">Example</p><p class="example">$sfiCalTodo->deleteProperty( &quot;COMPLETED&quot; );</p><h5>Get COMPLETED</h5>
Fetch property value.
<p class="label">Format 1</p><p class="format">getProperty( &quot;COMPLETED&quot; )</p><p class="comment">output = completedDate<span class="ref">1</span></p><p class="label">Format 2</p><p class="format">getProperty( &quot;COMPLETED&quot;, FALSE , TRUE )</p><p class="comment">output = array( &quot;value&quot;  =&gt; completedDate<span class="ref">1</span>
, &quot;params&quot; =&gt; xparam<span class="ref">2</span> )</p><p class="label">Example</p><p class="example">$completed = $sfiCalTodo->getProperty( &quot;completed&quot; );</p><h5>Set COMPLETED</h5>
Insert property value. Input date is always a <a href="#DATE_WITH_UTC_TIME">UTC</a> DATE-TIME or, if &quot;offset&quot; parameter is used, converted to a <a href="#DATE_WITH_UTC_TIME">UTC</a> DATE-TIME.
<p class="label">Format</p><p class="format">setProperty( &quot;completed&quot;, completedDate [, xparam ] )</p><p class="comment">completedDate<span class="ref">1</span> = array( &quot;year&quot;  =&gt; int year
, &quot;month&quot; =&gt; int month
, &quot;day&quot;   =&gt; int day
[, &quot;hour&quot;  =&gt; int hour
, &quot;min&quot;   =&gt; int min
, &quot;sec&quot;   =&gt; int sec
, &quot;tz&quot;    =&gt; offset ]] )
completedDate  = int year
, int month
, int day
[, int hour
, int min
, int sec ]
completedDate  = array( int year
, int month
, int day
[, int hour
, int min
, int sec
[, offset ]] )
completedDate  = array ( &quot;timestamp&quot; =&gt; int timestamp [, &quot;tz&quot; => offset])
completedDate  = string datestring // <span class="ref">string date, acceptable by strtotime-command,
ex. &nbsp;&quot;14 august 2006 16.00.00&quot;
(notice <a class="ref" href="#date_restriction">date restriction</a>)</span>
offset         = (+/-)HHmm[ss], local date + UTC offset =&gt; <a href="#DATE_WITH_UTC_TIME">UTC</a> DATE-TIME
xparam<span class="ref">2</span>        = array( *[ xparamkey =&gt; xparamvalue ] )</p><p class="label">Example 1</p><p class="example">$sfiCalCalendar = new sfiCalCalendar();
$sfiCalCalendar->setConfig( &quot;unique_id&quot;, &quot;domain.com&quot; );
$sfiCalTodo = new sfiCalTodo();
.. .
$sfiCalTodo->setProperty( &quot;completed&quot;, 2006, 8, 10, 10, 0, 0 );
// <span class="ref">10 august 2006 10.00  UTC</span></p><p class="label">Example 2</p><p class="example">$date = array(&quot;year&quot; =&gt; 2006, &quot;month&quot; =&gt; 10, &quot;day&quot; =&gt; 10,
&quot;hour&quot; =&gt; 10, &quot;min&quot; =&gt; 0, &quot;sec&quot; =&gt; 0, &quot;tz&quot; =&gt; &quot;+0200&quot;);
// <span class="ref">local date + UTC offset =&gt; <a href="#DATE_WITH_UTC_TIME">UTC</a> DATE-TIME</span>
$sfiCalTodo->setProperty( &quot;completed&quot;, $date );</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_component_object_property_function_list">[up]</a><a name="CONTACT"></a><h3>3.2.12 CONTACT</h3>
The property is used to represent textual contact information or alternately a reference to textual contact information associated with the calendar component. The property is OPTIONAL and MUST NOT occur more than once in a sfiCalFreebusy or MAY occur more than once  in <a href="#sfiCalEvent">sfiCalEvent</a>, <a href="#sfiCalTodo">sfiCalTodo</a> and <a href="#sfiCalJournal">sfiCalJournal</a> components.<br /><br />
The value type for CONTACT is TEXT.
<h5>Delete CONTACT</h5>
Remove CONTACT from component.
<p class="label">Format</p><p class="format">deleteProperty( &quot;CONTACT&quot; )</p><p class="label">Example 1</p><p class="example">$sfiCalEvent->deleteProperty( &quot;CONTACT&quot; );</p><p class="label">Example 2</p>
Delete CONTACT property no 2.
<p class="example">$sfiCalEvent->deleteProperty( &quot;CONTACT&quot;, 2 );</p><p class="label">Example 3</p>
Deleting all CONTACT properties.
<p class="example">while( $sfiCalEvent->deleteProperty( &quot;CONTACT&quot; ))
continue;</p><h5>Get CONTACT</h5>
Fetch property value.
<p class="label">Format 1</p><p class="format">getProperty( &quot;CONTACT&quot; )</p><p class="comment">output = contactValue<span class="ref">1</span></p><p class="label">Format 2</p><p class="format">getProperty( &quot;CONTACT&quot;, propOrderNo/FALSE , TRUE )</p><p class="comment">output = array( &quot;value&quot;  =&gt; contactValue<span class="ref">1</span>
, &quot;params&quot; =&gt; params<span class="ref">2</span> )</p><p class="label">Format 3</p><p class="format">getProperty( &quot;CONTACT&quot;, propOrderNo )</p><p class="comment">Get propOrderNo CONTACT</p><p class="label">Example</p><p class="example">$contact = $sfiCalEvent->getProperty( &quot;contact&quot; );</p><h5>Set CONTACT</h5>
Insert property value.
<p class="label">Format</p><p class="format">setproperty( &quot;contact&quot;, contactValue [, params [, propOrderNo ]] )</p><p class="comment">contactValue<span class="ref">1</span> = Value type TEXT
params<span class="ref">2</span>       = array ( [&quot;LANGUAGE&quot; =&gt; &quot;&lt;lang&gt;&quot;]
[, &quot;ALTREP&quot; =&gt; &quot;&lt;an alternate text
representation, URI&gt;&quot;]
[, xparam] )
xparam        = *[ xparamkey =&gt; xparamvalue ]
propOrderNo   = int ordernumber, 1=1st, 2=2nd etc</p><p class="label">Example</p><p class="example">$c->setProperty( &quot;contact&quot;, &quot;tel 012-34 56 789&quot; )</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_component_object_property_function_list">[up]</a><a name="CREATED"></a><h3>3.2.13 CREATED</h3>
This property specifies the date and time that the calendar information was created by the calendar user agent in the calendar store. Note: This is analogous to the creation date and time for a file in the file system. Rhe property is OPTIONAL and MUST NOT occur more than once in <a href="#sfiCalEvent">sfiCalEvent</a>, <a href="#sfiCalTodo">sfiCalTodo</a> and <a href="#sfiCalJournal">sfiCalJournal</a> components.<br /><br />
The value type for CREATED is <a href="#DATE_WITH_UTC_TIME">UTC</a> DATE-TIME.
<h5>Delete CREATED</h5>
Remove CREATED from component.
<p class="label">Format</p><p class="format">deleteProperty( &quot;CREATED&quot; )</p><p class="label">Example</p><p class="example">$sfiCalEvent->deleteProperty( &quot;CREATED&quot; );</p><h5>Get CREATED</h5>
Fetch property value.
<p class="label">Format 1</p><p class="format">getProperty( &quot;CREATED&quot; )</p><p class="comment">output = createdDate<span class="ref">1</span></p><p class="label">Format 2</p><p class="format">getProperty( &quot;CREATED&quot;, FALSE , TRUE )</p><p class="comment">output = array( &quot;value&quot;  =&gt; createdDate<span class="ref">1</span>
, &quot;params&quot; =&gt; xparam<span class="ref">2</span> )</p><p class="label">Example</p><p class="example">$created = $sfiCalEvent->getProperty( &quot;CREATED&quot; );</p><h5>Set CREATED</h5>
Insert property value. Input date is always a <a href="#DATE_WITH_UTC_TIME">UTC</a> DATE-TIME or, if &quot;offset&quot; parameter is used, converted to a <a href="#DATE_WITH_UTC_TIME">UTC</a> DATE-TIME.
<p class="label">Format</p><p class="format">setProperty( &quot;created&quot;, [ createdDate [, xparam ]] )</p><p class="comment">createdDate<span class="ref">1</span> = array( &quot;year&quot;  =&gt; int year
, &quot;month&quot; =&gt; int month
, &quot;day&quot;   =&gt; int day
[, &quot;hour&quot;  =&gt; int hour
, &quot;min&quot;   =&gt; int min
, &quot;sec&quot;   =&gt; int sec
, &quot;tz&quot;    =&gt; offset ]] )
createdDate  = int year
, int month
, int day
[, int hour
, int min
, int sec ]
createdDate  = array( int year
, int month
, int day
[, int hour
, int min
, int sec
[, offset ]] )
createdDate  = array ( &quot;timestamp&quot; =&gt; int timestamp [, &quot;tz&quot; => offset ])
createdDate  = string datestring // <span class="ref">string date, acceptable by strtotime-command,
ex. &nbsp;&quot;14 august 2006 16.00.00&quot;
(notice <a class="ref" href="#date_restriction">date restriction</a>)</span>
offset       = (+/-)HHmm[ss], local date + UTC offset =&gt; <a href="#DATE_WITH_UTC_TIME">UTC</a> DATE-TIME
xparam<span class="ref">2</span>      = array( *[ xparamkey =&gt; xparamvalue ] )</p><p class="label">Example 1</p><p class="example">$sfiCalCalendar = new sfiCalCalendar();
$sfiCalCalendar->setConfig( &quot;unique_id&quot;, &quot;domain.com&quot; );
$sfiCalTodo = new sfiCalTodo();
.. .
$sfiCalEvent->setProperty( &quot;created&quot;, 2006, 8, 11, 14, 30, 35 );
// <span class="ref">11 august 2006 14.30.35 UTC</span></p><p class="label">Example 2</p><p class="example">$date = array(&quot;year&quot; =&gt; 2006, &quot;month&quot; =&gt; 10, &quot;day&quot; =&gt; 10,
&quot;hour&quot; =&gt; 10, &quot;min&quot; =&gt; 0, &quot;sec&quot; =&gt; 0, &quot;tz&quot; =&gt; &quot;+0200&quot;);
// <span class="ref">local date + UTC offset =&gt; <a href="#DATE_WITH_UTC_TIME">UTC</a> DATE-TIME</span>
$sfiCalTodo->setProperty( &quot;created&quot;, $date );
.. .</p><p class="label">Example 3</p><p class="example">$sfiCalEvent->setProperty( &quot;created&quot; );
// <span class="ref">current UTC date-time is set if called without parameters</span></p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_component_object_property_function_list">[up]</a><a name="DESCRIPTION"></a><h3>3.2.14 DESCRIPTION</h3>
This property provides a more complete textual description of the calendar component, than that provided by the <a href="#SUMMARY">SUMMARY</a> property (, analogous to a mail BODY). The property is OPTIONAL, MUST NOT occur more than once within <a href="#sfiCalEvent">sfiCalEvent</a>, <a href="#sfiCalTodo">sfiCalTodo</a> or <a href="#sfiCalAlarm">sfiCalAlarm</a> (PROCEDURE) but can be specified multiple times within a <a href="#sfiCalJournal">sfiCalJournal</a> calendar component. The property is REQUIRED in  <a href="#sfiCalAlarm">sfiCalAlarm</a> (DISPLAY, EMAIL) component.<br /><br />
The value type for DESCRIPTION is TEXT.
<h5>Delete DESCRIPTION</h5>
Remove DESCRIPTION from component.
<p class="label">Format</p><p class="format">deleteProperty( &quot;DESCRIPTION&quot; )</p><p class="label">Example 1</p><p class="example">$sfiCalEvent->deleteProperty( &quot;DESCRIPTION&quot; );</p><p class="label">Example 2</p>
Delete DESCRIPTION property no 2.
<p class="example">$sfiCalJournal->deleteProperty( &quot;DESCRIPTION&quot;, 2 );</p><p class="label">Example 3</p>
Deleting all DESCRIPTION properties.
<p class="example">while( $sfiCalJournal->deleteProperty( &quot;DESCRIPTION&quot; ))
continue;</p><h5>Get DESCRIPTION</h5>
Fetch property value.
<p class="label">Format 1</p><p class="format">getProperty( &quot;DESCRIPTION&quot; )</p><p class="comment">output = descriptionValue<span class="ref">1</span></p><p class="label">Format 2</p><p class="format">getProperty( &quot;DESCRIPTION&quot;, FALSE , TRUE )</p><p class="comment">output = array( &quot;value&quot;  =&gt; descriptionValue<span class="ref">1</span>
, &quot;params&quot; =&gt; params<span class="ref">2</span> )</p><p class="label">Example</p><p class="example">$description = $sfiCalEvent->getProperty( &quot;description&quot; );</p><h5>Set DESCRIPTION</h5>
Insert property value.
<p class="label">Format</p><p class="format">setProperty( &quot;description&quot;, descriptionValue [, params [, propOrderNo ]] )</p><p class="comment">descriptionValue<span class="ref">1</span> = Value type TEXT
params<span class="ref">2</span>           = array( [&quot;LANGUAGE&quot; =&gt; &quot;&lt;lang&gt;&quot;]
[, &quot;ALTREP&quot; =&gt; &quot;&lt;an alternate text
representation, URI&gt;&quot;]
[, xparam] )
xparam           = *[ xparamkey =&gt; xparamvalue ]
propOrderNo      = int ordernumber, 1=1st, 2=2nd etc</p><p class="label">Example</p><p class="example">$sfiCalEvent->setProperty( &quot;description&quot;, &quot;This is a description&quot; );</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_component_object_property_function_list">[up]</a><a name="DTEND"></a><h3>3.2.15 DTEND</h3>
This property specifies the date and time that a calendar component ends.
The property is OPTIONAL and MUST NOT occur more than once in sfiCalFreebusy and sfiCalEvent. In sfiCalEvent, it only occurs
if DURATION NOT occurs.
<br /><br />
The default value type for DTEND is DATE-TIME, can be set to a DATE value type.
<br /><br />
Notice that an end date without a time is in effect midnight of the day before the date, so for timeless dates, use the date following the event date for it to be correct. For an &quot;all-day event&quot; and using timeless dates, the DTEND is equal DTSTART plus one day, example all-day event (2007-12-01)<br />DTSTART;VALUE=DATE:20071201<br /> DTEND;VALUE=DATE:20071202.
<h5>Delete DTEND</h5>
Remove DTEND from component.
<p class="label">Format</p><p class="format">deleteProperty( &quot;DTEND&quot; )</p><p class="label">Example</p><p class="example">$sfiCalEvent->deleteProperty( &quot;DTEND&quot; );</p><h5>Get DTEND</h5>
Fetch property value.
<p class="label">Format 1</p><p class="format">getProperty( &quot;DTEND&quot; )</p><p class="comment">output = dtendDate<span class="ref">1</span></p><p class="label">Format 2</p><p class="format">getProperty( &quot;DTEND&quot;, FALSE , TRUE )</span><p class="comment">output = array( &quot;value&quot;  =&gt; dtendDate<span class="ref">1</span>
, &quot;params&quot; =&gt; params<span class="ref">2</span> )</p><p class="label">Example</p><p class="example">$dtend = $sfiCalEvent->getProperty( &quot;dtend&quot; );</p><h5>Set DTEND</h5>
Insert property value. If DATE value type is expected, &quot;VALUE&quot; = &quot;DATE&quot; <b>must</b> be set
(in params<span class="ref">2</span>) otherwise DATE-TIME (default) value type is set.
<p class="label">Format</p><p class="format">setProperty( &quot;dtend&quot;, dtendDate [, params<span class="ref">2</span> ] )</span><p class="comment">dtendDate<span class="ref">1</span>    = array ( &quot;year&quot;  =&gt; int year
, &quot;month&quot; =&gt; int month
, &quot;day&quot;   =&gt; int day
[, &quot;hour&quot;  =&gt; int hour
, &quot;min&quot;   =&gt; int min
, &quot;sec&quot;   =&gt; int sec
[, &quot;tz&quot;    =&gt; mixed tz ]] )
dtendDate     = int year
, int month
, int day
[, int hour
, int min
, int sec
[, mixed tz ]]
dtendDate     = array( int year
, int month
, int day
[, int hour
, int min
, int sec
[, mixed tz ]] )
dtendDate     = array( &quot;timestamp&quot; =&gt; int timestamp [,&quot;tz&quot; =&gt; mixed tz])
dtendDate     = string datestring // <span class="ref">string date, acceptable by strtotime-command,
ex.&nbsp;&quot;14 august 2006 16.00.00&quot;
(notice <a class="ref" href="#date_restriction">date restriction</a>)</span>
dtendDate     : Within the "sfiCalFreebusy" calendar component,
the time MUST be specified in the <a href="#DATE_WITH_UTC_TIME">UTC</a> time format.
tz            = timezone / UTC offset
offset        = (+/-)HHmm[ss], local date + UTC offset =&gt; <a href="#DATE_WITH_UTC_TIME">UTC</a> DATE-TIME
params<span class="ref">2</span>       = array([ tzidparam/datetimeparam/dateparam ] *[,xparams])
tzidparam     = timezone identifier
// <span class="ref">date output as local date-time with timezone identifier</span>
datetimeparam = &quot;VALUE&quot; =&gt; &quot;DATE-TIME&quot; // <span class="ref">default, date output as date-time</span>
dateparam     = &quot;VALUE&quot; =&gt; &quot;DATE&quot; // <span class="ref">date output as DATE, ex. all-day event</span>
xparams       = xparamkey =&gt; xparamvalue</p><p class="label">Example 1</p><p class="example">$sfiCalEvent->setProperty( &quot;dtend&quot;
, 2006, 8, 11, 16, 30, 0 );
<span class="ref">// 11 august 2006 16.30.00 local date</span></p><p class="label">Example 2</p><p class="example">$sfiCalFreebusy->setProperty( &quot;dtend&quot;
, 2006, 8, 11, 16, 30, 0, &quot;-040000&quot; );
<span class="ref">// 11 august 2006 16.30.00 -040000 : local date + UTC offset =&gt; <a href="#DATE_WITH_UTC_TIME">UTC</a> DATE-TIME</span></p><p class="label">Example 3</p><p class="example">$sfiCalEvent->setProperty( &quot;dtend&quot;
, array( 'year' =&gt;, 2006, 'month' =&gt; 8, 'day'=&gt; 11 )
, array( 'VALUE' =&gt; 'DATE' ));
<span class="ref">// end of one or more all-day events</span></p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_component_object_property_function_list">[up]</a><a name="DTSTAMP"></a><h3>3.2.16 DTSTAMP</h3>
The property indicates the date/time that the instance of the iCalendar object was created and is OPTIONAL and MUST NOT occur more than once  in <a href="#sfiCalEvent">sfiCalEvent</a>, <a href="#sfiCalTodo">sfiCalTodo</a>, <a href="#sfiCalJournal">sfiCalJournal</a> and <a href="#sfiCalFreebusy">sfiCalFreebusy</a> components. However, DTSTAMP is <b>AUTO</b> GENERATED in iCalcreator.
<br /><br />
DTSTAMP may be required when importing iCal files into some calendaring software (MS etc.),
as well as (calendar) <a href="#X-PROPERTY">x-properties</a> "X-WR-CALNAME", "X-WR-CALDESC" and "X-WR-TIMEZONE",
<a href="#METHOD">METHOD</a> property (value PUBLISH etc.) and (also auto created) <a href="#UID">UID</a> property.
<br /><br />
The value type for DTSTAMP is <a href="#DATE_WITH_UTC_TIME">UTC</a> DATE-TIME.
<h5>Delete DTSTAMP</h5>
Remove DTSTAMP from component, DTSTAMP will then auto be recreated when calendar output functions like createCalendar, ReturnCalendar or saveCalendar is executed.
<p class="label">Format</p><p class="format">deleteProperty( &quot;DTSTAMP&quot; )</p><p class="label">Example</p><p class="example">$sfiCalEvent->deleteProperty( &quot;DTSTAMP&quot; );</p><h5>Get DTSTAMP</h5>
Fetch property value.
<p class="label">Format 1</p><p class="format">getProperty( &quot;DTSTAMP&quot; )</p><p class="comment">output = dtstampDate<span class="ref">1</span></p><p class="label">Format 2</p><p class="format">getProperty( &quot;DTSTAMP&quot;, FALSE , TRUE )</p><p class="comment">output = array( &quot;value&quot;  =&gt; dtstampDate<span class="ref">1</span>
, &quot;params&quot; =&gt; xparam<span class="ref">2</span> )</p><p class="label">Example</p><p class="example">$dtstamp = $sfiCalEvent->getProperty( &quot;dtstamp&quot; );</p><h5>Set DTSTAMP</h5>
Insert property value. Input date is always a <a href="#DATE_WITH_UTC_TIME">UTC</a> DATE-TIME or, if &quot;offset&quot; parameter is used, converted to a <a href="#DATE_WITH_UTC_TIME">UTC</a> DATE-TIME.
<p class="label">Format</p><p class="format">setProperty( &quot;dtstamp&quot;, dtstampDate [, xparam ] )</p><p class="comment">dtstampDate<span class="ref">1</span> = array( &quot;year&quot;  =&gt; int year
, &quot;month&quot; =&gt; int month
, &quot;day&quot;   =&gt; int day
[, &quot;hour&quot;  =&gt; int hour
, &quot;min&quot;   =&gt; int min
, &quot;sec&quot;   =&gt; int sec
, &quot;tz&quot;    =&gt; offset ]] )
dtstampDate  = int year
, int month
, int day
[, int hour
, int min
, int sec ]
dtstampDate  = array( int year
, int month
, int day
[, int hour
, int min
, int sec
[, offset ]] )
dtstampDate  = array ( &quot;timestamp&quot; =&gt; int timestamp [, &quot;tz&quot; => offset ])
dtstampDate  = string datestring // <span class="ref">string date, acceptable by strtotime-command,
ex. &nbsp;&quot;14 august 2006 16.00.00&quot;
(notice <a class="ref" href="#date_restriction">date restriction</a>)</span>
offset       = (+/-)HHmm[ss], local date + UTC offset =&gt; <a href="#DATE_WITH_UTC_TIME">UTC</a> DATE-TIME
xparam<span class="ref">2</span>      = array( *[ xparamkey =&gt; xparamvalue ] )</p><p class="label">Example 1</p><p class="example">$sfiCalCalendar = new sfiCalCalendar();
$sfiCalCalendar->setConfig( &quot;unique_id&quot;, &quot;domain.com&quot; );
$sfiCalTodo = new sfiCalTodo();
.. .
$sfiCalEvent->setProperty( &quot;dstamp&quot;
, 2006, 8, 11, 7, 30, 1 );
<span class="ref">// 11 august 2006 07.30.01 UTC</span></p><p class="label">Example 2</p><p class="example">$date = array(&quot;year&quot; =&gt; 2006, &quot;month&quot; =&gt; 10, &quot;day&quot; =&gt; 10,
&quot;hour&quot; =&gt; 10, &quot;min&quot; =&gt; 0, &quot;sec&quot; =&gt; 0, &quot;tz&quot; =&gt; &quot;+0200&quot;);
// <span class="ref">local date + UTC offset =&gt; <a href="#DATE_WITH_UTC_TIME">UTC</a> DATE-TIME</span>
$sfiCalTodo->setProperty( &quot;dtstamp&quot;, $date );
.. .</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_component_object_property_function_list">[up]</a><a name="DTSTART"></a><h3>3.2.17 DTSTART</h3>
This property specifies when the calendar component begins. The property is OPTIONAL and MUST NOT occur more than once in <a href="#sfiCalEvent">sfiCalEvent</a>, <a href="#sfiCalTodo">sfiCalTodo</a>, <a href="#sfiCalJournal">sfiCalJournal</a> and <a href="#sfiCalFreebusy">sfiCalFreebusy</a> components. The property is REQUIRED, but MUST NOT occur more than once in <a href="#sfiCalTimezone">STANDARD</a> and <a href="#sfiCalTimezone">DAYLIGHT</a> components.<br /><br />
The default value type for DTSTART is DATE-TIME, can be set to a DATE value type.<br /><br />
For an &quot;all-day event&quot; and using timeless dates, example (2007-12-01)<br />
DTSTART;VALUE=DATE:20071201<br />
DTEND;VALUE=DATE:20071202. // <span class="ref">opt., in effect midnight of the day <u>before</u> the date&#33;&#33;</span><h5>Delete DTSTART</h5>
Remove DTSTART from component.
<p class="label">Format</p><p class="format">deleteProperty( &quot;DTSTART&quot; )</p><p class="label">Example</p><p class="example">$sfiCalEvent->deleteProperty( &quot;DTSTART&quot; );</p><h5>Get DTSTART</h5>
Fetch property value.
<p class="label">Format 1</p><p class="format">getProperty( &quot;DTSTART&quot; )</p><p class="comment">output = dtstartDate<span class="ref">1</span></p><p class="label">Format 2</p><p class="format">getProperty( &quot;DTSTART&quot;, FALSE , TRUE )</p><p class="comment">output = array( &quot;value&quot;  =&gt; dtstartDate<span class="ref">1</span>
, &quot;params&quot; =&gt; params<span class="ref">2</span> )</p><p class="label">Example</p><p class="example">$dtstart = $sfiCalEvent->getProperty( &quot;dtstart&quot; );</p><h5>Set DTSTART</h5>
Insert property value. If DATE value type is expected, &quot;VALUE&quot; = &quot;DATE&quot; <b>must</b> be set (in params<span class="ref">2</span>) otherwise DATE-TIME (default) value type is set.
<p class="label">Format</p><p class="format">setProperty( &quot;dtstart&quot;, dtstartDate [, params ] )</p><p class="comment">dtstartDate<span class="ref">1</span>  = array( &quot;year&quot;  =&gt; int year
, &quot;month&quot; =&gt; int month
, &quot;day&quot;   =&gt; int day
[, &quot;hour&quot;  =&gt; int hour
, &quot;min&quot;   =&gt; int min
, &quot;sec&quot;   =&gt; int sec
[, &quot;tz&quot;    =&gt; mixed tz ]] )
dtstartDate   = int year
, int month
, int day
[, int hour
, int min
, int sec
[, mixed tz ]]
dtstartDate   = array( int year
, int month
, int day
[, int hour
, int min
, int sec
[, mixed tz ]] )
dtstartDate   = array(&quot;timestamp&quot; =&gt; int timestamp [, &quot;tz&quot; =&gt; mixed tz])
dtstartDate   = string datestring // <span class="ref">string date, acceptable by strtotime-command,
ex.&nbsp;&quot;14 august 2006 16.00.00&quot;
(notice <a class="ref" href="#date_restriction">date restriction</a>)</span>
dtstartDate : Within the "sfiCalFreebusy" calendar component,
the dtstartDate MUST be specified in the <a href="#DATE_WITH_UTC_TIME">UTC</a> time format.
tz            = timezone / offset
offset        = (+/-)HHmm[ss], local date + UTC offset =&gt; <a href="#DATE_WITH_UTC_TIME">UTC</a> DATE-TIME
params<span class="ref">2</span>       = array([ tzidparam/datetimeparam/dateparam ] *[, xparams])
tzidparam     = timezone identifier
// <span class="ref">date output as local date-time with timezone identifier</span>
datetimeparam = &quot;VALUE&quot; =&gt; &quot;DATE-TIME&quot; // <span class="ref">default, date output as date-time</span>
dateparam     = &quot;VALUE&quot; =&gt; &quot;DATE&quot; // <span class="ref">date output as DATE, ex. all-day event</span>
xparams       = xparamkey =&gt; xparamvalue</p><p class="label">Example 1</p><p class="example">$sfiCalEvent->setProperty( &quot;dstart&quot;
, 2006, 8, 11, 7, 30, 1 );
<span class="comment">// 11 august 2006 07.30.01 local date</span></p><p class="label">Example 2</p><p class="example">$sfiCalEvent->setProperty( &quot;dstart&quot;
, 2006, 8, 11, 16, 30, 0, &quot;-040000&quot; );
<span class="comment">// 11 august 2006 16.30.00 -040000,
// local date + UTC offset =&gt; <a href="#DATE_WITH_UTC_TIME">UTC</a> DATE-TIME</span></p><p class="label">Example 3</p><p class="example">$sfiCalEvent->setProperty( &quot;dtstart&quot;
, array( 'year' =&gt;, 2006, 'month' =&gt; 8, 'day'=&gt; 11 )
, array( 'VALUE' =&gt; 'DATE' ));
<span class="comment">// start of an all-day event, or a period of (entire) days</span></p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_component_object_property_function_list">[up]</a><a name="DUE"></a><h3>3.2.18 DUE</h3>
This property defines the date and time when a <a href="#sfiCalTodo">sfiCalTodo</a> is expected to be completed
and is OPTIONAL and MUST NOT occur more than once and only if DURATION NOT occurs.<br /><br />
The default value type for DUE is DATE-TIME, can be set to a DATE value type.
<h5>Delete DUE</h5>
Remove DUE from component.
<p class="label">Format</p><p class="format">deleteProperty( &quot;DUE&quot; )</p><p class="label">Example</p><p class="example">$sfiCalTodo->deleteProperty( &quot;DUE&quot; );</p><h5>Get DUE</h5>
Fetch property value.
<p class="label">Format 1</p><p class="format">getProperty( &quot;DUE&quot; )</p><p class="comment">output = dueDate<span class="ref">1</span></p><p class="label">Format 2</p><p class="format">getProperty( &quot;DUE&quot;, FALSE , TRUE )</p><p class="comment">output = array( &quot;value&quot;  =&gt; dueDate<span class="ref">1</span>
, &quot;params&quot; =&gt; params<span class="ref">2</span> )</p><p class="label">Example</p><p class="example">$due = $sfiCalTodo->getProperty( &quot;due&quot; );</p><h5>Set DUE</h5>
Insert property value. If DATE value type is expected, &quot;VALUE&quot; = &quot;DATE&quot; <b>must</b> be set
(in params<span class="ref">2</span>) otherwise DATE-TIME (default) value type is set.
<p class="label">Format</p><p class="format">setProperty( &quot;due&quot;, dueDate [, params ] )</p><p class="comment">dueDate<span class="ref">1</span>      = array( &quot;year&quot;   =&gt; int year
, &quot;month&quot; =&gt; int month
, &quot;day&quot;   =&gt; int day
[, &quot;hour&quot;  =&gt; int hour
, &quot;min&quot;   =&gt; int min
, &quot;sec&quot;   =&gt; int sec
[, &quot;tz&quot;    =&gt; mixed tz ]] )
dueDate       = int year
, int month
, int day
[, int hour
, int min
, int sec
[, mixed tz ]]
dueDate       = array( int year
, int month
, int day
[, int hour
, int min
, int sec
[, mixed tz ]] )
dueDate       = array( &quot;timestamp&quot; =&gt; int timestamp [, &quot;tz&quot; =&gt; mixed tz])
dueDate       = string datestring // <span class="ref">string date, acceptable by strtotime-command,
ex.&nbsp;&quot;14 august 2006 16.00.00&quot;
(notice <a class="ref" href="#date_restriction">date restriction</a>)</span>
tz            = timezone / offset
offset        = (+/-)HHmm[ss], local date + UTC offset =&gt; <a href="#DATE_WITH_UTC_TIME">UTC</a> DATE-TIME
params<span class="ref">2</span>       = array([ tzidparam/datetimeparam/dateparam ] *[, xparams])
tzidparam     = timezone identifier
// <span class="ref">date output as local date-time with timezone identifier</span>
datetimeparam = &quot;VALUE&quot; =&gt; &quot;DATE-TIME&quot; // <span class="ref">default, date output as date-time</span>
dateparam     = &quot;VALUE&quot; =&gt; &quot;DATE&quot; // <span class="ref">date output as DATE, &quot;during the day&quot;</span>
xparams       = xparamkey =&gt; xparamvalue<p/><p class="label">Example 1</p><p class="example">$sfiCalTodo->setProperty( &quot;due&quot;
, 2006, 8, 11, 18, 0, 0 );
<span class="comment">// 11 august 2005 18.00.00 local date</span></p><p class="label">Example 2</p><p class="example">$sfiCalTodo->setProperty( &quot;due&quot;
, 2006, 8, 11, 16, 30, 0, &quot;-040000&quot; );
<span class="comment">// 11 august 2006 16.30.00 -040000
// local date + UTC offset sets <a href="#DATE_WITH_UTC_TIME">UTC</a> DATE-TIME</span></p><p class="label">Example 3</p><p class="example">$sfiCalEvent->setProperty( &quot;due&quot;
, array( 'year' =&gt;, 2006, 'month' =&gt; 8, 'day'=&gt; 11 )
, array( 'VALUE' =&gt; 'DATE' ));
<span class="comment">// due &quot;during the day&quot;</span></p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_component_object_property_function_list">[up]</a><a name="DURATION"></a><h3>3.2.19 DURATION</h3>
The property specifies a positive duration of time<br />
In a sfiCalEvent it is OPTIONAL and MUST NOT occur more than once and MUST NOT occur in pair with DTEND. If one occurs, so MUST NOT the other.<br />
In a sfiCalTodo it is OPTIONAL and MUST NOT occur more than once and MUST NOT occur in pair with DUE. If one occurs, so MUST NOT the other.<br />
In a sfiCalFreebusy it is OPTIONAL and MUST NOT occur more than once.<br />
In a sfiCalAlarm it is OPTIONAL and MUST NOT occur more than once and MUST occur in pair with TRIGGER. If one occurs, so MUST  the other.
<h5>Delete DURATION</h5>
Remove DURATION from component.
<p class="label">Format</p><p class="format">deleteProperty( &quot;DURATION&quot; )</p><p class="label">Example</p><p class="example">$sfiCalAlarm->deleteProperty( &quot;DURATION&quot; );</p><h5>Get DURATION</h5>
Fetch property value.
<p class="label">Format 1</p><p class="format">getProperty( &quot;DURATION&quot; )</p><p class="comment">output = duration<span class="ref">1</span></p><p class="label">Format 2</p><p class="format">getProperty( &quot;DURATION&quot;, FALSE , TRUE )</p><p class="comment">output = array( &quot;value&quot;  =&gt; duration<span class="ref">1</span>
, &quot;params&quot; =&gt; xparam<span class="ref">2</span> )</p><p class="label">Example</p><p class="example">$duration = $sfiCalTodo->getProperty( &quot;duration&quot; );</p><p class="label">option</p>
If a 4th argument is used and set to TRUE, returned output is in a DATE-TIME
output format (like <a href="#DTEND">DTEND</a> / <a href="#DUE">DUE</a>), based on
<a href="#DTSTART">DTSTART</a> value with added DURATION value.
<h5>Set DURATION</h5>
Insert property value.
<p class="label">Format</p><p class="format">setProperty( &quot;duration&quot;, duration [, xparam ] )</p><p class="comment">
duration<span class="ref">1</span>  = array ( &quot;week&quot; =&gt; int week )
duration<span class="ref">1</span>  = array ( &quot;day&quot; =&gt; int day )
[, &quot;hour&quot; =&gt; int hour
, &quot;min&quot; =&gt; int min
, &quot;sec&quot; =&gt; int sec ])
duration   = array ( &quot;sec&quot; =&gt; int sec )
duration   = array( int week/false
[, int day/false
[, int hour
, int min
, int sec ]] )
duration   = int week/false
[, int day/false
[, int hour
, int min
, int sec ]]
duration   = string dur-value = [&quot;+&quot;] &quot;P&quot; (dur-date/dur-time/dur-week)
dur-date   = dur-day [dur-time]
dur-time   = &quot;T&quot; (dur-hour / dur-minute / dur-second)
dur-week   = 1*DIGIT &quot;W&quot;
dur-hour   = 1*DIGIT &quot;H&quot; [dur-minute]
dur-minute = 1*DIGIT &quot;M&quot; [dur-second]
dur-second = 1*DIGIT &quot;S&quot;
dur-day    = 1*DIGIT &quot;D&quot;
xparam<span class="ref">2</span>     = array( *[ xparamkey =&gt; xparamvalue ] )</p><p class="label">Example 1</p><p class="example">$sfiCalTodo->setProperty &quot;duration&quot;
, array( &quot;day&quot; =&gt; 1 )); </p><p class="ref">// one day</p><p class="label">Example 2</p><p class="example">$sfiCalTodo->setProperty( &quot;duration&quot;
, &quot;PT4H&quot; );
<p class="ref"> // four hours</p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_component_object_property_function_list">[up]</a><a name="EXDATE"></a><h3>3.2.20 EXDATE</h3>
This property defines the list of date/time exceptions for a recurring calendar component and is OPTIONAL and MAY occur more than once in <a href="#sfiCalEvent">sfiCalEvent</a>, <a href="#sfiCalTodo">sfiCalTodo</a>, <a href="#sfiCalJournal">sfiCalJournal</a> components.<br /><br />
The default value type for EXDATE is DATE-TIME, can be set to a DATE value type.
<h5>Delete EXDATE</h5>
Remove EXDATE from component.
<p class="label">Format</p><p class="format">deleteProperty( &quot;EXDATE&quot; )</p><p class="label">Example 1</p><p class="example">$sfiCalTodo->deleteProperty( &quot;EXDATE&quot; );</p><p class="label">Example 2</p>
Delete EXDATE property no 2.
<p class="example">$sfiCalJournal->deleteProperty( &quot;EXDATE&quot;, 2 );</p><p class="label">Example 3</p>
Deleting all EXDATE properties.
<p class="example">while( $sfiCalJournal->deleteProperty( &quot;EXDATE&quot; ))
continue;</p><h5>Get EXDATE</h5>
Fetch property value.
<p class="label">Format 1</p><p class="format">getProperty( &quot;EXDATE&quot; )<p><p class="comment">output = exdates<span class="ref">1</span></p><p class="label">Format 2</p><p class="format">getProperty( &quot;exdate&quot;, propOrderNo/FALSE, TRUE )</p><p class="comment">output = array( &quot;value&quot;  =&gt; exdates<span class="ref">1</span>
, &quot;params&quot; =&gt; xparams<span class="ref">2</span> )</p><p class="label">Format 3</p><p class="format">getProperty( &quot;EXDATE&quot;, propOrderNo )</p><p class="comment">Get propOrderNo EXDATE</p><p class="label">Example</p><p class="example">$exdate = $sfiCalTodo->getProperty( &quot;exdate&quot; );</p><h5>Set EXDATE</h5>
Insert property value.<br />
If &quot;TZID&quot; is set in params, ex. &quot;TZID&quot; = &quot;CET&quot;,
all timezone or offset in dates are ignored and DATE-TIME value type is set.<br />
If DATE value type is set in params (&quot;VALUE&quot; = &quot;DATE&quot;), all timezone or offset in dates are ignored.<br />
If no &quot;VALUE&quot; parameter in params, DATE-TIME (default) value type is set.<br />
If empty params and offset in 1st date, all remaining dates are set to UTC.<br />
If no &quot;TZID&quot; is set in params and timezone in 1st date, all remaining dates are within this timezone and param &quot;TZID&quot; is set.<br />
If none of the above rules are applicable, DATE-TIME and local date is set default.
<p class="label">Format</p><p class="format">setProperty( &quot;exdate&quot;, exdates [, xparams [, propOrderNo ]] )</p><p class="comment">exdates<span class="ref">1</span>      = array ( date *[, date ] )
date          = array( int year
, int month
, int day
[, int hour
, int min
, int sec
[, mixed tz ]] )
date<span class="ref">1</span>         = array( &quot;year&quot;  =&gt; int year
, &quot;month&quot; =&gt; int month
, &quot;day&quot;   =&gt; int day
[, &quot;hour&quot;  =&gt; int hour
, &quot;min&quot;   =&gt; int min
, &quot;sec&quot;   =&gt; int sec
[, &quot;tz&quot;    =&gt; mixed tz ]] )
date          = array( &quot;timestamp&quot; =&gt; int timestamp [, &quot;tz&quot; =&gt; mixed tz])
date          = string datestring // <span class="ref">string date, acceptable by strtotime-command,
ex.&nbsp;&quot;14 august 2006 16.00.00&quot;
(notice <a class="ref" href="#date_restriction">date restriction</a>)</span>
tz            = timezone / offset
offset        = (+/-)HHmm[ss], local date + UTC offset =&gt; <a href="#DATE_WITH_UTC_TIME">UTC</a> DATE-TIME
params<span class="ref">2</span>       = array([(datetimeparam/dateparam)&nbsp;/ tzidparam] [,xparam])
datetimeparam = &quot;VALUE&quot; =&gt; &quot;DATE-TIME&quot; // <span class="ref">default, date output as date-time</span>
dateparam     = &quot;VALUE&quot; =&gt; &quot;DATE&quot; // <span class="ref">date output as DATE</span>
tzidparam     = &quot;TZID&quot; =&gt; text
xparams       = *[ xparamkey =&gt; xparamvalue ]
propOrderNo   = int ordernumber, 1=1st, 2=2nd etc</p><p class="label">Example 1</p><p class="example">$sfiCalEvent->setProperty( &quot;exdate&quot;
, array( array( 2006, 8, 14, 16, 0, 0 ));
<span class="ref">// >exclude 2006-08-14 16.00.00 (local date) from recurrence pattern</span></p><p class="label">Example 2</p><p class="example">$sfiCalEvent->setProperty( &quot;exdate&quot;
, array( array('year' =&gt;,2006,'month' =&gt; 8,'day'=&gt; 11))
, array( 'VALUE' =&gt; 'DATE' ));
<span class="ref">// exclude 2006-08-11 from recurrence pattern;</span></p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_component_object_property_function_list">[up]</a><a name="EXRULE"></a><h3>3.2.21 EXRULE</h3>
This property defines a rule or repeating pattern for an exception to a recurrence set and is OPTIONAL and MAY occur more than once in <a href="#sfiCalEvent">sfiCalEvent</a>, <a href="#sfiCalTodo">sfiCalTodo</a>, <a href="#sfiCalJournal">sfiCalJournal</a> components.
<h5>Delete EXRULE</h5>
Remove EXRULE from component.
<p class="label">Format</p><p class="format">deleteProperty( &quot;EXRULE&quot; )</p><p class="label">Example 1</p><p class="example">$sfiCalTodo->deleteProperty( &quot;EXRULE&quot; );</p><p class="label">Example 2</p>
Delete EXRULE property no 2.
<p class="example">$sfiCalJournal->deleteProperty( &quot;EXRULE&quot;, 2 );</p><p class="label">Example 3</p>
Deleting all EXRULE properties.
<p class="example">while( $sfiCalJournal->deleteProperty( &quot;EXRULE&quot; ))
continue;</p><h5>Get EXRULE</h5>
Fetch property value.
<p class="label">Format 1</p><p class="format">getProperty( &quot;EXRULE&quot; )</p><p class="comment">output = recur<span class="ref">1</span></p><p class="label">Format 2</p><p class="format">getProperty( &quot;exrule&quot;, propOrderNo/FALSE, TRUE )</p><p class="comment">output = array( &quot;value&quot;  =&gt; recur<span class="ref">1</span>
, &quot;params&quot; =&gt; xparam<span class="ref">2</span> )</p><p class="label">Format 3</p><p class="format">getProperty( &quot;EXRULE&quot;, propOrderNo )</p><p class="comment">Get propOrderNo EXRULE</p><p class="label">Example</p><p class="example">$exrule = $sfiCalTodo->getProperty( &quot;exrule&quot; );</p><h5>Set EXRULE</h5>
Insert property value.
<p class="label">Format</p><p class="format">setProperty( &quot;exrule&quot;, recur [, xparams [, propOrderNo ]] )</p>
See rules in detail in RFC2445 - Internet Calendaring and Scheduling Core Object Specification (iCalendar) in <a href="http://www.kigkonsult.se/iCalcreator/downloads/dl.php?f=rfc2445" title="RFC2445 in text format"><b>text</b></a>
and <a href="http://www.kigkonsult.se/iCalcreator/iCalDictionary/index.html" title="RFC2445 in HTML format" target="_blank"><b>HTML</b></a> format.
<p class="comment">recur<span class="ref">1</span>      = array( "FREQ"=&gt;freq
// <span class="ref">either UNTIL or COUNT may appear in a &quot;recur&quot;,
but UNTIL and COUNT MUST NOT occur in the same &quot;recur&quot;</span>
[, &quot;UNTIL&quot; &quot;=&gt;&quot; >enddate ]
[, &quot;COUNT&quot; &quot;=&gt;&quot; 1*DIGIT ]
// <span class="ref">the rest of these keywords are optional, but MUST NOT occur more than once</span>
[, &quot;INTERVAL&quot;   &quot;=&gt;&quot; 1*DIGIT ]
[, &quot;BYSECOND&quot;   &quot;=&gt;&quot; byseclist ]
[, &quot;BYMINUTE&quot;   &quot;=&gt;&quot; byminlist ]
[, &quot;BYHOUR&quot;     &quot;=&gt;&quot; byhrlist ]
[, &quot;BYDAY&quot;      &quot;=&gt;&quot; bywdaylist ]
[, &quot;BYMONTHDAY&quot; &quot;=&gt;&quot; bymodaylist ]
[, &quot;BYYEARDAY&quot;  &quot;=&gt;&quot; byyrdaylist ]
[, &quot;BYWEEKNO&quot;   &quot;=&gt;&quot; bywknolist ]
[, &quot;BYMONTH&quot;    &quot;=&gt;&quot; bymolist ]
[, &quot;BYSETPOS&quot;   &quot;=&gt;&quot; bysplist ]
[, &quot;WKST&quot;       &quot;=&gt;&quot; weekday ]
[, x-name       &quot;=&gt;&quot; text ] )
freq        = &quot;SECONDLY&quot; /
&quot;MINUTELY&quot; /
&quot;HOURLY&quot;   /
&quot;DAILY&quot;    /
&quot;WEEKLY&quot;   /
&quot;MONTHLY&quot;  /
&quot;YEARLY&quot;
enddate     = date
enddate     = / date-time ;An <a href="#DATE_WITH_UTC_TIME">UTC</a> DATE-TIME value
byseclist   = seconds
byseclist   = array(seconds *(, seconds ))
seconds     = 1DIGIT / 2DIGIT ;0 to 59
byminlist   = minutes
byminlist   = array( minutes *(, minutes ))
minutes     = 1DIGIT / 2DIGIT ;0 to 59
byhrlist    = hour
byhrlist    = array( hour *(, hour ))
hour        = 1DIGIT / 2DIGIT ;0 to 23
bywdaylist  = weekdaynum
bywdaylist  = array( weekdaynum *("," weekdaynum ))
weekdaynum  = array( [([plus] ordwk / minus ordwk)], &quot;DAY&quot; =&gt; weekday )
plus        = &quot;+&quot;
minus       = &quot;-&quot;
ordwk       = 1DIGIT / 2DIGIT ;1 to 53
weekday     = &quot;SU&quot; / &quot;MO&quot; / &quot;TU&quot; / &quot;WE&quot; / &quot;TH&quot; / &quot;FR&quot; / &quot;SA&quot;
; Corresponding to
; SUNDAY, MONDAY, TUESDAY, WEDNESDAY, THURSDAY,
; FRIDAY, SATURDAY and SUNDAY days of the week.
bymodaylist = monthdaynum
bymodaylist = array( monthdaynum *(, monthdaynum ))
monthdaynum = ( [plus] ordmoday ) / ( minus ordmoday )
ordmoday    = 1DIGIT / 2DIGIT ;1 to 31
byyrdaylist = yeardaynum
byyrdaylist = array( yeardaynum *(, yeardaynum ))
yeardaynum  = ( [plus] ordyrday ) / ( minus ordyrday )
ordyrday    = 1DIGIT / 2DIGIT / 3DIGIT ;1 to 366
bywknolist  = weeknum
bywknolist  = array( weeknum *(, weeknum ))
weeknum     = ( [plus] ordwk ) / ( minus ordwk )
bymolist    = monthnum
bymolist    = array( monthnum *(, monthnum ))
monthnum    = 1DIGIT / 2DIGIT ;1 to 12
bysplist    = setposday
bysplist    = array( setposday *(, setposday ))
setposday   = yeardaynum</p><p class="comment">
xparam<span class="ref">2</span> = array( *[ xparamkey =&gt; xparamvalue ] )
propOrderNo = int ordernumber, 1=1st, 2=2nd etc</p><p class="label">Example</p><p class="example">$sfiCalEvent->setProperty(&nbsp;&quot;Exrule&quot;
,&nbsp;array( &quot;FREQ&quot;       =&gt; &quot;MONTHLY&quot;
, &quot;UNTIL&quot;      =&gt; &quot;20060831&quot;
// <span class="ref">DATE / DATE-TIME in <a href="#DATE_WITH_UTC_TIME">UTC</a> format; string/array, see <a href="#CREATED">CREATED</a> format</span>
, &quot;INTERVAL&quot;   =&gt; 2
, &quot;WKST&quot;       =&gt; &quot;SU&quot;
, &quot;BYSECOND&quot;   =&gt; 2
, &quot;BYMINUTE&quot;   =&gt; array( 2, -4, 6 ) // (*)
, &quot;BYHOUR&quot;     =&gt; array( 2, 4, -6 ) // (*)
, &quot;BYMONTHDAY&quot; =&gt; -2                // (*)
, &quot;BYYEARDAY&quot;  =&gt; 2                 // (*)
, &quot;BYWEEKNO&quot;   =&gt; array( 2, -4, 6 ) // (*)
, &quot;BYMONTH&quot;    =&gt; 2                 // (*)
, &quot;BYSETPOS&quot;   =&gt; array( 2, -4, 6 ) // (*)
, &quot;BYday&quot;      =&gt; array( array(-2, &quot;DAY&quot; =&gt; &quot;WE&quot; )
, array( 3, &quot;DAY&quot; =&gt; &quot;TH&quot;)
, array( 5, &quot;DAY&quot; =&gt; &quot;FR&quot;)
, array(    &quot;DAY&quot; =&gt; &quot;MO&quot;))
// (**)
, &quot;X-NAME&quot;     =&gt; &quot;x-value&quot; )
, array( &quot;xparamkey&quot;   =&gt; &quot;xparamValue&quot; ));
$sfiCalTodo->setProperty( >&quot;exrule&quot;
, array( &quot;FREQ&quot;        =&gt; &quot;WEEKLY&quot;
, &quot;COUNT&quot;       =&gt; 2
, &quot;INTERVAL&quot;    =&gt; 2
, &quot;WKST&quot;        =&gt; &quot;SU&quot;
, &quot;BYSECOND&quot;    =&gt; array( -2, 4, 6 ) // (*)
, &quot;BYMINUTE&quot;    =&gt; -2                // (*)
, &quot;BYHOUR&quot;      =&gt; 2                 // (*)
, &quot;BYMONTHDAY&quot;  =&gt; array( 2, -4, 6 ) // (*)
, &quot;BYYEARDAY&quot;   =&gt; array( -2, 4, 6 ) // (*)
, &quot;BYWEEKNO&quot;    =&gt; -2                // (*)
, &quot;BYMONTH&quot;     =&gt; array( 2, 4, -6 ) // (*)
, &quot;BYSETPOS&quot;    =&gt; -2                // (*)
, &quot;BYday&quot;       =&gt; array( 5, &quot;DAY&quot; =&gt; &quot;WE&quot; )
// (**)
, &quot;X-NAME&quot;      =&gt; &quot;x-value&quot;  )
, array( &quot;xparamkey&quot;   =&gt; &quot;xparamValue&quot; ));
//<span class="ref">(*)  single value/array of values</span>
//<span class="ref">(**) single value array /array of arrays</span></p><br /><a href="#INDEX">[index]</a><a href="#top">[top]</a><a href="#Calendar_component_object_property_function_list">[up]</a><a name="FREEBUSY_PROP"></a><h3>3.2.22 FREEBUSY</h3>
The property defines one or more free or busy time intervals in a <a href="#sfiCalFreebusy">sfiCalFreebusy</a> calendar component.<br /><br />
The value type for FREEBUSY is PERIOD. A PERIOD is a DATE-TIME/DATE-TIME or a DATE-TIME/duration.
<h5>Delete FREEBUSY</h5>
Remove FREEBUSY from component.
<p class="label">Format</p><p class="format">deleteProperty( &quot;FREEBUSY&quot; )</p><p class="label">Example 1</p><p class="example">$sfiCalFreebusy->deleteProperty( &quot;FREEBUSY&quot; );</p><p class="label">Example 2</p>
Delete FREEBUSY property no 2.
<p class="example">$sfiCalFreebusy->deleteProperty( &quot;FREEBUSY&quot;, 2 );</p><p class="label">Example 3</p>
Deleting all FREEBUSY properties.
<p class="example">while( $sfiCalFreebusy->deleteProperty( &quot;FREEBUSY&quot; ))
continue;</p><h5>Get FREEBUSY</h5>
Fetch property value.
<p class="label">Format 1</p><p class="format">getProperty( &quot;FREEBUSY&quot; )</p><p class="comment">output = array( &quot;fbtyp&quot; =&gt; freebusytype<span class="ref">1</span> , periods<span class="ref">2</span> )</p><p class="label">Format 3</p><p class="format">getProperty( &quot;FREEBUSY&quot;, propOrderNo/FALSE , TRUE )</p><p class="comment">output = array( &quot;value&quot; =&gt; array(&quot;fbtype&quot; =&gt; freebusytype<span class="ref">1</span> ,periods<span class="ref">2</span>)
, &quot;params&quot; =&gt; xparams<span class="ref"> 3</span> )</p><p class="label">Format 3</p><p class="format">getProperty( &quot;FREEBUSY&quot;, propOrderNo )</p><p class="comment">Get propOrderNo FREEBUSY</p><p class="label">Example</p><p class="example">$freebusy = $sfiCalFreebusy->getProperty( &quot;FREEBUSY&quot; );</p><h5>Set FREEBUSY</h5>
Insert property value. A FREEBUSY input date is always a <a href="#DATE_WITH_UTC_TIME">UTC</a> DATE-TIME.
<p class="label">Format</p><p class="format">setProperty( &quot;freebusy&quot;, freebusytype, fbperiods [, xparams [, propOrderNo ]] )</p><p class="comment">freebusytype<span class="ref">1</span>     = one of &quot;FREE&quot;
/ &quot;BUSY&quot; <b>Default</b>
/ &quot;BUSY-UNAVAILABLE&quot;
/ &quot;BUSY-TENTATIVE&quot;
/  x-name
fbperiods         = array( periods<span class="ref">2</span> )&nbsp;
periods<span class="ref">2</span>           = array( startdate, enddate/duration )
*[, array( startdate, enddate/duration )]
startdate/enddate = array( int year
, int month
, int day
, int int hour
, int min
, int day )
startdate/enddate = array( &quot;year&quot;  =&gt; int year
, &quot;month&quot; =&gt; int month
, &quot;day&quot;   =&gt; int day
, &quot;hour&quot;  =&gt; int hour
, &quot;min&quot;   =&gt; int min
, &quot;sec&quot;   =&gt; int sec ) // <span class="ref">output format</span>
startdate/enddate = array( &quot;timestamp&quot; =&gt; int timestamp )
startdate/enddate = string datestring // <span class="ref">string date, acceptable by strtotime-command,
ex.&nbsp;&quot;14 august 2006 16.00.00&quot;
(notice <a class="ref" href="#date_restriction">date restriction</a>)</span>
startdate/enddate : date and time values MUST be an <a href="#DATE_WITH_UTC_TIME">UTC</a> DATE-TIME
duration          = array( int week/false
[, int day/false
, int hour
, int min
, int sec] )
duration          = array( &quot;week&quot; =&gt; int week/false
[, &quot;day&quot;  =&gt; int day/false
[, &quot;hour&quot; =&gt; int hour
, &quot;min&quot;  =&gt; int min
, &quot;sec&quot;  =&gt; int sec ]] ); // <span class="ref">output format</span>
duration          = array( &quot;sec&quot;  =&gt; int sec )
duration          = string dur-value
= ([&quot;+&quot;]/&quot;-&quot;) &quot;P&quot; (dur-date/dur-time/dur-week)
dur-date          = dur-day [dur-time]
dur-time          = &quot;T&quot; (dur-hour / dur-minute / dur-second)
dur-week          = 1*DIGIT &quot;W&quot;
