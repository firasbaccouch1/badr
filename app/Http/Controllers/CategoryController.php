<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    public function index($category){
        if(!isset(CateogryBlogs()[$category])){
            return route('home');
        }
        $content = '    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="title" content="Tiraz Clinic - Hair Transplant, Plastic Surgery, and Cosmetic Dentistry in Istanbul">
        <meta name="description" content="Tiraz Clinic, established in 2013 in Istanbul, Turkey, is renowned for its expertise in Hair Transplant, Plastic Surgery, and Cosmetic Dentistry. We serve patients globally, especially from Europe, North Africa, and the Middle East, offering high-quality healthcare services, luxury accommodation, and seamless airport-city transfers.">
        <meta name="keywords" content="Tiraz Clinic, Hair Transplant, Plastic Surgery, Cosmetic Dentistry, Istanbul, Turkey, Dental Aesthetics, Facial Plastic Surgery, Obesity Surgery, Medical Tourism">
        <meta name="robots" content="index, follow">
        <meta name="author" content="Tiraz Clinic">
        <meta name="language" content="English">
        <meta property="og:title" content="Tiraz Clinic - Hair Transplant, Plastic Surgery, and Cosmetic Dentistry in Istanbul">
        <meta property="og:description" content="Tiraz Clinic, established in 2013 in Istanbul, Turkey, is renowned for its expertise in Hair Transplant, Plastic Surgery, and Cosmetic Dentistry. We serve patients globally, especially from Europe, North Africa, and the Middle East, offering high-quality healthcare services, luxury accommodation, and seamless airport-city transfers.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://www.tirazclinic.com">
        <meta property="og:image" content="https://www.tirazclinic.com/images/clinic.jpg">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Tiraz Clinic - Hair Transplant, Plastic Surgery, and Cosmetic Dentistry in Istanbul">
        <meta name="twitter:description" content="Tiraz Clinic, established in 2013 in Istanbul, Turkey, is renowned for its expertise in Hair Transplant, Plastic Surgery, and Cosmetic Dentistry. We serve patients globally, especially from Europe, North Africa, and the Middle East, offering high-quality healthcare services, luxury accommodation, and seamless airport-city transfers.">
        <meta name="twitter:image" content="https://www.tirazclinic.com/images/clinic.jpg">
        <link rel="alternate" href="https://www.tirazclinic.com" hreflang="en" />
        <link rel="alternate" href="https://www.tirazclinic.com/ar" hreflang="ar" />
        <title>Tiraz Clinic - Hair Transplant, Plastic Surgery, and Cosmetic Dentistry in Istanbul</title>';
        $data = CateogryBlogs()[$category];
        $content = "";
        return view('blog',compact('data','content'));

    }
}
