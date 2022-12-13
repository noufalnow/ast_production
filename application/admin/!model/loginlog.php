<?php
/*   __________________________________________________
    |  ##CreativeSol Management Information System##   |
    |__________________________________________________|
*/
 class loginlog extends db_table { protected $_table = "\143\x6f\x72\145\x5f\154\157\x67\x69\156\x5f\x6c\157\147"; protected $_pkey = "\x6c\157\x67\137\x69\144"; public function add($F5Frd) { $this->_nolog = true; return parent::insert($F5Frd); } }
