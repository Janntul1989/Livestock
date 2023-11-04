
@extends('FrontEnd.Layouts.main')
@section('main.container')
            <div class="breadcrumb_title">
                <h2>রোগব্যাধি, টিকা ও প্রতিকার</h2>
            </div>

            <div class="disease_details">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="cow-tab" data-bs-toggle="tab" data-bs-target="#cow"
                            type="button" role="tab" aria-controls="cow" aria-selected="true">গরু ও মহিষ</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="goat-tab" data-bs-toggle="tab" data-bs-target="#goat" type="button"
                            role="tab" aria-controls="goat" aria-selected="false">ছাগল</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="hen-tab" data-bs-toggle="tab" data-bs-target="#hen" type="button"
                            role="tab" aria-controls="hen" aria-selected="false">মুরগি</button>
                    </li>
                </ul>
                <div class="tab-content disease_details_area" id="myTabContent">
                    <div class="tab-pane fade show active" id="cow" role="tabpanel" aria-labelledby="cow-tab">
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                <div class="details_list">
                                    <h4>ক্ষুরারোগ (FMD)</h4>
                                    <div class="details_item">
                                        <span>"ক্ষুরারোগ তীব্র প্রকৃতির ছোঁয়াচে ভাইরাস জনিত রোগ।"</span>
                                        <h6> <img src="{{asset("asset/assets/img/symptom.png")}}" alt="">লক্ষণ</h6>
                                        <ul>
                                            <li>প্রচল্ড জ্বর (১০৫-১০৬ ডিগ্রী ফারেনহাইট )</li>
                                            <li>মুখ, জিহবা ও পায়ে ফোসকা দেখা দিবে</li>
                                            <li>মুখের ও পায়ের ব্যাথায় মহিষ খাওয়া-দাওয়া করবে না</li>
                                            <li>মুখ দিয়ে লালা ঝরবে</li>
                                        </ul>
                                        <h6 class="treat_title"><img src="{{asset("asset/assets/img/treatment.png")}}" alt="">চিকিৎসা</h6>
                                        <ul>
                                            <li>জীবাণুনাশক দ্বারা মুখ ও পায়ের ক্ষত পরিষ্কার করতে হবে</li>
                                            <li>অ্যান্টিবায়োটিক অথবা সালফোনামাইড ইনজেকশন দিলে সুফল পাওয়া যায়</li>
                                            <li>আক্রান্ত প্রাণীকে শুকনো ও পরিষ্কার স্থানে রাখতে হবে এবং নরম বা তরল খাবার
                                                দিতে হবে</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                <div class="details_list">
                                    <h4>বাদলা রোগ (Black Quarter)</h4>
                                    <div class="details_item">
                                        <span>"প্রধানত ৬ মাস থেকে ২ বছর বয়স্ক মহিষ আক্রান্ত হয়।"</span>
                                        <h6> <img src="{{asset("asset/assets/img/symptom.png")}}" alt="">লক্ষণ</h6>
                                        <ul>
                                            <li>আক্রান্ত স্থান ফুলে যাবে, পচন ধরবে ও মহিষ খুড়িয়ে খুড়িয়ে হাটবে</li>
                                            <li>আক্রান্ত স্থানে চাপ দিলে পচ পচ শব্দ হবে
                                            </li>
                                        </ul>
                                        <h6 class="treat_title"><img src="{{asset("asset/assets/img/treatment.png")}}" alt="">চিকিৎসা</h6>
                                        <ul>
                                            <li>পেনিসিলিন ইনজেকশন দিতে হয় (প্রতি কেজি দৈহিক ওজনের জন্য ১০,০০০ আই ইউ)
                                            </li>
                                            <li>প্রথমে ক্রিস্টালিন পেনিসিলিন ইনজেকশন (শিরায়) দিতে হবে
                                            </li>
                                            <li>পরবর্তীতে প্রোকেইন পেনিসিলিন অর্ধেক মাত্রায় আক্রান্ত পেশী এবং মাংশপেশীতে
                                                দিনে দুইবার করে ৫-৭ দিন দিতে হবে</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                <div class="details_list">
                                    <h4>তড়কা রোগ (Anthrax)</h4>
                                    <div class="details_item">
                                        <span>"তড়কা বা অ্যানথ্রাক্স একটি ব্যাকটেরিয়া দ্বারা সৃষ্ট অতি তীব্র প্রকৃতির
                                            মারাত্মক রোগ।"</span>
                                        <h6> <img src="{{asset("asset/assets/img/symptom.png")}}" alt="">লক্ষণ</h6>
                                        <ul>
                                            <li>জ্বর (১০৪°-১০৭° ফা:)</li>
                                            <li>ক্ষুধামান্দ্য, দ্রূত শ্বাস-প্রশ্বাস, পেট ফাঁপা, গর্ভপাত ও দেহের কাঁপুনি
                                            </li>
                                            <li>নাক, মুখ, প্রশ্রাব ও মলদ্বার দিয়ে রক্ত ক্ষরণ</li>
                                            <li>শরীরের ভিতরে বিভিন্ন অঙ্গে রক্ত ক্ষরণ</li>
                                        </ul>
                                        <h6 class="treat_title"><img src="{{asset("asset/assets/img/treatment.png")}}" alt="">চিকিৎসা</h6>
                                        <ul>
                                            <li>এন্টিসিরাম ও এন্টিবায়োটিক ভাল কাজ করে</li>
                                            <li>এন্টিসিরাম ১০০-২৫০ মিলি; প্রতিটি মহিষকে প্রত্যহ শিরায় ইনজেকশন দিতে হবে
                                            </li>
                                            <li>একই সময়ে এন্টিসিরাম ও এন্টিবায়োটিক ইনজেকশন অধিক কার্যকর</li>
                                            <li>পেনিসিলিন জাতীয় ঔষধ দিনে দুইবার করে ৫ দিন মাংস পেশীতে ইনজেকশন দিতে হয়
                                                (প্রতি কেজি দৈহিক ওজনের জন্য ১০,০০০ ইউনিট করে)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                <div class="details_list">
                                    <h4>গলাফোলা রোগ (Hemorrhagic Septicemia)</h4>
                                    <div class="details_item">
                                        <h6> <img src="{{asset("asset/assets/img/symptom.png")}}" alt="">লক্ষণ</h6>
                                        <ul>
                                            <li>হঠাৎ করে দেহের তাপমাত্রা অত্যধিক বৃদ্ধি পায় (১০৫°-১০৭° ফা.)</li>
                                            <li>গলার নীচের অংশ ফুলে যায় এবং হাত দিলে গরম অনুভূত হয়। ফুলা ক্রমশ গলা থেকে
                                                বুক পর্যন্ত ছড়িয়ে পড়ে</li>
                                            <li>শ্বাস-প্রশ্বাসের সময় শব্দ হয়, নাক-মুখ দিয়ে তরল পদার্থ নিঃসরণ হয়</li>
                                            <li>অনেক সময় জিহবা ফুলে যায়, জিহবা বের করে শ্বাস-প্রশ্বাস নেয়</li>
                                            <li>রোগ খুবই তীব্র প্রকৃতির হলে পশু ২৪ ঘন্টার মধ্যে মারা যায়</li>
                                        </ul>
                                        <h6 class="treat_title"><img src="{{asset("asset/assets/img/treatment.png")}}" alt="">চিকিৎসা</h6>
                                        <ul>
                                            <li>লক্ষণ দেখা দেয়ার সাথে চিকিৎসা করালে ভাল ফল পাওয়া যায়</li>
                                            <li>প্রতি ১০০ কেজি দৈহিক ওজনের জন্য ১০-২০ মিলি ওটেট্রো ভেট অথবা ২-৭ মিলি
                                                এসাইপিলিন অথবা স্ট্রেপটোপেন ইনজেকশন ৫-৭ মিলি মাংসে
                                                প্রয়োগ করতে হবে</li>
                                            <li>প্রতিটি ইনজেকশন ২৪ ঘন্টা পরপর ৩-৫ দিন প্রয়োগ করতে হবে</li>
                                            <li>এর সাথে এন্টিহিস্টামিন ইনজেকশন ৫-১০ মিলি (প্রতি ১০০কেজির জন্য) দিনে ২-৩
                                                বার মাংশে প্রয়োগ করতে হবে</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="vaccine_table">
                                    <h4>টিকা প্রদানের ছক</h4>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th rowspan="2">রোগের নাম</th>
                                                <th rowspan="2">টিকার নাম</th>
                                                <th colspan="2">টিকা দেয়ার সময়</th>
                                            </tr>
                                            <tr>
                                                <th>প্রথম ডোজ</th>
                                                <th>পপরবর্তী ডোজ</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>ক্ষুরা/এফএমডি</td>
                                                <td>FMD vac</td>
                                                <td>১.৫ মাস বয়সে</td>
                                                <td>প্রতি ছয় মাস অন্তর</td>
                                            </tr>

                                            <tr>
                                                <td>তড়কা/অ্যানথ্রাক্স</td>
                                                <td>Anthrax vac</td>
                                                <td>৬ মাস বয়সে</td>
                                                <td>বছরে একবার</td>
                                            </tr>

                                            <tr>
                                                <td>বাদলা/ ব্লাক কোয়ার্টার</td>
                                                <td>BQ vac</td>
                                                <td>৬ মাস বয়সে</td>
                                                <td>বছরে একবার (দুই বছর অব্দি)</td>
                                            </tr>

                                            <tr>
                                                <td>গলা ফোলা</td>
                                                <td>HS vac</td>
                                                <td>৬ মাস বয়সে</td>
                                                <td>বছরে একবার</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="goat" role="tabpanel" aria-labelledby="goat-tab">
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                <div class="details_list details_list_goat">
                                    <h4>ক্ষুরারোগ (FMD)</h4>
                                    <div class="details_item">
                                        <h6> <img src="{{asset("asset/assets/img/symptom.png")}}" alt="">লক্ষণ</h6>
                                        <ul>
                                            <li>জ্বর হয়, লালা পড়ে ও ছাগলকে খুড়িয়ে হাটতে দেখা যাবে</li>
                                            <li>মুখে ও পায়ের দুই পায়ের মাঝে ফোসকা পড়ে এবং তা গলে লাল ঘা হয়</li>
                                        </ul>
                                        <h6 class="treat_title"><img src="{{asset("asset/assets/img/treatment.png")}}" alt="">চিকিৎসা</h6>
                                        <ul>
                                            <li>গরম পানিতে ফিটকিরি/পটাশিয়াম পারম্যাঙ্গানেট/সোডা গুলে মুখ ও পায়ের ঘা ধুয়ে
                                                দিতে হবে। অথবা</li>
                                            <li>ঘা তাড়াতাড়ি শুকাতে সিবাজল বা সালফানিলামাইড পাউডার ব্যবহার করা যেতে পারে
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                <div class="details_list details_list_goat">
                                    <h4>পিপিআর (PPR)</h4>
                                    <div class="details_item">
                                        <h6> <img src="{{asset("assets/img/symptom.png")}}" alt="">লক্ষণ</h6>
                                        <ul>
                                            <li>ঝিম ধরে পিঠ বাকা করে দাড়িয়ে থাকা</li>
                                            <li>শরীরের তাপমাত্রা বৃদ্ধি (১০৬°-১০৭° সে:)</li>
                                            <li>গাঢ় বাদামী পাতলা পায়খানা। সাথে রক্ত মিশ্রিত আমাশয়</li>
                                            <li>শ্বাসকষ্ট, নিউমোনিয়া ও নাক-মুখ-চোখ দিয়ে তিরল আসা</li>
                                        </ul>
                                        <h6 class="treat_title"><img src="{{asset("asset/assets/img/treatment.png")}}" alt="">চিকিৎসা</h6>
                                        <ul>
                                            <li>নির্দিষ্ট কোন চিকিৎসা নেই</li>
                                            <li>উন্নত এন্টিবায়োটিক দেয়া</li>
                                            <li>মুখে বা শিরায় পর‌্যাপ্ত স্যালাইন দেয়া</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                <div class="details_list details_list_goat">
                                    <h4>গোটপক্স (Goat Pox)</h4>
                                    <div class="details_item">
                                        <h6> <img src="{{asset("asset/assets/img/symptom.png")}}" alt="">লক্ষণ</h6>
                                        <ul>
                                            <li>মুকের চারপাশে, মুখ গহবরে, কানে, গলায়, দুধের বাটে ও পায়ুপথের চারপাশে
                                                বসন্তের গুপি দেকা যায়</li>
                                        </ul>
                                        <h6 class="treat_title"><img src="{{asset("asset/assets/img/treatment.png")}}" alt="">চিকিৎসা</h6>
                                        <ul>
                                            <li>আক্রান্ত প্রাণীর চিকিৎসা করে লাভ নেই</li>
                                            <li>প্রাথমিক অবস্থায় এন্টিবায়োটিক দিলে মৃত্যুহার কমে</li>
                                            <li>আক্রান্ত প্রাণীকে আলাদা করে ফেলতে হবে এবং অন্য সকল সুস্থ প্রাণীকে
                                                এন্টিপক্সিয়াম ইনজেকশন দিতে হবে</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                <div class="details_list details_list_goat">
                                    <h4>এন্টারোটক্সিমিয়া</h4>
                                    <div class="details_item">
                                        <h6> <img src="{{asset("asset/assets/img/symptom.png")}}" alt="">লক্ষণ</h6>
                                        <ul>
                                            <li>অতি তীব্র প্রকৃতি: মাটিতে পড়ে খিচুনি দিয়ে কয়েক মিনিটের মধ্যে মৃত্যু</li>
                                            <li>তীব্র প্রকৃতি: রক্ত ও মিউকিাস মিশ্রিত ডায়রিয়া। পা ছোড়াছুড়ি করা ও
                                                পায়খানার রাস্তায় প্যারালাইসিস</li>
                                            <li>দীর্ঘমেয়াদী প্রকৃতি: প্রচন্ড ডায়রিয়া ও ধঅরে ধীরে শরীর শুকিয়ে যাওয়া</li>
                                        </ul>
                                        <h6 class="treat_title"><img src="{{asset("asset/assets/img/treatment.png")}}" alt="">চিকিৎসা</h6>
                                        <ul>
                                            <li>হাইপার ইমিউন সিরাম (এন্টিসিরাম) দেয়া যেতে পারে</li>
                                            <li>এন্টিবায়োটিক বা সালফা ড্রাগ ও ব্যাথানাশক ইনজেকশন দেয়া যেতে পারে</li>
                                            <li>সিরাম স্যালাইন দেয়া যেতে পারে। তবে তাপমাত্রা বেশি হলে স্যালাইন দেয়া যাবে
                                                না</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="vaccine_table">
                                    <h4>টিকা প্রদানের ছক</h4>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>রোগের নাম</th>
                                                <th>টিকার নাম</th>
                                                <th>টিকা দেয়ার সময়</th>
                                                <th>মাত্রা</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>পিপিআর</td>
                                                <td>PPR vac</td>
                                                <td>২-৩ মাসে ১ম ডোজ</td>
                                                <td>তিন বছরে একবার</td>
                                            </tr>

                                            <tr>
                                                <td>গোটপক্স</td>
                                                <td>GP vac</td>
                                                <td>৪র্থ মাসে ১ম ডোজ</td>
                                                <td>প্রতিবছর ডিসেম্বর মাসে একবার</td>
                                            </tr>

                                            <tr>
                                                <td>ক্ষুরা রোগ (এফএমডি)</td>
                                                <td>FMD vac</td>
                                                <td>২-৩ মাসে ১ম ডোজ</td>
                                                <td>বছর দুইবার (মার্চ ও সেপ্টেম্বর মাস)</td>
                                            </tr>

                                            <tr>
                                                <td>এ্যানথ্রাক্স/তড়কা</td>
                                                <td>Anthrax vac</td>
                                                <td>৬ষ্ঠ মাসে ১ম ডোজ</td>
                                                <td>বছর একবার (মে-জুন)</td>
                                            </tr>

                                            <tr>
                                                <td>এন্টারোটক্সিমিয়া</td>
                                                <td></td>
                                                <td>প্রথম সপ্তাহে ও ২-৩ মাসে ১ম ডোজ (যদি মায়ের ভ্যাকসিন না দেয়া থাকে)
                                                </td>
                                                <td>উভয় ক্ষেত্রে ১৫ দিন পর বুস্টার ডোজ দিতে হবে</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="hen" role="tabpanel" aria-labelledby="hen-tab">
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                <div class="details_list">
                                    <h4>রানীক্ষেত</h4>
                                    <div class="details_item">
                                        <span>"এটি মোরগ-মুরগির ভাইরাস জনিত একটি মারাত্মক ছোঁয়াচে রোগ। সকল বয়সের
                                            মোরগ-মুরগি এ রোগে আক্রান্ত হয়।"</span>
                                        <h6> <img src="{{asset("asset/assets/img/symptom.png")}}" alt="">লক্ষণ</h6>
                                        <ul>
                                            <li>চোখ বন্ধ করে ঝিমাতে থাকে ও মুরগীর ডানা ঝুলে পড়ে</li>
                                            <li>শ্বাসনালী ও খাদ্যনালীর মিলনস্থল অবশ হয়ে যায়, ফলে খাবার গ্রহন কমিয়ে দেয়
                                            </li>
                                            <li>আক্রান্ত মুরগী পানি শুন্যতায় ভোগে, এবং ল্যাংড়া হয়ে যেতে পারে</li>
                                            <li>মলাশয় ফুলে বড় হয়ে যায়, ফলে চুনে পায়খানা আটকে থাকে</li>
                                        </ul>
                                        <h6 class="treat_title"><img src="{{asset("asset/assets/img/treatment.png")}}" alt="">চিকিৎসা</h6>
                                        <ul>
                                            <li>ভাইরাসের বিরুদ্ধে তেমন কোন কাযকারী ব্যবস্থা নাই</li>
                                            <li>তবে দ্বিতীয় পর্যায়ের সংক্রমন রোধে এন্টিবায়োটিক ব্যবহার করা যেতে পারে
                                            </li>
                                            <li>পাতলা পায়খানা করলে ইলেক্ট্রোলাইট দিতে হবে</li>
                                            <li>পানিতে দ্রবনীয় ভিটামিন দিলে ভালো কাজ করে</li>
                                            <li>এছাড়া প্রতিদিন খামারের চারপাশে টিমসেন স্প্রে করতে হবে</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                <div class="details_list">
                                    <h4>গামবোরো</h4>
                                    <div class="details_item">
                                        <span>"ইহা মোরগ-মুরগির ভাইরাস জনিত একটি মারাত্মক ছোঁয়াচে রোগ।"</span>
                                        <h6> <img src="{{asset("asset/assets/img/symptom.png")}}" alt="">লক্ষণ</h6>
                                        <ul>
                                            <li>মুরগীর দেহের পালক উসকো খুসকো হয়ে যায়</li>
                                            <li>পায়খানার সাথে পানি বের হয়, অথাৎ পায়খানা ছড়িয়ে পড়ে</li>
                                            <li>মুরগীর দেহের তাপমাত্রা বেড়ে যায়</li>
                                            <li>আক্রান্ত মুরগী মাথা সামনের দিকে নুইয়ে রাখে</li>
                                        </ul>
                                        <h6 class="treat_title"><img src="{{("asset/assets/img/treatment.png")}}" alt="">চিকিৎসা</h6>
                                        <ul>
                                            <li>গামবোরো রোগের কাযর্করী কোন চিকিৎসা নাই</li>
                                            <li>এই রোগের সাথে সাথে অন্যান্য রোগ যেমন –কক্সিওডিওসিস হতে পারে। তাই যে কোন
                                                একটি এন্টিবায়োটিক দেয়া যেতে পারে</li>
                                            <li>সাথে সালফার গ্রুপের একটি ড্রাগ দেয়া যেতে পারে</li>
                                            <li>এছাড়া পানিতে ভিনেগার এবং পানি গহনের পরিমান বৃদ্ধির জন্য চিনি দেয়া যেতে
                                                পারে</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                <div class="details_list">
                                    <h4>বার্ড ফ্লু /এভিয়ান ইনফ্লুয়েঞ্জা</h4>
                                    <div class="details_item">
                                        <span>"বার্ড ফ্লু /এভিয়ান ইনফ্লুয়েঞ্জা রোগের লক্ষন ভাইরাসের তীব্রতা, প্রজাতি,
                                            এবং পাখির বয়সের উপর নিভর করে। এমনকি পরিবেশের
                                            কারনেও লক্ষণ পরিবর্তিত হতে পারে।"</span>
                                        <h6> <img src="{{asset("assets/img/symptom.png")}}" alt="">লক্ষণ</h6>
                                        <ul>
                                            <li>এই রোগ হলে কোন কিছু বুঝে ওঠার আগেই অনেক মুরগী মারা যায়</li>
                                            <li>মাথার ঝুটি কালচে রঙ এর হয়ে যায় এবং হালকা রক্তবিন্দু থাকতে পারে</li>
                                            <li>মাথা ফুলে যাবে এবং পানি জমে যেতে পারে</li>
                                            <li>আক্রান্ত মুরগীর পালকহীন অংশে (যেমন- পা) রক্তবিন্দু পাওয়া যাবে</li>
                                            <li>মাত্রাতিরিক্ত পানি গ্রহন লক্ষ্য করা যায়</li>
                                            <li>লেয়ার মুরগির ক্ষেত্রে প্রথমে নরম খোলাযুক্ত ডিম পাড়ে, এবং পরে ডিম পাড়া
                                                বন্ধ করে দেয়</li>
                                        </ul>
                                        <h6 class="treat_title"><img src="{{asset("asset/assets/img/treatment.png")}}" alt="">চিকিৎসা</h6>
                                        <ul>
                                            <li>গামবোরো রোগের কাযর্করী কোন চিকিৎসা নাই</li>
                                            <li>খামারের বায়োসিকিউরিটি/জীব নিরাপত্তা নিশ্চিত করতে রোগ প্রতিরোধমূলক
                                                ব্যবস্থা গ্রহণ করতে হবে</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12 mb-4">
                                <div class="details_list">
                                    <h4>এভিয়ান গাউট</h4>
                                    <div class="details_item">
                                        <h6> <img src="{{asset("asset/assets/img/symptom.png")}}" alt="">লক্ষণ</h6>
                                        <ul>
                                            <li>পায়ুপথের চারপাশে প্রচুর সাদা চুনের মত পদার্থ (ইউরেটস) লেগে থাকে</li>
                                            <li>দীর্ঘস্থায়ী সমস্যার ক্ষেত্রে শ্বাসনালী, মাথার ঝুটি, কানের লতি ইত্যাদিতে
                                                ও ইউরেটস দেখা যায়</li>
                                            <li>মুরগি ঝিমায় এবং কিছু ক্ষেত্রে সবুজাভ পাতলা পায়খানা হয়</li>
                                            <li>আক্রান্ত মুরগির শারীরিক দূর্বলতা দেখা যায়, উসখো খুসকো পালক ও ভেজা পায়ু
                                                পথ দেখা যায়</li>
                                        </ul>
                                        <h6 class="treat_title"><img src="{{asset("asset/assets/img/treatment.png")}}" alt="">চিকিৎসা</h6>
                                        <ul>
                                            <li>প্রাথমিক অবস্থায় প্রচুর পরিমাণে পানি এবং পানির পাত্র রাখতে হবে</li>
                                            <li>এলুপিউরিনল জাতীয় ঔষধ প্রতি কেজি দৈহিক ওজনের জন্য ২০-৪০ মিগ্রা (১ গ্রাম ১
                                                লিটার) হিসাবে ব্যবহারে ইউরিক এসিড এর মাত্রা
                                                হ্রাস পায়</li>
                                            <li>তরল টক্সিন বাইন্ডার (যেমন Two plus, Toxynil plus) এবং লিভার টনিক ব্যবহার
                                                করলে উপকার পাওয়া যেতে পারে</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="vaccine_table">
                                    <h4>টিকা প্রদানের ছক</h4>
                                    <table class="table-poultry text-center">
                                        <thead>
                                            <tr>
                                                <th rowspan="2" class="text-center">
                                                    টিকার নাম <br>
                                                    টিকার রং
                                                </th>
                                                <th colspan="2" class="text-center">মিশ্রণ পদ্ধতি</th>
                                            </tr>
                                            <tr>
                                                <th colspan="2" class="text-center">টিকা প্রদানের বয়স ও দেয়ার পদ্ধতি
                                                </th>
                                            </tr>
                                        </thead>



                                        <tbody>
                                            <tr>
                                                <td rowspan="2" style="background-color: lightgreen">
                                                    বিসিআরডিভি <br>
                                                    সবুজ
                                                </td>
                                                <td colspan="2">
                                                    এক শিশি টিকা ১০০ ফোটা পরিশোধিত পানিতে মিশিয়ে নিতে হবে
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">৭ দিনে ১ চোখে ১ ফোটা</td>
                                            </tr>

                                            <tr>
                                                <td rowspan="2" style="background-color: white">
                                                    গামবোরো (ডি-৭৮)<br>
                                                    সাদা
                                                </td>
                                                <td colspan="2">
                                                    টিকার সাথে প্রাপ্ত পরিশোধিত পানিতে মিশিয়ে নিতে হবে
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">১৪ দিনে ১ চোখে ১ ফোটা</td>
                                            </tr>

                                            <tr>
                                                <td rowspan="2" style="background-color: lightgreen">
                                                    বিসিআরডিভি<br>
                                                    সবুজ
                                                </td>
                                                <td colspan="2">
                                                    এক শিশি টিকা ১০০ ফোটা পরিশোধিত পানিতে মিশিয়ে নিতে হবে
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">২১ দিনে ১ চোখে ১ ফোটা</td>
                                            </tr>

                                            <tr>
                                                <td rowspan="2" style="background-color: white">
                                                    গামবোরো (ডি-৭৮)<br>
                                                    সাদা
                                                </td>
                                                <td colspan="2">
                                                    টিকার সাথে প্রাপ্ত পরিশোধিত পানিতে মিশিয়ে নিতে হবে
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">২৮ দিনে ১ চোখে ১ ফোটা</td>
                                            </tr>

                                            <tr>
                                                <td rowspan="2" style="background-color: #cb4154">
                                                    ফাউল পক্স<br>
                                                    খয়েরী বা ইটের রং
                                                </td>
                                                <td colspan="2">৩ মিলি পরিশোধিত পানিতে মেশাতে হবে</td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">৩০ দিনে ডানার চামড়ায় খুঁচিয়ে</td>
                                            </tr>

                                            <tr>
                                                <td rowspan="2" style="background-color: white">
                                                    আরডিভি<br>
                                                    সাদা
                                                </td>
                                                <td colspan="2">
                                                    ১০০ মিলি পরিশোধিত পানিতে মিশিয়ে নিতে হবে
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">
                                                    ৬০ দিনে; পুনরায় ৬ মাস পর পর রানের মাংসে ১ মিলি করে
                                                    ইনজেকশন
                                                </td>
                                            </tr>

                                            <tr>
                                                <td rowspan="2" style="background-color: #cb4154">
                                                    ফাউল পক্স (বুষ্টার)<br>
                                                    খয়েরী বা ইটের রং
                                                </td>
                                                <td colspan="2">৩ মিলি পরিশোধিত পানিতে মেশাতে হবে</td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">৩০ দিনে ডানার চামড়ায় খুঁচিয়ে</td>
                                            </tr>

                                            <tr>
                                                <td rowspan="2" style="background-color: white">
                                                    ফাউল কলেরা<br>
                                                    সাদা তরল
                                                </td>
                                                <td colspan="2">তরল অবস্থায় পাওয়া যায়</td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">
                                                    ৭৫ দিনে ও ৯০ দিনে; পুনরায় ৬ মাস পর পর বুকের চামড়ার
                                                    নিচে ১ মিলি করে ইনজেকশন
                                                </td>
                                            </tr>

                                            <tr>
                                                <td rowspan="2" style="background-color: white">
                                                    আরডিভি<br>
                                                    সাদা
                                                </td>
                                                <td colspan="2">
                                                    ১০০ মিলি লিটার পানিতে ১ ভায়াল গুলিয়ে
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">
                                                    ১০৫ দিনে রানের মাংসে ১ মিলি করে ইনজেকশনে
                                                </td>
                                            </tr>

                                            <tr>
                                                <td rowspan="2" style="background-color: white">
                                                    ইনফেকশাস ব্রংকাইটিস<br>
                                                    সাদা তরল
                                                </td>
                                                <td colspan="2">২৫ লিটার পানিতে ১ ভায়াল গুলিয়ে</td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">১১০ দিনে রানের মাংসে ০.৫ সিসি</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>








@endsection
