<?php

class User extends DataBoundObject {
        protected $ID;
        protected $user_id;
        protected $last_activity;
        protected $is_type;
        
        

        protected function DefineTableName() {
                return("login_details");
        }

        protected function DefineRelationMap() {
                return(array(
                        "login_details_id" => "id",
                        "user_id" => "user_id",
                        "last_activity" => "last_activity",
                        "is_type" => "is_type",
                ));
        }

        protected function recibirDatos(){

        }
}

?>
