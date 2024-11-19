document.addEventListener('turbolinks:load', function() {
    // Hapus skrip widget Google Reviews jika sudah ada untuk menghindari duplikasi
    const existingScript = document.querySelector(
        "script[src='https://widgets.sociablekit.com/google-reviews/widget.js']");
    if (existingScript) {
        existingScript.remove();
    }

    // Memuat ulang widget Google Reviews
    const script = document.createElement('script');
    script.src = 'https://widgets.sociablekit.com/google-reviews/widget.js';
    script.async = true;
    script.defer = true;
    script.setAttribute("data-turbolinks-eval", "always");
    document.body.appendChild(script);

    script.onload = function() {
        // Menjalankan animasi rating setelah widget dimuat
        animateRating('rating', 0.0, 5.0, 2000);
    };
});

function animateRating(elementId, start, end, duration) {
    const element = document.getElementById(elementId);
    let startTimestamp = null;
    const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        element.innerText = (progress * (end - start) + start).toFixed(1);
        if (progress < 1) {
            window.requestAnimationFrame(step);
        }
    };
    window.requestAnimationFrame(step);
}
