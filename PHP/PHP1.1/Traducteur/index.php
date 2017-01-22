<?php
header( 'content-type: text/html; charset=utf-8' );
 
$word = isset($_POST['word'])?$_POST['word']:null;
$direction = isset($_POST['direction'])?$_POST['direction']:null;
 
$word = strtolower($word);
 
echo 'word'.$word;
echo $direction;
echo 'coucou2';
 
$result=translate($word, $direction);
 
function translate($word,$direction){
 
    $dictionnaire = [
        "habit" => "habitude",
        "flat" => "appartement",
        "elevator" => "ascenseur",
        "sun" => "soleil",
    ];
 
    switch ($direction) {
        case 'toFrench':
        $w_index=array_key_exists($word, $dictionnaire);
            if($w_index === true){
                $translateWord = $dictionnaire[$word];
                $message = "Le mot $word se traduit en français par $translateWord";
 
            }else{
                $message = "Le mot $word n'est pas dans ma table de traduction";
 
            };
            break;
 
        case 'toEnglish':
            if(in_array($word, $dictionnaire) == true){
            	$translateWord = array_search($word, $dictionnaire);
            	$message = "Le mot se traduit en anglais par $translateWord";
            }else{
            	$message = "I don't know this word";
            }
            break;

        default:
            $message = 'Je ne connais pas cette langue';
            break;
    }
 
    return $message;
};
 
echo $result;
 
include_once('template.phtml');
?>