<?php
/*   __________________________________________________
    |  ##CreativeSol Management Information System##   |
    |__________________________________________________|
*/
 class compdeptController extends mvc { public function addAction() { goto gjRQX; yVXjy: $NK2By = $cFXmp->getCompanyPair(); goto PcACm; J7sLF: $_SESSION["\146\145\145\x64\142\x61\143\x6b"] = "\103\x6f\155\x70\x61\x6e\171\40\x64\145\160\x61\x72\164\x6d\x65\x6e\164\x20\144\x65\164\141\x69\x6c\163\x20\x61\x64\x64\x65\x64\x20\x73\x75\143\143\x65\163\x73\x66\165\154\x6c\171"; goto wMjSM; MQguj: $U2axW = $A5jMA->getDeptPair(); goto OWBnW; XHw4m: if (!$webcg) { goto FWgws; } goto J7sLF; gjRQX: $ftUU2 = new form(); goto mGuqF; SeWdn: if (count($nuNwJ) > 0) { goto niFi2; } goto ia5ik; c1Cwj: $nuNwJ = $d1Qig->chekDept($khXC2); goto SeWdn; Ijewd: niFi2: goto QM1VB; nvIwB: $this->view->form = $ftUU2; goto ibpbC; p8jb2: ryDjk: goto nvIwB; mGuqF: __DIR__ . "\x2f\56\x2e\57\56\x2e\x2f\141\144\155\151\x6e\x2f\41\x6d\157\x64\x65\154\x2f\x63\x6f\x6d\160\x61\156\171\x2e\x70\150\x70"; goto y6A44; OWBnW: $ftUU2->addElement("\143\x6f\155\x70\x61\156\x79", "\103\157\155\x70\x61\x6e\171", "\x73\x65\154\x65\x63\x74", "\x72\145\161\165\x69\x72\145\x64", array("\157\x70\x74\x69\157\156\163" => $NK2By)); goto zMWrU; F_JiH: BZ4Nu: goto fYDn6; ia5ik: $WUkwG = array("\143\x6d\x70\144\145\160\164\x5f\144\145\160\x74\x5f\x69\x64" => $khXC2["\x64\x65\x70\x74"], "\x63\155\x70\144\145\160\x74\x5f\x63\157\x6d\160\x5f\x69\144" => $khXC2["\143\157\155\x70\141\156\171"]); goto bx5Lu; wMjSM: header("\114\x6f\143\141\164\x69\157\x6e\x3a\x6c\151\x73\x74\56\x70\150\160"); goto T12LV; nqQsE: $A5jMA = new department(); goto MQguj; G05H2: $d1Qig = new comp_department(); goto c1Cwj; DzMoh: $khXC2 = $khXC2[0]; goto TQ2J6; QM1VB: $ftUU2->dept->setError("\x53\x65\154\x65\143\164\x65\144\x20\x64\x65\x70\141\162\164\155\x65\156\x74\x20\x61\154\x72\x65\141\144\171\40\163\x65\154\145\143\164\x65\x64\40\164\157\x20\x74\150\x65\x20\x63\157\155\x70\141\x6e\x79"); goto F_JiH; bx5Lu: $webcg = $d1Qig->add($WUkwG); goto XHw4m; y6A44: $cFXmp = new company(); goto yVXjy; T12LV: FWgws: goto U_i6h; zMWrU: $ftUU2->addElement("\144\145\160\164", "\x44\x65\x70\141\162\164\x6d\x65\x6e\164", "\163\x65\x6c\x65\x63\164", "\162\x65\x71\165\x69\162\x65\x64", array("\157\160\164\151\157\156\163" => $U2axW)); goto wYIOU; UYkoU: $khXC2 = $ftUU2->vaidate($_POST, $_FILES); goto DzMoh; U_i6h: goto BZ4Nu; goto Ijewd; fYDn6: lvqO3: goto p8jb2; wYIOU: if (!(isset($_POST) && count($_POST) > 0)) { goto ryDjk; } goto UYkoU; PcACm: __DIR__ . "\57\x2e\56\57\56\56\57\141\144\155\151\156\57\41\155\x6f\x64\145\x6c\57\144\x65\160\x61\162\x74\155\145\156\164\56\x70\150\x70"; goto nqQsE; WEB92: __DIR__ . "\57\56\x2e\57\56\x2e\57\141\144\155\151\x6e\57\41\x6d\157\144\x65\x6c\57\143\x6f\155\x70\137\x64\145\x70\x61\x72\164\155\145\x6e\x74\56\160\150\x70"; goto G05H2; TQ2J6: if (!($khXC2 == true)) { goto lvqO3; } goto WEB92; ibpbC: } public function editAction() { goto o7zlf; J2Sm2: wuRtB: goto cjMBl; MK1SN: __DIR__ . "\57\x2e\56\57\x2e\56\x2f\x61\x64\x6d\151\156\x2f\x21\x6d\157\144\145\x6c\x2f\165\163\145\x72\56\160\150\160"; goto UFp0b; OvB6e: $sLNaE = new user(); goto tVEIt; Os3Cq: ABDBW: goto wWEGO; rOTZN: if ($Kg8A1["\165\x73\145\162\x5f\151\x64"]) { goto KpF6n; } goto kdSSN; zt9_2: __DIR__ . "\x2f\x2e\56\57\56\56\x2f\x61\144\155\x69\x6e\x2f\x21\x6d\x6f\144\x65\154\x2f\165\x73\x65\x72\56\160\150\x70"; goto Px7a8; zERIJ: $ftUU2->dept->setValue($YBy6m["\x75\x73\x65\162\x5f\144\x65\160\164"]); goto CNUb2; ab519: $ftUU2 = new form(); goto OvB6e; bd6Fr: $ftUU2->addElement("\165\156\x61\155\145", "\125\163\145\x72\40\x4e\141\x6d\145\40", "\164\x65\x78\x74", "\x72\x65\x71\165\151\x72\145\144\174\x61\x6c\160\x68\141\137\x73\x70\141\x63\x65"); goto vqyy3; zUgHu: T4OUk: goto dIkm4; jP2tb: HNYoT: goto ry9LC; I2pyF: $ftUU2->uname->setError("\x55\163\x65\x72\40\156\x61\155\145\x20\x61\154\162\x65\x61\144\171\40\x73\145\x6c\x65\x63\164\145\144\40\142\x79\40\157\x74\x68\145\162\40\165\163\x65\162"); goto jP2tb; nMJUT: $this->view->NoViewRender = true; goto dQSmg; DKAhN: if ($_POST) { goto ABDBW; } goto btAIK; SWUYP: if (!($khXC2 == true)) { goto C2Gz4; } goto MK1SN; btAIK: $YBy6m = $sLNaE->getUserById($KtzFU); goto X2FlN; iP8HW: $_SESSION["\146\145\145\x64\142\141\x63\x6b"] = $j8UXx; goto BhGY0; K8AnI: die("\164\141\x6d\x70\145\162\x65\144"); goto zUgHu; VYPAg: if ($KtzFU) { goto T4OUk; } goto K8AnI; ry9LC: C2Gz4: goto yni0d; tVEIt: $gxPc4 = filter_input(INPUT_GET, "\x72\x65\x66", FILTER_UNSAFE_RAW); goto JYTbv; yni0d: goto tVc3o; goto J2Sm2; kdSSN: $WUkwG = array("\x75\x73\x65\x72\x5f\x66\156\141\x6d\x65" => $khXC2["\x66\156\x61\155\x65"], "\165\163\x65\162\x5f\x6c\x6e\x61\x6d\145" => $khXC2["\154\156\x61\x6d\145"], "\165\x73\x65\x72\x5f\165\156\141\x6d\x65" => $khXC2["\165\x6e\x61\x6d\145"], "\x75\163\x65\x72\x5f\x64\145\x73\x69\147" => $khXC2["\x64\145\163\151\x67"], "\x75\163\145\162\x5f\144\145\x70\164" => $khXC2["\x64\145\160\164"], "\165\163\x65\x72\x5f\x73\x74\x61\x74\x75\163" => $khXC2["\163\x74\141\x74\x75\163"]); goto bIrMp; wWEGO: if (!isset($_SERVER["\x48\124\x54\x50\137\130\137\x52\x45\x51\125\105\123\x54\105\x44\x5f\x57\x49\x54\x48"]) and strtolower($_SERVER["\110\x54\124\x50\137\130\137\122\105\121\x55\105\123\124\105\x44\137\127\111\x54\x48"]) != "\x78\x6d\154\150\164\164\x70\x72\x65\161\x75\x65\x73\164") { goto wuRtB; } goto GaUfU; KoXlc: $KtzFU = $bYrB8->decode($gxPc4); goto VYPAg; GaUfU: $khXC2 = $ftUU2->vaidate($_POST, $_FILES); goto TQTYB; Px7a8: $BCvIS = true; goto ab519; JYTbv: $bYrB8 = new encryption(); goto KoXlc; cD6Mn: goto iRzjd; goto Os3Cq; yjZ1q: sRV7b: goto I48FS; bIrMp: $A3Dx0 = $sLNaE->modify($WUkwG, $KtzFU); goto SVl5t; I48FS: goto HNYoT; goto iu3kR; G2pZE: $ftUU2->addElement("\x64\145\x70\x74", "\x44\145\x70\x61\162\164\155\x65\156\164", "\x73\145\154\x65\143\164", "\162\x65\x71\x75\151\x72\x65\x64", array("\157\x70\x74\151\157\156\163" => array('' => "\x53\145\x6c\x65\143\x74\40\104\145\x70\141\x72\x74\x6d\x65\x6e\164", 1 => "\110\145\x61\144\40\117\146\x66\x69\143\145", 2 => "\x43\157\156\x73\164\x72\165\x63\x74\x69\157\x6e"))); goto J6365; J6365: $ftUU2->addElement("\163\x74\141\x74\x75\163", "\x53\x74\x61\x74\x75\163", "\162\141\144\x69\157", "\162\x65\161\x75\151\x72\x65\144", array("\x6f\x70\164\151\157\156\163" => array(1 => "\x45\156\x61\142\x6c\145", 2 => "\x44\x69\163\141\142\x6c\x65"))); goto DKAhN; SVl5t: if (!$A3Dx0) { goto sRV7b; } goto nkNJ3; TQTYB: $khXC2 = $khXC2[0]; goto SWUYP; o7zlf: $this->view->response("\141\152\141\170"); goto zt9_2; CNUb2: $ftUU2->status->setValue($YBy6m["\165\x73\x65\x72\x5f\163\164\141\164\x75\x73"]); goto cD6Mn; mnSD1: die($PVfmK); goto yjZ1q; dIkm4: $ftUU2->addElement("\x66\156\x61\x6d\145", "\x46\x69\x72\163\164\40\116\141\155\x65\40", "\x74\x65\170\164", "\162\145\161\x75\x69\162\145\x64\x7c\141\154\160\150\141\137\163\x70\141\x63\145"); goto SnV7X; HGBmQ: $ftUU2->desig->setValue($YBy6m["\165\x73\145\162\137\144\145\x73\x69\147"]); goto zERIJ; cjMBl: die("\55\x2d\55"); goto w3iSN; vqyy3: $ftUU2->addElement("\144\145\163\151\147", "\x44\145\163\x69\147\x6e\141\164\x69\157\156", "\x73\145\x6c\145\143\x74", "\x72\x65\x71\165\151\x72\x65\144", array("\157\160\x74\151\x6f\156\163" => array('' => "\123\x65\x6c\145\143\164\x20\104\145\x73\x69\147\156\141\x74\151\157\x6e", 1 => "\101\144\155\151\x6e", 2 => "\x4d\x61\x6e\x61\x67\x65\162", 3 => "\x55\x73\145\162"))); goto G2pZE; nkNJ3: $j8UXx = "\125\x73\145\x72\x20\144\x65\164\x61\151\154\x73\40\165\x70\x64\x61\x74\x65\x64\x20\163\165\x63\143\145\x73\x73\x66\165\x6c\x6c\x79\x20\40\x2e"; goto nMJUT; X2FlN: $ftUU2->fname->setValue($YBy6m["\165\x73\x65\162\137\146\x6e\141\155\145"]); goto fQCw8; fQCw8: $ftUU2->lname->setValue($YBy6m["\165\163\145\162\137\x6c\156\x61\155\145"]); goto PM9ol; w3iSN: tVc3o: goto Wqyqy; dQSmg: $PVfmK = array("\146\145\145\x64\x62\x61\x63\153" => $j8UXx); goto iP8HW; iu3kR: KpF6n: goto I2pyF; mUMnC: $this->view->form = $ftUU2; goto uobo8; BhGY0: $PVfmK = json_encode($PVfmK); goto mnSD1; Wqyqy: iRzjd: goto mUMnC; PM9ol: $ftUU2->uname->setValue($YBy6m["\165\x73\x65\162\x5f\165\x6e\x61\155\x65"]); goto HGBmQ; SnV7X: $ftUU2->addElement("\x6c\x6e\141\155\x65", "\x4c\141\x73\x74\40\116\141\x6d\x65\40", "\164\x65\170\x74", "\162\145\x71\165\x69\x72\145\x64\x7c\x61\x6c\160\x68\x61\x5f\163\x70\x61\143\145"); goto bd6Fr; UFp0b: $Kg8A1 = $sLNaE->getUser(array("\x75\x73\x65\162\x5f\x75\156\141\x6d\x65" => $khXC2["\165\x6e\141\155\x65"], "\145\170\x5f\165\163\x65\162\137\151\x64" => $KtzFU)); goto rOTZN; uobo8: } public function listAction() { goto VPl_j; VPl_j: __DIR__ . "\57\x2e\56\57\56\x2e\57\x61\x64\x6d\151\x6e\57\x21\155\x6f\x64\145\154\57\143\x6f\155\160\137\x64\145\160\x61\x72\164\155\145\156\164\x2e\160\x68\x70"; goto wymt7; EE4A5: $x_Q6V = $d1Qig->_voffset; goto ndusD; wymt7: $d1Qig = new comp_department(); goto oICph; oICph: $GSNyd = $d1Qig->getCompDeptList(); goto EE4A5; ndusD: } }
