<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use DB;

class HomeController extends Controller
{

    public function index()
    {
        $title = "Geoparcel Surveys Limited - Human Resource Consultancy";
        $url = url('/');
        $page = "home";
        $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
        Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
        return view('front.index',compact('title','url','page','keywords'));
    }

    public function contact()
    {
        $title = "Contact Us - Geoparcel Surveys Limited";
        $url = url('/the-company');
        $page = "contact";
        $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
        Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
        return view('front.contact',compact('title','url','page','keywords'));
    }

    public function company()
    {
        $title = "The Company - Geoparcel Surveys Limited";
        $url = url('/');
        $page = "company";
        $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
        Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
        return view('front.company',compact('title','url','page','keywords'));
    }

    public function services($slung)
    {
        $Services = DB::table('services')->where('slung', $slung)->get();
        foreach ($Services as $key => $value) {
            $title = "$value->title - Geoparcel Surveys Limited";
            $url = url('/the-company');
            $page = "service";
            $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
            Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
            return view('front.services',compact('title','url','page','keywords','Services'));
        }
    }

    public function product($slung)
    {
        $Services = DB::table('products')->where('slung', $slung)->get();
        foreach ($Services as $key => $value) {
            $title = "$value->title - Geoparcel Surveys Limited";
            $url = url('/products');
            $page = "service";
            $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
            Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
            return view('front.products',compact('title','url','page','keywords','Services'));
        }
    }

    public function sector()
    {
        $title = "Sectors - Geoparcel Surveys Limited";
        $url = url('/the-company');
        $page = "sector";
        $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
        Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
        return view('front.sector',compact('title','url','page','keywords'));
    }

    public function portfolio()
    {
        $title = "Portfolio - Geoparcel Surveys Limited";
        $url = url('/portfolio');
        $page = "portfolio";
        $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
        Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
        return view('front.portfolio',compact('title','url','page','keywords'));
    }





    public function copyright()
    {
        $title = "Copyrigh Statement - Geoparcel Surveys Limited";
        $url = url('/the-company');
        $page = "services";
        $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
        Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
        return view('front.copyright',compact('title','url','page','keywords'));
    }

    public function terms()
    {
        $title = "Terms and Conditions - Geoparcel Surveys Limited";
        $url = url('/the-company');
        $page = "services";
        $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
        Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
        return view('front.terms',compact('title','url','page','keywords'));
    }

    public function policy()
    {
        $title = "Privacy Policy - Geoparcel Surveys Limited";
        $url = url('/the-company');
        $page = "services";
        $keywords = "Human Resource Solutions, Recruitment, Outsourcing, Selection and Placement,
        Job Evaluations, Analysis, Grading and Benchmarking, Employee Selection & Placement , Training";
        return view('front.policy',compact('title','url','page','keywords'));
    }

}
