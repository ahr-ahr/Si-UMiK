document.getElementById('calculateButton').addEventListener('click', function() {
    const totalNeed = parseFloat(document.getElementById('totalNeed').value);
    const budget = parseFloat(document.getElementById('budget').value);
    const resultDiv = document.getElementById('result');

    if (isNaN(totalNeed) || isNaN(budget)) {
        resultDiv.textContent = "Silakan masukkan nilai yang valid.";
        return;
    }

    if (budget >= totalNeed) {
        resultDiv.textContent = "Selamat! Anda memiliki cukup dana untuk membuka usaha ini.";
    } else {
        const shortage = totalNeed - budget;
        resultDiv.textContent = `Anda kekurangan dana sebesar Rp ${shortage.toLocaleString()}.`;
    }
});
