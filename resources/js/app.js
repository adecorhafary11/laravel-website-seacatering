import "./bootstrap";

// resources/js/app.js
document.addEventListener("DOMContentLoaded", function () {
    // Animasi saat berpindah halaman
    const links = document.querySelectorAll("a");

    links.forEach((link) => {
        link.addEventListener("click", function (e) {
            if (this.href && this.href.indexOf("#") === -1) {
                e.preventDefault();
                const target = this.href;

                // Animasi keluar
                document.querySelector(".page-transition").style.opacity = "0";
                document.querySelector(".page-transition").style.transform =
                    "translateX(-50px)";

                // Navigasi setelah animasi
                setTimeout(() => {
                    window.location.href = target;
                }, 500);
            }
        });
    });
});
