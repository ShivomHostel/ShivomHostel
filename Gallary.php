<html>
<head>  
    <link rel="shortcut icon" href="childs_image/shivom_logo_7V8_1.ico" />
        <title>S-trax One Step Towards Securing Generation</title>
    <link rel="stylesheet" href="myweb.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
         body {
            overflow-x: hidden;
            }
    </style>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="jquery.cycle.all.js" type="text/javascript"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
       
    <!-- Bootstrap CSS V4.5-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="d-flex flex-row justify-content-end pt-3 pb-2" >
        <img src="childs_image\shree-logo.webp" alt="shree-logo" width="32px" height="30px"/>
        <h1 class="shree-logo"><span class="shivom">SHIVOM</span>  GROUP</h1>
    </div>
    <div class="header" id="myHeader">
        <?php include('navbar.php'); ?>
    </div>

    <!-- Photo Grid -->
    <div>
        <div class="row col-12">
            <div class="col-12 col-md-3 col-lg-3 col-sm-6">
                <a href="childs_image/gallery10.jpg" class="thumbnail">
                    <img src="childs_image/gallery10.jpg" class="img-fluid" alt="Gallery Image 1">
                </a>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-6">
                <a href="childs_image/gallery2.jpg" class="thumbnail">
                    <img src="childs_image/gallery2.jpg" class="img-fluid" alt="Gallery Image 2">
                </a>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-6">
                <a href="childs_image/gallery3.jpg" class="thumbnail">
                    <img src="childs_image/gallery3.jpg" class="img-fluid" alt="Gallery Image 3">
                </a>
            </div> 
            <div class="col-12 col-md-3 col-lg-3 col-sm-6">
                <a href="childs_image/gallery4.jpg" class="thumbnail">
                    <img src="childs_image/gallery4.jpg" class="img-fluid" alt="Gallery Image 4">
                </a>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-6">
                <a href="childs_image/gallery5.jpg" class="thumbnail">
                    <img src="childs_image/gallery5.jpg" class="img-fluid" alt="Gallery Image 5">
                </a>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-6">
                <a href="childs_image/gallery6.jpg" class="thumbnail">
                    <img src="childs_image/gallery6.jpg" class="img-fluid" alt="Gallery Image 6">
                </a>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-6">
                <a href="childs_image/gallery7.jpg" class="thumbnail">
                    <img src="childs_image/gallery7.jpg" class="img-fluid" alt="Gallery Image 7">
                </a>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-6">
                <a href="childs_image/gallery8.jpg" class="thumbnail">
                    <img src="childs_image/gallery8.jpg" class="img-fluid" alt="Gallery Image 8">
                </a>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-6">
                <a href="childs_image/gallery9.jpg" class="thumbnail">
                    <img src="childs_image/gallery9.jpg" class="img-fluid" alt="Gallery Image 9">
                </a>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-6">
                <a href="childs_image/gallery1.jpg" class="thumbnail">
                    <img src="childs_image/gallery1.jpg" class="img-fluid" alt="Gallery Image 10">
                </a>
            </div> 
            <div class="col-12 col-md-3 col-lg-3 col-sm-6">
                <a href="childs_image/gallery11.jpg" class="thumbnail">
                    <img src="childs_image/gallery11.jpg" class="img-fluid" alt="Gallery Image 11">
                </a>
            </div>
            <div class="col-12 col-md-3 col-lg-3 col-sm-6">
                <a href="childs_image/gallery12.jpg" class="thumbnail">
                    <img src="childs_image/gallery12.jpg" class="img-fluid" alt="Gallery Image 12">
                </a>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>
    <script>
        window.onscroll = function () { myFunction() };

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

    
</html>
