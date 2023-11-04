 <!-- footer top -->
 <div class="row footer_top pt-5">
    <div class="col-12">
        <img src="{{asset("asset/assets/img/footer_top_bg.png")}}" alt="">
    </div>
</div>
<div class="row footer_bottom">
    <div class="col-12 text-center">
        <p>I-Smart Livestock Services (IS-LS) © 2023 All rights reserved
        </p>
    </div>
</div>

             <!-- Live Chat Icon -->
             <button class="open-button" onclick="openForm()"><i class="fa-regular fa-comment"></i></button>

             <div class="chat-popup" id="myForm">
                 <form action="/action_page.php" class="form-container">
                     <h1>Chat</h1>

                     <label for="msg"><b>Message</b></label>
                     <textarea placeholder="Type message.." name="msg" required></textarea>

                     <button type="submit" class="btn">Send</button>
                     <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                 </form>
             </div>

</div>
</section>
<script src="{{asset('asset/assets/js/jquery-3.6.1.min.js')}}"></script>
<script src="{{asset('asset/assets/js/modernizr-3.11.2.min.js')}}">
<script src="{{asset('asset/assets/js/popper.min.js')}}"></script>
<script src="{{asset('asset/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('asset/assets/js/ma5-menu.min.js')}}"></script>
<script src="{{asset('asset/assets/js/chart.js')}}"></script>
<script src="{{asset('asset/assets/js/jquery.countTo.js')}}"></script>
<script src="{{asset('asset/assets/js/plugins.js')}}"></script>
<script src="{{asset('asset/assets/js/jquery.countTo.js')}}"></script>
<script src="{{asset('asset/assets/js/main.js')}}"></script>
<script src="{{asset('asset/assets/js/rationMy.js')}}"></script>
<script src="{{asset('asset/assets/js/ration.js')}}"></script>

</body>

</html>
