
// toogle

const navbar = document.querySelector
('.navbar','#search');

// ketika hamburger menu di klik
document.querySelector('#menu').
onclick = () => {
    navbar.classList.toggle('active');
};

// menghilangkan nav jika klik hamburger menu diluar side bar
const menu = document.querySelector('#menu');

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
        document.getElementById('hero').classList.remove('hero');
        document.getElementById('hero').classList.add('hero_dark');
        document.getElementById('feature').classList.add('feature_dark');
        document.getElementById('footer').classList.remove('footer');
        document.getElementById('footer').classList.add('footer_dark');
        document.getElementById('kiri').classList.remove('back-blue');
        document.getElementById('kiri').classList.add('kiri_dark');
        document.getElementById('footer1').classList.add('back-black');
        document.getElementById('footer2').classList.add('back-black');
        document.getElementById('footer3').classList.add('back-black');
        document.getElementById('footer4').classList.add('back-black');
        // document.getElementById('button-feature2').classList.remove('btn-buy');
        // document.getElementById('button-feature2').classList.add('btn-buy_dark');
        // document.getElementById('button-feature3').classList.remove('btn-buy');
        // document.getElementById('button-feature3').classList.add('btn-buy_dark');
        // document.getElementById('header').classList.remove('header');
        // document.getElementById('header').classList.add('header_dark');
        // document.getElementById('header').classList.remove('text');
        // document.getElementById('header').classList.add('textdark');
        // document.getElementById('isi').classList.remove('isi');
    }

    else
    {
        alert("LIGHTMODE")
        document.getElementById('body').classList.remove('body_dark');
        document.getElementById('body').classList.add('body');
        document.getElementById('hero').classList.remove('hero_dark');
        document.getElementById('hero').classList.add('hero');
        document.getElementById('feature').classList.remove('feature_dark');
        document.getElementById('footer').classList.remove('footer_dark');
        document.getElementById('footer').classList.add('footer');
        document.getElementById('kiri').classList.remove('kiri_dark');
        document.getElementById('kiri').classList.add('back-blue');
        document.getElementById('footer1').classList.remove('back-black');
        document.getElementById('footer2').classList.remove('back-black');
        document.getElementById('footer3').classList.remove('back-black');
        document.getElementById('footer4').classList.remove('back-black');

        // document.getElementById('button-feature2').classList.remove('btn-buy_dark');
        // document.getElementById('button-feature2').classList.add('btn-buy');
        // document.getElementById('button-feature3').classList.remove('btn-buy_dark');
        // document.getElementById('button-feature3').classList.add('btn-buy');
        // document.getElementById('header').classList.remove('header_dark');
        // document.getElementById('header').classList.add('header');
        // document.getElementById('header').classList.remove('textdark');
        // document.getElementById('header').classList.add('text');
        // document.getElementById('isi').classList.add('isi');
    }
}
