@extends('FrontEnd.Layouts.main')
@section('main.container')
      <div class="row content_area">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-12 content_left">
                    <div class="content_area_left">
                        <div class="production">
                            <p class="content_left_title">উৎপাদন</p>
                            <div class="pro_area">
                                <canvas id="productionChart" height="250"></canvas>
                            </div>
                        </div>
                        <div class="transaction">
                            <p class="content_left_title">বার্ষিক লেনদেন</p>
                            <div class="tran">
                                <canvas id="transactionChart" height="250"></canvas>
                            </div>
                        </div>
                        <div class="disease">
                            <p class="content_left_title">রোগব্যাধি</p>
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item disease_list_single">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            <img src="{{asset("asset/assets/img/cow.png")}}" alt="">গরু ও মহিষ
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse disease_list"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">ক্ষুরা
                                                        রোগ</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">তড়কা
                                                        রোগ</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">বাদলা
                                                        রোগ</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">গলাফোলা
                                                        রোগ</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">ম্যসিটাইটিস</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">দুধ
                                                        জ্বর</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">কিটোসিস</a>
                                                </li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">ল্যাকটেশন
                                                        টিটেনি</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">পেট
                                                        ফাপা</a></li>
                                                <li><a href="#"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">রক্ত-প্রস্রাব বাব্যাবেসিওসিস</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">লাম্পি
                                                        স্কিন ডিডিজ</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">পেট
                                                        ফাপা</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item disease_list_single">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <img src="{{asset("asset/assets/img/goat.png")}}" alt=""> ছাগল
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse disease_list"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">পিপিআর</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">গোটপক্স</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">ক্ষুরারোগ</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">একথাইমা</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">বর্ডার ডিজিজ</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">এন্টারোটক্সিমিয়া</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">তড়কা</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">ধনুষ্টংকার</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">নিউমোনিয়া</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">ফুট রট</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">সালমোনেলোসিস</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">গিড রোগ</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">খোঁস পাঁচড়া রোগ</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item disease_list_single">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            <img src="{{asset("asset/assets/img/hen.png")}}" alt="">মুরগি
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse disease_list"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">রানীক্ষেত</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">গামবোরো</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">বার্ড ফ্লু /এভিয়ান ইনফ্লুয়েঞ্জা</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">বসন্ত</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">মারেক্স ডিজিজ</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">লিম্ফয়েড লিউকোসিস</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">এনফেকশাস ল্যারিংগোট্রাকিয়াটিস</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">মাইক্রোপ্লাজমোলেসিস</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">এসপারজিলোসিস</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">রক্ত আমাশায়</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">এভিয়ান গাউট</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">ফাউল টাইফয়েড/a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">ফাউল কলেরা</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item disease_list_single">
                                    <h2 class="accordion-header" id="flush-headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                            aria-expanded="false" aria-controls="flush-collapseFour">
                                            <img src="{{asset("asset/assets/img/duck.png")}}" alt="">হাঁস
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse disease_list"
                                        aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">ভাইরাস হেপাটাইটিস</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">প্লেগ</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">ভাইরাস এন্টারাইটিস</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">রিমেরেলা অ্যানাটিপেস্টিফার ইনফেকশন</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">এভিয়ান কলেরা</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">কলিব্যাসিলোসিস</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">অ্যাসপারজিলোসিস</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">টক্সিন</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">অ্যাফ্লাটক্সিন বিষক্রিয়া</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item disease_list_single">
                                    <h2 class="accordion-header" id="flush-headingFive">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseFive"
                                            aria-expanded="false" aria-controls="flush-collapseFive">
                                            <img src="{{asset("asset/assets/img/bird.png")}}" alt="">পাখি
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFive" class="accordion-collapse collapse disease_list"
                                        aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">রানীক্ষেত বা ঝিমানো রোগ</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">ইনক্লুশন বডি হেপাটাইটিস</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">কলেরা</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">বসন্ত বা পক্স রোগ</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">সালমোনেলোসিস</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">এসপারজিলোসিস</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">রক্ত আমাশয় বা রক্ত পায়খানা</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">কবুতরের ক্যাংকার রোগের</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">কবুতরের ঠান্ডা জনিত রোগ</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item disease_list_single">
                                    <h2 class="accordion-header" id="flush-headingSix">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseSix"
                                            aria-expanded="false" aria-controls="flush-collapseSix">
                                            <img src="{{asset("asset/assets/img/cat.png")}}" alt="">বিড়াল
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSix" class="accordion-collapse collapse disease_list"
                                        aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">রানীক্ষেত বা ঝিমানো রোগ</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">ইনক্লুশন বডি হেপাটাইটিস</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">কলেরা</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">বসন্ত বা পক্স রোগ</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">সালমোনেলোসিস</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">এসপারজিলোসিস</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">রক্ত আমাশয় বা রক্ত পায়খানা</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">কবুতরের ক্যাংকার রোগের</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">কবুতরের ঠান্ডা জনিত রোগ</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item disease_list_single">
                                    <h2 class="accordion-header" id="flush-headingSeven">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven"
                                            aria-expanded="false" aria-controls="flush-collapseSeven">
                                            <img src="{{asset("asset/assets/img/dog.png")}}" alt="">কুকুর
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSeven" class="accordion-collapse collapse disease_list"
                                        aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">রানীক্ষেত বা ঝিমানো রোগ</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">ইনক্লুশন বডি হেপাটাইটিস</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">কলেরা</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">বসন্ত বা পক্স রোগ</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">সালমোনেলোসিস</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">এসপারজিলোসিস</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">রক্ত আমাশয় বা রক্ত পায়খানা</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">কবুতরের ক্যাংকার রোগের</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">কবুতরের ঠান্ডা জনিত রোগ</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item disease_list_single">
                                    <h2 class="accordion-header" id="flush-headingEight">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseEight"
                                            aria-expanded="false" aria-controls="flush-collapseEight">
                                            <img src="{{asset("asset/assets/img/rabbit.png")}}" alt="">খরগোশ
                                        </button>
                                    </h2>
                                    <div id="flush-collapseEight" class="accordion-collapse collapse disease_list"
                                        aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">রানীক্ষেত বা ঝিমানো রোগ</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">ইনক্লুশন বডি হেপাটাইটিস</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">কলেরা</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">বসন্ত বা পক্স রোগ</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">সালমোনেলোসিস</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">এসপারজিলোসিস</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">রক্ত আমাশয় বা রক্ত পায়খানা</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">কবুতরের ক্যাংকার রোগের</a></li>
                                                <li><a href="{{route('disease')}}"><img src="{{asset("asset/assets/img/right-arrow.png")}}"
                                                            alt="">কবুতরের ঠান্ডা জনিত রোগ</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-9 col-xl-9 col-lg-9 col-12 mb-4 content_right">
                    <div class="content_area_right">
                        <div class="row marque_bar g-2">
                            <div class="col-3">
                                <div class="left_side">
                                    <h5>বিজ্ঞপ্তি</h5>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="right_side">
                                    <marquee behavior="scroll" scrollamount="4" direction="left"
                                        onmouseover="this.stop();" onmouseout="this.start();">
                                        <p>আমাদের ওয়েবসাইটে পরিদর্শনের জন্য আপনাকে স্বাগতম । আপনি যদি নতুন
                                            ব্যবহারকারী হয়ে থাকেন, দয়া করে নিবন্ধন করুন ও সরাসরি সেবা গ্রহণের
                                            জন্য
                                            টোকেন সংগ্রহ করুন।
                                        </p>
                                    </marquee>
                                </div>
                            </div>
                        </div>
                        <div class="row current_registraion g-3">
                            <div class="col-12">
                                <p class="content_title"><img src="{{asset("asset/assets/img/registration.png" )}}"alt="">সম্প্রতি
                                    নিবন্ধনকারী </p>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-3 mt-0">
                                <div class="register_picture">
                                    <div class="picture">
                                        <img src="{{asset("asset/assets/img/farmer.jpeg")}}" alt="">
                                    </div>
                                    <div class="register_details">
                                        <p><b>নামঃ</b><span> রফিকুল ইসলাম</span></p>
                                        <p><b>ঠিকানাঃ</b><span>ঝিনাইদহ</span> </p>
                                        <p><b>মোবাইলঃ</b> <span>০১৮৪৪৭৫৯৩৭৫</span> </p>
                                        <p><b>প্রাণীঃ</b> <span>মুরগি</span> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-3 mt-0">
                                <div class="register_picture">
                                    <div class="picture">
                                        <img src="{{asset("asset/assets/img/farmer1.jpg")}}" alt="">
                                    </div>
                                    <div class="register_details">
                                        <p><b>নামঃ</b><span> আনিসুর রহমান</span></p>
                                        <p><b>ঠিকানাঃ</b><span>লালমনিরহাট</span> </p>
                                        <p><b>মোবাইলঃ</b> <span>০১৮৪৪৭৫৯৩৭৫</span> </p>
                                        <p><b>প্রাণীঃ</b> <span>ছাগল</span> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12  mt-0">
                                <div class="register_picture">
                                    <div class="picture">
                                        <img src="{{asset("asset/assets/img/farmer3.jpg" )}}"alt="">
                                    </div>
                                    <div class="register_details">
                                        <p><b>নামঃ</b><span> জোসনা বেগম</span></p>
                                        <p><b>ঠিকানাঃ</b><span>শরীয়তপুর</span> </p>
                                        <p><b>মোবাইলঃ</b> <span>০১৮৪৪৭৫৯৩৭৫</span> </p>
                                        <p><b>প্রাণীঃ</b> <span>গরু</span> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row weight_calculator">
                            <div class="col-12">
                                <p class="content_title"><img src="{{asset("asset/assets/img/weight-loss.png")}}" alt="">ওজন
                                    নির্ণয়
                                </p>
                            </div>
                            <div class="col-12 weight_content">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="true">গরু </button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false">মহিষ</button>
                                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-contact" type="button" role="tab"
                                        aria-controls="nav-contact" aria-selected="false">ছাগল</button>
                                </div>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                        aria-labelledby="nav-home-tab">
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                                                <label class="" for="">বুকের বেড়
                                                    (ইঞ্চি)</label>
                                                <input class="form-control" type="number" placeholder="ইনপুট দিন">
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                                                <label class="" for="">দেহের দৈর্ঘ্য
                                                    (ইঞ্চি)</label>
                                                <input class="form-control " type="number" placeholder="ইনপুট দিন">
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12 mb-3">
                                                <label class="" for="">ওজন (কেজি)</label>
                                                <div class="form-control weight_result"></div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12 mb-3 weight_btn">
                                                <button class="" type="button">ওজন নির্ণয়
                                                    করুন</button>
                                                <button class="" type="button">মুছে ফেলুন</button>
                                            </div>
                                            <div class="col-12 guide_pic">
                                                <div class="ber">
                                                    <p>বুকের বেড় মাপার কৌশল</p>
                                                    <img src="{{asset("asset/assets/img/1.jpg")}}" alt="">
                                                </div>
                                                <div class="dhoirgo">
                                                    <p>দেহের দৈর্ঘ্য মাপার কৌশল</p>
                                                    <img src="{{asset("asset/assets/img/2.jpg")}}" alt="">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                        aria-labelledby="nav-profile-tab">
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                                                <label class="" for="">বুকের বেড়
                                                    (ইঞ্চি)</label>
                                                <input class="form-control" type="number" placeholder="ইনপুট দিন">
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                                                <label class="" for="">দেহের দৈর্ঘ্য
                                                    (ইঞ্চি)</label>
                                                <input class="form-control " type="number" placeholder="ইনপুট দিন">
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12 mb-3">
                                                <label class="" for="">ওজন (কেজি)</label>
                                                <div class="form-control weight_result"></div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12 mb-3 weight_btn">
                                                <button class="" type="button">ওজন নির্ণয়
                                                    করুন</button>
                                                <button class="" type="button">মুছে ফেলুন</button>
                                            </div>
                                            <div class="col-12 guide_pic">
                                                <div class="ber">
                                                    <p>বুকের বেড় মাপার কৌশল</p>
                                                    <img src="{{asset("asset/assets/img/3.jpg")}}" alt="">
                                                </div>
                                                <div class="dhoirgo">
                                                    <p>দেহের দৈর্ঘ্য মাপার কৌশল</p>
                                                    <img src="{{asset("asset/assets/img/4.jpg")}}" alt="">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                        aria-labelledby="nav-contact-tab">
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                                                <label class="" for="">বুকের বেড়
                                                    (ইঞ্চি)</label>
                                                <input class="form-control" type="number" placeholder="ইনপুট দিন">
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                                                <label class="" for="">দেহের দৈর্ঘ্য
                                                    (ইঞ্চি)</label>
                                                <input class="form-control " type="number" placeholder="ইনপুট দিন">
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12 mb-3">
                                                <label class="" for="">ওজন (কেজি)</label>
                                                <div class="form-control weight_result"></div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12 mb-3 weight_btn">
                                                <button class="" type="button">ওজন নির্ণয়
                                                    করুন</button>
                                                <button class="" type="button">মুছে ফেলুন</button>
                                            </div>
                                            <div class="col-12 guide_pic">
                                                <div class="ber">
                                                    <p>বুকের বেড় মাপার কৌশল</p>
                                                    <img src="{{asset("asset/assets/img/5.jpg")}}" alt="">
                                                </div>
                                                <div class="dhoirgo">
                                                    <p>দেহের দৈর্ঘ্য মাপার কৌশল</p>
                                                    <img src="{{asset("asset/assets/img/6.jpg")}}" alt="">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ration_formulation">
                            <div class="col-12">
                                <p class="content_title"><img src="{{asset("asset/assets/img/ration.png")}}" alt="">রেশন
                                    ক্যালকুলেটরের
                                    মাধ্যমে উপযুক্ত
                                    খাদ্য
                                    তৈরি
                                </p>
                            </div>
                            <div class="col-12 weight_btn ration_btn">
                                <a href="{{route('ration')}}"  target="_blank">ক্যালকুলেটরে যান</a>
                            </div>

                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-5 col-12 mb-2">
                                <div class="ration_item">
                                    <ul>
                                        <li><img src="{{asset("asset/assets/img/wheat.png")}}" alt="">গমের ভুষি</li>
                                        <li><img src="{{asset("asset/assets/img/rice.png")}}" alt="">চালের কুড়া</li>
                                        <li><img src="{{asset("asset/assets/img/corn.png")}}" alt="">ভুট্টা বা গমের গুড়া</li>
                                        <li><img src="{{asset("asset/assets/img/khesari.png")}}"  alt="">খেশারী</li>
                                        <li><img src="{{asset("asset/assets/img/lentil.png")}}"  alt="">সয়াবিন মিল</li>
                                        <li><img src="{{asset("asset/assets/img/sesame.png")}}"  alt="">তিল/সরিষার খৈল</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-6 col-12 mb-2">
                                <div class="ration_info">
                                    <div class="ration_single_info">
                                        <p>গমের ভুষি </p>
                                        <span>৩০</span>
                                    </div>
                                    <div class="ration_single_info">
                                        <p>চালের কুড়া </p>
                                        <span>৩০</span>
                                    </div>
                                    <div class="ration_single_info">
                                        <p>ভুট্টা বা গমের
                                            গুড়া </p>
                                        <span>১৫</span>
                                    </div>
                                    <div class="ration_single_info">
                                        <p>খেশারী </p>
                                        <span>১০</span>
                                    </div>
                                    <div class="ration_single_info">
                                        <p>সয়াবিন মিল </p>
                                        <span>১২</span>
                                    </div>
                                    <div class="ration_single_info">
                                        <p>তিল/সরিষার খৈলি </p>
                                        <span>০</span>
                                    </div>
                                    <div class="ration_single_info">
                                        <p>লবন </p>
                                        <span>১</span>
                                    </div>
                                    <div class="ration_single_info">
                                        <p>মোট</p>
                                        <span>১০০</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row g-2 service">
                <div class="col-12">
                    <p class="content_title"><img src="{{asset("asset/assets/img/customer-service.png")}}" alt="">দ্বারপ্রান্তে
                        ডাকুন</p>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-1">
                    <div class="service_item_wrap">
                        <h5>চিকিৎসাঃ</h5>
                        <div class="service_item">
                            <img src="{{asset("asset/assets/img/medical-record.png")}}" alt="">
                            <div class="service_content">
                                <ul>
                                    <li><i class="fa-solid fa-angles-right"></i>সাধারণ</li>
                                    <li><i class="fa-solid fa-angles-right"></i>অপারেশন</li>
                                    <li><i class="fa-solid fa-angles-right"></i>জরুরী</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-1">
                    <div class="service_item_wrap">
                        <h5>পরামর্শঃ</h5>
                        <div class="service_item">
                            <img src="{{asset("asset/assets/img/advice.png")}}" alt="">
                            <div class="service_content">
                                <ul>
                                    <li><i class="fa-solid fa-angles-right"></i>প্রাণী পালন</li>
                                    <li><i class="fa-solid fa-angles-right"></i>খামারের নকশা</li>
                                    <li><i class="fa-solid fa-angles-right"></i>পশুখাদ্য চাষ</li>
                                    <li><i class="fa-solid fa-angles-right"></i>সাইলেজ</li>
                                    <li><i class="fa-solid fa-angles-right"></i>অন্যান্য নতুন
                                        প্রযুক্তি
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-1">
                    <div class="service_item_wrap">
                        <h5>কৃত্রিম প্রজনন</h5>
                        <div class="service_item">
                            <img src="{{asset("asset/assets/img/sperm.png")}}" alt="">

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-1">
                    <div class="service_item_wrap">
                        <h5>ভ্যাকসিনঃ</h5>
                        <div class="service_item">
                            <img src="{{asset("asset/assets/img/vaccine.png")}}" alt="">
                            <div class="service_content">
                                <ul>
                                    <li><i class="fa-solid fa-angles-right"></i>টিকা সংগ্রহ</li>
                                    <li><i class="fa-solid fa-angles-right"></i>টিকা ক্যাম্প
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-1">
                    <div class="service_item_wrap">
                        <h5>প্রশিক্ষণঃ</h5>
                        <div class="service_item">
                            <img src="{{asset("asset/assets/img/analysis.png")}}"alt="">
                            <div class="service_content">
                                <ul>
                                    <li><i class="fa-solid fa-angles-right"></i>গরু পালন</li>
                                    <li><i class="fa-solid fa-angles-right"></i>ষাঁড় পালন</li>
                                    <li><i class="fa-solid fa-angles-right"></i>ছাগল/ভেড়া পালন</li>
                                    <li><i class="fa-solid fa-angles-right"></i>মুরগি পালন</li>
                                    <li><i class="fa-solid fa-angles-right"></i>পশুখাদ্য তৈরি</li>
                                    <li><i class="fa-solid fa-angles-right"></i>মাংস প্রক্রিয়াকরণ
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-1">
                    <div class="service_item_wrap">
                        <h5>ল্যাবরেটরি পরীক্ষাঃ</h5>
                        <div class="service_item">
                            <img src="{{asset("asset/assets/img/flask.png")}}" alt="">
                            <div class="service_content">
                                <ul>
                                    <li><i class="fa-solid fa-angles-right"></i>রক্ত</li>
                                    <li><i class="fa-solid fa-angles-right"></i>মল</li>
                                    <li><i class="fa-solid fa-angles-right"></i>দুধ</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-1">
                    <div class="service_item_wrap">
                        <h5>গর্ভাবস্থা পরীক্ষাঃ</h5>
                        <div class="service_item">
                            <img src="{{asset("asset/assets/img/pregnancy-test.png")}}" alt="">
                            <div class="service_content">
                                <ul>
                                    <li><i class="fa-solid fa-angles-right"></i>রেকটাল প্যালপেশন
                                    </li>
                                    <li><i class="fa-solid fa-angles-right"></i>আল্ট্রাসনোগ্রাফি
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-1">
                    <div class="service_item_wrap">
                        <h5>নিবন্ধনকরণ</h5>
                        <div class="service_item">
                            <img src="{{asset("asset/assets/img/registration.png")}}" alt="">
                            <div class="service_content">
                                <ul>
                                    <li><i class="fa-solid fa-angles-right"></i>দুগ্ধ খামার</li>
                                    <li><i class="fa-solid fa-angles-right"></i>ছাগলের খামার</li>
                                    <li><i class="fa-solid fa-angles-right"></i>মুরগির খামার</li>
                                    <li><i class="fa-solid fa-angles-right"></i>মোটাতাজাকরণ খামার
                                    </li>
                                    <li><i class="fa-solid fa-angles-right"></i>ফিডমিল</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row membership">

                    <div class="col-12">
                        <p class="content_title"><img src="{{asset("asset/assets/img/mem.png")}}" alt="">মেম্বারশীপ গ্রহন</p>
                    </div>

                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                    <div class="price_item one_month">
                        <h6>১ মাস</h6>
                        <h5><span>২১০</span> টাকা</h5>
                        <p>ভ্যাট + ট্যাক্স সহ</p>
                        <a href="{{route("token")}}" target="_blank">পছন্দ
                            করুন</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                    <div class="price_item three_month">
                        <h6>৩ মাস</h6>
                        <h5><span>৫৬৭</span> টাকা <del> ৬৩০<b>&#2547;</b></del>
                        </h5>
                        <p>১০% কমিশন (ভ্যাট + ট্যাক্স সহ)</p>
                        <a href="{{route("token")}}" target="_blank">পছন্দ
                            করুন</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                    <div class="price_item six_month">
                        <h6>৬ মাস</h6>
                        <h5><span>১০৭১</span> টাকা <del> ১২৬০<b>&#2547;</b></del>
                        </h5>
                        <p>১৫% কমিশন (ভ্যাট + ট্যাক্স সহ)</p>
                        <a href="{{route("token")}}" target="_blank">পছন্দ
                            করুন</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                    <div class="price_item one_year">
                        <h6>১বছর</h6>
                        <h5><span>২০১৬</span> টাকা <del> ২৫২০<b>&#2547;</b></del>
                        </h5>
                        <p>২০% কমিশন (ভ্যাট + ট্যাক্স সহ)</p>
                        <a href="{{route("token")}}" target="_blank">পছন্দ
                            করুন</a>
                    </div>
                </div>

            </div>
            <div class="row prescription">
                <div class="col-12 mb-3">
                    <p class="content_title"><img src="{{asset("asset/assets/img/stethoscope.png")}}" alt="">ই-ভেট
                        প্রেসক্রিপশন
                    </p>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-2">
                    <div class="prescription_report">
                        <img src="{{asset("asset/assets/img/p1.jpg")}}"  alt="">
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-2">
                    <div class="prescription_report">
                        <img src="{{asset("asset/assets/img/p2.jpg")}}" alt="">
                    </div>
                </div>
            </div>
            <div class="row g-2 video">
                <div class="col-12">
                    <p class="content_title"><img src="{{asset("asset/assets/img/online-presentation.png")}}" alt="">ট্রেনিং
                        ভিডিও
                    </p>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-2">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/qo8D5A4uBzQ" title="YouTube video"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-2">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/qo8D5A4uBzQ" title="YouTube video"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-2">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/qo8D5A4uBzQ" title="YouTube video"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>




@endsection
