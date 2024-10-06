/* MAIN INDEX SLIDER - START */ 
const images=document.querySelectorAll(".h2row img");
const prev=document.getElementById("back");
const next=document.getElementById("go");
const circles=document.getElementById("circles");
let slidIndex=0;
let intervalId=null;
document.addEventListener("DOMContentLoaded",init);
function init(){
    
    if(images.length > 0){
        images[slidIndex].classList.add("disp");
        intervalId=setInterval(nextSlid, 3000);
    }    
}
function showslid(index){
    if(index >= images.length){
        slidIndex=0;
        
    }else if(index  <= 0){
        slidIndex=slidIndex + images.length -1;
        console.log(slidIndex);
    }
    images.forEach(slide=>{
        slide.classList.remove("disp");
    })
    images[slidIndex].classList.add("disp");
}
function prevSlide(){
    slidIndex--;
    showslid(slidIndex);
}
function nextSlid(){
    
    slidIndex++;
    showslid(slidIndex);
}
/* MAIN INDEX SLIDER - END */ 
/* SPECIAL OFFER INDEX SLIDER - START */ 
const slider=document.querySelectorAll(".h2row img");
let slidIndex2=0;
let intervalId2=null;
document.addEventListener("DOMContentLoaded",init2);
function init2(){
    
    if(slider.length > 0){
        slider[slidIndex2].classList.add("slid");
        intervalId2=setInterval(nextSlid2, 3000);
    }  
    console.log(slider);  
}
function showslid2(index){
    if(index >= slider.length){
        slidIndex2=0;
        
    }else if(index  <= 0){
        slidIndex2=slidIndex2 + slider.length -1;
        console.log(slidIndex2);
    }
    slider.forEach(slide=>{
        slide.classList.remove("slid");
    })
    slider[slidIndex2].classList.add("slid");
}
function prevSlide2(){
    slidIndex2--;
    showslid2(slidIndex2);
}
function nextSlid2(){
    
    slidIndex2++;
    showslid2(slidIndex2);
}
/*SPECIAL OFFER INDEX SLIDER - END */
/* PRODUCT SHOW SLIDER - START*/  

/* PRODUCT SHOW SLIDER - END*/   


