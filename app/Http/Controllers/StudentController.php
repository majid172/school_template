<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function list()
    {
        $title    = "অধ্যয়নরত শিক্ষার্থীর সংখ্যা";
        $students = DB::table('school_classes')
            ->join('student_enrollments', 'student_enrollments.school_class_id', '=', 'school_classes.id')
            ->join('students', 'students.id', '=', 'student_enrollments.student_id')
            ->join('religions', 'religions.id', '=', 'students.religion_id')
            ->join('sections', 'sections.id', '=', 'student_enrollments.section_id')
            ->join('genders', 'genders.id', '=', 'students.gender_id')
            ->select(
                'school_classes.id as class_id',
                'school_classes.class_name',
                'student_enrollments.section_id',
                'sections.name as section_name',
                DB::raw('COUNT(students.id) as total_student'),

                DB::raw('SUM(CASE WHEN religions.id = 1 THEN 1 ELSE 0 END) as islam_count'),
                DB::raw('SUM(CASE WHEN religions.id = 2 THEN 1 ELSE 0 END) as hindu_count'),
                DB::raw('SUM(CASE WHEN religions.id = 3 THEN 1 ELSE 0 END) as christian_count'),
                DB::raw('SUM(CASE WHEN religions.id = 4 THEN 1 ELSE 0 END) as buddhist_count'),

                DB::raw('SUM(CASE WHEN genders.id = 1 THEN 1 ELSE 0 END) as male_count'),
                DB::raw('SUM(CASE WHEN genders.id = 2 THEN 1 ELSE 0 END) as female_count'),
                DB::raw('SUM(CASE WHEN genders.id = 3 THEN 1 ELSE 0 END) as others_count'),
            )
            ->groupBy(
                'school_classes.id',
                'school_classes.class_name',
                'student_enrollments.section_id',
                'sections.name'
            )
            ->get();

        $totals = $this->getTotals($students);
// dd($totals);
        return view('students.list', compact('students', 'title','totals'));
    }
    public function getTotals($students)
    {
        return [
            'total_students'  => $students->sum('total_student'),
            'total_male'      => $students->sum('male_count'),
            'total_female'    => $students->sum('female_count'),
            'total_others'    => $students->sum('others_count'),
            'total_muslim'    => $students->sum('islam_count'),
            'total_hindu'     => $students->sum('hindu_count'),
            'total_christian' => $students->sum('christian_count'),
            'total_buddhist'  => $students->sum('buddhist_count'),
        ];

    }
}
