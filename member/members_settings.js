let settings = document.getElementById("settings");
let settings_content = settings.innerHTML;
let settings_tab = document.getElementById("settings-tab");

settings_tab.onclick = () => {
    settings.innerHTML = settings_content;
    history.replaceState(0, 0, settings_tab.href);
}

function card_message(ax) {
    cardstr = creditcards[ax]['account'].slice(0,5);
    strcard = creditcards[ax]['account'].slice(10,14);
    str = cardstr+"*****"+strcard;
    console.log(str);
    settings.innerHTML = `
    <div id="credit_card" class="list-group">
        <p id="credit_card_name" class="record-list-group-item-heading">
            ${creditcards[ax]['bankName']}
        </p>
        <div id="credit_card_content">
            <div id="content_card">
                <p>卡號 <span>${str}</span> </p>
                <p>有效日期 <span>${creditcards[ax]['year']}/${creditcards[ax]['month']}</span>  </p>
            </div>
        </div>
    </div>
    `
}


function card_list(ax) {
    settings.innerHTML = `
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">銀行名稱</label>
            <input type="text" autocomplete="off" placeholder="中國信託" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">信用卡號碼</label>
            <input type="text" autocomplete="off" maxlength="19" placeholder="1234 1234 1234 1234" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">信用卡到期日</label>
            <input type="text" autocomplete="off" maxlength="7" placeholder="MM/YY" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">安全驗證碼</label>
            <input type="text" autocomplete="off" maxlength="3" placeholder="XXX" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">持卡名字</label>
            <input type="text" autocomplete="off"  placeholder="持卡名字" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    `;
    let settings_form = document.querySelector("#settings form");
    console.log(settings_form);
    settings_form.onsubmit = () => {
        return false;
    }
    let form_control = document.querySelectorAll(".form-control");
    form_control[1].onkeyup = () => {
        console.log(form_control[1].value);
        let a = Array.from(form_control[1].value.split(" ").join(""));
        let j = 4;
        for (i = 0; i < a.length; i++) {
            if (i == j) {
                j += 5;
                a.splice(i, 0, " ");
            }
        }
        b = a.join("");
        form_control[1].value = b;
    }
    form_control[2].onkeyup = () => {
        console.log(form_control[2].value);
        let a = Array.from(form_control[2].value.split("/").join(""));
        let j = 4;
        for (i = 0; i < a.length; i++) {
            if (i == j) {
                j += 5;
                a.splice(i, 0, "/");
            }
        }
        b = a.join("");
        form_control[2].value = b;
    }
    let settings_submit = document.querySelector("button[class ^= btn]");
    console.log(settings_submit);
    settings_submit.onclick = () => {
        let str = [];
        form_control.forEach((elm) => {
            str.push(elm.value);
        })
        console.log(str);
        var xml = new XMLHttpRequest();
        xml.onreadystatechange = () => {
            if (xml.response) {
                console.log(xml.response);
                location.href = "http://localhost/IceDog/user/account/home";
            } else {
                console.log(xml.response);
                return false;
            }
        }
        xml.open("POST", "../../ajax/creditcardController.php?q="+ str, true);
        xml.send();
        
    }
}