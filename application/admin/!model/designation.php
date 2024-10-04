<?php
/*   __________________________________________________
    |  ##CreativeSol Management Information System##   |
    |__________________________________________________|
*/
 class designation extends db_table { protected $_table = "\x63\157\162\145\x5f\x64\145\163\x69\x67\156\x61\x74\151\157\156"; protected $_pkey = "\x64\x65\163\151\147\137\x69\144"; public function getDesigPair($gBaOn = array()) { goto qjf5n; NWEk2: return parent::fetchPair($gBaOn); goto q9GPO; Ohtn8: $this->_order[] = "\x64\145\x73\x69\147\x5f\x6e\x61\155\145\40\x41\123\x43"; goto NWEk2; qjf5n: $this->query("\x73\x65\154\145\143\x74\x20\144\145\163\x69\147\137\x69\144\54\144\145\163\x69\x67\137\156\x61\155\145\40\x66\x72\157\155\x20{$this->_table}"); goto Ohtn8; q9GPO: } }
