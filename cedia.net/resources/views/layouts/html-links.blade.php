<div class="links-container d-flex rounded">
    <ul>
        <li>
            <a href=""><img src="{{asset('images/fb.svg')}}" alt="" title="Facebook"></a>
        </li>
        <li>
            <a href=""><img src="{{asset('images/ml.svg')}}" alt="" title="Mail"></a>
        </li>
        <li>
            <a href=""><img src="{{asset('images/tw.svg')}}" alt="" title="Twitter"></a>
        </li>
        <li>
            <a href=""><img src="{{asset('images/yt.svg')}}" alt="" title="YouTube"></a>
        </li>
        <li>
            <a href=""><img src="{{asset('images/cm.svg')}}" alt="" title="Salud Ocupacional"></a>
        </li>
    </ul>
</div>

<style>
    .links-container{
        position: fixed;
        left: 3px;
        top: 100px;
        z-index: 333;
    }

    .links-container>ul{
        list-style: none;
        padding-left:10px; 
    }
    .links-container>ul>li{
        display: flex;
        padding: 3px;
        margin-left: 0;
    }
    .links-container>ul>li>a>img{
        width: 40px;
        transition: 0.5s;
    }
    .links-container>ul>li>a>img:hover{
        width: 50px !important;
    }
    @media (max-width: 600px){
        .links-container{
            background: #013e685e !important;
            left: 0px !important;
            top: 90px !important
        }
        .links-container>ul{
            padding-left:0px !important;
        }
    }
</style>