# slims-searchtitle-mod
Modifikasi pencarian judul 

 case 'title':
                    $keywords = explode(" ", $token['q']); // Membagi kata kunci menjadi array
                    $likeClauses = [];
                    foreach ($keywords as $keyword) {
                        $this->execute[] = "%$keyword%";
                        $likeClauses[] = " b.title LIKE ?";
                    }
                    $sql_criteria .= "(" . implode(" AND ", $likeClauses) . ")";
                    break;
