const buttonOne = document.querySelector('.buttonOne')
const file = document.querySelector('.inspirePage')
buttonOne.addEventListener('click', changeState)


function changeState(){
    if(file.style.display == "none"){
        file.style.display = "block"
        console.log("ghj")
    }else{
        file.style.display = "none"
        console.log("ghj")
    }
}

