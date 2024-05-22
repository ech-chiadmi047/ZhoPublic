<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<style>
    .alert {
        display: flex;
        align-items: center;
        padding: 0.55rem 0.65rem 0.55rem 0.75rem;
        border-radius: 1rem;
        min-width: 400px;
        justify-content: space-between;
        margin-bottom: 2rem;
        box-shadow:
            0px 3.2px 13.8px rgba(0, 0, 0, 0.02),
            0px 7.6px 33.3px rgba(0, 0, 0, 0.028),
            0px 14.4px 62.6px rgba(0, 0, 0, 0.035),
            0px 25.7px 111.7px rgba(0, 0, 0, 0.042),
            0px 48px 208.9px rgba(0, 0, 0, 0.05),
            0px 115px 500px rgba(0, 0, 0, 0.07)
    }

    .content {
        display: flex;
        align-items: center;
        font-size: 1.5vw;
    }

    .icon_alert {
        padding: 0.5rem;
        margin-right: 1rem;
        border-radius: 39% 61% 42% 58% / 50% 51% 49% 50%;
        box-shadow:
            0px 3.2px 13.8px rgba(0, 0, 0, 0.02),
            0px 7.6px 33.3px rgba(0, 0, 0, 0.028),
            0px 14.4px 62.6px rgba(0, 0, 0, 0.035),
            0px 25.7px 111.7px rgba(0, 0, 0, 0.042),
            0px 48px 208.9px rgba(0, 0, 0, 0.05),
            0px 115px 500px rgba(0, 0, 0, 0.07)
    }

    .close {
        background-color: transparent;
        border: none;
        outline: none;
        transition: all 0.2s ease-in-out;
        padding: 0.75rem;
        border-radius: 0.5rem;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .close:hover {
        background-color: #fff;
    }

    .success {
        background-color: rgba(62, 189, 97, 0.2);
        border: 0.2vw solid #3ebd61;
        width: 90%;
        right: 5%;
        position: fixed;
        top: 2vw;
        z-index: 100000;
    }

    .success .icon_alert {
        background-color: #3ebd61;
    }
</style>

<div class="success alert" id="myalert">
    <div class="content">
        <div class="icon_alert">
            <svg width="30" height="30" id="Layer_1" style="enable-background:new 0 0 128 128;" version="1.1"
                viewBox="0 0 128 128" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <g>
                    <circle fill="#fff" cx="64" cy="64" r="64" />
                </g>
                <g>
                    <path fill="#3EBD61"
                        d="M54.3,97.2L24.8,67.7c-0.4-0.4-0.4-1,0-1.4l8.5-8.5c0.4-0.4,1-0.4,1.4,0L55,78.1l38.2-38.2   c0.4-0.4,1-0.4,1.4,0l8.5,8.5c0.4,0.4,0.4,1,0,1.4L55.7,97.2C55.3,97.6,54.7,97.6,54.3,97.2z" />
                </g>
            </svg>
        </div>
        <p>Done successfully</p>
    </div>
</div>

<script>
    setTimeout(function () {
        $('#myalert').fadeOut('fast');
    }, 1500);
</script>