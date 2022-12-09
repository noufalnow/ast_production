<?php
/*   __________________________________________________
    |  ##CreativeSol Management Information System##   |
    |__________________________________________________|
*/
 class vehicletype extends db_table { protected $_table = "\x6d\151\163\x5f\166\x65\150\151\143\154\x65\137\x74\x79\x70\x65"; protected $_pkey = "\164\x79\x70\x65\x5f\x69\x64"; public function getVehiclePair($uF7B7 = array()) { goto BNok5; a1vHR: return parent::fetchPair($uF7B7); goto SaR5s; GPj1c: $this->_order[] = "\164\171\160\145\x5f\x6e\x61\x6d\x65\x20\101\x53\x43"; goto a1vHR; BNok5: $this->query("\163\x65\154\x65\143\x74\40\x74\x79\160\145\137\151\144\x2c\164\171\160\145\x5f\156\141\x6d\x65\x20\x66\162\157\x6d\40{$this->_table}"); goto GPj1c; SaR5s: } }
