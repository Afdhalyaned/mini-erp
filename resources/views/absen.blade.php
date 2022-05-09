@php
$day = array('senin','selasa','rabu','kamis','jumat','sabtu','minggu');
$hour = array(1,2,3,4,5,6);
$dataAbsen = [
    ['senin',1,'budi'],
    ['senin',2,'anton'],
    ['rabu',4,'joko'],
    ['kamis',2,'susilo'],
    ['kamis',5,'bima'],
    ['kamis',6,'sandy'],
    ['jumat',4,'sulis'],
];

$absen = [];
foreach ($hour as $hourlist) {
    $absenHari = [$hourlist];
    foreach ($day as $dayList) {
        $dayListAbsen = null;
        foreach ($dataAbsen as $dataAbsenList) {
            if($dataAbsenList[0]==$dayList && $dataAbsenList[1] == $hourlist){
                $dayListAbsen = $dataAbsenList[2];
            }
        };
        array_push($absenHari, $dayListAbsen);
    };
    array_push($absen, $absenHari);
};

// dd($absen);
@endphp


<table border="1">
    <tr>
        <td>no</td>
        <td>Senin</td>
        <td>Selasa</td>
        <td>Rabu</td>
        <td>Kamis</td>
        <td>Jumat</td>
    </tr>
    @foreach ($absen as $item)
        <tr>
            <td>{{ $item[0] }}</td>
            <td>{{ $item[1] }}</td>
            <td>{{ $item[2] }}</td>
            <td>{{ $item[3] }}</td>
            <td>{{ $item[4] }}</td>
            <td>{{ $item[5] }}</td>
        </tr>
    @endforeach
</table>