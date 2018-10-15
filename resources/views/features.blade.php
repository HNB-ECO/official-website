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
                <div class="main-box phone">
                    <div class="main-content phone">
                        <div class="line-box">
                            <div class="parent-box">
                                <div class="child-box"><span class="point"></span></div>
                                <div class="child-box">
                                    <span class="time-info">
                                        Q1 2017
                                    </span>
                                    <span class="point"></span>
                                    <span class="text-info">
                                    RESEARCH -    Intensive research on decentralization applications and blockchain technology.
                                    </span>
                                </div>
                                <div class="child-box">
                                    <span class="time-info">
                                        Q4 2017
                                    </span>
                                    <span class="point"></span>
                                    <span class="text-info">
                                    HNB TEAM -     Establishment of the HNB core team (HNB Shanghai & HNB Canada).
                                    </span>
                                </div>
                                <div class="child-box">
                                    <span class="time-info">
                                        Q1 2018
                                    </span>
                                    <span class="point"></span>
                                    <span class="text-info">
                                    BLUEPRINT -  Design decentralized economic model and relevant technical solutions.
                                    </span>
                                </div>
                                <div class="child-box">
                                    <span class="time-info">
                                        Q2 2018
                                    </span>
                                    <span class="point"></span>
                                    <span class="text-info" style="margin-top:-40px;">
                                    VALIDATION – MVP(Minimum Viable Product) launch, small-scale commercial use cases implemented, complete HNB economic model validation and modification.
                                    </span>
                                </div>
                                <div class="child-box">
                                    <span class="time-info">
                                        Q3 2018
                                    </span>
                                    <span class="point"></span>
                                    <span class="text-info" style="margin-top:-10px;">
                                    COMPLETION- Completion of DApp SDK development & ERC20-based underlying architecture construction. Provide direct technological support to Merchants in HNB ecosystem.
                                    </span>
                                </div>
                                <div class="child-box">
                                    <span class="time-info">
                                        Q4 2018
                                    </span>
                                    <span class="point"></span>
                                    <span class="text-info" style="margin-top:-10px;">
                                    PERFECTION – Complete development of HNB/HGS erc20-based wallet.
                                    </span>
                                </div>
                                <div class="child-box">
                                    <span class="time-info">
                                        Q2 2019
                                    </span>
                                    <span class="point"></span>
                                    <span class="text-info" style="margin-top:-10px;">
                                    MAINNET 1.0 – HGS & HNB Duo-Chain launch. 
                                    </span>
                                </div>
                                <div class="child-box">
                                    <span class="time-info">
                                        Q4 2019
                                    </span>
                                    <span class="point"></span>
                                    <span class="text-info" style="margin-top:-10px;">
                                    MAINNET 2.0 – Realization of off-chain high speed transaction.
                                    </span>
                                </div>
                                <div class="child-box">
                                    <span class="time-info">
                                        Q1 2020
                                    </span>
                                    <span class="point"></span>
                                    <span class="text-info" style="margin-top:-10px;">
                                    Ecosystem Development - Provide support to CrossChain / SideChain transaction，ecosystem contributor to launch digital asset.
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
                    <a target="_blank" 
                    href="http://p9mu5lfc8.bkt.clouddn.com/Twopage.pdf"  style="color:#fff">Two-Pager</a>
                </div>
                
                <!-- http://paqb7y7ao.bkt.clouddn.com/HNB_TwoPager.pdf  http://paqb7y7ao.bkt.clouddn.com/HNB%20White%20Paper_V8.0.0.pdf-->

                <div class="content-box04">
                    <a  target="_blank" href="http://paqb7y7ao.bkt.clouddn.com/whitepaper.pdf"  style="color:#fff">HNB </a>
                </div>
            </div>
        </div>
		<div class="right ecosytem-box01-float-none">
            @if (!empty($news_result))
                @foreach($news_result as $key=>$info)
			<div class="selected">
                <div class="left ecosytem-box01-float-none-img">
                    <img src="@if (!empty($info['attachment'])){{$info['attachment']}}@else /images/ecosystem/02investors-_07.jpg @endif" alt="" style="height:275px;">
                </div>
                <div class="left ecosytem-box01-content-box02 ecosytem-box01-content-box02-paddinglf">
                    <div class="feedback01">
                    <a href="/news/about_news/{{$info['ID']}}" target="_blank">more </a>
                    </div>
                    <div class="about-community">                  
                        <a href="/news/about_news/{{$info['ID']}}" target="_blank">{{$info['post_title']}}</a>
                    </div>
                    <!-- <div class="feedback02">Feedback</div> -->

                    <div class="apr-4-2018">
                        {{date("M.d.Y", strtotime($info['post_modified']))}}
                    </div>
                    <div class="blockchain-technology">
                        {{mb_strimwidth(strip_tags($info['post_content']), 0, 150)}}
                    </div>
                </div>
            </div>
                @endforeach
            @endif
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


function myFunction()
{
    alert("Updateing,coming soon");
}

</script>


</body>
</html>