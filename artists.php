<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WIP - Assignment 1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="css/common.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Bad Script' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Caption" rel="stylesheet">
</head>

<body>
    <div class="container">
        <header>
            <div class="col-md-12">
                <div class="row">
                    <div id="topHeaderRow">
                        <nav class="navbar navbar-inverse">
                            <div class="navbar-header">
                                <a class="navbar-brand" id="mainNavText" href="#">Welcome to
                                    <b>Art Store</b>,
                                    <b>Login</b> or
                                    <b>Create new Account</b>
                                </a>
                            </div>
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="#">
                                        <span class="glyphicon glyphicon-user"></span> My Account</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="glyphicon glyphicon-gift"></span> Wish List</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="glyphicon glyphicon-arrow-right"></span> Checkout</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- end topHeaderRow -->
                <div class="row">
                    <div id="logoRow">
                        <div class="col-md-8">
                            <h1>Art Store</h1>
                        </div>
                        <div class="col-md-3">
                            <form action="http://www.randyconnolly.com/tests/process.php" method="post">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Search" name="search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit">
                                            <i class="glyphicon glyphicon-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end logoRow -->
                <div class="row">
                    <div id="mainNavigationRow">
                        <nav class="navbar navbar-default">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li>
                                    <a href="about.php">About Us</a>
                                </li>
                                <li>
                                    <a href="works.php">Art Works</a>
                                </li>
                                <li class="active">
                                    <a href="artists.php">Artists</a>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        Specials
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">Special 1</a>
                                        </li>
                                        <li>
                                            <a href="#">Special 2</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- end mainNavigationRow -->
        </header>
    </div>
    <div class="row">
        <div class="container">
            <div>
                <br>
                <h1 class="google-font">This Week's Best-Selling Artists</h1>
            </div>
            <div class="alert alert-warning">
                Each week we show you who are our best selling artists...
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="thumbnail">
                        <img src="images/artists/1.jpg" alt="picaso">
                        <div class="caption">
                            <p>Picasso</p>
                            <button class="btn btn-info">
                                <i class="glyphicon glyphicon-fire"></i> Sales
                                <span class="badge">66</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="thumbnail">
                        <img src="images/artists/99.jpg" alt="picaso">
                        <div class="caption">
                            <p>Raphael</p>
                            <button class="btn btn-info">
                                <i class="glyphicon glyphicon-fire"></i> Sales
                                <span class="badge">56</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="thumbnail">
                        <img src="images/artists/19.jpg" alt="picaso">
                        <div class="caption">
                            <p>Van Gogh</p>
                            <button class="btn btn-info">
                                <i class="glyphicon glyphicon-fire"></i> Sales
                                <span class="badge">40</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="thumbnail">
                        <img src="images/artists/95.jpg" alt="picaso">
                        <div class="caption">
                            <p>Botticelli</p>
                            <button class="btn btn-info">
                                <i class="glyphicon glyphicon-fire"></i> Sales
                                <span class="badge">37</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="thumbnail">
                        <img src="images/artists/29.jpg" alt="picaso">
                        <div class="caption">
                            <p>Klimt</p>
                            <button class="btn btn-info">
                                <i class="glyphicon glyphicon-fire"></i> Sales
                                <span class="badge">36</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="thumbnail">
                        <img src="images/artists/2.jpg" alt="picaso">
                        <div class="caption">
                            <p>Matisse</p>
                            <button class="btn btn-info">
                                <i class="glyphicon glyphicon-fire"></i> Sales
                                <span class="badge">34</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="thumbnail">
                        <img src="images/artists/98.jpg" alt="picaso">
                        <div class="caption">
                            <p>Michelangelo</p>
                            <button class="btn btn-info">
                                <i class="glyphicon glyphicon-fire"></i> Sales
                                <span class="badge">32</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="thumbnail">
                        <img src="images/artists/106.jpg" alt="picaso">
                        <div class="caption">
                            <p>Vermeer</p>
                            <button class="btn btn-info">
                                <i class="glyphicon glyphicon-fire"></i> Sales
                                <span class="badge">31</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="thumbnail">
                        <img src="images/artists/97.jpg" alt="picaso">
                        <div class="caption">
                            <p>da Vinci</p>
                            <button class="btn btn-info">
                                <i class="glyphicon glyphicon-fire"></i> Sales
                                <span class="badge">26</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="thumbnail">
                        <img src="images/artists/21.jpg" alt="picaso">
                        <div class="caption">
                            <p>Cezanne</p>
                            <button class="btn btn-info">
                                <i class="glyphicon glyphicon-fire"></i> Sales
                                <span class="badge">25</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="thumbnail">
                        <img src="images/artists/17.jpg" alt="picaso">
                        <div class="caption">
                            <p>Monet</p>
                            <button class="btn btn-info">
                                <i class="glyphicon glyphicon-fire"></i> Sales
                                <span class="badge">25</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="thumbnail">
                        <img src="images/artists/101.jpg" alt="picaso">
                        <div class="caption">
                            <p>Caravaggio</p>
                            <button class="btn btn-info">
                                <i class="glyphicon glyphicon-fire"></i> Sales
                                <span class="badge">18</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div>
                <h3 class="google-font">Artists by Genre</h3>
                <div class="progress">
                    <div class="progress-bar progress-bar-info" role="progressbar" style="width:5%">
                        Gothic
                    </div>

                    <div class="progress-bar progress-bar-success" role="progressbar" style="width:30%">
                        Renaissance
                    </div>
                    <div class="progress-bar progress-bar-warning" role="progressbar" style="width:15%">
                        Baroque
                    </div>
                    <div class="progress-bar progress-bar-danger" role="progressbar" style="width:20%">
                        Pre-Modern
                    </div>
                    <div class="progress-bar" role="progressbar" style="width:30%">
                        Modern
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>