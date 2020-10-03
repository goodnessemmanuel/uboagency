<?php
require('ModelAccount.php');
require('Property.php');
session_start();
$check_match = false;
if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
    header ("Location: login");
}
else{
    if(isset($_GET['viewProperties'])){
        $properties = ModelAccount::loadProperties();
        if($properties){
            foreach ($properties as $key => $value){
                echo '<div class="row">';
                echo '<table class="table mb-3 col-md-6">';
                    echo '<thead>';
                        echo '<tr>';
                            echo '<th>'. $value['house_name'].'</th>';
                        echo '</tr>';
                    echo '</thead>';
                    echo '<tbody>';
                        echo '<tr>';
                        echo '<td>';
                        echo '<h6>';
                            echo $value['house_bus_stop'];
                        echo '</h6>';
                        echo '<p>';
                            echo $value['house_address'];
                        echo '</p>';
                        echo '</td>';
                        echo '</tr>';
                    echo '</tbody>';
                echo '</table> ';
                echo '<table class="table mb-3 col-md-6">';
                    echo '<thead>';
                        echo '<tr>';
                            echo '<th>'.'Featured Image'. '<th>';
                        echo '</tr>';
                    echo '</thead>';
                    echo '<tbody>';
                        echo '<tr>';
                            echo '<td>'.'Image'. '<td>';
                        echo '</tr>';
                    echo '</tbody>';
                echo '</table> ';
                echo '</div>';
            }
        }
    }
    else{
        echo 'nothing happened';
    }
}
