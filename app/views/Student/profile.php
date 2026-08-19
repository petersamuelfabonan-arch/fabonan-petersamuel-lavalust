<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Student Profile | Peter Samuel Fabonan</title>
<style>
    :root {
        --ink: #1c1c1c;
        --muted: #6b6b6b;
        --line: #e5e5e5;
        --accent: #2563eb;
        --bg: #fafafa;
    }
    * { box-sizing: border-box; }
    body {
        margin: 0;
        font-family: -apple-system, "Segoe UI", Helvetica, Arial, sans-serif;
        background: var(--bg);
        color: var(--ink);
    }
    nav {
        display: flex;
        gap: 24px;
        padding: 18px 40px;
        border-bottom: 1px solid var(--line);
        background: #fff;
    }
    nav a {
        text-decoration: none;
        color: var(--ink);
        font-size: 14px;
        font-weight: 500;
    }
    nav a:hover { color: var(--accent); }
    .wrap {
        max-width: 560px;
        margin: 0 auto;
        padding: 60px 24px;
    }
    .card {
        background: #fff;
        border: 1px solid var(--line);
        border-radius: 10px;
        padding: 40px;
    }
    .eyebrow {
        text-transform: uppercase;
        letter-spacing: .12em;
        font-size: 12px;
        color: var(--muted);
        margin-bottom: 8px;
    }
    h1 {
        font-size: 26px;
        font-weight: 600;
        margin: 0 0 28px;
    }
    dl {
        margin: 0;
        display: grid;
        grid-template-columns: 130px 1fr;
        row-gap: 14px;
    }
    dt {
        font-size: 13px;
        color: var(--muted);
        font-weight: 500;
    }
    dd {
        margin: 0;
        font-size: 14px;
    }
    .hobbies {
        margin-top: 28px;
        padding-top: 24px;
        border-top: 1px solid var(--line);
    }
    .hobbies .eyebrow { margin-bottom: 14px; }
    .chip-row {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }
    .chip {
        font-size: 13px;
        padding: 6px 12px;
        border: 1px solid var(--line);
        border-radius: 999px;
        color: var(--ink);
    }
    .meta {
        margin-top: 32px;
        font-size: 12px;
        color: var(--muted);
        text-align: center;
    }
</style>
</head>
<body>

<nav>
    <a href="<?php echo site_url('student'); ?>">Home</a>
    <a href="<?php echo site_url('student/profile'); ?>">Student Profile</a>
</nav>

<div class="wrap">
    <div class="card">
        <div class="eyebrow">Student Information</div>
        <h1><?php echo html_escape($student['name']); ?></h1>

        <dl>
            <dt>Student ID</dt>
            <dd><?php echo html_escape($student['student_id']); ?></dd>

            <dt>Course</dt>
            <dd><?php echo html_escape($student['course']); ?></dd>

            <dt>Year Level</dt>
            <dd><?php echo html_escape($student['year']); ?></dd>

            <dt>Section</dt>
            <dd><?php echo html_escape($student['section']); ?></dd>

            <dt>Email</dt>
            <dd><?php echo html_escape($student['email']); ?></dd>
            
            <dt>Tiktok</dt> 
            <dd><?php echo html_escape($student['TikTok']); ?></dd>
        </dl>

        <div class="hobbies">
            <div class="eyebrow">Hobbies and skills</div>
            <div class="chip-row">
                
                <?php foreach ($student['hobbies'] as $hobby): ?>
                    
                    <span class="chip"><?php echo html_escape($hobby); ?></span>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="meta">
       <h1>"A Jack Of All Trades is a master of none, But Is Oftenthough Better Than a Master of Only One."</h1>
    
    </div>
</div>

</body>
</html>