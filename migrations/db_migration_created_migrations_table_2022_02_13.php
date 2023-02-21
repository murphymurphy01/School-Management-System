<?php

function up()
{
    $query = "CREATE TABLE `school_management_system`.`admission_forms` ( `form_no`VARCHAR(255) NOT NULL AUTO_INCREMENT , `receipt_no` VARCHAR(255) NOT NULL , `firstname` TEXT NOT NULL , `middlename` TEXT NOT NULL , `lastname` TEXT NOT NULL , `picture` TEXT NOT NULL , `residential_address` TEXT NOT NULL , `date_of_birth` DATE NOT NULL , `nationality` TEXT NOT NULL , `age` TEXT NOT NULL , `sex` TEXT NOT NULL , `religion` TEXT NOT NULL , `state_of_origin` TEXT NOT NULL , `lga` TEXT NOT NULL , `last_class_attended` TEXT NOT NULL , `class_applied_for` INT NOT NULL , `last_school_attended` TEXT NULL , `date_of_leaving` DATE NOT NULL , `transfer_cert_num` INT NULL , `school_choice` ENUM(day/boarding) NOT NULL , `hobbies` TEXT NOT NULL , `guardian_details` JSON NOT NULL , PRIMARY KEY (`form_no`)) ENGINE = InnoDB;
    
    

    return $query;
}


function down()
{
    $query = "
    

    return $query;
}

sql is giving me error