<?php
/*   __________________________________________________
    |  ##CreativeSol Management Information System##   |
    |__________________________________________________|
*/
 class Aclmodules extends db_table { protected $_table = "\143\x6e\146\x67\137\x61\143\x6c\x5f\155\157\x64\x75\154\x65\163"; protected $_pkey = "\x6d\157\x64\165\x6c\x65\x5f\x69\x64"; public function add($WUkwG) { return parent::insert($WUkwG); } public function modify($WUkwG, $gBaOn) { return parent::update($WUkwG, $gBaOn); } public function getModulePair($gBaOn = array()) { goto ggAZk; NrFJU: return parent::fetchPair($gBaOn); goto GOIIS; ggAZk: $this->query("\x73\145\x6c\145\x63\164\x20\x6d\157\x64\165\154\x65\137\x69\x64\x2c\155\x6f\144\165\x6c\145\x5f\156\141\155\145\40\146\x72\x6f\155\40{$this->_table}"); goto wL319; wL319: $this->_order[] = "\x6d\157\x64\165\x6c\145\137\x6e\x61\x6d\x65\40\101\x53\103"; goto NrFJU; GOIIS: } public function getModuleList($gBaOn = array()) { $this->query("\x73\145\x6c\x65\143\164\x20{$this->_table}\56\x2a\x20\15\xa\x9\x9\11\11\x66\162\157\x6d\40{$this->_table}\x20"); return parent::fetchAll($gBaOn); } public function getModuleBy($gBaOn) { goto VnkwY; VnkwY: $this->query("\163\145\x6c\x65\x63\x74\x20{$this->_table}\x2e\52\x20\xd\12\11\x9\11\x9\x66\x72\x6f\155\x20{$this->_table}\40"); goto pyfnk; pyfnk: if (empty($gBaOn["\155\157\x64\165\x6c\x65\137\x69\x64"])) { goto mabmN; } goto D3mm5; D3mm5: $this->_where[] = "\x6d\x6f\x64\x75\x6c\145\x5f\151\x64\x3d\40\x3a\155\x6f\x64\165\154\145\137\x69\x64"; goto Cnj9g; Jz_As: return parent::fetchAll($gBaOn); goto o37tT; Cnj9g: mabmN: goto Jz_As; o37tT: } public function getModuleById($KUJqN) { return parent::getById($KUJqN); } public function deleteModule($KUJqN) { return parent::delete($KUJqN); } }