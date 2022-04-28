<?php

function isActive($route): string
{
    return request()->routeIs($route) ? 'active' : "";
}
