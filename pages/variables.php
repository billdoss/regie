<?php 
/*
	class donnees{
		public $Media;
		public $Support;
		public $EtatGrilleTarifaire;
		public $libele;
		public $EstIndicie;
		public $PrixBase;
		public $Bcp_Prod_Mem_Mark;
		public $Prod_Mark_diff_mem_annonceur;
		public $Prod_Mark_diff_bcp_annonceur;
		public $DateDeb;
		public $DateFin;
	}
*/
	include("index.php");
//require "scripts/manipBd.php";

	    $Media;
		$Support;
		$EtatGrilleTarifaire;
		$libele;
		$EstIndicie;
		$PrixBase;
		$Bcp_Prod_Mem_Mark;
		$Prod_Mark_diff_mem_annonceur;
		$Prod_Mark_diff_bcp_annonceur;
		$DateDeb;
		$DateFin;

	
								if (isset($_POST['support'])) {
                                  $Support = $_POST['support'];
                                  echo($Support);
                                }
                                if (isset($_POST['etats'])) {
                                  $EtatGrilleTarifaire = $_POST['etats'];
                                  echo($EtatGrilleTarifaire);
                                }
                                if (isset($_POST['libeleGrille'])) {
                                  $libele = $_POST['libeleGrille'];
                                  echo($libele);
                                }
                                if (isset($_POST['indicer'])) {
                                  $EstIndicie = $_POST['indicer'];
                                  if ($EstIndicie == "non") {
                                  	$EstIndicie = "0";
                                  }else{
                                  	$EstIndicie = "1";
                                  }
                                  echo($EstIndicie);
                                }
                                if (isset($_POST['PrixBase'])) {
                                  $PrixBase = $_POST['PrixBase'];
                                  echo($PrixBase);
                                }
                                if (isset($_POST['Bcp_Prod_Mem_Mark'])) {
                                  $Bcp_Prod_Mem_Mark = $_POST['Bcp_Prod_Mem_Mark'];
                                  echo($Bcp_Prod_Mem_Mark);
                                }
                                if (isset($_POST['Prod_Mark_diff_mem_annonceur'])) {
                                  $Prod_Mark_diff_mem_annonceur = $_POST['Prod_Mark_diff_mem_annonceur'];
                                  echo($Prod_Mark_diff_mem_annonceur);
                                }
                                if (isset($_POST['Prod_Mark_diff_bcp_annonceur'])) {
                                  $Prod_Mark_diff_bcp_annonceur = $_POST['Prod_Mark_diff_bcp_annonceur'];
                                  echo($Prod_Mark_diff_bcp_annonceur);
                                }
                                if (isset($_POST['DateDeb'])) {
                                  $DateDeb = $_POST['DateDeb'];
                                  echo($DateDeb);
                                }
                                if (isset($_POST['DateFin'])) {
                                  $DateFin = $_POST['DateFin'];
                                  echo($DateFin);
                                }else{
                                	$DateFin = "0000/00/00";
                                }

                              $base = new database();
                              try {
                              		$base->insertionSimpleSansDateFin($libele,$EstIndicie,$PrixBase,$Bcp_Prod_Mem_Mark,$Prod_Mark_diff_mem_annonceur,$Prod_Mark_diff_bcp_annonceur,$Support,$DateDeb);
                              } catch (Exception $e) {
                              		$base->insertionSimpleAvecDateFin($libele,$EstIndicie,$PrixBase,$Bcp_Prod_Mem_Mark,$Prod_Mark_diff_mem_annonceur,$Prod_Mark_diff_bcp_annonceur,$Support,$DateDeb,$DateFin);
                              }
                              
	/*try {
                              $db = new PDO('mysql:host=localhost;dbname=regie_pub','root','');
                      $req = $db->prepare('INSERT INTO grilletarifaire 
                      (libgrilletarif,indice,montantind,cobplusprob,cobunemarque,cobplusmarque,idsupport,datedeb,datefin) VALUES 
                      (:libgrilletarif,:indice,:montantind,:cobplusprob,:cobunemarque,:cobplusmarque,:idsupport,:datedeb,:datefin)');
                              $req->execute(array(
                                    'libgrilletarif' => $libele,
                                    'indice' => $EstIndicie,
                                    'montantind' => $PrixBase,
                                    'cobplusprob' => $Bcp_Prod_Mem_Mark,
                                    'cobunemarque' => $Prod_Mark_diff_mem_annonceur,
                                    'cobplusmarque' => $Prod_Mark_diff_bcp_annonceur,
                                    'idsupport' => $Support,
                                    'datedeb' => $DateDeb,
                                    'datefin' => $DateFin
                                ));
                              
                              print_r($db->errorInfo());
                        } catch (exception $e) {
                              echo "IMPOSSIBLE DE SE CONNECTER A LA Base de donnee";
                        }


	*/

	//echo($Media);
	//echo($Support);
	//echo($EtatGrilleTarifaire);
	//echo($libele);
	//echo($EstIndicie);
	//echo($PrixBase);
	//echo($Bcp_Prod_Mem_Mark);
	//echo($Prod_Mark_diff_mem_annonceur);
	//echo($Prod_Mark_diff_bcp_annonceur);
	//echo($DateDeb);
	//echo($DateFin);
 ?>