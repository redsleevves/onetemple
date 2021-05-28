let arr = ["大智山玄空法寺", "壽山巖觀音寺", "麥寮拱範宮", "草屯雷藏寺", "佛光山寺", "松山慈惠堂", "台灣護聖宮", "北港朝天宮", "松山慈祐宮", "大甲鎮瀾宮", "法鼓山", "南鯤鯓代天府", "正統鹿耳門聖母廟", "鹿港天后宮", "臺東天后宮", "高雄代天宮", "松山奉天宮", "鹿港龍山寺", "日月潭文武廟"]

let keyword = document.getElementById('keyword')
keyword.addEventListener('input', updateResult);

function updateResult() {
    const query = keyword.value
    let resultList = document.querySelector(".result");
    let resultHead = document.querySelector("#secondHead");
    resultList.innerHTML = "";
    let isResult = false;
    if (query) {
        arr.map(function (bingo) {

            query.split(" ").map(function (word) {
                console.log(bingo, word)
                if (bingo.indexOf(word) != -1) {
                    isResult = true;
                    resultList.innerHTML += `<li class="result_list">${bingo}</li>`;
                }
            })
            if (!isResult) {
                resultList.innerHTML = `<p>查無資料</p>`;
            }

        })
    }
    else {
        resultList.innerHTML = `<div class="hot_feature col-lg-6">
        <img src="/img/hotTemple (1).jpg">
        <p class="tempname">清水祖師廟1</p>
    </div>
    <div class="hot_feature col-lg-6">
        <img src="/img/hotTemple (2).jpg">
        <p class="tempname">清水祖師廟2</p>
    </div>
    <div class="hot_feature col-lg-6">
        <img src="/img/hotTemple (3).jpg">
        <p class="tempname">清水祖師廟3</p>
    </div>
    <div class="hot_feature col-lg-6">
        <img src="/img/hotTemple (4).jpg">
        <p class="tempname">清水祖師廟4</p>
    </div>
    <div class="hot_feature col-lg-6">
        <img src="/img/hotTemple (1).jpg">
        <p class="tempname">清水祖師廟5</p>
    </div>
    <div class="hot_feature col-lg-6">
        <img src="/img/hotTemple (2).jpg">
        <p class="tempname">清水祖師廟6</p>
    </div>
    <div class="hot_feature col-lg-6">
        <img src="/img/hotTemple (3).jpg">
        <p class="tempname">清水祖師廟7</p>
    </div>
    <div class="hot_feature col-lg-6">
        <img src="/img/hotTemple (4).jpg">
        <p class="tempname">清水祖師廟8</p>
    </div>
    <i class="fas fa-angle-left prevPic"></i>
    <i class="fas fa-angle-right nextPic"></i>`
    }
}

// resultHead.innerHTML = `<p>搜尋結果</p>`
