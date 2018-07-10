@include('header', ['css_link_name' => 'news', 'other_css' => 'news-list'])
<link rel="stylesheet" href="/css/iconfont.css">
<body>
<!-- banner -->
@include('nav')
<!-- banner -->

<div style="position: relative" class="news-img-box">
<!--     <img class="news-img" src="/images/newsList/news-list01.jpg" alt=""> -->

    <div style="position: absolute;top: 0;width: 100%;">
        <div class="container">
            <div class="link-box">
                <div class="link-box-item">
                	   <a href="https://t.me/HNB_Announcement" target="_blank">
                    <h3 class="link-title link-content-active">Telegram</h3>
                    <p class="link-content link-content-active">https://t.me/HNB_Announcement</p>
                    </a>
                </div>
                <div class="link-box-item">
                    <a href="https://www.reddit.com/user/HNB_eco" target="_blank">
                    <h3 class="link-title">Reddit</h3>
                    <p class="link-content">https://www.reddit.com/user/HNB_eco</p>
                    </a>
                </div>
                <div class="link-box-item">
                    <a href="https://discord.gg/MK3D8uj" target="_blank">
                    <h3 class="link-title">Discord</h3>
                    <p class="link-content">https://discord.gg/MK3D8uj</p>
                    </a>
                </div>
                <div class="link-box-item">
                		<a href="https://github.com/hnb-ECO" target="_blank">
                    <h3 class="link-title">Github</h3>
                    <p class="link-content">https://github.com/hnb-ECO</p>
                    </a>
                </div>
                <div class="link-box-item">
                    <a href="https://twitter.com/HNB_ECO" target="_blank">
                    <h3 class="link-title">Twitter</h3>
                    <p class="link-content">https://twitter.com/HNB_ECO</p>
                    </a>
                </div>
                <div class="link-box-item">
                		<a href="https://medium.com/@hnb.eco" target="_blank">
                    <h3 class="link-title">Medium</h3>
                    <p class="link-content">https://medium.com/@hnb.eco</p>
                    </a>
                </div>
				<div class="link-box-item">
                		<a href="http://weibo.com/HNBECO" target="_blank">
                    <h3 class="link-title">Weibo</h3>
                    <p class="link-content">http://weibo.com/HNBECO</p>
                    </a>
                </div>
            </div>

            <div class="position-img">
                <div class="position-img01">
                    <img src="/images/newsList/news-list03.png" alt="">
                </div>
                <div class="position-img02">
                    <img src="/images/newsList/news-list04.png" alt="">
                </div>
            </div>

        </div>
    </div>
</div>
<div class="middle-content-box">
    <div class="content-center">
        News <span>update</span>
    </div>
</div>



<div class="more-story">
    <div class="container">
        <div class="more-story-box">
            @if (!empty($result))
                @foreach ($result as $info)
            <div class="more-story1 more-story-item col-xs-12 col-sm-12 col-md-4 col-lg-4" style="flex: none;">
                <a href="/news/about_news/{{$info['ID']}}">
                    <div class="more-story-item-box">

                        <img src="@if (empty($info['attachment'])) /images/newDetail/news02.jpg  @else {{$info['attachment']}} @endif" alt="" style="height:201px">
                        <div class="text-box">
                            <h2>{{$info['post_title']}}</h2>
                            <span>{!! mb_strimwidth(strip_tags($info['post_content']), 0, 200) !!}</span>
                            <div class="tag-box">
                                <span class="time">{{ date("Y.m.d", strtotime($info['post_modified'])) }}</span>
                                <span class="time name">BY:HNB</span>
                                <span class="more-text">more</span>
                            </div>
                        </div>

                    </div>
                </a>
            </div>
                @endforeach
            @endif
                    <!--
                    <div class="more-story1 more-story-item">
                            <a href="/news/about_news/1">
                        <div class="more-story-item-box">

                            <img src="/images/newDetail/news_detail01.jpg" alt="" style="height:201px">
                            <div class="text-box">
                                <h2>Next Generation Decentralized Economic Model 「HBN」 debuted in 「Top 100 Blockchainers Forum」
                                </h2>
                                <span>
                                On June 21st, Benrui Capital and KeXiang Group successfully held the first Blockchain Forum at InnoSpace, Shanghai. Attendees include blockchain industry leaders, experts, scholars, geeks, and institutional investors. Speakers shared the cutting...
                            </span>
                                <div class="tag-box">
                                    <span class="time">2018.06.23</span>
                                    <span class="time name">BY:HNB</span>
                                    <span class="more-text">more</span>
                                </div>
                            </div>

                        </div>
                        </a>
                    </div>
                    <div class="more-story2 more-story-item">
                            <a href="/news/about_news/2">
                        <div class="more-story-item-box">
                            <img src="/images/newDetail/news03.jpg" alt="">
                            <div class="text-box">
                                <h2>HNB meets Ms Jeffer Rocco, CEO of POBC, at Shangri-La, Toronto
                                </h2>
                                <span>
                                 Ms. Jennifer has briefly introduced POBC and its achievements reached in past 18 months. POBC, as an aggressive and dynamic PR company, has strong influence in North America, not only established direct link with Mr. Vitalik Buterin...
                            </span>
                                <div class="tag-box">
                                    <span class="time">2018.06.21</span>
                                    <span class="time name">BY:HNB</span>
                                    <span class="more-text">more
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="more-story3 more-story-item" style="margin-right: 0;">
                        <a href="/news/about_news/3">
                        <div class="more-story-item-box">
                            <img src="/images/newDetail/news04.jpg" alt="">
                            <div class="text-box">
                                <h2>Conference with FBG Capital and MeiHua Token Fund
                                </h2>
                                <span>
                                It was a pleasure to join the conference held by FBG Capital and MeiHua Token fund, our strategic advisor Mr. Ken shared the project insights with Mr. Yue from MeiHua Token Fund! We will share more information in the upcoming period, stay tuned!
                                    </span>
                                <div class="tag-box">
                                    <span class="time">2018.06.19</span>
                                    <span class="time name">BY:HNB</span>
                                    <span class="more-text">more</span>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    -->
        </div>

        <div class="pagination-box">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li>
                        <a href="/news/list/@if ($page == 1)1 @else{{$page-1}}@endif" aria-label="Previous">
                            <span aria-hidden="true">PREV</span>
                        </a>
                    </li>
                    <li><a href="/news/list/1">Index</a></li>
                    {{--<li><a href="#">2</a></li>--}}
                    {{--<li><a href="#">3</a></li>--}}
                    {{--<li><a href="#">4</a></li>--}}
                    <li><a href="/news/list/{{ $total_page }}">End</a></li>
                    <li>
                        <a href="/news/list/@if ($page == $total_page){{$total_page}} @else{{$page+1}} @endif" aria-label="Next">
                            <span aria-hidden="true">NEXT</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>
</div>
<!-- footer -->
@include('footer')
</body>
</html>