<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2022-12-08 23:05:07              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 class vehicletype extends db_table { protected $_table = "\x6d\x69\163\x5f\166\x65\150\x69\143\x6c\145\x5f\x74\x79\x70\145"; protected $_pkey = "\x74\171\160\x65\x5f\151\x64"; public function getVehiclePair($MntfA = array()) { goto PUgZS; AUy0e: return parent::fetchPair($MntfA); goto Mdk0h; PUgZS: $this->query("\x73\x65\154\x65\143\x74\x20\x74\x79\x70\145\137\151\x64\x2c\x74\x79\x70\145\137\156\141\155\x65\40\x66\x72\157\x6d\40{$this->_table}"); goto hiFIH; hiFIH: $this->_order[] = "\164\x79\160\145\x5f\x6e\141\x6d\x65\40\x41\123\x43"; goto AUy0e; Mdk0h: } }
