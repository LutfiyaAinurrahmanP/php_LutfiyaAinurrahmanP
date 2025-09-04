<?php
return [
        'laporan_hobi' => "SELECT hobi, COUNT(DISTINCT person_id) as jumlah 
                      FROM hobi h 
                      JOIN person p ON h.person_id = p.id 
                      WHERE p.nama != '' 
                      GROUP BY hobi 
                      ORDER BY jumlah DESC",

        'search_hobi' => "SELECT p.nama, p.alamat, h.hobi 
                     FROM person p 
                     JOIN hobi h ON p.id = h.person_id 
                     WHERE h.hobi LIKE ? AND p.nama != ''
                     ORDER BY p.nama",

        'list_hobi' => "SELECT DISTINCT hobi FROM hobi ORDER BY hobi"
];
