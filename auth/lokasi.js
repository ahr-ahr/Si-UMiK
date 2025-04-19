const provinsiSelect = document.getElementById("Provinsi");
const kabupatenSelect = document.getElementById("Kabupaten");
const kecamatanSelect = document.getElementById("Kecamatan");
const kelurahanSelect = document.getElementById("Kelurahan");
const kodeposSelect = document.getElementById("KodePos");

// Ambil data provinsi
fetch("https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json")
  .then(response => response.json())
  .then(data => {
    data.forEach(prov => {
      const option = document.createElement("option");
      option.value = prov.id;
      option.text = prov.name;
      provinsiSelect.add(option);
    });
  })
  .catch(error => console.error("Gagal mengambil provinsi:", error));

// Saat provinsi dipilih
provinsiSelect.addEventListener("change", function () {
  kabupatenSelect.innerHTML = '<option value="">-- Pilih Kabupaten --</option>';
  kecamatanSelect.innerHTML = '<option value="">-- Pilih Kecamatan --</option>';
  kelurahanSelect.innerHTML = '<option value="">-- Pilih Kelurahan --</option>';
  kodeposSelect.innerHTML = '<option value="">-- Pilih Kode pos --</option>';

  fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/regencies/${this.value}.json`)
    .then(response => response.json())
    .then(data => {
      data.forEach(kab => {
        const option = document.createElement("option");
        option.value = kab.id;
        option.text = kab.name;
        kabupatenSelect.add(option);
      });
    })
    .catch(error => console.error("Gagal mengambil kabupaten:", error));
});

// Saat kabupaten dipilih
kabupatenSelect.addEventListener("change", function () {
  kecamatanSelect.innerHTML = '<option value="">-- Pilih Kecamatan --</option>';
  kelurahanSelect.innerHTML = '<option value="">-- Pilih Kelurahan --</option>';
  kodeposSelect.innerHTML = '<option value="">-- Pilih Kode pos --</option>';

  fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/districts/${this.value}.json`)
    .then(response => response.json())
    .then(data => {
      data.forEach(kec => {
        const option = document.createElement("option");
        option.value = kec.id;
        option.text = kec.name;
        kecamatanSelect.add(option);
      });
    })
    .catch(error => console.error("Gagal mengambil kecamatan:", error));
});

// Saat kecamatan dipilih
kecamatanSelect.addEventListener("change", function () {
  kelurahanSelect.innerHTML = '<option value="">-- Pilih Kelurahan --</option>';
  kodeposSelect.innerHTML = '<option value="">-- Pilih Kode pos --</option>';

  fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/villages/${this.value}.json`)
    .then(response => response.json())
    .then(data => {
      data.forEach(kel => {
        const option = document.createElement("option");
        option.value = kel.id;
        option.text = kel.name;
        kelurahanSelect.add(option);
      });
    })
    .catch(error => console.error("Gagal mengambil kelurahan:", error));
});

// Saat kelurahan dipilih, ambil kode pos
kelurahanSelect.addEventListener("change", function () {
  const kelurahanNama = kelurahanSelect.options[kelurahanSelect.selectedIndex]?.text || "";
  const kecamatanNama = kecamatanSelect.options[kecamatanSelect.selectedIndex]?.text || "";
  const kabupatenNama = kabupatenSelect.options[kabupatenSelect.selectedIndex]?.text || "";

  const query = `${kelurahanNama} ${kecamatanNama} ${kabupatenNama}`;
  kodeposSelect.innerHTML = '<option value="">Sedang mencari kode pos...</option>';

  fetch(`https://kodepos.vercel.app/search?q=${encodeURIComponent(query)}`)
    .then(response => response.json())
    .then(data => {
      kodeposSelect.innerHTML = '';
      if (data && data.data && data.data.length > 0) {
        data.data.forEach(item => {
          const option = document.createElement("option");
          option.value = item.kodepos;
          option.text = `${item.kodepos} (${item.kelurahan}, ${item.kecamatan}, ${item.kabupaten}, ${item.propinsi})`;
          kodeposSelect.appendChild(option);
        });
      } else {
        const option = document.createElement("option");
        option.text = "Kode pos tidak ditemukan";
        kodeposSelect.appendChild(option);
      }
    })
    .catch(error => {
      console.error("Gagal mengambil kode pos:", error);
      kodeposSelect.innerHTML = '';
      const option = document.createElement("option");
      option.text = "Terjadi kesalahan";
      kodeposSelect.appendChild(option);
    });
});
