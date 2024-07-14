<?php
    require("./fpdf/tfpdf.php");
    include("dbaccess.php");

    $id = $_GET["id"];
    session_start();
    $rows = $conn->query("SELECT * FROM objednavky WHERE id = $id");
    $row = $rows->fetch_assoc();

    $pdf = new tFPDF();
    $pdf->AddPage();
    $pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
    $pdf->SetFont('DejaVu','',25);

    $pdf->Cell(190,5,"Faktura $id",0,1,'C');

    $pdf->SetFont("DejaVu","",15);
    $pdf->Cell(63,8,"Prodávající:",'B',0);
    $pdf->Cell(63,5,"",0,0);
    $pdf->Cell(63,8,"Kupující:",'B',1);

    $pdf->SetFont("DejaVu","",10);

    $pdf->Cell(126, 5, "CykloObchod s.r.o.", 0, 0);
    $pdf->Cell(130, 5,$row["jmeno"] . " " . $row["prijmeni"]. " (uživatelské ID: ". $row["user_id"].")", 0, 1);

    $pdf->Cell(126, 5, "info@bakalbradac.cz", 0, 0);
    $pdf->Cell(130, 5, $row["email"], 0, 1);

    $pdf->Cell(126, 5, "+420 720 389 259", 0, 0);
    $pdf->Cell(130, 5, $row["tel"], 0, 1);

    $pdf->Cell(126, 5,"Javorová 123", 0, 0);
    $pdf->Cell(130, 5,$row["ulice"], 0, 1);

    $pdf->Cell(126, 5,"252 44 Psáry, Dolní Jirčany", 0, 0);
    $pdf->Cell(130, 5,$row["psc"] . " " . $row["mesto"], 0, 1);

    $pdf->Cell(126, 5,"IČO: 74589632 DIČ: CZ74589632", 0, 0);
    if($row["firma"] != NULL){
    $pdf->Cell(130, 5,"Firma: ".$row["firma"], 0, 1);
    $pdf->Cell(126, 5,"", 0, 0);
    $pdf->Cell(130, 5," IČO: ". $row["ico"], 0, 1);
    $pdf->Cell(126, 5,"", 0, 0);
    $pdf->Cell(130, 5," DIČ: ". $row["dic"], 0, 1);
    }
    else {
        $pdf->Cell(130, 5,"", 0, 1);
    }

    if($row["prijmeniDod"] != NULL){
        $pdf->SetFont("DejaVu","",15);
        $pdf->Cell(63,8,"Datum nákupu:",'B',0);
        $pdf->Cell(63,5,"",0,0);
        $pdf->Cell(63,8,"Dodací adresa:",'B',1);

        $pdf->SetFont("DejaVu","",10);

        $pdf->Cell(126, 5, $row["datum"], 0, 0);
        $pdf->Cell(130, 5,$row["jmenoDod"] . " " . $row["prijmeniDod"], 0, 1);

        $pdf->Cell(126, 5,"", 0, 0);
        $pdf->Cell(130, 5,$row["uliceDod"], 0, 1);

        $pdf->Cell(126, 5,"", 0, 0);
        $pdf->Cell(130, 5,$row["pscDod"] . " " . $row["mestoDod"], 0, 1);
    } else {
        $pdf->SetFont("DejaVu","",15);
        $pdf->Cell(63,8,"Datum nákupu:",'B',0);
        $pdf->Cell(63,5,"",0,0);
        $pdf->Cell(63,8,"",0,1);

        $pdf->SetFont("DejaVu","",10);

        $pdf->Cell(126, 5, $row["datum"], 0, 0);
        $pdf->Cell(130, 5,"", 0, 1);

        $pdf->Cell(126, 5,"", 0, 0);
        $pdf->Cell(130, 5,"", 0, 1);

        $pdf->Cell(126, 5,"", 0, 0);
        $pdf->Cell(130, 5,"", 0, 1);
    }

    $pdf->Cell(190, 8, "", 'B', 1);

    $pdf->SetFont("DejaVu","",12);

    $pdf->Cell(30, 6, "Kód", 'B', 0);
    $pdf->Cell(90, 6, "Produkt", 'B', 0);
    $pdf->Cell(10, 6, "Ks", 'B', 0);
    $pdf->Cell(10, 6, "Vel.", 'B', 0);
    $pdf->Cell(25, 6, "Cena Ks", 'B', 0);
    $pdf->Cell(25, 6, "Cena", 'B', 1);

    $pdf->SetFont("DejaVu","",11);

    $produkt = $conn->query("SELECT * FROM obj_prod WHERE obj_id = $id");

    foreach ($produkt as $prod){
        $pdf->Cell(30, 6, $prod["kod"], 0, 0);
        $pdf->Cell(90, 6, $prod["nazev"], 0, 0);
        $pdf->Cell(10, 6, $prod["mnozstvi"], 0, 0, "C");
        $pdf->Cell(10, 6, $prod["velikost"], 0, 0, "C");
        $pdf->Cell(25, 6, $prod["cena"], 0, 0);
        $pdf->Cell(25, 6, $prod["celk_cena"], 0, 1);
    }
    $pdf->Cell(190, 0, "", 'B', 1);

    $pdf->SetFont("DejaVu","",12);

    $pdf->Cell(95, 8,'Celkem', 0, 0);
    $pdf->Cell(80, 8,"CZK ".$row["cena"], 0, 1, 'R');

    $pdf->Cell(190, 15,"",0,1);
    $pdf->Cell(95, 8,"Způsob doručení: ". $row["doruc"], 0, 0);
    $pdf->Cell(80, 8,"Způsob platby: ".$row["platba"], 0, 1, 'R');

    $pdf->Cell(190, 15, "", 0, 1);

    $pdf->SetFont("DejaVu","",8);

    $pdf->Cell(190, 3, "Doporučujeme zboží překontrolovat ihned po převzetí, pozdější připomínky ke stavu předávaného zboží mohou být zamítnuty. Kupující nabude", 0, 1);
    $pdf->Cell(190, 3, "vlastnického práva ke zboží až po úplném zaplacení kupní ceny. V ceně zboží je zahrnut recyklační poplatek a autorské odměny v zákonné výši.",0, 1);
    $pdf->Cell(190, 3, "Více informací o podmínkách záruky naleznete ve Všeobecných obchodních podmínkách a Reklamačním řádu na našich webových stránkách.", 0, 1);


    $pdf->Output();