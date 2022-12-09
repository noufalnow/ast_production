<?php
/*   __________________________________________________
    |  ##CreativeSol Management Information System##   |
    |__________________________________________________|
*/
 class department extends db_table { protected $_table = "\x63\157\x72\145\137\144\x65\160\141\x72\x74\x6d\x65\x6e\x74"; protected $_pkey = "\144\x65\160\164\137\x69\144"; public function getDeptPair($uF7B7 = array()) { goto XVoX6; rzWYw: $this->_order[] = "\144\x65\160\164\137\x6e\141\155\x65\40\x41\x53\x43"; goto cDdeS; cDdeS: return parent::fetchPair($uF7B7); goto ILkI8; XVoX6: $this->query("\163\x65\154\x65\x63\164\40\x64\145\160\164\137\x69\x64\x2c\144\x65\160\x74\x5f\x6e\x61\155\x65\40\x66\x72\x6f\155\x20{$this->_table}"); goto rzWYw; ILkI8: } }
