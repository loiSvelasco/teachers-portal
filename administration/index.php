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
    <!-- desktop menu -->
    <div class="ui borderless top attached menu" id="desktop-menu">
        <div class="ui container">
            <a class="browse item">
                <i class="sidebar icon"></i>
                Menu
            </a>
            <div class="ui fluid popup bottom left transition">
                <div class="ui four column relaxed equal height divided grid">
                    <div class="column">
                    <h4 class="ui header">Trainings</h4>
                        <div class="ui link large list">
                            <a class="item">
                                <i class="chalkboard icon"></i>
                                Upcoming
                            </a>
                            <a class="item">
                                <i class="user icon"></i>
                                To attend
                            </a>
                            <a class="item">
                                <i class="calendar check icon"></i>
                                Attended</a>
                            <a class="item">
                                <i class="list ul icon"></i>
                                List
                            </a>
                        </div>
                    </div>
                    <div class="column">
                    <h4 class="ui header">Personal</h4>
                        <div class="ui link large list">
                            <a class="item">
                                <i class="university icon"></i>
                                Studies
                            </a>
                            <a class="item">
                                <i class="building icon"></i>
                                Work History
                            </a>
                            <a class="item">
                                <i class="lightbulb outline check icon"></i>
                                Innovations
                            </a>
                            <a class="item">
                                <i class="scroll ul icon"></i>
                                Resume
                            </a>
                        </div>
                    </div>
                </div>
            </div>
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
    <!-- /desktop menu -->
    <div class="pusher Site-content">
        <div class="ui container basic segment">
            <h3 class="ui header">Application Content</h3>
            <!-- <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis ad consequatur eius architecto facere voluptatum ducimus! Accusantium, fugiat. Officiis optio, veniam suscipit et officia quam est omnis culpa hic iusto?
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi perspiciatis qui harum quaerat, corrupti iste nulla nemo praesentium deserunt optio repellat voluptate sed! Est deserunt autem quam? Neque, recusandae minima!
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti rem quidem nemo odit ullam nisi quaerat doloribus beatae ducimus porro cum ipsum, dolorum, fugiat voluptatibus incidunt adipisci? Tempore, deleniti soluta.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus quisquam delectus consequatur dicta, et temporibus nostrum voluptate quibusdam officiis dolore tempora ab dolor, voluptatum cupiditate accusamus velit accusantium praesentium repellendus.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores cumque repellendus dolorem expedita, officia debitis ullam. Amet omnis, delectus fugiat repudiandae fugit pariatur ullam explicabo animi, quaerat sunt nobis harum.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi magnam dolores inventore, eligendi facere, accusamus, fugiat error minima voluptatum atque voluptates. Ut debitis totam illo voluptatum error? Dicta, nemo necessitatibus!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi minus temporibus cum, totam omnis quisquam laudantium fugiat accusamus tenetur rem est dolores. Quae minima ea culpa sit, iste facere distinctio?
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda, ad nisi perferendis eaque quia, mollitia ipsam at sint dignissimos beatae voluptate tempore neque ipsa est adipisci. Omnis fugit quidem magni!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam voluptatum hic natus earum cupiditate eum esse voluptas impedit rerum quis! Accusantium fuga quam vel laboriosam quibusdam quasi repudiandae rerum alias!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem ad maiores ipsa architecto officia quod dolor natus facilis, excepturi voluptatem consequatur. Repellat nemo quae exercitationem repellendus. Beatae fugit atque excepturi?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet assumenda accusantium doloribus vitae magni? Dolorem, ad eaque quaerat eum impedit magnam similique ratione exercitationem quod sit delectus distinctio sapiente ducimus.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis ad consequatur eius architecto facere voluptatum ducimus! Accusantium, fugiat. Officiis optio, veniam suscipit et officia quam est omnis culpa hic iusto?
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi perspiciatis qui harum quaerat, corrupti iste nulla nemo praesentium deserunt optio repellat voluptate sed! Est deserunt autem quam? Neque, recusandae minima!
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti rem quidem nemo odit ullam nisi quaerat doloribus beatae ducimus porro cum ipsum, dolorum, fugiat voluptatibus incidunt adipisci? Tempore, deleniti soluta.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus quisquam delectus consequatur dicta, et temporibus nostrum voluptate quibusdam officiis dolore tempora ab dolor, voluptatum cupiditate accusamus velit accusantium praesentium repellendus.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores cumque repellendus dolorem expedita, officia debitis ullam. Amet omnis, delectus fugiat repudiandae fugit pariatur ullam explicabo animi, quaerat sunt nobis harum.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi magnam dolores inventore, eligendi facere, accusamus, fugiat error minima voluptatum atque voluptates. Ut debitis totam illo voluptatum error? Dicta, nemo necessitatibus!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi minus temporibus cum, totam omnis quisquam laudantium fugiat accusamus tenetur rem est dolores. Quae minima ea culpa sit, iste facere distinctio?
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda, ad nisi perferendis eaque quia, mollitia ipsam at sint dignissimos beatae voluptate tempore neque ipsa est adipisci. Omnis fugit quidem magni!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam voluptatum hic natus earum cupiditate eum esse voluptas impedit rerum quis! Accusantium fuga quam vel laboriosam quibusdam quasi repudiandae rerum alias!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem ad maiores ipsa architecto officia quod dolor natus facilis, excepturi voluptatem consequatur. Repellat nemo quae exercitationem repellendus. Beatae fugit atque excepturi?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet assumenda accusantium doloribus vitae magni? Dolorem, ad eaque quaerat eum impedit magnam similique ratione exercitationem quod sit delectus distinctio sapiente ducimus.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis ad consequatur eius architecto facere voluptatum ducimus! Accusantium, fugiat. Officiis optio, veniam suscipit et officia quam est omnis culpa hic iusto?
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi perspiciatis qui harum quaerat, corrupti iste nulla nemo praesentium deserunt optio repellat voluptate sed! Est deserunt autem quam? Neque, recusandae minima!
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti rem quidem nemo odit ullam nisi quaerat doloribus beatae ducimus porro cum ipsum, dolorum, fugiat voluptatibus incidunt adipisci? Tempore, deleniti soluta.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus quisquam delectus consequatur dicta, et temporibus nostrum voluptate quibusdam officiis dolore tempora ab dolor, voluptatum cupiditate accusamus velit accusantium praesentium repellendus.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores cumque repellendus dolorem expedita, officia debitis ullam. Amet omnis, delectus fugiat repudiandae fugit pariatur ullam explicabo animi, quaerat sunt nobis harum.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi magnam dolores inventore, eligendi facere, accusamus, fugiat error minima voluptatum atque voluptates. Ut debitis totam illo voluptatum error? Dicta, nemo necessitatibus!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi minus temporibus cum, totam omnis quisquam laudantium fugiat accusamus tenetur rem est dolores. Quae minima ea culpa sit, iste facere distinctio?
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda, ad nisi perferendis eaque quia, mollitia ipsam at sint dignissimos beatae voluptate tempore neque ipsa est adipisci. Omnis fugit quidem magni!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam voluptatum hic natus earum cupiditate eum esse voluptas impedit rerum quis! Accusantium fuga quam vel laboriosam quibusdam quasi repudiandae rerum alias!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem ad maiores ipsa architecto officia quod dolor natus facilis, excepturi voluptatem consequatur. Repellat nemo quae exercitationem repellendus. Beatae fugit atque excepturi?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet assumenda accusantium doloribus vitae magni? Dolorem, ad eaque quaerat eum impedit magnam similique ratione exercitationem quod sit delectus distinctio sapiente ducimus.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis ad consequatur eius architecto facere voluptatum ducimus! Accusantium, fugiat. Officiis optio, veniam suscipit et officia quam est omnis culpa hic iusto?
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi perspiciatis qui harum quaerat, corrupti iste nulla nemo praesentium deserunt optio repellat voluptate sed! Est deserunt autem quam? Neque, recusandae minima!
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti rem quidem nemo odit ullam nisi quaerat doloribus beatae ducimus porro cum ipsum, dolorum, fugiat voluptatibus incidunt adipisci? Tempore, deleniti soluta.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus quisquam delectus consequatur dicta, et temporibus nostrum voluptate quibusdam officiis dolore tempora ab dolor, voluptatum cupiditate accusamus velit accusantium praesentium repellendus.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores cumque repellendus dolorem expedita, officia debitis ullam. Amet omnis, delectus fugiat repudiandae fugit pariatur ullam explicabo animi, quaerat sunt nobis harum.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi magnam dolores inventore, eligendi facere, accusamus, fugiat error minima voluptatum atque voluptates. Ut debitis totam illo voluptatum error? Dicta, nemo necessitatibus!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi minus temporibus cum, totam omnis quisquam laudantium fugiat accusamus tenetur rem est dolores. Quae minima ea culpa sit, iste facere distinctio?
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda, ad nisi perferendis eaque quia, mollitia ipsam at sint dignissimos beatae voluptate tempore neque ipsa est adipisci. Omnis fugit quidem magni!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam voluptatum hic natus earum cupiditate eum esse voluptas impedit rerum quis! Accusantium fuga quam vel laboriosam quibusdam quasi repudiandae rerum alias!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem ad maiores ipsa architecto officia quod dolor natus facilis, excepturi voluptatem consequatur. Repellat nemo quae exercitationem repellendus. Beatae fugit atque excepturi?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet assumenda accusantium doloribus vitae magni? Dolorem, ad eaque quaerat eum impedit magnam similique ratione exercitationem quod sit delectus distinctio sapiente ducimus.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis ad consequatur eius architecto facere voluptatum ducimus! Accusantium, fugiat. Officiis optio, veniam suscipit et officia quam est omnis culpa hic iusto?
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi perspiciatis qui harum quaerat, corrupti iste nulla nemo praesentium deserunt optio repellat voluptate sed! Est deserunt autem quam? Neque, recusandae minima!
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti rem quidem nemo odit ullam nisi quaerat doloribus beatae ducimus porro cum ipsum, dolorum, fugiat voluptatibus incidunt adipisci? Tempore, deleniti soluta.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus quisquam delectus consequatur dicta, et temporibus nostrum voluptate quibusdam officiis dolore tempora ab dolor, voluptatum cupiditate accusamus velit accusantium praesentium repellendus.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores cumque repellendus dolorem expedita, officia debitis ullam. Amet omnis, delectus fugiat repudiandae fugit pariatur ullam explicabo animi, quaerat sunt nobis harum.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi magnam dolores inventore, eligendi facere, accusamus, fugiat error minima voluptatum atque voluptates. Ut debitis totam illo voluptatum error? Dicta, nemo necessitatibus!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi minus temporibus cum, totam omnis quisquam laudantium fugiat accusamus tenetur rem est dolores. Quae minima ea culpa sit, iste facere distinctio?
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda, ad nisi perferendis eaque quia, mollitia ipsam at sint dignissimos beatae voluptate tempore neque ipsa est adipisci. Omnis fugit quidem magni!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam voluptatum hic natus earum cupiditate eum esse voluptas impedit rerum quis! Accusantium fuga quam vel laboriosam quibusdam quasi repudiandae rerum alias!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem ad maiores ipsa architecto officia quod dolor natus facilis, excepturi voluptatem consequatur. Repellat nemo quae exercitationem repellendus. Beatae fugit atque excepturi?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet assumenda accusantium doloribus vitae magni? Dolorem, ad eaque quaerat eum impedit magnam similique ratione exercitationem quod sit delectus distinctio sapiente ducimus.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis ad consequatur eius architecto facere voluptatum ducimus! Accusantium, fugiat. Officiis optio, veniam suscipit et officia quam est omnis culpa hic iusto?
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi perspiciatis qui harum quaerat, corrupti iste nulla nemo praesentium deserunt optio repellat voluptate sed! Est deserunt autem quam? Neque, recusandae minima!
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti rem quidem nemo odit ullam nisi quaerat doloribus beatae ducimus porro cum ipsum, dolorum, fugiat voluptatibus incidunt adipisci? Tempore, deleniti soluta.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus quisquam delectus consequatur dicta, et temporibus nostrum voluptate quibusdam officiis dolore tempora ab dolor, voluptatum cupiditate accusamus velit accusantium praesentium repellendus.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores cumque repellendus dolorem expedita, officia debitis ullam. Amet omnis, delectus fugiat repudiandae fugit pariatur ullam explicabo animi, quaerat sunt nobis harum.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi magnam dolores inventore, eligendi facere, accusamus, fugiat error minima voluptatum atque voluptates. Ut debitis totam illo voluptatum error? Dicta, nemo necessitatibus!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi minus temporibus cum, totam omnis quisquam laudantium fugiat accusamus tenetur rem est dolores. Quae minima ea culpa sit, iste facere distinctio?
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda, ad nisi perferendis eaque quia, mollitia ipsam at sint dignissimos beatae voluptate tempore neque ipsa est adipisci. Omnis fugit quidem magni!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam voluptatum hic natus earum cupiditate eum esse voluptas impedit rerum quis! Accusantium fuga quam vel laboriosam quibusdam quasi repudiandae rerum alias!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem ad maiores ipsa architecto officia quod dolor natus facilis, excepturi voluptatem consequatur. Repellat nemo quae exercitationem repellendus. Beatae fugit atque excepturi?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet assumenda accusantium doloribus vitae magni? Dolorem, ad eaque quaerat eum impedit magnam similique ratione exercitationem quod sit delectus distinctio sapiente ducimus.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis ad consequatur eius architecto facere voluptatum ducimus! Accusantium, fugiat. Officiis optio, veniam suscipit et officia quam est omnis culpa hic iusto?
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi perspiciatis qui harum quaerat, corrupti iste nulla nemo praesentium deserunt optio repellat voluptate sed! Est deserunt autem quam? Neque, recusandae minima!
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti rem quidem nemo odit ullam nisi quaerat doloribus beatae ducimus porro cum ipsum, dolorum, fugiat voluptatibus incidunt adipisci? Tempore, deleniti soluta.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus quisquam delectus consequatur dicta, et temporibus nostrum voluptate quibusdam officiis dolore tempora ab dolor, voluptatum cupiditate accusamus velit accusantium praesentium repellendus.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores cumque repellendus dolorem expedita, officia debitis ullam. Amet omnis, delectus fugiat repudiandae fugit pariatur ullam explicabo animi, quaerat sunt nobis harum.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi magnam dolores inventore, eligendi facere, accusamus, fugiat error minima voluptatum atque voluptates. Ut debitis totam illo voluptatum error? Dicta, nemo necessitatibus!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi minus temporibus cum, totam omnis quisquam laudantium fugiat accusamus tenetur rem est dolores. Quae minima ea culpa sit, iste facere distinctio?
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda, ad nisi perferendis eaque quia, mollitia ipsam at sint dignissimos beatae voluptate tempore neque ipsa est adipisci. Omnis fugit quidem magni!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam voluptatum hic natus earum cupiditate eum esse voluptas impedit rerum quis! Accusantium fuga quam vel laboriosam quibusdam quasi repudiandae rerum alias!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem ad maiores ipsa architecto officia quod dolor natus facilis, excepturi voluptatem consequatur. Repellat nemo quae exercitationem repellendus. Beatae fugit atque excepturi?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet assumenda accusantium doloribus vitae magni? Dolorem, ad eaque quaerat eum impedit magnam similique ratione exercitationem quod sit delectus distinctio sapiente ducimus.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis ad consequatur eius architecto facere voluptatum ducimus! Accusantium, fugiat. Officiis optio, veniam suscipit et officia quam est omnis culpa hic iusto?
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi perspiciatis qui harum quaerat, corrupti iste nulla nemo praesentium deserunt optio repellat voluptate sed! Est deserunt autem quam? Neque, recusandae minima!
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti rem quidem nemo odit ullam nisi quaerat doloribus beatae ducimus porro cum ipsum, dolorum, fugiat voluptatibus incidunt adipisci? Tempore, deleniti soluta.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus quisquam delectus consequatur dicta, et temporibus nostrum voluptate quibusdam officiis dolore tempora ab dolor, voluptatum cupiditate accusamus velit accusantium praesentium repellendus.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores cumque repellendus dolorem expedita, officia debitis ullam. Amet omnis, delectus fugiat repudiandae fugit pariatur ullam explicabo animi, quaerat sunt nobis harum.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi magnam dolores inventore, eligendi facere, accusamus, fugiat error minima voluptatum atque voluptates. Ut debitis totam illo voluptatum error? Dicta, nemo necessitatibus!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi minus temporibus cum, totam omnis quisquam laudantium fugiat accusamus tenetur rem est dolores. Quae minima ea culpa sit, iste facere distinctio?
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda, ad nisi perferendis eaque quia, mollitia ipsam at sint dignissimos beatae voluptate tempore neque ipsa est adipisci. Omnis fugit quidem magni!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam voluptatum hic natus earum cupiditate eum esse voluptas impedit rerum quis! Accusantium fuga quam vel laboriosam quibusdam quasi repudiandae rerum alias!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem ad maiores ipsa architecto officia quod dolor natus facilis, excepturi voluptatem consequatur. Repellat nemo quae exercitationem repellendus. Beatae fugit atque excepturi?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet assumenda accusantium doloribus vitae magni? Dolorem, ad eaque quaerat eum impedit magnam similique ratione exercitationem quod sit delectus distinctio sapiente ducimus.
            </p> -->
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
    $('.menu .container .browse')
    .popup({
        on: 'click',
        inline     : true,
        hoverable  : true,
        position   : 'bottom left',
        delay: {
        show: 300,
        hide: 800
        }
    });
    </script>
</body>
</html>