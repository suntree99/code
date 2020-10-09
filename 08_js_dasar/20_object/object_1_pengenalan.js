// Array adalah "kumpulan nilai, yang memiliki index"
// Object adalah "kumpulan nilai, yang memiliki nama"
// Object adalah "array yang lebih sakti"

// "In Javascript, object are king. if you understand object, you understand Javascript."

// Object pada bahasa pemrograman lain
// - PHP : Associative
// - ArrayPython : Dictionaries
// - C : Hash Table
// - Java : Hash Map
// - Ruby & Pearl : Hashes

// Contoh dengan variabel (butuh banyak variabel dan pengulangan):

// var namaMhs = "Budi Darmawan";
// var umurMhs = 30;
// var lulus = true;
// var IPSemester = [2.90, 3.10, 3.25, 2.88, 3.04];

// function IPKumulatif(IPSemester) {
// 	var total = 0;
// 	for ( var i = 0; i < IPSemester.length; i++) {
// 		total += IPSemester[i];
// 	}
// 	return total/IPSemester.length;
// };

// contoh dengan array (butuh banyak pengulanagn)

// var mahasiswa = ["Budi Darmawan", 30, true, [2.90, 3.10, 3.25, 2.88, 3.04]];

// function IPKumulatif(mahasiswa[3]) {
// 	var total = 0;
// 	for ( var i = 0; i < mahasiswa[3].length; i++) {
// 		total += mahasiswa[3][i];
// 	}
// 	return total/mahasiswa[3].length;
// };

// console.log(IPKumulatif);

// Dengan Object

var mahasiswa = {
	nama : "Budi Darmawan",
	lulus : true,
	IPSemester : [2.90, 3.10, 3.25, 2.88, 3.04],
	IPKumulatif : function() {
		var total = 0;
		var ips = this.IPSemester;
		for ( var i = 0; i < ips.length; i++ ) {
			total += ips[i];
		}
		return total/ips.length;
	}
}

console.log(mahasiswa.nama);
console.log("IPK : " + mahasiswa.IPKumulatif());

var orang = {
	nama : "Budi Darmawan",
	umur : 30,
	pekerjaan : "Programmer",
	alamat : {
		jalan : "Petemon II A No. 42A",
		kecamatan : "Sawahan",
		kota : "Surabaya",
		provinsi : "Jawa Timur"
	}	
}

console.log(orang.alamat.jalan);
console.log(orang["alamat"]["kecamatan"]);
console.log(orang.alamat["kota"]);
console.log(orang["alamat"].provinsi);
