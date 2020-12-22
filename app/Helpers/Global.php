<?php

use App\Pembeli;
use App\Control;


function totalPembeli()
{
    return Pembeli::count();
}

function totalControl()
{
    return Control::count();
}
