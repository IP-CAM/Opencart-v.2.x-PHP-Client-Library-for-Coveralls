<?php
//.atoum.php

use mageekguy\atoum;
use mageekguy\atoum\reports;

$coveralls = new reports\asynchronous\coveralls('src', 'u6buZffn6BAjIizfdwUBipp6SD2kFTcgc');
$coveralls->addWriter();
$runner->addReport($coveralls);

$script->addDefaultReport();
