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

    .notif_time{
        color:#8b8c8b;
        font-size:0.8vw !important;
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
            <p class="notif-num">{{ $notif_num }}</p>
            @endcan
        </button>
        @can('Client')
        @if($notif_num > 0)
        <div class="dropup-content">
            @foreach($notifications as $notification)
            @if(isset($notification->suggestion_id))
            <a href="{{ route('zho-suggestion.show', $notification->suggestion_id)}}">
                @elseif(isset($notification->place_id))
                <a href="{{ route('zho-place.show', $notification->place_id)}}">
                    @elseif(isset($notification->catering_id))
                    <a href="{{ route('zho-catering.show', $notification->catering_id)}}">
                        @elseif(isset($notification->entertainment_id))
                        <a href="{{ route('zho-entertainment.show', $notification->entertainment_id)}}">
                            @elseif(isset($notification->company_id))
                            <a href="{{ route('zho-company.show', $notification->company_id)}}">
                                @elseif(isset($notification->equipment_id))
                                <a href="{{ route('zho-equipment.show', $notification->equipment_id)}}">
                                    @endif
                                    <div class="notification">
                                        <div class="notif-user">
                                            <img src="/images/user/{{$notification->user->first()->image}}" alt="">
                                        </div>
                                        <div class="notif-text">
                                            <p>{{ $notification->user->first()->name }} {{ $notification->notification
                                                }}</p>
                                                <p class="notif_time">{{ $notification->created_at }}</p>
                                        </div>
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
            @if(isset($notification->suggestion_id))
            <a href="{{ route('zho-suggestion.show', $notification->suggestion_id)}}">
                @elseif(isset($notification->place_id))
                <a href="{{ route('zho-place.show', $notification->place_id)}}">
                    @elseif(isset($notification->catering_id))
                    <a href="{{ route('zho-catering.show', $notification->catering_id)}}">
                        @elseif(isset($notification->entertainment_id))
                        <a href="{{ route('zho-entertainment.show', $notification->entertainment_id)}}">
                            @elseif(isset($notification->company_id))
                            <a href="{{ route('zho-company.show', $notification->company_id)}}">
                                @elseif(isset($notification->equipment_id))
                                <a href="{{ route('zho-equipment.show', $notification->equipment_id)}}">
                                    @endif
                                    <div class="notification">
                                        <div class="notif-user">
                                            <img src="/images/user/{{$notification->user->first()->image}}" alt="">
                                        </div>
                                        <div class="notif-text">
                                            <p>{{ $notification->user->first()->name }} {{ $notification->notification
                                                }}</p>
                                            <p class="notif_time">{{ $notification->created_at }}</p>
                                        </div>
                                    </div>
                                </a>
                                @endforeach
                                @can('Admin')
                                @foreach($admin_notifications as $admin_notification)
                                <a href="{{ route('admin_verification') }}">
                                    <div class="notification">
                                        <div class="notif-user">
                                            <img src="/images/user/{{$admin_notification->user->first()->image}}"
                                                alt="">
                                        </div>
                                        <div class="notif-text">
                                            <p>{{ $admin_notification->user->first()->name }} {{
                                                $admin_notification->notification }}</p>
                                                <p class="notif_time">{{ $notification->created_at }}</p>    
                                        </div>
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
                        <img src="{{url('asset/backoffice/empty.png')}}" alt="">
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