// DOM Manipulation - Node Manipulation
 
// document.createElement()
// document.createTextNode()
// node.appendChild()
// node.insertBefore()
// parentNode.removeChild()
// parentNode.replaceChild()

// --- Method Baru ---

// parentNode.append()
// parentNode.prepand()
// childNode.before()
// childNode.after()
// childNode.remove()
// childNode.replaceWith()

// -------------------------------------------------------------

//	buat elemen/node baru (tag dan teks)

	// document.createElement()
	const pBaru = document.createElement('p');

	// document.createTextNode()
	const teksPBaru = document.createTextNode('Paragraf Baru');

//	simpan teks kedalam tag

	// node.appendChild()
	pBaru.appendChild(teksPBaru);

//	tentukan lokasi penempatan (cth: akhir Section A)
	const sectionA = document.getElementById('a');

	// node.appendChild()
	sectionA.appendChild(pBaru);

// -------------------------------------------------------------

//	buat elemen/node baru (tag dan teks)

	const liBaru = document.createElement('li');
	const teksLiBaru = document.createTextNode('Item Baru');

//	simpan teks kedalam tag
	liBaru.appendChild(teksLiBaru);

//	tentukan lokasi penempatan (cth: sebelum item 2)
	const ul = document.querySelector('section#b ul');
	const li2 = ul.querySelector('li:nth-child(2)');
	ul.insertBefore(liBaru, li2);

// -------------------------------------------------------------

//	menghapus elemen/node

	// pilih elemen/node
	const link = document.getElementsByTagName('a')[0];

	// parentNode.removeChild()
	sectionA.removeChild(link);

// -------------------------------------------------------------

//	mengganti elemen/node

	// pilih elemen/node yang akan diganti
	const sectionB = document.getElementById('b');
	const p4 = sectionB.querySelector('p');

	// buat elemen/node pengganti
	const h2Baru = document.createElement('h2');
	const teksH2Baru = document.createTextNode('Judul Baru');

	// simpan teks kedalam tag
	h2Baru.appendChild(teksH2Baru);

	// parentNode.replaceChild()
	sectionB.replaceChild(h2Baru, p4);

// -------------------------------------------------------------

//	penanda elemen/node baru

	pBaru.style.backgroundColor = 'lightgreen';
	liBaru.style.backgroundColor = 'lightgreen';
	h2Baru.style.backgroundColor = 'lightgreen';

// -------------------------------------------------------------
