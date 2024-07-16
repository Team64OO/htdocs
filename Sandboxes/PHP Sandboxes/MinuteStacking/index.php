<?php
$timesMissed = 0;
$times = $timesMissed + 1;
$minutes = 0;
$seconds = 0;
for ($i = 1; $i < $times + 1; $i++) {
    $timeCalculator = $i - 5;
    if ($timeCalculator == -4) {
        $minutes += 3;
    } elseif ($timeCalculator == -3) {
        $minutes += 2;
    } elseif ($timeCalculator == -2) {
        $minutes += 1;
    } elseif ($timeCalculator == -1 || $timeCalculator == 0) {
        $seconds += 30;
    } else {
        $seconds += 10;
    }
    if ($seconds == 60) {
        $minutes++;
        $seconds = 0;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Weird Questions</title>
    <div id="minutes" style="display: none;">
        <?php
        echo htmlspecialchars($minutes);
        ?>
    </div>
    <div id="seconds" style="display: none;">
        <?php
        echo htmlspecialchars($seconds);
        ?>
    </div>
</head>

<body>
    <h1>The time stacking mechanic</h1>
    <?php
    echo "<h2>number of times missed: " . $times - 1 . "<br>
    total number of times: " . $times . "<br>
    minutes: " . $minutes . " seconds: " . $seconds . "</h2>";
    ?>
    <div class="everything">
        <div class="content">
            <div class="display" id="switch">
                <div id="mindisplay" class="tmindisplay"></div>
                <div class="colon">:</div>
                <div id="secdisplay" class="tmindisplay"></div>
                <div class="colon">:</div>
                <div id="milsecdisplay" class="tmindisplay">00</div>
            </div>
            <div class="buttons">
                <button id="fstart" onclick="fStart()" class="button">Start</button>
                <button id="fstop" onclick="fStop()" class="button">Stop</button>
                <button id="freset" onclick="fReset()" class="button">Reset</button>
            </div>
        </div>
    </div>
    <div class="flexCenter">
        <h2>On Hold</h2>
        <audio id="waitMusic">
            <source src="waitMusic.mp3" type="audio/mpeg">
        </audio>
        <div class="audio">
        <button onclick="playAudio()" type="button" id="startAudio">Put on hold</button>
        <button onclick="pauseAudio()" type="button" id="pauseAudio">Pause Music</button>
        </div>
    </div>
    <script>
        let milsec = 0;
        let secdiv = document.getElementById("seconds");
        let mindiv = document.getElementById("minutes");
        let sec = secdiv.textContent;
        let min = mindiv.textContent;
        let milsecInterval;
        let isIntervalInProgress = false;

        let x = document.getElementById("waitMusic");
        x.loop = true;

        function playAudio() {
            if (x.paused) {
                x.play();
                document.getElementById("startAudio").innerHTML = "Reset Music"
            } else {
                x.currentTime = 0;
            }
        }
        
        function pauseAudio() {
            if (!x.paused) {
                x.pause();
                document.getElementById("startAudio").innerHTML = "Resume Music"
            }
        }

        function fStart() {
            if (!isIntervalInProgress) {
                isIntervalInProgress = true;
                milsecInterval = setTimeout(timer, 10);
            }
        }

        function timer() {
            milsecInterval = setTimeout(timer, 10);
            if (sec == 59) {
                if (checkLowerThanTen(min)) {
                    document.getElementById("mindisplay").innerHTML = "0" + min;
                } else {
                    document.getElementById("mindisplay").innerHTML = min;
                }
            }
            if (sec <= 0) {
                sec = 60;
                min--;
            }
            if (checkLowerThanTen(milsec)) {
                document.getElementById("milsecdisplay").innerHTML = "0" + milsec;
            } else {
                document.getElementById("milsecdisplay").innerHTML = milsec;
            }
            milsec = milsec - 1;
            if (milsec > 0) {
                if (checkLowerThanTen(milsec)) {
                    document.getElementById("milsecdisplay").innerHTML = "0" + milsec;
                } else {
                    document.getElementById("milsecdisplay").innerHTML = milsec;
                }
            } else {
                document.getElementById("milsecdisplay").innerHTML = "00";
            }
            if (milsec <= 0) {
                milsec = 99;
                sec--;
                if (sec > 0) {
                    if (checkLowerThanTen(sec)) {
                        document.getElementById("secdisplay").innerHTML = "0" + sec;
                    } else {
                        document.getElementById("secdisplay").innerHTML = sec;
                    }
                } else {
                    document.getElementById("secdisplay").innerHTML = "00";
                }
            }
        }

        function fStop() {
            clearInterval(milsecInterval);
            isIntervalInProgress = false;
        }

        function fReset() {
            milsec = 0;
            sec = secdiv.textContent;
            min = mindiv.textContent;
            clearInterval(milsecInterval);
            document.getElementById("milsecdisplay").innerHTML = "00";
            document.getElementById("secdisplay").innerHTML = secdiv.textContent;
            if (checkLowerThanTen(min)) {
                document.getElementById("mindisplay").innerHTML = /*"0"*/ +min;
            } else {
                document.getElementById("mindisplay").innerHTML = mindiv.textContent;
            }
            isIntervalInProgress = false;
        }

        function checkLowerThanTen(time) {
            if (time < 10) {
                return true;
            } else {
                return false;
            }
        }

        document.getElementById("secdisplay").innerHTML = secdiv.textContent;
        if (checkLowerThanTen(min)) {
            document.getElementById("mindisplay").innerHTML = /*"0"*/ +min;
        } else {
            document.getElementById("mindisplay").innerHTML = mindiv.textContent;
        }
    </script>
</body>

</html>


<!-- 
---the rules---
1. you start with 3:00 minutes (unless I feel generous and give extra time)
2. when your time is up I will no longer answer any more questions 
   (I will finish the last one before the stopwatch runs out of time)
3. each time you stack time you will get less time than the first 
   time and eventually only get 10 seconds extra per missed day
4. I can say no to any weird or obscure questions so please just
   ask normal questions (if that is even possible)
5. I can put questions on hold if I feel like it
-->