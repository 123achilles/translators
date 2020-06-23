<!-- start footer  -->
<footer>
    <div class="footer_container">
        <div class="footer_1_block">
            <img class="footerLogo" src="{{asset('img/logo.png')}}"/>
            <p> {{__('global.textFooter1')}}</p>
            <div class="footer_5_block">
                <div class="footerLiAndSoc">
                    <div class="soc">
                        <a href="" target="_blank"><img src="{{asset('img/ln.png')}}"/></a>
                        <a href="" target="_blank"><img src="{{asset('img/twitter-t.png')}}"/></a>
                        <a href="" target="_blank"><img src="{{asset('img/fb.png')}}"/></a>
                        <a href="" target="_blank"><img src="{{asset('img/insta.png')}}"/></a>
                    </div>
                </div>
            </div>
            <div class="copyright">{{__('global.textFooter2')}}· Terms of Use · Privacy Policy</div>
        </div>
        <div class="footer_2_block to-right">
            <a href="">{{__('global.findJob')}}</a>
            <a href="">{{__('global.findTranslator')}}</a>
            <a href="">{{__('global.specializations')}}</a>
            <a href="">{{__('global.keyFeatures')}}</a>

        </div>
        <div class="footer_2_block">
            <a href="{{route('about_us')}}">{{__('global.about')}}</a>
            <a href="{{route('how_it_works')}}">{{__('global.howItWorks')}}</a>
            <a href="{{ route('terms') }}">Terms Of Use</a>
            <a href="">Blog</a>
        </div>
        <div class="footer_2_block">
            <a href="#">Careers</a>
            <a href="{{ route('privacy_policy') }}">Privacy &#38; Policy</a>
            <a href="#">Press</a>
            <a href="#">Contact Us</a>
        </div>
    </div>
</footer>
