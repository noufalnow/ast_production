<?php
/*   __________________________________________________
    |  ##CreativeSol Management Information System##   |
    |__________________________________________________|
*/
 class designation extends db_table { protected $_table = "\143\x6f\x72\145\137\x64\x65\x73\x69\x67\156\x61\164\151\157\x6e"; protected $_pkey = "\144\x65\163\151\147\x5f\151\x64"; public function getDesigPair($uF7B7 = array()) { goto DMAP8; rvohp: return parent::fetchPair($uF7B7); goto VfEnX; mWn36: $this->_order[] = "\x64\145\163\x69\147\x5f\156\x61\155\x65\x20\101\123\x43"; goto rvohp; DMAP8: $this->query("\x73\x65\154\x65\x63\x74\40\144\145\163\x69\x67\x5f\x69\144\54\144\145\x73\151\x67\137\x6e\x61\x6d\145\40\146\162\157\x6d\40{$this->_table}"); goto mWn36; VfEnX: } }
