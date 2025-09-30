<?php
class About {
    public function index($nama = 'Fahmi', $pekerjaan = 'Graphic Designer', $umur = 17 ) {
        // echo "About/index"; 
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan dan saya berusia $umur tahun.";
    }

    public function page() {
        echo "About/page"; 
    }
}

?>  