<?php
/*   __________________________________________________
    |  ##CreativeSol Management Information System##   |
    |__________________________________________________|
*/
 class item extends db_table { protected $_table = "\155\x69\x73\x5f\x69\164\x65\155"; protected $_pkey = "\151\164\145\x6d\x5f\x69\x64"; public function add($WUkwG) { return parent::insert($WUkwG); } public function modify($WUkwG, $gBaOn) { return parent::update($WUkwG, $gBaOn); } public function getItemPair($gBaOn = array()) { goto n9Y_A; OiPAX: if (empty($gBaOn["\151\164\x65\x6d\137\164\171\x70\x65"])) { goto NrTNp; } goto IgGBH; n9Y_A: $this->query("\x73\x65\154\145\x63\x74\40\x69\164\145\155\x5f\x69\x64\x2c\x69\x74\145\155\x5f\x63\x6f\x64\x65\40\x7c\174\x20\47\40\x2d\40\47\x20\174\174\x69\x74\145\x6d\x5f\x6e\141\155\145\174\174\40\x27\40\50\x27\40\x7c\174\x69\x74\145\155\x5f\x75\x6e\151\x74\174\174\40\47\x20\55\x20\47\x20\174\x7c\x69\x74\x65\155\x5f\x70\162\x69\x63\145\40\x7c\x7c\40\x27\x29\x27\40\146\162\157\x6d\40{$this->_table}"); goto OiPAX; rEPxl: NrTNp: goto fXAtW; fXAtW: $this->_order[] = "\151\x74\x65\155\x5f\156\141\x6d\145\x20\x41\123\103"; goto pIaWr; pIaWr: return parent::fetchPair($gBaOn); goto csm85; IgGBH: $this->_where[] = "\x69\164\x65\x6d\137\164\x79\x70\x65\x3d\x20\x3a\x69\x74\145\155\137\164\x79\x70\x65"; goto rEPxl; csm85: } public function getSrvItemPair($gBaOn = array()) { goto kZCCf; uB1VU: $this->_order[] = "\x69\x74\145\155\x5f\156\x61\155\x65\x20\x41\123\103"; goto qrnX7; LgL8P: $this->_where[] = "\x69\164\145\155\x5f\164\171\x70\x65\75\40\72\x69\164\x65\155\x5f\x74\171\x70\x65"; goto fPEKI; kZCCf: $this->query("\x73\145\x6c\145\x63\164\x20\x69\x74\145\x6d\137\x69\144\54\151\x74\145\155\x5f\x63\x6f\x64\145\40\174\174\x20\x27\40\x2d\x20\47\40\174\x7c\x69\164\145\155\x5f\156\141\155\145\x20\146\x72\x6f\155\x20{$this->_table}"); goto Jogdw; fPEKI: Fhkig: goto uB1VU; Jogdw: if (empty($gBaOn["\151\x74\x65\155\137\164\x79\160\145"])) { goto Fhkig; } goto LgL8P; qrnX7: return parent::fetchPair($gBaOn); goto IK0kH; IK0kH: } public function getItemsPaginate($gBaOn) { goto zkb8m; EtcfX: $this->_where[] = "\151\164\x65\x6d\x5f\160\162\x69\143\x65\x3a\x3a\x74\145\170\x74\40\x6c\151\x6b\145\x20\x27\45\x27\40\x7c\174\x20\72\x66\137\x70\162\151\x63\x65\x20\174\x7c\40\x27\45\47"; goto jXNfA; Imh6Y: $this->_order[] = "\151\164\x65\x6d\x5f\x63\x6f\x64\x65\40\101\x53\103"; goto BmYhK; dE0p5: ky9Jl: goto KP0vM; zkb8m: $this->paginate("\163\x65\x6c\145\143\164\x20{$this->_table}\x2e\52\x2c\12\11\11\x9\x9\143\141\x73\145\x20\167\x68\145\156\40\151\x74\145\x6d\x5f\x74\171\160\145\40\x3d\x20\x31\x20\164\150\x65\x6e\40\47\x49\156\x76\157\151\143\x65\40\111\x74\145\x6d\x73\x27\12\x9\11\x9\11\11\40\167\x68\145\x6e\x20\151\164\x65\155\x5f\164\171\160\x65\x20\x3d\40\62\x20\164\150\x65\x6e\x20\x27\123\145\x72\166\x69\143\145\x20\x49\x74\145\x6d\163\x27\12\x9\11\11\x9\x65\156\x64\40\141\x73\40\151\x74\x65\155\137\x74\171\160\x65\xa\11\x9\11\x9", "\146\x72\157\155\40{$this->_table}"); goto YISkR; ix7m8: ausDy: goto DY9h0; jXNfA: DK8oY: goto Imh6Y; MYH3A: cYOGi: goto UwAtm; BmYhK: return parent::fetchAll($gBaOn); goto y00aB; DY9h0: if (empty($gBaOn["\146\x5f\x70\162\x69\x63\145"])) { goto DK8oY; } goto EtcfX; vPBjP: $this->_where[] = "\151\164\x65\x6d\x5f\156\141\155\x65\x20\x6c\x69\x6b\x65\40\47\x25\x27\x20\x7c\174\x20\72\x66\137\x6e\x61\155\145\x20\x7c\174\40\47\x25\x27"; goto dE0p5; ao5JZ: $this->_where[] = "\151\x74\145\155\x5f\x74\171\x70\145\75\40\x3a\151\164\145\155\137\164\171\x70\x65"; goto MYH3A; KP0vM: if (empty($gBaOn["\146\137\x72\145\155\x61\162\x6b\163"])) { goto ausDy; } goto X1xWL; rHkB8: $this->_where[] = "\x20\x28\x69\164\x65\155\x5f\x63\157\144\x65\51\x20\x20\154\151\153\145\x20\47\x25\47\40\174\x7c\40\x3a\146\137\x63\157\144\x65\x20\174\174\x20\47\45\47\40"; goto UDJu4; KHq0I: if (empty($gBaOn["\x66\x5f\x6e\x61\155\145"])) { goto ky9Jl; } goto vPBjP; X1xWL: $this->_where[] = "\x69\164\x65\x6d\137\162\x65\155\x61\162\153\x73\x20\154\x69\x6b\x65\40\x27\x25\47\40\x7c\x7c\40\72\x66\x5f\x72\145\x6d\141\162\x6b\163\40\x7c\x7c\x20\x27\45\x27"; goto ix7m8; UDJu4: OuRvn: goto KHq0I; YISkR: if (empty($gBaOn["\x69\x74\x65\155\x5f\x74\x79\x70\145"])) { goto cYOGi; } goto ao5JZ; UwAtm: if (empty($gBaOn["\x66\x5f\x63\157\144\145"])) { goto OuRvn; } goto rHkB8; y00aB: } public function getItemDet($gBaOn) { goto UhTVc; mftEM: cALNl: goto jjchg; jjchg: return parent::fetchRow($gBaOn); goto svcQu; xrr4z: if (empty($gBaOn["\x69\164\x65\155\137\x69\144"])) { goto cALNl; } goto yh1uf; yh1uf: $this->_where[] = "\151\164\x65\x6d\137\x69\x64\75\x20\x3a\151\x74\x65\155\x5f\x69\144"; goto mftEM; UhTVc: $this->query("\163\x65\x6c\145\x63\164\40{$this->_table}\56\52\x20\xa\11\x9\x9\11\x66\x72\157\155\40{$this->_table}\40"); goto xrr4z; svcQu: } public function getItemDetById($KUJqN) { return parent::getById($KUJqN); } public function getItemById($KUJqN) { return parent::getById($KUJqN); } public function deleteItem($KUJqN) { return parent::delete($KUJqN); } }