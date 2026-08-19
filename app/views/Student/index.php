<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Student Home | Peter Samuel Fabonan</title>
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
        letter-spacing: .02em;
    }
    nav a:hover { color: var(--accent); }
    .wrap {
        max-width: 640px;
        margin: 0 auto;
        padding: 80px 24px;
        text-align: center;
    }
    .eyebrow {
        text-transform: uppercase;
        letter-spacing: .12em;
        font-size: 12px;
        color: var(--muted);
        margin-bottom: 12px;
    }
    h1 {
        font-size: 34px;
        font-weight: 600;
        margin: 0 0 12px;
    }
    p.sub {
        color: var(--muted);
        font-size: 15px;
        margin: 0 0 36px;
    }
    .btn {
        display: inline-block;
        padding: 12px 28px;
        background: var(--ink);
        color: #fff;
        text-decoration: none;
        border-radius: 6px;
        font-size: 14px;
        letter-spacing: .02em;
    }
    .btn:hover { background: var(--accent); }
    .meta {
        margin-top: 60px;
        font-size: 13px;
        color: var(--muted);
        border-top: 1px solid var(--line);
        padding-top: 20px;
    }
</style>
</head>
<body>

<nav>
    <a href="<?php echo site_url('student'); ?>">Home</a>
    <a href="<?php echo site_url('student/profile'); ?>">Student Profile</a>
</nav>

<div class="wrap">
    <div class="eyebrow">Student info </div>
    <h1>Hi, my pangalan is <?php echo html_escape($student['name']); ?></h1>
    <p class="sub">
        <?php echo html_escape($student['course']); ?> &middot;
        <?php echo html_escape($student['year']); ?> &middot;
        Section <?php echo html_escape($student['section']); ?>
    </p>

    <a class="btn" href="<?php echo site_url('student/profile'); ?>">View Full Profile</a>

    <div class="meta">
       
    </div>
</div>

</body>
</html>