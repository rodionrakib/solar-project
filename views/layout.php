<!DOCTYPE html>
<html>
<head>
	<title>Solar Project</title>
	 <link rel="stylesheet" href="css/app.css">
</head>

<body > 
<header>
    <div class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="">
                    Symfony Demo
                </a>

                <button type="button" class="navbar-toggle"
                        data-toggle="collapse"
                        data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                
            </div>
        </div>
    </div>
</header>

<div class="container body-container">
    
        <div class="row">
            <div id="main" class="col-sm-9">
                <?php include "{$path}"; ?>
            </div>

            <div id="sidebar" class="col-sm-3">
               
                    <div class="section about">
                        <div class="well well-lg">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                    </div>
            </div>
        </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div id="footer-copyright" class="col-md-6">
                <p> - The Solar  Project</p>
               
            </div>
            <div id="footer-resources" class="col-md-6">
                <p>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-rss"></i></a>
                </p>
            </div>
        </div>
    </div>
</footer>


</body>
<script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>
<script src="js/app.js"></script>
<script src="js/locationpicker.jquery.js"></script>
<script>
$(document).ready(function() {
    hljs.initHighlightingOnLoad();
    $('#us3').locationpicker({
    location: {latitude: 46.15242437752303, longitude: 2.7470703125},   
    radius: 300,
    inputBinding: {
        latitudeInput: $('#us2-lat'),
        longitudeInput: $('#us2-lon'),
        radiusInput: $('#us2-radius'),
        locationNameInput: $('#us2-address')
    }
    });
});
</script>
</body>
</html>