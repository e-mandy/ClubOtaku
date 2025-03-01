
/*
PAGE D'ACCUEIL

Script en rapport à la transition de couleur du body de la première à la deuxième section
*/

let graphicSection = document.querySelector(".graph-present");
let salutationSection = document.querySelector(".salutations");

let observer = new IntersectionObserver ((entries)=>{
    entries.forEach(entry =>{
        if(entry.isIntersecting){
            if(entry.target.classList.contains("graph-present") && entry.intersectionRatio){
                console.log("Visé");
                document.body.style.transition = "background-color 0.5s linear";
                document.body.style.backgroundColor = "#FFFFFF";
            }
            else if(entry.target.classList.contains("salutations") && entry.intersectionRatio){
                console.log("Salutation");
                document.body.style.transition = "background-color 0.5s linear";
                document.body.style.backgroundColor = "#542409";
            }
        }
    })
}, {threshold: 0.3});

observer.observe(graphicSection);
observer.observe(salutationSection);

/* Script en rapport avec le défilement des éléments de la section 3 */

const buttonSlider = document.querySelectorAll(".carou-button");
const carouWidth = document.querySelector(".carou-contents").offsetWidth;
const carouContents = document.querySelector(".carou-contents");
const carouContentWidth = document.querySelector(".carou-content").offsetWidth;


let moveWidth = carouContentWidth + ((carouWidth - (carouContentWidth*3)) / 2);
buttonSlider.forEach((button)=> {
    button.addEventListener('click', () =>{
        if(button.classList.contains("left")){
            console.log("left");
            carouContents.scrollLeft -= moveWidth;
        }else{
            console.log('right');
            carouContents.scrollLeft +=  moveWidth;
        }
    })
})

