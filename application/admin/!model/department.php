<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2022-12-08 23:05:07              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 class department extends db_table { protected $_table = "\x63\x6f\162\x65\x5f\144\145\160\x61\x72\x74\x6d\145\x6e\164"; protected $_pkey = "\144\x65\x70\x74\x5f\151\x64"; public function getDeptPair($MntfA = array()) { goto f4GWr; YRY1S: $this->_order[] = "\144\145\160\164\137\156\x61\x6d\x65\40\101\123\103"; goto xFlC7; xFlC7: return parent::fetchPair($MntfA); goto nLTjV; f4GWr: $this->query("\163\x65\154\x65\x63\164\x20\144\145\x70\164\x5f\x69\x64\x2c\x64\x65\x70\164\137\x6e\141\x6d\145\40\146\162\157\x6d\x20{$this->_table}"); goto YRY1S; nLTjV: } }
