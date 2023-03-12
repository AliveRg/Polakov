<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400;600&family=Tilt+Neon&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" @vite(['resources/sass/app.scss', 'resources/js/app.js']) </head>

<body>
    <header>
        @include('header')
    </header>
    <main>
        @yield('content')
    </main>
    <footer>

        <div class="footer-newsletter">
            <div class="container">
                <div class="newsletter-r">
                    <div class="newsletter_info">
                        <h4>Следи за новостями</h4>
                        <p>Подпишись на рассылку, чтобы узнавать об акциях и скидках самым первым.</p>
                    </div>
                    <div class="col-lg-6">
                        <form class="transparent">
                            <div class="form-inner">
                                <div class="form">
                                    <input type="email" class="form__email" placeholder="Enter your email address" />
                                    <input type="email" class="form__email" placeholder="Enter your name" />
                                    <button class="form__button">Send</button>
                                </div>
                                <div class="notice">
                                    <input type="checkbox">
                                    <span class="notice__copy">I agree to my email address being stored and uses to
                                        recieve monthly newsletter.</span>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>

    </footer>
    <div class="btn_up">
        <a href="#"><img src="./images/arrow.svg" alt=""></a>
    </div>
</body>

</html>
