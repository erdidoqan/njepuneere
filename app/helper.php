<?php
Form::macro('sehir', function($name = "sehir", $selected = null) {
    
    $sehir = array(
        '' => 'Select to Work Place',
'Tirana' => 'Tirana*',
'Durres' => 'Durres',
'Vlore' => 'Vlore',
'Elbasan' => 'Elbasan',
'Shkoder' => 'Shkoder',
'Fier' => 'Fier',
'Korce' => 'Korce',
'Gjirokaster' => 'Gjirokaster',
'Berat' => 'Berat',
'Lushnje' => 'Lushnje',
'Ballsh' => 'Ballsh',
'Bilisht' => 'Bilisht',
'Bulqizë' => 'Bulqizë',
'Burrel' => 'Burrel',
'Cërrik' => 'Cërrik',
'Çorovodë' => 'Çorovodë',
'Delvinë' => 'Delvinë',
'Divjakë' => 'Divjakë',
'Ersekë' => 'Ersekë',
'Fushë-Arrëz' => 'Fushë-Arrëz',
'Fushë-Krujë' => 'Fushë-Krujë',
'Gramsh' => 'Gramsh',
'Himarë' => 'Himarë',
'Kamëz' => 'Kamëz',
'Kavajë' => 'Kavajë',
'Këlcyrë' => 'Këlcyrë',
'Klos' => 'Klos',
'Konispol' => 'Konispol',
'Koplik' => 'Koplik',
'Krastë' => 'Krastë',
'Krujë' => 'Krujë',
'Krumë' => 'Krumë',
'Kuçovë' => 'Kuçovë',
'Kukës' => 'Kukës',
'Laç' => 'Laç',
'Leskovik' => 'Leskovik',
'Lezhë' => 'Lezhë',
'Libohovë' => 'Libohovë',
'Librazhd' => 'Librazhd',
'Maliq' => 'Maliq',
'Mamurras' => 'Mamurras',
'Memaliaj' => 'Memaliaj',
'Orikum' => 'Orikum',
 'Patos' => 'Patos',
'Peqin' => 'Peqin',
'Përmet' => 'Përmet',
'Përrenjas' => 'Përrenjas',
'Peshkopi' => 'Peshkopi',
'Pogradec' => 'Pogradec',
'Poliçan' => 'Poliçan',
'Pukë' => 'Pukë',
'Roskovec' =>'Roskovec',
'Rrëshen' => 'Rrëshen',
'Rrogozhinë' => 'Rrogozhinë',
'Rubik' => 'Rubik',
'Sarandë' => 'Sarandë',
'Selenicë' => 'Selenicë',
'Selitë' => 'Selitë',
'Shëngjin' => 'Shëngjin',
'Shijak' => 'Shijak',
'Tepelenë' => 'Tepelenë',
'Tropoja' => 'Tropoja',
'Ulëz' => 'Ulëz',
'Urë Vajgurore' => 'Urë Vajgurore',
'Vorë' => 'Vorë'
    );
    
    $select = '<select name="'.$name.'" class="form-control" >';
    
    foreach ($sehir as $abbr => $sehir)
    {
        $select .= '<option value="'.$abbr.'"'.($selected == $abbr ? ' selected="selected"' : '').'>'.$sehir.'</option> ';
    }
    
    $select .= '</select>';
    
    return $select;

});

Form::macro('work_place', function($name = "work_place", $selected = null) {
    
    $work_place = array(
        '' => 'Select to Work Place',
'Tirana' => 'Tirana*',
'Durres' => 'Durres',
'Vlore' => 'Vlore',
'Elbasan' => 'Elbasan',
'Shkoder' => 'Shkoder',
'Fier' => 'Fier',
'Korce' => 'Korce',
'Gjirokaster' => 'Gjirokaster',
'Berat' => 'Berat',
'Lushnje' => 'Lushnje',
'Ballsh' => 'Ballsh',
'Bilisht' => 'Bilisht',
'Bulqizë' => 'Bulqizë',
'Burrel' => 'Burrel',
'Cërrik' => 'Cërrik',
'Çorovodë' => 'Çorovodë',
'Delvinë' => 'Delvinë',
'Divjakë' => 'Divjakë',
'Ersekë' => 'Ersekë',
'Fushë-Arrëz' => 'Fushë-Arrëz',
'Fushë-Krujë' => 'Fushë-Krujë',
'Gramsh' => 'Gramsh',
'Himarë' => 'Himarë',
'Kamëz' => 'Kamëz',
'Kavajë' => 'Kavajë',
'Këlcyrë' => 'Këlcyrë',
'Klos' => 'Klos',
'Konispol' => 'Konispol',
'Koplik' => 'Koplik',
'Krastë' => 'Krastë',
'Krujë' => 'Krujë',
'Krumë' => 'Krumë',
'Kuçovë' => 'Kuçovë',
'Kukës' => 'Kukës',
'Laç' => 'Laç',
'Leskovik' => 'Leskovik',
'Lezhë' => 'Lezhë',
'Libohovë' => 'Libohovë',
'Librazhd' => 'Librazhd',
'Maliq' => 'Maliq',
'Mamurras' => 'Mamurras',
'Memaliaj' => 'Memaliaj',
'Orikum' => 'Orikum',
 'Patos' => 'Patos',
'Peqin' => 'Peqin',
'Përmet' => 'Përmet',
'Përrenjas' => 'Përrenjas',
'Peshkopi' => 'Peshkopi',
'Pogradec' => 'Pogradec',
'Poliçan' => 'Poliçan',
'Pukë' => 'Pukë',
'Roskovec' =>'Roskovec',
'Rrëshen' => 'Rrëshen',
'Rrogozhinë' => 'Rrogozhinë',
'Rubik' => 'Rubik',
'Sarandë' => 'Sarandë',
'Selenicë' => 'Selenicë',
'Selitë' => 'Selitë',
'Shëngjin' => 'Shëngjin',
'Shijak' => 'Shijak',
'Tepelenë' => 'Tepelenë',
'Tropoja' => 'Tropoja',
'Ulëz' => 'Ulëz',
'Urë Vajgurore' => 'Urë Vajgurore',
'Vorë' => 'Vorë'
    );
    
    $select = '<select name="'.$name.'" class="form-control input-lg" >';
    
    foreach ($work_place as $abbr => $work_place)
    {
        $select .= '<option value="'.$abbr.'"'.($selected == $abbr ? ' selected="selected"' : '').'>'.$work_place.'</option> ';
    }
    
    $select .= '</select>';
    
    return $select;

});



Form::macro('ulke', function($name = "ulke", $selected = null) {
    
    $ulke = array(
        'Albania'=>"Albania",
        'ac'=>'Ascension Island',
    'ad'=>'Andorra',
    'ae'=>'United Arab Emirates',
    'af'=>'Afghanistan',
    'ag'=>'Antigua And Barbuda',
    'ai'=>'Anguilla',
    'al'=>'Albania',
    'am'=>'Armenia',
    'an'=>'Netherlands Antilles',
    'ao'=>'Angola',
    'aq'=>'Antarctica',
    'ar'=>'Argentina',
    'as'=>'American Samoa',
    'at'=>'Austria',
    'au'=>'Australia',
    'aw'=>'Aruba',
    'ax'=>'Ãƒâ€¦land',
    'az'=>'Azerbaijan',
    'ba'=>'Bosnia And Herzegovina',
    'bb'=>'Barbados',
    'be'=>'Belgium',
    'bd'=>'Bangladesh',
    'bf'=>'Burkina Faso',
    'bg'=>'Bulgaria',
    'bh'=>'Bahrain',
    'bi'=>'Burundi',
    'bj'=>'Benin',
    'bm'=>'Bermuda',
    'bn'=>'Brunei Darussalam',
    'bo'=>'Bolivia',
    'br'=>'Brazil',
    'bs'=>'Bahamas',
    'bt'=>'Bhutan',
    'bv'=>'Bouvet Island',
    'bw'=>'Botswana',
    'by'=>'Belarus',
    'bz'=>'Belize',
    'ca'=>'Canada',
    'cd'=>'Congo',
    'cg'=>'Congo (Republic)',
    'ch'=>'Switzerland',
    'ck'=>'Cook Islands',
    'cl'=>'Chile',
    'cm'=>'Cameroon',
    'cn'=>'Republic of China',
    'co'=>'Colombia',
    'cr'=>'Costa Rica',
    'cu'=>'Cuba',
    'cv'=>'Cape Verde',
    'cx'=>'Christmas Island',
    'cy'=>'Cyprus',
    'cz'=>'Czech Republic',
    'de'=>'Germany',
    'dj'=>'Djibouti',
    'dk'=>'Denmark',
    'dm'=>'Dominica',
    'do'=>'Dominican Republic',
    'dz'=>'Algeria',
    'ec'=>'Ecuador',
    'ee'=>'Estonia',
    'eg'=>'Egypt',
    'er'=>'Eritrea',
    'es'=>'Spain',
    'et'=>'Ethiopia',
    'eU'=>'European Union',
    'fi'=>'Finland',
    'fj'=>'Fiji',
    'fo'=>'Faroe Islands',
    'fr'=>'France',
    'ga'=>'Gabon',
    'gb'=>'United Kingdom',
    'gd'=>'Grenada',
    'ge'=>'Georgia',
    'gf'=>'French Guiana',
    'gg'=>'Guernsey',
    'gh'=>'Ghana',
    'gi'=>'Gibraltar',
    'gl'=>'Greenland',
    'gm'=>'Gambia',
    'gn'=>'Guinea',
    'gp'=>'Guadeloupe',
    'gq'=>'Equatorial Guinea',
    'gr'=>'Greece',
    'gt'=>'Guatemala',
    'gu'=>'Guam',
    'gw'=>'Guinea-Bissau',
    'gy'=>'Guyana',
    'hk'=>'Hong Kong',
    'hn'=>'Honduras',
    'hr'=>'Croatia ',
    'ht'=>'Haiti',
    'hu'=>'Hungary',
    'id'=>'Indonesia',
    'ie'=>'Ireland',
    'il'=>'Israel',
    'im'=>'Isle of Man',
    'in'=>'India',
    'iq'=>'Iraq',
    'ir'=>'Iran ',
    'is'=>'Iceland',
    'it'=>'Italy',
    'je'=>'Jersey',
    'jm'=>'Jamaica',
    'jo'=>'Jordan',
    'jp'=>'Japan',
    'ke'=>'Kenya',
    'kg'=>'Kyrgyzstan',
    'kh'=>'Cambodia',
    'ki'=>'Kiribati',
    'km'=>'Comoros',
    'kn'=>'Saint Kitts And Nevis',
    'kr'=>'Korea, Republic Of',
    'kw'=>'Kuwait',
    'ky'=>'Cayman Islands',
    'kz'=>'Kazakhstan',
    'lb'=>'Lebanon',
    'lc'=>'Saint Lucia',
    'li'=>'Liechtenstein',
    'lk'=>'Sri Lanka',
    'lr'=>'Liberia',
    'ls'=>'Lesotho',
    'lt'=>'Lithuania',
    'lu'=>'Luxembourg',
    'lv'=>'Latvia',
    'ly'=>'Libyan Arab Jamahiriya',
    'ma'=>'Morocco',
    'mc'=>'Monaco',
    'md'=>'Moldova, Republic Of',
    'me'=>'Montenegro',
    'mg'=>'Madagascar',
    'mh'=>'Marshall Islands',
    'mk'=>'Macedonia',
    'ml'=>'Mali',
    'mm'=>'Myanmar',
    'mn'=>'Mongolia',
    'mo'=>'Macau',
    'mp'=>'Northern Mariana Islands',
    'mq'=>'Martinique',
    'mr'=>'Mauritania',
    'ms'=>'Montserrat',
    'mt'=>'Malta',
    'mu'=>'Mauritius',
    'mv'=>'Maldives',
    'mw'=>'Malawi',
    'mx'=>'Mexico',
    'my'=>'Malaysia',
    'mz'=>'Mozambique',
    'na'=>'Namibia',
    'nc'=>'New Caledonia',
    'ne'=>'Niger',
    'nf'=>'Norfolk Island',
    'ng'=>'Nigeria',
    'ni'=>'Nicaragua',
    'nl'=>'Netherlands',
    'no'=>'Norway',
    'np'=>'Nepal',
    'nr'=>'Nauru',
    'nu'=>'Niue',
    'nz'=>'New Zealand',
    'om'=>'Oman',
    'pa'=>'Panama',
    'pe'=>'Peru',
    'pf'=>'French Polynesia',
    'pg'=>'Papua New Guinea',
    'ph'=>'Philippines',
    'pk'=>'Pakistan',
    'pl'=>'Poland',
    'pm'=>'St. Pierre And Miquelon',
    'pn'=>'Pitcairn',
    'pr'=>'Puerto Rico',
    'ps'=>'Palestine',
    'pt'=>'Portugal',
    'pw'=>'Palau',
    'py'=>'Paraguay',
    'qa'=>'Qatar',
    're'=>'Reunion',
    'ro'=>'Romania',
    'rs'=>'Serbia',
    'ru'=>'Russian Federation',
    'rw'=>'Rwanda',
    'sa'=>'Saudi Arabia',
    'uk'=>'Scotland',
    'sb'=>'Solomon Islands',
    'sc'=>'Seychelles',
    'sd'=>'Sudan',
    'se'=>'Sweden',
    'sg'=>'Singapore',
    'sh'=>'St. Helena',
    'si'=>'Slovenia',
    'th'=>'Thailand',
    'tj'=>'Tajikistan',
    'tk'=>'Tokelau',
    'ti'=>'East Timor (new code)',
    'tm'=>'Turkmenistan',
    'tn'=>'Tunisia',
    'to'=>'Tonga',
    'tp'=>'East Timor (old code)',
    'tr'=>'Turkey',
    'tt'=>'Trinidad And Tobago',
    'tv'=>'Tuvalu',
    'tw'=>'Taiwan',
    'tz'=>'Tanzania, United Republic Of',
    'ua'=>'Ukraine',
    'ug'=>'Uganda',
    'ye'=>'Yemen',
    'yt'=>'Mayotte',
    'za'=>'South Africa',
    'zm'=>'Zambia',
    'zw'=>'Zimbabwe'
    );
    
    $select = '<select name="'.$name.'" class="form-control">';
    
    foreach ($ulke as $abbr => $ulke)
    {
        $select .= '<option value="'.$abbr.'"'.($selected == $abbr ? ' selected="al"' : '').'>'.$ulke.'</option> ';
    }
    
    $select .= '</select>';
    
    return $select;

});


Form::macro('mm', function($name = "mm", $selected = null) {
    
    $mm = array(
        '' => 'Month',1 => "Jan", 2 => "Feb", 3 => "Mar", 4 => "Apr", 5 => "May", 6 => "Jun", 7 => "Jul", 8 => "Aug", 9 => "Sep", 10 => "Oct", 11 => "Nov", 12 => "Dec"
    );
    
    $select = '<select name="'.$name.'" class="form-control" >';
    
    foreach ($mm as $abbr => $mm)
    {
        $select .= '<option value="'.$abbr.'"'.($selected == $abbr ? ' selected="selected"' : '').'>'.$mm.'</option> ';
    }
    
    $select .= '</select>';
    
    return $select;

});


Form::macro('dd', function($name = "dd", $selected = null) {
    
    $dd = array(
        '' => 'Day',
        1 => "1", 
        2 => "2", 
        3 => "3", 
        4 => "4", 
        5 => "5", 
        6 => "6", 
        7 => "7", 
        8 => "8", 
        9 => "9", 
        10 => "10", 
        11 => "11", 12 => "12",13=>"13",14=>"14",15=>"15",16=>"16",17=>"17",18=>"18",19=>"19",20=>"20",21=>"21",22=>"22",
        23=>"23",24=>"24",25=>"25",26=>"26",27=>"27",28=>"28",29=>"29",30=>"30",31=>"31"
    );
    
    $select = '<select name="'.$name.'" class="form-control" >';
    
    foreach ($dd as $abbr => $dd)
    {
        $select .= '<option value="'.$abbr.'"'.($selected == $abbr ? ' selected="selected"' : '').'>'.$dd.'</option> ';
    }
    
    $select .= '</select>';
    
    return $select;

});


Form::macro('yy', function($name = "yy", $selected = null) {
    
    $yy = array(
        '' => 'Year',
        1970=>"1970",
        1971=>"1971",
        1972=>"1972",
        1973=>"1973",
        1974=>"1974",
        1975=>"1975",
        1976=>"1976",
        1977=>"1977",
        1978=>"1978",
        1979=>"1979",
        1980 => "1980", 
        1981 => "1981", 
        1982 => "1982", 
        1983 => "1983", 
        1984 => "1984", 
        1985 => "1985", 
        1986 => "1986", 
        1987 => "1987", 
        1988 => "1988", 
        1989 => "1989", 
        1990 => "1990", 1991 => "1991",1992=>"1992",1993=>"1993",1994=>"1994",1995=>"1995",1996=>"1996",1997=>"1997",1998=>"1998",1999=>"1999",2000=>"2000",2001=>"2001",
        2002=>"2002",2003=>"2003",2004=>"2004",2005=>"2005",2006=>"2006",2007=>"2007",2008=>"2008",2009=>"2009",2010=>"2010",2011=>"2011",2012=>"2012",2013=>"2013",2014=>"2014"
    );
    
    $select = '<select name="'.$name.'" class="form-control" >';
    
    foreach ($yy as $abbr => $yy)
    {
        $select .= '<option value="'.$abbr.'"'.($selected == $abbr ? ' selected="selected"' : '').'>'.$yy.'</option> ';
    }
    
    $select .= '</select>';
    
    return $select;

});


Form::macro('cinsiyet', function($name = "cinsiyet", $selected = null) {
    
    $cinsiyet = array(
        '' => 'Gender',
        'Male' => 'Male',
        'Female' => 'Female'
    );
    
    $select = '<select name="'.$name.'" class="form-control" >';
    
    foreach ($cinsiyet as $abbr => $cinsiyet)
    {
        $select .= '<option value="'.$abbr.'"'.($selected == $abbr ? ' selected="selected"' : '').'>'.$cinsiyet.'</option> ';
    }
    
    $select .= '</select>';
    
    return $select;

});



Form::macro('languages', function($name = "languages", $selected = null) {
    
    $languages = array(
        '' => 'Select Knowlodge Languages',
    'Albanian'=>'Albanian',
    'English'=>'English',
    'Turkish'=>'Turkish',
    'Italian'=>'Italian',
    'Spanish'=>'Spanish',
    'German'=>'German',
    'French'=>'French'
    );
    
    $select = '<select name="'.$name.'" class="form-control" >';
    
    foreach ($languages as $abbr => $languages)
    {
        $select .= '<option value="'.$abbr.'"'.($selected == $abbr ? ' selected="selected"' : '').'>'.$languages.'</option> ';
    }
    
    $select .= '</select>';
    
    return $select;

});


Form::macro('reading', function($name = "reading", $selected = null) {
    
    $reading = array(
        '' => 'Level',
    'Less'=>'Less',
    'Medium'=>'Medium',
    'Good'=>'Good',
    'Very Well'=>'Very Well'
    );
    
    $select = '<select name="'.$name.'" class="form-control" >';
    
    foreach ($reading as $abbr => $reading)
    {
        $select .= '<option value="'.$abbr.'"'.($selected == $abbr ? ' selected="selected"' : '').'>'.$reading.'</option> ';
    }
    
    $select .= '</select>';
    
    return $select;

});


Form::macro('writing', function($name = "writing", $selected = null) {
    
    $writing = array(
        '' => 'Level',
    'Less'=>'Less',
    'Medium'=>'Medium',
    'Good'=>'Good',
    'Very Well'=>'Very Well'
    );
    
    $select = '<select name="'.$name.'" class="form-control" >';
    
    foreach ($writing as $abbr => $writing)
    {
        $select .= '<option value="'.$abbr.'"'.($selected == $abbr ? ' selected="selected"' : '').'>'.$writing.'</option> ';
    }
    
    $select .= '</select>';
    
    return $select;

});


Form::macro('speaking', function($name = "speaking", $selected = null) {
    
    $speaking = array(
        '' => 'Level',
    'Less'=>'Less',
    'Medium'=>'Medium',
    'Good'=>'Good',
    'Very Well'=>'Very Well'
    );
    
    $select = '<select name="'.$name.'" class="form-control" >';
    
    foreach ($speaking as $abbr => $speaking)
    {
        $select .= '<option value="'.$abbr.'"'.($selected == $abbr ? ' selected="selected"' : '').'>'.$speaking.'</option> ';
    }
    
    $select .= '</select>';
    
    return $select;

});

Form::macro('exp', function($name = "exp", $selected = null) {
    
    $exp = array(
        '' => 'Experience',
    'Inexperienced'=>'Inexperienced',
    'Less than 2 years'=>'Less than 2 years',
    '2-5 Years'=>'2-5 Years',
    '5-10 Years'=>'5-10 Years',
    'More than 10 years' => 'More than 10 years'
    );
    
    $select = '<select name="'.$name.'" class="form-control" >';
    
    foreach ($exp as $abbr => $exp)
    {
        $select .= '<option value="'.$abbr.'"'.($selected == $abbr ? ' selected="selected"' : '').'>'.$exp.'</option> ';
    }
    
    $select .= '</select>';
    
    return $select;

});

Form::macro('exprience', function($name = "exprience", $selected = null) {
    
    $exprience = array(
        '' => 'Level',
    'Less'=>'Less',
    'Medium'=>'Medium',
    'Good'=>'Good',
    'Very Well'=>'Very Well'
    );
    
    $select = '<select name="'.$name.'" class="form-control" >';
    
    foreach ($exprience as $abbr => $exprience)
    {
        $select .= '<option value="'.$abbr.'"'.($selected == $abbr ? ' selected="selected"' : '').'>'.$exprience.'</option> ';
    }
    
    $select .= '</select>';
    
    return $select;

});




Form::macro('edu_level', function($name = "edu_level", $selected = null) {
    
    $edu_level = array(
        '' => 'Education Level',
        'Primary School'=>'Primary School',
        'High School'=>'High School',
        'University'=>'University',
        'Master'=>'Master',
        'PhD' => 'PhD'
    );
    
    $select = '<select name="'.$name.'" class="form-control" >';
    
    foreach ($edu_level as $abbr => $edu_level)
    {
        $select .= '<option value="'.$abbr.'"'.($selected == $abbr ? ' selected="selected"' : '').'>'.$edu_level.'</option> ';
    }
    
    $select .= '</select>';
    
    return $select;

});

HTML::macro('clever_link', function($route, $text) {    
    if( Request::path() == $route ) {
        $active = "class = 'active'";
    }
    else {
        $active = '';
    }
 
  return $active . '>' . link_to($route, $text);
});







