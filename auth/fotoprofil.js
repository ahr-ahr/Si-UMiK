const fileInput = document.getElementById("file");
  const label = document.querySelector(".akun-label");

  fileInput.addEventListener("change", function () {
    const fileName = this.files[0] ? this.files[0].name : "Upload Foto";
    label.textContent = fileName;
  });