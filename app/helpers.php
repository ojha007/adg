<?php

function isActive($route): string
{
    return request()->routeIs($route) ? 'active' : "";
}


function getMessage($event, $source = null): string
{
    $messages = [
        'CREATED' => '%s created successfully',
        'DELETED' => '%s deleted successfully',
        'UPDATED' => '%s updated successfully',
        'OOPS' => 'Oops! Something went wrong. Please try again after sometime.',
    ];
    $message = $messages[$event];
    return str_replace('%s', $source, $message);
}
