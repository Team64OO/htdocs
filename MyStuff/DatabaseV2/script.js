function checkText(element) {
    if (element.value == "") {
        element.style.borderBottom = "5px ridge red"
    } else {
        element.style.borderBottom = "5px ridge lime";
    }
}

function checkForm(element) {
    let inputs = element.querySelectorAll("input[data-required]");
    for (let index = 0; index < inputs.length; index++) {
        if (inputs[index].value == "") {
            inputs[index].style.borderBottom = "5px ridge red";
        }
    }
    for (let index = 0; index < inputs.length; index++) {
        if (inputs[index].value == "") {
            document.getElementById("outputmsg").innerHTML = "Please fill in the highlighted fields."
            return false;
        }
    }
    return true;
}

function showDeleteConfirm(id) {
    document.getElementById("deleteConfirm").style.top = "240px";
    document.getElementById("deleteConfirmHeader").innerHTML = "Delete record with id ";
    document.getElementById("deleteConfirmHeader").innerHTML += id + "?";
    document.getElementById("deleteConfirmYes").parentNode.href = "http://127.0.1.3/MyStuff/DatabaseV2/delete.php?id=" + id;
}

function hideDeleteConfirm() {
    document.getElementById("deleteConfirm").style.top = "1000px";
    
}