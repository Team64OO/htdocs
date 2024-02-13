<?php
function TijdNaarTekstForm($tijd){
    $uren = $tijd["uren"];
    $minuten = $tijd["minuten"];
    ?>
    <h3>Voer een tijd in:</h3>
    <form method="POST">
        <input type="number" name="uren" value="<?php print $tijd["uren"]; ?>">
        :   
        <input type="number" name="minuten" value="<?php print $tijd["minuten"]; ?>"><br><br>
        <input type="submit" value="Tijd naar tekst!">
    </form>
    <form method="POST">
        <input type="hidden" name="reset" value="0">
        <button>Reset tijd</button>
    </form>
    <?php
}