<?php
/*   __________________________________________________
    |  ##CreativeSol Management Information System##   |
    |__________________________________________________|
*/
 class customer extends db_table { protected $_table = "\x6d\x69\x73\137\143\x75\163\164\157\155\145\162"; protected $_pkey = "\143\x75\163\x74\137\x69\x64"; public function add($WUkwG) { return parent::insert($WUkwG); } public function modify($WUkwG, $gBaOn) { return parent::update($WUkwG, $gBaOn); } public function getCustomerPair($gBaOn = array()) { goto Htjzq; L9DFO: return parent::fetchPair($gBaOn); goto flJqJ; iZIxy: $this->_order[] = "\143\x75\x73\164\137\156\x61\155\x65\40\x41\123\103"; goto L9DFO; Htjzq: $this->query("\163\x65\154\145\x63\x74\40\x63\165\x73\164\x5f\x69\144\x2c\143\165\163\164\137\x6e\x61\x6d\x65\40\x66\162\157\155\x20{$this->_table}"); goto iZIxy; flJqJ: } public function getCustomerPaginate($gBaOn) { goto qk1wd; YRPfp: $this->_where[] = "\x6c\x6f\x77\x65\x72\50\143\x75\x73\164\x5f\x6e\141\155\145\51\x20\154\x69\153\145\x20\x27\x25\x27\40\174\x7c\x20\154\x6f\x77\145\162\50\x3a\146\137\x63\165\163\164\x6f\155\x65\x72\51\40\x7c\x7c\x20\47\x25\x27"; goto tGBTH; C1O2M: if (empty($gBaOn["\x66\x5f\150\157\x75\x73\145"])) { goto o8IUX; } goto fvXYQ; BnqjP: $this->_where[] = "\40\x63\141\x73\164\50\x63\x75\x73\164\x5f\151\144\x20\101\123\x20\164\x65\170\164\51\40\40\154\151\x6b\145\x20\x27\45\47\x20\174\x7c\40\x3a\146\137\x63\157\x64\x65\x20\x7c\174\40\47\x25\47"; goto kb619; tGBTH: C9x35: goto gQGDz; ysNTm: $this->_where[] = "\x6c\157\x77\x65\162\50\x63\157\156\x5f\x6e\141\155\x65\x29\40\154\x69\153\x65\40\x27\45\47\40\x7c\174\40\154\157\x77\145\162\x28\72\146\137\x6e\141\x6d\145\51\40\174\x7c\40\47\45\47"; goto P4XLd; gQGDz: if (empty($gBaOn["\146\x5f\156\x61\x6d\145"])) { goto THuIj; } goto ysNTm; P4XLd: THuIj: goto C1O2M; CwjAj: if (empty($gBaOn["\x66\x5f\143\x75\x73\x74\x6f\155\x65\162"])) { goto C9x35; } goto YRPfp; yj6UR: if (empty($gBaOn["\x66\137\143\x6f\144\x65"])) { goto TwhvS; } goto BnqjP; kb619: TwhvS: goto CwjAj; otUR3: $this->_order[] = "\x63\x75\x73\x74\x5f\156\x61\155\145\40\101\x53\x43"; goto rQkuA; wL21w: o8IUX: goto otUR3; fvXYQ: $this->_where[] = "\143\x6f\x6e\x5f\150\x6f\165\x73\x65\x20\x6c\x69\153\145\x20\x27\x25\x27\x20\x7c\x7c\x20\x3a\x66\x5f\x68\x6f\165\163\x65\40\174\174\x20\x27\45\47"; goto wL21w; qk1wd: $this->paginate("\x73\145\154\x65\x63\x74\x20{$this->_table}\56\52\x20\x2c\xa\x9\x9\x9\x9\x63\157\x6e\164\141\x63\164\x2e\x2a\x20\12\x9\x9\x9\x9", "\146\x72\157\x6d\x20{$this->_table}\40\xa\11\x9\11\11\x6c\x65\x66\x74\40\x6a\157\x69\x6e\40\x6d\151\163\x5f\143\x6f\156\x74\x61\x63\164\x73\40\141\163\40\x63\157\x6e\164\141\x63\x74\x20\157\156\40\143\x6f\x6e\164\141\143\x74\56\143\157\156\137\x72\x65\x66\137\x69\x64\x20\x3d\40{$this->_table}\x2e\143\165\163\x74\137\151\x64\40\x61\x6e\x64\40\x63\x6f\156\164\x61\143\x74\x2e\143\x6f\156\x5f\x72\x65\146\x5f\164\x79\160\x65\40\x3d\40" . CONT_TYPE_CUST . "\40\x61\x6e\x64\40\x63\x6f\156\164\x61\x63\164\x2e\x63\x6f\x6e\x5f\164\x79\x70\x65\40\40\75\40\64\x20\141\156\x64\x20\x63\x6f\156\164\x61\143\x74\x2e\144\x65\154\x65\x74\x65\144\x20\x3d\40\x30\xa\11\x9\11\11"); goto yj6UR; rQkuA: return parent::fetchAll($gBaOn); goto ZY3kj; ZY3kj: } public function getCustomerDet($gBaOn) { goto zBQib; zBQib: $this->query("\163\x65\x6c\x65\143\164\40{$this->_table}\56\52\x20\54\12\11\x9\11\x9\143\157\x6e\x74\141\143\164\56\x2a\40\12\x9\x9\11\11\146\x72\x6f\155\x20{$this->_table}\x20\12\11\x9\x9\11\x6c\145\146\164\40\x6a\x6f\151\156\40\155\x69\163\x5f\x63\157\156\x74\x61\x63\x74\x73\x20\x61\163\x20\143\x6f\156\164\x61\143\164\40\157\156\40\143\x6f\x6e\164\141\x63\164\x2e\x63\x6f\156\x5f\162\x65\x66\137\151\x64\40\x3d\40{$this->_table}\x2e\143\x75\x73\x74\x5f\151\144\40\141\x6e\x64\x20\x63\157\156\164\x61\143\x74\56\x63\x6f\x6e\x5f\162\x65\x66\x5f\164\171\x70\x65\x20\x3d\x20" . CONT_TYPE_CUST . "\x20\x61\156\x64\40\x63\157\156\x74\x61\x63\x74\x2e\143\x6f\156\x5f\x74\x79\x70\145\40\40\x3d\x20\64\x20\141\156\x64\x20\x63\157\156\164\x61\x63\x74\x2e\144\x65\x6c\x65\x74\x65\x64\x20\75\40\x30\12\11\11\11\x9\12\x9\x9\11\x9"); goto shQr5; hN19B: $this->_where[] = "\143\x75\163\164\137\151\144\x3d\x20\x3a\x63\x75\163\x74\137\151\144"; goto EtdAz; shQr5: if (empty($gBaOn["\x63\165\x73\164\137\x69\144"])) { goto EjWfC; } goto hN19B; ErXoB: return parent::fetchRow($gBaOn); goto c2Bgy; EtdAz: EjWfC: goto ErXoB; c2Bgy: } public function getCustomerDetById($KUJqN) { return parent::getById($KUJqN); } public function getCustomerById($KUJqN) { return parent::getById($KUJqN); } public function deleteCustomer($KUJqN) { return parent::delete($KUJqN); } public function getBillByCustomer($gBaOn = array()) { $this->query("\x53\x45\114\x45\103\x54\x20\x6d\151\163\x5f\143\165\x73\164\157\x6d\x65\162\x2e\x63\165\163\x74\x5f\156\141\155\x65\54\12\x9\11\x9\11\x20\x20\40\x20\x20\x20\x20\143\157\x6e\x5f\160\x68\157\x6e\x65\x2c\12\11\x9\11\x9\x20\40\40\x20\x20\40\40\x63\157\156\x5f\155\157\142\x69\x6c\x65\x2c\12\x9\x9\x9\x9\40\40\x20\40\40\40\x20\x63\162\x65\144\151\x74\137\x61\155\x74\54\12\11\x9\x9\x9\11\x9\164\x6f\x5f\x63\150\x61\x72\x28\144\155\151\x6e\54\x27\x44\104\55\115\x4d\55\131\131\131\x59\47\x29\x20\141\x73\x20\x64\155\x69\156\x2c\40\xa\11\11\11\11\11\11\164\157\x5f\143\x68\x61\x72\x28\x64\155\x61\170\x2c\47\104\x44\x2d\115\115\x2d\131\x59\x59\x59\47\x29\x20\x61\163\40\x64\x6d\141\170\x2c\40\xa\x9\11\11\x9\x20\x20\40\x20\x20\x20\x20\143\x75\163\x74\x5f\x69\144\xa\11\11\11\11\x46\x52\117\115\40\155\151\163\x5f\143\165\x73\x74\x6f\x6d\145\x72\12\11\x9\x9\11\x4c\x45\x46\x54\x20\x4a\x4f\111\116\xa\11\11\x9\11\x20\x20\50\x53\x45\x4c\x45\103\124\x20\123\125\x4d\x28\x62\x69\x6c\x6c\x5f\143\x72\x65\x64\x69\164\x5f\x61\155\x74\x29\40\x41\x53\x20\143\162\x65\144\x69\164\137\141\x6d\164\54\xa\x9\11\x9\11\x20\x20\40\40\40\x20\x20\40\40\x20\142\x69\x6c\154\x5f\x63\x75\x73\x74\x6f\155\145\x72\137\151\x64\12\11\x9\11\11\x20\40\x20\x46\122\117\115\40\x6d\151\x73\137\x62\x69\154\154\xa\x9\x9\x9\11\11\127\x48\x45\x52\x45\40\155\151\163\137\142\x69\154\154\56\x62\x69\154\154\x5f\x61\160\x70\x5f\x73\164\x61\x74\x75\163\40\75\x20\61\x20\101\116\104\x20\x6d\x69\x73\137\142\151\154\x6c\x2e\x62\x69\154\154\137\160\163\x74\141\x74\165\x73\40\x3d\x20\x32\xa\x9\11\x9\x9\40\40\x20\x20\40\x41\x4e\x44\40\x6d\x69\x73\x5f\x62\x69\x6c\154\56\144\145\154\145\164\x65\x64\x20\75\40\60\x20\141\x6e\144\40\155\151\163\137\142\x69\x6c\154\x2e\x62\151\154\154\137\143\x61\156\143\x65\154\x6c\141\164\x69\x6f\x6e\137\163\x74\x61\164\165\x73\x20\x3d\x20\x30\12\11\x9\x9\x9\40\x20\x20\x47\x52\x4f\x55\x50\40\102\x59\x20\x62\151\154\154\137\143\165\x73\164\157\155\x65\x72\x5f\151\144\x29\x20\101\x53\x20\142\151\x6c\x6c\x5f\163\x75\155\x20\117\x4e\x20\142\x69\154\x6c\x5f\x73\x75\155\56\142\x69\x6c\x6c\137\143\x75\x73\164\157\x6d\x65\162\137\151\144\x20\x3d\40\x6d\151\x73\x5f\x63\x75\163\x74\157\x6d\x65\x72\56\x63\165\x73\x74\x5f\151\144\12\x9\11\x9\11\114\105\106\124\x20\x4a\x4f\111\x4e\xa\11\x9\x9\11\40\x20\50\123\105\114\x45\x43\x54\x20\x6d\151\x6e\50\142\x69\x6c\154\137\144\141\164\145\51\x20\x41\123\x20\x64\155\x69\156\54\xa\x9\x9\x9\11\x20\x20\x20\x20\x20\x20\x20\40\40\40\142\151\x6c\x6c\137\x63\165\x73\x74\x6f\x6d\x65\x72\137\x69\144\xa\11\x9\11\x9\x20\x20\40\106\122\117\x4d\x20\155\151\x73\137\142\x69\154\154\12\11\11\x9\x9\x9\127\110\105\x52\105\x20\x6d\151\x73\137\x62\151\154\154\56\x62\151\154\154\137\141\x70\160\x5f\x73\x74\x61\164\165\x73\x20\75\x20\61\x20\x41\116\104\40\155\151\x73\x5f\x62\151\x6c\x6c\x2e\142\151\154\154\137\x70\x73\x74\141\164\165\x73\x20\x3d\x20\x32\xa\x9\x9\11\11\x20\x20\x20\40\x20\101\x4e\104\x20\x6d\151\x73\x5f\x62\151\x6c\154\56\144\x65\x6c\145\164\145\x64\x20\75\x20\x30\40\x61\156\144\40\x6d\x69\x73\137\x62\151\154\x6c\x2e\x62\x69\154\x6c\137\143\141\x6e\143\145\154\154\141\164\x69\157\x6e\x5f\x73\164\x61\164\x75\x73\x20\75\x20\60\xa\11\x9\11\x9\x20\x20\x20\107\x52\x4f\x55\120\x20\x42\x59\40\x62\x69\x6c\x6c\137\x63\165\163\x74\157\x6d\145\162\x5f\151\144\x29\x20\101\x53\40\x62\151\154\154\x5f\155\151\156\x5f\x64\164\x20\x4f\116\40\x62\x69\x6c\x6c\137\x6d\151\156\x5f\144\x74\56\142\151\x6c\154\137\143\x75\x73\x74\x6f\155\145\162\x5f\x69\144\x20\75\40\x6d\151\x73\x5f\x63\x75\163\x74\x6f\x6d\145\162\x2e\x63\165\163\x74\x5f\151\144\12\x9\11\11\11\x4c\105\106\124\x20\112\x4f\x49\116\xa\x9\11\11\11\40\x20\50\123\105\x4c\x45\103\x54\40\x6d\x61\170\x28\x62\151\x6c\154\x5f\144\141\164\x65\51\x20\101\x53\40\x64\155\x61\170\54\xa\11\x9\11\11\40\40\40\x20\40\x20\40\40\x20\x20\142\151\x6c\154\137\143\165\x73\164\157\x6d\x65\x72\x5f\x69\144\12\x9\x9\x9\11\40\40\x20\106\x52\117\x4d\40\x6d\151\163\137\x62\x69\154\154\12\x9\11\x9\11\x9\127\x48\105\x52\105\x20\x6d\x69\163\x5f\142\x69\154\x6c\56\x62\x69\x6c\x6c\137\141\x70\x70\137\163\164\x61\x74\x75\x73\x20\x3d\40\x31\40\x41\116\x44\x20\155\x69\163\137\142\x69\x6c\154\56\142\x69\x6c\154\137\160\x73\164\141\164\165\x73\x20\75\40\62\xa\x9\11\11\x9\x20\40\40\40\x20\x41\x4e\x44\40\x6d\x69\163\137\142\151\154\154\56\x64\x65\x6c\145\x74\145\144\40\x3d\x20\60\40\141\156\144\x20\155\x69\x73\137\x62\x69\154\154\x2e\x62\151\154\x6c\x5f\x63\x61\156\143\145\x6c\154\141\x74\x69\157\x6e\x5f\163\x74\141\x74\165\163\x20\x3d\40\60\12\x9\x9\11\x9\x20\x20\40\x47\122\117\x55\120\x20\102\x59\x20\x62\151\x6c\154\x5f\x63\x75\x73\x74\157\x6d\145\x72\x5f\x69\144\51\x20\101\123\40\x62\x69\154\x6c\x5f\x6d\x61\170\137\x64\164\40\x4f\116\x20\x62\151\154\154\137\x6d\x61\170\137\x64\164\56\x62\151\x6c\154\137\143\165\x73\x74\x6f\155\145\x72\137\x69\x64\40\x3d\x20\155\x69\163\137\x63\x75\x73\164\157\155\145\162\56\x63\165\x73\164\x5f\x69\144\xa\11\x9\11\x9\114\x45\x46\x54\40\112\117\111\116\x20\155\x69\163\137\143\x6f\x6e\x74\x61\x63\x74\x73\x20\101\123\40\x63\x6f\x6e\x74\141\143\x74\x20\x4f\116\40\x63\157\156\x74\141\143\164\56\143\157\x6e\137\162\145\x66\137\151\x64\x20\75\40\155\151\163\x5f\x63\165\x73\x74\157\155\145\162\56\x63\x75\163\x74\137\x69\x64\x20\x61\156\144\40\x63\x6f\x6e\x74\x61\143\x74\x2e\x64\145\x6c\x65\164\x65\144\40\x3d\x20\x30\xa\11\11\x9\x9\x41\116\x44\x20\x63\x6f\x6e\164\141\143\x74\x2e\x63\157\x6e\x5f\x72\x65\146\137\x74\x79\160\145\40\75\40\64\xa\11\11\x9\11\x41\x4e\104\x20\143\157\x6e\164\x61\143\164\56\x63\x6f\156\x5f\x74\171\160\x65\40\x3d\x20\x34\xa\x9\x9\11\11\x41\x4e\104\40\x63\157\x6e\x74\141\143\164\56\144\x65\154\145\164\x65\144\40\75\x20\x30\xa\x9\11\x9\x9\127\110\x45\x52\x45\40\x6d\x69\163\x5f\143\x75\x73\164\157\155\145\162\x2e\144\x65\154\x65\164\145\144\x20\75\x20\x30\12\x9\11\11\x9\x20\40\x41\x4e\104\x20\143\x72\x65\144\151\164\137\141\x6d\164\40\x3e\40\60\xa\11\11\11\x9\157\162\144\x65\162\40\x62\x79\x20\x63\x75\163\164\137\x6e\141\155\x65\40\x41\123\103\xa\x9\x9\11\11"); return parent::fetchQuery($gBaOn); } }