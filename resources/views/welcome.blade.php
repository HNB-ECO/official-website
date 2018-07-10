@include('header', ['css_link_name' => 'index'])
<body>
<!-- banner -->
@include('nav')
<!-- slide -->
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
    <!-- 轮播（Carousel）指标 -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
<!--         <li data-target="#myCarousel" data-slide-to="2"></li> -->
    </ol>
    <!-- 轮播（Carousel）项目 -->
    <div class="carousel-inner slide01">
        <div class="item active">
            <div style="position: relative">
                <div class="carousel-inner-img-box">
                    <div class="container">
                        <div style="overflow: hidden">
                            <div style="margin: 0 auto">
                                <div class="carousel-img02">
                                    <!-- <img src="/images/home/home02.png?v=1.0" alt=""> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item home_png_3">
        		<div class="carousel-inner-img-box">
                <div class="container">
                    <div style="overflow: hidden">
                        <div style="margin: 0 auto">
                            <div class="carousel-img02">
                                <!-- <img style="width: 40px;margin-bottom: 40px" src="/images/home/home04.png" alt="">
                                <img src="/images/home/home05.png" alt=""> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--         <div class="item home_png_4"> -->
<!--         </div> -->
    </div>
    <!-- 轮播（Carousel）导航 -->
    <div class="carousel-control-box">
        <div class="container">

            <div class="">
                <a class="left carousel-control1" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control1" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>

    </div>
</div>
<!-- /slide -->

<div>
    <div class="container index-box01">

        <div class="left index-box01-left">
            <div>
                <img src="/images/index/index01.png" alt="">
            </div>

            <div class="tab-box">

                <ul id="myTab" class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab01" data-toggle="tab">
                            Perspective
                            <div class="point-box">
                                <span class="point"></span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#tab02" data-toggle="tab">Economic Model
                            <div class="point-box">
                                <span class="point"></span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#tab03" data-toggle="tab">Technology
                            <div class="point-box">
                                <span class="point"></span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#tab04" data-toggle="tab">Outlook
                            <div class="point-box">
                                <span class="point"></span>
                            </div>
                        </a>
                    </li>

                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade in active" id="tab01">

                        <div class="left tab-left-img-box">
                            <img src="/images/index/index03.jpg" alt="">
                        </div>
                        <div class="right tab-left-content">
                            <div class="tab-left-content01 word_break">
                                HNB is pioneer of distributed business ecosystem. HNB aims to connect blockchain technology to the real world by providing a disruptive economic model.
                            </div>
                            <h2 class="tab-left-content02 word_break">How does HNB push distributed business ecosystem a step further?</h2>
                            <div class="tab-left-content03 word_break">
                                HNB team strongly believes that Blockchain-based technology and decentralized processes can revolutionize both on-line and off -line market places and commerce. HNB R&D team builds a Blockchain based economic operation mechanism for a closed-loop economic entity. In HNB ecosystem, the information is relatively transparent and symmetrical and economic incentives will drive community members stay active and continuously benefit from the realization of actual value.
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab02">
                        <div class="left tab-left-img-box">
                            <img src="/images/index/tab_2.jpeg" alt="">
                        </div>
                        <div class="right tab-left-content">
                            <div class="tab-left-content01 word_break">
                               A proper economic model is one of the most fundamental elements in decentralized ecosystem, HNB stands on the shoulders of giants may mark beginning of new era for the “deconomy”.
                            </div>
                            <h2 class="tab-left-content02 word_break">Why economic model is the engine of disruption economy?</h2>
                            <div class="tab-left-content03 word_break">
                                HNB has followed the steps of predecessor and laying the foundation that truly unlocks the internet of value. HNB economic entity will deploy a dual-token system by issuing two types of tokens: Asset Token (HNB Token) and Stable Token (HGS Token), HNB Asset Token is the digital crypto asset representing the ownership of HNB economic entity, HGS Stable Token is the payment medium (“currency”) pegged with fiat currency like USD. It is issued by “HNB Reserve Committee” and circulated within HNB entity only. HNB provides appropriate incentives for everyone in ecosystem.
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab03">
                        <div class="left tab-left-img-box">
                            <img src="/images/index/tab_3.jpeg" alt="">
                        </div>
                        <div class="right tab-left-content">
                            <div class="tab-left-content01 word_break">
                                HNB believes that usage scenarios drive technology innovation – not the other way around.
                            </div>
                            <h2 class="tab-left-content02 word_break">What are significant features behind HNB core technology ?</h2>
                            <div class="tab-left-content03 word_break">
                                One public chain for dual-coin provides infrastructure that get through the ecosystem, innovation consensus mechanism to safeguard stable economic operation and growth in the HNB community. Robust Dapps for application scenarios and strong security & encryption to protect the stored date. The technology is evolving and you have the opportunity to evolve along with it, HNB aims to connect decentralized technology to the real world by providing a comprehensive governance structure, a efficient economic model and pioneers in physical world applications.
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab04">
                        <div class="left tab-left-img-box">
                            <img src="/images/index/tab_4.jpeg" alt="">
                        </div>
                        <div class="right tab-left-content">
                            <div class="tab-left-content01 word_break">
                                HNB team has been working with online platforms crosses 300 million active users, and providing growth solutions to enterprises in various industries.
                            </div>
                            <h2 class="tab-left-content02 word_break">How does HNB reshape E-commerce industry ?</h2>
                            <div class="tab-left-content03 word_break">
                                For retailers, digital assets aren’t owned by those who create them. For consumers, there is no incentive to review, help, or share. HNB decentralized ecosystem solve it by providing highly efficient solution for E-commerce industry with feasible method. Before HNB team envisioned a new economic model for decentralized ecosystem, it was a group of early participants in blockchain industry who also with outstanding track record in hedge fund, venture capital and science fields previously. Usage scenarios drive innovation, our original vision has never changed.
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div class="right index-box01-right">
            <div id="myCarousel01" class="carousel slide" data-ride="carousel" data-interval="3000">
                <!-- 轮播（Carousel）指标 -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel01" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel01" data-slide-to="1"></li>
<!--                     <li data-target="#myCarousel01" data-slide-to="2"></li> -->
                </ol>
                <!-- 轮播（Carousel）项目 -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="/images/index/index02-01.jpeg" alt="First slide">
                    </div>
                    <div class="item">
                        <img src="/images/index/index02-02.jpeg" alt="Second slide">
                   </div>
<!--                     <div class="item"> -->
<!--                         <img src="/images/index/index02.jpg" alt="Third slide"> -->
<!--                     </div> -->
                </div>
            </div>

        </div>
    </div>

</div>

<!-- footer -->
@include('footer')
<script>
    $(function () {
        $('#myTab a').click(function () {
            $(this).tab('show');
        });
    })
</script>
</body>
</html>