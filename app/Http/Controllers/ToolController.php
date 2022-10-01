<?php

namespace App\Http\Controllers;


use Illuminate\Http\Response;

class ToolController extends Controller
{
    public function index()
    {
        return [
            "id" => 1,
            "title" => "Notion",
            "link" => "https://.notion.so",
            "description" => "All in one tool to organize teams and ideas. Write, plan, collaborate, and get organized. ",
            "tags" => [
                "organization",
                "planning",
                "collaboration",
                "writing",
                "calendar"
            ]
        ];
    }
}
