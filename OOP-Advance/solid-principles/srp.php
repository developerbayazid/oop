<?php
//Single Responsibility Principle

//Shouldn't do
class Student {
    function attendance(){}
    function gradeCalculate(){}
    function studentFees(){}
}

//Should do

class Attendance {

}
class GradeCalculate {

}
class StudentFees {
    
}