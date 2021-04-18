// OPENG THE LOG IN FORM
const login = document.querySelector(".login");
const loginForm = document.querySelector(".loginContainer");
const cancelLogin = document.querySelector(".cancelLogin");
const homePage = document.querySelector(".homePage");
const menu = document.querySelector(".menuWrapper");
const cancelMenu = document.querySelector(".cancelMenu");

// OPEN LOGIN FORM
login.addEventListener('click', () =>{
    loginForm.style.display = "block";
    homePage.style.display = "none";
});

cancelLogin.addEventListener('click', () =>{
    loginForm.style.display = "none";
    homePage.style.display = "block";
});

// OPEN MENU
function order(){
    menu.style.display = "block";
    homePage.style.display = "none";
}

cancelMenu.addEventListener('click', () =>{
    menu.style.display = "none";
    homePage.style.display = "block";
});


// OPEN SELECTED DETAILS
const selectOrder = document.querySelector(".ordernow");
const orderDetails = document.querySelector(".orderDetails");
const cancelOrder = document.querySelector(".cancelOrder");

selectOrder.addEventListener('click', () =>{
    orderDetails.style.display = "block";
    homePage.style.display = "none";
    menu.style.display = "none";
});

cancelOrder.addEventListener('click', () =>{
    orderDetails.style.display = "none";
    homePage.style.display = "none";
    menu.style.display = "block";
});

// OPENING CONTACTS
const contactBtn = document.querySelector(".contactPage");
const contactForm = document.querySelector('.contactContainer');
const cancelContact = document.querySelector('.cancelContact');

contactBtn.addEventListener('click', () =>{
    contactForm.style.display = "block";
    homePage.style.display = "none";
})

cancelContact.addEventListener('click', () => {
    contactForm.style.display = "none";
    homePage.style.display = "block";
});