document.addEventListener("DOMContentLoaded", function () {
    const swiper = new Swiper(".swiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      loop: true,
      speed:800,
      autoplay: {
        delay: 5000, // Temps entre chaque slide (2s)
        disableOnInteraction: false, // Ne pas désactiver après interaction
        pauseOnMouseEnter: true, // Pause quand on survole
      },
      coverflowEffect: {
        rotate: 30,  // Rotation des slides
        stretch: 0,  // Écartement entre les slides
        depth: 100,  // Profondeur de l'effet 3D
        modifier:2, // Intensité de l'effet
        slideShadows: true, // Ombres sur les côtés
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  });

  let activity =[];
  let Jl=activity["JapanLearning"]=[];
  Jl["title"]="Japan Learning";
  Jl["image"]="../../assets/imgs/activite/japanLearning.png";
  Jl["description"]="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
  Jl["objectif"]="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
  let k=activity["karaoke"]=[];
  k["title"]="Karaoke";
  k["image"]="../../assets/imgs/activite/karaoke.png";
  k["description"]="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
  k["objectif"]="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."

  let trib= activity["tribunal"]=[];
  trib["title"]="Tribunal";
  trib["image"]="../../assets/imgs/activite/tribunal.png";
  trib["description"]="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
  trib["objectif"]="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
  let dub=activity["doublage"]=[];
  dub["title"]="Doublage";
  dub["image"]="../../assets/imgs/activite/doublage.png";
  dub["description"]="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
  dub["objectif"]="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";

  let draw=activity["dessin"]=[];
  draw["title"]="Dessin";
  draw["image"]="../../assets/imgs/activite/dessin.png";
  draw["description"]="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
  draw["objectif"]="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";

  let st=activity["storyTelling"]=[];
  st["title"]="Story Telling";
  st["image"]="../../assets/imgs/activite/storytelling.png";
  st["description"]="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
  st["objectif"]="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";

  let pop = document.querySelector(".pop-up");
  let exit = document.querySelector(".return");
  let poptitle=document.getElementById("pop_title");
  let pop_img=document.getElementById("pop_img");
  let description=document.getElementById("description");
  let objectif=document.getElementById("objectif");
  // par=description.textContent;
  // console.log(description.textContent);
  // description.textContent="";
  // console.log(description.textContent);
  // description.innerText=par;
  // console.log(description.textContent);

  function find(element){
       let value=element.getAttribute("data-value");
       poptitle.textContent=activity[value]["title"];
       pop_img.setAttribute("src",activity[value]["image"]);
       description.textContent=activity[value]["description"];
       objectif.textContent=activity[value]["objectif"];
       pop.classList.add("active");
       document.body.classList.add("overlay");
       exit.classList.add("active-exit");
  }

  exit.addEventListener('click',()=>{
    pop.classList.remove("active");
    document.body.classList.remove("overlay");
    exit.classList.remove("active-exit");
  });
