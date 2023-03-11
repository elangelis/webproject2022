<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="User_Settings_0.1.css">

</head>

<body>
    <div id="Button_Menu" class="Button_Menu_class">

        <button class="tablink" onclick="openPage('Settings', this, 'red')" id="Settings_Open">Settings</button>
        <button class="tablink" onclick="openPage('History', this, 'green')" id="History_Open">History</button>
        <button class="tablink" onclick="openPage('Analytics', this, 'blue')" id="Analytics_Open">Analytics</button>
        <button class="tablink" onclick="openPage('Notifications', this, 'orange')" id="Notifications_Open">Notifications</button>
        <button class="tablink" onclick="openPage('Likes', this, 'orange')" id="Likes_Open">Likes</button>
        <button class="tablink" onclick="openPage('Points_wallet', this, 'orange')" id="Points_wallet_Open">Points wallet</button>

        <div id="Home" class="tabcontent">
            <h3>Home</h3>
            <p>Home is where the heart is..</p>
        </div>

        <div id="News" class="tabcontent">
            <h3>News</h3>
            <p>Some news this fine day!</p>
        </div>

        <div id="Contact" class="tabcontent">
            <h3>Contact</h3>
            <p>Get in touch, or swing by for a cup of coffee.</p>
        </div>
        
        <div id="About" class="tabcontent">
            <h3>About</h3>
            <p>Who we are and what we do.</p>
        </div>

        <div id="Settings" class="tabcontent">
            <h3>Settings</h3>
            <p>User Settings</p>
        </div>

        <div id="History" class="tabcontent">
            <h3>History</h3>
            <p>History</p>
        </div>

        <div id="Analytics" class="tabcontent">
            <h3>Analytics</h3>
            <p>Analytics Graphs</p>
        </div>

        <div id="Notifications" class="tabcontent">
            <h3>Notifications</h3>
            <p>Notifications</p>
        </div>

        <div id="Likes" class="tabcontent">
            <h3>Likes</h3>
            <p>Likes</p>
        </div>

        <div id="Points_wallet" class="tabcontent">
            <h3>Points wallet</h3>
            <p>Points wallet</p>
        </div>
        
    </div>
    <script type="text/javascript" src="User_Settings_0.1.js"></script>
</body>
</html>