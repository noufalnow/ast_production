<?php
/*   __________________________________________________
    |  ##CreativeSol Management Information System##   |
    |__________________________________________________|
*/
 class Aclcontrolleraccess extends db_table { protected $_table = "\x20\143\x6e\146\147\137\x61\143\154\x5f\143\x6f\x6e\164\162\157\x6c\x6c\x65\162\x73\x5f\141\x63\143\x65\x73\x73"; protected $_pkey = "\x63\141\143\x63\x5f\x69\144"; public function add($WUkwG) { $this->_nolog = true; return parent::insert($WUkwG); } public function modify($WUkwG, $gBaOn) { $this->_nolog = true; return parent::update($WUkwG, $gBaOn); } public function getControllerAccessPair($gBaOn = array()) { goto zUr5d; rBryp: $this->_order[] = "\155\157\144\165\x6c\145\137\156\141\x6d\145\x20\101\123\x43"; goto Tekam; Tekam: return parent::fetchPair($gBaOn); goto niQsq; zUr5d: $this->query("\163\145\154\x65\143\164\40\x63\141\143\143\137\151\144\54\x6d\157\x64\x75\x6c\145\x5f\156\141\x6d\x65\x20\146\x72\157\155\40{$this->_table}"); goto rBryp; niQsq: } public function getControllerAccessList($gBaOn) { $this->query("\163\145\154\x65\143\x74\40{$this->_table}\x2e\x2a\x20\xd\12\11\11\x9\11\146\x72\157\155\40{$this->_table}\x20"); return parent::fetchAll($gBaOn); } public function getControllerAccessBy($gBaOn) { goto omSjd; p9P3A: $this->_where[] = "\x63\141\143\x63\x5f\x69\x64\x3d\x20\72\143\x61\143\143\137\151\144"; goto z9sBO; NuS_t: return parent::fetchAll($gBaOn); goto WDAeL; CVu5C: if (empty($gBaOn["\x63\x61\143\x63\137\x69\144"])) { goto gGhEV; } goto p9P3A; omSjd: $this->query("\x73\145\154\x65\x63\164\40{$this->_table}\56\52\40\15\xa\x9\x9\11\11\146\x72\157\x6d\x20{$this->_table}\x20"); goto CVu5C; z9sBO: gGhEV: goto NuS_t; WDAeL: } public function getControllerAccessById($KUJqN) { return parent::getById($KUJqN); } public function deleteControllerAccess($KUJqN) { $this->_nolog = true; return parent::delete($KUJqN); } public function getControllerRoleDetails($gBaOn) { goto iq2oJ; p21uH: $this->_where[] = "\x63\x61\143\x63\137\162\157\x6c\145\x5f\x74\x79\x70\145\75\x20\72\x63\x61\x63\x63\x5f\162\x6f\x6c\x65\137\x74\x79\x70\x65"; goto Yc6so; jTaAJ: $this->_where[] = "\x63\141\143\x63\137\162\157\x6c\x65\x5f\x69\x64\x3d\40\72\143\x61\143\x63\x5f\x72\x6f\x6c\145\137\x69\144"; goto p21uH; Yc6so: return parent::fetchRow($gBaOn); goto E_V3K; FOI9o: $this->_where[] = "\143\x61\143\x63\x5f\x63\x6f\x6e\x74\x72\x6f\x6c\x6c\145\x72\137\x69\144\x3d\40\x3a\x63\141\x63\143\137\143\157\x6e\x74\162\x6f\x6c\154\145\162\137\x69\x64"; goto jTaAJ; iq2oJ: $this->query("\x73\x65\154\145\143\164\x20{$this->_table}\x2e\x2a\xd\12\11\x9\11\11\x66\x72\157\x6d\40{$this->_table}\40"); goto FOI9o; E_V3K: } public function getControllerRoleDetailsByRoles($gBaOn) { goto OG02k; RalTu: H4umO: goto imzGr; gJv9c: $this->_where[] = "\143\141\x63\x63\x5f\162\x6f\x6c\145\137\164\171\160\x65\x3d\40\x3a\x63\x61\x63\x63\137\162\157\x6c\145\x5f\164\171\160\145"; goto N9PXc; SSwO7: $this->query("\163\145\x6c\x65\x63\164\x20{$this->_table}\x2e\x2a\xd\12\x9\11\x9\11\x66\x72\x6f\155\x20{$this->_table}\x20"); goto gJv9c; Rb555: $pZ2et = parent::fetchAll($gBaOn); goto DsLIU; OG02k: $AHoIU = array(); goto SSwO7; imzGr: return $AHoIU; goto k0AcO; DsLIU: foreach ($pZ2et as $yFctu) { $AHoIU[$yFctu["\x63\x61\143\x63\137\143\157\x6e\x74\x72\x6f\x6c\x6c\x65\162\x5f\x69\144"]] = array("\x63\x72\145\141\x74\x65" => $yFctu["\x63\141\x63\x63\x5f\x63\x72\x65\x61\x74\145\137\x73\x74\x61\164\165\x73"], "\166\151\145\167" => $yFctu["\143\141\x63\x63\x5f\x76\151\x65\x77\x5f\163\x74\x61\164\x75\163"], "\165\160\x64\x61\164\x65" => $yFctu["\143\x61\x63\143\137\165\x70\144\x61\x74\x65\x5f\163\x74\x61\x74\x75\x73"], "\x64\x65\x6c" => $yFctu["\143\141\143\x63\x5f\x64\x65\x6c\145\164\145\137\x73\x74\141\164\165\163"]); uH1l4: } goto RalTu; N9PXc: $this->_where[] = "\143\x61\143\143\x5f\162\x6f\154\x65\137\x69\x64\x3d\40\x3a\x63\x61\x63\x63\x5f\162\157\x6c\x65\x5f\151\144"; goto Rb555; k0AcO: } public function deleteControllerAccessByUser($gBaOn = array()) { goto MHA2j; DJ8T0: $this->_where[] = "\143\141\143\143\137\162\157\154\x65\137\x69\x64\x3d\40\72\x63\141\143\143\x5f\x72\x6f\154\x65\x5f\151\144"; goto pyau0; MHA2j: $this->_nolog = true; goto iq8Mj; iq8Mj: $gBaOn["\x63\141\x63\x63\137\x72\x6f\154\x65\137\164\171\x70\145"] = "\x32"; goto DJ8T0; pyau0: $this->_where[] = "\x63\x61\x63\x63\x5f\162\x6f\x6c\145\x5f\164\x79\160\x65\x3d\x20\72\x63\x61\143\x63\137\x72\x6f\154\x65\x5f\x74\x79\160\x65"; goto x2SdO; x2SdO: return parent::deleteByCond($gBaOn); goto vbMvN; vbMvN: } }
