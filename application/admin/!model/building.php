<?php
/*   __________________________________________________
    |  ##CreativeSol Management Information System##   |
    |__________________________________________________|
*/
 class building extends db_table { protected $_table = "\155\151\x73\137\x62\165\151\154\144\x69\x6e\147"; protected $_pkey = "\x62\154\x64\137\151\144"; public function getBuildingPair($uF7B7 = array()) { goto A3IJP; fwndr: return parent::fetchPair($uF7B7); goto iSGFt; A3IJP: $this->query("\x73\145\x6c\x65\x63\164\x20\142\x6c\144\x5f\151\x64\x2c\x62\x6c\144\x5f\x6e\x61\x6d\145\40\x66\x72\x6f\x6d\40{$this->_table}"); goto pDXTg; pDXTg: $this->_order[] = "\x62\154\144\x5f\156\141\x6d\145\x20\101\123\103"; goto fwndr; iSGFt: } public function add($npJXn) { return parent::insert($npJXn); } }
