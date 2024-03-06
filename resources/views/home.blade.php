@extends('layaout')


@section('home')
<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="r">
                <div class="hero-image">
                    <img src="url_de_votre_image" alt="Image Hero" class="img-fluid">
                </div>
                <div class="hero-text">
                    <h1>Bienvenue sur notre site de gestion des événements</h1>
                    <p>Découvrez nos derniers événements et inscrivez-vous dès aujourd'hui pour participer !</p>
                </div>
            </div>
        </div>
    </div>
</div>



<div id="container">

	<div class="product-details">

	<h1>CHRISTMAS TREE</h1>
	<span class="hint-star star">
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star" aria-hidden="true"></i>
		<i class="fa fa-star-o" aria-hidden="true"></i>
	</span>
    <div class="lorem">
			<p class="information">" Let's spread the joy , here is Christmas , the most awaited day of the year.Christmas Tree is what one need the most. Here is the correct tree which will enhance your Christmas.</p>

</div>

<div class="control">

	<button class="btn">
   <span class="shopping-cart"><i class="fa-chevron-circle-right" aria-hidden="true"></i></span>
   <span class="buy">Détails</span>
 </button>

</div>

</div>

<div class="product-image">

	<img src="https://images.unsplash.com/photo-1606830733744-0ad778449672?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mzl8fGNocmlzdG1hcyUyMHRyZWV8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">


<div class="info">
	<h2> Description</h2>
	<ul>
		<li><strong>Height : </strong>5 Ft </li>
		<li><strong>Shade : </strong>Olive green</li>
		<li><strong>Decoration: </strong>balls and bells</li>
		<li><strong>Material: </strong>Eco-Friendly</li>

	</ul>
</div>
</div>

</div>


@endsection
