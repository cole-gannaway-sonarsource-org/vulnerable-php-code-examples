<?php

use Defuse\Crypto\KeyOrPassword;

function createKey() {
    $password = "3xAmpl3";  // Noncompliant
    return KeyOrPassword::createFromPassword($password);
}
