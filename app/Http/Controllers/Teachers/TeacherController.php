<?php
namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function list()
    {
        $title    = "শিক্ষকগণ";
        $teachers = DB::table('teachers')
            ->join('staff', 'teachers.staff_id', '=', 'staff.id')
            ->join('employment_statuses', 'staff.employment_status_id', '=', 'employment_statuses.id')
            ->join('department_designation', 'staff.department_designation_id', '=', 'department_designation.id')
            ->join('departments', 'department_designation.department_id', '=', 'departments.id')
            ->join('designations', 'department_designation.designation_id', '=', 'designations.id')
            ->select(
                'teachers.*',
                'staff.first_name',
                'staff.last_name',
                'staff.email',
                'staff.phone',
                'staff.photo',
                'employment_statuses.name as employment_status',
                'departments.name as department',
                'designations.name as designation'
            )

            ->get();

       

        return view('teachers.list', compact('title', 'teachers'));
    }
    public function show($id)
    {
        $title = "শিক্ষক / শিক্ষিকা বিস্তারিত";
        $teacher = DB::table('teachers')->where('teachers.id',$id)
            ->join('staff', 'teachers.staff_id', '=', 'staff.id')
            ->join('employment_statuses', 'staff.employment_status_id', '=', 'employment_statuses.id')
            ->join('department_designation', 'staff.department_designation_id', '=', 'department_designation.id')
            ->join('departments', 'department_designation.department_id', '=', 'departments.id')
            ->join('designations', 'department_designation.designation_id', '=', 'designations.id')
            ->select(
                'teachers.*',
                'staff.first_name',
                'staff.last_name',
                'staff.email',
                'staff.phone',
                'staff.photo',
                'staff.joining_date',
                'staff.employee_id',
                'employment_statuses.name as employment_status',
                'departments.name as department',
                'designations.name as designation'
            )

            ->first();

        return view('teachers.show',compact('title','teacher'));
    }
}
