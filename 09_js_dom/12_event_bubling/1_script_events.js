// Events

// Event Handler
// 	- Inline HTML attribute
// 	- Element method
// addEventListener()

// // -------------------------------------------------------------

// 	- Inline HTML attribute (JANGAN DIGUNAKAN)

const p3 = document.querySelector('.p3');

function ubahWarnaP3() {
	p3.style.backgroundColor = 'lightblue';	
}

// // -------------------------------------------------------------

// 	- Element method

function ubahWarnaP2() {
	p2.style.backgroundColor = 'lightblue';	
}

const p2 = document.querySelector('.p2');
p2.onclick = ubahWarnaP2;

// // -------------------------------------------------------------

// addEventListener()

const p4 = document.querySelector('section#b p');
p4.addEventListener('click', function() {
	const ul = document.querySelector('section#b ul');
	const liBaru = document.createElement('li');
	const teksLiBaru = document.createTextNode('item baru');
	liBaru.appendChild(teksLiBaru);
	ul.appendChild(liBaru);
	}
);

// // -------------------------------------------------------------

// perbedaan Even Handler vs addEventListener

// Even Handler - menimpa function yang terdahulu

const p3 = document.querySelector('.p3');

p3.onclick = function() {
	p3.style.backgroundColor = 'lightblue';
}

p3.onclick = function() {
	p3.style.color = 'red';
}

// ----------------------------

// addEvenListener - menjalankan semua function

const p3 = document.querySelector('.p3');

p3.addEventListener('mouseenter', function() {
	p3.style.backgroundColor = 'lightblue';
});

p3.addEventListener('mouseleave', function() {
	p3.style.color = 'red';
});

// // -------------------------------------------------------------

// Daftar Event

// Mouse Event
// 	- click
// 	- dblclick
// 	- mouseover
// 	- mousenter
// 	- mouseleave
// 	- mouseup
// 	- wheel
// 	- ....

// Keyboar Event
// 	- keydown
// 	- keypress
// 	- keyup
// 	- ....

// View Event
// 	- resize
// 	- scroll
// 	- ....

// Form Event
// 	- reset
// 	- submit
// 	- ....

// Resource Event
// Focus Event
// CSS Animation & Transition Event
// Drag & Drop Event
// dll.
