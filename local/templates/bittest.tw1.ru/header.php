<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$CurDir = $APPLICATION->GetCurDir();
$CurUri = $APPLICATION->GetCurUri();
?>
<!doctype html>
<html xml:lang="<?= LANGUAGE_ID ?>" lang="<?= LANGUAGE_ID ?>">
<head>
    <?

    use Bitrix\Main\Page\Asset;
    use Bitrix\Main\UI\Extension;

    // HEADERS
    $APPLICATION->ShowHead();
    ?>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title><? $APPLICATION->ShowTitle() ?></title>
    <?
    // CSS;
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/frontend/dist/main.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/frontend/dist/important.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/frontend/dist/fonts.css');
    ?>
</head>
<body>
<? $APPLICATION->ShowPanel(); ?>
<header>
    <section class="header">
        <div class="header-top">
            <div class="container header-top__block">
                <a href="#" class="header__logo">
                    <img src="/frontend/src/img/logo.png">
                </a>
                <a href="#" class="header__blind">Версия для слабовидящих</a>
                <p class="header__city">г. Смоленск</p>
                <div class="header__contacts">
                    <div class="header__social">
                        <a href="#">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.3744 3.51172C14.6458 1.78906 12.3409 0.832031 9.90799 0.832031C4.85006 0.832031 0.7525 4.91536 0.7525 9.95573C0.7525 11.5508 1.20067 13.1458 1.96896 14.4857L0.688477 19.207L5.55433 17.931C6.89884 18.6328 8.3714 19.0156 9.90799 19.0156C14.9659 19.0156 19.0635 14.9323 19.0635 9.89193C18.9995 7.53125 18.1031 5.23437 16.3744 3.51172ZM14.3257 13.2096C14.1336 13.7201 13.2373 14.2305 12.7891 14.2943C12.4049 14.3581 11.8927 14.3581 11.3806 14.2305C11.0604 14.1029 10.6123 13.9753 10.1001 13.7201C7.79518 12.763 6.32262 10.4661 6.19458 10.2747C6.06653 10.1471 5.23421 9.0625 5.23421 7.91406C5.23421 6.76562 5.81043 6.25521 6.0025 6C6.19457 5.74479 6.45067 5.74479 6.64274 5.74479C6.77079 5.74479 6.96286 5.74479 7.09091 5.74479C7.21896 5.74479 7.41104 5.68099 7.60311 6.1276C7.79518 6.57422 8.24335 7.72266 8.30738 7.78646C8.3714 7.91406 8.3714 8.04167 8.30738 8.16927C8.24335 8.29688 8.17933 8.42448 8.05128 8.55208C7.92323 8.67969 7.79518 8.87109 7.73116 8.9349C7.60311 9.0625 7.47506 9.1901 7.60311 9.38151C7.73116 9.63672 8.17933 10.3385 8.8836 10.9766C9.77994 11.7422 10.4842 11.9974 10.7403 12.125C10.9964 12.2526 11.1244 12.1888 11.2525 12.0612C11.3805 11.9336 11.8287 11.4232 11.9568 11.168C12.0848 10.9128 12.2769 10.9766 12.469 11.0404C12.661 11.1042 13.8135 11.6784 14.0055 11.806C14.2616 11.9336 14.3897 11.9974 14.4537 12.0612C14.5177 12.2526 14.5177 12.6992 14.3257 13.2096Z"
                                      fill="white"/>
                            </svg>
                        </a>
                        <a href="#">
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.9107 1.30971C11.5756 0.672806 8.11223 0.672806 4.77715 1.30971C3.30202 1.62816 1.44208 3.41147 1.1214 4.81265C0.54417 7.55132 0.54417 10.3537 1.1214 13.0923C1.50621 14.4935 3.36616 16.2768 4.77715 16.5953C4.84129 16.5953 4.90542 16.659 4.90542 16.7227V20.7351C4.90542 20.9262 5.16197 21.0536 5.29024 20.8625L7.21433 18.8881C7.21433 18.8881 8.75359 17.2959 9.01014 17.0411C9.01014 17.0411 9.07428 16.9774 9.13841 16.9774C11.0625 17.0411 13.0507 16.85 14.9748 16.5316C16.4499 16.2132 18.3099 14.4298 18.6306 13.0287C19.2078 10.29 19.2078 7.48763 18.6306 4.74896C18.2457 3.41147 16.3858 1.62816 14.9107 1.30971ZM14.9748 13.2834C14.6541 13.9203 14.2693 14.4298 13.6279 14.7483C13.4355 14.812 13.2431 14.8757 13.0507 14.9394C12.7942 14.8757 12.6018 14.812 12.4094 14.7483C10.357 13.9203 8.43292 12.7739 6.89365 11.118C6.05988 10.1626 5.35438 9.07988 4.77715 7.93346C4.52061 7.36025 4.26407 6.85073 4.07166 6.27752C3.87925 5.768 4.19993 5.25848 4.52061 4.87634C4.84129 4.4942 5.22611 4.23944 5.67506 4.04837C5.99574 3.8573 6.31642 3.98468 6.57297 4.23944C7.08606 4.87634 7.59914 5.51324 7.98396 6.21383C8.2405 6.65966 8.17637 7.16918 7.72741 7.48763C7.59914 7.55132 7.53501 7.61501 7.40673 7.74239C7.3426 7.80608 7.21432 7.86977 7.15019 7.99715C7.02192 8.18822 7.02192 8.37929 7.08605 8.57036C7.59914 10.0352 8.56118 11.1816 10.0363 11.8185C10.2929 11.9459 10.4853 12.0096 10.806 12.0096C11.2549 11.9459 11.4473 11.4364 11.768 11.1816C12.0887 10.9269 12.4735 10.9269 12.8583 11.118C13.179 11.309 13.4997 11.5638 13.8845 11.8185C14.2052 12.0733 14.5258 12.2644 14.8465 12.5191C15.0389 12.6465 15.1031 12.965 14.9748 13.2834ZM12.2811 8.50667C12.1528 8.50667 12.2169 8.50667 12.2811 8.50667C12.0245 8.50667 11.9604 8.37929 11.8963 8.18822C11.8963 8.06084 11.8963 7.86977 11.8321 7.74239C11.768 7.48763 11.6397 7.23287 11.3832 7.0418C11.2549 6.97811 11.1266 6.91442 10.9984 6.85073C10.8059 6.78704 10.6777 6.78704 10.4853 6.78704C10.2929 6.72335 10.2287 6.59597 10.2287 6.4049C10.2287 6.27752 10.4211 6.15014 10.5494 6.15014C11.5756 6.21383 12.3452 6.78704 12.4735 7.99715C12.4735 8.06084 12.4735 8.18822 12.4735 8.25191C12.4735 8.37929 12.4094 8.50667 12.2811 8.50667ZM11.6397 5.70431C11.319 5.57693 10.9984 5.44955 10.6135 5.38586C10.4853 5.38586 10.2929 5.32217 10.1646 5.32217C9.97218 5.32217 9.84391 5.19479 9.90804 5.00372C9.90804 4.81265 10.0363 4.68527 10.2287 4.74896C10.8701 4.81265 11.4473 4.94003 12.0245 5.19479C13.179 5.768 13.8203 6.72335 14.0128 7.99715C14.0128 8.06084 14.0128 8.12453 14.0128 8.18822C14.0128 8.3156 14.0128 8.44298 14.0128 8.63405C14.0128 8.69774 14.0128 8.76143 14.0128 8.82512C13.9486 9.07988 13.4997 9.14357 13.4355 8.82512C13.4355 8.76143 13.3714 8.63405 13.3714 8.57036C13.3714 7.99715 13.2431 7.42394 12.9866 6.91442C12.6018 6.34121 12.1528 5.95907 11.6397 5.70431ZM15.1031 9.52571C14.9107 9.52571 14.7824 9.33464 14.7824 9.14357C14.7824 8.76143 14.7183 8.37929 14.6541 7.99715C14.3976 5.95907 12.73 4.30313 10.7418 3.98468C10.4211 3.92099 10.1005 3.92099 9.84391 3.8573C9.6515 3.8573 9.39495 3.8573 9.33082 3.60254C9.26668 3.41147 9.45909 3.2204 9.6515 3.2204C9.71564 3.2204 9.77977 3.2204 9.77977 3.2204C9.90805 3.2204 12.4094 3.28409 9.77977 3.2204C12.4735 3.28409 14.7183 5.06741 15.1672 7.74239C15.2313 8.18822 15.2955 8.63405 15.2955 9.14357C15.4238 9.33464 15.2955 9.52571 15.1031 9.52571Z"
                                      fill="white"/>
                            </svg>
                        </a>
                    </div>
                    <select class="header-select">
                        <option value="+7 (4812) 35-33-06">
                            <a href="tel:+74812353306"> +7 (4812) 35-33-06</a>
                        </option>
                        <option value="+7 (4812) 64-38-78">
                            <a href="tel:+74812643878">+7 (4812) 64-38-78</a>
                        </option>
                        <option value="+7 (915) 630-03-42">
                            <a href="tel:+79156300342"> +7 (915) 630-03-42</a>
                        </option>

                    </select>
                </div>
            </div>
        </div>
        <div class="header-bot">
            <div class="container header-bot__block">
                <ul class="header-bot-menu">
                    <li class="header-bot-menu__services">
                        <p>Услуги</p>
                        <ul>
                            <li>
                                <a href="#">Услуга 1</a>
                            </li>
                            <li>
                                <a href="#">Услуга 2</a>
                            </li>
                            <li>
                                <a href="#">Услуга 3</a>
                            </li>
                            <li>
                                <a href="#">Услуга 4</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">ЦЕНЫ</a>
                    </li>
                    <li>
                        <a href="#">ВРАЧИ</a>
                    </li>
                    <li>
                        <a href="#">О ЦЕНТРЕ</a>
                    </li>
                    <li>
                        <a href="#">ВАКАНСИИ</a>
                    </li>
                    <li>
                        <a href="#">Новости</a>
                    </li>
                    <li>
                        <a href="#">Контакты</a>
                    </li>
                </ul>
                <form class="header-bot__search">
                    <button></button>
                    <input type="text" placeholder="Поиск" class="header-bot__input">
                    <img src="/frontend/src/img/icons/close.svg" alt="Крестик" class="header-bot__search-close"/>
                </form>
                <a href="#" class="btn btn_header-make js-modal-call btn--hover-blue">Записаться на приём</a>
            </div>
        </div>
    </section>
    <section class="mob-header__wrap">
        <div class="container mob-header">
            <a href="#" class="header__logo">
                <img src="/frontend/src/img/logo.png" alt="logo">
            </a>
            <div class="mob-header__nav">
                <div class="mob-burger-wrap">
                    <div class="burger-btn">
                        <button class="burger">
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="mob-header-main__wrap">
            <div class="container mob-header-main">
                <ul class="header__menu">
                    <li>
                        <a href="#">Номинации</a>
                    </li>
                    <li>
                        <a href="#">Победители</a>
                    </li>
                    <li>
                        <a href="#">Правила</a>
                    </li>
                    <li>
                        <a href="#">Места</a>
                    </li>
                    <li>
                        <a href="#">Новости</a>
                    </li>
                </ul>
                <form class="header-bot__search">
                    <button></button>
                    <input type="text" placeholder="Поиск" class="header-bot__input">
                    <img src="/frontend/src/img/icons/close.svg" alt="Крестик" class="header-bot__search-close"/>
                </form>
                <a href="#" class="btn btn_header-make js-modal-call btn--hover-blue">Записаться на приём</a>
                <div class="mob-header-contacts">
                    <div class="footer-social__block">
                        <a href="#">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1.80723C12.6506 1.80723 13.0121 1.80723 14.0964 1.80723C15.0602 1.80723 15.5422 2.04819 15.9036 2.16868C16.3855 2.40964 16.747 2.53012 17.1084 2.89157C17.4699 3.25301 17.7108 3.61446 17.8313 4.09639C17.9518 4.45783 18.0723 4.93976 18.1928 5.90362C18.1928 6.98795 18.1928 7.22892 18.1928 10C18.1928 12.7711 18.1928 13.0121 18.1928 14.0964C18.1928 15.0602 17.9518 15.5422 17.8313 15.9036C17.5904 16.3855 17.4699 16.747 17.1084 17.1084C16.747 17.4699 16.3855 17.7108 15.9036 17.8313C15.5422 17.9518 15.0602 18.0723 14.0964 18.1928C13.0121 18.1928 12.7711 18.1928 10 18.1928C7.22892 18.1928 6.98795 18.1928 5.90362 18.1928C4.93976 18.1928 4.45783 17.9518 4.09639 17.8313C3.61446 17.5904 3.25301 17.4699 2.89157 17.1084C2.53012 16.747 2.28916 16.3855 2.16868 15.9036C2.04819 15.5422 1.92771 15.0602 1.80723 14.0964C1.80723 13.0121 1.80723 12.7711 1.80723 10C1.80723 7.22892 1.80723 6.98795 1.80723 5.90362C1.80723 4.93976 2.04819 4.45783 2.16868 4.09639C2.40964 3.61446 2.53012 3.25301 2.89157 2.89157C3.25301 2.53012 3.61446 2.28916 4.09639 2.16868C4.45783 2.04819 4.93976 1.92771 5.90362 1.80723C6.98795 1.80723 7.3494 1.80723 10 1.80723ZM10 0C7.22892 0 6.98795 0 5.90362 0C4.81928 0 4.09639 0.240965 3.49398 0.481928C2.89157 0.722892 2.28916 1.08434 1.68675 1.68675C1.08434 2.28916 0.843374 2.77109 0.481928 3.49398C0.240965 4.09639 0.120482 4.81928 0 5.90362C0 6.98795 0 7.3494 0 10C0 12.7711 0 13.0121 0 14.0964C0 15.1807 0.240965 15.9036 0.481928 16.506C0.722892 17.1084 1.08434 17.7108 1.68675 18.3133C2.28916 18.9157 2.77109 19.1566 3.49398 19.5181C4.09639 19.759 4.81928 19.8795 5.90362 20C6.98795 20 7.3494 20 10 20C12.6506 20 13.0121 20 14.0964 20C15.1807 20 15.9036 19.759 16.506 19.5181C17.1084 19.2771 17.7108 18.9157 18.3133 18.3133C18.9157 17.7108 19.1566 17.2289 19.5181 16.506C19.759 15.9036 19.8795 15.1807 20 14.0964C20 13.0121 20 12.6506 20 10C20 7.3494 20 6.98795 20 5.90362C20 4.81928 19.759 4.09639 19.5181 3.49398C19.2771 2.89157 18.9157 2.28916 18.3133 1.68675C17.7108 1.08434 17.2289 0.843374 16.506 0.481928C15.9036 0.240965 15.1807 0.120482 14.0964 0C13.0121 0 12.7711 0 10 0Z"
                                      fill="white"/>
                                <path d="M10 4.81928C7.10843 4.81928 4.81928 7.10843 4.81928 10C4.81928 12.8916 7.10843 15.1807 10 15.1807C12.8916 15.1807 15.1807 12.8916 15.1807 10C15.1807 7.10843 12.8916 4.81928 10 4.81928ZM10 13.3735C8.19277 13.3735 6.62651 11.9277 6.62651 10C6.62651 8.19277 8.07229 6.62651 10 6.62651C11.8072 6.62651 13.3735 8.07229 13.3735 10C13.3735 11.8072 11.8072 13.3735 10 13.3735Z"
                                      fill="white"/>
                                <path d="M15.3012 5.90362C15.9666 5.90362 16.506 5.3642 16.506 4.6988C16.506 4.03339 15.9666 3.49398 15.3012 3.49398C14.6358 3.49398 14.0964 4.03339 14.0964 4.6988C14.0964 5.3642 14.6358 5.90362 15.3012 5.90362Z"
                                      fill="white"/>
                            </svg>
                        </a>
                        <a href="#">
                            <svg width="12" height="23" viewBox="0 0 12 23" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.65708 12.3648H11.3793L11.9637 8.56055H7.65632V6.48134C7.65632 4.90099 8.16957 3.49962 9.63891 3.49962H12V0.179741C11.5852 0.123382 10.7078 0 9.04996 0C5.58819 0 3.55867 1.8393 3.55867 6.0297V8.56055H0V12.3648H3.55867V22.821C4.26344 22.9276 4.97729 23 5.71007 23C6.37245 23 7.01893 22.9391 7.65708 22.8522V12.3648Z"
                                      fill="white"/>
                            </svg>
                        </a>
                        <a href="#">
                            <svg width="14" height="23" viewBox="0 0 14 23" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.2376 13.7928C13.7624 13.2681 13.8373 12.5185 13.3876 11.7689C13.0128 11.1692 12.3381 10.8694 11.5885 11.0193C11.2887 11.0942 10.9888 11.2442 10.689 11.469C8.36517 13.0432 5.21682 12.9683 2.89303 11.3941C2.7431 11.3191 2.59318 11.2442 2.44325 11.1692C1.61868 10.7944 0.794122 10.9443 0.344356 11.6939C-0.180371 12.4435 -0.105419 13.2681 0.56923 13.9428C0.719152 14.0927 0.869074 14.1676 0.944035 14.3176L1.019 14.3925C2.06845 15.2171 3.34279 15.7418 4.99194 15.9667L4.01744 16.9412C3.19287 17.7658 2.29334 18.6653 1.46877 19.4899C1.24389 19.7148 0.944035 20.0896 0.944035 20.6143C0.944035 21.2889 1.31885 21.9636 1.9935 22.2634C2.21838 22.4133 2.44326 22.4133 2.66814 22.4133C3.04295 22.4133 3.49271 22.2634 3.79256 21.8886C4.91697 20.7642 5.81651 19.8647 6.71604 18.9651C6.791 18.8902 6.791 18.8902 6.791 18.8902C6.791 18.8902 6.86596 18.8902 6.86596 18.9651C7.46565 19.6398 8.1403 20.2395 8.73999 20.9141C9.03983 21.214 9.33967 21.5138 9.63952 21.8137C10.0143 22.1885 10.3142 22.3384 10.7639 22.3384C11.4386 22.4134 12.1882 21.9636 12.488 21.2889C12.7879 20.6892 12.638 19.9396 12.1132 19.4899C11.3636 18.7403 10.614 17.9157 9.78944 17.1661L8.5151 15.8917C9.18975 15.8168 9.93936 15.6669 10.614 15.367C11.7384 14.9922 12.563 14.4675 13.2376 13.7928Z"
                                      fill="white"/>
                                <path d="M6.79099 11.6939C10.0143 11.6939 12.638 9.14524 12.638 5.92191C12.638 4.34773 12.0383 2.84852 10.9138 1.72411C9.78943 0.59969 8.36518 0 6.86596 0C3.64264 0 1.09396 2.62363 1.019 5.77199C1.019 7.34618 1.61869 8.77043 2.7431 9.89485C3.79256 11.0942 5.21681 11.6939 6.79099 11.6939ZM5.14185 4.19782C5.59162 3.74805 6.19131 3.52316 6.79099 3.52316C8.14029 3.52316 9.11479 4.57262 9.11479 5.84696C9.11479 7.19626 8.06533 8.17074 6.79099 8.17074C5.4417 8.17074 4.46721 7.1213 4.46721 5.84696C4.46721 5.24727 4.69209 4.64759 5.14185 4.19782Z"
                                      fill="white"/>
                                <path d="M13.2376 13.7928C13.7624 13.2681 13.8373 12.5185 13.3876 11.7689C13.0128 11.1692 12.3381 10.8694 11.5885 11.0193C11.2887 11.0942 10.9888 11.2442 10.689 11.469C8.36517 13.0432 5.21682 12.9683 2.89303 11.3941C2.7431 11.3191 2.59318 11.2442 2.44325 11.1692C1.61868 10.7944 0.794122 10.9443 0.344356 11.6939C-0.180371 12.4435 -0.105419 13.2681 0.56923 13.9428C0.719152 14.0927 0.869074 14.1676 0.944035 14.3176L1.019 14.3925C2.06845 15.2171 3.34279 15.7418 4.99194 15.9667L4.01744 16.9412C3.19287 17.7658 2.29334 18.6653 1.46877 19.4899C1.24389 19.7148 0.944035 20.0896 0.944035 20.6143C0.944035 21.2889 1.31885 21.9636 1.9935 22.2634C2.21838 22.4133 2.44326 22.4133 2.66814 22.4133C3.04295 22.4133 3.49271 22.2634 3.79256 21.8886C4.91697 20.7642 5.81651 19.8647 6.71604 18.9651C6.791 18.8902 6.791 18.8902 6.791 18.8902C6.791 18.8902 6.86596 18.8902 6.86596 18.9651C7.46565 19.6398 8.1403 20.2395 8.73999 20.9141C9.03983 21.214 9.33967 21.5138 9.63952 21.8137C10.0143 22.1885 10.3142 22.3384 10.7639 22.3384C11.4386 22.4134 12.1882 21.9636 12.488 21.2889C12.7879 20.6892 12.638 19.9396 12.1132 19.4899C11.3636 18.7403 10.614 17.9157 9.78944 17.1661L8.5151 15.8917C9.18975 15.8168 9.93936 15.6669 10.614 15.367C11.7384 14.9922 12.563 14.4675 13.2376 13.7928Z"
                                      fill="white"/>
                            </svg>
                        </a>
                        <a href="#">
                            <svg width="22" height="14" viewBox="0 0 22 14" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.9825 14C4.46596 14 0.178638 8.74474 0 0H3.76515C3.88882 6.41842 6.66459 9.13714 8.86321 9.6977V0H12.4085V5.53553C14.5796 5.2973 16.8607 2.77477 17.6302 0H21.1755C20.8855 1.43908 20.3075 2.80165 19.4776 4.0025C18.6477 5.20335 17.5837 6.21663 16.3523 6.97898C17.7269 7.67555 18.941 8.6615 19.9145 9.87175C20.888 11.082 21.5988 12.489 22 14H18.0974C17.7373 12.6876 17.0054 11.5128 15.9934 10.6228C14.9814 9.73284 13.7343 9.16727 12.4085 8.997V14H11.9825V14Z"
                                      fill="white"/>
                            </svg>
                        </a>
                    </div>
                    <a class="mob-header-contacts__link" href="tel:+7(4812)353306">+7 (4812) 35-33-06</a>
                    <a class="mob-header-contacts__link" href="tel:+7(4812)643878">+7 (4812) 64-38-78</a>
                    <a class="mob-header-contacts__link" href="tel:+7(9 15)6300342">+7 (915) 630-03-42</a>
                </div>
            </div>
        </div>
    </section>
</header>
