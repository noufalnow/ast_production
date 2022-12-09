<?php
/*   __________________________________________________
    |  ##CreativeSol Management Information System##   |
    |__________________________________________________|
*/
 class building extends db_table { protected $_table = "\x6d\151\x73\x5f\x62\x75\151\154\144\151\x6e\x67"; protected $_pkey = "\x62\x6c\x64\137\x69\144"; public function getBuildingPair($uF7B7 = array()) { goto VUe_g; gbkva: return parent::fetchPair($uF7B7); goto Sn1zz; VUe_g: $this->query("\163\x65\154\145\x63\x74\x20\142\154\144\x5f\x69\144\54\x62\154\x64\x5f\x6e\x61\155\145\40\x66\x72\x6f\155\x20{$this->_table}"); goto M158S; M158S: $this->_order[] = "\x62\154\x64\137\x6e\x61\155\145\40\101\x53\x43"; goto gbkva; Sn1zz: } public function add($npJXn) { return parent::insert($npJXn); } }
