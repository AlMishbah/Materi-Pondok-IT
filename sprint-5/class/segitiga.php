<?php

class segitiga {
    public $segitiga;

    public function rumus_segitiga($data){
        $alas = $data['alas'];
        $tinggi = $data['tinggi'];
        $this->segitiga = $alas * $tinggi/2;

        return $this->segitiga;
    }
}


?>