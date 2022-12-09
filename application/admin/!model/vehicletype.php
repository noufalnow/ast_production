<?php
/*   __________________________________________________
    |  ##CreativeSol Management Information System##   |
    |__________________________________________________|
*/
 class vehicletype extends db_table { protected $_table = "\x6d\151\x73\x5f\166\145\150\151\x63\154\145\137\x74\171\160\145"; protected $_pkey = "\164\x79\x70\145\x5f\x69\x64"; public function getVehiclePair($uF7B7 = array()) { goto cavH3; cavH3: $this->query("\163\x65\x6c\x65\x63\164\40\x74\x79\x70\x65\x5f\151\x64\x2c\164\171\160\145\137\x6e\141\x6d\145\x20\x66\162\x6f\155\40{$this->_table}"); goto zvcYw; zvcYw: $this->_order[] = "\x74\171\x70\145\137\156\x61\155\x65\x20\101\x53\x43"; goto HLICV; HLICV: return parent::fetchPair($uF7B7); goto bBczR; bBczR: } }
