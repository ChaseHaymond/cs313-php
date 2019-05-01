function display() {
 alert("Clicked!");
}

function changeColor() {
    var color = document.getElementById("x").value;
    var divOne = document.getElementById("divOne");
    divOne.style.backgroundColor = color;
}