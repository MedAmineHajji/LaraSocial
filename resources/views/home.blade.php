@extends('welcome')

@section('content')

@if ($connected)
<div class="main-content">

    <div class="story-gallery">

        <div class="story story1">
            <img src="images/upload.png">
            <p>Post Story</p>
        </div>

        <div class="story story2">
            <img src="images/member-1.png">
            <p>Rosa</p>
        </div>

        <div class="story story3">
            <img src="images/member-2.png">
            <p>Emil</p>
        </div>

        <div class="story story4">
            <img src="images/member-3.png">
            <p>Primera</p>
        </div>

        <div class="story story5">
            <img src="images/member-4.png">
            <p>Zahavi</p>
        </div>

    </div>

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
        <button type="button" class="btt">Post</button>

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

        <p class="post-text">If your photos aren't good enough, then you're not close enough. </p>
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

        <p class="post-text"> With the new day comes new strength and new thoughts. </p>
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

    <button type="button" class="load-more-btn">Load More</button>

</div>

<div class="right-sidebar">


        <div class="sidebar-title">
            <h4> Conversation </h4>
            <a href="/messenger"> messenger </a>
        </div>

        <div class="online-list">
            <div class="online">
                <img src="images/member-1.png">
            </div>
            <p> <a href="/profile">Rosa Lee </a></p>
        </div>

        <div class="online-list">
            <div class="online">
                <img src="images/member-2.png">
            </div>
            <p> <a href="/profile">Emil Forsberg</a></p>
        </div>

        <div class="online-list">
            <div class="online">
                <img src="images/member-3.png">
            </div>
            <p> <a href="/profile">Sasha Primera</a></p>
        </div>

        <div class="customize-theme">
            <div class="card">
                <h4>Customize your view</h4>
                <p>Manage your font size and color.</p>

                <div class="font-size">
                    <h4>Font size</h4>
                    <div>
                        <h6>Aa</h6>
                        <div class="choose-size">
                            <span class="font-size-1"></span>
                            <span class="font-size-2"></span>
                            <span class="font-size-3"></span>
                            <span class="font-size-4"></span>
                            <span class="font-size-5"></span>
                        </div>
                        <h4>Aa</h4>
                    </div>
                </div>

                <div class="color">
                    <h4>Color</h4>
                        <div class="choose-color">
                            <span class="color-1"></span>
                            <span class="color-2"></span>
                            <span class="color-3"></span>
                            <span class="color-4"></span>
                            <span class="color-5"></span>
                        </div>
                </div>

            </div>
        </div>

</div>
@else

@endif

@endsection
