<?php
/*   __________________________________________________
    |  ##CreativeSol Management Information System##   |
    |__________________________________________________|
*/
 class empstatus extends db_table { protected $_table = "\x6d\x69\x73\x5f\x65\155\x70\x6c\157\171\145\145\x5f\x73\164\x61\x74\x75\x73"; protected $_pkey = "\163\x74\163\137\x69\x64"; public function add($WUkwG) { return parent::insert($WUkwG); } public function getStatusById($KUJqN) { return parent::getById($KUJqN); } public function getEmpStatusByEmpId($gBaOn = array()) { goto d5Pw6; d5Pw6: $this->query("\x73\x65\x6c\145\x63\164\x20\52\54\12\x9\11\x9\11\x63\141\x73\145\40\167\150\145\x6e\x20\163\164\163\x5f\x74\171\160\145\x20\x3d\40\61\x20\164\x68\145\156\40\47\117\156\40\114\145\x61\166\145\47\x20\12\11\11\x9\x9\40\x77\150\x65\156\40\163\x74\163\137\164\x79\x70\145\40\75\x20\62\x20\164\150\145\156\40\47\122\145\40\112\157\151\156\x27\x20\12\x9\x9\x9\11\40\x77\150\145\156\40\163\164\163\137\164\171\x70\x65\x20\x3d\40\63\x20\164\150\145\x6e\40\47\122\145\x73\x69\x67\156\x65\x64\x27\x20\xa\x9\11\x9\11\x20\167\x68\x65\x6e\40\163\164\x73\137\x74\171\160\145\40\75\40\64\40\x74\x68\145\x6e\x20\x27\x54\145\162\155\x69\x6e\141\164\x65\x64\47\x20\12\x9\x9\11\x9\145\x6e\144\x20\x61\163\x20\x65\x6d\160\137\155\163\x74\141\x74\165\163\54\12\11\11\x9\11\x74\157\137\x63\x68\141\x72\50\x73\164\x73\x5f\163\x74\141\162\x74\x5f\x64\141\164\145\x2c\x27\x44\104\57\115\x4d\57\131\x59\x59\131\47\x29\40\x61\163\40\163\164\x73\x5f\163\164\141\162\164\137\x64\x61\x74\145\54\xa\x9\11\11\x9\164\157\137\x63\150\141\x72\x28\163\x74\x73\x5f\x65\x6e\144\x5f\144\x61\164\145\x2c\x27\x44\x44\x2f\x4d\115\57\x59\131\131\x59\x27\51\40\x61\x73\x20\163\x74\x73\x5f\x65\x6e\x64\x5f\144\x61\164\x65\x2c\xa\x9\x9\x9\11\164\157\137\x63\150\141\x72\50\x73\x74\163\x5f\x61\x70\x70\x6c\x79\x5f\x64\141\x74\x65\54\x27\x44\104\x2f\115\115\57\x59\x59\x59\x59\47\x29\x20\141\163\x20\x73\x74\x73\x5f\141\160\160\x6c\171\137\x64\x61\x74\145\x2c\12\11\11\x9\11\x74\x6f\x5f\143\150\141\x72\x28\163\164\163\137\x61\x70\160\162\157\166\x61\154\x5f\x64\x61\x74\145\x2c\47\104\104\x2f\115\x4d\x2f\x59\x59\x59\x59\47\x29\40\x61\163\40\163\164\x73\137\x61\160\x70\162\157\166\141\x6c\x5f\x64\141\164\x65\x9\11\x9\x9\12\12\11\11\11\x9\146\162\x6f\x6d\40{$this->_table}\12\11\11\11\x9"); goto daG4u; rGD9o: azow0: goto TkmXF; NqO3H: $this->_where[] = "\163\x74\x73\137\x65\x6d\x70\137\x69\x64\x20\75\x20\72\163\x74\x73\137\x65\155\x70\x5f\151\144"; goto rGD9o; ylrOb: return parent::fetchAll($gBaOn); goto VD2Hf; TkmXF: $this->_order[] = "\163\x74\163\137\151\x64\x20\x44\x45\123\103"; goto ylrOb; daG4u: if (empty($gBaOn["\x73\x74\163\x5f\145\x6d\160\137\x69\144"])) { goto azow0; } goto NqO3H; VD2Hf: } public function modify($WUkwG, $gBaOn) { return parent::update($WUkwG, $gBaOn); } public function getTopSatatusByEmp($gBaOn) { $this->query("\x53\105\114\105\103\x54\x20\x2a\xa\11\x9\x9\11\x46\x52\117\x4d\12\11\11\x9\x9\40\40\x28\123\105\x4c\x45\x43\124\x20\x6d\x61\170\x28\x73\x74\163\x5f\x69\x64\51\40\x41\123\x20\155\x73\164\163\137\151\144\12\x9\11\x9\11\x20\40\x20\x46\122\x4f\x4d\x20\x6d\x69\163\x5f\x65\x6d\160\154\157\171\145\x65\137\163\164\141\164\x75\163\xa\x9\11\11\11\40\40\40\x57\x48\x45\x52\105\x20\163\164\163\137\145\155\x70\x5f\151\x64\40\x3d\x20\72\163\164\163\x5f\145\x6d\160\137\151\x64\xa\x9\11\x9\11\11\40\x41\116\104\x20\144\x65\x6c\145\x74\145\144\40\75\40\60\xa\11\x9\11\x9\40\x20\40\107\x52\x4f\x55\x50\40\x42\131\x20\x73\164\x73\137\x74\171\x70\x65\51\x6d\141\x78\x5f\147\162\157\x75\x70\12\11\x9\x9\11\x4c\105\106\124\40\x4a\x4f\x49\116\40\155\151\163\137\x65\155\160\x6c\157\171\x65\145\137\x73\x74\x61\x74\x75\x73\x20\x41\123\x20\163\x74\x61\x74\165\x73\40\x4f\116\x20\163\164\x61\x74\x75\163\x2e\163\164\x73\137\151\144\x20\75\x20\x6d\141\x78\137\147\162\x6f\165\x70\56\155\163\x74\x73\137\x69\144\x20\x41\116\x44\40\x73\x74\141\164\165\163\x2e\144\145\x6c\145\164\x65\144\x20\x3d\x20\60"); return parent::fetchQuery($gBaOn); } public function getLeaveSummary($gBaOn) { $this->query("\x53\x45\114\105\103\x54\40\x77\151\x74\x68\x5f\156\x65\170\164\x2e\163\x74\163\137\145\x6d\160\x5f\x69\x64\x2c\xa\x20\40\40\40\x9\x20\x20\x20\40\50\x65\155\160\137\146\156\141\x6d\x65\40\x7c\x7c\x20\47\40\47\40\x7c\x7c\x20\145\155\160\137\x6d\x6e\141\x6d\x65\40\174\174\x20\47\x20\x27\x20\x7c\x7c\x20\145\155\x70\x5f\154\x6e\141\x6d\x65\x29\x20\x41\x53\40\145\x6d\x70\x5f\x6e\141\x6d\x65\54\12\x20\40\x20\x20\x20\40\40\x20\40\40\40\40\x74\x6f\x5f\143\x68\141\162\50\167\x69\164\x68\x5f\156\x65\x78\x74\56\x73\164\x73\137\x73\164\x61\162\164\x5f\144\141\164\145\54\47\x44\104\x2f\x4d\x4d\x2f\131\x59\x59\x59\47\x29\40\x61\x73\x20\154\x65\141\166\x65\x5f\x73\x74\141\x72\164\54\xa\40\x20\x20\x20\40\40\40\x20\40\x20\40\x20\164\x6f\137\143\150\x61\x72\x28\x77\x69\x74\150\x5f\156\x65\x78\x74\56\163\164\x73\137\145\156\x64\137\144\x61\x74\145\x2c\47\x44\x44\57\x4d\115\57\x59\131\131\x59\x27\51\x20\x61\163\40\x6c\145\x61\166\x65\x5f\145\156\x64\x2c\xa\x20\x20\x20\40\x20\x20\40\x20\x20\40\x20\40\164\157\x5f\143\x68\141\162\50\x73\164\x61\164\165\x73\56\x73\164\163\137\163\x74\x61\x72\x74\x5f\x64\141\164\x65\x2c\47\104\104\x2f\115\115\57\x59\x59\131\131\47\x29\40\x61\163\40\x64\141\x74\x65\x5f\162\145\164\165\162\x6e\x2c\12\40\x20\40\x20\11\40\x20\x20\x20\50\167\151\164\x68\137\156\145\170\x74\56\x73\x74\x73\137\x65\x6e\144\137\x64\141\164\145\72\72\x64\141\164\x65\x20\55\x20\167\151\164\150\137\x6e\145\x78\x74\56\x73\x74\x73\x5f\x73\x74\x61\x72\x74\x5f\x64\x61\x74\x65\72\72\144\141\164\x65\x29\x20\x41\x53\x20\144\141\x79\163\137\x73\141\x6e\x63\x74\x69\157\156\145\144\54\xa\40\40\x20\40\x9\x20\40\x20\40\x28\163\164\x61\164\165\x73\56\163\x74\163\x5f\x73\164\x61\x72\164\137\x64\141\164\145\x3a\x3a\x64\x61\164\x65\40\x2d\x20\x77\151\x74\150\137\156\145\170\x74\x2e\x73\x74\163\x5f\x73\x74\141\162\x74\x5f\144\x61\164\145\72\x3a\x64\141\x74\x65\51\x20\x41\x53\x20\144\x61\x79\163\x5f\x74\141\x6b\x65\156\54\12\x20\40\x20\40\40\x20\40\x20\40\x20\x20\40\x75\160\160\145\x72\x28\167\151\164\x68\137\x6e\145\170\164\x2e\x73\x74\163\x5f\162\145\155\x61\162\x6b\163\x29\40\x61\x73\x20\x73\x74\163\x5f\x72\145\x6d\x61\x72\x6b\x73\xa\x20\x20\40\x20\x9\x20\x20\40\40\106\x52\117\x4d\xa\40\40\40\x20\11\40\40\x20\x20\50\123\105\114\105\x43\124\x20\x73\x74\163\137\145\x6d\160\x5f\151\144\54\12\x20\x20\40\x20\11\x20\x20\40\40\40\x20\40\x20\x73\164\163\137\151\144\x2c\xa\x20\x20\x20\40\x9\40\40\40\x20\x20\x20\x20\40\x73\164\163\x5f\x74\171\x70\145\54\12\x20\x20\40\x20\11\40\40\x20\x20\x20\x20\40\40\163\x74\163\x5f\x73\164\x61\x72\164\137\x64\141\x74\x65\x2c\xa\40\40\x20\x20\x9\x20\x20\40\x20\x20\x20\40\x20\x73\x74\163\137\x65\156\x64\x5f\144\141\x74\x65\54\12\40\x20\x20\x20\x20\40\x20\40\x20\40\x20\40\40\x20\40\x20\x73\164\163\x5f\x72\145\x6d\x61\x72\x6b\x73\x2c\12\x20\40\x20\x20\x9\40\x20\40\x20\x20\40\40\x20\154\145\x61\144\50\163\x74\x73\137\x69\144\x29\x20\x6f\166\x65\x72\x20\50\xa\x20\40\40\x20\11\x20\40\x20\x20\40\40\40\x20\40\40\40\x20\x4f\x52\x44\105\122\x20\102\131\x20\x73\164\163\137\145\x6d\160\x5f\151\x64\40\101\x53\103\x2c\40\x73\164\163\137\x69\144\x20\101\x53\x43\51\40\101\x53\40\163\164\x73\137\x6e\145\170\164\xa\40\40\40\40\x9\x20\40\x20\x20\40\x20\x20\40\106\122\117\115\40\155\x69\163\x5f\x65\x6d\160\x6c\157\x79\x65\x65\x5f\x73\x74\x61\x74\x75\x73\xa\x20\40\x20\40\11\40\x20\40\x20\40\x20\x20\x20\x57\x48\105\122\x45\x20\163\164\x73\137\164\171\x70\145\x20\x49\x4e\x20\x28\x31\54\12\40\x20\x20\40\x9\40\40\40\40\40\40\x20\40\40\x20\40\x20\62\51\xa\40\40\40\x20\11\40\x20\40\40\x20\x20\40\x20\117\122\x44\105\122\40\x42\x59\x20\x73\164\x73\x5f\x65\155\160\137\151\144\x20\x41\123\103\x2c\x20\163\164\163\x5f\x69\144\40\x41\123\103\x29\x20\x77\151\x74\x68\137\x6e\x65\170\164\xa\x20\x20\40\x20\11\40\x20\x20\40\40\x20\x20\x20\114\105\106\124\x20\112\x4f\x49\116\x20\x6d\x69\x73\137\x65\x6d\x70\154\x6f\171\x65\145\137\x73\x74\x61\x74\165\x73\x20\101\x53\40\163\164\x61\164\x75\x73\40\x4f\116\x20\167\151\164\150\137\156\145\x78\x74\x2e\163\164\163\137\x6e\x65\x78\x74\40\x3d\x20\163\x74\141\x74\x75\x73\56\x73\164\163\137\151\144\40\101\116\104\x20\x73\164\141\x74\165\163\56\x73\x74\x73\137\x74\x79\x70\x65\40\x3d\40\62\xa\40\40\x20\40\x9\40\40\x20\40\x20\x20\x20\40\114\x45\x46\124\40\x4a\117\x49\x4e\x20\x6d\151\x73\x5f\145\155\160\154\157\171\145\x65\40\101\x53\40\x65\x6d\x70\40\x4f\x4e\40\x65\155\x70\56\x65\x6d\x70\137\151\x64\40\75\x20\167\151\x74\150\x5f\x6e\145\x78\x74\x2e\163\164\163\137\x65\155\160\x5f\x69\144\xa\x20\40\40\40\11\40\x20\x20\40\x20\x20\x20\x20\x57\110\x45\122\105\40\167\151\164\150\x5f\x6e\x65\x78\x74\56\x73\x74\x73\x5f\164\171\x70\145\x20\x3d\x20\x31\12\40\40\40\x20\x20\40\40\x20\x20\40\40\x20\40\x20\x20\x20\x41\116\x44\x20\x77\x69\x74\x68\x5f\x6e\x65\x78\x74\x2e\163\164\x73\137\145\155\160\x5f\151\x64\40\75\72\x73\164\x73\x5f\x65\x6d\160\x5f\x69\144"); return parent::fetchQuery($gBaOn); } public function deleteDocument($KUJqN) { return parent::delete($KUJqN); } }