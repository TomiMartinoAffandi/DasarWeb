<html>
    <head>
        <title>Data Siswa</title>
        <script src="jquery-3.7.1.js"></script>
        <script>
            $(document).ready(function(){
                $("#flip").click(function(){
                    $("table").slideToggle("slow");
            });
        });
        </script>
    </head>
    <style>
       table{
        display: flex;
        justify-content: center;
        background-color: cyan;
        padding: 40px;
       }

       #flip{
        border: solid 2px #e0e4cc;
        cursor: pointer;
        padding: 10px;
        background-color: cyan;
        text-align: center;
       }
       
       #rata-rata{
        text-align: center;
        font-weight: bold;
        font-size: 24px;
       }

        th{
        background-color:  aliceblue;
        padding: 10px;
        width: 300px;
        text-align: left;
        border: none;
       }

       td{
        padding: 10px;
       }
    </style>
    <body>
        <h1>Data Siswa</h1>
        <div>
            <div id="flip">click to show databasae</div>
            <table>
                <th>Nama</th>
                <th>Umur</th>
                <th>Kelas</th>
                <th>Alamat</th>
    
                <?php
                $listSiswa = array (
                    array("Andi", 15, "10A", "Malang"),
                    array("Siti", 16, "10B", "Blitar"),
                    array("Budi", 17, "10C", "Tulungagung"),
                    array("Anton", 18, "10D", "Kediri"),
                );
    
                for ($i=0; $i < count($listSiswa); $i++) {
                    echo"<tr>"; 
                    for ($j=0; $j < count($listSiswa[0]) ; $j++) { 
                        echo"<td>". $listSiswa[$i][$j]."</td>";
                    }
                    echo "</tr>";
                }
    
                $rataRata = array_sum(array_column($listSiswa, 1)) / count($listSiswa);
                ?>
            <tr>
                <td id="rata-rata" colspan="4">Rata-rata umur siswa: <?php echo $rataRata?> tahun</td>
            </tr>
            </table>
        </div> 
    </body>
</html>