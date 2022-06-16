console.log(movie_ticket);
let profile = document.getElementById("profile");
let profile_content = profile.innerHTML;
let profile_tab = document.getElementById("profile-tab");
let ticket_content = document.querySelectorAll("#ticket_content");
//點擊我的票券重整內容
profile_tab.onclick = () => {
    profile.innerHTML = profile_content;
    console.log(profile_tab.href);
    history.replaceState(0, 0, profile_tab.href);
    // return false;
}

function ticket(ax) {
    console.log(ticket_content[ax].href);
    history.replaceState(0, 0, ticket_content[ax].href);
    profile.innerHTML = `
        <div id="record" class="list-group">
            <p id="record_name" class="record-list-group-item-heading">
               <span>${movie_ticket[ax]['categorysName']}</span> ${movie_ticket[ax]['moviesName']}
            </p>
        <div id="next_content">
            <p class="list-group-item-heading">
            上映場次
            <span id="date">${movie_ticket[ax]['show_date']}</span>
            <span>${movie_ticket[ax]['show_time']}</span>
            </p>
            <p class="list-group-item-heading">
                上映廳院
                <span id="cinemas">冰狗影城@</span>
                <span>${movie_ticket[ax]['cinemasName']}</span>
                <span>${movie_ticket[ax]['theatersName']}廳</span>
            </p>
            <p class="list-group-item-heading">
                電影分類
                <span id="categorys">${movie_ticket[ax]['type']}</span>
            </p>
            <p class="list-group-item-heading">
                票券張數
                <span id="categorys">${movie_ticket[ax]['number']}</span>
            </p>
            <p class="list-group-item-heading">
                劃位座號
                <span id="categorys">${movie_ticket[ax]['seat_name']}</span>
            </p>
            <p class="list-group-item-heading">
                餐點食物
                <span id="categorys">${movie_ticket[ax]['foodAll']}</span>
            </p>
            <p class="list-group-item-heading">
                付款金額
                <span id="categorys">${movie_ticket[ax]['priceAll']}</span>
            </p>
            <a id="download" href="#" onclick="down(0,${ax},0)" class="btn btn-primary">電子票下載</a>
            <a id="cancel" href="#" onclick="cancel(${ax})" class="btn btn-primary">取消訂單</a>
        </div>
    </div>
    `;
}
// 退款
function cancel(ax) {
    profile.innerHTML = `
    <div id="cancel_form">
        <div>確定後將全額退款</div>
        <a class="btn btn-primary" href="/IceDog/user/cancel/${ax}" role="button">確認取消</a>
    </div>
    `;
    let cancel_ = document.querySelector("#cancel_form a");
    console.log(cancel_);
    let movie_ticket = movie_ticket[ax]['ticket_id'];
    console.log(movie_ticket[ax]['ticket_id']);
    debugger;
    cancel_.onclick = () => {
        var xml = new XMLHttpRequest();
        xml.onreadystatechange=function() {
            if (this.readyState==4 && this.status==200) {
                if (this.response){
                    location.href = "http://localhost/IceDog/user/account/home";
                }else{
                    console.log(xml.response);
                    return false;
                }
            }
          }
        xml.open("GET", "../../ajax/cancelController.php?q=" + movie_ticket[ax]['ticket_id'], true);
        xml.send();
    }
}
// 核銷qrcode
function down(chage, ax, xa) {
    var seat_name = movie_ticket[ax]['seat_name'].split(",");
    var page = xa;
    if (chage == "reduce") {
        console.log(chage);
        page--;
    }
    if (chage == "add") {
        console.log(chage);
        page++;
    }
    if (page < 0) {
        page = seat_name.length - 1;
    }
    if (page > seat_name.length - 1) {
        page = 0;
    }
    // console.log(seat_name[0]);
    profile.innerHTML = `
        <button type="button" onclick="down('reduce',${ax},${page})" class="reduce"></button>
        <button type="button" onclick="down('add',${ax},${page})" class="add"></button>
        <div id="down_image">
            <img src="../../image/大專首頁圖庫/R.jpg">
            <div id="down_content">
                <div><p>2<span>樓</span></p></div>
                <div><p>${movie_ticket[ax]['theatersName']}<span>廳</span></p></div>
                <div><p>${seat_name[page]}<span>座</span></p></div>
                <div><p>放映時間</p></div>
                <div><p>${movie_ticket[ax]['show_date']} ${movie_ticket[ax]['show_time']}</p></div>
                <div><p>${movie_ticket[ax]['moviesName']}</p></div>
            </div>
        </div>
        <div id="down_qrcode">
            <p>第${page + 1}張,共${seat_name.length}張</p>
            <img src="../../qrcode.jpg">
            <p>請出示此畫面給服務人員核銷入場</p>
        </div>
        `;
}
// function downlist(chage,ax,page) {
//     if (chage == 'reduce') {
//         console.log(`${ax}`);
//         down(chage,ax,page);
//     }
//     if (chage == 'add') {
//         console.log(`${ax}`);
//         down(chage,ax,page);
//     }
// }
