<?php
/*   __________________________________________________
    |  ##CreativeSol Management Information System##   |
    |__________________________________________________|
*/
 class actionlog extends db_table { protected $_table = "\143\x6f\x72\x65\137\x61\x63\x74\x69\157\x6e\137\x6c\157\147"; protected $_pkey = "\141\154\x6f\x67\x5f\151\144"; public function add($WUkwG) { $this->_nolog = true; return parent::insert($WUkwG); } }
