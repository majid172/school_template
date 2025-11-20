<?php
namespace App\Repository;

use Illuminate\Support\Facades\DB;

class TeacherRepository
{

    public function list($limit)
    {
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
            )->limit($limit)->get();
        return $teachers;
    }
}
