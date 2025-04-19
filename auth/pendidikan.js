document.addEventListener("DOMContentLoaded", function () {
    const pendidikanSelect = document.getElementById("Pendidikan");
    const jurusanInput = document.getElementById("jurusan");

    // Sembunyikan input jurusan di awal
    jurusanInput.style.display = "none";
    jurusanInput.required = false;

    pendidikanSelect.addEventListener("change", function () {
      const selectedValue = this.value;

      const showJurusan = [
        "SMA", "D1", "D2", "D3", "S1", "S2", "S3"
      ];

      if (showJurusan.includes(selectedValue)) {
        jurusanInput.style.display = "block";
        jurusanInput.required = true;
      } else {
        jurusanInput.style.display = "none";
        jurusanInput.required = false;
        jurusanInput.value = ""; // Kosongkan jika disembunyikan
      }
    });
  });