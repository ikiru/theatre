</head>
<body>

<!--
==================================================
Header Section Start
================================================== -->

<header id="top-bar" class="navbar-fixed-top animated-header">
    <div class="container">
        <div class="navbar-header">
            <!-- responsive nav button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <!-- /responsive nav button -->

            <!-- logo -->
            <div class="navbar-brand">
                <a href="index.html" >
                    <img src="images/logo.png" alt="">
                </a>
            </div>
            <!-- /logo -->
        </div>
        <!-- main menu -->

        <nav class="collapse navbar-collapse" role="navigation">
            <div class="main-menu">
              {{ menu('main','menus.main') }}
            </div>
        </nav>
        <!-- /main nav -->
    </div>
</header>
