<?php

$app = new ControllerApiCustomerauth();

$app->get('/users','getUser'); // Using Get HTTP Method and process getUser function
$app->get('/users/search/:query', 'findByName'); // Using Get HTTP Method and process findByName function
$app->post('/users', 'addUser'); // Using Post HTTP Method and process addUser function
$app->put('/users/:id', 'updateUser'); // Using Put HTTP Method and process updateUser function
$app->delete('/users/:id',    'deleteUser'); // Using Delete HTTP Method and process deleteUser function
$app->run();

?>