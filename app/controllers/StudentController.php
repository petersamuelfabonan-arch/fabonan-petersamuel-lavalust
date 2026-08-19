<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * StudentController
 *
 * Handles the Student Information Page for the LavaLust
 * Routing / Controller / View / Middleware laboratory activity.
 *
 * Author: Peter Samuel Fabonan
 * Course: BSIT 3rd Year - Section 3-F1
 */
class StudentController extends Controller
{
    /**
     * Holds the sample student data used by both the
     * home page and the profile page.
     *
     * @var array
     */
    private function studentData()
    {
        return [
            'student_id' => 'MCC2024-0016',
            'name'       => 'Peter Samuel Fabonan',
            'course'     => 'BS Information Technology',
            'year'       => '3rd Year',
            'section'    => '3-F1',
            'email'      => 'pnkyzslides@gmail.com',
            'TikTok'      => '@pnky_z',
            'hobbies'    => [
                'Gaming',
                'Aspiring Pianist',
                'Animator',          
                'Yearner',
                'Technician',
                'Visual Novel Author',
                'playing bass guitar',
                'Video Editing'
            ]
        ];
    }

    /**
     * GET /student
     * Displays the student home page.
     */
    public function index()
    {
        $data['student'] = $this->studentData();
        $this->call->view('student/index', $data);
    }

    /**
     * GET /student/profile
     * Displays the full student profile page.
     * Protected by StudentMiddleware.
     */
    public function profile()
    {
        $data['student'] = $this->studentData();
        $this->call->view('student/profile', $data);
    }
}
