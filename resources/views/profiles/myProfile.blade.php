@extends('welcome')


@section('content')

@if ($connected)
    <link rel="stylesheet" href={{asset("assets/profile.css")}}>
    
    <div class="profile-container">
        <img src="images/cover.png" class="cover-img">
        <div class="profile-details">
            <div class="pd-left">
                <div class="pd-row">
                    <img src="images/profile-pic.png" class="pd-img">
                    <div>
                        <h3> Gio Reyna </h3>
                        <p> 120 Friends </p>
                        <img src="images/member-1.png">
                        <img src="images/member-2.png">
                        <img src="images/member-3.png">
                        <img src="images/member-4.png">
                    </div>
                </div>
            </div>
            <div class="pd-right">
                <button type="button"><img src="images/message.png">Edit Profile</button>
                {{-- <br>
                <a href="#"><img src="images/more.png"></a> --}}
            </div>


        </div>

        <div class="profile-info">
            <div class="info-col"> 
                <div class="profile-intro">
                    <h3> Intro </h3>
                    <p class="intro-text">Belief in yourself makes you achieve the impossibilities in life<img src="images/feeling.png"></p>
                    <hr>
                    <ul>
                        <li> <img src="images/profile-job.png"> Head of Marketing NMS</li>
                        <li><img src="images/profile-study.png">Studied at Beltmore University</li>
                        <li><img src="images/profile-study.png">Went to Med school</li>
                        <li><img src="images/profile-home.png">Lives in Buenos Aires</li>
                        <li><img src="images/profile-location.png">Argentina, South America</li>
                    </ul>
                </div>

                <div class="profile-intro">

                    <div class="title-box">
                    <h3>Photos</h3>
                    <a href="#">All Photos</a>
                    </div>

                    <div class="photo-box">
                        <div><img src="images/photo1.png"></div>
                        <div><img src="images/photo2.png"></div>
                        <div><img src="images/photo3.png"></div>
                        <div><img src="images/photo4.png"></div>
                        <div><img src="images/photo5.png"></div>
                        <div><img src="images/photo6.png"></div>
                    </div>
                </div>

                <div class="profile-intro">

                    <div class="title-box">
                    <h3>Friends</h3>
                    <a href="#">All Friends</a>
                    </div>
                    <p>120 (15 mutual)</p>
                    <div class="friends-box">
                        <div><img src="images/member-1.png"><p> Rosa L</p></div>
                        <div><img src="images/member-2.png"><p> James B</p></div>
                        <div><img src="images/member-3.png"><p> Mary H</p></div>
                        <div><img src="images/member-4.png"><p>Moses R</p></div>
                        <div><img src="images/member-5.png"><p>Josh D</p></div>
                        <div><img src="images/member-6.png"><p>Allexia P</p></div>
                        <div><img src="images/member-7.png"><p>Antony S</p></div>
                        <div><img src="images/member-8.png"><p>Danah W</p></div>
                        <div><img src="images/member-9.png"><p>Richard A</p></div>

                        
                    </div>
                </div>


            </div>

            <div class="post-col"> 
                <div class="write-post-container">
                    <div class="user-profile">
                        <img src="images/profile-pic.png">
                        <div>
                            <p>Gio Reyna</p>
                            <small>Public <i class="fa-solid fa-caret-down"></i> </small>
                        </div>
                    </div>

                    <div class="post-input-container">
                        <textarea rows="5" placeholder="What's on your mind ?"></textarea>
                    </div>

                </div>
                
                <div class="post-container">

                    <div class="post-row">
                        <div class="user-profile">
                            <img src="images/profile-pic.png">
                            <div>
                                <p>Gio Reyna</p>
                                <span> March 24 2002, 12:00 am </span>
                            </div>
                        </div>
                        <a href="#"><i class="fa-solid fa-ellipsis-v"></i></a>
                    </div>

                    <p class="post-text">Oculus is a new application that focuses on bringing people together. Follow at <a href="#">@Oculus</a>
                        <a href="#">#SocialNetworking</a>
                    </p>
                    <img src="images/feed-image-1.png" class="post-img">

                    <div class="post-row">

                        <div class="activity-icons">
                            <div><img src="images/like-blue.png"> 120 </div>
                            <div><img src="images/share.png"> 45 </div>
                            <div><img src="images/comments.png"> 20 </div>
                            
                        </div>

                        <div class="post-profile-icon">
                            <img src="images/profile-pic.png"> <i class="fa-solid fa-caret-down"></i>
                        </div>

                    </div>

                </div>

                <div class="post-container">

                    <div class="post-row">
                        <div class="user-profile">
                            <img src="images/profile-pic.png">
                            <div>
                                <p>Gio Reyna</p>
                                <span> Aprtil 24 2012, 2:00 pm </span>
                            </div>
                        </div>
                        <a href="#"><i class="fa-solid fa-ellipsis-v"></i></a>
                    </div>

                    <p class="post-text">Do not be embarrased by your failures, learn from them and start again.</p>
                    <img src="images/feed-image-2.png" class="post-img">

                    <div class="post-row">

                        <div class="activity-icons">
                            <div><img src="images/like.png"> 152 </div>
                            <div><img src="images/share.png"> 23 </div>
                            <div><img src="images/comments.png"> 66 </div>
                            
                        </div>

                        <div class="post-profile-icon">
                            <img src="images/profile-pic.png"> <i class="fa-solid fa-caret-down"></i>
                        </div>

                    </div>

                </div>

                <div class="post-container">

                    <div class="post-row">
                        <div class="user-profile">
                            <img src="images/profile-pic.png">
                            <div>
                                <p>Gio Reyna</p>
                                <span> May 21 2022, 11:00 am </span>
                            </div>
                        </div>
                        <a href="#"><i class="fa-solid fa-ellipsis-v"></i></a>
                    </div>

                    <p class="post-text">If your photos aren't good enough, then you're not close enough.</p>
                    <img src="images/feed-image-3.png" class="post-img">

                    <div class="post-row">

                        <div class="activity-icons">
                            <div><img src="images/like.png"> 12 </div>
                            <div><img src="images/share.png"> 13 </div>
                            <div><img src="images/comments.png"> 22 </div>
                            
                        </div>

                        <div class="post-profile-icon">
                            <img src="images/profile-pic.png"> <i class="fa-solid fa-caret-down"></i>
                        </div>

                    </div>

                </div>

                <div class="post-container">

                    <div class="post-row">
                        <div class="user-profile">
                            <img src="images/profile-pic.png">
                            <div>
                            <p>Gio Reyna</p>
                            <span> March 24 2002, 12:00 am </span>
                            </div>
                        </div>
                    <a href="#"><i class="fa-solid fa-ellipsis-v"></i></a>
                    </div>

                    <p class="post-text">With the new day comes new strength and new thoughts. </p>
                    <img src="images/feed-image-4.png" class="post-img">

                    <div class="post-row">

                        <div class="activity-icons">
                            <div><img src="images/like.png"> 152 </div>
                            <div><img src="images/share.png"> 23 </div>
                            <div><img src="images/comments.png"> 66 </div>
                            
                        </div>

                        <div class="post-profile-icon">
                            <img src="images/profile-pic.png"> <i class="fa-solid fa-caret-down"></i>
                        </div>

                    </div>

                </div>

                <div class="post-container">

                    <div class="post-row">
                        <div class="user-profile">
                        <img src="images/profile-pic.png">
                            <div>
                                <p>Gio Reyna</p>
                                <span> March 24 2002, 12:00 am </span>
                            </div>
                        </div>
                    <a href="#"><i class="fa-solid fa-ellipsis-v"></i></a>
                    </div>

                <p class="post-text">Life should always be about spreading love to another, that's what Oculus is about.<a href="#">@Oculus</a>
                    <a href="#">#SocialNetworking</a>
                </p>
                <img src="images/feed-image-5.png" class="post-img">

                <div class="post-row">

                    <div class="activity-icons">
                        <div><img src="images/like.png"> 152 </div>
                        <div><img src="images/share.png"> 23 </div>
                        <div><img src="images/comments.png"> 66 </div>
                        
                    </div>

                    <div class="post-profile-icon">
                        <img src="images/profile-pic.png"> <i class="fa-solid fa-caret-down"></i>
                    </div>

                </div>

                </div>
                
            </div>


        </div>


    </div>
@else
    <h1>please connect to your account</h1>
@endif

@endsection

