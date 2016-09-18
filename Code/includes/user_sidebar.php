
<div id="tooplate_sidebar">

    <div id="header">
        <h1><a href="#">Library Management System</a></h1>
    </div>
    
            <div id="menu">
                <ul class="navigation">
                    <?php
        if(isset($_SESSION['lib_id']))
        {
            echo '<li><a onclick="main_panel_view(\'login_ID_div\')" class="selected">',$_SESSION['lib_id'],'</a></li>';
        }
        ?>
                    <li><a onclick="main_panel_view('home')">Home</a></li>
                    <li><a  onclick="main_panel_view('search_book')" >Search</a></li>
                    <li><a onclick="main_panel_view('about')" >About Us</a></li>
                    <li><a onclick="main_panel_view('services')" >View Profile</a></li>
                    <li><a onclick="main_panel_view('gallery')" >Gallery</a></li>
                    <li><a onclick="setLoca('includes/widgets/loggedout.php')" class="last">Sign Out</a></li>
                </ul>
            </div>

</div> <!-- end of sidebar -->  
