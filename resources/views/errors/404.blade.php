<style>


.error{
  height: 83%;
  display: block;
  margin: auto;
}

.logo{
    display:block;
    height: 12%;
    margin: auto;
    margin-top: 1vw;
}
</style>

<body>
    <img src="{{url('asset/backoffice/404.png')}}" alt="" class="error">
    <a href="{{ route('ALL') }}"><img src="{{url('asset/home/zho-logo.png')}}" alt="" class="logo"></a>
</body>