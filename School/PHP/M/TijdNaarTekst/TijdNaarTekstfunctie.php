<?php
//TijdNaarTekst
function tijdNaarTekst(array $tijd) {
    $uren = $tijd["uren"];
    $minuten = $tijd["minuten"];
    $tijden = array(
        "twaalf",
        "een",
        "twee",
        "drie",
        "vier",
        "vijf",
        "zes",
        "zeven",
        "acht",
        "negen",
        "tien",
        "elf",
        "twaalf",
        "dertien",
        "veertien",
    );
    if ($uren > 23 || $uren < 0 || $minuten > 59 || $minuten < 0) {
        $output = ("<h2>Het is over!</h2>");
    } else {
        if ($minuten <= 14 && $minuten >= 1) {
            if ($uren > 12) {
                $uren = $uren - 12;
            }
            $output = ("<h2>Het is $tijden[$minuten] over $tijden[$uren]</h2>");
        } elseif ($minuten == 15) {
            if ($uren > 12) {
                $uren = $uren - 12;
            }
            $output = ("<h2>Het is kwart over $tijden[$uren]</h2>");
        } elseif ($minuten <= 29 && $minuten >= 16) {
            $revTijden = array_reverse($tijden);
            $minuten = $minuten - 16;
            $uren = $uren + 1;
            if ($uren > 12) {
                $uren = $uren - 12;
            }
            $output = ("<h2>Het is $revTijden[$minuten] voor half $tijden[$uren]</h2>");
        } elseif ($minuten == 30) {
            $uren = $uren + 1;
            if ($uren > 12) {
                $uren = $uren - 12;
            }
            $output = ("<h2>Het is half $tijden[$uren]</h2>");
        } elseif ($minuten <= 44 & $minuten >= 31) {
            $minuten = $minuten - 30;
            $uren = $uren + 1;
            if ($uren > 12) {
                $uren = $uren - 12;
            }
            $output = ("<h2>Het is $tijden[$minuten] over half $tijden[$uren]</h2>");
        } elseif ($minuten == 45) {
            $uren = $uren + 1;
            if ($uren > 12) {
                $uren = $uren - 12;
            }
            $output = ("<h2>Het is kwart voor $tijden[$uren]</h2>");
        } elseif ($minuten <= 59 && $minuten >= 46) {
            $revTijden = array_reverse($tijden);
            $minuten = $minuten - 46;
            $uren = $uren + 1;
            if ($uren > 12) {
                $uren = $uren - 12;
            }
            $output = ("<h2>Het is $revTijden[$minuten] voor $tijden[$uren]</h2>");
        } elseif ($minuten == 0) {
            if ($uren > 12) {
                $uren = $uren - 12;
            }
            $output = ("<h2>Het is $tijden[$uren] uur");
        }
    }
    return $output;
}


?>