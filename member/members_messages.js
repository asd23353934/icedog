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