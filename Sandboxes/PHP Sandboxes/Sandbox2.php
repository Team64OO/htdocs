<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            background: yellow;
        }

        body {
            overflow: hidden;
        }

        div {
            animation: spin 700ms linear infinite , span 1000ms infinite;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 50%;
            border: 1000px solid #000;
            border-top: 1000px solid transparent;
            border-bottom: 1000px solid transparent;
        }

        @keyframes spin {
            from {
                transform: translate(-50%, -50%) rotate(0deg);
            }
            to {
                transform: translate(-50%, -50%) rotate(360deg);
            }
        }

        @keyframes span {
            0% {
                border-radius: 50%;
                border: 1000px solid #000;
                border-top: 1000px solid transparent;
                border-bottom: 1000px solid transparent;
            }
            50% {
                border-radius: 50%;
                border: 500px solid #000;
                border-top: 500px solid transparent;
                border-bottom: 500px solid transparent;
            }
        }
    </style>
</head>
<body>
        <div></div>
</body>
</html>