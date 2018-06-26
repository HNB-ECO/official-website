@include('header', ['css_link_name'=>'news'])
<body>
<!-- banner -->
@include('nav')
<!--detail-->
<!-- <div> -->
<!--     <img class="news-img" src="@if (!empty($eq_data['attachment'])) {{ $eq_data['attachment'] }} @else /images/newDetail/news02.jpg @endif" alt=""> -->
<!-- </div> -->
<div class="new-detail-img-box">
<!--     <img class="news-img" src="/images/newDetail/new_detail_01.jpg" alt=""> -->
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
                <div class="new-left1-icon-box">
                    <div>
                        <img src="/images/newDetail/news05.jpg" alt="">
                    </div>
                    <div>
                        <img src="/images/newDetail/news06.jpg" alt="">
                    </div>
                    <div>
                        <img src="/images/newDetail/news07.jpg" alt="">
                    </div>
                    <div>
                        <img src="/images/newDetail/news08.jpg" alt="">
                    </div>
                    <div>
                        <img src="/images/newDetail/news09.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="news-left2">
                <h2>Build Decentralized Applications Simply Build that Simply Decentralized</h2>
                <div class="news-left2-content">
                    <p>Blockchain technology offers a fundamentally streamlined method of maintaining a secure ledger of
                        transactions compared to a traditional database. Blockchain technology offers a fundamentally
                        streamlined method of maintaining a secure ledger of transactions compared to a traditional
                        database...Blockchain technology off
                        ers a fundamentally streamlined method of maintaining a secure ledger of transactions compared
                        to a traditional database. Blockchain technology offers a fundamentally streamlined method of
                        maintaining a secure ledger of transactions compared to a traditional database...</p>
                    <p>
                        Blockchain technology offers a fundamentally streamlined method of maintaining a secure ledger
                        of transactions compared to a traditional database. Blockchain technology offers a fundamentally
                        streamlined method of maintaining a secure ledger of transactions compared to a traditional
                        database...
                    </p>
                </div>

                <h2 style="margin-top: 16px">Simply Build Decentralized Applications</h2>
                <div class="news-left2-content">
                    <p>Blockchain technology offers a fundamentally streamlined method of maintaining a secure ledger of
                        transactions compared to a traditional database. Blockchain technology offers a fundamentally
                        streamlined method of maintaining a secure ledger of transactions compared to a traditional
                        database...Blockchain technology offers a fundamentally streamlined method of maintaining a
                        secure ledger of transactions compared to a traditional database. Blockchain technology offers a
                        fundamentally streamlined method of maintaining a secure ledger of transactions compared to a
                        traditional database...</p>
                    <p>
                        Blockchain technology offers a fundamentally streamlined method of maintaining a secure ledger
                        of transactions compared to a traditional database. Blockchain technology offers a fundamentally
                        streamlined method of maintaining a secure ledger of transactions compared to a traditional
                        database...
                    </p>
                </div>

            </div>
            <div class="news-left3">
                <div class="news-left3-content-bpx">
                    <div class="news-list">
                        <h2>Related reading</h2>
                        <div class="img">
                            <img src="/images/newDetail/news01.jpg" alt="">
                        </div>
                    </div>
                    <div class="news-list">
                        <h2>Research</h2>
                        <span>Blockchain technology offers a fundamentally streamlined</span>
                    </div>
                    <div class="news-list">
                        <h2>Research</h2>
                        <span>Blockchain technology offers a fundamentally streamlined</span>
                    </div>
                    <div class="news-list">
                        <h2>Research</h2>
                        <span>Blockchain technology offers a fundamentally streamlined</span>
                    </div>
                </div>
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
                    <img src="/images/newDetail/news02.jpg" alt="">
                    <div class="text-box">
                        <h2>Build Decentralized
                            Applications
                            that Simply
                        </h2>
                        <span>
                        Blockchain technology offers a fundamentally streamlined method of maintaining a secure ledger
                        of
                        transactions compared to a traditional database. Blockchain technology offers a fundamentally
                        streamlined method of maintaining a secure ledger of transactions compared to a traditional
                        database...
                    </span>
                        <div class="tag-box">
                            <span class="time">2018.04.04</span>
                            <span class="time name">BY:Ken Lee</span>
                            <span class="more-text">more</span>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            <div class="more-story2 more-story-item">
            <a href="/news/about_news/1">
                <div class="more-story-item-box">
                    <img src="/images/newDetail/news03.jpg" alt="">
                    <div class="text-box">
                        <h2>Build Decentralized
                            Applications
                            that Simply
                        </h2>
                        <span>
                        Blockchain technology offers a fundamentally streamlined method of maintaining a secure ledger
                        of
                        transactions compared to a traditional database. Blockchain technology offers a fundamentally
                        streamlined method of maintaining a secure ledger of transactions compared to a traditional
                        database...
                    </span>
                        <div class="tag-box">
                            <span class="time">2018.04.04</span>
                            <span class="time name">BY:Ken Lee</span>
                            <span class="more-text">more</span>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            <div class="more-story3 more-story-item" style="margin-right: 0;">
            <a href="/news/about_news/1">
                <div class="more-story-item-box">
                    <img src="/images/newDetail/news04.jpg" alt="">
                    <div class="text-box">
                        <h2>Build Decentralized
                            Applications
                            that Simply
                        </h2>
                        <span>
                        Blockchain technology offers a fundamentally streamlined method of maintaining a secure ledger
                        of
                        transactions compared to a traditional database. Blockchain technology offers a fundamentally
                        streamlined method of maintaining a secure ledger of transactions compared to a traditional
                        database...
                    </span>
                        <div class="tag-box">
                            <span class="time">2018.04.04</span>
                            <span class="time name">BY:Ken Lee</span>
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
