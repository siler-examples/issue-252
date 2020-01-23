<?php declare(strict_types=1);

namespace Acme;

use Siler\{Http\Response, Route};

require_once __DIR__ . '/vendor/autoload.php';

Route\get('/hello/', 'test.php');

if (!Route\did_match()) {
    Response\text('Not found', 404);
}