<?php
return function ($request, $response) {
    $response->status(200)->send('Hello, Vercel!');
};