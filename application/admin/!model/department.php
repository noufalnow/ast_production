<?php
/*   __________________________________________________
    |  ##CreativeSol Management Information System##   |
    |__________________________________________________|
*/
 class department extends db_table { protected $_table = "\143\x6f\x72\145\137\x64\x65\x70\141\x72\x74\x6d\x65\x6e\164"; protected $_pkey = "\144\145\x70\x74\137\x69\144"; public function getDeptPair($gBaOn = array()) { goto qjnkQ; iz4Pr: return parent::fetchPair($gBaOn); goto dcybM; qjnkQ: $this->query("\x73\145\154\x65\x63\164\x20\x64\x65\x70\164\x5f\x69\144\x2c\x64\145\160\164\137\x6e\x61\155\145\40\x66\x72\x6f\155\40{$this->_table}"); goto qQnkQ; qQnkQ: $this->_order[] = "\144\145\x70\x74\137\x6e\141\x6d\145\x20\x41\x53\x43"; goto iz4Pr; dcybM: } }
