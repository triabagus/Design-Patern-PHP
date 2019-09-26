<?php
$customer = new Customer("1", "Eko", "eko@gmail.com");

// $customerArray = [
//     "id"    => $customer->getId(),
//     "name"  => $customer->getName(),
//     "email" => $customer->getEmail()
// ];

// $json = json_encode($customerArray, JSON_PRETTY_PRINT);

/**
 * Facade Pattern
 */
$facade = new CustomerFacade();
$json = $facade->toJson($customer);
