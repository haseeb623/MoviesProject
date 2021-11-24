@extends('main')
@section('content')
<div id="background-image" style="background: url(front/img.yts.mx/assets/images/movies/apex_2021/b1.jpg) no-repeat center center; background-size: cover; -webkit-background-size: cover;-moz-background-size: cover; -o-background-size: cover;"></div>
<!-- <div id="background-image" style="background: url(front/img.yts.mx/assets/images/movies/apex_2021/background.jpg) no-repeat center center; background-size: cover; -webkit-background-size: cover;-moz-background-size: cover; -o-background-size: cover;"></div> -->
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
            <img src="{{asset('front/assets/images/website/ajax-spinner.gif')}}" alt="ajax spinner loading" />
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
                     <option value="nb">Norwegian Bokmål (2)</option>
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
<style type="text/css">
   .hohch {
   background-color: black;
   border: 5px solid #75c74e;
   padding: 0 35px 5px 35px;
   max-width: 1140px;
   margin-left: auto;
   margin-right: auto;
   }
   .hohch h1, .hohch p {
   color: white;
   font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
   text-align: center;
   }
   .hohch p {
   line-height: 30px;
   width: auto;
   margin-bottom: 10px;
   }
   .hohch .title {
   margin-top: 5px;
   width: 80%;
   border-bottom: 1px solid grey;
   margin-left: auto;
   margin-right: auto;
   margin-bottom: 5px;
   }
   .hohch .title h1 {
   font-size: 40px;
   margin-top: 0px;
   margin-bottom: 0px;
   }
   .hohch .title h1:before {
   content: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/898049/mail.png");
   padding-right: 20px;
   }
   .hohch .title img {
   position: relative;
   top: 65px;
   left: 175px;
   }
   .hohch .blue {
   margin-top: 10px;
   margin-bottom: 10px;
   font-weight: bold;
   color: #4c96d0;
   }
   .hohch a {
   text-decoration: none;
   }
   .hohch .button {
   background-color: #75c74e;
   width: 250px;
   margin-left: auto;
   margin-right: auto;
   margin-top: 15px;
   border-radius: 5px;
   }
   .hohch .button img {
   float: left;
   margin-top: 8px;
   margin-left: 22px;
   }
   .hohch .button p {
   padding: 3px 0;
   text-shadow: 2px 2px #4b9924;
   font-weight: bold;
   }
</style>
<div class="container home-content">
   <div class="hidden-xs hidden-sm">
      </p>
   </div>
   <div id="popular-downloads">
      <div class="row">
         <h2><span class="icon-star"></span>Popular Downloads <a href="browse-movies/0/all/all/0/featured/0/all.html"></a> <a href="rss-guide.html"></a></h2>
      </div>
      <div class="row movie-list kb1">
         @foreach($moviesArray as $val)
         <div class="browse-movie-wrap col-xs-10 col-sm-5">
            <a href="movies/red-notice-2021.html" class="browse-movie-link">
               <figure>
                  <img class="img-responsive" src="{{$val['large_cover_image']}}" alt="Red Notice (2021) download" width="210" height="315" />
                  <figcaption class="hidden-xs hidden-sm">
                     <span class="icon-star"></span>
                     <h4 class="rating">6.5 / 10</h4>
                     <h4>Action</h4>
                     <h4>Adventure</h4>
                     <span class="button-green-download2-big">View Details</span>
                  </figcaption>
               </figure>
            </a>
            <div class="browse-movie-bottom">
               <a href="movies/red-notice-2021.html" class="browse-movie-title">{{$val['title']}}</a>
               <div class="browse-movie-year">2021</div>
            </div>
         </div>
         @endforeach
         <!-- <div class="browse-movie-wrap col-xs-10 col-sm-5">
            <a href="movies/shang-chi-and-the-legend-of-the-ten-rings-2021.html" class="browse-movie-link">
               <figure>
                  <img class="img-responsive" src="{{asset('front/img.yts.mx/assets/images/movies/shang_chi_and_the_legend_of_the_ten_rings_2021/medium-cover.jpg')}}" alt="Shang-Chi and the Legend of the Ten Rings (2021) download" width="210" height="315" />
                  <figcaption class="hidden-xs hidden-sm">
                     <span class="icon-star"></span>
                     <h4 class="rating">7.8 / 10</h4>
                     <h4>Action</h4>
                     <h4>Adventure</h4>
                     <span class="button-green-download2-big">View Details</span>
                  </figcaption>
               </figure>
            </a>
            <div class="browse-movie-bottom">
               <a href="movies/shang-chi-and-the-legend-of-the-ten-rings-2021.html" class="browse-movie-title">Shang-Chi and the Legend of the Ten Rings</a>
               <div class="browse-movie-year">2021</div>
            </div>
         </div>
         <div class="browse-movie-wrap col-xs-10 col-sm-5">
            <a href="movies/passing-2021.html" class="browse-movie-link">
               <figure>
                  <img class="img-responsive" src="{{asset('front/img.yts.mx/assets/images/movies/passing_2021/medium-cover.jpg')}}" alt="Passing (2021) download" width="210" height="315" />
                  <figcaption class="hidden-xs hidden-sm">
                     <span class="icon-star"></span>
                     <h4 class="rating">6.6 / 10</h4>
                     <h4>Drama</h4>
                     <span class="button-green-download2-big">View Details</span>
                  </figcaption>
               </figure>
            </a>
            <div class="browse-movie-bottom">
               <a href="movies/passing-2021.html" class="browse-movie-title">Passing</a>
               <div class="browse-movie-year">2021</div>
            </div>
         </div>
         <div class="browse-movie-wrap col-xs-10 col-sm-5">
            <a href="movies/apex-2021.html" class="browse-movie-link">
               <figure>
                  <img class="img-responsive" src="{{asset('front/img.yts.mx/assets/images/movies/apex_2021/medium-cover.jpg')}}" alt="Apex (2021) download" width="210" height="315" />
                  <figcaption class="hidden-xs hidden-sm">
                     <span class="icon-star"></span>
                     <h4 class="rating">3.7 / 10</h4>
                     <h4>Action</h4>
                     <h4>Thriller</h4>
                     <span class="button-green-download2-big">View Details</span>
                  </figcaption>
               </figure>
            </a>
            <div class="browse-movie-bottom">
               <a href="movies/apex-2021.html" class="browse-movie-title">Apex</a>
               <div class="browse-movie-year">2021</div>
            </div>
         </div> -->
      </div>
   </div>
   <div class="content-dark">
      <div class="container home-content">
         <div class="home-movies">
            <div class="row movie-list">
               <h2>Latest HW Movies  <a href="browse-movies.html">Browse All</a></h2>
            </div>
            
            <div class="row">
             @foreach($moviesArray as $val)
               <div class="browse-movie-wrap col-xs-10 col-sm-5">
                  <a href="movies/conscience-point-2019.html" class="browse-movie-link">
                     <figure>
                        <img class="img-responsive" src="{{$val['large_cover_image']}}" alt="Conscience Point (2019) download" width="210" height="315" />
                     
                        <!-- <img class="img-responsive" src="{{asset('front/img.yts.mx/assets/images/movies/conscience_point_2019/medium-cover.jpg')}}" alt="Conscience Point (2019) download" width="210" height="315" /> -->
                        <!-- <img class="quality-banner img-responsive" src="{{asset('front/assets/images/website/banner1080p.png')}}" alt="Conscience Point (2019) download 1080p" width="118" height="91"> -->
                        <figcaption class="hidden-xs hidden-sm">
                           <span class="icon-star"></span>
                           <h4 class="rating">7 / 10</h4>
                           <h4>Documentary</h4>
                           <span class="button-green-download2-big">View Details</span>
                        </figcaption>
                     </figure>
                  </a>
                  <div class="browse-movie-bottom">
                     <a href="movies/conscience-point-2019.html" class="browse-movie-title">{{$val['title']}}</a>
                     <div class="browse-movie-year">2019</div>
                  </div>
               </div>
               @endforeach 
               <!-- <div class="browse-movie-wrap col-xs-10 col-sm-5">
                  <a href="movies/determination-of-death-2001.html" class="browse-movie-link">
                     <figure>
                        <img class="img-responsive" src="{{asset('front/img.yts.mx/assets/images/movies/determination_of_death_2001/medium-cover.jpg')}}" alt="Determination of Death (2001) download" width="210" height="315" />
                        <img class="quality-banner img-responsive" src="{{asset('front/assets/images/website/banner720p.png')}}" alt="Determination of Death (2001) download 720p" width="118" height="91">
                        <figcaption class="hidden-xs hidden-sm">
                           <span class="icon-star"></span>
                           <h4 class="rating">4.9 / 10</h4>
                           <h4>Crime</h4>
                           <h4>Drama</h4>
                           <span class="button-green-download2-big">View Details</span>
                        </figcaption>
                     </figure>
                  </a>
                  <div class="browse-movie-bottom">
                     <a href="movies/determination-of-death-2001.html" class="browse-movie-title"><span style="color: #ACD7DE; font-size: 75%;">[FR]</span> Determination of Death</a>
                     <div class="browse-movie-year">2001</div>
                  </div>
               </div> -->
               <!-- <div class="browse-movie-wrap col-xs-10 col-sm-5">
                  <a href="movies/castle-of-owls-1963.html" class="browse-movie-link">
                     <figure>
                        <img class="img-responsive" src="{{asset('front/img.yts.mx/assets/images/movies/castle_of_owls_1963/medium-cover.jpg')}}" alt="Castle of Owls (1963) download" width="210" height="315" />
                        <img class="quality-banner img-responsive" src="{{asset('front/assets/images/website/banner1080p.png')}}" alt="Castle of Owls (1963) download 1080p" width="118" height="91">
                        <figcaption class="hidden-xs hidden-sm">
                           <span class="icon-star"></span>
                           <h4 class="rating">6.6 / 10</h4>
                           <h4>Drama</h4>
                           <span class="button-green-download2-big">View Details</span>
                        </figcaption>
                     </figure>
                  </a>
                  <div class="browse-movie-bottom">
                     <a href="movies/castle-of-owls-1963.html" class="browse-movie-title"><span style="color: #ACD7DE; font-size: 75%;">[JA]</span> Castle of Owls</a>
                     <div class="browse-movie-year">1963</div>
                  </div>
               </div> -->
               <!-- <div class="browse-movie-wrap col-xs-10 col-sm-5">
                  <a href="movies/perilous-2000.html" class="browse-movie-link">
                     <figure>
                        <img class="img-responsive" src="{{asset('front/img.yts.mx/assets/images/movies/perilous_2000/medium-cover.jpg')}}" alt="Perilous (2000) download" width="210" height="315" />
                        <img class="quality-banner img-responsive" src="{{asset('front/assets/images/website/banner1080p.png')}}" alt="Perilous (2000) download 1080p" width="118" height="91">
                        <figcaption class="hidden-xs hidden-sm">
                           <span class="icon-star"></span>
                           <h4 class="rating">4.2 / 10</h4>
                           <h4>Thriller</h4>
                           <span class="button-green-download2-big">View Details</span>
                        </figcaption>
                     </figure>
                  </a>
                  <div class="browse-movie-bottom">
                     <a href="movies/perilous-2000.html" class="browse-movie-title">Perilous</a>
                     <div class="browse-movie-year">2000</div>
                  </div>
               </div>
            </div> -->
            <!-- <div class="row">
               <div class="browse-movie-wrap col-xs-10 col-sm-5">
                  <a href="movies/the-heart-of-the-matter-1953.html" class="browse-movie-link">
                     <figure>
                        <img class="img-responsive" src="{{asset('front/img.yts.mx/assets/images/movies/the_heart_of_the_matter_1953/medium-cover.jpg')}}" alt="The Heart of the Matter (1953) download" width="210" height="315" />
                        <img class="quality-banner img-responsive" src="{{asset('front/assets/images/website/banner720p.png')}}" alt="The Heart of the Matter (1953) download 720p" width="118" height="91">
                        <figcaption class="hidden-xs hidden-sm">
                           <span class="icon-star"></span>
                           <h4 class="rating">6.8 / 10</h4>
                           <h4>Drama</h4>
                           <span class="button-green-download2-big">View Details</span>
                        </figcaption>
                     </figure>
                  </a>
                  <div class="browse-movie-bottom">
                     <a href="movies/the-heart-of-the-matter-1953.html" class="browse-movie-title">The Heart of the Matter</a>
                     <div class="browse-movie-year">1953</div>
                  </div>
               </div> -->
               <!-- <div class="browse-movie-wrap col-xs-10 col-sm-5">
                  <a href="movies/the-book-of-vision-2020.html" class="browse-movie-link">
                     <figure>
                        <img class="img-responsive" src="{{asset('front/img.yts.mx/assets/images/movies/the_book_of_vision_2020/medium-cover.jpg')}}" alt="The Book of Vision (2020) download" width="210" height="315" />
                        <img class="quality-banner img-responsive" src="{{asset('front/assets/images/website/banner1080p.png')}}" alt="The Book of Vision (2020) download 1080p" width="118" height="91">
                        <figcaption class="hidden-xs hidden-sm">
                           <span class="icon-star"></span>
                           <h4 class="rating">5.3 / 10</h4>
                           <h4>Drama</h4>
                           <h4>Mystery</h4>
                           <span class="button-green-download2-big">View Details</span>
                        </figcaption>
                     </figure>
                  </a>
                  <div class="browse-movie-bottom">
                     <a href="movies/the-book-of-vision-2020.html" class="browse-movie-title">The Book of Vision</a>
                     <div class="browse-movie-year">2020</div>
                  </div>
               </div> -->
               <!-- <div class="browse-movie-wrap col-xs-10 col-sm-5">
                  <a href="movies/maximum-achievement-the-brian-tracy-story-2017.html" class="browse-movie-link">
                     <figure>
                        <img class="img-responsive" src="{{asset('front/img.yts.mx/assets/images/movies/maximum_achievement_the_brian_tracy_story_2017/medium-cover.jpg')}}" alt="Maximum Achievement: The Brian Tracy Story (2017) download" width="210" height="315" />
                        <img class="quality-banner img-responsive" src="{{asset('front/assets/images/website/banner1080p.png')}}" alt="Maximum Achievement: The Brian Tracy Story (2017) download 1080p" width="118" height="91">
                        <figcaption class="hidden-xs hidden-sm">
                           <span class="icon-star"></span>
                           <h4 class="rating">8.3 / 10</h4>
                           <h4>Documentary</h4>
                           <span class="button-green-download2-big">View Details</span>
                        </figcaption>
                     </figure>
                  </a>
                  <div class="browse-movie-bottom">
                     <a href="movies/maximum-achievement-the-brian-tracy-story-2017.html" class="browse-movie-title">Maximum Achievement: The Brian Tracy Story</a>
                     <div class="browse-movie-year">2017</div>
                  </div>
               </div> -->
               <!-- <div class="browse-movie-wrap col-xs-10 col-sm-5">
                  <a href="movies/fling-2008.html" class="browse-movie-link">
                     <figure>
                        <img class="img-responsive" src="{{asset('front/img.yts.mx/assets/images/movies/fling_2008/medium-cover.jpg')}}" alt="Fling (2008) download" width="210" height="315" />
                        <img class="quality-banner img-responsive" src="{{asset('front/assets/images/website/banner1080p.png')}}" alt="Fling (2008) download 1080p" width="118" height="91">
                        <figcaption class="hidden-xs hidden-sm">
                           <span class="icon-star"></span>
                           <h4 class="rating">6 / 10</h4>
                           <h4>Drama</h4>
                           <h4>Romance</h4>
                           <span class="button-green-download2-big">View Details</span>
                        </figcaption>
                     </figure>
                  </a>
                  <div class="browse-movie-bottom">
                     <a href="movies/fling-2008.html" class="browse-movie-title">Fling</a>
                     <div class="browse-movie-year">2008</div>
                  </div>
               </div> -->
            <!-- </div>
         </div> -->
      </div>
   </div>
   <div class="container home-content">
      <div class="home-movies">
         <div class="row">
            <h2>Upcoming HW Movies <a href="login.html"></a></h2>
         </div>
         <div class="row">
         @foreach($moviesArray as $val1)
            <div class="browse-movie-wrap col-xs-10 col-sm-5">
               <a href="https://www.imdb.com/title/tt3331846/" target="_blank" class="browse-movie-link">
                  <figure>
                     <img class="img-responsive" src="{{asset('front/img.yts.mx/assets/images/movies/stand_by_me_doraemon_2014/medium-cover.jpg')}}" alt="Stand by Me Doraemon (2014)" width="210" height="315" />
                     <figcaption class="hidden-xs hidden-sm imdb-upcoming">
                        <span class="button-green-download2-big button-yellow-download-big">View IMDb</span>
                     </figcaption>
                  </figure>
               </a>
               <div class="browse-movie-bottom">
                  <a href="https://www.imdb.com/title/tt3331846/" target="_blank" class="browse-movie-title">Stand by Me Doraemon</a>
                  <div class="browse-movie-year">
                     2014<br>
                     <progress value="100" max="100" style="width: 55%; height:15px;"></progress> 720p Bluray 
                  </div>
               </div>
            </div>
            <!-- <div class="browse-movie-wrap col-xs-10 col-sm-5">
               <a href="https://www.imdb.com/title/tt0083352/" target="_blank" class="browse-movie-link">
                  <figure>
                     <img class="img-responsive" src="{{asset('front/img.yts.mx/assets/images/movies/dreadnaught_1981/medium-cover.jpg')}}" alt="Dreadnaught (1981)" width="210" height="315" />
                     <figcaption class="hidden-xs hidden-sm imdb-upcoming">
                        <span class="button-green-download2-big button-yellow-download-big">View IMDb</span>
                     </figcaption>
                  </figure>
               </a>
               <div class="browse-movie-bottom">
                  <a href="https://www.imdb.com/title/tt0083352/" target="_blank" class="browse-movie-title">Dreadnaught</a>
                  <div class="browse-movie-year">
                     1981<br>
                     <progress value="91" max="100" style="width: 55%; height:15px;"></progress> 720p Web 
                  </div>
               </div>
            </div>
            <div class="browse-movie-wrap col-xs-10 col-sm-5">
               <a href="movies/no-time-to-die-2021.html" class="browse-movie-link">
                  <figure>
                     <img class="img-responsive" src="{{asset('front/img.yts.mx/assets/images/movies/no_time_to_die_2021/medium-cover.jpg')}}" alt="No Time to Die (2021)" width="210" height="315" />
                     <figcaption class="hidden-xs hidden-sm">
                        <span class="icon-star"></span>
                        <h4 class="rating">7.5 / 10</h4>
                        <h4>Action</h4>
                        <h4>Adventure</h4>
                        <span class="button-green-download2-big">View Details</span>
                     </figcaption>
                  </figure>
               </a>
               <div class="browse-movie-bottom">
                  <a href="movies/no-time-to-die-2021.html" class="browse-movie-title">No Time to Die</a>
                  <div class="browse-movie-year">
                     2021<br>
                     <progress value="93" max="100" style="width: 55%; height:15px;"></progress> 2160p Web 
                  </div>
               </div>
            </div>
            <div class="browse-movie-wrap col-xs-10 col-sm-5">
               <a href="movies/the-heart-of-the-matter-1953.html" class="browse-movie-link">
                  <figure>
                     <img class="img-responsive" src="{{asset('front/img.yts.mx/assets/images/movies/the_heart_of_the_matter_1953/medium-cover.jpg')}}" alt="The Heart of the Matter (1953)" width="210" height="315" />
                     <figcaption class="hidden-xs hidden-sm">
                        <span class="icon-star"></span>
                        <h4 class="rating">6.8 / 10</h4>
                        <h4>Drama</h4>
                        <span class="button-green-download2-big">View Details</span>
                     </figcaption>
                  </figure>
               </a>
               <div class="browse-movie-bottom">
                  <a href="movies/the-heart-of-the-matter-1953.html" class="browse-movie-title">The Heart of the Matter</a>
                  <div class="browse-movie-year">
                     1953<br>
                     <progress value="70" max="100" style="width: 55%; height:15px;"></progress> 1080p Web 
                  </div>
               </div>
            </div>
         </div> -->
      </div>
   </div>
   <div class="container hidden-md hidden-lg">
      <div class="row">
         <div class="mobile-footer">
            <div class="col-sm-20">
               <a href="index.html">
                  <span class="glyphicon glyphicon-home"></span> 
                  <p>Home</p>
               </a>
               <a href="browse-movies.html">
                  <span class="glyphicon glyphicon-list-alt"></span> 
                  <p>Browse</p>
               </a>
               <a href="login.html">
                  <span class="glyphicon glyphicon-log-in"></span> 
                  <p>Login</p>
               </a>
            </div>
            <div class="col-sm-20">
               <a href="register.html">
                  <span class="glyphicon glyphicon-user"></span> 
                  <p>Register</p>
               </a>
               <a href="login.html">
                  <span class="glyphicon glyphicon-asterisk"></span> 
                  <p>Requests</p>
               </a>
               <a href="login.html">
                  <span class="glyphicon glyphicon-pushpin"></span> 
                  <p>Suggestions</p>
               </a>
            </div>
         </div>
      </div>
   </div>
   <footer>
      <div class="container">
         <div class="row">
            <div class="col-xs-20">
               <ul class="text-center">
                  <li>HWMovies &copy; 2011 - 2021</li>
                  <!-- <li>-</li>
                     <li><a href="blog.html">Blog</a></li>
                     <li>-</li>
                     <li><a href="dmca.html">DMCA</a></li>
                     <li>-</li>
                     <li><a href="api.html">API</a></li>
                     <li>-</li>
                     <li><a href="rss-guide.html">RSS</a></li>
                     <li>-</li>
                     <li><a href="contact.html">Contact</a></li> -->
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
                  <li><a href="https://eztv.re/" title="EZTV">EZTV</a></li>
                  <li>-</li>
                  <!-- <li><a href="https://yifystatus.com/" title="YTS YIFY Status">YIFY Status</a></li>
                     <li>-</li>
                     <li><a href="https://ytsproxies.com/" title="YTS Proxies">YTS Proxies</a></li> -->
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
<script>
// $(document).ready(function(){
//    $.ajax({
//       type:'get',
//       url:'/get-movies-list',
//      success:function(response){

//      }
//    })
// })
</script>
@endsection