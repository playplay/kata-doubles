<?php

namespace AKEI {

    function sleep($duration)
    {
        TimeLogger::setExecutionTime($duration);

        if($duration > 5 * 60) {
            \sleep(intdiv($duration,300));
        }
        else {
            \sleep(intdiv($duration, 60));
        }
    }

}