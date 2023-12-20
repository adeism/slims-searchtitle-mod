
# slims-searchtitle-mod
Modifikasi pencarian judul pada DefaultEngine.php

````
case 'title':
                    $keywords = explode(" ", $token['q']); // Membagi kata kunci menjadi array
                    $likeClauses = [];
                    foreach ($keywords as $keyword) {
                        $this->execute[] = "%$keyword%";
                        $likeClauses[] = " b.title LIKE ?";
                    }
                    $sql_criteria .= "(" . implode(" AND ", $likeClauses) . ")";
                    break;
````
## Cara Menggunakan
- upload plugin ke folder plugin
- aktifkan plugin
- masuk menu sistem > Mesin Pencari > ganti ke SearchTitleMod


## Contoh Kasus web x dengan banyak data biblio (pencarian dengan kata : krisis 2002)
- DefaultEngine : Ditemukan 0 dari pencarian Anda melalui kata kunci: title=krisis 2002
- SearchBiblioEngine: menghasilkan 941 daftar biblio (menampilkan biblio dengan kata : krisis saja, 2002 saja, krisis dan 2002)
- SearchTitleMod : menghasilkan 11 daftar biblio (hanya menampilkan biblio yang mempunyai kata : krisis dan 2002)
