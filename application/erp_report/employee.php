<?php
/*   __________________________________________________
    |  ##CreativeSol Management Information System##   |
    |__________________________________________________|
*/
 class employeeController extends mvc { public function empcontractAction() { goto M1qUo; dJbvx: $BVBV3 = $ckLc2->getEmpContractReport(); goto Ykh5T; RMQzm: $ckLc2 = new employee(); goto dJbvx; Ykh5T: $this->view->employeeList = $BVBV3; goto hDnR4; M1qUo: $this->view->response("\167\x69\156\144\x6f\167"); goto D2rgg; D2rgg: require_once __DIR__ . "\x2f\56\56\57\141\144\155\x69\156\x2f\41\x6d\x6f\144\145\x6c\57\x65\155\x70\154\x6f\x79\145\145\56\x70\x68\160"; goto RMQzm; hDnR4: } public function empdocumentAction() { goto ZZX_P; jb9y3: if (!($DnKg8 != "\160\x61\x73\x74" && $DnKg8 != "\x65\170\160")) { goto K4fBx; } goto O3QQK; cqMh2: $MdpZk->addElement("\146\137\144\145\163\x69\x67", "\104\x65\163\x69\x67\x6e\x61\x74\x69\157\156", "\x73\x65\x6c\x65\143\x74", '', array("\157\160\164\x69\157\156\163" => $AYCEM)); goto iMNT_; I560Z: if ($DnKg8 == "\160\141\163\x74") { goto izzl1; } goto Tbheo; htb2a: $OEXOb = "\x62\164\156\55\160\162\x69\155\x61\x72\x79"; goto hZ4_H; O27lD: KqAWj: goto wLCZG; cIg4Q: $dMgjG = array("\61" => "\x50\x61\x73\163\x70\157\x72\164", "\x32" => "\x52\x65\163\151\x64\x65\156\x74\40\x49\x44", "\63" => "\126\151\x73\x61", "\x34" => "\114\151\x63\x65\156\163\x65", "\65" => "\x49\156\163\x75\x72\141\156\x63\145", "\x36" => "\120\104\117\x20\x4c\x69\x63\x65\x6e\163\145", "\x37" => "\x50\104\x4f\40\120\141\163\x73\x70\x6f\162\164", "\x38" => "\x48\62\123\x20\x43\x61\162\x64", "\x39" => "\117\x58\x59\x20\120\x61\163\x73\160\157\x72\164", "\61\x30" => "\117\130\x59\40\x4c\151\143\145\x6e\163\145", "\x31\x31" => "\117\130\131\x20\110\62\123", "\61\62" => "\x57\x6f\x72\x6b\x20\103\x6f\x6e\x74\162\x61\x63\164", "\x31\x33" => "\x54\x68\x69\x72\144\x20\x70\x61\162\164\x79\40\x49\x6e\x73\x75\x72\141\156\143\145", "\61\x34" => "\106\x69\164\x6e\145\x73\163\x20\x4d\145\144\151\143\x61\x6c\40\122\145\x70\157\x72\x74", "\61\x35" => "\117\x70\141\154\40\115\145\x64\x69\x63\x61\x6c", "\61\66" => "\x4f\160\x61\154\x20\114\x43", "\x31\x37" => "\x4f\160\141\x6c\40\x50\141\163\x73\x70\x6f\x72\164", "\61\70" => "\117\160\x61\x6c\x20\x53\x61\146\x65\164\171\x20\x43\x65\162\x74\151\x66\151\143\x61\x74\145"); goto WGK0n; E8Itu: $DnKg8 = $this->view->param["\162\145\x66"]; goto jG_gu; jDU83: require_once __DIR__ . "\x2f\x2e\x2e\x2f\141\144\x6d\x69\x6e\x2f\x21\155\x6f\144\x65\154\57\143\157\x6d\x70\x5f\144\x65\160\141\162\164\155\x65\x6e\x74\x2e\x70\150\x70"; goto FGRXu; yAVa7: izzl1: goto lU7pr; uIZH0: if (!($VxLQ9 == true)) { goto KqAWj; } goto wSMTa; wLCZG: $OEXOb = "\142\x74\x6e\55\x69\156\146\x6f"; goto n2jU6; B71VL: J1DjZ: goto htb2a; csWaZ: $VxLQ9 = $VxLQ9[0]; goto uIZH0; gSosu: $f8Awd = new designation(); goto B8oZC; xtWFw: $dMGXR = "\105\155\x70\154\157\171\145\x65\x20\x44\x6f\143\x75\x6d\145\156\x74\x20\105\x78\160\151\x72\171\40\x52\x65\160\x6f\x72\164\x20\55\40\102\145\x66\x6f\x72\145\x20\40" . date_format(new DateTime(), "\x46"); goto AMdLt; iRwgA: $MdpZk->addElement("\146\x5f\x64\145\x70\x74", "\104\x65\x70\x61\x72\x74\155\145\156\164", "\x73\145\154\x65\143\164", '', array("\x6f\160\164\x69\x6f\156\x73" => $ingtM)); goto jQ0Vh; MziPu: $_GET["\146\x5f\x6d\157\x6e\164\150\x70\x69\x63\x6b"] = date_format($K4usu, "\x6d\x2f\131"); goto OFDiO; E_uXc: goto u1H5Q; goto ry4Er; U6Z92: $ckLc2 = new employee(); goto cIg4Q; t5BXf: $ingtM = $ltZ2T->getCompDeptPair(); goto iRwgA; BET8R: Hpx0N: goto MRGbs; Tbheo: if ($DnKg8 == "\145\x78\160") { goto Hpx0N; } goto jb9y3; QLVcP: $dMGXR = "\x45\x6d\x70\154\157\x79\145\145\40\104\157\143\165\x6d\x65\x6e\164\40\105\170\x70\x69\162\171\40\x43\x6f\156\x73\157\154\151\144\x61\x74\x65\x64\40\122\145\x70\157\x72\164\x20\x2d\x20\125\156\x74\x69\154\x20\x20" . date_format(new DateTime(), "\x46"); goto vcvKa; JbfX6: $YNo_2 = []; goto E8Itu; YGQz9: $MdpZk->addElement("\x66\x5f\156\x61\164\x6f\x6e\141\154\151\x74\171", "\x4e\141\164\x69\x6f\156\x61\x6c\x69\164\171", "\163\x65\x6c\145\x63\x74", '', array("\x6f\x70\164\151\157\x6e\x73" => $Xyw2H)); goto la8ae; Ah0jI: $ilpIU = $MZq4i->getCompanyPair(); goto RcuCq; vcvKa: q9UN6: goto qpwKB; kNEvf: require_once __DIR__ . "\x2f\x2e\56\x2f\x61\144\x6d\151\156\57\41\x6d\x6f\144\145\x6c\57\145\155\160\x6c\x6f\171\145\x65\x2e\160\x68\x70"; goto JbfX6; LKT79: goto q9UN6; goto BET8R; jG_gu: if (empty($_GET["\x66\137\155\x6f\x6e\164\150\160\x69\x63\x6b"]) && $DnKg8 != '') { goto ZTBsK; } goto pNzmh; RcuCq: $MdpZk->addElement("\146\137\143\157\x6d\160\x61\x6e\171", "\103\157\155\160\x61\156\x79", "\163\x65\x6c\145\143\164", '', array("\157\160\x74\x69\157\156\x73" => $ilpIU)); goto jDU83; UU780: $dMGXR = "\x45\155\x70\x6c\x6f\x79\x65\x65\40\104\x6f\143\165\155\x65\x6e\x74\x20\105\x78\x70\x69\162\171\40\x52\x65\x70\157\x72\x74\40\55\x20" . $EQxAl; goto BxSFc; jQ0Vh: require_once __DIR__ . "\x2f\x2e\56\x2f\x61\x64\155\x69\156\x2f\41\x6d\x6f\144\145\x6c\57\144\145\163\151\147\x6e\141\x74\x69\157\156\x2e\160\x68\160"; goto gSosu; FGRXu: $ltZ2T = new comp_department(); goto t5BXf; Y29aW: $MdpZk = new form(); goto IefF3; MRGbs: $_GET["\x66\x5f\x6d\x6f\x6e\164\x68\160\151\143\x6b"] = $DnKg8; goto QLVcP; mbEkP: $MdpZk->addElement("\x66\x5f\x6d\157\156\x74\x68\160\x69\143\x6b", "\x53\145\154\145\143\164\x20\x4d\x6f\x6e\164\x68\x20", "\164\x65\170\164", '', '', array('' => "\162\145\x61\144\x6f\x6e\154\x79")); goto FVcVS; iMNT_: $Xyw2H = array(1 => "\117\x6d\x61\156", 2 => "\111\x6e\144\x69\141", 3 => "\x50\x61\x6b\151\163\164\141\x6e", 4 => "\102\x61\156\x67\154\141\144\145\163\x68"); goto YGQz9; B8oZC: $AYCEM = $f8Awd->getDesigPair(); goto cqMh2; AMdLt: eEYDp: goto xY3Wx; lU7pr: $_GET["\x66\x5f\x6d\157\156\x74\x68\160\x69\143\153"] = $DnKg8; goto xtWFw; IefF3: $MdpZk->addElement("\146\x5f\156\141\x6d\x65", "\x4e\x61\155\x65\40", "\x74\145\170\164", ''); goto mbEkP; ZZX_P: $this->view->response("\x77\x69\x6e\144\x6f\x77"); goto kNEvf; la8ae: if (!(isset($_GET) && $_GET["\x63\x6c\145\x61\x72"] == "\101\154\154")) { goto J1DjZ; } goto G23vh; ry4Er: ZTBsK: goto I560Z; hZ4_H: if (!(is_array($_GET) && count(array_filter($_GET)) > 0)) { goto d6X5w; } goto AhAQO; OFDiO: $EQxAl = date_format($K4usu, "\106"); goto UU780; WGK0n: $BVBV3 = $ckLc2->getEmployeesDocReport(@$YNo_2); goto wghDA; wghDA: $this->view->employeeList = $BVBV3; goto QyeqO; G23vh: $MdpZk->reset(); goto XkoY3; AhAQO: $VxLQ9 = $MdpZk->vaidate($_GET); goto csWaZ; qpwKB: goto eEYDp; goto yAVa7; SDEJ6: $this->view->docMst = $dMgjG; goto dQBf0; J92UC: $MZq4i = new company(); goto Ah0jI; O3QQK: $K4usu = date_create_from_format(DFS_DB, $DnKg8 . "\55\x30\x31"); goto MziPu; XkoY3: unset($_GET); goto B71VL; QyeqO: $this->view->form = $MdpZk; goto Lefb6; n2jU6: d6X5w: goto U6Z92; GuMuf: $this->view->title = $dMGXR; goto SDEJ6; BxSFc: K4fBx: goto LKT79; wSMTa: $YNo_2 = array("\x66\x5f\155\x6f\x6e\x74\x68\160\151\x63\x6b" => @$VxLQ9["\146\x5f\155\x6f\x6e\x74\x68\x70\x69\143\x6b"], "\146\x5f\x63\x6f\x6d\160\x61\x6e\x79" => @$VxLQ9["\x66\137\143\157\155\x70\x61\156\x79"], "\x66\x5f\x64\145\x70\164" => @$VxLQ9["\x66\x5f\144\x65\x70\164"], "\x66\x5f\144\145\x73\x69\147" => @$VxLQ9["\146\137\x64\x65\163\151\x67"], "\146\x5f\156\141\164\x6f\156\141\x6c\151\x74\x79" => @$VxLQ9["\x66\137\x6e\141\164\x6f\x6e\141\154\151\164\171"]); goto O27lD; FVcVS: require_once __DIR__ . "\57\56\x2e\x2f\x61\x64\155\151\156\57\41\x6d\x6f\144\x65\154\57\143\157\x6d\x70\x61\156\x79\x2e\160\150\160"; goto J92UC; Lefb6: $this->view->filter_class = $OEXOb; goto GuMuf; pNzmh: $dMGXR = "\105\155\160\154\x6f\171\145\x65\40\x44\x6f\143\165\155\x65\156\x74\x20\x52\x65\x70\x6f\x72\164"; goto E_uXc; xY3Wx: u1H5Q: goto Y29aW; dQBf0: } public function employeeAction() { goto Afjl6; FnEnI: unset($_GET); goto pgQz0; cUHRf: $MdpZk->addElement("\146\x5f\x63\157\x6d\160\141\156\x79", "\103\157\155\160\x61\x6e\171", "\x73\x65\154\x65\x63\164", '', array("\x6f\x70\x74\x69\157\x6e\x73" => $ilpIU)); goto nJ208; VncOi: $Xyw2H = array(1 => "\x4f\x6d\x61\156", 2 => "\111\156\144\151\141", 3 => "\x50\x61\153\x69\x73\164\x61\156", 4 => "\x42\141\156\147\x6c\x61\144\x65\163\150"); goto co6dG; ymt9h: ZnQaO: goto S14pl; PWimv: require_once __DIR__ . "\57\56\x2e\x2f\141\144\155\x69\156\x2f\x21\x6d\x6f\x64\145\154\x2f\145\155\160\154\x6f\x79\x65\145\x2e\x70\x68\160"; goto drgxz; pgQz0: z7Ixn: goto hjEut; oOC1W: $this->view->filter_class = $OEXOb; goto iZODt; uP2Et: $OEXOb = "\x62\x74\x6e\x2d\x69\156\146\157"; goto ymt9h; drgxz: $MdpZk = new form(); goto ieQcj; h9Snz: $ilpIU = $MZq4i->getCompanyPair(); goto cUHRf; hCuYa: $ltZ2T = new comp_department(); goto OKoqy; OKoqy: $ingtM = $ltZ2T->getCompDeptPair(); goto yDQMf; B4Vmo: $YNo_2 = array("\146\137\143\x6f\x6d\x70\141\x6e\171" => @$VxLQ9["\146\x5f\x63\x6f\x6d\160\141\156\x79"], "\x66\137\x64\145\x70\x74" => @$VxLQ9["\x66\137\x64\x65\x70\164"], "\x66\137\x64\145\x73\151\147" => @$VxLQ9["\x66\x5f\x64\x65\x73\151\x67"], "\146\137\x6e\x61\x74\x6f\156\141\x6c\x69\164\x79" => @$VxLQ9["\x66\x5f\x6e\x61\164\157\156\x61\x6c\x69\x74\x79"]); goto HRMAR; uSatb: if (!($VxLQ9 == true)) { goto Pgr2h; } goto B4Vmo; m1GF4: require_once __DIR__ . "\x2f\56\56\57\141\x64\x6d\x69\156\57\x21\x6d\x6f\144\x65\154\57\144\x65\163\x69\147\156\141\x74\151\157\x6e\56\160\150\160"; goto TENkn; HwO6G: $YNo_2 = []; goto PWimv; r_Aia: $MdpZk->addElement("\146\x5f\145\x6d\160\x6e\x6f", "\x45\155\160\x20\116\x6f\x20", "\164\x65\x78\164", ''); goto pzUDS; n5tVy: $AYCEM = $f8Awd->getDesigPair(); goto iZmp8; ieQcj: $MdpZk->addElement("\x66\137\x6e\x61\155\x65", "\116\141\155\x65\40", "\164\x65\170\164", ''); goto r_Aia; hjEut: $OEXOb = "\x62\164\x6e\x2d\160\x72\151\155\x61\x72\x79"; goto RaYRT; HRMAR: Pgr2h: goto uP2Et; PECKc: $VxLQ9 = $VxLQ9[0]; goto uSatb; nJ208: require_once __DIR__ . "\57\x2e\56\x2f\x61\x64\155\x69\x6e\x2f\x21\x6d\157\x64\145\x6c\57\x63\157\x6d\x70\x5f\x64\145\x70\x61\x72\164\x6d\145\156\x74\x2e\x70\x68\160"; goto hCuYa; lxgPm: $BVBV3 = $ckLc2->getEmployeesReport(@$YNo_2); goto wb4CI; KOSX7: $VxLQ9 = $MdpZk->vaidate($_GET); goto PECKc; YhU2e: $MZq4i = new company(); goto h9Snz; WyfCu: $this->view->nation = $Xyw2H; goto BlueM; iZODt: $this->view->form = $MdpZk; goto WyfCu; yDQMf: $MdpZk->addElement("\146\137\144\145\160\164", "\104\x65\x70\141\162\164\155\145\156\164", "\x73\x65\x6c\x65\143\x74", '', array("\x6f\160\164\151\157\156\163" => $ingtM)); goto m1GF4; co6dG: $MdpZk->addElement("\x66\x5f\x6e\x61\164\x6f\x6e\141\x6c\x69\x74\171", "\x4e\141\x74\x69\x6f\x6e\141\x6c\x69\164\x79", "\x73\145\x6c\145\x63\164", '', array("\157\x70\164\x69\x6f\x6e\163" => $Xyw2H)); goto QtSnc; wb4CI: $this->view->employeeList = $BVBV3; goto oOC1W; QtSnc: if (!(isset($_GET) && $_GET["\x63\x6c\x65\141\x72"] == "\101\154\154")) { goto z7Ixn; } goto mT0eP; TENkn: $f8Awd = new designation(); goto n5tVy; Afjl6: $this->view->response("\x77\x69\156\x64\157\167"); goto HwO6G; S14pl: $ckLc2 = new employee(); goto lxgPm; iZmp8: $MdpZk->addElement("\x66\137\144\x65\x73\x69\147", "\x44\145\163\151\147\156\x61\x74\x69\157\156", "\163\145\154\x65\143\x74", '', array("\157\x70\164\x69\x6f\x6e\163" => $AYCEM)); goto VncOi; mT0eP: $MdpZk->reset(); goto FnEnI; pzUDS: require_once __DIR__ . "\57\56\56\57\x61\x64\x6d\x69\156\x2f\41\x6d\x6f\144\145\154\x2f\143\157\155\x70\141\x6e\x79\x2e\x70\x68\160"; goto YhU2e; RaYRT: if (!(is_array($_GET) && count(array_filter($_GET)) > 0)) { goto ZnQaO; } goto KOSX7; BlueM: } }
