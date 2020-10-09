// DOM Manipulation - Element Manipulation
 
// element.innerHTML
// element.style.<property>
// element.setAttribute()
// element.classList

// -------------------------------------------------------------

// const judul = document.getElementById('judul');
// judul.innerHTML = '<em>Budi Darmawan</em>';

// const sectionA = document.querySelector('section#a');
// sectionA.innerHTML = '<div><P>paragraf1</p></div>';

// -------------------------------------------------------------

// const judul = document.querySelector('#judul');
// judul.style.color = 'lightblue';
// judul.style.backgroundColor = 'salmon';

// -------------------------------------------------------------

const judul = document.getElementsByTagName('h1')[0];
judul.setAttribute('nama', 'budi');

const a = document.querySelector('section#a a');
a.setAttribute('id', 'link');

