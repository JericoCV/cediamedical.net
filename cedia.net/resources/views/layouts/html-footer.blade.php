<footer class="w-100 mt-3">
    <div class="footer-links w-80 text-light m-auto justify-content-center d-flex">
        <ul class="list-1 d-flex mb-0 list-inline pt-3">
            <li class="list-inline-item d-flex">
                <img src="{{asset('images/fb.svg')}}" alt="">
                <a href="">Facebook</a> 
            </li>
            <li class="list-inline-item">
                <img src="{{asset('images/yt.svg')}}" alt="">
                <a href="">YouTube</a> 
            </li>
            <li class="list-inline-item">
                <img src="{{asset('images/tw.svg')}}" alt="">
                <a href="">Twitter</a> 
            </li>
            <li class="list-inline-item">
                <img src="{{asset('images/ml.svg')}}" alt="">
                <a href="">E-Mail</a> 
            </li>
        </ul>
        <ul class="list-2">
            <li class="">
                <img src="{{asset('images/fb.svg')}}" alt="">
                <a href="">Facebook</a> 
            </li>
            <li class="">
                <img src="{{asset('images/yt.svg')}}" alt="">
                <a href="">YouTube</a> 
            </li>
            <li class="">
                <img src="{{asset('images/tw.svg')}}" alt="">
                <a href="">Twitter</a> 
            </li>
            <li class="">
                <img src="{{asset('images/ml.svg')}}" alt="">
                <a href="">E-Mail</a> 
            </li>
        </ul>
    </div>
    <div class="footer-info text-center text-light pt-3">
        <h5 class="mb-0 pb-3">Copyright © 2023 CEDIAMEDICAL</h5>
    </div>
</footer>
<style>
    footer{
        background: #0096fa;
    }
    .list-inline-item > a{
        color: whitesmoke;
        text-decoration: none;
    }
    .list-2{
        display: none;
    }
    @media (max-width:460px){
        .list-1{
            display: none !important;
        }
        .list-2{
            display: inline;
            list-style: none;
            padding-top: 10px;
        }
        .list-2>li>a{
            text-decoration: none;
            color: white !important;
        }
    }
</style>