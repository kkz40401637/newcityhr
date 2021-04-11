<?php


    //  These function convert utc time to smt local ( yellhtut custom command )

    function ChangeUTCtoSMT($Date,$Country)
    {

        $myDateTime = new DateTime($Date, new DateTimeZone('GMT'));
        $myDateTime->setTimezone(new DateTimeZone($Country));
        return $myDateTime->format('Y-m-d h:i:s');

    }


    function SmtTime($Country)
    {

        $date = new DateTime();
        $date->setTimezone(new DateTimeZone('UTC'));
        // $date->setTimestamp(1297869844);
        $date->setTimezone(new DateTimeZone($Country));
//        echo $date->format('Y-m-d H:i:s');
        $FullDate = $date->format('H:i:s Y-m-d ');
        echo date('h:i:s A   m/d/Y', strtotime($FullDate));

    }



