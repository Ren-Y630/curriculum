// document.querySelector("#createBtn").addEventListener("click", function () {
//     let item = document.createElement("li");
//     item.textContent = "item";

//     let ul = document.querySelector("ul");
//     ul.appendChild(item);
// });

// function createBtn() {
//     let item = document.createElement("li");
//     item.textContent = "item";

//     let ul = document.querySelector('ul');
//     ul.appendChild(item);
// }

// 課題
function addText1() {
    //①入力欄のテキストを取得
    let text1 = document.getElementById("text1").value;
    // console.log(text1);
    //②出力欄のテキストエリアを取得
    let area1 = document.getElementById("area1");
    // console.log(area1);
    //③出力欄に入力された文字列を足していく
    area1.value += text1 +"\n";
}

function deleteText1() {
    //④出力欄のテキストを空にする
    let deleteText1 = document.getElementById("text1");
    deleteText1.value = "";
    //⑤入力欄のテキストを空にする
    let deleteArea1 = document.getElementById("area1");
    deleteArea1.value = "";
}



function addText2() {
    //①入力欄のテキストを取得
    let text2 = document.getElementById("text2").value;
    // console.log(text1);
    //②出力欄のテキストエリアを取得
    let area2 = document.getElementById("area2");
    // console.log(area1);
    //③出力欄に入力された文字列を足していく
    area2.value = text2 + "\n" + area2.value;
}

function deleteText2() {
    //④出力欄のテキストを空にする
    let deleteText = document.getElementById("text2");
    deleteText.value = "";
    //⑤入力欄のテキストを空にする
    let deleteArea = document.getElementById("area2");
    deleteArea.value = "";
}