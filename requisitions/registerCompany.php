<?php 
include '../model/Company.php';
        $nameCompanie = addslashes ($_POST['nameCompanie']); 
        $cpnjCompanie = addslashes($_POST['cnpjCompanie']);
        $emailCompanie = addslashes($_POST['emailCompanie']);
        $cityCompanie = addslashes($_POST['cityCompanie']);
        $stateCompanie = addslashes($_POST['stateCompanie']);
        $passwordCompanie = md5($_POST['passwordCompanie']) ;
                    $company = new Company;
                    $return = $company->createNewCompany($nameCompanie, $cpnjCompanie, $emailCompanie, $cityCompanie, $stateCompanie, $passwordCompanie);
                    echo json_encode(array(
                        "status" => $return
                    ));
