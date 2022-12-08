<?php
/*   __________________________________________________
    |  ##CreativeSol Management Information System##   |
    |__________________________________________________|
*/
 class designation extends db_table { protected $_table = "\143\x6f\162\145\x5f\144\145\x73\151\x67\156\141\164\151\x6f\156"; protected $_pkey = "\144\145\x73\x69\147\x5f\151\x64"; public function getDesigPair($Qjqu3 = array()) { goto y2VxY; y2VxY: $this->query("\163\145\154\145\x63\x74\40\144\145\163\151\147\137\x69\x64\x2c\144\x65\163\151\x67\137\x6e\x61\x6d\145\40\x66\162\x6f\155\x20{$this->_table}"); goto GGMSN; TuHTE: return parent::fetchPair($Qjqu3); goto zjrJf; GGMSN: $this->_order[] = "\144\x65\x73\151\x67\137\x6e\x61\x6d\x65\x20\x41\x53\103"; goto TuHTE; zjrJf: } }
