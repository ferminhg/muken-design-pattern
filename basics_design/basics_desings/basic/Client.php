<?php
include_once('NorthRegion.php');
include_once('WestRegion.php');
class Client
{
    public function __construct()
    {
        $north=new NorthRegion();
        $west= new WestRegion();
        $this->showInterface($north);
        $this->showInterface($west);
        // Mostraria error al esperar un objecto de una clase determinada
        //$this->showInterface("wopwop");
    }
    private function showInterface(IAbstract $region)
    {
        echo $region->displayShow() . PHP_EOL;
    }
}
$worker=new Client();
