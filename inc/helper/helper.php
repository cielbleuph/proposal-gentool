<?php

    class Helper {
        public $date;

        function convertDateToStringFormat( $date, $format ) {
            
            $date = date_create( $date );
            $date = date_format( $date, $format );
            
            return $date;
        }
    }
    

    
