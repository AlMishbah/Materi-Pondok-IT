<?php

class segitiga {

     public $Segitiga;

     public function rumus_s($data) {
        $alas = $data['alas'];
        $tinggi = $data['tinggi'];

        $this->Segitiga = $alas * $tinggi/2;
        return $this->Segitiga;
     }
}

?>