<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2022-12-08 23:05:07              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 class building extends db_table { protected $_table = "\155\151\163\137\x62\165\151\x6c\x64\x69\x6e\147"; protected $_pkey = "\142\x6c\x64\x5f\151\144"; public function getBuildingPair($MntfA = array()) { goto A8v6C; tjoC5: $this->_order[] = "\142\x6c\x64\137\x6e\141\x6d\x65\40\x41\123\103"; goto HiWap; A8v6C: $this->query("\x73\x65\x6c\145\143\164\40\x62\x6c\x64\x5f\151\144\54\x62\154\144\137\x6e\141\155\145\40\146\162\x6f\155\40{$this->_table}"); goto tjoC5; HiWap: return parent::fetchPair($MntfA); goto eVoiU; eVoiU: } public function add($b6uJC) { return parent::insert($b6uJC); } }
