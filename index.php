
<!DOCTYPE html>
<html>
<head>
  	<title>Plagiarism System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Font Awesome -->
	<link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
	<!-- MDB -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet" />
	<!-- MDB -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../include/css/style.css">
</head>
  
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

fileToUpload {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.container {
  padding: 16px;
}
body {font-family: Arial, Helvetica, sans-serif;}
            .navbar {
            width: 100%;
            background-color: #555;
            overflow: auto;
            }
    
            .navbar a {
            float: left;
            padding: 12px;
            color: white;
            text-decoration: none;
            font-size: 17px;
            }

            .navbar a:hover {
            background-color: darksalmon;
            }

            .active {
            background-color: #04AA6D;
            }

            /* @media screen and (max-width: 500px) {
            .navbar a {
                float: none;
                display: block;
            }
            } */

            ul{
                list-style-type: none;
                margin: 0px;
                padding: 0px;
                overflow: hidden;
                background-color: black;
            }

            li{
                float: left;
            }
            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                }

                /* Change the link color to #111 (black) on hover */
            li a:hover {
                background-color: grey;
            }
            .active{
                background-color: darksalmon;
            }

            body{
                background-image: url(plagiarism.jpg);
            }
            
            html {
            height: 100%;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            }

            * {
            box-sizing: border-box;
            }

            .bg-image {
            /* The image used */
            background-image: url("C:\xampp\htdocs\plagiarism\plagiarism.jpg");
            
            /* Add the blur effect */
            filter: blur(40px);
            -webkit-filter: blur(8px);
            
            /* Full height */
            height: 100%; 
            
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            }

            /* Position text in the middle of the page/image */
            .bg-text {
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
            color: white;
            font-weight: bold;
            border: 3px solid #f1f1f1;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            width: 80%;
            padding: 20px;
            text-align: center;
            }

            {box-sizing: border-box}
            body {font-family: Verdana, sans-serif; margin:0}
            .mySlides {display: none}
            img {vertical-align: middle;}

            /* Slideshow container */
            .slideshow-container {
            background-color: #555;
            max-width: 500px;
            position: relative;
            margin: auto;
            
            
            /* Full height */
            height: 100%; 
            
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            }

            
            /* On hover, add a black background color with a little bit see-through */
            .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
            }

            /* Caption text */
            .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
            }

            /* Number text (1/3 etc) */
            .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
            }

            /* The dots/bullets/indicators */
            .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
            }

            .active, .dot:hover {
            background-color: #717171;
            }

            /* Fading animation */
            .fade {
            animation-name: fade;
            animation-duration: 1.5s;
            }

            @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
            }

            /* On smaller screens, decrease text size */
            @media only screen and (max-width: 300px) {
            .prev, .next,.text {font-size: 11px}
            }
            
</style>

<body style="background-image: url('plagiarism.jpg');">

<div class="rightli">
            <ul class="horizontal">
                <li><a class="active" href="#"><i class="fa fa-fw fa-home"></i>Home</a></li>
                
                <li><a href="#"><i class="fa fa-fw fa-bookmark-o"></i> About Us</a></li>
                <li><a href="#"><i class="fa fa-fw fa-send-o"></i> Contact us</a></li>
                   
            </ul>
        </div>

        <marquee><p> <font color = "white"> Plagiarism Checker Software by George O. Daniel... </font> </p></marquee>

        <div class="bg-text">
            
            <h1 style="font-size:50px">Plagiarism and similarity Checker</h1>
            <p>Presenting work or ideas from another source as your own, with or without consent of the original author, by incorporating it into your work without full acknowledgement is a crime</p>
        </div>


        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


        <div class="container col-md-4 p-6">
          <form action="upload.php" method="post" enctype="multipart/form-data">
              <label for="uname"><font color = "white"><b>Select your project:</Font></b></label><br>
              <input type="file" name="fileToUpload" id="fileToUpload" accept=" .txt, .pdf" required>
              <button type="submit" name="submit" value="Upload File">Upload</button>
        </div>
     
</form>
</div>
</body>
</html>

