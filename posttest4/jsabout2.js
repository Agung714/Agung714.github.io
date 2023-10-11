
// toogle

// const navbar = document.querySelector
// ('.navbar','#search');

// // ketika hamburger menu di klik
// document.querySelector('#menu').
// onclick = () => {
//     navbar.classList.toggle('active');
// };

// menghilangkan nav jika klik hamburger menu diluar side bar
const menu = document.querySelector('#menu');


// darkmode-toggle
// $('#darkmode-toggle').ready(function(){
//     // $('#darkmode-toggle').click(function(){
//         var dark = document.getElementById('darkmode-toggle').checked;
//     if(dark == true){
//         alert("darkmode");
//     }
//     else{
//         alert("lightmode");
//     }

// });


document.addEventListener('click',function(e) {
    if(!menu.contains(e.target) && !navbar.contains(e.target)){
     navbar.classList.remove('active');
    }
});


function check() 
{
    let dark = document.getElementById('darkmode-toggle').checked;
    if(dark == true)
    {
        alert("DARKMODE")
        document.getElementById('body').classList.remove('body');
        document.getElementById('body').classList.add('body_dark');
        document.getElementById('footer').classList.remove('footer');
        document.getElementById('footer').classList.add('footer_dark');
        document.getElementById('kiri').classList.add('kotak_dark');
        document.getElementById('kanan').classList.add('kotak_dark');
        document.getElementById('footer1').classList.add('back-black');
        document.getElementById('footer2').classList.add('back-black');
        document.getElementById('footer3').classList.add('back-black');
        document.getElementById('footer4').classList.add('back-black');
        document.getElementById('footer5').classList.add('back-black');
        document.getElementById('footer6').classList.add('back-black');
        
    }

    else
    {
        alert("LIGHTMODE")
        document.getElementById('body').classList.remove('body_dark');
        document.getElementById('body').classList.add('body');
        document.getElementById('footer').classList.remove('footer_dark');
        document.getElementById('footer').classList.add('footer');
        document.getElementById('kiri').classList.remove('kotak_dark');
        document.getElementById('kanan').classList.remove('kotak_dark');
        document.getElementById('footer1').classList.remove('back-black');
        document.getElementById('footer2').classList.remove('back-black');
        document.getElementById('footer3').classList.remove('back-black');
        document.getElementById('footer4').classList.remove('back-black');
        document.getElementById('footer5').classList.remove('back-black');
        document.getElementById('footer6').classList.remove('back-black');
    }
}
