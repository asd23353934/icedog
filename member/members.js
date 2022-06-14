console.log(arr);
let home = document.getElementById('home');
let home_content = home.innerHTML;
let home_tab = document.getElementById('home-tab');
let image_change = document.getElementById('image_change');
image_change.oninput = () => {
    var file = image_change.files[0];
    var formData = new FormData();
    formData.append("image",file);
    console.log(formData);
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = () => {
        if (xml.response) {
            console.log(xml.response);
            location.href = "http://localhost/IceDog/user/account/home";
        }else{
            console.log(xml.response);
        }
    }
    xml.open("POST", "../../ajax/mugshotController.php", true);
    xml.send(formData);
}
function home00() {
    home.innerHTML = `${home_content}`; //初始頁面
    home_primary = document.querySelectorAll("a[class ^= btn]"); //姓名變更 email變更 手機號碼變更 密碼變更
    home_primary.forEach((elm) => {
        elm.onclick = () => {
            home.innerHTML = `
                    <form>
                        <div class="row check">
                            <p id="name">密碼<input id="password_check"></input></p>
                        </div>
                        <button type="button" onclick="home01()" class="next btn btn-primary">下一步</button>
                    </form>
                    `;
            let home_primary = document.querySelector(".next");
            password_check.onkeydown = (event) => {
                if (event.keyCode == 13) {
                    home_primary.click();
                    return false;
                }
            }
            // let href = elm.href;
            console.log(elm.href);
            history.replaceState(0, 0, elm.href);
            return false;
        }
    })
    console.log(home_tab.href);
    history.replaceState(0, 0, home_tab.href);
    return false;
}
home00();

function home01() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = () => {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            console.log(xmlhttp.responseText);
            var urlstr = location.pathname.split("/");
            var urlend = urlstr[urlstr.length - 1];
            console.log(urlend);
            if (xmlhttp.response) {
                if (urlend == 'name') {
                    home.innerHTML = `
                            <form id="change">
                                <p id="name">姓</p>
                                <input type="text" name="firstName" id="firstName_input"></input>
                                <p id="name">名字</p>
                                <input type="text" name="lastName" id="lastName_input"></input>
                                <button type="button" class="btn btn-primary" onclick="home02('${urlend}')" value="確認更改"></button>
                            </form>
                            `;
                }
                if (urlend == 'email') {
                    home.innerHTML = `
                            <form id="change">
                                <p id="name">email</p>
                                <input type="text" name="email" id="email_input"></input>
                                <button type="button" class="btn btn-primary" onclick="home02('${urlend}')" value="確認更改"></button>
                            </form>
                            `;
                }
                if (urlend == 'phone') {
                    home.innerHTML = `
                            <form id="change">
                                <p id="name">phone</p>
                                <input type="text" name="phone" id="phone_input"></input>
                                <button type="button" class="btn btn-primary" onclick="home02('${urlend}')" value="確認更改"></button>
                            </form>
                            `;
                }
                if (urlend == 'password') {
                    home.innerHTML = `
                            <form id="change">
                                <p id="name">password</p>
                                <input type="text" name="password" id="password_input"></input>
                                <button type="button" class="btn btn-primary" onclick="home02('${urlend}')" value="確認更改"></button>
                            </form>
                            `;
                }

            } else {
                password_check.value = "";
            }
        }
    }
    xmlhttp.open("GET", "../../models/checkpassword.php?q=" + password_check.value, true);
    xmlhttp.send();
}

function home02(ax) {
    let test = ax;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = () => {
        if (xmlhttp.response) {
            console.log(xmlhttp.response);
            document.location.reload();
        } else {
            console.log(xmlhttp.response);
        }
    }
    console.log(test);
    if (test == "name") {
        xmlhttp.open("GET", `../../ajax/${test}Controller.php?q=${firstName_input.value}&c=${lastName_input.value}`, true);
    }
    if (test == "email") {
        xmlhttp.open("GET", `../../ajax/${test}Controller.php?q=${email_input.value}`, true);
    }
    if (test == "phone") {
        xmlhttp.open("GET", `../../ajax/${test}Controller.php?q=${phone_input.value}`, true);
    }
    if (test == "password") {
        xmlhttp.open("GET", `../../ajax/${test}Controller.php?q=${password_input.value}`, true);
    }
    xmlhttp.send();
}




let profile = document.getElementById("profile");
let profile_content = profile.innerHTML;
let profile_tab = document.getElementById("profile-tab");
//點擊我的票券重整內容
profile_tab.onclick = () => {
    profile.innerHTML = profile_content;
}
var url = document.URL, //获取当前页面的网址信息
    URL;
console.log(url);

console.log(home_primary);

function ticket(ax) {
    profile.innerHTML = `
        <div id="record" class="list-group">
            <p id="record_name" class="record-list-group-item-heading">
                ${arr.movie_ticket[0]['moviesName']}
            </p>
        <div id="next_content">
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
            <p class="list-group-item-heading">
                電影分類
                <span id="categorys">奇幻類</span>
            </p>
            <p class="list-group-item-heading">
                票券張數
                <span id="categorys">2</span>
            </p>
            <p class="list-group-item-heading">
                劃位座號
                <span id="categorys">A1</span>
            </p>
            <p class="list-group-item-heading">
                餐點食物
                <span id="categorys">可樂X2</span>
            </p>
            <p class="list-group-item-heading">
                付款金額
                <span id="categorys">7777</span>
            </p>
            <a id="download" href="#" onclick="down()" class="btn btn-primary">電子票下載</a>
            <a id="cancel" href="#" onclick="cancel()" class="btn btn-primary">取消訂單</a>
        </div>
    </div>
    `;

}

function down() {
    profile.innerHTML = `
        <div id="down_image">
            <img src="/image/大專首頁圖庫/R.jpg">
            <div id="down_content">
                <div><p>2<span>樓</span></p></div>
                <div><p>A<span>廳</span></p></div>
                <div><p>A1<span>座</span></p></div>
                <div><p>放映時間</p></div>
                <div><p>2087/12/12 20:30</p></div>
                <div><p>ㄐㄐ博士</p></div>
            </div>
        </div>
        <div id="down_qrcode">
            <p>第1張,共1張</p>
            <img src="/qrcode.jpg">
            <p>請出示此畫面給服務人員核銷入場</p>
        </div>
    `;
}

function cancel() {
    profile.innerHTML = `
    <form id="cancel_form" method="POST">
        <div>確定後將退款</div>
        <input type="submit" name="cancel" value="確認取消">
    </form>
    
    `;
}

// 消費紀錄
let messages = document.getElementById("messages");
let messages_content = messages.innerHTML;
let messages_tab = document.getElementById("messages-tab");
//點擊消費紀錄重整內容
messages_tab.onclick = () => {
    messages.innerHTML = messages_content;
}

function message(ax) {
    messages.innerHTML = `
        <div id="record" class="list-group">
            <p id="record_name" class="record-list-group-item-heading">
                ㄐㄐ博士
            </p>
            <div id="next_content">
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
                <p class="list-group-item-heading">
                    電影分類
                    <span id="categorys">奇幻類</span>
                </p>
                <p class="list-group-item-heading">
                    票券張數
                    <span id="categorys">2</span>
                </p>
                <p class="list-group-item-heading">
                    劃位座號
                    <span id="categorys">A1</span>
                </p>
                <p class="list-group-item-heading">
                    餐點食物
                    <span id="categorys">可樂X2</span>
                </p>
                <p class="list-group-item-heading">
                    付款金額
                    <span id="categorys">7777</span>
                </p>
            </div>
        </div>
`;
}

let settings = document.getElementById("settings");
let settings_content = settings.innerHTML;
let settings_tab = document.getElementById("settings-tab");

settings_tab.onclick = () => {
    settings.innerHTML = settings_content;
}

function card_list(ax) {
    settings.innerHTML = `
    <form method="POST">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">信用卡號碼</span>
            </div>
            <input type="text" autocomplete="off" maxlength="19" placeholder="1234 1234 1234 1234" class="form-control">
        </div>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">信用卡到期日</span>
            </div>
            <input type="text" autocomplete="off" maxlength="5" placeholder="MM/YY" class="form-control">
        </div>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">安全驗證碼</span>
            </div>
            <input type="text" autocomplete="off" maxlength="3" placeholder="安全驗證碼" class="form-control">
        </div>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">持卡名字</span>
            </div>
            <input type="text" autocomplete="off"  placeholder="持卡名字" class="form-control">
        </div>
        
    </form>
    
    `;
    let form_control = document.querySelectorAll(".form-control");
    form_control[0].onkeyup = () => {
        console.log(form_control[0].value);
        let a = Array.from(form_control[0].value.split(" ").join(""));
        j = 4;
        for (i = 0; i < a.length; i++) {
            if (i == j) {
                j += 5;
                a.splice(i, 0, " ");
            }
        }
        b = a.join("");
        form_control[0].value = b;
    }
}