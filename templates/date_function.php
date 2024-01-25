<?php

    function WeekDay($timestamp)
        {
        switch (date('N', $timestamp))
        {
            case 1:
            $jour_de_la_semaine = 'Lundi';
            break;
            case 2:
            $jour_de_la_semaine = 'Mardi';
            break;
            case 3:
            $jour_de_la_semaine = 'Mercredi';
            break;
            case 4:
            $jour_de_la_semaine = 'Jeudi';
            break;
            case 5:
            $jour_de_la_semaine = 'Vendredi';
            break;
            case 6:
            $jour_de_la_semaine = 'Samedi';
            break;
            case 7:
            $jour_de_la_semaine = 'Dimanche';
            break;
            }
            return $jour_de_la_semaine;
        }