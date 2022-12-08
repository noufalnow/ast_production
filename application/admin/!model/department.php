<?php
/*   __________________________________________________
    |  ##CreativeSol Management Information System##   |
    |__________________________________________________|
*/
 class department extends db_table { protected $_table = "\x63\157\162\145\x5f\x64\x65\160\141\x72\164\155\x65\156\164"; protected $_pkey = "\x64\145\160\164\137\x69\144"; public function getDeptPair($Qjqu3 = array()) { goto XJNO5; Uz6rF: $this->_order[] = "\x64\x65\160\x74\x5f\156\x61\155\145\40\101\x53\103"; goto plyxJ; plyxJ: return parent::fetchPair($Qjqu3); goto sVogB; XJNO5: $this->query("\x73\x65\154\145\143\x74\40\144\145\x70\x74\137\x69\144\54\x64\145\x70\x74\137\x6e\141\155\145\x20\x66\x72\157\x6d\x20{$this->_table}"); goto Uz6rF; sVogB: } }
