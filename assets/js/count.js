let dataHarga = document.querySelector('#id_buku').value;
dataHarga = dataHarga.split('.');
dataHarga = dataHarga[1];
const harga = document.querySelector("#harga").setAttribute("value", dataHarga);
