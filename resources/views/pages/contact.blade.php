<x-app-layout>
    <div class="breadcrumb-area bg-gray">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="{{ route('homepage') }}">HOME</a></li>
                    </li>
                    <li class="active">contact</li>
                </ul>
            </div>
        </div>
    </div>
<div class="contact-area pt-115 pb-120">
    <div class="container">
        <div class="contact-info-wrap-3 pb-85">
            <h3>contact info</h3>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="single-contact-info-3 text-center mb-30">
                        <i class="icon-location-pin "></i>
                        <h4>our address</h4>
                        <p>39A-2 Block D Plaza Sinar Jalan 6/38D Taman Sri Sinar Segambut </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single-contact-info-3 extra-contact-info text-center mb-30">
                        <ul>
                            <li><i class="icon-screen-smartphone"></i> 012-2035268  </li>
                            <li><i class="icon-envelope "></i> <a href="#"> uasmail2u@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single-contact-info-3 text-center mb-30">
                        <i class="icon-clock "></i>
                        <h4>openning hour</h4>
                        <p>Monday - Saturday. 9:00am - 6:00pm </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="get-in-touch-wrap">
            <h3>Get In Touch</h3>
            <div class="contact-from contact-shadow">
                <form id="contact-form" action="assets/mail-php/mail.php" method="post">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <input name="name" type="text" placeholder="Name">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <input name="email" type="email" placeholder="Email">
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <input name="subject" type="text" placeholder="Subject">
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <textarea name="message" placeholder="Your Message"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <button class="submit" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
                <p class="form-messege"></p>
            </div>
        </div>
        <div class="contact-map pt-120">
            <iframe class="map-size"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.6379664789374!2d101.6527112!3d3.1895088999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc48824452ba29%3A0xfd9b88ed2dfa66ec!2swww.uas.com.my%20Printer%20Service%20Centre!5e0!3m2!1sms!2smy!4v1742543903437!5m2!1sms!2smy">
            </iframe>
        </div>
    </div>
</div>
</x-app-layout>