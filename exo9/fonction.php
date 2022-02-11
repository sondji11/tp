
<?php function valider($nbre,string $key,array &$error):void 
{
    if (empty($nbre))
    {
        $error[$key]="veuillez entrer un nombre ";
    }
    else
    {
        if (!is_numeric($nbre))
        {
            $error[$key]="veuillez saisir un nombre";
        }
    }
}