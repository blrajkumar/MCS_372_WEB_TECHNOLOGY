// Code goes here

// Code goes here

consonnants = [
    'b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm',
    'n', 'p', 'r', 's', 't', 'th', 'v', 'x', 'z'];
vowels = ['a', 'au', 'e', 'i', 'o', 'ou', 'u', 'y'];

function myCanvas() {
    var c = document.getElementById("myCanvas");
    name = "";
    length = Math.floor(Math.random() * 3) + 2;
    for (i = 0; i < length; i++)
        name += (consonnants[Math.floor(Math.random() * consonnants.length)]
            + vowels[Math.floor(Math.random() * vowels.length)]);
    name = name.charAt(0).toUpperCase() + name.slice(1);
    var ctx = c.getContext("2d");
    ctx.font = "30px Arial";
    ctx.fillText(name, 20, 50);
}