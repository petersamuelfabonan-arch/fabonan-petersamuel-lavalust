<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * StudentMiddleware
 *
 * Protects the /student/profile route.
 *
 * Access condition (unique to this activity):
 * A session flag `student_access` must be set to true.
 * This simulates a simple "logged in student" check.
 *
 * - Allowed  -> request continues to StudentController::profile()
 * - Denied   -> user sees a simple "Access Denied" message and is
 *               redirected back to the student home page.
 */
class StudentMiddleware extends Middleware
{
    public function handle()
    {
        // For demo purposes, grant access automatically.
        // Comment the line below out (or set it to false) to test the
        // "Access Denied" path.
        $_SESSION['student_access'] = true;

        if (!isset($_SESSION['student_access']) || $_SESSION['student_access'] !== true) {
            // Simple access denied message
            echo '<h2 style="font-family: sans-serif; text-align:center; margin-top:40px;">
                    Access Denied
                  </h2>
                  <p style="text-align:center;">
                    You do not have permission to view this page.
                  </p>';
            exit;
        }

        // Access allowed — request proceeds to StudentController::profile()
    }
}