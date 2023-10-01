<link rel="stylesheet" href={{asset("assets/profiles.css")}}>
@extends('welcome')

@section('content')

@if ($connected)
    <div class="profile-container">
        <img src="images/play.png" class="cover-img">
        <div class="profile-details">
            <div class="pd-left">
                <div class="pd-row">
                    <img src="images/pla.png" class="pd-img">
                    <div>
                        <h3> Laureen James </h3>
                        <p> 88 Friends - 12 mutual</p>
                        <img src="images/member-1.png">
                        <img src="images/member-2.png">
                        <img src="images/member-3.png">
                        <img src="images/member-4.png">
                    </div>
                </div>
            </div>
            <div class="pd-right">
                <button type="button"><img src="images/add-friends.png">Friend</button>
                <button type="button"><img src="images/message.png">Message</button>
                <br>
                <a href="#"><img src="images/more.png"></a>
            </div>


        </div>

        <div class="profile-info">
             <div class="info-col"> 
                <div class="profile-intro">
                    <h3> Intro </h3>
                    <p class="intro-text">Belief in yourself makes you achieve the impossibilities in life<img src="images/feeling.png"></p>
                    <hr>
                    <ul>
                        <li> <img src="images/profile-job.png"> Doctor at St.Mark's Hospital</li>
                        <li><img src="images/profile-study.png">Studied at Harvard University</li>
                        <li><img src="images/profile-study.png">Went to Med school</li>
                        <li><img src="images/profile-home.png">Lives in Algiers</li>
                        <li><img src="images/profile-location.png">Algeria, Africa</li>
                    </ul>
                </div>

                <div class="profile-intro">

                    <div class="title-box">
                    <h3>Photos</h3>
                    <a href="#">All Photos</a>
                    </div>

                    <div class="photo-box">
                        <div><img src="images/phot.jpg"></div>
                        <div><img src="images/pho.png"></div>
                        
                    </div>
                </div>

                <div class="profile-intro">

                    <div class="title-box">
                    <h3>Friends</h3>
                    <a href="#">All Friends</a>
                    </div>
                    <p>66 (10 mutual)</p>
                    <div class="friends-box">
                        <div><img src="images/member-1.png"><p> Rosa L</p></div>
                        <div><img src="images/member-2.png"><p> James B</p></div>
                        <div><img src="images/member-3.png"><p> Mary H</p></div>
                        <div><img src="images/member-4.png"><p>Moses R</p></div>
                        <div><img src="images/member-5.png"><p>Josh D</p></div>
                        <div><img src="images/member-6.png"><p>Allexia P</p></div>
                       

                        
                    </div>
                </div>


            </div>
            

        </div>


    </div>
@else
    <h1>Please connect to your account to see the content</h1>
@endif

@endsection
