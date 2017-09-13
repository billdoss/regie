<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Regie publicitaire</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Regie publicitaire</span></a>
            </div>

            <div class="clearfix"></div>

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                 
                  <li><a><i class="fa fa-edit"></i> Modification <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">test</a></li>
                      <li><a href="#">test</a></li>
                      <li><a href="#">test</a></li>
                    </ul>
                  </li>
                
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="#">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ajout d'une nouvelle grille tarifaire</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <!-- Smart Wizard -->
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              Etape 1<br />
                                              <small>Choix du support</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Etape 2<br />
                                              <small>Informations à enregistrer</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                              Etape 3<br />
                                              <small>Step 3 description</small>
                                          </span>
                          </a>
                        </li>
                        
                      </ul>
                      <div id="step-1">
                        <form class="form-horizontal form-label-left">
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Supports </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select class="form-control col-md-7 col-xs-12">
                                <option>Choix du support</option>
                                <option>Support 1</option>
                                <option>Support 2</option>
                                <option>Support 3</option>
                                <option>Support 4</option>
                              </select>
                            </div>
                          </div>
                          
                          

                        </form>

                      </div>
                    <div id="step-2" class="posi">

                    <!-- start form for validation -->
		                    <form class="form-horizontal form-label-left">
		                    <div class="col-md-6 col-sm-6 col-xs-12 center">
		                    		<label for="fullname">Libellé * :</label>
		                      <select id="heard" class="form-control" required>
		                            <option value="">Rti</option>
		                            <option value="press">45</option>
		                            <option value="net">7</option>
		                            <option value="mouth">666</option>
		                          </select>
		                      <br>

		                      <label>Indicé *:</label>
		                      
		                        Oui:
		                        <input type="radio" class="flat" name="gender" id="genderM" value="oui" checked="" required /> Non:
		                        <input type="radio" class="flat" name="gender" id="genderF" value="non" /><br><br>
		                      <label for="heard">Montant indice *:</label>
		                          <select id="heard" class="form-control" required>
		                            <option value="">0</option>
		                            <option value="press">45</option>
		                            <option value="net">7</option>
		                            <option value="mouth">666</option>
		                          </select>
<br>
		                      <label>Conditions sur facturation :</label>
		                      <p style="padding: 5px;">
		                        <input type="checkbox" name="hobbies[]" id="hobby1" value="ski" data-parsley-mincheck="2" required class="flat" /> Skiing
		                        <br />

		                        <input type="checkbox" name="hobbies[]" id="hobby2" value="run" class="flat" /> Running
		                        <br />

		                        <input type="checkbox" name="hobbies[]" id="hobby3" value="eat" class="flat" /> Eating
		                        <br />

		                        <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Sleeping
		                        <br />
		                       
		                    </div>
		                      

		                    </form>
	                    <!-- end form for validations -->

                      </div>
                      <div id="step-3" class="posi">
                        <h2 class="StepTitle" class="posi">Confirmation</h2>
                        <p>
                          Cliquer sur finir pour finaliser l'enregistrement de la noulvelle grille tarifaire.
                        </p>                        
                      </div>                      

                    </div>
                    <!-- End SmartWizard Content -->


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="../vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>




    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>

	
  </body>
</html>