<!DOCTYPE html>
<html lang="fa" class="js">

<head>
    <base href="../../../" />
    <meta charset="utf-8" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png" />
    <!-- Page Title  -->
    <title>ورود | قالب مدیریتی دش‌لایت</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.rtl.css" />
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css" />
</head>

<body class="has-rtl nk-body bg-white npc-default pg-auth" dir="rtl">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content">
                    <div class="nk-split nk-split-page nk-split-md">
                        <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                            <div class="nk-block nk-block-middle nk-auth-body">
                                <div class="brand-logo pb-5">
                                    <a href="html/index.html" class="logo-link">
                                        <img class="logo-light logo-img logo-img-lg" src="./images/logo.png"
                                            srcset="./images/logo2x.png 2x" alt="لوگو" />
                                        <img class="logo-dark logo-img logo-img-lg" src="./images/logo-dark.png"
                                            srcset="./images/logo-dark2x.png 2x" alt="لوگوی تاریک" />
                                    </a>
                                </div>
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title">ورود</h5>
                                        <div class="nk-block-des">
                                            <p>با استفاده از ایمیل و رمز عبور خود به پنل دش‌لایت دسترسی پیدا کنید.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- .nk-block-head -->
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">ایمیل یا نام کاربری</label>
                                            <a class="link link-primary link-sm" tabindex="-1" href="#">به راهنمایی نیاز
                                                دارید؟</a>
                                        </div>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control form-control-lg" id="default-01"
                                                name='email' value="{{old('email')}}"
                                                placeholder="نشانی ایمیل یا نام کاربری خود را وارد کنید" />
                                        </div>

                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                    <!-- .form-group -->
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">رمز عبور</label>
                                            <!-- <a class="link link-primary link-sm" tabindex="-1" -->
                                            <!--     href="html/pages/auths/auth-reset-v3.html">رمز عبور را فراموش کردید؟</a> -->
                                        </div>
                                        <div class="form-control-wrap">
                                            <a tabindex="-1" href="#"
                                                class="form-icon form-icon-right passcode-switch lg"
                                                data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" class="form-control form-control-lg" id="password"
                                                name='password' placeholder="رمز عبور خود را وارد کنید" />
                                        </div>
                                    </div>
                                    <!-- .form-group -->
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block">ورود</button>
                                    </div>
                                </form>
                                <!-- form -->
                                <div class="form-note-s2 pt-4">در پلتفرم ما جدید هستید؟ <a
                                        href="html/pages/auths/auth-register-v3.html">یک حساب کاربری ایجاد کنید</a>
                                </div>
                                <div class="text-center pt-4 pb-3">
                                    <h6 class="overline-title overline-title-sap"><span>یا</span></h6>
                                </div>
                                <ul class="nav justify-center gx-4">
                                    <li class="nav-item"><a class="nav-link" href="#">فیس بوک</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">گوگل</a></li>
                                </ul>
                                <div class="text-center mt-5">
                                    <span class="fw-500">حساب کاربری ندارید؟ <a href="#">15 روز رایگان امتحان
                                            کنید</a></span>
                                </div>
                            </div>
                            <!-- .nk-block -->
                            <div class="nk-block nk-auth-footer">
                                <div class="nk-block-between">
                                    <ul class="nav nav-sm">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">شرایط و ضوابط</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">سیاست حفظ حریم خصوصی</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">راهنمایی</a>
                                        </li>
                                        <li class="nav-item dropup">
                                            <a class="dropdown-toggle dropdown-indicator has-indicator nav-link"
                                                data-bs-toggle="dropdown" data-offset="0,10"><small>فارسی</small></a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                <ul class="language-list">
                                                    <li>
                                                        <a href="#" class="language-item">
                                                            <img src="./images/flags/iran.png" alt=""
                                                                class="language-flag" />
                                                            <span class="language-name">فارسی</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="language-item">
                                                            <img src="./images/flags/english.png" alt=""
                                                                class="language-flag" />
                                                            <span class="language-name">انگلیسی</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="language-item">
                                                            <img src="./images/flags/germany.png" alt=""
                                                                class="language-flag" />
                                                            <span class="language-name">آلمانی</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="language-item">
                                                            <img src="./images/flags/french.png" alt=""
                                                                class="language-flag" />
                                                            <span class="language-name">فرانسوی</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- .nav -->
                                </div>
                                <div class="mt-3">
                                    <p>© تمام حقوق محفوظ است. فارسی و راستچین سازی شده توسط <a target="_blank"
                                            rel="nofollow" href="https://www.rtl-theme.com/author/farshid_tarnian">فرشید
                                            ترنیان</a></p>
                                </div>
                            </div>
                            <!-- .nk-block -->
                        </div>
                        <!-- .nk-split-content -->
                        <div class="nk-split-content nk-split-stretch bg-abstract"></div>
                        <!-- .nk-split-content -->
                    </div>
                    <!-- .nk-split -->
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js"></script>
    <script src="./assets/js/scripts.js"></script>
    <!-- select region modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="region">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title mb-4">کشور خود را انتخاب کنید</h5>
                    <div class="nk-country-region">
                        <ul class="country-list text-center gy-2">
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/arg.png" alt="" class="country-flag" />
                                    <span class="country-name">آرژانتین</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/aus.png" alt="" class="country-flag" />
                                    <span class="country-name">استرالیا</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/bangladesh.png" alt="" class="country-flag" />
                                    <span class="country-name">بنگلادش</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/canada.png" alt="" class="country-flag" />
                                    <span class="country-name">کانادا <small>(انگلیسی)</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/s-africa.png" alt="" class="country-flag" />
                                    <span class="country-name">سانترافریکائین</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag" />
                                    <span class="country-name">چین</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/french.png" alt="" class="country-flag" />
                                    <span class="country-name">فرانسه</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/germany.png" alt="" class="country-flag" />
                                    <span class="country-name">آلمان</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/iran.png" alt="" class="country-flag" />
                                    <span class="country-name">ایران</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/italy.png" alt="" class="country-flag" />
                                    <span class="country-name">ایتالیا</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/mexico.png" alt="" class="country-flag" />
                                    <span class="country-name">مکزیک</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/philipine.png" alt="" class="country-flag" />
                                    <span class="country-name">فیلیپین</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/portugal.png" alt="" class="country-flag" />
                                    <span class="country-name">پرتقال</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/s-africa.png" alt="" class="country-flag" />
                                    <span class="country-name">آفریقای جنوبی</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/spanish.png" alt="" class="country-flag" />
                                    <span class="country-name">اسپانیا</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/switzerland.png" alt="" class="country-flag" />
                                    <span class="country-name">سوئیس</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/uk.png" alt="" class="country-flag" />
                                    <span class="country-name">انگلستان</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/english.png" alt="" class="country-flag" />
                                    <span class="country-name">ایالات متحده آمریکا</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- .modal-content -->
        </div>
        <!-- .modla-dialog -->
    </div>
    <!-- .modal -->
</body>

</html>
