<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 */
 show_admin_bar( false );
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php
    wp_head();
    $current_url = '/'.add_query_arg(array(),$wp->request);
     ?>

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/styles.css">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v=RyoOggEQaM">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?v=RyoOggEQaM">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?v=RyoOggEQaM">
    <link rel="manifest" href="/manifest.json?v=RyoOggEQaM">
    <link rel="mask-icon" href="/safari-pinned-tab.svg?v=RyoOggEQaM" color="#5bbad5">
    <link rel="shortcut icon" href="/favicon.ico?v=RyoOggEQaM">
    <meta name="theme-color" content="#ffffff">
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="grid-container">
            <div class="grid-inner">
                <div id="logo">
                    <svg width="101px" height="76px" viewBox="0 0 101 76" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="home" transform="translate(-77.000000, -26.000000)" fill="#020303">
                                <g id="logo" transform="translate(77.000000, 26.000000)">
                                    <g id="monogram">
                                        <path d="M38.879082,9.40613026 C38.7703887,9.2987559 38.7703887,9.10583282 38.879082,8.99845846 L39.3150391,8.56837641 C39.4237324,8.45963795 39.6194199,8.45963795 39.7281133,8.56720718 L46.936002,15.6874328 C47.0458789,15.7959764 47.0454844,15.9890944 46.936791,16.0972482 L46.5010313,16.5273303 C46.3919434,16.6350944 46.1968477,16.6350944 46.0869707,16.5265508 L38.879082,9.40613026 Z" id="Fill-1"></path>
                                        <path d="M53.6324006,16.1999067 C54.4715686,17.0288913 55.5377893,16.8993015 56.3000236,16.1469015 C57.0843518,15.3718964 57.1391916,14.39364 56.3000236,13.5646554 L54.5252248,11.811199 L51.8574045,14.4466451 L53.6324006,16.1999067 Z M50.3435881,19.8149733 C51.138174,20.5985528 52.3148635,20.5786759 53.0985998,19.8038656 C53.8720783,19.0403579 53.7298498,17.7814862 52.8808186,16.9423682 L51.0849123,15.1684503 L48.3626467,17.8578759 L50.3435881,19.8149733 Z M54.2529982,10.4673631 C54.3614943,10.359599 54.546135,10.3484913 54.6674533,10.4681426 L57.0512111,12.8229733 C58.3794006,14.13524 58.4233908,15.8775887 57.2800393,17.0078451 C56.4414631,17.8356605 55.276215,17.8888605 54.4709768,17.6737221 C54.8081037,18.480881 55.0049748,19.7292297 54.0028654,20.7189836 C52.7837639,21.9238759 50.9312424,21.8363785 49.5265139,20.4486964 L47.0451096,17.997599 C46.9239885,17.8777528 46.9356271,17.6951579 47.044715,17.5877836 L54.2529982,10.4673631 Z" id="Fill-3"></path>
                                        <path d="M62.10634,12.1528872 C62.2150334,12.2604564 62.2146389,12.4533795 62.1059455,12.5619231 L61.6701857,12.9920051 C61.5614924,13.0995744 61.3660021,13.0995744 61.2573088,12.9920051 L54.0494201,5.87177949 C53.9403322,5.76401538 53.9395432,5.57011795 54.0482365,5.46274359 L54.4839963,5.03266154 C54.5932814,4.92411795 54.7899553,4.92528718 54.8984514,5.03266154 L62.10634,12.1528872 Z" id="Fill-5"></path>
                                        <path d="M50.6422088,1.74618769 C49.8468338,0.960659487 48.6705389,0.981900513 47.886408,1.75534667 C47.1135213,2.52021846 47.2557498,3.77792103 48.1045838,4.61664923 L49.9018709,6.39212615 L52.6231502,3.70328513 L50.6422088,1.74618769 Z M47.353199,5.35911077 C46.5152146,4.53149026 45.4472186,4.65991077 44.6853787,5.41250564 C43.9012479,6.1873159 43.8475916,7.16674154 44.6853787,7.99436205 L46.4601775,9.74801333 L49.1279979,7.11256718 L47.353199,5.35911077 Z M46.733785,11.0930185 C46.6243025,11.2003928 46.4392674,11.2118903 46.3193299,11.0930185 L43.9341912,8.73721333 C42.6060018,7.42475179 42.5618143,5.68162359 43.7049686,4.55253641 C44.5435447,3.72355179 45.7095818,3.67132615 46.5152146,3.88626974 C46.1780877,3.07969538 45.9814139,1.83154154 46.9829314,0.842177436 C48.2030193,-0.36252 50.0539627,-0.275996923 51.4586912,1.1105159 L53.9408846,3.56375692 C54.0612166,3.68223897 54.050367,3.86541846 53.9416736,3.97259795 L46.733785,11.0930185 Z" id="Fill-7"></path>
                                    </g>
                                    <g id="rest">
                                        <path d="M4.5989916,46.4470882 C5.84097598,46.4470882 6.59768691,45.5461959 6.59768691,44.3964523 C6.59768691,43.2268318 5.84097598,42.4220113 4.5989916,42.4220113 L1.9793041,42.4220113 L1.9793041,46.4470882 L4.5989916,46.4470882 Z M4.9094877,52.2741446 C6.09308145,52.2741446 7.0052377,51.3734472 7.0052377,50.1847292 C7.0052377,49.0151087 5.87924551,48.1722882 4.6179291,48.1722882 L1.96056387,48.1722882 L1.96056387,52.2741446 L4.9094877,52.2741446 Z M0.000138085938,40.9846369 C0.000138085938,40.7926882 0.155583398,40.6202267 0.368827539,40.6202267 L4.71498379,40.6202267 C7.06323379,40.6202267 8.75123574,42.1530882 8.75123574,44.1665036 C8.75123574,45.6424626 7.64497012,46.6963292 6.73340566,47.2133241 C7.76194863,47.6352215 9.15878652,48.5746985 9.15878652,50.3378985 C9.15878652,52.4846062 7.37313809,54.0371497 4.92881973,54.0371497 L0.368827539,54.0371497 C0.155583398,54.0371497 0.000138085938,53.8646882 0.000138085938,53.6729344 L0.000138085938,40.9846369 Z" id="Fill-9"></path>
                                        <path d="M17.888402,40.9845005 C17.888402,40.7929415 18.0434527,40.6200903 18.2572887,40.6200903 L26.0183102,40.6200903 C26.2311598,40.6200903 26.3871969,40.7929415 26.3871969,40.9845005 L26.3871969,42.0574646 C26.3871969,42.2492185 26.2311598,42.4218749 26.0183102,42.4218749 L19.8870973,42.4218749 L19.8870973,46.3315877 L25.0678844,46.3315877 C25.2615992,46.3315877 25.4363766,46.5042441 25.4363766,46.6965826 L25.4363766,47.7697415 C25.4363766,47.9802031 25.2615992,48.1337621 25.0678844,48.1337621 L19.8870973,48.1337621 L19.8870973,52.2549108 L26.0183102,52.2549108 C26.2311598,52.2549108 26.3871969,52.4275672 26.3871969,52.6189313 L26.3871969,53.6729928 C26.3871969,53.8649415 26.2311598,54.0374031 26.0183102,54.0374031 L18.2572887,54.0374031 C18.0434527,54.0374031 17.888402,53.8649415 17.888402,53.6729928 L17.888402,40.9845005 Z" id="Fill-11"></path>
                                        <path d="M41.0931322,40.4280441 C43.0527689,40.4280441 44.4691361,41.0796954 45.7882514,42.211121 C45.9630287,42.3644851 45.9630287,42.5944338 45.8079779,42.7474082 L44.9538178,43.6099108 C44.8186908,43.7825672 44.6439135,43.7825672 44.4691361,43.6099108 C43.5573744,42.8243826 42.31539,42.3257056 41.1120697,42.3257056 C38.337726,42.3257056 36.2421732,44.6259723 36.2421732,47.3093569 C36.2421732,49.9927415 38.357058,52.2743005 41.1317963,52.2743005 C42.5481635,52.2743005 43.5376479,51.7179415 44.4691361,51.0086082 C44.6439135,50.8749262 44.8186908,50.8938287 44.934683,50.9895108 L45.8269154,51.8524031 C45.9829525,51.9864749 45.9436967,52.235521 45.8079779,52.3695928 C44.4888627,53.6347005 42.8199955,54.2290595 41.0931322,54.2290595 C37.2123256,54.2290595 34.0884271,51.1812646 34.0884271,47.3481364 C34.0884271,43.5146185 37.2123256,40.4280441 41.0931322,40.4280441" id="Fill-13"></path>
                                        <path d="M54.4015195,41.0797538 C54.4015195,40.8307077 54.5956289,40.6206359 54.8674609,40.6206359 L55.9926641,40.6206359 C56.2451641,40.6206359 56.4582109,40.8307077 56.4582109,41.0797538 L56.4582109,46.3900103 L61.9297676,40.812 C62.0074902,40.7161231 62.1436035,40.6206359 62.2986543,40.6206359 L63.7536855,40.6206359 C64.1032402,40.6206359 64.2973496,41.0226564 64.0255176,41.3102872 L58.4180449,46.9457846 L64.3551484,53.4048103 C64.5103965,53.5961744 64.4131445,54.0373641 64.0059883,54.0373641 L62.4537051,54.0373641 C62.2595957,54.0373641 62.1436035,53.9605846 62.1045449,53.9032923 L56.4582109,47.6165333 L56.4582109,53.5774667 C56.4582109,53.8265128 56.2451641,54.0373641 55.9926641,54.0373641 L54.8674609,54.0373641 C54.5956289,54.0373641 54.4015195,53.8265128 54.4015195,53.5774667 L54.4015195,41.0797538 Z" id="Fill-15"></path>
                                        <path d="M72.4638506,40.9845005 C72.4638506,40.7929415 72.6189014,40.6200903 72.8327373,40.6200903 L80.5937588,40.6200903 C80.8066084,40.6200903 80.9626455,40.7929415 80.9626455,40.9845005 L80.9626455,42.0574646 C80.9626455,42.2492185 80.8066084,42.4218749 80.5937588,42.4218749 L74.4625459,42.4218749 L74.4625459,46.3315877 L79.643333,46.3315877 C79.8370479,46.3315877 80.0118252,46.5042441 80.0118252,46.6965826 L80.0118252,47.7697415 C80.0118252,47.9802031 79.8370479,48.1337621 79.643333,48.1337621 L74.4625459,48.1337621 L74.4625459,52.2549108 L80.5937588,52.2549108 C80.8066084,52.2549108 80.9626455,52.4275672 80.9626455,52.6189313 L80.9626455,53.6729928 C80.9626455,53.8649415 80.8066084,54.0374031 80.5937588,54.0374031 L72.8327373,54.0374031 C72.6189014,54.0374031 72.4638506,53.8649415 72.4638506,53.6729928 L72.4638506,40.9845005 Z" id="Fill-17"></path>
                                        <path d="M89.7119678,40.7731621 C89.7119678,40.5819928 89.8867451,40.428239 90.0808545,40.428239 L90.5657334,40.428239 L98.9864111,50.0504236 L99.0061377,50.0504236 L99.0061377,40.9844031 C99.0061377,40.7928441 99.1609912,40.6199928 99.3750244,40.6199928 L100.617009,40.6199928 C100.810724,40.6199928 100.984909,40.7928441 100.984909,40.9844031 L100.984909,53.8839415 C100.984909,54.07628 100.810724,54.2292544 100.617009,54.2292544 L100.112403,54.2292544 L91.6909365,44.3389262 L91.671999,44.3389262 L91.671999,53.6730903 C91.671999,53.8648441 91.5163564,54.0373056 91.302915,54.0373056 L90.0808545,54.0373056 C89.8867451,54.0373056 89.7119678,53.8648441 89.7119678,53.6730903 L89.7119678,40.7731621 Z" id="Fill-19"></path>
                                        <path d="M31.3427264,67.1547887 C31.3427264,67.0271477 31.4595076,66.9117836 31.5889139,66.9117836 L32.4424822,66.9117836 C32.5716912,66.9117836 32.6886697,67.0271477 32.6886697,67.1547887 L32.6886697,75.6159272 C32.6886697,75.7439579 32.5716912,75.8589323 32.4424822,75.8589323 L31.5889139,75.8589323 C31.4595076,75.8589323 31.3427264,75.7439579 31.3427264,75.6159272 L31.3427264,67.1547887 Z" id="Fill-21"></path>
                                        <path d="M39.0772156,67.0139549 C39.0772156,66.8863138 39.1939969,66.7840062 39.3234031,66.7840062 L39.6467215,66.7840062 L45.2616902,73.2005497 L45.2747098,73.2005497 L45.2747098,67.1548472 C45.2747098,67.0272062 45.378077,66.9118421 45.5207,66.9118421 L46.3486238,66.9118421 C46.4780301,66.9118421 46.5946141,67.0272062 46.5946141,67.1548472 L46.5946141,75.7568779 C46.5946141,75.884519 46.4780301,75.9866318 46.3486238,75.9866318 L46.0118914,75.9866318 L40.3973172,69.3913908 L40.3841004,69.3913908 L40.3841004,75.6159856 C40.3841004,75.7440164 40.2805359,75.8589908 40.1379129,75.8589908 L39.3234031,75.8589908 C39.1939969,75.8589908 39.0772156,75.7440164 39.0772156,75.6159856 L39.0772156,67.0139549 Z" id="Fill-23"></path>
                                        <path d="M52.9815621,67.1547887 C52.9815621,67.0271477 53.0849293,66.9117836 53.2277496,66.9117836 L58.402816,66.9117836 C58.5454391,66.9117836 58.648609,67.0271477 58.648609,67.1547887 L58.648609,67.8705528 C58.648609,67.9983887 58.5454391,68.1137528 58.402816,68.1137528 L54.3140914,68.1137528 L54.3140914,70.7211374 L57.7690016,70.7211374 C57.8982105,70.7211374 58.0151891,70.8357221 58.0151891,70.9639477 L58.0151891,71.6793221 C58.0151891,71.8202144 57.8982105,71.9221323 57.7690016,71.9221323 L54.3140914,71.9221323 L54.3140914,74.6702144 L58.402816,74.6702144 C58.5454391,74.6702144 58.648609,74.7857733 58.648609,74.9132195 L58.648609,75.6159272 C58.648609,75.7439579 58.5454391,75.8589323 58.402816,75.8589323 L53.2277496,75.8589323 C53.0849293,75.8589323 52.9815621,75.7439579 52.9815621,75.6159272 L52.9815621,67.1547887 Z" id="Fill-25"></path>
                                        <path d="M63.8978275,74.5680041 C64.0136225,74.4017785 64.1181732,74.2100246 64.2341654,74.0441887 C64.3503549,73.8777682 64.531642,73.8265169 64.674265,73.9420759 C64.7515932,74.0056041 65.7481791,74.823481 66.7441732,74.823481 C67.6369975,74.823481 68.2065033,74.2873887 68.2065033,73.6347631 C68.2065033,72.8681374 67.533433,72.3829067 66.2527846,71.8585067 C64.9328803,71.3087733 63.8978275,70.6312041 63.8978275,69.1484246 C63.8978275,68.1514605 64.674265,66.78424 66.731351,66.78424 C68.0248217,66.78424 68.9953686,67.4489477 69.1245775,67.5380041 C69.228142,67.6019221 69.3315092,67.7812041 69.2023002,67.9727631 C69.098933,68.1261272 68.9819545,68.3050195 68.8789818,68.4581887 C68.7754174,68.6244144 68.6075443,68.7013887 68.4258627,68.5864144 C68.3357123,68.5353579 67.4300658,67.9474297 66.6798646,67.9474297 C65.5923393,67.9474297 65.2169428,68.6244144 65.2169428,69.0975631 C65.2169428,69.8263836 65.7864486,70.2736144 66.86056,70.7079836 C68.3613568,71.3087733 69.6425971,72.0120656 69.6425971,73.5712349 C69.6425971,74.9002605 68.4390795,75.9866708 66.7569955,75.9866708 C65.1788705,75.9866708 64.1820873,75.1687938 63.9755502,74.9766503 C63.8587689,74.8747323 63.7686186,74.7856759 63.8978275,74.5680041" id="Fill-27"></path>
                                    </g>


                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <div id="menu">
                    <?php
                    wp_nav_menu( array('theme_location'=>'main-nav','depth' => 1) );
                    ?>
                </div>
            </div>
        </div>

    </header>