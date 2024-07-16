function showInsert() {
    hideUpdate();
    hideDelete();
    insertBox = document.getElementById("insertBox");
    insertBox.style.top = "50%";
}

function hideInsert() {
    insertBox = document.getElementById("insertBox");
    insertBox.style.top = "-5000000px";
}

function showUpdate(id) {
    hideInsert();
    hideDelete();
    updateBox = document.getElementById("updateBox");
    updateBox.style.top = "50%";
    return id;
}

function hideUpdate() {
    updateBox = document.getElementById("updateBox");
    updateBox.style.top = "-5000000px";
}

function showDelete(id) {
    hideInsert();
    hideUpdate();
    deleteBox = document.getElementById("deleteBox");
    deleteBox.style.top = "50%";
    return id;
}

function hideDelete() {
    deleteBox = document.getElementById("deleteBox");
    deleteBox.style.top = "-5000000px";
}