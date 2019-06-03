<?php
namespace MattiaBLX\phpDirBuster;

class dirBuster {
    public function __construct()
    {
        $this->bust = [];
    }

    public function Buster($dir = __DIR__.'/') {
        foreach (scandir($dir) as $element) {
            $finaldir = $dir.$element;
            if(!in_array($element, ['.', '..'])){
                if (is_dir($finaldir)) {
                    $this->bust['directories'][] = $finaldir;
                    $this->Buster($finaldir.'/');
                }else{
                    $this->bust['files'][] = $finaldir;
                }
                $this->bust['total'][] = $finaldir;
            }
        }
        return $this->bust;
    }
}
