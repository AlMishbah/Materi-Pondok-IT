<?php

class persegi {
     public $persegi;

    public function rumus_persegi($data) {
        $sisi1 = $data['sisi1'];
        $sisi2 = $data['sisi2'];

        $this->persegi = $sisi1 * $sisi2;
        return $this->persegi;
    }
}


?>