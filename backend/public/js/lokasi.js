// JavaScript untuk tombol kembali
document.querySelector('.back-button').addEventListener('click', () => {
    alert('Kembali ke halaman sebelumnya');
});

// JavaScript untuk ikon profil
document.querySelector('.profile-icon').addEventListener('click', () => {
    alert('Buka halaman profil');
});
// JavaScript untuk grid
document.querySelector('.grid').addEventListener('click', () => {
    alert('Buka halaman selanjutnya');
});
function toggleDropdown() {
    document.getElementById("dropdownOptions").classList.toggle("show");
  }

  // Menutup dropdown saat area di luar dropdown diklik
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      for (var i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }