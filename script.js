document.getElementById('dataForm').onsubmit = function(event) {
    const nama = document.getElementById('nama').value; // Mengambil nilai input nama
    const email = document.getElementById('email').value; // Mengambil nilai input email

    // Validasi sederhana untuk memastikan nama dan email diisi
    if (!nama || !email) {
        alert('Nama dan Email harus diisi!'); // Menampilkan pesan peringatan
        event.preventDefault(); // Mencegah pengiriman formulir jika tidak valid
    }
};