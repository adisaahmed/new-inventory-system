<x-home-master>
    @section('content')
        <div class="home_banner" id="home_banner"></div>



        <script>
            function randomImage(){
              var images = [
               '../images/homebanner_1.jpg',
               '../images/homebanner_2.jpg',
               '../images/homebanner_3.jpg',
               '../images/homebanner_4.jpg',
               '../images/homebanner_5.jpg',
               '../images/homebanner_6.jpg',
               '../images/homebanner_7.jpg'];
              var size = images.length;
              var x = Math.floor(size * Math.random());
              console.log(x);
              var element = document.getElementsByClassName('home_banner');
              console.log(element);
              // document.getElementById("home_banner").style.height="1000px";
              document.getElementById("home_banner").style.backgroundImage = "url("+images[x] +")";
            }

            document.addEventListener("DOMContentLoaded", randomImage);
        </script>
    @endsection
</x-home-master>
