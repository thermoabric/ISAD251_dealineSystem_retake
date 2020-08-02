<?php

$familyMemberGateway = new familyMemberGateway($serverConnection);

//$result = $personGateway->findAll();

$result = $personGateway->insert([
    'childname' => 'Doug',
]);


?>