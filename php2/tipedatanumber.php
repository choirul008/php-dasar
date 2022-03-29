<?php


// number dalam php ada integer/ bilangan bulat
echo "Decimal:  ";
var_dump(1234);

echo "Octal:  ";
var_dump(01234);

echo "Hexadecimal:  ";
var_dump(0x1A);

echo "Binary:  ";
var_dump(0b111111);

echo "Underscore in Number:  ";
var_dump(1_234_567);


// nomer kedua yaitu floating point / pecahan
echo "Floating Point :  ";
var_dump(1.234);

echo "Floating Point dengan E Notation (1.7*1000):  ";
var_dump(1.7e3);

echo "Floating Point dengan E Notation Minus (1.7*0.001):  ";
var_dump(1.7e-3);

echo "Underscore di floating point:  ";
var_dump(1_123.123);

// integer Overflow Batasan Integer

echo "Integer Overflow 32Bit : ";
var_dump(2147483648);

echo "Integer Overflow 64Bit : ";
var_dump(9223372036854775808);



