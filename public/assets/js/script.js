function showSec1() {
    var more1 = document.getElementById("more1");
    var btnText1 = document.getElementById("showBtn1");

    if (btnText1.innerHTML == "More") {
        btnText1.innerHTML = "Less";
        more1.style.display = "block";
    } else {
        more1.style.display = "none";
        btnText1.innerHTML = "More";
    }
}

function showSec2() {
    var more2 = document.getElementById("more2");
    var btnText2 = document.getElementById("showBtn2");

    if (btnText2.innerHTML == "More") {
        btnText2.innerHTML = "Less";
        more2.style.display = "block";
    } else {
        more2.style.display = "none";
        btnText2.innerHTML = "More";
    }
}

function showSec3() {
    var more3 = document.getElementById("more3");
    var btnText3 = document.getElementById("showBtn3");

    if (btnText3.innerHTML == "More") {
        btnText3.innerHTML = "Less";
        more3.style.display = "block";
    } else {
        more3.style.display = "none";
        btnText3.innerHTML = "More";
    }
}
