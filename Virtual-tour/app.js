    const card = document.querySelector(".card");
    const cardDetails = document.querySelector(".card-details");
    const imageOverlay = document.querySelector(".image-overlay");

    card.addEventListener("mouseover", () => {
    const imageOverlay1 = document.querySelector(".image-overlay").children;
    cardDetails.style.boxShadow = "0 1px 10px rgb(0 0 0 / 0.2)";
    imageOverlay1[0].style.transform = "translateY(0px)";
    imageOverlay.style.opacity = "1";
    console.log("mouseover")
    })
     
    card.addEventListener("mouseout", () => {
    const imageOverlay1 = document.querySelector(".image-overlay").children;
    cardDetails.style.boxShadow = "none";
    imageOverlay1[0].style.transform = "translateY(20px)";
    imageOverlay.style.opacity = "0";
    })

    
    const card2 = document.querySelector(".card2");
    const cardDetails2 = document.querySelector(".card-details2");
    const imageOverlay2 = document.querySelector(".image-overlay2");
    console.log(imageOverlay2);

    card2.addEventListener("mouseover", () => {
    const imageOverlayChild2 = document.querySelector(".image-overlay2").children;
    cardDetails2.style.boxShadow = "0 1px 10px rgb(0 0 0 / 0.2)";
    imageOverlayChild2[0].style.transform = "translateY(0px)";
    imageOverlay2.style.opacity = "1";
    console.log("mouseover")
    })
     
    card2.addEventListener("mouseout", () => {
    const imageOverlayChild2 = document.querySelector(".image-overlay2").children;
    cardDetails2.style.boxShadow = "none";
    imageOverlayChild2[0].style.transform = "translateY(20px)";
    imageOverlay2.style.opacity = "0";
    })


    const card3 = document.querySelector(".card3");
    const cardDetails3 = document.querySelector(".card-details3");
    const imageOverlay3 = document.querySelector(".image-overlay3");
    console.log(imageOverlay3);

    card3.addEventListener("mouseover", () => {
    const imageOverlayChild3 = document.querySelector(".image-overlay3").children;
    cardDetails3.style.boxShadow = "0 1px 10px rgb(0 0 0 / 0.2)";
    imageOverlayChild3[0].style.transform = "translateY(0px)";
    imageOverlay3.style.opacity = "1";
    console.log("mouseover")
    })
     
    card3.addEventListener("mouseout", () => {
    const imageOverlayChild3 = document.querySelector(".image-overlay3").children;
    cardDetails3.style.boxShadow = "none";
    imageOverlayChild3[0].style.transform = "translateY(20px)";
    imageOverlay3.style.opacity = "0";
    })


    const card4 = document.querySelector(".card4");
    const cardDetails4 = document.querySelector(".card-details4");
    const imageOverlay4 = document.querySelector(".image-overlay4");
    console.log(imageOverlay4);

    card4.addEventListener("mouseover", () => {
    const imageOverlayChild4 = document.querySelector(".image-overlay4").children;
    cardDetails4.style.boxShadow = "0 1px 10px rgb(0 0 0 / 0.2)";
    imageOverlayChild4[0].style.transform = "translateY(0px)";
    imageOverlay4.style.opacity = "1";
    console.log("mouseover")
    })
     
    card4.addEventListener("mouseout", () => {
    const imageOverlayChild4 = document.querySelector(".image-overlay4").children;
    cardDetails4.style.boxShadow = "none";
    imageOverlayChild4[0].style.transform = "translateY(20px)";
    imageOverlay4.style.opacity = "0";
    })


// const imageOverlay = document.querySelector(".image-overlay");
// const cardDetails = document.querySelector(".card-details");
// const cardContainer = document.querySelector('.card-container').children;
// const cardArray = Array.from(cardContainer);
// cardArray.forEach((card) => {
//     card.addEventListener('mouseover', () => {
//         cardDetails.style.boxShadow = "0 1px 10px rgb(0 0 0 / 0.3)";
//         imageOverlay.style.opacity = "1";
//     })

//     card.addEventListener('mouseout', () => {
//         console.log("mouseover");
//         cardDetails.style.boxShadow = "none";
//         imageOverlay.style.opacity = "0";
//     })
// });


// const cardDetails = document.querySelectorAll(".card-details");
// const cards = document.querySelectorAll(".card");

// const cardItems = cards.forEach((card) => {
//    card.addEventListener('mouseover', (e) => {
//       cardDetails.style.boxShadow = "0 1px 10px rgb(0 0 0 / 0.2)";
//    });
//    card.addEventListener('mouseout', (e) => {
//     cardDetails.style.boxShadow = "none";
//    });
// });
