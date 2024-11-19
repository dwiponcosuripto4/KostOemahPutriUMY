// Event listener untuk ikon "love" yang akan menambahkan animasi saat diklik
document.getElementById('love-icon').addEventListener('click', function() {
    this.style.transform = 'scale(1.2)';
    setTimeout(() => {
        this.style.transform = 'scale(1)';
    }, 200);
});

// Event listener untuk ikon "share" yang akan menambahkan animasi saat diklik
document.getElementById('share-icon').addEventListener('click', function() {
    this.style.transform = 'scale(1.2)';
    setTimeout(() => {
        this.style.transform = 'scale(1)';
    }, 200);
});
