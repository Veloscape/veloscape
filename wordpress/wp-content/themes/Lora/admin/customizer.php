<?php
/**
 * Lora Customizer functionality
 *
 * @package Lora
 * @since Lora 1.0
 */

/**
 * List of Google Fonts
 */
$google_fonts = array(
	"ABeeZee" => "ABeeZee",
	"Abel" => "Abel",
	"Abril Fatface" => "Abril Fatface",
	"Aclonica" => "Aclonica",
	"Acme" => "Acme",
	"Actor" => "Actor",
	"Adamina" => "Adamina",
	"Advent Pro" => "Advent Pro",
	"Aguafina Script" => "Aguafina Script",
	"Akronim" => "Akronim",
	"Aladin" => "Aladin",
	"Aldrich" => "Aldrich",
	"Alegreya" => "Alegreya",
	"Alegreya SC" => "Alegreya SC",
	"Alex Brush" => "Alex Brush",
	"Alfa Slab One" => "Alfa Slab One",
	"Alice" => "Alice",
	"Alike" => "Alike",
	"Alike Angular" => "Alike Angular",
	"Allan" => "Allan",
	"Allerta" => "Allerta",
	"Allerta Stencil" => "Allerta Stencil",
	"Allura" => "Allura",
	"Almendra" => "Almendra",
	"Almendra Display" => "Almendra Display",
	"Almendra SC" => "Almendra SC",
	"Amarante" => "Amarante",
	"Amaranth" => "Amaranth",
	"Amatic SC" => "Amatic SC",
	"Amethysta" => "Amethysta",
	"Anaheim" => "Anaheim",
	"Andada" => "Andada",
	"Andika" => "Andika",
	"Angkor" => "Angkor",
	"Annie Use Your Telescope" => "Annie Use Your Telescope",
	"Anonymous Pro" => "Anonymous Pro",
	"Antic" => "Antic",
	"Antic Didone" => "Antic Didone",
	"Antic Slab" => "Antic Slab",
	"Anton" => "Anton",
	"Arapey" => "Arapey",
	"Arbutus" => "Arbutus",
	"Arbutus Slab" => "Arbutus Slab",
	"Architects Daughter" => "Architects Daughter",
	"Archivo Black" => "Archivo Black",
	"Archivo Narrow" => "Archivo Narrow",
	"Arimo" => "Arimo",
	"Arizonia" => "Arizonia",
	"Armata" => "Armata",
	"Artifika" => "Artifika",
	"Arvo" => "Arvo",
	"Asap" => "Asap",
	"Asset" => "Asset",
	"Astloch" => "Astloch",
	"Asul" => "Asul",
	"Atomic Age" => "Atomic Age",
	"Aubrey" => "Aubrey",
	"Audiowide" => "Audiowide",
	"Autour One" => "Autour One",
	"Average" => "Average",
	"Average Sans" => "Average Sans",
	"Averia Gruesa Libre" => "Averia Gruesa Libre",
	"Averia Libre" => "Averia Libre",
	"Averia Sans Libre" => "Averia Sans Libre",
	"Averia Serif Libre" => "Averia Serif Libre",
	"Bad Script" => "Bad Script",
	"Balthazar" => "Balthazar",
	"Bangers" => "Bangers",
	"Basic" => "Basic",
	"Baskerville" => "Baskerville",
	"Battambang" => "Battambang",
	"Baumans" => "Baumans",
	"Bayon" => "Bayon",
	"Belgrano" => "Belgrano",
	"Belleza" => "Belleza",
	"BenchNine" => "BenchNine",
	"Bentham" => "Bentham",
	"Berkshire Swash" => "Berkshire Swash",
	"Bevan" => "Bevan",
	"Bigelow Rules" => "Bigelow Rules",
	"Bigshot One" => "Bigshot One",
	"Bilbo" => "Bilbo",
	"Bilbo Swash Caps" => "Bilbo Swash Caps",
	"Bitter" => "Bitter",
	"Black Ops One" => "Black Ops One",
	"Bokor" => "Bokor",
	"Bonbon" => "Bonbon",
	"Boogaloo" => "Boogaloo",
	"Bowlby One" => "Bowlby One",
	"Bowlby One SC" => "Bowlby One SC",
	"Brawler" => "Brawler",
	"Bree Serif" => "Bree Serif",
	"Bubblegum Sans" => "Bubblegum Sans",
	"Bubbler One" => "Bubbler One",
	"Buda" => "Buda",
	"Buenard" => "Buenard",
	"Butcherman" => "Butcherman",
	"Butterfly Kids" => "Butterfly Kids",
	"Cabin" => "Cabin",
	"Cabin Condensed" => "Cabin Condensed",
	"Cabin Sketch" => "Cabin Sketch",
	"Caesar Dressing" => "Caesar Dressing",
	"Cagliostro" => "Cagliostro",
	"Calligraffitti" => "Calligraffitti",
	"Cambo" => "Cambo",
	"Candal" => "Candal",
	"Cantarell" => "Cantarell",
	"Cantata One" => "Cantata One",
	"Cantora One" => "Cantora One",
	"Capriola" => "Capriola",
	"Cardo" => "Cardo",
	"Carme" => "Carme",
	"Carrois Gothic" => "Carrois Gothic",
	"Carrois Gothic SC" => "Carrois Gothic SC",
	"Carter One" => "Carter One",
	"Caudex" => "Caudex",
	"Cedarville Cursive" => "Cedarville Cursive",
	"Ceviche One" => "Ceviche One",
	"Changa One" => "Changa One",
	"Chango" => "Chango",
	"Chau Philomene One" => "Chau Philomene One",
	"Chela One" => "Chela One",
	"Chelsea Market" => "Chelsea Market",
	"Chenla" => "Chenla",
	"Cherry Cream Soda" => "Cherry Cream Soda",
	"Cherry Swash" => "Cherry Swash",
	"Chewy" => "Chewy",
	"Chicle" => "Chicle",
	"Chivo" => "Chivo",
	"Cinzel" => "Cinzel",
	"Cinzel Decorative" => "Cinzel Decorative",
	"Clicker Script" => "Clicker Script",
	"Coda" => "Coda",
	"Coda Caption" => "Coda Caption",
	"Codystar" => "Codystar",
	"Combo" => "Combo",
	"Comfortaa" => "Comfortaa",
	"Coming Soon" => "Coming Soon",
	"Concert One" => "Concert One",
	"Condiment" => "Condiment",
	"Content" => "Content",
	"Contrail One" => "Contrail One",
	"Convergence" => "Convergence",
	"Cookie" => "Cookie",
	"Copse" => "Copse",
	"Corben" => "Corben",
	"Courgette" => "Courgette",
	"Cousine" => "Cousine",
	"Coustard" => "Coustard",
	"Covered By Your Grace" => "Covered By Your Grace",
	"Crafty Girls" => "Crafty Girls",
	"Creepster" => "Creepster",
	"Crete Round" => "Crete Round",
	"Crimson Text" => "Crimson Text",
	"Croissant One" => "Croissant One",
	"Crushed" => "Crushed",
	"Cuprum" => "Cuprum",
	"Cutive" => "Cutive",
	"Cutive Mono" => "Cutive Mono",
	"Damion" => "Damion",
	"Dancing Script" => "Dancing Script",
	"Dangrek" => "Dangrek",
	"Dawning of a New Day" => "Dawning of a New Day",
	"Days One" => "Days One",
	"Delius" => "Delius",
	"Delius Swash Caps" => "Delius Swash Caps",
	"Delius Unicase" => "Delius Unicase",
	"Della Respira" => "Della Respira",
	"Denk One" => "Denk One",
	"Devonshire" => "Devonshire",
	"Didact Gothic" => "Didact Gothic",
	"Diplomata" => "Diplomata",
	"Diplomata SC" => "Diplomata SC",
	"Domine" => "Domine",
	"Donegal One" => "Donegal One",
	"Doppio One" => "Doppio One",
	"Dorsa" => "Dorsa",
	"Dosis" => "Dosis",
	"Dr Sugiyama" => "Dr Sugiyama",
	"Droid Sans" => "Droid Sans",
	"Droid Sans Mono" => "Droid Sans Mono",
	"Droid Serif" => "Droid Serif",
	"Duru Sans" => "Duru Sans",
	"Dynalight" => "Dynalight",
	"EB Garamond" => "EB Garamond",
	"Eagle Lake" => "Eagle Lake",
	"Eater" => "Eater",
	"Economica" => "Economica",
	"Electrolize" => "Electrolize",
	"Elsie" => "Elsie",
	"Elsie Swash Caps" => "Elsie Swash Caps",
	"Emblema One" => "Emblema One",
	"Emilys Candy" => "Emilys Candy",
	"Engagement" => "Engagement",
	"Englebert" => "Englebert",
	"Enriqueta" => "Enriqueta",
	"Erica One" => "Erica One",
	"Esteban" => "Esteban",
	"Euphoria Script" => "Euphoria Script",
	"Ewert" => "Ewert",
	"Exo" => "Exo",
	"Expletus Sans" => "Expletus Sans",
	"Fanwood Text" => "Fanwood Text",
	"Fascinate" => "Fascinate",
	"Fascinate Inline" => "Fascinate Inline",
	"Faster One" => "Faster One",
	"Fasthand" => "Fasthand",
	"Federant" => "Federant",
	"Federo" => "Federo",
	"Felipa" => "Felipa",
	"Fenix" => "Fenix",
	"Finger Paint" => "Finger Paint",
	"Fjalla One" => "Fjalla One",
	"Fjord One" => "Fjord One",
	"Flamenco" => "Flamenco",
	"Flavors" => "Flavors",
	"Fondamento" => "Fondamento",
	"Fontdiner Swanky" => "Fontdiner Swanky",
	"Forum" => "Forum",
	"Francois One" => "Francois One",
	"Freckle Face" => "Freckle Face",
	"Fredericka the Great" => "Fredericka the Great",
	"Fredoka One" => "Fredoka One",
	"Freehand" => "Freehand",
	"Fresca" => "Fresca",
	"Frijole" => "Frijole",
	"Fruktur" => "Fruktur",
	"Fugaz One" => "Fugaz One",
	"GFS Didot" => "GFS Didot",
	"GFS Neohellenic" => "GFS Neohellenic",
	"Gabriela" => "Gabriela",
	"Gafata" => "Gafata",
	"Galdeano" => "Galdeano",
	"Galindo" => "Galindo",
	"Gentium Basic" => "Gentium Basic",
	"Gentium Book Basic" => "Gentium Book Basic",
	"Geo" => "Geo",
	"Geostar" => "Geostar",
	"Geostar Fill" => "Geostar Fill",
	"Germania One" => "Germania One",
	"Gilda Display" => "Gilda Display",
	"Give You Glory" => "Give You Glory",
	"Glass Antiqua" => "Glass Antiqua",
	"Glegoo" => "Glegoo",
	"Gloria Hallelujah" => "Gloria Hallelujah",
	"Goblin One" => "Goblin One",
	"Gochi Hand" => "Gochi Hand",
	"Gorditas" => "Gorditas",
	"Goudy Bookletter 1911" => "Goudy Bookletter 1911",
	"Graduate" => "Graduate",
	"Grand Hotel" => "Grand Hotel",
	"Gravitas One" => "Gravitas One",
	"Great Vibes" => "Great Vibes",
	"Griffy" => "Griffy",
	"Gruppo" => "Gruppo",
	"Gudea" => "Gudea",
	"Habibi" => "Habibi",
	"Hammersmith One" => "Hammersmith One",
	"Hanalei" => "Hanalei",
	"Hanalei Fill" => "Hanalei Fill",
	"Handlee" => "Handlee",
	"Hanuman" => "Hanuman",
	"Happy Monkey" => "Happy Monkey",
	"Headland One" => "Headland One",
	"Henny Penny" => "Henny Penny",
	"Herr Von Muellerhoff" => "Herr Von Muellerhoff",
	"Holtwood One SC" => "Holtwood One SC",
	"Homemade Apple" => "Homemade Apple",
	"Homenaje" => "Homenaje",
	"IM Fell DW Pica" => "IM Fell DW Pica",
	"IM Fell DW Pica SC" => "IM Fell DW Pica SC",
	"IM Fell Double Pica" => "IM Fell Double Pica",
	"IM Fell Double Pica SC" => "IM Fell Double Pica SC",
	"IM Fell English" => "IM Fell English",
	"IM Fell English SC" => "IM Fell English SC",
	"IM Fell French Canon" => "IM Fell French Canon",
	"IM Fell French Canon SC" => "IM Fell French Canon SC",
	"IM Fell Great Primer" => "IM Fell Great Primer",
	"IM Fell Great Primer SC" => "IM Fell Great Primer SC",
	"Iceberg" => "Iceberg",
	"Iceland" => "Iceland",
	"Imprima" => "Imprima",
	"Inconsolata" => "Inconsolata",
	"Inder" => "Inder",
	"Indie Flower" => "Indie Flower",
	"Inika" => "Inika",
	"Irish Grover" => "Irish Grover",
	"Istok Web" => "Istok Web",
	"Italiana" => "Italiana",
	"Italianno" => "Italianno",
	"Jacques Francois" => "Jacques Francois",
	"Jacques Francois Shadow" => "Jacques Francois Shadow",
	"Jim Nightshade" => "Jim Nightshade",
	"Jockey One" => "Jockey One",
	"Jolly Lodger" => "Jolly Lodger",
	"Josefin Sans" => "Josefin Sans",
	"Josefin Slab" => "Josefin Slab",
	"Joti One" => "Joti One",
	"Judson" => "Judson",
	"Julee" => "Julee",
	"Julius Sans One" => "Julius Sans One",
	"Junge" => "Junge",
	"Jura" => "Jura",
	"Just Another Hand" => "Just Another Hand",
	"Just Me Again Down Here" => "Just Me Again Down Here",
	"Kameron" => "Kameron",
	"Karla" => "Karla",
	"Kaushan Script" => "Kaushan Script",
	"Kavoon" => "Kavoon",
	"Keania One" => "Keania One",
	"Kelly Slab" => "Kelly Slab",
	"Kenia" => "Kenia",
	"Khmer" => "Khmer",
	"Kite One" => "Kite One",
	"Knewave" => "Knewave",
	"Kotta One" => "Kotta One",
	"Koulen" => "Koulen",
	"Kranky" => "Kranky",
	"Kreon" => "Kreon",
	"Kristi" => "Kristi",
	"Krona One" => "Krona One",
	"La Belle Aurore" => "La Belle Aurore",
	"Lancelot" => "Lancelot",
	"Lato" => "Lato",
	"League Script" => "League Script",
	"Leckerli One" => "Leckerli One",
	"Ledger" => "Ledger",
	"Lekton" => "Lekton",
	"Lemon" => "Lemon",
	"Libre Baskerville" => "Libre Baskerville",
	"Life Savers" => "Life Savers",
	"Lilita One" => "Lilita One",
	"Limelight" => "Limelight",
	"Linden Hill" => "Linden Hill",
	"Lobster" => "Lobster",
	"Lobster Two" => "Lobster Two",
	"Londrina Outline" => "Londrina Outline",
	"Londrina Shadow" => "Londrina Shadow",
	"Londrina Sketch" => "Londrina Sketch",
	"Londrina Solid" => "Londrina Solid",
	"Lora" => "Lora",
	"Love Ya Like A Sister" => "Love Ya Like A Sister",
	"Loved by the King" => "Loved by the King",
	"Lovers Quarrel" => "Lovers Quarrel",
	"Luckiest Guy" => "Luckiest Guy",
	"Lusitana" => "Lusitana",
	"Lustria" => "Lustria",
	"Macondo" => "Macondo",
	"Macondo Swash Caps" => "Macondo Swash Caps",
	"Magra" => "Magra",
	"Maiden Orange" => "Maiden Orange",
	"Mako" => "Mako",
	"Marcellus" => "Marcellus",
	"Marcellus SC" => "Marcellus SC",
	"Marck Script" => "Marck Script",
	"Margarine" => "Margarine",
	"Marko One" => "Marko One",
	"Marmelad" => "Marmelad",
	"Marvel" => "Marvel",
	"Mate" => "Mate",
	"Mate SC" => "Mate SC",
	"Maven Pro" => "Maven Pro",
	"McLaren" => "McLaren",
	"Meddon" => "Meddon",
	"MedievalSharp" => "MedievalSharp",
	"Medula One" => "Medula One",
	"Megrim" => "Megrim",
	"Meie Script" => "Meie Script",
	"Merienda" => "Merienda",
	"Merienda One" => "Merienda One",
	"Merriweather" => "Merriweather",
	"Merriweather Sans" => "Merriweather Sans",
	"Metal" => "Metal",
	"Metal Mania" => "Metal Mania",
	"Metamorphous" => "Metamorphous",
	"Metrophobic" => "Metrophobic",
	"Michroma" => "Michroma",
	"Milonga" => "Milonga",
	"Miltonian" => "Miltonian",
	"Miltonian Tattoo" => "Miltonian Tattoo",
	"Miniver" => "Miniver",
	"Miss Fajardose" => "Miss Fajardose",
	"Modern Antiqua" => "Modern Antiqua",
	"Molengo" => "Molengo",
	"Molle" => "Molle",
	"Monda" => "Monda",
	"Monofett" => "Monofett",
	"Monoton" => "Monoton",
	"Monsieur La Doulaise" => "Monsieur La Doulaise",
	"Montaga" => "Montaga",
	"Montez" => "Montez",
	"Montserrat" => "Montserrat",
	"Montserrat Alternates" => "Montserrat Alternates",
	"Montserrat Subrayada" => "Montserrat Subrayada",
	"Moul" => "Moul",
	"Moulpali" => "Moulpali",
	"Mountains of Christmas" => "Mountains of Christmas",
	"Mouse Memoirs" => "Mouse Memoirs",
	"Mr Bedfort" => "Mr Bedfort",
	"Mr Dafoe" => "Mr Dafoe",
	"Mr De Haviland" => "Mr De Haviland",
	"Mrs Saint Delafield" => "Mrs Saint Delafield",
	"Mrs Sheppards" => "Mrs Sheppards",
	"Muli" => "Muli",
	"Mystery Quest" => "Mystery Quest",
	"Neucha" => "Neucha",
	"Neuton" => "Neuton",
	"New Rocker" => "New Rocker",
	"News Cycle" => "News Cycle",
	"Niconne" => "Niconne",
	"Nixie One" => "Nixie One",
	"Nobile" => "Nobile",
	"Nokora" => "Nokora",
	"Norican" => "Norican",
	"Nosifer" => "Nosifer",
	"Nothing You Could Do" => "Nothing You Could Do",
	"Noticia Text" => "Noticia Text",
	"Noto Sans" => "Noto Sans",
	"Noto Serif" => "Noto Serif",
	"Nova Cut" => "Nova Cut",
	"Nova Flat" => "Nova Flat",
	"Nova Mono" => "Nova Mono",
	"Nova Oval" => "Nova Oval",
	"Nova Round" => "Nova Round",
	"Nova Script" => "Nova Script",
	"Nova Slim" => "Nova Slim",
	"Nova Square" => "Nova Square",
	"Numans" => "Numans",
	"Nunito" => "Nunito",
	"Odor Mean Chey" => "Odor Mean Chey",
	"Offside" => "Offside",
	"Old Standard TT" => "Old Standard TT",
	"Oldenburg" => "Oldenburg",
	"Oleo Script" => "Oleo Script",
	"Oleo Script Swash Caps" => "Oleo Script Swash Caps",
	"Open Sans" => "Open Sans",
	"Open Sans Condensed" => "Open Sans Condensed",
	"Oranienbaum" => "Oranienbaum",
	"Orbitron" => "Orbitron",
	"Oregano" => "Oregano",
	"Orienta" => "Orienta",
	"Original Surfer" => "Original Surfer",
	"Oswald" => "Oswald",
	"Over the Rainbow" => "Over the Rainbow",
	"Overlock" => "Overlock",
	"Overlock SC" => "Overlock SC",
	"Ovo" => "Ovo",
	"Oxygen" => "Oxygen",
	"Oxygen Mono" => "Oxygen Mono",
	"PT Mono" => "PT Mono",
	"PT Sans" => "PT Sans",
	"PT Sans Caption" => "PT Sans Caption",
	"PT Sans Narrow" => "PT Sans Narrow",
	"PT Serif" => "PT Serif",
	"PT Serif Caption" => "PT Serif Caption",
	"Pacifico" => "Pacifico",
	"Paprika" => "Paprika",
	"Parisienne" => "Parisienne",
	"Passero One" => "Passero One",
	"Passion One" => "Passion One",
	"Patrick Hand" => "Patrick Hand",
	"Patrick Hand SC" => "Patrick Hand SC",
	"Patua One" => "Patua One",
	"Paytone One" => "Paytone One",
	"Peralta" => "Peralta",
	"Permanent Marker" => "Permanent Marker",
	"Petit Formal Script" => "Petit Formal Script",
	"Petrona" => "Petrona",
	"Philosopher" => "Philosopher",
	"Piedra" => "Piedra",
	"Pinyon Script" => "Pinyon Script",
	"Pirata One" => "Pirata One",
	"Plaster" => "Plaster",
	"Play" => "Play",
	"Playball" => "Playball",
	"Playfair Display" => "Playfair Display",
	"Playfair Display SC" => "Playfair Display SC",
	"Podkova" => "Podkova",
	"Poiret One" => "Poiret One",
	"Poller One" => "Poller One",
	"Poly" => "Poly",
	"Pompiere" => "Pompiere",
	"Pontano Sans" => "Pontano Sans",
	"Port Lligat Sans" => "Port Lligat Sans",
	"Port Lligat Slab" => "Port Lligat Slab",
	"Prata" => "Prata",
	"Preahvihear" => "Preahvihear",
	"Press Start 2P" => "Press Start 2P",
	"Princess Sofia" => "Princess Sofia",
	"Prociono" => "Prociono",
	"Prosto One" => "Prosto One",
	"Puritan" => "Puritan",
	"Purple Purse" => "Purple Purse",
	"Quando" => "Quando",
	"Quantico" => "Quantico",
	"Quattrocento" => "Quattrocento",
	"Quattrocento Sans" => "Quattrocento Sans",
	"Questrial" => "Questrial",
	"Quicksand" => "Quicksand",
	"Quintessential" => "Quintessential",
	"Qwigley" => "Qwigley",
	"Racing Sans One" => "Racing Sans One",
	"Radley" => "Radley",
	"Raleway" => "Raleway",
	"Raleway Dots" => "Raleway Dots",
	"Rambla" => "Rambla",
	"Rammetto One" => "Rammetto One",
	"Ranchers" => "Ranchers",
	"Rancho" => "Rancho",
	"Rationale" => "Rationale",
	"Redressed" => "Redressed",
	"Reenie Beanie" => "Reenie Beanie",
	"Revalia" => "Revalia",
	"Ribeye" => "Ribeye",
	"Ribeye Marrow" => "Ribeye Marrow",
	"Righteous" => "Righteous",
	"Risque" => "Risque",
	"Roboto" => "Roboto",
	"Roboto Condensed" => "Roboto Condensed",
	"Rochester" => "Rochester",
	"Rock Salt" => "Rock Salt",
	"Rokkitt" => "Rokkitt",
	"Romanesco" => "Romanesco",
	"Ropa Sans" => "Ropa Sans",
	"Rosario" => "Rosario",
	"Rosarivo" => "Rosarivo",
	"Rouge Script" => "Rouge Script",
	"Ruda" => "Ruda",
	"Rufina" => "Rufina",
	"Ruge Boogie" => "Ruge Boogie",
	"Ruluko" => "Ruluko",
	"Rum Raisin" => "Rum Raisin",
	"Ruslan Display" => "Ruslan Display",
	"Russo One" => "Russo One",
	"Ruthie" => "Ruthie",
	"Rye" => "Rye",
	"Sacramento" => "Sacramento",
	"Sail" => "Sail",
	"Salsa" => "Salsa",
	"Sanchez" => "Sanchez",
	"Sancreek" => "Sancreek",
	"Sansita One" => "Sansita One",
	"Sarina" => "Sarina",
	"Satisfy" => "Satisfy",
	"Scada" => "Scada",
	"Schoolbell" => "Schoolbell",
	"Seaweed Script" => "Seaweed Script",
	"Sevillana" => "Sevillana",
	"Seymour One" => "Seymour One",
	"Shadows Into Light" => "Shadows Into Light",
	"Shadows Into Light Two" => "Shadows Into Light Two",
	"Shanti" => "Shanti",
	"Share" => "Share",
	"Share Tech" => "Share Tech",
	"Share Tech Mono" => "Share Tech Mono",
	"Shojumaru" => "Shojumaru",
	"Short Stack" => "Short Stack",
	"Siemreap" => "Siemreap",
	"Sigmar One" => "Sigmar One",
	"Signika" => "Signika",
	"Signika Negative" => "Signika Negative",
	"Simonetta" => "Simonetta",
	"Sintony" => "Sintony",
	"Sirin Stencil" => "Sirin Stencil",
	"Six Caps" => "Six Caps",
	"Skranji" => "Skranji",
	"Slackey" => "Slackey",
	"Smokum" => "Smokum",
	"Smythe" => "Smythe",
	"Sniglet" => "Sniglet",
	"Snippet" => "Snippet",
	"Snowburst One" => "Snowburst One",
	"Sofadi One" => "Sofadi One",
	"Sofia" => "Sofia",
	"Sonsie One" => "Sonsie One",
	"Sorts Mill Goudy" => "Sorts Mill Goudy",
	"Source Code Pro" => "Source Code Pro",
	"Source Sans Pro" => "Source Sans Pro",
	"Special Elite" => "Special Elite",
	"Spicy Rice" => "Spicy Rice",
	"Spinnaker" => "Spinnaker",
	"Spirax" => "Spirax",
	"Squada One" => "Squada One",
	"Stalemate" => "Stalemate",
	"Stalinist One" => "Stalinist One",
	"Stardos Stencil" => "Stardos Stencil",
	"Stint Ultra Condensed" => "Stint Ultra Condensed",
	"Stint Ultra Expanded" => "Stint Ultra Expanded",
	"Stoke" => "Stoke",
	"Strait" => "Strait",
	"Sue Ellen Francisco" => "Sue Ellen Francisco",
	"Sunshiney" => "Sunshiney",
	"Supermercado One" => "Supermercado One",
	"Suwannaphum" => "Suwannaphum",
	"Swanky and Moo Moo" => "Swanky and Moo Moo",
	"Syncopate" => "Syncopate",
	"Tangerine" => "Tangerine",
	"Taprom" => "Taprom",
	"Tauri" => "Tauri",
	"Telex" => "Telex",
	"Tenor Sans" => "Tenor Sans",
	"Text Me One" => "Text Me One",
	"The Girl Next Door" => "The Girl Next Door",
	"Tienne" => "Tienne",
	"Tinos" => "Tinos",
	"Titan One" => "Titan One",
	"Titillium Web" => "Titillium Web",
	"Trade Winds" => "Trade Winds",
	"Trocchi" => "Trocchi",
	"Trochut" => "Trochut",
	"Trykker" => "Trykker",
	"Tulpen One" => "Tulpen One",
	"Ubuntu" => "Ubuntu",
	"Ubuntu Condensed" => "Ubuntu Condensed",
	"Ubuntu Mono" => "Ubuntu Mono",
	"Ultra" => "Ultra",
	"Uncial Antiqua" => "Uncial Antiqua",
	"Underdog" => "Underdog",
	"Unica One" => "Unica One",
	"UnifrakturCook" => "UnifrakturCook",
	"UnifrakturMaguntia" => "UnifrakturMaguntia",
	"Unkempt" => "Unkempt",
	"Unlock" => "Unlock",
	"Unna" => "Unna",
	"VT323" => "VT323",
	"Vampiro One" => "Vampiro One",
	"Varela" => "Varela",
	"Varela Round" => "Varela Round",
	"Vast Shadow" => "Vast Shadow",
	"Vibur" => "Vibur",
	"Vidaloka" => "Vidaloka",
	"Viga" => "Viga",
	"Voces" => "Voces",
	"Volkhov" => "Volkhov",
	"Vollkorn" => "Vollkorn",
	"Voltaire" => "Voltaire",
	"Waiting for the Sunrise" => "Waiting for the Sunrise",
	"Wallpoet" => "Wallpoet",
	"Walter Turncoat" => "Walter Turncoat",
	"Warnes" => "Warnes",
	"Wellfleet" => "Wellfleet",
	"Wendy One" => "Wendy One",
	"Wire One" => "Wire One",
	"Yanone Kaffeesatz" => "Yanone Kaffeesatz",
	"Yellowtail" => "Yellowtail",
	"Yeseva One" => "Yeseva One",
	"Yesteryear" => "Yesteryear",
	"Zeyada" => "Zeyada"
);

/**
 * Add customization options
 *
 * @since Lora 1.0
 */
function lora_customizer( $wp_customize ) {

	global $google_fonts;

	// Enqueue Styling
	function enqueue_customizer_styles() {
		wp_enqueue_style( 'customizer', get_template_directory_uri() . '/admin/css/customizer.css' );
	}
	add_action( 'customize_controls_enqueue_scripts', 'enqueue_customizer_styles' );

	// Remove Title & Site Tagline section
	$wp_customize->remove_section('title_tagline');

	/**
	 * Add subsection heading 
	 */
	class Section_Heading extends WP_Customize_Control {
		public $type = 'heading';

		public function render_content() { ?>
			<h3 style="background: #f1f1f1; padding: 10px; border-bottom: 1px solid #eaeaea"><?php echo esc_html( $this->label ); ?></h3>
			<?php
		}
	}

	/**
	 * Adds textarea support to the theme customizer
	 */
	class Textarea_Control extends WP_Customize_Control {
	    public $type = 'textarea';
	 
	    public function render_content() { ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
                <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
            </label>
	       	<?php
	    }
	}

	class Layout_Control extends WP_Customize_Control {
		public $type = 'layout';

		public function render_content() { ?>
			<label>
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
               
				<div class="layout_selector">
					<?php
					if ( empty( $this->choices ) )
                		return;

                	$name = '_customize-radio-' . $this->id;

	           		foreach ( $this->choices as $value => $label ) : ?>
	                <input type="radio" id="<?php echo esc_attr( $value ); ?>" value="<?php echo esc_attr( $value ); ?>" name="<?php echo esc_attr( $name ); ?>" <?php $this->link(); checked( $this->value(), $value ); ?> />
					<label for="<?php echo esc_attr( $value ); ?>" class="layout_<?php echo esc_attr( $value ); ?>"></label>
	                <?php endforeach; ?>
				</div>

            </label>
		<?php
		}
	}

	$wp_customize->add_section(
		'general',
		array(
			'title' => 'General',
			'priority' => 20
		)
	);

	// Logo
	$wp_customize->add_setting(
		'logo',
		array(
			'default' => get_template_directory_uri() . '/images/logo.png',
			'sanitize_callback' => 'sanitize_img'
		)
	);
 
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'logo',
	        array(
	            'label' => 'Logo',
	            'section' => 'general',
	            'settings' => 'logo'
	        )
	    )
	);

	// Dark Logo
	$wp_customize->add_setting( 
		'dark_logo',
		array(
			'default' => get_template_directory_uri() . '/images/logo-dark.png',
			'sanitize_callback' => 'sanitize_img'
		)
	);
 
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'dark_logo',
	        array(
	            'label' => 'Dark Logo',
	            'section' => 'general',
	            'settings' => 'dark_logo'
	        )
	    )
	);

	// Retina Logo
	$wp_customize->add_setting(
		'retina_logo',
		array(
			'sanitize_callback' => 'sanitize_img'
		)
	);
 
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'retina_logo',
	        array(
	            'label' => 'Retina Logo (Logo @2x)',
	            'section' => 'general',
	            'settings' => 'retina_logo',
	            'description' => 'The retina logo. Must be exactly twice as large as the standard logo.'
	        )
	    )
	);

	// Retina Dark Logo
	$wp_customize->add_setting( 
		'retina_dark_logo',
		array(
			'sanitize_callback' => 'sanitize_img'
		)
	);
 
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'retina_dark_logo',
	        array(
	            'label' => 'Retina Logo Dark (Logo @2x)',
	            'section' => 'general',
	            'settings' => 'retina_dark_logo'
	        )
	    )
	);

	// Standard Logo Width
	$wp_customize->add_setting(
		'logo_width',
		array(
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'logo_width',
	    array(
	        'label' => 'Standard Logo Width',
	        'description' => 'Enter the standard logo width, not the retina logo width. Only necessary if you have uploaded a logo for retina displays.',
	        'section' => 'general'
	    )
	);

	// Standard Logo Height
	$wp_customize->add_setting(
		'logo_height',
		array(
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'logo_height',
	    array(
	        'label' => 'Standard Logo Height',
	        'description' => 'Enter the standard logo height, not the retina logo height. Only necessary if you have uploaded a logo for retina displays.',
	        'section' => 'general'
	    )
	);

	// Page content width
	$wp_customize->add_setting(
		'page_width',
		array(
			'default' => 900,
			'sanitize_callback' => 'sanitize_site_width'
		)
	);

	$wp_customize->add_control(
	    'page_width',
	    array(
	        'label' => 'Page Width (px)',
	        'description' => 'Set the page content width.',
	        'section' => 'general'
	    )
	);

	// Masonry Blog Width
	$wp_customize->add_setting(
		'masonry_blog_width',
		array(
			'default' => 1100,
			'sanitize_callback' => 'sanitize_masonry_blog_width'
		)
	);

	$wp_customize->add_control(
	    'masonry_blog_width',
	    array(
	        'label' => 'Masonry Blog Width (px)',
	        'description' => 'Set the width of the masonry blog. Doesn\'t apply to masonry fullscreen layout.',
	        'section' => 'general'
	    )
	);

	// Copyright text
	$wp_customize->add_setting(
		'copyright',
		array(
			'default' => 'Copyright &copy; 2015 Lora by <a href="http://themeforest.net/user/CadenGrant/portfolio/">Caden Grant</a>',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'copyright',
	    array(
	        'label' => 'Copyright Text',
	        'section' => 'general'
	    )
	);

	// Custom CSS
	$wp_customize->add_setting( 
		'custom_css',
		array(
			'sanitize_callback' => 'sanitize_code'
		)
	);
 
	$wp_customize->add_control(
	    new Textarea_Control(
	        $wp_customize,
	        'custom_css',
	        array(
	            'label' => 'Custom CSS',
	            'section' => 'general',
	            'settings' => 'custom_css'
	        )
	    )
	);

	// Code before </head>
	$wp_customize->add_setting( 
		'before_head',
		array(
			'sanitize_callback' => 'sanitize_code'
		)
	);
 
	$wp_customize->add_control(
	    new Textarea_Control(
	        $wp_customize,
	        'before_head',
	        array(
	            'label' => 'Code before </head>',
	            'section' => 'general',
	            'settings' => 'before_head'
	        )
	    )
	);

	// Code before </head>
	$wp_customize->add_setting( 
		'before_body',
		array(
			'sanitize_callback' => 'sanitize_code'
		)
	);
 
	$wp_customize->add_control(
	    new Textarea_Control(
	        $wp_customize,
	        'before_body',
	        array(
	            'label' => 'Code before </body>',
	            'section' => 'general',
	            'settings' => 'before_body'
	        )
	    )
	);

	/**
	 * Header 
	 */
	$wp_customize->add_section(
		'header',
		array(
			'title' => 'Header',
			'priority' => 21
		)
	);

	$wp_customize->add_setting(
		'transparent_header',
		array(
			'default' => true,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'transparent_header',
		array(
			'type' => 'checkbox',
			'label' => 'Transparent Header Background',
			'section' => 'header'
		)
	);

	// Logo Top Margin
	$wp_customize->add_setting(
		'logo_top_margin',
		array(
			'default' => '17',
			'sanitize_callback' => 'sanitize_logo_margin'
		)
	);

	$wp_customize->add_control(
	    'logo_top_margin',
	    array(
	        'label' => 'Logo Top Margin (px)',
	        'section' => 'header',
	        'description' => 'Spacing above the logo.'
	    )
	);

	// Logo Bottom Margin
	$wp_customize->add_setting(
		'logo_bottom_margin',
		array(
			'default' => '17',
			'sanitize_callback' => 'sanitize_logo_margin'
		)
	);

	$wp_customize->add_control(
	    'logo_bottom_margin',
	    array(
	        'label' => 'Logo Bottom Margin (px)',
	        'section' => 'header',
	        'description' => 'Spacing below the logo.'
	    )
	);

	// Menu Height
	$wp_customize->add_setting(
		'menu_height',
		array(
			'default' => '62',
			'sanitize_callback' => 'sanitize_menu_height'
		)
	);

	$wp_customize->add_control(
	    'menu_height',
	    array(
	        'label' => 'Menu Height (px)',
	        'section' => 'header',
	        'description' => 'Default 62.'
	    )
	);

	/**
	 * Homepage Slider
	 */
	$wp_customize->add_section(
		'slider',
		array(
			'title' => 'Image/Slider',
			'description' => '',
			'priority' => 22
		)
	);

	// Enable Slider
	$wp_customize->add_setting(
		'enable_slider',
		array(
			'default' => true,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'enable_slider',
		array(
			'type' => 'checkbox',
			'label' => 'Enable Image/Slider',
			'section' => 'slider'
		)
	);

	// Homepage Slider Type
	$wp_customize->add_setting(
	    'slider_type',
	    array(
	        'default' => 'parallax',
	        'sanitize_callback' => 'sanitize_slider_type'
	    )
	);
	 
	$wp_customize->add_control(
	    'slider_type',
	    array(
	        'type' => 'select',
	        'label' => 'Image/Slider Type',
	        'section' => 'slider',
	        'choices' => array(
	        	'parallax' => 'Parallax Image',
	        	'static' => 'Static Image',
	            'revslider' => 'Revolution Slider',
	            'owlslider' => 'Featured Posts Slider'
	        )
	    )
	);

	$wp_customize->add_setting( 
		'home_image',
		array(
			'default' => get_template_directory_uri() . '/images/person.jpg',
			'sanitize_callback' => 'sanitize_img'
		)
	);
 
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'home_image',
	        array(
	            'label' => 'Background Image',
	            'section' => 'slider',
	            'settings' => 'home_image',
	            'description' => 'Applies to Parallax Image & Static Image only.'
	        )
	    )
	);

	// Enable Overlay
	$wp_customize->add_setting(
		'enable_overlay',
		array(
			'default' => false,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'enable_overlay',
		array(
			'type' => 'checkbox',
			'label' => 'Enable Overlay',
			'description' => 'Adds an overlay to the background image to make text more easily readable.',
			'section' => 'slider'
		)
	);

	// Homepage Slider Type
	$wp_customize->add_setting(
	    'home_bg_text_color',
	    array(
	        'default' => 'light',
	        'sanitize_callback' => 'sanitize_lightdark'
	    )
	);
	 
	$wp_customize->add_control(
	    'home_bg_text_color',
	    array(
	        'type' => 'select',
	        'label' => 'Background Text Color',
	        'section' => 'slider',
	        'choices' => array(
	        	'light' => 'Light',
	        	'dark' => 'Dark'
	        ),
	        'description' => 'Applies to Parallax Image & Static Image only.'
	    )
	);

	// Background Image Text
	$wp_customize->add_setting( 
		'bg_text',
		array(
			'default' => '<h1>Lora WP</h1>
<p>A premium personal WordPress theme great for any blogger! Lora is easily customizable and comes with plenty of options!</p>
<a href="#" class="button button-white small">Learn More</a>',
			'sanitize_callback' => 'sanitize_bg_text'
		)
	);
 
	$wp_customize->add_control(
	    new Textarea_Control(
	        $wp_customize,
	        'bg_text',
	        array(
	            'label' => 'Page Text',
	            'section' => 'slider',
	            'settings' => 'bg_text',
	            'description' => 'Applies to Parallax Image & Static Image only.'
	        )
	    )
	);

	// Show arrow
	$wp_customize->add_setting(
		'show_arrow',
		array(
			'default' => false,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'show_arrow',
		array(
			'type' => 'checkbox',
			'label' => 'Show Arrow',
			'section' => 'slider'
		)
	);

	// Image Height
	$wp_customize->add_setting(
		'image_height',
		array(
			'default' => '600px',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'image_height',
	    array(
	        'label' => 'Image Height',
	        'section' => 'slider',
	        'description' => 'Enter the height, in pixels, you want the parallax or static image to be. Default is 600px. <strong>Note:</strong> To make the image fullscreen, enter 100vh as the value.'
	    )
	);

	// Title Text Top Margin
	$wp_customize->add_setting(
		'text_pos',
		array(
			'default' => '30',
			'sanitize_callback' => 'sanitize_int'
		)
	);

	$wp_customize->add_control(
	    'text_pos',
	    array(
	        'label' => 'Text Top Margin',
	        'section' => 'slider',
	        'description' => 'Enter the top margin (percentage) of the page text. Default is 35.'
	    )
	);

	// RevSlider alias
	$wp_customize->add_setting(
		'revslider_alias',
		array(
			'default' => 'home',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'revslider_alias',
	    array(
	        'label' => 'Revolution Slider Alias',
	        'section' => 'slider'
	    )
	);

	/**
	 * Colors
	 */
	$wp_customize->add_section(
		'colors',
		array(
			'title' => 'Colors',
			'priority' => 25
		)
	);

	// Page/body Background Color
	$wp_customize->add_setting(
	    'page_bg_color',
	    array(
	        'default' => '#f9f9f9',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'page_bg_color',
	        array(
	            'label' => 'Page Background Color',
	            'section' => 'colors',
	            'settings' => 'page_bg_color'
	        )
	    )
	);

	// Text Color
	$wp_customize->add_setting(
	    'text_color',
	    array(
	        'default' => '#222222',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'text_color',
	        array(
	            'label' => 'Text Color',
	            'section' => 'colors',
	            'settings' => 'text_color'
	        )
	    )
	);

	// Link Color
	$wp_customize->add_setting(
	    'link_color',
	    array(
	        'default' => '#000000',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'link_color',
	        array(
	            'label' => 'Link Color',
	            'section' => 'colors',
	            'settings' => 'link_color'
	        )
	    )
	);

	// Link Hover Color
	$wp_customize->add_setting(
	    'link_hover_color',
	    array(
	        'default' => '#aeaeae',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'link_hover_color',
	        array(
	            'label' => 'Link Hover Color',
	            'section' => 'colors',
	            'settings' => 'link_hover_color'
	        )
	    )
	);

	// Headings Color
	$wp_customize->add_setting(
	    'headings_color',
	    array(
	        'default' => '#444444',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'headings_color',
	        array(
	            'label' => 'Headings Color',
	            'section' => 'colors',
	            'description' => 'Used for all headings (h1, h2, h3, etc) including post titles.',
	            'settings' => 'headings_color'
	        )
	    )
	);

	// Headings Color
	$wp_customize->add_setting(
	    'post_title_hover_color',
	    array(
	        'default' => '#000000',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'post_title_hover_color',
	        array(
	            'label' => 'Post Title Hover Color',
	            'section' => 'colors',
	            'settings' => 'post_title_hover_color'
	        )
	    )
	);

	// Header Color Settings
	$wp_customize->add_setting( 
		'header_section',
		array(
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    new Section_Heading(
	        $wp_customize,
	        'header_section',
	        array(
	            'label' => 'Header',
	            'section' => 'colors',
	            'settings' => 'header_section'
	        )
	    )
	);

	// Heading Background Color
	$wp_customize->add_setting(
	    'header_bg_color',
	    array(
	        'default' => '#ffffff',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'header_bg_color',
	        array(
	            'label' => 'Header Background Color',
	            'section' => 'colors',
	            'settings' => 'header_bg_color'
	        )
	    )
	);

	// Menu Link Color
	$wp_customize->add_setting(
	    'menu_link_color',
	    array(
	        'default' => '#444444',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'menu_link_color',
	        array(
	            'label' => 'Menu Link Color',
	            'section' => 'colors',
	            'settings' => 'menu_link_color'
	        )
	    )
	);

	// Menu Link Hover Color
	$wp_customize->add_setting(
	    'menu_link_hover_color',
	    array(
	        'default' => '#aeaeae',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'menu_link_hover_color',
	        array(
	            'label' => 'Menu Link Hover Color',
	            'section' => 'colors',
	            'settings' => 'menu_link_hover_color'
	        )
	    )
	);

	// Transparent Header Menu Link Color
	$wp_customize->add_setting(
	    'transparent_menu_link_color',
	    array(
	        'default' => '#ffffff',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'transparent_menu_link_color',
	        array(
	            'label' => 'Transparent Header Menu Link Color',
	            'section' => 'colors',
	            'settings' => 'transparent_menu_link_color'
	        )
	    )
	);

	// Transparent Menu Link Hover Color
	$wp_customize->add_setting(
	    'transparent_menu_link_hover_color',
	    array(
	        'default' => '#e0e0e0',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'transparent_menu_link_hover_color',
	        array(
	            'label' => 'Transparent Header Menu Link Hover Color',
	            'section' => 'colors',
	            'settings' => 'transparent_menu_link_hover_color'
	        )
	    )
	);

	// Drop Down Background Color
	$wp_customize->add_setting(
	    'dd_bg_color',
	    array(
	        'default' => '#444444',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'dd_bg_color',
	        array(
	            'label' => 'Drop Down Background Color',
	            'section' => 'colors',
	            'settings' => 'dd_bg_color'
	        )
	    )
	);

	// Drop Down Link Color
	$wp_customize->add_setting(
	    'dd_link_color',
	    array(
	        'default' => '#ffffff',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'dd_link_color',
	        array(
	            'label' => 'Drop Down Link Color',
	            'section' => 'colors',
	            'settings' => 'dd_link_color'
	        )
	    )
	);

	// Drop Down Link Hover Color
	$wp_customize->add_setting(
	    'dd_link_hover_color',
	    array(
	        'default' => '#aeaeae',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'dd_link_hover_color',
	        array(
	            'label' => 'Drop Down Link Hover Color',
	            'section' => 'colors',
	            'settings' => 'dd_link_hover_color'
	        )
	    )
	);

	// Footer Styling
	$wp_customize->add_setting( 
		'footer_styling',
		array(
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    new Section_Heading(
	        $wp_customize,
	        'footer_styling',
	        array(
	            'label' => 'Footer',
	            'section' => 'colors',
	            'settings' => 'footer_styling'
	        )
	    )
	);

	// Footer Background Color
	$wp_customize->add_setting(
	    'footer_bg_color',
	    array(
	        'default' => '#000000',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'footer_bg_color',
	        array(
	            'label' => 'Footer Background Color',
	            'section' => 'colors',
	            'settings' => 'footer_bg_color'
	        )
	    )
	);

	// Footer Text Color
	$wp_customize->add_setting(
	    'footer_text_color',
	    array(
	        'default' => '#ffffff',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'footer_text_color',
	        array(
	            'label' => 'Footer Text Color',
	            'section' => 'colors',
	            'settings' => 'footer_text_color'
	        )
	    )
	);

	// Footer Link Color
	$wp_customize->add_setting(
	    'footer_link_color',
	    array(
	        'default' => '#999999',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'footer_link_color',
	        array(
	            'label' => 'Footer Link Color',
	            'section' => 'colors',
	            'settings' => 'footer_link_color'
	        )
	    )
	);

	// Footer Link Hover Color
	$wp_customize->add_setting(
	    'footer_link_hover_color',
	    array(
	        'default' => '#ffffff',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'footer_link_hover_color',
	        array(
	            'label' => 'Footer Link Hover Color',
	            'section' => 'colors',
	            'settings' => 'footer_link_hover_color'
	        )
	    )
	);

	// Footer Widget Title Divider Color
	$wp_customize->add_setting(
	    'footer_divider_color',
	    array(
	        'default' => '#ffffff',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'footer_divider_color',
	        array(
	            'label' => 'Widget Title Divider Color',
	            'section' => 'colors',
	            'settings' => 'footer_divider_color'
	        )
	    )
	);

	// Light & Dark Styles
	$wp_customize->add_setting( 
		'light_dark',
		array(
			'sanitize_callback' => 'sanitize_text'
		) 
	);

	$wp_customize->add_control(
	    new Section_Heading(
	        $wp_customize,
	        'light_dark',
	        array(
	            'label' => 'Light & Dark Styles',
	            'section' => 'colors',
	            'settings' => 'light_dark'
	        )
	    )
	);

	// Light
	$wp_customize->add_setting(
	    'light_color',
	    array(
	        'default' => '#ffffff',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'light_color',
	        array(
	            'label' => 'Light',
	            'section' => 'colors',
	            'settings' => 'light_color',
	            'description' => 'The color for text over dark background images.'
	        )
	    )
	);

	// Dark
	$wp_customize->add_setting(
	    'dark_color',
	    array(
	        'default' => '#333333',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'dark_color',
	        array(
	            'label' => 'Dark',
	            'section' => 'colors',
	            'settings' => 'dark_color',
	            'description' => 'The color for text over light background images.'
	        )
	    )
	);

	/**
	 * Fonts
	 */
	$wp_customize->add_section(
		'fonts',
		array(
			'title' => 'Fonts',
			'priority' => 27
		)
	);

	// Body Font Family
	$wp_customize->add_setting(
	    'body_font',
	    array(
	        'default' => 'Noticia Text',
	        'sanitize_callback' => 'sanitize_body_font'
	    )
	);
	 
	$wp_customize->add_control(
	    'body_font',
	    array(
	        'type' => 'select',
	        'label' => 'Body Font',
	        'description' => 'Select the font family you want to use for all content. Default: Noticia Text',
	        'section' => 'fonts',
	        'choices' => $google_fonts
	    )
	);

	// Body Font Weight
	$wp_customize->add_setting(
		'body_font_weight',
		array(
			'default' => '300',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'body_font_weight',
	    array(
	        'label' => 'Body Font Weight',
	        'section' => 'fonts',
	        'description' => 'The headings font weight. Values: 100, 200, 300, 400, 500, 600, 700, 800. Default 300 (normal).'
	    )
	);

	// Heading Font
	$wp_customize->add_setting(
	    'heading_font',
	    array(
	        'default' => 'Montserrat',
	        'sanitize_callback' => 'sanitize_headings_font'
	    )
	);
	 
	$wp_customize->add_control(
	    'heading_font',
	    array(
	        'type' => 'select',
	        'label' => 'Heading Font',
	        'section' => 'fonts',
	        'description' => 'Select the font you want to use for headings (h1, h2, h3). Default: Montserrat',
	        'choices' => $google_fonts
	    )
	);

	// Headings Font Weight
	$wp_customize->add_setting(
		'headings_font_weight',
		array(
			'default' => '400',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'headings_font_weight',
	    array(
	        'label' => 'Headings Font Weight',
	        'section' => 'fonts',
	        'description' => 'The headings font weight. Values: 100, 200, 300, 400, 500, 600, 700, 800. Default 400 (normal).'
	    )
	);

	// Headings Font Weight
	$wp_customize->add_setting(
		'headings_text_transform',
		array(
			'default' => 'uppercase',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'headings_text_transform',
	    array(
	        'label' => 'Headings Text Transform',
	        'section' => 'fonts',
	        'description' => 'Set the text transform property. Valid values are: none, capitalize, uppercase, lowercase, initial, inherit. Default is uppercase.'
	    )
	);

	// Body Font Size
	$wp_customize->add_setting(
		'font_size',
		array(
			'default' => '18',
			'sanitize_callback' => 'sanitize_font_size'
		)
	);

	$wp_customize->add_control(
	    'font_size',
	    array(
	        'label' => 'Body Font Size (px)',
	        'section' => 'fonts',
	        'description' => 'Default 18'
	    )
	);

	// Menu Font Size
	$wp_customize->add_setting(
		'menu_font_size',
		array(
			'default' => '14',
			'sanitize_callback' => 'sanitize_font_size'
		)
	);

	$wp_customize->add_control(
	    'menu_font_size',
	    array(
	        'label' => 'Menu Font Size (px)',
	        'section' => 'fonts',
	        'description' => 'Default 14'
	    )
	);

	// Post Title Size
	$wp_customize->add_setting(
		'post_title_size',
		array(
			'default' => '36',
			'sanitize_callback' => 'sanitize_font_size'
		)
	);

	$wp_customize->add_control(
	    'post_title_size',
	    array(
	        'label' => 'Post/Page Title Size (px)',
	        'section' => 'fonts',
	        'description' => 'Default 36'
	    )
	);

	// Masonry Post Title Size
	$wp_customize->add_setting(
		'masonry_post_title_size',
		array(
			'default' => '22',
			'sanitize_callback' => 'sanitize_font_size'
		)
	);

	$wp_customize->add_control(
	    'masonry_post_title_size',
	    array(
	        'label' => 'Masonry Post Title Size (px)',
	        'section' => 'fonts',
	        'description' => 'Default 22'
	    )
	);

	// Widget Title Size
	$wp_customize->add_setting(
		'widget_title_size',
		array(
			'default' => '18',
			'sanitize_callback' => 'sanitize_font_size'
		)
	);

	$wp_customize->add_control(
	    'widget_title_size',
	    array(
	        'label' => 'Widget Title Size (px)',
	        'section' => 'fonts',
	        'description' => 'Default 18'
	    )
	);

	// H1 Font Size
	$wp_customize->add_setting(
		'h1_font_size',
		array(
			'default' => '34',
			'sanitize_callback' => 'sanitize_font_size'
		)
	);

	$wp_customize->add_control(
	    'h1_font_size',
	    array(
	        'label' => 'H1 Font Size (px)',
	        'section' => 'fonts',
	        'description' => 'Default 34'
	    )
	);

	// H2 Font Size
	$wp_customize->add_setting(
		'h2_font_size',
		array(
			'default' => '28',
			'sanitize_callback' => 'sanitize_font_size'
		)
	);

	$wp_customize->add_control(
	    'h2_font_size',
	    array(
	        'label' => 'H2 Font Size (px)',
	        'section' => 'fonts',
	        'description' => 'Default 28'
	    )
	);

	// H3 Font Size
	$wp_customize->add_setting(
		'h3_font_size',
		array(
			'default' => '24',
			'sanitize_callback' => 'sanitize_font_size'
		)
	);

	$wp_customize->add_control(
	    'h3_font_size',
	    array(
	        'label' => 'H3 Font Size (px)',
	        'section' => 'fonts',
	        'description' => 'Default 24'
	    )
	);

	// H4 Font Size
	$wp_customize->add_setting(
		'h4_font_size',
		array(
			'default' => '18',
			'sanitize_callback' => 'sanitize_font_size'
		)
	);

	$wp_customize->add_control(
	    'h4_font_size',
	    array(
	        'label' => 'H4 Font Size (px)',
	        'section' => 'fonts',
	        'description' => 'Default 18'
	    )
	);

	// H5 Font Size
	$wp_customize->add_setting(
		'h5_font_size',
		array(
			'default' => '16',
			'sanitize_callback' => 'sanitize_font_size'
		)
	);

	$wp_customize->add_control(
	    'h5_font_size',
	    array(
	        'label' => 'H5 Font Size (px)',
	        'section' => 'fonts',
	        'description' => 'Default 16'
	    )
	);

	// H6 Font Size
	$wp_customize->add_setting(
		'h6_font_size',
		array(
			'default' => '14',
			'sanitize_callback' => 'sanitize_font_size'
		)
	);

	$wp_customize->add_control(
	    'h6_font_size',
	    array(
	        'label' => 'H6 Font Size (px)',
	        'section' => 'fonts',
	        'description' => 'Default 14'
	    )
	);

	/**
	 * Blog
	 */
	$wp_customize->add_section(
		'blog',
		array(
			'title' => 'Blog',
			'description' => '',
			'priority' => 30
		)
	);

	// Choose Blog Style
	$wp_customize->add_setting(
	    'blog_layout',
	    array(
	        'default' => 'standard',
	        'sanitize_callback' => 'sanitize_blog_style'
	    )
	);
	 
	$wp_customize->add_control(
	    'blog_layout',
	    array(
	        'type' => 'select',
	        'label' => 'Blog Style',
	        'section' => 'blog',
	        'choices' => array(
	        	'default' => 'Default',
	            'standard' => 'Large',
	            'standard_sidebar' => 'Large w/ Sidebar',
	            'masonry' => 'Masonry Fullwidth',
	            'masonry_sidebar' => 'Masonry w/ Sidebar',
	            'masonry_fullscreen' => 'Masonry Fullscreen'
	        ),
	    )
	);

	// Blog Layout
	$wp_customize->add_setting( 
		'layout',
		array(
			'default' => '3_1',
			'sanitize_callback' => 'sanitize_blog_layout'
		)
	);
 
	$wp_customize->add_control(
	    new Layout_Control(
	        $wp_customize,
	        'layout',
	        array(
	            'label' => 'Layout',
	            'section' => 'blog',
	            'settings' => 'layout',
	            'description' => 'Only applies to default blog style.',
	            'choices' => array(
		        	'3_1' => '3_1',
		            '3x3' => '3x3',
		            '2_1' => '2_1',
		            '2x2' => '2x2',
		            '1x1' => '1x1'
		        )
	        )
	    )
	);

	// "Read more" text
	$wp_customize->add_setting(
		'read_more',
		array(
			'default' => 'Read More',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'read_more',
	    array(
	        'label' => 'Read More Text',
	        'section' => 'blog'
	    )
	);

	// Show date
	$wp_customize->add_setting(
		'show_date',
		array(
			'default' => true,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'show_date',
		array(
			'type' => 'checkbox',
			'label' => 'Show date',
			'section' => 'blog'
		)
	);

	// Show comments link
	$wp_customize->add_setting(
		'show_comments',
		array(
			'default' => true,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'show_comments',
		array(
			'type' => 'checkbox',
			'label' => 'Show comments link',
			'section' => 'blog'
		)
	);

	// Show categories
	$wp_customize->add_setting(
		'show_categories',
		array(
			'default' => true,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'show_categories',
		array(
			'type' => 'checkbox',
			'label' => 'Show categories',
			'section' => 'blog'
		)
	);

	// Show author
	$wp_customize->add_setting(
		'show_author',
		array(
			'default' => true,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'show_author',
		array(
			'type' => 'checkbox',
			'label' => 'Show author\'s name',
			'section' => 'blog'
		)
	);

	// Post navigation type (standard & numbered)
	$wp_customize->add_setting(
	    'post_nav',
	    array(
	        'default' => 'standard',
	        'sanitize_callback' => 'sanitize_post_nav'
	    )
	);
	 
	$wp_customize->add_control(
	    'post_nav',
	    array(
	        'type' => 'select',
	        'label' => 'Post Navigation Type',
	        'section' => 'blog',
	        'choices' => array(
	            'standard' => 'Previous/Next',
	            'numbered' => 'Numbered'
	        ),
	    )
	);

	// Previous Page Text
	$wp_customize->add_setting(
		'previous_text',
		array(
			'default' => '&larr; Previous Page',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'previous_text',
	    array(
	        'label' => 'Previous Page Text',
	        'section' => 'blog'
	    )
	);

	// Next page text
	$wp_customize->add_setting(
		'next_text',
		array(
			'default' => 'Next Page &rarr;',
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    'next_text',
	    array(
	        'label' => 'Next Page Text',
	        'section' => 'blog'
	    )
	);

	// Single Post Settings
	$wp_customize->add_setting( 
		'single_post_section',
		array(
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    new Section_Heading(
	        $wp_customize,
	        'single_post_section',
	        array(
	            'label' => 'Single Post',
	            'section' => 'blog',
	            'settings' => 'single_post_section'
	        )
	    )
	);

	// Show author bio
	$wp_customize->add_setting(
		'show_author_info',
		array(
			'default' => true,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'show_author_info',
		array(
			'type' => 'checkbox',
			'label' => 'Show author bio',
			'section' => 'blog'
		)
	);

	// Show post navigation
	$wp_customize->add_setting(
		'show_post_nav',
		array(
			'default' => true,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'show_post_nav',
		array(
			'type' => 'checkbox',
			'label' => 'Show post navigation',
			'section' => 'blog'
		)
	);

	// Show post tags
	$wp_customize->add_setting(
		'show_tags',
		array(
			'default' => false,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'show_tags',
		array(
			'type' => 'checkbox',
			'label' => 'Show post tags',
			'section' => 'blog'
		)
	);

	// Social Sharing
	$wp_customize->add_setting( 
		'social_sharing_section',
		array(
			'sanitize_callback' => 'sanitize_text'
		)
	);

	$wp_customize->add_control(
	    new Section_Heading(
	        $wp_customize,
	        'social_sharing_section',
	        array(
	            'label' => 'Social Sharing',
	            'section' => 'blog',
	            'settings' => 'social_sharing_section'
	        )
	    )
	);

	// Enable Social Sharing
	$wp_customize->add_setting(
		'enable_social',
		array(
			'default' => true,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'enable_social',
		array(
			'type' => 'checkbox',
			'label' => 'Enable Social Sharing',
			'section' => 'blog'
		)
	);

	// Show Facebook
	$wp_customize->add_setting(
		'show_fb',
		array(
			'default' => true,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'show_fb',
		array(
			'type' => 'checkbox',
			'label' => 'Enable Facebook share',
			'section' => 'blog'
		)
	);

	// Show Twitter
	$wp_customize->add_setting(
		'show_twitter',
		array(
			'default' => true,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'show_twitter',
		array(
			'type' => 'checkbox',
			'label' => 'Enable Twitter share',
			'section' => 'blog'
		)
	);

	// Show Google+
	$wp_customize->add_setting(
		'show_gplus',
		array(
			'default' => true,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'show_gplus',
		array(
			'type' => 'checkbox',
			'label' => 'Enable Google+ share',
			'section' => 'blog'
		)
	);

	// Show LinkedIn
	$wp_customize->add_setting(
		'show_linkedin',
		array(
			'default' => true,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'show_linkedin',
		array(
			'type' => 'checkbox',
			'label' => 'Enable LinkedIn share',
			'section' => 'blog'
		)
	);

	// Show Pinterest
	$wp_customize->add_setting(
		'show_pinterest',
		array(
			'default' => true,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'show_pinterest',
		array(
			'type' => 'checkbox',
			'label' => 'Enable Pinterest share',
			'section' => 'blog'
		)
	);

	// Show Reddit
	$wp_customize->add_setting(
		'show_reddit',
		array(
			'default' => true,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'show_reddit',
		array(
			'type' => 'checkbox',
			'label' => 'Enable Reddit share',
			'section' => 'blog'
		)
	);

	// Show Delicious
	$wp_customize->add_setting(
		'show_delicious',
		array(
			'default' => true,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'show_delicious',
		array(
			'type' => 'checkbox',
			'label' => 'Enable Delicious share',
			'section' => 'blog'
		)
	);

	// Show StumbleUpon
	$wp_customize->add_setting(
		'show_stumbleupon',
		array(
			'default' => true,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'show_stumbleupon',
		array(
			'type' => 'checkbox',
			'label' => 'Enable StumbleUpon share',
			'section' => 'blog'
		)
	);

	// Show Tumblr
	$wp_customize->add_setting(
		'show_tumblr',
		array(
			'default' => true,
			'sanitize_callback' => 'sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'show_tumblr',
		array(
			'type' => 'checkbox',
			'label' => 'Enable Tumblr share',
			'section' => 'blog'
		)
	);

	/**
	 * Portfolio
	 */
	$wp_customize->add_section(
		'portfolio',
		array(
			'title' => 'Portfolio',
			'description' => '',
			'priority' => 31
		)
	);

	// Portfolio Layout
	$wp_customize->add_setting( 
		'portfolio_layout',
		array(
			'default' => '3x3',
			'sanitize_callback' => 'sanitize_portfolio_layout'
		)
	);
 
	$wp_customize->add_control(
	    new Layout_Control(
	        $wp_customize,
	        'layout',
	        array(
	            'label' => 'Layout',
	            'section' => 'portfolio',
	            'settings' => 'portfolio_layout',
	            'choices' => array(
		            '3x3' => '3x3',
		            '2x2' => '2x2',
		            '1x1' => '1x1'
		        )
	        )
	    )
	);

	// Portfolio Posts Per Page
	$wp_customize->add_setting(
		'portfolio_posts_per_page',
		array(
			'default' => '9',
			'sanitize_callback' => 'sanitize_portfolio_posts_per_page'
		)
	);

	$wp_customize->add_control(
	    'portfolio_posts_per_page',
	    array(
	        'label' => 'Posts Per Page',
	        'section' => 'portfolio',
	        'description' => 'Enter the number of items you want to display per page. To display all items set the value to -1. Default is 9.'
	    )
	);

	/**
	 * Footer
	 */
	$wp_customize->add_section(
		'footer',
		array(
			'title' => 'Footer',
			'description' => '',
			'priority' => 32
		)
	);

	// Footer Widget Columns
	$wp_customize->add_setting(
		'footer_columns',
		array(
			'default' => '3',
			'sanitize_callback' => 'sanitize_footer_widget_areas'
		)
	);

	$wp_customize->add_control(
	    'footer_columns',
	    array(
	        'label' => 'Footer Columns',
	        'section' => 'footer',
	        'description' => 'Default is 3.'
	    )
	);



	// Function to handle AJAX updates
	if ( $wp_customize->is_preview() && ! is_admin() ) {
	   add_action( 'wp_footer', 'customize_preview', 21 );
	}

	// Updates the settings in real time using AJAX
	function customize_preview() {

		$page_width = get_theme_mod( 'page_width', '1000' );
		$masonry_blog_width = get_theme_mod( 'masonry_blog_width', '1200' );
		$logo_top_margin = get_theme_mod( 'logo_top_margin', '17' );
		$logo_bottom_margin = get_theme_mod( 'logo_bottom_margin', '17' );
		$menu_height = get_theme_mod( 'menu_height', '62' );

		// Fonts
		$body_font = get_theme_mod( 'body_font', 'Noticia Text' );
		$body_font_weight = get_theme_mod( 'body_font_weight', '400' );
		$headings_font = get_theme_mod( 'heading_font', 'Montserrat' );
		$headings_font_weight = get_theme_mod( 'headings_font_weight', '400' );
		$headings_text_transform = get_theme_mod( 'headings_text_transform', 'uppercase' );
		$font_size = get_theme_mod( 'font_size', '18' );
		$menu_font_size = get_theme_mod( 'menu_font_size', '14' );
		$post_title_size = get_theme_mod( 'post_title_size', '36' );
		$masonry_post_title_size = get_theme_mod( 'masonry_post_title_size', '24' );
		$widget_title_size = get_theme_mod( 'widget_title_size', '18' );
		$h1_font_size = get_theme_mod( 'h1_font_size', '34' );
		$h2_font_size = get_theme_mod( 'h2_font_size', '28' );
		$h3_font_size = get_theme_mod( 'h3_font_size', '24' );
		$h4_font_size = get_theme_mod( 'h4_font_size', '18' );
		$h5_font_size = get_theme_mod( 'h5_font_size', '16' );
		$h6_font_size = get_theme_mod( 'h6_font_size', '14' );

		// Colors
		$transparent_header = get_theme_mod( 'transparent_header', true );
		$header_bg_color = get_theme_mod( 'header_bg_color', '#ffffff' );
		$menu_link_color = get_theme_mod( 'menu_link_color', '#333333' );
		$menu_link_hover_color = get_theme_mod( 'menu_link_hover_color', '#aeaeae' );
		$transparent_menu_link_color = get_theme_mod( 'transparent_menu_link_color', '#ffffff' );
		$transparent_menu_link_hover_color = get_theme_mod( 'transparent_menu_link_hover_color', '#e0e0e0' );
		$dd_bg_color = get_theme_mod( 'dd_bg_color', '#444444' );
		$dd_link_color = get_theme_mod( 'dd_link_color', '#ffffff' );
		$dd_link_hover_color = get_theme_mod( 'dd_link_hover_color', '#aeaeae' );
		$page_bg_color = get_theme_mod( 'page_bg_color', '#f9f9f9' );
		$text_color = get_theme_mod( 'text_color', '#222222' );
		$link_color = get_theme_mod( 'link_color', '#000000' );
		$link_hover_color = get_theme_mod( 'link_hover_color', '#aeaeae' );
		$headings_color = get_theme_mod( 'headings_color', '#444444' );
		$post_title_hover_color = get_theme_mod( 'post_title_hover_color', '#000000' );
		$footer_bg_color = get_theme_mod( 'footer_bg_color', '#181818' );
		$footer_text_color = get_theme_mod( 'footer_text_color', '#ffffff' );
		$footer_link_color = get_theme_mod( 'footer_link_color', '#999999' );
		$footer_link_hover_color = get_theme_mod( 'footer_link_hover_color', '#ffffff' );
		$footer_divider_color = get_theme_mod( 'footer_divider_color', '#ffffff' );

		if( $transparent_header == true ) {
			$header_style = 'background: transparent;
			-webkit-box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0);
			-moz-box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0);
			box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0);';
		} else {
			$header_style = '';
		}
		?>
		<style type="text/css">
			body,
			button,
			input,
			select,
			textarea {
				font-family: <?php echo esc_html( $body_font ); ?>;
				font-size: <?php echo esc_html( $font_size ); ?>px;
				color: <?php echo esc_html( $text_color ); ?>;
				font-weight: <?php echo esc_html( $body_font_weight ); ?>;
			}

			html, body {
				background: <?php echo esc_html( $page_bg_color ); ?>;
			}

			.wrapper {
				padding-top: <?php echo esc_html( $menu_height ); ?>px;
				background: <?php echo esc_html( $page_bg_color ); ?>;
			}

			.header-bg-image .wrapper {
				padding-top: 0;
			}

			#container {
				padding-top: 2em;
			}

			.container {
				max-width: <?php echo esc_html( $page_width ); ?>px;
			}

			.blog-masonry {
				max-width: <?php echo esc_html( $masonry_blog_width ); ?>px;
			}

			#header {
				background: <?php echo esc_html( $header_bg_color ); ?>;
				<?php echo esc_html( $header_style ); ?>
			}

			a {
				color: <?php echo esc_html( $link_color ); ?>;
			}

			a:hover {
				color: <?php echo esc_html( $link_hover_color ); ?>;
			}

			h1,
			h2,
			h3,
			h4,
			h5,
			h6,
			.logo,
			.main-menu {
				font-family: <?php echo esc_html( $headings_font ); ?>;
				color: <?php echo esc_html( $headings_color ); ?>;
				font-weight: <?php echo esc_html( $headings_font_weight ); ?>;
				text-transform: <?php echo esc_html( $headings_text_transform ); ?>;
			}

			.logo {
				margin: <?php echo esc_html( $logo_top_margin ); ?>px 0 <?php echo esc_html( $logo_bottom_margin ); ?>px;
			}

			.main-menu {
				font-size: <?php echo esc_html( $menu_font_size ); ?>px;
			}

			.main-menu ul li {
				line-height: <?php echo esc_html( $menu_height ); ?>px;
				height: <?php echo esc_html( $menu_height ); ?>px;
			}

			<?php if( $transparent_header == true ) { ?>
			.logo a,
			.main-menu ul li a {
				color: <?php echo esc_html( $transparent_menu_link_color ); ?>;
			}

			.logo a:hover,
			.main-menu ul li a:hover {
				color: <?php echo esc_html( $transparent_menu_link_hover_color ); ?>;
			}

			.nontransparent .logo a,
			.nontransparent .main-menu ul li a {
				color: <?php echo esc_html( $menu_link_color ); ?>;
			}

			.nontransparent .logo a:hover,
			.nontransparent .main-menu ul li a:hover {
				color: <?php echo esc_html( $menu_link_hover_color ); ?>;
			}
			<?php } else { ?>
			.logo a,
			.main-menu ul li a {
				color: <?php echo esc_html( $menu_link_color ); ?>;
			}

			.logo a:hover,
			.main-menu ul li a:hover {
				color: <?php echo esc_html( $menu_link_hover_color ); ?>;
			}
			<?php } ?>

			.main-menu ul ul {
				background: <?php echo esc_html( $dd_bg_color ); ?>;
				border-color: <?php echo esc_html( $dd_bg_color ); ?>;
			}

			.main-menu ul li ul li a {
				color: <?php echo esc_html( $dd_link_color ); ?>!important;
			}

			.main-menu ul li ul li a:hover {
				color: <?php echo esc_html( $dd_link_hover_color ); ?>!important;
			}

			#menu { 
				font-family: <?php echo esc_html( $headings_font ); ?>;
				padding: <?php echo esc_html( $menu_height ); ?>px 0 0;
			}

			h1 { font-size: <?php echo esc_html( $h1_font_size ); ?>px; }
			h2 { font-size: <?php echo esc_html( $h2_font_size ); ?>px; }
			h3 { font-size: <?php echo esc_html( $h3_font_size ); ?>px; }
			h4 { font-size: <?php echo esc_html( $h4_font_size ); ?>px; }
			h5 { font-size: <?php echo esc_html( $h5_font_size ); ?>px; }
			h6 { font-size: <?php echo esc_html( $h6_font_size ); ?>px; }

			.entry-title {
				font-size: <?php echo esc_html( $post_title_size ); ?>px;
			}

			.blog-masonry .entry-title,
			.blog-masonry-fullscreen .entry-title {
				font-size: <?php echo esc_html( $masonry_post_title_size ); ?>px;
			}

			.entry-title a {
				color: <?php echo esc_html( $headings_color ); ?>;
			}

			.entry-title a:hover {
				color: <?php echo esc_html( $post_title_hover_color ); ?>;
			}

			.widgettitle {
				font-size: <?php echo esc_html( $widget_title_size ); ?>px;
			}

			.post-meta, blockquote cite {
				font-family: <?php echo esc_html( $headings_font ); ?>;
				font-weight: <?php echo esc_html( $headings_font_weight ); ?>;
			}

			.single-post-nav a {
				font-family: <?php echo esc_html( $headings_font ); ?>;
			}

			.social-sharing ul span.list-wrap {
				background: <?php echo esc_html( $page_bg_color ); ?>;
			}

			#footer {
				background: <?php echo esc_html( $footer_bg_color ); ?>;
				color: <?php echo esc_html( $footer_text_color ); ?>;
			}

			#footer a {
				color: <?php echo esc_html( $footer_link_color ); ?>;
			}

			#footer a:hover {
				color: <?php echo esc_html( $footer_link_hover_color ); ?>;
			}

			#footer h3.widgettitle {
				color: <?php echo esc_html( $footer_text_color ); ?>;
			}

			#footer .widget .underline {
				background: <?php echo esc_html( $footer_divider_color ); ?>;
			}

		</style>
		<?php
		$bg_title_toppadding = $menu_height + 140;
		$bg_title_bottompadding = 140;
		$trans_title_toppadding = $menu_height + 120;
		$trans_title_bottompadding = 150;

		$title_styles = "
		.background .title {
			padding: {$bg_title_toppadding}px 0 {$bg_title_bottompadding}px;
		}

		.transparent .title {
			padding: {$trans_title_toppadding}px 0 {$trans_title_bottompadding}px;
		}

		.single .title {
			padding: {$bg_title_toppadding}px 0 {$trans_title_bottompadding}px;
		}
		";
		?>
		<style type="text/css">
		<?php echo esc_html( $title_styles ); ?>
		</style>
		
		<?php
		$bg_text_color = get_post_meta( get_the_ID(), 'bg_text_color', true );

		if( $bg_text_color == 'light' ) {
			$color = get_theme_mod( 'light_color', '#ffffff' );
		} else {
			$color = get_theme_mod( 'dark_color', '#333333' );
		}
		
		$style = get_post_meta( get_the_ID(), 'bgimage_style', true );
		
		if( !$style ) {
			$style = 'background';
		}

		if( $style == 'background' && has_post_thumbnail() ) { ?>
		<style type="text/css">
		.background .title h1,
		.background .title-full h1,
		.background .title p,
		.background .title-full p {
			color: <?php echo esc_html( $color ); ?>;
		}
		<?php if( $transparent_header == true && !is_home() ) { ?>
		.main-menu ul li a {
			color: <?php echo esc_html( $color ); ?>;
		}
		<?php } ?>
		<?php if( $slider == 'parallax' || $slider == 'static' ) { ?>
		.home .background .title {
			top: <?php echo esc_html( $text_pos ); ?>%;
			padding: 0;
		}
		<?php } ?>
		</style>
		<?php } ?>
    <?php }

}
add_action( 'customize_register', 'lora_customizer' );

/*
 * Sanitization Functions
 */
function sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

function sanitize_code( $input ) {
	$allowed_html = array(
		'style' => array(
			'type' => array()
		),
		'script' => array(
			'type' => array()
		),
		'link' => array(
			'rel' => array(),
			'href' => array()
		)
	);

	return wp_kses( force_balance_tags( $input ), $allowed_html );
}

function sanitize_related_posts_no( $input ) {
	if( is_numeric( $input ) ) {
		if( $input >= 1 && $input <= 4 ) {
			return intval( $input );
		} else {
			return 3;
		}
	} else {
		return '';
	}
}

function sanitize_footer_widget_areas( $input ) {
	if( is_numeric( $input ) ) {
		if( $input >= 1 && $input <= 4 ) {
			return intval( $input );
		} else {
			return 4;
		}
	} else {
		return '';
	}
}

function sanitize_site_width( $input ) {
	if( is_numeric( $input ) ) {
		if( $input >= 600 && $input <= 1920 ) {
			return intval( $input );
		} else {
			return 900;
		}
	} else {
		return '';
	}
}

function sanitize_masonry_blog_width( $input ) {
	if( is_numeric( $input ) ) {
		if( $input >= 600 && $input <= 1920 ) {
			return intval( $input );
		} else {
			return 1100;
		}
	} else {
		return '';
	}
}

function sanitize_font_size( $input ) {
	if( is_numeric( $input ) ) {
		if( $input >= 4 && $input <= 100 ) {
			return intval( $input );
		} else {
			return 17;
		}
	} else {
		return '';
	}
}

function sanitize_logo_margin( $input ) {
	if( is_numeric( $input ) ) {
		if( $input >= 0 && $input <= 100 ) {
			return intval( $input );
		} else {
			return 18;
		}
	} else {
		return '';
	}
}

function sanitize_menu_height( $input ) {
	if( is_numeric( $input ) ) {
		if( $input >= 0 && $input <= 300 ) {
			return intval( $input );
		} else {
			return 80;
		}
	} else {
		return '';
	}
}

function sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}

function sanitize_bg_text( $input ) {
    return wp_kses( 
    	$input, 
    	array(
    		'a' => array(
		        'href' => array(),
		        'title' => array(),
		        'class' => array()
		    ),
		    'br' => array(),
		    'em' => array(),
		    'strong' => array(),
		    'h1' => array(),
		    'h2' => array(),
		    'h3' => array(),
		    'h4' => array(),
		    'h5' => array(),
		    'h6' => array(),
		    'p' => array(
		    	'class' => array(),
		    	'style' => array()
		    ),
		    'div' => array(
		    	'class' => array()
		    ),
    	)
    );
}

function sanitize_int( $input ) {
	if( is_numeric( $input ) ) {
		if( $input >= 0 && $input <= 100 ) {
			return intval( $input );
		} else {
			return 35;
		}
	} else {
		return '';
	}
}

function sanitize_img( $input ) {
	$types = array( 'jpg', 'png', 'gif' );
	$ext = explode( '.', $input );
	$ext = strtolower( end( $ext ) );

	if( in_array( $ext, $types ) == true ) {
		return $input;
	} else {
		return '';
	}
}

function sanitize_slider_type( $input ) {
	$values = array( 'parallax', 'static', 'revslider', 'owlslider' );

	if( !in_array( $input, $values ) ) {
		return 'parallax';
	} else {
		return $input;
	}
}

function sanitize_lightdark( $input ) {
	$values = array( 'light', 'dark' );

	if( !in_array( $input, $values ) ) {
		return 'light';
	} else {
		return $input;
	}
}

function sanitize_featured_slider_type( $input ) {
	$values = array( 'carousel', 'slider' );

	if( !in_array( $input, $values ) ) {
		return 'carousel';
	} else {
		return $input;
	}
}

function sanitize_body_font( $input ) {
	global $google_fonts;

	if( !in_array( $input, $google_fonts ) ) {
		return 'Noticia Text';
	} else {
		return $input;
	}
}

function sanitize_headings_font( $input ) {
	global $google_fonts;

	if( !in_array( $input, $google_fonts ) ) {
		return 'Montserrat';
	} else {
		return $input;
	}
}

function sanitize_blog_style( $input ) {
	$values = array( 
		'default',
		'standard',
		'standard_sidebar',
		'masonry',
		'masonry_sidebar',
		'masonry_fullscreen'
	);

	if( !in_array( $input, $values ) ) {
		return 'default';
	} else {
		return $input;
	}
}

function sanitize_blog_layout( $input ) {
	$values = array(
		'1x1',
		'2_1',
		'2x2',
		'3_1',
		'3x3'
	);

	if( !in_array( $input, $values ) ) {
		return '3_1';
	} else {
		return $input;
	}
}

function sanitize_portfolio_layout( $input ) {
	$values = array(
		'1x1',
		'2x2',
		'3x3'
	);

	if( !in_array( $input, $values ) ) {
		return '3x3';
	} else {
		return $input;
	}
}

function sanitize_portfolio_posts_per_page( $input ) {
	if( is_numeric( $input ) ) {
		if( $input >= -1 && $input <= 40 ) {
			return intval( $input );
		} else {
			return 9;
		}
	} else {
		return 9;
	}
}

function sanitize_post_nav( $input ) {
	$values = array( 'standard', 'numbered' );

	if( !in_array( $input, $values ) ) {
		return 'standard';
	} else {
		return $input;
	}
}
