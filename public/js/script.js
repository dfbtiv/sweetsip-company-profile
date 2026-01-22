console.log('Company Profile Loaded');
// ambil elemen tombol berdasarkan id yang dibuat di html
const tombol = document.getElementById('tombol-hero');

// tamabah event listener utk tombol "click" (ketika di klik)
// tombol.addEventListener('click', function(){
//     alert('halo, javascript km sudah berhasil terhubung');

//     contoh utk ubah background tombol setelah di klik
//     tombol.style.backgroundColor="pink";
//     tombol.innerText="sudah diklik";
// })

const hamburger = document.getElementById("hamburger");
const navMenu = document.getElementById("nav-menu");
hamburger.addEventListener('click', function() {
    navMenu.classList.toggle("active");
});

document.querySelectorAll(".nav-menu a").forEach(link => {
    link.addEventListener("click", () => {
        navMenu.classList.remove("active");
    });
});

const container = document.querySelector('.menu-container');
const prev = document.querySelector('.menu-btn.prev');
const next = document.querySelector('.menu-btn.next');

next.addEventListener('click', () => {
    container.scrollBy({ left: 270, behavior:"smooth"});
});

prev.addEventListener('click', () => {
    container.scrollBy({ left: -270, behavior: "smooth"});
});

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('subscribe-form');

    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            alert(
                'Berhasil Subscribe! \n\n' +
                'Subscribe to sweet deals, exclusive promos, and our latest menu.'
            );
            form.reset();
        });
    }
});
