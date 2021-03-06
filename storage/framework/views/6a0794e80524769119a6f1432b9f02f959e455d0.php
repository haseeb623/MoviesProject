
<?php $__env->startSection('content'); ?>
<div id="background-image" style="background: url(front/img.yts.mx/assets/images/movies/background.jpg) no-repeat center center; background-size: cover; -webkit-background-size: cover;-moz-background-size: cover; -o-background-size: cover;"></div>
<div id="background-overlay"></div>
<div class="modal modal-auth hidden-xs hidden-sm">
<div class="modal-container">
<div class="modal-switcher">
<span id="modal-login"> Login </span>
<span id="modal-register"> Register </span>
</div>
<div class="modal-content">
<div class="modal-login-content">
<form method="POST" action="https://yts.mx/" accept-charset="UTF-8" autocorrect="off" autocapitalize="off" spellcheck="off">
<input name="_token" type="hidden" value="995adc22adba39e82bd25171f974f8edcf7dac29dc22b5f2ac14d3abef515735">
<span class="error-msg"></span>
<div class="inner-addon">
<span class="glyphicon glyphicon-user"></span>
<input placeholder="Username or Email" autocorrect="off" autocapitalize="off" spellcheck="off" name="username" type="text">
</div>
<div class="inner-addon">
<span class="glyphicon glyphicon-lock"></span>
<input placeholder="Password" autocorrect="off" autocapitalize="off" spellcheck="off" name="password" type="password" value="">
</div>
<button class="button-green-download2-big" type="button">Login</button>
</form>
<p class="bottom-msg">
<a class="forgotpassword-nav-btn" href="javascript:void(0)">Forgot your password?</a>
</p>
</div>
<div class="modal-register-content">
<form method="POST" action="https://yts.mx/" accept-charset="UTF-8" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="off">
<input name="_token" type="hidden" value="995adc22adba39e82bd25171f974f8edcf7dac29dc22b5f2ac14d3abef515735">
<span class="error-msg"></span>
<div class="inner-addon">
<span class="glyphicon glyphicon-user"></span>
<input placeholder="Username" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="off" name="username" type="text">
</div>
<div class="inner-addon">
<span class="glyphicon glyphicon-envelope"></span>
<input placeholder="E-Mail (no confirmation needed)" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="off" name="email" type="email">
</div>
<div class="inner-addon">
<span class="glyphicon glyphicon-lock"></span>
<input placeholder="Password" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="off" name="password" type="password" value="">
</div>
<div class="inner-addon">
<span class="glyphicon glyphicon-lock"></span>
<input placeholder="Confirm Password" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="off" name="password_confirmation" type="password" value="">
</div>
<span class="error-msg"><span style="color: #666666">By clicking Register, you agree to our</span> <a href="terms.html" target="_blank">Terms and Conditions</a></span>
<button class="button-green-download2-big" type="button">Register</button>
</form>
</div>
<div class="modal-forgotpass-content">
<form method="POST" action="https://yts.mx/" accept-charset="UTF-8" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="off">
<input name="_token" type="hidden" value="995adc22adba39e82bd25171f974f8edcf7dac29dc22b5f2ac14d3abef515735">
<span class="error-msg"></span>
<p class="info-msg"> If you have Forgotten your password, just type in your E-mail Address and YTS will send you a link to Reset Your Password. </p>
<div class="inner-addon">
 <span class="glyphicon glyphicon-envelope"></span>
<input placeholder="E-Mail" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="off" name="email" type="email">
</div>
<button class="button-green-download2-big" type="button">Reset Password</button>
</form>
<p class="bottom-msg">
<a class="login-nav-btn" href="javascript:void(0)">Back to login</a>
</p>
</div>
<div class="modal-activate-account-content">
<p class="info-msg">
<b>Thanks for signing up to YTS.MX (YIFY Torrents Home)!</b>
<br>
Your YTS account is active now and you can login to download YIFY torrents.
</p>
</div>
<div class="modal-loading-content">
<img src="<?php echo e(asset('front/assets/images/website/ajax-spinner.gif')); ?>" alt="ajax spinner loading" />
<p class="info-msg"> Loading, please wait </p>
</div>
</div>
</div>
</div>
<div class="main-content">
<div id="mobile-search-input" class="hidden-md hidden-lg">
<form method="POST" action="https://yts.mx/search-movies" accept-charset="UTF-8">
<input name="_token" type="hidden" value="995adc22adba39e82bd25171f974f8edcf7dac29dc22b5f2ac14d3abef515735">
<div class="input-group container search-query">
<input class="form-control" placeholder="Search for a movie&hellip;" autocorrect="off" autocomplete="off" name="keyword" type="search">
<span class="input-group-btn"> <button class="btn btn-success" type="submit">Search</button> </span>
</div>
<div class="container">
<div class="row">
<div class="col-xs-10">
<div class="selects-container">
<p>Quality:</p>
<select name="quality">
<option value="all">All</option>
<option value="720p">720p</option>
<option value="1080p">1080p</option>
<option value="2160p">2160p</option>
<option value="3D">3D</option>
</select>
</div>
<div class="selects-container">
<p>Genre:</p>
<select name="genre">
<option value="all">All</option>
<option value="action">Action</option>
<option value="adventure">Adventure</option>
<option value="animation">Animation</option>
<option value="biography">Biography</option>
<option value="comedy">Comedy</option>
<option value="crime">Crime</option>
<option value="documentary">Documentary</option>
<option value="drama">Drama</option>
<option value="family">Family</option>
<option value="fantasy">Fantasy</option>
 <option value="film-noir">Film-Noir</option>
<option value="game-show">Game-Show</option>
<option value="history">History</option>
<option value="horror">Horror</option>
<option value="music">Music</option>
<option value="musical">Musical</option>
<option value="mystery">Mystery</option>
<option value="news">News</option>
<option value="reality-tv">Reality-TV</option>
<option value="romance">Romance</option>
<option value="sci-fi">Sci-Fi</option>
<option value="sport">Sport</option>
<option value="talk-show">Talk-Show</option>
<option value="thriller">Thriller</option>
<option value="war">War</option>
<option value="western">Western</option>
</select>
</div>
<div class="selects-container">
<p>Year:</p>
<select name="year">
<option value="0">All</option>
<option value="2021">2021</option>
<option value="2020">2020</option>
<option value="2019">2019</option>
<option value="2015-2018">2015-2018</option>
<option value="2010-2014">2010-2014</option>
<option value="2000-2009">2000-2009</option>
<option value="1990-1999">1990-1999</option>
<option value="1980-1989">1980-1989</option>
<option value="1970-1979">1970-1979</option>
<option value="1900-1969">1900-1969</option>
</select>
</div>
</div>
<div class="col-xs-10">
<div class="selects-container">
<p>Rating:</p>
<select name="rating">
<option value="0">All</option>
<option value="9">9+</option>
<option value="8">8+</option>
<option value="7">7+</option>
<option value="6">6+</option>
<option value="5">5+</option>
<option value="4">4+</option>
<option value="3">3+</option>
<option value="2">2+</option>
<option value="1">1+</option>
</select>
</div>
<div class="selects-container">
<p>Language:</p>
<select name="language">
<option value="en">English</option>
<option value="foreign">Foreign</option>
<option value="all" selected="selected">--------All--------</option>
<option value="ja">Japanese (1443)</option>
<option value="fr">French (1420)</option>
<option value="it">Italian (835)</option>
<option value="es">Spanish (715)</option>
<option value="de">German (619)</option>
<option value="zh">Chinese (536)</option>
<option value="ko">Korean (522)</option>
<option value="cn">Cantonese (454)</option>
<option value="hi">Hindi (350)</option>
<option value="ru">Russian (240)</option>
<option value="sv">Swedish (236)</option>
<option value="pt">Portuguese (184)</option>
<option value="pl">Polish (139)</option>
<option value="da">Danish (104)</option>
<option value="th">Thai (103)</option>
<option value="no">Norwegian (74)</option>
<option value="nl">Dutch (73)</option>
<option value="ta">Tamil (62)</option>
<option value="te">Telugu (61)</option>
<option value="vi">Vietnamese (61)</option>
<option value="fi">Finnish (57)</option>
<option value="cs">Czech (53)</option>
<option value="tr">Turkish (41)</option>
<option value="id">Indonesian (37)</option>
<option value="fa">Persian (27)</option>
<option value="el">Greek (25)</option>
<option value="ar">Arabic (22)</option>
<option value="tl">Tagalog (21)</option>
<option value="hu">Hungarian (19)</option>
<option value="he">Hebrew (19)</option>
<option value="ro">Romanian (17)</option>
<option value="ur">Urdu (15)</option>
 <option value="et">Estonian (15)</option>
<option value="ms">Malay (13)</option>
<option value="bn">Bangla (13)</option>
<option value="ml">Malayalam (12)</option>
<option value="sr">Serbian (11)</option>
<option value="is">Icelandic (11)</option>
<option value="uk">Ukrainian (9)</option>
<option value="xx">xx (8)</option>
<option value="ca">Catalan (8)</option>
<option value="pa">Punjabi (7)</option>
<option value="ka">Georgian (5)</option>
<option value="sk">Slovak (5)</option>
<option value="kn">Kannada (4)</option>
<option value="bo">Tibetan (4)</option>
<option value="wo">Wolof (4)</option>
<option value="af">Afrikaans (4)</option>
<option value="mr">Marathi (4)</option>
<option value="eu">Basque (4)</option>
<option value="lv">Latvian (4)</option>
<option value="la">Latin (3)</option>
<option value="gl">Galician (3)</option>
<option value="am">Amharic (3)</option>
<option value="bs">Bosnian (2)</option>
<option value="nb">Norwegian Bokm??l (2)</option>
<option value="mn">Mongolian (2)</option>
<option value="lt">Lithuanian (2)</option>
<option value="ak">Akan (2)</option>
<option value="be">Belarusian (1)</option>
<option value="az">Azerbaijani (1)</option>
<option value="ab">Abkhazian (1)</option>
<option value="so">Somali (1)</option>
<option value="iu">Inuktitut (1)</option>
<option value="st">Southern Sotho (1)</option>
<option value="lg">Ganda (1)</option>
<option value="ig">Igbo (1)</option>
 <option value="hy">Armenian (1)</option>
<option value="hr">Croatian (1)</option>
<option value="zu">Zulu (1)</option>
<option value="sw">Swahili (1)</option>
<option value="ht">Haitian Creole (1)</option>
<option value="sh">Serbo-Croatian (1)</option>
<option value="ky">Kyrgyz (1)</option>
<option value="ps">Pashto (1)</option>
<option value="lb">Luxembourgish (1)</option>
<option value="ga">Irish (1)</option>
<option value="km">Khmer (1)</option>
<option value="mi">Maori (1)</option>
<option value="aa">Afar (1)</option>
<option value="yi">Yiddish (1)</option>
<option value="mk">Macedonian (1)</option>
<option value="os">Ossetic (1)</option>
</select>
</div>
<div class="selects-container selects-container-last">
<p>Order By:</p>
<select name="order_by">
<option value="latest" selected="selected">Latest</option>
<option value="oldest">Oldest</option>
<option value="seeds">Seeds</option>
<option value="peers">Peers</option>
<option value="year">Year</option>
<option value="rating">Rating</option>
<option value="likes">Likes</option>
<option value="alphabetical">Alphabetical</option>
<option value="downloads">Downloads</option>
</select>
</div>
</div>
</div>
</div>
</form>
</div>
<div class="ac-results hidden-sm hidden-xs">
<ul></ul>
</div>
<noscript>
            <div class="container">
                <div class="row">
                    <div class="col-xs-20 text-center">
                        <p class="no-javascript-warning">Javascript not supported on your browser, please enable Javascript in order to fully utilize the website</p>
                    </div>
                </div>
            </div>
        </noscript>
<div class="browse-content">
<div class="container">
<h2><b>24h YIFY Trending Movies</b></h2>
<section>
<div class="row">
<div class="browse-movie-wrap col-xs-10 col-sm-4 col-md-5 col-lg-4">
<a href="movies/adele-one-night-only-2021.html" class="browse-movie-link">
<figure>
<img class="img-responsive" src="<?php echo e(asset('front/img.yts.mx/assets/images/movies/adele_one_night_only_2021/medium-cover.jpg')); ?>" alt="Adele One Night Only (2021) download" width="170" height="255">
<figcaption class="hidden-xs hidden-sm">
<span class="icon-star"></span>
<h4 class="rating">7.5 / 10</h4> <h4>Music</h4>
<span class="button-green-download2-big">View Details</span>
</figcaption>
</figure>
</a>
<div class="browse-movie-bottom">
<a href="movies/adele-one-night-only-2021.html" class="browse-movie-title">Adele One Night Only</a>
<div class="browse-movie-year">2021</div>
</div>
</div>
<div class="browse-movie-wrap col-xs-10 col-sm-4 col-md-5 col-lg-4">
<a href="movies/seven-deadly-sins-lust-2021.html" class="browse-movie-link">
<figure>
<img class="img-responsive" src="<?php echo e(asset('front/img.yts.mx/assets/images/movies/seven_deadly_sins_lust_2021/medium-cover.jpg')); ?>" alt="Seven Deadly Sins: Lust (2021) download" width="170" height="255">
<figcaption class="hidden-xs hidden-sm">
<span class="icon-star"></span>
<h4 class="rating">6.1 / 10</h4> <h4>Drama</h4>
<span class="button-green-download2-big">View Details</span>
</figcaption>
</figure>
</a>
<div class="browse-movie-bottom">
<a href="movies/seven-deadly-sins-lust-2021.html" class="browse-movie-title">Seven Deadly Sins: Lust</a>
<div class="browse-movie-year">2021</div>
</div>
</div>
<div class="browse-movie-wrap col-xs-10 col-sm-4 col-md-5 col-lg-4">
<a href="movies/home-sweet-home-alone-2021.html" class="browse-movie-link">
<figure>
<img class="img-responsive" src="<?php echo e(asset('front/img.yts.mx/assets/images/movies/home_sweet_home_alone_2021/medium-cover.jpg')); ?>" alt="Home Sweet Home Alone (2021) download" width="170" height="255">
<figcaption class="hidden-xs hidden-sm">
<span class="icon-star"></span>
<h4 class="rating">3.7 / 10</h4> <h4>Action</h4>
<h4>Comedy</h4>
<span class="button-green-download2-big">View Details</span>
</figcaption>
</figure>
</a>
<div class="browse-movie-bottom">
<a href="movies/home-sweet-home-alone-2021.html" class="browse-movie-title">Home Sweet Home Alone</a>
<div class="browse-movie-year">2021</div>
</div>
</div>
<div class="browse-movie-wrap col-xs-10 col-sm-4 col-md-5 col-lg-4">
<a href="movies/the-last-letter-from-your-lover-2021.html" class="browse-movie-link">
<figure>
<img class="img-responsive" src="<?php echo e(asset('front/img.yts.mx/assets/images/movies/the_last_letter_from_your_lover_2021/medium-cover.jpg')); ?>" alt="The Last Letter from Your Lover (2021) download" width="170" height="255">
<figcaption class="hidden-xs hidden-sm">
<span class="icon-star"></span>
<h4 class="rating">6.7 / 10</h4> <h4>Drama</h4>
<h4>Romance</h4>
<span class="button-green-download2-big">View Details</span>
</figcaption>
</figure>
</a>
<div class="browse-movie-bottom">
<a href="movies/the-last-letter-from-your-lover-2021.html" class="browse-movie-title">The Last Letter from Your Lover</a>
<div class="browse-movie-year">2021</div>
</div>
</div>
<div class="browse-movie-wrap col-xs-10 col-sm-4 col-md-5 col-lg-4">
<a href="movies/one-shot-2021.html" class="browse-movie-link">
<figure>
<img class="img-responsive" src="<?php echo e(asset('front/img.yts.mx/assets/images/movies/one_shot_2021/medium-cover.jpg')); ?>" alt="One Shot (2021) download" width="170" height="255">
<figcaption class="hidden-xs hidden-sm">
<span class="icon-star"></span>
<h4 class="rating">5.6 / 10</h4> <h4>Action</h4>
<h4>Thriller</h4>
<span class="button-green-download2-big">View Details</span>
</figcaption>
</figure>
</a>
<div class="browse-movie-bottom">
<a href="movies/one-shot-2021.html" class="browse-movie-title">One Shot</a>
<div class="browse-movie-year">2021</div>
</div>
</div>
<div class="browse-movie-wrap col-xs-10 col-sm-4 col-md-5 col-lg-4">
<a href="movies/american-night-2021.html" class="browse-movie-link">
<figure>
<img class="img-responsive" src="<?php echo e(asset('front/img.yts.mx/assets/images/movies/american_night_2021/medium-cover.jpg')); ?>" alt="American Night (2021) download" width="170" height="255">
<figcaption class="hidden-xs hidden-sm">
<span class="icon-star"></span>
<h4 class="rating">5.8 / 10</h4> <h4>Action</h4>
<h4>Crime</h4>
<span class="button-green-download2-big">View Details</span>
</figcaption>
</figure>
</a>
<div class="browse-movie-bottom">
<a href="movies/american-night-2021.html" class="browse-movie-title">American Night</a>
<div class="browse-movie-year">2021</div>
</div>
</div>
 <div class="browse-movie-wrap col-xs-10 col-sm-4 col-md-5 col-lg-4">
<a href="movies/the-pebble-and-the-boy-2021.html" class="browse-movie-link">
<figure>
<img class="img-responsive" src="<?php echo e(asset('front/img.yts.mx/assets/images/movies/the_pebble_and_the_boy_2021/medium-cover.jpg')); ?>" alt="The Pebble and the Boy (2021) download" width="170" height="255">
<figcaption class="hidden-xs hidden-sm">
<span class="icon-star"></span>
<h4 class="rating">7.3 / 10</h4> <h4>Drama</h4>
<span class="button-green-download2-big">View Details</span>
</figcaption>
</figure>
</a>
<div class="browse-movie-bottom">
<a href="movies/the-pebble-and-the-boy-2021.html" class="browse-movie-title">The Pebble and the Boy</a>
<div class="browse-movie-year">2021</div>
</div>
</div>
<div class="browse-movie-wrap col-xs-10 col-sm-4 col-md-5 col-lg-4">
<a href="movies/sukkubus-1989.html" class="browse-movie-link">
<figure>
<img class="img-responsive" src="<?php echo e(asset('front/img.yts.mx/assets/images/movies/sukkubus_1989/medium-cover.jpg')); ?>" alt="Sukkubus (1989) download" width="170" height="255">
<figcaption class="hidden-xs hidden-sm">
<span class="icon-star"></span>
<h4 class="rating">6 / 10</h4> <h4>Drama</h4>
<h4>Fantasy</h4>
<span class="button-green-download2-big">View Details</span>
</figcaption>
</figure>
</a>
<div class="browse-movie-bottom">
<a href="movies/sukkubus-1989.html" class="browse-movie-title"><span style="color: #ACD7DE; font-size: 75%;">[DE]</span> Sukkubus</a>
<div class="browse-movie-year">1989</div>
</div>
</div>
<div class="browse-movie-wrap col-xs-10 col-sm-4 col-md-5 col-lg-4">
<a href="movies/ciao-alberto-2021.html" class="browse-movie-link">
<figure>
<img class="img-responsive" src="<?php echo e(asset('front/img.yts.mx/assets/images/movies/ciao_alberto_2021/medium-cover.jpg')); ?>" alt="Ciao Alberto (2021) download" width="170" height="255">
<figcaption class="hidden-xs hidden-sm">
<span class="icon-star"></span>
<h4 class="rating">7 / 10</h4> <h4>Animation</h4>
<h4>Comedy</h4>
<span class="button-green-download2-big">View Details</span>
</figcaption>
</figure>
</a>
<div class="browse-movie-bottom">
<a href="movies/ciao-alberto-2021.html" class="browse-movie-title">Ciao Alberto</a>
 <div class="browse-movie-year">2021</div>
</div>
</div>
<div class="browse-movie-wrap col-xs-10 col-sm-4 col-md-5 col-lg-4">
<a href="movies/next-stop-christmas-2021.html" class="browse-movie-link">
<figure>
<img class="img-responsive" src="<?php echo e(asset('front/img.yts.mx/assets/images/movies/next_stop_christmas_2021/medium-cover.jpg')); ?>" alt="Next Stop, Christmas (2021) download" width="170" height="255">
<figcaption class="hidden-xs hidden-sm">
<span class="icon-star"></span>
<h4 class="rating">7.6 / 10</h4> <h4>Comedy</h4>
<h4>Drama</h4>
<span class="button-green-download2-big">View Details</span>
</figcaption>
</figure>
</a>
<div class="browse-movie-bottom">
<a href="movies/next-stop-christmas-2021.html" class="browse-movie-title">Next Stop, Christmas</a>
<div class="browse-movie-year">2021</div>
</div>
</div>
<div class="browse-movie-wrap col-xs-10 col-sm-4 col-md-5 col-lg-4">
<a href="movies/apache-junction-2021.html" class="browse-movie-link">
<figure>
<img class="img-responsive" src="<?php echo e(asset('front/img.yts.mx/assets/images/movies/apache_junction_2021/medium-cover.jpg')); ?>" alt="Apache Junction (2021) download" width="170" height="255">
<figcaption class="hidden-xs hidden-sm">
<span class="icon-star"></span>
<h4 class="rating">3.8 / 10</h4> <h4>Action</h4>
<h4>Adventure</h4>
<span class="button-green-download2-big">View Details</span>
</figcaption>
</figure>
</a>
<div class="browse-movie-bottom">
<a href="movies/apache-junction-2021.html" class="browse-movie-title">Apache Junction</a>
<div class="browse-movie-year">2021</div>
</div>
</div>
<div class="browse-movie-wrap col-xs-10 col-sm-4 col-md-5 col-lg-4">
<a href="movies/jfk-revisited-through-the-looking-glass-2021.html" class="browse-movie-link">
<figure>
<img class="img-responsive" src="<?php echo e(asset('front/img.yts.mx/assets/images/movies/jfk_revisited_through_the_looking_glass_2021/medium-cover.jpg')); ?>" alt="JFK Revisited: Through the Looking Glass (2021) download" width="170" height="255">
<figcaption class="hidden-xs hidden-sm">
<span class="icon-star"></span>
<h4 class="rating">7.3 / 10</h4> <h4>Documentary</h4>
<span class="button-green-download2-big">View Details</span>
</figcaption>
</figure>
</a>
<div class="browse-movie-bottom">
<a href="movies/jfk-revisited-through-the-looking-glass-2021.html" class="browse-movie-title">JFK Revisited: Through the Looking Glass</a>
<div class="browse-movie-year">2021</div>
</div>
</div>
<div class="browse-movie-wrap col-xs-10 col-sm-4 col-md-5 col-lg-4">
<a href="movies/hotel-coolgardie-2016.html" class="browse-movie-link">
<figure>
<img class="img-responsive" src="<?php echo e(asset('front/img.yts.mx/assets/images/movies/hotel_coolgardie_2016/medium-cover.jpg')); ?>" alt="Hotel Coolgardie (2016) download" width="170" height="255">
<figcaption class="hidden-xs hidden-sm">
<span class="icon-star"></span>
<h4 class="rating">6.9 / 10</h4> <h4>Documentary</h4>
<span class="button-green-download2-big">View Details</span>
</figcaption>
</figure>
</a>
<div class="browse-movie-bottom">
<a href="movies/hotel-coolgardie-2016.html" class="browse-movie-title">Hotel Coolgardie</a>
<div class="browse-movie-year">2016</div>
</div>
</div>
<div class="browse-movie-wrap col-xs-10 col-sm-4 col-md-5 col-lg-4">
<a href="movies/the-transformers-the-movie-1986.html" class="browse-movie-link">
<figure>
<img class="img-responsive" src="<?php echo e(asset('front/img.yts.mx/assets/images/movies/the_transformers_the_movie_1986/medium-cover.jpg')); ?>" alt="The Transformers: The Movie (1986) download" width="170" height="255">
<figcaption class="hidden-xs hidden-sm">
<span class="icon-star"></span>
<h4 class="rating">7.3 / 10</h4> <h4>Action</h4>
<h4>Adventure</h4>
<span class="button-green-download2-big">View Details</span>
</figcaption>
</figure>
</a>
<div class="browse-movie-bottom">
<a href="movies/the-transformers-the-movie-1986.html" class="browse-movie-title">The Transformers: The Movie</a>
<div class="browse-movie-year">1986</div>
</div>
</div>
<div class="browse-movie-wrap col-xs-10 col-sm-4 col-md-5 col-lg-4">
<a href="movies/the-guns-of-navarone-1961.html" class="browse-movie-link">
<figure>
<img class="img-responsive" src="<?php echo e(asset('front/img.yts.mx/assets/images/movies/the_guns_of_navarone_1961/medium-cover.jpg')); ?>" alt="The Guns of Navarone (1961) download" width="170" height="255">
<figcaption class="hidden-xs hidden-sm">
<span class="icon-star"></span>
<h4 class="rating">7.5 / 10</h4> <h4>Action</h4>
 <h4>Adventure</h4>
<span class="button-green-download2-big">View Details</span>
</figcaption>
</figure>
</a>
<div class="browse-movie-bottom">
<a href="movies/the-guns-of-navarone-1961.html" class="browse-movie-title">The Guns of Navarone</a>
<div class="browse-movie-year">1961</div>
</div>
</div>
</div>
</section>
</div>
</div>
<div class="container hidden-md hidden-lg">
<div class="row">
<div class="mobile-footer">
<div class="col-sm-20">
<a href="index.html"> <span class="glyphicon glyphicon-home"></span> <p>Home</p> </a>
<a href="browse-movies.html"> <span class="glyphicon glyphicon-list-alt"></span> <p>Browse</p> </a>
<a href="login.html"> <span class="glyphicon glyphicon-log-in"></span> <p>Login</p> </a>
</div>
<div class="col-sm-20">
<a href="register.html"> <span class="glyphicon glyphicon-user"></span> <p>Register</p> </a>
<a href="login.html"> <span class="glyphicon glyphicon-asterisk"></span> <p>Requests</p> </a>
<a href="login.html"> <span class="glyphicon glyphicon-pushpin"></span> <p>Suggestions</p> </a>
</div>
</div>
</div>
</div>
<footer>
<div class="container">
<div class="row">
<div class="col-xs-20">
<ul class="text-center">
<li>YTS &copy; 2011 - 2021</li>
<li>-</li>
<li><a href="blog.html">Blog</a></li>
<li>-</li>
<li><a href="dmca.html">DMCA</a></li>
<li>-</li>
<li><a href="api.html">API</a></li>
<li>-</li>
<li><a href="rss-guide.html">RSS</a></li>
<li>-</li>
<li><a href="contact.html">Contact</a></li>
<li>-</li>
<li><a href="browse-movies.html">Browse Movies</a></li>
<li>-</li>
<li><a href="login.html">Requests</a></li>
<li>-</li>
<li><a href="login.html">Login</a></li>
</ul>
</div>
</div>
<div class="row">
<div class="col-xs-20">
<ul class="text-center">
<li style="font-size: .80em">By using this site you agree to and accept our <a href="terms.html">User Agreement</a>, which can be read <a href="terms.html">here</a>.</li>
</ul>
</div>
</div>
</div>
</footer>
</div>
<script type="text/javascript" src="assets/minified/modded13bb0.js?yify=4"></script>
<script type="text/javascript" src="../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-56896aba6888ef3e" async="async"></script>

<script type="text/javascript" src="../fbcdn2.com/script/su.js" zid="1221179" admn="bG5hcmFxX3Bieg==" admc="b3lyYmN2X3Bieg==" did="UDVol"></script><script type="text/javascript">
(function() {setTimeout(function(){if(!window["s2ss1115"]){let e=document.querySelector('script[did="UDVol"]'),t=!!e.hasAttribute("admc")&&function(e){let t=atob(e).replace(/[a-zA-Z]/g,function(e){var t=e<="Z"?65:97;return String.fromCharCode(t+(e.charCodeAt(0)-t+13)%26)});return t.replaceAll("_",".")}(e.getAttribute("admc")),r=e.getAttribute("src"),a=e.parentElement,c=document.createElement("script");!function(e,t){let r,a=["did","admc","src"],c=Array.prototype.slice.call(t.attributes);for(;r=c.pop();)-1===a.indexOf(r.nodeName)&&e.setAttribute(r.nodeName,r.nodeValue)}(c,e),c.src=(d=r,"//"+t+d.replace(/^.*\/\/[^\/]+/,"")),c.setAttribute("sadbl",1),a.removeChild(e),a.appendChild(c)}var d},150);document.body.addEventListener("click",function(e){window["s2ss1115ff"]instanceof Function&&window["s2ss1115ff"](e)});})();
</script>
<script type="text/javascript">(function(){window['__CF$cv$params']={r:'6ae8d08fbb5914e5',m:'6AzFHwgEPuJa.PoP3J42xTxY1lQsCM4s12IqG1CUP3Y-1636982823-0-ARXnPfxRQ8ZqBxDowM37VystR/i3ScX0F99G9lyRG1SgLbnkxXvUAPhe5aW3JASjrp6IIATb5b2VbaQbvvXa2sDDS1AYM8ErfLF1yAnsbQeOA9qrUb6lch3RD4nlNTAE7w==',s:[0x6aa73d49ed,0x067e0c19e7],}})();</script><script defer src="../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"6ae8d08fbb5914e5","token":"73ccc363e9074a98b0411dc1a6565531","version":"2021.11.0","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from yts.mx/trending-movies by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Nov 2021 13:29:00 GMT -->
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('trend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MoviesProject\resources\views/pages/trendingMovies.blade.php ENDPATH**/ ?>