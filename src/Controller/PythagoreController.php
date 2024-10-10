<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
include "..\classes\PythagoreUtility.php";
class PythagoreController {
    $pyt;
    public function __construct() {
       $pyt = new PythagoreUtility;
    }
    #[Route('/pythagore/view')];
    public function DisplayPythagoreAction() {
        $contenu = $pyt->display();
        return $this->render("displayPythagore.html.twig",["disp"=>$contenu]);
    }
}
?>
