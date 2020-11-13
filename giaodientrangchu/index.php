<?php
include("header.php");
?>
<div class="banner-item slick-slide slick-current slick-active" style="margin-top:50px">
    <img src=images/banner-img-3.jpg >
</div>
<main class="main-content">
    <div class="container">
        <div style="margin-top:20px"></div>
        <div class="admission">
            <div class="Normal">
	            <div class="heading">
                    <h3 class="title typescale-1">Tuyển sinh</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-lg-9 col-featured">
                    <div class="row featured">
                        <div class="col-6 col-lg-4">
                            <div class="featured-item ng-scope">
                                <div class="featured-img">
                                    <a ><img alt="Tin tuyển sinh đại học" src="images/featured-thumb1.jpg"></a>
                                </div>
                                <h3 class="featured-title"><a  class="ng-binding" href="tsdaihoc.php">Tuyển sinh đại học</a></h3>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4">
                            <div class="featured-item ng-scope">
                                <div class="featured-img">
                                    <a ><img alt="Tin tuyển sinh đại học" src="images/featured-thumb2.jpg"></a>
                                </div>
                                <h3 class="featured-title"><a  class="ng-binding" href="chuongtrinhdhcq.php">Đào tạo đại học</a></h3>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4">
                            <div class="featured-item ng-scope">
                                <div class="featured-img">
                                    <a ><img alt="Tin tuyển sinh đại học" src="images/featured-thumb3.jpg"></a>
                                </div>
                                <h3 class="featured-title"><a  class="ng-binding" >Ngành đào tạo</a></h3>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4">
                            <div class="featured-item ng-scope">
                                <div class="featured-img">
                                    <a ><img alt="Tin tuyển sinh đại học" src="images/totnghiepdhthumb.jpg"></a>
                                </div>
                                <h3 class="featured-title"><a  class="ng-binding" >Học phí của trường</a></h3>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4">
                            <div class="featured-item ng-scope">
                                <div class="featured-img">
                                    <a ><img alt="Tin tuyển sinh đại học" src="images/thacsithumb.jpg"></a>
                                </div>
                                <h3 class="featured-title"><a  class="ng-binding" >Điểm chuẩn của trường</a></h3>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4">
                            <div class="featured-item ng-scope" >
                                <div class="featured-img">
                                    <a ><img alt="Tin tuyển sinh đại học" src="images/doctorate.jpg"></a>
                                </div>
                                <h3 class="featured-title"><a class="ng-binding" >Kế họach đào tạo đại học</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="block-ads">
                        <div id="dnn_ctr1509_HtmlModule_lblContent" class="Normal">
                            <p><a ><img alt="Image" src="images/XetTuyenBanner.jpg"> </a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 col-qa">
                    <div class="qa ng-scope" ng-controller="myCntrl1591">
                     <?php 
                        include("./formquestion.php");
                     ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-news">
            
        </div>
    </div>
    <!--Begin menu tin tuc thong bao -->
    
    
    <script>
        function openPage(pageName, elmnt, color) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].style.backgroundColor = "";
                tablinks[i].classList.remove("active");
            }
            document.getElementById(pageName).style.display = "block";
            elmnt.style.backgroundColor = color;
            elmnt.classList.add("active");
        }
        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
    <style>
        * {
            box-sizing: border-box
        }
        .tablink {
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 8px 10px;
            font-size: 17px;
            width: 50%;
        }

            .tablink:hover {
                background-color: #ccc;
            }

        .tabcontent {
            display: none;
            padding: 2px 15px 12px 0px;
        }

        #Inform {
            background-color: white;
        }

        #News {
            background-color: white;
        }
    </style>

                
            </div>
        </div>
    </div>
    
</main>
