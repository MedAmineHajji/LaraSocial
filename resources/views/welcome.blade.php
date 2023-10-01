<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Oculus </title>
    <link rel="stylesheet" href={{asset("assets/style.css")}}>
    <script src="https://kit.fontawesome.com/31186e86db.js" crossorigin="anonymous"></script>
</head>
<body>
    
    {{-- THIS IS THE HEADER OF THE APP --}}
    <nav>
        <div class="nav-left">
            <a href="/">
            <img src="images/logo.png" class="logo">
             </a>
        </div>
        <div class="nav-right">
            @if ($connected)
                <div class="search-box">
                    <img src="images/search.png">
                    <input type="text" placeholder="Search">
                </div>
                <div class="nav-user-icon online" onclick="settingsMenuToggle()">
                    <img src="images/profile-pic.png">
                </div>

                {{-- THIS IS THE SETTING MENU TOP RIGHT --}}
                <div class="settings-menu">
                    <div id="dark-btn">
                        <span></span>
                    </div>

                    <div class="settings-menu-inner">
                        <div class="user-profile">
                            <img src="images/profile-pic.png">
                            <div>
                                <p>Gio Reyna</p>
                                <a href="/me"> See your profile </a>
                            </div>
                        </div>
                        <hr>
                        <div class="user-profile">
                            <img src="images/feedback.png">
                            <div>
                                <p>Give feedback</p>
                                <a href="#"> Help us improve the website </a>
                            </div>
                        </div>
                        <hr>
                        <div class="settings-links">
                            <img src="images/setting.png" class="settings-icon">
                            <a href="#"> Setings & Privacy <img src="images/arrow.png"></a>
                        </div>
                        <div class="settings-links">
                            <img src="images/help.png" class="settings-icon">
                            <a href="#"> Help & Support <img src="images/arrow.png"></a>
                        </div>
                        <div class="settings-links">
                            <img src="images/display.png" class="settings-icon">
                            <a href="#"> Display & Accessibility <img src="images/arrow.png"></a>
                        </div>
                        <div class="settings-links">
                            <img src="images/logout.png" class="settings-icon">
                            <a href="#"> Logout <img src="images/arrow.png"></a>
                        </div>

                    </div>
                
                </div>
            @else
                <div class="sidebar-title">
                    <a href="/signIn"> Sign In </a>
                </div>
                <div class="sidebar-title">
                    <a href="/signUp"> Sign Up </a>
                </div>
            @endif
            
            
        </div>

    </nav>

    {{-- THIS IS THE BODY OF THE APP --}}

    <div class="container">

        @yield('content')

    </div>


    <script src={{asset("assets/script.js")}}></script>
</body>
</html>