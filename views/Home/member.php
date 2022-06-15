<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="../../bootstrap-5.1.1-dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="./bootstrap-4.6.1-dist/css/bootstrap.min.css"> -->
    <script src="../../jquery-3.6.0.js"></script>
    <script src="../../bootstrap-5.1.1-dist/js/bootstrap.min.js"></script>
    <!-- <script src="./bootstrap-4.6.1-dist/js/bootstrap.min.js"></script> -->
    <!-- <script src="./bootstrap-4.6.1-dist/js/jquery.min.js"></script> -->
    <link rel="stylesheet" href="../../home.css">
    <link rel="stylesheet" href="../../member/members.css">
</head>

<body>


    <span class="loadinout">登入/註冊</span>
    <input type="radio" id="menuBtn">
    <div class="navBar">
        <label class="hamburger" for="menuBtn"><span>選單</span></label>
        <div class="logoDiv"><img src="../../image/大專首頁圖庫/R.jpg" alt=""></div>
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

    <div id="all">
        <div id="all_content">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" onclick="home00()" href="/IceDog/user/account/home" role="tab" aria-controls="home" aria-selected="true">個人資訊</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" onclick="profile00()" href="/IceDog/user/account/profile" role="tab" aria-controls="profile" aria-selected="false">我的票夾</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" onclick="messages00()" href="/IceDog/user/account/messages" role="tab" aria-controls="messages" aria-selected="false">消費紀錄</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" onclick="settings00()" href="/IceDog/user/account/settings" role="tab" aria-controls="settings" aria-selected="false">信用卡夾</a>
                </li>
            </ul>

            <div id="content" class="tab-content">
                <!-- 個人資訊 -->
                <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row">
                        <p id="name">
                            姓
                            <span id="firstName">
                                <?php echo $data['users']['firstName'] ?>
                            </span>
                            |名字
                            <span id="lastName">
                                <?php echo $data['users']['lastName'] ?>
                            </span>
                        </p>
                    </div>
                    <a class="btn btn-primary" href="/IceDog/user/account/name" role="button">變更</a>
                    <div class="row">
                        <p id="name">
                            Email
                            <span id="email">
                                <?php echo $data['users']['email'] ?>
                            </span>
                        </p>
                    </div>
                    <a class="btn btn-primary" href="/IceDog/user/account/email" role="button">變更</a>
                    <div class="row">
                        <p id="name">
                            手機號碼
                            <span id="phone">
                                <?php echo $data['users']['phone'] ?>
                            </span>
                        </p>
                    </div>
                    <a class="btn btn-primary" href="/IceDog/user/account/phone" role="button">變更</a>
                    <div class="row">
                        <p id="name">
                            密碼
                            <span id="password">
                                <?php echo $data['users']['password'] ?>
                            </span>
                        </p>
                    </div>
                    <a class="btn btn-primary" href="/IceDog/user/account/password" role="button">變更</a>
                    <div class="text-center">
                        <img src="data:image/jpg;base64,<?php echo base64_encode($data['users']['image']) ?>" class="rounded">
                    </div>
                    <input id="image_change" type="file" accept=".jpg,.jpeg,.png" hidden>
                    <a onclick="image_change.click();" id="File_image" class="image btn btn-primary" href="#" role="button">變更大頭貼</a>
                    <p id="image_button">
                        <?php echo $data['users']['firstName'] . $data['users']['lastName'] ?>
                    </p>
                </div>
                <!-- 我的票夾 -->
                <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <?php foreach ($data['movie_ticket'] as $key => $value) : ?>
                        <div id="ticket" class="list-group">
                            <p id="ticket_name" class="ticket-list-group-item-heading">
                                <span><?php echo $value['categorysName']?></span><?php echo " " . $value['moviesName'] ?>
                            </p>
                            <a href="/IceDog/user/account/<?php echo $key?>" onclick="ticket(<?php echo $key?>)" id="ticket_content">
                                <p class="list-group-item-heading">
                                    上映場次
                                    <span id="date"><?php echo $value['show_date'] ?></span>
                                    <span><?php echo $value['show_time'] ?></span>
                                </p>
                                <p class="list-group-item-heading"></p>
                                上映廳院
                                <span id="cinemas">冰狗影城@</span>
                                <span><?php echo $value['cinemasName'] ?></span>
                                <span><?php echo $value['theatersName'] ?></span>
                                </p>
                                <p id="click_check">點擊查看</p>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- 消費紀錄 -->
                <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                    <!-- <div id="consumption" class="list-group">
                        <p id="record_name" class="record-list-group-item-heading">
                            ㄐㄐ博士
                        </p>
                        <a href="#" onclick="message(1)" id="record_content">
                            <p class="list-group-item-heading">
                                上映場次
                                <span id="date">2087-09-09</span>
                                <span>20:30</span>
                            </p>
                            <p class="list-group-item-heading">
                                上映廳院
                                <span id="cinemas">冰狗影城@</span>
                                <span>台北信義區</span>
                                <span>A廳</span>
                            </p>
                            <p id="click_check">點擊查看</p>
                        </a>
                    </div>
                    <div id="sp"></div> -->
                    <?php foreach ($data['movie_ticket'] as $key => $value) : ?>
                        <div id="ticket" class="list-group">
                            <p id="ticket_name" class="ticket-list-group-item-heading">
                                <span><?php echo $value['categorysName']?></span><?php echo " " . $value['moviesName'] ?>
                            </p>
                            <a href="#" onclick="ticket(<?php echo $key?>)" id="ticket_content">
                                <p class="list-group-item-heading">
                                    上映場次
                                    <span id="date"><?php echo $value['show_date'] ?></span>
                                    <span><?php echo $value['show_time'] ?></span>
                                </p>
                                <p class="list-group-item-heading"></p>
                                上映廳院
                                <span id="cinemas">冰狗影城@</span>
                                <span><?php echo $value['cinemasName'] ?></span>
                                <span><?php echo $value['theatersName'] ?></span>
                                </p>
                                <p id="click_check">點擊查看</p>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- 信用卡夾 -->
                <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                    <div id="credit_card" class="list-group">
                        <p id="credit_card_name" class="record-list-group-item-heading">
                            信用卡/金融卡
                        </p>
                        <div id="credit_card_content">
                            <a href="#" onclick="card_list(1)" id="credit_card_list">
                                <div id="card_content">
                                    <p>忠狗信託</p>
                                    <p>8787*</p>
                                    <div></div>
                                </div>
                            </a>
                            <a href="#" onclick="card_new()" id="credit_card_new">
                                <div id="card_content">
                                    <p>+</p>
                                    <p>新增卡片</p>
                                    <div></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
    <script type="text/javascript">
        let movie_ticket = <?php echo json_encode($data['movie_ticket']); ?>;
        // console.log(arr);
    </script>
    <script src="../../member/members_home.js"></script>
    <script src="../../member/members_profile.js"></script>
    <script src="../../member/members_messages.js"></script>
    <script src="../../member/members_settings.js"></script>
</body>

</html>