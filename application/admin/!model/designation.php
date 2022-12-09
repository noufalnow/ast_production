<?php
/*   __________________________________________________
    |  ##CreativeSol Management Information System##   |
    |__________________________________________________|
*/
 class designation extends db_table { protected $_table = "\143\157\x72\x65\x5f\144\145\163\151\x67\x6e\141\x74\151\157\156"; protected $_pkey = "\x64\145\x73\x69\x67\x5f\x69\144"; public function getDesigPair($uF7B7 = array()) { goto PRa0w; PRa0w: $this->query("\x73\145\x6c\145\x63\x74\x20\144\x65\x73\x69\147\x5f\151\144\x2c\x64\145\x73\151\147\x5f\156\x61\x6d\145\40\146\162\157\155\40{$this->_table}"); goto OuPP1; okrXc: return parent::fetchPair($uF7B7); goto xqfRP; OuPP1: $this->_order[] = "\144\145\163\151\147\137\x6e\141\155\x65\x20\101\123\103"; goto okrXc; xqfRP: } }
