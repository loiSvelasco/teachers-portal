    <div class="ui inverted vertical footer segment">
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
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js"></script>
<script src="semantic/dist/semantic.min.js"></script>
</body>

</html>