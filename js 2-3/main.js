 //btnを取得
const btn = document.getElementById('btn');

 // ボタンがクリックされたら、という処理の始まり
btn.addEventListener('click', function() {
     //①配列で「大吉」「中吉」「凶」を準備
    let omikuji = ["大吉", "中吉", "凶"];
     //②乱数を発生させて、その値を取得
    let num = Math.floor(Math.random() * omikuji.length);
     //③取得した **btn** の「クリック」という文字を配列の中身の文字にランダムに変化させる
    document.getElementById("btn").innerHTML=(omikuji[num]);
    // console.log(omikuji[num]);
}, false);