// Q1
let numbers = [2, 5, 12, 13, 15, 18, 22];

let numEven = numbers.filter(function(value) {
    return value % 2 === 0;
});
let numOdd = numbers.filter(function(value) {
    return value % 2 === 1;
});

function isEven() {
    console.log(`${numEven}は偶数です`);
}
function isOdd() {
    console.log(`${numOdd}は奇数です`);
}

isEven();
isOdd();



// Q2
class Car {
    constructor(gass, number){
        this.gass = gass;
        this.number = number;
    }

    getNumGass(){
        console.log(`ガソリンは${this.gass}です。\nナンバーは${this.number}です。`);
    }
}

let myCar = new Car("ハイオク", 1234);
myCar.getNumGass();