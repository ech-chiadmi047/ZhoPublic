<style>
    .dropbtn {
        color: white;
        padding: 1vw;
        border: 0.1vw solid #03004d;
        border-radius: 50%;
        position: relative;
        box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
    }

    .dropup {
        position: relative;
        display: inline-block;
    }

    .dropup-content {
        display: none;
        position: absolute;
        background-color: white;
        min-width: 23vw;
        bottom: 4vw;
        z-index: 1;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
    }

    .dropup-content a {
        color: black;
        padding: 1vw 2vw;
        text-decoration: none;
        display: block;
    }

    .dropup-content a:hover {
        background-color: #ccc;
        color: #03004d;
    }

    .dropup:hover .dropup-content {
        display: block;
    }

    .dropup:hover .notif-img {
        transform: scale(1.1);
    }

    .dropup:hover .notif-num {
        opacity: 0;
    }

    /* position */
    .dropup-global {
        position: fixed;
        bottom: 1vw;
        left: 1vw;
        z-index: 1000000;
    }

    /* icon */
    .notif-img {
        width: 2vw;
    }

    /* NUM */
    .notif-num {
        background-color: #da2400;
        border-radius: 50%;
        width: 1.4vw;
        height: 1.4vw;
        font-size: 0.8vw;
        position: absolute;
        top: 0;
        right: 0;
        font-weight: 900 !important;
    }

    /* NOTIFICATION */

    .notification {
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
    }

    .notif-user {
        width: 20%;
    }

    .notif-user img {
        width: 3vw;
        height: 3vw;
        border-radius: 50%;
        object-fit: cover;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
    }

    .notif-text {
        width: 80%;
    }

    .notif-text p {
        font-size: 1.4vw;
        text-align: left;
    }

    .notif_time {
        color: #8b8c8b;
        font-size: 0.8vw !important;
    }

    /* SUBMIT UPDATE */

    .submit_notif{
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        opacity: 0;
    }
</style>

<div class="dropup-global">
    <div class="dropup">
        <button class="dropbtn">
            <img src="{{url('svg/notif.svg')}}" alt="clock" class="notif-img">
            @can('Admin')
            <p class="notif-num">{{ $admin_num }}</p>
            @endcan
            @can('Client')
            <p class="notif-num">{{ $client_num }}</p>
            @endcan
        </button>
        @can('Client')
        @if($client_num > 0)
        <div class="dropup-content">
            @foreach($notifications as $notification)
            <a href="">
                <div class="notification">
                    <div class="notif-user">
                        <img src="/images/user/{{$notification->user->image}}" alt="">
                    </div>
                    <div class="notif-text">
                        <p>{{ $notification->user->name }} {{ $notification->notification
                            }}</p>
                        <p class="notif_time">{{ $notification->created_at }}</p>
                    </div>
                    <form action="{{ route('notification.update', $notification->id)}}" method="post">
                        @csrf
                        @method('put')
                    <button class="submit_notif">submit</button>
                    </form>
                </div>
            </a>
            @endforeach
            @foreach($client_notifications as $client_notification)
            <a href="">
                <div class="notification">
                    <div class="notif-user">
                        <img src="{{url('svg/verified-user.svg')}}" alt="">
                    </div>
                    <div class="notif-text">
                        <p>{{ $client_notification->notification }}</p>
                        <p class="notif_time">{{ $client_notification->created_at }}</p>
                    </div>
                    <form action="{{ route('notification.update', $client_notification->id)}}" method="post">
                        @csrf
                        @method('put')
                    <button class="submit_notif">submit</button>
                    </form>
                </div>
            </a>
            @endforeach
        </div>
        @else
        <div class="dropup-content">
            <a href="">
                <div class="notification">
                    <div class="notif-user">
                        <img src="{{url('svg/sad.svg')}}" alt="">
                    </div>
                    <div class="notif-text">
                        <p>You don't have notifications</p>
                    </div>
                </div>
            </a>
        </div>
        @endif
        @endcan
        @can('Admin')
        @if($admin_num > 0)
        <div class="dropup-content">
            @foreach($notifications as $notification)
            <a href="">
                <div class="notification">
                    <div class="notif-user">
                        <img src="/images/user/{{$notification->user->image}}" alt="">
                    </div>
                    <div class="notif-text">
                        <p>{{ $notification->user->name }} {{ $notification->notification
                            }}</p>
                        <p class="notif_time">{{ $notification->created_at }}</p>
                    </div>
                    <form action="{{ route('notification.update', $notification->id)}}" method="post">
                        @csrf
                        @method('put')
                    <button class="submit_notif">submit</button>
                    </form>
                </div>
            </a>
            @endforeach
            @can('Admin')
            @foreach($admin_notifications as $admin_notification)
            <a href="">
                <div class="notification">
                    <div class="notif-user">
                        <img src="/images/user/{{$admin_notification->user->image}}" alt="">
                    </div>
                    <div class="notif-text">
                        <p>{{ $admin_notification->user->name }} {{
                            $admin_notification->notification }}</p>
                        <p class="notif_time">{{ $admin_notification->created_at }}</p>
                    </div>
                    <form action="{{ route('notification.update', $admin_notification->id)}}" method="post">
                        @csrf
                        @method('put')
                    <button class="submit_notif">submit</button>
                    </form>
                </div>
            </a>
            @endforeach
            @foreach($message_notifications as $message_notification)
            <a href="">
                <div class="notification">
                    <div class="notif-user">
                        <img src="/images/user/{{$message_notification->user->image}}" alt="">
                    </div>
                    <div class="notif-text">
                        <p>{{ $message_notification->user->name }} {{
                            $message_notification->notification }}</p>
                        <p class="notif_time">{{ $message_notification->created_at }}</p>
                    </div>
                    <form action="{{ route('notification.update', $message_notification->id)}}" method="post">
                        @csrf
                        @method('put')
                    <button class="submit_notif">submit</button>
                    </form>
                </div>
            </a>
            @endforeach
            @endcan
        </div>
        @else
        <div class="dropup-content">
            <a href="">
                <div class="notification">
                    <div class="notif-user">
                        <img src="{{url('svg/sad.svg')}}" alt="">
                    </div>
                    <div class="notif-text">
                        <p>You don't have notifications</p>
                    </div>
                </div>
            </a>
        </div>
        @endif
        @endcan
    </div>
</div>