<?php
    namespace VgrSystem;

    interface BaseInterface {

        /**
            * @param integer $rating
            *
            * @return mixed
        */
        public function showImage( $rating = 3 );
    }
?>
