<?php
include('config.php');
if($serviceMode)
{
    http_response_code(503);
}