<?php
namespace App\Controllers;
use App\Models\TaskModel;
use App\Models\UserModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $taskModel = new TaskModel();
        $data['tasks'] = $taskModel->getTodaysTasks();
        return view('welcome', $data);
    }

    public function tasks()
    {
        $taskModel = new TaskModel();
        $data['tasks'] = $taskModel->getAllTasksOrdered();
        return view('task_list', $data);
    }

    public function profile()
    {
        $userModel = new UserModel();
        $data['user'] = $userModel->first();
        return view('profile', $data);
    }

    public function about()
    {
        return view('about');
    }
}