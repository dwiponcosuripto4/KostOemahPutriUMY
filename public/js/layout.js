$(document).ready(function () {
    $("#nav-icon3").click(function () {
        $(this).toggleClass("open");
        $("#navbarText").toggleClass("show");
    });
});

$(document).ready(function () {
    // Cek apakah galeri sudah ada di localStorage
    if (localStorage.getItem("galleryContent")) {
        // Tampilkan galeri dari localStorage
        $("#gallery-section").html(localStorage.getItem("galleryContent"));
    } else {
        // Jika belum ada, lakukan request AJAX ke server untuk memuat galeri
        $.ajax({
            url: "/load-gallery",
            method: "GET",
            success: function (data) {
                $("#gallery-section").html(data); // Tampilkan galeri
                localStorage.setItem("galleryContent", data); // Simpan galeri di localStorage
            },
            error: function (error) {
                console.error("Gagal memuat gallery:", error);
            },
        });
    }
});

$(document).ready(function () {
    function initFancybox() {
        Fancybox.bind("[data-fancybox]", {
            // Custom options
            Thumbs: {
                autoStart: true,
            },
            Toolbar: {
                display: {
                    left: ["infobar"],
                    right: ["slideshow", "thumbs", "close"],
                },
            },
        });
    }

    // Handler untuk memuat gallery dan menginisialisasi Fancybox
    function loadGallery() {
        $.ajax({
            url: "/load-gallery",
            method: "GET",
            success: function (data) {
                $("#gallery-section").html(data);
                initFancybox(); // Inisialisasi Fancybox setelah konten dimuat
            },
            error: function (error) {
                console.error("Gagal memuat gallery:", error);
            },
        });
    }

    // Load gallery saat halaman pertama dimuat
    loadGallery();

    // Reinisialisasi saat Turbolinks selesai memuat halaman
    document.addEventListener("turbolinks:load", function () {
        loadGallery();
    });
});
document.addEventListener("turbolinks:load", function () {
    const video = document.getElementById("video-facility");
    if (video) {
        video.load(); // Force reload video
        video.addEventListener("fullscreenchange", (e) => {
            if (document.fullscreenElement) {
                video.style.objectFit = "contain";
                video.style.width = "100%";
                video.style.height = "100%";
            } else {
                video.style.objectFit = "cover";
                video.style.width = "100%";
                video.style.height = "340px";
            }
        });
    }
});
document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.querySelector(".navbar-index");
    if (navbar) {
        window.addEventListener("scroll", function () {
            if (window.scrollY > 50) {
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
            }
        });
    }
});

let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
