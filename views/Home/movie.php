<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="movie.css">
    <link rel="stylesheet" href="./home.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



   
    <script type="text/javascript" src="./responsive_jquery/jquery.js"></script>
    <script type="text/javascript" src="./responsive_jquery/jquery.jcarousel.min.js"></script>
    <!-- 電影輪播修改版 -->
    <script type="text/javascript" src="./responsive_jquery/jcarousel.responsive.movie.js"></script>
    <link rel="stylesheet" type="text/css" href="./responsive_jquery/jcarousel.responsive.movie.css">

    <!-- 演員輪播 -->
    <link rel="stylesheet" href="../movie/carousel/carousel.css">
    <script src="../movie/carousel/carousel.js"></script>


</head>

<body>
    <span class="loadinout">登入/註冊</span>

    <div class="navBar">
        <label class="hamburger" for="menuBtn"><span>選單</span></label>
        <div class="logoDiv"><img src="./image/大專首頁圖庫/R.jpg" alt=""></div>
        <div>
            <ul>
                <li><a href="#">首頁</a></li>
                <li>電影
                    <ul class='navMenu'>
                        <li><a href="#">現正熱映</a></li>
                        <li><a href="#">即將上映</a></li>
                    </ul>
                </li>
                <li>購票
                    <ul class='navMenu'>
                        <li><a href="#">線上訂票</a></li>
                        <li><a href="#">團體優惠</a></li>
                        <li><a href="#">購票說明</a></li>
                        <li><a href="#">常見問題</a></li>
                    </ul>
                </li>
                <li>活動公告
                    <ul class='navMenu'>
                        <li><a href="#"> 最新消息</a></li>
                        <li><a href="#"> 中獎名單</a></li>
                        <li><a href="#"> 電影周邊商品</a></li>
                    </ul>
                </li>
                <li>會員專區
                    <ul class='navMenu'>
                        <li><a href="#">會員申辦</a></li>
                        <li><a href="#">會員活動</a></li>
                        <li><a href="#">會員好康</a></li>
                        <li><a href="#">紅利點數</a></li>
                        <li><a href="#">會員Q/A</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>




    <!-- section1 -->
    <div id="section1">
        <div id="movieIntro">
            <div id="movieTitle">
                <span class="glyphicon glyphicon-play" style="font-size:large; color:white"></span>
                <h3>電影介紹</h3>
            </div>
            <img id="movieImg" src="./image/movie_image/movie4.jpg" alt="">
        </div>
        <div id="movieIntroTxt">
            <div id="movieIntroTxtTop">
                <h3>捍衛戰士：獨行俠</h3>
                <div>
                    <a href="#">
                        <span id="movieIntroTxtHeart" class="glyphicon glyphicon-heart"></span>
                    </a>
                </div>
            </div>
            <p>Top Gun: Maverick</p>
            <hr id="movieIntroHr">
            <div id="movieIntroMid">
                上映日：2022/05/25
                <br>
                類型：動作，劇情
                <br>
                導演：喬瑟夫柯辛斯基(Joseph Kosinski)
                <br>
                演員：
                湯姆克魯斯(Tom Cruise)，喬漢姆(Jon H amm)，珍妮佛康納莉(Jennifer Connelly)
                <br>
                ，方基墨(Val Kilmer)，麥爾斯泰勒(Miles Teller)，艾德哈里斯(Ed
                Harris)，格蘭鮑威爾(Glen Powell)
            </div>
            <div id="movieIntroLast">
                片長： 1 時 36 分
            </div>
        </div>
        <div id="grayBar1"></div>
        <img id="backgroundImg" src="./image/大專首頁圖庫/OIP.jpg" alt="">

    </div>



    <!-- section2 -->
    <div id="section2">
        <!-- 購票 -->
        <div id="movieBuyTicket">
            <p id="movieBuyTicketText">電影名稱</p>
            <select name="" id="movieBuyTicketTheater">
                <option value="長春國賓影城">長春國賓影城</option>
            </select><br>
            <select name="" id="movieBuyTicketDate">
                <option value="">2022/06/30</option>
            </select><br>
            <button id="movieBuyTicketBtn">訂票</button>
        </div>


        <div id="movieDescTop">
            <span class="whiteArrow glyphicon glyphicon-chevron-right"></span>
            <p class="title">劇情簡介 / ABOUT THE STORY</p>
        </div>
        <div id="movieDescLast">
            <p>派拉蒙影業1986年推出的《捍衛戰士》，由湯姆克魯斯主演，
                是一齣以航空母艦與美國海軍戰鬥機武器學校為背景的勵志動作電影
                ，在當年締造了全球3億5千6百多萬美元的票房成績。
                睽違33年之後，派拉蒙影業將在2020年6月26日暑假檔期推出美國軍事動作鉅片
                《捍衛戰士：獨行俠》，是1986年電影《捍衛戰士》的續集，
                同樣選擇在美國聖地牙哥海軍航空基地拍攝，這次導演是約瑟夫柯金斯基《遺落戰境》
                ，主要演員有湯姆克魯斯(《捍衛戰士》、《不可能的任務》系列)、珍妮佛康納莉
                《艾莉塔：戰鬥天使》、邁爾斯泰勒《進擊的鼓手》、喬漢姆《貼背戰》、
                艾德哈里斯《母親！》、格蘭鮑威爾《浴血任務3》、路易斯普曼《勝負反手拍》…等。為了慶祝在</p>
            <button id="movieMoreBtn"><b>更多</b> </button>
        </div>
    </div>



    <!-- section3 -->
    <div id="section3">
        <div id="movieVideoTop">
            <span class="whiteArrow glyphicon glyphicon-chevron-right"></span>
            <p class="title">預告片</p>
        </div>
        <div id="movieVideoLast">
            <video id="movieVideo" controls>
                <source src="./video/movie4.mp4" type="video/mp4">
            </video>
        </div>
    </div>



    <!-- section4 -->
    <div id="section4">
        <div id="movieActorTop">
            <span class="whiteArrow glyphicon glyphicon-chevron-right"></span>
            <p class="title">重量級演員</p>
        </div>
        
            <div class="hs__wrapper">
                <ul class="hs">
                    <li class="hs__item">
                        <div class="hs__item__image__wrapper">
                            <img class="hs__item__image" src="./image/movie_image/movie15.jpg" alt="" />
                        </div>
                    </li>
                    <li class="hs__item">
                        <div class="hs__item__image__wrapper">
                            <img class="hs__item__image" src="./image/movie_image/movie15.jpg" alt="" />
                        </div>
                    </li>
                    <li class="hs__item">
                        <div class="hs__item__image__wrapper">
                            <img class="hs__item__image" src="./image/movie_image/movie15.jpg" alt="" />
                        </div>
                    </li>
                    <li class="hs__item">
                        <div class="hs__item__image__wrapper">
                            <img class="hs__item__image" src="./image/movie_image/movie15.jpg" alt="" />
                        </div>
                    </li>
                    <li class="hs__item">
                        <div class="hs__item__image__wrapper">
                            <img class="hs__item__image" src="./image/movie_image/movie15.jpg" alt="" />
                        </div>
                    </li>
                    <li class="hs__item">
                        <div class="hs__item__image__wrapper">
                            <img class="hs__item__image" src="./image/movie_image/movie15.jpg" alt="" />
                        </div>
                    </li>
                    <li class="hs__item">
                        <div class="hs__item__image__wrapper">
                            <img class="hs__item__image" src="./image/movie_image/movie15.jpg" alt="" />
                        </div>
                    </li>
                </ul>
            
        </div>
        <!-- <div class="movieActorSection">
                <img class="movieActorImg" src="./image/大專首頁圖庫/p1.jpg" alt="">
                <p class="movieActorDec">派拉蒙影業1986年推出的《捍衛戰士》，由湯姆克魯斯主演，
                    是一齣以航空母艦與美國海軍戰鬥機武器學校為背景的勵志動作電影
                    ，在當年締造了全球3億5千6百多萬美元的票房成績。
                    睽違33年之後，派拉蒙影業將在2020年6月26日暑假檔期推出美國軍事動作鉅片
                    《捍衛戰士：獨行俠》，是1986年電影《捍衛戰士》的續集，
                </p>
                <p class="movieActorName">演員姓名</p>
            </div>
            <div class="movieActorSection">
                <img class="movieActorImg" src="./image/大專首頁圖庫/p2.jpg" alt="">
                <p class="movieActorDec">派拉蒙影業1986年推出的《捍衛戰士》，由湯姆克魯斯主演，
                    是一齣以航空母艦與美國海軍戰鬥機武器學校為背景的勵志動作電影
                    ，在當年締造了全球3億5千6百多萬美元的票房成績。
                    睽違33年之後，派拉蒙影業將在2020年6月26日暑假檔期推出美國軍事動作鉅片
                    《捍衛戰士：獨行俠》，是1986年電影《捍衛戰士》的續集，
                </p>
                <p class="movieActorName">演員姓名</p>
            </div>
            <div class="movieActorSection">
                <img class="movieActorImg" src="./image/大專首頁圖庫/p3.jpg" alt="">
                <p class="movieActorDec">派拉蒙影業1986年推出的《捍衛戰士》，由湯姆克魯斯主演，
                    是一齣以航空母艦與美國海軍戰鬥機武器學校為背景的勵志動作電影
                    ，在當年締造了全球3億5千6百多萬美元的票房成績。
                    睽違33年之後，派拉蒙影業將在2020年6月26日暑假檔期推出美國軍事動作鉅片
                    《捍衛戰士：獨行俠》，是1986年電影《捍衛戰士》的續集，
                </p>
                <p class="movieActorName">演員姓名</p>
            </div> -->
    </div>
    </div>


    <!-- section5 -->
    <div id="section5">
        <div id="movieTimeTop">
            <div id="movieTimeTitleBlock">
                <span class="whiteArrow glyphicon glyphicon-chevron-right" style="color: black!important;"></span>
                <p class="title" id="movieTimeTitle">電影時刻表</p>
            </div>
            <p id="movieSelectTitle">日期選擇:</p>
            <select name="" id="movieSelect">
                <option value="2022 / 05 /17">2022 / 05 /17</option>
            </select>
        </div>
    </div>
    <!-- 變動區 -->
    <div class="movieTimeSection">
        <div class="movieTimeLabel">
            台北長春國賓影城
        </div>
        <div class="movieTimeBlock">
            <p class="movieTimeText">場次:</p>
            <div class="movieTimeBtnGroup">
                <button class="movieTimeBtn btn btn-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                    15:30
                </button>
                <button class="movieTimeBtn btn btn-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                    15:30
                </button>
                <button class="movieTimeBtn btn btn-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                    15:30
                </button>
                <button class="movieTimeBtn btn btn-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                    15:30
                </button>
                <button class="movieTimeBtn btn btn-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                    15:30
                </button>
                <button class="movieTimeBtn btn btn-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                    15:30
                </button>
                <button class="movieTimeBtn btn btn-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                    15:30
                </button>
                <button class="movieTimeBtn btn btn-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                    15:30
                </button>
                <button class="movieTimeBtn btn btn-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                    15:30
                </button>
            </div>
        </div>
        <hr class="movieTimeHr">
        <div class="collapse" id="collapse1">
            <div class="card card-body">
                <img id="movieTimeSeat" src="./image/大專首頁圖庫/R (1).jpg" alt="">
            </div>
        </div>
    </div>
    <div class="movieTimeSection">
        <div class="movieTimeLabel">
            台北長春國賓影城
        </div>
        <div class="movieTimeBlock">
            <p class="movieTimeText">場次:</p>
            <div class="movieTimeBtnGroup">
                <button class="movieTimeBtn btn btn-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                    15:30
                </button>
                <button class="movieTimeBtn btn btn-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                    15:30
                </button>
                <button class="movieTimeBtn btn btn-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                    15:30
                </button>
                <button class="movieTimeBtn btn btn-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                    15:30
                </button>
                <button class="movieTimeBtn btn btn-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                    15:30
                </button>
                <button class="movieTimeBtn btn btn-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                    15:30
                </button>
                <button class="movieTimeBtn btn btn-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                    15:30
                </button>
                <button class="movieTimeBtn btn btn-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                    15:30
                </button>
                <button class="movieTimeBtn btn btn-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                    15:30
                </button>
            </div>
        </div>
        <hr class="movieTimeHr">
        <div class="collapse" id="collapse2">
            <div class="card card-body">
                <img id="movieTimeSeat" src="./image/大專首頁圖庫/R (1).jpg" alt="">
            </div>
        </div>
    </div>
    <div class="movieTimeSection">
        <div class="movieTimeLabel">
            台北長春國賓影城
        </div>
        <div class="movieTimeBlock">
            <p class="movieTimeText">場次:</p>
            <div class="movieTimeBtnGroup">
                <button class="movieTimeBtn btn btn-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                    15:30
                </button>
                <button class="movieTimeBtn btn btn-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                    15:30
                </button>
                <button class="movieTimeBtn btn btn-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                    15:30
                </button>
                <button class="movieTimeBtn btn btn-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                    15:30
                </button>
                <button class="movieTimeBtn btn btn-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                    15:30
                </button>
                <button class="movieTimeBtn btn btn-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                    15:30
                </button>
                <button class="movieTimeBtn btn btn-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                    15:30
                </button>
                <button class="movieTimeBtn btn btn-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                    15:30
                </button>
                <button class="movieTimeBtn btn btn-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                    15:30
                </button>
            </div>
        </div>
        <hr class="movieTimeHr">
        <div class="collapse" id="collapse3">
            <div class="card card-body">
                <img id="movieTimeSeat" src="./image/大專首頁圖庫/R (1).jpg" alt="">
            </div>
        </div>
    </div>

    <!-- section6 -->
    <div id="section6">
        <div id="movieRecommendTop">
            <span class="whiteArrow glyphicon glyphicon-chevron-right"></span>
            <p class="title">推薦電影</p>
        </div>

        <div class="carousel">
            <div class="wrapper">
                <div class="jcarousel-wrapper">
                    <div class="jcarousel">
                        <ul>
                            <li>
                                <img class="movieRecommendImg" src="./image/movie_image/movie10.jpg">
                            </li>
                            <li>
                                <img class="movieRecommendImg" src="./image/movie_image/movie10.jpg">
                            </li>
                            <li>
                                <img class="movieRecommendImg" src="./image/movie_image/movie10.jpg">
                            </li>
                            <li>
                                <img class="movieRecommendImg" src="./image/movie_image/movie10.jpg">
                            </li>
                            <li>
                                <img class="movieRecommendImg" src="./image/movie_image/movie10.jpg">
                            </li>
                        </ul>
                    </div>
                    <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                    <a href="#" class="jcarousel-control-next">&rsaquo;</a>

                    <p class="jcarousel-pagination"></p>
                </div>
            </div>
        </div>
    </div>


    <!-- 頁尾 -->

    <div class="footer row">
        <div class="col-12 col-lg-4 order-md-last"><img src="./image/大專首頁圖庫/R.jpg" alt=""></div>

        <div class="col-12 col-lg-8 row">
            <div class="col-3">
                <p>關於影城</p>
                <p><a href="">電影介紹</a></p>
                <p><a href="">影城據點</a></p>
                <p><a href="">影廳介紹</a></p>
                <p><a href="">消息公告</a></p>
                <p><a href="">顧客意見回饋</a></p>
                <p><a href="">客服人員</a></p>
            </div>
            <div class="col-3">
                <p>會員專區</p>
                <p><a href="">加入會員</a></p>
                <p><a href="">會員好康</a></p>
                <p><a href="">紅利點數</a></p>
                <p><a href="">會員資料修改</a></p>
                <p><a href="">忘記密碼</a></p>
                <p><a href=""> 常見問題</a>
            </div>
            <div class="col-3">
                <p>線上訂票</p>
                <p><a href="">電影訂票</a></p>
                <p><a href="">團體訂票</a></p>
                <p><a href="">訂票說明</a></p>
            </div>
        </div>
    </div>


</body>

</html>