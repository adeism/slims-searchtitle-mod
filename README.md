
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
