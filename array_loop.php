$dataArray = ["gtAkademik", "gtFinansi", "gtPerizinan", "eCampuz", "eOviz"];
$panjangArray = count($dataArray);

$i = 0;
while ($i < $panjangArray)
{

    echo "$aplikasi[".$i."]" .$dataArray[$i] ."<br/>";
    $i++;

}
