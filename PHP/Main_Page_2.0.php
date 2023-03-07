<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css">
    <link rel="stylesheet" href="Main_Page_3.0.0.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
</head>

<body>
    <header class="header_class" id="header">header</header>
    <div class="content_class" id="content_id">
        <nav class="sidebar_left_class" id="sidebar_left">
            <div class="sidebar_left_menu_class" id="sidebar_left_menu">
                <ul class="menu_links_class" id="menu_links">
                    <li class="nav_link" id="menu_button_1">
                        <a href="#">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">User Profile</span>
                        </a>
                    </li>
                    <li class="nav_link"id="menu_button_2">
                        <a href="#">
                            <i class='bx bx-bar-chart-alt-2 icon'></i>
                            <span class="text nav-text">Analytics</span>
                        </a>
                    </li>
                    <li class="nav_link"id="menu_button_3">
                        <a href="#">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Notifications</span>
                        </a>
                    </li>
                    <li class="nav_link"id="menu_button_4">
                        <a href="#">
                            <i class='bx bx-pie-chart-alt icon'></i>
                            <span class="text nav-text">History</span>
                        </a>
                    </li>
                    <li class="nav_link"id="menu_button_5">
                        <a href="#">
                            <i class='bx bx-heart icon'></i>
                            <span class="text nav-text">Likes</span>
                        </a>
                    </li>
                    <li class="nav_link"id="menu_button_6">
                        <a href="#">
                            <i class='bx bx-wallet icon'></i>
                            <span class="text nav-text">Points wallet</span>
                        </a>
                    </li>
            </div>
    </div>
    </nav>
    <div class="map_widnow" id="map_window">
        <div id="map_text">Leaflet MAP </div>
        <div id="map"></div>
    </div>
    <nav class="sidebar_right_class" id="sidebar_right">
        <div class="sidebar_right_menu_class" id="sidebar_right_menu">
            <ul class="filters_class" id="filters">
                <li class="filter_box" id="filter_1">
                    <span class="text nav-text">Search By Shop Name </span>
                    <li class="search-box" id="search_by_name">
                        <a href="#">
                            <i class='bx bx-search icon'></i>
                            <input type="text" placeholder="Shop Name...">
                        </a>
                    </li>
                </li>
                <li class="filter_box" id="filter_2">
                    <span class="text nav-text">Search By Item Category</span>
                    <li class="search-box"id="search_by_item_category">
                        <a href="#">
                            <i class='bx bx-search icon'></i>
                            <input type="text" placeholder="Item Category...">
                        </a>
                    </li>
                </li>
                <li class="r_s_logout_button_class" id="r_s_logout_button">
                    <a href="#">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
        </div>
    </nav>
    </div>
    <footer class="footer_class" id="footer">footer</footer>
    <div name='scripts'>
        <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
        <script type="text/javascript" src="leaflet2.0.0.js"></script>
        <!--script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script-->
        <!--script type="text/javascript" src="Main_Page_2.1.js"></script-->
        <!--script type="text/javascript" src="leaflet2.0.0.js"></script-->
        <script type="text/javascript" src="Main_Page_2.1.js"></script>
    </div>
</body>

</html>