// alert("1. Al-Fatihah    31. Luqman        61. As-Saff      91. Asy-Syams\n2. Al-Baqarah    32. As-Sajdah    62. Al-Jumu’ah   92. Al-Lail\n3. Ali 'Imran    33. Al-Ahzab      63. Al-Munafiqun 93. Ad-Duha\n4. An-Nisa'      34. Saba’         64. At-Tagabun   94. Al-Insyirah\n5. Al-Ma'idah    35. Fatir         65. At-Talaq     95. At-Tin\n6. Al-An'am      36. Ya Sin        66. At-Tahrim    96. Al-'Alaq\n7. Al-A’raf      37. As-Saffat     67. Al-Mulk      97. Al-Qadr\n8. Al-Anfal      38. Sad           68. Al-Qalam     98. Al-Bayyinah\n9. At-Taubah     39. Az-Zumar      69. Al-Haqqah    99. Az-Zalzalah\n10. Yunus        40. Ghafir        70. Al-Ma’arij   100. Al-'Adiyat\n11. Hud          41. Fussilat      71. Nuh          101. Al-Qari'ah\n12. Yusuf        42. Asy-Syura     72. Al-Jinn      102. At-Takasur\n13. Ar-Ra’d      43. Az-Zukhruf    73. Al-Muzzammil 103. Al-'Asr\n14. Ibrahim      44. Ad-Dukhan     74. Al-Muddassir 104. Al-Humazah\n15. Al-Hijr      45. Al-Jasiyah    75. Al-Qiyamah   105. Al-Fil\n16. An-Nahl      46. Al-Ahqaf      76. Al-Insan     106. Quraisy\n17. Al-Isra'     47. Muhammad      77. Al-Mursalat  107. Al-Ma’un\n18. Al-Kahf      48. Al-Fath       78. An-Naba’     108. Al-Kausar\n19. Maryam       49. Al-Hujurat    79. An-Nazi’at   109. Al-Kafirun\n20. Ta Ha        50. Qaf           80. Abasa        110. An-Nasr\n21. Al-Anbiya    51. Az-Zariyat    81. At-Takwir    111. Al-Lahab\n22. Al-Hajj      52. At-Tur        82. Al-Infitar   112. Al-Ikhlas\n23. Al-Mu’minun  53. An-Najm       83. Al-Tatfif    113. Al-Falaq\n24. An-Nur       54. Al-Qamar      84. Al-Insyiqaq  114. An-Nas\n25. Al-Furqan    55. Ar-Rahman     85. Al-Buruj\n26. Asy-Syu'ara' 56. Al-Waqi’ah    86. At-Tariq\n27. An-Naml      57. Al-Hadid      87. Al-A’la\n28. Al-Qasas     58. Al-Mujadilah  88. Al-Gasyiyah\n29. Al-'Ankabut  59. Al-Hasyr      89. Al-Fajr\n30. Ar-Rum       60. Al-Mumtahanah 90. Al-Balad\n")

var kali = 0;
var benar = 0;
var tanya = true;
while( tanya ){

//	menangkap pilihan komputer
	
	var comp = Math.random();
	var surah = "";

	if ( comp <= 0.0068 ) {
		comp = 1;
		surah = "Al-Fatihah";
	} else if ( comp > 0.0068 && comp <= 0.0141 ) {
		comp = 101;
		surah = "Al-Qariah";
	} else if ( comp > 0.0141 && comp <= 0.0214 ) {
		comp = 102;
		surah = "At-Takasur";
	} else if ( comp > 0.0214 && comp <= 0.0287 ) {
		comp = 103;
		surah = "Al-'Asr";
	} else if ( comp > 0.0287 && comp <= 0.036 ) {
		comp = 104;
		surah = "Al-Humazah";
	} else if ( comp > 0.036 && comp <= 0.0433 ) {
		comp = 105;
		surah = "Al-Fil";
	} else if ( comp > 0.0433 && comp <= 0.0506 ) {
		comp = 106;
		surah = "Quraisy";
	} else if ( comp > 0.0506 && comp <= 0.0579 ) {
		comp = 107;
		surah = "Al-Ma'un";
	} else if ( comp > 0.0579 && comp <= 0.0652 ) {
		comp = 108;
		surah = "Al-Kausar";
	} else if ( comp > 0.0652 && comp <= 0.0725 ) {
		comp = 109;
		surah = "Al-Kafirun";
	} else if ( comp > 0.0725 && comp <= 0.0798 ) {
		comp = 110;
		surah = "An-Nasr";
	} else if ( comp > 0.0798 && comp <= 0.0871 ) {
		comp = 111;
		surah = "Al-Lahab";
	} else if ( comp > 0.0871 && comp <= 0.0944 ) {
		comp = 112;
		surah = "Al-Ikhlas";
	} else if ( comp > 0.0944 && comp <= 0.1017 ) {
		comp = 113;
		surah = "Al-Falaq";
	} else if ( comp > 0.1017 && comp <= 0.109 ) {
		comp = 114;
		surah = "An-Nas";
	} else if ( comp > 0.109 && comp <= 0.118 ) {
		comp = 2;
		surah = "Al-Baqarah";
	} else if ( comp > 0.118 && comp <= 0.127 ) {
		comp = 3;
		surah = "Ali Imran";
	} else if ( comp > 0.127 && comp <= 0.136 ) {
		comp = 4;
		surah = "An-Nisa";
	} else if ( comp > 0.136 && comp <= 0.145 ) {
		comp = 5;
		surah = "Al-Ma'idah";
	} else if ( comp > 0.145 && comp <= 0.154 ) {
		comp = 6;
		surah = "Al-An'am";
	} else if ( comp > 0.154 && comp <= 0.163 ) {
		comp = 7;
		surah = "Al-A'raf";
	} else if ( comp > 0.163 && comp <= 0.172 ) {
		comp = 8;
		surah = "Al-Anfal";
	} else if ( comp > 0.172 && comp <= 0.181 ) {
		comp = 9;
		surah = "At-Taubah";
	} else if ( comp > 0.181 && comp <= 0.19 ) {
		comp = 10;
		surah = "Yunus";
	} else if ( comp > 0.19 && comp <= 0.199 ) {
		comp = 11;
		surah = "Hud";
	} else if ( comp > 0.199 && comp <= 0.208 ) {
		comp = 12;
		surah = "Yusuf";
	} else if ( comp > 0.208 && comp <= 0.217 ) {
		comp = 13;
		surah = "Ar-Ra'd";
	} else if ( comp > 0.217 && comp <= 0.226 ) {
		comp = 14;
		surah = "Ibrahim";
	} else if ( comp > 0.226 && comp <= 0.235 ) {
		comp = 15;
		surah = "Al-Hijr";
	} else if ( comp > 0.235 && comp <= 0.244 ) {
		comp = 16;
		surah = "An-Nahl";
	} else if ( comp > 0.244 && comp <= 0.253 ) {
		comp = 17;
		surah = "Al-Isra";
	} else if ( comp > 0.253 && comp <= 0.262 ) {
		comp = 18;
		surah = "Al-Kahf";
	} else if ( comp > 0.262 && comp <= 0.271 ) {
		comp = 19;
		surah = "Maryam";
	} else if ( comp > 0.271 && comp <= 0.28 ) {
		comp = 20;
		surah = "Ta Ha";
	} else if ( comp > 0.28 && comp <= 0.289 ) {
		comp = 21;
		surah = "Al-Anbiya";
	} else if ( comp > 0.289 && comp <= 0.298 ) {
		comp = 22;
		surah = "Al-Hajj";
	} else if ( comp > 0.298 && comp <= 0.307 ) {
		comp = 23;
		surah = "Al-Mu'minun";
	} else if ( comp > 0.307 && comp <= 0.316 ) {
		comp = 24;
		surah = "An-Nur";
	} else if ( comp > 0.316 && comp <= 0.325 ) {
		comp = 25;
		surah = "Al-Furqan";
	} else if ( comp > 0.325 && comp <= 0.334 ) {
		comp = 26;
		surah = "Asy-Syu'ara";
	} else if ( comp > 0.334 && comp <= 0.343 ) {
		comp = 27;
		surah = "An-Naml";
	} else if ( comp > 0.343 && comp <= 0.352 ) {
		comp = 28;
		surah = "Al-Qasas";
	} else if ( comp > 0.352 && comp <= 0.361 ) {
		comp = 29;
		surah = "Al-'Ankabut";
	} else if ( comp > 0.361 && comp <= 0.37 ) {
		comp = 30;
		surah = "Ar-Rum";
	} else if ( comp > 0.37 && comp <= 0.379 ) {
		comp = 31;
		surah = "Luqman";
	} else if ( comp > 0.379 && comp <= 0.388 ) {
		comp = 32;
		surah = "As-Sajdah";
	} else if ( comp > 0.388 && comp <= 0.397 ) {
		comp = 33;
		surah = "Al-Ahzab";
	} else if ( comp > 0.397 && comp <= 0.406 ) {
		comp = 34;
		surah = "Saba";
	} else if ( comp > 0.406 && comp <= 0.415 ) {
		comp = 35;
		surah = "Fatir";
	} else if ( comp > 0.415 && comp <= 0.424 ) {
		comp = 36;
		surah = "Yaa Sin";
	} else if ( comp > 0.424 && comp <= 0.433 ) {
		comp = 37;
		surah = "As-Saffat";
	} else if ( comp > 0.433 && comp <= 0.442 ) {
		comp = 38;
		surah = "Sad";
	} else if ( comp > 0.442 && comp <= 0.451 ) {
		comp = 39;
		surah = "Az-Zumar";
	} else if ( comp > 0.451 && comp <= 0.46 ) {
		comp = 40;
		surah = "Ghafir";
	} else if ( comp > 0.46 && comp <= 0.469 ) {
		comp = 41;
		surah = "Fussilat";
	} else if ( comp > 0.469 && comp <= 0.478 ) {
		comp = 42;
		surah = "Asy-Syura";
	} else if ( comp > 0.478 && comp <= 0.487 ) {
		comp = 43;
		surah = "Az-Zukhruf";
	} else if ( comp > 0.487 && comp <= 0.496 ) {
		comp = 44;
		surah = "Ad-Dukhan";
	} else if ( comp > 0.496 && comp <= 0.505 ) {
		comp = 45;
		surah = "Al-Jasiyah";
	} else if ( comp > 0.505 && comp <= 0.514 ) {
		comp = 46;
		surah = "Al-Ahqaf";
	} else if ( comp > 0.514 && comp <= 0.523 ) {
		comp = 47;
		surah = "Muhammad";
	} else if ( comp > 0.523 && comp <= 0.532 ) {
		comp = 48;
		surah = "Al-Fath";
	} else if ( comp > 0.532 && comp <= 0.541 ) {
		comp = 49;
		surah = "Al-Hujurat";
	} else if ( comp > 0.541 && comp <= 0.55 ) {
		comp = 50;
		surah = "Qaf";
	} else if ( comp > 0.55 && comp <= 0.559 ) {
		comp = 51;
		surah = "Az-Zariyat";
	} else if ( comp > 0.559 && comp <= 0.568 ) {
		comp = 52;
		surah = "At-Tur";
	} else if ( comp > 0.568 && comp <= 0.577 ) {
		comp = 53;
		surah = "An-Najm";
	} else if ( comp > 0.577 && comp <= 0.586 ) {
		comp = 54;
		surah = "Al-Qamar";
	} else if ( comp > 0.586 && comp <= 0.595 ) {
		comp = 55;
		surah = "Ar-Rahman";
	} else if ( comp > 0.595 && comp <= 0.604 ) {
		comp = 56;
		surah = "Al-Waqi'ah";
	} else if ( comp > 0.604 && comp <= 0.613 ) {
		comp = 57;
		surah = "Al-Hadid";
	} else if ( comp > 0.613 && comp <= 0.622 ) {
		comp = 58;
		surah = "Al-Mujadilah";
	} else if ( comp > 0.622 && comp <= 0.631 ) {
		comp = 59;
		surah = "Al-Hasyr";
	} else if ( comp > 0.631 && comp <= 0.64 ) {
		comp = 60;
		surah = "Al-Mumtahanah";
	} else if ( comp > 0.64 && comp <= 0.649 ) {
		comp = 61;
		surah = "As-Saff";
	} else if ( comp > 0.649 && comp <= 0.658 ) {
		comp = 62;
		surah = "Al-Jumu'ah";
	} else if ( comp > 0.658 && comp <= 0.667 ) {
		comp = 63;
		surah = "Al-Munafiqun";
	} else if ( comp > 0.667 && comp <= 0.676 ) {
		comp = 64;
		surah = "At-Tagabun";
	} else if ( comp > 0.676 && comp <= 0.685 ) {
		comp = 65;
		surah = "At-Talaq";
	} else if ( comp > 0.685 && comp <= 0.694 ) {
		comp = 66;
		surah = "At-Tahrim";
	} else if ( comp > 0.694 && comp <= 0.703 ) {
		comp = 67;
		surah = "Al-Mulk";
	} else if ( comp > 0.703 && comp <= 0.712 ) {
		comp = 68;
		surah = "Al-Qalam";
	} else if ( comp > 0.712 && comp <= 0.721 ) {
		comp = 69;
		surah = "Al-Haqqah";
	} else if ( comp > 0.721 && comp <= 0.73 ) {
		comp = 70;
		surah = "Al-Ma'arij";
	} else if ( comp > 0.73 && comp <= 0.739 ) {
		comp = 71;
		surah = "Nuh";
	} else if ( comp > 0.739 && comp <= 0.748 ) {
		comp = 72;
		surah = "Al-Jinn";
	} else if ( comp > 0.748 && comp <= 0.757 ) {
		comp = 73;
		surah = "Al-Muzzammil";
	} else if ( comp > 0.757 && comp <= 0.766 ) {
		comp = 74;
		surah = "Al-Muddassir";
	} else if ( comp > 0.766 && comp <= 0.775 ) {
		comp = 75;
		surah = "Al-Qiyamah";
	} else if ( comp > 0.775 && comp <= 0.784 ) {
		comp = 76;
		surah = "Al-Insan";
	} else if ( comp > 0.784 && comp <= 0.793 ) {
		comp = 77;
		surah = "Al-Mursalat";
	} else if ( comp > 0.793 && comp <= 0.802 ) {
		comp = 78;
		surah = "An-Naba";
	} else if ( comp > 0.802 && comp <= 0.811 ) {
		comp = 79;
		surah = "An-Nazi'at";
	} else if ( comp > 0.811 && comp <= 0.82 ) {
		comp = 80;
		surah = "Abasa";
	} else if ( comp > 0.82 && comp <= 0.829 ) {
		comp = 81;
		surah = "At-Takwir";
	} else if ( comp > 0.829 && comp <= 0.838 ) {
		comp = 82;
		surah = "Al-Infitar";
	} else if ( comp > 0.838 && comp <= 0.847 ) {
		comp = 83;
		surah = "Al-Tatfif";
	} else if ( comp > 0.847 && comp <= 0.856 ) {
		comp = 84;
		surah = "Al-Insyiqaq";
	} else if ( comp > 0.856 && comp <= 0.865 ) {
		comp = 85;
		surah = "Al-Buruj";
	} else if ( comp > 0.865 && comp <= 0.874 ) {
		comp = 86;
		surah = "At-Tariq";
	} else if ( comp > 0.874 && comp <= 0.883 ) {
		comp = 87;
		surah = "Al-A'la";
	} else if ( comp > 0.883 && comp <= 0.892 ) {
		comp = 88;
		surah = "Al-Gasyiyah";
	} else if ( comp > 0.892 && comp <= 0.901 ) {
		comp = 89;
		surah = "Al-Fajr";
	} else if ( comp > 0.901 && comp <= 0.91 ) {
		comp = 90;
		surah = "Al-Balad";
	} else if ( comp > 0.91 && comp <= 0.919 ) {
		comp = 91;
		surah = "Asy-Syams";
	} else if ( comp > 0.919 && comp <= 0.928 ) {
		comp = 92;
		surah = "Al-Lail";
	} else if ( comp > 0.928 && comp <= 0.937 ) {
		comp = 93;
		surah = "Ad-Duha";
	} else if ( comp > 0.937 && comp <= 0.946 ) {
		comp = 94;
		surah = "Al-Insyirah";
	} else if ( comp > 0.946 && comp <= 0.955 ) {
		comp = 95;
		surah = "At-Tin";
	} else if ( comp > 0.955 && comp <= 0.964 ) {
		comp = 96;
		surah = "Al-'Alaq";
	} else if ( comp > 0.964 && comp <= 0.973 ) {
		comp = 97;
		surah = "Al-Qadr";
	} else if ( comp > 0.973 && comp <= 0.982 ) {
		comp = 98;
		surah = "Al-Bayyinah";
	} else if ( comp > 0.982 && comp <= 0.991 ) {
		comp = 99;
		surah = "Az-Zalzalah";
	} else {	
		comp = 100;
		surah = "Al-'Adiyat";
	}

	console.log("No.  Surat pilihan komputer : " + comp);
	console.log("Nama Surat pilihan komputer : " + surah);

//	menangkap pilihan player

	parseInt(angka);
	var angka = prompt("Berapakah nomor Surat : " + surah + " ?\n\nMasukkan nomor Surat : ");

	console.log("Pilihan kamu : " + angka);

//	menentukan rules

	var hasil = ""

	if ( angka == comp ) {
		hasil = "TEPAT!";
		benar++;
	} else if ( angka > 0 && angka <= 114 ) {
		hasil = "TIDAK TEPAT!";
	} else {
		hasil = "Input salah!!";
	}

	kali++;

	console.log("Jumlah jawaban benar : " + benar + "x");
	console.log("Jumlah latihan : " + kali + "x");

//	tampilkan hasilnya

	alert("Surat " + surah + " adalah Surat ke : " + comp + "\n\nJawaban kamu : " + hasil);

	var persen = (benar/kali * 100);
	
	tanya = confirm("Hafalan benar kamu : " + persen + "%\n\nMau latihan lagi?");

}

alert("Jumlah Benar : " + benar + "\nJumlah Latihan : " + kali + "\nPersentase Benar : " + persen + "%\n\nTerima kasih sudah berlatih menghafal.");