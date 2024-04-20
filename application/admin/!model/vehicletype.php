<?php
/*   __________________________________________________
    |  ##CreativeSol Management Information System##   |
    |__________________________________________________|
*/
 class vehicletype extends db_table { protected $_table = "\x6d\x69\163\x5f\166\x65\x68\151\143\154\x65\x5f\164\x79\x70\x65"; protected $_pkey = "\164\x79\160\x65\x5f\151\x64"; public function getVehiclePair($gBaOn = array()) { goto o1NeC; c_zCZ: $this->_order[] = "\x74\x79\x70\145\x5f\156\x61\155\x65\40\101\123\x43"; goto ELJJ9; ELJJ9: return parent::fetchPair($gBaOn); goto D6Mn7; o1NeC: $this->query("\163\x65\x6c\x65\x63\164\x20\x74\171\x70\x65\137\x69\144\54\164\171\160\x65\x5f\156\141\155\x65\x20\146\162\x6f\155\40{$this->_table}"); goto c_zCZ; D6Mn7: } }
