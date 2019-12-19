// let mahasiswa = {

// 	nama: "Cintara Surya Elidanto",
// 	jurusan: "Rekayasa Perangkat Lunak",
// 	umur: 16

// };


// console.log(JSON.stringify(mahasiswa));

// tadi mengubah dari object ke json

// mengubah dari json ke object
   
// ================================================


// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function() {
// 	if(xhr.readyState == 4 && xhr.status == 200) {

// 		let mahasiswa = JSON.parse(this.responseText);
// 		console.log(mahasiswa);

// 	}
// }

// xhr.open('GET', 'coba.json', true);
// xhr.send();

// ================================================

$.getJSON('coba.json', function (data) {

	console.log(data);

});