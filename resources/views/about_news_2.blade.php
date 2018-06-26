@include('header', ['css_link_name'=>'news'])
<body>
<!-- banner -->
@include('nav')
<!--detail-->
<!-- <div> -->
<!--     <img class="news-img" src="@if (!empty($eq_data['attachment'])) {{ $eq_data['attachment'] }} @else /images/newDetail/news02.jpg @endif" alt=""> -->
<!-- </div> -->

<div class="new-detail-img-box">
</div>

<!-- <div> -->
<!--     <div class="container"> -->
<!--         <div class="news-box"> -->
<!--             <div class="news-left1"> -->
<!--                 <div class="new-left1-icon-box"> -->
<!--                     <div> -->
<!--                         <img src="/images/newDetail/news05.jpg" alt=""> -->
<!--                     </div> -->
<!--                     <div> -->
<!--                         <img src="/images/newDetail/news06.jpg" alt=""> -->
<!--                     </div> -->
<!--                     <div> -->
<!--                         <img src="/images/newDetail/news07.jpg" alt=""> -->
<!--                     </div> -->
<!--                     <div> -->
<!--                         <img src="/images/newDetail/news08.jpg" alt=""> -->
<!--                     </div> -->
<!--                     <div> -->
<!--                         <img src="/images/newDetail/news09.jpg" alt=""> -->
<!--                     </div> -->
<!--                 </div> -->
<!--             </div> -->
<!--             <div class="news-left2"> -->
<!--                 <h2>@if(!empty($eq_data['post_title'])){{$eq_data['post_title']}}@endif</h2> -->
<!--                 <div class="news-left2-content"> -->
<!--                     @if(!empty($eq_data['post_content'])){!! $eq_data['post_content'] !!}@endif  -->
<!--                 </div> -->
<!--             </div> -->
<!--             <div class="news-left3"> -->
<!--                 <div class="news-left3-content-bpx"> -->
<!--                 <h2>Related reading</h2> -->
<!--                 @if (!empty($gt_data)) -->
<!--                    @foreach($gt_data as $key=>$info) -->
<!--                     @if ($key == 0) -->
<!--                     <a href="/news/about_news/{{$info['ID']}}"> -->
<!--                     <img src="@if (!empty($info['attachment'])){{$info['attachment']}}@endif" alt=""> -->
<!--                     </a> -->
<!--                     @else -->
<!--                     <h2><a href="/news/about_news/{{$info['ID']}}">{{$info['post_title']}}</a></h2> -->
<!--                     <span>{{mb_strimwidth(strip_tags($info['post_content']), 0, 100)}}</span> -->
<!--                     @endif -->
<!--                     @endforeach -->
<!--                 @endif -->
<!--                 </div> -->
<!--             </div> -->
<!--         </div> -->
<!--     </div> -->
<!-- </div> -->
<!-- <div class="middle-content-box"> -->
<!--     <div class="content-center"> -->
<!--         MORE <span>STORY</span> -->
<!--     </div> -->
<!-- </div> -->
<!-- <div class="more-story"> -->
<!--     <div class="container"> -->
<!--         <div class="more-story-box"> -->
<!--         		 @if (!empty($lt_data)) -->
<!--                    @foreach($lt_data as $key=>$info) -->
<!--             <div class="more-story1 more-story-item"> -->
<!--                 <img src="@if (!empty($info['attachment'])) {{$info['attachment']}} @else /images/newDetail/news02.jpg @endif" alt=""> -->
<!--                 <div class="text-box"> -->
<!--                     <h2>{{$info['post_title']}}</h2> -->
<!--                     <span> -->
<!--                         {{mb_strimwidth(strip_tags($info['post_content']), 0, 100)}} -->
<!--                     </span> -->
<!--                     <div class="tag-box"> -->
<!--                         <span class="time">{{$info['post_modified']}}</span> -->
<!--                         <span class="time name">BY:HNB</span> -->
<!--                         <span class="more-text"><a href="/news/about_news/{{$info['ID']}}">more</a></span> -->
<!--                     </div> -->
<!--                 </div> -->
<!--             </div> -->
<!--             @endforeach -->
<!--          @endif -->
<!--         </div> -->

<!--     </div> -->

<!-- </div> -->


<div>
    <div class="container">
        <div class="news-box">
            <div class="news-left1">
<!--                 <div class="new-left1-icon-box"> -->
<!--                     <div> -->
<!--                         <img src="/images/newDetail/news05.jpg" alt=""> -->
<!--                     </div> -->
<!--                     <div> -->
<!--                         <img src="/images/newDetail/news06.jpg" alt=""> -->
<!--                     </div> -->
<!--                     <div> -->
<!--                         <img src="/images/newDetail/news07.jpg" alt=""> -->
<!--                     </div> -->
<!--                     <div> -->
<!--                         <img src="/images/newDetail/news08.jpg" alt=""> -->
<!--                     </div> -->
<!--                     <div> -->
<!--                         <img src="/images/newDetail/news09.jpg" alt=""> -->
<!--                     </div> -->
<!--                 </div> -->
            </div>
            <div class="news-left2">
                <h2>Next Generation Decentralized Economic Model 「HBN」 debuted in 「Top 100 Blockchainers Forum」</h2>
                <div class="news-left2-content">
                <p>
                Ms. Jennifer has briefly introduced POBC and its achievements reached in past 18 months. POBC, as an aggressive and dynamic PR company, has strong influence in North America, not only established direct link with Mr. Vitalik Buterin, co-founder of Ethereum and Bitcoin Magazine. and also has a wide connection with blockchain incubators and projects. They are sharp on the new social trend and cutting edge of technology.
                </p>
                <p>
                HNB CANADA TEAM, Alen Wu and Hanson Gao, has introduced the latest progress of HNB project from technological and business model perspective.
                </p>
                <p>
                HNB is different from projects in North America with broader international view. Most local projects are usually focused on the technology side and give a detailed solution to specific inititaive. HNB is providing a creative eco system model to whole blockchain industry with a self-developing, self-creating and self-improving framework.
                </p>
                <p>
                POBC and HNB reached tentative agreement on collaboration to push blockchain forward in North America. Two theme summits are planned within 10 months. The first theme is Barrel and Blockchain, which will be held at Niagara Falls area. The second theme is Blockchain and Bay, which will be located on Blue Mountain. A number of events will be set upon in Great Toronto Area (GTA). The events covers from casual wine tasting meets up to academicals seminars.
                </p>
                </div>
            </div>
            <div class="news-left3">
<!--                 <div class="news-left3-content-bpx"> -->
<!--                     <div class="news-list"> -->
<!--                         <h2>Related reading</h2> -->
<!--                         <div class="img"> -->
<!--                             <img src="/images/newDetail/news01.jpg" alt=""> -->
<!--                         </div> -->
<!--                     </div> -->
<!--                     <div class="news-list"> -->
<!--                         <h2>Research</h2> -->
<!--                         <span>Blockchain technology offers a fundamentally streamlined</span> -->
<!--                     </div> -->
<!--                     <div class="news-list"> -->
<!--                         <h2>Research</h2> -->
<!--                         <span>Blockchain technology offers a fundamentally streamlined</span> -->
<!--                     </div> -->
<!--                     <div class="news-list"> -->
<!--                         <h2>Research</h2> -->
<!--                         <span>Blockchain technology offers a fundamentally streamlined</span> -->
<!--                     </div> -->
<!--                 </div> -->
            </div>
        </div>


    </div>

</div>

<div class="middle-content-box">
    <div class="content-center">
        More <span>Stories</span>
    </div>
</div>

<div class="more-story">
	<div class="container">
		<div class="more-story-box">
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
        </div>
	</div>
</div>
<!-- //Team -->
<!-- footer -->
@include('footer')
</body>
</html>
