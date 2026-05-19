document.addEventListener('DOMContentLoaded', () => {
  // Ambil semua elemen yang dibutuhkan
  const stars = document.querySelectorAll('.star-btn');
  const ratingValueInput = document.getElementById('ratingValue');
  const reviewForm = document.getElementById('reviewForm');

  /* ==========================================================================
     LOGIC RATING BINTANG
     ========================================================================== */
  stars.forEach(star => {
    star.addEventListener('click', () => {
      // Ambil angka rating dari atribut data-value bintang yang diklik
      const rating = star.getAttribute('data-value');
      
      // Simpan angka rating ke dalam input hidden
      ratingValueInput.value = rating;

      // Update tampilan warna bintang (tambah/hapus class 'active')
      stars.forEach(s => {
        if (s.getAttribute('data-value') <= rating) {
          s.classList.add('active'); // Bintang menyala cokelat emas
        } else {
          s.classList.remove('active'); // Bintang tetap abu-abu krem
        }
      });
    });
  });

  /* ==========================================================================
     LOGIC SUBMIT FORM
     ========================================================================== */
  reviewForm.addEventListener('submit', (e) => {
    // Mencegah halaman refresh otomatis saat tombol dikirim
    e.preventDefault();

    // Ambil data dari input nama dan ulasan
    const name = document.getElementById('reviewerName').value;
    const rating = ratingValueInput.value;
    const review = document.getElementById('reviewText').value;

    // VALIDASI: Jika user belum memilih bintang sama sekali
    if (rating === '0') {
      alert('Silakan pilih rating bintang terlebih dahulu!');
      return;
    }

    // Siapkan objek data (bisa dikirim ke API / Database nanti)
    const reviewData = {
      name: name,
      rating: parseInt(rating),
      review: review,
      date: new Date().toLocaleDateString('id-ID') // Format tanggal Indonesia
    };

    // Tampilkan di console log untuk memastikan data berhasil ditangkap
    console.log('Ulasan Berhasil Masuk:', reviewData);
    
    // Munculkan notifikasi sukses
    alert(`Terima kasih ${name}! Ulasan kamu berhasil dikirim.`);

    /* ==========================================================================
       RESET FORM SETELAH SUKSES
       ========================================================================== */
    reviewForm.reset(); // Mengosongkan text nama dan ulasan
    ratingValueInput.value = '0'; // Reset data rating jadi 0
    stars.forEach(s => s.classList.remove('active')); // Matikan semua warna bintang
  });
});