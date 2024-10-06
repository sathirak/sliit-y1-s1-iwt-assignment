<?php
// Auth object used to map user types with their relevant tables and such
$auth_info = [
    "user" => ["table" => "user", "id_field" => "user_id", "redirect" => "../user", "button" => "Dashboard"],
    "admin" => ["table" => "admin", "id_field" => "admin_id", "redirect" => "../admin", "button" => "Administrator"],
    "support" => ["table" => "contact_support_agent", "id_field" => "agent_id", "redirect" => "../support", "button" => "Support"],
    "reviewer" => ["table" => "course_reviewer", "id_field" => "reviewer_id", "redirect" => "../reviewer", "button" => "Reviewer"],
    "publisher" => ["table" => "course_publisher", "id_field" => "publisher_id", "redirect" => "../publisher", "button" => "Publisher"]
];
