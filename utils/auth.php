<?php
session_start();
$auth_info = [
    "user" => ["table" => "users", "id_field" => "user_id", "redirect" => "../user", "button" => "Dashboard"],
    "admin" => ["table" => "admin", "id_field" => "admin_id", "redirect" => "../admin", "button" => "Administrator"],
    "support" => ["table" => "support", "id_field" => "agent_id", "redirect" => "../support", "button" => "Support"],
    "reviewer" => ["table" => "course_reviewer", "id_field" => "reviewer_id", "redirect" => "../reviewer", "button" => "Reviewer"],
    "publisher" => ["table" => "course_publisher", "id_field" => "publisher_id", "redirect" => "../publisher", "button" => "Publisher"]
];
