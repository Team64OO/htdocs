<?php
for ($i=0; $i < 8; $i++) { 
    if ($i % 2 == 0) {
        for ($ii=0; $ii < 3; $ii++) { 
            for ($iii=0; $iii < 8; $iii++) { 
                if ($iii % 2 == 0) {
                    for ($iiii=0; $iiii < 7; $iiii++) { 
                        print ("■");
                    }
                } else {
                    for ($iiii=0; $iiii < 7; $iiii++) { 
                        print ("\033[01;30m■\033[0m");
                    }
                }
            }
            print ("\n");
        }
    } else {
        for ($ii=0; $ii < 3; $ii++) { 
            for ($iii=0; $iii < 8; $iii++) { 
                if ($iii % 2 == 0) {
                    for ($iiii=0; $iiii < 7; $iiii++) { 
                        print ("\033[01;30m■\033[0m");
                    }
                } else {
                    for ($iiii=0; $iiii < 7; $iiii++) { 
                        print ("■");
                    }
                }
            }
            print ("\n");
        }
    }
}
?>