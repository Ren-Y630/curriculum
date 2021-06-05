// let box = document.querySelector(".box");
// console.log(box);

// let boxs = document.querySelector("#box");
// console.log("box");


// let boxClass = document.querySelectorAll(".box");
// for (let i = 0; i < boxClass.length; i++) {
//     console.log(boxClass[i]);
// }


// let elems = document.querySelectorAll('form > .box');
// for(let i = 0; i < elems.length; i++) {
//     console.log(elems[i]);
// }

// let elems = document.querySelectorAll("input[type=radio]");
// for (let i = 0; i < elems.length; i++) {
//     console.log(elems[i]);
// }


// 課題


// ①id「p1」の要素を取得

document.getElementById("p1");
function changeBtn1() {
        if (p1.style.display=="") {
            p1.style.display="none";
        } else {
            p1.style.display="";
        }
    }
    // ②取得したp1に「display:none」が無かったら、「display:none」を付与する。
    // 取得したp1に「display:none」があったら、「display:block」を付与する。

    
document.querySelector("p2").style.display="none";
function changeBtn2() {
    if (p2.style.display=="block") {
        p2.style.display="none";
    } else {
        p2.style.display="block"
    }
}

