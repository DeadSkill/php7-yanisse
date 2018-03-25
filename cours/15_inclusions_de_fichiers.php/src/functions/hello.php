<?php
function hello(string $firstname, bool $capitalize = false): string {
    return ($capitalize) ? strtoupper($firstname) : $firstname;
}
