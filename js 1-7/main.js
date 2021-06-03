// //「山田」オブジェクト作成
// let yamada = {
//     name: 'yamada',
//     height: 170,
//     weight: 60,
//     gender: "男",
//     age: 30,
// }
// //「鈴木」オブジェクト作成
// let suzuki = {
//     name: 'suzuki',
//     height: 180,
//     weight: 70,
//     gender: "男",
//     age: 35,
// }

//Humanクラスを作成
// class Human {
//     //コンストラクタ （yamadaと25という値を受け取るための処理をこれから書いていきます）
//     constructor(name, height, weight, gender, age) {
//         this.name = name;
//         this.height = height;
//         this.weight = weight;
//         this. gender= gender;
//         this. age= age;
//     }

//     //歩くメソッド（関数）作成
//     walk() {
//         console.log(`身長${this.height}cm、体重${this.weight}kg、${this.name}という${this.gender}が歩きました`);
//     }

// }
//Humanクラスをインスタンス化して、yamadaを作成
// let yamada = new Human("山田", 170, 60, "男", 30);
// let suzuki = new Human("鈴木", 180, 70, "男", 35);
// yamada.walk();
// console.log(yamada);
// console.log(suzuki);


class Taiyaki {
    constructor(contents) {
        this.contents = contents;

    }

    buy(){
        console.log(`中身は${this.contents}です!`);
    }

}
let ankoTaiyaki = new Taiyaki("あんこ");
let creamTaiyaki = new Taiyaki("クリーム");
let cheeseTaiyaki = new Taiyaki("チーズ");

// console.log(ankoTaiyaki)
ankoTaiyaki.buy();
// console.log(creamTaiyaki);
creamTaiyaki.buy();
// console.log(cheeseTaiyaki);
cheeseTaiyaki.buy();