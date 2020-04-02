<?php

class Kelurahan{
    public $nama,$alamat,$kelurahan;
    protected $jumlah_keluarga;
    protected $rt;
    protected $rw;

    public function __construct($nama,$alamat,$jumlah_keluarga,$rt,$rw,$kelurahan){
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->jumlah_keluarga = $jumlah_keluarga;
        $this->rt = $rt;
        $this->rw=$rw;
        $this->kelurahan = $kelurahan;
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
    public function mencari(){
        return "<tr>
        <Td>$this->nama</Td>
        <td>$this->alamat</td>
        <Td>$this->jumlah_keluarga</Td>
        <td>$this->rt</td>
        <td>$this->rw</td>
        <td>$this->kelurahan</td>
        <td>".$this->getPenghasilan()."</td>
        </tr>
        ";
    }
}
class Rw extends Rt{
 
    public function rukunwarga(){

        return "<tr>
        <Td>$this->nama</Td>
        <td>$this->alamat</td>
        <Td>$this->jumlah_keluarga</Td>
        <td>$this->rt</td>
        <td>$this->rw</td>
        <td>$this->kelurahan</td>
        <td>".$this->getPenghasilan()."</td>
        </tr>
        ";
    }
}

$lurah1 = new Rt("imam","Gang Asem",2,"RT.003","rw.007","Batu Ceper");
$lurah2 = new Rt("Dedy","Merak Banten",5,"RT.006","rw.007","Batu Ceper");
$lurah3 = new Rt("Habib","GreenLake",10,"RT.002","rw.007","Batu Ceper");
$lurah4 = new Rt("Ryan","Srengseng",3,"RT.009","rw.007","Batu Ceper");
$tampung = $lurah1->setPenghasilan("20 juta").$lurah1->mencari().$lurah2->setPenghasilan("30 juta").$lurah2->mencari().$lurah3->setPenghasilan("20 juta").$lurah3->mencari().$lurah4->setPenghasilan("19 juta").$lurah4->mencari();

$rw1 = new Rw("rahmat","Gang Asem",4,"RT.019","Rw.007","Batu Ceper");
$rw2 = new Rw("Hidayat","Gang Senggol",3,"RT.020","Rw.010","Batu Ceper");
$rw3 = new Rw("Eko","Jalan Panjang",5,"RT.012","Rw.012","Batu Ceper");
$rw4 = new Rw("Rondo","Jalan Sempit",6,"RT.019","Rw.010","Batu Ceper");
$hasil = $rw1->setPenghasilan("15 juta").$rw1->rukunwarga().$rw2->setPenghasilan("5 juta").$rw2->rukunwarga().$rw3->setPenghasilan("15 juta").$rw3->rukunwarga().$rw4->setPenghasilan("15 juta").$rw4->rukunwarga();

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
                <h1 class="text-center">Data Warga RT Kelurahan Batu ceper</h1>
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
                            <th scope="col">Rt</th>
                            <th scope="col">Rw</th>
                            <th scope="col">Kelurahan</th>
                            <th scope="col">Penghasilan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?= $tampung ?>
                    </tbody>
                </table>
            </div>
        </div>
   
        <br><br>
        <div class="row">
            <div class="col-md-12">
            <h1 class="mt-5 text-center">Data RW Kelurahan Batu ceper</h1>
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
                            <th scope="col">Rw</th>
                            <th scope="col">Kelurahan</th>
                            <th scope="col">Penghasilan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?= $hasil ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>