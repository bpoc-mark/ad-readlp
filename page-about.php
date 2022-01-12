<?php

/* Template Name: About Page */

get_header(); ?>
<div class="page_about">
    <div class="p-jumbotron">
        <div class="l-wrap">
            <p class="p-jumbotron__sub">
                リードについて
            </p>
            <p class="p-jumbotron__main">
                About
            </p>
            <?php if (function_exists('aioseo_breadcrumbs')) aioseo_breadcrumbs(); ?>
            <div class="c-buttonContact u-d-n-sp">
                <a href="" class="c-buttonContact__link">
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/contact_btn_arrow.svg" alt="">
                    Contact
                </a>
            </div>
        </div>
    </div>
    <section class="sect-1">
        <div class="l-wrap">
            <div class="row">
                <div class="col">
                    <h3 class="col--ttl">
                        私たちが導き出すのは、<br class="u-d-n-sp">
                        それぞれの企業・ブランドの<br class="u-d-n-sp">
                        コミュニケーション戦略の最適解。
                    </h3>
                    <p class="col--desc">
                        多様性が尊重されるこの時代。<br>
                        答えは企業によってブランドによって違います。<br class="u-d-n-sp">
                        一年前の正解が、今では不正解ということもあります。<br>
                        <br>
                        だからこそ私たちは一つの答えに執着するのではなく、<br class="u-d-n-sp">
                        その企業・ブランドに相応しいコミュニケーションを模索します。<br>
                        <br>
                        リードが広告を通して叶えたいのは、<br class="u-d-n-sp">
                        世の中を正すとか、<<br class="u-d-n-sp">
                            一方向の正義を振りかざすとか、<br class="u-d-n-sp">
                            そんな大それたことではありません。<br>
                            <br>
                            「悩んでいる人の背中をそっと押してあげる」とか、<br class="u-d-n-sp">
                            「明日が来るのが少しだけ楽しみになる」とか、<br class="u-d-n-sp">
                            そんな小さな変化やきっかけを持ってもらうこと。<br>
                            <br>
                            悩みを解決し、不安を振り払うことで、明るい未来が見られるよう、<br class="u-d-n-sp">
                            これからも人の感情を動かす最適解を創っていきます。
                    </p>
                </div>
                <div class="col">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/pages/about/sect_1/img_1.png" alt="私たちが導き出すのは、それぞれの企業・ブランドのコミュニケーション戦略の最適解。">
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section class="sect-2">
        <div class="l-wrap">
            <div class="c-card01">
                <h3 class="c-card01--ttl">最適解を導くリードの特徴</h3>
                <div class="row">
                    <div class="col">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/pages/about/sect_2/img_1.jpg" alt="クライアントの悩み・課題を明確化するヒアリング力。">
                        </figure>
                    </div>
                    <div class="col">
                        <h3 class="col--ttl">
                            クライアントの悩み・課題を<br class="u-d-n-sp">
                            明確化するヒアリング力。
                        </h3>
                        <p class="col--desc">
                            この業界だからこう、この企業だからこう、私たちはそういった先入観をまず無くすことを大切にしています。なぜなら、企業・ブランドによってその悩み・課題はさまざまだから。<br>
                            成功のスタート地点には、必ず悩み・課題の発見があります。リードでは、まず徹底したヒアリングを行うことで、解決すべきポイントを明確にします。
                        </p>
                        <!-- <button class="c-buttonRight">
                            <a href=""><span class="jp_txt">実績を見る</span></a>
                            <span><img src="<?php echo get_template_directory_uri(); ?>/release/image/read_morebigger.svg" alt=""></span>
                        </button> -->
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/pages/about/sect_2/img_2.jpg" alt="マーケティングを土台にした最適な広告設計。">
                        </figure>
                    </div>
                    <div class="col">
                        <h3 class="col--ttl">
                            マーケティングを土台にした<br class="u-d-n-sp">
                            最適な広告設計。
                        </h3>
                        <p class="col--desc">
                            社会の急激なデジタル化によって、これまでの広告で当たり前だった「型」が通用しなくなっています。そんな時、成功への確かな指針となるのが確かなマーケティング力です。<br>
                            リードでは、定量・定性の両面において、的確なマーケティングを実施。その結果をもとに、それぞれの企業・ブランドにとって最適な広告設計を行います。
                        </p>
                        <button class="c-buttonRight">
                            <a href="<?php echo get_permalink(get_page_by_path('business')) ?>"><span class="jp_txt">事業領域を見る</span></a>
                            <span><a href="<?php echo get_permalink(get_page_by_path('business')) ?>"><img src="<?php echo get_template_directory_uri(); ?>/release/image/read_morebigger.svg" alt=""></a></span>
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/pages/about/sect_2/img_3.jpg" alt="15年で培ってきたデータ・ノウハウをもとにした分析・提案。">
                        </figure>
                    </div>
                    <div class="col">
                        <h3 class="col--ttl">
                            15年で培ってきた<br class="u-d-n-sp">
                            データ・ノウハウをもとにした<br class="u-d-n-sp">
                            分析・提案。
                        </h3>
                        <p class="col--desc">
                            美容広告を中心に、さまざまな業界・業種における豊富な経験がリードにはあります。そんな15年以上にわたって培われたデータ・ノウハウをもとにした分析・提案も私たちの大きな強み。<br>
                            失敗を知っているからこそわかる成功へのアプローチで、企業・ブランドの価値向上をお手伝いします。
                        </p>
                        <button class="c-buttonRight">
                            <a href="<?php echo get_permalink(get_page_by_path('company')) ?>"><span class="jp_txt">リードについて見る</span></a>
                            <span><a href="<?php echo get_permalink(get_page_by_path('company')) ?>"><img src="<?php echo get_template_directory_uri(); ?>/release/image/read_morebigger.svg" alt=""></a></span>
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/pages/about/sect_2/img_4.jpg" alt="実施→分析の繰り返しで常に改善策をブラッシュアップ。">
                        </figure>
                    </div>
                    <div class="col">
                        <h3 class="col--ttl">
                            実施→分析の繰り返しで<br class="u-d-n-sp">
                            常に改善策をブラッシュアップ。
                        </h3>
                        <p class="col--desc">
                            リードのゴールは、広告の実施ではありません。私たちが目指すのは、企業・ブランドの価値をより正確により深く伝えること。そのために必要なのは、実施した施策の正確な効果測定です。<br>
                            その分析データをもとに課題を抽出し、次回以降の改善策のブラッシュアップへとつなげていきます。
                        </p>
                        <button class="c-buttonRight">
                            <a href="<?php echo get_permalink(get_page_by_path('contact')) ?>"><span class="jp_txt">問い合わせる</span></a>
                            <span><a href="<?php echo get_permalink(get_page_by_path('contact')) ?>"><img src="<?php echo get_template_directory_uri(); ?>/release/image/read_morebigger.svg" alt=""></a></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sect_3">
        <div class="l-wrap">
            <div class="c-card01">
                <h3 class="c-card01--ttl">事業領域</h3>
                <p class="c-card01--desc">
                    企業・ブランドを成功へと導く、リードによる「最適解」。<br>
                    5つの事業領域を軸に、オフラインとオンラインをクロスさせながらビジネスの成功をトータルに支援します。
                </p>
                <div class="c-card">
                    <div class="c-card--col3">
                        <div class="c-card--col3__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/pages/about/sect_3/img_1.jpg" alt="ブランディング">
                            <span class="c-card--col3__num">01</span>
                        </div>
                        <h3 class="c-card--col3__title">ブランディング</h3>
                        <p class="c-card--col3__desc">サービス・プロダクトの企画段階から、ネーミングやコンセプトメイク、デザインなどのクリエイティブを提案します。</p>
                    </div>
                    <div class="c-card--col3">
                        <div class="c-card--col3__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/pages/about/sect_3/img_2.jpg" alt="ダイレクトマーケティング">
                            <span class="c-card--col3__num">02</span>
                        </div>
                        <h3 class="c-card--col3__title">ダイレクトマーケティング</h3>
                        <p class="c-card--col3__desc">数多くの実績から導き出した「勝ちパターン」をもとに、ターゲティング、セグメント、媒体選定など効果的なダイレクトマーケティングを実施します。</p>
                    </div>
                    <div class="c-card--col3">
                        <div class="c-card--col3__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/pages/about/sect_3/img_3.jpg" alt="デジタルプロモーション">
                            <span class="c-card--col3__num">03</span>
                        </div>
                        <h3 class="c-card--col3__title">デジタルプロモーション</h3>
                        <p class="c-card--col3__desc">WEB広告をはじめとした最適なプロモーションによって、生活者と密接につながるためのデジタルソリューションを提案します。</p>
                    </div>
                    <div class="c-card--col3">
                        <div class="c-card--col3__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/pages/about/sect_3/img_4.jpg" alt="メディアプランニング">
                            <span class="c-card--col3__num">04</span>
                        </div>
                        <h3 class="c-card--col3__title">メディアプランニング</h3>
                        <p class="c-card--col3__desc">ターゲットとのタッチポイントを見極めながら、効果的な広告先を選定。また、海外進出に向けたアウトバウンドマーケティングもおまかせください。</p>
                    </div>
                    <div class="c-card--col3">
                        <div class="c-card--col3__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/pages/about/sect_3/img_5.jpg" alt="映像クリエイティブ">
                            <span class="c-card--col3__num">05</span>
                        </div>
                        <h3 class="c-card--col3__title">映像クリエイティブ</h3>
                        <p class="c-card--col3__desc">キャスティング、動画制作、動画広告プランニング、動画広告運用まで一気通貫で行います。それぞれの課題解決に向けて最適なプランニングを提供します。</p>
                    </div>
                </div>
            </div>
            <button class="c-buttonRight">
                <a href=""><span class="jp_txt">会社概要を見る</span></a>
                <span><img src="<?php echo get_template_directory_uri(); ?>/release/image/read_morebigger.svg" alt=""></span>
            </button>
        </div>
    </section>
</div>
<?php get_footer(); ?>