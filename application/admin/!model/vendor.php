<?php
/*   __________________________________________________
    |  ##CreativeSol Management Information System##   |
    |__________________________________________________|
*/
 class vendor extends db_table { protected $_table = "\x6d\x69\x73\137\166\145\156\144\157\x72"; protected $_pkey = "\x76\x65\x6e\x5f\151\144"; public function modify($WUkwG, $gBaOn) { return parent::update($WUkwG, $gBaOn); } public function getVendorPair($gBaOn = array()) { goto XOrPU; ucN02: $this->_order[] = "\x76\x65\156\137\156\141\155\x65\40\101\x53\x43"; goto TbVAp; WEGZ8: $this->_where[] = "\166\145\x6e\137\x69\144\40\111\x4e\x20\x28\x53\105\x4c\105\x43\124\40\104\x49\x53\124\x49\x4e\x43\124\40\145\170\x70\x5f\x76\x65\156\x64\x6f\162\xa\x9\11\x9\x9\11\11\11\11\x46\122\117\115\40\155\151\x73\137\x65\170\160\x65\x6e\163\145\12\x9\x9\11\x9\11\11\x9\11\127\110\x45\122\x45\x20\x65\x78\160\x5f\160\141\171\x5f\155\x6f\x64\x65\40\x3d\x20\62\xa\11\11\11\11\x9\x9\x9\11\141\156\x64\40\x64\x65\x6c\x65\164\x65\144\x20\75\x20\x30\51\12\x9\11\x9\11\x9\11\x9\11"; goto ucN02; TbVAp: return parent::fetchPair($gBaOn); goto aCBOF; XOrPU: $this->query("\x73\x65\154\x65\143\x74\x20\x76\145\x6e\137\151\144\54\x76\x65\156\x5f\156\141\x6d\145\40\146\x72\157\x6d\40{$this->_table}\x20"); goto WEGZ8; aCBOF: } public function getVendorPairFilter($gBaOn = array()) { goto hYB5C; afP6o: return parent::fetchPair($gBaOn); goto HKaCG; hYB5C: $this->query("\x73\145\154\x65\143\164\x20\x76\145\156\x5f\x69\144\x2c\x76\x65\156\137\156\x61\155\x65\40\146\162\x6f\x6d\40{$this->_table}\x20"); goto GOlLh; GOlLh: $this->_order[] = "\x76\x65\x6e\x5f\156\x61\155\145\40\101\x53\103"; goto afP6o; HKaCG: } public function add($WUkwG) { return parent::insert($WUkwG); } public function getVendorByName($gBaOn = array()) { goto HuT7n; ZsdFv: return parent::fetchRow($gBaOn); goto W7Ue0; uuLAu: ipWSL: goto ZsdFv; HuT7n: $this->query("\x73\145\154\x65\x63\164\40\52\x20\146\x72\x6f\155\x20{$this->_table}"); goto fwKOm; fwKOm: if (!isset($gBaOn["\x76\x65\156\137\x6e\x61\155\145"])) { goto ipWSL; } goto y9LZK; y9LZK: $this->_where[] = "\x76\x65\156\137\156\141\x6d\x65\75\40\x3a\166\x65\156\x5f\156\x61\x6d\145"; goto uuLAu; W7Ue0: } public function getVendorDet($gBaOn) { goto Y31iZ; ZfIKI: return parent::fetchRow($gBaOn); goto GMgpg; Y31iZ: $this->query("\x73\x65\154\145\x63\x74\x20{$this->_table}\56\x2a\x20\54\xa\11\x9\11\11\x63\157\x6e\164\141\143\164\x2e\x2a\xa\x9\x9\11\x9\x66\x72\x6f\155\40{$this->_table}\xa\x9\x9\11\11\x6c\x65\x66\x74\x20\x6a\x6f\x69\x6e\40\155\x69\x73\137\143\x6f\156\x74\141\143\164\163\x20\141\x73\40\143\x6f\156\x74\141\x63\x74\x20\x6f\x6e\x20\x63\x6f\156\164\141\x63\x74\x2e\143\157\156\x5f\162\x65\146\137\151\x64\40\75\40{$this->_table}\x2e\x76\145\x6e\137\151\144\40\141\x6e\144\40\143\x6f\156\x74\141\143\x74\56\143\157\x6e\x5f\162\x65\146\137\164\171\160\x65\40\75\x20" . CONT_TYPE_VENDR . "\x20\x61\156\x64\x20\x63\x6f\156\x74\x61\x63\164\56\143\x6f\x6e\137\x74\x79\160\145\40\x20\x3d\x20\65\40\x61\156\x64\x20\143\157\x6e\164\x61\x63\164\56\x64\x65\x6c\x65\x74\145\x64\40\x3d\40\60\xa\x9\x9\11\x9"); goto BhoJa; Bidd1: BHLNa: goto ZfIKI; DogH4: $this->_where[] = "\166\145\x6e\x5f\x69\x64\75\x20\x3a\x76\x65\x6e\137\151\144"; goto Bidd1; BhoJa: if (empty($gBaOn["\x76\x65\156\x5f\151\x64"])) { goto BHLNa; } goto DogH4; GMgpg: } public function getVendorPaginate($gBaOn) { goto RqmRM; RqmRM: $this->paginate("\x73\145\x6c\145\x63\x74\x20{$this->_table}\x2e\52\40\x2c\xa\x9\x9\x9\11\143\157\x6e\164\x61\x63\164\x2e\52\12\11\x9\11\x9", "\x66\x72\x6f\x6d\40{$this->_table}\12\x9\x9\x9\x9\154\x65\146\164\40\x6a\157\151\x6e\40\x6d\x69\x73\x5f\143\x6f\156\x74\141\x63\x74\x73\x20\x61\163\40\143\157\x6e\x74\x61\143\164\40\x6f\156\x20\x63\x6f\156\x74\x61\x63\164\x2e\x63\157\156\137\162\x65\146\137\151\x64\x20\75\x20{$this->_table}\56\x76\x65\156\x5f\151\x64\x20\141\156\144\x20\x63\x6f\156\x74\141\x63\x74\x2e\x63\x6f\156\137\162\145\146\137\x74\x79\x70\x65\x20\75\x20" . CONT_TYPE_VENDR . "\40\141\x6e\x64\x20\x63\157\156\x74\x61\143\x74\x2e\x63\x6f\156\137\164\x79\160\x65\x20\40\x3d\40\x35\x20\141\156\x64\x20\143\x6f\156\164\x61\143\164\56\x64\x65\x6c\x65\x74\x65\x64\x20\75\40\60\12\11\11\x9\11"); goto B3H57; KuBlR: $this->_where[] = "\x6c\x6f\167\x65\162\50\x76\x65\156\137\156\x61\155\145\51\x20\x6c\x69\x6b\145\x20\x27\45\47\x20\x7c\174\40\154\x6f\x77\145\x72\50\72\x66\x5f\x76\145\x6e\x64\x6f\162\x29\40\174\x7c\x20\47\x25\x27"; goto CyplQ; Qg6as: oLuU1: goto FW2g3; XFlCV: xL6bO: goto jYonv; jYonv: if (empty($gBaOn["\x66\x5f\x68\157\x75\163\145"])) { goto oLuU1; } goto SjdTC; CyplQ: Jg6BF: goto bW8bp; B3H57: if (empty($gBaOn["\146\x5f\x63\157\x64\x65"])) { goto zJ2Sr; } goto YBJbi; SjdTC: $this->_where[] = "\143\x6f\156\x5f\x68\x6f\165\163\x65\40\154\x69\153\x65\40\47\x25\x27\x20\x7c\174\x20\x3a\x66\137\150\x6f\x75\163\145\x20\174\x7c\40\x27\45\47"; goto Qg6as; bW8bp: if (empty($gBaOn["\x66\x5f\x6e\x61\x6d\x65"])) { goto xL6bO; } goto Ioon1; FW2g3: $this->_order[] = "\x76\x65\156\137\156\x61\x6d\145\40\x41\x53\x43"; goto walfJ; F45Vd: zJ2Sr: goto g7w3i; g7w3i: if (empty($gBaOn["\146\137\166\145\x6e\x64\x6f\162"])) { goto Jg6BF; } goto KuBlR; Ioon1: $this->_where[] = "\143\157\156\137\x6e\x61\x6d\x65\x20\154\x69\153\145\40\x27\x25\x27\x20\x7c\x7c\40\72\146\137\156\141\155\145\x20\x7c\x7c\40\x27\45\47"; goto XFlCV; YBJbi: $this->_where[] = "\40\143\141\163\x74\x28\x76\145\x6e\x5f\151\x64\40\101\x53\x20\x74\145\x78\164\x29\x20\x20\154\151\153\x65\x20\47\45\47\x20\174\x7c\x20\x3a\x66\137\x63\157\x64\145\x20\x7c\x7c\40\x27\45\47"; goto F45Vd; walfJ: return parent::fetchAll($gBaOn); goto tjWCg; tjWCg: } public function getBillByVendor($gBaOn = array()) { $this->query("\x53\x45\114\105\x43\x54\40\155\151\163\x5f\166\145\156\x64\157\x72\56\x76\x65\x6e\x5f\156\141\155\x65\x2c\12\11\11\x9\11\x20\x20\x20\40\40\x20\40\x63\157\x6e\137\160\x68\x6f\x6e\x65\54\12\11\x9\x9\x9\40\40\40\40\x20\40\40\x63\x6f\x6e\x5f\x6d\x6f\x62\151\154\145\54\xa\11\11\11\11\x20\x20\40\x20\40\x20\x20\x63\162\145\144\151\x74\137\141\x6d\x74\x2c\12\x9\x9\x9\x9\x9\11\x74\x6f\x5f\x63\150\x61\162\50\x64\155\x69\x6e\x2c\x27\x44\x44\55\115\115\x2d\x59\x59\131\x59\47\x29\40\x61\x73\40\144\155\x69\x6e\54\12\11\11\11\11\x9\11\164\157\x5f\x63\150\141\x72\x28\x64\x6d\x61\170\54\47\x44\x44\55\x4d\x4d\x2d\131\131\x59\131\47\51\40\141\x73\x20\x64\155\x61\x78\54\12\11\11\x9\11\x20\x20\40\x20\x20\40\x20\x76\145\156\137\x69\144\xa\11\11\11\11\x46\122\x4f\115\40\x6d\151\163\137\166\x65\156\x64\x6f\x72\12\11\x9\x9\x9\114\x45\106\x54\x20\112\x4f\111\116\12\x9\11\x9\11\40\x20\x28\x53\105\x4c\x45\x43\124\40\x53\x55\115\50\145\x78\x70\137\143\x72\x65\144\x69\x74\137\x61\x6d\164\51\40\101\x53\x20\143\162\145\x64\151\x74\x5f\141\155\x74\x2c\12\x9\11\x9\11\40\40\40\40\40\x20\40\40\x20\x20\x65\x78\x70\x5f\x76\145\x6e\x64\x6f\162\xa\x9\x9\x9\11\40\x20\x20\106\x52\x4f\115\40\155\x69\x73\x5f\x65\x78\160\x65\x6e\x73\145\xa\11\11\11\11\11\x57\x48\105\x52\105\x20\155\x69\163\137\x65\x78\x70\x65\x6e\x73\x65\x2e\x65\170\160\x5f\x61\x70\x70\x5f\163\164\x61\x74\x75\163\40\75\x20\x31\40\x41\116\x44\x20\x6d\151\163\x5f\x65\x78\160\x65\x6e\x73\x65\56\x65\170\x70\137\160\163\x74\141\x74\x75\163\40\x20\x3c\76\61\12\x9\x9\11\x9\x20\x20\40\x20\40\x41\x4e\104\40\155\151\163\137\x65\170\x70\145\x6e\x73\145\56\x64\x65\154\145\164\145\x64\x20\75\x20\x30\12\11\11\x9\x9\x20\x20\x20\x47\122\x4f\x55\120\x20\102\x59\40\x65\x78\x70\x5f\166\145\x6e\144\157\x72\x29\40\101\123\x20\145\170\x70\x5f\x73\165\155\40\x4f\116\40\x65\170\x70\x5f\x73\x75\155\56\x65\170\160\137\166\x65\x6e\x64\x6f\162\x20\x3d\40\x6d\151\x73\x5f\166\x65\156\x64\157\162\x2e\166\x65\156\137\151\144\12\11\11\x9\11\x4c\x45\x46\x54\40\x4a\117\111\116\12\11\x9\x9\x9\40\x20\50\x53\105\114\x45\103\124\x20\155\x69\156\x28\x65\170\160\137\x62\151\x6c\x6c\x64\164\x29\40\101\123\x20\x64\155\x69\156\x2c\12\11\x9\11\11\40\40\x20\40\x20\x20\x20\x20\x20\x20\x65\170\x70\137\x76\145\x6e\x64\x6f\162\12\11\11\x9\11\40\40\40\106\122\117\115\40\155\x69\163\x5f\x65\x78\x70\145\156\x73\145\xa\x9\x9\x9\x9\x9\127\x48\x45\x52\105\40\x6d\151\163\137\x65\x78\x70\145\x6e\x73\x65\56\x65\x78\x70\137\141\160\160\x5f\163\164\141\x74\x75\x73\x20\x3d\40\x31\x20\x41\x4e\x44\40\155\151\x73\x5f\145\170\x70\x65\x6e\163\x65\x2e\x65\170\x70\x5f\x70\x73\164\141\164\x75\163\x20\40\x3c\76\x31\12\11\x9\x9\x9\40\40\x20\40\40\101\116\104\40\155\x69\163\137\145\170\160\145\156\x73\145\x2e\144\145\154\x65\164\x65\x64\x20\75\40\x30\xa\11\11\11\11\x20\x20\40\107\122\x4f\x55\120\x20\x42\x59\40\x65\170\160\137\x76\x65\156\144\157\162\51\40\101\123\x20\x65\x78\x70\x5f\155\151\156\137\x64\x74\x20\117\116\40\145\170\x70\x5f\155\151\x6e\137\144\x74\x2e\145\x78\x70\137\166\145\156\144\157\x72\x20\x3d\x20\155\151\163\137\166\145\156\144\x6f\x72\56\x76\x65\156\x5f\151\x64\12\x9\x9\x9\x9\114\105\x46\124\40\112\x4f\x49\116\12\11\11\11\x9\40\40\x28\123\105\114\x45\103\124\x20\155\x61\170\50\145\x78\160\x5f\142\151\154\x6c\x64\x74\51\x20\101\x53\40\144\155\x61\x78\54\12\x9\x9\x9\x9\x20\x20\x20\40\x20\x20\x20\x20\x20\x20\x65\x78\160\x5f\x76\x65\156\144\157\x72\12\x9\11\x9\11\x20\x20\40\106\122\x4f\x4d\40\x6d\151\163\137\x65\x78\x70\145\156\x73\x65\12\x9\11\x9\11\11\127\x48\105\122\x45\x20\x6d\151\x73\137\x65\170\160\145\x6e\x73\145\x2e\145\x78\x70\137\x61\x70\160\137\x73\164\141\164\165\x73\x20\x3d\40\61\40\x41\116\104\40\155\x69\163\137\x65\x78\160\x65\156\x73\145\x2e\145\x78\x70\x5f\160\x73\164\141\164\165\163\40\x20\74\76\x31\12\11\11\11\11\40\x20\40\40\x20\101\x4e\104\40\155\151\x73\x5f\145\170\160\145\156\163\145\56\x64\x65\x6c\x65\x74\x65\144\40\75\x20\x30\xa\11\11\x9\11\40\x20\40\x47\122\x4f\125\120\x20\x42\131\x20\x65\x78\x70\x5f\x76\145\156\x64\x6f\x72\51\x20\101\123\x20\x65\170\160\x5f\x6d\141\170\137\x64\x74\x20\x4f\x4e\40\145\x78\x70\x5f\x6d\141\170\137\144\164\56\x65\170\x70\x5f\x76\x65\x6e\144\x6f\x72\x20\x3d\40\155\151\163\137\x76\145\x6e\x64\x6f\162\x2e\x76\145\x6e\x5f\151\x64\xa\12\11\x9\11\x9\114\105\106\124\40\112\x4f\x49\116\x20\155\x69\163\x5f\x63\x6f\x6e\x74\141\x63\x74\x73\x20\x41\123\40\143\x6f\x6e\x74\141\143\x74\40\117\x4e\x20\143\x6f\156\x74\x61\x63\164\x2e\143\x6f\x6e\x5f\162\145\146\137\151\144\40\75\40\x6d\x69\x73\137\x76\x65\156\x64\157\x72\56\x76\145\x6e\x5f\151\144\40\141\156\144\x20\143\157\156\164\141\143\164\x2e\144\x65\x6c\x65\x74\x65\x64\40\75\40\60\12\11\x9\11\11\x41\x4e\x44\40\143\x6f\x6e\x74\141\143\x74\56\x63\x6f\x6e\x5f\162\x65\146\x5f\x74\171\x70\x65\40\75\40\65\12\x9\11\x9\x9\101\116\104\40\143\x6f\156\164\141\x63\164\x2e\x63\157\x6e\137\x74\171\160\145\40\x3d\x20\65\xa\11\11\11\11\x41\x4e\104\x20\143\157\x6e\164\141\x63\x74\x2e\x64\x65\x6c\x65\x74\145\x64\40\75\40\x30\12\12\x9\11\x9\11\x57\x48\105\122\105\x20\155\x69\163\137\x76\145\156\x64\157\162\x2e\x64\145\154\x65\164\145\144\40\x3d\40\60\xa\11\11\11\11\40\40\101\116\104\40\x63\x72\x65\x64\151\164\137\x61\155\x74\x20\x3e\40\60\xa\x9\x9\11\11\x6f\x72\144\x65\x72\x20\x62\171\x20\143\162\x65\144\x69\164\x5f\141\155\x74\x20\x41\x53\x43\xa\x9\11\x9\x9"); return parent::fetchQuery($gBaOn); } }
