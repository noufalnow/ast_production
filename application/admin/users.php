<?php
/*   __________________________________________________
    |  ##CreativeSol Management Information System##   |
    |__________________________________________________|
*/
 class usersController extends mvc { public function indexAction() { goto S6c83; l4kut: $this->view->filter_class = $DzfVD; goto hjas7; POZye: $nfQcj = new user(); goto ifQ7r; LMyQh: unset($_GET); goto OYv3J; fliFm: $khXC2 = $khXC2[0]; goto Juf1a; Mk_nH: $DzfVD = "\x62\x74\156\x2d\151\156\x66\x6f"; goto KDWiv; BJ6Zh: $this->view->form = $ftUU2; goto Zb0CV; M2mDN: $this->view->roll = $OYoTn; goto l4kut; T0oqb: $ftUU2->addElement("\x66\x5f\154\156\x61\155\145", "\x4c\141\x73\164\x20\116\141\x6d\x65\40", "\164\x65\x78\164", ''); goto KIB1s; Zb0CV: $this->view->userObj = $nfQcj; goto M2mDN; OYv3J: U_e0U: goto GD4vB; KIB1s: $ftUU2->addElement("\146\137\165\156\x61\x6d\145", "\125\x73\145\162\x20\x4e\141\155\145\x20", "\x74\145\170\164", ''); goto iQVCb; qhNok: HnD7d: goto Mk_nH; iQVCb: $ftUU2->addElement("\x66\x5f\x64\145\163\151\147", "\122\157\154\x65\40\x70\162\x69\x76\151\x6c\x65\147\145", "\x73\145\x6c\145\x63\164", '', array("\x6f\160\x74\151\157\156\x73" => $OYoTn)); goto W7hC3; h84MD: include "\41\x6d\157\x64\x65\154\x2f\165\163\145\162\56\160\x68\x70"; goto POZye; u9G00: if (!(isset($_GET) && count($_GET) > 0)) { goto H0tzF; } goto IceIA; O3BuV: $ftUU2->reset(); goto LMyQh; l19bM: $OYoTn = array(1 => "\x41\144\x6d\x69\156", 2 => "\x44\x69\162\x65\x63\164\x6f\x72", 3 => "\115\141\x6e\x61\147\x65\x72", 4 => "\x41\143\143\157\165\156\x74\x61\156\x74", 5 => "\123\x61\x6c\x65\x73", 6 => "\120\165\162\143\150\141\163\x65", 7 => "\x4d\x61\151\156\164\145\156\141\156\143\x65", 8 => "\x4f\146\x66\151\x63\145\40\x41\163\x73\x69\163\x74\141\156\x74"); goto NTKpl; W7hC3: $_GET = array_filter($_GET); goto BZ7VK; Juf1a: if (!($khXC2 == true)) { goto HnD7d; } goto nYbeh; nYbeh: $fNpHp = array("\x75\x73\145\162\x5f\x66\x6e\x61\x6d\x65" => @$khXC2["\146\x5f\x66\156\141\x6d\145"], "\x75\x73\145\162\x5f\x6c\x6e\x61\x6d\145" => @$khXC2["\146\x5f\x6c\x6e\141\x6d\x65"], "\x75\163\145\x72\137\165\x6e\141\155\145" => @$khXC2["\x66\x5f\x75\156\141\x6d\x65"], "\x75\x73\x65\162\x5f\144\x65\163\151\x67" => @$khXC2["\x66\x5f\x64\x65\x73\151\147"]); goto qhNok; KDWiv: H0tzF: goto h84MD; ifQ7r: $this->view->usersList = $nfQcj->getUsersPaginate(@$fNpHp); goto BJ6Zh; IceIA: $khXC2 = $ftUU2->vaidate($_GET); goto fliFm; GD4vB: $DzfVD = "\142\164\156\55\x70\162\x69\x6d\141\x72\x79"; goto u9G00; S6c83: $ftUU2 = new form(); goto l19bM; BZ7VK: if (!(isset($_GET) && $_GET["\143\154\145\141\162"] == "\101\x6c\x6c")) { goto U_e0U; } goto O3BuV; NTKpl: $ftUU2->addElement("\x66\x5f\x66\x6e\141\155\x65", "\106\x69\162\163\x74\40\116\141\x6d\145\x20", "\164\145\x78\x74", ''); goto T0oqb; hjas7: } public function addAction() { goto LlncW; h_udy: $this->view->NoViewRender = true; goto lSIZt; yJl1i: $YSSGV->setmodulesAction(array("\165\x73\x65\x72\163" => $webcg, "\165\147\x5f\164\x61\x72\147\145\x74" => $khXC2["\x64\x65\163\151\147"])); goto EZwjt; snlxR: $WUkwG = array("\165\x62\x72\x5f\151\156\151\x74\137\x62\162\x61\156\143\150" => 1, "\165\x62\162\x5f\x69\156\151\164\137\165\163\145\162" => 1, "\165\x62\162\137\x62\x72\141\156\143\150" => $khXC2["\142\x72\x61\x6e\143\150"]); goto QirhW; v1cSk: $ftUU2->uname->setError("\x55\163\145\x72\40\156\x61\155\145\40\141\x6c\x72\x65\x61\x64\171\40\x73\x65\154\145\143\x74\x65\x64\40\x62\x79\40\x6f\164\x68\x65\x72\x20\x75\x73\x65\x72"); goto wGOp1; wGOp1: zSjVB: goto QpoDj; Gi2fT: $ftUU2->addElement("\145\155\141\x69\x6c", "\x65\x2d\155\x61\151\x6c\x20", "\x74\x65\x78\164", "\x72\x65\x71\165\x69\162\145\144\174\166\x61\154\151\144\x5f\145\155\141\151\x6c"); goto QgV3q; LlncW: $this->view->NoViewRender = false; goto PphZF; QpoDj: u834F: goto drrSt; jlV81: $ftUU2->addElement("\154\156\141\x6d\x65", "\114\x61\163\164\x20\116\x61\x6d\145\40", "\x74\145\170\x74", "\162\145\161\165\x69\x72\145\x64\174\141\x6c\160\150\x61\x5f\x73\160\141\x63\x65"); goto VPwQe; QirhW: require_once __DIR__ . "\57\x2e\56\57\141\x63\x6c\x2f\143\157\156\146\x69\147\x2e\160\x68\160"; goto qIjWK; dtVyS: $ftUU2->addElement("\x70\x61\x73\163\x77\157\162\144", "\120\x61\163\x73\167\x6f\x72\x64", "\160\x61\163\163\167\x6f\162\x64", "\x72\145\x71\165\151\x72\x65\x64"); goto e9PDU; HD2Yd: Q9quE: goto ghUhR; BQV1Z: $khXC2 = $khXC2[0]; goto Tpsem; RPnGL: TcLcJ: goto kfjA9; hkNzw: ISuPu: goto v1cSk; NRWZH: $ftUU2 = new form(); goto AqHjy; AqHjy: $OYoTn = array(1 => "\x41\x64\x6d\151\156", 2 => "\x44\151\162\145\x63\x74\157\x72", 3 => "\x4d\x61\x6e\x61\147\145\162", 4 => "\x41\x63\x63\157\x75\156\164\141\x6e\164", 5 => "\x53\141\x6c\145\163", 6 => "\x50\x75\x72\143\x68\141\x73\x65", 7 => "\115\x61\x69\x6e\164\x65\x6e\x61\x6e\x63\145", 8 => "\117\x66\x66\151\x63\145\40\101\163\x73\151\x73\x74\x61\156\164"); goto TkcPP; Tpsem: if ($khXC2 == true) { goto TcLcJ; } goto uuJMZ; uuJMZ: $_SESSION["\x65\x72\162\x6f\162"] = "\125\x73\x65\x72\x20\x64\145\x74\141\x69\x6c\x73\40\141\x64\144\145\144\x20\145\162\x72\157\x72"; goto r2gA0; drrSt: S0_rJ: goto b5bq5; QgV3q: if (!(isset($_POST) && count($_POST) > 0)) { goto S0_rJ; } goto wgLJ9; MAKUg: $sLNaE = new user(); goto C6B7k; PkiJo: $webcg = $sLNaE->add($WUkwG); goto kDerI; nIcC3: $ftUU2->addElement("\x73\164\x61\164\x75\163", "\x53\164\x61\164\165\x73", "\162\141\144\x69\157", "\162\145\161\x75\151\x72\145\144", array("\x6f\x70\x74\x69\x6f\x6e\163" => array(1 => "\105\x6e\x61\142\154\145", 2 => "\104\151\x73\141\x62\154\145"))); goto ampe2; e9PDU: $ftUU2->addElement("\144\x65\x73\151\147", "\122\x6f\x6c\145", "\x73\x65\154\145\143\x74", "\x72\145\x71\x75\x69\162\x65\x64", array("\157\x70\164\x69\x6f\x6e\163" => $OYoTn)); goto nIcC3; M620Q: $IkZLJ = new employee(); goto t946F; mbH0r: die($PVfmK); goto HD2Yd; r2gA0: goto u834F; goto RPnGL; ampe2: $ftUU2->addElement("\x65\x6d\x70\154\157\x79\x65\145", "\x45\x6d\x70\154\157\171\145\x65", "\163\x65\154\145\143\164", "\x72\145\x71\x75\151\x72\x65\x64", array("\157\160\x74\x69\x6f\156\163" => $WYEOc)); goto Gi2fT; C6B7k: $Kg8A1 = $sLNaE->getUser(array("\165\163\145\x72\137\165\156\141\x6d\x65" => $khXC2["\165\x6e\x61\155\145"])); goto jylCg; VPwQe: $ftUU2->addElement("\165\156\x61\x6d\145", "\x55\163\145\162\x20\x4e\x61\155\x65\x20", "\x74\x65\170\x74", "\x72\x65\x71\x75\151\162\145\x64\x7c\141\x6c\x70\150\x61\x5f\x73\x70\141\143\x65", '', ["\141\x75\x74\x6f\x63\x6f\155\x70\154\x65\x74\x65" => "\x6e\145\167\55\x70\x61\x73\x73\x77\x6f\x72\144"]); goto dtVyS; ghUhR: goto zSjVB; goto hkNzw; lePJ0: $_SESSION["\146\145\145\144\142\141\143\x6b"] = $j8UXx; goto Y3apI; lSIZt: $PVfmK = array("\146\145\145\x64\x62\141\x63\x6b" => $j8UXx); goto lePJ0; EZwjt: $j8UXx = "\125\x73\x65\162\40\144\x65\164\x61\151\154\x73\x20\141\144\144\145\x64\40\x73\x75\143\143\145\x73\163\x66\x75\x6c\154\171\x20\x20\x2e"; goto h_udy; wgLJ9: $khXC2 = $ftUU2->vaidate($_POST, $_FILES); goto BQV1Z; kfjA9: require_once __DIR__ . "\x2f\56\56\57\141\144\155\151\156\x2f\41\x6d\x6f\x64\x65\154\x2f\x75\x73\145\x72\x2e\160\x68\160"; goto MAKUg; TkcPP: $ftUU2->addElement("\x66\156\141\x6d\x65", "\x46\x69\x72\x73\x74\x20\x4e\x61\x6d\x65\40", "\164\x65\x78\164", "\162\x65\x71\165\151\x72\x65\144\x7c\x61\154\160\150\141\137\x73\160\x61\x63\145"); goto jlV81; b5bq5: $this->view->form = $ftUU2; goto AGB9N; vaY7T: $WUkwG = array("\x75\x73\x65\x72\137\146\156\x61\155\x65" => $khXC2["\x66\156\x61\x6d\145"], "\x75\x73\x65\x72\x5f\154\156\x61\x6d\145" => $khXC2["\x6c\x6e\141\x6d\145"], "\x75\x73\x65\x72\x5f\165\156\x61\x6d\x65" => $khXC2["\x75\156\141\x6d\145"], "\165\163\x65\162\x5f\x70\141\163\x73\x77\157\x72\144" => password_hash($khXC2["\x70\x61\163\163\167\157\162\144"], PASSWORD_DEFAULT), "\x75\x73\x65\x72\x5f\x64\145\163\x69\147" => $khXC2["\144\145\x73\151\x67"], "\x75\163\145\162\x5f\x73\164\141\x74\165\x73" => $khXC2["\x73\x74\141\164\x75\x73"], "\165\x73\x65\162\x5f\x65\155\x70\137\x69\144" => $khXC2["\x65\155\160\x6c\157\x79\145\x65"] == '' ? NULL : $khXC2["\x65\x6d\x70\154\x6f\171\x65\145"]); goto PkiJo; kDerI: if (!$webcg) { goto Q9quE; } goto snlxR; zC5qu: require_once __DIR__ . "\x2f\56\x2e\57\x61\144\x6d\151\x6e\x2f\41\155\157\x64\145\x6c\57\x65\x6d\x70\154\157\171\x65\x65\56\160\x68\160"; goto M620Q; PphZF: $this->view->response("\x61\152\141\x78"); goto zC5qu; jylCg: if ($Kg8A1["\x75\x73\x65\x72\137\x69\x64"]) { goto ISuPu; } goto vaY7T; qIjWK: $YSSGV = new configController(); goto yJl1i; t946F: $WYEOc = $IkZLJ->getEmployeePair(); goto NRWZH; Y3apI: $PVfmK = json_encode($PVfmK); goto mbH0r; AGB9N: } public function editAction() { goto Y1vXY; pIQpk: $YBy6m = $sLNaE->getUserById($KtzFU); goto D9Gxo; xZVVQ: j1T9L: goto MDyVG; fSMo6: $KtzFU = $this->view->decode($this->view->param["\x72\x65\146"]); goto tgFd5; IXSSR: $ftUU2->email->setValue($YBy6m["\x75\x73\x65\162\x5f\145\x6d\x61\x69\154"]); goto nquGj; oZ6pz: DP7F3: goto hIyoC; z7VvB: $OYoTn = array(1 => "\101\144\155\151\x6e", 2 => "\x44\151\x72\x65\x63\x74\157\162", 3 => "\x4d\141\x6e\x61\x67\x65\x72", 4 => "\x41\143\143\x6f\165\156\164\141\156\164", 5 => "\x53\x61\154\145\163", 6 => "\120\165\162\143\x68\141\163\145", 7 => "\115\141\151\156\164\x65\156\x61\x6e\143\145", 8 => "\117\x66\146\151\143\x65\x20\101\x73\163\151\163\x74\x61\x6e\x74"); goto DFaV2; L6SGC: $khXC2 = $khXC2[0]; goto feVu0; MDyVG: $j8UXx = "\x55\163\x65\162\40\144\x65\x74\x61\151\x6c\163\x20\165\x70\144\x61\164\145\x64\40\x73\x75\x63\x63\145\163\163\146\165\154\154\171\x20\x20\x2e"; goto ovLYF; dsj6w: $ftUU2->lname->setValue($YBy6m["\165\x73\145\162\137\154\x6e\141\x6d\x65"]); goto SP3j7; HRdBb: $YSSGV = new configController(); goto Y23x9; AuX5T: e725K: goto sfhQC; NAFmv: $PVfmK = array("\x66\x65\145\144\142\x61\143\153" => $j8UXx); goto eK2QS; Q3NsG: $khXC2 = $ftUU2->vaidate($_POST, $_FILES); goto L6SGC; kNfwC: $ftUU2->addElement("\x65\x6d\x61\x69\x6c", "\145\x2d\155\x61\x69\154\x20", "\164\x65\x78\x74", ''); goto A7XN8; YMdOR: require_once __DIR__ . "\57\56\x2e\57\x61\x63\x6c\57\143\x6f\156\146\x69\147\56\160\150\160"; goto HRdBb; oaGKO: $WYEOc = $IkZLJ->getEmployeePair(); goto Jusjz; k1mTd: $ftUU2->addElement("\163\x74\x61\x74\165\x73", "\x53\164\x61\164\x75\163", "\162\141\x64\151\x6f", "\x72\145\x71\x75\151\x72\x65\x64", array("\x6f\160\x74\151\x6f\156\x73" => array(1 => "\105\x6e\x61\142\154\145", 2 => "\x44\x69\163\141\142\154\x65"))); goto VcV4p; EFvJe: if (!($_POST["\164\x79\x70\145"] == 2)) { goto Cco0P; } goto lh6cI; nquGj: goto Lt3OI; goto Qlni1; srylZ: $this->view->form = $ftUU2; goto lJ6BD; tUl_j: $ftUU2->addElement("\x6c\x6e\141\155\145", "\x4c\x61\x73\164\40\x4e\141\155\145\x20", "\x74\145\x78\x74", "\x72\145\161\x75\151\162\x65\x64\174\x61\154\x70\x68\x61\x5f\x73\x70\x61\x63\x65"); goto T8MTv; Djrk9: LLbJr: goto VpHlY; HBNlB: $this->view->response("\141\x6a\141\170"); goto N36p2; N36p2: require_once __DIR__ . "\57\x2e\x2e\57\x61\144\155\x69\156\57\41\x6d\x6f\144\145\154\57\165\163\145\x72\x2e\160\150\x70"; goto B2mog; PRKiE: $ftUU2->_rules[password] = "\x72\145\161\165\x69\162\x65\x64\x7c\155\x69\156\137\154\145\156\x2c\x34"; goto XahCQ; ZshdU: $A3Dx0 = $sLNaE->modify($WUkwG, $KtzFU); goto aMFab; D9Gxo: $ftUU2->fname->setValue($YBy6m["\165\x73\145\162\137\x66\x6e\x61\155\x65"]); goto dsj6w; Y23x9: $YSSGV->deleteaccessAction(array("\165\x73\x65\162\163" => $KtzFU)); goto MoU9n; SP3j7: $ftUU2->desig->setValue($YBy6m["\165\163\x65\162\x5f\144\x65\x73\151\x67"]); goto qNeum; iUwQ4: $WUkwG = array("\x75\163\x65\x72\x5f\146\156\x61\155\145" => $khXC2["\x66\156\x61\155\145"], "\x75\x73\145\x72\137\154\156\x61\155\145" => $khXC2["\154\x6e\141\x6d\x65"], "\x75\163\145\162\x5f\144\x65\x73\x69\147" => $khXC2["\x64\x65\163\x69\147"], "\165\x73\x65\x72\137\163\x74\141\x74\x75\163" => $khXC2["\x73\x74\141\x74\x75\163"], "\x75\x73\145\x72\x5f\145\x6d\x70\x5f\151\x64" => $khXC2["\x65\155\x70\x6c\x6f\x79\x65\145"] == '' ? NULL : $khXC2["\145\x6d\x70\154\x6f\x79\145\145"], "\165\x73\145\162\137\x65\x6d\141\x69\154" => $khXC2["\145\155\141\x69\x6c"] == '' ? NULL : $khXC2["\x65\155\x61\151\154"]); goto ZshdU; ovLYF: $this->view->NoViewRender = true; goto NAFmv; lh6cI: $ftUU2->_rules[uname] = "\162\145\x71\165\x69\162\x65\144\174\141\x6c\x70\x68\x61\x5f\x73\x70\141\x63\x65"; goto RZqzd; Qlni1: zySd7: goto i2CXu; eK2QS: $_SESSION["\x66\145\x65\x64\142\x61\x63\x6b"] = $j8UXx; goto qo7Eq; sfhQC: goto DP7F3; goto Djrk9; XahCQ: b07ZR: goto Ei_3s; MoU9n: $YSSGV = new configController(); goto ffXpQ; DFaV2: $ftUU2->addElement("\146\x6e\141\x6d\x65", "\x46\x69\162\163\164\40\x4e\x61\x6d\x65\40", "\164\145\170\164", "\x72\145\161\165\151\x72\x65\x64\x7c\141\x6c\160\x68\141\x5f\163\x70\141\143\x65"); goto tUl_j; Q6cUM: $ftUU2 = new form(); goto z7VvB; W1VHx: if (!(strcmp((int) $khXC2["\x64\x65\163\151\x67"], $YBy6m["\x75\x73\x65\162\x5f\x64\145\x73\x69\x67"]) != "\60")) { goto j1T9L; } goto YMdOR; hIyoC: Lt3OI: goto srylZ; T8MTv: $ftUU2->addElement("\144\x65\x73\151\x67", "\x52\x6f\154\x65", "\x73\145\x6c\x65\143\x74", "\x72\145\x71\165\151\162\145\x64", array("\x6f\160\x74\x69\x6f\156\x73" => $OYoTn)); goto k1mTd; rAyTm: die("\x74\x61\x6d\160\x65\162\x65\x64"); goto E3s3c; Ei_3s: Cco0P: goto Q3NsG; i2CXu: if (!isset($_SERVER["\x48\x54\124\120\x5f\x58\137\x52\105\121\125\105\123\x54\x45\104\137\127\x49\x54\110"]) and strtolower($_SERVER["\110\124\x54\x50\137\130\137\x52\x45\x51\125\x45\123\124\x45\104\x5f\127\x49\x54\110"]) != "\x78\155\x6c\x68\164\x74\160\162\x65\161\x75\x65\163\164") { goto LLbJr; } goto EFvJe; VpHlY: die("\55\55\x2d"); goto oZ6pz; aMFab: if (!$A3Dx0) { goto fc2mn; } goto W1VHx; VcV4p: $ftUU2->addElement("\x65\x6d\x70\x6c\x6f\x79\145\x65", "\105\155\x70\x6c\x6f\171\145\x65", "\x73\x65\154\145\x63\x74", "\162\145\x71\x75\x69\162\145\144", array("\x6f\160\164\x69\157\x6e\x73" => $WYEOc)); goto kNfwC; sT2_2: fc2mn: goto AuX5T; C0D0p: $IkZLJ = new employee(); goto oaGKO; RZqzd: if (!($_POST["\160\141\x73\163\167\x6f\x72\x64"] != '')) { goto b07ZR; } goto PRKiE; ffXpQ: $YSSGV->setmodulesAction(array("\165\163\145\162\x73" => $KtzFU, "\165\x67\x5f\x74\141\x72\147\x65\164" => $khXC2["\144\x65\x73\x69\x67"])); goto xZVVQ; uEhDz: $ftUU2->employee->setValue($YBy6m["\x75\163\x65\162\137\x65\155\160\x5f\151\x64"]); goto IXSSR; B2mog: require_once __DIR__ . "\x2f\56\x2e\x2f\x61\144\155\151\x6e\x2f\41\155\157\x64\x65\x6c\57\x65\x6d\160\154\157\171\145\145\56\x70\x68\160"; goto C0D0p; Y1vXY: $this->view->NoViewRender = false; goto HBNlB; qo7Eq: $PVfmK = json_encode($PVfmK); goto ikhEh; oQCKO: if ($KtzFU) { goto vOlU0; } goto rAyTm; feVu0: if (!($khXC2 == true)) { goto e725K; } goto iUwQ4; ikhEh: die($PVfmK); goto sT2_2; tgFd5: $YBy6m = $sLNaE->getUserById($KtzFU); goto oQCKO; qNeum: $ftUU2->status->setValue($YBy6m["\x75\x73\145\162\137\163\164\x61\164\x75\x73"]); goto uEhDz; E3s3c: vOlU0: goto Q6cUM; Jusjz: $ftUU2 = new form(); goto NUXXZ; A7XN8: if ($_POST) { goto zySd7; } goto pIQpk; NUXXZ: $sLNaE = new user(); goto fSMo6; lJ6BD: } public function deleteAction() { goto DN1Qx; GsTAN: $KtzFU = $this->view->decode($this->view->param["\162\145\x66"]); goto BxR2V; BxR2V: if ($KtzFU) { goto bQL2C; } goto jqVGG; zcj0K: $this->view->userDetail = $sLNaE->getUserById($KtzFU); goto NVq4B; fXFjX: if (!$OTpI4) { goto cbt1U; } goto fE45i; upJwD: $this->view->formRender = true; goto q7fTm; Kq1Dy: $ftUU2 = new form(); goto sxdSz; q_JHJ: $this->view->form = $ftUU2; goto ZHRFE; qfr6z: die("\x2d\x2d\x2d"); goto MG25o; TZR2_: cbt1U: goto eT7VX; HL6Q3: $PVfmK = json_encode($PVfmK); goto EtlEY; sxdSz: $sLNaE = new user(); goto GsTAN; eT7VX: goto Q7SW0; goto YKedT; CNrqN: $PVfmK = array("\x66\145\145\x64\142\141\x63\x6b" => "\124\x68\145\x20\x75\163\x65\x72\40\150\141\x73\40\142\x65\145\156\40\x64\145\x6c\x65\x74\x65\144\40\163\x75\143\x63\145\163\163\x66\165\x6c\154\171\x20\146\x72\157\x6d\x20\x74\x68\145\x20\163\171\x73\164\145\155\x20\40\x2e"); goto gfKtp; YKedT: uivFU: goto qfr6z; jqVGG: die("\164\x61\155\x70\145\x72\x65\x64"); goto zYJnx; NVq4B: if (!$_POST) { goto cNRzJ; } goto g4Npn; EtlEY: die($PVfmK); goto TZR2_; pfJYm: $OTpI4 = $sLNaE->deleteUser($KtzFU); goto fXFjX; gfKtp: $_SESSION["\x66\x65\145\x64\142\x61\x63\x6b"] = "\x54\x68\145\x20\165\163\x65\162\x20\150\x61\163\40\x62\145\145\x6e\x20\144\x65\x6c\145\164\x65\x64\40\x73\165\x63\x63\x65\163\x73\146\165\x6c\154\171\40\146\162\x6f\155\40\x74\150\x65\40\x73\171\x73\x74\145\155\x20"; goto HL6Q3; q7fTm: $this->view->response("\x61\x6a\141\x78"); goto Kq1Dy; gcu1D: cNRzJ: goto q_JHJ; DN1Qx: require_once __DIR__ . "\57\56\56\x2f\141\144\x6d\x69\x6e\57\41\155\x6f\x64\x65\154\x2f\x75\163\x65\162\56\x70\150\160"; goto upJwD; fE45i: $this->view->formRender = false; goto CNrqN; zYJnx: bQL2C: goto zcj0K; MG25o: Q7SW0: goto gcu1D; g4Npn: if (!isset($_SERVER["\110\x54\124\x50\137\x58\x5f\x52\x45\121\125\105\123\x54\105\104\137\x57\x49\x54\x48"]) and strtolower($_SERVER["\110\124\x54\120\137\130\x5f\x52\x45\121\x55\x45\x53\x54\105\104\137\127\111\124\110"]) != "\x78\155\x6c\x68\x74\164\x70\162\x65\x71\x75\145\x73\164") { goto uivFU; } goto pfJYm; ZHRFE: } public function changepwdAction() { goto zywm2; zywm2: require_once __DIR__ . "\57\x2e\56\x2f\141\144\155\x69\156\x2f\x21\155\157\144\145\x6c\57\165\163\145\x72\56\x70\150\x70"; goto Y1Gp2; TAFsX: YHTI4: goto enS0Z; V5awu: $this->view->response("\141\152\141\170"); goto EaAEX; TsPx1: die($PVfmK); goto ck_3J; lLMZa: if (!isset($_SERVER["\110\124\124\x50\137\x58\137\122\x45\x51\125\105\x53\x54\x45\x44\x5f\127\111\x54\110"]) and strtolower($_SERVER["\110\124\x54\120\x5f\130\x5f\x52\105\x51\x55\x45\x53\124\x45\104\137\x57\x49\124\110"]) != "\170\x6d\x6c\x68\164\x74\x70\162\x65\x71\x75\145\x73\164") { goto OcXEG; } goto t55gR; RKwFE: N1noQ: goto OSy3o; ck_3J: EaNCS: goto Ryt5Q; kxbWb: goto gXe21; goto W52_b; p38h3: if (!($khXC2 == true)) { goto ARjMn; } goto Sl0AH; Y1Gp2: $this->view->formRender = true; goto V5awu; VPHoe: if ($KtzFU) { goto MaCak; } goto vs99U; OSy3o: $WUkwG = array("\165\x73\x65\162\137\160\141\163\163\x77\157\x72\x64" => password_hash($khXC2["\x70\141\163\x73\x77\157\162\144"], PASSWORD_DEFAULT)); goto BAH1R; dDqfO: goto Q01Zi; goto hYgNT; a8sJc: $_SESSION["\x66\x65\145\144\142\141\x63\x6b"] = "\x4e\x65\x77\x20\x70\141\x73\163\x77\157\162\x64\x20\x75\x70\x64\141\164\x65\144\40\163\165\x63\x63\x65\163\x73\x66\x75\x6c\x6c\x79"; goto VdXIW; x3E8M: $sLNaE = new user(); goto lUNMq; lUNMq: $KtzFU = $this->view->decode($this->view->param["\x72\145\146"]); goto VPHoe; kHJSm: if (!$A3Dx0) { goto EaNCS; } goto gaOm_; TpXux: MaCak: goto tawzz; VdXIW: $PVfmK = json_encode($PVfmK); goto TsPx1; R79Gw: gXe21: goto TAFsX; Vm8T7: $khXC2 = $khXC2[0]; goto p38h3; vpBjP: if (!$_POST) { goto YHTI4; } goto lLMZa; W52_b: OcXEG: goto KKahn; Sl0AH: if (password_verify($khXC2["\157\154\x64\160\141\163\x73\x77\157\162\x64"], $this->view->userDetail["\x75\x73\x65\162\x5f\160\x61\163\163\x77\157\x72\x64"])) { goto tSVhz; } goto aJG03; tawzz: $this->view->userDetail = $sLNaE->getUserById($KtzFU); goto tBreS; gaOm_: $this->view->NoViewRender = true; goto TEdsw; vs99U: die("\164\141\155\160\145\162\x65\x64"); goto TpXux; aJG03: $ftUU2->oldpassword->setError("\x57\x72\157\x6e\x67\x20\160\x61\x73\163\167\157\162\144"); goto dDqfO; EaAEX: $ftUU2 = new form(); goto x3E8M; dEByV: $ftUU2->conPassword->_error = "\x50\141\x73\x73\x77\x6f\x72\144\x20\x6d\151\x73\155\141\164\143\150"; goto PgMzh; K9JQK: $ftUU2->addElement("\143\x6f\156\x50\141\x73\163\x77\x6f\x72\144", "\103\x6f\x6e\146\x69\x72\155\40\160\x61\163\163\x77\157\162\x64", "\160\x61\x73\x73\x77\157\x72\144", "\162\x65\161\165\x69\162\145\x64"); goto vpBjP; hYgNT: tSVhz: goto Fg7sR; pRYlx: Q01Zi: goto azqu2; azqu2: ARjMn: goto kxbWb; enS0Z: $this->view->form = $ftUU2; goto SF5y7; KKahn: die("\55\55\55"); goto R79Gw; Khc9v: $ftUU2->password->_error = "\x50\x61\163\x73\167\x6f\x72\x64\40\155\151\x73\x6d\141\x74\x63\x68"; goto dEByV; TEdsw: $PVfmK = array("\146\x65\x65\x64\x62\141\143\153" => "\116\x65\x77\40\160\141\x73\163\x77\x6f\162\144\x20\x75\x70\144\x61\164\145\144\40\x73\165\143\143\x65\x73\x73\146\165\x6c\x6c\171\56"); goto a8sJc; PgMzh: goto sey_8; goto RKwFE; BAH1R: $A3Dx0 = $sLNaE->modify($WUkwG, $KtzFU); goto kHJSm; tBreS: $ftUU2->addElement("\x6f\x6c\144\x70\141\163\163\x77\157\162\x64", "\117\154\x64\40\160\141\163\x73\167\x6f\x72\x64", "\x70\x61\x73\x73\167\157\x72\x64", "\162\145\x71\x75\x69\162\x65\144"); goto oLJIj; t55gR: $khXC2 = $ftUU2->vaidate($_POST); goto Vm8T7; Ryt5Q: sey_8: goto pRYlx; Fg7sR: if ($khXC2["\160\x61\163\x73\167\x6f\162\x64"] == $khXC2["\143\157\156\x50\141\163\x73\167\157\x72\x64"]) { goto N1noQ; } goto Khc9v; oLJIj: $ftUU2->addElement("\160\141\163\163\x77\x6f\x72\144", "\120\x61\x73\163\167\x6f\x72\x64", "\160\141\163\x73\x77\x6f\162\144", "\162\x65\x71\165\x69\x72\145\144"); goto K9JQK; SF5y7: } public function resetAction() { goto UxHvl; U7dkS: goto eFCaj; goto wQmp2; NTwKa: if (!$A3Dx0) { goto mCVMs; } goto VeTJU; vxxzB: $WUkwG = array("\165\163\145\x72\x5f\160\x61\x73\x73\x77\157\x72\x64" => password_hash($khXC2["\x70\x61\163\163\167\x6f\x72\144"], PASSWORD_DEFAULT)); goto hAZOn; gOfsO: klPEI: goto gVi3N; KeGYQ: die("\x2d\x2d\55"); goto KRJZT; wQmp2: NWn9Z: goto KeGYQ; XjRDG: mCVMs: goto QH0_4; m3yu_: $PVfmK = array("\146\x65\x65\144\x62\x61\x63\x6b" => "\120\x61\163\163\x77\x6f\162\144\x20\x72\145\x73\145\x74\x20\144\x6f\156\145\40\163\165\x63\143\x65\163\x73\x66\x75\x6c\154\x79\40\56"); goto CGs1k; xBPd6: $this->view->response("\141\x6a\x61\x78"); goto Ilep5; PLirq: $khXC2 = $ftUU2->vaidate($_POST); goto Usj9C; QH0_4: cyAfb: goto EEs4N; vfM_a: goto cyAfb; goto f76MU; Pnc6T: die("\164\141\155\x70\x65\162\x65\144"); goto eMhKJ; ZDGqQ: if ($KtzFU) { goto bUHQF; } goto Pnc6T; f76MU: deDcR: goto vxxzB; UxHvl: require_once __DIR__ . "\x2f\56\x2e\57\x61\x64\155\151\x6e\57\x21\x6d\157\x64\x65\154\x2f\165\163\145\162\56\160\x68\x70"; goto xBPd6; PS5SJ: $sLNaE = new user(); goto ETQI3; T3V2A: die($PVfmK); goto XjRDG; KRJZT: eFCaj: goto gOfsO; CGs1k: $_SESSION["\146\145\145\x64\x62\x61\143\x6b"] = "\x50\x61\x73\163\x77\157\162\x64\x20\x72\145\x73\145\x74\x20\x64\157\156\145\x20\163\x75\x63\x63\x65\163\163\x66\x75\154\x6c\x79"; goto qdo04; bIyiQ: if (!$_POST) { goto klPEI; } goto JMUKm; cjwXG: $ftUU2->addElement("\143\157\156\120\141\163\163\167\x6f\x72\144", "\x43\157\155\146\151\x72\x6d\x20\x70\141\163\x73\167\x6f\x72\144", "\160\141\163\x73\x77\x6f\x72\x64", "\x72\145\161\x75\x69\x72\x65\x64"); goto bIyiQ; gVi3N: $this->view->form = $ftUU2; goto DWPV3; JMUKm: if (!isset($_SERVER["\110\124\124\x50\x5f\130\137\x52\105\x51\125\105\123\124\105\104\137\x57\111\124\x48"]) and strtolower($_SERVER["\110\x54\x54\x50\137\130\137\122\105\121\x55\x45\123\124\105\104\137\x57\111\x54\110"]) != "\170\x6d\154\x68\164\x74\x70\x72\x65\x71\x75\145\x73\x74") { goto NWn9Z; } goto PLirq; EEs4N: epzPX: goto U7dkS; ETQI3: $KtzFU = $this->view->decode($this->view->param["\x72\x65\x66"]); goto ZDGqQ; Usj9C: $khXC2 = $khXC2[0]; goto bpq9V; TJ6kP: $ftUU2->password->_error = "\x50\x61\163\x73\167\x6f\162\144\x20\x6d\151\x73\155\x61\164\143\150"; goto J1Ih2; hAZOn: $A3Dx0 = $sLNaE->modify($WUkwG, $KtzFU); goto NTwKa; VeTJU: $this->view->NoViewRender = true; goto m3yu_; bR7yD: if ($khXC2["\x70\141\x73\163\167\157\162\144"] == $khXC2["\143\x6f\156\120\141\x73\x73\167\x6f\162\x64"]) { goto deDcR; } goto TJ6kP; qdo04: $PVfmK = json_encode($PVfmK); goto T3V2A; Ilep5: $ftUU2 = new form(); goto PS5SJ; uWEo9: $this->view->userDetail = $sLNaE->getUserById($KtzFU); goto I1bPs; J1Ih2: $ftUU2->conPassword->_error = "\x50\141\x73\163\x77\x6f\x72\144\x20\x6d\x69\x73\155\141\164\x63\150"; goto vfM_a; I1bPs: $ftUU2->addElement("\x70\x61\x73\163\167\157\162\x64", "\x50\141\163\x73\x77\157\x72\144", "\x70\x61\163\x73\x77\157\x72\x64", "\x72\145\x71\x75\151\162\145\x64"); goto cjwXG; eMhKJ: bUHQF: goto uWEo9; bpq9V: if (!($khXC2 == true)) { goto epzPX; } goto bR7yD; DWPV3: } public function viewAction() { goto GyczQ; GYvdS: $this->view->roll = array(1 => "\116\x6f\x72\155\x61\154\40\x43\157\x6e\x74\141\143\x74", 2 => "\x50\162\x65\166\151\x6c\154\x65\147\145\144\40\103\x6f\156\164\141\143\164"); goto zwAcr; vBNar: $KtzFU = $this->view->decode($this->view->param["\x72\x65\x66"]); goto dwhjL; kq7re: ACMPK: goto YMvK1; YXqnv: $this->view->response("\141\x6a\x61\170"); goto M4kHz; YMvK1: $this->view->userDetail = $sLNaE->getUserById($KtzFU); goto GYvdS; zAve7: die("\x74\x61\x6d\160\145\x72\145\x64"); goto kq7re; GyczQ: require_once __DIR__ . "\x2f\56\x2e\x2f\x61\x64\155\151\x6e\57\41\x6d\157\x64\x65\x6c\57\165\x73\145\162\56\x70\150\x70"; goto YXqnv; M4kHz: $sLNaE = new user(); goto vBNar; dwhjL: if ($KtzFU) { goto ACMPK; } goto zAve7; zwAcr: $this->view->status = array(1 => "\x45\156\141\142\154\x65", 2 => "\x44\151\163\x61\142\154\145"); goto gc62J; gc62J: } public function getusersAction() { goto vyCoN; Tg0bq: $eqRIY = $TjRFl->getUsersPair(array("\165\x73\x65\x72\137\144\145\163\x69\x67" => $_POST["\x72\x65\146\x49\x64"])); goto YHvvg; AkDSl: die("\x2d\x2d\55"); goto P5JVO; YHvvg: $WUkwG[] = array("\153\x65\x79" => '', "\166\x61\x6c\165\145" => "\x20\x2d\55\x20\123\x65\154\145\143\164\40\x2d\x2d\40"); goto MR9rD; tvnbm: goto znokq; goto UKx24; yFJ8W: cZuoO: goto j7Ojz; FgPj4: S3Ohu: goto QLYuf; UKx24: Jxk0R: goto AkDSl; vyCoN: if (!$_POST) { goto S3Ohu; } goto yLmr7; t9026: HKl9F: goto yFJ8W; cItA3: $TjRFl = new user(); goto Tg0bq; yLmr7: if (!isset($_SERVER["\x48\124\x54\x50\x5f\x58\x5f\122\x45\121\125\x45\x53\124\x45\x44\137\127\x49\x54\110"]) and strtolower($_SERVER["\x48\x54\124\x50\x5f\130\x5f\x52\x45\121\x55\x45\x53\124\x45\104\137\127\111\124\x48"]) != "\x78\155\x6c\150\x74\164\160\x72\145\161\165\x65\x73\x74") { goto Jxk0R; } goto g6ZvP; g6ZvP: require_once __DIR__ . "\x2f\x21\155\157\144\145\154\x2f\165\163\145\162\x2e\x70\150\160"; goto cItA3; j7Ojz: $WUkwG = json_encode($WUkwG); goto GrZ92; GrZ92: die($WUkwG); goto tvnbm; P5JVO: znokq: goto FgPj4; MR9rD: if (!count($eqRIY)) { goto cZuoO; } goto um90a; um90a: foreach ($eqRIY as $G7bIX => $rOM12) { $WUkwG[] = array("\153\145\x79" => $G7bIX, "\x76\x61\x6c\165\145" => $rOM12); I7zXW: } goto t9026; QLYuf: } public function branchAction() { } }