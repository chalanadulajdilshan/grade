<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DefaultData
 *
 * @author User™
 */
class DefaultData
{

    //vehicle get class types
    public function Grades()
    {
        return array(
            "1" => "Grade 6",
            "2" => "Grade 7",
            "3" => "Grade 8",
            "4" => "Grade 9",
            "5" => "Grade 10",
            "6" => "Grade 11"
        );
    }

    //select class Duration    
    public function classDuration()
    {
        return array(
            "1" => "1 Hour",
            "2" => "1.30 Hours",
            "3" => "2 Hours",
            "4" => "2.30 Hours",
            "5" => "3 Hours",
            "6" => "3.30 Hours",
            "7" => "4 Hours",
            "8" => "4.30 Hours",
            "9" => "5 Hours",
            "10" => "5.30 Hours",
            "11" => "6 Hours",
            "12" => "6.30 Hours",
            "13" => "7 Hours",
            "14" => "7.30 Hours",
            "15" => "8 Hours",
            "16" => "8.30 Hours",
            "17" => "9 Hours",
            "18" => "9.30 Hours",
            "19" => "10 Hours"
        );
    }

    //Curancy Type 
    public function paymentMethod()
    {
        return array(
            "1" => "Free",
            "2" => "Paid"
        );
    }

    //offers select types
    public function getOfferTypes()
    {
        return array(
            1 => "Accommodation",
            2 => "Tour Company",
            3 => "Rent a Car",
            4 => "Restaurant",
            5 => "Other"
        );
    }

    //offers select types
    public function getBookingStatus()
    {
        return array(
            0 => "Pending..!",
            1 => "Confirm..!",
            2 => "Cancel..!"
        );
    }

    //facility type
    public function getFacilityType()
    {
        return array(
            1 => "Internet access",
            2 => "Getting around",
            3 => "Things to do, ways to relax",
            4 => "Dining, drinking, and snacking",
            5 => "Access, services, and conveniences ",
            6 => "For the kids"
        );
    }
}
