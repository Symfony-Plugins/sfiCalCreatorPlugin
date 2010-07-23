#sfiCalCreatorPlugin

The `sfiCalCreatorPlugin` is a PHP implementation of [RFC2445](http://www.faqs.org/rfcs/rfc2445.html)/[RFC2446](http://www.faqs.org/rfcs/rfc2446.html) to manage iCal/xCal formatted files.

![alt text](http://filesrv.nullzueins.com/images/snapshots/iCal.png "Title")

It is an modified version from Kjell-Inge Gustafsson's [iCalCreator 2.6](http://www.kigkonsult.se/iCalcreator "Link tot the website.") under [LGPL](http://en.wikipedia.org/wiki/GNU_Lesser_General_Public_License "Link to Wikipedia article") License.

## Installation
To install the plugin for a symfony project, the usual process is to use the symfony command line.

With **Symfony > 1.0**, use:

    $ symfony plugin:install sfiCalCreatorPlugin


Alternatively, if you don't have PEAR installed, you can download the latest
package attached to this plugin's wiki page and extract it under your project's `plugins/` directory.

Clear the cache to enable the autoloading to find the new classes:

    $ php symfony cc


You're done.

## Contents

The plugin contains seven classes, `sfiCalCalendar`, `sfiCalCalendarComponent`,
`sfiCalEvent`, `sfiCalFreeBusy`, `sfiCalTimezone`, `sfiCalTodo` and `sfiCalJornal`.
These classes offer the same functionality as the original classes.
These are supplemented by methods which facilitate working with Symfony.
The original names of the classes are `vcalendar`, `calendarComponent`,
`vevent`, `vfreebusy`, `vtimezone`, `vtodo` and `vjornal`.
>**Note:** You can use both, but the when using the original class name, the additional methods are not available.

###Full documentation
After installation, you will find a detailed documentation in the directory `/plugins/sfiCalPlugin/doc/using.html`.

## Usage
### 1. Simple Usage
The call in a normal action.class.php is as follows:

    public function executeIndex(sfWebRequest $request) {
        $v = new sfiCalCalendar();                          // initiate new CALENDAR
        $e = new sfiCalEvent();                             // initiate a new EVENT
        $e->setProperty( 'categories', 'FAMILY' );                   // catagorize
        $e->setProperty( 'dtstart',  2006, 12, 24, 19, 30, 00 );  // 24 dec 2006 19.30
        $e->setProperty( 'duration', 0, 0, 3 );                    // 3 hours
        $e->setProperty( 'description', 'x-mas evening - diner' );    // describe the event
        $e->setProperty( 'location', 'Home' );                     // locate the event
        $v->addComponent( $e );                        // add component to calendar

        /* alt. production */
        // $v->returnCalendar();                       // generate and redirect output to user browser
        /* alt. dev. and test */
        $this->ical = $v->createCalendar();                   // generate and get output in string, for testing?
        return sfView::NONE;
    }


#### 2. Usage with database
The choice of ORM is not important. For this example I use Propel.


    public function executeCalendar(sfWebRequest $request) {
        $v = new sfiCalCalendar();
        $v->setConfig( "unique_id", "domain.com" );
        $v->setProperty( "x-wr-calname", "Calendar Sample" );
        $v->setProperty( "X-WR-CALDESC", "Calendar Description" );
        $v->setProperty( "X-WR-TIMEZONE", "Europe/Stockholm" );

        // Read data from database
        $c	= new Criteria();
        $c->addAscendingOrderByColumn(ConcertPeer::DATETIME);
        $c->add(ConcertPeer::DATETIME,mktime(0,0,0,date("n"),1,date("Y")),Criteria::GREATER_THAN);
        $concertList = ConcertPeer::doSelect($c);

        // iterate on the data to generate events
        foreach ($concertList as $concert) {
            $e = new sfiCalEvent();                           // initiate a new EVENT
            $e->setProperty( 'categories', 'MUSIC' );                   // catagorize
            $e->setProperty( 'dtstart' ,   date("Y",strtotime($concert->getDateTime())),date("m",strtotime($concert->getDateTime())),date("d",strtotime($concert->getDateTime())),date("H",strtotime($concert->getDateTime())),date("i",strtotime($concert->getDateTime())),00);  // 24 dec 2006 19.30
            $e->setProperty( 'duration' ,   0, 0, 2 );                    // 3 hours
            $e->setProperty( 'description',strip_tags( $concert->getMember()->getName().' ('.ucfirst($concert->getMember()->getTyp()).') - '.$concert->getDescription()));    // describe the event
            $e->setProperty( "summary", strip_tags($concert->getMember()->getName()));
            $e->setProperty( 'location', strip_tags($concert->getCity()));                     // locate the event
            if($concert->getUpdatedAt())
                $e->setProperty( 'last-modified' , date("Y",strtotime($concert->getUpdatedAt())),date("m",strtotime($concert->getUpdatedAt())),date("d",strtotime($concert->getUpdatedAt())),date("H",strtotime($concert->getUpdatedAt())),date("i",strtotime($concert->getUpdatedAt())),00);
            else
                $e->setProperty( 'last-modified' , date("Y",strtotime($concert->getCreatedAt())),date("m",strtotime($concert->getCreatedAt())),date("d",strtotime($concert->getCreatedAt())),date("H",strtotime($concert->getCreatedAt())),date("i",strtotime($concert->getCreatedAt())),00);
            $e->setProperty( "contact", strip_tags($concert->getMember()->getKontakt()) );
            $e->setProperty( "url", $concert->getUrl());
            //$e->setProperty( "geo", 11.23456, -23.45678 );
            $v->addComponent( $e );                        // add component to calendar
        }

        /* alt. production */
        $v->returnCalendar();                       // generate and redirect output to user browser
        /* alt. dev. and test */
        $this->ical = $v->createCalendar();         // generate and get output in string, for testing?
        return sfView::NONE;
    }



#### Save the calendar

    // Save the calendar
    $Timelog->save('/path/to/Timelog/file.jpg', 'image/jpg');




#### Coming soon
The sfiCalCreatorPlugin you already offers a wonderful range of functions.
There follows a list of things on which you can still rejoice:

*   Improve the date setter. (Sept. 2010)
*   Make it easier to save the calendars.
*   Include a cron job plugin to renew the stored calendar regularly.