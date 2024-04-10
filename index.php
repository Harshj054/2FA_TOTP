<?php
    require 'admin/config.php';
?>
<!DOCTYPE html>
<html>

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <title>The Online News Portal</title>



    <!--icons-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">



    <style>
        menu {
            position: relative;
            margin: auto;
            width: auto;
            height: 50px;
            background: #000;
            border-radius: 0px;
            font-size: 0;
            box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 1);
        }

        .btn {
            background: #000000;
            border: none;
            color: white;
            padding-top: 1px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 50%;
        }

        .btn:hover {
            color: #0051ff;
        }

        menu a {
            font-size: 15px;
            text-transform: uppercase;
            color: #ffffff;
            text-decoration: none;
            line-height: 50px;
            position: relative;
            z-index: 1;
            display: inline-block;
            text-align: center;
        }

        nav .animation {
            position: absolute;
            height: 100px;
            top: 0;
            z-index: 0;
            background: #00FFFF;
            width: auto;
            border-radius: 8px;
        }

        a:nth-child(1) {
            width: 200px;
        }

        a:nth-child(2) {
            width: 125px;
        }

        a:nth-child(3) {
            width: 225px;
        }

        a:nth-child(4) {
            width: 125px;
        }

        a:nth-child(5) {
            width: 225px;
        }

        a:nth-child(6) {
            width: 125px;
        }

        a:nth-child(7) {
            width: 225px;
        }

        a:nth-child(8) {
            width: 225px;
        }
    
        /* Style the dialog background */
        .dialog-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
            justify-content: center;
            align-items: center;
            z-index: 9999;
            /* Set a high z-index value */
        }

        .carousel {
            /* Adjust the z-index value of the carousel/slider if needed */
            z-index: 1;
        }

        /* Style the dialog box */
        .dialog-box {
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            width: 400px;
            /* Adjust dialog width */
            height: 200px;
            /* Adjust dialog height */
        }
    </style>

</head>


<body>

    <div class="dialog-overlay" id="overlay">
        <div class="dialog-box">
            <center>
                <label for="searchInput">Enter your search term:</label><br>
                <input type="text" id="searchInput"><br><br><br>
                <button onclick="submitSearch()">Submit</button>
                <button onclick="closeDialog()">Cancel</button>
            </center>
        </div>
    </div>

    <center>
        <img style="height: 187px ; filter:drop-shadow(20px 20px 10px grey);" src="My-news-feed.png">
    </center>
    <br>



  
    <script>
        function openDialog() {
            document.getElementById('overlay').style.display = 'flex';
        }
        function closeDialog() {
            document.getElementById('overlay').style.display = 'none';
        }
        function submitSearch() {
            var userInput = document.getElementById('searchInput').value;
            if (userInput.trim() !== '') {
                window.location.href = 'category/Search-result.php?searchValue=' + userInput;
            }
        }
    </script>
    <menu>
        <center>
            <a href="index.php">Home</a>
            <a href="category/sports.php">Sports</a>
            <a href="category/entertainment.php">Entertainment</a>
            <a href="category/job.php">Jobs</a>
            <a href="category/finance.php">finance</a>
            <a href="category/crime.php">Crime</a>
            <a href="category/international.php">International</a>
            <button onclick="openDialog()" type="submit" name="search" class="btn"><svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="30" fill="currentColor" class="bi bi-search"
                    viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                </svg></button>
        </center>
    </menu>





    <div style="background-color: rgb(212, 210, 210)">

        <!--card-->
        <div class="" style="filter:drop-shadow(20px 20px 10px grey);">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img3.png" class="d-block w-100" alt="...">
                        
                    </div>
                    <div class="carousel-item">
                        <img src="img2.png" class="d-block w-100" alt="...">
                        
                    </div>
                    <div class="carousel-item">
                        <img src="img1.png" class="d-block w-100" alt="...">

                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <br>
        <!-- New card -->
        <?php
    $i=0;
    $reqs=mysqli_query($con,"SELECT * FROM news ORDER BY id DESC");
    ?>
        <?php foreach($reqs as $req): ?>
        <?php if ($i%2==0):  ?>
        <div class="" style="padding: 20px;">
            <div class=""
                style="border-radius: 12px; width: auto; height: max-content; box-shadow: 2px 4px 4px rgba(0, 0, 0, 0.25); background-color: white;">
                <div class="row g-0">
                    <?php $i++; ?>
                    <div class="col-sm-6 col-md-8" style="padding-right: 0;">
                       
                        <center>
                            <h4>
                                <b>
                                    <?php echo $req["title"]; ?>
                                </b>
                            </h4>
                        </center>
                        <br>
                        <p style="padding-left: 10px;font-size: 18px;" ALIGN=LEFT>
                            <?php echo $req["data"]; ?>
                        </p>
                    </div>
                    <div class="col-6 col-md-4" style="padding-left: 0;">
                        <img src="admin/uploads/<?php echo $req["img"]; ?>" style="width: 100%; height: 390px; padding:
                        10px; border-radius: 20px;">
                    </div>
                </div>
            </div>
        </div>
        <?php else: ?>
        <div class="" style="padding: 20px">

            <div class=""
                style="border-radius: 12px; width: auto; height: max-content; box-shadow: 2px 4px 4px rgba(0, 0, 0, 0.25);background-color: white ;">
                <div class="row g-0">
                    <?php  $i++; ?>
                    <div class="col-6 col-md-4">
                        <img src="admin/uploads/<?php echo $req["img"]; ?>" style="width:440px; height: 390px; padding:
                        10px; border-radius: 20px; ">
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <center>
                            <h4>
                                <b>
                                    <?php echo $req["title"]; ?>
                                </b>
                            </h4>
                        </center>
                        <br>
                        <p style="padding-left: 10px;font-size: 18px;" ALIGN=LEFT>
                            <?php echo $req["data"]; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php 
           if ($i == 10)
           {
                break;
           }
        
        ?>
        <?php endforeach; ?>
    </div>





    <footer id="footer" class="bg-light">
        <div class="footer-top pt-100 pb-70">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <div class="row">
                                <div class="col-sm-12  mt-4">
                                    <img src="My-news-feed.png" height="140px" width="400px"
                                        class="d-inline-block align-text-top">
                                </div>
                                <section id="clients" class="wow fadeInUp">
                                    <div class="container">
                                        <div class="section-header">
                                            <h2><span class="sky"></span></h2>

                                        </div>
                                    </div>
                                </section><!-- #clients -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 offset-1 ">
                        <div class="footer-widget mt-4 section-header">
                            <h4 style="margin-left:10px ; " class="footer-widget-title ml-4 blue">Features</h4>
                            <h2><span class="sky"></span></h2>
                            <ul>
                                <li>Social Media Integration</li><br>
                                <li>Fast and easily accessible</li><br>
                                <li>Pictures of a special news event</li><br>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 offset-1">
                        <div class="footer-widget mt-4 section-header">
                            <h4 class="footer-widget-title blue">Get in Touch</h4>
                            <h2><span class="sky"></span></h2>
                            <a href="tel:+91 8421949251" class="text-dark"> <i class="fa fa-phone">&nbsp;&nbsp;</i>+91
                                7218083662</a>
                            <br>
                            <a href="mailto:harshj054@gamil.com" class="text-dark"><i
                                    class="fa fa-envelope-o">&nbsp;&nbsp;</i>Mynewsfeeed.com</a><br>
                            <a href="B:\codes\.vscode\project\front.html" class="text-dark"><i
                                    class="fa fa-globe">&nbsp;&nbsp;</i> news in short</a>

                            <div class="share-on section-header">
                                <h4 class="footer-widget-title  mt-5">Follow Us</h4>
                                <h2><span class="sky"></span></h2>

                                <h5>
                                    <i style="color: rgb(0, 0, 0); font-size: xx-large;"
                                        class="fa fa-instagram"></i>&nbsp;
                                    <i style="color: rgb(0, 0, 0); font-size: xx-large;"
                                        class="fa fa-facebook"></i>&nbsp;
                                    <i style="color: rgb(0, 0, 0);font-size: xx-large;"
                                        class="material-icons"></i><br>&nbsp;

                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container ">
            <div class="copyright ">
                &copy; Copyright <strong>project </strong>. All Rights Reserved
            </div>

        </div>
    </footer>
    </div>

</body>

</html>