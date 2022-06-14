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