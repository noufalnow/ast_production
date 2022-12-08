<?php
/*   __________________________________________________
    |  ##CreativeSol Management Information System##   |
    |__________________________________________________|
*/
 class building extends db_table { protected $_table = "\155\151\x73\x5f\x62\165\x69\x6c\144\x69\156\x67"; protected $_pkey = "\x62\154\144\x5f\151\x64"; public function getBuildingPair($Qjqu3 = array()) { goto tXDyM; mnRco: return parent::fetchPair($Qjqu3); goto ClqII; tXDyM: $this->query("\x73\145\x6c\x65\143\164\40\x62\x6c\144\x5f\x69\x64\54\x62\x6c\x64\137\156\141\155\x65\40\x66\162\157\155\x20{$this->_table}"); goto ryy3v; ryy3v: $this->_order[] = "\142\x6c\x64\137\156\141\x6d\x65\x20\101\123\103"; goto mnRco; ClqII: } public function add($f1BWY) { return parent::insert($f1BWY); } }
