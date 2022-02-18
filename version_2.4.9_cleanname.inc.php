// about line 129 added this code:

// check if string contains a tvshow id by sgregori
preg_match('/[0-9][0-9][0-9][0-9][0-9][0-9]/', $title, $output);

if(strlen($output[0])==6){

        // DONT USE YEAR for search

} else {

        // original synology code:

        $count = preg_match_all($target_regex, $title, $matches, PREG_SET_ORDER);
        for (--$count; 0 <= $count; --$count) {
                $testYear = $matches[$count]['year'];
                if (1900 < $testYear && $testYear < ($nowYear + 1)) {
                        $year = $testYear;
                        $title = str_replace($matches[$count]['date'], ' ' . YEARBREAK . ' ', $title);
                        break;
                }
        }
                                                             
        // end of original synology code

}
