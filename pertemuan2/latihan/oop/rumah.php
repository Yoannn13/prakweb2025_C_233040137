<?php
class Rumah {
    // property
    public $warna = "kuning";
    public $jumlahKamar = 4;
    public $alamat = "Jl. Pasundan No. 2";

    // constructor
    public function __construct($warna, $jumlahKamar, $alamat) {
        $this->warna = $warna;
        $this->jumlahKamar = $jumlahKamar;
        $this->alamat = $alamat;
    }

    // method
    public function kunciPintu() {
        return "Rumah ini dikunci";
    }

    public function warnaCat() {
        return $this->warna;
    }

    public function gantiWarna($warna) {
        $this->warna = $warna;
        return "Warna rumah berubah menjadi $warna";
    }
}

function pasangListrik($rumah) {
    return "Rumah ini dipasang listrik, rumah yang berwarna " . $rumah->warna;
}

$rumahAndi = new Rumah("hijau", 4, "Jl. Pasundan No. 6");
echo pasangListrik($rumahAndi);
echo "<br>";

// object
$rumahSaya = new Rumah("biru", 6, "Jl. Pasundan No. 7");
// $rumahSaya->gantiWarna("Merah");
echo "Rumah saya: " . $rumahSaya->warnaCat() . ", terdapat " . $rumahSaya->jumlahKamar . " kamar, dan berada di " . $rumahSaya->alamat . "<br>";

$rumahTetangga = new Rumah("pink", 8, "Jl. Pasundan No. 8");
// $rumahTetangga->gantiWarna("Biru");
echo "Rumah tetangga: " . $rumahTetangga->warnaCat() . ", terdapat " . $rumahTetangga->jumlahKamar . " kamar, dan berada di " . $rumahTetangga->alamat . "<br>";
?>