<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>MFSDSAI</title>
</head>

<body>
    <!-- Header -->
    <div id="header_loc">
    </div>
    <!-- Navbar -->
    <div id="nav_loc" class="">
    </div>
    
    <div class="bg-secondary">
        <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/admin.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img/ccc.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img/iitg_lake_0.jpg" class="d-block w-100" width="200" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="intro bg-secondary text-light py-4">
        <div class="container bg-dark rounded py-2">
            <h5>Data science is an emerging inter-disciplinary field that uses scientific methods, processes, algorithms
                and systems to extract knowledge and insights from both structured and unstructured data. The discipline
                of artificial intelligence involves in integrating knowledge into programs that can handle data and
                solve complex problems in the way human being thinks and approaches the problem. In today's context, the
                expertise in the domains of data science and artificial intelligence is in great demand. Lot of
                opportunities exists in these emerging domains. Keeping in view these latest trends, IIT Guwahati has
                taken active steps to start Mehta Family School of Data Science and Artificial Intelligence at IIT
                Guwahati so that the same can become a vibrant centre of activities in these domains, and through its
                undergraduate and post graduate programs, contribute in shaping a pool of highly qualified professionals
                in this emerging field by aligning its activities in the direction of national level initiatives.</h5>
        </div>
    </div>

    <!-- Footer -->
    <div id="foot_loc">
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
    <script>$("#header_loc").load("header.html");</script>
    <script>$("#nav_loc").load("navbar.html");</script>
    <script>$("#foot_loc").load("footer.html");</script>
    <script>
        window.onload = function () {
            document.getElementById('nav_home').classList.add('active');
        }
    </script>
</body>

</html>