<?php

class persegi {

    public $Persegi;

    public function rumus_p($data) {
        $sisi1 = $data['sisi1'];
        $sisi2 = $data['sisi2'];

        $this->Persegi = $sisi1 * $sisi2;
        return $this->Persegi;
    }
}


?>