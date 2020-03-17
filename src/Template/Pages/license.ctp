<div class="ftco-blocks-cover-1">
    <div class="ftco-cover-1 overlay innerpage" style="background-image: url('webroot/img/hero_2.jpg')">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 text-center">
                    <h1>公司证照</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="site-section">
    <div class="container">

        <div class="row mb-5">
            <div class="col-md-4 mr-auto">
                <h2 class="line-bottom">公司证照</h2>
            </div>

        </div>

        <div class="row">
            <div class="col-12">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 mr-auto">
                                    <h2>我司具有以下公司营业证明/执照</h2>
                                    <p>营业执照</p>
                                    <p>安全生产许可证</p>
                                    <p>建筑业企业资质证书</p>
                                    <p>化工石化医药行业</p>
                                </div>
                                <div class="w3-content w3-display-container">

                                    <div class="w3-display-container mySlides1">
                                        <img src="webroot/img/img_1.jpg" style="width:100%">
                                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
                                            French Alps
                                        </div>
                                    </div>

                                    <div class="w3-display-container mySlides1">
                                        <img src="webroot/img/img_2.jpg" style="width:100%">
                                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
                                            French Alps
                                        </div>
                                    </div>

                                    <div class="w3-display-container mySlides1">
                                        <img src="webroot/img/img_4.jpg" style="width:100%">
                                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
                                            French Alps
                                        </div>
                                    </div>


                                    <button class="w3-button w3-display-left w3-black" onclick="plusDivs1(-1)">&#10094;
                                    </button>
                                    <button class="w3-button w3-display-right w3-black" onclick="plusDivs1(1)">&#10095;
                                    </button>

                                </div>

                                <script>
                                    var slideIndex1 = 1;
                                    showDivs1(slideIndex1);

                                    function plusDivs1(n) {
                                        showDivs1(slideIndex1 += n);
                                    }

                                    function showDivs1(n) {
                                        var i;
                                        var x = document.getElementsByClassName("mySlides1");
                                        if (n > x.length) {
                                            slideIndex1 = 1
                                        }
                                        if (n < 1) {
                                            slideIndex1 = x.length
                                        }
                                        for (i = 0; i < x.length; i++) {
                                            x[i].style.display = "none";
                                        }
                                        x[slideIndex1 - 1].style.display = "block";
                                    }
                                </script>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
