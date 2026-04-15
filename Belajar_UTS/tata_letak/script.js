// script.js

// Menunggu hingga seluruh elemen HTML selesai dimuat
document.addEventListener("DOMContentLoaded", function() {
    
    const contactForm = document.getElementById('contactForm');
    
    // Mengecek apakah form ada di halaman untuk mencegah error
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault(); // Mencegah halaman refresh
            
            alert('Pesan Anda telah diterima oleh tim Lumina Interior. Kami akan segera menghubungi Anda!');
            
            // Mengosongkan form setelah dikirim
            this.reset();
        });
    }
    
});