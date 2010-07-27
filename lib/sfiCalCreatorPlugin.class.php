<?php
require_once (dirname(__FILE__).'/lib/iCalcreator.class.php');


/**
 * Beschreibung von sfiCalCreatorPlugin (sfiCalCreatorPlugin.class)
 * @version     Expression version is undefined on line 13, column 19 in Templates/Scripting/PHPClass.
 * @since       Expression version is undefined on line 14, column 19 in Templates/Scripting/PHPClass.
 * @access      public
 * @copyright   NULLzuEINS - André Lademann <andre@nullzueins.com>,  20.07.2010, 20:56:40
 * @author      NULLzuEINS - André Lademann <andre@nullzueins.com>
 * Encoding     UTF-8
 */
class sfiCalCalendar extends vcalendar {
    function __construct() {
        parent::__construct();
    }
}
class sfiCalCalendarComponent extends calendarComponent {
    function __construct() {
        parent::__construct();
    }
}
class sfiCalEvent extends vevent {
    function __construct() {
        parent::__construct();
    }
}
class sfiCalFreeBusy extends vfreebusy {
    function __construct() {
        parent::__construct();
    }
}
class sfiCalTimezone extends vtimezone {
    function __construct() {
        parent::__construct();
    }
}
class sfiCalTodo extends vtodo {
    function __construct() {
        parent::__construct();
    }
}
class sfiCalJournal extends vjournal {
    function __construct() {
        parent::__construct();
    }
}
class sfiCalAlarm extends valarm {
    function __construct() {
        parent::__construct();
    }
}
?>