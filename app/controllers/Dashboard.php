<?php
session_start();
class Dashboard extends Controller
{
    public function index()
    {
        $this->view('dashboard');
        
    }
}