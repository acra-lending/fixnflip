<style>
    .contact-section .btn {
        height: 2.55rem;
        width: 10rem;
        padding-top: 0.85rem;
        float: right;
    }
    input[type="text"]#subject { display: none; }
    .contact-section .banner {
        background: rgb(138,183,233);
        background: linear-gradient(250deg, rgba(138,183,233,1) 0%, rgba(0,51,161,1) 100%);
    }
    .progress { position:relative; width:100%; background-color: var(--gray-color); height: 20px; }
    .bar { background-color: var(--primary-color); width:0%; height:40px; }
    .percent { position:absolute; display:inline-block; left:50%; top:50%; color: #fff;}
</style>
<section class="contact-section" id="contact">
    <div class="container">
        <h1 class="text-black mb-4 text-center" style="font-size: 2.75rem;">Contact Us</h1>
        <p class="text-center" style="font-size: 1.25rem;">Drop us a message and we'll get back to you.</p>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 shadow banner" 
                    style="
                        padding: 3rem; 
                        border-radius: 0.5rem 0 0 0.5rem;">
                        <ul class="text-white-75 mt-4" style="list-style-type: none;">
                            <li class="mb-3"><i class="fas fa-map-marked-alt mr-1"></i>
                                <a class="text-white-75" href="https://goo.gl/maps/F7Eikwrm2C1vbNVx9" style="text-decoration: none;" target="_blank">3 Ada Parkway<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Suite 200A<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Irvine, CA 92618</a></li>
                            <li><i class="fas fa-phone mr-1"></i>
                                <a class="text-white-75" href="tel:8888007661" style="text-decoration: none;">(888) 800-7661</a></li>
                        </ul>
                    {{-- <p class="text-white-75 mb-3"></p>
                    <p class="text-white-75">
                    </p> --}}
                </div>
                <div class="col-lg-7 shadow" 
                    style="
                        padding: 3rem; 
                        border-radius: 0 0.5rem 0.5rem 0;">
                        {{ Form::open(['action' => 'App\Http\Controllers\ContactUsController@submit', 'method' => 'POST']) }}
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <textarea rows="3" class="form-control" id="message" name="message" value="{{ old('message') }}" placeholder="Message" required></textarea>
                            <input id="subject" name="subject" type="text" value="" />
                        </div>
                        <div class="row">
                            <div class="col-12 mb-5">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                {{-- {{ Form::submit('Submit', ['class' => 'btn btn-outline-danger ']) }} --}}
                                <div class="complete"></div>
                            </div>
                        </div>
                        {{-- <button type="submit" class="btn btn-primary">Submit</button>   --}}
                    {{ Form::close()}}
                </div>
            </div>
        </div>
        <!-- <img class="img-fluid" src="assets/img/true-simple-hassle-free.jpg" alt="true, simple, hassle free" /> -->
    </div>
</section>
