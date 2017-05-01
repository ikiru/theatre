
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<!--
==================================================
Header Section Start
================================================== -->
<header id="top-bar" class="navbar-fixed-top animated-header">
    <div class="container">
        <div class="navbar-header">

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
              {{ menu('portal','menus.portal') }}
            </div>
        </nav>
        <!-- /main nav -->
    </div>
</header>
