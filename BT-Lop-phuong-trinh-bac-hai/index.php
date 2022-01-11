<?php
include_once "PtBacHai.php";
$giaiPT = new PtBacHai(1,6,4);
echo "Ket qua : Root1 = " . $giaiPT->getRoot1() ."," . "Root2 = " . $giaiPT->getRoot2();
