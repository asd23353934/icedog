console.log(movie_ticket);
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
               <span>${movie_ticket[ax]['categorysName']}</span> ${movie_ticket[0]['moviesName']}
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
            <a id="download" href="#" onclick="down(${ax})" class="btn btn-primary">電子票下載</a>
            <a id="cancel" href="#" onclick="cancel(${ax})" class="btn btn-primary">取消訂單</a>
        </div>
    </div>
    `;

}

function down(ax) {
    var number = movie_ticket[ax]['number'];
    if (number > 1){
        var seat_name = movie_ticket[ax]['seat_name'].split(",") ;
        console.log(seat_name);
        seat_name.map((elm,idx)=>{
            console.log(idx,elm);
            
        })
    }else{
        profile.innerHTML = `
        <div id="down_image">
            <img src="/image/大專首頁圖庫/R.jpg">
            <div id="down_content">
                <div><p>2<span>樓</span></p></div>
                <div><p>${movie_ticket[ax]['theatersName']}<span>廳</span></p></div>
                <div><p>A1<span>座</span></p></div>
                <div><p>放映時間</p></div>
                <div><p>${movie_ticket[ax]['show_date']} ${movie_ticket[ax]['show_time']}</p></div>
                <div><p>${movie_ticket[ax]['moviesName']}</p></div>
            </div>
        </div>
        <div id="down_qrcode">
            <p>第1張,共1張</p>
            <img src="/qrcode.jpg">
            <p>請出示此畫面給服務人員核銷入場</p>
        </div>
        `;
    }

}

function cancel() {
    profile.innerHTML = `
    <form id="cancel_form" method="POST">
        <div>確定後將退款</div>
        <input type="submit" name="cancel" value="確認取消">
    </form>
    
    `;
}