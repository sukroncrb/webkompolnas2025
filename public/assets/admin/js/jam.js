function setJamDigital(id) {
    const jamdigital = document.getElementById(id);
    const sekarang = new Date();
  
    let jam = sekarang.getHours();
    let menit = sekarang.getMinutes();
    let detik = sekarang.getSeconds();
  
    // Tambahkan nol di depan angka satu digit
    jam = jam < 10 ? '0' + jam : jam;
    menit = menit < 10 ? '0' + menit : menit;
    detik = detik < 10 ? '0' + detik : detik;
  
    jamdigital.innerHTML = `${jam}:${menit}:<span class='text-danger'>${detik}</span>`;
}