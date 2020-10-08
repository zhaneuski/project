
let fun = function () {

    let addButton = document.getElementById("addButton");
    addButton.innerText = addButton.innerText === "Close" ? "Add" : "Close"

    document.getElementById("addForm").classList.toggle("hidden")
    document.getElementById("shadow").classList.toggle("hidden")
}

if (document.getElementById("addButton") && document.getElementById("closeFormButton") && document.getElementById("shadow")) {

    document.getElementById("addButton").onclick = fun

    document.getElementById("closeFormButton").onclick = fun

    document.getElementById("shadow").onclick = fun
}

document.getElementById("header__burger").addEventListener("click", function() {
    document.getElementById("header__burger").classList.toggle("active");
    document.getElementById("header__menu").classList.toggle("active");
});

