function changeLang() {
    if(document.getElementById("changeSelect")) {
    changeSelectValue = document.getElementById("changeSelect").value;
        if (changeSelectValue == "selected_jpn") {
            document.getElementById("jp").style.display = "";
            document.getElementById("en").style.display = "none";
            document.getElementById("china").style.display = "none";
            document.getElementById("korea").style.display = "none";
        } else if (changeSelectValue == "selected_en") {
            document.getElementById("jp").style.display = "none";
            document.getElementById("en").style.display = "";
            document.getElementById("china").style.display = "none";
            document.getElementById("korea").style.display = "none";
        } else if (changeSelectValue == "selected_china") {
            document.getElementById("jp").style.display = "none";
            document.getElementById("en").style.display = "none";
            document.getElementById("china").style.display = "";
            document.getElementById("korea").style.display = "none";
        } else if (changeSelectValue == "selected_korea") {
            document.getElementById("jp").style.display = "none";
            document.getElementById("en").style.display = "none";
            document.getElementById("china").style.display = "none";
            document.getElementById("korea").style.display = "";
        } else if (changeSelectValue == "selected_all") {
            document.getElementById("jp").style.display = "";
            document.getElementById("en").style.display = "";
            document.getElementById("china").style.display = "";
            document.getElementById("korea").style.display = "";
        }
    }
};



// function changeLang() {
//     if(document.getElementById("changeSelect")) {
//     changeSelectValue = document.getElementById("changeSelect").value;
//         if (changeSelectValue == "selected_jpn") {
//             document.getElementById("jp").style.display = "";
//             document.getElementById("en").style.display = "none";
//         } else if (changeSelectValue == "selected_en") {
//             document.getElementById("jp").style.display = "none";
//             document.getElementById("en").style.display = "";
//         } else {
//             document.getElementById("jp").style.display = "";
//             document.getElementById("en").style.display = "";
//         }
//     }
// }