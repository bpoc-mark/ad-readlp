<?php get_header(); ?>
<div class="top">
    <section class="page__banner">
        <div class="page__inner">

            <?php for ($i = 0; $i < 35; $i++) : ?>
                <!-- <div class="blob-1 blob">
                    <svg viewBox="0 0 800 500" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" id="blobSvg">
                        <g transform="translate(161.6985969543457, 1.5491628646850586)">
                            <defs>
                                <clipPath id="shape">
                                    <path fill="red">
                                        <animate attributeName="d" dur="4000ms" repeatCount="indefinite" values="M453,294Q448,338,416.5,369Q385,400,352,430.5Q319,461,272.5,470.5Q226,480,177.5,469.5Q129,459,90.5,426.5Q52,394,48.5,344Q45,294,28,246.5Q11,199,32,153Q53,107,97.5,85Q142,63,184.5,47.5Q227,32,271,41Q315,50,357.5,66.5Q400,83,438.5,116Q477,149,467.5,199.5Q458,250,453,294Z;
                                    
                                    M458.5,296Q457,342,427,377.5Q397,413,362,449.5Q327,486,277,477.5Q227,469,179.5,461.5Q132,454,94,422.5Q56,391,32,346Q8,301,28.5,254Q49,207,57.5,161.5Q66,116,99,81Q132,46,178.5,28Q225,10,276,11.5Q327,13,361.5,50.5Q396,88,415.5,128Q435,168,447.5,209Q460,250,458.5,296Z;
                                    
                                    M482.5,299.5Q473,349,429.5,375Q386,401,355.5,441.5Q325,482,276,474.5Q227,467,185.5,450Q144,433,110,405Q76,377,45.5,338.5Q15,300,29,253Q43,206,52.5,159.5Q62,113,103.5,90Q145,67,186.5,55.5Q228,44,275,37Q322,30,360,58Q398,86,435,118.5Q472,151,482,200.5Q492,250,482.5,299.5Z;

                                    M481,298Q466,346,429,377Q392,408,359.5,447.5Q327,487,277.5,473Q228,459,184.5,448.5Q141,438,110,406.5Q79,375,56.5,335.5Q34,296,20,247Q6,198,31,153.5Q56,109,94,77.5Q132,46,179,34.5Q226,23,275,23Q324,23,369.5,45Q415,67,428,116Q441,165,468.5,207.5Q496,250,481,298Z;
                                    
                                    M453,294Q448,338,416.5,369Q385,400,352,430.5Q319,461,272.5,470.5Q226,480,177.5,469.5Q129,459,90.5,426.5Q52,394,48.5,344Q45,294,28,246.5Q11,199,32,153Q53,107,97.5,85Q142,63,184.5,47.5Q227,32,271,41Q315,50,357.5,66.5Q400,83,438.5,116Q477,149,467.5,199.5Q458,250,453,294Z">

                                        </animate>
                                    </path>
                                </clipPath>
                            </defs>

                        </g>
                    </svg>
                </div> -->

                <div class="blob-1 blob">
                    <svg viewBox="0 0 800 500" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" id="blobSvg">
                        <g transform="translate(161.6985969543457, 1.5491628646850586)">
                            <path fill="#f9f9f9">
                                <animate attributeName="d" dur="7000ms" repeatCount="indefinite" values="M453,294Q448,338,416.5,369Q385,400,352,430.5Q319,461,272.5,470.5Q226,480,177.5,469.5Q129,459,90.5,426.5Q52,394,48.5,344Q45,294,28,246.5Q11,199,32,153Q53,107,97.5,85Q142,63,184.5,47.5Q227,32,271,41Q315,50,357.5,66.5Q400,83,438.5,116Q477,149,467.5,199.5Q458,250,453,294Z;
                                    
                                    M458.5,296Q457,342,427,377.5Q397,413,362,449.5Q327,486,277,477.5Q227,469,179.5,461.5Q132,454,94,422.5Q56,391,32,346Q8,301,28.5,254Q49,207,57.5,161.5Q66,116,99,81Q132,46,178.5,28Q225,10,276,11.5Q327,13,361.5,50.5Q396,88,415.5,128Q435,168,447.5,209Q460,250,458.5,296Z;
                                    
                                    M482.5,299.5Q473,349,429.5,375Q386,401,355.5,441.5Q325,482,276,474.5Q227,467,185.5,450Q144,433,110,405Q76,377,45.5,338.5Q15,300,29,253Q43,206,52.5,159.5Q62,113,103.5,90Q145,67,186.5,55.5Q228,44,275,37Q322,30,360,58Q398,86,435,118.5Q472,151,482,200.5Q492,250,482.5,299.5Z;

                                    M481,298Q466,346,429,377Q392,408,359.5,447.5Q327,487,277.5,473Q228,459,184.5,448.5Q141,438,110,406.5Q79,375,56.5,335.5Q34,296,20,247Q6,198,31,153.5Q56,109,94,77.5Q132,46,179,34.5Q226,23,275,23Q324,23,369.5,45Q415,67,428,116Q441,165,468.5,207.5Q496,250,481,298Z;
                                    
                                    M453,294Q448,338,416.5,369Q385,400,352,430.5Q319,461,272.5,470.5Q226,480,177.5,469.5Q129,459,90.5,426.5Q52,394,48.5,344Q45,294,28,246.5Q11,199,32,153Q53,107,97.5,85Q142,63,184.5,47.5Q227,32,271,41Q315,50,357.5,66.5Q400,83,438.5,116Q477,149,467.5,199.5Q458,250,453,294Z">

                                </animate>
                            </path>
                        </g>
                    </svg>
                </div>
                <div class="blob-2 blob">
                    <svg viewBox="0 0 800 500" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" id="blobSvg">
                        <g transform="translate(135.713134765625, -9.360885620117188)">
                            <path fill="#fff">
                                <animate attributeName="d" dur="7000ms" repeatCount="indefinite" values="M450,300.5Q407,351,370.5,392.5Q334,434,275.5,457Q217,480,175.5,432Q134,384,94.5,345.5Q55,307,63,252Q71,197,81,131.5Q91,66,157,63Q223,60,279.5,61Q336,62,367,108.5Q398,155,445.5,202.5Q493,250,450,300.5Z;
                            
                            M442,314.5Q450,379,401.5,427Q353,475,288.5,454.5Q224,434,169,420.5Q114,407,69,361.5Q24,316,48.5,257Q73,198,100,153Q127,108,174,76.5Q221,45,280,50Q339,55,392,89.5Q445,124,439.5,187Q434,250,442,314.5Z;
                            
                            M438,305Q421,360,385.5,414.5Q350,469,284,470Q218,471,176,427Q134,383,91,346Q48,309,37.5,246.5Q27,184,60,126.5Q93,69,155.5,48Q218,27,284.5,28Q351,29,377,90Q403,151,429,200.5Q455,250,438,305Z;
                            
                            M450,300.5Q407,351,370.5,392.5Q334,434,275.5,457Q217,480,175.5,432Q134,384,94.5,345.5Q55,307,63,252Q71,197,81,131.5Q91,66,157,63Q223,60,279.5,61Q336,62,367,108.5Q398,155,445.5,202.5Q493,250,450,300.5Z">
                            </path>
                        </g>
                    </svg>
                </div>
            <?php endfor; ?>

        </div>
        <div class="l-wrap">
            <h1 class="page__banner--ttl">集まらないと、<br>
                はじまらない。</h1>
            <p class="page__banner--sub">集客カンパニー「リード」</p>
            <div class="floating_contact">
                <img src="<?php echo $filePath; ?>/release/image/contact_btn.svg" alt="">
            </div>
        </div>
    </section>
    <section class="sect_1">
        <div class="l-wrap">
            <div class="sect_1__column">
                <div class="sect_1__column--1">
                    <small class="sect_1__column--1__sml"><span>01 _</span> コンセプト //</small>
                    <h1 class="sect_1__column--1__ttl">Concept</h1>
                </div>
                <div class="sect_1__column--2">
                    <p class="sect_1__column--2__ttl">私たちは、企業・ブランドの課題に<br class="u-d-n-sp">
                        真正面から向き合い、<br class="u-d-n-sp">
                        固い意志と柔らかな発想で<br class="u-d-n-sp">
                        それぞれの「最適解」を導き出します。<br class="u-d-n-sp"></p>
                    <p class="sect_1__column--2__desc">それにより生まれる「伝わるコミュニケーション戦略」で、<br class="u-d-n-sp">
                        生活者の心を動かし、行動を促し、あなたのビジネスの成功を後押しします。</p>
                    <button class="c-buttonRight">
                        <a href="<?php echo get_permalink(get_page_by_path('About')) ?>">READ MORE</a>
                        <span class="s-t-r"><a href="<?php echo get_permalink(get_page_by_path('About')) ?>"><img src="<?php echo get_template_directory_uri(); ?>/release/image/read_morebigger.svg" alt=""></a></span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="sect_2">
        <div class="l-wrap">
            <h2 class="sect_2__ttl">Business</h2>
            <div class="sect_2__content">
                <div class="sect_2__content--1">
                    <small><span>02 _ </span>事業領域 //</small>
                    <p class="sect_2__content--1__ttl">
                        ブランディング、ダイレクトマーケティング、デジタルプロモーション、メディアプランニング、映像クリエイティブ、リードが手がける5つの事業領域。<br class="u-d-n-sp">
                        リードならではの強みを活かし、オフラインとオンラインをクロスさせながらビジネスの成功を支援します。
                    </p>
                </div>
                <div class="sect_2__content--2">
                    <div class="sect_2__content--2__item">
                        <a href="">
                            <figure><img src="<?php echo get_template_directory_uri(); ?>/release/image/pages/top/sect_2_img-1.jpg" alt=""></figure>
                            <p class="sml_ttl"><span></span>ブランディング</p>
                            <a href="<?php echo get_permalink(get_page_by_path('business')) ?>#branding" class="sect_2__content--2__ttl-cont">
                                <h2>Branding</h2>
                                <div class="sect_2__content--2__ttl-cont--img s-t-r">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/arrow-big.svg" alt="">
                                </div>
                            </a>
                            <p class="sect_2__content--2__ttl-cont--desc" id="marketing">サービス・プロダクトの企画段階から、ネーミングやコンセプトメイク、デザイン<br class="u-d-n-sp">などのクリエイティブを提案します。
                            </p>
                        </a>
                    </div>
                    <div class="sect_2__content--2__item">
                        <a href="">
                            <figure><img src="<?php echo get_template_directory_uri(); ?>/release/image/pages/top/sect_2_img-2.jpg" alt=""></figure>
                            <p class="sml_ttl"><span></span>ダイレクトマーケティング</p>
                            <a href="<?php echo get_permalink(get_page_by_path('business')) ?>#marketing" class="sect_2__content--2__ttl-cont">
                                <h2>Marketing</h2>
                                <div class="sect_2__content--2__ttl-cont--img s-t-r">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/arrow-big.svg" alt="">
                                </div>
                            </a>
                            <p class="sect_2__content--2__ttl-cont--desc" id="promotion">数多くの実績から導き出した「勝ちパターン」をもとに、ターゲティング、セグメ<br class="u-d-n-sp">ント、媒体選定など効果的なダイレクトマーケティングを実施します。
                            </p>
                        </a>
                    </div>
                    <div class="sect_2__content--2__item">
                        <a href="">
                            <figure><img src="<?php echo get_template_directory_uri(); ?>/release/image/pages/top/sect_2_img-3.jpg" alt=""></figure>
                            <p class="sml_ttl"><span></span>デジタルプロモーション</p>
                            <a href="<?php echo get_permalink(get_page_by_path('business')) ?>#promotion" class="sect_2__content--2__ttl-cont">
                                <h2>Promotion</h2>
                                <div class="sect_2__content--2__ttl-cont--img s-t-r">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/arrow-big.svg" alt="">
                                </div>
                            </a>
                            <p class="sect_2__content--2__ttl-cont--desc" id="planning">WEB広告をはじめとした最適なプロモーションによって、生活者と密接につな<br class="u-d-n-sp">がるためのデジタルソリューションを提案します。
                            </p>
                        </a>
                    </div>
                    <div class="sect_2__content--2__item">
                        <a href="">
                            <figure><img src="<?php echo get_template_directory_uri(); ?>/release/image/pages/top/sect_2_img-4.jpg" alt=""></figure>
                            <p class="sml_ttl"><span></span>メディアプランニング</p>
                            <a href="<?php echo get_permalink(get_page_by_path('business')) ?>#planning" class="sect_2__content--2__ttl-cont">
                                <h2>Planning</h2>
                                <div class="sect_2__content--2__ttl-cont--img s-t-r">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/arrow-big.svg" alt="">
                                </div>
                            </a>
                            <p class="sect_2__content--2__ttl-cont--desc" id="creative">ターゲットとのタッチポイントを見極めながら、効果的な広告先を選定。また、<br class="u-d-n-sp">海外進出に向けたアウトバウンドマーケティングもおまかせください。
                            </p>
                        </a>
                    </div>
                    <div class="sect_2__content--2__item">
                        <a href="">
                            <figure><img src="<?php echo get_template_directory_uri(); ?>/release/image/pages/top/sect_2_img-5.jpg" alt=""></figure>
                            <p class="sml_ttl"><span></span>映像クリエイティブ</p>
                            <a href="<?php echo get_permalink(get_page_by_path('business')) ?>#creative" class="sect_2__content--2__ttl-cont">
                                <h2>Creative</h2>
                                <div class="sect_2__content--2__ttl-cont--img s-t-r">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/arrow-big.svg" alt="">
                                </div>
                            </a>
                            <p class="sect_2__content--2__ttl-cont--desc">キャスティング、動画制作、動画広告プランニング、動画広告運用まで一気通貫<br class="u-d-n-sp">で行います。それぞれの課題解決に向けて最適なプランニングを提供します。
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>