// 消費紀錄
let messages = document.getElementById("messages");
let messages_content = messages.innerHTML;
let messages_tab = document.getElementById("messages-tab");
let messages_page = document.querySelectorAll("#messages a");
//點擊消費紀錄重整內容
messages_tab.onclick = () => {
    messages.innerHTML = messages_content;
    history.replaceState(0, 0, messages_tab.href);
}

function message(ax) {
    console.log(messages_page[ax].href);
    history.replaceState(0, 0, messages_page[ax].href);
    messages.innerHTML = `
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
    </div>
</div>
`;
}
