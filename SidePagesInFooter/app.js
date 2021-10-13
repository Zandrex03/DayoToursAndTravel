// About Company and About Sjdm Function
const btnCompany = document.querySelector(".company-btn");
const btnSjdm = document.querySelector(".sjdm-btn");
const contentCompany = document.querySelector(".main-company-content");
const contentSjdm = document.querySelector(".main-sjdm-content");

window.onload = onInit();

btnCompany.addEventListener("click", () => {
btnCompany.style.borderBottom = "4px solid #00abae";
btnCompany.style.fontWeight = "bold";
btnCompany.style.color = "#006768";
btnSjdm.style.color = "#1c1c1c";
btnSjdm.style.fontWeight = "normal";
btnSjdm.style.borderBottom = "none";
contentCompany.style.display = "block";
contentSjdm.style.display = "none"
contentSjdm.classList.remove('fade');
contentCompany.classList.add('fade');
});

btnSjdm.addEventListener("click", () => {
btnSjdm.style.borderBottom = "4px solid #00abae";
btnSjdm.style.fontWeight = "bold";
btnSjdm.style.color = "#006768";
btnCompany.style.color = "#1c1c1c";
btnCompany.style.borderBottom = "none";
btnCompany.style.fontWeight = "normal";
contentSjdm.style.display = "block";
contentCompany.style.display = "none";
contentSjdm.classList.add('fade');
contentCompany.classList.remove('fade');
});


function onInit() {
btnCompany.style.borderBottom = "4px solid #00abae";
btnCompany.style.color = "#006768";
btnCompany.style.fontWeight = "bold";
contentCompany.style.display = "block";
      }
