@extends('layaout.asideAdmn')
@section('user')
<section class="team-area pt-180 pb-100 section-bg" data-background="assets/img/gallery/section_bg02.png">
    <div class="container">
        <div class="row">
            @foreach($users as $user)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-team mb-30">
                    <div class="team-img">
                        <!-- You can customize this part to display user's image -->
                        <!-- Assuming you have an image field in your User model -->
                        <img src="{{ $user->image_url }}" alt="">
                        <!-- Blog Social -->
                        <ul class="team-social">
                            <!-- You can add social links here if needed -->
                            <!-- Example: -->
                            <!-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> -->
                        </ul>
                    </div>
                    <div class="team-caption">
                        <h3><a href="#">{{ $user->name }}</a></h3>
                        <p>{{ $user->role }}</p>
                        <!-- Assuming you have a role field in your User model -->
                        <!-- You can add more user details here if needed -->
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
