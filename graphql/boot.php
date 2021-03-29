<?php

use GraphQL\Type\Schema;

require('types.php');
require('query.php');

$schema = new Schema([
    'query' => $rootQuery,
    'mutations' => null,
]);