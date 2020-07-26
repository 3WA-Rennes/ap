<?php

class Tools{
    protected $button_show = '<button class="button_show_more">Voir +</button>';
    protected $button_hide = '<button class="button_show_less">Réduire -</button>';
    protected $tag_1 = '<div class="hidden"><div>';
    protected $tag_2 ='</div></div>';

    public static function showTxtCut($txt, $length)
    {
        $button_show = '<button>+</button>';
        $button_hide = '<button class="button_show_less">-</button>';
        $tag_1 = '<div class="hidden"><div>';
        $tag_2 ='</div></div>';
        $txt = substr($txt, 0, $length);
  
        $txt = $txt.'...'.$button_show;
       
        /* Version 2 à développer
        /A revoir : Julian Assange /ˈd͡ʒuːlɪən əˈsɑːnʒ/1, né Julian Paul Hawkins

        $select = '([a-zA-Z0-9àáâãäåçèéêëìíîïðòóôõöùúûüýÿÁÀÂÄÉÈÊËÔ,.?\n\*\'’/<>"\\\/:=_!() -]{'.$length.'})';
        $select2 ='([a-zA-Z0-9àáâãäåçèéêëìíîïðòóôõöùúûüýÿÁÀÂÄÉÈÊËÔ,.?\n\*\'’/<>"\\\/:=_!() -]{0,})';
        $button1 = '<button class="button_show_more">Voir +</button>';
        $button2 = '<button class="button_show_less">Réduire -</button>';
        $tag_1 = '<div class="hidden"><strong>';
        $tag_2 ='</strong></div>';

        $txt = preg_replace('#^'.$select.$select2.'#i', '$1...'.$button1.$tag_1.'$2'.$button2.$tag_2.'', $txt);
        return $txt;
        */
        return $txt;
    }

    public static function showTxt($txt)
    {
        $button_show = '<button class="button_show_more">+</button>';
        $button_hide = '<button class="button_show_less">Réduire -</button>';
        $tag_txt_1 = '<div class="hidden"><div>';
        $tag_txt_2 ='</div></div>';
        
        $txt = $tag_txt_1.$txt.' '.$button_hide.$tag_txt_2;
        
        return $txt;
    }


    public static function jauge($score, $maxScore){

        //$score = ($score*100)/$maxScore;
        echo "";
        /* <progress>
            </progress> voir compatibilité CSS3 

            <div style="width: 100%; height: 1rem; background-color: rgba(0,0,0,0);"> 

            <div style ="width: 80%; height: 1rem; background-color: green;">Score </div>
        </div>
         */
        echo '<progress value="'.$score.'" max="'.$maxScore.'"></progress>';

    }

    /** Affiche l'année en cours
     * 
     * @return string
     */
    public static function showYear()
    {
        $year = date('Y');
        return $year;
    }


}   




?>
