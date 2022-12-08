<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2022-12-08 23:05:07              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 class employeepay extends db_table { protected $_table = "\x6d\151\x73\137\x65\155\160\x6c\x6f\171\145\x65\x5f\x70\x61\171"; protected $_pkey = "\x70\141\171\x5f\x69\144"; public function add($b6uJC) { return parent::insert($b6uJC); } public function modify($b6uJC, $MntfA) { return parent::update($b6uJC, $MntfA); } public function getPayDetailsByEmployee($MntfA) { goto XpyM0; LAYll: $this->_order[] = "\160\x61\x79\137\151\x64\x20\x44\x45\123\103"; goto TJ7mn; XpyM0: $this->query("\x73\145\x6c\145\x63\164\x20\52\40\146\162\x6f\x6d\x20{$this->_table}"); goto TIDp2; TJ7mn: return parent::fetchAll($MntfA); goto xY5OI; TIDp2: $this->_where[] = "\160\141\x79\137\x65\x6d\x70\137\x69\144\75\40\x3a\x70\x61\x79\x5f\x65\x6d\x70\x5f\x69\x64"; goto LAYll; xY5OI: } public function getEmployeePayById($blzMx) { return parent::getById($blzMx); } public function getEmployeePay($MntfA) { goto TjOIs; vi2Dz: $this->_order[] = "\x70\141\171\x5f\151\144\x20\104\105\x53\103"; goto jy797; BLzRL: $this->_where[] = "\x70\141\171\137\x65\x6d\x70\x5f\151\x64\x3d\40\x3a\160\141\x79\137\145\155\160\x5f\151\x64"; goto vi2Dz; TjOIs: $this->query("\x73\145\154\145\143\x74\x20\52\40\x66\x72\157\x6d\40{$this->_table}"); goto BLzRL; jy797: return parent::fetchRow($MntfA); goto Xp7oM; Xp7oM: } }
