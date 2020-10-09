// Membuat Object pada Javascript

// Object Literal

var mhs1 = {
	nama : "Budi Darmawan",
	nip : 13608051,
	email : "suntree99@ymail.com",
	jurusan : "Aeronotika dan Astromotika"
}

var mhs2 = {
	nama : "Darmawan Budi",
	nip : 16908219,
	email : "suntree99@gmail.com",
	jurusan : "FTMD"
}

console.log(mhs1);
console.log(mhs2);

// Function Declaration

function buatObjectMahasiswa(nama, nip, email, jurusan) {
	var mhs = {};
	mhs.nama = nama;
	mhs.nip = nip;
	mhs.email = email;
	mhs.jurusan = jurusan;
	return mhs;
}

var mhs3 = buatObjectMahasiswa("Budi", "123456", "suntree@gmail.com", "Teknik Penerbangan");

console.log(mhs3);

// Constructor Function (keyword : new)

function Mahasiswa(nama, nip, email, jurusan) {
	// var this = {};
	this.nama = nama;
	this.nip = nip;
	this.email = email;
	this.jurusan = jurusan;
	// return this;
}

var mhs4 = new Mahasiswa("Darmawan", "654321", "suntree99@yahoo.com", "Teknik")

console.log(mhs4);

// Object.create()
