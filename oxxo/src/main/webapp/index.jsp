<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Oxxo</title>
        <link rel="icon" href="/oxxo/res/logo/oxxo-asi-de-facil.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
              integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
        <!-- Cabecera -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary" style="width: 100%;height: 100px">
            <div class="container-fluid">
                <a class="navbar-brand" href="/oxxo/contacto.jsp"><img src="/oxxo/res/logo/oxxologo.png" class="align-text-top" width="150px" height="100px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Fin de Cabecera -->
        <h1>Hello World!</h1>
        <main class="p-4 d-flex flex-column align-items-center">
		<div style="width: 40vw;">
                    <img style="width: 40vw; height:20vw;" src="/oxxo/res/aula.jpg" alt="aula" />
		</div>
		<div class="card" style="width: 40vw;">
			<div class="card-body">
				<form method="post" class="pb-4" action="/oxxo/view/index.jsp">
					<h3 class="text-center">Iniciar sesión</h3>
					<label for="username">Nombre de usuario</label>
					<input type="text" class="form-control" id="username" name="username" placeholder="Usuario" required autofocus /><br>
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Password" required /><br>
					<input type="hidden" name="action" value="login" />
					<div class="p-4 d-flex flex-ro1 justify-content-around">
						<input type="submit" value="Login" class="btn btn-primary" />
					</div>
				</form>
				<c:if test="${message != null }">
					<div class="alert alert-danger text-center" role="alert">
						${message}
					</div>
				</c:if>
			</div>
		</div>
	</main> 
        <!-- js bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" 
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" 
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    </body>
</html>
