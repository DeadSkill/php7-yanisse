<?php
         
                // Si le bouton 'submit' existe
                if (isset($_GET['submit']))
                {  
                    // Et si le number1, la number2 et le choix d'operations ne sont pas vides
                    if (!empty($_GET['number1']) && !empty($_GET['number2']) && !empty($_GET['operation']))
                    {  
                        // Et si le choix d'opérations est positionnée sur '+'
                        if ($_GET['operations'] == 'add')
                        {
                            $result = $_GET['number1'] + $_GET['number2'];
                            echo '<p>La somme de ces deux nombres est ' .$result. '</p>';
                        }
                         
                        // Sinon si le choix d'opérations est positionnné sur '-'
                        elseif ($_GET['operations'] == 'sub')
                        {
                            $result = $_GET['number1'] - $_GET['number2'];
                            echo '<p>La différence des ces deux nombres est ' .$result. '</p>';
                        }
                         
                        // Sinon si le choix d'opérations est positionnné sur '/'
                        elseif ($_GET['operations'] == 'div')
                        {
                            $result = $_GET['number1'] / $_GET['number2'];
                            echo '<p>Le quotient de ces deux nombres est ' .$result. '</p>';
                        }
                         
                        // Sinon si le choix d'opérations est positionnné sur '*'
                        elseif ($_GET['operations'] == 'multi')
                        {
                            $result = $_GET['number1'] * $_GET['number2'];
                            echo '<p>Le produit de ces deux nombres est ' .$result. '</p>';
                        }
                         
                        // Au cas ou si l'utilisateur veut diviser par 0
                        elseif ($_GET['operations'] == 'div' && $_GET['number1'] == '0' || $_GET['number2'] == '0' )
                        {
                            echo '<p>On ne peut pas diviser par 0 !</p>';
                        }
                         
                        // Dans tout les autres cas
                        else
                        {
                            echo '<p>Remplissez correctement les champs !</p>';
                        }
                    }
                     
                    // Dans tout les autres cas
                    else
                    {
                        echo '<p>Remplissez correctement les champs !</p>';
                    }
                }
                 
                else
                {
                    echo 'Veuillez saisir des valeurs pour effectuer votre calcul.';
                }
             
            ?>
