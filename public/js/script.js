

let fun = function () {

    let addButton = document.getElementById("addButton");
    addButton.innerText = addButton.innerText === "Убрать" ? "Добавить заявку" : "Убрать"

    document.getElementById("addForm").classList.toggle("hidden")
    document.getElementById("shadow").classList.toggle("hidden")
}

if (document.getElementById("addButton") && document.getElementById("closeFormButton") && document.getElementById("shadow")) {

    document.getElementById("addButton").onclick = fun

    document.getElementById("closeFormButton").onclick = fun

    document.getElementById("shadow").onclick = fun
}




// let smile = function() {
//     this.value = this.value
//         .replace(/:\)|:-\)/g, "😄")
//         .replace(/:\(|:-\(/g,"☹");
// }

// document.getElementById("content").addEventListener("keyup", smile )


/*Burger menu*/

// $(document).ready(function() {
//     $('.header__burger').click(function(event) {
//         $('.header__burger, .header__menu').toggleClass('active');
//     });
// });

document.getElementById("header__burger").addEventListener("click", function() {
    document.getElementById("header__burger").classList.toggle("active");
    document.getElementById("header__menu").classList.toggle("active");
});

