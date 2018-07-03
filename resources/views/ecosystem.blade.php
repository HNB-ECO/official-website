@include('header', ['css_link_name' => 'ecosystem', 'other_css' => 'font-awesome'])

<body>
<!-- banner -->
@include('nav')
<!-- //banner -->
<div class="investors-img-box">
<!--     <img src="/images/investors/investors01.jpg?v=2.0" alt=""> -->
    <div class="investors-img-absolute">
        <div class="container">
            <div class="content-text-img">
                <img src="/images/investors/investors09.png?v=2.0" alt="">
            </div>
        </div>
    </div>
</div>
<div class="middle-content-box">
    <div class="content-center">
        Sectors <span>Detail</span>
    </div>
</div>
<!--gallery-->
<div class="gallery">
    <div class="container">
        <div class="gallery-info">
            <div class=" gallery-grids">
                <a class="gallery-box" data-lightbox="example-set" data-title=""></a>
                <div class="gallery-grids-text">
                    <h2>Online Gaming</h2>
                    <div class="text" style="width:95%">
                        "If you think about a traditional online game，there are no inherent protections to the user. Most modern games are centralized. Everything, from the graphics, to game design, to virtual goods, are owned and controlled by the developer… "
</div>
                </div>
            </div>
            <div class=" gallery-grids">
                <a class="gallery-box" data-lightbox="example-set" data-title=""></a>
                <div class="gallery-grids-text">
                    <h2>E-commerce</h2>
                    <div class="text" style="width:95%">
                        "What would eCommerce look like if it were done on the blockchain?
E-commerce could leverage so many properties of the blockchain to completely upend the existing business models.
A major property of the blockchain that is a big benefit but isn’t very obvious to eCommerce is the radical transparency… "

                    </div>
                </div>
            </div>
            <div class=" gallery-grids">
                <a class="gallery-box" data-lightbox="example-set" data-title=""></a>
                <div class="gallery-grids-text">
                    <h2>Knowledge-Sharing Platform</h2>
                    <div class="text" style="width:95%">
                        "Knowledge has always been thought of as something extremely important, especially in the current information age, but it is still a very intangible thing for most people. If we post something knowledgeable and helpful on Quora, Reddit or any other question-centric website, we get a lot of upvotes and likes — but we don’t get money, or anything with real-world, tangible value… "
                    </div>
                </div>
            </div>
        </div>

        <div class="gallery-info ma-top">
            <div class=" gallery-grids">
                <a class="gallery-box" data-lightbox="example-set" data-title=""></a>
                <div class="gallery-grids-text">
                    <h2>Entertainment</h2>
                    <div class="text" style="width:95%">
                    "While the internet has now democratized content creation and distribution in entertainment and creatives no longer have to get in bed with the likes of Interscope or Disney, a new crop of middlemen have emerged in digital content… "
                        
                     </div>
                </div>
            </div>
            <div class=" gallery-grids">
                <a class="gallery-box" data-lightbox="example-set" data-title=""></a>
                <div class="gallery-grids-text">
                    <h2>New Retail</h2>
                    <div class="text" style="width:95%">
                    "New Retail and blockchain have emerged as undeniably hot sectors of the tech industry over the past year, both drawing favor from large segments of society. In its current stage, the retail industry widely connects to the Internet and enjoys high web-powered efficiency. Considering this and the inevitable development of new technologies, blockchain’s influence in new retail will likely be faster than we previously expected… "    
                    </div>
                </div>
            </div>
            <div class=" gallery-grids">
                <a class="gallery-box" data-lightbox="example-set" data-title=""></a>
                <div class="gallery-grids-text other">
                    <h2>Others</h2>
                    <div class="text"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer -->
@include('footer')
</body>

</html>
