<?php

class persegi_panjang {
    public $PersegiP;

    public function rumus_persegiP($data) {
        $panjang = $data['panjang'];
        $lebar = $data['lebar'];

        $this->PersegiP = $panjang * $lebar;
        return $this->PersegiP;
    }
}

?>