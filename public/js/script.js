let searchBtn = document.querySelector("#search-btn");
let searchBar = document.querySelector(".search-bar-container");
let formClose = document.querySelector("#form-close");
let menu = document.querySelector("#menu-bar");
let navbar = document.querySelector(".navbar");
let videoBtn = document.querySelectorAll(".vid-btn");

let searchInput = document.querySelector("#search-bar");
let searchForm = document.querySelector(".search-bar-container");

window.onscroll = () => {
    searchBtn.classList.remove("fa-times");
    searchBar.classList.remove("active");
    menu.classList.remove("fa-times");
    navbar.classList.remove("active");
    loginForm.classList.remove("active");
};

menu.addEventListener("click", () => {
    menu.classList.toggle("fa-times");
    navbar.classList.toggle("active");
});

searchBtn.addEventListener("click", () => {
    searchBtn.classList.toggle("fa-times");
    searchBar.classList.toggle("active");
});

formBtn.addEventListener("click", () => {
    loginForm.classList.toggle("active");
});

formClose.addEventListener("click", () => {
    loginForm.classList.remove("active");
});

videoBtn.forEach((btn) => {
    btn.addEventListener("click", () => {
        document.querySelector(".controls .active").classList.remove("active");
        btn.classList.add("active");
        let src = btn.getAttribute("data-src");
        document.querySelector("#video-slider").src = src;
    });
});

searchForm.addEventListener("submit", function (e) {
    e.preventDefault(); // Mencegah form dari pengiriman standar
    performSearch();
});

searchBtn.addEventListener("click", function () {
    performSearch();
});

formClose.addEventListener("click", function () {
    searchInput.value = ""; // Bersihkan input ketika tombol tutup ditekan
    searchForm.classList.remove("active");
});

function performSearch() {
    let searchTerm = searchInput.value.trim().toLowerCase();
    // Lakukan sesuatu dengan searchTerm, misalnya, tampilkan hasil pencarian atau navigasikan ke halaman pencarian
    console.log("Searching for:", searchTerm);
    // Tambahkan logika pencarian atau tampilkan hasil pencarian di sini
}

var swiper = new Swiper(".review-slider", {
    spaceBetween: 20,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    },
});

var swiper = new Swiper(".brand-slider", {
    spaceBetween: 20,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        450: {
            slidesPerView: 2,
        },
        768: {
            slidesPerView: 3,
        },
        991: {
            slidesPerView: 4,
        },
        1200: {
            slidesPerView: 5,
        },
    },
});
