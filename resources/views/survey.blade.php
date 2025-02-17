<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/survey.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">IMM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="welcome">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">My Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Status</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">My Company</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="banner">
    Survey
</div>
<div class="container mt-4">
    <div class="row text-center">
        <div class="col-md-4">
            <div class="stats-box">
                <h4>Survey Send</h4>
                <p class="number">0</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stats-box">
                <h4>Response Received</h4>
                <p class="number text-success">0</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stats-box">
                <h4>Response Pending</h4>
                <p class="number text-warning">0</p>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card stats-card">
                <div class="card-header stats-header d-flex justify-content-between">
                    <div>Average Time<br><span class="stats-value">0%</span></div>
                    <div>Completion Rate<br><span class="stats-value">0%</span></div>
                    <div><span class="completion-circle">0%</span></div>
                </div>
                <div class="card-body text-center">
                    <div class="total-responses">0%</div>
                    <div class="responses-text">Total Responses</div>
                    <div class="responses-line"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card performance-card">
                <div class="card-header performance-header">
                    Vertical Performance
                </div>
                <div class="card-body">
                    <!-- Placeholder for the chart -->
                    <canvas id="performance-chart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-12">
            <a href="your-survey-link.html" class="btn btn-primary start-survey-btn">Start Your Survey</a>
        </div>
    </div>
</div>

<div class="container mt-5">
        <h1 class="survey-title">Survey Anda</h1>
        <div class="survey-box">
            <p class="survey-message">Anda belum memulai survey</p>
            <p class="survey-submessage">Survey anda akan muncul disini</p>
        </div>
        <div class="text-center mt-4">
            <a href="#" class="btn btn-primary start-survey-button">Mulai survey anda</a>
        </div>
        <div class="pagination-box text-center mt-4">
            <span>Halaman</span>
            <input type="text" class="pagination-input" value="1" readonly>
            <span>dari 123</span>
        </div>
    </div>

<footer class="footer">
    <div class="footer-container">
        <div class="footer-content">
            <div class="brand-info">
                <h3>IMM</h3>
                <p>(TBN INDONESIA X MAXY ACADEMY)</p>
            </div>
            <div class="footer-links">
                <div class="footer-nav">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Bootcamp</a></li>
                        <li><a href="#">IMM</a></li>
                        <li><a href="#">Community</a></li>
                        <li><a href="#">Profile</a></li>
                    </ul>
                </div>
                <div class="social-media">
                    <p class="footer-social-media">Social Media</p>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('js/project1.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="script.js"></script>

</body>
</html>
