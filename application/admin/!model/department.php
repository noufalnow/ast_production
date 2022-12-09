<?php
/*   __________________________________________________
    |  ##CreativeSol Management Information System##   |
    |__________________________________________________|
*/
 class department extends db_table { protected $_table = "\143\x6f\162\145\x5f\x64\145\x70\x61\162\x74\155\145\156\164"; protected $_pkey = "\x64\x65\x70\x74\137\151\x64"; public function getDeptPair($uF7B7 = array()) { goto a_PmJ; phNgR: return parent::fetchPair($uF7B7); goto kRB66; a_PmJ: $this->query("\163\x65\154\145\143\x74\x20\x64\145\x70\x74\137\151\144\x2c\144\145\x70\164\x5f\156\x61\155\x65\x20\146\x72\157\x6d\x20{$this->_table}"); goto vxVaU; vxVaU: $this->_order[] = "\144\x65\160\x74\137\156\141\x6d\x65\40\x41\x53\103"; goto phNgR; kRB66: } }
