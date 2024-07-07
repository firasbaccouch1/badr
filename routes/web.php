<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Lang;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SendEmail;
use Illuminate\Support\Facades\Artisan;
Route::get('/', function () {
    $content =   App::isLocale('en') ? '<meta charset="UTF-8">
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
    <title>Tiraz Clinic - Hair Transplant, Plastic Surgery, and Cosmetic Dentistry in Istanbul</title>'
    :
    '<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="عيادة تيراز - زراعة الشعر، جراحة التجميل، وطب الأسنان التجميلي في اسطنبول">
    <meta name="description" content="تم تأسيس عيادة تيراز في عام 2013 في اسطنبول، تركيا، وقد اكتسبت شهرة واسعة في زراعة الشعر، جراحة التجميل، وطب الأسنان التجميلي. نستقبل المرضى من جميع أنحاء العالم، خاصة من أوروبا، شمال إفريقيا، والشرق الأوسط، حيث نقدم لهم خدمات صحية دقيقة وموثوقة مخصصة لراحتهم ورغباتهم. بالإضافة إلى خدماتنا الرائدة في زراعة الشعر، علاج الأسنان، وجراحة التجميل، تضمن عيادة تيراز تجربة سلسة من خلال توفير إقامة استثنائية في فنادق فاخرة وتنسيق جميع النقل من المطار إلى المدينة للمرضى الدوليين.">
    <meta name="keywords" content="عيادة تيراز، زراعة الشعر، جراحة التجميل، طب الأسنان التجميلي، اسطنبول، تركيا، جمالية الأسنان، جراحة تجميل الوجه، جراحة السمنة، السياحة الطبية">
    <meta name="robots" content="index, follow">
    <meta name="author" content="عيادة تيراز">
    <meta name="language" content="Arabic">
    <meta property="og:title" content="عيادة تيراز - زراعة الشعر، جراحة التجميل، وطب الأسنان التجميلي في اسطنبول">
    <meta property="og:description" content="تم تأسيس عيادة تيراز في عام 2013 في اسطنبول، تركيا، وقد اكتسبت شهرة واسعة في زراعة الشعر، جراحة التجميل، وطب الأسنان التجميلي. نستقبل المرضى من جميع أنحاء العالم، خاصة من أوروبا، شمال إفريقيا، والشرق الأوسط، حيث نقدم لهم خدمات صحية دقيقة وموثوقة مخصصة لراحتهم ورغباتهم. بالإضافة إلى خدماتنا الرائدة في زراعة الشعر، علاج الأسنان، وجراحة التجميل، تضمن عيادة تيراز تجربة سلسة من خلال توفير إقامة استثنائية في فنادق فاخرة وتنسيق جميع النقل من المطار إلى المدينة للمرضى الدوليين.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.tirazclinic.com/ar">
    <meta property="og:image" content="https://www.tirazclinic.com/images/clinic.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="عيادة تيراز - زراعة الشعر، جراحة التجميل، وطب الأسنان التجميلي في اسطنبول">
    <meta name="twitter:description" content="تم تأسيس عيادة تيراز في عام 2013 في اسطنبول، تركيا، وقد اكتسبت شهرة واسعة في زراعة الشعر، جراحة التجميل، وطب الأسنان التجميلي. نستقبل المرضى من جميع أنحاء العالم، خاصة من أوروبا، شمال إفريقيا، والشرق الأوسط، حيث نقدم لهم خدمات صحية دقيقة وموثوقة مخصصة لراحتهم ورغباتهم. بالإضافة إلى خدماتنا الرائدة في زراعة الشعر، علاج الأسنان، وجراحة التجميل، تضمن عيادة تيراز تجربة سلسة من خلال توفير إقامة استثنائية في فنادق فاخرة وتنسيق جميع النقل من المطار إلى المدينة للمرضى الدوليين.">
    <meta name="twitter:image" content="https://www.tirazclinic.com/images/clinic.jpg">
    <link rel="alternate" href="https://www.tirazclinic.com" hreflang="en" />
    <link rel="alternate" href="https://www.tirazclinic.com/ar" hreflang="ar" />
    <title>عيادة تيراز - زراعة الشعر، جراحة التجميل، وطب الأسنان التجميلي في اسطنبول</title>';
    return view('welcome',compact('content'));
})->name('home')->middleware(Lang::class);


Route::get('/blog/{category}',[CategoryController::class,'index'])->name('blog')->middleware(Lang::class);
Route::post('ContantUs',[SendEmail::class,'ContactUs'])->name('ContantUs');
Route::post('Appointment',[SendEmail::class,'Appointment'])->name('Appointment');

Route::get('/changeAr', function () {
    session(['my_locale' => 'ar']);
    Artisan::call('optimize:clear');
    return redirect()->back();
})->name('changeAr');

Route::get('/changeEn', function () {
    session(['my_locale' => 'en']);
    Artisan::call('optimize:clear');
    return redirect()->back();
})->name('changeEn');
