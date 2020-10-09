<?php

echo "

<h3> MVC - Model View Controller </h3>
<p> Data (Model) <=> Proses (Controller) <=> Tampilan (View) </p>

<ul> Kenapa MVC :
<li> Organisasi dan Struktur Kode yang baik </li>
<li> Pemisahan logic (proses) dan tampilan </li>
<li> Perawatan / maintenance kode </li>
<li> Implementasi konsep OOP yang sudah dipelajari </li>
<li> Digunakan oleh Banyak Web Application Framework </li>
</ul>

<ul> Frame Work :
<li> PHP : CodeIgniter, Laravel, Yii, Symfony, CakePHP, dll. </li>
<li> Java : Spring MVC, JDF, Struts, dll. </li>
<li> Python : Django, CherryPy, dll. </li>
<li> Ruby : Ruby on Rails,  Sinatra, dll. </li>
<li> Javascript : Angular JS, React, Backbone.js, dll. </li>
</ul>

<h4> .htaccess </h4>
<dl>
<dt> Options -Indexes </dt>
<dd> untuk menghambat akses ke dalam folder yang tidak memiliki file index </dd>
<br>
<dt> Options -Multiviews </dt>
<dd> untuk menghindari kesalahan/ambigu ketika memanggil folder atau file di dalam folder yang bersangkutan (public) </dd>
<br>
<dt> RewriteEngine On </dt>
<dd> untuk menulis ulang url yang ada di browser </dd>
<br>
<dt> RewriteCond %{REQUEST_FILENAME} !-d </dt>
<dd> !-d berarti jika request itu folder akan diabaikan </dd>
<br>
<dt> RewriteCond %{REQUEST_FILENAME} !-d </dt>
<dd> !-d berarti jika request itu file akan diabaikan </dd>
<br>
<dt> RewriteRule ^(.*)$ index.php?url=$1 [L] </dt>
<dd> routing dimulai dari ^ ambil semua (.*) tulisan sebagai $1 pada format index.php?url=$1 </dd>
</dl> 
"

?>