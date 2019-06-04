<?php

namespace MattiaBLX\phpDirBuster;

class dirBuster
{
    private $bust;
    public function __construct()
    {
        $this->bust = [];
    }

    public function Buster($dir = __DIR__)
    {
        if (substr($dir, -1) != '/') {
            $dir = $dir.'/';
        }
        
        foreach (array_diff(scandir($dir), ['.', '..']) as $element) {
            $finaldir = $dir.$element;
            if (is_dir($finaldir)) {
                $this->bust['directories'][] = $finaldir;
                $this->Buster($finaldir);
            } else {
                $this->bust['files'][] = $finaldir;
            }
            $this->bust['total'][] = $finaldir;
        }

        return $this->bust;
    }
}
