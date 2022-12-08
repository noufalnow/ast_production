<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2022-12-08 23:05:07              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 class designation extends db_table { protected $_table = "\143\157\x72\x65\x5f\144\145\x73\151\147\x6e\x61\164\151\x6f\156"; protected $_pkey = "\144\145\163\x69\147\137\151\x64"; public function getDesigPair($MntfA = array()) { goto dVyvV; qRS8h: return parent::fetchPair($MntfA); goto Z0cOw; dVyvV: $this->query("\163\145\154\x65\x63\x74\x20\144\145\163\151\x67\x5f\151\x64\x2c\144\x65\x73\x69\147\x5f\x6e\x61\x6d\x65\40\146\162\157\x6d\x20{$this->_table}"); goto aztKd; aztKd: $this->_order[] = "\144\145\x73\x69\x67\x5f\x6e\141\x6d\145\x20\x41\x53\103"; goto qRS8h; Z0cOw: } }
