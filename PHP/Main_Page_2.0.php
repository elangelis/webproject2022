<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css">
    <link rel="stylesheet" href="Main_Page_2.0.css">
    <link rel="stylesheet" href="/HTML_CSS_JAVASCRIPT/2.Main_Page/Main_Page.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <!--<title>Dashboard Sidebar Menu</title>-->
</head>

<body>

    <div id="contents">
        <div class="sidebars">
            <nav class="sidebar_left close" id="sidebar_left">
                <div class=header>
                    <div class="image-text">
                        <span class="image">
                            <!--<img src="logo.png" alt="">-->
                        </span>
                        <div class="text logo-text">
                            <span class="name">Ceid</span>
                            <span class="profession">Project Web</span>
                        </div>
                    </div>
                    <i class='bx bx-chevron-right toggle'></i>
                </div>
                <div class="menu-bar">
                    <div class="menu">

                        <li class="search-box">
                            <i class='bx bx-search icon'></i>
                            <input type="text" placeholder="Search...">
                        </li>

                        <ul class="menu-links">
                            <li class="nav-link">
                                <a href="#">
                                    <i class='bx bx-home-alt icon'></i>
                                    <span class="text nav-text">Dashboard</span>
                                </a>
                            </li>

                            <li class="nav-link">
                                <a href="#">
                                    <i class='bx bx-bar-chart-alt-2 icon'></i>
                                    <span class="text nav-text">Revenue</span>
                                </a>
                            </li>

                            <li class="nav-link">
                                <a href="#">
                                    <i class='bx bx-bell icon'></i>
                                    <span class="text nav-text">Notifications</span>
                                </a>
                            </li>

                            <li class="nav-link">
                                <a href="#">
                                    <i class='bx bx-pie-chart-alt icon'></i>
                                    <span class="text nav-text">Analytics</span>
                                </a>
                            </li>

                            <li class="nav-link">
                                <a href="#">
                                    <i class='bx bx-heart icon'></i>
                                    <span class="text nav-text">Likes</span>
                                </a>
                            </li>

                            <li class="nav-link">
                                <a href="#">
                                    <i class='bx bx-wallet icon'></i>
                                    <span class="text nav-text">Wallets</span>
                                </a>
                            </li>

                        </ul>
                    </div>

                    <div class="bottom-content">
                        <li class="">
                            <a href="#">
                                <i class='bx bx-log-out icon'></i>
                                <span class="text nav-text">Logout</span>
                            </a>
                        </li>

                        <li class="mode">
                            <div class="sun-moon">
                                <i class='bx bx-moon icon moon'></i>
                                <i class='bx bx-sun icon sun'></i>
                            </div>
                            <span class="mode-text text">Dark mode</span>

                            <div class="toggle-switch">
                                <span class="switch"></span>
                            </div>
                        </li>

                    </div>
                </div>
            </nav>
            <nav class="sidebar_right close" id="sidebar_right">
                <div class="menu-bar">
                    <div class=header>
                        <div class="image-text">
                            <span class="image">
                                <!--<img src="logo.png" alt="">-->
                            </span>
                            <div class="text logo-text">
                                <span class="name">"Application Name"</span>
                                <span class="profession">Filters</span>
                            </div>
                        </div>
                        <i class='bx bx-chevron-right toggle'></i>
                    </div>
                    <div class="menu">

                        <li class="search-box">
                            <i class='bx bx-search icon'></i>
                            <input type="text" placeholder="Search...">
                        </li>

                        <ul class="menu-links">
                            <li class="nav-link">
                                <a href="#">
                                    <i class='bx bx-bar-chart-alt-2 icon'></i>
                                    <span class="text nav-text">Filter 1</span>
                                </a>
                            </li>

                            <li class="nav-link">
                                <a href="#">
                                    <i class='bx bx-bar-chart-alt-2 icon'></i>
                                    <span class="text nav-text">Filter 2</span>
                                </a>
                            </li>

                            <li class="nav-link">
                                <a href="#">
                                    <i class='bx bx-bar-chart-alt-2 icon'></i>
                                    <span class="text nav-text">Filter 3</span>
                                </a>
                            </li>

                            <li class="nav-link">
                                <a href="#">
                                    <i class='bx bx-bar-chart-alt-2 icon'></i>
                                    <span class="text nav-text">Filter 4</span>
                                </a>
                            </li>

                            <li class="nav-link">
                                <a href="#">
                                    <i class='bx bx-bar-chart-alt-2 icon'></i>
                                    <span class="text nav-text">Filter 5</span>
                                </a>
                            </li>

                            <li class="nav-link">
                                <a href="#">
                                    <i class='bx bx-bar-chart-alt-2 icon'></i>
                                    <span class="text nav-text">Filter 6</span>
                                </a>
                            </li>

                        </ul>
                    </div>

                    <div class="bottom-content">
                        <li class="">
                            <a href="#">
                                <i class='bx bx-log-out icon'></i>
                                <span class="text nav-text">Logout</span>
                            </a>
                        </li>

                        <li class="mode">
                            <div class="sun-moon">
                                <i class='bx bx-moon icon moon'></i>
                                <i class='bx bx-sun icon sun'></i>
                            </div>
                            <span class="mode-text text">Dark mode</span>

                            <div class="toggle-switch">
                                <span class="switch"></span>
                            </div>
                        </li>

                    </div>
                </div>
            </nav>
        </div>
        <div class="mainContents" id="mainContents">
            <div class="map_class">
                <div id="map_text">Leaflet MAP </div>
                <div id="map"></div>
            </div>
            <div class="center-div" style="width: 700px;">
                <h1">This is some content</h1>
            </div>
            <div class="center-div" style="width: 900px;">
                <h1>More content</h1>
            </div>
        </div>
    </div>
    <div name='scripts'>
        <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
        <script type="text/javascript" src=PHP/main""></script>
        <script type="text/javascript" src="/webproject2022/HTML_CSS_JAVASCRIPT/2.Main_Page/leaflet.js"></script>
    </div>
</body>

</html>