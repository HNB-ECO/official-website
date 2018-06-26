@include('header', ['css_link_name' => 'features'])
<body  scroll="no">
<!-- banner -->
@include('nav')
<!--detail-->

<div class="ecosytem-img01">
<!--     <img src="/images/ecosystem/02investors-_02.jpg?v=1.0" alt=""> -->
    <div class="ecosytem-img01-content-box">
        <div class="container">
            <div class="img-box img-box-po">
                <img src="/images/ecosystem/in04.png?v=1.0" alt="">
                <div class="main-box">
                    <div class="main-content">
                        <div class="line-box">
                            <div class="parent-box">
                                <div class="child-box"><span class="point"></span></div>
                                <div class="child-box">
                                    <span class="time-info">
                                        Q1 2017
                                    </span>
                                    <span class="point"></span>
                                    <span class="text-info">
                                        Research  - Conduct inten-sive research on cryptocur-rency investment and related technologies.
                                    </span>
                                </div>
                                <div class="child-box">
                                    <span class="time-info">
                                        Q4 2017
                                    </span>
                                    <span class="point"></span>
                                    <span class="text-info">
                                        Team building  - Establish the core team.
                                    </span>
                                </div>
                                <div class="child-box">
                                    <span class="time-info">
                                        Q1 2018
                                    </span>
                                    <span class="point"></span>
                                    <span class="text-info">
                                       Blueprint – Design decentral-ized economic model and rel-evant technical solutions.
                                    </span>
                                </div>
                                <div class="child-box">
                                    <span class="time-info">
                                        Q2 2018
                                    </span>
                                    <span class="point"></span>
                                    <span class="text-info">
                                       Blueprint – Design decentral-ized economic model and rel-evant technical solutions.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ecosytem-box01">
    <div class="container">
        <div class="left ecosytem-box01-float-none">
            <div class="left ecosytem-box01-float-none-img">
                <img src="/images/ecosystem/02investors-_05.jpg" alt="">
            </div>
            <div class="left ecosytem-box01-content-box02">
                <p class="documentation">Documentation</p>
                <p class="download-pdf">Download PDF</p>
                <div class="content-box04">
                    <a href="http://paqb7y7ao.bkt.clouddn.com/HNB_TwoPager.pdf" target="_blank" style="color:#fff">Two-Pager</a>
                </div>
                <div class="content-box04">
                    <a href="http://paqb7y7ao.bkt.clouddn.com/HNB_Whitepaper.pdf" target="_blank"  style="color:#fff">HNB Thesis</a>
                </div>
            </div>
        </div>
<!--         <div class="right"> -->
<!--            @if (!empty($news_result)) -->
<!--            @foreach($news_result as $key=>$info) -->
<!--             <div class="left"> -->
<!--                 <img src="@if (!empty($info['attachment'])){{$info['attachment']}} @else /images/ecosystem/02investors-_07.jpg @endif" alt=""> -->
<!--             </div> -->
<!--             <div class="left ecosytem-box01-content-box02 ecosytem-box01-content-box02-paddinglf"> -->
<!--                 <div class="feedback01"> -->
<!--                     Feedback -->
<!--                 </div> -->
<!--                 <div class="about-community">{{$info['post_title']}}</div> -->
<!--                 <div class="apr-4-2018"> -->
<!--                     {{date("M.d.Y", strtotime($info['post_modified']))}} -->
<!--                 </div> -->
<!--                 <div class="blockchain-technology"> -->
<!--                    {{mb_strimwidth(strip_tags($info['post_content']), 0, 200)}} -->
<!--                 </div> -->
<!--             </div> -->
<!--             @endforeach -->
<!--             @endif -->
<!--         </div> -->

		<div class="right ecosytem-box01-float-none">
			<div class="selected">
                <div class="left ecosytem-box01-float-none-img">
                    <img src="/images/ecosystem/02investors-_07.jpg" alt="">
                </div>
                <div class="left ecosytem-box01-content-box02 ecosytem-box01-content-box02-paddinglf">
                    <div class="feedback01">
                        Feedback
                    </div>
                    <div class="about-community">About Community</div>
                    <div class="feedback02">Feedback</div>
                    <div class="apr-4-2018">
                        Apr 4, 2018
                    </div>
                    <div class="blockchain-technology">
                        Blockchain technology offers a
                        fundamentally streamlined
                        method of maintaining a secure
                        ledger of transactions compared
                        to a traditionalabase...
                    </div>
                </div>
            </div>
            </div>
    </div>

<!--     <div class="container"> -->
<!--         <div class="research-download-pdf-box"> -->
<!--             <h2 class="hnb-research-download-pdf left">HNB Research Download PD</h2> -->
<!--             <span class="more right"><a href="/pdf_list">MORE</a></span> -->
<!--         </div> -->
<!--         <div class="date-box00"> -->
<!--             <ul> -->
<!--             		@if (!empty($pdf_result)) -->
<!--             		@foreach($pdf_result as $info) -->
<!--                 <li> -->
<!--                     <span class="date-box">{{date("Y.m.d", strtotime($info['post_modified']))}}</span> -->
<!--                     <span class="content-box05"><a href="{{$info['guid']}}">{{$info['post_title']}}</a></span> -->
<!--                 </li> -->
<!--                 @endforeach -->
<!--                 @endif -->
<!--             </ul> -->

<!--         </div> -->
<!--     </div> -->

<!--
	<div class="container">
        <div class="research-download-pdf-box">
            <h2 class="hnb-research-download-pdf left">HNB Research Download PDF</h2>
            <span class="more right">MORE</span>
        </div>
        <div class="date-box00">
            <ul>
                <li>
                    <span class="date-box">2018.04.04</span>
                    <span class="content-box05 active">[Market Performance] Build Decentralized Applications that Simply</span>
                </li>
                <li>
                    <span class="date-box">2018.04.04</span>
                    <span class="content-box05">[Updated Info] Smart Contracts that Mean Business</span>
                </li>
                <li>
                    <span class="date-box">2018.04.04</span>
                    <span class="content-box05">[Investor Feedback] South Korea, Seoul meetup</span>
                </li>
                <li>
                    <span class="date-box">2018.04.04</span>
                    <span class="content-box05">[Market Performance] Go Mobile</span>
                </li>
                <li>
                    <span class="date-box">2018.04.04</span>
                    <span class="content-box05">[Updated Info] Test net in June</span>
                </li>
            </ul>

        </div>
    </div>
    
  -->  
</div>
<!-- footer -->
@include('footer')
<!-- for testimonials slider-js-script-->
<script>
    $(function () {
        var $bl = $(".line-box"),
            $th = $(".parent-box"),
            blW = $bl.outerWidth(),
            blSW = $bl[0].scrollWidth,

            wDiff = (blSW / blW) - 1,
            mPadd = 60,
            damp = 20,
            mX = 0,
            mX2 = 0,
            posX = 0,
            mmAA = blW - (mPadd * 2),
            mmAAr = (blW / mmAA);
        
        $bl.mousemove(function (e) {
            mX = e.pageX - this.offsetLeft;
            mX2 = Math.min(Math.max(0, mX - mPadd), mmAA) * mmAAr;
        });
        setInterval(function () {
            posX += (mX2 - posX) / damp;
            $th.css({marginLeft: -posX * wDiff});
        }, 10);
    });
</script>
</body>
</html>