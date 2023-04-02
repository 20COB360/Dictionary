var modal;
console.log('ohayo');
function add() {
    modal = document.getElementById('modal1');
    modal.style.display = "block";
}
function updt() {
    modal = document.getElementById('modal2');
    modal.style.display = "block";
}
function del() {
    modal = document.getElementById('modal3');
    modal.style.display = "block";
}
function cls() {
    modal.style.display = "none";
    console.log('baka');
}
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}