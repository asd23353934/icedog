<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../../bootstrap-4.6.1-dist/js/jquery.min.js"></script>
    <script src="../../bootstrap-4.6.1-dist/js/popper.min.js"></script>
    <script src="../../bootstrap-4.6.1-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../bootstrap-4.6.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../home.css">
    <link rel="stylesheet" href="register.css">
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
    <div id="registerSection">
        <img src="../../image/movie_image/movie18.jpg" alt="">
        <form id="registerBlock" method="post" action="">
            <div>
                <label id="userNameLabel" for="userName">帳&nbsp&nbsp&nbsp號</label>
                <input type="text" placeholder="UserName" id="userName">
            </div>
            <div>
                <label id="passWordLabel" for="passWord">密&nbsp&nbsp&nbsp碼</label>
                <input type="text" placeholder="PassWord" id="passWord">
            </div>
            <div>
                <label id="firstNameLabel" for="firstName">姓</label>
                <input type="text" placeholder="firstName" id="firstName">
            </div>
            <div>
                <label id="lastNameLabel" for="lastName">名</label>
                <input type="text" placeholder="lastName" id="lastName">
            </div>
            <div>
                <label id="mailLabel" for="mail">信&nbsp&nbsp&nbsp箱</label>
                <input type="text" placeholder="mail" id="mail">
            </div>
            <div>
                <label id="phoneNumberLabel" for="phoneNumber">手機號碼</label>
                <input type="text" placeholder="phoneNumber" id="phoneNumber">
            </div>
            <div id="btnGroup">
                <button type="submit">註冊</button>
                <button>重設</button>
            </div>

        </form>
    </div>


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