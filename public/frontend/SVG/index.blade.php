<html>

<head>

    <!-- You can load the jQuery library from the Google Content Network.
Probably better than from your own server. -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

    <!-- Load the CloudCarousel JavaScript file -->
    <script type="text/JavaScript" src="./cloud-carousel.1.0.5.js"></script>

</head>

<body>
    <style>
        .cloudcarousel {
            width: 200px !important;
            height: 200px !important;
        }

        .carosuelClass {
            position: absolute;
            width: 100%;
            height: 100%;
            display: block;
            left: 50%;
        }
    </style>
    <!-- This is the container for the carousel. -->
    <div id="carousel1" style="width:100vw; min-height:450px;background:rgba(0, 0, 0, 0);overflow:scroll;">
        <!-- All images with class of "cloudcarousel" will be turned into carousel items -->
        <!-- You can place links around these images -->
        <img class="cloudcarousel" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg"
            alt="Flag 1 Description" title="Flag 1 Title" />
        <img class="cloudcarousel" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg"
            alt="Flag 2 Description" title="Flag 2 Title" />
        <img class="cloudcarousel" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg"
            alt="Flag 3 Description" title="Flag 3 Title" />
        <img class="cloudcarousel" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg"
            alt="Flag 4 Description" title="Flag 4 Title" />
        <img class="cloudcarousel" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg"
            alt="Flag 4 Description" title="Flag 4 Title" />
        <img class="cloudcarousel" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg"
            alt="Flag 4 Description" title="Flag 4 Title" />
        <img class="cloudcarousel" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg"
            alt="Flag 4 Description" title="Flag 4 Title" />
        <img class="cloudcarousel" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg"
            alt="Flag 4 Description" title="Flag 4 Title" />
        <img class="cloudcarousel" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg"
            alt="Flag 4 Description" title="Flag 4 Title" />
        <img class="cloudcarousel" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg"
            alt="Flag 4 Description" title="Flag 4 Title" />
        <img class="cloudcarousel" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg"
            alt="Flag 4 Description" title="Flag 4 Title" />
        <img class="cloudcarousel" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg"
            alt="Flag 4 Description" title="Flag 4 Title" />
        <img class="cloudcarousel" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg"
            alt="Flag 4 Description" title="Flag 4 Title" />
        <img class="cloudcarousel" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg"
            alt="Flag 4 Description" title="Flag 4 Title" />
    </div>

    <!-- Define left and right buttons. -->
    <input id="left-but" type="button" value="Left" />
    <input id="right-but" type="button" value="Right" />

    <!-- Define elements to accept the alt and title text from the images. -->
    <p id="title-text"></p>
    <p id="alt-text"></p>
    <script>
        $(document).ready(function () {
            setTimeout(() => {
                $("#carousel1 div").addClass("carosuelClass")
            });
            // This initialises carousels on the container elements specified, in this case, carousel1.
            $("#carousel1").CloudCarousel(
                {
                    xPos: 0,
                    yPos:50,
                    buttonLeft: $("#left-but"),
                    buttonRight: $("#right-but"),
                    altBox: $("#alt-text"),
                    titleBox: $("#title-text")
                }
            );
        });

    </script>
</body>

</html>