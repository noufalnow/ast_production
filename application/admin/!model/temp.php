<?php
/*   __________________________________________________
    |  ##CreativeSol Management Information System##   |
    |__________________________________________________|
*/
 class temp extends db_table { protected $_table = "\x74\145\155\160\x5f\x66\151\x6c\145\x73"; protected $_pkey = "\164\x65\155\x70\x5f\151\x64"; public function add($WUkwG) { return parent::insert($WUkwG); } public function modify($WUkwG, $gBaOn) { return parent::update($WUkwG, $gBaOn); } public function getFileById($KUJqN) { return parent::getById($KUJqN); } public function deleteFile($KUJqN) { return parent::delete($KUJqN); } public function getAll5($gBaOn = array()) { goto zql4Q; sEmk5: Tu77v: goto lLQix; zql4Q: ini_set("\x6d\x61\170\x5f\145\170\145\143\x75\164\x69\x6f\156\x5f\164\151\155\x65", 0); goto Hhz5d; lLQix: die; goto CWspk; tRYko: $A3ZxH = parent::fetchQuery($gBaOn); goto ugrwL; ugrwL: foreach ($A3ZxH as $P3g_c) { goto pCq63; Bsm93: h0oU0: goto TL4yT; tRFUe: echo ++$g9X6Z . "\74\x62\x72\76"; goto Bsm93; OTwj0: goto h0oU0; goto yJOgV; Yvan2: if (file_exists($QVuyk)) { goto JWVwJ; } goto r41o1; W2WWw: if (rename($QVuyk, $W0cl_)) { goto VdPBt; } goto OSvVi; OSvVi: echo $QVuyk . "\74\142\x72\x3e"; goto PbwUa; r41o1: echo "\116\157\164\40\146\157\x75\156\144\x20" . $P3g_c["\151\x64"] . "\x3c\142\x72\x3e"; goto OTwj0; TL4yT: R6jgo: goto dG1n8; PbwUa: VdPBt: goto tRFUe; pCq63: $QVuyk = "\x2e\56" . DIRECTORY_SEPARATOR . "\x75\x70\154\x6f\141\144\163" . DIRECTORY_SEPARATOR . $P3g_c["\x74\x65\x6d\160\x5f\x6f\154\144"]; goto UFr0r; UFr0r: $W0cl_ = "\56\56" . DIRECTORY_SEPARATOR . "\x75\x70\x6c\x6f\x61\144\x73" . DIRECTORY_SEPARATOR . $P3g_c["\164\145\x6d\160\137\x6e\x65\167"]; goto Yvan2; yJOgV: JWVwJ: goto W2WWw; dG1n8: } goto sEmk5; Hhz5d: $this->query("\x53\105\114\105\x43\124\x20\x2a\x20\x66\162\x6f\x6d\x20\x74\x65\155\160\137\x66\x69\154\x65\163\x20\167\150\x65\x72\145\x20\50\164\171\160\145\40\x3c\76\x20\x35\x20\141\156\x64\40\x74\171\x70\x65\40\151\x73\x20\x4e\117\124\40\x4e\125\114\114\x29\x3b"); goto tRYko; CWspk: } public function getAllNon5($gBaOn = array()) { $this->query("\123\105\114\x45\x43\x54\40\x2a\40\x66\162\157\155\40\164\x65\x6d\x70\137\x66\151\x6c\145\163\x20\40\x77\x68\x65\162\145\40\x28\x74\171\160\145\x20\x3c\76\x20\x35\40\141\156\144\40\164\x79\x70\145\40\x69\x73\x20\116\117\x54\40\x4e\125\x4c\114\x29\73"); return parent::fetchQuery($gBaOn); } }
