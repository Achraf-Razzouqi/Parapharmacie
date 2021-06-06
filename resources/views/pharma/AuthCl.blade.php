<html>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <body>
<form action="{{ {{ route('home.index') }} }}" method="post" >
	@csrf
	<div class="container">
		<div class="row justify-content-center align-items-center" style="height: 100vh;">
			<div class="col-4">
				<div class="card">
					<div class="card-body">
						<center>
							<h4>Nike</h4>
							<span class="text-muted">Inscrivez-vous pour passer des commades rapides en bon livraison</span>
						<br>
						Nom Complet<input type="text" class="form-control" name="nomComplet" required>
							<div class="form-group">
							Adress<input type="text" class="form-control" name="adresse"required >
								
							</div>

							Password<input type="password" class="form-control" name="password" required>
							<div class="form-group">
							Comfirm Password<input type="password" class="form-control" name="Com" required>
								
							</div>	

							<input type="file" name="file1" > {{$errors->has('image')?' has-error':''}}
							<div class="form-group">
							<input type="submit" class="form-control btn-primary"  value="S'inscrire " name="val1">
							<input type="submit" value="nvoyer" name="val2">
								<br>
								<a href="{{ url('/') }} ">Compte existe deja</a>
								<br>
	
							</div>
						
					</div>
				</div>
			</div>
		</div>
</form>
</body>
</html>