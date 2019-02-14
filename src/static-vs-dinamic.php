<?php

define('LOOP', 1000000);

class ClassA {

    static function a() {
        $x = 100 * 999999999999999999999 * 3;
        echo ".";
    }

}

class ClassB {

    function b() {
        $x = 100 * 999999999999999999999 * 3;
        echo ".";
    }

}

function f1() {
    for ($i = 0; $i < LOOP; ++$i) {
        ClassA::a();
        ClassA::a();
        ClassA::a();
        ClassA::a();
        ClassA::a();
        ClassA::a();
        ClassA::a();
        ClassA::a();
        ClassA::a();
        ClassA::a();
    }
}

function f2() {
    $ClassB = new ClassB;

    for ($i = 0; $i < LOOP; ++$i) {
        $ClassB->b();
        $ClassB->b();
        $ClassB->b();
        $ClassB->b();
        $ClassB->b();
        $ClassB->b();
        $ClassB->b();
        $ClassB->b();
        $ClassB->b();
        $ClassB->b();
    }
}

$start = microtime(true);
f1();
$stop = microtime(true);
$time1 = $stop - $start;

$start = microtime(true);
f2();
$stop = microtime(true);
$time2 = $stop - $start;

echo $time1 . "\t";
echo $time2 . "\n";
