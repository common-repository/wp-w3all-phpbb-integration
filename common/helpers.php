<?php defined( 'ABSPATH' ) or die( 'forbidden' );

# C 2024 axew3.com
#####
# function w3all_detectClean_language_chars

# if 'transliterator_transliterate' is not configured in PHP
# -> Return Latin by default
# so the username switch from another language will fail returning same 'not transliterated' username value, then the wp_insert_user will fail answering 'cannot create user with an empty username')


# Detect any text language
##$test = w3all_detectClean_language_chars($text, false, false, true);
// and return one of these
// Arabic,Armenian,Bengali,Bopomofo,Braille,Buhid,Canadian_Aboriginal,Cherokee,Cyrillic,Devanagari,Ethiopic,Georgian,Greek,Gujarati,Gurmukhi,Han,Hangul,Hanunoo,Hebrew,Hiragana,Inherited,Kannada,Katakana,Khmer,Lao,Latin,Limbu,Malayalam,Mongolian,Myanmar,Ogham,Oriya,Runic,Sinhala,Syriac,Tagalog,Tagbanwa,TaiLe,Tamil,Telugu,Thaana,Thai,Tibetan,Yi

# return sanitized text for -> MUMS that maybe allow only '[0-9A-Za-z]'
##$test = w3all_detectClean_language_chars($text, true);

# return sanitized text for -> default WP '[-0-9A-Za-z _.@]'
##$test = w3all_detectClean_language_chars($text, false, false, false);

# return text transliterated to Latin text
##$test = w3all_detectClean_language_chars($text, false, true);

function w3all_detectClean_language_chars($text, $return_x_mums = false, $returnLatin = false, $returnDetectLang = false)
{ # C 2024 axew3.com

 if ( empty($text) ) return false;

   if( $returnLatin == true )
     {
      if(! function_exists('transliterator_transliterate') ) return $text;
      $latinText = transliterator_transliterate('Any-Latin; Latin-ASCII', $text);
      if ( empty($latinText) )  return $text;
      $latinRes = iconv(mb_detect_encoding($latinText), "ISO-8859-1//IGNORE", $latinText);
      if ( empty($latinText) )  return $text;

       return $latinRes;
     }

 # https://www.regular-expressions.info/unicode.html)
  $ln = Array ( '\p{Arabic}','\p{Armenian}','\p{Bengali}','\p{Bopomofo}','\p{Braille}','\p{Buhid}','\p{Canadian_Aboriginal}','\p{Cherokee}','\p{Cyrillic}','\p{Devanagari}','\p{Ethiopic}','\p{Georgian}','\p{Greek}','\p{Gujarati}','\p{Gurmukhi}','\p{Han}','\p{Hangul}','\p{Hanunoo}','\p{Hebrew}','\p{Hiragana}','\p{Inherited}','\p{Kannada}','\p{Katakana}','\p{Khmer}','\p{Lao}','\p{Latin}','\p{Limbu}','\p{Malayalam}','\p{Mongolian}','\p{Myanmar}','\p{Ogham}','\p{Oriya}','\p{Runic}','\p{Sinhala}','\p{Syriac}','\p{Tagalog}','\p{Tagbanwa}','\p{TaiLe}','\p{Tamil}','\p{Telugu}','\p{Thaana}','\p{Thai}','\p{Tibetan}','\p{Yi}' );
  $lds = $c = 0;

  foreach($ln as $ld)
  {

    if( preg_match( '/['.$ld.']/u', $text) && $c < 1 ) // could return more than one result, if the string is mixed, get only the first match
    {
      $lds = $ld;
      $detected_lang = str_replace(array("\p{", "}"), array("", ""), $ld);
      $c++;
       # if the function call is just to know in which language the passed text is
         if( true == $returnDetectLang )
         {
            if( empty($detected_lang) )
            { return 'Latin'; } # Not required here

           return $detected_lang;
         }
    }
  }

    if(empty($lds)) return $text;

  # mums allow only '[0-9A-Za-z]'
  # default wp allow [-0-9A-Za-z _.@]

     if($return_x_mums == true)
     {
      $text = preg_replace('/[^\w'.$lds.']/u', '', $text);
      return str_replace('_', '', $text); # also remove _
     }

     return preg_replace('/[^-\w .@'.$lds.']/u', '', $text);

}


# https://www.regular-expressions.info/unicode.html // Unicode Scripts

# Human writing systems switches test function

#$text = 'ڳاڙهو چنڊ'; # Arabic
#$text = '红月亮'; # Chinese (Hans): do not work transliterating into chinese some other language. Works transliterating from chinese to others (almost all others that works!)
#$text = 'двойняшки'; # Cirillic
#$text = "Well, Latin text it's the only one i know!";

# Note: Han (Chinese) transliteration (Any-Hans transliterator ID)) and SOME OTHER lang alphabet will not work: it maybe require different ids for the transliteration (not tested all, anyway the most important works fine)
# The function return false if there is no transliteration result

# Note:
# The ' $tolang ' param expect the Language name into one of these formats/names (CaseSensitive):
# Arabic,Armenian,Bengali,Bopomofo,Braille,Buhid,Canadian_Aboriginal,Cherokee,Cyrillic,Devanagari,Ethiopic,Georgian,Greek,Gujarati,Gurmukhi,Han,Hangul,Hanunoo,Hebrew,Hiragana,Inherited,Kannada,Katakana,Khmer,Lao,Latin,Limbu,Malayalam,Mongolian,Myanmar,Ogham,Oriya,Runic,Sinhala,Syriac,Tagalog,Tagbanwa,TaiLe,Tamil,Telugu,Thaana,Thai,Tibetan,Yi

# any passed text is converted/transliterated to LATIN ASCII then transliterated again to the required Language (one of the above) using again transliterator_transliterate

//$test = w3all_detect_convert_language($text, $toLang = 'Latin');
//$test = w3all_detect_convert_language($text, $toLang = 'Arabic', $returnDetectLang = true);

# C 2024 axew3.com
function w3all_detect_convert_language($text, $toLang = '', $returnDetectLang = false)
{

 if ( empty($text) OR !function_exists('transliterator_transliterate') OR !function_exists('mb_detect_encoding') ) return false;

   if( $toLang == 'Latin' )
     {
      $latinText = transliterator_transliterate('Any-Latin; Latin-ASCII', $text);
      if ( empty($latinText) )  return false;
      $latinRes = iconv(mb_detect_encoding($latinText), "ISO-8859-1//IGNORE", $latinText);
      if ( empty($latinText) )  return false;

       return $latinRes;
     }

# regExp Unicode Scripts
  $ln = Array ( '\p{Arabic}','\p{Armenian}','\p{Bengali}','\p{Bopomofo}','\p{Braille}','\p{Buhid}','\p{Canadian_Aboriginal}','\p{Cherokee}','\p{Cyrillic}','\p{Devanagari}','\p{Ethiopic}','\p{Georgian}','\p{Greek}','\p{Gujarati}','\p{Gurmukhi}','\p{Han}','\p{Hangul}','\p{Hanunoo}','\p{Hebrew}','\p{Hiragana}','\p{Inherited}','\p{Kannada}','\p{Katakana}','\p{Khmer}','\p{Lao}','\p{Latin}','\p{Limbu}','\p{Malayalam}','\p{Mongolian}','\p{Myanmar}','\p{Ogham}','\p{Oriya}','\p{Runic}','\p{Sinhala}','\p{Syriac}','\p{Tagalog}','\p{Tagbanwa}','\p{TaiLe}','\p{Tamil}','\p{Telugu}','\p{Thaana}','\p{Thai}','\p{Tibetan}','\p{Yi}' );

  $transIDS = Transliterator::listIDs();
  $textIs = '';

 # https://www.regular-expressions.info/unicode.html)
 # the unique difference between the $ln list (RegExp languages list
 # and Transliterator::listIDs() values seem that could be only a possible final s

  foreach($ln as $ld)
  { if(preg_match( '/['.$ld.']/u', $text))
    {
      $detected_lang = str_replace(array("\p{", "}"), array("", ""), $ld);
      # Maybe set here some switch for required and different transliterator ID
      # Search for IDs with 'Any-' as prefix, but maybe some other else is wanted instead
       foreach( $transIDS as $lk => $lv )
       { if( $lv == 'Any-'.$detected_lang )
           { $textIs = $lv; }
            elseif ( $lv == 'Any-'.$detected_lang.'s') // Han/Hans etc
             { $textIs = $lv; }
       }

       # if the function call is just to know into which language chars is the passed text

        if( !empty($detected_lang) && true == $returnDetectLang ) return $detected_lang;

     }
   }

     if( empty($textIs) ) return false;

   $toLang = 'Any-'.$toLang; # to check if it's available into Transliterator::listIDs()

  # detect if the required Language notation exist before
  # add maybe here required (and correct) switches
  if( in_array($toLang, $transIDS) )
  {
    $toLangT = $toLang.';';
    $latinText = transliterator_transliterate('Any-Latin; Latin-ASCII', $text);
    $latinText = iconv(mb_detect_encoding($latinText), "ISO-8859-1//IGNORE", $latinText);
    $text_toLang = transliterator_transliterate($toLangT, $latinText);

   if( empty($text_toLang) ) return false;

   return $text_toLang;

     /*$latinText = transliterator_transliterate('Any-Latin; Latin-ASCII',$latinText);
     $latinText = transliterator_transliterate("Any-Cyrillic",$latinText);
     print_r($latinText);echo '<br>';
     $latinText = transliterator_transliterate('Any-Latin; Latin-ASCII',$latinText);
     $latinText = transliterator_transliterate('Any-Arabic;',$latinText);
     print_r($latinText);*/

  }

  return false;

}


# $to = 'latin' or 'cyrillic'
# Cyrillic
function cyrillic_latin( $text, $to = 'latin' )
{

  if( empty($text) ) return;

 $cyr  = array('а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у',
            'ф','х','ц','ч','ш','щ','ъ', 'ы','ь', 'э', 'ю','я',
            'А','Б','В','Г','Д','Е','Ё','Ж','З','И','Й','К','Л','М','Н','О','П','Р','С','Т','У',
            'Ф','Х','Ц','Ч','Ш','Щ','Ъ', 'Ы','Ь', 'Э', 'Ю','Я' );
 $lat = array( 'a','b','v','g','d','e','e','zh','z','i','y','k','l','m','n','o','p','r','s','t','u',
            'f' ,'h' ,'ts' ,'ch','sh' ,'sht' ,'i', 'y', 'y', 'e' ,'yu' ,'ya','A','B','V','G','D','E','E','Zh',
            'Z','I','Y','K','L','M','N','O','P','R','S','T','U',
            'F' ,'H' ,'Ts' ,'Ch','Sh' ,'Sht' ,'I' ,'Y' ,'Y', 'E', 'Yu' ,'Ya' );

   if( $to == 'latin' ){
    return str_replace($cyr, $lat, $text);
   } else {
    return str_replace($lat, $cyr, $text);
   }

}

# Chinese

# $to = 'latin' or 'chinese'

# In the chinese alphabet, small letters are written like capital letters, and vice versa
# https://www.chinese-tools.com/characters/alphabet.html

function simplifiedChinese_latin( $text, $to = 'latin' )
{
  if( empty($text) ) return;

 $chinese = array('诶', '必', '西', '弟', '衣', '艾付', '记', '爱耻', '挨', '宅', '开', '饿罗', '饿母', '恩', '呕', '披', '酷', '耳', '艾斯', '踢', '忧', '维', '大波留', '埃克斯', '歪', '再得');
 $lat = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
 $latLow = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');

   if( $to == 'latin' ){
    $res = str_replace($chinese, $lat, $text);
     return $res;
   } else {

    $res = str_replace($lat, $chinese, $text);
    $res = str_replace($latLow, $chinese, $text);
     return $res;
   }

}