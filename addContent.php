<?php 
require_once 'Menu.php';
// $url = 'https://syoobe.co.id';
// $data = Menu($url);
// $first_step = explode('<header class="header slide">', $data);
// $second_step = explode('</header>', $first_step[1]);
// $sitemap1_step1 = explode('<div id="top" class="clearfix">', $second_step[0]);
// $sitemap1_step2 = explode('</div>', $sitemap1_step1[1]);
// var_dump($sitemap1_step2); die;
// echo $sitemap1_step2[0];



// $menu = explode('<ul class="nav">', $second_step[26]);
// $menuItem = explode('</ul>', $menu[1]);

// $first_step = explode('<div class="main-nav-bar slide">', $header);
// $second_step = explode('</div>', $first_step[0]);

// $menu = explode('<ul class="nav">', $second_step[26]);
// $menuItem = explode('</ul>', $menu[1]);
// var_dump($fcell2_step2); die;

// echo $second_step[26];

// echo $second_step[27];

// echo $second_step[28];

// echo $second_step[29];

// echo $second_step[30];




// echo $second_step[26];
// echo "<br/>";
// echo $second_step[27];

// $header = file_get_contents('https://syoobe.co.id');
// $fcell1_step1 = explode('<div class="f-cell cl-effect-21 ">', $header);
// $fcell2_step2 = explode('</div>', $fcell1_step1[1]);
// echo $fcell2_step2[0];

?>

<?php 
require_once 'getContents.php';
$url = 'https://syoobe.co.id';

$arrHeader = [
    '<header class="header slide">',
    '</header>',
    '<div class="mainhead">',
    '</div>',
    '<div class="top-head">',
    '</div>',
    '<div id="logo">',
    '</div>',
    '<div class="mobile-element">',
    '</div>',
    '<div class="main-nav-bar slide">',
    '</div>',
    '<div class="content slide">',
    '</div>'
];

// <a class="btn primary-btn" href="/account/dashboard_buyer">Dashboard</a> <span class="or"></span> <a class="btn secondary-btn" href="/account/logout">KELUAR</a> 
//html(`<a class='btn primary-btn' href='https://www.syoobe.co.id/account/dashboard_buyer'>Dashboard</a>`);
            
// $dataHeader1 = new scrapping();
// $dataHeader1->setContentsHeader($url, $arrHeader);
// $dataHeader1->getContentsHeader();

// $dataMenu1 = new scrapping();
// $dataMenu1->setContentsHeader($url, $arrHeader);
// $dataMenu1->getContentsHeader(0, 0);

// $dataHeader2 = new scrapping();
// $dataHeader2->setContentsHeader($url, $arrHeader);
// $dataHeader2->getContentsHeader(0, 1);

// $dataHeader3 = new scrapping();
// $dataHeader3->setContentsHeader($url, $arrHeader);
// $dataHeader3->getContentsHeader(1, '');

$dataSlider1 = new scrapping();
$dataSlider1->setContentsHeader($url, $arrHeader);
$dataSlider1->getContentsHeader(1, 1);


// $dataHeader3 = new scrapping();
// $dataHeader3->setContentsHeader($urlHeader, $arrHeader);
// $dataHeader3->getContentsHeader(1, '');


// $dataSlider = new scrapping();
// $dataSlider->setdomImage($urlHeader, $arrHeader);
// $dataSlider->getdomImage('slider');

$arrAds = [
    '<div class="section display-hidden-onmobile">',
    '</div>',
];

$data3 = new scrapping();
$data3->setAdsImage($url);
$data3->getAdsImage();



$urlFooter = 'https://syoobe.co.id';
$arrFooter = [
    '<footer class="footer slide clearfix">',
    '</footer>',
    '<div class="f-cell cl-effect-21 ">',
    '</div>'
];
$data4 = new scrapping();
$data4->setContents($urlFooter, $arrFooter);
$data4->getContents();

// $urlHeader = 'https://syoobe.co.id';
// $arrHeader = [
//         '<header class="header slide">',
//         '</header>',
//         '<div class="mainhead">',
//         '</div>',
//         '<div class="top-head">',
//         '</div>',
//         '<div id="logo">',
//         '</div>',
//         '<div class="mobile-element">',
//         '</div>',
//         '<div class="main-nav-bar slide">',
//         '</div>'
// ];

// $dataMenu1 = new scrapping();
// $dataMenu1->setContentsHeader($urlMenu, $arrMenu);
// $dataMenu1->getContentsHeader(0, 0);

// $dataHeader1 = new scrapping();
// $dataHeader1->setContentsHeader($urlHeader, $arrHeader);
// $dataHeader1->getContentsHeader(0, 0);

// $dataHeader2 = new scrapping();
// $dataHeader2->setContentsHeader($urlHeader, $arrHeader);
// $dataHeader2->getContentsHeader(0, 1);

// $dataHeader3 = new scrapping();
// $dataHeader3->setContentsHeader($urlHeader, $arrHeader);
// $dataHeader3->getContentsHeader(1, '');

// $dataHeader2 = new scrapping();
// $dataHeader2->setContentsHeader($urlHeader, $arrHeader);
// $dataHeader2->getContentsHeader('');

// $dataLogo = new scrapping();
// $dataLogo->setdomImage($url);
// $dataLogo->getdomImage('slider');

// $dataSlider = new scrapping();
// $dataSlider->setdomImage($urlHeader, $arrHeader);
// $dataSlider->getdomImage('slider');

// $dataSocial = new scrapping();
// $dataSocial->setdomImage($urlHeader, $arrHeader);
// $dataSocial->getdomImage('social');

// $dataSocial = new scrapping();
// $dataSocial->setdomImage($urlHeader, $arrHeader);
// $dataSocial->getdomImage('logo-footer');


// $dataMenu2 = new scrapping();
// $dataMenu2->setContentsHeader($urlHeader, $arrHeader);
// $dataMenu2->getContentsHeader(1);

// $dataMenu3 = new scrapping();
// $dataMenu3->setContentsHeader($urlHeader, $arrHeader);
// $dataMenu3->getContentsHeader(1,1);

// $url = 'https://syoobe.co.id';
// $arrMenu = [
//     '<div class="mainhead">',
//     '</div>',
//     '<div class="main-nav-bar slide">',
//     '</div>',
//     '<ul class="nav">',
//     '</ul>',
//     '<div class="content slide">',
//     '</div>'
// ];

// $arrSlide= [
//     '<div class="mainhead">',
//     '</div>',
//     '<div class="content slide">',
//     '</div>'
// ];

// $dataSlide = new scrapping();
// $dataSlide->setSlide($url, $arrSlide);
// $dataSlide->getSlide(0, 0);

// $dataMenu1 = new scrapping();
// $dataMenu1->setMenuSyoobe($url, $arrMenu);
// $dataMenu1->getMenuSyoobe(0, 0);

// $dataMenu2 = new scrapping();
// $dataMenu2->setContentsHeader($urlMenu, $arrMenu);
// $dataMenu2->getContentsHeader(0, 1);
// $data2 = new Scrapping();
// $data2->setContents($url, $arr);
// $data2->getContents(2);

// $data3 = new Scrapping();
// $data3->setContents($url, $arr);
// $data3->getContents(0,3);

// $data4 = new Scrapping();
// $data4->setContents($url, $arr);
// $data4->getContents(0,4);

// $data4 = new Scrapping();
// $data4->setContents($url, $arr);
// $data4->getContents(9,4);


