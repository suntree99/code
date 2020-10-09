<?php

class About {
  public function index($nama = "Budi", $pekerjaan = "Programmer") // method default dengan params default
    echo "Hallo nama saya $nama, saya adalah seorang $pekerjaan";
  }

  public function page()
  {
    echo "about/page";
  }
}
