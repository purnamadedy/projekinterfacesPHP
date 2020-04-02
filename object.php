<?php 

class Kelurahan{
    public $nama,$alamat;
    protected $jumlah_keluarga;
    protected $rt;
    
    public function Kelurahan(){
        return "Pondok Labu";
    }
}
class Rt extends Kelurahan{  

    private $penghasilan;

    public function setPenghasilan($penghasilan){
        $this->penghasilan = $penghasilan;
    }
    public function getPenghasilan(){
        return $this->penghasilan;
    }
    public function __construct($nama,$alamat,$jumlah_keluarga,$rt){
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->jumlah_keluarga = $jumlah_keluarga;
        $this->rt = $rt;
    }
    

    public function keluarga(){
        return "
        <tr>
            <td>$this->nama</td>
            <td>$this->alamat</td>
            <td>$this->jumlah_keluarga</td>
            <td>".$this->getpenghasilan()."</td>
            <td>".$this->Kelurahan()."</td>
        </tr>";
    } 
}
class Rw extends kelurahan{
    protected $rw;

    public function __construct($nama,$alamat,$rt,$jumlah_keluarga){
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->rt = $rt;
        $this->jumlah_keluarga = $jumlah_keluarga;
    }
    public function warga(){
        return "
        <tr>
            <td>$this->nama</td>
            <td>$this->alamat</td>
            <td>$this->rt</td>
            <td>$this->jumlah_keluarga</td>
            <td>".$this->Kelurahan()."</td>
            </tr>";
    } 
}
$warga1 = new Rt("imam","gang asem",10,"");
$warga2 = new Rt("Dedy","Merak",20,"");
$warga3 = new Rt("Ryan","Srengseng",4,"");
$warga4 = new Rt("Habib","Merauke",50,"");
$hasil = $warga1->setPenghasilan("20 juta").$warga2->setPenghasilan("10 juta").$warga3->setPenghasilan("20 juta").$warga4->setPenghasilan("10 juta").$warga1->keluarga().$warga2->keluarga().$warga3->keluarga().$warga4->keluarga();

$rw1 = new Rw("Imam","Gang Asem","10 Orang","003");
$rw2 = new Rw("Dedy","Merak","3 Orang","004");
$rw3 = new Rw("Ryan","Srengseng","8 Orang","010");
$rw4 = new Rw("Habib","GLC","30 Orang","003");

$hasilRw = $rw1->warga().$rw2->warga().$rw3->warga().$rw4->warga();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5 mb-3">
                <h1 class="text-center">Data Warga RT 003</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Jumlah Keluarga</th>
                            <th scope="col">Penghasilan</th>
                            <th scope="col">Kelurahan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?= $hasil ?>
                    </tbody>
                </table>
            </div>
        </div>
   
        <br><br>
        <div class="row">
            <div class="col-md-12">
            <h1 class="mt-5 text-center">Data RW 008</h1>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12 mt-5">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Jumlah Keluarga</th>
                            <th scope="col">Rt</th>
                            <th scope="col">Kelurahan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?= $hasilRw ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>