<style>
    .footer-auth {
        width: 100%;
        background-image: url('../asset/backoffice/addpost-bg.png');
        background-size: 100%;
        padding: 1vw;
    }

    .quote-auth {
        font-size: 3vw;
        color: #03004d;
        text-align: center;
    }

    .social-media-auth {
        display: flex;
        justify-content: space-between;
        width: fit-content;
        flex-direction: column;
    }

    .social-media-auth p {
        color: #da2400;
        font-size: 2vw;
        text-align: center;
    }

    .social-media-icons-w-auth {
        width: 10vw;
        display: block;
        margin: auto;
    }

    .social-media-icons-auth {
        display: flex;
        justify-content: space-between;
    }

    .sm-icon-auth {
        width: 3.5vw;
        display: block;
        margin: auto;
    }

    .sm-icon-auth:hover {
        transform: scale(1.1);
    }

    .white-auth{
        background-color: rgb(255, 255, 255,0.7);
        padding: 1vw;
        position: relative;
    }

    .logo-footer-auth{
        position: absolute;
        bottom: 1vw;
        right: 1vw;
        width: 6vw;
    }
</style>

<!-- FOOTEER -->
<div class="footer-auth">
    <div class="white-auth">
        <div class="quote-auth">
            <p>NEVER, EVER UNDERESTIMATE THE IMPORTANCE OF HAVING FUN.</p>
        </div>
        <div class="social-media-auth">
            <p>Keep Your Feed Fresh with Us</p>
            <div class="social-media-icons-w-auth">
                <div class="social-media-icons-auth">
                    <a href=""><img src="{{url('svg/fbauth.svg')}}" class='sm-icon-auth' /></a>
                    <a href=""><img src="{{url('svg/wtsauth.svg')}}" class='sm-icon-auth' /></a>
                    <a href=""><img src="{{url('svg/instaauth.svg')}}" class='sm-icon-auth' /></a>
                </div>
            </div>
        </div>
        <a href=""><img src="{{url('asset/home/zho-logo.png')}}" class='logo-footer-auth' /></a>
    </div>
</div>