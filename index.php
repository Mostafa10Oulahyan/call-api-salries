<?php
// headers باش نخليو response JSON
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json; charset=UTF-8");

// مثال ديال data
$users = [
    [
        "_id" => "s1",
        "nomsal" => "Mostafaa",
        "prenomsal" => "Oulahyane",
        "fonction" => "Chef de Projet",
        "service" => [
            "codeser" => "1",
            "nomser" => "Développement"
        ]
    ],
    [
        "_id" => "s2",
        "nomsal" => "Saadi",
        "prenomsal" => "Yousseff",
        "fonction" => "Developpeur",
        "service" => [
            "codeser" => "2",
            "nomser" => "Développement"
        ]
    ],
    [
        "_id" => "s3",
        "nomsal" => "Idrissi",
        "prenomsal" => "Leila",
        "fonction" => "Comptable",
        "service" => [
            "codeser" => "3",
            "nomser" => "Finance"
        ]
    ],
    [
        "_id" => "s4",
        "nomsal" => "Farah",
        "prenomsal" => "Amine",
        "fonction" => "Technicien Supérieur",
        "service" => [
            "codeser" => "1",
            "nomser" => "informatique"
        ]
    ],
    [
        "_id" => "s5",
        "nomsal" => "Bakkali",
        "prenomsal" => "Nadia",
        "fonction" => "Directrice Commerciale",
        "service" => [
            "codeser" => "4",
            "nomser" => "Commercial"
        ]
    ],
    [
        "_id" => "s6",
        "nomsal" => "Zouhair",
        "prenomsal" => "Karim",
        "fonction" => "Ingénieur Qualité",
        "service" => [
            "codeser" => "5",
            "nomser" => "Qualité"
        ]
    ],
    [
        "_id" => "s7",
        "nomsal" => "Mansouri",
        "prenomsal" => "Hanae",
        "fonction" => "Assistante RH",
        "service" => [
            "codeser" => "6",
            "nomser" => "Ressources Humaines"
        ]
    ],
    [
        "_id" => "s8",
        "nomsal" => "Jabrane",
        "prenomsal" => "Omar",
        "fonction" => "Développeur Web",
        "service" => [
            "codeser" => "3",
            "nomser" => "Développement"
        ]
    ],
    [
        "_id" => "s9",
        "nomsal" => "Filali",
        "prenomsal" => "Malak",
        "fonction" => "Analyste Financier",
        "service" => [
            "codeser" => "3",
            "nomser" => "Finance"
        ]
    ],
    [
        "_id" => "s10",
        "nomsal" => "Doukali",
        "prenomsal" => "Samir",
        "fonction" => "Responsable Logistique",
        "service" => [
            "codeser" => "7",
            "nomser" => "Logistique"
        ]
    ],
    [
        "_id" => "s11",
        "nomsal" => "Benali",
        "prenomsal" => "Fatima",
        "fonction" => "Marketing Digital",
        "service" => [
            "codeser" => "8",
            "nomser" => "Marketing"
        ]
    ]
];

// رجوع JSON
echo json_encode($users, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
