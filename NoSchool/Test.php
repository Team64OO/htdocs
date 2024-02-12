<!DOCTYPE html>
<html>
<style>
    <?php
    include 'Background.css';
    ?>

    #button {
    background-color: aqua;
    border: none;
    cursor: grab;

        position: absolute;
        top: var(--top); left: var(--left);
        display: block;

        height: <?php 
        
        if ($_GET["diff"] === "easy") {
            echo("75px");
        } else if ($_GET["diff"] === "medium") {
            echo("50px");
        } else {
            echo("25px");
        }
        
        ?>; aspect-ratio: 1;
    }

    h1 {
    color: coral;
    }

    * {
        cursor: crosshair;
    }

    body {height: 100vh;}
</style>
<body>
<form action="Test.php" method="GET">
<label for="buttonrand" onclick="random()"><h1>Randomator</h1><br></label>
<label for="button"><h1>Find The Button</h1><br></label>
<button type="button" id="button" onclick="alert('Button :D'); random()"></button>
</form>
</body>


<script>
    function random() {
        let top = Math.round(Math.random() * 80) + 10;
        let left = Math.round(Math.random() * 80) + 10;

        // document.querySelector("button#button").style.left = left + "%";
        // document.querySelector("button#button").style.top = top + "%";

        document.querySelector("button#button").style = `--top: ${top}%; --left: ${left}%;`;
    }
    random();
</script>