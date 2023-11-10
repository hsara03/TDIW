<?php
function getConn()
{
    return pg_connect("host=127.0.0.1 port=5432 dbname=tdiw-k2 user=tdiw-k2 password=CozitjdL");
}