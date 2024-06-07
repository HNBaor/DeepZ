const sliderItem = document.querySelectorAll('.slider-item')
for (let index = 0; index < sliderItem.length; index++) {
    sliderItem[index].style.left = index * 100 + "%"
    
}

const sliderItems = document.querySelector('.slider-items')
const arrowRight = document.querySelector('.ri-arrow-right-fill')
const arrowLeft = document.querySelector('.ri-arrow-left-fill')
let i = 0
if(arrowRight !=null && arrowLeft !=null){
    arrowRight.addEventListener('click',()=>{

        if(i < sliderItem.length -1){
            i++
            console.log(i)
            silderMove(i)
        }
        else{
            return false
        }
    })
    arrowLeft.addEventListener('click',()=>{
        if(i<=0){
            return false
        }
        else{
        i--
        console.log(i)
        silderMove(i)
        }
    })
}


function silderMove(i){
    sliderItems.style.left = -i*100+"%"
}
// auto banner
// function autoSlider(){
//     if(i<sliderItem.length-1){
//         i++
//         console.log(i)
//         silderMove(i)
//     }
//     else{
//         i=0  
//     }
// }
// setInterval(autoSlider,2000)


//Menubar resposive
const Menubar = document.querySelector('.header-bar-icon')
const headerNav = document.querySelector('.header-nav')
Menubar.addEventListener('click',()=>{
    headerNav.classList.toggle('active')
})

//stiky header
window.addEventListener('scroll',()=>{
    if(scrollY>50){
        document.querySelectorAll('#header').classList.add('active')
    }
    else{
        document.querySelectorAll('#header').classList.remove('active')
    }
})

//click product img detail
const imgaeSmall = document.querySelectorAll('.product-images-items img')
const imageMain =document.querySelector('.main-image')
for (let index = 0; index < imgaeSmall.length; index++) {
    imgaeSmall[index].addEventListener('click',()=>{
        imageMain.src= imgaeSmall[index].src
    })
    
}

//quantity-product
const quanPlus = document.querySelectorAll('.ri-add-line');
const quanMinus = document.querySelectorAll('.ri-subtract-line');
const quanInput = document.querySelectorAll('.quantity-input');

if (quanMinus.length && quanPlus.length) {
    quanPlus.forEach((button, index) => {
        button.addEventListener('click', () => {
            let inputValue = parseInt(quanInput[index].value, 10); // Get the current value as an integer
            inputValue++; // Increment the value
            quanInput[index].value = inputValue; // Set the new value
        });
    });

    quanMinus.forEach((button, index) => {
        button.addEventListener('click', () => {
            let inputValue = parseInt(quanInput[index].value, 10); // Get the current value as an integer

            if (inputValue > 1) {
                inputValue--; // Decrement the value only if it's greater than 1
                quanInput[index].value = inputValue; // Set the new value
            }
        });
    });
}
