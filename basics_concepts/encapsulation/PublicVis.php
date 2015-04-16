<?php

class PublicVis
{
    private $password;
    private function openSesame($someData)
    {
        $this->password=$someData;
        if($this->password=="secret")
        {
            echo "You're in!\n";
        }
        else
        {
            echo "Release the hounds!\n";
        }
    }
    public function unlock($safe)
    {
        $this->openSesame($safe);
    }
}
$worker=new PublicVis();
$worker->unlock("secret");
$worker->unlock("duh");
