<?php
/*   __________________________________________________
    |  ##CreativeSol Management Information System##   |
    |__________________________________________________|
*/
 class building extends db_table { protected $_table = "\155\151\x73\137\142\165\x69\x6c\x64\x69\x6e\x67"; protected $_pkey = "\142\x6c\144\137\x69\x64"; public function add($WUkwG) { return parent::insert($WUkwG); } public function modify($WUkwG, $gBaOn) { return parent::update($WUkwG, $gBaOn); } public function getBuildingPair($gBaOn = array()) { goto kSkIG; a739r: return parent::fetchPair($gBaOn); goto AiNpJ; ktetU: $this->_order[] = "\142\x6c\x64\137\x6e\141\155\x65\40\101\x53\103"; goto a739r; kSkIG: $this->query("\x73\x65\x6c\145\x63\164\x20\142\154\144\137\x69\x64\x2c\142\154\144\x5f\x6e\141\x6d\x65\40\146\162\x6f\155\x20{$this->_table}"); goto ktetU; AiNpJ: } public function getBuildingPaginate($gBaOn) { goto M5Ysb; M5Ysb: $this->paginate("\x73\x65\154\145\x63\164\x20{$this->_table}\56\x2a", "\x66\162\157\x6d\x20{$this->_table}"); goto FxW0f; an9hk: $this->_where[] = "\x6c\157\x77\x65\x72\x28\142\154\144\137\x6e\x61\x6d\145\51\40\154\x69\153\145\40\47\45\x27\x20\174\x7c\40\x6c\157\x77\145\x72\x28\x3a\x66\x5f\142\154\144\137\156\x61\155\145\x29\40\174\174\40\x27\x25\x27"; goto RDlS_; FxW0f: if (empty($gBaOn["\146\x5f\x62\154\144\137\x6e\141\x6d\x65"])) { goto uVRlE; } goto an9hk; Edpnu: return parent::fetchAll($gBaOn); goto GLW8v; dMjv1: if (empty($gBaOn["\146\x5f\142\x6c\144\x5f\x6e\157"])) { goto u8gtm; } goto l0T3U; EjhWP: $this->_order[] = "\142\x6c\x64\137\x6e\x61\155\x65\x20\101\x53\103"; goto Edpnu; RDlS_: uVRlE: goto dMjv1; ja8VV: u8gtm: goto EjhWP; l0T3U: $this->_where[] = "\154\x6f\167\x65\x72\x28\142\154\144\137\x6e\x6f\51\x20\x6c\x69\x6b\x65\40\x27\x25\x27\40\174\x7c\40\x6c\157\167\x65\x72\50\72\x66\137\142\154\x64\137\156\x6f\51\x20\174\174\40\47\x25\47"; goto ja8VV; GLW8v: } public function getBuildingDet($gBaOn) { goto xlBUr; xlBUr: $this->query("\x73\x65\154\x65\x63\164\x20{$this->_table}\x2e\x2a\12\11\11\11\11\x66\x72\x6f\x6d\40{$this->_table}\40"); goto DE8uw; CqK9P: return parent::fetchRow($gBaOn); goto VX9_k; rS1Se: $this->_where[] = "\142\154\144\137\x69\144\x3d\x20\72\142\x6c\x64\137\x69\144"; goto l9hfW; DE8uw: if (empty($gBaOn["\142\154\144\137\151\x64"])) { goto q3TFO; } goto rS1Se; l9hfW: q3TFO: goto CqK9P; VX9_k: } public function getBuildingDetById($KUJqN) { return parent::getById($KUJqN); } }
