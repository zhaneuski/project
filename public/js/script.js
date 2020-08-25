let fun = function () {
    // if (document.getElementById("addForm").classList.contains("hidden")) {
    //     // document.getElementById("addForm").classList.remove("hidden")
    //     this.innerText = "Убрать"
    // } else {
    //     // document.getElementById("addForm").classList.add("hidden")
    //     this.innerText = "Добавить"
    // }
    let addButton = document.getElementById("addButton");
    addButton.innerText = addButton.innerText === "Убрать" ? "добавить" : "Убрать"

    document.getElementById("addForm").classList.toggle("hidden")
    document.getElementById("shadow").classList.toggle("hidden")
}

document.getElementById("addButton").onclick = fun

document.getElementById("closeFormButton").onclick = fun

document.getElementById("shadow").onclick = fun
