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
    // return false;
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