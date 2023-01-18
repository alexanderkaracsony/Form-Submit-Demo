let myVariable = document.querySelector("h1");

// this is a function that multiplies two numbers together
function multiple(num1, num2) {
    let result = num1 * num2;
    return result;
}

const myImage = document.querySelector("img");
myImage.onclick = () => {
    const mySrc = myImage.getAttribute("src");
    if (mySrc == "images/webisteCartoon.png") {
        myImage.setAttribute("src", "https://media.giphy.com/media/3o7TKSjRrfIPjeUGDS/giphy.gif");
    } else {
        myImage.setAttribute("src", "images/webisteCartoon.png");
    }
};

/*
This makes alert box come up whenever a moust clicked anywhere on the webpage.
document.querySelector("html").addEventListener("click", () => {
    // alert function this makes box come up. 
    alert("You have clicked on the webpage");
});
*/

