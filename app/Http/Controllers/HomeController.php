<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;

class HomeController extends Controller
{

    public function index()
    {
        $title = "Geoparcel Surveyors Limited - Human Resource Consultancy";
        $url = url('/');
        $page = "home";
        $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
        Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
        return view('front.index',compact('title','url','page','keywords'));
    }

    public function contact()
    {
        $title = "Contact Us - Geoparcel Surveyors Limited";
        $url = url('/the-company');
        $page = "contact";
        $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
        Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
        return view('front.contact',compact('title','url','page','keywords'));
    }

    public function company()
    {
        $title = "The Company - Geoparcel Surveyors Limited";
        $url = url('/');
        $page = "company";
        $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
        Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
        return view('front.company',compact('title','url','page','keywords'));
    }

    public function services()
    {
        $title = "Services - Geoparcel Surveyors Limited";
        $url = url('/the-company');
        $page = "service";
        $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
        Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
        return view('front.services',compact('title','url','page','keywords'));
    }

    public function sector()
    {
        $title = "Sectors - Geoparcel Surveyors Limited";
        $url = url('/the-company');
        $page = "sector";
        $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
        Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
        return view('front.sector',compact('title','url','page','keywords'));
    }



    public function copyright()
    {
        $title = "Copyrigh Statement - Geoparcel Surveyors Limited";
        $url = url('/the-company');
        $page = "services";
        $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
        Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
        return view('front.copyright',compact('title','url','page','keywords'));
    }

    public function terms()
    {
        $title = "Terms and Conditions - Geoparcel Surveyors Limited";
        $url = url('/the-company');
        $page = "services";
        $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
        Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
        return view('front.terms',compact('title','url','page','keywords'));
    }

    public function policy()
    {
        $title = "Privacy Policy - Geoparcel Surveyors Limited";
        $url = url('/the-company');
        $page = "services";
        $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
        Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
        return view('front.policy',compact('title','url','page','keywords'));
    }

}
