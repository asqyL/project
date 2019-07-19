<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LFG Team</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">

        <!-- Styles -->

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif



                <div class="flex">

                    <div class="create_team">

                        <div class="guardian_btn"><a href="#">Player</a></div>
                        <div class="create_fireteam1"><a href="#">Create Team</a></div>
                        <div class="my_fireteam"><a href="#">My Team</a></div>

                    </div>

                </div>

                <div class="flex">
                    <div class="search_team">
                        <div>
                            <select class="m_st" name="platform" id="">
                                <option>All Platforms</option>
                                <option>PlayStation4</option>
                                <option>Xbox One</option>
                                <option>PC</option>
                            </select>

                            <input class="m_lft" type="text" placeholder="Search Team"  minlength="5" maxlength="50">

                            <select class="m_st" name="activites" id="">
                                <option value="">All Activites</option>
                                <option value="">Crusible</option>
                                <option value="">Gambit</option>
                                <option value="">Raid</option>
                                <option value="">Nightfall</option>
                                <option value="">Other PvE</option>
                            </select>

                            <select class="m_st" name="rooms_lang" id="">
                                <option value="">All Languages</option>
                                <option value="">Eng</option>
                                <option value="">Рус</option>
                                <option value="">Deutch</option>
                                <option value="">French</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="main-content">
                    <div class="container">
                        <div class="room">
                            <div class="flex1">
                                <div class=""><a href="#">Player name</a></div>
                                <div>Player description</div>
                            </div>

                            <div class="flex2">
                                <div class=""><a href="#">Room name</a></div>
                                <div>Room description</div>
                            </div>

                            <div class="flex3">
                                <div> Post date </div>
                            </div>

                        </div>
                        <div class="room">2</div>
                        <div class="room">3</div>
                        <div class="room">4</div>
                        <div class="room">5</div>
                        <div class="room">6</div>
                        <div class="room">7</div>
                        <div class="room">8</div>
                    </div>


                </div>






    </body>
</html>
