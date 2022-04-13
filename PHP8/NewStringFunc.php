<?php

// mengecek content
var_dump(str_contains("Choirul Anam", "Anam"));
var_dump(str_contains("Choirul Anam", "Choirul"));
var_dump(str_contains("Choirul Anam", "choirul"));

// diawal
var_dump(str_starts_with("Choirul Anam", "Choirul"));
var_dump(str_starts_with("Choirul Anam", "Anam"));
var_dump(str_starts_with("Choirul Anam", "choirul"));

// akhiran
var_dump(str_ends_with("Choirul Anam", "Choirul"));
var_dump(str_ends_with("Choirul Anam", "Anam"));
var_dump(str_ends_with("Choirul Anam", "choirul"));