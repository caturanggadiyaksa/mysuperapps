<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ProfileController extends Controller
{
    //
    public function index(): View
    {
        
 
        return View('profile');
    }

    public function about(): View
    {
        
 
        return View('aboutme');
    }

    public function services(): View
    {
        
 
        return View('services');
    }

    public function services_details(): View
    {
        
 
        return View('servicesdetail');
    }


    public function portfolio(): View
    {
        
 
        return View('portfolio');
    }


    public function portfolio_details(): View
    {
        
 
        return View('portfoliodetails');
    }


    public function blog(): View
    {
        
 
        return View('blog');
    }



    public function blog_details(): View
    {
        
 
        return View('blogdetails');
    }


    public function contact(): View
    {
        
 
        return View('contact');
    }
}
