<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/semantic/dist/semantic.min.css">
    <title>Administration</title>
    <style>
    .Site {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
    }

    .Site-content {
        flex: 1;
    }
    </style>
</head>
<body class="Site">
    <div class="ui borderless top attached menu">
        <div class="ui container">
            <a class="item toggle-sidebar">
                <i class="sidebar icon"></i>
                Menu
            </a>
            <div class="right menu">
                <div class="item">
                    <div class="ui transparent icon input">
                        <input type="text" placeholder="Search...">
                        <i class="search link icon"></i>
                    </div>
                </div>
                <a class="item">
                    <i class="user circle icon"></i>
                </a>
            </div>
        </div>
    </div>

    
    <div class="pusher Site-content">
        <div class="ui container basic segment">
            <h3 class="ui header">Application Content</h3>
        </div>
    </div>
    <!-- footer -->
    <footer>
    <div class="ui inverted vertical footer segment" style="width: 100%; padding: 3em 0em;">
        <div class="ui container">
            <div class="ui stackable inverted divided equal height stackable grid">
                <div class="three wide column">
                <h4 class="ui inverted header">About</h4>
                <div class="ui inverted link list">
                    <a href="#" class="item">Sitemap</a>
                    <a href="#" class="item">Contact Us</a>
                    <a href="#" class="item">Religious Ceremonies</a>
                    <a href="#" class="item">Gazebo Plans</a>
                </div>
                </div>
                <div class="three wide column">
                <h4 class="ui inverted header">Services</h4>
                <div class="ui inverted link list">
                    <a href="#" class="item">Banana Pre-Order</a>
                    <a href="#" class="item">DNA FAQ</a>
                    <a href="#" class="item">How To Access</a>
                    <a href="#" class="item">Favorite X-Men</a>
                </div>
                </div>
                <div class="seven wide column">
                <h4 class="ui inverted header">Teachers Portal</h4>
                <p>
                    This portal serves as an online data-bank with a single point of entry and
                    hub to all information and content related to programs, trainings, and more.
                </p>
                    <div class="ui">
                        <p>
                        &copy; <?php
                        $fromYear = 2022;
                        $thisYear = (int)date('Y');
                        echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?> 
                        Developed and Designed with <em data-emoji=":heart:"></em> by Louis Velasco.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </footer>
    
    <!-- /footer -->
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js"></script>
    <script src="/semantic/dist/semantic.min.js"></script>

    <script>
        $('.toggle-sidebar').click(function () {
            $('.ui.sidebar').sidebar('toggle');
        })
    </script>
</body>
</html>