<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>SVG Gradient Star</title>

        <style>
            #svgelem{
                position: relative;
                left: 50%;
                -webkit-transform: translateX(-40%);
                -ms-transform: translateX(-40%);
                transform: translateX(-40%);

            }

        </style>
    
    </head>
    <body>
        
        <h2 align="center">HTML5 SVG Gradient Star</h2>

        <svg id="svgelem" height="200" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <radialGradient id="gradient" cx="50%" cy="50%" r="50%" fx="50%" fy="50%">
                    <stop offset="0%" style="stop-color:rgb(200,200,200); stop-opacity:0"/>
                    <stop offset="100%" style="stop-color:rgb(10,10,240); stop-opacity:1"/>

                </radialGradient>

            </defs>

            <polygon points="100,10 40,180 190,60 10,60 160,180" style="fill:url(#gradient)"/>
            <!-- <ellipse cx="100" cy="50" rx="100" ry="50" style="fill:url(#gradient)" /> -->
        
        </svg>

    </body>

</html>