@section('footer')
  <style media="screen">

  .footer-distributed{
    background-color: #292c2f;
    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
    box-sizing: border-box;
    width: 100%;
    text-align: left;
    font: bold 16px sans-serif;
    padding: 55px 50px;
    margin-top: 0px; }

    .footer-distributed .footer-left, .footer-distributed .footer-center, .footer-distributed .footer-right{
      display: inline-block;
      vertical-align: top; } /* Footer left */

      .footer-distributed .footer-left{
        width: 40%; } /* The company logo */

        .footer-distributed h3{
          color:  #ffffff;
          font: normal 36px 'Cookie', cursive;
          margin: 0; }

          .footer-distributed h3 span{
            color:  #5383d3; } /* Footer links */

            .footer-distributed .footer-links{
              color:  #ffffff;
              margin: 20px 0 12px;
              padding: 0; }

              .footer-distributed .footer-links a{
                display:inline-block;
                line-height: 1.8;
                text-decoration: none;
                color:  inherit; }

                .footer-distributed .footer-company-name{
                  color:  #8f9296;
                  font-size: 14px;
                  font-weight: normal;
                  margin: 0; } /* Footer Center */

                  .footer-distributed .footer-center{
                    width: 35%; }

                    .footer-distributed .footer-center i{
                      background-color:  #33383b;
                      color: #ffffff;
                      font-size: 25px;
                      width: 38px;
                      height: 38px;
                      border-radius: 50%;
                      text-align: center;
                      line-height: 42px;
                      margin: 10px 15px;
                      vertical-align: middle; }

                      .footer-distributed .footer-center i.fa-envelope{
                        font-size: 17px;     line-height: 38px; }

                        .footer-distributed .footer-center p{
                          display: inline-block;
                          color: #ffffff;
                          vertical-align: middle;
                          margin:0; }

                          .footer-distributed .footer-center p span{
                            display:block;
                            font-weight: normal;
                            font-size:14px;
                            line-height:2; }

                            .footer-distributed .footer-center p a{
                              color:  #5383d3;
                              text-decoration: none;; } /* Footer Right */

                              .footer-distributed .footer-right{
                                width: 20%; }

                                .footer-distributed .footer-company-about{
                                  line-height: 20px;
                                  color:  #92999f;
                                  font-size: 13px;
                                  font-weight: normal;
                                  margin: 0; }

                                  .footer-distributed .footer-company-about span{
                                    display: block;
                                    color:  #ffffff;
                                    font-size: 14px;
                                    font-weight: bold;
                                    margin-bottom: 20px; }

                                    .footer-distributed .footer-icons{
                                      margin-top: 25px; }

                                      .footer-distributed .footer-icons a{
                                        display: inline-block;
                                        width: 35px;
                                        height: 35px;
                                        cursor: pointer;
                                        background-color:  #33383b;
                                        border-radius: 2px;
                                        font-size: 20px;
                                        color: #ffffff;
                                        text-align: center;
                                        line-height: 35px;
                                        margin-right: 3px;
                                        margin-bottom: 5px; }
                                        @media (max-width: 880px) {
                                          .footer-distributed{
                                            font: bold 14px sans-serif;
                                            }

                                            .footer-distributed .footer-left,
                                            .footer-distributed .footer-center,
                                            .footer-distributed .footer-right{
                                              display: block;
                                              width: 100%;
                                              margin-bottom: 40px;
                                              text-align: center;
                                              }

                                              .footer-distributed .footer-center i{
                                                margin-left: 0;
                                                }
                                              }
  </style>

  <footer class="footer-distributed">
    <div class="footer-left">

        <div >
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4194.195716765806!2d107.62820231487291!3d-6.974022270227202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9ae7fe4fd07%3A0x5a804adec3f366b!2sGedung+Bangkit+(Rektorat)!5e0!3m2!1sid!2sid!4v1560867678496!5m2!1sid!2sid" width="500" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></iframe>
        </div>

      {{-- <p class="footer-links">
        <a href="#">Home</a>
        <a href="#">Blog</a>
        <a href="#">Pricing</a>
        <a href="#">About</a>
        <a href="#">Faq</a>
        <a href="#">Contact</a>
      </p> --}}
      <p class="footer-company-name">Telkom university &copy; 2019</p>
    </div>             <div class="footer-center">
      <div>
        <i class="fa fa-map-marker"></i>
        <p><span>Jl.Telkomunikasi No.1 Terusan Buah Batu</span> Bandung, Indonesia</p>
      </div>
      <div>
        <i class="fa fa-phone"></i>
        <p>(022) 7564 108 </p>
      </div>
      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="info@telkomuniversity.ac.id">info@telkomuniversity.ac.id</a></p>
      </div>
      <div>
        <i class="fa fa-file-text-o"></i>
        <p><a href="#">Feedback</a></p>
      </div>
    </div>
    <div class="footer-right">
      <p class="footer-company-about">
        <span>About Us</span>
        CeLoE adalah Center for e-Learning dan Open Education yang fokus dalam transformasi pendidikan dengan pemanfaatan teknologi informasi.
      </p>
      <div class="footer-icons">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-github"></i></a>
      </div>
      </div>
      </footer>
@endsection
