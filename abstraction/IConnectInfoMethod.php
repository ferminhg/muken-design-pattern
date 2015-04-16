<?php
interface IConnectInfo
{
    const HOST ="localhost";
    const UNAME ="root";
    const DBNAME = "";
    const PW ="";
    function testConnection();
}
