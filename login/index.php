<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main-container container-fluid">
        <div class="for-coach section">
            <header>
                <button class="btn btn-success login-coach-btn">login</button>
                <span>
                    <h1>Login As Coach</h1>
                </span>
                <button class="btn btn-danger signup-coach-btn">signup</button>
            </header>
            <div class="main-form">
            </div>
        </div>
        <div class="for-player section">
            <header>
                <button class="btn btn-success login-player-btn">login</button>
                <span>
                    <h1>Login As Player</h1>
                </span>
                <button class="btn btn-danger  signup-player-btn">signup</button>
            </header>
            <div class="main-form">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
    let lCoach, sCoach, lPlayer, splayer;
    lCoach = $('.login-coach-btn');
    sCoach = $('.signup-coach-btn');
    lPlayer = $('.login-player-btn');
    splayer = $('.signup-player-btn');
    if (lCoach.on('click') || sCoach.on('click')) {
        $('.for-coach').on('click', function() {
            $('.for-player').css('flex-basis', '5vh');
            $('.for-player header').css('flex-basis', '100%');
            $('.for-player .main-form').css('flex-basis', '0%');
            $('.for-coach').css('flex-basis', '93vh');

            $('.for-coach header').css('flex-basis', '5%');
            $('.for-coach .main-form').css('flex-basis', '95%');
            $.ajax({
                type: "POST",
                url: "../contents/coach-login.php",
                success: function(response) {
                    $('.for-coach .main-form').html(response);
                }
            })

        });
    }
    if (lPlayer.on('click') || sPlayer.on('click')) {
      $('.for-player').on('click', function() {
            $('.for-coach').css('flex-basis', '5vh');
            $('.for-coach header').css('flex-basis', '100%');
            $('.for-coach .main-form').css('flex-basis', '0%');
            $('.for-coach .main-form').html('');
            $('.for-player').css('flex-basis', '93vh');

            $('.for-player header').css('flex-basis', '5%');
            $('.for-player .main-form').css('flex-basis', '95%');


        });
    }
    $(document).ready(function() {
        // $('.for-coach').on('click', function() {
        //     $('.for-player').css('flex-basis', '5vh');
        //     $('.for-player header').css('flex-basis', '100%');
        //     $('.for-player .main-form').css('flex-basis', '0%');
        //     $('.for-coach').css('flex-basis', '93vh');

        //     $('.for-coach header').css('flex-basis', '5%');
        //     $('.for-coach .main-form').css('flex-basis', '95%');
        //     $.ajax({
        //       type: "POST",
        //       url: "../contents/coach-login.php",
        //       success: function(response) {
        //           $('.for-coach .main-form').html(response);
        //       }
        //     })

        // });
        // $('.for-player').on('click', function() {
        //     $('.for-coach').css('flex-basis', '5vh');
        //     $('.for-coach header').css('flex-basis', '100%');
        //     $('.for-coach .main-form').css('flex-basis', '0%');
        //     $('.for-coach .main-form').html('');
        //     $('.for-player').css('flex-basis', '93vh');

        //     $('.for-player header').css('flex-basis', '5%');
        //     $('.for-player .main-form').css('flex-basis', '95%');


        // });

    });

    // isOpen=false;
    // $('.section').on("click", function(e){
    //     e.style.height="98%";
    // });
    </script>
</body>

</html>