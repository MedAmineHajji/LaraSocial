@extends('front_office.layout')

@section('content')
    

    <section>
        <div class="gap gray-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row" id="page-contents">
                            <div class="col-lg-3">
                                <aside class="sidebar static">
                                    <div class="widget">
                                        <h4 class="widget-title">Shortcuts</h4>
                                        <ul class="naves">
                                            <li>
                                                <i class="ti-clipboard"></i>
                                                <a href="newsfeed.html" title="">News feed</a>
                                            </li>
                                            <li>
                                                <i class="ti-mouse-alt"></i>
                                                <a href="inbox.html" title="">Inbox</a>
                                            </li>
                                            <li>
                                                <i class="ti-files"></i>
                                                <a href="fav-page.html" title="">My pages</a>
                                            </li>
                                            <li>
                                                <i class="ti-user"></i>
                                                <a href="timeline-friends.html" title="">friends</a>
                                            </li>
                                            <li>
                                                <i class="ti-image"></i>
                                                <a href="timeline-photos.html" title="">images</a>
                                            </li>
                                            <li>
                                                <i class="ti-video-camera"></i>
                                                <a href="timeline-videos.html" title="">videos</a>
                                            </li>
                                            <li>
                                                <i class="ti-comments-smiley"></i>
                                                <a href="messages.html" title="">Messages</a>
                                            </li>
                                            <li>
                                                <i class="ti-bell"></i>
                                                <a href="notifications.html" title="">Notifications</a>
                                            </li>
                                            <li>
                                                <i class="ti-share"></i>
                                                <a href="people-nearby.html" title="">People Nearby</a>
                                            </li>
                                            <li>
                                                <i class="fa fa-bar-chart-o"></i>
                                                <a href="insights.html" title="">insights</a>
                                            </li>
                                            <li>
                                                <i class="ti-power-off"></i>
                                                <a href="landing.html" title="">Logout</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Shortcuts -->
                                    <div class="widget">
                                        <h4 class="widget-title">Profile intro</h4>
                                        <ul class="short-profile">
                                            <li>
                                                <span>about</span>
                                                <p>
                                                    Hi, i am jhon kates, i am 32 years old and worked
                                                    as a web developer in microsoft company.
                                                </p>
                                            </li>
                                            <li>
                                                <span>fav tv show</span>
                                                <p>
                                                    Hi, i am jhon kates, i am 32 years old and worked
                                                    as a web developer in microsoft company.
                                                </p>
                                            </li>
                                            <li>
                                                <span>favourit music</span>
                                                <p>
                                                    Hi, i am jhon kates, i am 32 years old and worked
                                                    as a web developer in microsoft company.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- profile intro widget -->
                                </aside>
                            </div>
                            <!-- sidebar -->
                            <div class="col-lg-6">
                                <div class="central-meta">
                                    <div class="groups">
                                        <span><i class="fa fa-users"></i> Events</span>
                                    </div>
                                    <ul class="nearby-contct">
                                        @foreach ($events as $event)
                                            <li>
                                                <div class="nearly-pepls">
                                                    <figure>
                                                        <a href="time-line.html" title=""><img
                                                                src="{{ asset('images/front_office_images/group1.jpg') }}"
                                                                alt="" /></a>
                                                    </figure>
                                                    <div class="pepl-info">
                                                        <h4>
                                                            <a href="time-line.html"
                                                                title="">{{ $event->title }}</a>
                                                        </h4>
                                                        <span>{{ $event->description }}</span>
                                                        <em>{{ $event->end_date }}</em>
                                                        <div class="group-buttons">
                                                            <!-- Update Button (Redirect to Edit View) -->
                                                            <a href="{{ route('events.edit', $event->id) }}"
                                                                title="" class="btn btn-primary btn-sm"
                                                                data-ripple="">Update</a>
                                                            <!-- Delete Button (Delete the Event) -->
                                                            <form action="{{ route('events.destroy', $event->id) }}"
                                                                method="POST" style="display: inline-block;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger btn-sm"
                                                                    onclick="return confirm('Are you sure you want to delete this event?')">Delete</button>
                                                            </form>
                                                            <!-- Details Button (View Event Details) -->
                                                            <a href="{{ route('events.show', $event->id) }}"
                                                                title="" class="btn btn-info btn-sm"
                                                                data-ripple="">Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach


                                    </ul>
                                    <div class="lodmore">
                                        <button class="btn-view btn-load-more"></button>
                                    </div>
                                </div>
                                <!-- photos -->
                            </div>
                            <!-- centerl meta -->
                            <div class="col-lg-3">
                                <aside class="sidebar static">
                                    <div class="widget friend-list stick-widget">
                                        <h4 class="widget-title">Friends</h4>
                                        <div id="searchDir"></div>
                                        <ul id="people-list" class="friendz-list">
                                            <li>
                                                <figure>
                                                    <img src="images/resources/friend-avatar.jpg" alt="" />
                                                    <span class="status f-online"></span>
                                                </figure>
                                                <div class="friendz-meta">
                                                    <a href="time-line.html">bucky barnes</a>
                                                    <i><a href="https://wpkixx.com/cdn-cgi/l/email-protection"
                                                            class="__cf_email__"
                                                            data-cfemail="c2b5abacb6a7b0b1adaea6a7b082a5afa3abaeeca1adaf">[email&#160;protected]</a></i>
                                                </div>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="images/resources/friend-avatar2.jpg" alt="" />
                                                    <span class="status f-away"></span>
                                                </figure>
                                                <div class="friendz-meta">
                                                    <a href="time-line.html">Sarah Loren</a>
                                                    <i><a href="https://wpkixx.com/cdn-cgi/l/email-protection"
                                                            class="__cf_email__"
                                                            data-cfemail="2f4d4e5d414a5c6f48424e4643014c4042">[email&#160;protected]</a></i>
                                                </div>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="images/resources/friend-avatar3.jpg" alt="" />
                                                    <span class="status f-off"></span>
                                                </figure>
                                                <div class="friendz-meta">
                                                    <a href="time-line.html">jason borne</a>
                                                    <i><a href="https://wpkixx.com/cdn-cgi/l/email-protection"
                                                            class="__cf_email__"
                                                            data-cfemail="90faf1e3fffef2d0f7fdf1f9fcbef3fffd">[email&#160;protected]</a></i>
                                                </div>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="images/resources/friend-avatar4.jpg" alt="" />
                                                    <span class="status f-off"></span>
                                                </figure>
                                                <div class="friendz-meta">
                                                    <a href="time-line.html">Cameron diaz</a>
                                                    <i><a href="https://wpkixx.com/cdn-cgi/l/email-protection"
                                                            class="__cf_email__"
                                                            data-cfemail="f19b90829e9f93b1969c90989ddf929e9c">[email&#160;protected]</a></i>
                                                </div>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="images/resources/friend-avatar5.jpg" alt="" />
                                                    <span class="status f-online"></span>
                                                </figure>
                                                <div class="friendz-meta">
                                                    <a href="time-line.html">daniel warber</a>
                                                    <i><a href="https://wpkixx.com/cdn-cgi/l/email-protection"
                                                            class="__cf_email__"
                                                            data-cfemail="88e2e9fbe7e6eac8efe5e9e1e4a6ebe7e5">[email&#160;protected]</a></i>
                                                </div>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="images/resources/friend-avatar6.jpg" alt="" />
                                                    <span class="status f-away"></span>
                                                </figure>
                                                <div class="friendz-meta">
                                                    <a href="time-line.html">andrew</a>
                                                    <i><a href="https://wpkixx.com/cdn-cgi/l/email-protection"
                                                            class="__cf_email__"
                                                            data-cfemail="e882899b87868aa88f85898184c68b8785">[email&#160;protected]</a></i>
                                                </div>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="images/resources/friend-avatar7.jpg" alt="" />
                                                    <span class="status f-off"></span>
                                                </figure>
                                                <div class="friendz-meta">
                                                    <a href="time-line.html">amy watson</a>
                                                    <i><a href="https://wpkixx.com/cdn-cgi/l/email-protection"
                                                            class="__cf_email__"
                                                            data-cfemail="e58f84968a8b87a58288848c89cb868a88">[email&#160;protected]</a></i>
                                                </div>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="images/resources/friend-avatar5.jpg" alt="" />
                                                    <span class="status f-online"></span>
                                                </figure>
                                                <div class="friendz-meta">
                                                    <a href="time-line.html">daniel warber</a>
                                                    <i><a href="https://wpkixx.com/cdn-cgi/l/email-protection"
                                                            class="__cf_email__"
                                                            data-cfemail="4b212a382425290b2c262a222765282426">[email&#160;protected]</a></i>
                                                </div>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="images/resources/friend-avatar2.jpg" alt="" />
                                                    <span class="status f-away"></span>
                                                </figure>
                                                <div class="friendz-meta">
                                                    <a href="time-line.html">Sarah Loren</a>
                                                    <i><a href="https://wpkixx.com/cdn-cgi/l/email-protection"
                                                            class="__cf_email__"
                                                            data-cfemail="97f5f6e5f9f2e4d7f0faf6fefbb9f4f8fa">[email&#160;protected]</a></i>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="chat-box">
                                            <div class="chat-head">
                                                <span class="status f-online"></span>
                                                <h6>Bucky Barnes</h6>
                                                <div class="more">
                                                    <span><i class="ti-more-alt"></i></span>
                                                    <span class="close-mesage"><i class="ti-close"></i></span>
                                                </div>
                                            </div>
                                            <div class="chat-list">
                                                <ul>
                                                    <li class="me">
                                                        <div class="chat-thumb">
                                                            <img src="images/resources/chatlist1.jpg" alt="" />
                                                        </div>
                                                        <div class="notification-event">
                                                            <span class="chat-message-item">
                                                                Hi James! Please remember to buy the food
                                                                for tomorrow! I’m gonna be handling the
                                                                gifts and Jake’s gonna get the drinks
                                                            </span>
                                                            <span class="notification-date"><time
                                                                    datetime="2004-07-24T18:18"
                                                                    class="entry-date updated">Yesterday at
                                                                    8:10pm</time></span>
                                                        </div>
                                                    </li>
                                                    <li class="you">
                                                        <div class="chat-thumb">
                                                            <img src="images/resources/chatlist2.jpg" alt="" />
                                                        </div>
                                                        <div class="notification-event">
                                                            <span class="chat-message-item">
                                                                Hi James! Please remember to buy the food
                                                                for tomorrow! I’m gonna be handling the
                                                                gifts and Jake’s gonna get the drinks
                                                            </span>
                                                            <span class="notification-date"><time
                                                                    datetime="2004-07-24T18:18"
                                                                    class="entry-date updated">Yesterday at
                                                                    8:10pm</time></span>
                                                        </div>
                                                    </li>
                                                    <li class="me">
                                                        <div class="chat-thumb">
                                                            <img src="images/resources/chatlist1.jpg" alt="" />
                                                        </div>
                                                        <div class="notification-event">
                                                            <span class="chat-message-item">
                                                                Hi James! Please remember to buy the food
                                                                for tomorrow! I’m gonna be handling the
                                                                gifts and Jake’s gonna get the drinks
                                                            </span>
                                                            <span class="notification-date"><time
                                                                    datetime="2004-07-24T18:18"
                                                                    class="entry-date updated">Yesterday at
                                                                    8:10pm</time></span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <form class="text-box">
                                                    <textarea placeholder="Post enter to post..."></textarea>
                                                    <div class="add-smiles">
                                                        <span title="add icon" class="em em-expressionless"></span>
                                                    </div>
                                                    <div class="smiles-bunch">
                                                        <i class="em em---1"></i>
                                                        <i class="em em-smiley"></i>
                                                        <i class="em em-anguished"></i>
                                                        <i class="em em-laughing"></i>
                                                        <i class="em em-angry"></i>
                                                        <i class="em em-astonished"></i>
                                                        <i class="em em-blush"></i>
                                                        <i class="em em-disappointed"></i>
                                                        <i class="em em-worried"></i>
                                                        <i class="em em-kissing_heart"></i>
                                                        <i class="em em-rage"></i>
                                                        <i class="em em-stuck_out_tongue"></i>
                                                    </div>
                                                    <button type="submit"></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- friends list sidebar -->
                                </aside>
                            </div>
                            <!-- sidebar -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>







    {{-- <div class="container">
    <h1>Events</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
            <tr>
                <td>{{ $event->id }}</td>
                <td>{{ $event->title }}</td>
                <td>{{ $event->description }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div> --}}
@endsection
