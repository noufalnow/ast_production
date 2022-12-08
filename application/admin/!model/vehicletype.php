<?php
/*   __________________________________________________
    |  ##CreativeSol Management Information System##   |
    |__________________________________________________|
*/
 class vehicletype extends db_table { protected $_table = "\x6d\151\163\137\166\x65\x68\151\x63\x6c\x65\137\164\x79\x70\x65"; protected $_pkey = "\x74\171\x70\145\x5f\151\x64"; public function getVehiclePair($Qjqu3 = array()) { goto CKvcN; HaV7c: $this->_order[] = "\x74\171\160\145\x5f\x6e\x61\155\145\40\101\x53\103"; goto EMYTw; CKvcN: $this->query("\163\145\154\x65\x63\x74\40\164\x79\160\145\x5f\x69\x64\x2c\164\x79\160\145\137\x6e\141\155\145\x20\x66\x72\157\155\x20{$this->_table}"); goto HaV7c; EMYTw: return parent::fetchPair($Qjqu3); goto sI3sl; sI3sl: } }
