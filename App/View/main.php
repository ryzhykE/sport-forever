<!--begin Slider-->
		<div class="bannercontainer">
			<div id="slider-revolution" class="banner">
				<ul>
					<li data-transition="slotslide-horizontal" data-slotamount="1" data-title="Nerd Wisdom"><img src="App\View\img/slider/slide01.jpg" alt="//">
						<div data-x="right" data-y="0" data-speed="1000" data-start="1000" data-easing="easeOutBack" class="caption lfr">
							<p>Найди время, а не оправдание</p><a href="#">Выбери свое направление<i class="fa fa-arrow-right"></i></a>
						</div>
					</li>
					<li data-transition="slotslide-horizontal" data-slotamount="1" data-title="Nerd Wisdom"><img src="App\View\img/slider/slide02.jpg" alt="//">
						<div data-x="right" data-y="0" data-speed="1000" data-start="1000" data-easing="easeOutBack" data-title="Nerd Wisdom" class="caption lfr">
							<p>Найди время, а не оправдание</p><a href="#">Выбери свое направление<i class="fa fa-arrow-right"></i></a>
						</div>
					</li>
					<li data-transition="slotslide-horizontal" data-slotamount="1" data-title="Nerd Wisdom"><img src="App\View\img/slider/slide03.jpg" alt="//">
						<div data-x="right" data-y="0" data-speed="1000" data-start="1000" data-easing="easeOutBack" data-title="Nerd Wisdom" class="caption lfr">
							<p>Найди время, а не оправдание</p><a href="#">Выбери свое направление<i class="fa fa-arrow-right"></i></a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!--end Slider-->
		<!--begin Content-->
		<section>
			<!--begin Features-->
			<article>
				<div class="container">
					<div class="row">
						<? if($news):?>
							<?foreach($news as $article):?>
								<div data-animation="tada" data-animation-delay="400" class="col-sm-6 col-md-4 animated">
									<div class="features-item">
										<h5><?= $article->title;?></h5></span>
										<img src="App\View\img\news\<?= $article->img;?>"
										<p><?= $article->short_descr;?></p>
										<p class="date_pub">Дата публикации: <?= $article->date_publish;?></p>
										<a href="article/id/<?= $article->id;?>" class="read">Подробнее</a>
									</div>
								</div>
							<? endforeach;?>
						<? endif;?>
					</div>
				</div>
			</article>
			<!--end Features-->
			<!--begin Home New Classes-->
			<article class="home-new-classes">
				<div class="container">
					<h3 class="title-icon">New Classes<i class="fa fa-shield"></i></h3>
					<div id="owl-classes" data-animation="bounceIn" data-animation-delay="400" class="classes-carousel animated">
						<figure class="owl-classes-item image-over"><img src="App\View\img/classes/class01.jpg" alt="//"><a href="#"></a>
							<figcaption>
								<p>Pilates</p>
							</figcaption>
						</figure>
						<figure class="owl-classes-item image-over"><img src="App\View\img/classes/class02.jpg" alt="//"><a href="#"></a>
							<figcaption>
								<p>Pilates</p>
							</figcaption>
						</figure>
						<figure class="owl-classes-item image-over"><img src="App\View\img/classes/class03.jpg" alt="//"><a href="#"></a>
							<figcaption>
								<p>Pilates</p>
							</figcaption>
						</figure>
						<figure class="owl-classes-item image-over"><img src="App\View\img/classes/class04.jpg" alt="//"><a href="#"></a>
							<figcaption>
								<p>Pilates</p>
							</figcaption>
						</figure>
						<figure class="owl-classes-item image-over"><img src="App\View\img/classes/class05.jpg" alt="//"><a href="#"></a>
							<figcaption>
								<p>Pilates</p>
							</figcaption>
						</figure>
						<figure class="owl-classes-item image-over"><img src="App\View\img/classes/class06.jpg" alt="//"><a href="#"></a>
							<figcaption>
								<p>Pilates</p>
							</figcaption>
						</figure>
						<figure class="owl-classes-item image-over"><img src="App\View\img/classes/class04.jpg" alt="//"><a href="#"></a>
							<figcaption>
								<p>Pilates</p>
							</figcaption>
						</figure>
						<figure class="owl-classes-item image-over"><img src="App\View\img/classes/class05.jpg" alt="//"><a href="#"></a>
							<figcaption>
								<p>Pilates</p>
							</figcaption>
						</figure>
						<figure class="owl-classes-item image-over"><img src="App\View\img/classes/class02.jpg" alt="//"><a href="#"></a>
							<figcaption>
								<p>Pilates</p>
							</figcaption>
						</figure>
					</div>
				</div>
			</article>
			<!--end Home New Classes-->
			<!--begin Timetable-->
			<article class="timetable">
				<div class="container">
					<h3 class="title-icon">Timetable<i class="fa fa-clock-o"></i></h3>
					<div data-animation="fadeIn" data-animation-delay="400" class="timetable-responsive animated">
						<table>
							<thead>
								<tr>
									<th>Time</th>
									<th>Monday</th>
									<th>Tuesday</th>
									<th>Wednesday</th>
									<th>Thursday</th>
									<th>Friday</th>
									<th>Saterday</th>
									<th>Sunday</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th>06:00-07:00 AM</th>
									<td><a href="#" title="Cardio training meets inspired playlist, with a variety of drills." class="pilates">Pilates</a></td>
									<td><a href="#" title="Cardio training meets inspired playlist, with a variety of drills." class="choreo">Choreography</a></td>
									<td> </td>
									<td><a href="#" title="Cardio training meets inspired playlist, with a variety of drills." class="running">Running</a></td>
									<td><a href="#" title="Cardio training meets inspired playlist, with a variety of drills." class="choreo">Choreography</a></td>
									<td><a href="#" title="Cardio training meets inspired playlist, with a variety of drills." class="running">Running</a></td>
									<td> </td>
								</tr>
								<tr>
									<th>08:00-09:00 AM</th>
									<td><a href="#" title="Cardio training meets inspired playlist, with a variety of drills." class="crossfit">Crossfit</a></td>
									<td> </td>
									<td><a href="#" title="Cardio training meets inspired playlist, with a variety of drills." class="crossfit">Crossfit</a></td>
									<td> </td>
									<td> </td>
									<td><a href="#" title="Cardio training meets inspired playlist, with a variety of drills." class="pilates">Pilates</a></td>
									<td> </td>
								</tr>
								<tr>
									<th>09:00-17:00 AM</th>
									<td><a href="#" title="Cardio training meets inspired playlist, with a variety of drills." class="pilates">Pilates</a></td>
									<td> </td>
									<td><a href="#" title="Cardio training meets inspired playlist, with a variety of drills." class="choreo">Choreography</a></td>
									<td> </td>
									<td> </td>
									<td><a href="#" title="Cardio training meets inspired playlist, with a variety of drills." class="choreo">Choreography</a></td>
									<td> </td>
								</tr>
								<tr>
									<th>09:00-07:00 AM</th>
									<td> </td>
									<td> </td>
									<td><a href="#" title="Cardio training meets inspired playlist, with a variety of drills." class="crossfit">Crossfit</a></td>
									<td><a href="#" title="Cardio training meets inspired playlist, with a variety of drills." class="running">Running</a></td>
									<td><a href="#" title="Cardio training meets inspired playlist, with a variety of drills." class="yoga">Yoga</a></td>
									<td><a href="#" title="Cardio training meets inspired playlist, with a variety of drills." class="yoga">Yoga</a></td>
									<td> </td>
								</tr>
								<tr>
									<th>08:00-09:00 AM</th>
									<td> </td>
									<td> </td>
									<td> </td>
									<td> </td>
									<td><a href="#" title="Cardio training meets inspired playlist, with a variety of drills." class="crossfit">Crossfit</a></td>
									<td> </td>
									<td><a href="#" title="Cardio training meets inspired playlist, with a variety of drills." class="crossfit">Crossfit</a></td>
								</tr>
								<tr>
									<th>09:00-17:00 AM</th>
									<td><a href="#" title="Cardio training meets inspired playlist, with a variety of drills." class="running">Running</a></td>
									<td> </td>
									<td> </td>
									<td><a href="#" title="Cardio training meets inspired playlist, with a variety of drills." class="pilates">Pilates</a></td>
									<td> </td>
									<td><a href="#" title="Cardio training meets inspired playlist, with a variety of drills." class="yoga">Yoga</a></td>
									<td> </td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</article>
			<!--end Timetable-->
			<!--begin Pricong Tables-->
			<article class="pricing-tables">
				<div class="container">
					<h3 class="title-icon">Pick a Plan<i class="fa fa-credit-card"></i></h3>
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<ul data-animation="flipInY" data-animation-delay="400" class="plan-item animated">
								<li>1 Month<small>$19/month</small></li>
								<li>Personal Trainer</li>
								<li>One Workout plan</li>
								<li>Group fitness</li>
								<li>150 hours of education</li>
								<li><a href="#" class="btn btn-plan"> <i class="fa fa-shopping-cart"></i>Buy Now</a></li>
							</ul>
						</div>
						<div class="col-md-3 col-sm-6">
							<ul data-animation="flipInY" data-animation-delay="400" class="plan-item animated">
								<li>2 Month<small>$19/month</small></li>
								<li>Personal Trainer</li>
								<li>One Workout plan</li>
								<li>Group fitness</li>
								<li>150 hours of education</li>
								<li><a href="#" class="btn btn-plan"> <i class="fa fa-shopping-cart"></i>Buy Now</a></li>
							</ul>
						</div>
						<div class="col-md-3 col-sm-6">
							<ul data-animation="flipInY" data-animation-delay="400" class="plan-item animated">
								<li>6 Month<small>$19/month</small></li>
								<li>Personal Trainer</li>
								<li>One Workout plan</li>
								<li>Group fitness</li>
								<li>150 hours of education</li>
								<li><a href="#" class="btn btn-plan"> <i class="fa fa-shopping-cart"></i>Buy Now</a></li>
							</ul>
						</div>
						<div class="col-md-3 col-sm-6">
							<ul data-animation="flipInY" data-animation-delay="400" class="plan-item animated">
								<li>12 Month<small>$19/month</small></li>
								<li>Personal Trainer</li>
								<li>One Workout plan</li>
								<li>Group fitness</li>
								<li>150 hours of education</li>
								<li><a href="#" class="btn btn-plan"> <i class="fa fa-shopping-cart"></i>Buy Now</a></li>
							</ul>
						</div>
					</div>
				</div>
			</article>
			<!--end Pricong Tables-->
			<div class="partners">
				<div class="container">
				<h4>Наши партнеры</h4>
					<div id="owl-partners"><a href="#">
							<figure class="partners-item"><img src="App\View\img/partners/partners01.jpg" alt="//"></figure></a><a href="#">
							<figure class="partners-item"><img src="App\View\img/partners/partners02.jpg" alt="//"></figure></a><a href="#">
							<figure class="partners-item"><img src="App\View\img/partners/partners03.jpg" alt="//"></figure></a><a href="#">
							<figure class="partners-item"><img src="App\View\img/partners/partners04.jpg" alt="//"></figure></a><a href="#">
							<figure class="partners-item"><img src="App\View\img/partners/partners05.jpg" alt="//"></figure></a><a href="#">
							<figure class="partners-item"><img src="App\View\img/partners/partners06.jpg" alt="//"></figure></a><a href="#">
							<figure class="partners-item"><img src="App\View\img/partners/partners04.jpg" alt="//"></figure></a><a href="#">
							<figure class="partners-item"><img src="App\View\img/partners/partners05.jpg" alt="//"></figure></a><a href="#">
							<figure class="partners-item"><img src="App\View\img/partners/partners02.jpg" alt="//"></figure></a>
					</div>
				</div>
			</div>
		</section>
		<!--end Content-->