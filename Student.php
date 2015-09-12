<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author Andrew
 */
class Student {
    /**
     * Class constructor.
     */
    function __construct(){
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    /**
     * Add an email to this student.
     * @param type $which   Category/Type of email.
     * @param type $address Email address.
     */
    function add_email($which, $address){
        $this->emails[$which] = $address;
    }
    
    /**
     * Add a grade to this student.
     * @param type $grade Grade to add.
     */
    function add_grade($grade){
        $this->grades[] = $grade;
    }
    
    /**
     * Returns average of all grades.
     * @return type Average of all grades.
     */
    function average(){
        $total = 0;
        // Get sum of all grades.
        foreach($this->grades as $value)
               $total += $value;
        // Return sum divided by count.
        return $total / count($this->grades);
    }
    
    /**
     * Returns this Student and its info in readable format.
     * @return type Readable string of student and info.
     */
    function toString(){
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        // Cycle and concatenate each email with its type.
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}
