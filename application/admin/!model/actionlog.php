<?php
/*   __________________________________________________
    |  ##CreativeSol Management Information System##   |
    |__________________________________________________|
*/
 class actionlog extends db_table { protected $_table = "\143\157\162\x65\x5f\141\143\x74\151\x6f\156\x5f\x6c\x6f\x67"; protected $_pkey = "\x61\x6c\157\x67\x5f\x69\144"; public function add($F5Frd) { $this->_nolog = true; return parent::insert($F5Frd); } }
