<?php
/*   __________________________________________________
    |  ##CreativeSol Management Information System##   |
    |__________________________________________________|
*/
 class cashdemand extends db_table { protected $_table = "\155\x69\163\137\143\141\x73\150\137\x64\145\155\x61\156\144"; protected $_pkey = "\x63\144\x6d\144\137\151\144"; public function add($WUkwG) { return parent::insert($WUkwG); } public function modify($WUkwG, $gBaOn) { return parent::update($WUkwG, $gBaOn); } public function getContactById($KUJqN) { return parent::getById($KUJqN); } public function deleteContact($KUJqN) { return parent::delete($KUJqN); } public function getPendingDemandList($gBaOn) { goto YeCqQ; CM7Wa: $fNpHp[] = "\50\x28\x63\x6f\x6c\x6c\x64\145\164\56\x63\144\145\x74\x5f\x73\x72\x63\137\164\x79\x70\145\x20\x3d\40\x3a\x63\x64\x65\x74\x5f\x73\x72\x63\x5f\x74\x79\x70\145\51\40\117\x52\x20\50\143\157\154\154\144\145\164\56\x63\x64\x65\164\x5f\163\162\143\137\164\171\160\x65\x20\111\x53\40\116\125\x4c\x4c\x29\x29"; goto Fr15w; Fr15w: if (empty($gBaOn["\x63\144\x6d\144\x5f\x70\163\164\141\164\x75\163"])) { goto f6S1b; } goto IOdeX; gbS9F: $fNpHp[] = "\x28\x28\143\157\154\154\144\x65\164\x2e\143\144\x65\x74\137\x63\x6f\x6c\x6c\x5f\x69\144\x20\75\40\x3a\143\144\145\x74\137\143\x6f\x6c\x6c\x5f\151\144\x29\40\117\x52\40\50\x63\157\x6c\x6c\x64\x65\x74\56\143\x64\145\x74\x5f\143\x6f\x6c\x6c\137\x69\x64\x20\111\123\40\116\x55\114\x4c\x29\x29"; goto gwcCb; dIB6D: $fNpHp = "\40\127\x48\105\122\105\x20" . implode("\x20\101\x4e\x44\x20", $fNpHp); goto zdMva; gwcCb: QG2y4: goto CM7Wa; YeCqQ: if (empty($gBaOn["\143\x64\x65\x74\x5f\x63\157\x6c\x6c\137\x69\x64"])) { goto QG2y4; } goto gbS9F; zdMva: $this->query("\x73\x65\154\145\x63\164\x20{$this->_table}\56\x2a\54\12\11\x9\x9\x9\x63\x6f\154\x6c\x64\145\x74\56\x2a\11\11\11\x9\x66\162\x6f\155\x20{$this->_table}\xa\11\x9\11\11\154\145\x66\164\x20\x6a\157\x69\x6e\x20\x6d\x69\163\x5f\x63\157\154\x6c\x65\143\x74\x69\157\156\137\144\x65\164\x20\x61\x73\x20\143\157\154\154\144\x65\x74\x20\157\156\x20\x63\157\x6c\x6c\144\x65\164\56\x63\144\x65\x74\137\x62\x69\154\x6c\x5f\151\x64\40\75\x20{$this->_table}\x2e\x63\x64\x6d\144\x5f\151\x64\x20\141\156\x64\40\143\157\x6c\154\144\x65\164\x2e\x64\145\154\x65\164\145\x64\x20\x3d\40\60\xa\11\x9\11\x9\141\156\144\40\143\144\145\x74\x5f\163\x72\x63\x5f\x74\171\x70\145\75\x3a\x63\x64\145\164\137\x73\162\x63\137\164\171\x70\145\xa\11\x9\11\11{$fNpHp}\12\11\11\11\x9"); goto MBTIM; IOdeX: $fNpHp[] = "\40{$this->_table}\x2e\x63\x64\155\144\x5f\x70\x73\x74\x61\164\165\x73\40\x3d\40\x3a\x63\144\155\x64\137\x70\163\x74\141\x74\165\x73\40"; goto h3yZ3; lnTmD: $fNpHp[] = "\x20\x28\50\143\144\145\164\x5f\151\144\x20\116\117\x54\40\111\116\xa\11\x9\x9\11\11\40\x20\x20\40\x28\x53\x45\114\105\103\x54\x20\x63\x64\x65\164\137\x69\x64\12\x9\11\x9\x9\x9\40\x20\x20\x20\40\106\x52\x4f\115\x20\x6d\151\163\x5f\x63\157\x6c\x6c\145\143\164\151\x6f\x6e\137\x64\145\x74\12\x9\11\x9\11\x9\40\x20\x20\40\40\127\x48\105\x52\x45\x20\x64\145\154\x65\x74\x65\x64\75\60\xa\x9\11\x9\11\x9\40\x20\x20\x20\40\40\x20\101\116\x44\40\x63\144\x65\164\137\163\x74\x61\x74\x75\163\x20\x3d\40\61\xa\x9\x9\x9\x9\11\40\40\40\x20\40\40\40\x41\116\104\40\143\x64\145\x74\137\x73\x72\x63\137\164\171\160\x65\40\x3d\x20\x32\40" . (empty($gBaOn["\143\x64\x65\x74\x5f\x63\x6f\x6c\154\137\x69\x64"]) ? "\40" : "\x20\x41\116\x44\40\x63\144\145\164\137\x63\157\154\154\137\151\x64\40\x3c\x3e\x20\72\143\x64\145\164\x5f\143\x6f\x6c\x6c\137\151\144\x20") . "\x20\x29\51\x20\x4f\122\40\50\143\144\x65\164\137\x69\x64\40\111\123\40\x4e\x55\x4c\x4c\51\x29\x20"; goto TbudY; h3yZ3: f6S1b: goto lnTmD; TbudY: $fNpHp[] = "\x20{$this->_table}\56\x64\145\x6c\x65\x74\145\144\x20\75\40\60\40"; goto dIB6D; MBTIM: return parent::fetchQuery($gBaOn); goto h1Ezu; h1Ezu: } public function getPendingDemandIdList($gBaOn) { goto J02fy; zCTLl: $fNpHp[] = "\40\50\50\143\x64\x65\x74\137\151\144\x20\x4e\117\x54\40\111\x4e\xa\11\11\x9\11\x9\40\40\x20\x20\x28\123\x45\x4c\105\103\124\x20\143\x64\x65\164\137\x69\x64\12\11\x9\11\x9\x9\40\40\x20\40\x20\106\x52\117\115\x20\155\x69\163\x5f\143\157\x6c\154\x65\143\x74\x69\x6f\x6e\x5f\144\145\164\xa\11\x9\11\x9\x9\x20\40\40\40\x20\127\110\x45\122\x45\40\144\x65\154\145\x74\145\144\75\60\xa\x9\x9\11\x9\x9\40\40\40\x20\40\x20\40\x41\x4e\x44\x20\143\x64\x65\164\137\163\x74\141\x74\165\163\40\x3d\x20\61\12\x9\11\11\x9\x9\40\x20\40\x20\x20\40\x20\101\x4e\x44\x20\143\x64\145\164\137\x73\162\x63\x5f\x74\x79\x70\145\x20\x3d\x20\62\x20" . (empty($gBaOn["\x63\x64\145\x74\137\143\x6f\154\x6c\x5f\151\144"]) ? "\40" : "\x20\101\x4e\x44\x20\143\x64\x65\x74\x5f\143\157\154\154\x5f\x69\x64\x20\x3c\76\x20\72\143\144\x65\164\x5f\143\157\x6c\154\x5f\x69\x64\x20") . "\40\x29\x29\x20\117\x52\40\50\x63\144\145\164\137\151\x64\x20\x49\x53\x20\116\x55\x4c\x4c\x29\51\40"; goto ohDRb; vfQN4: dtlo5: goto zCTLl; y06B0: aeWXx: goto Pj6dd; S3fui: $fNpHp[] = "\x28\x28\x63\x6f\x6c\154\x64\x65\164\56\x63\x64\x65\164\x5f\143\x6f\x6c\154\137\151\144\40\75\x20\72\x63\x64\x65\x74\x5f\x63\157\x6c\154\137\x69\144\x29\40\117\x52\x20\x28\x63\157\x6c\154\144\145\164\x2e\x63\144\145\x74\x5f\x63\x6f\x6c\x6c\x5f\151\144\x20\111\x53\x20\x4e\125\114\114\x29\x29"; goto y06B0; J02fy: if (empty($gBaOn["\x63\144\x65\x74\x5f\143\157\x6c\154\x5f\151\x64"])) { goto aeWXx; } goto S3fui; vbcKi: $fNpHp = "\40\x57\110\x45\x52\x45\40" . implode("\40\x41\x4e\x44\40", $fNpHp); goto eoR4j; ohDRb: $fNpHp[] = "\x20{$this->_table}\x2e\x64\x65\x6c\x65\164\145\x64\40\75\x20\x30\40"; goto vbcKi; eoR4j: $this->query("\x73\145\154\145\x63\164\x20{$this->_table}\56\x63\x64\155\x64\x5f\x69\x64\x2c\143\x64\155\x64\x5f\151\144\12\x9\11\x9\11\x66\162\x6f\155\40{$this->_table}\12\11\x9\11\11\x6c\145\146\164\x20\152\157\151\156\40\x6d\151\x73\x5f\x63\x6f\x6c\154\x65\x63\x74\151\x6f\156\137\144\145\164\40\x61\163\40\x63\x6f\154\x6c\144\145\x74\x20\x6f\156\x20\x63\x6f\154\x6c\144\145\x74\x2e\x63\144\145\x74\137\x62\x69\x6c\x6c\137\151\144\x20\75\40{$this->_table}\56\x63\144\x6d\x64\x5f\151\x64\x20\x61\x6e\x64\x20\x63\x6f\x6c\x6c\144\145\164\56\144\x65\154\x65\x74\145\144\x20\75\40\60\xa\x9\x9\11\11\141\156\x64\x20\x63\x64\145\x74\x5f\163\162\x63\137\164\x79\x70\145\75\72\x63\x64\x65\164\x5f\x73\x72\x63\137\164\x79\160\x65\xa\x9\x9\x9\x9{$fNpHp}\xa\11\x9\11\x9"); goto aOTWp; Pj6dd: $fNpHp[] = "\50\x28\143\x6f\x6c\x6c\144\x65\x74\x2e\143\x64\145\x74\137\163\x72\143\x5f\x74\171\160\145\x20\75\40\x3a\x63\x64\x65\x74\x5f\163\162\x63\x5f\x74\x79\x70\x65\x29\x20\x4f\122\40\x28\x63\157\x6c\154\144\x65\164\56\x63\144\145\x74\x5f\x73\x72\x63\137\164\171\x70\x65\x20\111\x53\x20\x4e\125\114\114\51\51"; goto B6Yyr; aOTWp: return parent::fetchQueryPair($gBaOn); goto VfmBv; B6Yyr: if (empty($gBaOn["\143\144\x6d\144\x5f\160\x73\x74\141\164\x75\163"])) { goto dtlo5; } goto LzFbV; LzFbV: $fNpHp[] = "\40{$this->_table}\x2e\143\144\155\x64\137\x70\163\164\x61\164\165\163\40\x3d\40\72\143\x64\155\144\137\160\x73\164\141\164\x75\x73\40"; goto vfQN4; VfmBv: } public function getPendingDemandAmountList($gBaOn) { goto lFQ0J; kFCNV: $fNpHp[] = "\x28\50\143\x6f\154\154\x64\145\164\x2e\x63\x64\145\164\x5f\163\x72\x63\x5f\164\x79\160\x65\x20\75\40\x3a\x63\x64\145\x74\x5f\x73\x72\143\x5f\164\171\x70\x65\x29\x20\x4f\122\x20\50\143\157\x6c\x6c\144\145\164\56\x63\x64\x65\164\137\x73\162\143\x5f\x74\x79\x70\145\x20\x49\123\40\116\125\114\x4c\51\x29"; goto ExWev; hWq3q: $fNpHp[] = "\x20{$this->_table}\56\144\x65\x6c\145\x74\145\x64\x20\x3d\x20\60\40"; goto Ahx32; vRDvP: yMtbL: goto kFCNV; BEFOj: $fNpHp[] = "\x28\x28\143\157\154\154\x64\145\164\56\143\144\x65\x74\137\143\157\x6c\154\x5f\x69\x64\x20\x3d\x20\x3a\x63\144\x65\164\x5f\x63\x6f\154\154\137\x69\144\x29\x20\117\122\40\x28\x63\x6f\x6c\154\x64\145\x74\56\143\x64\145\164\137\143\x6f\x6c\x6c\137\x69\x64\x20\x49\123\40\x4e\125\x4c\114\51\51"; goto vRDvP; LFC3Y: qH0pf: goto fqj1a; e9rlh: $this->query("\163\x65\154\x65\143\164\40{$this->_table}\56\x63\144\x6d\x64\137\x69\144\54\143\144\155\x64\137\143\x72\x65\x64\151\x74\137\x61\155\x74\xa\11\x9\11\11\x66\x72\x6f\x6d\40{$this->_table}\12\x9\11\x9\11\x6c\x65\x66\x74\x20\x6a\x6f\151\x6e\40\x6d\x69\x73\137\143\157\154\x6c\145\x63\x74\151\157\x6e\x5f\x64\145\x74\40\141\x73\x20\x63\x6f\x6c\154\x64\145\x74\x20\x6f\x6e\x20\143\x6f\154\x6c\144\145\x74\x2e\x63\x64\x65\x74\x5f\x62\151\154\154\137\151\x64\40\75\40{$this->_table}\56\x63\144\155\144\137\x69\144\40\x61\156\x64\40\x63\x6f\154\154\144\x65\164\x2e\x64\145\154\x65\x74\x65\144\40\x3d\x20\60\xa\11\11\x9\x9\x61\156\x64\40\x63\144\x65\164\x5f\x73\162\143\x5f\x74\x79\x70\x65\x3d\x3a\143\x64\145\x74\137\163\x72\143\x5f\x74\x79\x70\x65\xa\x9\11\11\x9{$fNpHp}\xa\11\x9\11\11"); goto LLChb; LLChb: return parent::fetchQueryPair($gBaOn); goto XwBC9; Ahx32: $fNpHp = "\x20\127\110\x45\122\105\x20" . implode("\x20\x41\116\x44\40", $fNpHp); goto e9rlh; lFQ0J: if (empty($gBaOn["\x63\x64\145\164\x5f\143\x6f\154\x6c\x5f\x69\144"])) { goto yMtbL; } goto BEFOj; ExWev: if (empty($gBaOn["\143\144\x6d\x64\x5f\160\163\164\141\x74\165\163"])) { goto qH0pf; } goto cAjCe; cAjCe: $fNpHp[] = "\x20{$this->_table}\x2e\143\x64\x6d\x64\x5f\160\163\x74\x61\164\165\x73\40\75\40\x3a\x63\x64\155\x64\x5f\160\163\164\141\164\165\163\40"; goto LFC3Y; fqj1a: $fNpHp[] = "\40\x28\x28\x63\144\145\164\137\x69\144\40\116\117\124\x20\x49\116\12\x9\11\x9\x9\x9\40\x20\40\x20\x28\123\x45\x4c\x45\x43\124\40\143\144\x65\164\137\x69\144\xa\11\x9\x9\11\11\40\x20\x20\x20\40\106\x52\x4f\115\40\x6d\151\x73\137\143\157\154\154\x65\x63\x74\x69\157\x6e\137\x64\145\164\xa\x9\x9\11\11\11\x20\40\40\x20\x20\127\x48\105\122\x45\40\x64\145\x6c\x65\164\145\x64\x3d\x30\xa\11\x9\x9\x9\11\x20\x20\40\40\x20\x20\40\x41\x4e\x44\x20\143\144\145\164\137\163\x74\x61\164\x75\x73\40\x3d\40\61\12\11\x9\x9\x9\x9\x20\x20\40\40\40\40\x20\101\x4e\104\40\x63\x64\145\x74\x5f\x73\x72\143\137\x74\x79\160\145\40\x3d\x20\62\x20" . (empty($gBaOn["\x63\144\x65\164\x5f\143\x6f\x6c\154\x5f\151\x64"]) ? "\40" : "\40\x41\116\x44\x20\143\144\x65\x74\x5f\x63\x6f\x6c\154\137\x69\144\x20\x3c\x3e\x20\72\x63\x64\x65\x74\137\x63\x6f\x6c\x6c\x5f\151\144\40") . "\40\51\x29\x20\117\122\x20\x28\x63\x64\145\x74\137\x69\x64\40\111\x53\x20\x4e\x55\114\114\x29\51\x20"; goto hWq3q; XwBC9: } public function getContactByRefId($gBaOn) { goto VLdwY; dNTUj: $this->_where[] = "\143\144\155\x64\x5f\164\x79\160\x65\11\x3d\40\x3a\x63\144\x6d\x64\x5f\x74\x79\x70\145"; goto CsL69; JfLgc: return parent::fetchRow($gBaOn); goto oeDqb; CsL69: $this->_where[] = "\143\144\x6d\x64\137\x72\x65\x66\x5f\151\144\11\75\40\x3a\x63\x64\155\x64\x5f\162\x65\x66\x5f\x69\x64"; goto JfLgc; VLdwY: $this->query("\163\x65\154\x65\x63\164\40{$this->_table}\56\52\xa\x9\11\11\x9\146\162\157\155\40{$this->_table}\xa\11\x9\11\x9"); goto dNTUj; oeDqb: } }
