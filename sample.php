<!DOCTYPE html>
<!-- saved from url=(0115)file:///Volumes/Transcend/Tresors/Teaching/Course/CSI-2520-WebDesign/01-Lectures/01-Lecture-HTML/03-SampleHTML.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Lighthouse Island Bistro</title>
    

    <style>
        body {
            font-family: Verdana, Arial, sans-serif;
            background-color: #00005D;
        }

        #wrapper {
            width: 80%;
            min-width: 600px;
            margin-left: auto;
            margin-right: auto;
            background-color: #b3c7e6;
        }

        #leftcolumn {
            width: 150px;
            float: left;
        }

        #rightcolumn {
            margin-left: 155px;
            background-color: white;
        }



        header {
            height: 130px;
            background-image: url(http://www.secs.oakland.edu/~singh/CSI2520/Image/lighthouselogo.jpg); 
                background-repeat: no-repeat;
            background-color: #869dc7;
            padding: 10px 10px 10px 155px;
        }

        h2 {
            color: #869dc7;
            font-family: arial, sans-serif;
        }

        .content {

            padding: 20px 20px 0 20px;
        }

        #floatright {
            float: right;
        }

        div>nav>a {
            color: green;
            font-weight: bold;
        }

        footer {
            text-align: center;
            font-size: 70%;
            padding-bottom: 20px;
            clear: right;
        }

        #leftcolumn nav a {
            display: list-item;
            list-style-position: inside;
            padding-left: 10px;
            /*display: block;*/

        }

    </style>
</head>

<body>
    <div id="wrapper">
        <header>
            <h1>Lighthouse Island Bistro</h1>
        </header>
        <div id="leftcolumn">
            <nav>
                <a href="#">Home</a>
                <a href="#">Menu</a>
                <a href="#">Directions</a>
                <a href="#">Contact</a>
            </nav>
        </div>

        <div id="rightcolumn">
            <div class="content">
                <img src="http://www.secs.oakland.edu/~singh/CSI2520/Image/lighthouseisland.jpg" width="250" height="355" id="floatright" alt="Lighthouse Island">
                <h2>Locally Roasted Free-Trade Coffee</h2>
                <p>Indulge in the aroma of freshly ground roast coffee. Specialty drinks are available hot or cold.</p>
                <h2>Specialty Pastries</h2>
                <p>Enjoy a selection of our fresh-baked, organic pastries, including fresh-fruit muffins, scones, croissants, and cinammon rolls.</p>
                <h2>Lunchtime is Anytime</h2>
                <p>Savor delicious wraps and sandwiches on hearty, whole-grain breads with locally-grown salad, fruit, and vegetables. </p>
                <h2>Panoramic View</h2>
                <p>Take in some scenery! The top of our lighthouse offers a panoramic view of the countryside. Challenge your friends to climb our 100-stair tower.</p>
            </div>
            <footer>Copyright © 2018
	     <hr>
		<?php
		
		echo "<i>You accessed this site at " . date("M-d-Y, H:i:s") . "</i><br>";
		?>
            </footer>
        </div>

    </div>



</body></html>
