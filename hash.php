<?php
$password = password_hash("Test", PASSWORD_DEFAULT);
echo "{$password}<br>";
//Let op! Bij een mismatch komt er niets terug
$matches = password_verify('Welkom01', $password);
echo "{$matches}<br>";
$matches = password_verify('Test', $password);
echo "{$matches}<br>";