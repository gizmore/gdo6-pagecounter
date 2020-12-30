<?php
namespace GDO\Pagecounter;

use GDO\Core\GDO_Module;
use GDO\DB\GDT_UInt;

final class Module_Pagecounter extends GDO_Module
{
    public function getConfig()
    {
        return [
            GDT_UInt::make('pagecount')->initial('0'),
        ];
    }
    public function cfgPagecount() { return $this->getConfigVar('pagecount'); }
    

    public function onInit()
    {
        $this->increasePagecount();
    }
    
    public function increasePagecount()
    {
        $count = $this->cfgPagecount();
        $count++;
        $this->saveConfigVar('pagecount', $count);
    }
    
}
