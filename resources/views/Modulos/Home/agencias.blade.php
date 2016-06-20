@include('Templates.Frontend.head')
@include('Templates.Frontend.header')

<div class="container">
  <div class="row">
    <div class="box">

      <h2 class="text-center ">Agencias de Turismo en Buga</h2>
      <hr>
      
      <div >
		<div class="row">
			<div class="col-md-7">
				<div class="page-header">
					<div class="blog">
						<h5>Rainbow Travel Buga</h5>
						<img src="{{asset('img/Rainbow.jpg')}}" class="img-responsive"alt="" />			
					
<!--						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
						sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
						Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper
						suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>-->
					</div>
				</div>				
			</div>
			
			
			<div class="col-md-5">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong>Datos</strong>
					</div>
					<div class="panel-body">
						<div class="media">
							<a class="media-left" href="#">
								<img src="img/b.jpg" alt="">
							</a>
							<div class="media-body">
								<h4 class="media-heading">DIRECCION:</h4>
								<p>CALLE 6 No. 16 – 21 Buga</p>
							</div>
						</div>
					</div>
					<div class="panel-body">
						<div class="media">
							<a class="media-left" href="#">
								<img src="img/a.jpg" alt="">
							</a>
							<div class="media-body">
								<h4 class="media-heading">TELEFONO:</h4>
								<p>316 618 7865 - 316 5329690</p>							
							</div>
						</div>
					</div>
					<div class="panel-body">
						<div class="media">
							<a class="media-left" href="#">
								<img src="img/b.jpg" alt="">
							</a>
							<div class="media-body">
								<h4 class="media-heading">CORREO:</h4>
								<p></p>
							</div>
						</div>
					</div>
				</div>			
			</div>				
		</div>
	</div>
     

      @include('Templates.Frontend.footer')
      @include('Templates.Frontend.foot')


