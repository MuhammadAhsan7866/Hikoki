@extends('layouts.vertical', ['title' => 'Order Checkout'])

@section('css')
@vite(['node_modules/choices.js/public/assets/styles/choices.min.css'])
@endsection 

@section('content')

<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3">
                        <h4 class="card-title">Personal Details</h4>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-6">
                                <form>
                                    <div class="mb-3">
                                        <label for="first-name" class="form-label">First Name</label>
                                        <input type="text" id="first-name" class="form-control" placeholder="First name">
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-6">
                                <form>
                                    <div class="mb-3">
                                        <label for="last-name" class="form-label">Last Name</label>
                                        <input type="text" id="last-name" class="form-control" placeholder="Last name">
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-6">
                                <form>
                                    <div class="mb-3">
                                        <label for="your-email" class="form-label">Your Email</label>
                                        <input type="email" id="your-email" class="form-control" placeholder="Email">
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-6">
                                <form>
                                    <div class="mb-3">
                                        <label for="your-number" class="form-label">Phone number</label>
                                        <input type="number" id="your-number" name="your-number" class="form-control" placeholder="Number">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <div class="row">
                        <div class="col-lg-3">
                            <h4 class="card-title">Shipping Details</h4>
                        </div>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5 class="mb-4">Shipping Address :</h5>
                                    <form>
                                        <div class="mb-3">
                                            <label for="your-address" class="form-label">Full Address</label>
                                            <textarea class="form-control" id="your-address" rows="3" placeholder="Enter address"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-4">
                                    <form>
                                        <div class="mb-3">
                                            <label for="your-zipcode" class="form-label">Zip-Code</label>
                                            <input type="number" id="your-zipcode" class="form-control" placeholder="zip-code">
                                        </div>
                                    </form>
                                </div>

                                <div class="col-lg-4">
                                    <form>
                                        <label for="choices-city" class="form-label">City</label>
                                        <select class="form-control" id="choices-city" data-choices data-choices-groups data-placeholder="Select City" name="choices-city">
                                            <option value="">Choose a city</option>
                                            <optgroup label="UK">
                                                <option value="London">London</option>
                                                <option value="Manchester">Manchester</option>
                                                <option value="Liverpool">Liverpool</option>
                                            </optgroup>
                                            <optgroup label="FR">
                                                <option value="Paris">Paris</option>
                                                <option value="Lyon">Lyon</option>
                                                <option value="Marseille">Marseille</option>
                                            </optgroup>
                                            <optgroup label="DE" disabled>
                                                <option value="Hamburg">Hamburg</option>
                                                <option value="Munich">Munich</option>
                                                <option value="Berlin">Berlin</option>
                                            </optgroup>
                                            <optgroup label="US">
                                                <option value="New York">New York</option>
                                                <option value="Washington" disabled>
                                                    Washington
                                                </option>
                                                <option value="Michigan">Michigan</option>
                                            </optgroup>
                                            <optgroup label="SP">
                                                <option value="Madrid">Madrid</option>
                                                <option value="Barcelona">Barcelona</option>
                                                <option value="Malaga">Malaga</option>
                                            </optgroup>
                                            <optgroup label="CA">
                                                <option value="Montreal">Montreal</option>
                                                <option value="Toronto">Toronto</option>
                                                <option value="Vancouver">Vancouver</option>
                                            </optgroup>
                                        </select>
                                    </form>
                                </div>
                                <div class="col-lg-4">
                                    <form>
                                        <label for="choices-country" class="form-label">Country</label>
                                        <select class="form-control" id="choices-country" data-choices data-choices-groups data-placeholder="Select Country" name="choices-country">
                                            <option value="">Choose a country</option>
                                            <optgroup label="">
                                                <option value="">United Kingdom</option>
                                                <option value="Fran">France</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="U.S.A">U.S.A</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Australia">Australia</option>
                                                <option value="India">India</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Spain">Spain</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                            </optgroup>
                                        </select>
                                    </form>
                                </div>
                            </div>
                            <div class="mt-2">
                                <a href="#!" class="link-primary fw-medium">+ Add New Billing Address</a>
                            </div>

                            <h5 class="my-4">Shipping Method :</h5>
                            <div class="row gy-2">
                                <div class="col-lg-6">
                                    <div class="form-check form-checkbox-primary ps-0">
                                        <label for="shipping-1" class="w-100 mb-2">
                                            <div class="d-flex align-items-center p-2 rounded gap-2 border">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="rounded-3 bg-light avatar-md d-flex align-items-center justify-content-center">
                                                        <img src="/images/brands/dhl.png" alt="" class="avatar rounded">
                                                    </div>
                                                    <div>
                                                        <h5 class="text-dark fw-medium">
                                                            DHL Fast Services
                                                        </h5>
                                                        <p class="mb-0 text-dark">
                                                            Delivery -
                                                            <span class="text-muted fw-normal">Today</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="ms-auto">
                                                    <p class="mb-2">$10.00</p>
                                                    <input class="form-check-input float-end" type="radio" name="shipping" id="shipping-1">
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-check form-checkbox-primary ps-0">
                                        <label for="shipping-2" class="w-100">
                                            <div class="d-flex align-items-center p-2 rounded gap-2 border">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="rounded-3 bg-light avatar-md d-flex align-items-center justify-content-center">
                                                        <img src="/images/brands/fedex.png" alt="" class="avatar rounded">
                                                    </div>
                                                    <div>
                                                        <h5 class="text-dark fw-medium">
                                                            FedEx Services
                                                        </h5>
                                                        <p class="mb-0 text-dark">
                                                            Delivery -
                                                            <span class="text-muted fw-normal">Today</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="ms-auto">
                                                    <p class="mb-2">$10.00</p>
                                                    <input class="form-check-input float-end" type="radio" name="shipping" id="shipping-2">
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-check form-checkbox-primary ps-0">
                                        <label for="shipping-3" class="w-100">
                                            <div class="d-flex align-items-center p-2 rounded gap-2 border">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="rounded-3 bg-light avatar-md d-flex align-items-center justify-content-center">
                                                        <img src="/images/brands/ups.png" alt="" class="avatar rounded">
                                                    </div>
                                                    <div>
                                                        <h5 class="text-dark fw-medium">
                                                            UPS Services
                                                        </h5>
                                                        <p class="mb-0 text-dark">
                                                            Delivery -
                                                            <span class="text-muted fw-normal">Tomorrow</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="ms-auto">
                                                    <p class="mb-2">$8.00</p>
                                                    <input class="form-check-input float-end" type="radio" name="shipping" id="shipping-3">
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-check form-checkbox-primary ps-0">
                                        <label for="shipping-4" class="w-100">
                                            <div class="d-flex align-items-center p-2 rounded gap-2 border">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div class="rounded-3 bg-light avatar-md d-flex align-items-center justify-content-center">
                                                        <iconify-icon icon="solar:box-bold-duotone" class="fs-36 text-warning"></iconify-icon>
                                                    </div>
                                                    <div>
                                                        <h5 class="text-dark fw-medium">
                                                            Our Courier Services
                                                        </h5>
                                                        <p class="mb-0 text-dark">
                                                            Delivery -
                                                            <span class="text-muted fw-normal">25 Apr 2024</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="ms-auto">
                                                    <p class="mb-2">$0.00</p>
                                                    <input class="form-check-input float-end" type="radio" name="shipping" id="shipping-4" checked>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <div class="row">
                        <div class="col-lg-3">
                            <h4 class="card-title">Payment Method</h4>
                        </div>
                        <div class="col-lg-9">
                            <div class="card border-0">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header p-0" id="pay-pal">
                                            <h2 class="mb-0">
                                                <button class="btn btn-light w-100 collapsed rounded-0 border-bottom rounded-top-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <span class="fs-5">Paypal</span>
                                                        <img src="/images/card/paypal.svg" alt="" class="avatar-sm">
                                                    </div>
                                                </button>
                                            </h2>
                                            <p class="p-3 mb-0">
                                                Safe Payment Online Credit card needed. PayPal
                                                account is not necessary
                                            </p>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="pay-pal" data-bs-parent="#accordionExample">
                                            <div class="card-body">
                                                <input type="text" class="form-control" placeholder="Paypal email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-0">
                                        <div class="card-header p-0">
                                            <h2 class="mb-0">
                                                <button class="btn btn-light w-100 collapsed rounded-0 border-bottom rounded-top-1" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <span class="fs-5">Credit card</span>
                                                        <div class="icons text-end">
                                                            <img src="/images/card/mastercard.svg" alt="" class="avatar-sm">
                                                            <img src="/images/card/stripe.svg" alt="" class="avatar-sm">
                                                            <img src="/images/card/visa.svg" alt="" class="avatar-sm">
                                                        </div>
                                                    </div>
                                                </button>
                                            </h2>
                                            <p class="p-3 mb-0">
                                                Safe Money Transfer using your bank account.
                                                Visa , Master Card ,Discover , American
                                                Express
                                            </p>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="p-3">
                                                <form>
                                                    <div class="mb-3">
                                                        <label for="card-number" class="form-label">Card Number</label>
                                                        <input type="number" id="card-number" name="card-number" class="form-control" placeholder="0000 0000 0000 0000" max="16" maxlength="16" required>
                                                    </div>
                                                </form>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="ex-date" class="form-label">Expiry Date</label>
                                                            <input type="text" id="ex-date" class="form-control flatpickr-input" placeholder="dd-mm-yyyy" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="card-cvv" class="form-label">CVC/CVV</label>
                                                            <input type="number" id="card-cvv" name="card-cvv" class="form-control" placeholder="000" min="0" max="3" maxlength="3" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="alert alert-success mb-0 d-flex align-items-center gap-2" role="alert">
                                                    <iconify-icon icon="solar:shield-check-bold" class="fs-28 align-middle"></iconify-icon>
                                                    We adhere entirely to the data security standards of the payment card industry.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card text-center bg-primary overflow-hidden z-1">
            <div class="card-body p-4">
                <h4 class="card-title text-white">Have a Promo Code ?</h4>
                <div class="position-relative mt-3">
                    <div class="form-button">
                        <form class="d-flex align-items-center justify-content-center">
                            <input type="text" class="form-control w-50 border-0 rounded bg-light text-white bg-opacity-25" placeholder="code" required="" value="CODE123">
                            <button type="button" data-toast data-toast-text="Your Promo Code Apply Successfully" data-toast-gravity="top" data-toast-position="center" data-toast-className="success" data-toast-duration="3000" class="btn btn-light ms-2 rounded-2">
                                Apply
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="position-absolute top-100 start-100 translate-middle z-n1 opacity-75">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 800 800" width="400" height="400">
                    <defs>
                        <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="wwwhirl-grad">
                            <stop stop-color="hsla(0, 0%, 91%, 1.00)" stop-opacity="1" offset="45%"></stop>
                            <stop stop-color="hsla(0, 0%, 98%, 1.00)" stop-opacity="1" offset="100%"></stop>
                        </linearGradient>
                    </defs>
                    <g stroke-width="2" stroke="url(#wwwhirl-grad)" fill="none" stroke-linecap="round">
                        <path d="M37.00000251770027 455.96076451864155C50.75000289917 435.33576394643694 75.50000358581553 365.0045119952192 103.000004348755 356.9607617720594C130.50000511169446 348.9170115488996 141.5000054168703 416.3195134188643 169.00000617980973 417.3507634474745C196.5000069427492 418.38201347608475 207.50000724792503 356.3420117548933 235.00000801086446 361.91076190938855C262.500008773804 367.47951206388376 273.5000090789798 447.7932642920485 301.0000098419193 444.0807641890517C328.50001060485874 440.36826408605486 339.5000109100345 346.5657614836683 367.000011672974 344.0907614150037C394.50001243591345 341.6157613463392 405.5000127410893 429.10701377363114 433.0000135040287 432.20076385946186C460.5000142669682 435.2945139452925 471.50001457214404 355.0220117182722 499.0000153350834 358.9407618269911C526.5000160980228 362.85951193571 537.5000164031987 442.5545141467086 565.0000171661382 451.01076438131247C592.5000179290777 459.46701461591636 603.5000182342535 398.70576293020156 631.000018997193 399.5307629530897C658.5000197601325 400.35576297597794 669.5000200653083 460.745764651393 697.0000208282477 454.9707644911757C724.5000215911871 449.1957643309584 749.2500222778326 389.13576266469863 763.0000226593024 371.8107621840467 " transform="rotate(99, 400, 400)"></path>
                        <path d="M48.00000244140632 454.26498851512474C61.33333614464971 434.2649879602597 85.3333368104878 366.0649860681698 112.00000421697456 358.2649858517724C138.6666716234613 350.464985635375 149.33333858605602 415.82498744867405 176.00000599254278 416.82498747641733C202.66667339902952 417.8249875041606 213.33334036162427 357.66498583512646 240.000007768111 363.06498598494C266.6666751745978 368.4649861347536 277.3333421371925 446.3449882953982 304.00000954367925 442.74498819552247C330.66667695016605 439.14498809564674 341.3333439127607 348.1849855721204 368.00001131924745 345.7849855055366C394.66667872573424 343.3849854389528 405.33334568832896 428.2249877926904 432.00001309481576 431.2249878759202C458.66668050130244 434.22498795915 469.3333474638972 356.3849857996151 496.0000148703839 360.18498590503947C522.6666822768707 363.98498601046384 533.3333492394653 441.26498815446246 560.0000166459522 449.46498838195714C586.666684052439 457.6649886094518 597.3333510150337 398.7449869748193 624.0000184215204 399.5449869970139C650.6666858280073 400.34498701920853 661.3333527906019 458.90498864385347 688.0000201970887 453.30498848849123C714.6666876035754 447.704988333129 738.6666882694134 389.4649867173619 752.0000219726569 372.66498625127525 " transform="rotate(96, 400, 400)"></path>
                        <path d="M59.00000236511238 452.5692010675162C71.9166693901294 433.19420052999067 95.16667003516005 367.12544869702856 121.00000408519412 359.5691984873936C146.83333813522813 352.01294827775865 157.1666717552418 415.33045003439213 183.0000058052758 416.2992000612684C208.83333985530987 417.26795008814463 219.1666734753235 358.9879484712678 245.00000752535757 364.2191986163997C270.8333415753916 369.4504487615316 281.1666751954052 444.89670085465605 307.0000092454393 441.4092007579015C332.83334329547336 437.9217006611469 343.16667691548696 349.8041982164807 369.00001096552097 347.47919815197764C394.83334501555504 345.1541980874746 405.1666786355687 427.3429503676579 431.0000126856027 430.2492004482868C456.8333467356368 433.1554505289156 467.16668035565044 357.7479484368662 493.0000144056845 361.42919853899605C518.8333484557185 365.1104486411259 529.1666820757321 439.9754507181246 555.0000161257661 447.9192009385101C580.8333501758003 455.86295115889556 591.1666837958139 398.78419957534527 617.000017845848 399.5591995968463C642.8333518958821 400.3341996183473 653.1666855158957 457.06420119222213 679.0000195659296 451.63920104171495C704.8333536159636 446.2142008912078 728.0833542609943 389.79419932593345 741.0000212860114 373.519198874412 " transform="rotate(93, 400, 400)"></path>
                        <path d="M70.00000228881842 450.87342506399943C82.50000263560909 432.12342454381337 105.00000325983231 368.18592276997913 130.00000395341365 360.87342256710656C155.00000464699497 353.56092236423405 165.00000492442751 414.8359240642019 190.00000561800886 415.7734240902112C215.0000063115902 416.7109241162205 225.00000658902275 360.310922551501 250.00000728260406 365.3734226919512C275.00000797618543 370.43592283240145 285.000008253618 443.44842485800575 310.0000089471993 440.07342476437225C335.00000964078066 436.6984246707388 345.00000991821315 351.42342230493284 370.0000106117945 349.1734222425105C395.00001130537584 346.9234221800882 405.0000115828084 426.46092438671724 430.0000122763897 429.2734244647451C455.000012969971 432.085924542773 465.0000132474036 359.1109225182091 490.00001394098496 362.6734226170444C515.0000146345662 366.2359227158798 525.0000149119987 438.6859247258785 550.0000156055801 446.37342493915475C575.0000162991615 454.060925152431 585.000016576594 398.823423619963 610.0000172701755 399.5734236407705C635.0000179637568 400.3234236615779 645.0000182411893 455.2234251846826 670.0000189347705 449.9734250390305C695.0000196283519 444.72342489337836 717.5000202525752 390.1234233785967 730.0000205993658 374.3734229416405 " transform="rotate(90, 400, 400)"></path>
                        <path d="M81.00000221252448 449.17764524578536C93.08333588108879 431.05264474293887 114.83333648450457 369.24639302823243 139.0000038216332 362.1776428321223C163.1666711587618 355.1088926360122 172.83333809361326 414.34139427931444 197.0000054307419 415.2476443044568C221.16667276787052 416.1538943295991 230.833339702722 361.6338928170369 255.00000703985063 366.5276429528054C279.16667437697924 371.421393088574 288.83334131183074 442.0001450466582 313.00000864895935 438.7376449561458C337.16667598608797 435.4751448656334 346.8333429209394 353.04264257868766 371.000010258068 350.8676425183461C395.16667759519663 348.6926424580045 404.8333445300481 425.5788945910793 429.00001186717674 428.29764466650624C453.16667920430535 431.0163947419332 462.8333461391569 360.47389278485474 487.00001347628546 363.91764288039553C511.1666808134141 367.3613929759364 520.8333477482655 437.3963949189352 545.0000150853941 444.8276451251022C569.1666824225229 452.2588953312693 578.8333493573742 398.86264384988357 603.000016694503 399.5876438699974C627.1666840316316 400.3126438901113 636.8333509664831 453.38264536244577 661.0000183036116 448.3076452216487C685.1666856407402 443.23264508085174 706.9166862441559 390.4526436165628 719.0000199127203 375.2276431941718 " transform="rotate(87, 400, 400)"></path>
                        <path d="M92.00000213623053 447.48186161287407C103.6666691265685 429.9818611273671 124.66666970917683 370.30685947178847 148.00000368985275 363.4818592824407C171.33333767052864 356.65685909309303 180.666671262799 413.84686067972973 204.00000524347493 414.72186070400505C227.33333922415085 415.59686072828043 236.66667281642125 362.95685926787553 260.00000679709717 367.6818593989624C283.33334077777306 372.4068595300493 292.66667437004344 440.5518614206133 316.0000083507193 437.4018613332221C339.3333423313953 434.2518612458308 348.66667592366565 354.6618590377453 372.00000990434154 352.56185897948444C395.3333438850174 350.4618589212236 404.6666774772878 424.696860980744 428.00001145796375 427.32186105357005C451.3333454386397 429.94686112639613 460.6666790309101 361.8368592368031 484.000013011586 365.16185932904943C507.33334699226185 368.4868594212957 516.6666805845323 436.1068612972946 540.0000145652082 443.2818614963524C563.3333485458841 450.4568616954102 572.6666821381544 398.9018602651068 596.0000161188304 399.60186028452705C619.3333500995063 400.30186030394736 628.6666836917767 451.5418617255117 652.0000176724526 446.6418615895697C675.3333516531285 441.7418614536278 696.3333522357368 390.7818600398316 708.0000192260748 376.0818596320057 " transform="rotate(84, 400, 400)"></path>
                        <path d="M103.00000205993659 445.78608179466C114.25000237204819 428.9110813264926 134.5000029338491 371.3673297300418 157.00000355807228 364.78607954745644C179.50000418229547 358.20482936487116 188.5000044319848 413.3523308948422 211.00000505620795 414.19608091825063C233.50000568043117 415.039830941659 242.50000593012047 364.27982953341143 265.0000065543437 368.8360796598166C287.5000071785669 373.39232978622186 296.5000074282562 439.1035816092657 319.0000080524794 436.0660815249956C341.5000086767026 433.0285814407255 350.50000892639184 356.2810793115001 373.00000955061506 354.25607925532C395.5000101748383 352.2310791991399 404.5000104245276 423.8148311851061 427.00001104875076 426.34608125533117C449.500011672974 428.87733132555627 458.5000119226633 363.1998295034487 481.00001254688647 366.40607959240054C503.50001317110963 369.6123296813523 512.5000134207988 434.8173314903512 535.0000140450221 441.7360816822998C557.5000146692455 448.6548318742485 566.5000149189347 398.9410804950273 589.0000155431579 399.616080513754C611.5000161673811 400.2910805324807 620.5000164170704 449.7010819032748 643.0000170412935 444.97608177218797C665.5000176655168 440.2510816411011 685.7500182273176 391.1110802777976 697.0000185394292 376.936079884537 " transform="rotate(81, 400, 400)"></path>
                        <path d="M114.00000198364263 444.09030197644597C124.83333561752788 427.8403015256181 144.33333615852135 372.4277999882951 166.0000034262918 366.0902998124722C187.6666706940623 359.75279963664934 196.3333376011705 412.8578011099548 218.000004868941 413.6703011324962C239.6666721367115 414.4828011550376 248.3333390438197 365.60279979894733 270.0000063115902 369.99029992067085C291.6666735793607 374.37780004239437 300.33334048646896 437.6553017979181 322.0000077542394 434.7303017167691C343.6666750220099 431.80530163562014 352.3333419291181 357.90029958525497 374.0000091968886 355.95029953115557C395.6666764646591 354.0002994770563 404.3333433717673 422.93280138946807 426.0000106395378 425.3703014570923C447.66667790730827 427.8078015247164 456.3333448144165 364.5627997700944 478.00001208218697 367.65029985575165C499.66667934995746 370.737799941409 508.33334625706556 433.52780168340786 530.0000135248362 440.1903018682473C551.6666807926067 446.8528020530867 560.3333476997147 398.9803007249478 582.0000149674854 399.6303007429809C603.6666822352558 400.280300761014 612.3333491423641 447.860302081038 634.0000164101345 443.3103019548062C655.666683677905 438.7603018285744 675.1666842188985 391.4403005157637 686.0000178527837 377.79030013706824 " transform="rotate(78, 400, 400)"></path>
                        <path d="M125.00000190734869 442.3945183435346C135.41666886300757 426.7695179100463 154.1666693831936 373.4882664318511 175.00000329451137 367.39451626279066C195.83333720582914 361.3007660937302 204.16667077035626 412.36326751037006 225.00000468167406 413.14451753204446C245.83333859299182 413.9257675537189 254.16667215751897 366.92576624978597 275.00000606883674 371.1445163668278C295.8333399801545 375.36326648386967 304.16667354468166 436.2070181718733 325.0000074559994 433.39451809384536C345.8333413673172 430.5820180158175 354.16667493184434 359.5195160443125 375.00000884316205 357.6445159922939C395.8333427544799 355.7695159402753 404.166676319007 422.05076777913285 425.0000102303248 424.3945178441561C445.83334414164256 426.73826790917934 454.1666777061697 365.92576622204274 475.0000116174875 368.8945163044055C495.83334552880524 371.8632663867683 504.1666790933323 432.23826806176726 525.0000130046501 438.6445182394975C545.8333469159679 445.0507684172277 554.166680480495 399.01951714017105 575.0000143918128 399.64451715751056C595.8333483031306 400.2695171748501 604.1666818676579 446.01951844410394 625.0000157789755 441.6445183227272C645.8333496902933 437.2695182013505 664.5833502104794 391.7695169390324 675.0000171661382 378.64451657490224 " transform="rotate(75, 400, 400)"></path>
                        <path d="M136.00000183105476 440.6987385253206C146.00000210848728 425.6987381091718 164.00000260786584 374.5487366901044 184.00000316273093 368.6987365278064C204.00000371759597 362.84873636550833 212.000003939542 411.8687377254826 232.00000449440708 412.61873774629004C252.00000504927215 413.3687377670975 260.0000052712182 368.24873651532187 280.0000058260833 372.29873662768205C300.0000063809483 376.3487367400422 308.00000660289436 434.7587383605257 328.00000715775946 432.0587382856189C348.00000771262455 429.35873821071215 356.00000793457053 361.13873631806734 376.0000084894356 359.3387362681295C396.00000904430067 357.5387362181916 404.0000092662467 421.1687379834949 424.0000098211118 423.41873804591717C444.0000103759769 425.66873810833954 452.0000105979229 367.28873648868836 472.000011152788 370.13873656775667C492.000011707653 372.9887366468249 500.00001192959905 430.9487382548239 520.0000124844642 437.09873842544494C540.0000130393292 443.2487385960659 548.0000132612753 399.05873737009154 568.0000138161404 399.65873738673747C588.0000143710055 400.25873740338346 596.0000145929514 444.1787386218671 616.0000151478165 439.97873850534546C636.0000157026815 435.7787383888238 654.00001620206 392.0987371769985 664.0000164794926 379.4987368274335 " transform="rotate(72, 400, 400)"></path>
                        <path d="M146.9999864959717 439.0029587071066C156.5833200951779 424.6279583082973 173.83332057374906 375.60920694835767 192.9999877721614 370.0029567928221C212.16665497057375 364.39670663728646 219.8333218499387 411.37420794059517 238.99998904835104 412.0929579605356C258.1666562467634 412.81170798047606 265.8333231261284 369.57170678085777 284.9999903245407 373.4529568885363C304.1666575229531 377.3342069962148 311.83332440231806 433.3104585491781 330.9999916007304 430.7229584773924C350.1666587991428 428.13545840560676 357.83332567850766 362.7579565918222 376.99999287692003 361.0329565439651C396.1666600753324 359.307956496108 403.8333269546974 420.2867081878569 422.99999415310975 422.4429582476783C442.1666613515221 424.5992083074997 449.83332823088705 368.651706755334 468.9999954292994 371.3829568311078C488.16666262771173 374.1142069068815 495.83332950707666 429.65920844788053 514.9999967054891 435.55295861139234C534.1666639039015 441.44670877490415 541.8333307832664 399.097957600012 560.9999979816788 399.67295761596444C580.1666651800912 400.2479576319168 587.8333320594561 442.3379587996303 606.9999992578685 438.3129586879637C626.1666664562807 434.2879585762971 643.4166669348518 392.42795741496457 653.000000534058 380.35295707996477 " transform="rotate(69, 400, 400)"></path>
                        <path d="M157.99998641967778 437.30717888889257C167.1666533406576 423.5571785074228 183.6666537984213 376.66967720661097 201.99998764038094 371.3071770578378C220.33332148234058 365.9446769090646 227.66665501912445 410.8796781557077 245.9999888610841 411.5671781747812C264.33332270304373 412.25467819385466 271.6666562398276 370.8946770463937 289.99999008178725 374.6071771493905C308.3333239237469 378.31967725238735 315.6666574605308 431.8621787378305 333.99999130249046 429.38717866916596C352.3333251444501 426.9121786005014 359.6666586812339 364.37717686557704 377.99999252319355 362.72717681980066C396.3333263651532 361.07717677402434 403.6666599019371 419.40467839221895 421.99999374389677 421.4671784494394C440.3333275858564 423.5296785066599 447.6666611226403 370.01467702197965 465.9999949645999 372.6271770944589C484.3333288065595 375.2396771669381 491.6666623433434 428.3696786409372 509.9999961853031 434.0071787973398C528.3333300272627 439.6446789537424 535.6666635640465 399.13717782993257 553.9999974060063 399.68717784519134C572.3333312479659 400.2371778604501 579.6666647847499 440.4971789773935 597.9999986267094 436.64717887058197C616.3333324686689 432.79717876377043 632.8333329264326 392.7571776529306 641.9999998474125 381.20717733249603 " transform="rotate(66, 400, 400)"></path>
                        <path d="M168.99998634338385 435.6113952559812C177.7499865861373 422.48639489185103 193.49998702309355 377.730143650167 210.9999875086005 372.61139350815625C228.4999879941074 367.49264336614544 235.49998818831023 410.38514455612295 252.99998867381714 411.0413945743295C270.49998915932406 411.697644592536 277.49998935352687 372.21764349723236 294.9999898390338 375.7613935955475C312.4999903245407 379.30514369386265 319.4999905187435 430.4138951117857 336.99999100425043 428.0513950462422C354.49999148975735 425.68889498069876 361.49999168396016 365.9963933246346 378.9999921694671 364.421393280939C396.49999265497405 362.8463932372434 403.4999928491768 418.5226447818837 420.9999933346837 420.4913948365032C438.4999938201907 422.46014489112275 445.4999940143935 371.377643473928 462.9999944999004 373.87139354311273C480.4999949854073 376.3651436122975 487.4999951796101 427.0801450192966 504.99999566511707 432.46139516859C522.4999961506239 437.84264531788335 529.4999963448267 399.1763942451558 546.9999968303338 399.701394259721C564.4999973158407 400.2263942742862 571.4999975100434 438.6563953404594 588.9999979955503 434.98139523850296C606.4999984810572 431.3063951365465 622.2499989180135 393.0863940761994 630.999999160767 382.06139377032997 " transform="rotate(63, 400, 400)"></path>
                        <path d="M179.9999862670899 433.9156154377672C188.33331983161702 421.41561509097653 203.3333202477658 378.7906139084203 219.99998737682003 373.91561377317197C236.66665450587425 369.0406136379236 243.33332135749595 409.8906147712355 259.9999884865502 410.515614788575C276.6666556156044 411.1406148059146 283.33332246722614 373.54061376276826 299.99998959628033 376.9156138564017C316.6666567253345 380.2906139500352 323.3333235769563 428.96561530043806 339.9999907060105 426.71561523801574C356.6666578350647 424.4656151755934 363.3333246866864 367.6156135983895 379.9999918157406 366.1156135567746C396.6666589447948 364.6156135151597 403.33332579641655 417.64061498624574 419.9999929254708 419.51561503826434C436.666660054525 421.39061509028295 443.3333269061467 372.7406137405736 459.9999940352009 375.1156138064639C476.6666611642551 377.4906138723541 483.33332801587676 425.79061521235326 499.99999514493106 430.9156153545374C516.6666622739854 436.0406154967216 523.333329125607 399.2156144750763 539.9999962546613 399.7156144889479C556.6666633837156 400.21561450281956 563.3333302353371 436.8156155182226 579.9999973643913 433.31561542112127C596.6666644934455 429.81561532401986 611.6666649095944 393.4156143141654 619.9999984741214 382.91561402286123 " transform="rotate(60, 400, 400)"></path>
                        <path d="M190.99998619079594 432.2198356195531C198.9166530770967 420.34483529010197 213.16665347243807 379.8510841666736 228.99998724503956 375.2198340381877C244.83332101764108 370.58858390970175 251.1666545266817 409.39608498634806 266.99998829928325 409.9898350028206C282.8333220718847 410.5835850192932 289.16665558092535 374.86358402830416 304.99998935352687 378.06983411725594C320.83332312612833 381.27608420620777 327.166656635169 427.5173354890905 342.9999904077705 425.3798354297893C358.833324180372 423.2423353704881 365.1666576894126 369.2348338721443 380.9999914620141 367.8098338326102C396.8333252346156 366.38483379307604 403.1666587436563 416.75858519060773 418.99999251625775 418.5398352400254C434.83332628885927 420.3210852894431 441.1666597978999 374.1035840072193 456.99999357050143 376.359834069815C472.8333273431029 378.6160841324107 479.1666608521435 424.5010854054099 494.99999462474506 429.36983554048487C510.8333283973466 434.2385856755598 517.1666619063872 399.25483470499677 532.9999956789886 399.72983471817486C548.8333294515903 400.2048347313529 555.1666629606309 434.9748356959858 570.9999967332324 431.64983560373946C586.8333305058338 428.3248355114932 601.0833309011753 393.74483455213146 608.9999977874759 383.7698342753925 " transform="rotate(57, 400, 400)"></path>
                        <path d="M201.999986114502 430.52405389399047C209.49998632257638 419.2740535818789 222.99998669711033 380.9115525175783 237.99998711325912 376.52405239585477C252.99998752940792 372.13655227413125 258.99998769586745 408.901553294112 273.99998811201624 409.46405330971754C288.9999885281651 410.0265533253231 294.99998869462456 376.1865523864914 309.9999891107734 379.22405247076154C324.9999895269222 382.2615525550317 330.99998969338174 426.06905377039425 345.99999010953053 424.04405371421416C360.9999905256793 422.01905365803407 366.9999906921388 370.85405223855054 381.99999110828765 369.5040522010971C396.99999152443644 368.1540521636437 402.99999169089597 415.87655348762115 417.99999210704476 417.5640535344379C432.99999252319355 419.25155358125465 438.99999268965314 375.4665523665163 453.99999310580193 377.6040524258175C468.9999935219507 379.7415524851187 474.9999936884102 423.21155369111796 489.99999410455905 427.8240538190837C504.9999945207079 432.43655394704945 510.9999946871674 399.2940530275687 525.9999951033162 399.74405304005313C540.9999955194651 400.1940530525376 546.9999956859245 433.13405396640036 561.9999961020733 429.98405387900914C576.9999965182221 426.83405379161786 590.499996892756 394.07405288274884 597.9999971008303 384.6240526205751 " transform="rotate(54, 400, 400)"></path>
                        <path d="M212.99998603820805 428.82827407577645C220.08331956805608 418.2032737810043 232.8333199217826 381.9720227758316 246.99998698147868 377.8282726608705C261.16665404117475 373.6845225459094 266.8333208650532 408.4070235092245 280.9999879247493 408.9382735239631C295.16665498444536 409.4695235387017 300.83332180832383 377.50952265202733 314.99998886801995 380.37827273161577C329.166655927716 383.24702281120426 334.83332275159444 424.6207739590467 348.99998981129056 422.7082739059877C363.1666568709866 420.79577385292873 368.83332369486504 372.47327251230536 382.99999075456117 371.19827247693274C397.16665781425723 369.9232724415601 402.8333246381357 414.9945236919832 416.9999916978318 416.58827373619897C431.1666587575279 418.1820237804148 436.8333255814063 376.8295226331619 450.99999264110244 378.8482726891686C465.1666597007985 380.8670227451753 470.8333265246769 421.92202388417456 484.99999358437304 426.2782740050311C499.16666064406917 430.63452412588765 504.8333274679476 399.33327325748917 518.9999945276437 399.75827326928004C533.1666615873398 400.1832732810709 538.8333284112182 431.29327414416355 552.9999954709143 428.31827406162733C567.1666625306103 425.3432739790912 579.9166628843368 394.4032731207149 586.9999964141849 385.4782728731064 " transform="rotate(51, 400, 400)"></path>
                        <path d="M223.9999859619141 427.13249235021374C230.6666528135358 417.1324920727812 242.66665314645485 383.03249112673626 255.99998684969822 379.13249101853756C269.3333205529416 375.23249091033887 274.66665403423895 407.9124918169884 287.99998773748234 408.41249183086006C301.3333214407257 408.9124918447317 306.6666549220231 378.8324910102146 319.99998862526644 381.53249108512136C333.33332232850984 384.2324911600282 338.6666558098072 423.1724922403505 351.99998951305054 421.37249219041263C365.33332321629393 419.57249214047476 370.6666566975913 374.0924908787116 383.9999904008347 372.8924908454197C397.3333241040781 371.69249081212774 402.66665758537545 414.11249198899657 415.99999128861884 415.61249203061146C429.3333249918621 417.11249207222636 434.66665847315954 378.19249099245894 447.9999921764029 380.0924910451711C461.3333258796463 381.99249109788326 466.6666593609436 420.6324921698826 479.99999306418704 424.73249228362994C493.33332676743044 428.8324923973773 498.6666602487278 399.372491580061 511.99999395197113 399.7724915911583C525.3333276552146 400.1724916022556 530.666661136512 429.4524924145781 543.9999948397553 426.652492336897C557.3333285429986 423.85249225921586 569.3333288759177 394.73249145133235 575.9999957275394 386.33249121828896 " transform="rotate(48, 400, 400)"></path>
                        <path d="M234.99998588562016 425.4367106246511C241.2499860590155 416.06171036455805 252.49998637112708 384.09295947764093 264.99998671791775 380.43670937620465C277.4999870647084 376.7804592747684 282.49998720342467 407.4179601247523 294.99998755021534 407.88671013775695C307.499987897006 408.35546015076164 312.4999880357223 380.15545936840186 324.999988382513 382.68670943862696C337.49998872930365 385.2179595088521 342.49998886801995 421.72421052165424 354.9999892148106 420.0367104748375C367.4999895616013 418.34921042802074 372.49998970031754 375.7117092451178 384.9999900471082 374.5867092139066C397.4999903938989 373.4617091826955 402.49999053261513 413.23046028601 414.9999908794058 414.63671032502396C427.49999122619647 416.04296036403787 432.4999913649127 379.5554593517559 444.9999917117034 381.3367094011736C457.49999205849406 383.11795945059123 462.4999921972103 419.3429604555906 474.999992544001 423.18671056222877C487.4999928907917 427.0304606688669 492.49999302950795 399.4117099026329 504.9999933762987 399.7867099130366C517.4999937230893 400.16170992344036 522.4999938618056 427.61171068499266 534.9999942085963 424.9867106121666C547.4999945553868 422.36171053934055 558.7499948674986 395.06170978194973 564.9999950408939 387.1867095634716 " transform="rotate(45, 400, 400)"></path>
                        <path d="M245.9999858093262 423.74093271378564C251.83331930449518 414.9909324710322 262.33331959579937 385.15343164324287 273.9999865861373 381.740931548569C285.66665357647526 378.3284314538952 290.33332037261044 406.9234322472135 301.9999873629484 407.36093225935116C313.6666543532864 407.7984322714888 318.3333211494216 381.4784315412864 329.9999881397595 383.8409316068298C341.66665513009747 386.20343167237326 346.33332192623266 420.27593261765526 357.9999889165706 418.7009325739597C369.66665590690855 417.12593253026404 374.3333227030438 377.33093142622124 385.99998969338174 376.28093139709085C397.6666566837197 375.2309313679604 402.3333234798548 412.34843239772067 413.9999904701928 413.66093243413366C425.6666574605308 414.9734324705467 430.33332425666595 380.9184315257502 441.99999124700395 382.58093157187335C453.66665823734184 384.2434316179965 458.3333250334771 418.0534325559959 469.999992023815 421.6409326555248C481.66665901415297 425.22843275505375 486.33332581028816 399.450932039902 497.99999280062616 399.8009320496122C509.6666597909641 400.1509320593223 514.3333265870992 425.7709327701045 525.9999935774372 423.3209327021335C537.6666605677751 420.8709326341625 548.1666608590793 395.39093192726443 553.9999943542483 388.0409317233515 " transform="rotate(42, 400, 400)"></path>
                        <path d="M256.99998573303225 422.04514908087435C262.41665254997486 413.9201488554604 272.1666528204716 386.2138980867989 282.9999864543569 383.04514799888744C293.8333200882421 379.87639791097604 298.1666535417962 406.4288986476288 308.99998717568144 406.83514865889947C319.83332080956666 407.24139867017016 324.1666542631208 382.80139799212503 334.999987897006 384.9951480529868C345.8333215308913 387.18889811384855 350.1666549844454 418.82764899161043 360.99998861833063 417.3651489510359C371.8333222522159 415.90264891046144 376.16665570577 378.95014788527885 386.99998933965526 377.97514785822915C397.8333229735405 377.0001478311795 402.1666564270946 411.4663987873854 412.9999900609798 412.6851488211975C423.83332369486504 413.9038988550096 428.1666571484192 382.28139797769853 438.9999907823044 383.8251480205272C449.83332441618967 385.36889806335586 454.16665786974374 416.7638989343553 464.999991503629 420.095149026775C475.8333251375143 423.42639911919474 480.1666585910683 399.4901484551253 490.99999222495364 399.8151484641418C501.83332585883886 400.1401484731584 506.166659312393 423.9301491331704 516.9999929462782 421.6551490700545C527.8333265801634 419.3801490069386 537.5833268506601 395.7201483505332 542.9999936676028 388.8951481611855 " transform="rotate(39, 400, 400)"></path>
                        <path d="M267.9999856567383 420.34936926266033C272.99998579545456 412.8493690545859 281.9999860451438 387.2743683450522 291.99998632257643 384.34936826390316C301.9999866000089 381.42436818275416 305.99998671098194 405.9343688627413 315.9999869884145 406.30936887314505C325.99998726584704 406.68436888354876 329.99998737682006 384.12436825766093 339.99998765425255 386.149368313841C349.9999879316851 388.1743683700211 353.9999880426581 417.37936918026287 363.99998832009067 416.02936914280946C373.9999885975232 414.67936910535605 377.9999887084962 380.5693681590337 387.9999889859287 379.66936813406477C397.9999892633613 378.7693681090958 401.9999893743343 410.58436899174745 411.99998965176684 411.7093690229586C421.9999899291994 412.83436905416977 425.9999900401724 383.6443682443442 435.9999903176049 385.0693682838783C445.99999059503745 386.49436832341246 449.99999070601046 415.47436912741193 459.999990983443 418.54936921272247C469.99999126087556 421.62436929803295 473.9999913718486 399.52936868504577 483.9999916492811 399.82936869336874C493.9999919267137 400.1293687016917 497.99999203768664 422.0893693109336 507.9999923151192 419.98936925267276C517.9999925925517 417.88936919441187 526.999992842241 396.04936858849925 531.9999929809572 389.74936841371675 " transform="rotate(36, 400, 400)"></path>
                        <path d="M279.0000008392334 418.65358944444625C283.58333429972333 411.7785892537114 291.8333345286052 388.3348386033055 301.000001449585 385.6535885289189C310.1666683705648 382.9723384545323 313.8333351389567 405.43983907785383 323.0000020599366 405.78358908739057C332.16666898091637 406.12733909692736 335.83333574930833 385.44733852319683 345.00000267028815 387.30358857469525C354.166669591268 389.1598386261937 357.83333635965994 415.93108936891525 367.00000328063976 414.69358933458295C376.1666702016196 413.4560893002507 379.8333369700115 382.1885884327885 389.0000038909913 381.36358840990033C398.16667081197113 380.53858838701217 401.8333375803631 409.70233919610945 411.0000045013429 410.7335892247197C420.16667142232274 411.7648392533299 423.8333381907147 385.0073385109898 433.00000511169446 386.3135885472294C442.1666720326743 387.61983858346906 445.83333880106625 414.1848393204686 455.00000572204607 417.0035893986699C464.1666726430259 419.8223394768712 467.8333394114178 399.56858891496626 477.0000063323977 399.8435889225957C486.1666732533775 400.1185889302251 489.83334002176946 420.2485894886968 499.0000069427492 418.323589435291C508.166673863729 416.39858938188524 516.4166740926108 396.37858882646526 521.0000075531008 390.603588666248 " transform="rotate(33, 400, 400)"></path>
                        <path d="M290.00000076293946 416.9578077188836C294.16666754520304 410.70780754548827 301.66666775327747 389.3953069542102 310.00000131780456 386.957806886586C318.33333488233166 384.5203068189618 321.6666683081425 404.94530738561775 330.0000018726696 405.2578073942875C338.33333543719675 405.57030740295727 341.6666688630076 386.7703068813841 350.0000024275347 388.45780692820085C358.3333359920618 390.1453069750176 361.66666941787264 414.48280765021906 370.0000029823998 413.3578076190079C378.3333365469269 412.23280758779674 381.66666997273774 383.80780679919474 390.00000353726483 383.0578067783873C398.3333371017919 382.30780675757984 401.66667052760283 408.82030749312287 410.0000040921299 409.75780751913214C418.333337656657 410.6953075451415 421.6666710824679 386.3703068702868 430.00000464699497 387.55780690323195C438.3333382115221 388.74530693617703 441.6666716373329 412.89530760617663 450.00000520186006 415.4578076772687C458.3333387663872 418.0203077483608 461.666672192198 399.60780723753817 470.00000575672516 399.857807244474C478.3333393212523 400.1078072514098 481.6666727470631 418.4078077591113 490.0000063115902 416.65780771056063C498.3333398761173 414.90780766200993 505.8333400841917 396.7078071570827 510.00000686645524 391.45780701143065 " transform="rotate(30, 400, 400)"></path>
                        <path d="M301.00000068664554 415.2620269469952C304.75000079068275 409.63702679093944 311.5000009779497 390.4557762587892 319.00000118602406 388.2620261979274C326.5000013940985 386.0682761370656 329.5000014773283 404.450776647056 337.00000168540265 404.73202665485877C344.5000018934771 405.01327666266155 347.5000019767068 388.09327619324574 355.00000218478124 389.61202623538077C362.50000239285566 391.13077627751585 365.5000024760854 413.0345268851971 373.00000268415977 412.0220268571071C380.5000028922342 411.00952682901703 383.50000297546393 385.42702611927524 391.00000318353835 384.75202610054856C398.5000033916127 384.0770260818219 401.5000034748425 407.9382767438106 409.00000368291694 408.78202676721895C416.5000038909913 409.6257767906273 419.5000039742211 387.7332761832581 427.00000418229547 388.80202621290874C434.5000043903699 389.8707762425594 437.50000447359963 411.605776845559 445.00000468167406 413.91202690954185C452.5000048897485 416.2182769735247 455.5000049729782 399.64702651378434 463.00000518105264 399.87202652002657C470.50000538912707 400.0970265262688 473.5000054723568 416.5670269832002 481.0000056804312 414.99202693950457C488.5000058885056 413.41702689580893 495.25000607577255 397.03702644137445 499.0000061798097 392.3120263102876 " transform="rotate(27, 400, 400)"></path>
                        <path d="M312.00000061035155 413.56624617510687C315.33333403616246 408.5662460363906 321.3333342026219 391.5162455633681 328.0000010542436 389.5662455092688C334.6666679058653 387.61624545516946 337.333334646514 403.9562459084942 344.0000014981357 404.20624591543003C350.6666683497574 404.45624592236584 353.3333350904061 389.4162455051073 360.0000019420278 390.7662455425607C366.6666687936495 392.1162455800141 369.33333553429816 411.58624612017525 376.0000023859198 410.6862460952063C382.6666692375415 409.7862460702374 385.3333359781902 387.0462454393558 392.0000028298119 386.4462454227098C398.6666696814336 385.8462454060639 401.33333642208225 407.0562459944983 408.00000327370395 407.80624601530576C414.6666701253256 408.5562460361132 417.3333368659743 389.09624549622947 424.000003717596 390.04624552258554C430.6666705692177 390.99624554894166 433.33333730986635 410.3162460849413 440.00000416148805 412.36624614181494C446.66667101310975 414.41624619868867 449.3333377537584 399.6862457900305 456.0000046053801 399.88624579557916C462.6666714570018 400.0862458011278 465.3333381976505 414.726246207289 472.0000050492722 413.3262461684485C478.66667190089385 411.92624612960793 484.6666720673534 397.36624572566615 488.0000054931642 393.1662456091445 " transform="rotate(24, 400, 400)"></path>
                        <path d="M323.0000005340576 411.87046540321853C325.9166672816421 407.4954652818418 331.1666674272942 392.5767148679471 337.0000009224632 390.8704648206102C342.83333441763216 389.1642147732733 345.1666678156997 403.4617151699324 351.0000013108687 403.68046517600123C356.8333348060377 403.8992151820701 359.16666820410535 390.7392148169689 365.0000016992743 391.9204648497406C370.8333351944433 393.10171488251234 373.16666859251086 410.1379653551533 379.00000208767983 409.3504653333055C384.8333355828488 408.5629653114577 387.1666689809164 388.6654647594363 393.0000024760854 388.1404647448711C398.83333597125437 387.6154647303059 401.16666936932194 406.174215245186 407.00000286449097 406.8304652633925C412.83333635965994 407.486715281599 415.1666697577275 390.4592148092008 421.0000032528965 391.29046483226233C426.83333674806545 392.12171485532394 429.1666701461331 409.0267153243236 435.00000364130204 410.8204653740881C440.833337136471 412.61421542385256 443.16667053453864 399.7254650662767 449.0000040297076 399.90046507113175C454.8333375248766 400.0754650759868 457.16667092294415 412.8854654313779 463.0000044181131 411.66046539739244C468.8333379132821 410.43546536340693 474.0833380589342 397.6954650099579 477.0000048065187 394.02046490800143 " transform="rotate(21, 400, 400)"></path>
                        <path d="M334.0000004577637 410.17468463133014C336.5000005271218 406.4246845272929 341.00000065196645 393.6371841725261 346.00000079068275 392.1746841319516C351.000000929399 390.7121840913771 353.0000009848855 402.96718443137064 358.0000011236018 403.1546844365725C363.00000126231805 403.3421844417744 365.00000131780456 392.0621841288305 370.0000014565208 393.0746841569205C375.0000015952371 394.0871841850106 377.00000165072356 408.68968459013144 382.00000178943986 408.0146845714047C387.00000192815617 407.339684552678 389.0000019836426 390.28468407951686 394.00000212235886 389.83468406703236C399.00000226107517 389.3846840545479 401.0000023165617 405.2921844958737 406.0000024552779 405.8546845114793C411.0000025939942 406.4171845270849 413.00000264948073 391.8221841221721 418.000002788197 392.5346841419392C423.0000029269132 393.24718416170623 425.0000029823998 407.73718456370597 430.00000312111604 409.27468460636123C435.0000032598323 410.8121846490165 437.00000331531885 399.76468434252286 442.0000034540351 399.91468434668434C447.00000359275134 400.0646843508459 449.00000364823785 411.04468465546677 454.00000378695415 409.9946846263364C459.0000039256704 408.94468459720594 463.50000405051503 398.0246842942496 466.00000411987315 394.8746842068584 " transform="rotate(18, 400, 400)"></path>
                        <path d="M344.99999656677244 408.4789029057675C347.08332995790425 405.3539028190698 350.83333006194147 394.69765252343075 354.99999684420504 393.4789024896187C359.16666362646856 392.2601524558066 360.833330339374 402.47265273913456 364.99999712163753 402.62890274346944C369.1666639039011 402.7851527478043 370.8333306168065 393.38515248701776 374.9999973990701 394.2289025104261C379.16666418133366 395.07265253383446 380.83333089423905 407.2414028714352 384.99999767650263 406.6789028558296C389.16666445876615 406.11640284022405 390.8333311716716 391.90390244592305 394.9999979539351 391.52890243551934C399.1666647361987 391.15390242511563 400.83333144910415 404.4101527928871 404.9999982313677 404.87890280589176C409.16666501363125 405.34765281889645 410.8333317265367 393.1851524814691 414.9999985088002 393.77890249794166C419.1666652910638 394.3726525144142 420.8333320039692 406.447652849414 424.99999878623277 407.72890288496C429.16666556849634 409.0101529205061 430.83333228140174 399.80390266509477 434.9999990636653 399.92890266856267C439.1666658459289 400.0539026720306 440.8333325588343 409.2039029258813 444.9999993410978 408.328902901606C449.1666661233614 407.4539028773306 452.9166662273986 398.35390262486703 454.99999961853035 395.728902552041 " transform="rotate(15, 400, 400)"></path>
                        <path d="M355.9999964904785 406.78312308755346C357.66666320338396 404.2831230181953 360.6666632866137 395.75812278168405 363.99999671242455 394.7831227546344C367.3333301382354 393.8081227275847 368.66666350855974 401.9781229542471 371.9999969343706 402.103122957715C375.33333036018144 402.2281229611829 376.6666637305058 394.70812275255366 379.9999971563166 395.38312277128034C383.3333305821275 396.058122790007 384.6666639524518 405.7931230600876 387.9999973782626 405.34312304760317C391.3333308040735 404.89312303511866 392.66666417439785 393.5231227196779 395.99999760020864 393.2231227113549C399.33333102601955 392.92312270303194 400.6666643963439 403.52812299724917 403.9999978221547 403.9031230076529C407.33333124796553 404.2781230180566 408.6666646182899 394.54812274811474 411.9999980441007 395.02312276129277C415.33333146991157 395.4981227744708 416.6666648402359 405.15812304247066 419.99999826604676 406.18312307090747C423.3333316918576 407.20812309934433 424.66666506218195 399.84312289501526 427.9999984879928 399.9431228977896C431.33333191380365 400.0431229005639 432.666665284128 407.3631231036445 435.99999870993884 406.66312308422425C439.33333213574963 405.963123064804 442.3333322189794 398.6831228628331 443.9999989318849 396.58312280457227 " transform="rotate(12, 400, 400)"></path>
                        <path d="M366.9999964141846 405.0873432693394C368.2499964488636 403.2123432173208 370.499996511286 396.81859303993735 372.9999965806441 396.0873430196501C375.49999665000223 395.3560929993629 376.49999667774546 401.48359316935966 378.99999674710364 401.5773431719606C381.49999681646176 401.6710931745615 382.49999684420504 396.03109301808956 384.9999969135631 396.5373430321346C387.4999969829213 397.0435930461796 388.4999970106645 404.34484324874 390.9999970800227 404.00734323937667C393.4999971493808 403.6698432300133 394.49999717712404 395.14234299343275 396.99999724648217 394.9173429871905C399.49999731584035 394.6923429809483 400.4999973435836 402.64609320161117 402.9999974129417 402.92734320941395C405.4999974822998 403.20859321721673 406.4999975100431 395.91109301476035 408.9999975794012 396.2673430246439C411.49999764875935 396.6235930345274 412.49999767650263 403.8685932355273 414.99999774586075 404.63734325685493C417.4999978152189 405.40609327818254 418.49999784296216 399.88234312493574 420.9999979123203 399.9573431270165C423.4999979816784 400.0323431290972 424.4999980094217 405.5223432814077 426.9999980787798 404.9973432668425C429.49999814813793 404.4723432522773 431.74999821056025 399.0123431007991 432.99999824523934 397.4373430571035 " transform="rotate(9, 400, 400)"></path>
                        <path d="M378.0000001525879 403.39156154377673C378.8333335090406 402.14156150909764 380.3333335506555 397.879061390842 382.0000002635609 397.3915613773172C383.66666697646633 396.9040613637924 384.3333336616285 400.9890614771235 386.0000003745339 401.0515614788575C387.66666708743935 401.11406148059143 388.3333337726015 397.35406137627683 390.0000004855069 397.69156138564017C391.66666719841237 398.0290613950035 392.33333388357454 402.8965615300438 394.00000059647994 402.6715615238016C395.6666673093854 402.44656151755936 396.33333399454756 396.76156135983894 398.00000070745295 396.61156135567745C399.6666674203584 396.46156135151597 400.3333341055206 401.7640614986246 402.000000818426 401.95156150382644C403.6666675313314 402.1390615090283 404.33333421649354 397.27406137405734 406.000000929399 397.5115613806464C407.66666764230445 397.74906138723543 408.33333432746656 402.5790615212353 410.000001040372 403.09156153545376C411.66666775327747 403.60406154967217 412.3333344384396 399.92156144750766 414.00000115134503 399.9715614488948C415.6666678642505 400.021561450282 416.3333345494126 403.68156155182226 418.00000126231805 403.3315615421121C419.66666797522345 402.981561532402 421.16666801683834 399.34156143141655 422.00000137329107 398.2915614022861 " transform="rotate(6, 400, 400)"></path>
                        <path d="M389.00000007629393 401.695779818214C389.4166667545203 401.0707798008745 390.1666667753277 398.9395297417467 391.00000013178044 398.6957797349843C391.83333348823317 398.4520297282219 392.1666668308143 400.49452978488745 393.00000018726695 400.5257797857544C393.8333335437197 400.5570297866214 394.16666688630073 398.6770297344641 395.00000024275346 398.84577973914577C395.8333335992062 399.01452974382744 396.1666669417873 401.44827981134756 397.00000029823997 401.33577980822645C397.8333336546927 401.22327980510534 398.16666699727375 398.3807797262452 399.0000003537265 398.3057797241644C399.8333337101792 398.23077972208364 400.16666705276026 400.88202979563795 401.000000409213 400.97577979823893C401.8333337656657 401.06952980083986 402.16666710824677 398.6370297333544 403.0000004646995 398.7557797366489C403.8333338211522 398.8745297399434 404.1666671637333 401.28952980694334 405.000000520186 401.54577981405254C405.83333387663873 401.8020298211618 406.1666672192198 399.9607797700795 407.0000005756725 399.9857797707731C407.83333393212524 400.0107797714667 408.1666672747063 401.8407798222368 409.000000631159 401.66577981738175C409.8333339876117 401.4907798125267 410.5833340084192 399.67077976203393 411.00000068664554 399.14577974746874 " transform="rotate(3, 400, 400)"></path>
                    </g>
                </svg>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Order Summary</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="rounded bg-light avatar d-flex align-items-center justify-content-center">
                            <img src="/images/product/p-1.png" alt="" class="avatar">
                        </div>
                        <div>
                            <a href="#!" class="text-dark fw-medium fs-15">Men Black Slim Fit T-shirt</a>
                            <p class="text-muted mb-0 mt-1 fs-13"><span>Size : </span>M</p>
                        </div>
                        <div class="ms-auto text-end">
                            <p class="text-dark fw-medium mb-1">$83.00</p>
                            <p class="mb-0">Q. 01</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="rounded bg-light avatar d-flex align-items-center justify-content-center">
                            <img src="/images/product/p-5.png" alt="" class="avatar">
                        </div>
                        <div>
                            <a href="#!" class="text-dark fw-medium fs-15">Dark Green Cargo Pent</a>
                            <p class="text-muted mb-0 mt-1 fs-13"><span>Size : </span>M</p>
                        </div>
                        <div class="ms-auto text-end">
                            <p class="text-dark fw-medium mb-1">$334.00</p>
                            <p class="mb-0">Q. 03</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="rounded bg-light avatar d-flex align-items-center justify-content-center">
                            <img src="/images/product/p-8.png" alt="" class="avatar">
                        </div>
                        <div>
                            <a href="#!" class="text-dark fw-medium fs-15">Men Dark Brown Wallet</a>
                            <p class="text-muted mb-0 mt-1 fs-13"><span>Size : </span>S</p>
                        </div>
                        <div class="ms-auto text-end">
                            <p class="text-dark fw-medium mb-1">$137.00</p>
                            <p class="mb-0">Q. 01</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="rounded bg-light avatar d-flex align-items-center justify-content-center">
                            <img src="/images/product/p-10.png" alt="" class="avatar">
                        </div>
                        <div>
                            <a href="#!" class="text-dark fw-medium fs-15">Kid's Yellow T-shirt</a>
                            <p class="text-muted mb-0 mt-1 fs-13"><span>Size : </span>S</p>
                        </div>
                        <div class="ms-auto text-end">
                            <p class="text-dark fw-medium mb-1">$223.00</p>
                            <p class="mb-0">Q. 02</p>
                        </div>
                    </div>
                    <table class="table mb-0">
                        <tbody>
                            <tr>
                                <td class="px-0">
                                    <p class="d-flex mb-0 align-items-center gap-1"><iconify-icon icon="solar:clipboard-text-broken"></iconify-icon> Sub Total : </p>
                                </td>
                                <td class="text-end text-dark fw-medium px-0">$777.00</td>
                            </tr>
                            <tr>
                                <td class="px-0">
                                    <p class="d-flex mb-0 align-items-center gap-1"><iconify-icon icon="solar:ticket-broken" class="align-middle"></iconify-icon> Discount : </p>
                                </td>
                                <td class="text-end text-dark fw-medium px-0">-$60.00</td>
                            </tr>
                            <tr>
                                <td class="px-0">
                                    <p class="d-flex mb-0 align-items-center gap-1"><iconify-icon icon="solar:kick-scooter-broken" class="align-middle"></iconify-icon> Delivery Charge : </p>
                                </td>
                                <td class="text-end text-dark fw-medium px-0">$00.00</td>
                            </tr>
                            <tr>
                                <td class="px-0">
                                    <p class="d-flex mb-0 align-items-center gap-1"><iconify-icon icon="solar:calculator-minimalistic-broken" class="align-middle"></iconify-icon> Estimated Tax (15.5%) : </p>
                                </td>
                                <td class="text-end text-dark fw-medium px-0">$20.00</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-light-subtle">
                <div class="d-flex align-items-center justify-content-between">

                    <div>
                        <p class="fw-medium text-dark mb-0">Total Amount</p>
                    </div>
                    <div>
                        <p class="fw-medium text-dark mb-0">$737.00</p>
                    </div>
                </div>
                <div class="alert alert-warning alert-icon mt-3 mb-0" role="alert">
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm rounded bg-warning d-flex justify-content-center align-items-center fs-22 me-2 flex-shrink-0">
                            <iconify-icon icon="solar:kick-scooter-broken" class="align-middle text-white"></iconify-icon>
                        </div>
                        <div class="flex-grow-1">
                            Estimated Delivery by 25 April, 2024
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-btn my-4 text-end">
            <a href="{{ route('third', ['general', 'orders', 'cart'])}}" class="btn btn-danger">Back To Cart</a>
            <a href="#!" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#checkoutModal">Checkout Order</a>
        </div>
        <div data-bs-theme="dark">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex gap-3">
                        <div class="rounded-3 bg-light flex-shrink-0 avatar d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:box-bold-duotone" class="fs-36 text-warning"></iconify-icon>
                        </div>
                        <div>
                            <h5 class="text-white fw-medium mb-1">Streaming box shipping information</h5>
                            <p class="text-white-50 mb-0">Below your selected items, enter your zip code to calculate the shipping charge. We like to make shipping simple and affordable!</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3 mt-4">
                        <div class="rounded-3 bg-light flex-shrink-0 avatar d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:wallet-money-bold-duotone" class="fs-36 text-success"></iconify-icon>
                        </div>
                        <div>
                            <h5 class="text-white fw-medium mb-1">30 Day money back guarantee</h5>
                            <p class="text-white-50 mb-0">Money Return In 30 day In Your Bank Account</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="checkoutModal" tabindex="-1" aria-labelledby="checkoutModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="card border-0 mb-0">
                    <div class="card-body">
                        <form class="">
                            <div class="row align-items-center">
                                <div class="col-lg-12">
                                    <div class="check-icon text-center">
                                        <img src="/images/party.png" alt="" class="img-fluid">
                                        <h4 class="fw-semibold mt-3">Thank You !</h4>
                                        <p class="mb-1">Your Transaction Was
                                            Successful</p>
                                        <p><span class="text-dark fw-medium">Order Id</span> : #0758267/90</p>
                                    </div>
                                    <hr>
                                    <div class="row justify-content-between">
                                        <div class="col-lg-4 col-6">
                                            <span class="fw-semibold text-muted fs-14">Date</span>
                                            <p class="text-dark fw-medium mt-1">
                                                23 April, 2024</p>
                                        </div>
                                        <div class="col-lg-4 col-6 text-end">
                                            <span class="fw-semibold text-muted fs-14">Time</span>
                                            <p class="text-dark fw-medium">
                                                11:28 AM</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between mt-3 align-items-center">
                                        <div class="col-lg-6 col-6">
                                            <span class="fw-semibold text-muted fs-14">To</span>
                                            <p class="text-dark fw-medium mb-0 mt-1">Gaston Lapierre</p>
                                            <p class="mb-0">hello@dundermuffilin.com</p>
                                        </div>
                                        <div class="col-lg-4 col-6 text-end">
                                            <img src="/images/users/avatar-1.jpg" alt="" class="avatar rounded-circle">
                                        </div>
                                    </div>
                                    <div class="row justify-content-between mt-3 align-items-center">
                                        <div class="col-lg-6 col-6">
                                            <span class="fw-semibold text-muted fs-14">Amount</span>
                                            <h5 class="fw-medium mt-1">$737.00</h5>
                                        </div>
                                        <div class="col-lg-4 col-6 text-end">
                                            <span class="text-success fw-semibold">Completed <i class="bx bx-check-circle align-middle"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div data-bs-theme="dark">
                        <div class="card-footer d-flex align-items-center border-0 bg-body gap-3 rounded">
                            <div class="rounded-3 avatar bg-light d-flex align-items-center justify-content-center">
                                <img src="/images/card/mastercard.svg" alt="" class="avatar-sm">
                            </div>
                            <div class="d-block">
                                <p class="text-white fw-semibold mb-0">
                                    Credit/Debit Card</p>
                                <p class="mb-0 text-white-50">
                                    <span>Master Card ending
                                        **** 7812</span>
                                </p>
                            </div>
                            <div class="ms-auto">
                                <a href="#!" class="text-primary fs-30" data-bs-toggle="tooltip" data-bs-title="Download Invoice" data-bs-placement="bottom"><iconify-icon icon="solar:download-square-bold" class="align-middle"></iconify-icon></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

