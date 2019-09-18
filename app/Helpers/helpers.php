<?php
//function for sidebar ,set active class
function set_active($path, $active = 'active')
{
    return call_user_func_array('Request::is', (array)$path) ? $active : '';
}
//set class active
function set_nav_active($path, $active = 'nav-active')
{
    return call_user_func_array('Request::is', (array)$path) ? $active : '';
}
