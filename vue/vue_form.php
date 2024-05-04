<head>
    <script src="javascript/animation.js"></script>
    <style>
        .gradient-custom-2 {
    background: #fccb90;
    background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #a21e34, #732436);
    background: linear-gradient(to right, #ee7724, #d8363a, #a21e34, #732436);
}

@media (min-width: 768px) {
    .gradient-form {
        height: 100vh !important;
    } 
}

@media (min-width: 769px) {
    .gradient-custom-2 {
        border-top-right-radius: .3rem;
        border-bottom-right-radius: .3rem;
    }
}

#team { 
     box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;

}

    </style>
</head>


<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                    <section id="team">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">

                                <div class="text-center"> 
                                    <img src="images/nord.png" style="width: 185px;" alt="logo">
                                    <h4 class="mt-1 mb-5 pb-1">Orange team</h4>
                                </div>

                                <form method="post">
                                    <p style="text-decoration-style: double;
                                    text-align: center; font-family: script; font-size: 50px; color: darkred; text-decoration-line: underline;">CONNEXION</p>
                                    <br>
                                    <div class="form-outline mb-4">
                                        <input type="text" name="email" required="" id="form2Example11" class="form-control"
                                            placeholder="Votre adresse e-mail" />
                                    </div>

                                    <div class="form-outline mb-4"> 
                                        <input type="password" name="mdp" required="" id="form2Example22" class="form-control"
                                            placeholder="Votre mot de passe" />
                                    </div> 

                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <input class="btn btn-primary btn-block gradient-custom-2 mb-3" type="reset" name="Annuler" value="Annuler"> 
                                        <input class="btn btn-primary btn-block gradient-custom-2 mb-3" type="submit" name="Connexion" value="Connexion">
                                    </div>  
                                </form>
                            </div> 
                        </div>

                        <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                            <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                <h4 class="mb-4">Bienvenue sur notre plateforme Orange ! </h4>
                                <p style="font-size: 16px;" class="small mb-0">Nous sommes ravis de vous accueillir. Pour profiter de nos services, veuillez vous authentifier en utilisant votre adresse e-mail et votre mot de passe. Une fois connecté, vous aurez accès à un ensemble de fonctionnalités passionnantes. N'hésitez pas à explorer notre site et à découvrir tout ce que nous avons à offrir. Si vous avez des questions ou avez besoin d'assistance, n'hésitez pas à nous contacter. Merci de faire partie de la communauté Orange !</p>
                            </div> 
                        </div>
                    </div>
                </section>
                </div>
            </div>
        </div>
    </div>
</section>

