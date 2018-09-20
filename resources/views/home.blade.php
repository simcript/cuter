<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME')}}</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <style>
      body {

        background-image: linear-gradient(135deg, rgb(23, 42, 116), rgb(33, 169, 175));
        background-position-x: initial;
        background-position-y: initial;
        background-size: initial;
        background-repeat-x: repeat;
        background-repeat-y: repeat;
        background-attachment: initial;
        background-origin: initial;
        background-clip: initial;
        background-color: #184e8e;
      }
    </style>
</head>

<body>
    <div>
        <div class="header-blue" style="height:636px;">
            <nav class="navbar navbar-default navigation-clean-search">
                <div class="container">
                    <div class="navbar-header"><a class="navbar-brand" href="#">Cuter</a><button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                    <div
                        class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li role="presentation"><a href="https://github.com/simcript/cuter">Github</a></li>
                            {{-- <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Dropdown <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li role="presentation"><a href="#">First Item</a></li>
                                    <li role="presentation"><a href="#">Second Item</a></li>
                                    <li role="presentation"><a href="#">Third Item</a></li>
                                </ul>
                            </li> --}}
                        </ul>
                        {{-- <form class="navbar-form navbar-left" target="_self">
                            <div class="form-group"><label class="control-label" for="search-field"><i class="glyphicon glyphicon-search"></i></label><input class="form-control search-field" type="search" name="search" id="search-field"></div>
                        </form>
                        <p class="navbar-text navbar-right"><a class="navbar-link login" href="#">Log In</a> <a class="btn btn-default action-button" role="button" href="#">Sign Up</a></p> --}}
                </div>
        </div>
        </nav>
        <div class="container hero">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <h1 style="margin-top:84px;">Shorten your link here</h1>
                    <p>Cuter helps you to make your links short and beautiful. Just enter your link in the box below. Now you are here, then shorten your link. </p>
                    <form>
                        <div class="form-group">
                            <div class="input-group input-group-lg"><input class="form-control input-lg" type="url" name="link" placeholder="Your Link" autofocus="">
                                <div class="input-group-btn"><button class="btn btn-success btn-lg" type="button">Cut!</button></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
            </div>
        </div>
    </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
