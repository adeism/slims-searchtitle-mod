
# slims-searchtitle-mod
Modifikasi pencarian judul pada DefaultEngine.php

````
    case 'title':
        // Memecah kata kunci pencarian menjadi array
        $keywords = explode(" ", $token['q']);
        $likeClauses = [];

        // Iterasi melalui setiap kata kunci
        foreach ($keywords as $keyword) {
            // Menyiapkan kata kunci untuk digunakan dalam query
            $this->execute[] = "%$keyword%";
            $likeClauses[] = " b.title LIKE ?";
        }

        // Menggabungkan klausa LIKE untuk setiap kata kunci dengan AND
        $sql_criteria .= "(" . implode(" AND ", $likeClauses) . ")";
        break;
````


## Cara Menggunakan 
`Sebelum menggunakan, duplikasi slims utama Anda dan tes plugin pada aplikasi slims/komputer yang berbeda`

- upload plugin ke folder plugin
- aktifkan plugin
- masuk menu sistem > Mesin Pencari > ganti ke SearchTitleMod


## Contoh Kasus pada sample biblio bawaan SLiMS (pencarian dengan kata : Library Management)
- DefaultEngine : Ditemukan 0 dari pencarian Anda melalui kata kunci: Library Management
- SearchBiblioEngine: menghasilkan 3 daftar biblio (menampilkan biblio dengan kata : library saja, management saja, library dan management)
- SearchTitleMod : menghasilkan 1 daftar biblio (hanya menampilkan biblio yang mempunyai kata : library dan management)
