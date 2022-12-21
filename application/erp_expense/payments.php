<?php

/*
 * __________________________________________________
 * | ##CreativeSol Management Information System## |
 * |__________________________________________________|
 */
class paymentsController extends mvc
{

    function addAction()
    {
        goto py8En;
        RGq8y:
        $DILQY = date_format($DILQY, DFS_DB);
        goto MY5iI;
        NHwtP:
        $V0UUv->addElement("\x63\142\x61\x6d\157\165\156\164", "\x43\x42\x20\101\155\157\165\156\164", "\x66\154\x6f\141\x74", "\156\165\x6d\145\x72\x69\143", '', array(
            "\x63\x6c\141\163\x73" => "\146\151\x67"
        ));
        goto rS_0B;
        CwkY0:
        $V0UUv->addElement("\x70\x61\171\142\171", "\120\x61\x79\x20\x44\x61\164\145", "\x74\x65\x78\164", "\x64\141\x74\x65\174\162\145\161\165\x69\162\145\x64", '', array(
            "\143\x6c\141\x73\163" => "\144\141\164\x65\137\x70\151\143\153\145\x72"
        ));
        goto e03gU;
        R91sL:
        $PIT1q = $GFDm4->geExpenseReport(@$AzvOO, "\x64\x61\164\145");
        goto tnebJ;
        Q32sl:
        foreach ($i2JZx as $d8rwD) {
            goto NUcF8;
            NUcF8:
            if (! ($_POST["\x63\150\x65\143\x6b"][$d8rwD] != '')) {
                goto gCm1b;
            }
            goto xx2qX;
            qG2OW:
            $V0UUv->addErrorMsg("\155\x61\x6d\x6f\x75\156\164", "\151\156\x76\x61\154\151\x64", "\x20");
            goto hjrrw;
            gg8ZE:
            M4nzZ:
            goto N00x8;
            gDSVs:
            $V0UUv->addErrorMsg("\x6d\141\x6d\x6f\x75\156\x74", "\151\x6e\x76\x61\x6c\151\144", "\x21\41\x20\151\x73\x20\76\x20\50\142\151\154\x6c\55\144\x69\163\51\x20\141\x6d\x6f\165\x6e\x74");
            goto gg8ZE;
            FZ7lz:
            if (! (bcsub($CTyrL[$d8rwD], $_POST["\x64\151\x73\x63\x6f\165\156\164"][$d8rwD], 3) < $_POST["\155\x61\x6d\157\x75\x6e\164"][$d8rwD])) {
                goto M4nzZ;
            }
            goto XTpkU;
            t732G:
            $V0UUv->addmRules("\155\x61\155\x6f\165\156\164", $d8rwD, "\x69\x6e\x76\141\x6c\151\144");
            goto qG2OW;
            b5vWX:
            $DX1_5 = true;
            goto oEgvD;
            xx2qX:
            if (! ($_POST["\x6d\141\155\x6f\x75\x6e\x74"][$d8rwD] == '')) {
                goto uipPA;
            }
            goto t732G;
            feqCE:
            $s3swB = $_POST["\155\x61\155\157\165\156\x74"][$d8rwD] == '' ? 0 : $_POST["\x6d\x61\155\x6f\165\156\164"][$d8rwD];
            goto mZ3tB;
            oEgvD:
            $V0UUv->addRules("\x63\157\x6e\x66\151\x72\155", "\x72\x65\161\x75\x69\x72\145\x64", "\120\154\x65\141\x73\x65\x20\143\157\156\146\x69\162\155\x20\41\x21");
            goto kiTYT;
            nlnGL:
            gCm1b:
            goto GE3Db;
            kiTYT:
            AfOfk:
            goto nlnGL;
            XTpkU:
            $V0UUv->addmRules("\x6d\141\155\x6f\165\x6e\x74", $d8rwD, "\x69\x6e\x76\141\x6c\151\144");
            goto gDSVs;
            hjrrw:
            uipPA:
            goto FZ7lz;
            N00x8:
            $WIjyf = $_POST["\x64\151\163\143\157\x75\156\164"][$d8rwD] == '' ? 0 : $_POST["\144\x69\163\143\157\165\x6e\x74"][$d8rwD];
            goto feqCE;
            GE3Db:
            qj4tA:
            goto e6XwM;
            mZ3tB:
            if (! (! $DX1_5 && $CTyrL[$d8rwD] - $WIjyf - $s3swB > 0)) {
                goto AfOfk;
            }
            goto b5vWX;
            e6XwM:
        }
        goto c4tmn;
        gv2gc:
        die($w3Iq6);
        goto o6Q8K;
        qUTSF:
        $V0UUv->addMultiElement("\x6d\141\155\157\x75\156\164", "\120\141\x79\155\145\x6e\x74", "\146\x6c\x6f\141\164", "\x6e\x75\155\x65\x72\x69\x63", '', array(
            "\143\154\141\163\x73" => "\x66\157\x72\155\55\143\157\156\x74\162\x6f\154\55\x72\x6f\x77"
        ), $hpNLA);
        goto slyKA;
        U42H3:
        $XmN32 = new vendor();
        goto PseP7;
        nx1cP:
        if (! isset($_SERVER["\110\124\124\x50\137\130\x5f\122\105\x51\x55\105\x53\124\x45\x44\x5f\127\x49\124\x48"]) and strtolower($_SERVER["\x48\124\124\x50\x5f\130\137\x52\105\121\125\x45\123\124\x45\104\x5f\127\111\124\x48"]) != "\170\x6d\x6c\x68\x74\x74\160\162\145\161\165\145\x73\x74") {
            goto bT14V;
        }
        goto zeRdi;
        RSneH:
        require_once __DIR__ . "\x2f\x2e\56\57\141\144\x6d\x69\x6e\x2f\41\155\x6f\x64\145\x6c\57\x65\x78\x70\145\x6e\x73\x65\56\x70\x68\160";
        goto Q2B3c;
        ptdMV:
        $QwDPS = $Nvbqo->getPaymentDetByApproval(array(
            "\160\x64\145\164\x5f\x73\x74\x61\x74\x75\163" => 1
        ));
        goto c3P27;
        zbeih:
        $V0UUv->addElement("\156\x6f\x74\x65", "\x4e\157\164\145", "\x74\145\170\x74\141\162\x65\x61", '');
        goto c9IvL;
        IG3qD:
        require_once __DIR__ . "\57\x2e\x2e\57\x61\144\x6d\151\156\57\x21\155\157\x64\x65\x6c\57\160\141\x79\155\145\156\164\144\x65\x74\56\160\150\x70";
        goto baroy;
        qaEwb:
        $w3Iq6 = json_encode($w3Iq6);
        goto gv2gc;
        gpCnF:
        $this->view->expenseList = $PIT1q;
        goto ndyDf;
        zVt90:
        $MI1ag = new cashbook();
        goto cCY_S;
        NXJYd:
        $GFDm4 = new expense();
        goto rh0N5;
        CCVte:
        if (! $oQSHX) {
            goto DwQup;
        }
        goto YxwoW;
        FoJMz:
        $N_oH4 = new payment();
        goto WrIme;
        TWND0:
        die("\x2d\55\55");
        goto hwe0T;
        kKRNT:
        $V0UUv = new form();
        goto ksqph;
        mklk5:
        $ueMso = $ueMso[0];
        goto ufysj;
        cvmbW:
        foreach ($ueMso["\143\x68\145\x63\x6b"] as $tcvl7 => $mqInl) {
            goto EHvB2;
            IB_dw:
            yOlYl:
            goto kVJRp;
            AP0Bf:
            if (! ($mqInl != '')) {
                goto OqnrZ;
            }
            goto fXSew;
            EHvB2:
            $dtSIX = $_POST["\144\x69\x73\143\x6f\x75\x6e\x74"][$d8rwD] == '' ? 0 : $_POST["\x64\151\x73\x63\x6f\165\x6e\x74"][$tcvl7];
            goto sM7hw;
            sM7hw:
            $o1Zka = $_POST["\155\x61\x6d\x6f\165\156\x74"][$d8rwD] == '' ? 0 : $_POST["\x6d\141\x6d\x6f\165\x6e\x74"][$tcvl7];
            goto AP0Bf;
            UZpYF:
            $RSNEV = $J3ntK->add($F5Frd);
            goto hZNxg;
            hZNxg:
            OqnrZ:
            goto IB_dw;
            C4l10:
            $F5Frd = array(
                "\x70\144\145\164\137\x70\141\171\137\x69\x64" => $oQSHX,
                "\x70\x64\145\x74\x5f\145\x78\x70\137\151\144" => $tcvl7,
                "\x70\144\145\x74\137\141\x6d\x74\137\164\157\x70\141\x79" => $CTyrL[$tcvl7],
                "\160\x64\x65\164\137\x61\155\164\x5f\160\141\151\144" => $ueMso["\x6d\x61\155\x6f\165\x6e\x74"][$tcvl7],
                "\x70\144\x65\x74\137\x61\x6d\164\137\x64\151\163" => $ueMso["\x64\151\x73\x63\x6f\x75\x6e\x74"][$tcvl7] == '' ? NULL : $ueMso["\144\151\163\143\x6f\x75\x6e\164"][$tcvl7],
                "\160\x64\145\x74\137\x61\x6d\x74\137\x62\141\x6c" => $CTyrL[$tcvl7] - $dtSIX - $o1Zka
            );
            goto UZpYF;
            fXSew:
            $F5Frd = array();
            goto C4l10;
            kVJRp:
        }
        goto dtpcc;
        zpgK0:
        $V0UUv->addErrorMsg("\x61\x6d\x6f\x75\x6e\x74", "\151\x6e\166\141\x6c\151\x64", "\50" . ($b54T1 - floatval($_POST["\x61\155\157\165\156\x74"])) . "\x29\x20\115\151\163\155\141\164\143\150\40\167\151\x74\x68\40\164\157\164\x61\x6c\40\141\155\x6f\x75\156\164\40\x28" . $b54T1 . "\51");
        goto tbUMG;
        MY5iI:
        $F5Frd = array(
            "\x70\x61\171\137\x76\145\x6e\144\157\162" => $ueMso["\146\x5f\x73\145\x6c\126\x65\x6e\144\157\x72"],
            "\160\141\x79\137\x61\155\x6f\165\156\164" => $ueMso["\141\x6d\x6f\x75\156\x74"],
            "\160\x61\171\x5f\x70\141\x79\x64\141\x74\145" => $DILQY,
            "\160\x61\171\137\160\141\171\x5f\155\x6f\x64\145" => $ueMso["\x70\x61\x79\x6d\157\144"],
            "\x70\141\171\x5f\143\150\161\x6e\157" => $ueMso["\143\150\161\x6e\157"],
            "\x70\x61\x79\x5f\x72\145\x6d\141\x72\x6b\163" => $ueMso["\156\x6f\164\x65"]
        );
        goto BJDZS;
        chLPU:
        if (! (is_array($_POST["\x63\x68\145\143\x6b"]) && count($_POST["\x63\x68\145\x63\x6b"]) > 0)) {
            goto Sjyi4;
        }
        goto Q32sl;
        PseP7:
        $Cylu_ = $XmN32->getVendorPair();
        goto ktpZZ;
        QGkQ1:
        $V0UUv->addElement("\x70\145\x72\x63\x62", "\120\145\x72\163\x6f\156\141\154\40\103\x61\x73\150\40\x42\x6f\x6f\x6b", "\143\150\145\143\153\x62\157\170", '', array(
            "\x6f\160\x74\x69\157\156\163" => array(
                1 => "\x50\145\x72\x73\157\x6e\156\x61\x6c\40\103\141\163\150\40\102\157\x6f\x6b"
            )
        ));
        goto NHwtP;
        BdRIC:
        if (! ((string) $b54T1 != $_POST["\141\x6d\157\165\x6e\x74"] && $_POST["\141\x6d\x6f\x75\156\x74"] != '')) {
            goto HvJhw;
        }
        goto kl32E;
        WrIme:
        $DILQY = DateTime::createFromFormat(DF_DD, $ueMso["\160\141\171\142\x79"]);
        goto RGq8y;
        ECCOf:
        if (! ($ueMso == true)) {
            goto FmfRe;
        }
        goto KFZHE;
        c4tmn:
        JHKGh:
        goto YvRj7;
        zeRdi:
        $V0UUv->f_selVendor->setValue($_POST["\146\137\163\x65\x6c\x56\x65\156\144\157\162"]);
        goto lxLgB;
        jGCaU:
        $PIT1q = [];
        goto dxcT5;
        yG2cW:
        WgLku:
        goto Mq8HT;
        hwe0T:
        EuHCu:
        goto xe44Y;
        o6Q8K:
        DwQup:
        goto DuPv2;
        DscmG:
        wEczr:
        goto d5yCw;
        dtpcc:
        X3lMH:
        goto DscmG;
        Q2B3c:
        $UFPhr = true;
        goto CYT9C;
        SAoX_:
        bT14V:
        goto TWND0;
        lPqSF:
        $V0UUv->addErrorMsg("\x6d\x61\155\x6f\x75\x6e\x74", "\162\145\161\x75\151\x72\x65\144", "\40");
        goto XumRp;
        KFZHE:
        require_once __DIR__ . "\57\56\56\x2f\141\x64\155\151\156\x2f\x21\x6d\157\144\x65\x6c\x2f\x70\141\171\x6d\145\x6e\164\x2e\x70\150\160";
        goto FoJMz;
        rh0N5:
        if ($_POST) {
            goto ukaJC;
        }
        goto jGCaU;
        baroy:
        $Nvbqo = new paymentdet();
        goto ptdMV;
        h6g4M:
        $this->view->form1 = $ll2VR;
        goto BI4JX;
        lzqUB:
        $oQSHX = $N_oH4->add($F5Frd);
        goto CCVte;
        YxwoW:
        require_once __DIR__ . "\x2f\56\x2e\x2f\141\x64\x6d\151\156\x2f\41\155\157\x64\145\154\x2f\160\x61\x79\155\145\156\164\144\x65\x74\x2e\x70\150\x70";
        goto QwYJG;
        XumRp:
        if (! ($_POST["\x70\x61\171\x6d\x6f\x64"] == "\x32")) {
            goto TMyvw;
        }
        goto zxXVz;
        baHou:
        $AzvOO["\x65\x78\143\x6c\x75\x64\x65"] = implode("\54", $QwDPS);
        goto ejdFV;
        oiAuf:
        $CTyrL = $GFDm4->getExpenseAmountPair(@$AzvOO);
        goto APPvM;
        AF1AM:
        $V0UUv->addMultiElement("\143\x68\x65\143\153", "\123\145\154\145\x63\x74\40\142\151\x6c\154", "\x63\150\x65\143\153\142\x6f\x78", '', array(
            "\x6f\x70\164\x69\157\156\x73" => array(
                1 => ''
            )
        ), array(
            '' => "\157\x6e\103\x6c\x69\x63\x6b\75\x27\164\x6f\x67\x67\x6c\x65\x48\x65\151\x67\x68\164\x28\164\150\151\163\51\x27",
            "\143\x6c\141\163\163" => "\142\151\x6c\154\55\x73\x65\x6c\x65\x63\x74"
        ), $hpNLA);
        goto qUTSF;
        hssIx:
        $V0UUv->addElement("\143\x68\161\156\157", "\103\x68\145\x71\x75\x65\40\x4e\157\40", "\x74\x65\170\164", '');
        goto zbeih;
        beo92:
        $V0UUv->addElement("\143\x61\163\x68\106\154\x6f\167", "\103\x61\163\150\x20\x46\154\x6f\167", "\163\x65\x6c\145\143\164", '', array(
            "\x6f\160\164\x69\157\156\x73" => $OAe5B
        ));
        goto CwkY0;
        d5yCw:
        if (! ($ueMso["\x70\x65\x72\x63\142"] == 1)) {
            goto f23to;
        }
        goto Ltt1A;
        kl32E:
        $V0UUv->addRules("\141\x6d\x6f\165\x6e\164", "\151\156\166\x61\x6c\x69\144");
        goto zpgK0;
        hwCMX:
        ukaJC:
        goto nx1cP;
        ZFILs:
        F56p8:
        goto BdRIC;
        rS_0B:
        require_once __DIR__ . "\x2f\56\56\57\x61\144\x6d\151\156\57\x21\x6d\x6f\144\x65\154\57\143\x61\x73\x68\146\154\157\x77\x2e\160\150\x70";
        goto JaPUT;
        NX8Do:
        $i2JZx = array_keys($V0UUv->_elements["\143\x68\x65\143\x6b"]);
        goto lPqSF;
        ndyDf:
        $this->view->billAmount = $CTyrL;
        goto haWbI;
        YvRj7:
        foreach ($_POST["\x63\x68\x65\143\x6b"] as $VI3wT => $PRont) {
            $b54T1 += $_POST["\155\x61\155\x6f\165\156\164"][$VI3wT];
            SFarX:
        }
        goto ZFILs;
        ejdFV:
        L3KAC:
        goto R91sL;
        tbUMG:
        HvJhw:
        goto UiL33;
        Sbt8P:
        $OAe5B = $xf3CG->getCashFlowPair();
        goto beo92;
        JaPUT:
        $xf3CG = new cashflow();
        goto Sbt8P;
        slyKA:
        $V0UUv->addMultiElement("\144\151\x73\x63\157\165\156\x74", "\104\x69\x73\143\157\165\x6e\x74", "\146\x6c\157\x61\x74", "\x6e\x75\155\x65\x72\151\143", '', array(
            "\x63\154\141\163\x73" => "\x66\x6f\162\155\x2d\143\x6f\x6e\164\162\157\154\x2d\x72\157\167"
        ), $hpNLA);
        goto NX8Do;
        NOkO3:
        $this->view->NoViewRender = true;
        goto pXmNh;
        QwYJG:
        $J3ntK = new paymentdet();
        goto IhOhL;
        tnebJ:
        $hpNLA = $GFDm4->getExpenseVendorPair(@$AzvOO);
        goto oiAuf;
        N38qu:
        $this->view->form2 = $V0UUv;
        goto h6g4M;
        Ltt1A:
        require_once __DIR__ . "\57\56\56\x2f\x61\x64\155\151\156\57\x21\155\x6f\x64\x65\x6c\x2f\x63\141\x73\x68\142\157\x6f\153\x2e\x70\x68\160";
        goto zVt90;
        gaL3R:
        Sjyi4:
        goto B9QSI;
        I2THN:
        require_once __DIR__ . "\57\56\x2e\x2f\x61\x64\x6d\x69\156\57\x21\155\157\x64\x65\x6c\57\166\x65\x6e\x64\157\x72\56\x70\150\x70";
        goto U42H3;
        AOMOI:
        f23to:
        goto NOkO3;
        c7Z4s:
        TMyvw:
        goto chLPU;
        dxcT5:
        goto dsd9n;
        goto hwCMX;
        BI4JX:
        $this->view->formRender = $UFPhr;
        goto gpCnF;
        lxLgB:
        $ueMso = $ll2VR->vaidate($_POST, $_FILES);
        goto qSgwy;
        DuPv2:
        FmfRe:
        goto gaL3R;
        JCMl4:
        $V0UUv->addElement("\x63\157\156\146\151\x72\x6d", "\103\157\156\x66\151\x72\x6d", "\143\x68\145\x63\x6b\x62\x6f\170", '', array(
            "\x6f\160\x74\x69\x6f\156\163" => array(
                1 => "\117\113"
            )
        ));
        goto NXJYd;
        A9hgS:
        if (! ($ueMso == true)) {
            goto WgLku;
        }
        goto IG3qD;
        pXmNh:
        $w3Iq6 = array(
            "\146\x65\145\144\142\x61\x63\153" => "\120\x61\171\155\145\156\x74\x20\x64\x65\x74\x61\151\x6c\163\x20\141\144\144\x65\144\40\x73\165\x63\143\145\163\x73\x66\165\x6c\154\171"
        );
        goto qaEwb;
        c9IvL:
        $V0UUv->addElement("\146\x5f\x73\x65\154\126\145\156\x64\x6f\x72", "\x56\145\156\144\157\x72", "\150\x69\x64\144\145\156", "\x72\x65\161\165\151\x72\145\x64");
        goto JCMl4;
        APPvM:
        if (! (count($hpNLA) > 0)) {
            goto wbB4G;
        }
        goto AF1AM;
        Mq8HT:
        goto EuHCu;
        goto SAoX_;
        c3P27:
        if (! (count($QwDPS) > 0)) {
            goto L3KAC;
        }
        goto baHou;
        qSgwy:
        $AzvOO = array(
            "\146\x5f\163\x65\154\126\x65\156\x64\x6f\162" => @$_POST["\x66\137\x73\145\154\126\145\x6e\x64\x6f\x72"],
            "\146\137\155\157\144\x65" => 2,
            "\x65\x78\160\x5f\160\x73\x74\x61\x74\165\163" => 2
        );
        goto waG9B;
        BJDZS:
        if (! $ueMso["\143\141\x73\x68\106\x6c\157\167"]) {
            goto amegt;
        }
        goto WlDWN;
        ufysj:
        $QwDPS = [];
        goto d4GGi;
        zxXVz:
        $V0UUv->addRules("\143\x68\161\x6e\x6f", "\162\x65\161\x75\151\x72\x65\x64");
        goto c7Z4s;
        haWbI:
        $this->view->balanceConfirm = $DX1_5;
        goto SxshL;
        CYT9C:
        $ll2VR = new form();
        goto kKRNT;
        ksqph:
        $DX1_5 = '';
        goto I2THN;
        d4GGi:
        $hpNLA = [];
        goto A9hgS;
        B9QSI:
        wbB4G:
        goto yG2cW;
        WlDWN:
        $F5Frd["\x70\141\x79\x5f\x63\141\163\150\x5f\x66\154\x6f\x77"] = $ueMso["\x63\x61\x73\x68\106\x6c\157\167"];
        goto eXRMD;
        ktpZZ:
        $ll2VR->addElement("\146\x5f\x73\145\x6c\x56\145\156\x64\157\162", "\x56\145\x6e\x64\157\x72", "\x73\x65\154\x65\143\x74", "\162\145\161\165\151\x72\x65\144", array(
            "\157\160\x74\x69\x6f\156\163" => $Cylu_
        ));
        goto QGkQ1;
        waG9B:
        $ueMso = $ll2VR->vaidate($_POST, $_FILES);
        goto mklk5;
        IhOhL:
        if (! (count($ueMso["\x63\150\145\143\x6b"]) > 0)) {
            goto wEczr;
        }
        goto cvmbW;
        c7NvU:
        $MI1ag->add($pjE_b);
        goto AOMOI;
        py8En:
        $this->view->response("\141\152\x61\x78");
        goto RSneH;
        eXRMD:
        amegt:
        goto lzqUB;
        cWyDX:
        $V0UUv->addElement("\x61\x6d\x6f\x75\156\x74", "\101\x6d\157\165\x6e\x74", "\x66\x6c\x6f\141\164", "\162\x65\161\165\151\162\x65\x64\174\156\x75\155\145\x72\151\x63", '', array(
            "\x63\x6c\141\x73\163" => "\x66\151\147"
        ));
        goto hssIx;
        xe44Y:
        dsd9n:
        goto N38qu;
        cCY_S:
        $pjE_b = array(
            "\x63\x62\x5f\164\x79\160\x65" => CASH_BOOK_PER,
            "\x63\x62\x5f\x74\171\x70\145\137\x72\145\x66" => USER_ID,
            "\143\142\137\x65\170\160\137\x69\144" => $oQSHX,
            "\143\142\x5f\x65\170\160\137\164\x79\x70\145" => 2,
            "\x63\142\137\x63\162\x65\x64\x69\x74" => $ueMso["\x63\142\x61\155\157\x75\156\164"] != '' ? $ueMso["\143\x62\141\x6d\x6f\x75\156\164"] : $ueMso["\x61\155\157\x75\x6e\x74"],
            "\143\142\137\144\x61\164\145" => $DILQY
        );
        goto c7NvU;
        e03gU:
        $V0UUv->addElement("\x70\x61\171\155\157\144", "\x43\141\163\x68\57\103\150\145\161\165\x65", "\162\141\x64\x69\x6f", "\x72\x65\x71\x75\151\162\145\x64", array(
            "\157\160\x74\x69\x6f\156\163" => array(
                1 => "\103\x61\163\x68",
                2 => "\x43\150\x65\161\x75\x65"
            )
        ));
        goto cWyDX;
        UiL33:
        $ueMso = $V0UUv->vaidate($_POST, $_FILES);
        goto NPT4d;
        NPT4d:
        $ueMso = $ueMso[0];
        goto ECCOf;
        SxshL:
    }

    function editAction()
    {
        goto Xq2VN;
        oV2iz:
        $AzvOO = array(
            "\x66\137\163\145\154\126\145\x6e\x64\x6f\162" => $Nvbqo["\160\x61\171\137\166\x65\x6e\144\157\x72"],
            "\146\x5f\155\157\x64\145" => 2,
            "\x70\144\145\x74\137\160\x61\x79\137\x69\x64" => $AUtQV,
            "\x65\170\160\x5f\160\x73\164\x61\164\165\x73" => 2
        );
        goto Ywi9f;
        tsl0w:
        zpjQL:
        goto LkMTH;
        WJNay:
        $AUtQV = $this->view->decode($this->view->param["\x72\145\146"]);
        goto Q3ncF;
        tK2b_:
        if (! (is_array($_POST["\143\x68\145\143\153"]) && count($_POST["\143\150\x65\x63\153"]) > 0)) {
            goto oCu9l;
        }
        goto LFI7W;
        gmqD9:
        $DX1_5 = '';
        goto WJNay;
        LkMTH:
        if (! ($ueMso["\160\145\162\143\142"] == '' && $Nvbqo["\x63\142\137\151\x64"] != '' && $Nvbqo["\x63\x62\x5f\164\x79\160\x65\137\x72\145\x66"] == USER_ID)) {
            goto qC2gM;
        }
        goto zjQba;
        jDQH_:
        $JXkLH = $JXkLH->format(DF_DD);
        goto dfFeP;
        Ckjce:
        if ($_POST) {
            goto l0Ue4;
        }
        goto vE17_;
        ggcPQ:
        $ueMso = $ll2VR->vaidate($_POST, $_FILES);
        goto GmtFV;
        PCNpI:
        if (! isset($_SERVER["\x48\x54\124\120\137\x58\x5f\122\x45\x51\x55\x45\x53\x54\x45\104\137\x57\x49\124\x48"]) and strtolower($_SERVER["\x48\x54\x54\x50\x5f\130\x5f\x52\105\x51\x55\x45\x53\124\105\x44\137\127\111\x54\x48"]) != "\x78\x6d\x6c\150\164\x74\x70\x72\x65\161\165\145\x73\x74") {
            goto QyFJ6;
        }
        goto t5wiJ;
        cK2Uo:
        $V0UUv->addElement("\156\x6f\164\145", "\x4e\x6f\x74\145", "\x74\145\170\164\x61\162\145\x61", '');
        goto nCQvO;
        qg5b5:
        $PIT1q = $GFDm4->getPaymentExpDet($AzvOO, "\144\x61\x74\145");
        goto iNJCs;
        raqKU:
        $this->view->NoViewRender = true;
        goto DM5nF;
        r8rGK:
        $V0UUv->addElement("\160\x61\171\142\x79", "\120\141\171\40\x44\141\x74\145", "\164\x65\x78\164", "\x64\x61\164\145\174\162\x65\x71\165\x69\x72\145\144", '', array(
            "\x63\154\x61\163\163" => "\x64\x61\164\x65\137\160\x69\143\x6b\x65\162"
        ));
        goto UuxwU;
        tUHnm:
        $MI1ag->add($pjE_b);
        goto tsl0w;
        R15FP:
        $V0UUv->cashFlow->setValue($Nvbqo["\160\141\171\x5f\x63\x61\163\x68\x5f\x66\x6c\x6f\167"]);
        goto MeZJZ;
        o8IkO:
        DwNMS:
        goto oC1FK;
        YabJ5:
        if (! ($ueMso == true)) {
            goto OoXOr;
        }
        goto FV25r;
        oC1FK:
        require_once __DIR__ . "\57\56\56\x2f\x61\x64\155\x69\x6e\57\x21\x6d\157\x64\x65\154\x2f\x63\141\163\150\x62\x6f\157\153\56\160\x68\160";
        goto D_xlg;
        MBR3G:
        $F5Frd = array(
            "\160\x61\171\137\x76\145\x6e\144\x6f\x72" => $ueMso["\x66\137\163\145\154\x56\x65\156\x64\x6f\x72"],
            "\x70\x61\171\137\x61\x6d\157\165\x6e\164" => $ueMso["\141\155\157\x75\x6e\164"],
            "\x70\x61\x79\x5f\160\141\x79\x64\x61\x74\145" => $DILQY,
            "\160\x61\x79\x5f\x70\141\x79\x5f\155\x6f\x64\x65" => $ueMso["\x70\x61\x79\x6d\157\144"],
            "\x70\141\171\137\x63\150\161\156\157" => $ueMso["\143\150\x71\x6e\157"],
            "\160\x61\171\x5f\162\145\x6d\141\x72\153\x73" => $ueMso["\156\x6f\164\145"]
        );
        goto pO52G;
        A5Q7u:
        goto Y_GlY;
        goto ZekSu;
        dph7F:
        Bz2lD:
        goto BaFLL;
        pjoyv:
        pnKf_:
        goto cDAyp;
        hHCZU:
        la38B:
        goto tK2b_;
        pO52G:
        if (! $ueMso["\143\141\163\x68\106\154\157\x77"]) {
            goto DE4wH;
        }
        goto OE3oo;
        DUaZI:
        $N_oH4 = new payment();
        goto a96RM;
        sLUxH:
        $PIT1q = [];
        goto C5v9G;
        d3KGX:
        foreach ($_POST["\x63\x68\145\x63\153"] as $tcvl7 => $mqInl) {
            goto nT_Am;
            b2aC5:
            egp0A:
            goto BijxU;
            ThffI:
            if (! ($mqInl != '')) {
                goto egp0A;
            }
            goto uxbUn;
            BijxU:
            tqbv1:
            goto eWJ5y;
            nT_Am:
            $dtSIX = $_POST["\144\x69\x73\x63\x6f\x75\156\164"][$d8rwD] == '' ? 0 : $_POST["\x64\151\163\143\x6f\165\x6e\164"][$tcvl7];
            goto o35OJ;
            oRngS:
            $RSNEV = $J3ntK->add($F5Frd);
            goto b2aC5;
            o35OJ:
            $o1Zka = $_POST["\x6d\141\x6d\157\165\156\164"][$d8rwD] == '' ? 0 : $_POST["\x6d\x61\x6d\157\x75\156\x74"][$tcvl7];
            goto ThffI;
            uxbUn:
            $F5Frd = array();
            goto RNfOx;
            RNfOx:
            $F5Frd = array(
                "\160\x64\145\164\x5f\x70\141\171\137\151\144" => $AUtQV,
                "\x70\x64\145\x74\x5f\145\170\160\137\x69\144" => $tcvl7,
                "\160\x64\x65\164\137\x61\155\164\137\164\157\160\141\x79" => $CTyrL[$tcvl7],
                "\160\x64\145\x74\137\141\x6d\x74\x5f\160\141\x69\144" => $ueMso["\x6d\x61\x6d\157\165\156\x74"][$tcvl7],
                "\160\x64\145\x74\137\141\155\x74\x5f\144\x69\163" => $ueMso["\144\x69\x73\x63\x6f\x75\x6e\164"][$tcvl7] == '' ? NULL : $ueMso["\x64\x69\163\x63\x6f\165\156\x74"][$tcvl7],
                "\160\x64\x65\x74\x5f\141\x6d\x74\x5f\142\x61\154" => $CTyrL[$tcvl7] - $dtSIX - $o1Zka
            );
            goto oRngS;
            eWJ5y:
        }
        goto wM05L;
        vE17_:
        $JXkLH = DateTime::createFromFormat(DFS_DB, $Nvbqo["\160\141\x79\x5f\160\141\x79\x64\x61\x74\145"]);
        goto jDQH_;
        tsqQj:
        $V0UUv->addElement("\143\x68\x71\156\157", "\x43\150\145\x71\x75\145\40\116\x6f\x20", "\164\x65\170\x74", '');
        goto cK2Uo;
        MZkfj:
        $ll2VR->addElement("\x66\137\163\145\154\126\145\x6e\x64\157\162", "\x56\145\x6e\144\157\162", "\x73\145\154\x65\143\x74", "\x72\145\x71\165\x69\x72\145\x64", array(
            "\157\x70\x74\151\157\156\x73" => $Cylu_
        ));
        goto yTd1j;
        AdMvx:
        $QwDPS = $q8uOc->getPaymentDetByApproval(array(
            "\160\x64\x65\x74\x5f\163\164\x61\x74\x75\163" => 1,
            "\160\144\x65\x74\x5f\160\141\171\x5f\151\x64\137\145\x78\x63\x6c\x75\144\x65" => $AUtQV
        ));
        goto qVMLU;
        HopQH:
        require_once __DIR__ . "\x2f\x2e\56\x2f\x61\x64\155\151\x6e\x2f\x21\155\157\x64\145\x6c\x2f\145\170\160\145\156\x73\x65\x2e\160\x68\160";
        goto cx8zM;
        pCktM:
        $V0UUv->addElement("\x63\142\x61\x6d\157\165\156\164", "\103\x42\x20\101\x6d\157\x75\x6e\x74", "\x66\154\x6f\141\x74", "\156\x75\x6d\x65\x72\151\143", '', array(
            "\143\x6c\141\163\163" => "\146\151\x67"
        ));
        goto r8rGK;
        ru4lb:
        $V0UUv->cbamount->setValue($Nvbqo["\x63\x62\x5f\x63\x72\145\x64\151\x74"]);
        goto sdUBD;
        C5v9G:
        goto m_7xF;
        goto lUbWl;
        OE3oo:
        $F5Frd["\x70\x61\171\x5f\143\141\163\150\137\146\x6c\157\167"] = $ueMso["\x63\141\x73\x68\106\x6c\157\x77"];
        goto F_xkp;
        sEZ5y:
        if (! ($Nvbqo["\x63\x62\137\151\144"] != '')) {
            goto lcfNN;
        }
        goto vLmAr;
        c3JPj:
        G3L_6:
        goto bZuRK;
        cDAyp:
        Y_GlY:
        goto MpwzJ;
        dfFeP:
        $ll2VR->f_selVendor->setValue($Nvbqo["\x70\x61\171\x5f\x76\145\x6e\x64\x6f\162"]);
        goto noMh4;
        C_2_o:
        $V0UUv->note->setValue($Nvbqo["\x70\x61\171\x5f\x72\145\155\x61\x72\153\x73"]);
        goto R15FP;
        YYz8H:
        $q8uOc = new paymentdet();
        goto AdMvx;
        vLmAr:
        $V0UUv->percb->setValue(1);
        goto ru4lb;
        xp5kV:
        require_once __DIR__ . "\x2f\56\56\x2f\141\144\x6d\x69\x6e\x2f\41\x6d\x6f\144\x65\154\57\x76\x65\156\144\x6f\162\x2e\160\x68\160";
        goto o_yfT;
        F_xkp:
        DE4wH:
        goto gQYAO;
        Oa432:
        $ueMso = $ueMso[0];
        goto XCCv8;
        lUbWl:
        c6_4s:
        goto xp5kV;
        yp00I:
        RE72j:
        goto eud2b;
        K5juJ:
        $w3Iq6 = json_encode($w3Iq6);
        goto SUafr;
        GmtFV:
        $ueMso = $ueMso[0];
        goto YabJ5;
        sdUBD:
        lcfNN:
        goto yZ6YE;
        Q3ncF:
        if ($AUtQV) {
            goto vyB4l;
        }
        goto Ie5Ou;
        yTd1j:
        require_once __DIR__ . "\x2f\x2e\x2e\57\x61\144\155\x69\x6e\x2f\41\155\157\x64\x65\x6c\57\143\x61\163\x68\x66\154\x6f\167\x2e\x70\x68\x70";
        goto KRYne;
        o41GC:
        l0Ue4:
        goto Rcmtf;
        irfhf:
        if (! ($ueMso == true)) {
            goto lgjI7;
        }
        goto YI2Wp;
        BaFLL:
        goto pnKf_;
        goto wPtId;
        wPtId:
        QyFJ6:
        goto hC2kW;
        nXN7Z:
        goto zpjQL;
        goto oRpOh;
        Ie5Ou:
        die("\x74\141\155\x70\145\162\x65\144");
        goto XT4bg;
        k0JsU:
        $V0UUv->addMultiElement("\155\x61\x6d\x6f\x75\x6e\164", "\x50\141\x79\155\145\x6e\x74", "\146\154\157\141\164", "\156\x75\x6d\x65\x72\x69\x63", '', array(
            "\x63\x6c\x61\163\x73" => "\x66\x6f\x72\x6d\55\143\x6f\156\x74\x72\x6f\x6c\55\x72\157\x77"
        ), $hpNLA);
        goto NNQJl;
        UuxwU:
        $V0UUv->addElement("\160\x61\x79\155\157\x64", "\103\141\x73\x68\57\103\x68\145\161\165\145", "\162\x61\144\151\157", "\x72\x65\161\165\x69\162\145\144", array(
            "\157\x70\164\x69\157\156\163" => array(
                1 => "\103\141\x73\150",
                2 => "\103\150\145\x71\165\145"
            )
        ));
        goto Zqvqi;
        PBd3V:
        $hpNLA = $GFDm4->getExpenseVendorPair($AzvOO);
        goto s3ofm;
        zOScB:
        OuXnr:
        goto t1kVZ;
        MpwzJ:
        if (! count($PIT1q)) {
            goto BsauL;
        }
        goto PBd3V;
        ihnp9:
        if (! (count($QwDPS) > 0)) {
            goto RE72j;
        }
        goto qFp1h;
        RcD_H:
        RZwgR:
        goto fCCDd;
        oRpOh:
        JQjDP:
        goto Stky8;
        QS7pi:
        $AzvOO = array(
            "\146\137\x73\x65\x6c\126\145\x6e\x64\157\162" => $ueMso["\x66\137\x73\145\x6c\126\x65\156\x64\157\x72"],
            "\x66\x5f\x6d\157\144\x65" => 2,
            "\x65\170\x70\137\x70\163\164\141\164\x75\163" => 2
        );
        goto ihnp9;
        zfJcc:
        $V0UUv->addErrorMsg("\x61\x6d\157\165\156\164", "\151\x6e\x76\x61\x6c\x69\x64", "\x28" . ($b54T1 - floatval($_POST["\x61\x6d\157\x75\x6e\164"])) . "\x29\x20\115\151\x73\155\141\164\143\150\x20\167\x69\x74\150\40\164\157\164\x61\x6c\40\x61\155\157\x75\156\164\x20\x28" . $b54T1 . "\51");
        goto TmSbD;
        kcZ9X:
        vJIQ5:
        goto BSaKg;
        s3ofm:
        $CTyrL = $GFDm4->getExpenseAmountPair($AzvOO);
        goto xyDHF;
        KRYne:
        $xf3CG = new cashflow();
        goto Y6u1A;
        q45c7:
        $ueMso = $ueMso[0];
        goto irfhf;
        qVMLU:
        if ($_POST) {
            goto V21ad;
        }
        goto oV2iz;
        HsQM5:
        $ueMso = $V0UUv->vaidate($_POST, $_FILES);
        goto q45c7;
        gOj2_:
        goto UbdRI;
        goto An6kn;
        yNOQu:
        JGSEm:
        goto sEZ5y;
        NMBZm:
        if ($ueMso["\160\x65\162\x63\x62"] == 1 && $Nvbqo["\143\142\137\x69\144"] != '' && $Nvbqo["\143\x62\137\164\171\160\145\x5f\x72\145\x66"] == USER_ID) {
            goto JQjDP;
        }
        goto JNtsz;
        AgOwE:
        $Nvbqo = $N_oH4->getPaymentDetByPaymentId(array(
            "\x70\x61\171\137\x69\144" => $AUtQV
        ));
        goto IabXE;
        SLVjb:
        BsauL:
        goto Ckjce;
        Stky8:
        $MI1ag->modify($pjE_b, $Nvbqo["\143\x62\137\x69\144"]);
        goto VIiRz;
        VFDRs:
        $this->view->form1 = $ll2VR;
        goto Tp95q;
        XCCv8:
        if (! ($ueMso == true)) {
            goto Bz2lD;
        }
        goto QS7pi;
        ZekSu:
        V21ad:
        goto PCNpI;
        iwkjg:
        $Cylu_ = $XmN32->getVendorPair();
        goto MZkfj;
        X7UuB:
        OoXOr:
        goto gOj2_;
        xyDHF:
        $V0UUv->addMultiElement("\143\150\145\143\153", "\x53\x65\154\145\x63\164\x20\x62\x69\x6c\154", "\143\150\x65\143\x6b\x62\x6f\170", '', array(
            "\157\160\x74\151\157\x6e\x73" => array(
                1 => ''
            )
        ), array(
            '' => "\x6f\x6e\x43\x6c\x69\x63\x6b\x3d\x27\x74\157\147\x67\154\x65\x48\145\151\x67\x68\x74\x28\x74\x68\151\x73\x29\47",
            "\143\x6c\141\x73\163" => "\x62\151\x6c\x6c\55\x73\x65\x6c\145\x63\164"
        ), $hpNLA);
        goto k0JsU;
        sCttD:
        $V0UUv->addElement("\160\145\162\143\142", "\x50\145\162\163\157\x6e\141\154\40\103\x61\163\150\x20\x42\x6f\x6f\153", "\143\x68\x65\x63\x6b\x62\x6f\170", '', array(
            "\157\x70\x74\x69\157\x6e\x73" => array(
                1 => "\x50\145\162\x73\157\156\x6e\x61\154\x20\x43\x61\x73\150\40\102\x6f\x6f\153"
            )
        ));
        goto pCktM;
        FA_ZO:
        die("\x2d\x2d\55");
        goto NlczR;
        aOg9f:
        $GFDm4 = new expense();
        goto gxacf;
        JNtsz:
        if ($ueMso["\160\x65\x72\x63\x62"] == 1 && $Nvbqo["\143\142\137\x69\x64"] == '') {
            goto WfTEW;
        }
        goto nXN7Z;
        SUafr:
        die($w3Iq6);
        goto kcZ9X;
        Zqvqi:
        $V0UUv->addElement("\x61\x6d\157\x75\x6e\x74", "\x41\x6d\157\165\x6e\x74", "\146\x6c\x6f\141\164", "\162\145\161\165\x69\x72\145\144\174\156\x75\x6d\x65\x72\x69\143", '', array(
            "\143\x6c\141\163\163" => "\146\151\x67"
        ));
        goto tsqQj;
        o_yfT:
        $XmN32 = new vendor();
        goto iwkjg;
        SC5he:
        $this->view->formPostStatus = $cltaS;
        goto wJ561;
        mLa_A:
        $V0UUv->addErrorMsg("\x6d\141\155\157\165\156\164", "\162\x65\x71\165\x69\x72\x65\x64", "\40");
        goto SLVjb;
        FV25r:
        if (! (is_array($hpNLA) && count($hpNLA) > 0)) {
            goto HIq7m;
        }
        goto xr3S4;
        X5vAn:
        $V0UUv->addElement("\x63\141\x73\150\x46\x6c\x6f\x77", "\x43\x61\x73\x68\x20\x46\154\157\x77", "\163\x65\x6c\x65\143\164", '', array(
            "\x6f\x70\x74\x69\x6f\156\x73" => $OAe5B
        ));
        goto sCttD;
        jP6Sc:
        if (! (count($_POST["\x63\150\145\x63\x6b"]) > 0)) {
            goto DwNMS;
        }
        goto d3KGX;
        dqMG2:
        require_once __DIR__ . "\57\56\x2e\x2f\x61\144\x6d\x69\x6e\x2f\41\x6d\x6f\x64\145\x6c\x2f\160\x61\171\x6d\x65\x6e\164\56\x70\150\x70";
        goto DUaZI;
        Vj9Fj:
        $V0UUv->amount->setValue($Nvbqo["\160\x61\x79\137\141\155\x6f\165\156\x74"]);
        goto SkLBa;
        SkLBa:
        $V0UUv->payby->setValue($JXkLH);
        goto O82dj;
        BSaKg:
        lgjI7:
        goto cWuS0;
        Y6u1A:
        $OAe5B = $xf3CG->getCashFlowPair();
        goto X5vAn;
        a96RM:
        require_once __DIR__ . "\x2f\56\56\57\141\x64\155\x69\156\x2f\41\155\x6f\x64\145\154\57\x70\141\x79\155\145\156\x74\144\145\164\x2e\x70\x68\160";
        goto yA756;
        IabXE:
        if ($Nvbqo["\160\x61\x79\x5f\x61\160\160\137\x73\x74\x61\x74\x75\163"] == 0) {
            goto c6_4s;
        }
        goto sLUxH;
        McVhr:
        $DILQY = date_format($DILQY, DFS_DB);
        goto MBR3G;
        OLMxm:
        $ueMso = $ll2VR->vaidate($_POST, $_FILES);
        goto Oa432;
        QKG6N:
        HIq7m:
        goto X7UuB;
        sQ3ol:
        $V0UUv->addElement("\x63\157\156\x66\x69\x72\155", "\103\157\156\146\x69\162\155", "\143\150\x65\143\153\x62\x6f\x78", '', array(
            "\x6f\160\164\151\157\156\x73" => array(
                "\61" => "\x4f\x4b"
            )
        ));
        goto aOg9f;
        Xq2VN:
        $this->view->response("\141\x6a\x61\x78");
        goto HopQH;
        O82dj:
        $V0UUv->paymod->setValue($Nvbqo["\160\x61\x79\x5f\x70\141\171\137\155\157\x64\145"]);
        goto PM5Z6;
        PNVgg:
        $this->view->expenseList = $PIT1q;
        goto GeiJS;
        zkvq9:
        DkTN_:
        goto qg5b5;
        hC2kW:
        die("\55\55\x2d");
        goto pjoyv;
        kEb2l:
        if (! $sQnRb) {
            goto vJIQ5;
        }
        goto gyI62;
        YI2Wp:
        $DILQY = DateTime::createFromFormat(DF_DD, $ueMso["\160\x61\x79\142\x79"]);
        goto McVhr;
        DM5nF:
        $w3Iq6 = array(
            "\146\x65\x65\144\142\141\x63\153" => "\x50\x61\x79\x6d\x65\156\164\x20\x64\145\x74\x61\151\154\163\40\x75\x70\144\x61\164\145\x64\40\x73\165\x63\143\x65\x73\163\146\x75\154\154\x79"
        );
        goto K5juJ;
        Tp95q:
        $this->view->formRender = $UFPhr;
        goto PNVgg;
        qFp1h:
        $AzvOO["\145\170\143\154\165\144\145"] = implode("\x2c", $QwDPS);
        goto yp00I;
        VIiRz:
        goto zpjQL;
        goto xLk9M;
        yZ6YE:
        goto OuXnr;
        goto o41GC;
        nCQvO:
        $V0UUv->addElement("\146\137\163\145\154\x56\x65\156\x64\x6f\162", "\126\145\156\144\x6f\x72", "\150\x69\x64\x64\145\156", "\162\x65\161\165\151\x72\x65\x64");
        goto sQ3ol;
        MeZJZ:
        foreach ($PIT1q as $sU2o3) {
            goto k54g8;
            ksU85:
            TxTHy:
            goto KA4oK;
            qt2Qi:
            $V0UUv->check[$sU2o3["\x65\170\x70\137\x69\x64"]]->setValue(1);
            goto zF7DP;
            zF7DP:
            rV03s:
            goto XQa7B;
            k54g8:
            if (! ($sU2o3["\160\x64\145\x74\137\x61\155\x74\x5f\x70\141\x69\144"] + $sU2o3["\x70\144\145\x74\x5f\x61\x6d\x74\x5f\144\151\x73"] > 0)) {
                goto rV03s;
            }
            goto qt2Qi;
            XQa7B:
            $V0UUv->discount[$sU2o3["\145\170\x70\137\x69\x64"]]->setValue($sU2o3["\x70\x64\145\164\137\141\155\x74\137\144\151\163"]);
            goto kDhTg;
            kDhTg:
            $V0UUv->mamount[$sU2o3["\145\x78\x70\137\151\x64"]]->setValue($sU2o3["\x70\x64\x65\164\x5f\141\x6d\164\137\x70\x61\x69\x64"]);
            goto ksU85;
            KA4oK:
        }
        goto yNOQu;
        bhTRh:
        $pjE_b = array(
            "\x63\142\x5f\164\171\160\145" => CASH_BOOK_PER,
            "\x63\x62\137\x74\171\160\x65\137\x72\x65\146" => USER_ID,
            "\x63\142\x5f\x65\170\x70\x5f\x69\144" => $AUtQV,
            "\x63\x62\x5f\x65\x78\160\137\164\x79\160\145" => 2,
            "\x63\142\137\x63\162\x65\144\x69\x74" => $ueMso["\x63\x62\141\155\x6f\165\156\x74"] != '' ? $ueMso["\x63\x62\141\x6d\x6f\165\156\164"] : $ueMso["\141\x6d\x6f\165\x6e\x74"],
            "\143\x62\x5f\144\x61\164\x65" => $DILQY
        );
        goto NMBZm;
        t1kVZ:
        m_7xF:
        goto NjGqY;
        Gg5XV:
        $V0UUv->addRules("\143\x68\161\156\x6f", "\x72\x65\x71\165\x69\162\145\144");
        goto hHCZU;
        PM5Z6:
        $V0UUv->chqno->setValue($Nvbqo["\x70\x61\171\x5f\x63\150\161\x6e\157"]);
        goto C_2_o;
        zjQba:
        $MI1ag->deleteCashBook($Nvbqo["\x63\142\137\151\144"]);
        goto IPu53;
        xLk9M:
        WfTEW:
        goto tUHnm;
        gxacf:
        require_once __DIR__ . "\x2f\x2e\56\57\x61\x64\155\x69\156\x2f\41\x6d\x6f\144\x65\x6c\57\x70\141\171\155\x65\156\x74\144\x65\164\56\160\x68\160";
        goto YYz8H;
        bZuRK:
        if (! ((string) $b54T1 != $_POST["\x61\155\157\x75\156\164"] && $_POST["\x61\155\x6f\165\156\x74"] != '')) {
            goto OY5Mu;
        }
        goto IUIoY;
        STXvN:
        $ll2VR = new form();
        goto Mb6RP;
        iNJCs:
        unset($AzvOO["\160\144\145\x74\137\160\x61\171\137\x69\x64"]);
        goto A5Q7u;
        TmSbD:
        OY5Mu:
        goto HsQM5;
        gQYAO:
        $sQnRb = $N_oH4->modify($F5Frd, $AUtQV);
        goto kEb2l;
        NjGqY:
        $this->view->form2 = $V0UUv;
        goto VFDRs;
        IUIoY:
        $V0UUv->addRules("\x61\155\x6f\x75\x6e\x74", "\151\156\166\x61\154\x69\x64");
        goto zfJcc;
        D_xlg:
        $MI1ag = new cashbook();
        goto bhTRh;
        yA756:
        $J3ntK = new paymentdet();
        goto AgOwE;
        mflfp:
        $AzvOO["\145\170\143\154\165\144\145"] = implode("\54", $QwDPS);
        goto zkvq9;
        Mb6RP:
        $V0UUv = new form();
        goto gmqD9;
        NlczR:
        UbdRI:
        goto zOScB;
        wM05L:
        RJFv9:
        goto o8IkO;
        t5wiJ:
        $cltaS = true;
        goto OLMxm;
        fupG4:
        $this->view->balanceConfirm = $DX1_5;
        goto SC5he;
        epLU8:
        $V0UUv->f_selVendor->setValue($_POST["\x66\137\163\x65\x6c\x56\145\x6e\144\157\x72"]);
        goto ggcPQ;
        xr3S4:
        if (! ($_POST["\160\x61\171\x6d\x6f\x64"] == "\62")) {
            goto la38B;
        }
        goto Gg5XV;
        cWuS0:
        oCu9l:
        goto QKG6N;
        NNQJl:
        $V0UUv->addMultiElement("\x64\151\x73\x63\x6f\x75\156\164", "\104\x69\163\x63\157\x75\x6e\x74", "\146\154\x6f\141\x74", "\156\x75\x6d\145\x72\x69\x63", '', array(
            "\x63\154\141\163\163" => "\146\157\162\x6d\55\143\157\x6e\164\162\157\x6c\55\162\x6f\x77"
        ), $hpNLA);
        goto mLa_A;
        Ywi9f:
        if (! (count($QwDPS) > 0)) {
            goto DkTN_;
        }
        goto mflfp;
        gyI62:
        $q57eo = $J3ntK->deletePayDetByExpId(array(
            "\160\144\145\x74\x5f\160\141\171\137\x69\x64" => $AUtQV
        ));
        goto jP6Sc;
        noMh4:
        $V0UUv->f_selVendor->setValue($Nvbqo["\160\x61\x79\137\x76\x65\156\x64\x6f\x72"]);
        goto Vj9Fj;
        LFI7W:
        foreach ($_POST["\143\x68\145\143\x6b"] as $d8rwD => $wQtsD) {
            goto u3UjZ;
            Qst9d:
            $DX1_5 = true;
            goto zNNmP;
            TVERl:
            $V0UUv->addErrorMsg("\143\157\x6e\x66\151\x72\155", "\x72\145\161\165\151\162\145\x64");
            goto akl25;
            qc6h5:
            $V0UUv->addmRules("\155\141\x6d\x6f\x75\156\164", $d8rwD, "\x69\x6e\166\x61\154\151\x64");
            goto pQQin;
            zNNmP:
            $V0UUv->addRules("\143\x6f\156\146\151\x72\x6d", "\162\145\x71\x75\x69\162\145\144", "\120\x6c\145\141\163\145\x20\143\x6f\156\146\x69\x72\x6d\x20\41\x21");
            goto TVERl;
            FipKB:
            if (! (! $DX1_5 && $CTyrL[$d8rwD] - $WIjyf - $s3swB > 0)) {
                goto NUkFx;
            }
            goto Qst9d;
            pQQin:
            $V0UUv->addErrorMsg("\155\x61\x6d\157\x75\x6e\164", "\151\x6e\166\x61\x6c\151\144", "\x21\41\x20\x69\163\40\76\x20\50\142\x69\154\154\x2d\x64\x69\163\x29\x20\x61\x6d\x6f\165\156\164");
            goto ZP7FS;
            AfK8L:
            AYDSG:
            goto ZJfcB;
            lkgzz:
            $WIjyf = $_POST["\x64\x69\x73\143\x6f\x75\156\x74"][$d8rwD] == '' ? 0 : $_POST["\144\151\163\x63\x6f\x75\x6e\164"][$d8rwD];
            goto bVI_g;
            ZJfcB:
            K2AQm:
            goto wmalb;
            Cy889:
            if (! (bcsub($CTyrL[$d8rwD], $_POST["\x64\x69\163\143\157\165\x6e\164"][$d8rwD], 3) < $_POST["\155\141\155\x6f\165\x6e\x74"][$d8rwD])) {
                goto FNYQC;
            }
            goto qc6h5;
            ZP7FS:
            FNYQC:
            goto lkgzz;
            u3UjZ:
            if (! ($_POST["\143\150\145\143\153"][$d8rwD] != '')) {
                goto AYDSG;
            }
            goto mtli_;
            mtli_:
            if (! ($_POST["\155\x61\x6d\x6f\165\x6e\x74"][$d8rwD] == '')) {
                goto zpyl2;
            }
            goto H_lFd;
            H_lFd:
            $V0UUv->addmRules("\x6d\141\x6d\x6f\165\156\x74", $d8rwD, "\151\156\x76\x61\154\x69\x64");
            goto Y5BPw;
            bVI_g:
            $s3swB = $_POST["\155\x61\x6d\x6f\165\156\164"][$d8rwD] == '' ? 0 : $_POST["\155\141\x6d\x6f\165\x6e\x74"][$d8rwD];
            goto FipKB;
            Y5BPw:
            $V0UUv->addErrorMsg("\155\141\155\157\x75\156\164", "\x69\x6e\x76\x61\154\x69\144", "\40");
            goto FJlPw;
            akl25:
            NUkFx:
            goto AfK8L;
            FJlPw:
            zpyl2:
            goto Cy889;
            wmalb:
        }
        goto RcD_H;
        Rcmtf:
        if (! isset($_SERVER["\x48\124\x54\x50\137\130\137\122\x45\121\x55\105\123\x54\x45\x44\x5f\x57\x49\124\x48"]) and strtolower($_SERVER["\110\124\x54\x50\137\130\x5f\122\x45\x51\125\x45\123\124\105\x44\137\127\x49\124\x48"]) != "\x78\155\x6c\150\x74\x74\x70\x72\x65\161\165\145\163\164") {
            goto B8wvV;
        }
        goto epLU8;
        XT4bg:
        vyB4l:
        goto dqMG2;
        An6kn:
        B8wvV:
        goto FA_ZO;
        IPu53:
        qC2gM:
        goto raqKU;
        cx8zM:
        $UFPhr = true;
        goto STXvN;
        fCCDd:
        foreach ($_POST["\x63\150\145\x63\153"] as $VI3wT => $PRont) {
            $b54T1 += $_POST["\x6d\141\155\157\165\156\164"][$VI3wT];
            f0z9C:
        }
        goto c3JPj;
        eud2b:
        $PIT1q = $GFDm4->geExpenseReport(@$AzvOO, "\144\x61\x74\145");
        goto dph7F;
        GeiJS:
        $this->view->billAmount = $CTyrL;
        goto fupG4;
        wJ561:
    }

    function listAction()
    {
        goto YmOfx;
        PQhX9:
        if (! (is_array($_GET) && count(array_filter($_GET)) > 0)) {
            goto FL4Cs;
        }
        goto wsEj2;
        l8hDy:
        $AzvOO = array(
            "\146\x5f\x73\145\154\126\x65\x6e\x64\157\162" => @$ueMso["\x66\x5f\163\145\x6c\126\x65\x6e\144\157\x72"]
        );
        goto ONjtc;
        TgG_q:
        $HdP19->reset();
        goto Io8NS;
        x3Xd6:
        $N7DbC = "\x62\164\156\x2d\x69\156\146\x6f";
        goto FhFbA;
        ONjtc:
        wS_uW:
        goto x3Xd6;
        Rhfex:
        $this->view->filter_class = $N7DbC;
        goto crrLL;
        OeIZy:
        $this->view->offset = $N_oH4->_voffset;
        goto BbGEi;
        z5GtI:
        $HdP19 = new form();
        goto jpo8D;
        sO98J:
        $N7DbC = "\x62\164\156\x2d\163\x65\143\157\x6e\x64\141\x72\x79";
        goto PQhX9;
        jpo8D:
        require_once __DIR__ . "\x2f\x2e\56\x2f\x61\144\x6d\x69\x6e\x2f\x21\155\x6f\144\x65\154\57\166\145\156\144\157\162\x2e\160\150\160";
        goto K70Pb;
        A8ZhB:
        $this->view->form = $HdP19;
        goto Rhfex;
        CUme0:
        $HdP19->addElement("\146\137\163\x65\x6c\126\x65\x6e\144\x6f\x72", "\126\145\156\144\157\x72", "\x73\x65\154\x65\143\164", '', array(
            "\x6f\160\164\151\x6f\x6e\x73" => $Cylu_
        ));
        goto IJK0Z;
        vh3Mx:
        $Cylu_ = $XmN32->getVendorPair();
        goto CUme0;
        Io8NS:
        unset($_GET);
        goto WQrUV;
        vzg8l:
        if (! ($ueMso == true)) {
            goto wS_uW;
        }
        goto l8hDy;
        XBHeB:
        $kmjWm = $N_oH4->getPaymentPaginate(@$AzvOO);
        goto OeIZy;
        BbGEi:
        $this->view->paymentList = $kmjWm;
        goto G1n3z;
        FhFbA:
        FL4Cs:
        goto XBHeB;
        WQrUV:
        fqYRk:
        goto sO98J;
        wsEj2:
        $ueMso = $HdP19->vaidate($_GET);
        goto I1Pdd;
        K70Pb:
        $XmN32 = new vendor();
        goto vh3Mx;
        m7l5S:
        $N_oH4 = new payment();
        goto z5GtI;
        I1Pdd:
        $ueMso = $ueMso[0];
        goto vzg8l;
        G1n3z:
        $this->view->paymentObj = $N_oH4;
        goto A8ZhB;
        IJK0Z:
        if (! (isset($_GET) && $_GET["\x63\x6c\x65\141\162"] == "\101\154\x6c")) {
            goto fqYRk;
        }
        goto TgG_q;
        YmOfx:
        require_once __DIR__ . "\x2f\56\56\57\141\x64\x6d\151\x6e\x2f\x21\x6d\x6f\144\x65\154\57\x70\141\x79\x6d\x65\156\164\x2e\160\x68\x70";
        goto m7l5S;
        crrLL:
    }

    function viewAction()
    {
        goto tqxDT;
        hPMxg:
        $this->view->payDet = $Nvbqo;
        goto iDUru;
        tqxDT:
        $this->view->response("\141\152\x61\170");
        goto zzIYy;
        eSgbz:
        $J3ntK = new paymentdet();
        goto AY2QM;
        nZQy3:
        $Nvbqo = $N_oH4->getPaymentDetByPayId(array(
            "\160\x61\x79\137\151\144" => $AUtQV
        ));
        goto pPaE3;
        Y2_2a:
        require_once __DIR__ . "\x2f\x2e\56\57\141\144\155\x69\x6e\57\x21\155\157\144\x65\x6c\x2f\x70\141\x79\x6d\145\x6e\x74\144\x65\x74\56\160\150\x70";
        goto eSgbz;
        sY1e1:
        die("\x74\141\155\x70\x65\162\x65\144");
        goto Rpl54;
        hoKlq:
        $N_oH4 = new payment();
        goto Y2_2a;
        Rpl54:
        oO3kb:
        goto YziYy;
        zzIYy:
        require_once __DIR__ . "\57\56\56\57\141\x64\155\x69\156\57\x21\x6d\x6f\x64\x65\154\57\x70\141\171\155\x65\x6e\164\56\x70\150\x70";
        goto hoKlq;
        pPaE3:
        $kmjWm = $J3ntK->getPaymentExpDet(array(
            "\160\144\x65\x74\x5f\x70\x61\171\x5f\x69\144" => $AUtQV
        ));
        goto w3sAK;
        w3sAK:
        if ($AUtQV) {
            goto oO3kb;
        }
        goto sY1e1;
        YziYy:
        $this->view->paymentList = $kmjWm;
        goto hPMxg;
        AY2QM:
        $AUtQV = $this->view->decode($this->view->param["\x72\x65\146"]);
        goto nZQy3;
        iDUru:
    }

    function approvalAction()
    {
        goto a7bip;
        fzeWZ:
        PWk52:
        goto BuS7C;
        fbN1u:
        $kmjWm = $GFDm4->getPaymentExpDet($AzvOO);
        goto aN9sL;
        MYNCw:
        $this->view->paymentList = $kmjWm;
        goto f4OrM;
        hj__V:
        $GFDm4 = new expense();
        goto P9rFX;
        wzewJ:
        mESSH:
        goto dPLT1;
        hR3zA:
        foreach ($kmjWm as $byzzP) {
            goto kAxu7;
            bnbDr:
            xbpkj:
            goto focgF;
            ZKawC:
            k9QJI:
            goto cuoPO;
            oDhIe:
            $dmW1F["\145\x78\160\x5f\160\x73\x74\141\x74\165\163"] = 1;
            goto bnbDr;
            focgF:
            $dmW1F["\145\170\160\x5f\x63\x72\x65\144\x69\x74\137\141\x6d\x74"] = $byzzP["\160\144\x65\x74\x5f\x61\x6d\x74\x5f\x62\141\x6c"];
            goto DeWQP;
            d8PRd:
            if (! ($byzzP["\160\144\x65\x74\137\x61\155\x74\x5f\x62\x61\x6c"] <= 0)) {
                goto xbpkj;
            }
            goto oDhIe;
            cuoPO:
            BYbia:
            goto uUheK;
            kAxu7:
            $dmW1F = array();
            goto vBZFM;
            DeWQP:
            $C4UEA = $NdIPg->modify($dmW1F, $byzzP["\x70\x64\145\164\x5f\x65\170\160\137\x69\x64"]);
            goto ZKawC;
            vBZFM:
            if (! $byzzP["\x70\x64\x65\x74\137\x69\x64"]) {
                goto k9QJI;
            }
            goto d8PRd;
            uUheK:
        }
        goto fzeWZ;
        TkHk_:
        $ueMso = $ueMso[0];
        goto JL7La;
        Z96I8:
        $this->view->form = $HdP19;
        goto EO6su;
        gOhfF:
        if (! $_POST) {
            goto mdsSg;
        }
        goto OsE2b;
        a7bip:
        $this->view->response("\141\152\141\x78");
        goto nzEyr;
        kENWv:
        die("\x74\141\x6d\160\x65\162\x65\144");
        goto d7mUi;
        BrY7X:
        $w3Iq6 = json_encode($w3Iq6);
        goto ftZDK;
        nzEyr:
        require_once __DIR__ . "\x2f\56\56\57\x61\x64\155\151\x6e\x2f\x21\155\157\x64\x65\154\57\x70\x61\171\x6d\145\156\x74\x2e\x70\x68\160";
        goto ddouP;
        OsE2b:
        if (! isset($_SERVER["\x48\x54\x54\x50\137\130\137\x52\105\x51\125\x45\123\124\105\x44\137\127\111\x54\x48"]) and strtolower($_SERVER["\x48\x54\x54\120\137\x58\137\122\x45\121\125\105\123\124\x45\104\137\127\x49\x54\x48"]) != "\x78\x6d\x6c\x68\164\164\x70\162\145\x71\x75\145\x73\164") {
            goto AQONL;
        }
        goto udA3D;
        aliGk:
        $NdIPg = new expense();
        goto hR3zA;
        BuS7C:
        $W42k3["\x70\144\x65\164\x5f\163\164\141\164\165\x73"] = 2;
        goto b9ui0;
        ftZDK:
        die($w3Iq6);
        goto hWS0t;
        aN9sL:
        if ($AUtQV) {
            goto RqMEg;
        }
        goto kENWv;
        KqPUc:
        $w3Iq6 = array(
            "\x66\145\145\144\x62\x61\143\153" => $CGGv5
        );
        goto NCAed;
        t3NxL:
        if (! ($Nvbqo["\160\141\171\x5f\x61\160\160\x5f\163\x74\141\x74\165\x73"] == 0)) {
            goto tuQFW;
        }
        goto sXfhU;
        EE5_R:
        mdsSg:
        goto xvxM_;
        LDRid:
        die("\x2d\x2d\x2d");
        goto SNfVK;
        N1eFm:
        $HdP19->addElement("\x73\x74\x61\164\x75\x73", "\123\164\x61\x74\x75\163", "\143\x68\145\143\x6b\142\157\170", "\x72\x65\x71\x75\151\x72\x65\144", array(
            "\157\x70\164\x69\x6f\x6e\163" => array(
                "\x31" => "\x41\160\x70\x72\157\166\145\x64"
            )
        ));
        goto K1fGZ;
        r5mD2:
        require_once __DIR__ . "\x2f\56\x2e\x2f\x61\144\155\x69\156\x2f\41\x6d\x6f\144\x65\x6c\x2f\160\x61\171\155\145\156\164\x64\145\164\x2e\160\x68\x70";
        goto tfA5b;
        SNfVK:
        fDdd8:
        goto EE5_R;
        tfA5b:
        $J3ntK = new paymentdet();
        goto TUUTk;
        miXqK:
        $CGGv5 = "\x50\141\x79\x6d\145\156\x74\x73\40\163\x74\x61\164\165\163\40\x75\160\144\141\164\145\144\x20\x73\165\143\x63\145\x73\x73\146\165\154\x6c\171";
        goto Y1fEK;
        Xh3dT:
        $AUtQV = $this->view->decode($this->view->param["\162\145\x66"]);
        goto h_GCM;
        Y1fEK:
        $this->view->NoViewRender = true;
        goto KqPUc;
        Fqr1a:
        $HdP19 = new form();
        goto Xh3dT;
        d7mUi:
        RqMEg:
        goto N1eFm;
        udA3D:
        $ueMso = $HdP19->vaidate($_POST, $_FILES);
        goto TkHk_;
        EO6su:
        $this->view->formRender = $UFPhr;
        goto MYNCw;
        QQJI0:
        $F5Frd = array(
            "\160\x61\x79\x5f\141\x70\x70\137\x64\x61\164\145" => date_format(new DateTime(), "\131\55\x6d\55\144\40\x48\72\x69\x3a\x73"),
            "\160\x61\171\x5f\141\160\x70\137\163\164\x61\x74\x75\x73" => $ueMso["\163\164\141\164\x75\163"],
            "\x70\x61\x79\137\x61\160\x70\x5f\x6e\157\x74\145" => $ueMso["\x6e\x6f\164\x65"],
            "\160\x61\171\x5f\146\x69\x6c\x65\137\156\x6f" => "\120\x41\131" . "\x2f" . $AUtQV,
            "\x70\x61\171\137\x61\160\160\x5f\142\171" => $_SESSION["\165\x73\145\x72\137\x69\x64"]
        );
        goto DbWgm;
        h_GCM:
        $Nvbqo = $N_oH4->getPaymentDetById($AUtQV);
        goto t3NxL;
        K1fGZ:
        $HdP19->addElement("\156\157\164\x65", "\116\157\x74\x65\40", "\164\145\170\164\141\x72\x65\141", "\x72\x65\x71\165\151\x72\x65\x64\174\141\x6c\x70\150\141\137\163\160\x61\x63\x65");
        goto gOhfF;
        TUUTk:
        require_once __DIR__ . "\57\x2e\x2e\x2f\141\x64\155\151\156\x2f\x21\155\157\144\x65\154\57\x65\170\160\x65\x6e\163\x65\56\160\x68\x70";
        goto hj__V;
        JL7La:
        if (! ($ueMso == true)) {
            goto mESSH;
        }
        goto QQJI0;
        EsG1s:
        AQONL:
        goto LDRid;
        f4OrM:
        $this->view->payDet = $Nvbqo;
        goto uLz_l;
        P9rFX:
        $UFPhr = true;
        goto Fqr1a;
        IqLE7:
        if (! $sQnRb) {
            goto J4N30;
        }
        goto hKw_f;
        dPLT1:
        goto fDdd8;
        goto EsG1s;
        ddouP:
        $N_oH4 = new payment();
        goto r5mD2;
        sXfhU:
        $AzvOO = array(
            "\x66\137\163\145\x6c\x56\x65\156\x64\157\162" => $Nvbqo["\160\x61\171\137\166\145\156\144\157\162"],
            "\146\x5f\155\x6f\144\145" => 2,
            "\x70\144\145\x74\137\160\x61\171\x5f\x69\x64" => $AUtQV,
            "\x65\x78\160\137\x70\163\164\141\x74\165\x73" => 2
        );
        goto fbN1u;
        xvxM_:
        tuQFW:
        goto Z96I8;
        NCAed:
        $_SESSION["\x66\x65\145\144\x62\141\143\153"] = $CGGv5;
        goto BrY7X;
        DbWgm:
        $sQnRb = $N_oH4->modify($F5Frd, $AUtQV);
        goto IqLE7;
        hWS0t:
        J4N30:
        goto wzewJ;
        hKw_f:
        require_once __DIR__ . "\x2f\x2e\56\x2f\x61\x64\155\x69\x6e\x2f\x21\x6d\157\x64\x65\154\57\x65\170\160\x65\156\x73\x65\56\x70\150\160";
        goto aliGk;
        b9ui0:
        $J3ntK->modify($W42k3, array(
            "\160\x64\x65\x74\137\x70\x61\x79\x5f\x69\144" => $AUtQV
        ));
        goto miXqK;
        uLz_l:
    }

    function closeAction()
    {
        goto MJ3KZ;
        nL0ll:
        require_once __DIR__ . "\57\x2e\56\57\141\144\155\x69\x6e\x2f\x21\x6d\x6f\144\145\x6c\57\x70\141\171\x6d\145\156\x74\56\x70\150\160";
        goto Nknvk;
        C9mH2:
        $this->view->NoViewRender = true;
        goto ZAbCl;
        n7Xaf:
        if (isset($_POST) && count($_POST) > 0) {
            goto YP6Rp;
        }
        goto dZq20;
        HgfCj:
        require_once __DIR__ . "\x2f\x2e\x2e\x2f\x61\144\x6d\151\156\57\x21\155\157\144\145\154\x2f\145\x78\x70\145\156\x73\x65\56\x70\150\x70";
        goto n5ydu;
        P29mn:
        YP6Rp:
        goto DgoHz;
        Nknvk:
        $N_oH4 = new payment();
        goto HgfCj;
        MMOXB:
        $HdP19->addElement("\156\x6f\164\145", "\x4e\157\x74\x65\40", "\x74\145\170\164\x61\162\145\141", '');
        goto JXCN_;
        AF9rD:
        $kmjWm = $GFDm4->getPaymentExpDet($AzvOO);
        goto n7Xaf;
        ZUgze:
        if ($AUtQV) {
            goto sSJhg;
        }
        goto UPR_o;
        saroh:
        $this->view->NoViewRender = true;
        goto NAbTZ;
        Vdv20:
        $F5Frd = array(
            "\160\x61\171\x5f\x70\141\171\137\x73\x74\x61\x74\x75\x73" => 2,
            "\160\x61\x79\137\160\x61\x79\x5f\x6e\x6f\x74\145" => $ueMso["\x6e\157\164\x65"],
            "\x70\x61\171\137\x70\141\x79\x5f\x61\x70\x70\x5f\x64\x61\164\x65" => date_format(new DateTime(), "\x59\x2d\x6d\x2d\144\40\x48\x3a\151\x3a\x73")
        );
        goto jgWDD;
        C4d6x:
        $CGGv5 = "\120\141\171\155\145\x6e\x74\x73\x20\163\164\x61\164\x75\163\40\x75\x70\144\141\x74\145\144\x20\x73\165\x63\x63\x65\x73\x73\146\165\x6c\x6c\171";
        goto saroh;
        JB_Af:
        if (! $sQnRb) {
            goto FjMMt;
        }
        goto sYgJB;
        jgWDD:
        $sQnRb = $N_oH4->modify($F5Frd, $Nvbqo["\x70\141\x79\137\x69\144"]);
        goto JB_Af;
        fA7Bw:
        $this->view->payDet = $Nvbqo;
        goto PxkLa;
        NAbTZ:
        $w3Iq6 = array(
            "\x66\145\x65\x64\x62\x61\143\153" => $CGGv5
        );
        goto UM5Zo;
        jhJlE:
        J4Inu:
        goto w1eSV;
        r6GMl:
        p3ThN:
        goto uhJu3;
        uhJu3:
        $this->view->form = $HdP19;
        goto K4Ee3;
        kww3y:
        $Nvbqo = $N_oH4->getPaymentDetByPayId(array(
            "\160\x61\x79\x5f\151\x64" => $AUtQV
        ));
        goto TN8EY;
        ZAbCl:
        goto p3ThN;
        goto QnZsA;
        sYgJB:
        $HdP19->reset();
        goto C4d6x;
        n5ydu:
        $GFDm4 = new expense();
        goto g6_6i;
        UPR_o:
        die("\x74\141\155\x70\x65\162\145\144");
        goto YAMq8;
        DgoHz:
        $ueMso = $HdP19->vaidate($_POST, $_FILES);
        goto sAvEU;
        w1eSV:
        QASn7:
        goto r6GMl;
        lK0pu:
        FjMMt:
        goto jhJlE;
        sAvEU:
        $ueMso = $ueMso[0];
        goto FSoLj;
        xWkKw:
        $UFPhr = true;
        goto cVyES;
        FSoLj:
        if (! ($ueMso == true)) {
            goto J4Inu;
        }
        goto Vdv20;
        dZq20:
        $HdP19->note->setValue($Nvbqo["\x70\141\x79\x5f\160\141\x79\137\x6e\157\x74\x65"]);
        goto fhoZu;
        JXCN_:
        $AzvOO = array(
            "\x66\x5f\x73\x65\154\126\145\x6e\x64\x6f\162" => $Nvbqo["\x70\141\x79\x5f\166\x65\156\144\x6f\162"],
            "\146\137\x6d\x6f\144\x65" => 2,
            "\x70\144\145\x74\x5f\x70\x61\171\137\151\x64" => $AUtQV,
            "\160\x64\x65\x74\137\163\x74\x61\164\x75\x73" => 2
        );
        goto AF9rD;
        nfzyz:
        $AUtQV = $this->view->decode($this->view->param["\x72\145\x66"]);
        goto ZUgze;
        QnZsA:
        z241_:
        goto MMOXB;
        fhoZu:
        goto QASn7;
        goto P29mn;
        UM5Zo:
        $_SESSION["\146\145\145\144\142\141\143\153"] = $CGGv5;
        goto cTIv6;
        K4Ee3:
        $this->view->paymentList = $kmjWm;
        goto fA7Bw;
        TIQBf:
        die($w3Iq6);
        goto lK0pu;
        cTIv6:
        $w3Iq6 = json_encode($w3Iq6);
        goto TIQBf;
        TN8EY:
        if ($Nvbqo["\160\141\x79\x5f\x70\141\171\x5f\x73\x74\141\x74\165\163"] == 1) {
            goto z241_;
        }
        goto C9mH2;
        g6_6i:
        require_once __DIR__ . "\57\x2e\56\57\x61\144\155\x69\156\x2f\41\155\x6f\144\145\x6c\57\x64\157\143\165\x6d\145\156\164\x73\x2e\160\150\160";
        goto xWkKw;
        cVyES:
        $HdP19 = new form();
        goto nfzyz;
        MJ3KZ:
        $this->view->response("\x61\x6a\141\x78");
        goto nL0ll;
        YAMq8:
        sSJhg:
        goto kww3y;
        PxkLa:
    }

    function editoptionAction()
    {
        goto gBiDW;
        JeOXO:
        $this->view->payDet = $Nvbqo;
        goto IjwdU;
        Icolo:
        die("\55\55\x2d");
        goto cBtOq;
        d2nAl:
        lDNGC:
        goto F8VlQ;
        N017a:
        $N_oH4 = new payment();
        goto SYuKG;
        HaSCX:
        goto JFaWj;
        goto QTDOn;
        eyK5J:
        $J3ntK = new paymentdet();
        goto Wctlm;
        rT8Qb:
        $sQnRb = $N_oH4->modify($F5Frd, $AUtQV);
        goto EKU_o;
        T_wuw:
        $CGGv5 = "\111\x74\145\155\40\144\145\164\x61\151\x6c\x73\40\x61\x64\x64\145\x64\x20\163\x75\143\143\145\163\163\146\x75\154\x6c\171";
        goto eCLOB;
        SnLnR:
        wkERw:
        goto d2nAl;
        GyvPV:
        $w3Iq6 = array(
            "\x66\145\x65\x64\x62\141\143\x6b" => $CGGv5
        );
        goto PwG5p;
        fnJaz:
        if (! isset($_SERVER["\110\x54\x54\x50\x5f\130\x5f\122\105\121\x55\x45\123\x54\x45\x44\x5f\x57\x49\x54\x48"]) and strtolower($_SERVER["\x48\124\124\120\x5f\x58\137\122\105\121\x55\105\123\x54\105\104\137\127\x49\x54\x48"]) != "\x78\x6d\x6c\x68\x74\164\160\x72\145\161\165\145\x73\x74") {
            goto eO3Oc;
        }
        goto A2_Rp;
        XEobo:
        if (! ($Nvbqo["\x70\141\171\x5f\141\160\x70\137\163\x74\x61\164\165\x73"] == 1)) {
            goto lDNGC;
        }
        goto MrXTN;
        VTjq0:
        $AUtQV = $this->view->decode($this->view->param["\162\145\146"]);
        goto Ldcxf;
        QTDOn:
        eO3Oc:
        goto Icolo;
        Xl2CD:
        gve1c:
        goto p5r3I;
        b_JsJ:
        die("\x74\x61\x6d\160\145\162\145\144");
        goto Xl2CD;
        AhqJ8:
        EDyO6:
        goto rT8Qb;
        EKU_o:
        if (! $sQnRb) {
            goto lkgbG;
        }
        goto T_wuw;
        EpoDd:
        $kmjWm = $J3ntK->getPaymentExpDet(array(
            "\x70\144\x65\164\x5f\160\141\171\137\151\x64" => $AUtQV
        ));
        goto XEobo;
        KCVnb:
        acs5V:
        goto HaSCX;
        Wctlm:
        $Nvbqo = $N_oH4->getPaymentDetByPaymentId(array(
            "\x70\x61\x79\x5f\x69\x64" => $AUtQV
        ));
        goto EpoDd;
        p5r3I:
        require_once __DIR__ . "\x2f\56\x2e\x2f\x61\144\x6d\x69\156\57\x21\x6d\x6f\144\x65\x6c\x2f\x70\141\x79\155\145\x6e\x74\x2e\x70\x68\160";
        goto N017a;
        atpBY:
        goto wkERw;
        goto X9v7L;
        F8VlQ:
        $this->view->form2 = $V0UUv;
        goto mSgwW;
        iG2No:
        $OAe5B = $xf3CG->getCashFlowPair();
        goto KbPwy;
        gBiDW:
        $this->view->response("\x61\x6a\x61\170");
        goto uyesK;
        q3Ses:
        if (! ($ueMso == true)) {
            goto acs5V;
        }
        goto FK_uf;
        Ldcxf:
        if ($AUtQV) {
            goto gve1c;
        }
        goto b_JsJ;
        eQMlK:
        $xf3CG = new cashflow();
        goto iG2No;
        KbPwy:
        $V0UUv->addElement("\x63\x61\163\x68\106\x6c\x6f\x77", "\103\x61\x73\x68\40\x46\x6c\x6f\167", "\163\145\154\145\x63\164", '', array(
            "\x6f\160\x74\151\157\156\x73" => $OAe5B
        ));
        goto kMT__;
        S9E5Z:
        $ueMso = $ueMso[0];
        goto q3Ses;
        dgvRk:
        $V0UUv = new form();
        goto VTjq0;
        mSgwW:
        $this->view->paymentList = $kmjWm;
        goto JeOXO;
        TO3gy:
        lkgbG:
        goto KCVnb;
        PH9zY:
        die($w3Iq6);
        goto TO3gy;
        uyesK:
        require_once __DIR__ . "\x2f\56\x2e\x2f\141\x64\x6d\151\x6e\57\x21\x6d\157\x64\x65\x6c\x2f\x65\x78\160\x65\x6e\163\x65\56\x70\150\x70";
        goto FBSBS;
        cBtOq:
        JFaWj:
        goto SnLnR;
        kMT__:
        if ($_POST) {
            goto WmmWg;
        }
        goto FLfBX;
        jRNH4:
        $w3Iq6 = json_encode($w3Iq6);
        goto PH9zY;
        FLfBX:
        $V0UUv->cashFlow->setValue($Nvbqo["\x70\x61\x79\137\x63\141\163\x68\137\146\154\x6f\167"]);
        goto atpBY;
        eCLOB:
        $this->view->NoViewRender = true;
        goto GyvPV;
        PwG5p:
        $_SESSION["\x66\145\x65\144\142\x61\x63\x6b"] = $CGGv5;
        goto jRNH4;
        A2_Rp:
        $ueMso = $V0UUv->vaidate($_POST, $_FILES);
        goto S9E5Z;
        X9v7L:
        WmmWg:
        goto fnJaz;
        FBSBS:
        $UFPhr = true;
        goto dgvRk;
        FK_uf:
        if (! $ueMso["\143\x61\163\x68\x46\154\x6f\x77"]) {
            goto EDyO6;
        }
        goto G2lCj;
        SYuKG:
        require_once __DIR__ . "\x2f\56\x2e\57\x61\144\155\151\x6e\57\41\155\x6f\x64\145\x6c\57\160\x61\171\155\x65\x6e\x74\144\x65\x74\56\160\150\x70";
        goto eyK5J;
        G2lCj:
        $F5Frd["\160\141\171\137\x63\x61\163\x68\137\146\154\x6f\x77"] = $ueMso["\x63\x61\x73\150\106\x6c\157\167"];
        goto AhqJ8;
        MrXTN:
        require_once __DIR__ . "\x2f\56\x2e\x2f\x61\144\x6d\151\x6e\57\x21\155\157\144\145\x6c\57\143\x61\x73\150\x66\154\x6f\x77\56\x70\x68\160";
        goto eQMlK;
        IjwdU:
    }

    function remittanceAction()
    {
        goto TrsBG;
        l0qKX:
        if ($AUtQV) {
            goto LQFLz;
        }
        goto b2rDz;
        WVwg5:
        $this->view->payDet = $Nvbqo;
        goto qiOIr;
        Gcoqx:
        $N_oH4 = new payment();
        goto RTnH_;
        TrsBG:
        $this->view->response("\167\151\156\x64\x6f\167");
        goto rIWJ7;
        b2rDz:
        die("\164\141\x6d\160\145\162\145\x64");
        goto fwtFG;
        qKP2V:
        $AUtQV = $this->view->decode($this->view->param["\162\x65\146"]);
        goto B2pnZ;
        fwtFG:
        LQFLz:
        goto hIsn9;
        DcF7M:
        $GFDm4 = new expense();
        goto qKP2V;
        hIsn9:
        $this->view->paymentList = $kmjWm;
        goto WVwg5;
        RyGmu:
        $kmjWm = $GFDm4->getPaymentExpDet(array(
            "\x70\144\145\164\x5f\160\141\171\x5f\x69\144" => $Nvbqo["\x70\141\171\x5f\151\x64"],
            "\146\137\x73\145\x6c\126\x65\156\144\157\x72" => $Nvbqo["\160\141\x79\x5f\166\145\x6e\144\x6f\x72"],
            "\145\170\160\137\x70\x61\x79\137\x6d\157\144\x65" => 2
        ));
        goto l0qKX;
        rIWJ7:
        require_once __DIR__ . "\57\56\x2e\x2f\141\144\x6d\151\156\57\x21\155\x6f\144\x65\x6c\57\x70\141\171\155\145\156\x74\x2e\160\150\x70";
        goto Gcoqx;
        RTnH_:
        require_once __DIR__ . "\57\x2e\x2e\x2f\x61\x64\155\x69\x6e\x2f\41\x6d\157\144\x65\x6c\57\x65\x78\x70\x65\156\163\145\56\x70\x68\160";
        goto DcF7M;
        B2pnZ:
        $Nvbqo = $N_oH4->getPaymentDetByPayId(array(
            "\160\141\x79\x5f\151\x64" => $AUtQV
        ));
        goto RyGmu;
        qiOIr:
    }

    function voucherAction()
    {
        goto jkUgJ;
        vVUjE:
        $this->view->formRender = $UFPhr;
        goto cdrby;
        ogY31:
        $ueMso = $ueMso[0];
        goto FYxC2;
        l9n1s:
        require_once __DIR__ . "\x2f\x2e\x2e\x2f\141\144\x6d\x69\156\x2f\41\x6d\157\144\x65\x6c\57\145\x78\160\145\x6e\163\x65\56\160\x68\x70";
        goto rSlE7;
        ASfW4:
        dBOIL:
        goto KVzxM;
        xEqOj:
        $HdP19->note->setValue($Nvbqo["\x70\141\x79\x5f\x70\x61\171\137\156\157\164\145"]);
        goto EdVHc;
        Bnnrk:
        $F5Frd = array(
            "\160\x61\x79\137\160\x61\x79\137\163\x74\141\x74\165\x73" => 1,
            "\x70\141\x79\137\x70\x61\171\137\x6e\157\x74\x65" => $ueMso["\x6e\x6f\x74\x65"],
            "\160\141\x79\137\x70\141\171\137\144\x61\164\x65" => $KObax
        );
        goto jqV_s;
        OQUlG:
        if ($Nvbqo["\160\141\x79\137\x61\x70\x70\x5f\x73\x74\141\164\165\x73"] == 1) {
            goto OYhh7;
        }
        goto s0wAl;
        s0wAl:
        $this->view->NoViewRender = true;
        goto vDTqB;
        mj2rW:
        $Nvbqo = $N_oH4->getPaymentDetByPayId(array(
            "\160\x61\x79\x5f\151\x64" => $AUtQV
        ));
        goto OQUlG;
        ld_F6:
        UzM2x:
        goto wjR37;
        d4PJ8:
        $HdP19->addElement("\x6e\157\164\145", "\116\157\x74\145\40", "\x74\x65\170\x74\x61\x72\x65\x61", '');
        goto kpXpU;
        ROZWU:
        $CGGv5 = "\x50\141\x79\155\145\156\x74\40\163\164\141\164\165\163\x20\x75\x70\x64\x61\x74\x65\x64\40\x73\x75\143\x63\145\163\163\146\x75\x6c\154\x79";
        goto AjnB5;
        oBF2E:
        deleteFile($Nvbqo["\x66\x69\x6c\145\x5f\x69\x64"]);
        goto KXOzI;
        Ohskv:
        $AzvOO = array(
            "\146\x5f\x73\145\x6c\126\145\x6e\x64\x6f\x72" => $Nvbqo["\160\141\171\x5f\x76\145\156\x64\157\162"],
            "\x66\137\x6d\157\x64\145" => 2,
            "\x70\144\x65\164\x5f\x70\141\x79\x5f\x69\144" => $AUtQV,
            "\x70\144\x65\x74\137\x73\164\141\164\165\x73" => 2
        );
        goto fxY6N;
        oYgSG:
        $wb_bN = $wb_bN->format(DF_DD);
        goto UXqpz;
        UXqpz:
        aNj88:
        goto xEqOj;
        HMEIN:
        require_once __DIR__ . "\57\56\56\57\141\x64\155\151\x6e\57\41\x6d\x6f\144\x65\x6c\57\x70\x61\x79\155\145\x6e\164\56\160\x68\160";
        goto KztqK;
        Fljhf:
        die($w3Iq6);
        goto rLLAd;
        h_lJv:
        if ($AUtQV) {
            goto V_nIv;
        }
        goto oOek1;
        H6wE1:
        $iLcZ2 = uploadFiles(DOC_TYPE_PAY, $Nvbqo["\x70\141\171\137\x69\x64"], $ueMso["\155\x79\137\146\151\x6c\145\163"]);
        goto Pg6UU;
        puYEB:
        $N5hLW = new files();
        goto oBF2E;
        jkUgJ:
        $this->view->response("\141\x6a\x61\x78");
        goto HMEIN;
        XzwIP:
        $AUtQV = $this->view->decode($this->view->param["\162\x65\x66"]);
        goto h_lJv;
        u02Kw:
        OYhh7:
        goto d4PJ8;
        nbwGE:
        require_once __DIR__ . "\57\x2e\56\57\141\144\155\x69\156\x2f\41\x6d\157\x64\x65\154\x2f\144\157\143\x75\155\145\156\x74\163\56\x70\150\160";
        goto McaNa;
        fxY6N:
        $kmjWm = $GFDm4->getPaymentExpDet($AzvOO);
        goto v4iK3;
        McaNa:
        $UFPhr = true;
        goto kYF9V;
        nGRPu:
        if (empty($Nvbqo["\x66\151\154\145\137\151\144"])) {
            goto ZWqNv;
        }
        goto puYEB;
        kpXpU:
        $HdP19->addElement("\x70\141\x79\x64\x61\x74\x65", "\104\141\164\145", "\x74\145\x78\164", "\x64\141\164\x65\x7c\x72\x65\x71\165\x69\162\x65\x64", '', array(
            "\x63\x6c\141\163\x73" => "\x64\x61\164\145\137\x70\151\x63\x6b\x65\x72"
        ));
        goto SXP1_;
        s4vr4:
        $wb_bN = DateTime::createFromFormat(DFS_DB, $Nvbqo["\x70\x61\x79\137\x70\141\171\137\144\x61\x74\145"]);
        goto oYgSG;
        ppsoN:
        $HdP19->reset();
        goto ROZWU;
        FYxC2:
        if (! ($ueMso == true)) {
            goto hqJ3L;
        }
        goto LQFBy;
        s4PqV:
        $_SESSION["\x66\145\x65\144\142\x61\143\x6b"] = $CGGv5;
        goto EArIg;
        LQFBy:
        $KObax = DateTime::createFromFormat(DF_DD, $ueMso["\x70\141\171\144\141\x74\145"]);
        goto oqGr_;
        l4kaJ:
        ZWqNv:
        goto H6wE1;
        oOek1:
        die("\164\141\x6d\160\x65\162\x65\144");
        goto Or486;
        jqV_s:
        $sQnRb = $N_oH4->modify($F5Frd, $Nvbqo["\x70\x61\x79\x5f\151\144"]);
        goto HGa7A;
        cdrby:
        $this->view->paymentList = $kmjWm;
        goto ZAMgl;
        wjR37:
        $ueMso = $HdP19->vaidate($_POST, $_FILES);
        goto ogY31;
        oqGr_:
        $KObax = date_format($KObax, DFS_DB);
        goto Bnnrk;
        Or486:
        V_nIv:
        goto mj2rW;
        KVzxM:
        AL6BC:
        goto ssI81;
        HGa7A:
        if (! $sQnRb) {
            goto SyIVh;
        }
        goto nGRPu;
        vDTqB:
        goto AL6BC;
        goto u02Kw;
        xWirO:
        SyIVh:
        goto P0kCo;
        ZAMgl:
        $this->view->payDet = $Nvbqo;
        goto cVc5s;
        LIXXs:
        if (! $Nvbqo["\x70\x61\x79\x5f\x70\x61\x79\x5f\144\141\x74\x65"]) {
            goto aNj88;
        }
        goto s4vr4;
        EArIg:
        $w3Iq6 = json_encode($w3Iq6);
        goto Fljhf;
        rNwxI:
        $w3Iq6 = array(
            "\146\x65\x65\144\142\141\x63\x6b" => $CGGv5
        );
        goto s4PqV;
        KztqK:
        $N_oH4 = new payment();
        goto l9n1s;
        P0kCo:
        hqJ3L:
        goto ASfW4;
        SXP1_:
        $HdP19->addFile("\x6d\x79\137\x66\151\x6c\145\163", "\104\157\143\165\155\x65\x6e\164", array(
            "\x72\x65\x71\x75\x69\x72\x65\x64" => true,
            "\x65\x78\x74\x65\156" => "\x70\x64\x66",
            "\x73\151\x7a\145" => 5375000
        ));
        goto Ohskv;
        rLLAd:
        FcFsv:
        goto xWirO;
        EdVHc:
        $HdP19->paydate->setValue($wb_bN);
        goto aiXQE;
        Pg6UU:
        if (! $iLcZ2) {
            goto FcFsv;
        }
        goto ppsoN;
        KXOzI:
        $N5hLW->deleteFile($Nvbqo["\146\x69\x6c\x65\x5f\x69\x64"]);
        goto l4kaJ;
        v4iK3:
        if (isset($_POST) && count($_POST) > 0) {
            goto UzM2x;
        }
        goto LIXXs;
        AjnB5:
        $this->view->NoViewRender = true;
        goto rNwxI;
        ssI81:
        $this->view->form = $HdP19;
        goto vVUjE;
        kYF9V:
        $HdP19 = new form();
        goto XzwIP;
        rSlE7:
        $GFDm4 = new expense();
        goto nbwGE;
        aiXQE:
        goto dBOIL;
        goto ld_F6;
        cVc5s:
    }
}
