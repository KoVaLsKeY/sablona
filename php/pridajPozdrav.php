<?php 
            $hour = date('H');
            if ($hour < 12) {
                echo "<h3>DObre rano</h3>";
            } elseif ($hour <18 ) {
                echo "<h3>Dobry den</h3>";
            }?>
