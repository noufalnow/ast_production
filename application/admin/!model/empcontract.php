<?php
/*   __________________________________________________
    |  ##CreativeSol Management Information System##   |
    |__________________________________________________|
*/
 class empcontract extends db_table { protected $_table = "\155\151\x73\137\145\155\160\x5f\x63\x6f\x6e\x74\162\141\143\x74"; protected $_pkey = "\x65\155\143\137\151\x64"; public function add($WUkwG) { return parent::insert($WUkwG); } public function modify($WUkwG, $gBaOn) { return parent::update($WUkwG, $gBaOn); } public function getDetById($KUJqN) { return parent::getById($KUJqN); } public function getDetByEmployeeId($gBaOn) { goto O_tSq; DH7vV: $this->_order[] = "\x65\155\143\x5f\x69\144\40\x44\x45\123\103"; goto ZJQn3; ZJQn3: return parent::fetchAll($gBaOn); goto NOfqN; O_tSq: $this->query("\163\145\154\x65\143\x74\x20\x2a\54\12\x9\11\11\11\x74\157\x5f\143\x68\x61\x72\50\x65\x6d\143\137\x64\x61\164\145\137\x73\164\141\162\x74\x2c\x27\x44\104\57\x4d\115\x2f\131\x59\131\x59\47\51\x20\141\x73\40\145\x6d\x63\x5f\x64\141\x74\x65\x5f\163\x74\x61\x72\x74\x2c\xa\x9\11\11\11\x74\x6f\137\x63\150\141\x72\50\x65\x6d\x63\137\144\141\164\x65\x5f\145\156\144\54\x27\104\104\x2f\115\115\57\x59\131\131\x59\47\51\x20\141\163\x20\145\x6d\143\x5f\x64\141\164\145\x5f\x65\x6e\144\12\x9\x9\x9\x9\146\162\157\155\x20{$this->_table}\12\11\x9\x9\11\x6c\145\146\x74\x20\x6a\157\x69\156\40\x6d\151\163\137\x65\x6d\x70\154\157\x79\x65\145\40\141\163\40\145\x6d\x70\40\157\156\x20\145\155\160\56\x65\x6d\x70\137\x69\144\x20\x3d\40{$this->_table}\x2e\145\x6d\x63\x5f\x65\x6d\160\137\x69\x64\x20\141\x6e\x64\40\145\155\x70\56\x64\x65\x6c\145\x74\145\x64\x20\x3d\40\60\xa\11\x9\11\11\154\145\x66\164\40\152\157\151\156\x20\x6d\151\x73\x5f\x63\165\163\x74\x6f\x6d\145\x72\x20\141\163\x20\143\x75\163\164\40\157\x6e\40\143\165\163\164\x2e\x63\x75\x73\x74\137\x69\144\x20\75\x20{$this->_table}\x2e\x65\155\x63\x5f\x63\x75\x73\x74\137\151\144\40\141\156\x64\x20\143\165\163\x74\x2e\144\x65\x6c\145\164\x65\144\40\x3d\40\x30\x9\11\xa\11\11\x9\11\154\x65\x66\164\40\152\x6f\151\x6e\x20\x6d\x69\x73\x5f\166\145\x68\x69\143\154\145\x20\x61\x73\x20\166\x68\154\40\157\156\40\166\x68\154\56\166\x68\x6c\x5f\x69\x64\x20\x3d\40{$this->_table}\56\145\155\143\x5f\166\150\x6c\x5f\x69\x64\x20\141\x6e\x64\40\x76\150\154\56\x64\145\154\145\x74\145\144\x20\x3d\x20\x30\x9\11\x9\12\x9\x9\11\x9"); goto jsjuT; jsjuT: $this->_where[] = "\x65\x6d\x63\x5f\145\x6d\x70\137\x69\x64\x3d\x20\x3a\x65\155\143\x5f\x65\x6d\160\x5f\x69\144"; goto DH7vV; NOfqN: } public function getVehicleContractReport($gBaOn) { goto Pro4w; E6XUl: if (empty($gBaOn["\x66\137\x74\171\160\x65"])) { goto KabtT; } goto ilCZf; Pro4w: @($gBaOn = array_filter($gBaOn)); goto qYl8W; vPTCo: $fNpHp = "\40\x57\110\105\122\105\x20" . implode("\40\x41\116\104\40", $fNpHp); goto sgvik; Ng3r0: $fNpHp[] = "\x20\x65\x6d\143\x5f\163\x74\x61\164\x75\x73\x20\x3d\40\x3a\146\137\x73\x74\141\164\165\163\40"; goto w5Zc2; GF26A: return parent::fetchQuery($gBaOn); goto KSpmX; zfY5n: $Z898Q = "\x20\x4f\x52\x44\x45\122\x20\102\x59\40\145\155\x63\137\143\165\163\164\137\x69\x64\x2c\164\x79\160\145\137\x69\x64\54\166\x68\x6c\137\x69\x64\54\145\155\x63\137\x69\x64\x20\x44\105\123\x43\40"; goto fEVPw; NVY2r: if (empty($gBaOn["\146\x5f\x73\164\141\164\x75\163"])) { goto HZd0J; } goto Ng3r0; VAtc4: CdBEN: goto E6XUl; IqWSC: $fNpHp[] = "\40\x65\x6d\143\137\x63\x75\163\164\137\151\144\40\x3d\40\72\146\137\x63\x75\163\164\x6f\x6d\x65\162\40"; goto wgHo6; HBJdw: $fNpHp[] = "\x20\50\50\154\x6f\167\145\x72\50\145\155\x70\x5f\x66\x6e\x61\155\145\x29\40\154\x69\x6b\145\x20\47\x25\47\x20\x7c\x7c\x20\154\x6f\167\x65\x72\x28\72\146\137\156\141\155\145\51\x20\x7c\174\40\47\x25\47\xa\11\11\x9\11\11\117\x52\x20\154\157\167\x65\162\50\145\x6d\160\x5f\155\156\x61\x6d\x65\x29\40\x6c\x69\153\145\40\x27\x25\x27\40\174\174\x20\154\x6f\167\x65\x72\50\x3a\x66\137\x6e\x61\155\x65\51\40\174\174\x20\x27\x25\x27\12\x9\11\x9\x9\11\117\122\x20\x6c\x6f\167\x65\162\50\x65\x6d\160\x5f\x6c\x6e\x61\155\145\51\x20\x6c\151\153\x65\40\x27\x25\47\x20\x7c\174\x20\154\157\x77\145\x72\50\72\146\x5f\x6e\x61\x6d\x65\51\40\x7c\x7c\40\x27\45\x27\xa\x9\11\11\11\x9\51\x4f\122\xa\x9\x9\x9\x9\11\x28\x6c\x6f\x77\145\x72\50\x65\x6d\160\137\x66\156\141\155\x65\x29\x7c\174\47\x20\47\x7c\x7c\154\157\167\145\162\x28\x65\155\160\137\x6d\156\141\155\145\51\x7c\x7c\47\40\x27\174\174\x6c\157\167\145\162\x28\x65\155\160\137\x6c\x6e\141\155\145\51\40\154\x69\x6b\145\x20\x27\x25\47\40\x7c\x7c\40\154\x6f\x77\145\x72\50\72\146\137\x6e\141\x6d\145\x29\x20\x7c\x7c\40\x27\x25\47\51\51\x20"; goto NjYBr; fEVPw: goto jn0_s; goto zHrQV; sgvik: $this->query("\x53\105\x4c\x45\x43\124\40\145\155\143\137\x69\144\54\12\x9\11\x9\11\166\150\x6c\x5f\156\157\54\xa\11\x9\11\11\x74\x79\160\145\56\164\x79\160\x65\x5f\x6e\x61\155\145\x2c\xa\x9\11\11\11\143\165\163\164\x5f\x6e\x61\155\x65\54\xa\x9\x9\x9\11\x74\x6f\137\x63\x68\141\x72\x28\145\155\143\x5f\x64\141\x74\145\137\163\164\141\162\164\x2c\47\104\x44\57\x4d\115\x2f\131\x59\x59\131\47\51\x20\101\123\40\163\x74\x73\x5f\163\164\141\x72\164\x5f\144\x61\164\x65\54\12\11\x9\x9\x9\164\157\x5f\x63\150\141\162\x28\145\x6d\143\x5f\144\141\x74\145\137\145\x6e\x64\x2c\47\x44\104\57\x4d\115\57\131\x59\x59\x59\47\x29\x20\101\123\40\163\164\163\137\x65\x6e\x64\x5f\144\x61\x74\145\54\12\11\x9\11\x9\145\x6d\143\137\x73\x74\141\x74\165\163\54\xa\11\11\11\x9\x65\x6d\143\137\x63\x75\x73\x74\x5f\x69\144\x2c\xa\11\11\11\x9\145\155\x63\x5f\x70\162\x6f\x6a\145\143\164\x2c\xa\x9\x9\x9\11\145\155\143\x5f\154\157\x63\x61\x74\x69\157\156\x2c\xa\11\11\x9\x9\103\101\x53\105\12\11\x9\x9\x9\127\110\105\116\40\x65\x6d\143\x5f\163\x74\141\164\165\x73\x20\75\40\x31\40\124\x48\105\116\40\x65\x6d\143\137\x6e\x6f\x74\x65\xa\11\11\x9\11\x57\x48\x45\116\40\x65\x6d\143\137\163\164\141\x74\x75\163\x20\x3d\40\62\40\x54\110\105\116\40\x65\155\143\x5f\156\x6f\x74\x65\x32\xa\11\11\x9\11\x45\116\104\x20\101\123\x20\x65\x6d\x63\x5f\x6e\157\164\145\x2c\12\x9\11\x9\x9\x63\x6f\x6e\143\141\x74\x28\145\155\160\137\x66\156\141\x6d\x65\x2c\47\40\47\x2c\x65\x6d\x70\x5f\155\x6e\141\155\x65\54\47\x20\x27\54\40\x65\155\x70\137\x6c\x6e\x61\155\x65\51\x20\101\x53\x20\x65\155\160\137\x6e\141\x6d\145\x2c\xa\11\x9\x9\11\x43\101\x53\x45\xa\11\x9\11\x9\x57\x48\105\116\40\145\155\x63\137\163\164\141\x74\165\x73\x20\x3d\x20\61\40\x54\110\x45\116\x20\x27\x4f\156\147\157\x69\156\x67\x27\xa\x9\x9\x9\x9\x57\110\x45\x4e\x20\x65\x6d\143\x5f\163\x74\x61\x74\x75\x73\x20\x3d\x20\x32\x20\x54\x48\x45\x4e\40\47\x43\157\155\160\154\x65\164\x65\144\x27\xa\x9\11\x9\x9\105\x4e\x44\x20\x41\123\x20\x73\x74\141\164\x75\163\12\11\11\11\x9\106\122\117\115\x20\155\151\163\x5f\x76\145\x68\x69\x63\x6c\x65\12\x9\11\x9\11\114\105\x46\124\x20\112\117\111\x4e\40\155\x69\x73\x5f\145\x6d\160\137\143\157\x6e\164\162\141\x63\x74\40\x41\123\x20\x76\143\x6f\156\40\x4f\116\x20\x76\143\x6f\x6e\56\145\155\x63\x5f\x76\x68\x6c\x5f\x69\x64\x20\75\40\x76\150\154\x5f\151\144\xa\11\x9\11\x9\x41\x4e\x44\40\166\x63\x6f\x6e\56\144\145\154\145\x74\x65\x64\x20\x3d\40\60\12\x9\x9\x9\x9\x4c\x45\106\x54\x20\112\x4f\111\116\40\155\x69\x73\x5f\x65\x6d\160\x6c\x6f\x79\145\x65\x20\x41\123\x20\x65\x6d\160\40\117\x4e\x20\145\x6d\x70\56\x65\x6d\x70\x5f\x69\144\x20\x3d\x20\x65\155\143\x5f\x65\x6d\x70\137\x69\x64\xa\11\x9\x9\11\101\x4e\104\40\x65\x6d\160\56\144\145\154\x65\x74\x65\144\40\75\40\60\xa\x9\x9\11\11\114\x45\106\124\40\x4a\x4f\111\x4e\40\x6d\151\163\x5f\x63\x75\163\x74\157\x6d\x65\x72\x20\x41\x53\x20\x63\x75\163\x74\x20\117\116\40\143\x75\163\164\x2e\143\165\163\x74\x5f\151\x64\x20\75\40\x65\x6d\x63\137\143\165\x73\x74\137\x69\144\12\x9\11\11\11\101\x4e\104\x20\143\x75\163\164\x2e\x64\x65\154\x65\164\x65\x64\x20\x3d\x20\x30\12\11\11\11\11\x4c\105\x46\x54\x20\x4a\x4f\x49\x4e\40\x6d\151\x73\x5f\x76\x65\150\x69\143\x6c\145\x5f\164\171\x70\x65\x20\x41\x53\40\x54\131\x50\x45\40\117\116\40\124\x59\120\x45\x2e\x74\171\x70\145\137\x69\144\x20\x3d\x20\166\150\154\x5f\164\x79\160\x65\xa\x9\11\11\x9\x41\116\104\x20\124\x59\x50\105\56\x64\x65\x6c\x65\164\x65\144\40\75\40\60\12\x9\11\11\x9\xa\x9\x9\x9\x9{$fNpHp}\12\x9\x9\x9\11{$Z898Q}"); goto GF26A; iv34j: if (!empty($gBaOn["\x76\x68\x6c\137\151\x64"])) { goto Fa97v; } goto zfY5n; pK0BQ: if (empty($gBaOn["\x66\x5f\x63\165\163\x74\x6f\x6d\145\x72"])) { goto p22h9; } goto IqWSC; yMgyS: KabtT: goto CLGzb; CLGzb: if (empty($gBaOn["\x66\137\156\x61\x6d\x65"])) { goto y4sb2; } goto HBJdw; w5Zc2: HZd0J: goto iv34j; ilCZf: $fNpHp[] = "\x20\166\150\154\x5f\164\x79\160\145\40\x3d\x20\72\x66\137\x74\171\x70\145\x20"; goto yMgyS; wgHo6: p22h9: goto NVY2r; qYl8W: $fNpHp[] = "\x20\155\x69\x73\137\x76\145\x68\x69\x63\x6c\x65\56\144\145\x6c\145\164\x65\x64\x20\75\40\x30\40"; goto SDkS1; NjYBr: y4sb2: goto pK0BQ; dFiYq: $Z898Q = "\x20\117\122\104\105\x52\x20\102\x59\40\x73\164\163\x5f\x65\156\x64\x5f\x64\141\164\x65\x20\104\105\123\x43\x2c\x20\40\145\x6d\x63\x5f\163\x74\x61\164\165\163\40\104\x45\123\x43\54\40\x20\x65\155\x63\137\151\144\40\104\105\x53\x43\40"; goto U0Btw; i3xxb: if (empty($gBaOn["\146\137\x76\x68\x6c\x6e\157"])) { goto CdBEN; } goto u6hsu; SDkS1: $fNpHp[] = "\x20\x6d\x69\163\137\166\x65\x68\x69\x63\x6c\x65\x2e\x76\150\x6c\137\143\157\x6d\x6d\137\x73\164\141\x74\x75\x73\x20\75\40\62\40"; goto i3xxb; zHrQV: Fa97v: goto S3PNP; u6hsu: $fNpHp[] = "\x20\166\150\154\137\x6e\157\40\154\151\153\145\x20\x27\45\x27\x20\x7c\174\40\x3a\146\137\166\x68\154\x6e\157\40\174\174\x20\x27\x25\47\x20"; goto VAtc4; U0Btw: jn0_s: goto vPTCo; S3PNP: $fNpHp[] = "\40\166\x68\x6c\x5f\151\x64\x20\75\x20\x3a\166\150\154\137\x69\144\x20"; goto dFiYq; KSpmX: } }