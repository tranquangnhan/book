<?php

use function PHPSTORM_META\type;

require_once "../../../system/config.php";
    require_once "../../../system/database.php";
    require_once "../../models/home.php";
    $model = new Model_home;
    session_start();

    switch ($_POST['action']) {
        case 'getData':
            $array      = array();   
            $notOr      = true;   
            $sqlCheck   = false;   

            $filter     = $_POST['filterOb'];
            $data       = json_decode($filter);
            $form       = $_POST['form'];

            $type       = $data['0']->type;
            $class      = $data['1']->class;
            $idcate     = $data['2']->category;

            $sql        = 'SELECT * FROM `book` WHERE ';

            if (count($type) > 0) {  
                $sqlCheck  = true;   
                $notOr     = false;          

                $sql      .= 'type in (';
                $sql .= implode(',', $type);
                $sql .= ')';
            }

            if (count($class) > 0) {
                $sqlCheck = true;
                if ($notOr == false) {
                    $sql  .= ' OR ';
                } else {
                    $notOr = false;
                }

                $sql .= 'class in (';
                $sql .= implode(',', $class);
                $sql .= ')';
            }

            if (count($idcate) > 0) {
                $sqlCheck = true;
                if ($notOr == false) {
                    $sql  .= ' OR ';
                } else {
                    $notOr = false;
                }

                $sql .= 'idcate in (';
                $sql .= implode(',', $idcate);
                $sql .= ')';
            }

            $sql .= ' ORDER BY id DESC limit ';
            $sql .= $form . ' , 9';

            if ($sqlCheck === true) {
                $dataProducts = $model->getProductsBySql($sql);
            } else {
                $dataProducts = $model->getProducts();
            }

            echo json_encode($dataProducts);
            break;        
        default:
            # code...
            break;
    }
?>