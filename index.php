<?php get_header(); ?>
    <div class="contentsWrap">
        <div class="mainContents">

            <div class="aboutBlock block">
                <div class="banners">
                    <ul>
                        <li><a href="about.html"><img src="<?php echo get_template_directory_uri(); ?>/images/home/bnr_about.png" height="97" width="320" alt="ホテル紹介"></a></li>
                        <li><a href="access.html"><img src="<?php echo get_template_directory_uri(); ?>/images/home/bnr_access.png" height="97" width="320" alt="アクセス"></a></li>
                    </ul>
                </div>
            </div><!-- /.aboutBlock -->

            <section class="newsBlock block">
                <h1 class="type-B"><span>新着情報</span></h1>

                <article class="news">
                    <div class="text">
                        <div class="entryInfo">
                            <div class="categories">
                                <ul>
                                    <li><a href="#">お知らせ</a></li>
                                </ul>
                            </div>
                            <time datetime="2015-03-22">2015.03.22(sun)</time>
                        </div>
                        <h1><a href="single.html">お花見企画の予約を開始しました</a></h1>
                        <p>
                            今年も恒例のお花見企画を行います。4月11日（土）に当ホテルの中庭にて、お花見をしませんか？
                            毎年、多くのお客さまにご好評を頂いております。
                        </p>
                        <p>[<a href="single.html">続きを読む</a>]</p>
                    </div>
                    <figure><a href="single.html"><img src="<?php echo get_template_directory_uri(); ?>/images/dummy/180x180-3.png" height="180" width="180" alt=""></a></figure>
                </article><!-- /.news -->

                <article class="news">
                    <div class="text">
                        <div class="entryInfo">
                            <div class="categories">
                                <ul>
                                    <li><a href="#">コラム</a></li>
                                </ul>
                            </div>
                            <time datetime="2015-02-14">2015.02.14(sat)</time>
                        </div>
                        <h1><a href="single.html">バレンタイン企画を行います</a></h1>
                        <p>
                            本日はバレンタインデーですね。当ホテルでもバレンタイン企画を行います。
                            ディナーをご予約されたお客さま限定で特別コースをご提供させて頂きます。
                        </p>
                        <p>[<a href="single.html">続きを読む</a>]</p>
                    </div>
                    <figure><a href="single.html"><img src="<?php echo get_template_directory_uri(); ?>/images/dummy/180x180-2.png" height="180" width="180" alt=""></a></figure>
                </article><!-- /.news -->

                <article class="news">
                    <div class="text">
                        <div class="entryInfo">
                            <div class="categories">
                                <ul>
                                    <li><a href="#">お知らせ</a></li>
                                </ul>
                            </div>
                            <time datetime="2015-01-02">2015.01.02(fri)</time>
                        </div>
                        <h1><a href="single.html">今年も宜しくお願いいたします</a></h1>
                        <p>
                            新年明けましておめでとうございます。今年もホテル・技評リゾート石垣島を何卒よろしくお願いいたします。
                            スタッフ一同、心よりお待ちしております。
                        </p>
                        <p>[<a href="single.html">続きを読む</a>]</p>
                    </div>
                    <figure><a href="single.html"><img src="<?php echo get_template_directory_uri(); ?>/images/dummy/180x180-1.png" height="180" width="180" alt=""></a></figure>
                </article><!-- /.news -->

            </section><!-- /.newsBlock -->

        </div><!-- /.mainContents -->
        <aside class="subContents">
        <?php get_sidebar(); ?>
        </aside><!-- /.subContents -->
    </div><!-- /.contentsWrap -->
    <?php get_footer(); ?>
